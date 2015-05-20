@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">List Users</div>

				<div class="panel-body">
					This is the User Listing!<br>
					<?php var_dump($users); ?>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
