
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="http://localhost:8000/assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="http://localhost:8000/assets/css/font-awesome.min.css" />
</head>
<style>
.form{
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	max-width: 400px;
}
</style>
<body>

<form action="" class="form-group container form" onsubmit="return false">
<h1><b>Please Login</b></h1>
<p><input type="text" class="form-control" id="user"></p>
<p><input type="password" class="form-control" id="pass"></p>
<p><button class="btn btn-primary btn-block" onclick="login()">Login</button></p>
</form>

<script src="http://localhost:8000/assets/js/jquery.min.js"></script>
<script>
function login()
{
	var user = $('#user').val();
	var pass = $('#pass').val();
	if(user != ""&&pass != ""){
		$.ajax({
			url: 'http://localhost:8000/v1/auth/login',
			data: {
				username: user,
				password: pass
			},
			type: 'POST',
			dataType: 'json',
			success: function(res){
				window.localStorage.setItem('token', res.token);
				alert('Login success');
				window.location = 'places';
				console.log(res);
			},
			error: function(res){
				alert('Login failed');
				console.log(res);
			}
		});
	}else{
		alert("Empty");
	}
}
</script>

</body>
</html>