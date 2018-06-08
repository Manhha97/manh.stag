<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<form action="{{asset('')}}products/{{$product->id}}" method="POST" role="form">
		@csrf
		{{ method_field('put')}}
		<!-- co the thay thế bằng cách này -->
		<!-- 	<input type="hidden" name="_method" value="put"> -->
		<legend>Sửa bài viết</legend>
	
		<div class="form-group">
			<label for="">Name</label>
			<input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{$product->name}}">
		</div>
		@if($errors->has('name'))
			<p style="color: red">{{$errors->first('name')}}</p>
		@endif
		<div class="form-group">
			<label for="">Price</label>
			<input type="text" class="form-control" id="price" name="price" placeholder="Price"  value="{{$product->price}}">
		</div>
		@if($errors->has('price'))
			<p style="color: red">{{$errors->first('price')}}</p>
		@endif

		<button type="submit" class="btn btn-primary">Update</button>
		</form>
	</div>
</body>
</html>