<!doctype html>
<html class="no-js" lang="en">
<head>
    <?php include 'header.php';?>
    <title>Login</title>
</head>
<body>
	<div class="error-pagewrap">
		<div class="error-page-int">
			<div class="text-center m-b-md custom-login">
				<h1><strong>PLEASE LOGIN TO APP</strong></h1>
			</div>
			<div class="content-error">
				<div class="hpanel">
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="control-label" for="username">Username</label>
                            <input type="text" placeholder="example@gmail.com" title="Please enter you username" name="username" id="username" class="form-control"  style="border-radius: 10px;">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="password">Password</label>
                            <span><input type="password" title="Please enter your password" placeholder="******"   id="pwd" class="form-control"  style="border-radius: 10px;"></span>
                            <br>
                            <span><input class="form-group" type="checkbox" onclick="Toggle()"><strong> Show Password</strong></span>

                        </div>
                        <button class="btn btn-success btn-block loginbtn" style="border-radius: 25px;" onclick="login()">Login</button>
                        <br>
                        <span><button class="btn btn-default" onclick="location.href='<?php echo base_url();?>/Home/register';">Register</button></span>
                        <span><button class="btn btn-default" onclick="location.href='<?php echo base_url();?>/Home/forget_pass';">Forget Password</button></span>
                    </div>
                </div>
			</div>
			<div class="text-center login-footer">
				<h4><storg>Copyright © 2018. All rights reserved.</storg></h4>
			</div>
		</div>   
    </div>
    <?php include 'footer.php';?>    
</body>
</html>