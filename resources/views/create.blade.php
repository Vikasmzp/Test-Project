<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
	<title> teacher crud</title>
</head>
<body>
	<form action="{{route('inc.store')}}" method="post" enctype="multpart/form-data">
         
	      	<fieldset>
	      		<legend>login page of crud</legend>
	      	@csrf
	      	Name:<input type="text" name="name" placeholder="Enter your name" value="{{old('name')}}"><br>
	      	<!-- laravel velidation open -->
            <span style="color:red;">
            	@error('name')
            	{{$message}}
            	@enderror
            </span><br>
            <!-- laravel velidation end -->
	      	Address:<input type="text" name="address" placeholder="Enter your address" value="{{old('name')}}"><br>
	      	<!-- laravel velidation open -->
            <span style="color:red;">
            	@error('address')
            	{{$message}}
            	@enderror
            </span><br>
            <!-- laravel velidation end -->
	      	Email:<input type="email" name="email" placeholder="Enter your email" value="{{old('name')}}"><br>
	      	<!-- laravel velidation open -->
            <span style="color:red;">
            	@error('email')
            	{{$message}}
            	@enderror
            </span><br>
            <!-- laravel velidation end -->
	      	Number:<input type="number" name="number" placeholder="Enter your mobile address
            " value="{{old('name')}}"><br>
            <!-- laravel velidation open -->
            <span style="color:red;">
            	@error('number')
            	{{$message}}
            	@enderror
            </span><br>
            <!-- laravel velidation end -->
            Subject:<input type="text" name="subject" placeholder="Enter your subject"><br>
            <!-- laravel velidation open -->
            <span style="color:red;">
            	@error('subject')
            	{{$message}}
            	@enderror
            </span><br>
            <!-- laravel velidation end -->
            <button class="btn btn-primary" type="submit">submit</button>
	      	


<!-- 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
</body>
</html>