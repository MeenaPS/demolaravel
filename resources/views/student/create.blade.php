@extends('master')

@section('content')

<div class="row">
	<div>
		<h3>Add Data</h3>
		@if (count($errors) > 0)
    <!-- Form Error List -->
    <div class="alert alert-danger">
        <strong>Whoops! Something went wrong!</strong>

        <br><br>

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif




			@if(\Session::has('success'))
			<div class="alert alert-success">
				<p>{{ \Session::get('success') }}</p>
			</div>
			@endif

		<form method="post" action="{{url('student')}}">
			{{csrf_field()}}
			<div class="form-group">
				<input type="text" name="first_name" class="form-control" placeholder="Enter your first name">
			</div>
			<div class="form-group">
				<input type="text" name="last_name" class="form-control" placeholder="Enter your last name">
			</div>
			<div class="form-group">
				<input type="submit" name="submit" class="btn btn-primary">
			</div>
		</form>
	</div>
</div>

@endsection
