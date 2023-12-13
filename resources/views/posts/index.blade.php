<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MyData</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>
<style>
   body {
  background-image: url('{{ asset("image/pulau.jpg") }}');
  background-size: cover;
}
h3{
  font-family: arial;
  font-weight: bold;
  color: white;
}
.container{
  display: flex;
  min-height: 100vh;
}

.sidebar{
  background-color: #111827;
  width: 260px;
  padding: 24px;
  display: flex;
  box-sizing: border-box;
  flex-direction: column;
}
.main{
  background-color:black;
  flex-grow:1;
}

.sidebar .description-header{
  font-style: normal;
  font-weight: 700;
  font-size: 18px;
  line-height: 16px;
  text-align: center;
  color: #ffff;
  
}

.sidebar a{
  text-decoration: none;
}

.sidebar .header .list-item{
  display:flex;
  flex-direction: row;
  align-items: center;
  padding: 12px 10px;
  border-radius: 8px;
  background-color: black;
  height: 40px;
  box-sizing: border-box;

}

.sidebar .header .illustration{
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  padding: 10px;
  width: 200px;
  height: 250px;
  border-radius: 50%;
  margin: 10px 0 22px 0;
  box-sizing: border-box;
}

.illustration .description{
  font-family: arial;
  text-decoration: none;
  color: white;
  font-weight: bold;
  padding: 5px 10px;
  border-radius: 8px;
  background-color: black;
  color: red;
  width: 212px;
  box-sizing: border-box;
  transition: all ease-in .1s;
}
.illustration .description:hover{
  color: white;
  background: black;
  transition: all ease-in .1s;

}

button[type="submit"]{
  padding: 8px 16px;
  border: 1px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  direction= right;
  cursor:pointer;
  


}

.illustration img{
  border-radius: 50%;
	width: 100px;
	height: 100px;
}
  
  
  </style>


<body style="">
    
    <div class="container">
      <div class="sidebar"> 
        <div class="header">
          <div class="list-item">
            <a href="/home">
              <img src="" alt="" class="icon">
              <span class="description-header">Dreview</span>
            </a>
          </div>
          <div class="illustration">
          <img src="{{ asset('image/11.jpg') }}" alt="Jane" width="100" height="100" >
            <div class="">
                <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Logout</button>
              </div>
          </div>
        </div>
      </div>
      <div class="main">
      <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <a href="{{ route('posts.create') }}" class="btn btn-md btn-success mb-3">TAMBAH</a>
                    <table class="table table-bordered">
                    <input name="search" style="margin-left:34px;width:75%;height:36px;"
                                    class= "form-control me-1" type="search" placeholder="search" aria-label="Search">
    
                       
                            <tr>
                                <th scope="col">GAMBAR</th>
                                <th scope="col">JUDUL</th>
                                <th scope="col">CONTENT</th>
                                <th scope="col">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($posts as $posts1)
                            <tr>
                                <td class="text-center">
                                    <img src="{{ asset('/storage/posts/'.$posts1->image) }}" class="rounded" style="width:150px">
                                </td>
                                <td>{{ $posts1->title }}</td>
                                <td>{!! $posts1->content !!}</td>
                                <td class="text-center">
                                    
                                    <form onsubmit="return 
confirm('Apakah Anda Yakin ?');" action="{{ route('posts.destroy', $posts1->id) }}" method="POST">
                                        <a href="{{ route('posts.show', $posts1->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                                        <a href="{{ route('posts.edit', $posts1->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                        @csrf
                                        @method('DELETE') <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <div class="alert alert-danger">
                                Data Post belum Tersedia.
                            </div>
                            @endforelse
                        </tbody>
                    </table>
                   
                </div>
        </div>
    </div>
    </div>

</body>

</html>

<!-- \<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="assets/css/styles.min.css" />

</head>
<style>
  @import url("fontawesome-all.min.css");
@import url("https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,900,300italic");
*{

	font-family: 'Source Sans Pro';

}
</style>
<body >
   Body Wrapper -->
  