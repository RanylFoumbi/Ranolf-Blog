
@extends('layouts.userFront')

@section('content')

<section class="ptb-0">
		<div class="mb-30 brdr-ash-1 opacty-5"></div>
		<div class="container">
			<a class="mt-10" href="index.html"><i class="mr-5 ion-ios-home"></i>Home<i class="mlr-10 ion-chevron-right"></i></a>
			<a class="color-ash mt-10" href="06_contact-us.html">Contact us</a>
		</div><!-- container -->
	</section>

<section>
		<div class="container">
			<div class="row">
			
				<div class="col-sm-12 col-md-8">
					<h3><b>SEND US A MESSAGE</b></h3>
					<p class="mb-30 mr-100 mr-sm-0">We’d love to hear from you – please get in touch for comments, requests, 
						advertising partnerships or job inquiries.</p>
					<form class="form-block form-bold form-mb-20 form-h-35 form-brdr-b-grey pr-50 pr-sm-0" action="{{route('contact-us.store')}}" method="post" enctype="multipart/form-data">
						<div class="row">
						
							<div class="col-sm-6">
								<p class="color-ash">Full Name*</p>
								<div class="pos-relative">
									<input class="pr-20" type="text" name="fullname">
									<i class="abs-tbr lh-35 font-13 color-green ion-android-done"></i>
								</div><!-- pos-relative -->
							</div><!-- col-sm-6 -->
							
							<div class="col-sm-6">							
								<p class="color-ash">Email*</p>
								<div class="pos-relative">
									<input class="pr-20" type="email" name="email">
									<i class="dplay-none abs-tbr lh-35 font-13 color-green ion-android-done"></i>
								</div><!-- pos-relative -->
							</div><!-- col-sm-6 -->
							
							<div class="col-sm-6">	
								<p class="color-ash">Your Phone*</p>
								<div class="pos-relative">
									<input class="pr-20" type="number" name="phone">
									<i class="dplay-none abs-tbr lh-35 font-13 color-green ion-android-done"></i>
								</div><!-- pos-relative -->
							</div><!-- col-sm-6 -->
							
							<div class="col-sm-6">	
								<p class="color-ash">Company*</p>
								<div class="pos-relative">
									<input class="pr-20" type="text" name="compagny">
									<i class="dplay-none abs-tbr lh-35 font-13 color-green ion-android-done"></i>
								</div><!-- pos-relative -->
							</div><!-- col-sm-6 -->
							
							<div class="col-sm-12">
								<div class="pos-relative pr-80">
									<p class="color-ash">Message*</p>
									<h4><b>Tell us about your question</b></h4>
									<textarea class="mb-0" name="message" placeholder="message..."></textarea>
									<button class="abs-br font-20 plr-15 btn-fill-primary" type="submit"><i class="ion-ios-paperplane"></i></button>
								</div><!-- pos-relative -->
							</div><!-- col-sm-6 -->
						</div><!-- row -->

						<input type="hidden" name="_token" value="{{csrf_token()}}">

					</form>
				</div><!-- col-md-6 -->
				
				<div class="col-sm-12 col-md-4">
					<h3 class="mb-20 mt-sm-50"><b>INFORMATION</b></h3>
					
					<ul class="font-11 list-relative list-li-pl-30 list-block list-li-mb-15">
						<li><i class="abs-tl ion-ios-location"></i>599 Co Rd 771 Ohio City CO <br/>81237. United States</li>
						<li><i class="abs-tl ion-android-mail"></i>ranylfoumbi@gmail.com</li>
						<li><i class="abs-tl ion-android-call"></i>(+237)-656-801-839</li>
						<li><i class="abs-tl ion-android-call"></i>(+237)-677-852-256</li>
					</ul>
					<ul class="font-11  list-a-plr-10 list-a-plr-sm-5 list-a-ptb-15 list-a-ptb-sm-5">
						<li><a class="pl-0" href="#"><i class="ion-social-linkedin"></i></a></li>
						<li><a href="#"><i class="ion-social-facebook"></i></a></li>
						<li><a href="#"><i class="ion-social-twitter"></i></a></li>
						<li><a href="#"><i class="ion-social-google"></i></a></li>
						<li><a href="#"><i class="ion-social-pinterest"></i></a></li>
					</ul>
				
				</div><!-- col-md-6 -->
			</div><!-- row -->
		</div><!-- container -->
    </section>
    
    @stop