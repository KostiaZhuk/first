@extends('layout.master')

@section('menu')
   @parent
@endsection

@section('content')
 <div class="row">
 	<div class="col-md-3 col-xs-5 col-lg-4 dleft"> 		
 		{!!Form::open(['action'=>'TopicController@search'])!!}   
		{!! Form::text('search','',['class'=>'form-control']) !!}	
		<button class='btn btn-success' type='submit'>Search</button>
 		{!!Form::close()!!}
 		<ul>
 			@foreach($topics as $t)
 			<li>
 				<a href="{{url('topic/'.$t->id)}}">{{$t->topicname}}</a>
 			</li>
 			@endforeach
 		</ul>
 	</div>
 	<div class="col-md-9 col-xs-7 col-lg-8 dright">
 		@if($id !=0)
			@foreach($blocks as $b)
				<div style="border:1px solid black;">
					<h2>{{$b->title}}</h2>
					@if($b->imagePath != "")
						<a style="float:left;" href="{{url($b->imagePath)}}" target="_blank" >
							<img id="im" src="{{asset($b->imagePath)}}" height="150px" alt="no image">
						</a>
					@endif
					<p class="pp">{{$b->content}}</p>
					<br style="clear:left;">
				</div>
			@endforeach
 		@endif
 	</div>
 </div>
@endsection
