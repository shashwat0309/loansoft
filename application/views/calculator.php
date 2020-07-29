<html class="no-js">
<head>
    <title>Calculator</title>
    <?php include 'header.php';?>
</head>
<body onload="today_date();">
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
                            <a title="Landing Page" href="<?php echo base_url();?>/Home/recipt" aria-expanded="false"><span class="educate-icon educate-data-table icon-wrap" aria-hidden="true"></span> <span class="mini-click-non" style="color: black">Recipt</span></a>
                        </li>
                         <li>
                            <a title="Landing Page" href="<?php echo base_url();?>/Home/metal_cost" aria-expanded="false"><span class="educate-icon educate-department icon-wrap" aria-hidden="true"></span> <span class="mini-click-non" style="color: black">Metal Cost</span></a>
                        </li>
                         <li>
                            <a title="Landing Page" href="<?php echo base_url();?>/Home/calculator" aria-expanded="false"><span class="educate-icon educate-apps icon-wrap" aria-hidden="true"></span> <span class="mini-click-non" style="color: black"><strong>Calculator</strong></span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <br><br><br>
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="<?php echo base_url();?>/Home/index2"><img class="main-logo" src="img/logo/logo.png" alt=""></a>
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
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                            <ul class="nav navbar-nav mai-top-nav">
                                                <li class="nav-item"><a href="<?php echo base_url();?>/Home/index2" class="nav-link">Home</a>
                                                </li>
                                                <li class="nav-item"><a href="<?php echo base_url();?>/Home/add_customer" class="nav-link">Customer Details</a>
                                                </li>
                                                <li class="nav-item"><a href="?php echo base_url();?>/Home/recipt" class="nav-link">Recipt</a>
                                                </li>
                                                <li class="nav-item"><a href="<?php echo base_url();?>/Home/metal_cost" class="nav-link">Metal Cost</a>
                                                </li>
                                                <li class="nav-item"><a href="<?php echo base_url();?>/Home/calculator" class="nav-link">Calculator</a>
                                                </li>   
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
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
                                        <li><a href="<?php echo base_url();?>/Home/recipt">Recipt</a></li>
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
        <br><br>
        <div class="advanced-form-area mg-b-15">
            <div class="container-fluid">
                 <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline10-list mg-tb-30 responsive-mg-t-0 table-mg-t-pro-n dk-res-t-pro-0 nk-ds-n-pro-t-0">
                            <div class="sparkline10-hd">
                                <div class="main-sparkline10-hd">
                                    <h1>Intrest Calculator</h1>
                                </div>
                            </div>
                            <br>
                            <div class="sparkline10-graph">
                                <div class="input-knob-dial-wrap">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <div class="form-group data-custon-pick" id="data_2">
                                                <label>Opning Date</label>
                                                <div class="input-group date">
                                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                    <input type="text" class="form-control" id="today">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <div class="form-group data-custon-pick " id="data_2">
                                                <label>Closing Date</label>
                                                <div class="input-group date">
                                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                    <input type="text" class="form-control" id="today2" onchange ="total_days()">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <div class="form-group-inner">
                                                <label>No of Days</label>
                                                <input type="number" id="total_days" class="form-control" placeholder="Total Days" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                           <div class="form-group-inner">
                                                <label>Amount</label>
                                                <input type="number" id="amount" class="form-control" placeholder="Net Amount">
                                            </div>
                                        </div> 
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                           <div class="form-group-inner">
                                                <label>Interest</label>
                                                <input type="number" id="interest" class="form-control" oninput="result()" placeholder="Intrest">
                                            </div>
                                        </div> 
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                           <div class="form-group-inner">
                                                <label>Final Amount</label>
                                                <input type="number" id="final_amount" class="form-control" placeholder="Final Amount" disabled>
                                            </div>
                                        </div> 
                                    </div>
                                    <br>
                                    <div class="row"> 
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                           <div class="form-group-inner">
                                                <label>Total Amount</label>
                                                <input type="number" id="total_amount" class="form-control" placeholder="Total Amount" disabled>
                                            </div>
                                        </div>  
                                        <br>                               
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                           <button class="btn btn-block btn-info login-submit-cs" style="background-color: #006DF0;" onclick="result()">Result</button>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                           <button class="btn btn-block btn-danger login-submit-cs" style="background-color: red" onclick="reset();">Reset</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2018. All rights reserved. Template by <a href="https://colorlib.com/wp/templates/">Colorlib</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php';?>
</body>
</html>