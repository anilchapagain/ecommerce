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
    	<div class="centralizer"><div class="register">
        
            <div class="breadcrumb">
            <a href="index.php">Home</a> /
            </div>
            
            <h1>Member registration</h1>
            
            <div class="notification error-message">
            Registration failed, one or more error occured, please retry again.
            </div>
                  
            <div class="notification success-message">
            Registration successful. <a href="login.php">Click here</a> to login.
            </div>
                
            <form class="general-form" method="post" action="login.php"> 
            
                <div>
                    <div>
                    <span class="input-title"><strong>*</strong>Full name</span>
                    <input type="text" size="25">
                    </div>      
                </div>
            
                <div>
                    <div>
                    <span class="input-title"><strong>*</strong>Address</span>
                    <input type="text" size="40">   
                    </div>   
                </div>
            
                <div>
                    <div class="field-error">
                    <span class="input-title"><strong>*</strong>Email address</span>
                    <input type="text" size="35">
                    <small>Please enter valid email address.</small>   
                    </div> 
                    <div>
                    <span class="input-title">Phone/Mobile No.</span>
                    <input type="text" size="15">   
                    </div>   
                </div>
            
                <div>
                    <div>
                    <span class="input-title"><strong>*</strong>Password</span>
                    <input type="password" size="20">   
                    </div>
                    <div>
                    <span class="input-title"><strong>*</strong>Re-enter password</span>
                    <input type="password" size="20">   
                    </div>   
                </div>
            
                <div>
                    <div>
                    <span class="input-title">Website</span>
                    <input type="text" size="40">   
                    </div>   
                </div>
            
                <div>
                    <div>
                    <span class="input-title">About yourself</span>
                    <textarea name="" cols="60" rows="6"></textarea>   
                    </div>   
                </div>
            
                <div>
                    <div>
                    <span class="input-title"><strong>*</strong>Security code</span>
                    
                    <?php
    				error_reporting(0);
                    require_once('recaptcha/recaptchalib.php');
                    
                    // Get a key from https://www.google.com/recaptcha/admin/create
                    $publickey = "6LeZc-ESAAAAAFTYrAwEDbc3AXIpz6UEaW12-2vo";
                    $privatekey = "6LeZc-ESAAAAAO0djuTrhznV9jx44Qt6NRAsBSwL";
                    
                    # the response from reCAPTCHA
                    $resp = null;
                    # the error code from reCAPTCHA, if any
                    $error = null;
                    
                    # was there a reCAPTCHA response?
                    if ($_POST["recaptcha_response_field"]) {
                            $resp = recaptcha_check_answer ($privatekey,
                                                            $_SERVER["www.imagebuysell.com"],
                                                            $_POST["recaptcha_challenge_field"],
                                                            $_POST["recaptcha_response_field"]);
                    
                            if ($resp->is_valid) {
                                    echo "You got it!";
                            } else {
                                    # set the error code so that we can display it
                                    $error = $resp->error;
                            }
                    }
                    echo recaptcha_get_html($publickey, $error);
                    ?>
                       
                    </div>   
                </div>
            
                <div>
                    <div>
                    <input name="" type="submit" value="Register" class="btn">   
                    </div>   
                </div>
                
            </form>
            
            <form class="general-form login-block">
            
                <h2>Already a member?</h2>
                
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
