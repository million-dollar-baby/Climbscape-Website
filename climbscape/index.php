<?php

/*** mysql hostname ***/
$hostname = "climbscapein.ipagemysql.com";

/*** mysql username ***/
$username = "anil";

/*** mysql password ***/
$password = "eknokajhuta";

try {
    $pdo = new PDO("mysql:host=$hostname;dbname=climbscape", $username, $password);
    /*** echo a message saying we have connected ***/
    $msg = 'Connected to database successfully';
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }
	
	$sql = 'SELECT * FROM webpage_setting';
 
    $stmt = $pdo->query($sql);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
	$row = $stmt->fetch();
	if($row['status'] == '1'){
?>

<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>ClimbScape</title>
	<meta name="description" content="">  
	<meta name="author" content="">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="css/base.css">
   <link rel="stylesheet" href="css/vendor.css">  
   <link rel="stylesheet" href="css/main.css">  

   <!-- script
   ================================================== -->
	<script src="js/modernizr.js"></script>
	<script src="js/pace.min.js"></script>

   <!-- favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<style>
	p{font-family: "montserrat-regular", sans-serif!important;}
	.lead {font-family: "montserrat-regular", sans-serif!important;}
	ul li {font-family: "montserrat-regular", sans-serif!important;}
	.author-info {font-family: "montserrat-regular", sans-serif!important;}
	.service-content ul li {font-size: 18px; line-height: 29px;}
	
	.list-links a {color:#868585;}
	.address_font {font-family: "montserrat-bold", sans-serif; font-style: normal;
    text-rendering: optimizeLegibility; letter-spacing: .2rem; font-size: 1.2rem; font-variant-ligatures: common-ligatures;}
	</style>
</head>

<body id="top">

	<!-- header 
   ================================================== -->
   <header> 

   	<div class="header-logo" style="margin-top:-3px;">
	      <a href="index.html">ClimbScape</a>
	   </div> 

		<a id="header-menu-trigger" href="#0">
		 	<span class="header-menu-text">Menu</span>
		  	<span class="header-menu-icon"></span>
		</a> 

		<nav id="menu-nav-wrap">

			<a href="#0" class="close-button" title="close"><span>Close</span></a>	

	   	<h3>ClimbScape.</h3>  

			<ul class="nav-list">
				<li class="current"><a class="smoothscroll" href="#home" title="">Home</a></li>
				<li><a class="smoothscroll" href="#about" title="">About</a></li>
				<li><a class="smoothscroll" href="#services" title="">Services</a></li>
				<li><a class="smoothscroll" href="#why_choose_us" title="">Capabilities</a></li>
				<li><a class="smoothscroll" href="#testimonials" title="">Testimonials</a></li>
				<li><a class="smoothscroll" href="#contact" title="">Contact</a></li>						
			</ul>	

			<!--<p class="sponsor-text">
				Looking for an awesome and reliable webhosting? Try <a href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT">DreamHost</a>.
				Get <span>$50 off</span> when you sign up with the promocode <span>styleshout</span>. 
				<!-- Simply type	the promocode in the box labeled “Promo Code” when placing your order. -->
			<!--</p>-->			

			<ul class="header-social-list">
	         <li>
	         	<a href="https://www.facebook.com/climbscape1949/" target="_blank"><i class="fa fa-facebook-square"></i></a>
	         </li>
	         <li>
	         	<a href="https://twitter.com/ClimbScape" target="_blank"><i class="fa fa-twitter"></i></a>
	         </li>
	         <li>
	         	<a href="https://www.linkedin.com/in/anilkumar-rao-b7b44545/" target="_blank"><i class="fa fa-linkedin"></i></a>
	         </li>
            <li>
            	<a href="https://www.youtube.com/channel/UC5oFnn_Ajegv-nJbvW6csPA" target="_blank"><i class="fa fa-youtube"></i></a>
            </li>
	        <!-- <li>
	         	<a href="#"><i class="fa fa-dribbble"></i></a>
	         </li>-->
			<!-- Here you will get many icons : https://www.w3schools.com/icons/fontawesome_icons_brand.asp -->	         
	      </ul>	

			

		</nav>  <!-- end #menu-nav-wrap -->

	</header> <!-- end header -->  


   <!-- home
   ================================================== -->
   <section id="home">

   	<div class="overlay"></div>

   	<div class="home-content-table">	
		   <div class="home-content-tablecell">
		   	<div class="row">
		   		<div class="col-twelve">		   			
			  		
			  				<h3 class="animate-intro">We Are ClimbScape.</h3>
				  			<h1 class="animate-intro">
							We Craft Stunning  <br>
							Brand Experiences.
				  			</h1>	

				  			<div class="more animate-intro">
				  				<a class="smoothscroll button stroke" href="#about">
				  					Learn More
				  				</a>
				  			</div>							

			  		</div> <!-- end col-twelve --> 
		   	</div> <!-- end row --> 
		   </div> <!-- end home-content-tablecell --> 		   
		</div> <!-- end home-content-table -->

		<ul class="home-social-list">
	      <li class="animate-intro">
	        	<a href="https://www.facebook.com/climbscape1949/" target="_blank"><i class="fa fa-facebook-square"></i></a>
	      </li>
	      <li class="animate-intro">
	        	<a href="https://twitter.com/ClimbScape" target="_blank"><i class="fa fa-twitter"></i></a>
	      </li>
	      <li class="animate-intro">
	        	<a href="https://www.linkedin.com/in/anilkumar-rao-b7b44545/" target="_blank"><i class="fa fa-linkedin"></i></a>
	      </li>
         <li class="animate-intro">
           	<a href="https://www.youtube.com/channel/UC5oFnn_Ajegv-nJbvW6csPA" target="_blank"><i class="fa fa-youtube"></i></a>
         </li>
	      <!--<li class="animate-intro">
	        	<a href="#"><i class="fa fa-dribbble"></i></a>
	      </li>	--> 

			<!-- Here you will get many icons : https://www.w3schools.com/icons/fontawesome_icons_brand.asp -->
			
	   </ul> <!-- end home-social-list -->	

		<div class="scrolldown">
			<a href="#about" class="scroll-icon smoothscroll">		
		   	Scroll Down		   	
		   	<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
			</a>
		</div>			
   
   </section> <!-- end home -->


   <!-- about
   ================================================== -->
   <section id="about">

   	<div class="row about-wrap">
   		<div class="col-full">

   			<div class="about-profile-bg"></div>

				<div class="intro">
					<!--<h3 class="animate-this">ClimbScape</h3>-->
				<!--<p class="lead animate-this" style="margin-top:0; font-size:28px; color:#07617d">CLIMBSCAPE</p> -->
				<span class="section-intro">
				<h1 style="color:#07617d; line-height:2.375"> ClimbScape  </h1>
				
				</span>
	   			<p class="lead animate-this" style="margin-top:0"><!--<span>ClimbScape</span> is -->An Advertising and Brand Advisory firm, nurtured by creative aspirations and an intense creative craving. ClimbScape is one of the leading advertising agencies, with a strong focus on creating dynamic, engaging, and memorable marketing and Brand campaigns. With an experience of more than a decade, with the aim of taking a leaner, hungrier and more effective approach to the traditional marketing model.</p>
				<p class="lead animate-this">Producing creative work that has transformed some of the best known brands and global companies through our brand metabolism process that transforms your business and effectively delivers Return of Investment.</p>
				<p class="lead animate-this">We follow a very tactical ways to develop strategy and to build brand equity. The key components are Competitive Analysis, Brand Architecture, Creative Elements, Position, Promise, Reasons to believe, Market Opportunity, Consumer Insights, Key Messages, Brand Character, Personality, Road Map and Brand Expressions., that’s how we build brands and customers.</p>
				</div>   

   		</div> <!-- end col-full  -->
   	</div> <!-- end about-wrap  -->

   </section> <!-- end about -->


   <!-- about
   ================================================== -->
   <section id="services">

   	<div class="overlay"></div>
   	<div class="gradient-overlay"></div>
   	
   	<div class="row narrow section-intro with-bottom-sep animate-this">
   		<div class="col-full">
   			
   				<!--<h3>Services</h3>-->
   			   <h1>What We Do</h1>
   			
   			   <p class="lead" style="font-family: 'librebaskerville-bold', serif;">ClimbScape utilises a wealth of experience to provide services that cover a wide range of areas of expertise. From traditional areas of Advertising and Brand Communications, Digital Marketing through the increasingly used social media marketing, our team has the knowledge, skills, and above all, passion to create ground breaking campaigns that work best for you.</p>
   			
   	   </div> <!-- end col-full -->
   	</div> <!-- end row -->

   	<div class="row services-content">

   		<div class="services-list block-1-2 block-tab-full group">

	      	
				<div class="bgrid service-item animate-this">	

	      		<span class="icon"><i class="icon-paint-brush"></i></span>            

					<div class="service-content">
						<h3 class="h05">Branding</h3>

						<ul style="text-align:left;">
						<li> Brand Strategy Development and Implementation </li> 
						<li> Corporate Identity Development </li> 
						<li> Retail Communication </li> 
						<li> Visual Merchandising </li> 
						<li> Logos </li> 
						<li> Brochures </li> 
						<li> Posters </li> 
						<li> Banners </li> 
						<li> Teasers </li> 
						<li> Internal Communication </li> 
						<li> Newsletters </li> 
						<li> Electronic Digital Mailers </li> 
						<li> ATL and BTL </li> 


						</ul>
					</div> 	         	 

				</div> <!-- end bgrid -->
				

			   <div class="bgrid service-item animate-this">

			   	<span class="icon"><i class="icon-lego-block"></i></span>		            

	            <div class="service-content">
	            	<h3 class="h05">2D / 3D Animations</h3>

		            <ul style="text-align:left;">
					<li>Feature Length Films </li>
					<li>TVC’s </li>
					<li>Logo Animation </li>
					<li>Story Boarding </li>
					<li>Titling </li>
					<li>Motion Graphics. </li>
					<li>3D Rendering and Walkthrough </li>
					</ul>

	            </div> 	            	               

			   </div> <!-- end bgrid -->

				<div class="bgrid service-item animate-this">

					<span class="icon"><i class="icon-megaphone"></i></span>	              

	            <div class="service-content">
	            	<h3 class="h05">Audio Visuals</h3>
					<ul style="text-align:left;">
					
		           <li> Corporate Films </li>
					<li>Educational Videos </li>
					<li> Promos </li>
					<li>E-Learning</li>
	         		</ul>
	            </div>                

				</div> <!-- end bgrid -->	


					

			<div class="bgrid service-item animate-this">	

					<span class="icon"><i class="icon-earth"></i></span>                          

	            <div class="service-content">	
	            	<h3 class="h05">Digital</h3>  

		            <ul style="text-align:left;">
					<li>Digital Marketing.</li> 
					<li> Social Media Marketing. </li> 
					<li> Websites. </li> 
					<li> E-mailers. </li> 
					<li> Banners and Newsletters. </li> 
					


					</ul>	         		
	            </div>	                          

			</div> <!-- end bgrid -->	


				

	    </div> <!-- end services-list -->
   		
   	</div> <!-- end services-content -->   			

   </section> <!-- end services -->


   <!-- portfolio
   ================================================== -->
 
 
 <!-- Why choose us : STARTS -->
 
 <section id="why_choose_us" style="background:#e9eaea;">

		<div class="row animate-this">
			<div class="col-twelve">
			<br><br>
			<h1 class="animate-this" style="color:#07617d; font-size:4.8rem; font-family:'librebaskerville-bold', serif"><center> Why Choose Us </center>  </h1>
			 <p style="font-size:19px; color:black; text-align:center;">
			We believe ideas come from everyone, everywhere. At ClimbScape, everyone within our agency walls is a designer in their own right. And there are a few principles we believe—and we believe everyone should believe—about our design craft. These truths drive us, motivate us, and ultimately help us redefine the power of design. We’re big believers in doing right by our neighbours. So we do what we can to support the community we love.
			
			</p>
			<br><br>
			
			</div>
		</div>
  </section>		
 <!-- Why choose us : ENDS -->
 
 
 
 
 
 
 
 


   <!-- Testimonials Section
   ================================================== -->
   <section id="testimonials">

   	<div class="row">
   		<div class="col-twelve">
   			<h1 class="animate-this" style="color:#07617d; font-size:4.8rem; font-family:'librebaskerville-bold', serif">What They Say About Us</h1>
   		</div>   		
   	</div>   	

      <div class="row flex-container">
    
         <div id="testimonial-slider" class="flex-slider animate-this">

            <ul class="slides">

               <li>
                  <p style="font-size:19px;">
                 ClimbScape lets you shine, it lets you put your thoughts together in a very concise format and they really help you present your best face. The team is very co-operative and understands minute details and lets us achieve our goals. Thank you ClimbScape.
                  </p> 

                  <div class="testimonial-author">
                    	<!--<img src="images/avatars/user-02.jpg" alt="Author image">-->
                    	<div class="author-info">
                    		Chetan Bhoite
                    		<span class="position">Director</span><br>
							CD IT Solutions.
                    	</div>
                  </div>                 
             	</li> <!-- end slide -->

               <li>
                  <p style="font-size:19px;">
                 ClimbScape helps us to efficiently communicate with our customers in a controlled way. ClimbScape's creative team help us optimize our presentations to hold our prospects interest and maximize revenues. I thoroughly thank ClimbScape <br> and the entire team for their support. 
                  </p>

               	<div class="testimonial-author">
                    	<!--<img src="images/avatars/user-03.jpg" alt="Author image">-->
                    	<div class="author-info">
                    		Nadeem Lashkaria
                    		<span>Director</span><br>
							World7 Mediacraft Pvt. Ltd.
                    	</div>
                  </div>                                         
               </li> <!-- end slide -->
			   
			   
			  		   
			   <li>
                  <p style="font-size:19px;">
                 From Marketing to Brand and Advertising, a well thought out and intuitive service ClimbScape has. Its really impossible to recommend anything else, always ClimbScape for all our design and creative needs.
                  </p>

               	<div class="testimonial-author">
                    	<!--<img src="images/avatars/user-03.jpg" alt="Author image">-->
                    	<div class="author-info">
                    		Azeem Bantawala
                    		<span>Sr. Vice President</span><br>
							ABB Group
                    	</div>
                  </div>                                         
               </li> <!-- end slide -->
			   
			   
			   <li>
                  <p style="font-size:19px;">
                 We appreciate the professionalism of ClimbScape, We have worked with you guys for 3 years and looks like we should get another 3 in. 
                  </p>

               	<div class="testimonial-author">
                    	<!--<img src="images/avatars/user-03.jpg" alt="Author image">-->
                    	<div class="author-info">
                    		Anuja Singh
                    		<span>Vice president </span><br>
							DLF
                    	</div>
                  </div>                                         
               </li> <!-- end slide -->
			   
			   
			   <li>
                  <p style="font-size:19px;">
                ClimbScape has delivered to us powerful response models, helping us increase response rates by as much as 30%. ClimbScape's strong creative capabilities and excellent understanding of the marketing and design, helped us deliver solutions that solve real business problems effectively. Their professional approach in managing Brand ensured that our expectations were exceeded through the engagement. 
                  </p>

               	<div class="testimonial-author">
                    	<!--<img src="images/avatars/user-03.jpg" alt="Author image">-->
                    	<div class="author-info">
                    		Kartik Acharya
                    		<span>Head Marketing </span><br>
							Sigma Industries.
                    	</div>
                  </div>                                         
               </li> <!-- end slide -->
			   
			   

            </ul> <!-- end slides -->

         </div> <!-- end testimonial-slider -->         
        
      </div> <!-- end flex-container -->

   </section> <!-- end testimonials -->


	<!-- stats
   ================================================== -->
   <section id="clients">

		<div class="row animate-this">
			<div class="col-twelve">

				<div class="client-lists owl-carousel">
  					<div><img src="images/clients/cadbury.png" alt=""></div>
  					<div><img src="images/clients/philip.png" alt=""></div>
  					<div><img src="images/clients/barclays.png" alt=""></div>
  					<div><img src="images/clients/hersheys.png" alt=""></div>
  					<div><img src="images/clients/MTV.png" alt=""></div>
  					<div><img src="images/clients/mahindra.png" alt=""></div>
  					<div><img src="images/clients/s_electric.png" alt=""></div>
  					<div><img src="images/clients/Sun_tv_network.png" alt=""></div>
					<div><img src="images/clients/trident_hotels.png" alt=""></div>
  					
  					
				</div>
				
			</div> <!-- end col-twelve -->
		</div> <!-- end row -->

   </section> <!-- end clients -->


	<!-- contact
   ================================================== -->
   <section id="contact">

      <div class="overlay"></div>

		<div class="row narrow section-intro with-bottom-sep">
		<!--<div class="row narrow section-intro with-bottom-sep animate-this">-->
   		<div class="col-twelve">
   			<!--<h3>Contact</h3>-->
   			<h1>Get In Touch</h1>

   			<!--<p class="lead">Enquire with us</p>-->
   		</div> 
   	</div> <!-- end section-intro -->

   	<div class="row contact-content">

   		<div class="col-seven tab-full">
		<!--<div class="col-seven tab-full animate-this">-->

   			<h5>Send Us A Message</h5>

            <!-- form -->
            <form name="contactForm" id="contactForm" method="post">     			

               <div class="form-field">
 					   <input name="contactName" type="text" id="contactName" placeholder="Name" value="" minlength="2" required="">
               </div>

               <div class="row">
                 	<div class="col-six tab-full">
                 		<div class="form-field">
                 			<input name="contactEmail" type="email" id="contactEmail" placeholder="Email" value="" required="">
                 		</div>		      			   
		            </div>
	            	<div class="col-six tab-full">	            
	            		<div class="form-field">
	            			<input name="contactSubject" type="text" id="contactSubject" placeholder="Subject" value="">
	                  </div>		     				   
		            </div>
               </div>
                                         
               <div class="form-field">
	              	<textarea name="contactMessage" id="contactMessage" placeholder="message" rows="10" cols="50" required=""></textarea>
	            </div> 

               <div class="form-field">
                  <button class="submitform">Submit</button>

                  <div id="submit-loader">
                     <div class="text-loader">Sending...</div>                             
       			      <div class="s-loader">
							  	<div class="bounce1"></div>
							  	<div class="bounce2"></div>
							  	<div class="bounce3"></div>
							</div>
						</div>
               </div>

      		</form> <!-- end form -->

            <!-- contact-warning -->
            <div id="message-warning"></div> 

            <!-- contact-success -->
      		<div id="message-success">
               <i class="fa fa-check"></i>Your message was sent, thank you!<br>
      		</div>

         </div> <!-- end col-seven --> 

         <!--<div class="col-four tab-full contact-info end animate-this">-->
		  <div class="col-four tab-full contact-info end">

         	<h5>Contact Information</h5>

         	<div class="cinfo">
	   			<h6>Where to Find Us</h6>
	   			<!--<p class="address_font">-->
				<b style="font-family:montserrat-regular, sans-serif!important; font-size:16px">
	            	<!--Bhandup West,<br>-->
					For Business Enquiry: 
					</b>
					<br>
					<b style="font-family:montserrat-regular, sans-serif!important; font-size:14px; margin-bottom:0">INDIA </b>
					<p style="line-height:20px;">
	            	<span style="font-family:montserrat-regular, sans-serif!important; font-size:14px; margin-bottom:0">Mumbai Head Office.</span>
					
					<br>
					<span style="font-family:montserrat-regular, sans-serif!important; font-size:13px; margin-bottom:0">mumbai@climbscape.in </span><br>
					<br>
					<span style="font-family:montserrat-regular, sans-serif!important; font-size:14px; margin-bottom:0">Bengaluru Office. </span><br>
					<span style="font-family:montserrat-regular, sans-serif!important; font-size:13px; margin-bottom:0">bengaluru@climbscape.in </span><br>
					</p>
					
	            	
	            </p>
	   		</div> <!-- end cinfo -->

	   		<div class="cinfo">
	   			<h6>Email Us At</h6>
	   			<!--<p class="address_font">-->
				<p style="font-family:montserrat-regular, sans-serif!important; font-size:13px">
	   				connect@climbscape.in<br>
				   		     
				 </p>
	   		</div> <!-- end cinfo -->

	   		<div class="cinfo">
	   			<h6>Call Us At</h6>
	   			<p class="address_font">
	   				+91 - <!--983 375 47 02-->996 768 37 07<br>
				   
				</p>
	   		</div>

         </div> <!-- end cinfo --> 

   	</div> <!-- end row contact-content -->
		
	</section> <!-- end contact -->


	<!-- footer
   ================================================== -->
	<footer>
     	<div class="footer-main">

   		<div class="row">  

	      	<div class="col-five tab-full footer-about">       

	            <h4 class="h05">ClimbScape.</h4>

	            <p>ClimbScape houses creatively potent squad of Creative Directors, Art Directors, Visualizers, Graphic Designers, Copy and Content writers, Client Servicing, etc., with a more then a decade of thorough experience which significantly reflects in the work that we do. We prefer evaluating and putting ourselves to test with every assignment and task we undertake. Our Aim is to always help your Brand escalate creatively and get noticed in today's cluttered communication environment.</p>	            

		      </div> <!-- end footer-about -->

	      	<div class="col-three tab-full footer-social">

	      		<h4 class="h05">Follow Us.</h4>

	      		<ul class="list-links">
	      			<li><a href="https://www.facebook.com/climbscape1949/" target="_blank">Facebook</a></li>
						<li><a href="https://twitter.com/ClimbScape" target="_blank">Twitter</a></li>
						<li><a href="https://www.linkedin.com/in/anilkumar-rao-b7b44545/" target="_blank">linkedin</a></li>
						<li><a href="https://www.youtube.com/channel/UC5oFnn_Ajegv-nJbvW6csPA" target="_blank">Youtube</a></li>
						<!--<li><a href="#">Dribble</a></li>-->
						<!-- Here you will get many icons : https://www.w3schools.com/icons/fontawesome_icons_brand.asp -->
					</ul>

	      	</div> <!-- end footer-social -->  

	      	<div class="col-four tab-full footer-subscribe end">

	      		<h4 class="h05">Get Notified.</h4>

	      		<p>Do subscribe with us</p>

	      		<div class="subscribe-form">
	      	
	      			<form id="mc-form" class="group" novalidate="true">

							<input type="email" value="" name="dEmail" class="email" id="mc-email" placeholder="type email" required="" style="color:#868585;"> 
	   		
			   			<!-- <input type="submit" name="subscribe" > -->
			   			<button><i class="icon-mail"></i></button>
		   	
		   				<label for="mc-email" class="subscribe-message"></label>
			
						</form>

	      		</div>
	      	           	
	      	</div> <!-- end footer-subscribe -->      	    

	      </div> <!-- end row -->

   	</div> <!-- end footer-main -->

   	<div class="footer-bottom">

      	<div class="row">

      		<div class="col-twelve">
	      		<div class="copyright">
		         	<span>© Copyright ClimbScape 2017. <span style="font-size:11px;"> All Rights Reserved.</span> </span> 
		         	<!--<span>Design by <a href="http://www.creativewebsitecompany.com">Creative Website Company</a></span>-->		         	
		         </div>		               
	      	</div>

      	</div>   	

      </div> <!-- end footer-bottom -->

      <div id="go-top">
		   <a class="smoothscroll" title="Back to Top" href="#top">
		   	<i class="fa fa-long-arrow-up" aria-hidden="true"></i>
		   </a>
		</div>		
   </footer>

   <div id="preloader"> 
    	<div id="loader"></div>
   </div> 

   <!-- Java Script
   ================================================== --> 
   <script src="js/jquery-2.1.3.min.js"></script>
   <script src="js/plugins.js"></script>
   <script src="js/main.js"></script>

</body>

</html>
<?php
	}
	else {
		echo '<html><head><title>climbscape.in </title></head><body><center> <h1> '.$row['comment'].'</h1></center></body></html>';
	}
	?>
	