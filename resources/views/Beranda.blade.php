@extends('layouts.template')

@section('judul')
Home
@endsection

@section('hero')
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Rekomendasi Tempat PKL</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Dan Pembentukan Kelompok PKL</h2>
          <h2 data-aos="fade-up" data-aos-delay="400">Pulau Jawa</h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="#Tentang" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span></span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="{{asset('tema/img/logologo.png')}}" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->
@endsection

@section('main')


<main id="main">
<!-- ======= About Section ======= -->
<section id="Tentang" class="Tentang">

  <div class="container" data-aos="fade-up">
    <div class="row gx-0">

      <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
        <div class="content">
          <h2>Tentang Perusahaan</h2>
          <p>
          Berikut adalah beberapa rekomendasi tempat PKL/magang terbaik di Pulau Jawa untuk jurusan IT. Perusahaan-perusahaan seperti Gojek, Tokopedia, dan Traveloka di Jakarta menawarkan kesempatan menarik dalam industri teknologi. Selain itu, Bandung dengan perusahaan seperti Agate Studio dan Surabaya dengan KMK Online juga memiliki lingkungan yang inspiratif dalam bidang IT. Juga, perusahaan telekomunikasi seperti Telkomsel, XL Axiata, dan Indosat Ooredoo di Jakarta menyediakan kesempatan dalam industri telekomunikasi dan IT. Pastikan untuk melakukan penelitian lebih lanjut mengenai persyaratan dan prosedur pendaftaran untuk program PKL atau magang di tempat-tempat tersebut.
          </p>
          <div class="text-center text-lg-start">

            </a>
          </div>
        </div>
      </div>

      <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
        <img src="{{asset('tema/img/logologo2.png')}}" class="img-fluid" alt="">
      </div>

    </div>
  </div>

</section><!-- End About Section -->

