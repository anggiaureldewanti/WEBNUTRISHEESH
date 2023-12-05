@extends('layouts/main')

@section('isi-konten')


  <!-- INI HOME JANGAN LUPA -->
  <!-- ======= Landing page Section ======= -->
  <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up">Hey,<br>Nutrisher!!!</h2>
          <p data-aos="fade-up" data-aos-delay="100">Web ini akan membantumu untuk menemukan kandungan gizi makanan yang kamu cari, dan memberikan resep makanan yang enak dan sehat </p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
          
            <a href="https://youtu.be/p4W-bvGvyfk?si=Xtk7R7ul3t2WxclQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="assets/img/logonutrisheesh.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>
    </div>
  </section><!-- End Landing page Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>About</h2>
          <p>NUTRISHEESH</span></p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-7 position-relative about-img" style="background-image: url(assets/img/gambaraboutus.jpg); background-size: contain;" data-aos="fade-up" data-aos-delay="150">
          </div>
          <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                Nutrisheesh merupakan web yang akan membantu untuk memudahkan keberlangsungan hidupmu ^_^
              </p>
              <ul>
                <li><i class="bi bi-check2-all"></i> Membantumu untuk mencari kandungan gizi dari makanan atau minuman yang kamu inginkan</li>
                <li><i class="bi bi-check2-all"></i> Memberikan rekomendasi resep makanan yang lezat tetapi sesuai standar kesehatan</li>
              </ul>
              <p>
               Semua informasi yang diberikan web ini telah diverifikasi oleh Nutritionist kami
              </p>

              <div class="position-relative mt-4">
                <img src="assets/img/about-2.jpg" class="img-fluid" alt="">
                <a href="https://youtu.be/p4W-bvGvyfk?si=Xtk7R7ul3t2WxclQ" class="glightbox play-btn"></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
       

    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter">
      <div class="container" data-aos="zoom-out">

        <div class="row gy-4">
          

        </div>

      </div>
    </section><!-- End Stats Counter Section -->

    
<!-- INI RESEP --> 
    <!-- ======= Menu Section ======= -->
    <section id="resep" class="resep">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Menu</h2>
          <p>Check Our <span>Nutrisheesh's Menu</span></p>
        </div>

        <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-starters">
              <h4>Drink</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-breakfast">
              <h4>Food</h4>
            </a><!-- End tab nav item -->

        </ul>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

          <div class="tab-pane fade active show" id="menu-starters">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Drink</h3>
            </div>

            <div class="row gy-5">

              <!-- DRINK 1-->
              <div class="col-lg-4 menu-item">
                <a href="/drink1" class="glightbox"> <img src="assets/img/menufix/oatmeal.png" class="menu-img img-fluid" alt=""> </a>
                <h4>Oatmeal</h4>
                <p class="penjelasan">
                  Gandum oats yang direbus dalam air atau susu
                </p> 
              </div>
              
              <!-- DRINK 2 -->
              <div class="col-lg-4 menu-item">
                <a href="/drink2" class="glightbox"><img src="assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
                <h4>Aut Luia</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
              </div>
              
              <!-- DRINK 3 -->
            <div class="col-lg-4 menu-item">
                <a href="/drink3" class="glightbox"><img src="assets/img/menu/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
                <h4>Est Eligendi</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
              </div>
            </div>
          </div> 
          <!-- End DRINK Menu Content -->


          <div class="tab-pane fade" id="menu-breakfast">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Food</h3>
            </div>

            <div class="row gy-5">

               <!-- FOOD 1 -->
              <div class="col-lg-4 menu-item">
                <a href="/breakfast1" class="glightbox"><img src="assets/img/menu/menu-item-1.png" class="menu-img img-fluid" alt=""></a>
                <h4>Magnam Tiste</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
              
              </div>
             
            <!-- FOOD 2 -->
              <div class="col-lg-4 menu-item">
                <a href="/breakfast2" class="glightbox"><img src="assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
                <h4>Aut Luia</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
              </div>

              <!-- FOOD 3 -->
              <div class="col-lg-4 menu-item">
                <a href="/breakfast3" class="glightbox"><img src="assets/img/menu/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
                <h4>Est Eligendi</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
              </div>
            </div>
          </div>
          <!-- End Food Menu Content -->

        </div>

      </div>
    </section><!-- End RESEP Section -->

    

    <!-- ======= KOLOM PERTANYAAN Section (NUTRITIONIST) ======= -->
    {{-- <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>WHAT'S THE PROBLEM???</h2>
          <p>What Are They <span>Ask To You</span></p>
        </div>

        <div class="slides-1 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Halo dok, untuk menghindari penyakit diabetes makanan dan minuman apa saja yang harus kita hindari???
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>The Answer</h3>
                      <h4>minum poci aja yang banyak</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/img/testimonials/testimonials-1.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Apakah ada batasan yang ditetapkan untuk menilai orang tersebut memiliki gizi yang baik atau buruk?
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>The Answer</h3>
                      <h4>gatau lupa</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/img/testimonials/testimonials-2.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                       Bagaimana cara agar tetap memiliki tubuh yang sehat disisi lain memiliki jadwal yang padat sehingga susah untuk menemukan waktu untuk olahraga
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>The Answer</h3>
                      <h4>Harus pintar untuk membagi waktu</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/img/testimonials/testimonials-3.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                       Halo dok, bagaimana cara agar mudah menggemukkan badan? 
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>The Answer</h3>
                      <h4>Konsumsi makanan 3 kali sehari dan menjaga pola makan</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/img/testimonials/testimonials-4.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section> --}}
    
    <!-- End KOLOM PERTANYAAN(NUTRITIONIST) Section -->

  

    <!-- ======= Nutrisionist Section ======= -->
    <section id="nutrisionist" class="chefs section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>NUTRITIONIST</h2>
          <p>Our <span>Proffesional</span> Nutritionist</p>
        </div>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="chef-member">
              <div class="member-img">
                <img src="assets/img/chefs/chefs-1.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Nutritionist</span>
                <p>Pengalaman Nutritionist PT. Nutriboga Perkasa Jul 2023 - Saat ini3 bulan Jakarta Timur, Jakarta, Indonesia 
                  Nutritionist PT King Gold Indonesia Mar 2022 - Apr 20231 tahun 2 bulan</p>
              </div>
            </div>
          </div><!-- End Chefs Member -->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="chef-member">
              <div class="member-img">
                <img src="assets/img/chefs/chefs-2.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Nutritionist</span>
                <p>Pengalaman Nutritionist PT Indocater Sep 2021 - Saat ini2 tahun West Jakarta, Jakarta, Indonesia - Created HACCP Plan for the process of food production</p>
              </div>
            </div>
          </div><!-- End Chefs Member -->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="chef-member">
              <div class="member-img">
                <img src="assets/img/chefs/chefs-3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>Nutritionist</span>
                <p>Memiliki pengalaman dibidang klinik dalam asuhan gizi pasien, konsultasi gizi kepada pasien, melakukan HACCP pada salah satu menu, analisis manajemen sistem pelayanan</p>
              </div>
            </div>
          </div><!-- End Chefs Member -->

        </div>

      </div>
    </section><!-- End Chefs Section -->

   
    </section><!-- End Book A Table Section -->

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  @endsection
</html>