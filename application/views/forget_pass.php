<!doctype html>
<html class="no-js" lang="en">

<head>
    <title>Password Recevery</title>
    <?php include 'header.php';?>
</head>

<body>
	<div class="error-pagewrap">
		<div class="error-page-int">
			<div class="text-center ps-recovered">
				<h1><strong>PLEASE LOGIN TO APP</strong></h1>
			</div>
			<div class="content-error">
				<div class="hpanel">
                    <div class="panel-body poss-recover">
                        <p>
                            Enter your new password will be reset and emailed to you.
                        </p>
                            <div class="form-group">
                                <label class="control-label" for="username">New Password</label>
                                <input type="password" placeholder="****"  id="pwd" class="form-control" style="border-radius: 10px;">
                                <br>
                                <label class="control-label" for="username">Conform Password</label>
                                <input type="password" placeholder="****"  id="pwdcon" class="form-control" style="border-radius: 10px;">
                                <br>
                                <input class="form-group" type="checkbox" onclick="Toggle()"><strong> Show Password</strong>
                            </div>

                            <button class="btn btn-success btn-block" style="border-radius: 25px;">Reset password</button>
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