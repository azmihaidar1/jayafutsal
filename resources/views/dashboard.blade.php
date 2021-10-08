@extends('template')
@section('content')
<div class="content">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                    <i class="fa fa-bookmark" aria-hidden="true"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="stats">
                      <p class="card-category">Cooming Soon Event</p>
                      <p class="card-title">ULM REKTOR CUP<p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-calendar-o"></i>
                  Oktober 25-28, 2021
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                    <i class="fa fa-bookmark" aria-hidden="true"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="stats">
                      <p class="card-category">Cooming Soon Event</p>
                      <p class="card-title">LIFUBA<p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-calendar-o"></i>
                  November 1-10, 2021
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                    <i class="fa fa-credit-card" aria-hidden="true"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="stats">
                      <p class="card-category">Promo</p>
                      <p class="card-title">POTONGAN 25%<p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-calendar-o"></i>
                  Oktober 21-31, 2021
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                    <i class="fa fa-bookmark" aria-hidden="true"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="stats">
                      <p class="card-category">Cooming Soon Event</p>
                      <p class="card-title">STIEPAN CUP<p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-calendar-o"></i>
                  November 15-20, 2021
                </div>
              </div>
            </div>
          </div>
        </div>


<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
 <!--KARUSEL-->       
        <section id="karusel" class="karusel">
<div class="row justify-content-center"> <!--Mengatur row agar ke tengah-->
<div class="col-md-8 col-md-offset-2"> <!--Mengatur row dan colom pada konten menjadi lebih kecil-->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
          <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
          <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
          <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://i.ibb.co/q7DxpNt/Karusel3.jpg" class="d-block w-100" alt="Gambar tidak tersedia"> <!--mengambil gambar pada folder Gambar untuk slideshow pertama-->
            <div class="carousel-caption d-none d-md-block">
              <h5>JAYA FUTSAL</h5>
              <p>ayoo kembangkan bakatmu di JAYA FUTSAL.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://i.ibb.co/wg1TS6S/Karusel2.jpg" class="d-block w-100" alt="Gambar tidak tersedia"> <!--mengambil gambar pada folder Gambar untuk slideshow kedua-->
            <div class="carousel-caption d-none d-md-block">
              <h5>JAYA FUTSAL</h5>
              <p>lapangan indoor berstandar nasional</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://i.ibb.co/v4QvSTM/Karusel.jpg" class="d-block w-100" alt="Gambar tidak tersedia"> <!--mengambil gambar pada folder Gambar untuk slideshow ketiga-->
            <div class="carousel-caption d-none d-md-block">
              <h5>JAYA FUTSAL</h5>
              <p>Bermain dengan fairplay tanpa ada kekerasan.</p>
            </div>
          </div>
        </div>
        <!-- codingan bootstrap slideshow tombol sebelum dan selanjutnya -->
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </a>
      </div>
      </div>
  </div>
</div>
</section>
<br><br>
</div>
      
            </div>
          </div>
          <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <div class="credits ml-auto">
              <span class="copyright">
                © <script>
                  document.write(new Date().getFullYear())
                </script>, made with <i class="fa fa-address-book-o"></i> by Azmi Haidar
              </span>
            </div>
          </div>
        </div>
      </footer>
        </div>
       
      </div>
      
              
        
      @endsection