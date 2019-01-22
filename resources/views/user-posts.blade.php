@extends('layouts.userFront')

@section('content')


<section>
<h4 class="p-title"><b>ALL POSTS</b></h4>
		<div class="container">
			
			
				<div class="col-md-12 col-lg-12">
					
					<div class="row">
					@foreach($postList as $post)
						<div class="col-md-4">
						<a href="{{ route('user-post-id.show',$post->id)}}"><img withd="150" height="300" src="/upload/post/{{$post->image}}" alt=""></a>
							<h4 class="pt-20"><a href="{{ route('user-post-id.show', $post->id)}}"><b>{{$post->title}}</b></a></h4>
							<p>{{$post->subtitle}}</p>
							<ul class="list-li-mr-20 pt-10 pb-20">
								<li class="color-lite-black">by <a href="#" class="color-black"><b>{{$post->user->name}}</b></a>
								{{$post->created_at->format('F d, Y \a\t g:i A') }}</li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i><b>30,190</b></li>
								<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i><b>47</b></li>
							</ul>
							
						</div><!-- col-sm-6 -->
						
						
					@endforeach   
					</div><!-- row -->
				</div>
		</div><!-- container -->
	</section>



@stop