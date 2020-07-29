<html class="no-js" lang="en">
<head>
    <title>Receipt Genration</title>
    <?php include 'header.php';?>
    <?php 
        $item_id=$_GET['item_id'];
        $cname=$_GET['cname'];
        $cphone=$_GET['cphone'];
        $custid=$_GET['custid'];
    ?>
</head>
<body onload="recipt_genration()">
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="index.html"><img class="main-logo" src="<?php echo base_url();?>img/logo/logo.png" alt="" /></a>
                <strong><a href="index.html"><img src="<?php echo base_url();?>img/logo/logosn.png" alt="" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li class="active">
                            <a title="Landing Page" href="<?php echo base_url();?>/Home/index2" aria-expanded="false">
                                <span class="educate-icon educate-home icon-wrap" style="color: black" aria-hidden="true"></span> 
                                <span class="mini-click-non" style="color: black">Dashboard</span>
                            </a>
                        </li>
                        <li class="active">
                            <a title="Landing Page" href="<?php echo base_url();?>/Home/add_customer" aria-expanded="false">
                                <span class="educate-icon educate-professor icon-wrap" style="color: black" aria-hidden="true"></span> 
                                <span class="mini-click-non" style="color: black">Customer Details</span>
                            </a>
                        </li>
                        <li>
                            <a title="Landing Page" href="<?php echo base_url();?>/Home/recipt_genration" aria-expanded="false">
                                <span class="educate-icon educate-data-table  icon-wrap" aria-hidden="true"></span>
                                <span class="mini-click-non" style="color: black"><strong>Receipt Genration</strong></span>
                            </a>
                        </li>
                         <li>
                            <a title="Landing Page" href="<?php echo base_url();?>/Home/metal_cost" aria-expanded="false"><span class="educate-icon educate-department icon-wrap" aria-hidden="true"></span> <span class="mini-click-non" style="color: black">Metal Cost</span></a>
                        </li>
                         <li>
                            <a title="Landing Page" href="<?php echo base_url();?>/Home/calculator" aria-expanded="false"><span class="educate-icon educate-apps icon-wrap" aria-hidden="true"></span> <span class="mini-click-non" style="color: black">Calculator</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="<?php echo base_url();?>/Home/index2"><img class="main-logo"  alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                    <i class="educate-icon educate-nav"></i>
                                                </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                            <ul class="nav navbar-nav mai-top-nav">
                                                <li class="nav-item"><a href="<?php echo base_url();?>/Home/index2" class="nav-link">Home</a>
                                                </li>
                                                <li class="nav-item"><a href="<?php echo base_url();?>/Home/add_customer" class="nav-link">Customer Details</a>
                                                </li>
                                                <li class="nav-item"><a href="?php echo base_url();?>/Home/Receipt_genration" class="nav-link">Receipt Genration</a>
                                                </li>
                                                <li class="nav-item"><a href="<?php echo base_url();?>/Home/metal_cost" class="nav-link">Metal Cost</a>
                                                </li>
                                                <li class="nav-item"><a href="<?php echo base_url();?>/Home/calculator" class="nav-link">Calculator</a>
                                                </li>   
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-bell" aria-hidden="true"></i><span class="indicator-nt"></span></a>
                                                    <div role="menu" class="notification-author dropdown-menu animated zoomIn">
                                                        <div class="notification-single-top">
                                                            <h1>Notifications</h1>
                                                        </div>
                                                        <ul class="notification-menu">
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="educate-icon educate-checked edu-checked-pro admin-check-pro" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Advanda Cro</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="fa fa-cloud edu-cloud-computing-down" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Sulaiman din</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="fa fa-eraser edu-shield" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Victor Jara</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="fa fa-line-chart edu-analytics-arrow" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Victor Jara</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="notification-view">
                                                            <a href="#">View All Notification</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                            <span class="admin-name">Admin</span>
                                                            <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                                        </a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="#"><span class="edu-icon edu-home-admin author-log-ic"></span>My Account</a>
                                                        </li>
                                                        <li><a href="<?php echo base_url();?>/Home/index"><span class="edu-icon edu-locked author-log-ic"></span>Log Out</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a href="<?php echo base_url();?>/Home/index2">Dashboard</a></li>
                                        <li><a href="<?php echo base_url();?>/Home/add_customers">Customer Details</a></li>
                                        <li><a href="<?php echo base_url();?>/Home/recipt_genration">Receipt Genration</a></li>
                                        <li><a href="<?php echo base_url();?>/Home/metal_cost">Metal Cost</a></li>
                                        <li><a href="<?php echo base_url();?>/Home/calculator">CalCulator</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br><br>
        <div class="advanced-form-area mg-b-15">
            <div class="container-fluid" >
                <div class="row" >
                    <div class="col-lg-12  col-md-12 col-sm-12  col-xs-12" >
                        <div class="sparkline10-list mg-tb-30 responsive-mg-t-0 table-mg-t-pro-n dk-res-t-pro-0 nk-ds-n-pro-t-0">
                            <div class="sparkline10-hd">
                                <div class="main-sparkline10-hd">
                                    <span style="font-size:22px;">Receipt Genration</span>
                                    <span><button class="btn pull-right btn-danger" onclick="recipt();" >Back</button></span>
                                </div>
                            </div>
                            <br>
                            <div class="sparkline10-graph">
                                <div class="input-knob-dial-wrap">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                                <div class="form-group data-custon-pick" id="data_2">
                                                    <label><strong>Date</strong></label>
                                                    <div class="input-group date">
                                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                        <input type="text" class="form-control" id="today">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                                <div class="form-group-inner">
                                                    <label>Customer Name</label>
                                                    <input type="text" id="customer_name" class="form-control" placeholder="Customer Name" value="<?php echo $cname;?>" disabled/>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                <div class="form-group-inner">
                                                    <label>Phone No</label>
                                                    <input type="text" id="customer_phone" class="form-control" placeholder="Phone No" value="<?php echo $cphone;?>"disabled/>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                <div class="form-group-inner">
                                                    <label>Item Id</label>
                                                    <input type="text" id="item_id" class="form-control" placeholder="Item id" value="<?php echo $item_id;?>" disabled/>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                <div class="form-group-inner">
                                                      <button class="btn btn-block btn-warning" style="background-color:black; color: white" onclick="genrate(<?php echo $custid;?>);" ><strong>See Details</strong></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sparkline13-graph">
                                        <div class="datatable-dashv1-list custom-datatable-overright">
                                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                                data-cookie-id-table="saveId" data-click-to-select="true" data-toolbar="#toolbar">
                                                <thead>
                                                    <tr>
                                                        <th data-field="state" data-checkbox="true"></th>
                                                        <th data-field="email" data-editable="true">Transaction Date</th>
                                                        <th data-field="name" data-editable="true">Loan Amount</th>
                                                        <th data-field="task" data-editable="true">Day Interval</th>
                                                        <th data-editable="true">Description</th>
                                                        <th data-editable="true">Status</th>
                                                        <th data-field="action">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php foreach ($data1 as $key => $value) {  ?>
                                                 <tr>
                                                    <td></td>
                                                    <td><?php echo $value['tran_date'];?></td>
                                                    <td><?php echo $value['loan_amt'];?></td>
                                                    <td><?php echo $value['day_interval'];?></td>
                                                    <td><?php echo $value['description'];?></td>
                                                    <td><?php echo $value['status'];?></td>
                                                    <td>
                                                        <button id="<?php echo $value['loan_id'];?>"class="btn btn-primary btn-block" style="background-color: blue;"  onclick="select_loanid(<?php echo $value['loan_id'];?>);">Select</button> 
                                                    </td>
                                                </tr>
                                                <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12  col-md-12 col-sm-12  col-xs-12">
                        <div class="sparkline10-list mg-tb-30 responsive-mg-t-0 table-mg-t-pro-n dk-res-t-pro-0 nk-ds-n-pro-t-0">
                            <br>
                            <div class="sparkline10-graph">
                                <div class="input-knob-dial-wrap">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-lg-2  col-md-2 col-sm-2 col-xs-2">
                                                <div class="form-group data-custon-pick" id="data_2">
                                                    <label><strong> Opening Date</strong></label>
                                                    <div class="input-group date">
                                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                        <input type="text" class="form-control" id="opntoday">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                <div class="form-group-inner">
                                                    <label>Moths/Dates</label>
                                                    <input type="number" class="form-control"  id="date_diff" placeholder="Date Difference" disabled="" />
                                                </div>
                                            </div>
                                            <div class="col-lg-2  col-md-2 col-sm-2 col-xs-2">
                                                <div class="form-group data-custon-pick" id="data_2">
                                                    <label><strong>Today's Date</strong></label>
                                                    <div class="input-group date">
                                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                        <input type="text" class="form-control" onchange="calculate_date();" id="today2">
                                                    </div>
                                                </div>
                                            </div>
                                             <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                <div class="form-group-inner">
                                                    <label>Day Interval</label>
                                                    <input type="number" id="1" class="form-control" placeholder="Years Held"/>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                <div class="form-group-inner">
                                                    <label>Year</label>
                                                    <input type="number" id="year" class="form-control" placeholder="Years Held" disabled/>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                <div class="form-group-inner">
                                                    <label>Interval</label>
                                                    <input type="number" id="intv" class="form-control" placeholder="Interval" disabled/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                <div class="form-group-inner">
                                                    <label>Day</label>
                                                    <input type="number" id="day" class="form-control" placeholder="Total days" disabled/>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                <div class="form-group-inner">
                                                    <label>Rate of Interest</label>
                                                    <input type="number" class="form-control"  id="rte" placeholder="Rate of Interest" value="1.5"  oninput="calculate_date();" />
                                                </div>
                                            </div>
                                            <div class="col-lg-2col-md-2col-sm-2 col-xs-2">
                                                <div class="form-group-inner">
                                                    <label>Amount</label>
                                                    <input type="number" class="form-control"  id="amt" placeholder="Amount" oninput="calculate_date();" />
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                <div class="form-group-inner">
                                                    <label>Weight</label>
                                                    <input type="number" class="form-control"  id="weight" placeholder="Weight" />
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-sm-2  col-xs-2 ">
                                                <div class="form-group-inner">
                                                    <label>Interest Amount</label>
                                                    <input type="number" id="int_amt" class="form-control" placeholder="Interest Amount"/>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                <div class="form-group-inner">
                                                    <label>Total Due</label>
                                                    <input type="number" id="total_due" class="form-control" placeholder="Total Due"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 col-md-6 col-lg-6 col-xs-6">
                                                <br>
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                                    <div class="form-group-inner">
                                                        <label>Security</label>
                                                        <input type="text" class="form-control"  id="secur" placeholder="Security" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                                    <div class="form-group-inner">
                                                        <label>Detail</label>
                                                        <input type="text" class="form-control"  id="detail" placeholder="Details" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                    <div class="form-group-inner">
                                                        <label>Deposited Amount</label>
                                                        <input type="number" class="form-control"  id="dpt_amt" placeholder="Deposit" />
                                                    </div>
                                                </div>
                                                <div class="row" style="margin-top: 70px;">
                                                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                                        <div class="form-group-inner">
                                                            <label>Remark</label>
                                                            <input type="text" class="form-control"  id="remark" placeholder="Remark" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5" style="margin-top: 28px;">
                                                        <div class="form-group-inner">
                                                           <button class="btn btn-block btn-primary" style="background-color: blue;">Depodited Part Payment</button>
                                                        </div>
                                                    </div>
                                                </div>  
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-lg-6 col-xs-6">
                                                <div class="sparkline13-graph">
                                                    <div class="datatable-dashv1-list custom-datatable-overright">
                                                        <table id="table" data-toggle="table"  data-resizable="true" data-cookie="true"
                                                            data-cookie-id-table="saveId" data-toolbar="#toolbar">
                                                            <thead>
                                                                <tr>
                                                                    <th data-field="email" data-editable="true">Part Payment Amount</th>
                                                                    <th data-field="name" data-editable="true">Part Payment Date</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                                <div class="form-group-inner">
                                                    <button class="btn btn-block btn-success" style="background-color: green">Refresh</button>
                                                </div>
                                            </div>
                                             <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                                <div class="form-group-inner">
                                                    <button class="btn btn-block btn-primary" style="background-color: black">Delevered</button>
                                                </div>
                                            </div>
                                             <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                                <div class="form-group-inner">
                                                    <button class="btn btn-block btn-warning" style="background-color: red">Sold</button>
                                                </div>
                                            </div>
                                             <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                                <div class="form-group-inner">
                                                    <button class="btn btn-block btn-warning" style="background-color:yellow; color: black " onclick="genrate()" ><strong>Ledger</strong></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <br><br>
        <div class="footer-copyright-area" style="margin-top: 0px;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2018. All rights reserved. Template by Shashwat</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php';?>
</body>

</html>