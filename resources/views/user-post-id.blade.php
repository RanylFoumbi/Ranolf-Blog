
@extends('layouts.userFront')

@section('content')

	<section class="ptb-0">
	<script src="http://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"></script>
			<div class="mb-30 brdr-ash-1 opacty-5"></div>
			<div class="container">
				<a class="mt-10" href="index.html"><i class="mr-5 ion-ios-home"></i>Home<i class="mlr-10 ion-chevron-right"></i></a>
				<a class="mt-10" href="#">Blog Archive<i class="mlr-10 ion-chevron-right"></i></a>
				<a class="mt-10 color-ash" href="#">Single Blog</a>
			</div><!-- container -->
		</section>


	<section>
		<div class="container">
			<div class="row">
			@foreach($post_id as $post)
				<div class="col-md-12 col-lg-8">
					<img src="/upload/post/{{$post->image}}" alt="">
					<h3 class="mt-30"><b>{{$post->title}}</b></h3>
					<ul class="list-li-mr-20 mtb-15">
						<li id="postId" >{{$post->id}}</li>
						<li id="userId">{{$post->user->id}}</li>
						<li>by <a href="#"><b>{{$post->user->name}} </b></a> {{$post->created_at->format('F d, Y \a\t g:i A') }}</li>
						<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>30,190</li>
						<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i>30</li>
					</ul>
					
					<h2>{{$post->subtitle}}</h2>
					
					<p class="mtb-15">{!!$post->description!!}</p>
						
					
					<div class="float-left-right text-center mt-40 mt-sm-20">
				
						<ul class="mb-30 list-li-mt-10 list-li-mr-5 list-a-plr-15 list-a-ptb-7 list-a-bg-grey list-a-br-2 list-a-hvr-primary ">
							<li><a href="#">MULTIPURPOSE</a></li>
							<li><a href="#">FASHION</a></li>
							<li class="mr-0"><a href="#">BLOGS</a></li>
						</ul>
						<ul class="mb-30 list-a-bg-grey list-a-hw-radial-35 list-a-hvr-primary list-li-ml-5">
							<li class="mr-10 ml-0">Share</li>
							<li><a href="#"><i class="ion-social-facebook"></i></a></li>
							<li><a href="#"><i class="ion-social-twitter"></i></a></li>
							<li><a href="#"><i class="ion-social-google"></i></a></li>
							<li><a href="#"><i class="ion-social-instagram"></i></a></li>
						</ul>
						
					</div><!-- float-left-right -->
				
					<div class="brdr-ash-1 opacty-5"></div>
					
					<h4 class="p-title mt-50"><b>YOU MAY ALSO LIKE</b></h4>
					<div class="row">
					
						<div class="col-sm-6">
							<img src="{{asset('frontend/images/crypto-news-2-600x450.jpg')}}" alt="">
							<h4 class="pt-20"><a href="#"><b>2017 Market Performance: <br/>Crypto vs.Stock</b></a></h4>
							<ul class="list-li-mr-20 pt-10 mb-30">
								<li class="color-lite-black">by <a href="#" class="color-black"><b>Olivia Capzallo,</b></a>
								Jan 25, 2018</li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>30,190</li>
								<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i>47</li>
							</ul>
						</div><!-- col-sm-6 -->
						
						<div class="col-sm-6">
							<img src="{{asset('frontend/images/crypto-news-1-600x450.jpg')}}" alt="">
							<h4 class="pt-20"><a href="#"><b>2017 Market Performance: Crypto vs.Stock</b></a></h4>
							<ul class="list-li-mr-20 pt-10 mb-30">
								<li class="color-lite-black">by <a href="#" class="color-black"><b>Olivia Capzallo,</b></a>
								Jan 25, 2018</li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>30,190</li>
								<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i>47</li>
							</ul>
						</div><!-- col-sm-6 -->
						
					</div><!-- row -->
					
					<h4 class="p-title mt-20"><b>03 COMMENTS</b></h4>
					
				  
					<div class="sided-70 mb-40" id="displaycomment">  
				
	
					
			     	</div><!-- sided-70 -->
				
					
					
					
					<h4 class="p-title mt-20"><b>LEAVE A COMMENT</b></h4>
					
					<form action="" method="" class="form-block form-plr-15 form-h-45 form-mb-20 form-brdr-lite-white mb-md-50">
						<input type="text" id="fullname" name="fullname" placeholder="Your Name*:">
						<input type="text" id="email" name="email" placeholder="Your Email*:">
						<textarea class="ptb-10" id="message" name="message"  rows="7" cols="70" placeholder="leave your Comment here..."></textarea>
						<button class="btn-fill-primary plr-30" id="submitComment" rows="7" cols="70" type="submit"><b>LEAVE A COMMENT</b></button>
					</form>
				</div><!-- col-md-9 -->
				
				
			</div><!-- row -->
			@endforeach  
		</div><!-- container -->

		<script>

				
				jQuery(document).ready(function(){

					function displayComments(data)
				{
					var commentSpace = $('#displaycomment')
					var singlecoment = $('<div>').attr('class','singlecoment')
					var divimage = $('<div>').attr('class','s-left rounded')
					var image = $('<img>').attr('src','/storage/avatars/user.jpg')
					
					var commentdata = $('<div>').attr('class','s-right ml-100 ml-xs-85')
					var H5 = $('<h5>')
					var name = $('<b>').attr('class','name').text(data.fullname)
					var date = $('<span>').attr('class','font-8 color-ash').text(data.created_at)
					var likelink = $('<a>').attr('class','btn-brdr-grey btn-b-sm plr-15 mr-10 mt-5')
					.attr('href','#')
					var likebuton = $('<b>').text("LIKE")
					var replylink = $('<a>').attr('class','btn-brdr-grey btn-b-sm plr-15 mr-10 mt-5')
					.attr('href','#')
					var replybuton = $('<b>').text("REPLY")
					var message = $('<p>').attr('class','mtb-15 message').text(data.message)
					image.appendTo(divimage)
					name.appendTo(H5)
					date.appendTo(H5)
					H5.appendTo(commentdata)
					likebuton.appendTo(likelink)
					replybuton.appendTo(replylink)
					likelink.appendTo(commentdata)
					replylink.appendTo(commentdata)
					message.appendTo(commentdata)
					divimage.appendTo(singlecoment)
					commentdata.appendTo(singlecoment)
					commentSpace.prepend(singlecoment)				
				}

						jQuery('#submitComment').click(function(e){
							e.preventDefault();
							$.ajaxSetup({
								headers: {
									'X-CSRF-TOKEN': $('meta').attr('content')
								}
							});
							jQuery.ajax({
								url: "{{ url('/user-post-id/{id}/comments')}}",
								method: 'post',
								data: {
									fullname: jQuery('#fullname').val(),
									email: jQuery('#email').val(),
									message: jQuery('#message').val(),
									postId: parseInt(jQuery('#postId').text()),
									userId: parseInt(jQuery('#userId').text())
									
								},
								success: function(comment){
									displayComments(comment)
								},
								error: function(params) {
									
								}
							});
							
						});
						jQuery.ajax({
								url: "{{ url('/user-post-id/{id}')}}",
								method: 'get',				
								success: function(comment){
									alert(comment.message)
									var t = displayComments(comment)
									load(t)
								},
								error: function(params) {
									alert("sorry datas have not been getting please try again")
								}
							});
                });
		</script>
    </section>
    
    @stop