<html class="no-js">
<head>
    <title>Add Customer</title>
    <?php include 'header.php';?>
</head>
<body onload="onget()">
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
                                <span class="mini-click-non" style="color: black"><strong> Customer Details</strong></span>
                            </a>
                        </li>
                        <li>
                            <a title="Landing Page" href="<?php echo base_url();?>/Home/recipt" aria-expanded="false"><span class="educate-icon educate-data-table icon-wrap" aria-hidden="true"></span> <span class="mini-click-non" style="color: black">Recipt</span></a>
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
         <br><br><br> 
         <br>
        <div class="advanced-form-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline10-list mg-tb-30 responsive-mg-t-0 table-mg-t-pro-n dk-res-t-pro-0 nk-ds-n-pro-t-0">
                            <div class="sparkline10-hd">
                                <div class="main-sparkline10-hd">
                                    <h1>Add Customer</h1>
                                </div>
                            </div>
                            <br>
                            <div class="sparkline10-graph">
                                <div class="input-knob-dial-wrap">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                <div class="form-group data-custon-pick" id="data_2">
                                                    <label><strong>Date</strong></label>
                                                    <div class="input-group date">
                                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                        <input type="text" class="form-control" id="today">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                <div class="chosen-select-single mg-b-20">
                                                    <label><strong>City Name</strong></label>
                                                     <input type="text" id="city" class="form-control" placeholder="City / Town/ village Name" />
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                <div class="form-group-inner">
                                                    <label>Customer Name</label>
                                                    <input type="text" id="customer_name" class="form-control" placeholder="Customer Name" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                <div class="form-group-inner">
                                                    <label>Phone No</label>
                                                    <input type="text" id="customer_phone" class="form-control" placeholder="Phone No" />
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="margin-top: 25px;">
                                               <button class="btn btn-block btn-info login-submit-cs" style="background-color: #006DF0;" onclick="save_customer()">Add Customer</button>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top: 25px;">
                                               <button class="btn btn-block btn-danger login-submit-cs" style="background-color: red" onclick="reset();">Reset</button>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top: 25px;">
                                               <button class="btn btn-block btn-info login-submit-cs" style="background-color: green"  id="update" onclick="update()">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="sparkline13-graph">
                                        <div class="datatable-dashv1-list custom-datatable-overright">
                                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-click-to-select="true" data-toolbar="#toolbar">
                                                  <thead style="position: static;">
                                                    <th data-field="customer_id">Customer Id</th>
                                                    <th data-field="name" data-editable="true">Date of Visiting</th>
                                                    <th data-field="email" data-editable="true">Customer name</th>
                                                    <th data-field="phone" data-editable="true">Customer phone</th>
                                                    <th data-field="task" data-editable="true">Customer city</th>
                                                    <th data-field="action">Action</th>
                                                </thead>
                                                <tbody>
                                                <?php foreach ($data as $key => $value) {  ?>
                                                 <tr>
                                                    <td><?php echo $value['customer_id'];?></td>
                                                    <td><?php echo $value['date'];?></td>
                                                    <td><?php echo $value['customer_name'];?></td>
                                                    <td><?php echo $value['customer_phone'];?></td>
                                                    <td><?php echo $value['customer_city'];?></td>
                                                    <td>
                                                        <button id="<?php echo $value['customer_id'];?>"class="btn btn-warning" style="background-color: black;"  onclick="editrow(<?php echo $value['customer_id'];?>);">Edit</button> 
                                                        <button class="btn btn-danger" id="<?php echo $value['customer_id'];?>" onclick="deleterow(<?php echo $value['customer_id'];?>);">Delete</button>
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
        </div>
        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Item Details</h1>
                                </div>
                            </div>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                        <div class="form-group-inner">
                                            <label>Account  No</label>
                                            <input type="text" id="acc_no" class="form-control" placeholder="Account No" disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                        <div class="form-group-inner">
                                            <label>Items</label>
                                            <input type="text" id="items" class="form-control" placeholder="Item Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                        <div class="chosen-select-single mg-b-20">
                                            <label><strong>Item Type</strong></label>
                                           <input type="text" id="item_type" class="form-control" placeholder="Item Type">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                        <div class="form-group-inner">
                                            <label>Net Weight</label>
                                            <input type="number" id="net_weight" class="form-control" placeholder="Net Weight" oninput="calculatetn();">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                        <div class="form-group-inner">
                                            <label>PR/TN</label>
                                            <input type="number" id="pr_tn" class="form-control" placeholder="PR/TN" oninput="calculatetn();">
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                        <div class="form-group-inner">
                                            <label>Fine Weight</label>
                                            <input type="number" id="f_weight" class="form-control" placeholder="Fine Weight">
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top: 25px;">
                                        <button class="btn btn-block btn-info login-submit-cs" style="background-color: #006DF0;" onclick="save_itme()">Add Item</button>
                                     </div>
                                     <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top: 25px;">
                                        <button class="btn btn-block btn-info login-submit-cs" style="background-color: red;" onclick="reset2();">Reset</button>
                                     </div>
                                     <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top: 25px;">
                                        <button class="btn btn-block btn-info login-submit-cs" style="background-color: green;" onclick="update_item();">Update</button>
                                     </div>
                                </div>
                            </div>
                            <br>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                <th data-field="name" data-editable="true">Item</th>
                                                <th data-field="email" data-editable="true">Item Type</th>
                                                <th data-field="phone" data-editable="true">Net Weight</th>
                                                <th data-field="task" data-editable="true">PR/TN</th>
                                                <th data-editable="true" data-editable="true">Fine Weight</th>
                                                <th data-field="action" data-editable="true">Action </th>
                                            </tr>
                                        </thead>
                                        <tbody id="tbody">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Loan Details</h1>
                                </div>
                            </div>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                        <div class="form-group-inner">
                                            <label>Transaction No</label>
                                            <input type="text" id="tran_no" class="form-control" placeholder="Transaction No" disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                        <div class="form-group-inner">
                                            <label>Loan Amount</label>
                                            <input type="number" id="loan_amt" class="form-control" placeholder="Loan Amount">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                        <div class="form-group-inner">
                                            <label>Interest Rate</label>
                                            <input type="number" id="int_rate" class="form-control" value="1.5">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                        <div class="form-group-inner">
                                            <label>Day Interval</label>
                                            <input type="number" id="interval" class="form-control" placeholder="Total Days">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                        <div class="form-group-inner">
                                            <label>Description</label>
                                            <input type="text" id="description" class="form-control" placeholder="Item and Loan Description">
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top: 25px;">
                                        <button class="btn btn-block btn-info login-submit-cs" style="background-color: green" onclick="apply_loan();">Apply Loan</button>
                                     </div>
                                     <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top: 25px;">
                                        <button class="btn btn-block btn-info login-submit-cs" style="background-color: red;" onclick="reset3();">Reset</button>
                                     </div>
                                     <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top: 25px;">
                                        <button class="btn btn-block btn-info login-submit-cs" style="background-color: blue;" onclick="update_loan();">Update</button>
                                     </div>
                                </div>
                            </div>
                            <br>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                <th data-field="name" data-editable="true">Loan Amount</th>
                                                <th data-field="email" data-editable="true">Interest Rate</th>
                                                <th data-field="task" data-editable="true">Day Interval</th>
                                                <th data-editable="true">Description</th>
                                                <th data-editable="true">Status</th>
                                                <th data-field="action">Action Edit/Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody id="loan_table">
                                        </tbody>
                                    </table>
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
                            <p>Copyright © 2018. All rights reserved. Template by shashwat</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php';?>
</body>
</html>