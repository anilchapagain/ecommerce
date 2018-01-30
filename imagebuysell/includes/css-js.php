	<!-- Main style start -->
    <link href="css/normalize.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <!-- Main style end -->
    
    <!-- jQuery start -->
    <script src="js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
    <!-- jQuery end -->
    
    <!-- Google font start -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Maven+Pro:400,500,700,900' rel='stylesheet' type='text/css'>
    <!-- Google font end -->
    
    
	<!-- Placeholder start -->
	<script src="PlaceholderAssets/modernizr.js"></script>
    <script>
    $(document).ready(function(){
    
    if(!Modernizr.input.placeholder){
    
        $('[placeholder]').focus(function() {
          var input = $(this);
          if (input.val() == input.attr('placeholder')) {
            input.val('');
            input.removeClass('placeholder');
          }
        }).blur(function() {
          var input = $(this);
          if (input.val() == '' || input.val() == input.attr('placeholder')) {
            input.addClass('placeholder');
            input.val(input.attr('placeholder'));
          }
        }).blur();
        $('[placeholder]').parents('form').submit(function() {
          $(this).find('[placeholder]').each(function() {
            var input = $(this);
            if (input.val() == input.attr('placeholder')) {
              input.val('');
            }
          })
        });
    
    }
    
    });</script>
    <!-- Placeholder end -->
    
    <!-- Museo fonts start -->
    <link rel="stylesheet" href="webfonts/museo100/stylesheet.css" type="text/css" charset="utf-8" />
    <!-- Museo fonts end -->
    
	<!-- Custom Select Start -->
    <link href="customselectassets/custom-select.css" rel="stylesheet" type="text/css">
	<!-- Custom Select End -->
        
    <!--[if lte IE 8]>    
    <link href="css/iecssfix.css" rel="stylesheet" type="text/css">
    <![endif]-->