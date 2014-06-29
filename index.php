<?php
   session_start();
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	

    <title>Nixon Developer Test</title>

    <!-- Bootstrap core CSS -->  <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
  
	  <link href="css/style.css" rel="stylesheet">
	    <link href="css/global.css" rel="stylesheet">
		   <link href="css/slider.css" rel="stylesheet">

<link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Quicksand:700' rel='stylesheet' type='text/css'>
     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">

  </script>
  <script>
 $(document).ready(function(){ // When the  document is ready.
                    $('#policy').hide(); // The policy by default should be hidden.            
                    $("#policy_toggle").click(function(){ // However  when the user click on the policy it will slide up.           
                        if ( $('#policy').is(':visible') ) {
                            $('#policy').slideUp()
                        }
                        else {
                            $("#policy").slideDown();//  The policy should be hidden if the user clicks on the policy again.              
                        }
                    });

                    $('.img_slide img:gt(0)').hide(); // Just the first picture of the slide show.             

                    $('.right').click(function() { // When the user clicks the right arrow, the first image appends last, the second shows up
                        $('.img_slide img:first-child').fadeOut().appendTo('.img_slide');
                        $('.img_slide img:first-child').fadeIn();
                    });

                    $('.left').click(function() {//on clicking left, the first image appends last, the second shows up
                        $('.img_slide img:first-child').fadeOut();
                        $('.img_slide img:last-child').prependTo('.img_slide').fadeOut();
                        $('.img_slide img:first-child').fadeIn();
                    });

                    $("#contactform").submit(function(e) // on clicking submit
{
                    var postData = $(this).serializeArray();
                    var formURL = $(this).attr("action");
                    $.ajax(
                    {
                        url : formURL,
                        type: "POST",
                        data : postData,
                        success:function(data, textStatus, jqXHR) //if the form is successfully submited
                        {
                            var data = $.parseJSON(data) //it parse return string into JSON
                            alert(data.name + ': success'); // The user can see a successful notification message.
                        },
                        error: function(jqXHR, textStatus, errorThrown) //if the form submition is unsuccessfull
                        {
                            alert(postData[0].value + ': failure');// Displays error message.            
                        }
                    });
                    e.preventDefault(); //
                });
                });
    </script>
</head>

<body>

   

	   <br>

	  <br>
	  
                   <div class="container">
                <h1><img src="./images/Header.jpg" alt="I can haz developer?"></h1>
                <div class="slideshow">
                    <div id="image_slideshow">
                        <div class="img_slide">
                            <img src="./images/synth-cat-placeholder-960x400.jpg" alt="Synth Cat">
                            <img src="./images/grumpy-cat-placeholder-960x400.jpg" alt="Grumpy Cat">
                            <img src="./images/nyan-cat-placeholder-960x400.jpg" alt="Nyan Cat">
                        </div>
						
						   <!-- Controls -->
                        <img src="./img/left.png" alt="Left arrow" class="left">
                        <img src="./img/right.png" alt="Right arrow" class="right">
						   <!--End Controls -->
                </div>
                </div>

     

	
			
			<!-- Start Text -->
			
	<div class="hello">
                    <h2>Cupcake ipsum dolor sit amet jujubes. Lemon drops marshmallow gingerbread fruitcake macaroon applicake dessert. Toffee sweet roll jelly beans. Donut jujubes pastry lemon drops.</h2>
                </div>
				
			 <br>
			 
			<hr>
			 <br>
			 <br>
            		<h1 class="element center pink uppercase,text-transform: uppercase;">KittEH ipsum</h1>
					
                   <div class="center_1">
                    <p>Cupcake ipsum dolor sit amet bear claw oat cake candy canes jelly-o. Jelly beans tootsie roll halvah pastry. Sesame snaps toffee marzipan macaroon fruitcake cheesecake sweet brownie donut. Sesame snaps halvah tart cheesecake applicake. Caramels donut jelly-o powder marzipan danish pastry fruitcake chocolate cake. Unerdwear.com marshmallow tootsie roll topping. Pastry sweet roll biscuit muffin candy wafer pastry macaroon. Toffee cotton candy chocolate bar. Tiramisu sweet roll cheesecake soufflé sweet cheesecake jelly beans lollipop.</p>
                    <br>
					
					<p>Croissant topping tart gummies jelly bear claw gummies. Chupa chups icing ice cream gummi bears. Gummies gingerbread marshmallow halvah bear claw powder. Cheesecake dragée jelly croissant. Marshmallow chocolate cake pudding candy canes jelly. Sugar plum liquorice unerdwear.com biscuit pie gummi bears oat cake tootsie roll. Tootsie roll marzipan chocolate bar chocolate cake sweet roll cupcake caramels oat cake. Gummi bears tiramisu croissant cupcake chocolate cake. Apple pie dragée soufflé gingerbread applicake sugar plum pudding. Apple pie muffin jelly-o croissant lollipop carrot cake gingerbread bear claw bear claw.</p>
                 </div>
			   <br>
			   <br>
			   <center><img src="images/grumpy-cat-placeholder-340x240.jpg" alt="...">
			   <br>
			   <br>
			   <br>
			   <hr>
				<br>
				<br>
				
		                <div class="center_2">
                    <p>Cupcake ipsum dolor sit amet bear claw oat cake candy canes jelly-o. Jelly beans tootsie roll halvah pastry. Sesame snaps toffee marzipan macaroon fruitcake cheesecake sweet brownie donut. Sesame snaps halvah tart cheesecake applicake. Caramels donut jelly-o powder marzipan danish pastry fruitcake chocolate cake. Unerdwear.com marshmallow tootsie roll topping.</p></div>
		
