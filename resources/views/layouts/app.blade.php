<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Credibleit') }}</title>

    <!-- Styles -->

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <!-- icons -->
    <link rel="stylesheet" href="{{ asset('css/icons.css') }}">                                         

    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-grid.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-reboot.css') }}">

    <!-- datatables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.0/css/responsive.bootstrap4.min.css">

    <!-- datepicker s-->
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.standalone.css') }}">
    @yield('style')
</head>
<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Add your site or application content here -->
    <div class="container">
      <div class="row">
        <div class="col-12">
          <header id="header">
            <div id="nav-icon1" class="hide-lg-up float-left">
              <span></span>
              <span></span>
              <span></span>
            </div>

            <ul class="top-links mb-2 float-right">
            <li class="top-links-item pl-3" >
              <a href="#" id="feedback" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="nc-icon nc-ic_feedback_48px"></i></a>
              <div class="dropdown-menu dropdown-menu-right notification border-0" aria-labelledby="feedback">
                <div class="notification-body">
                  <form>
                    <div class="form-group">
                      <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Feedback about our service"></textarea>
                    </div>
                    <div class="form-group mb-0">
                      <button type="button" class="btn btn-secondary btn-sm">Cancel</button> <button type="submit" class="btn btn-primary btn-sm">Send Feedback</button>
                    </div>
                  </form>
                </div>
              </div>
            </li>
            <li class="top-links-item pl-3" >
              <a href="#" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="nc-icon nc-ic_add_alert_48px"></i><span class="badge badge-danger">3</span></a>
              <div class="dropdown-menu dropdown-menu-right notification border-0" aria-labelledby="notification">
                  <div class="notification-header">Notification</div>
                  <div class="notification-body">
                    <ul class="notification-list p-0">
                      <li class="notification-list-item py-2">You have purchased an item from {{Merchant}} worth {{price}}</li>
                      <li class="notification-list-item py-2">You have purchased an item from {{Merchant}} worth {{price}}</li>
                      <li class="notification-list-item py-2">You have purchased an item from {{Merchant}} worth {{price}}</li>
                    </ul>
                  </div>
              </div>
            </li>
            <li class="top-links-item pl-3" >
              <a href="#" id="settings" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="nc-icon nc-ic_settings_applications_48px"></i></a>
              <div class="dropdown-menu dropdown-menu-right border-0" aria-labelledby="settings">
                <a class="dropdown-item" href="#">Change Password</a>
              </div>
            </li>
            <li class="top-links-item pl-3"><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
          </ul>
        </header>
        </div>
      </div>
      <div class="row">
        <nav id="sidebar" class=" rounded col-3">
            <!-- Logo -->
            <div class="logo text-center  py-4 px-2">
              <a href="index.html"><img src="img/logo.svg"></a>
            </div>

            <!-- User Info -->
            <div class="logged-user py-4 px-2">
              <div class="logged-user-avatar m-auto ">
                <img alt="" src="img/avatar1.jpg" class="rounded-circle">
              </div>
              <div class="logged-user-info text-center mt-1">
                <p class="logged-user-info-name mb-0 ">Paul Liddaue</p>
                <p class="logged-user-info-role text-uppercase">Card Holder</p>
              </div>
            </div>

            <!-- Main Menu -->
            <div class="main-menu py-5 px-2">
              <ul class="main-menu-ul px-4">
                <li class="main-menu-li  py-3"><a href="#"><i class="nc-icon nc-ic_dashboard_48px align-middle"></i> Summary</a></li>
                <li class="main-menu-li py-3"><a href="#"><i class="nc-icon nc-ic_import_export_48px align-middle"></i>Transactions</a></li>
                <li class="main-menu-li py-3"><a href="#"><i class="nc-icon nc-ic_library_books_48px align-middle"></i>Statement of Acounts</a></li>
                <li class="main-menu-li py-3"><a href="#"><i class="nc-icon nc-ic_attach_money_48px align-middle"></i>Pay Bills</a></li>
                <li class="main-menu-li py-3 last"><a href="#"><i class="nc-icon nc-ic_face_48px align-middle"></i>Enroll Supplementary Card</a></li>
                <li class="main-menu-li py-3 last"><a href="#"><i class="nc-icon nc-ic_face_48px align-middle"></i>Request Collector</a></li>
              </ul>
            </div>

            <!-- Sidebar Footer -->
            <div class="sidebar-footer py-4 px-2 text-center">
              Copyright ©1999-2017 CoopPay™. All rights reserved.
            </div>

        </nav>

        <!-- Page Content -->
        <div id="content" class=" col-md-12 col-lg-9">
            <!-- We'll fill this with dummy content -->

            <div class="row">

              <div class="col-sm-12 col-md-12 col-lg-6">

                <div class="card border-0 mb-3 ">
                  <div class="card-header">
                    Card Details
                  </div>
                  <div class="card-body">
                    <ul class="card-list">
                      <li class="card-list-item">Card #<span class="card-list-item-value">1234-1234-1234-1234</span></li>
                      <li class="card-list-item">Expiry<span class="card-list-item-value">2/22</span></li>
                    </ul>
                  </div>
                </div>

              </div>

              <div class="col-sm-12 col-md-12 col-lg-6">

                <div class="card border-0 mb-3">
                  <div class="card-header">
                    Card Limit
                  </div>
                  <div class="card-body">
                    <ul class="card-list">
                      <li class="card-list-item">Credit Card Limit<span class="card-list-item-value">10,000</span></li>
                      <li class="card-list-item">Installment Limit<span class="card-list-item-value">10,000</span></li>
                    </ul>
                  </div>
                </div>

              </div>

            </div>

            <div class="row">

              <div class="col-sm-12 col-md-12 col-lg-6">

                <div class="card border-0 mb-3">
                  <div class="card-header">
                    Billing Period <span class="card-header-number">#2</span>
                  </div>
                  <div class="card-body">
                    <ul class="card-list">
                      <li class="card-list-item">Date<span class="card-list-item-value">01/01/17 to 01/31/17</span></li>
                    </ul>
                  </div>
                </div>

              </div>

              <div class="col-sm-12 col-md-12 col-lg-6">

                <div class="card border-0 mb-3">
                  <div class="card-header">
                    Payment Due Date
                  </div>
                  <div class="card-body">
                    <ul class="card-list">
                      <li class="card-list-item">Date<span class="card-list-item-value">10/26/12</span></li>
                    </ul>
                  </div>
                </div>

              </div>

            </div>

            <div class="row ">

              <div class="col-sm-12 col-md-12 col-lg-6">

                  <div class="card border-0 mb-3">
                    <div class="card-header">
                      Debits
                    </div>
                    <div class="card-body">
                      <ul class="card-list">
                        <!-- <li class="card-list-item">Previous Balance<span class="card-list-item-value">8,278.70</span></li> -->
                        <li class="card-list-item">Purchase/Debits<span class="card-list-item-value">12,728.36</span></li>
                        <li class="card-list-item">Finance Charge<span class="card-list-item-value">0.00</span></li>
                        <li class="card-list-item">Cash Advance Fee<span class="card-list-item-value">0.00</span></li>
                        <li class="card-list-item">Late Fees<span class="card-list-item-value">0.00</span></li>
                      </ul>
                    </div>
                  </div>

              </div>

              <div class="col-sm-12 col-md-12 col-lg-6">

                  <div class="card border-0  mb-3">
                    <div class="card-header">
                      Credits
                    </div>
                    <div class="card-body">
                      <ul class="card-list">
                        <li class="card-list-item">Adjustments/Payments<span class="card-list-item-value">0.00</span></li>
                      </ul>
                    </div>
                  </div>

                  <div class="card border-0 mb-12">
                    <div class="card-header">
                      Amount
                    </div>
                    <div class="card-body">
                      <ul class="card-list">
                        <li class="card-list-item">Total Amount Due<span class="card-list-item-value">0.00</span></li>
                        <li class="card-list-item">Minimum Amount Due<span class="card-list-item-value">0.00</span></li>
                      </ul>
                    </div>
                  </div>

              </div>

            </div>
        </div>

      </div>
      <div class="overlay"></div>
    </div>

    <!-- Scripts -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.5/umd/popper.js"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

    <!-- datatables -->
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.0/js/responsive.bootstrap4.min.js"></script>

    <!-- DatePicker -->
    <script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>

    <!-- sorting month mm/dd/yy -->
    <script src="https://cdn.datatables.net/plug-ins/1.10.16/sorting/date-uk.js"></script>

    <!-- Nice Scroll Js CDN -->
    <script src="{{ asset('js/jquery.nicescroll.min.js') }}"></script>

    <!-- bootstrap -->
    <script src="{{ asset('js/bootstrap.js') }}"></script>

    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    @yield('script')

</body>
</html>
