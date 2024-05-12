<?php
error_reporting(1);
include('./navbar.php');
session_start();
if ($_SESSION['sname'] == "") {
    header('location:login.php');
}
?>

<link href="./custom_css/gallery.css" rel="stylesheet" >

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700|Poppins:200,300,400,500,500i,600,700,800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		
		
			<div class="tp-divid">
				<div class="container">
					<div class="tp-separator">
						<span class="tp-sep-hldr">
							<span class="tp-sep-lne">
							</span>
						</span>
						<span class="heading">Head Department</span>
						<span class="tp-sep-hldr">
							<span class="tp-sep-lne">
							</span>
						</span>					
					</div>
				</div>			
			</div>

			<div class="team-area">
				<div class="team-warp">
					<div class="team-one">
						<div class="container-fluid">
							<div class="row tp-padding">
								<div class="col-lg-3 col-md-6 col-sm-12">
									<div class="team-style-one team-style-block">
										<div class="img-box">
											<img src="https://i.ibb.co/t4yt9GV/t1.jpg" alt="t1" >
											<div class="img-overlay"></div>
											<div class="social">
												<a href="#" class="fa fa-twitter"></a>
												<a href="#" class="fa fa-google"></a>
												<a href="#" class="fa fa-instagram"></a>
											</div>
										</div>
										<div class="text-box">
											<h3>David Warrior</h3>
											<span class="ttp">Founder</span>								
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-md-6 col-sm-12">
									<div class="team-style-one team-style-block">
										<div class="img-box">
											<img src="https://i.ibb.co/6chp18D/t2.jpg" alt="t2">
											<div class="img-overlay"></div>
											<div class="social">
												<a href="#" class="fa fa-twitter"></a>
												<a href="#" class="fa fa-google"></a>
												<a href="#" class="fa fa-instagram"></a>
											</div>
										</div>
										<div class="text-box">
											<h3>Teena Jhon</h3>
											<span> CEO</span>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-md-6 col-sm-12">
									<div class="team-style-one team-style-block">
										<div class="img-box">
											<img src="https://i.ibb.co/TrkH6hL/t3.jpg" alt="t3">
											<div class="img-overlay"></div>
											<div class="social">
												<a href="#" class="fa fa-twitter"></a>
												<a href="#" class="fa fa-google"></a>
												<a href="#" class="fa fa-instagram"></a>
											</div>
										</div>
										<div class="text-box">
											<h3>Alex Walkin</h3>
											<span>Director</span>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-md-6 col-sm-12">
									<div class="team-style-one team-style-block">
										<div class="img-box">
											<img src="https://i.ibb.co/6chp18D/t2.jpg" alt="t2">
											<div class="img-overlay"></div>
											<div class="social">
												<a href="#" class="fa fa-twitter"></a>
												<a href="#" class="fa fa-google"></a>
												<a href="#" class="fa fa-instagram"></a>
											</div>
										</div>
										<div class="text-box">
											<h3>Delana Lee</h3>
											<span>HOD</span>
										</div>
									</div>
								</div>
							</div>	
						</div>	
					</div>	
				</div>	
			</div>
			
			
			<div class="tp-divid">
				<div class="container">
					<div class="tp-separator">
						<span class="tp-sep-hldr">
							<span class="tp-sep-lne">
							</span>
						</span>
						<span class="heading">Head Team Member</span>
						<span class="tp-sep-hldr">
							<span class="tp-sep-lne">
							</span>
						</span>					
					</div>
				</div>			
			</div>   
			<div class="team-area">
				<div class="team-warp">
					<div class="team-three">
						<div class="container-fluid">
							<div class="row tp-padding">
								<div class="col-lg-3 col-md-6">
									<div class="team-style-three team-style-block">
										<div class="team-img-3">
											<img src="https://i.ibb.co/t4yt9GV/t1.jpg" alt="t1" >
											<div class="social-icon-3">
												<a href="#"><i class="fa fa-facebook"></i></a>
												<a href="#"><i class="fa fa-twitter"></i></a>
											</div>
											<div class="hover-content-3">
												<p>Bloke are you taking the piss pardon me excuse my French well victoria sponge car boot that owt to do with me, spiffing good time the bee's knees blatant bleeder.!</p>
											</div>
										</div>
										<div class="content-3">
											<a href="#"><h3>David Warrior</h3></a>
											<p>Web Designer</p>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-md-6">
									<div class="team-style-three team-style-block">
										<div class="team-img-3">
											<img src="https://i.ibb.co/6chp18D/t2.jpg" alt="t2">
											<div class="social-icon-3">
												<a href="#"><i class="fa fa-facebook"></i></a>
												<a href="#"><i class="fa fa-twitter"></i></a>
											</div>
											<div class="hover-content-3">
												<p>Bloke are you taking the piss pardon me excuse my French well victoria sponge car boot that owt to do with me, spiffing good time the bee's knees blatant bleeder.!</p>
											</div>
										</div>
										<div class="content-3">
											<a href="#"><h3>Teena Jhon</h3></a>
											<p>Product designer</p>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-md-6">
									<div class="team-style-three team-style-block">
										<div class="team-img-3">
											<img src="https://i.ibb.co/TrkH6hL/t3.jpg" alt="t3">
											<div class="social-icon-3">
												<a href="#"><i class="fa fa-facebook"></i></a>
												<a href="#"><i class="fa fa-twitter"></i></a>
											</div>
											<div class="hover-content-3">
												<p>Bloke are you taking the piss pardon me excuse my French well victoria sponge car boot that owt to do with me, spiffing good time the bee's knees blatant bleeder.!</p>
											</div>
										</div>
										<div class="content-3">
											<a href="#"><h3>Alex Walkin</h3></a>
											<p>Graphic designer</p>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-md-6">
									<div class="team-style-three team-style-block">
										<div class="team-img-3">
											<img src="https://i.ibb.co/6chp18D/t2.jpg" alt="t2">
											<div class="social-icon-3">
												<a href="#"><i class="fa fa-facebook"></i></a>
												<a href="#"><i class="fa fa-twitter"></i></a>
											</div>
											<div class="hover-content-3">
												<p>Bloke are you taking the piss pardon me excuse my French well victoria sponge car boot that owt to do with me, spiffing good time the bee's knees blatant bleeder.!</p>
											</div>
										</div>
										<div class="content-3">
											<a href="#"><h3>Delana Lee</h3></a>
											<p>UI/UX Designer</p>
										</div>
									</div>
								</div>
							</div>	
						</div>	
					</div>	
				</div>	
			</div>

			
			<div class="tp-divid">
				<div class="container">
					<div class="tp-separator">
						<span class="tp-sep-hldr">
							<span class="tp-sep-lne">
							</span>
						</span>
						<span class="heading">ERROR BUZZ TEAM</span>
						<span class="tp-sep-hldr">
							<span class="tp-sep-lne">
							</span>
						</span>					
					</div>
				</div>			
			</div>
			<div class="team-area">
				<div class="team-warp">
					<div class="team-ten">						
						<div class="container">
							<div class="row">
								<div class="col-lg-4 col-md-6 col-sm-12">
									<div class="team-style-ten team-warp-ten team-style-block">
										<div class="inner-box-10">
											<div class="image-10">
												<a href="#"><img src="https://i.ibb.co/t4yt9GV/t1.jpg" alt="" title=""></a>
												<ul class="social-box-10">
													<li><a href="#" class="fa fa-facebook"></a></li>
													<li><a href="#" class="fa fa-twitter"></a></li>
													<li><a href="#" class="fa fa-linkedin"></a></li>
													<li><a href="#" class="fa fa-google-plus"></a></li>
												</ul>
											</div>
											<div class="lower-content-10">
												<h3><a href="#">Frazer Diamond</a></h3>
												<div class="designation-10">Founder & CEO</div>
											</div>
										</div>
									</div>	
								</div>
								<div class="col-lg-4 col-md-6 col-sm-12">
									<div class="team-style-ten team-warp-ten team-style-block">
										<div class="inner-box-10">
											<div class="image-10">
												<a href="#"><img src="https://i.ibb.co/6chp18D/t2.jpg" alt="" title=""></a>
												<ul class="social-box-10">
													<li><a href="#" class="fa fa-facebook"></a></li>
													<li><a href="#" class="fa fa-twitter"></a></li>
													<li><a href="#" class="fa fa-linkedin"></a></li>
													<li><a href="#" class="fa fa-google-plus"></a></li>
												</ul>
											</div>
											<div class="lower-content-10">
												<h3><a href="#">Frazer Diamond</a></h3>
												<div class="designation-10">Founder & CEO</div>
											</div>
										</div>
									</div>	
								</div>
								<div class="col-lg-4 col-md-6 col-sm-12">
									<div class="team-style-ten team-warp-ten team-style-block">
										<div class="inner-box-10">
											<div class="image-10">
												<a href="#"><img src="https://i.ibb.co/TrkH6hL/t3.jpg" alt="" title=""></a>
												<ul class="social-box-10">
													<li><a href="#" class="fa fa-facebook"></a></li>
													<li><a href="#" class="fa fa-twitter"></a></li>
													<li><a href="#" class="fa fa-linkedin"></a></li>
													<li><a href="#" class="fa fa-google-plus"></a></li>
												</ul>
											</div>
											<div class="lower-content-10">
												<h3><a href="#">Frazer Diamond</a></h3>
												<div class="designation-10">Founder & CEO</div>
											</div>
										</div>
									</div>	
								</div>
								<div class="col-lg-3 col-md-6 col-sm-12">
									<div class="team-style-ten team-warp-ten team-style-block">
										<div class="inner-box-10">
											<div class="image-10">
												<a href="#"><img src="https://i.ibb.co/t4yt9GV/t1.jpg" alt="" title=""></a>
												<ul class="social-box-10">
													<li><a href="#" class="fa fa-facebook"></a></li>
													<li><a href="#" class="fa fa-twitter"></a></li>
													<li><a href="#" class="fa fa-linkedin"></a></li>
													<li><a href="#" class="fa fa-google-plus"></a></li>
												</ul>
											</div>
											<div class="lower-content-10">
												<h3><a href="#">Frazer Diamond</a></h3>
												<div class="designation-10">Founder & CEO</div>
											</div>
										</div>
									</div>	
								</div>
								<div class="col-lg-3 col-md-6 col-sm-12">
									<div class="team-style-ten team-warp-ten team-style-block">
										<div class="inner-box-10">
											<div class="image-10">
												<a href="#"><img src="https://i.ibb.co/TrkH6hL/t3.jpg" alt="" title=""></a>
												<ul class="social-box-10">
													<li><a href="#" class="fa fa-facebook"></a></li>
													<li><a href="#" class="fa fa-twitter"></a></li>
													<li><a href="#" class="fa fa-linkedin"></a></li>
													<li><a href="#" class="fa fa-google-plus"></a></li>
												</ul>
											</div>
											<div class="lower-content-10">
												<h3><a href="#">Frazer Diamond</a></h3>
												<div class="designation-10">Founder & CEO</div>
											</div>
										</div>
									</div>	
								</div>
								<div class="col-lg-3 col-md-6 col-sm-12">
									<div class="team-style-ten team-warp-ten team-style-block">
										<div class="inner-box-10">
											<div class="image-10">
												<a href="#"><img src="https://i.ibb.co/6chp18D/t2.jpg" alt="" title=""></a>
												<ul class="social-box-10">
													<li><a href="#" class="fa fa-facebook"></a></li>
													<li><a href="#" class="fa fa-twitter"></a></li>
													<li><a href="#" class="fa fa-linkedin"></a></li>
													<li><a href="#" class="fa fa-google-plus"></a></li>
												</ul>
											</div>
											<div class="lower-content-10">
												<h3><a href="#">Frazer Diamond</a></h3>
												<div class="designation-10">Founder & CEO</div>
											</div>
										</div>
									</div>	
								</div>
								<div class="col-lg-3 col-md-6 col-sm-12">
									<div class="team-style-ten team-warp-ten team-style-block">
										<div class="inner-box-10">
											<div class="image-10">
												<a href="#"><img src="https://i.ibb.co/TrkH6hL/t3.jpg" alt="" title=""></a>
												<ul class="social-box-10">
													<li><a href="#" class="fa fa-facebook"></a></li>
													<li><a href="#" class="fa fa-twitter"></a></li>
													<li><a href="#" class="fa fa-linkedin"></a></li>
													<li><a href="#" class="fa fa-google-plus"></a></li>
												</ul>
											</div>
											<div class="lower-content-10">
												<h3><a href="#">Frazer Diamond</a></h3>
												<div class="designation-10">Founder & CEO</div>
											</div>
										</div>
									</div>	
								</div>
							</div>
						</div>
					</div>	
				</div>	
			</div>

			
			<div class="tp-divid">
				<div class="container">
					<div class="tp-separator">
						<span class="tp-sep-hldr">
							<span class="tp-sep-lne">
							</span>
						</span>
						<span class="heading">TOP PERFORMENCE MEMBER</span>
						<span class="tp-sep-hldr">
							<span class="tp-sep-lne">
							</span>
						</span>					
					</div>
				</div>			
			</div>
			<div class="team-area team-all-seven">
				<div class="team-warp">
					<div class="team-seven">						
						<div class="team-style-seven">
							<div class="imgBox-7">
								<img src="https://i.ibb.co/FBTYCLK/team-1.jpg">
							</div>
							<div class="details-7">
								<div class="content-7">
									<h3>Member Name <br><span>Developer</span></h3>
									<ul>
									  <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									  <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									  <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
									  <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="team-style-seven">
							<div class="imgBox-7">
								<img src="https://i.ibb.co/y5fFSN4/team-2.jpg">
							</div>
							<div class="details-7">
								<div class="content-7">
									<h3>Member Name <br><span>Financer</span></h3>
									<ul>
									  <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									  <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									  <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
									  <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div> 
						<div class="team-style-seven">
							<div class="imgBox-7">
								<img src="https://i.ibb.co/ZdLNwP0/team-3.jpg">
							</div>
							<div class="details-7">
								<div class="content-7">
									<h3>Member Name <br><span>Designer</span></h3>
									<ul>
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div> 
						</div> 
						<div class="team-style-seven">
							<div class="imgBox-7">
								<img src="https://i.ibb.co/xhLnzr8/team-4.jpg">
							</div>
							<div class="details-7">
								<div class="content-7">
									<h3>Member Name <br><span>Developer</span></h3>
									<ul>
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div> 
						<div class="team-style-seven">
							<div class="imgBox-7">
								<img src="https://i.ibb.co/FBTYCLK/team-1.jpg">
							</div>
							<div class="details-7">
								<div class="content-7">
									<h3>Member Name <br><span>Market</span></h3>
									<ul>
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="team-style-seven">
							<div class="imgBox-7">
								<img src="https://i.ibb.co/y5fFSN4/team-2.jpg">
							</div>
							<div class="details-7">
								<div class="content-7">
									<h3>Member Name <br><span>Developer</span></h3>
									<ul>
									  <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									  <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									  <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
									  <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="team-style-seven">
							<div class="imgBox-7">
								<img src="https://i.ibb.co/ZdLNwP0/team-3.jpg">
							</div>
							<div class="details-7">
								<div class="content-7">
									<h3>Member Name <br><span>Financer</span></h3>
									<ul>
									  <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									  <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									  <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
									  <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div> 
						<div class="team-style-seven">
							<div class="imgBox-7">
								<img src="https://i.ibb.co/xhLnzr8/team-4.jpg">
							</div>
							<div class="details-7">
								<div class="content-7">
									<h3>Member Name <br><span>Designer</span></h3>
									<ul>
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div> 
						</div> 
						<div class="team-style-seven">
							<div class="imgBox-7">
								<img src="https://i.ibb.co/FBTYCLK/team-1.jpg">
							</div>
							<div class="details-7">
								<div class="content-7">
									<h3>Member Name <br><span>Developer</span></h3>
									<ul>
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div> 
						<div class="team-style-seven">
							<div class="imgBox-7">
								<img src="https://i.ibb.co/y5fFSN4/team-2.jpg">
							</div>
							<div class="details-7">
								<div class="content-7">
									<h3>Member Name <br><span>Market</span></h3>
									<ul>
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>	
						</div>	
					</div>	
				</div>	
			</div>


						






<?php
include('./footer.php')
?>