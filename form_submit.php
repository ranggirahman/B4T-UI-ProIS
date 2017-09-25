
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/favicon.ico">

    <title>Balai Besar Bahan dan Barang Teknik</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->    
    <link href="css/material-icons.css" rel="stylesheet">
    <link href="css/dashboard.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
  </head>


  <body>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container">
        <a class="navbar-brand" href="index.php"><img src="img/logo.png" class="img-fluid" style="max-width: 20%; and height: auto" alt="Responsive image"> Balai Besar Bahan dan Barang Teknik</a>
        <div class="dropdown">
          <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="material-icons" style="font-size: 13px">account_circle</i> Username</button>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Edit Profile</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" style="color: red; font-weight: bold" href="#">Logout</a>
          </div>
        </div>       
      </div>
    </nav>      
      </div>
    </nav>

    <div class="container" style="padding-top: 70px">
      <div class="card">
        <h4 class="card-header">Form Daftar Pemesanan Barang / Jasa</h4>
        <div class="card-body">
          <form action='response.php' method='POST'>
            <table class="table borderless">
              <tr>
                <td width="20%">Kepada</td>
                <td colspan="2"><input class="form-control" type="text" name="kepada" placeholder="Kepala B4T,u.p. Kepala Bagian Tata Usaha" readonly></td>
                <td width="30%"></td>
              </tr>
              <tr>
                <td>Dari</td>
                <td colspan="2"><input class="form-control" type="text" name="dari" placeholder="Ranggi Rahman (Seksi Informasi)" data-toggle="popover" title="" data-content="Sesuai Data Login Anda" readonly></td>
                <td width="30%"></td>
              </tr>
              <tr>
                <td>Agar</td>
                <td colspan="2"><input class="form-control" type="text" name="agar" required></td>
                <td width="30%"></td>
              </tr>
              <tr>
                <td>Diperlukan Tanggal</td>
                <td><input class="form-control" type="date" name="tanggal" required></td>
                <td width="50%"></td>
                <td width="30%"></td>
              </tr>                   
            </table>
            <hr>
            <div class="table-responsive">
              <table border="0" class="table">
                <thead class="thead-default">
                  <tr>
                    <th width="5%">No.</th>
                    <th width="15%">Kategori</th>
                    <th>Nama dan Spesifikasi Barang / Jasa</th>
                    <th width="18%" colspan="2" style="text-align: center;">Banyaknya</th>
                    <th width="5%" colspan="2"></th>
                  </tr>
                </thead>
                <tbody>   
                  <tr style="">
                    <td>1</td>
                    <td>ATK</td>
                    <td>Donec id elit non mi porta gravida at eget metus</td>
                    <td style="text-align: right;">3</td>
                    <td>Buah</td>
                    <td><button class="btn btn-danger btn-sm" type="button"><i class="material-icons">delete_forever</i></button></td>
                    <td><button class="btn btn-warning btn-sm" type="button"><i class="material-icons">edit</i></button></td>
                  </tr>  
                  <tr style="">
                    <td>2</td>
                    <td>ATK</td>
                    <td>Donec id elit non mi porta gravida at eget metus</td>
                    <td style="text-align: right;">3</td>
                    <td>Buah</td>
                    <td><button class="btn btn-danger btn-sm" type="button"><i class="material-icons">delete_forever</i></button></td>
                    <td><button class="btn btn-warning btn-sm" type="button"><i class="material-icons">edit</i></button></td>
                  </tr>  
                  <tr style="">
                    <td>3</td>
                    <td>ATK</td>
                    <td>Donec id elit non mi porta gravida at eget metus</td>
                    <td style="text-align: right;">3</td>
                    <td>Buah</td>
                    <td><button class="btn btn-danger btn-sm" type="button"><i class="material-icons">delete_forever</i></button></td>
                    <td><button class="btn btn-warning btn-sm" type="button"><i class="material-icons">edit</i></button></td>
                  </tr>  
                  <tr style="">
                    <td>4</td>
                    <td>ATK</td>
                    <td>Donec id elit non mi porta gravida at eget metus</td>
                    <td style="text-align: right;">3</td>
                    <td>Buah</td>
                    <td><button class="btn btn-danger btn-sm" type="button"><i class="material-icons">delete_forever</i></button></td>
                    <td><button class="btn btn-warning btn-sm" type="button"><i class="material-icons">edit</i></button></td>
                  </tr>
                  <tr style="">
                    <td></td>
                    <td><input class="form-control" type="text" name="kategori" required></td>
                    <td><input class="form-control" type="text" name="nbarangjasa" required></td>
                    <td><input class="form-control" type="number" name="banyak" required></td>
                    <td><input class="form-control" type="text" name="satuan" required></td>
                    <td colspan="2"><button class="btn btn-info" type="button">Tambahkan</button></td>
                  </tr>    
                </tbody>
              </table>
            </div>
            <hr>
            <div class="form-group">
              <label for="keterangan">Keterangan</label>
              <textarea class="form-control" rows="5" id="keterangan" required></textarea>
            </div>
          </form>          
        </div>
        <div class="card-footer">
          <table border=0>
            <tr>
              <td style="padding-right: 20px">
                Masukan Kembali Password Akun Anda
              </td>
              <td style="padding-right: 20px">
                <input class="form-control" type="password" name="password" required>
              </td>
              <td>            
                <a href="#" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Submit</a>
              </td>
            </tr>
          </table>
        </div>
      </div>
      <br>
      <br>
      <br>
      <br>
    </div> <!-- /container -->

    <!-- Modal -->
    <div class="modal fade" style="padding-top: 200px" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Form Belum Disi Dengan Benar </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        </div>
      </div>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    
    <script src="js/jquery-1.12.4.min.js" type="text/javascript"></script> 
    <script src="js/popper.min.js" type="text/javascript"></script> 
    <script src="js/bootstrap.min.js" type="text/javascript"></script>

    <script type="text/javascript">
      //modal
      $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').focus()
      })

      //pop up mini
      $(function () {
        $('[data-toggle="popover"]').popover()
      })
    </script>


  </body>
</html>
