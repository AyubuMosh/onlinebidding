<?php
	session_start();
	require ("db.php");
	require("htmls.php");
	require("functions.php");
	headhtml();
?>
  <div id="main_content">
    <div id="menu_tab">
      <div class="left_menu_corner"></div>
      <ul class="menu">
        <li><a href="home.php" class="nav2"> Home</a></li>
        <li class="divider"></li>
        <li><a href="prodcateg.php" class="nav2">Products</a></li>
        <li class="divider"></li>
        <li><a href="contact.php" class="nav1">About Us</a></li>
        <li class="divider"></li>
<?php account(); ?>
<script type='text/javascript'>
	jQuery(document).ready( function() {
		jQuery('.nav3').hide();
		jQuery('.nav4').click( function() {
			jQuery('.nav3').toggle('fade');	
		});
	});
</script>
      </ul>
      <div class="right_menu_corner"></div>
    </div>
    <!-- end of menu tab -->
    <div class="crumb_navigation"> Navigation: <a href="home.php">Home</a> &lt; <span class="current">About Us</span> </div>
    <div class="left_content">
      <div class="title_box">The Bidding Zone</div>
      <ul class="left_menu">
		<div class="mandm">
		<li class="even"><a>Mission & Objectives</a></li>
		</div>
		<!--<div class="org">
        <li class="odd"><a>Organization</a></li>
		</div>
		<div class="feed">
        <li class="even"><a>Terms and Conditions</a></li>
		</div>-->
		<div class="dev">
        <li class="odd"><a>The Team </a></li>
		</div>
      </ul>
	<?php logform(); ?>
	<div class="title_box">News & Updates</div>
      <div class="border_box">
        <div class="product_title"><a href="#">4 hectares farm</a></div>
        <div class="product_img"><a href="#"><img src="images/farm4.jpg" alt="" border="0" /></a></div>
        <div class="prod_price"><span class="reduce">3.5 Million Tshs</span> <span class="price">2.7 Million Tshs</span></div>
      </div>
      
      <div class="banner_adds"> <a href="#"><img src="images/farm3.jpg" alt="" border="0" /></a> </div>
    </div>
    <!-- end of left content -->
    <div class="center_content">
	<!-- Mission and Vission -->
		<div class="mandms">
		<div class="center_title_bar">Mission and Vission</div>
		<div class="prod_box_big">
			<div class="top_prod_box_big"></div>
		<!--	<div class="center_prod_box_big">
							<div class="welc"><center>Welcome to the Bidding Zone</center></div>
							<div class="welcsub"><center><p>Welcome, your account is not yet completely activated. You are required to complete this steps in order to participate in bidding activities on this site.<p></center></div>
			--> <div class='logreg'>
					<div class="loginb">
						<div class="top_prod_box"></div>
						<div class="center_prod_box">
						  <div class="product_title"><a>Our Mission</a></div>
						  <div class="product_img"><a><img src="images/visionn.jpg" width="90" length="130" alt="" border="0" /></a></div>
						</div>
					</div>
					<div class="regb">
						<div class="top_prod_box"></div>
						<div class="center_prod_box">
						  <div class="product_title"><a>Objectives</a></div>
						  <div class="product_img"><a><img src="images/objectives.jpg" alt="" border="0" /></a></div>
						</div>
					</div>
			</div>
				<script type='text/javascript'>
					jQuery(document).ready( function() {
						
						jQuery('.contact_form').hide();
						jQuery('.reg_form').hide();
						jQuery('.loginb').click( function() {
							jQuery('.contact_form').toggle('slow');
							jQuery('.reg_form').hide();
						});
						jQuery('.regb').click( function() {
							jQuery('.reg_form').toggle('slow');
							jQuery('.contact_form').hide();
						});
					});
				</script>
			<div class="contact_form">
				<div id="form_row1a">
				  	<span class="blue">&nbsp; &nbsp; The Bidding Zone purpose is creating an appropriate online auction webpage that promotes different kinds of products.</span>                
				</div>
			</div>
			  
			<div class="reg_form">
				<div id="regstep1">
				 <span class="blue"><li>To provide customers with a user friendly online system for bidding transaction.</li>
				 <li>To provide the company a faster way to advertise and to communicate with its customer with regards of price & product.</li>
				 <li>Provide a system that can accommodate bidding 24/7. </li>
				</span>
				</div>
			</div>
			</div>
			<div class="bottom_prod_box_big"></div>
		</div>
		</div>
		 <!-- end of it -->
		 <!-- end of left content -->
		 <!-- end of it -->		 
		 <!-- Location -->
		 <!-- Contacts -->
		 <!-- end of it -->
		 <!-- Organization -->
		 <!--<div class="organization">
		  <div class="center_title_bar">Organization</div>
		  <div class="prod_box_big">
			<div class="top_prod_box_big"></div>
			<div class="center_prod_box_big">
							<div class="welc"><center>Company's Organizational Chart</center></div>
							<div class='logreg'>
					<div class="loginb">
						<div class="top_prod_box"></div>
						<div class="center_prod_box">
						  <div class="product_img"><a><img src="images/chart.jpg" alt="" border="0" /></a></div>
						</div>
					</div>
					
				</div>

			   </div>
			<div class="bottom_prod_box_big"></div>
		  </div>
		 </div>-->
		 <!-- end of it -->
		 <!-- company feedback -->
		 <!--<div class="companyfeedback">
		  <div class="center_title_bar">Terms and Condtions</div>
		  <div class="prod_box_big">
			<div class="top_prod_box_big"></div>
			<div class="center_prod_box_big">
							<div class="welc"><center>Terms and Conditions</center></div>
							<div class="welcsub"><center><p>Welcome to Bidding Zone User Agreement. This agreement describes the terms and conditions
									applicable to your use of our services. By clicking the "I Accept" button, you accept ther terms and 
										conditions of this agreement<p></center></div>
				
			 <div class='companyfeedback'>
					<div class="loginc">
					<div class="welcsub"><b>Eligibility to Membership</b></div>
				 <span class="blue"><li>Our services are available only to individuals who can form legally binding contract without limiting
				 the foregoing, our services are not available to minor. if you do not qualify, please do not use our services.</li></span><br>
				 <div class="welcsub"><b>Fees</b></div>
				 <span class="blue"><li>Joining Bidding Zone cost P150 for the membership. Our then current Fees and Credit Policies for selling
				 item are available at Bidding Zone. Unless otherwise stated, all fees are quoted in Philippines Peso. You are responsible for paying
				 all applicable taxes and for all hardware, software, services and other costs you incur to bid, buy.</li></span><br>
				 <div class="welcsub"><b>Bidding and Buying</b></div>
				 <span class="blue"><li>As a bidder, if you have the highest bid at the end of the auction, at or above the minimum bid price
				 and your bid is accepted by the seller, you are obligated to complete the transactions.</li></span><br>
				</div>
			  </div>
			   </div>
			<div class="bottom_prod_box_big"></div>
		  </div>
		 </div>-->
		 <!-- end it -->
		 <!-- The Developer -->
		 <div class="developer">
		  <div class="center_title_bar">The Team</div>
		  <div class="prod_box_big">
			<div class="top_prod_box_big"></div>
			<div class="center_prod_box_big">
							<div class="welc"><center>The Team</center></div>
							<div class="welcsub"><center><p>Project done by the following students<p></center></div>
				<div class='logreg'>
					<div class="loginb">
						<div class="top_prod_box"></div>
						<div class="center_prod_box">
						  <!--<div class="product_img"><a><img src="images/6_10.gif" alt="" border="0" /></a></div>
						   <div class="product_img"><a><img src="images/6_12.gif" alt="" border="0" /></a></div>
						    <div class="product_img"><a><img src="images/6_14.gif" alt="" border="0" /></a></div>-->
						</div>
					</div>
					
				</div>
				
				<div class='developer'>
					<div class="loginc">
					<br><br>					
					<span class="blue">Ayubu Wilson Moshi :- for enquiries +255783415100 or <a href="mailto:willy4elly@gmail.com">Email contact   
					</a> </span> <br><br><br>					
					<span class="blue">Kelvin Modest :- for enquiries +255783415101 or <a href="mailto:willy4elly@gmail.com">Email contact  </a> </span> 
					<br><br><br>					
					<span class="blue">Mohamed Lung'ombe :- for enquiries +255783415102 or <a href="mailto:willy4elly@gmail.com">Email contact </a>  </span> 					
				</div>
			  </div>
			   </div>
			<div class="bottom_prod_box_big"></div>
		  </div>
		 </div>
		<!-- end of it -->
		<!-- Script for Category lists toggle and fade-->
			<script type='text/javascript'>
					jQuery(document).ready( function() {
						
						//jQuery('.mandm').hide();
						jQuery('.history').hide();
						jQuery('.location').hide();
						jQuery('.contacts').hide();
						jQuery('.organization').hide();
						jQuery('.companyfeedback').hide();
						jQuery('.developer').hide();
						jQuery('.mandm').click( function() {
							jQuery('.mandms').toggle('slow');
							jQuery('.history').hide();
							jQuery('.location').hide();
							jQuery('.contacts').hide();
							jQuery('.organization').hide();
							jQuery('.companyfeedback').hide();
							jQuery('.developer').hide();
						});
						jQuery('.loc').click( function() {
							jQuery('.location').toggle('slow');
							jQuery('.history').hide();
							jQuery('.mandms').hide();
							jQuery('.contacts').hide();
							jQuery('.organization').hide();
							jQuery('.companyfeedback').hide();
							jQuery('.developer').hide();
						});
						jQuery('.hist').click( function() {
							jQuery('.history').toggle('slow');
							jQuery('.mandms').hide();
							jQuery('.location').hide();
							jQuery('.contacts').hide();
							jQuery('.organization').hide();
							jQuery('.companyfeedback').hide();
							jQuery('.developer').hide();
						});
						jQuery('.con').click( function() {
							jQuery('.contacts').toggle('slow');
							jQuery('.history').hide();
							jQuery('.location').hide();
							jQuery('.mandms').hide();
							jQuery('.organization').hide();
							jQuery('.companyfeedback').hide();
							jQuery('.developer').hide();
						});
						jQuery('.org').click( function() {
							jQuery('.organization').toggle('slow');
							jQuery('.history').hide();
							jQuery('.location').hide();
							jQuery('.contacts').hide();
							jQuery('.mandms').hide();
							jQuery('.companyfeedback').hide();
							jQuery('.developer').hide();
						});
						jQuery('.feed').click( function() {
							jQuery('.companyfeedback').toggle('slow');
							jQuery('.history').hide();
							jQuery('.location').hide();
							jQuery('.contacts').hide();
							jQuery('.organization').hide();
							jQuery('.mandms').hide();
							jQuery('.developer').hide();
						});
						jQuery('.dev').click( function() {
							jQuery('.developer').toggle('slow');
							jQuery('.history').hide();
							jQuery('.location').hide();
							jQuery('.contacts').hide();
							jQuery('.organization').hide();
							jQuery('.companyfeedback').hide();
							jQuery('.mandms').hide();
						});
					});
			</script>
		<!-- end of Script -->
    </div>
    <!-- end of center content -->
    <!-- end of right content -->
  </div>
  <!-- end of main content -->
  <?php foothtml(); ?>
