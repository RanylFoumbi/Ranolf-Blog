@extends('layouts.userFront')

@section('content')


<section>
<h4 class="p-title"><b>ALL CATHEGORIES</b></h4>
		<div class="container">
			
			
				<div class="col-md-12 col-lg-12">
				<br>
					<div class="row">
					@foreach($cathegoryList as $cathegory)
						<div class="col-md-4">
						<a href="{{ route('user-posts.show',$cathegory->id)}}"><img withd="150" height="300" src="/upload/cathegory/{{$cathegory->image}}" alt=""></a>
							<h4 class="pt-20"><a href="{{ route('user-posts.show', $cathegory->id)}}"><b>{{$cathegory->name}}</b></a></h4>
							<p>{!!$cathegory->detail!!}</p>
							<ul class="list-li-mr-20 pt-10 pb-20">
								<li class="color-lite-black">by <a href="#" class="color-black"><b>{{$cathegory->user->name}},</b></a>
								{{$cathegory->created_at->format('F d, Y \a\t g:i A') }}</li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i><b>{{$cathegory->post->count()}} post(s)</b></li>
								<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i><b>47</b></li>
							</ul>
						</div><!-- col-sm-6 -->
						
					 @endforeach	
                       
					</div><!-- row -->
					
		</div><!-- container -->
	</section>



@stop