<!-- ======= Values Section ======= -->
<section id="values" class="values">

  <div class="container" data-aos="fade-up">

    <header class="section-header">
      <h2>PKL</h2>
      <p>Perusahaan Terbaik Untuk Magang</p>
    </header>

    <div class="row">

      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
        <div class="box">
          <img src="{{asset('tema/img/gojek2.png')}}" class="img-fluid" alt="">
          <h3>Gojek</h3>
          <p>Gojek adalah perusahaan teknologi berbasis aplikasi yang didirikan di Jakarta, Indonesia. Perusahaan ini menyediakan layanan transportasi daring, pengiriman makanan, pembayaran digital, belanja daring, layanan keuangan, dan berbagai layanan lainnya. Gojek didirikan pada tahun 2010 dan telah berkembang pesat menjadi salah satu "decacorn" (perusahaan dengan nilai lebih dari 10 miliar dolar AS) di Asia Tenggara. Gojek memiliki aplikasi yang memungkinkan pengguna untuk memesan layanan mereka dengan mudah dan cepat. Perusahaan ini memiliki jaringan mitra pengemudi dan pedagang yang luas, yang memungkinkan mereka untuk memberikan layanan kepada jutaan pengguna di berbagai kota di Indonesia dan negara-negara lain di Asia Tenggara. Gojek juga terkenal karena inisiatif dalam memberdayakan mitra pengemudi dan pedagang kecil melalui program-program seperti pendidikan, pelatihan, dan bantuan teknologi.</p>
        </div>
      </div>

      <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
        <div class="box">
          <img src="{{asset('tema/img/grab2.png')}}" class="img-fluid" alt="">
          <h3>Grab</h3>
          <p>Grab adalah perusahaan teknologi transportasi dan layanan berbasis aplikasi yang beroperasi di Asia Tenggara. Berawal dari layanan taksi daring, Grab telah berkembang menjadi platform multi-layanan yang menyediakan layanan transportasi, pengiriman makanan, kurir, pembayaran digital, dan layanan keuangan. Didirikan pada tahun 2012 di Malaysia, Grab kini hadir di beberapa negara di Asia Tenggara, termasuk Indonesia, Singapura, Malaysia, Thailand, Vietnam, dan Filipina. Grab menyediakan aplikasi yang memungkinkan pengguna memesan layanan mereka dengan mudah dan aman. Perusahaan ini bekerja sama dengan mitra pengemudi dan pedagang lokal untuk menghubungkan mereka dengan jutaan pengguna di kawasan tersebut. Grab juga terkenal dengan upayanya dalam memberikan akses ke layanan transportasi yang aman, nyaman, dan terjangkau bagi masyarakat di wilayah Asia Tenggara.</p>
        </div>
      </div>

      <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
        <div class="box">
          <img src="{{asset('tema/img/tokopedia2.png')}}" class="img-fluid" alt="">
          <h3>Tokopedia</h3>
          <p>Tokopedia adalah salah satu perusahaan e-commerce terkemuka di Indonesia. Didirikan pada tahun 2009, Tokopedia menyediakan platform daring yang memungkinkan pengguna untuk membuka dan mengelola toko daring mereka sendiri, menjual berbagai produk mulai dari barang konsumen hingga produk digital. Platform ini memberikan akses kepada jutaan penjual dan pembeli di seluruh Indonesia. Tokopedia juga menawarkan berbagai fitur dan layanan, termasuk metode pembayaran yang aman, pengiriman yang cepat, serta layanan dukungan pelanggan. Perusahaan ini berperan dalam mendorong pertumbuhan usaha mikro, kecil, dan menengah (UMKM) di Indonesia melalui inklusi digital dan memberikan kesempatan kepada para penjual untuk memasarkan produk mereka secara online. Tokopedia telah menjadi salah satu unicorn di Indonesia dan berperan penting dalam perkembangan industri e-commerce di negara ini.</p>
        </div>
      </div>
      
      <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
        <div class="box">
          <img src="{{asset('tema/img/blibli2.png')}}" class="img-fluid" alt="">
          <h3>Blibli.com</h3>
          <p>Blibli adalah salah satu perusahaan e-commerce terkemuka di Indonesia. Didirikan pada tahun 2011, Blibli menyediakan platform daring yang menyediakan berbagai produk dan layanan, termasuk elektronik, fashion, kebutuhan rumah tangga, mainan, produk kesehatan, dan masih banyak lagi. Blibli juga menawarkan berbagai fitur dan promosi menarik kepada pengguna, seperti diskon, pengiriman cepat, dan layanan pelanggan yang responsif. Perusahaan ini berkomitmen untuk memberikan pengalaman belanja yang aman, nyaman, dan terpercaya kepada pelanggan. Blibli juga aktif dalam mendukung pengembangan industri e-commerce di Indonesia dan bermitra dengan berbagai merek lokal dan internasional untuk menyediakan beragam pilihan produk kepada pelanggan.</p>
        </div>
      </div>

        <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
          <div class="box">
            <img src="{{asset('tema/img/dana2.png')}}" class="img-fluid" alt="">
            <h3>Dana</h3>
            <p>DANA adalah sebuah perusahaan fintech yang beroperasi di Indonesia. Didirikan pada tahun 2018, DANA menyediakan layanan pembayaran digital yang memungkinkan pengguna untuk melakukan transaksi secara mudah dan aman melalui aplikasi mobile. DANA menawarkan berbagai fitur, termasuk pembayaran tagihan, transfer uang, top-up pulsa, pembelian tiket, pembayaran online, dan masih banyak lagi. Selain itu, DANA juga bekerja sama dengan berbagai mitra bisnis, termasuk e-commerce, ritel, dan penyedia jasa lainnya, untuk memperluas jangkauan layanan mereka. Perusahaan ini fokus pada inovasi dan meningkatkan inklusi keuangan di Indonesia dengan menyediakan akses ke layanan keuangan digital kepada masyarakat luas. DANA telah menjadi salah satu pemain utama dalam industri pembayaran digital di Indonesia.
            </p>
      </div>
    </div>

    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
      <div class="box">
        <img src="{{asset('tema/img/ovo2.png')}}" class="img-fluid" alt="">
        <h3>Ovo</h3>
        <p>OVO adalah sebuah perusahaan fintech yang beroperasi di Indonesia. Didirikan pada tahun 2016, OVO menyediakan platform pembayaran digital yang memungkinkan pengguna untuk melakukan berbagai transaksi, termasuk pembayaran tagihan, transfer uang, top-up pulsa, pembelian tiket, dan pembayaran di berbagai mitra bisnis. OVO juga menawarkan program cashback, diskon, dan reward kepada pengguna sebagai insentif untuk menggunakan layanan mereka. Perusahaan ini bekerja sama dengan berbagai mitra bisnis di berbagai sektor, termasuk ritel, e-commerce, transportasi, dan makanan, untuk memberikan kemudahan dan keuntungan kepada pengguna. OVO berkomitmen untuk memperluas akses ke layanan keuangan digital di Indonesia dan menjadi salah satu pemain utama di industri pembayaran digital di negara ini.</p>
      </div>
    </div>

    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
        <div class="box">
          <img src="{{asset('tema/img/telkomsel2.png')}}" class="img-fluid" alt="">
          <h3>Telkomsel</h3>
          <p>Telkomsel adalah sebuah perusahaan telekomunikasi yang merupakan bagian dari Telkom Group di Indonesia. Sebagai operator telekomunikasi terbesar di negara ini, Telkomsel menyediakan layanan telepon seluler, internet, dan data kepada jutaan pengguna di seluruh Indonesia. Perusahaan ini menawarkan berbagai paket dan layanan yang mencakup telepon, SMS, akses internet, serta layanan tambahan seperti pembayaran tagihan, top-up pulsa, dan konten hiburan. Telkomsel juga memiliki jaringan 4G yang luas, memastikan kualitas sinyal dan konektivitas yang baik bagi pengguna. Perusahaan ini terus berinovasi dan berkomitmen untuk memenuhi kebutuhan komunikasi dan konektivitas masyarakat di seluruh Indonesia.</p>
        </div>
      </div>

        <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
          <div class="box">
            <img src="{{asset('tema/img/bni2.png')}}" class="img-fluid" alt="">
            <h3>Bank BNI</h3>
            <p>Bank Negara Indonesia (BNI) adalah salah satu bank terbesar di Indonesia. Didirikan pada tahun 1946, BNI telah menjadi salah satu bank komersial terkemuka yang menyediakan berbagai layanan keuangan kepada nasabah perorangan, bisnis, dan korporat. BNI menawarkan berbagai produk dan layanan, termasuk tabungan, deposito, kredit, kartu kredit, serta layanan perbankan elektronik seperti mobile banking dan internet banking. Bank ini juga memiliki jaringan cabang yang luas di seluruh Indonesia, memudahkan akses bagi nasabah untuk melakukan transaksi keuangan. BNI berkomitmen untuk memberikan layanan yang berkualitas, inovatif, dan memberikan solusi finansial yang dapat mendukung pertumbuhan dan kebutuhan nasabah mereka.
            </p>
      </div>
    </div>

    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
      <div class="box">
        <img src="{{asset('tema/img/bri2.png')}}" class="img-fluid" alt="">
        <h3>Bank BRI</h3>
        <p>Bank Rakyat Indonesia (BRI) adalah salah satu bank terbesar di Indonesia. Didirikan pada tahun 1895, BRI telah menjadi bank yang fokus pada pelayanan perbankan untuk segmen perbankan mikro, kecil, dan menengah (UMKM). BRI menyediakan berbagai produk dan layanan perbankan, termasuk tabungan, deposito, kredit, kartu kredit, serta layanan perbankan elektronik seperti mobile banking dan internet banking. Bank ini juga memiliki jaringan cabang yang luas di seluruh Indonesia, memudahkan akses bagi nasabah untuk melakukan transaksi keuangan. BRI berkomitmen untuk mendukung pertumbuhan UMKM di Indonesia dan memberikan solusi finansial yang sesuai dengan kebutuhan nasabah mereka. BRI juga dikenal dengan program-program pemberdayaan masyarakat dan program kemitraan yang berfokus pada sektor UMKM.</p>
      </div>
    </div>

  </div>

