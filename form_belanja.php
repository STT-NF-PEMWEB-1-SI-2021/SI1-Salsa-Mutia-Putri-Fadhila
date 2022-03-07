<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Form Belanja</title>

    <!-- CSS Internal -->
    <style>
        body{
            margin:15px;
        }
        form{
            padding-top: 50px;
            padding-right: 15px;
            padding-bottom: 40px;
            padding-left: 15px;
        }
    </style>
    
  </head>
  <body>
  <div>
    <div class="row">
        <div class="col-8">
            <!-- Navigation -->
            <nav>
                <a><h3>Belanja Online</h3></a>
                <hr>
            </nav>
            <!-- /Navigation -->

            <!-- Form Belanja -->
            <form method="POST" action="form_belanja.php">
                <div class="form-group row">
                    <label for="costumer" class="col-3 col-form-label"><b>Costumer</b></label> 
                    <div class="col-4">
                    <input id="costumer" name="costumer" placeholder="Nama Costumer" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-3"><b>Pilih Produk</b></label> 
                    <div class="col-9">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV"> 
                        <label for="produk_0" class="custom-control-label">TV</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="KULKAS"> 
                        <label for="produk_1" class="custom-control-label">KULKAS</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="MESINCUCI"> 
                        <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
                    </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jumlah" class="col-3 col-form-label"><b>Jumlah</b></label> 
                    <div class="col-2">
                    <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
                    </div>
                </div> 
                <div class="form-group row">
                    <div class="offset-3 col-4">
                    <button name="kirim" type="submit" class="btn btn-success">Kirim</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- /Form Belanja -->

        <!-- Form Daftar Harga -->
        <div class="col-4">
                <table class="table table-lg">
                    <thead>
                        <tr style="background-color: #4682B4;">
                        <th><font color="white">Daftar Harga</font></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>TV : 4.200.000</td>
                        </tr>
                        <tr>
                        <td>Kulkas : 3.100.000</td>
                        </tr>
                        <tr>
                        <td>Mesin Cuci : 3.800.000</td>
                        </tr>
                        <tr style="background-color: #4682B4;">
                        <th><font color="white">Harga Dapat Berubah Setiap Saat</font></th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /Form Daftar Harga -->
    </div>
<hr>

    <!-- PHP -->
    <?php
        $costumer = $_POST['costumer'];
        $produk = $_POST['produk'];
        $jumlah = $_POST['jumlah'];

        if ($produk == "TV"){
            $harga = 4200000;
        }elseif($produk == "Kulkas"){
            $harga = 3100000;
        }elseif ($produk == "Mesin Cuci"){
            $harga = 3800000;
        } 

        echo 'Nama Customer : '. $costumer;
        echo '<br/> Produk Pilihan : '. $produk;
        echo '<br/> Jumlah Beli : '. $jumlah;
        echo '<br/> Total Belanja : Rp. '.($harga * $jumlah).',-';
    ?>
    <!-- /PHP -->


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>