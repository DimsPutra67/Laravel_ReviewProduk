<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Data Post - SantriKoding.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<style>
    body{
        background-image: url('{{ asset("image/pulau.jpg") }}');
        background-size: cover;
    }

    .img1{
        border-radius: 50%;
	width: 100px;
	height: 100px;
	display: block;
    margin-left: auto;
    margin-right: auto;
    }
</style>
<body>

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <img src="{{ asset('storage/posts/'.$post->image) }}" class="w-100 rounded">
                        <hr>
                        <h4>{{ $post->title }}</h4>
                        <p class="tmt-3">
                            {!! $post->content !!}
                        </p>
                        
                        <img class="img1" src="{{ asset('image/11.jpg') }}">
                        <a href="http://127.0.0.1:8000" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5 .1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>