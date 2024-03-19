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
              <li class="breadcrumb-item active">Halaman Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <form style="background-color: white;" action="hasil.php" class="w-75 mt-1 mx-auto p-4 border shadow-sm" method="POST">
        <h2>Belanja Online</h2>
        <hr />
        <div style="display: flex;">
            <div  class="container px-3">
                <div class="form-group row">
                    <label for="custname" class="col-4 col-form-label">Customer</label>
                    <div class="col-8">
                        <input  name="custname" id="custname" placeholder="Masukan nama customer" type="text" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4">Pilih produk</label>
                    <div class="col-8">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input value="Komputer" name="produk" id="Komputer" type="radio" class="custom-control-input" required>
                            <label for="Komputer" class="custom-control-label">komputer</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input value="Laptop" name="produk" id="Laptop" type="radio" class="custom-control-input" required>
                            <label for="Laptop" class="custom-control-label">Laptop</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input value="Netbook" name="produk" id="Netbook" type="radio" class="custom-control-input" required>
                            <label for="Netbook" class="custom-control-label">Netbook</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                    <div class="col-8">
                        <input name="jumlah" id="jumlah" placeholder="Jumlah beli" type="number" min=0 class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jumlah" class="col-4 col-form-label">Alamat Pengiriman</label>
                    <div class="col-8">
                        <textarea class="form-control" name="alamat" id="alamat" cols="44" rows="3" placeholder="Masukan Alamat" required></textarea>
                    </div>
                </div>
                <div class="form-group row" style="margin-top: 5px;">
                    <div class="offset-4 col-8">
                        <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                    </div>
                </div>
            </div>
            <div style="width:275px;">
                <table class="table">
                    <thead>
                        <tr class="table-info">
                            <th scope="col">Daftar Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="table-success">
                        <th scope="row">komputer : Rp4.200.000</th>
                        </tr>
                        <tr class="table-success">
                        <th scope="row">Laptop : Rp3.100.000</th>
                        </tr>
                        <tr class="table-success">
                        <th scope="row">Netbook : Rp3.800.000</th>
                        </tr>
                        <tr class="table-info">
                        <th >Harga Dapat Berubah Setiap Saat</th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    
    </form>
    <br>

      <!-- Default box -->
      
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  

  <?php include_once 'layouts/footer.php' ?>