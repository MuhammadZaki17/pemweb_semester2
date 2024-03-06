<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<?php
    
    if (isset($_POST['submit'])){
        $cst = $_POST['custname'];
        $prd = $_POST['produk'];
        $jml = $_POST['jumlah'];
        $btn = $_POST['submit'];
    
        switch ($prd){
            case "TV":
                $total = $jml * 4200000;
                break;
            case "kulkas":
                $total = $jml * 3100000;
                break;
            case "Mesin Cuci":
                $total = $jml * 3800000;
                break;
        }
        $total_format = number_format($total, 0, ',', '.');
    }
?>
<body style="background-color: darkgray;">

    <form style="background-color: white;" action="form_belanja.php" class="w-75 mt-5 mx-auto p-4 border shadow-sm" method="POST">
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
                            <input value="TV" name="produk" id="tv" type="radio" class="custom-control-input" required>
                            <label for="tv" class="custom-control-label">TV</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input value="kulkas" name="produk" id="kulkas" type="radio" class="custom-control-input" required>
                            <label for="kulkas" class="custom-control-label">Kulkas</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input value="Mesin Cuci" name="produk" id="mc" type="radio" class="custom-control-input" required>
                            <label for="mc" class="custom-control-label">Mesin Cuci</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                    <div class="col-8">
                        <input name="jumlah" id="jumlah" placeholder="Jumlah beli" type="number" min=0 class="form-control" required>
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
                        <th scope="row">TV : Rp4.200.000</th>
                        </tr>
                        <tr class="table-success">
                        <th scope="row">Kulkas : Rp3.100.000</th>
                        </tr>
                        <tr class="table-success">
                        <th scope="row">Mesin Cuci : Rp3.800.000</th>
                        </tr>
                        <tr class="table-info">
                        <th >Harga Dapat Berubah Setiap Saat</th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <?php 
            if (isset($_POST['submit'])){
            echo '<div class="form-control border-info"> Nama Customer : '. $cst. '<br>Nama Produk : '. $prd.'<br>Jumlah Beli : '. $jml.'<br>Total Belanja : Rp'. $total_format."</div>";
            }
        ?>
    </form>
</body>

</html>