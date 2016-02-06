<!DOCTYPE html>
<?php
ob_start();
if(isset($_GET['err'])){
    if ($_GET['err']=="sent") {
        echo '<script>
            alert("We will contact you shortly!!");
        </script>';
    }
}
?>
<html>
<head>
<title>SPDC 2016 VIT Vellore | HOME</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<script src="js/jquery-ui.min.js"></script>
        <meta charset="utf-8" />
		<meta name="language" content="en-us"/>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="description" content="STUDENT PROFESSIONAL DEVELOPMENT CONFERENCE(SPDC)-India 2016-The American Society of Mechanical Engineers(ASME)-VIT university,vellore WEBSITE. DEVELOPED BY- MUKUL DEV(DEVMUKUL44@GMAIL.COM),HIANSHU GUPTA(HIMANSHU199565@GMAIL.COM). " />
		<meta name="keywords" content="SPDC 2016,ASME 2016,SPDC,ASME,STUDENT PROFESSIONAL DEVELOPMENT CONFERENCE,SPDC VIT,VIT university VELLORE,VIT VELLORE,MUKUL DEV,HIMANSHU GUPTA,DEVMUKUL44@GMAIL.COM,MUKUL.DEV@OUTLOOK.COM,mukul.dev2013@vit.ac.in,HIMANSHU199565@GMAIL.COM,MUKUL DEV VIT,MUKUL DEV VIT VELLORE,DEVMUKUL44,HIMANSHU GUPTA VIT, Web Designing" />
		<meta name="distribution" content="Global" />
		<meta name="robots" content="index, follow" />
		<meta name="revisit-after" content="1 days"/>
		<meta name="publisher" content="ASME INDIA, VIT VELLORE, MUKUL DEV , HIMANSHU GUPTA" />
		<meta name="copyright" content="ASME INDIA 2016"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Anton' rel='stylesheet' type='text/css'>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="js/responsiveslides.min.js"></script>
  <script type="text/javascript">
    $(window).load(function(){
        $('#myModal').modal('show');
    });
</script>
<script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
	
  </script>
    <script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});
		</script>
    <!------ Light Box ------>
    <link rel="stylesheet" href="css/swipebox.css">
    <script src="js/jquery.swipebox.min.js"></script> 
    <script type="text/javascript">
		jQuery(function($) {
			$(".swipebox").swipebox();
		});
	</script>
    <!------ Eng Light Box ------>	
	
</head>
<body>
	<!-- header-section-starts -->
	<div class="header">
		<div class="top-header navbar-fixed-top">
			<div class="container">
				<div class="logo">
					<a href="index.php"><img src="images/asme_logo1.png" class="img-responsive" alt="" /></a>			
				</div>
				<div class="top-menu">
				  <span class="menu"> </span>
					<ul>
						<li><a href="#home" class="scroll">Home</a></li>
						<li><a href="#portfolio" class="scroll">Student Design Competition</a></li>
						<li><a href="#portfolio" class="scroll">Old Guard Competitions</a></li>
						<li><a href="#contact-section" class="scroll">Contact Us</a></li>
						<li><a href="login.php">Register</a></li>
						<div class="clearfix"></div>
					</ul>
				</div>
				 <!--script-nav-->
		 <script>
		 $("span.menu").click(function(){
		 $(".top-menu ul").slideToggle("slow" , function(){
		 });
		 });
		 </script>

<!-- 			<div class="clearfix"></div>
-->			</div>
		</div>
