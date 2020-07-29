<html class="no-js" lang="en">
<head>  
    <title>Register</title>
    <?php include 'header.php';?>
</head>
<body>
	<div class="error-pagewrap">
		<div class="error-page-int">
			<div class="text-center custom-login">
                <h1><strong>Registration</strong></h1>
			</div>
			<div class="content-error">
				<div class="hpanel">
                    <div class="panel-body">
                        <div class="row">
                            <div class="form-group col-lg-12">
                                <label>Username</label>
                                <input class="form-control" id="username" style="border-radius: 10px;">
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Password</label>
                                <input type="password" class="form-control" id="pwd" style="border-radius: 10px;">
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Emails</label>
                                <input class="form-control" id="email" style="border-radius: 10px;">
                            </div>
                            <div class="form-group col-lg-12">
                               <input class="form-group" type="checkbox" onclick="Toggle()"><strong> Show Password</strong>
                            </div>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-success loginbtn" onclick="register()">Register</button>
                            <button class="btn btn-default"onclick="reset();">Reset</button>
                        </div>
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