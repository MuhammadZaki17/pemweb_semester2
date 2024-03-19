<?php include_once 'layouts/header.php' ?>
<?php include_once 'layouts/sidebar.php' ?>




<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Halaman Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Halaman Utama</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="dist/img/gambar_komputer.jpg" class="d-block w-100" style="height: 500px;" alt="...">
    </div>
    <div class="carousel-item">
      <img src="dist/img/gambar_komputer2.jpg" class="d-block w-100" style="height: 500px;" alt="...">
    </div>
    <div class="carousel-item">
      <img src="dist/img/gambar_komputer3.jpg" class="d-block w-100" style="height: 500px;" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="card-group m-5">
        <div class="card">
          <img src="dist/img/gambar card komputer.jpg" height="280px" class="card-img-top" alt="komputer">
          <div class="card-body">
            <h5 class="card-title">Komputer</h5>
            <p class="card-text">Komputer adalah alat elektronik yang bekerja secara sistematis dan cermat untuk mengolah berbagai
              macam data. Seperti data angka, suara dan gambar.</p>
          </div>
        </div>
        <div class="card">
          <img src="dist/img/gambar laptop.jpg" class="card-img-top" alt="laptop">
          <div class="card-body">
            <h5 class="card-title">Laptop</h5>
            <p class="card-text">laptop adalah komputer pribadi yang dapat dipindahkan dan dibawa dengan mudah sehingga dapat digunakan di banyak tempat.</p>
          </div>
        </div>
        <div class="card">
          <img src="dist/img/netbook.jpg" class="card-img-top" width="100px" height="280px" alt="tablet">
          <div class="card-body">
            <h5 class="card-title">Netbook</h5>
            <p class="card-text">Netbook adalah jenis komputer portabel yang ringan, kecil, dan hemat energi, dirancang terutama untuk keperluan komputasi dasar seperti browsing web, mengirim email, dan menjalankan aplikasi produktivitas ringan.</p>
          </div>
        </div>
    </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  

  <?php include_once 'layouts/footer.php' ?>