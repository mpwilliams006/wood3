@extends('layouts.master')

@section('content')

@include('modals.login')


<div class="slide" id="slide1" data-slide="1" data-stellar-background-ratio="0.5">
	<div class="padding_slide1">
		<div class="container clearfix">
			<div id="content" class="grid_12">
				<div class="filtr_bg">
					<p>W e l c o m e&emsp;t o&emsp;F a b u l a s h</p>
					<h1>We are Charlotte's Eyelash<br>Extension Professionals</h1>
					<a href="http://www.schedulicity.com/Scheduling/Default.aspx?business=FDUAS7" title="Online scheduling" target="_blank"><img src="images/schedule-button.png" style="padding-top: 50px; margin-bottom: -75px;" alt="Schedule online now" border="0" /></a>
				</div>
				<div class="not_mobile"><a class="button" title="" data-slide="2">Read More</a></div>
			</div>
		</div>
	</div>
</div>



<div class="slide" id="slide2" data-slide="2" data-stellar-background-ratio="0.5">
	<div class="container clearfix">

		<div id="content" class="grid_12">
			<h3>About</h3>
			<h2>Fabulash professionals have been trained and certified to ensure the highest level of quality.</h2>
		</div>
		<div id="content" class="grid_12">
			<img class="about_img" src="images/about.png" alt="Eyelash extensions Charlotte" />
			<p>We are Charlotte's leading custom eyelash boutique with two convenient locations in Charlotte and Lake Norman.  Fabulash professionals have been trained and certified to provide the best eyelash application methods that ensures a natural look and feel while making the eyelash application process easy and comfortable. Our Fabulash Synthetic Lashes are individually applied to each of your own eyelashes making them appear as if they each had their own root.  Using our strong but gentle bonding method, your new lashes will last for months as they will follow your natural hair growth cycle. </p>
		</div>
		<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#login">
			Launch demo modal
		</button>
		<a href="/newlaravelpj/wood3/public/logout">Log Out</a>
		<button ng-click="login()">Login</button>
	</div>
</div>



<div class="slide" id="slide3" data-slide="3" data-stellar-background-ratio="0.5">
	<div class="padding_slide3">
		<div class="container clearfix">

			<div id="content" class="grid_12">
				<p>Our goal is to give you beautiful<br> lashes that you will absolutely<br> adore, everyone will admire,<br> and you are enamored with!</p>
			</div>

		</div>
	</div>
</div>

<?php
	if (Auth::check())
	{
		echo 'logged in';
	}else{
		echo 'not logged in';
	}
?>


<div class="slide" id="bna" data-slide="6" data-stellar-background-ratio="0.5">
	<div class="container clearfix">

		<div id="content" class="grid_12">
			<h3><span>Before &amp; After</span></h3>
			<h2>Our application method provides a natural appearance.</h2>
		</div>
		<div class="clear"></div>

		<div>
			<!-- gallery_block -->
			<ul class="gallery-list gallery-list2">
				<li class="grid_3 bna_grey">
					<a href="images/before1.jpg" rel="prettyPhoto[portfolio1]">
						<div class="portfolio_descr">
							<p>Before</p>
						</div>
						<div class="hover_img">

							<img src="images/before1.jpg" alt="Before picture" />
						</div>
					</a>
					<a href="images/after1.jpg" rel="prettyPhoto[portfolio1]">
						<div class="portfolio_descr">
							<p>After</p>
						</div>
						<div class="hover_img" style="margin-top:10px;">
							<img src="images/after1.jpg" alt="After picture" />
						</div>
					</a>
				</li>
				<li class="grid_3 bna_grey">
					<a href="images/before2.jpg" rel="prettyPhoto[portfolio1]">
						<div class="portfolio_descr">
							<p>Before</p>
						</div>
						<div class="hover_img">

							<img src="images/before2.jpg" alt="Before eyelash extension" />
						</div>
					</a>
					<a href="images/after2.jpg" rel="prettyPhoto[portfolio1]">
						<div class="portfolio_descr">
							<p>After</p>
						</div>
						<div class="hover_img" style="margin-top:10px;">
							<img src="images/after2.jpg" alt="Before eyelash extension" />
						</div>
					</a>
				</li>
				<li class="grid_3 bna_grey">
					<a href="images/before3.jpg" rel="prettyPhoto[portfolio1]">
						<div class="portfolio_descr">
							<p>Before</p>
						</div>
						<div class="hover_img">

							<img src="images/before3.jpg" alt="volume lashes" />
						</div>
					</a>
					<a href="images/after3.jpg" rel="prettyPhoto[portfolio1]">
						<div class="portfolio_descr">
							<p>After</p>
						</div>
						<div class="hover_img" style="margin-top:10px;">
							<img src="images/after3.jpg" alt="extreme lashes" />
						</div>
					</a>
				</li>
				<li class="grid_3 bna_grey omega">
					<a href="images/before4.jpg" rel="prettyPhoto[portfolio1]">
						<div class="portfolio_descr">
							<p>Before</p>
						</div>
						<div class="hover_img">

							<img src="images/before4.jpg" alt="Beauty products" />
						</div>
					</a>
					<a href="images/after4.jpg" rel="prettyPhoto[portfolio1]">
						<div class="portfolio_descr">
							<p>After</p>
						</div>
						<div class="hover_img" style="margin-top:10px;">
							<img src="images/after4.jpg" alt="Eyelash extensions" />
						</div>
					</a>
				</li>
				<div class="clear"></div>
			</ul>
			<!-- //gallery_block -->

		</div>

	</div>