<!--		<div class="header-bottom">
			<div class="container">
				<ul class="header-contact">
					<li class="span-2">
						<div class="icon">
							<i class="message"></i>
						</div>
						<div class="icon-data">
							<p>EMAIL@YOURCOMPANY.COM</p>
						</div>
						<div class="clearfix"></div>
					</li>
					<li class="span-2">
						<div class="icon">
							<i class="telephone"></i>
						</div>
						<div class="icon-data">
							<p>081-25445-4032</p>
						</div>
						<div class="clearfix"></div>
					</li>
					<li class="social-icons">
						<a href="#"><i class="feed"></i></a>
						<a href="#"><i class="facebook"></i></a>
						<a href="#"><i class="twitter"></i></a>
						<a href="#"><i class="dribble"></i></a>
						<a href="#"><i class="pinterest"></i></a>
					</li>
					<div class="clearfix"></div>
				</ul>
			</div>
		</div>
	</div>  -->
    <!-- header-section-ends --> 
	
	<!-- Modal -->
	<div class="container">
  <div class="modal fade in" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-body">
          <img src="images/poster.jpg" style="width:100%;height=80%;">
        </div>
      </div>
      
    </div>
  </div>
  </div>
  
	<div class="header-slider" id="home">
		<div class="slider">
			<div class="callbacks_container">
			  <ul class="rslides" id="slider">
				<li>
				<img src="images/1.jpg" alt="">
				  <div class="caption">
					<h3><span class="color-3">STUDENT PROFESSIONAL DEVELOPMENT CONFERENCE</span></h3>
					<p>SPDC is an incredible learning experience for aspiring young students. This conference helps you to develop your knowledge and skills required in the engineering workplace.</p>
					<br><br><br><br>	<a class="morebtn" href="login.php">REGISTER</a>
				  </div>
				</li>
				<li>
				  <img src="images/2.jpg" alt="">
					<div class="caption">
					<h3><span class="color-2">STUDENT PROFESSIONAL DEVELOPMENT CONFERENCE</span> </h3>
					<p>You also get to showcase your design projects and most of all meet like minded people and expand your network while also getting new and exciting ideas for future projects.</p>
					<br><br><br><br>	  <a class="morebtn" href="login.php">REGISTER</a>
				  </p>
				  </div>
				</li>
				<li>
				  <img src="images/3.jpg" alt="">
				  <div class="caption">
					<h3><span class="color-1">STUDENT PROFESSIONAL DEVELOPMENT CONFERENCE</span></h3>
					<p>You also get to showcase your design projects and most of all meet like minded people and expand your network while also getting new and exciting ideas for future projects.</p>
					<br><br><br><br>	  <a class="morebtn" href="login.php">REGISTER</a>
				  </div>
				</li>
				<li>
				  <img src="images/4.jpg" alt="">
				  <div class="caption">
					<h3><span class="color-1">STUDENT PROFESSIONAL DEVELOPMENT CONFERENCE</span></h3>
					<p>LEARN | CONNECT <br>MAKE A DIFFERENCE</p>
					<br><br><br><br>	  <a class="morebtn" href="login.php">REGISTER</a>
				  </div>
				</li>
				<li>
				<img src="images/5.jpg" alt="">
				  <div class="caption">
					<h3><span class="color-3">STUDENT PROFESSIONAL DEVELOPMENT CONFERENCE</span></h3>
					<p>SPDC is an incredible learning experience for aspiring young students. This conference helps you to develop your knowledge and skills required in the engineering workplace.</p>
					<br><br><br><br>	<a class="morebtn" href="login.php">REGISTER</a>
				  </div>
				</li>
			  </ul>
		  </div>
	  </div>
	 </div>
	 <!-- content-section-starts -->
	 <div class="services-section" id="ABOUT-US">
		 <div class="border">
			<img src="images/border.png" alt="" />
		 </div>
		<div class="container">
			<div class="services-section-head ">
				<h3>STUDENT PROFESSIONAL DEVELOPMENT CONFERENCE</h3>
				<p>SPDC is an incredible learning experience for aspiring young students. This conference helps you to develop your knowledge and skills required in the engineering workplace. You also get to showcase your design projects and most of all meet like minded people and expand your network while also getting new and exciting ideas for future projects.</p>
				<p>This conference entails :
<!--				<br><br>
->Student Design Competition<br>
->Old Guard Oral Presentation<br>
->Old Guard Video Presentation<br>
->Old Guard Technical Webpage Presentation<br>
->Technical Poster Presentation<br>
->Guest Lectures<br>
->Banquet Dinner
				</p>
-->				
<!--				<div style="color=white;">
				<ul type="none">
				<li>
				->Student Design Competition
				</li>
				<li>
				->Old Guard Oral Presentation
				</li>
				<li>
				->Old Guard Video Presentation
				</li>
				<li>
				->Old Guard Technical Webpage Presentation
				</li>
				<li>
				->Technical Poster Presentation
				</li>
				<li>
				->Guest Lectures
				</li>
				<li>
				->Banquet Dinner 
				</li>
				<ul>
				</div>
				
-->	

