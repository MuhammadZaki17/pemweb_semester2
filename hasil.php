<?php include_once 'layouts/header.php' ?>
<?php include_once 'layouts/sidebar.php' ?>




<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Halaman hasil</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Halaman hasil</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
    <div class="border shadow-sm w-75 mt-5 mx-auto p-4 ">
    <?php
    
    if (isset($_POST['submit'])){
        $cst = $_POST['custname'];
        $prd = $_POST['produk'];
        $jml = $_POST['jumlah'];
        $btn = $_POST['submit'];
        $alm = $_POST['alamat'];
    
        switch ($prd){
            case "Komputer":
                $total = $jml * 4200000;
                break;
            case "Laptop":
                $total = $jml * 3100000;
                break;
            case "Netbook":
                $total = $jml * 3800000;
                break;
        }
        $total_format = number_format($total, 0, ',', '.');
    }
?>
          <?php
          
          if (isset($_POST['submit'])){
          echo 'Nama Customer : '. $cst; 
          echo '<br>Nama Produk : '. $prd;
          echo '<br>Jumlah Beli : '. $jml;
          echo '<br>Total Belanja : Rp'. $total_format;
          echo '<br>Alamt Pengiriman : '. $alm;
          }
          ?>
    </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include_once 'layouts/footer.php' ?>