<br>
		                


						<!-- Contact Form -->
		
                       
     
	                       <div class="contact_form">
                           <form id="contactform" action="PHP/ajax.php" method="post">
                            <label for="name"><p class="element heavy grey  uppercase,text-transform:uppercase;">name*</p></label><br/>
                            <input value="<?php echo $_SESSION['name']; ?>" type="text" name="name" placeholder="Cras aliquam"><br/>
                            <label for="email"><p class="element heavy grey  uppercase,text-transform:uppercase;">email address*</p></label><br/>
                            <input type="email" value="<?php echo $_SESSION['email']; ?>" name="email" placeholder="Cras aliquam"><br/>
                            <label for="address"><p class="element heavy grey  uppercase,text-transform:uppercase;">address</p></label><br />
                            <textarea name="address" placeholder="Donec id eros eget Praesent vitae ligula Aliquam adipiscing"></textarea>
							<br>
                            <p>* Indicates required field</p>
						   <input type="submit" value="submit form" />
                        </form>
                    </div>
					<br>
					<br>
                        <center><div style="color: rgb(252, 5, 139);" id="policy_toggle"><b>View our privacy policy</b></div>
							<br>
					
                        <Center><p id="policy">Sesame snaps halvah tart cheesecake applicake. Caramels donut jelly-o powder<br>
						marzipan danish pastry fruitcake chocolate cake. Unerdwear.com marshmallow<br>
						tootsie roll topping.</p>
						

					
					
<!-- End Contact Form -->
		


		
		

			   <!-- End Text -->
			



<!-- Footer Table -->
			
			
<div class="footer-container">
<footer id="footer"  class="container">
<div class="row"></div>
					
<div class="" align="left">
	      	
<br>
 <div class="footer"><h1 class="element center pink uppercase,text-transform: uppercase;">Contact kitteh</h1>
	      	

<h3 class="element lowercase lowecase,text-transform: lowercase;">Grumpy
Cat</h3>

<h3 style="font-weight: normal;"
 class="element lowercase lowecase,text-transform: lowercase;">Sesame
snaps, Halvah tart, cheesecake, TR27 4HH</h3>
<br>

</div>
		 
		  

<div id="footer">
<div class="container">
 <div class="row">

<!--Email-->
<h3
 class="element lowercase pink lowecase,text-transform: lowercase;"><img
 src="img/icon-mail.png"><span style="color: rgb(102, 102, 102);"> Email <a href="mailto:cupcake@nyancat.com">cupcake@nyancat.com</a></span></h3>
<!--Email-->


<!--Telephone-->
<br>
<h3
 class="element lowercase pink lowecase,text-transform: lowercase;"><img
 src="img/telephone.png"><a
 style="color: rgb(102, 102, 102);">Telephone +44 (0)1736 758 600</a></h3>
 <br>
 
<!--Telephone-->


<center><h3 style="font-weight: normal;"><span
 style="font-weight: bold;">Kitten Meow</span><span class="small_footer"> (Registered
Address) Foundry Square, Hayle, Cornwall,TR27 4HH</span>


<!-- Footer End Table -->
	
	
    <!-- /.container -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
	  <script src="js/jquery.js"></script>
    <!-- Script to Activate the Carousel -->
   
</body>
</html>