<pre>
->Student Design Competition
->Old Guard Oral Presentation
->Old Guard Video Presentation
->Old Guard Technical Webpage Presentation
->Technical Poster Presentation
->Guest Lectures
->Banquet Dinner 
</pre>

 <p>
 Student Professional Development Conference is an event organized by ASME which provides an opportunity to participate in the design and communication skills competition, as well as professional development seminars where students of all engineering disciplines can meet and hear the industry experts, network and become visible to the industry representatives.
 </p>
			</div>
<!--			<div class="services-section-grids text-center">
				<div class="col-md-4 services-section-grid">
					<img src="images/service-img-1.png" alt="" />
					<h5>Experienced</h5>
					<p>There are many variations of passages of Lorem Ipsum available, but the majority </p>
				</div>
				<div class="col-md-4 services-section-grid">
					<img src="images/services-img-3.png" alt="" />
					<h5>Responsive</h5>
					<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sitamet,consectetu radipisci  </p>
				</div>
				<div class="col-md-4 services-section-grid">
					<img src="images/services-img-2.png" alt="" />
					<h5>Competitive</h5>
					<p>There are many variations of passages of Lorem Ipsum available, but the majority  </p>
				</div>
				-->
				<div class="clearfix"></div>
			</div>
		</div>
	 </div>

     <div class="project-section" id="portfolio">
	<div class="border">
			<img src="images/border.png" alt="" />
		 </div>
	<div class="project-section-head text-center">
		  <h3>HAPPENING!</h3>
		  <p>EVENTS</p>
	</div>
	    <ul id="filters" class="clearfix">
						<li><span class="filter active" data-filter="app card icon logos web" style="color:white;">All</span></li>
						<li><span class="filter" data-filter="app" style="color:white;">Student Design Competition</span></li>
						<li><span class="filter" data-filter="card" style="color:white;">Old Guard Competitions</span></li>
						<li><span class="filter" data-filter="icon" style="color:white;">coming soon!</span></li>
						<li><span class="filter" data-filter="logos" style="color:white;">coming soon!</span></li>
						</ul>
					<div id="portfoliolist">
					<div class="portfolio app mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="app" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper grid_box">		
							 <a href="images/sdc.jpg" class="swipebox"  title="Student Design Competition 2016<br><br><br><br><br><br><br><br><br><br><br><br><br><a href='sdc.html' target='_blank'><h1 style='color:white;'>More Details</h1></a><p style='color:white;'>(press Esc to go back!)</p>"> <img src="images/sdc.jpg" class="img-responsive" alt="Student Design Competition 2016"><span class="zoom-icon"><h3><pre>     Student Design Competition 2016</pre></h3></span> </a>

		                </div>
					</div>				
					<div class="portfolio card mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper grid_box">		
							 <a href="images/og-oral.jpg" class="swipebox"  title="The Old Guard Oral Presentation Competition<br><br><br><br><br><br><br><br><br><br><br><br><br><a href='ogop.html' target='_blank'><h1 style='color:white;'>More Details</h1></a><p style='color:white;'>(press Esc to go back!)</p>"> <img src="images/og-oral.jpg" class="img-responsive" alt=""><span class="zoom-icon"><h3><pre>The Old Guard Oral Presentation Competition</pre></h3></span> </a>
		                </div>
					</div>					
					<div class="portfolio icon mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="icon" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper grid_box">		
							 <a href="images/soon.png" class="swipebox"  title="Image Title"> <img src="images/soon.png" class="img-responsive" alt=""><span class="zoom-icon"></span> </a>

		                </div>

					</div>
					
					<div class="portfolio card mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper grid_box">		
							 <a href="images/og-video.jpg" class="swipebox"  title="The Old Guard Video Presentation Competition"> <img src="images/og-video.jpg" class="img-responsive" alt="The Old Guard Video Presentation Competition"><span class="zoom-icon"><h3><pre>The Old Guard Video Presentation Competition</pre></h3></span> </a>

		                </div>
					</div>			
					<div class="portfolio card mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper grid_box">		
							 <a href="images/og-webpage.jpg" class="swipebox"  title="The Old Guard Technical Web Page Competition<br><br><br><br><br><br><br><br><br><br><br><br><br><a href='ogtw.html' target='_blank'><h1 style='color:white;'>More Details</h1></a><p style='color:white;'>(press Esc to go back!)</p>"> <img src="images/og-webpage.jpg" class="img-responsive" alt="The Old Guard Technical Web Page Competition"><span class="zoom-icon"><h3><pre>The Old Guard Technical Web Page Competition</pre></h3></span> </a>

		                </div>
					</div>	
					<div class="portfolio card mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper grid_box">		
							 <a href="images/og-poster.jpg" class="swipebox"  title="The Old Guard Technical Poster Competition"> <img src="images/og-poster.jpg" class="img-responsive" alt="The Old Guard Technical Poster Competition"><span class="zoom-icon"><h3><pre>The Old Guard Technical Poster Competition</pre></h3></span> </a>

		                </div>
					</div>	
					<div class="portfolio icon mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="icon" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper grid_box">		
							 <a href="images/soon.png" class="swipebox"  title="Image Title"> <img src="images/soon.png" class="img-responsive" alt=""><span class="zoom-icon"></span> </a>

		                </div>
						</div>
						<div class="portfolio logos mix_all wow bounceIn" data-wow-delay="0.4s" data-cat="logos" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper grid_box">		
							 <a href="images/soon.png" class="swipebox"  title="Image Title"> <img src="images/soon.png" class="img-responsive" alt=""><span class="zoom-icon"></span> </a>

		                </div>
					</div>
					
