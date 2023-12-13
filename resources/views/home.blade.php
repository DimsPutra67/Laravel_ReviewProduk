<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url();
        }

        header {
            background-color: #333;
            background-image: url('{{ asset("image/pulau.jpg") }}');
            color: #fff;
            padding: 10px 0;
            text-align: center;
            background-size: cover;
            min-height:600px;
        }

        header h1 {
            margin: 0;
        }
      
           
        

        main {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
        }

        article {
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid #ddd;
        }
        
        section h2{
            font-family: "Bahnschrift";
            color: white;
        }

        section a{
            background: #228B22;
	        color: white;
	        font-size: 11pt;
            font-family: "Lucida Console", "Courier New", monospace;
            text-decoration:none;
	        width: 100%;
	        border: none;
	        border-radius: 3px;
	        padding: 10px 20px;
        }

        section a:hover{
            background-color:#2F4F4F;
            color: white;
        }
        #product1 {
            text-align: center;
            background-color: #2F4F4F;
            color:black;
        }

        #product1 .pro-container{
            display: flex;
            justify-content: space-between;
            padding-top: 20px;
            flex-wrap: wrap;
        }

        #product1 .pro{
            width: 23%;
            min-width: 250px;
            padding: 10px 12px ;
            border: 1px solid #cce7d0;
            border-radius: 25px;
            cursor: pointer;
            box-shadow: 20px 20px 30px rgb(0,0,0,0.02);
            margin: 15px 0;
            transition: 0.2s ease;
            border: 2px solid rgb(255, 255, 255, .2);
            backdrop-filter: blur(50px);
            background-color: white;
        }
        
        #product1 .pro:hover{
            box-shadow: 20px 20px 30px rgb(0,0,0,0.06);
        }

        #product1 .pro img {
            width: 100%;
            border-radius: 20px;
        }

        #product1 .pro .des{
            text-align: start;
            padding: 10px 0;
        }

        #product1 .pro .des span{
            color: #606063;
            font-size: 12px;
        }

        #product1 .pro .des h5{
            padding-top: 7px;
            color: #1a1a1a;
            font-size: 14px
        }

        #product1 .pro .des i{
            font-size: 12px;
            color: rgb(243, 181, 25);
        }
        
        .pi img {
             width: 250px;
             height: 250px;
             border-radius: 50%;
          }

        .tri img{
            width: 550px;
             height: 700px;
            min-width: 250px;
            border-radius: 25px;
        }
        
    </style>
</head>

@extends('layouts.main')
@section('content')
<header class="bg-dark py-5">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center my-5">
                            <h1 class="display-5 fw-bolder text-white mb-2" >STONE ISLAND</h1>
                            <div class="pi">
                            <img src="{{ asset('image/11.jpg') }}">
                            <p class="lead text-white-50 mb-4"></p>
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                                <!-- <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#features">Get Started</a> -->
                                <a class="btn btn-outline-light btn-lg px-4" href="#">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section id="product1" class="seaction-p1">
            <h2> BEST FASHION </h2>
           <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">
      <div class="row">
      @forelse ($posts as $post)




          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div style="float:left;"class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><img src="{{ 
asset('/storage/posts/'.$post->image) }}" class="rounded" style="width: 
250px"></i></div>
              <h4 class="title"><a href="">{{ $post->title }}</a></h4>
              <p class="description"></p>
              <a href="{{ route('posts.show', 
$post->id) }}" class="btn btn-sm btn-dark">SHOW</a>
            </div>
          </div>
          @empty

@endforelse

<div class="page-section pb-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <h1>STONE ISLAND <br> PRODUK</h1>
            <p class="text-grey mb-4">Jacket Stone Island mewakili pernikahan sempurna antara inovasi desain, kualitas material yang superior, dan keanggunan fashion yang tak terbantahkan.
                 Dirancang untuk memberikan performa luar biasa di setiap situasi, jacket ini tidak hanya memberikan perlindungan optimal terhadap elemen-elemen cuaca, tetapi juga menunjukkan
                  kecanggihan dan keunggulan dalam dunia fashion. Terbuat dari bahan berkualitas tinggi, jacket Stone Island memberikan keseimbangan yang ideal antara kehangatan, kenyamanan, dan ketahanan.
                   Desain ergonomisnya memberikan fleksibilitas dan mobilitas yang tak terhingga, menjadikannya pilihan yang tepat untuk kegiatan luar ruangan atau gaya kasual sehari-hari. Logo Stone Island yang khas
                    ditempatkan dengan anggun, menegaskan identitas eksklusif dan prestise merek tersebut. Dengan perpaduan warna dan detail yang cermat, jacket ini bukan hanya pakaian fungsional, tetapi juga karya seni yang 
                    mencerminkan dedikasi Stone Island terhadap inovasi dan estetika. Dengan mengenakan Jacket Stone Island,
                 Anda tidak hanya mendapatkan perlindungan maksimal, tetapi juga merayakan gaya hidup yang mengejar keunggulan dan penampilan yang tak tertandingi.</p>
            <a href="#" class="btn btn-primary">Learn More</a>
          </div>
          
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
            <div class="tri">
              <img style="padding-top:35px; padding-bottom:20px;" src="{{ asset('image/1.jpg') }}" alt="">
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .bg-light -->
  </div> <!-- .bg-light -->
  
        
          

        </div>

      </div>
    </section>
    
    <!-- End Featured Services Section -->


        <!-- <section class="py-5 border-bottom" id="features">
            <div class="container px-5 my-5">
                <div class="row gx-5">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-collection"></i></div>
                        <h2 class="h4 fw-bolder">Featured title</h2>
                        <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
                        <a class="text-decoration-none" href="#!">
                            Call to action
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-building"></i></div>
                        <h2 class="h4 fw-bolder">Featured title</h2>
                        <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
                        <a class="text-decoration-none" href="#!">
                            Call to action
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-toggles2"></i></div>
                        <h2 class="h4 fw-bolder">Featured title</h2>
                        <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
                        <a class="text-decoration-none" href="#!">
                            Call to action
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section> -->
<!-- <body> -->
<!-- <style>
   body {
    background-image: url(http://localhost/nusantara12/img/pulau.jpg);
    background-size: cover;
}
  </style>  
</body> -->
@endsection
</html>
