@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading"><?php echo $user['name']; ?></div>

				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<?php echo Form::model($user, array('route' => array('users.update', $user['id']))); ?>
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<?php echo Form::label('name', 'Name', array('class' => 'col-md-4 control-label')); ?>
							<div class="col-md-6">
								<?php echo Form::text('name', 'John Doe'); ?>
							</div>
						</div>

						<div class="form-group">
							<?php echo Form::label('email', 'E-Mail Address', array('class' => 'col-md-4 control-label')); ?>
							<div class="col-md-6">
								<?php echo Form::text('email', 'John@johnthedesigner.com'); ?>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<?php echo Form::submit('Click Me!'); ?>
							</div>
						</div>
					</form>
				</div>

			</div>
		</div>
	</div>
</div>
@endsection