<div class="clearfix"></div>					
				</div>
				
<!--				<div class="portfolio-botton">
						<input type="button" value="Our Portfolio">
					</div>
-->					
				<div class="border-1">
			<img src="images/border.png" alt="" />
		 </div>
				
		  <div class="clearfix"></div>
            </div>
	  <!-- Script for gallery Here -->
				<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
					<script type="text/javascript">
					$(function () {
						
						var filterList = {
						
							init: function () {
							
								// MixItUp plugin
								// http://mixitup.io
								$('#portfoliolist').mixitup({
									targetSelector: '.portfolio',
									filterSelector: '.filter',
									effects: ['fade'],
									easing: 'snap',
									// call the hover effect
									onMixEnd: filterList.hoverEffect()
								});				
							
							},
							
							hoverEffect: function () {
							
								// Simple parallax effect
								$('#portfoliolist .portfolio').hover(
									function () {
										$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
										$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');				
									},
									function () {
										$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
										$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
									}		
								);				
							
							}
				
						};
						
						// Run the show!
						filterList.init();
						
						
					});	
					</script>
<!--			<div class="testimonials-section" id="CLIENTS">
				<div class="container">
					<div class="testimonials-section-grids">
						<div class="col-md-6 testimonial-section-left-grid">
						    <h3>Client <span>Testimonials</span></h3>
							<div class="course_demo">
		          <ul id="flexiselDemo3">	
					<li>
						<div class="client-image">
							<img src="images/client-1.jpg" alt="" />
						</div>
						<div class="client-text">
							<p><i class="open"></i>Lorem ipsum dolor sit amet, consnt dolore magna aliquam erat voaliquamer qui dolorem adipisci velit.<i class="close1"></i></p>
							<span>Reiter Soumillon</span><br>
							<a href="#">www.downloadpsd.co</a>
						</div>
						<div class="clearfix"></div>
					</li>
					<li>
						<div class="client-image">
							<img src="images/client-2.jpg" alt="" />
						</div>
						<div class="client-text">
							
							<p><i class="open"></i>Lorem ipsum dolor sit amet, consnt dolore magna aliquam erat voaliquamer qui dolorem adipisci velit.<i class="close1"></i></p>
							
							<span>Reiter Soumillon</span><br>
							<a href="#">www.downloadpsd.co</a>
						</div>
						<div class="clearfix"></div>
					</li>	
					<li>
						<div class="client-image">
							<img src="images/client-3.jpg" alt="" />
						</div>
						<div class="client-text">
							<p><i class="open"></i>Lorem ipsum dolor sit amet, consnt dolore magna aliquam erat voaliquamer qui dolorem adipisci velit.<i class="close1"></i></p>
							<span>Reiter Soumillon</span><br>
							<a href="#">www.downloadpsd.co</a>
						</div>
						<div class="clearfix"></div>
					</li>									    	  	       	   	  									    	  	       	   	    	
				</ul>

	  </div>

					<script type="text/javascript">
			$(window).load(function() {
				$("#flexiselDemo3").flexisel({
					visibleItems: 1,
					animationSpeed: 1000,
					autoPlay: false,
					autoPlaySpeed: 3000,    		
					pauseOnHover: true,
					enableResponsiveBreakpoints: true,
			    	responsiveBreakpoints: { 
			    		portrait: { 
			    			changePoint:480,
			    			visibleItems: 1
			    		}, 
			    		landscape: { 
			    			changePoint:640,
			    			visibleItems: 1
			    		},
			    		tablet: { 
			    			changePoint:768,
			    			visibleItems: 1
			    		}
			    	}
			    });
			    
			});
		</script>
		<script type="text/javascript" src="js/jquery.flexisel.js"></script>	
	  </div>
						<div class="col-md-6 testimonial-section-right-grid">
	  				  <h3>PIXZEE <span>Skills</span></h3>
	  					<div class="poling">
		              <div class="poll">
			              <div class="poll_desc">
							<h4>Web Design</h4>
						  </div>
						  <div class="percentage">
							<p>90%</p>
						  </div>
						  <div class="clearfix"></div>
			             <div class="skills">
			              	<div style="width:95%"> </div>
	                      </div>
				       </div>
				       <div class="poll">
			              <div class="poll_desc">
							<h4>HTML/CSS</h4>
						  </div>
						  <div class="percentage">
							<p>95%</p>
						  </div>
						  <div class="clearfix"></div>
			              <div class="skills">
			              	<div style="width:95%"> </div>
	                       </div>
				       </div>
				        <div class="poll">
			              <div class="poll_desc">
							<h4>Joomla</h4>
						  </div>
						  <div class="percentage">
							<p>80%</p>
						  </div>
						  <div class="clearfix"></div>
			              <div class="skills">
			              	<div style="width:80%"> </div>
	                      </div>
				       </div>
				       <div class="poll nth-child">
			              <div class="poll_desc">
							<h4>SEO / SMO</h4>
						  </div>
						  <div class="percentage">
							<p>60%</p>
						  </div>
						  <div class="clearfix"></div>
			              <div class="skills">
			              	<div style="width:60%"> </div>
	                      </div>
				       </div>
				     </div>
	  				</div>
					<div class="clearfix"></div>
	  			  </div>

						</div>
						<div class="clearfix"></div>
					</div>
		-->
					<!--background:#337ab7;-->
