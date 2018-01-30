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
    	<div class="centralizer"><div class="post-ad">
        
            <div class="breadcrumb">
            <a href="index.php">Home</a> /
            </div>
            
            <h1>Post free ad</h1>
            
            
                
            <form class="general-form" method="post" action="#" style="margin: 0;">
                
                <h2>
                <ins>Category</ins>
                <span>What type of advertisement is this?</span>
                </h2>
            
                <div>
                    <div>
                    <span class="input-title"><strong>*</strong>Select Category</span>
                        <div class="select-wrapper" style="width: 130px;">
                        <select name="category">                        	
                            <option>Services</option>
                            <option>Jobs</option>
                            <option>For sale</option>
                            <option>Mobile</option>                       
                            <option>Housing</option>
                            <option>Cars/Vehicles</option>
                            <option>Bikes</option>
                            <option>Electronics</option>
                            <option>Community</option>
                            <option>Pets</option>
                            <option>Free Stuffs</option>
                        </select> 
                        </div>    
                    </div>   
                </div>
            
                <div>
                    <div>
                    <span class="input-title"><strong>*</strong>Select sub category</span>
                    	<label class="radio-wrapper">
                        	<input name="sub-category" type="radio" value=""> Advertising - Design
                        </label><br>
                    	<label class="radio-wrapper">
                        	<input name="sub-category" type="radio" value=""> Airline - Train - Bus Tickets
                        </label><br>
                    	<label class="radio-wrapper">
                        	<input name="sub-category" type="radio" value=""> Astrology
                        </label><br>
                    	<label class="radio-wrapper">
                        	<input name="sub-category" type="radio" value=""> Business Offers
                        </label><br>
                    	<label class="radio-wrapper">
                        	<input name="sub-category" type="radio" value=""> Car Rentals - Taxi Services
                        </label><br>
                    	<label class="radio-wrapper">
                        	<input name="sub-category" type="radio" value=""> Carpenters
                        </label><br>
                    	<label class="radio-wrapper">
                        	<input name="sub-category" type="radio" value=""> Catering Services
                        </label><br>
                    	<label class="radio-wrapper">
                        	<input name="sub-category" type="radio" value=""> Computer - Web Services
                        </label>
                    </div>   
                </div>
            
                <div>
                    <div>
                    <input name="" type="submit" value="Next step" class="btn">   
                    </div>   
                </div>
                
            </form>
                
            <form class="general-form" method="post" action="#">
                
                <h2>
                <ins>City/Area</ins>
                <span>Which is the targeted location for your advertisement?</span>
                </h2>
                
                <div>
                    
                    <div>
                    <span class="input-title"><strong>*</strong>Select Region</span>
                    	<div class="select-wrapper" style="width: 170px;">
                        <select name="category">                        	
                            <option>Eastern Region</option>
                            <option>Central Region</option>
                            <option>Western Region</option>
                            <option>Mid-western Region</option>                       
                            <option>Far-western Region</option>
                        </select>
                        </div>  
                    </div>
                    
                    <div>
                    <span class="input-title"><strong>*</strong>Select Zone</span>
                    	<div class="select-wrapper" style="width: 130px;">
                        <select name="category">                        	
                            <option>Mechi</option>
                            <option>Koshi</option>
                            <option>Sagarmatha</option>
                            <option>Bagmati</option>                       
                            <option>Narayani</option>
                            <option>Janakpur</option>
                            <option>Dhawalagiri</option>
                            <option>Gandaki</option>
                            <option>Lumbini</option>
                            <option>Karnali</option>
                            <option>Bheri</option>
                            <option>Rapti</option>
                            <option>Mahakali</option>
                            <option>Seti</option>
                        </select>
                        
                        </div>   
                    </div>   
                </div>
            
                <div>
                    <div>
                    <span class="input-title"><strong>*</strong>Select District</span>
                    	<label class="radio-wrapper">
                        	<input name="sub-category" type="radio" value=""> Bhaktapur
                        </label><br>
                    	<label class="radio-wrapper">
                        	<input name="sub-category" type="radio" value=""> Dhading
                        </label><br>
                    	<label class="radio-wrapper">
                        	<input name="sub-category" type="radio" value=""> Astrology
                        </label><br>
                    	<label class="radio-wrapper">
                        	<input name="sub-category" type="radio" value=""> Kathmandu
                        </label><br>
                    	<label class="radio-wrapper">
                        	<input name="sub-category" type="radio" value=""> Kavrepalanchok
                        </label><br>
                    	<label class="radio-wrapper">
                        	<input name="sub-category" type="radio" value=""> Lalitpur
                        </label><br>
                    	<label class="radio-wrapper">
                        	<input name="sub-category" type="radio" value=""> Nuwakot
                        </label><br>
                    	<label class="radio-wrapper">
                        	<input name="sub-category" type="radio" value=""> Rasuwa
                        </label><br>
                    	<label class="radio-wrapper">
                        	<input name="sub-category" type="radio" value=""> Sindhupalchok
                        </label>
                    </div>   
                </div>
            
                <div>
                    <div>
                    <input name="" type="submit" value="Next step" class="btn">   
                    </div>   
                </div>
                
            </form>
            
            <form class="general-form" method="post" action="login.php">
                
                <h2>
                <ins>Advertisement details</ins>
                <span>You are posting ad in "Motorcycles" under "Cars/Vehicles"</span>
                </h2> 
            
                <div>
                    <div>
                    <span class="input-title"><strong>*</strong>Title</span>
                    <input type="text" size="25">
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
                
                <h2>
                <ins>Picture for your ad</ins>
                <span>Main picture is mandatory, you can select up to 6 pictures.</span>
                </h2> 
            
                <div>
                    <div>
                    <span class="input-title"><strong>*</strong>Price</span>
                    <input type="text" size="20">   
                    </div>  
                </div>
            
                <div>
                
                    <div class="field-error">
                    <span class="input-title"><strong>*</strong>Main picture</span>                         
                    	<div class="fileinput">
                        <input name="" type="file">
                        <span class="btn btn-green">Select picture</span>
                        </div>
                        <small>Please select main picture.</small>                                               
                    </div>  
                    
                    <div>
                    <span class="input-title">Picture 2</span>
                    	
                        <div class="image-thumb">
                        <img src="images/temp/featured-main-item.png" alt="Item">
                        </div>
                        
                    	<div class="fileinput">
                        <input name="" type="file">
                        <span class="btn btn-green">Change</span>
                        </div>                                               
                    </div>   
                    
                    <div>
                    <span class="input-title">Picture 3</span>
                    	
                        <div class="image-thumb">
                        <img src="images/temp/featured-main-item.png" alt="Item">
                        </div>
                        
                    	<div class="fileinput">
                        <input name="" type="file">
                        <span class="btn btn-green">Change</span>
                        </div>                                               
                    </div>
                    
                    <div>
                    <span class="input-title">Picture 4</span>                        
                    	<div class="fileinput">
                        <input name="" type="file">
                        <span class="btn btn-green">Select picture</span>
                        </div>                                               
                    </div>
                    
                    <div>
                    <span class="input-title">Picture 5</span>                        
                    	<div class="fileinput">
                        <input name="" type="file">
                        <span class="btn btn-green">Select picture</span>
                        </div>                                               
                    </div>
                    
                    <div>
                    <span class="input-title">Picture 6</span>                        
                    	<div class="fileinput">
                        <input name="" type="file">
                        <span class="btn btn-green">Select picture</span>
                        </div>                                               
                    </div>
                     
                </div>
            
                <div>
                    <div>
                    <span class="input-title">Describe what makes your ad unique</span>
                    <textarea name="" cols="60" rows="6"></textarea>   
                    </div>   
                </div>
                
                <h2>
                <ins>Product description</ins>
                <span>Enter further product descriptions</span>
                </h2> 
            
                <div>
                    <div>
                    <span class="input-title"><strong>*</strong>Condition</span>
                    <input type="text" size="40">
                    <span class="input-info">Hints: Used, New</span>    
                    </div>  
                </div>
            
                <div>
                    <div class="field-error">
                    <span class="input-title"><strong>*</strong>Brand name</span>
                    <input type="text" size="25">
                    <small>Please enter brand name</small>
                    <span class="input-info">Eg. Honda, Hero, Bajaj, Suzuki</span> 
                    </div>  
                </div>
            
                <div>
                    <div>
                    <span class="input-title"><strong>*</strong>Year</span>
                    <input type="text" size="10">   
                    </div>  
                </div>
            
                <div>
                    <div>
                    <input name="" type="submit" value="Submit" class="btn">   
                    </div>   
                </div>
                
            </form>
            
            <!--<form class="general-form login-block">
            
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
                
            </form>-->
        
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
