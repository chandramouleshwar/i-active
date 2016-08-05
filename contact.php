<?php 
	$title = "Contact Us | I-Active";
	include'header.php'; ?>
<!-- CONTENT -->
        <div id="page-content">
            
            <div id="page-header">  
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            
                            <h4>Contact</h4>
                            
                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- container -->    
            </div><!-- page-header -->
			
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						
						<div class="headline">
							
							<h3>Get in touch</h3>
							<p>Please feel free to call us/ email us on below details.</p>
							
						</div><!-- headline -->
						
					</div><!-- col -->
				</div><!-- row -->
			</div><!-- container -->
			
			<div class="container">
				<div class="row">
					<div class="col-sm-8">
					
						<h6 class="text-uppercase">Contact us</h6>
						
						<form class="clearfix" id="contact-form" name="contact-form" method="post" action="assets/php/send.php">
                            <fieldset>
                                
                                <div id="alert-area"></div>
                                
                                <div class="row">
									<div class="col-sm-6">
										
										<input class="col-xs-12" id="name" type="text" name="name" placeholder="name">
										
									</div><!-- col -->
									<div class="col-sm-6">
										
										<input class="col-xs-12" id="email" type="email" name="email" placeholder="e-mail">
										
									</div><!-- col -->
								</div><!-- row -->
								
								<input class="col-xs-12" id="subject" type="text" name="subject" placeholder="subject">

                                <textarea class="col-xs-12" id="message" name="message" rows="4" cols="25" placeholder="message"></textarea>
                            
                                <input class="btn btn-default" id="submit" type="submit" name="submit" value="Submit">
                                
                            </fieldset>
                        </form>
						
					</div><!-- col -->
					<div class="col-sm-4">
						
						<div class="widget widget-contact">
															
							<h6 class="widget-title">Contact</h6>
							
							<ul>
								<li>
									Suite 28 &amp; 29, #50 Gold Towers, Residency Road, <br class="hidden-sm">
									Next to Ritz cavlton Hotel,<br/>
									Bangalore-560025
								</li>
								<li> 
									<img src="images/phone.png" style="width: 20px; height: 20px;">
									Mahesh: 9742929295/ 9880346487
								</li>
								<li>    
									<img src="images/phone.png" style="width: 20px; height: 20px;">
									Adnan: 9886398867
								</li>
								<li>
									<img src="images/email.png" style="width: 20px; height: 20px;">
									<a href="mailto:maheshvira@i-active.biz">maheshvira@i-active.biz</a>
								</li>
								<li>
									<img src="images/email.png" style="width: 20px; height: 20px;">
									<a href="mailto:Adnan@i-active.biz">Adnan@i-active.biz</a>
								</li>
								<li>
									<img src="images/email.png" style="width: 20px; height: 20px;">
									<a href="mailto:Jane@i-active.biz">Jane@i-active.biz</a>
								</li>
							</ul>
							
						</div><!-- widget-contact -->
						
					</div><!-- col -->
				</div><!-- row -->
			</div><!-- container -->
			
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2311.852396120603!2d77.6014544118684!3d12.968218229586734!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae167f4ca86653%3A0x7427ceed0c91991!2sKonark+Vegetarian+Restaurant!5e0!3m2!1sen!2sin!4v1470175341436" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
        
<?php include'footer.php'; ?>