<aside class="call-to-action host-section" style="padding-top:50px;color:white">

        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    
                    <h1 style="font-size:35px;margin-top:0px;">HOST</h1>

                    <div id="center">
                        <a href="http://vit.ac.in"><img style="margin-top:10px;" src="images/vitlogo.png" height="80" width="165"></a>
                    </div>
                    <p style="text-align:left;"><br>
                        VIT University was established with the aim of providing quality higher education on par with international standards. It persistently seeks and adopts innovative methods to improve the quality of higher education on a consistent basis.
                        The campus has a cosmopolitan atmosphere with students from all corners of the globe. Experienced and learned teachers are strongly encouraged to nurture the students. The global standards set at VIT in the field of teaching and research spur us on in our relentless pursuit of excellence. In fact, it has become a way of life for us. The highly motivated youngsters on the campus are a constant source of pride.
                        Our Memoranda of Understanding with various international universities are our major strength. They provide for an exchange of students and faculty and encourage joint research projects for the mutual benefit of these universities. Many of our students, who pursue their research projects in foreign universities, bring high quality to their work and esteem to India and have done us proud. With steady steps, we continue our march forward. We look forward to meeting you here at VIT.
                        <br>
                        <br>
                        VIT University, established under Section 3 of the University Grants Commission (UGC) Act, 1956, was founded in 1984 as a self-financing institution called the Vellore Engineering College. The Union Ministry of Human Resources Development conferred University status on Vellore Engineering College in 2001. The University is headed by its founder and Chancellor, Dr. G. Viswanathan, a former Parliamentarian and Minister in the Tamil Nadu Government. In recognition of his service to India in offering world class education, he was conferred an honorary doctorate by the West Virginia University, USA. Sankar Viswanathan, Sekar Viswanathan and G.V. Selvam are the Vice-Presidents; Dr. Anand A. Samuel is the Vice-Chancellor and Dr. V. Raju and Dr. S. Narayanan are the Pro-Vice-Chancellors.
                        <br>
                        <br>
                        It has been the constant aim of VIT University to incorporate features of excellence in its campus. Every effort is made to improve the existing best practices in these fields. The Management and staff at VIT take great care to ensure that the Institute serves as an exemplary role model for other educational institutions across the country. VIT has not only accommodated these features of excellence, but it has also added value to them by matching them with the expectations of the resident student community and the staff. VIT's position of excellence among educational institutions in India is primarily because of these unique features.
                        <br>
                        <br>
                        <!--VIT University has been accredited by  Accreditation Board for Engineering and Technology, Inc.(ABET) and National Assessment and Accreditation Council (NAAC). Tata Consultancy Services (TCS) has accredited VIT as an A-grade Institution. VIT is also accredited by Cognizant, Ericsson and Wipro Technologies.-->
                    </p>

                </div>
            </div>
            <div class="row" style="text-align:center;">
                <h2>Reaching VIT University<br><br></h2>
                <div class="col-lg-6 text-left">

                       <h4>FROM CHENNAI INTERNATIONAL AIRPORT<br><br></h4>
                    <p>
                        * Go to the local train station THIRUSULAM (Right in front of the Airport).<br>

                        * Take the local train from THIRUSULAM to PARK STATION.<br>

                        * Reach Chennai Central Railway Station which is right across the road from Park Station.<br>

                        * From Chennai Central Railway Station board any train going to Bangalore, Trivandrum, Coimbatore, etc.<br>

                        * All aforementioned trains stop at KATPADI JUNCTION which is the station which services Vellore. Journey from Chennai Central to Katpadi is approximately 2 hrs.<br>

                        * De-board the train at KATPADI JN and take the auto rickshaw to VIT University.<br>

                        * Alternatively you can also hire a prepaid taxi right from the airport to VIT University.<br><br><br>
                    </p>
                </div>
                <div class="col-lg-6 text-left">
                
                    <h4>
                        FROM BANGALORE INTERNATIONAL AIRPORT<br><br>
                    </h4>
                    <p>
                        * Take the Bus or a prepaid taxi or Cab services like OLA, UBER etc. to the Majestic Railway station.
