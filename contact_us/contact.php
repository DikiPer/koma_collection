<?php include '../template/heading.php'; ?>

<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
					<h1 class="page-name">Contact Us</h1>
					<ol class="breadcrumb">
						<li><a href="index.html">Home</a></li>
						<li class="active">Contact</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>




<section class="page-wrapper">
	<div class="contact-section">
		<div class="container">
			<div class="row">
				<!-- Contact Form -->
				<div class="contact-form col-md-6 ">
					<form id="contact-form" method="post" action="message_user.php" role="form">

						<div class="form-group">
							<input type="text" placeholder="Your Name" class="form-control" name="nama_user" id="name">
						</div>

						<div class="form-group">
							<input type="email" placeholder="Your Email" class="form-control" name="email_user" id="email">
						</div>

						<div class="form-group">
							<input type="text" placeholder="Subject" class="form-control" name="subject_pesan" id="subject">
						</div>

						<div class="form-group">
							<textarea rows="6" placeholder="Message" class="form-control" name="isi_pesan" id="message"></textarea>
						</div>

						<div id="mail-success" class="success">
							Thank you. The Mailman is on His Way :)
						</div>

						<div id="mail-fail" class="error">
							Sorry, don't know what happened. Try later :(
						</div>

						<div id="cf-submit">
							<input type="submit" id="contact-submit" class="btn btn-transparent" value="Submit" name="submit">
						</div>

					</form>
				</div>
			</div>
			<!-- ./End Contact Form -->
			<div class="row">
				<!-- Contact Details -->
				<div class="contact-details col-md-6">
					<!-- <div class="google-map">
						<div id="map"></div>
					</div> -->
					<ul class="contact-short-info">
						<li>
							<i class="tf-ion-ios-home"></i>
							<span>Jl. Jembatan Gantung, Cengkareng, Jakbar</span>
						</li>
						<li>
							<i class="tf-ion-android-phone-portrait"></i>
							<span>Phone: +62 851-6149-2470</span>
						</li>
						<!-- <li>
							<i class="tf-ion-android-globe"></i>
							<span>Fax: +880-31-000-000</span>
						</li> -->
						<li>
							<i class="tf-ion-android-mail"></i>
							<span>Email: collectionkoma@gmail.com</span>
						</li>
					</ul>
					<!-- Footer Social Links -->
					<div class="social-icon">
						<ul>
							<li><a class="fb-icon" href="https://www.facebook.com/profile.php?id=100084770293751"><i class="tf-ion-social-facebook"></i></a></li>
							<li><a href="https://www.instagram.com/collectionkoma/"><i class="tf-ion-social-instagram"></i></a></li>
						</ul>
					</div>
					<!--/. End Footer Social Links -->
				</div>
				<!-- / End Contact Details -->



			</div> <!-- end row -->
		</div> <!-- end container -->
	</div>
</section>


<?php include '../template/footer.php'; ?>