</section><!-- End Values Section -->


<!-- ======= Review Konsumen ======= -->
<section id="counts" class="counts">
  <div class="container" data-aos="fade-up">

    <div class="row gy-4">

      <div class="col-lg-3 col-md-6">
        <div class="count-box">
          <i class="bi bi-emoji-smile"></i>
          <div>
            <span data-purecounter-start="0" data-purecounter-end="1500" data-purecounter-duration="1" class="purecounter"></span>
            <p>Konsumen yang suka</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="count-box">
          <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
          <div>
            <span data-purecounter-start="0" data-purecounter-end="1000" data-purecounter-duration="1" class="purecounter"></span>
            <p>Rating</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="count-box">
          <i class="bi bi-headset" style="color: #15be56;"></i>
          <div>
            <span data-purecounter-start="0" data-purecounter-end="1200" data-purecounter-duration="1" class="purecounter"></span>
            <p>Pelayanan</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="count-box">
          <i class="bi bi-people" style="color: #bb0852;"></i>
          <div>
            <span data-purecounter-start="0" data-purecounter-end="2000" data-purecounter-duration="1" class="purecounter"></span>
            <p></p>
          </div>
        </div>
      </div>

    </div>

  </div>

</section><!-- End Review konsumen -->  

<!-- ======= Testimonial Konsumen ======= -->


</section><!-- End Testimonials Section -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">

  <div class="container" data-aos="fade-up">

    <header class="section-header">
      <p>Kontak</p>
    </header>

    <div class="row gy-4">

      <div class="col-lg-6">

        <div class="row gy-4">
          <div class="col-md-6">
            <div class="info-box">
              <i class="bi bi-geo-alt"></i>
              <h3>Alamat</h3>
              <p>Jln.H.IR.Juanda<br>Slawi, No. 28</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="info-box">
              <i class="bi bi-telephone"></i>
              <h3>Telephone</h3>
              <p>+6287824034008</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="info-box">
              <i class="bi bi-envelope"></i>
              <h3>Email</h3>
              <p>ardenarjuna28@gmail.com</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="info-box">
              <i class=""></i>
              <h3></h3>
              <p><br></p>
              <br>
              <p> <br></p>
            </div>
          </div>
        </div>

      </div>

      <div class="col-lg-6">
        <form action="forms/contact.php" method="post" class="php-email-form">
          <div class="row gy-4">
           <img src="{{asset('tema/img/ard.png')}}" alt="">
           
@endsection