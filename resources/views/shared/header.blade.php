  <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
  <style>
        *{
    margin: 0px;
    padding: 0px;
}
body {
    font-size: 14px;
    font-family: verdana;

}

.navbar{
    background-color: 	#2F4F4F;
    box-shadow: 2px 2px 3px 3px;
    
}   

nav{
    display: flex;
    align-items: center;
    justify-content: center;
    
}

nav li{
    list-style: none;
    padding:0 20px;
}
nav li a{
    text-decoration: none;
    font-size:16px;
    font-weight:600;
    color: #5f9ea0;
    transition:0.3s ease;
}

nav li a:hover,
nav li a.active{
    color: white;
}

.collapse{

}

    </style>
<nav class="navbar navbar-expand-lg"  id="menu">
    <div class="container-fluid">
        <a  style="font-weight:bold; color:white;" class="navbar-brand" href="#">DReview</a>

        <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1 font-weight-bold"><a class="nav-link active py-3 px-0 px-lg-3 rounded" href="http://127.0.0.1:8000/">Home</a></li>
                        <li class="nav-item mx-0 mx-lg-1 font-weight-bold"><a class="nav-link active py-3 px-0 px-lg-3 rounded" href="about">Tentang Kami</a></li>
                        <!-- <li class="nav-item mx-0 mx-lg-1 font-weight-bold"><a class="nav-link active py-3 px-0 px-lg-3 rounded" href="login">Login</a></li> -->
                    </ul>
                </div>

        <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collaps" data-bs>
      <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent" id="heading">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home"> Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="blog">Blog</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="siswa">Siswa</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="guru">Guru</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="user">User</a>
        </li>
</div> -->
</nav>