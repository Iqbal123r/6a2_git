<!DOCTYPE html>
<html>
<head>
	<title>new</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-12">
				<div class="contact-form">
					<form method="post" action="{{URL::to('/store')}}">
						{{csrf_field()}}
							<div class="form-group">
							  <label class="control-label col-sm-2" for="fname"> Name:</label>
							  <div class="col-sm-10">          
								<input type="text" class="form-control" id="fname" placeholder="Enter  Name" name="name">
							  </div>
							</div>
							<div class="form-group">
							  <label class="control-label col-sm-2" for="lname">Salary:</label>
							  <div class="col-sm-10">          
								<input type="text" class="form-control" id="lname" placeholder="Enter salary" name="salary">
							  </div>
							</div>
							<div class="form-group">
							  <label class="control-label col-sm-2" for="email">Email:</label>
							  <div class="col-sm-10">
								<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
							  </div>
							</div>
							<div class="form-group">
							  <label class="control-label col-sm-2" name="description" for="comment">Comment:</label>
							  <div class="col-sm-10">
								<textarea class="form-control" rows="5" id="comment"></textarea>
							  </div>
							</div>
							<div class="form-group">        
							  <div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-default">Submit</button>
							  </div>
							</div>
						</form>
			</div>
			<div class="col-md-8">
	<p>Many users already have downloaded Bootstrap from MaxCDN when visiting another site. As a result, it will be loaded from cache when they visit your site, which leads to faster loading time. Also, most CDN's will make sure that once a user requests a file from it, it will be served from the server closest to them, which also leads to faster loading time.Many users already have downloaded Bootstrap from MaxCDN when visiting another site.
</p>
<div class="row">
	<div class="col-md-6">
		<img src="https://via.placeholder.com/250">
	</div>
	<div class="col-md-6">
		<img src="https://via.placeholder.com/250">
	</div>
</div>
</div>
<div class="col-md-4">
	<p>Many users already have downloaded Bootstrap from MaxCDN when visiting another site. As a result, it will be loaded from cache when they visit your site, which leads to faster loading time. Also, most CDN's will make sure that once a user requests a file from it, it will be served from the server closest to them, which also leads to faster loading time.Many users already have downloaded Bootstrap from MaxCDN when visiting another site. As a result, it will be loaded from cache when they visit your site, which leads to faster loading time. Also, most CDN's will make sure that once a user requests a file from it, it will be served from the server closest to them, which also leads to faster loading time.

</p>
</div>
</div>
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>