<?php 
session_start();

if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
    session_unset();     
    session_destroy(); 
}
$_SESSION['LAST_ACTIVITY'] = time(); 
?>

<?php include "header.php";?>	
<br><br><br><br><br>

								

					<section class="contact-page-area section-gap">	
									<div class="smap">
										<div class="row section-title">
				      					<h1>Contact Us</h1>
										  <p> Glaoigh orainn.</p>
											</div>
										</div>

									<div class="container">	
									<div class="row">
										<div class="col-lg-4 d-flex flex-column address-wrap">
											<div class="single-contact-address d-flex flex-row">
												<div class="icon">
													<span class="lnr lnr-home"></span>
												</div>
												<div class="contact-details">
													<h5>Dublin, Ireland</h5>
													<p> D01 HW54 </p>									
												</div>
											</div>
											<div class="single-contact-address d-flex flex-row">
												<div class="icon">
													<span class="lnr lnr-phone-handset"></span>
												</div>
												<div class="contact-details">
													<h5> (353) 899 814 7035</h5>
													<p>Mon to Fri 9am to 9 pm</p>
												</div>
											</div>
											<div class="single-contact-address d-flex flex-row">
												<div class="icon">
													<span class="lnr lnr-envelope"></span>
												</div>
												<div class="contact-details">
													<h5>support@colink.ie</h5>
													<p>Send us your query anytime!</p>
												</div>
											</div>														
										</div>
										
									
						<div class="col-lg-8">
							<form class="form-area contact-form text-right" id="myForm" action="mail.php" method="post">
								<div class="row">	
									<div class="col-lg-6 form-group">
										<input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">
									
										<input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="text">

										<input name="subject" placeholder="Enter subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter subject'" class="common-input mb-20 form-control" required="" type="text">
									</div>
									<div class="col-lg-6 form-group">
										<textarea class="common-textarea form-control" name="message" placeholder="Enter Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Messege'" required=""></textarea>				
									</div>
									<div class="col-lg-12">
										<div class="alert-msg" style="text-align: left;"></div>
										<button class="genric-btn primary" name="sendmail" style="float: right;">Send Message</button>											
									</div>
								</div>
							</form>	
						</div>
					</div>
				</div>	
			</section>
	
			<footer class="footer-area section-gap">
				 <?php include 'footer.php';
				 include 'script.php'; 
				 ?>
				 
			</footer>	