</div>


<div class="slide" id="slide5" data-slide="5" data-stellar-background-ratio="0.5">
	<div class=" padding_slide3">
		<div class="container clearfix">

			<div id="content" class="grid_12">
				<p>You will not feel a difference<br> once your Fabulash eyelashes<br> have been applied.</p>
			</div>

		</div>
	</div>
</div>


<div class="slide" id="slide4" data-slide="4" data-stellar-background-ratio="0.5">
	<div class="container clearfix">

		<div id="content" class="grid_12">
			<h3><span>Fabulash Application</span></h3>
			<h2>Fabulash provides an easy and gentle application process.</h2>
			<div>
				<!-- Services_block -->
				<ul class="gallery-list">
					<li class="grid_3">
						<!--<a href="javascript:void(0);">-->
						<div class="hover_img">
							<center><img src="images/preparations.png" alt="Lash Extensions" /></center>
						</div>
						<div class="portfolio_descr">
							<p>Preparation</p>
							<span>Our professionals will answer all your questions and give you advice on how to care for your lashes. </span>
						</div>
						<!--</a>-->
					</li>
					<li class="grid_3">
						<!--<a href="javascript:void(0);">-->
						<div class="hover_img">
							<img src="images/application.png" alt="Charlotte eyelash extensions" />
						</div>
						<div class="portfolio_descr">
							<p>Procedure</p>
							<span>Fabulash synthetic lashes will be individually bonded to your existing eyelashes to look and feel natural.</span>
						</div>
						<!--</a>-->
					</li>
					<li class="grid_3">
						<!--<a href="javascript:void(0);">-->
						<div class="hover_img">
							<img src="images/afterapplication.png" alt="Eyelash Extensions Charlotte" />
						</div>
						<div class="portfolio_descr">
							<p>Initial Care</p>
							<span>For the first three hours special care will be required, such as no contact with water. </span>
						</div>
						<!--</a>-->
					</li>
					<li class="grid_3 omega">
						<!--<a href="javascript:void(0);">-->
						<div class="hover_img">
							<img src="images/aftercare.png" alt="Eyelash Extensions Charlotte" />
						</div>
						<div class="portfolio_descr">
							<p>After Care</p>
							<span>Keep oily or greasy products away from base of lashes. No rubbing, picking or pulling on lashes </span>
						</div>
						<!--</a>-->
					</li>
					<div class="clear"></div>

					<div class="clear"></div>
				</ul>
				<!-- //Services_block -->
			</div>

		</div>

	</div>
</div>



<div class="slide" id="slide7" data-slide="7" data-stellar-background-ratio="0.5">
	<div class=" padding_slide7">
		<div class="container clearfix">

			<div id="content" class="grid_12">
				<span>Experienced and knowledgeable<br> Fabulash professionals are ready<br> to help you achieve your new look</span>
			</div>

		</div>
	</div>
</div>

