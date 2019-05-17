@include('includes.header')

<div class="container">
	<h1>Registration Form</h1>
  
  <form method="POST" action="{{ url('/register') }}">
  	{{csrf_field()}}

  	@if (count($errors) > 0)
		@foreach ($errors->all() as $error)
	        <div class="alert alert-danger">{{ $error }}</div>
	    @endforeach
	@endif    

	@if ($message = Session::get('response'))
		<div class="alert alert-success">
			<p>{{ $message }}</p>
		</div>
	@endif

  	<div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="phone">Phone:</label>
      <input type="text" class="form-control" id="phone" placeholder="Enter phone number" name="phone_no">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
    </div>
    
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

@include('includes.footer')