@include('include.header')

<body>

    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->

    <!-- page container area start -->
    <div class="page-container">

        <!-- sidebar menu area start -->
        @include('include.sidebar')
        <!-- sidebar menu area end -->

        <!-- main content area start -->
        <div class="main-content">

            <!-- header area start -->
            @include('include.header_area')
            <!-- header area end -->

            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Order</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="dashboard.html">Home</a></li>
                                <li><span>Order</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Salim Kasim<i
                                    class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Message</a>
                                <a class="dropdown-item" href="#">Settings</a>
                                <a class="dropdown-item" href="#">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->

            <div class="main-content-inner">
                <div class="row">
                    <!-- Buttons Items start -->
                    <!-- tab start -->
                    <div class="col-lg-12 mt-5">
                        <div class="card">
                            <ul class="nav nav-pills nav-fill" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                                        role="tab" aria-controls="pills-home" aria-selected="true">New</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill"
                                        href="#pills-profile" role="tab" aria-controls="pills-profile"
                                        aria-selected="false">Preparing</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-completed-tab" data-toggle="pill"
                                        href="#pills-completed" role="tab" aria-controls="pills-completed"
                                        aria-selected="false">Completed</a>
                                </li>
                            </ul>
                            <div class="card-body" style="background-color: #F7F7F7;">
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                        aria-labelledby="pills-home-tab">
                                        <div class="row">
                                            @foreach($orders as $order)
                                            <div class="col-lg-3 mt-2">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="header-title">Order {{$order->O_Name}}</h4>
                                                        <div class="single-table">
                                                            <div class="table-responsive">
                                                                <table class="table text-center">
                                                                    <thead class="text-uppercase">
                                                                        <tr class>
                                                                            <th colspan="2" style="text-align:center">
                                                                                {{$order->O_Type}}</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>Time</td>
                                                                            <td>{{$order->created_at}}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Total Item</td>
                                                                            <td>1</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Amount</td>
                                                                            <td>RM {{ number_format((float) $order->O_Total_Price, 2, '.', '') }}</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="button" class="btn btn-success editbtn" data-toggle="modal"
                                                        data-target="#editModal{{$order->id}}">
                                                        View Order
                                                    </button>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>

                                    </div>
                                    <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                        aria-labelledby="pills-profile-tab">
                                       
                                    </div>
                                    <div class="tab-pane fade" id="pills-completed" role="tabpanel"
                                        aria-labelledby="pills-completed-tab">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- tab end -->
              
                    @foreach($orders as $Order)
                    @include('layouts.editOrder')
                    @endforeach
                    <!-- ********************* -->
                </div>
            </div>
        </div>
    </div>
    <!-- main content area end -->

    




    <!-- footer area start-->
    @include('include.footer')
    <!-- footer area end-->
    </div>
    <!-- page container area end -->

    @include('include.script')


</body>

</html>