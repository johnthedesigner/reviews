@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">List Users</div>

				<div class="panel-body">
					
					<?php
						var_dump($users);
						// Get field names
						$table_fields = array_keys($users);
					?>
					
					<!-- Users Table -->
					<table class="table">
						<thead>
							<tr>
						<?php
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
								foreach ( $user as $value ) {
								echo '<th>'.$value.'</th>';
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