<br>
                        * Board any train going to Chennai.
<br>
                        * All aforementioned trains stop at KATPADI JUNCTION which is the station which services Vellore. Journey from Majestic to Katpadi is approximately 4 hrs.
<br>
                        * De-board the train at KATPADI JN and take the auto rickshaw to VIT University.<br><br><br><br>
                    </p>
                </div>
            </div>
            <div class="row">
            <div class="col-lg-6 text-left">

                       <h4>
                        FROM CHENNAI RAILWAY STATION<br><br>
                    </h4>
                    <p>
                        * From Chennai Central Railway Station numerous trains are bound for Vellore make reservations 
                        and board any train going to Bangalore, Trivandrum, Coimbatore, etc.<br>
                        *  All aforementioned trains stop at KATPADI JUNCTION which is the station which services Vellore. 
                        Journey from Chennai Central to Katpadi is approximately 2 hrs.<br>
                        *  De-board the train at KATPADI JN and take the auto rickshaw to VIT University.<br>
                    </p>
                </div>
                <div class="col-lg-6 text-left">
                
                    <h4>
                        FROM BANGALORE RAILWAY STATION (MAJESTIC RAILWAY STATION)<br><br>
                    </h4>
                    <p>
                        * From Majestic Railway station there are numerous trains bound for Chennai, board any of them 
after making reservations.
<br>*  All aforementioned trains stop at KATPADI JUNCTION which is the station which services Vellore. 
Journey from Majestic to Katpadi is approximately 4 hrs.
<br>*  De-board the train at KATPADI JN and take the auto rickshaw to VIT University.<br>
                    </p>
                </div>
            </div>
            <div class="row">
            <div class="col-lg-12 text-left">

                       <h4><br><br>
                        FROM KATPADI RAILWAY STATION<br><br>
                    </h4>
                    <p>
                        * As you exit the railway station from the side of platform number 1 you will find a number of 
