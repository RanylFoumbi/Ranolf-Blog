

<div class="s-left rounded">
    <img src="/storage/avatars/{{auth::user()->avatar }}" alt="" >
</div><!-- s-left -->

<div class="s-right ml-100 ml-xs-85">
    <h5><b class="name">{{$response->fullname}} </b> <span class="font-8 color-ash">{{$response->created_at}}</span></h5>
    <p class="mtb-15 message">{{$response->message}}</p>
    <a class="btn-brdr-grey btn-b-sm plr-15 mr-10 mt-5" href="#"><b>LIKE</b></a>
    <a class="btn-brdr-grey btn-b-sm plr-15 mt-5" href="#"><b>REPLY</b></a>
</div><!-- s-right -->
					
	