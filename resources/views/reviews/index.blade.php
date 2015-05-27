@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">List Reviews</div>

				<div class="panel-body">
					
					<!-- Users Table -->
					<table class="table">
						<thead>
							<tr>
						<?php
							echo '<th></th>';
							echo '<th>Title</th>';
							echo '<th>Rating</th>';
							echo '<th>Content</th>';
						?>
							</tr>
						</thead>
						<tbody>
						<?php
							foreach ( $reviews as $review ) {
								echo '<tr>';
								$review_link = action('ReviewController@edit', array('id' => $review['id']));
								echo '<td><a href="'.$review_link.'">Edit</a></td>';	
								echo '<td>'.$review['title'].'</td>';	
								echo '<td>'.$review['rating'].'</td>';	
								echo '<td>'.$review['content'].'</td>';	
								echo '</tr>';
							}
						?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