autorickshaws and cabs to take you to VIT university. <br><br><br><br>
                    </p>
                </div>
            </div>
        </div>
    </aside>
			<div class="contact-section" id="contact-section">
				<div class="contact-section-head">
				    <div class="down">
						<img src="images/sayhello.png" alt="" />
					</div>
					<div class="container">
						<h3>Have a query?  Say <span>Hello</span></h3>
					</div>
					<div class="border-2">
			            <img src="images/border.png" alt="" />
		            </div>
				</div>
				<div class="contact-section-grids">
				    <div class="container">
						<div class="col-md-8 contact-section-left-grid">
							<form name="form1" action="query.php" method="post">
								<input type="text" name="name" class="text" placeholder="Your Name" required>
								<input type="email" name="email" class="text" placeholder="e-mail" required>
								<input type="text" name="subject" class="text" placeholder="The Subject" required>
								 <textarea name="message" onfocus="if(this.value == 'Your Message') this.value='';" onblur="if(this.value == '') this.value='Your Message';" >Your Message</textarea>
								<input type="submit" class="button" value="Submit">
							</form>
						</div>
						<div class="col-md-4 contact-section-right-grid">
							<h4>Contact Details</h4>
							<p></p>
							<ul class="contact-section-list">
								<li><i class="location"></i></li>
								<li>VIT University, Vellore</li>
							</ul>
							<ul class="contact-section-list">
								<li><i class="phone"></i></li>
								<li>Karan Desai : +91-9597592535</li>
							</ul>
							<ul class="contact-section-list">
								<li><i class="mail"></i></li>
								<li>contact@vitspdc.com</li>
							</ul>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			
	<!-- content-section-ends -->
	<!-- footer-section-starts -->
	<div class="footer">
<!--
		<div class="top-footer">
			<div class="col-md-8 top-footer-left-grid">
					<div class="latest-tweets">
						<h4>Latest Tweets</h4>
						<div class="icon-3-square">
							<i class="square-3"></i>
						</div>
						<div class="icon-text">
							<p><span>about 16 hours ago</span> we replied to @<a href="#">daiburchell</a> Donec malesuada vel nulla in vehicula. Quisque facilisis nibh sagittis vestibulum dignissim</p>
						</div>
						<div class="clearfix"></div>
						<div class="icon-3-square">
							<i class="square-3"></i>
						</div>
						<div class="icon-text">
							<p><span>about 16 hours ago</span> we replied to @<a href="#">hugobrien</a> Donec malesuada vel nulla in vehicula. Quisque facilisis nibh sagittis vestibulum dignissim</p>
						</div>
						<div class="clearfix"></div>
						<div class="icon-3-square">
							<i class="square-3"></i>
						</div>
						<div class="icon-text">
							<p><span>about 16 hours ago</span> we replied to @<a href="#">danwright</a> Hello Donec malesuada vel nulla in vehicula. Quisque facilisis nibh sagittis vestibulum dignissim</p>
						</div>
						<div class="clearfix"></div>
			        </div>
					<div class="flickr">
					    <h4>Flickr Photostream</h4>
						<ul>
							<li><img src="images/1.jpg" style="width:1%;height:1%"></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
						</ul>
					</div>
					<div class="clearfix"></div>
			</div>
			<div class="col-md-4 top-footer-right-grid">
				<h4>NEWSLETTER signup</h4>
				<p>Sign up for our newsletter and for daily updates!</p>
				<input type="text" class="text" value="Your name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your name';}">
				<input type="text" class="text" value="Your Email Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Email Address';}">
				<input type="button" value="subscribe">
			</div>
			<div class="clearfix"></div>
		</div>
-->
		<div class="bottom-footer">
			<div class="col-md-8 copy-rights">
				<p>Copyright &copy; 2015  <a href="#">ASME INDIA
				</a></p>
				<p>
				Developed By: <a href="https://www.facebook.com/devmukul44" target="_blank">Mukul Dev</a> , <a href="https://www.facebook.com/gupta.himanshu19" target="_blank">Himanshu Gupta
				</p>
			</div>
			<div class="col-md-4 fax">
					<div class="social-icons">
						<a href="https://www.facebook.com/AsmeVit" target="_blank"><i class="facebook"></i></a>
						<a href="https://twitter.com/ASMEVIT" target="_blank"><i class="twitter"></i></a>
						<a href="#"><i class="dribble"></i></a>
						<a href="#"><i class="pinterest"></i></a>
						<a href="#"><i class="feed"></i></a>
						</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- footer-section-ends -->
			  <script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</body>
</html>