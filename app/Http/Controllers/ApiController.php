<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Carbon\Carbon;
use App\User;
use App\Transaction;
use App\Card;


class ApiController extends Controller
{
	use AuthenticatesUsers;

	public function posTransaction(Request $request)
	{

		$card = Card::find($request->card_id);
		if ($card->existing_balance < $request->amount) {
			return response()->json([
			 	'success' => false,
			 	'messgae' => 'Not enough credits'
			 	], 400); 
		}

		$transaction = new Transaction;
		$transaction->transaction_code = 'sample-code';
		$transaction->card_id = $request->card_id;
		$transaction->merchant_id = $request->merchant_id;
		$transaction->transaction_type_id = $request->transaction_type_id;
		$transaction->amount = $request->amount;
		$transaction->save();

		$card->existing_balance -= $request->amount;
		$card->save();
		return response()->json([
		 	'success' => true,
		 	'messgae' => 'Transaction was successfull',
		 	'transaction' => $transaction
		 	], 200); 
	}

}