<div class="slide" id="slide10" data-slide="10" data-stellar-background-ratio="0.5">
	<div class="container clearfix">

		<div id="content" class="grid_12">
			<h3><span>Contact</span></h3>
			<h2><!--Cras urna leo, fringilla nec aliquam ac, varius in enim. Maecenas non felis--></h2>
		</div>
		<div class="clear"></div>

		<div class="grid_9">
			<div class="contact_form">
				<div id="note"></div>
				<div id="fields">
					<form id="ajax-contact-form" action="">
						<input type="text" name="name" value="" placeholder="Name" />
						<input type="text" name="phone" value="" placeholder="Phone" />
						<input type="text" name="email" value="" placeholder="Email" />
						<textarea name="message" id="message" placeholder="Message"></textarea>
						<div class="clear"></div>
						<!--<input type="reset" class="contact_btn" value="Clear Form" />-->
						<input type="submit" class="contact_btn send_btn" value="Send" />
						<div class="clear"></div>
					</form>
				</div>
			</div>
			<div class="customer-note">
				<p>Dear Clients,</p>
				<p>
					We appreciate your business and would love your feedback. Write us a review on  <a href="http://www.yelp.com/biz/fabulash-charlotte" target="_blank">Yelp</a>,
					<a href="https://plus.google.com/113305301395384986489/about?review=1&source=lo-ta&hl=en&gl=us" target="_blank">Google</a>, or
					like our <a href="https://www.facebook.com/pages/Fabulash-Charlotte/1047240398623203" target="_blank">Facebook Page</a> and invite your friends! We appreciate all your support.
				</p>
				<p>Fabulash</p>
			</div>
		</div>
		<div class="grid_3 contact_det_block omega">
			<p></p>
			<a href="http://www.schedulicity.com/Scheduling/Default.aspx?business=FDUAS7" title="Online scheduling" target="_blank"><img src="images/schedule-button.png" alt="Schedule online now" border="0" /></a>
			<ul class="foot_block_intouch">
				<li class="touch_phone"><p>(+1) 704 906 4586</p></li>
				<li class="touch_clock"><p>Mon - Sat 9:00am - 6:00 pm</p></li>
				<li class="touch_mail"><a href="mailto:fabulashcharlotte@gmail.com">fabulashcharlotte@gmail.com</a></li>
				<li class="touch_site"><a href="www.fabulashcharlotte.com">www.fabulashcharlotte.com</a></li>
				<li class="touch_adress"><a target='_blank' href='http://pozasalon.com/'><p style="font-weight: bold; color: #0099ff;">Charlotte Location<br>Poza<br>2314 Cresent Avenue<br>Charlotte, NC 28207</p></a></li>
				<li class="touch_adress"><a target='_blank' href='http://www.dollfaceskinandmakeup.com/'><p style="font-weight: bold; color: #0099ff;">Cornelius Location<br>Dollface<br>19428 Zion Avenue<br>Cornelius, NC 28031</p></a></li>
			</ul>
		</div>
		<div class="clear"></div>
		<div id="content" class="grid_12 contact">
			<h2><span>Downloadable Forms</span></h2>
			<div class="grid_4">
				<a target="_blank" href="pdfs/Care-Tips.pdf"><div class="form_btn"><!--<i class="icon-file-alt"></i>--><span>  Care Tips<span></div></a>
			</div>
			<div class="grid_4">
				<a target="_blank" href="pdfs/Consent-Form.pdf"><div class="form_btn"><!--<i class="icon-file-alt"></i>--><span>  Consent Form<span></div></a>
			</div>
			<div class="grid_4 omega">
				<a target="_blank" href="pdfs/Consultation-Questionnaire.pdf"> <div class="form_btn"><!--<i class="icon-file-alt"></i>--><span> Questionnaire<span></div></a>
			</div>

		</div>
		<div class="clear"></div>
	</div>
	<div class="overlay" onClick="style.pointerEvents='none'"></div>
	<div id="map_block">

	</div>

</div>


<div class="slide qa" id="slide11" data-slide="11" data-stellar-background-ratio="0.5">
	<div class="container clearfix">

		<div id="content" class="grid_12">
			<h3>Q&A</h3>
			<h2>Eyelash Extensions Questions and Answers</h2>
		</div>
		<div id="content" class="grid_12">
			<h4>What are eyelash extensions? </h4>
			<p>Eyelash Extensions are semi-permanent eyelash extensions comprised of individual synthetic eyelashes that are curved to replicate a natural eyelash. Our lashes are thicker at the base and taper to a fine point. They are applied to individual eyelashes, one extension at a time, for a natural, elegant look to lengthen and add fullness to the existing lashes.</p>

			<h4>WHAT ARE EYELASH EXTENSIONS MADE OUT OF? </h4>
			<p>Our Exclusive Eyelash Extensions look and feel completely real, they are made of synthetic material that replicate the natural curve of a real lash.</p>

			<h4>WHAT ARE THE BENEFITS OF WEARING EYELASH EXTENSIONS? </h4>
			<p>To lengthen, thicken, curve and lift  your natural lashes. Our  Eyelash Extensions create the appearance of a brighter, more open and rested eye, thereby creating a more youthful and rejuvenated look.  You will spend less time with makeup; mascara is certainly no longer necessary. Because our lashes are bigger at the base, they create the same effect as eyeliner so that step can be avoided. The added benefit is that they look beautiful morning and night, all day, every day. Say goodbye to the application of mascara, stained tears and mascara raccoon masks around the eyes.</p>

			<h4>HOW LONG DO YOUR EYELASH EXTENSIONS LAST? </h4>
			<p>The look can be maintained indefinitely with refills. When properly applied your lash extension will remain in place until the natural lash on which it rests falls out. With proper care and maintenance refills are typically only needed every 2 to 4 weeks to replace the lashes that have shed.</p>

			<h4>WHAT IS THE PROCEDURE? </h4>
			<p>Eyelash extensions are a safe, relaxing procedure that lasts between 50 minutes to 2 hours. You will be comfortably reclined with your eyes closed while the lashes are applied one at the time to your own natural lashes. There is no discomfort of pain involved in the application, in fact most clients find it so relaxing that they fall asleep.</p>

			<h4>CAN I APPLY EYELASH EXTENSIONS TO MY OWN EYELASHES? </h4>
			<p>Unprofessional application or self-application may cause eye injury, lash damage or unnatural looking lashes. Our Lash extensions are applied one lash at a time to your individual natural eyelashes to achieve long, thick and natural looking eyelashes. The procedure involves bonding the synthetic extension to your own natural eyelashes and should be performed only by professionally trained Lash Stylists only.</p>

			<h4>WILL LASH EXTENSIONS DAMAGE MY LASHES? </h4>
			<p>Not when properly applied. In fact, lash extensions are kinder to your natural lashes because you won't need to curl or apply mascara, which can break and dry your lashes.</p>

		</div>
	</div>
</div>


@stop
