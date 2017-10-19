<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\User;
use App\Transaction;
use Carbon\Carbon;

class CheckUsersDue extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'credit:check-dues';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check users due for a month';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info('[' . Carbon::now() . ']');
        $this->info("Checking user due....");
        $this->info("");

        $ctr = 0;
        $today = Carbon::now(); 
        $transactions = Transaction::
                        whereMonth('created_at','=', date('m',strtotime("-1 month", strtotime($today))))
                        ->whereYear('created_at','=', date('Y',strtotime($today)))
                        ->select('*',\DB::raw('SUM(amount) due_by_day'),\DB::raw('DATE_FORMAT(created_at, "%M %d, %Y") day'))
                        ->groupBy('day')
                        ->get()
                        ->load('card.holder');
        $dates = $transactions->pluck('created_at');
        $card_ids = $transactions->pluck('card_id');
        $diff_days = 0 ;
        $average_daily_balance = 0.00 ;
        foreach ($transactions as $transaction) {
            if ($ctr) {
                if ($transaction->card_id != $card_ids[$ctr-1]) {
                    $diff_days = 0 ;
                    $average_daily_balance = 0.00 ;
                }
                if ($ctr != $transactions->count()-1) {
                    $diff_days = $dates[$ctr+1]->diffInDays($dates[$ctr]);
                }else{
                    $diff_days = days_in_month($dates[$ctr]->month,$dates[$ctr]->year) - $dates[$ctr]->day;
                }
                $average_daily_balance = $diff_days * $transaction->due_by_day / days_in_month($dates[$ctr]->month,$dates[$ctr]->year);
            }else{
                $diff_days = $dates[$ctr+1]->diffInDays($dates[$ctr]);
                $average_daily_balance = $diff_days * $transaction->due_by_day / days_in_month($dates[$ctr]->month,$dates[$ctr]->year);
            }
            $this->info("Transaction : card_id - ".$transaction->card_id." | ".$transaction->due_by_day." | ".$transaction->card->holder->name." | ".$transaction->created_at." | ".$diff_days." | ".$average_daily_balance);
            $ctr++;
        }
        
        $this->info("");
        $this->info("Total due changes: " . $ctr);
        $this->info("");


    }

    private function days_in_month($month, $year) 
    { 
        // calculate number of days in a month 
        return $month == 2 ? ($year % 4 ? 28 : ($year % 100 ? 29 : ($year % 400 ? 28 : 29))) : (($month - 1) % 7 % 2 ? 30 : 31); 
    }
}
