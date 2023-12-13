<!-- <!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<style>
    .kotak_login{
	width: 350px;
	background: transparent;
    border: 2px solid rgb(255, 255, 255, .2);
    backdrop-filter: blur(20px);
	/*meletakkan form ke tengah*/
	margin: 80px auto;
	padding: 30px 20px;
    
 
}

body{
	font-family: sans-serif;
	background: #d5f0f3;
    background-image: url(http://localhost/nusantara12/img/pulau.jpg);
    background-size: cover;
}
 
h1{
	text-align: center;
	/*ketebalan font*/
	font-weight: 300;
}
 
.tulisan_login{
    color:white;
	text-align: center;
	/*membuat semua huruf menjadi kapital*/
	text-transform: uppercase;
}
 
.kotak_login{
	width: 350px;
	background: transparent;
    border: 2px solid rgb(255, 255, 255, .2);
    backdrop-filter: blur(20px);
	/*meletakkan form ke tengah*/
	margin: 80px auto;
	padding: 30px 20px;
    
 
}
 
label{
	font-size: 11pt;
}
 
.form_login{
	/*membuat lebar form penuh*/
	box-sizing : border-box;
	width: 100%;
	padding: 10px;
	font-size: 11pt;
	margin-bottom: 20px;
}
 
.tombol_login{
	background: #46de4b;
	color: white;
	font-size: 11pt;
	width: 100%;
	border: none;
	border-radius: 3px;
	padding: 10px 20px;
}

.tombol_login:hover{
	color: black;
}
 
.link{
    
    text-decoration: none;
	font-size: 10pt;
    color: white;
}

.link:hover{
	color:black;
}
.register-link{
    font-size:14.5px;
    margin-top: 20px;
    
}

.register-link p a{
    color: #fff;
    text-decoration: none;
    font-weight:600;
}

.register-link p a:hover{
    color: #fff;
    text-decoration: underline;
    font-weight:600;
}

img{
	border-radius: 50%;
	width: 100px;
	height: 100px;
	display: block;
    margin-left: auto;
    margin-right: auto;
}
    </style>

<div class="kotak_login">
<img src="http://localhost/nusantara12/img/11.jpg">
		<p class="tulisan_login"  style="font-weight:bold;" class="link">Daftar</p>
 
		<form>
		<input type="text" name="username" class="form_login" placeholder="username">
			<input type="text" name="email" class="form_login" placeholder="email">
 
			
			<input type="text" name="password" class="form_login" placeholder="Password">
 
			<input type="submit" class="tombol_login" value="DAFTAR">
 
			<br/>
			<br/>
			<center>
				<a class="link" href="/login">kembali</a>
			</center>
		</form>

        </body>

</html> -->

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-
              alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-
              ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<style>
    body{
	font-family: sans-serif;
	background: #d5f0f3;
    background-image: url('{{ asset("image/pulau.jpg") }}');
    background-size: cover;
}
 
h1{
	text-align: center;
	/*ketebalan font*/
	font-weight: 300;
}
 
.checkbox{
    color:white;

}
 
.card{
	width: 350px;
	background: transparent;
    border: 2px solid rgb(255, 255, 255, .2);
    backdrop-filter: blur(20px);
	/*meletakkan form ke tengah*/
	margin: 80px auto;
	padding: 30px 20px;
    
    
 
}

img{
   
	border-radius: 50%;
	width: 100px;
	height: 100px;
	display: block;
    margin-left: auto;
    margin-right: auto;
	
}
 
label{
	font-size: 11pt;
}

.tulisan_login{
    color:white;
	text-align: center;
	/*membuat semua huruf menjadi kapital*/
	text-transform: uppercase;
}
 
.form-group .mb-3{
	/*membuat lebar form penuh*/
	box-sizing : border-box;
	width: 100%;
	padding: 10px;
	font-size: 11pt;
	margin-bottom: 20px;
}
 
.tombol_login{
	background: #46de4b;
	color: white;
	font-size: 11pt;
	width: 100%;
	border: none;
	border-radius: 3px;
	padding: 10px 20px;
}

.tombol_login:hover{
	color: black;
}
 
.link{
    
    text-decoration: none;
	font-size: 10pt;
    color: white;
}

.link:hover{
	color:black;
}
.register-link{
    font-size:14.5px;
    margin-top: 20px;
    
}

.register-link p a{
    color: #fff;
    text-decoration: none;
    font-weight:600;
}

.register-link p a:hover{
    color: #fff;
    text-decoration: underline;
    font-weight:600;
}

.daftar{
	width: 350px;
	background: transparent;
    border: 2px solid rgb(255, 255, 255, .2);
    backdrop-filter: blur(20px);
	/*meletakkan form ke tengah*/
	margin: 80px auto;
	padding: 30px 20px;
    
 
}
</style>
<body>
    <div class="row justify-content-center mt-5">
        <div class="col-lg-4">
            <div class="card">
			<p class="tulisan_login"  style="font-weight:bold;" class="link">REGISTER</p>
                <div class="card-header">
				<img src="{{ asset('image/11.jpg') }}">
                </div>
                <div class="card-body">
                    @if (Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif
					<form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <input type="text" placeholder="Name" id="name" class="form-control" name="name"
                                required autofocus>
                            @if ($errors->has('name'))
                                <div class="error text-danger">{{ $errors->first('title') }}</div>
                            @endif
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" placeholder="Email" id="email_address" class="form-control"
                                name="email" required autofocus>
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="form-group mb-3">
                            <input type="password" placeholder="Password" id="password"
                                class="form-control"name="password" required>
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                        <div class="form-group mb-3">
                            <div class="checkbox">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="d-grid">

                                <button class="btn btn-primary">Register</button>
								<a href="login"  class="btn btn-primary">Kembali</a>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>