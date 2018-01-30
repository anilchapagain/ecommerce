<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ImageBuySell</title>
	
    <!-- CSS and JS start -->
	<?php include('includes/css-js.php') ?>
	<!-- CSS and JS end -->
    
	<!-- Smooth scroll start -->
	<script type="text/javascript"> 
        (function($) {
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){ // When a link with the .scroll class is clicked
                event.preventDefault(); // Prevent the default action from occurring
                $('html,body').animate({scrollTop:$(this.hash).offset().top}, 500); // Animate the scroll to this link's href value
            });
        });
    })(jQuery);
    </script>
    <!-- Smooth scroll end -->
    
	<!-- jCarousel start -->
	<script type="text/javascript" src="jcarouselassets/jquery.jcarousel.min.js"></script>
    <link rel="stylesheet" type="text/css" href="jcarouselassets/skin.css" />
    <script type="text/javascript">    
		jQuery(document).ready(function() {
			jQuery('#latest-additions').jcarousel({
				wrap: 'circular',
				scroll: 1,
			});
		});
	</script>
    <script type="text/javascript">    
		jQuery(document).ready(function() {
			jQuery('#featured-items').jcarousel({
				wrap: 'circular',
				scroll: 1,
			});
		});
	</script>
	<!-- jCarousel end -->
    

</head>

<body id="top">

	<!-- Header start -->
    <?php include('includes/header.php') ?>
	<!-- Header end -->
    
    <!-- Main contents start -->
    <section>
    	<!-- Home highlights start -->
    	<div class="home-highlights">
        
        	<!-- Latest additions start -->
        	<div class="latest-additions">
            	
                <h3><span>Latest additions</span><a href="#">View all</a></h3>
       	      <!-- Main video carousel start -->
        	  
        	  <ul id="latest-additions" class="jcarousel-skin-tango">
        	    
                <li>
        	        <div>
        	        	<a href="details.php">
                        	<img src="images/temp/latest-item1.png" alt="Latest">
                            <span>NRS. 3,25,000 /-</span>
                        </a>
                        <a href="details.php">15 Kva Mahindra Powerol Diesel Generator</a> 
                    </div>
        	        <div>
        	        	<a href="details.php">
                        	<img src="images/temp/latest-item2.png" alt="Latest">
                            <span>NRS. 4,800/-</span>
                        </a>
                        <a href="details.php">Pokhara Tour (2 Nights/3 Days Package) </a> 
                    </div>
        	        <div>
        	        	<a href="details.php">
                        	<img src="images/temp/latest-item3.png" alt="Latest">
                            <span>NRS. 14,000/-</span>
                        </a>
                        <a href="#">German Shepherd Pups On Sell</a> 
                    </div>
        	        <div>
        	        	<a href="details.php">
                        	<img src="images/temp/latest-item4.png" alt="Latest">
                            <span>NRS. 3,25,000 /-</span>
                        </a>
                        <a href="details.php">15 Kva Mahindra Powerol Diesel Generator</a> 
                    </div>
        	        <div>
        	        	<a href="details.php">
                        	<img src="images/temp/latest-item5.png" alt="Latest">
                            <span>NRS. 4,800/-</span>
                        </a>
                        <a href="details.php">Pokhara Tour (2 Nights/3 Days Package) </a> 
                    </div>
        	        <div>
        	        	<a href="details.php">
                        	<img src="images/temp/latest-item3.png" alt="Latest">
                            <span>NRS. 14,000/-</span>
                        </a>
                        <a href="details.php">German Shepherd Pups On Sell</a> 
                    </div>
        	        <div>
        	        	<a href="details.php">
                        	<img src="images/temp/latest-item1.png" alt="Latest">
                            <span>NRS. 3,25,000 /-</span>
                        </a>
                        <a href="details.php">15 Kva Mahindra Powerol Diesel Generator</a> 
                    </div>
        	        <div>
        	        	<a href="details.php">
                        	<img src="images/temp/latest-item2.png" alt="Latest">
                            <span>NRS. 4,800/-</span>
                        </a>
                        <a href="details.php">Pokhara Tour (2 Nights/3 Days Package) </a> 
                    </div>
        	        <div>
        	        	<a href="details.php">
                        	<img src="images/temp/latest-item3.png" alt="Latest">
                            <span>NRS. 14,000/-</span>
                        </a>
                        <a href="details.php">German Shepherd Pups On Sell</a> 
                    </div>
                  </li>
                  
                </ul>
              <!-- Main video carousel end --> 
            </div>
   	    	<!-- Latest additions end -->            
            
        	<!-- Featured items start -->
            <div class="featured-items">
                <h3><span>Featured items</span><a href="#">View all</a></h3>
       	      <!-- Main video carousel start -->
        	  
        	  <ul id="featured-items" class="jcarousel-skin-tango">
        	    
                <li>
        	        <div>
        	        	<a href="details.php">
                        	<img src="images/temp/featured-main-item.png" alt="Featured">
                            <span>
                            	Luxurious Bunglow at the heart<br>of the capital
                                <strong>NRS. 5,20,00,000/-</strong>
                            </span>
                        </a>
                    </div>
        	        <div>
        	        	<a href="details.php">
                        	<img src="images/temp/latest-item2.png" alt="Latest">
                            <span>NRS. 4,800/-</span>
                        </a>
                        <a href="details.php">Pokhara Tour (2 Nights/3 Days Package) </a> 
                    </div>
        	        <div>
        	        	<a href="details.php">
                        	<img src="images/temp/latest-item3.png" alt="Latest">
                            <span>NRS. 14,000/-</span>
                        </a>
                        <a href="details.php">German Shepherd Pups On Sell</a> 
                    </div>
        	        <div>
        	        	<a href="details.php">
                        	<img src="images/temp/latest-item4.png" alt="Latest">
                            <span>NRS. 3,25,000 /-</span>
                        </a>
                        <a href="details.php">15 Kva Mahindra Powerol Diesel Generator</a> 
                    </div>
        	        
                  </li>
                  
                </ul>
              <!-- Main video carousel end --> 
            </div>
            <!-- Featured items end -->
            
        </div>
        <!-- Home highlights end -->
            
            
        
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
