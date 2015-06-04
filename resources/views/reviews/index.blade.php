@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">

			<!-- Create Review -->
			{!! Form::open(['method'=>'get','action'=>['ReviewController@create']]) !!}
			 <button type="submit">New Review</button>                      
			{!! Form::close() !!}
			<br>

			<div class="panel panel-default">

				<div class="panel-heading">List Reviews</div>

				<div class="panel-body">
					
					<!-- Users Table -->
					<table class="table">
						<thead>
							<tr>
								<th>Title</th>
								<th>Content</th>
								<th>Owner</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							@foreach ( $reviews as $review )
							<tr>
								<td>{!! $review->title !!}</td>
								<td>{!! $review->content !!}</td>
								<td>{!! $review->user['name'] !!}</td>
								<td>
									<!-- Edit Review -->
									{!! Form::open(['method'=>'get','action'=>['ReviewController@edit',$review->id]]) !!}
									 <button type="submit">Edit</button>                      
									{!! Form::close() !!}									
									<!-- Delete Review -->
									{!! Form::open(['method'=>'delete','action'=>['ReviewController@destroy',$review->id]]) !!}
									 <button type="submit">Delete</button>                      
									{!! Form::close() !!}									
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
