@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">List Users</div>

				<div class="panel-body">
					
					<!-- Users Table -->
					<table class="table">
						<thead>
							<tr>
						<?php
							echo '<th></th>';
							foreach ( $users[0] as $key => $value ) {
							echo '<th>'.$key.'</th>';
							};
						?>
							</tr>
						</thead>
						<tbody>
						<?php
							foreach ( $users as $user ) {
								echo '<tr>';
								echo link_to_route('users', $user['name'], array('id' => $user['id']));							
								foreach ( $user as $value ) {
									echo '<td>'.$value.'</td>';
								}
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
