<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ImageBuySell</title>
	
    <!-- CSS and JS start -->
	<?php include('includes/css-js.php') ?>
	<!-- CSS and JS end -->   

</head>

<body>

	<!-- Header start -->
    <?php include('includes/header.php') ?>
	<!-- Header end -->
    
    <!-- Main contents start -->
    <section>
    	<!-- Listing start -->
    	<div class="centralizer"><div class="user-login">
        
            <div class="breadcrumb">
            <a href="index.php">Home</a> /
            </div>
            
            <h1>User login</h1>
            
            <div class="notification error-message">
            Invalid username or password. Please re-enter.
            </div>
                  
            <div class="notification success-message">
            A password reset link has been sent to your email address. Please check your mail.
            </div>
            
            <form class="general-form login-block">
            
                <h2>Enter your login details</h2>
                
                <div>
                    <div>
                    <span class="input-title">Username:</span>
                    <input type="text" size="30">
                    </div>      
                </div>
            
                <div>
                    <div>
                    <span class="input-title">Password:</span>
                    <input type="password" size="30">   
                    </div>   
                </div>
            
                <div>
                    <div>
                    <label>
                    <input name="" type="checkbox" value=""> Keep me logged in.
                    </label>   
                    </div>   
                </div>
            
                <div>
                    <div>
                    <input name="" type="submit" value="Login" class="btn">   
                    </div>   
                </div>
                
            </form>
            
            <form class="general-form">
            
                <h2>Forgot your password?</h2>
                
                <div>
                    <div class="field-error">
                    <span class="input-title">You e-mail address:</span>
                    <input type="text" size="35">
                    <small>E-mail address doesn't exist.</small> 
                    <span class="input-info">
                    Please enter the same e-mail address you’ve<br>entered while registering with us.
                    </span>
                    </div>      
                </div>
            
                <div>
                    <div>
                    <input name="" type="submit" value="Submit" class="btn">   
                    </div>   
                </div>
                
            </form>
            
            <form class="general-form" style="margin-right: 0; border: none;">
            
                <h2>Not a member?</h2>
                    
                    <p>
                    Not a <a href="index.php">imagebuysell.com</a> member?
                    </p>
                    
                    <p>
                    Register with us by completing some<br>easy-to-follow steps. <strong><u>It’s absolutely free</u></strong><br>and just take few minutes to complete.
                    </p>
            
                <p>
                <a href="register.php" class="btn">REGISTER</a>
                </p>
                
            </form>
        
        </div></div>
		<!-- Listing end -->
            
            
        
        <!-- Cities start -->
        <?php include('includes/cities.php') ?>
        <!-- Cities end -->        
        
        <!-- Categories start -->
        <?php include('includes/categories.php') ?>
        <!-- Categories end -->
        
        <!-- Footer start --> 
        <?php include('includes/footer.php') ?>
        <!-- Footer end -->
        
    </section>
    <!-- Main contents end -->

</body>
</html>
