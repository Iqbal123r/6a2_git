<!DOCTYPE html>
<html>
<head>
	<title>About Us</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" type="text/css" href="{{asset('/css/style.css')}}">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	<!-- <h2>This is about page</h2>
	<h3>{{$myname}}</h3>
	<h3>{{$myemail}}</h3> -->
	<div class="container contact">
	<div class="row">
		<div class="col-md-3">
			<div class="contact-info">

				<img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image"/>
				<h2>Contact Us</h2>
				<h4>We would love to hear from you !</h4>
			</div>
		</div>
		<div class="col-md-9">
			<div class="contact-form">
				<form method="post" action="{{URL::to('/store')}}">
					{{csrf_field()}}
				<div class="form-group">
				  <label class="control-label col-sm-2" for="name">Name:</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" id="name" placeholder="EnterName" name="name">
				  </div>
				</div>

				<div class="form-group">
				  <label class="control-label col-sm-2" for="email">Email:</label>
				  <div class="col-sm-10">          
					<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
				  </div>
				</div>


				<div class="form-group">
				  <label class="control-label col-sm-2" for="comment">Description:</label>
				  <div class="col-sm-10">
					<textarea class="form-control" name="description"rows="5" id="comment"></textarea>
				  </div>
				</div>
				
				
				<div class="form-group">        
				  <div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default">Submit</button>
				  </div>
				</div>
				</form>
			</div>
		</div>
	</div>
</div>

</body>
</html>