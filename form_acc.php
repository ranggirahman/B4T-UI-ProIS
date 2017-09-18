
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
                <td colspan="2">Kepala B4T,u.p. Kepala Bagian Tata Usaha</td>
                <td width="30%"></td>
              </tr>
              <tr>
                <td>Dari</td>
                <td colspan="2">Ranggi Rahman (Seksi Informasi)</td>
                <td width="30%"></td>
              </tr>
              <tr>
                <td>Agar</td>
                <td colspan="2">Diadakan</td>
                <td width="30%"></td>
              </tr>
              <tr>
                <td>Diperlukan Tanggal</td>
                <td colspan="2">18 Desember 2017</td>
                <td width="30%"></td>
              </tr>                   
            </table>
            <hr>
            <div class="table-responsive">
              <table border="0" class="table">
                <thead class="thead-default">
                  <tr>
                    <th>No.</th>
                    <th width="17%">Kategori</th>
                    <th>Nama dan Spesifikasi Barang / Jasa</th>
                    <th width="20%">Banyaknya</th>
                    <th><input type="checkbox" onClick="toggle(this)"> All</th>
                  </tr>
                </thead>
                <tbody>   
                  <tr style="">
                    <td>1</td>
                    <td>ATK</td>
                    <td>Donec id elit non mi porta gravida at eget metus</td>
                    <td>3 Buah</td>
                    <td><input type="checkbox" name="acckabid" value="no1"></td>
                  </tr>  
                  <tr style="">
                    <td>2</td>
                    <td>ATK</td>
                    <td>Donec id elit non mi porta gravida at eget metus</td>
                    <td>2 Set</td>
                    <td><input type="checkbox" name="acckabid" value="no3"></td>
                  </tr>  
                  <tr style="">
                    <td>3</td>
                    <td>ATK</td>
                    <td>Donec id elit non mi porta gravida at eget metus</td>
                    <td>1 Buah</td>
                    <td><input type="checkbox" name="acckabid" value="no3"></td>
                  </tr>  
                  <tr style="">
                    <td>4</td>
                    <td>ATK</td>
                    <td>Donec id elit non mi porta gravida at eget metus</td>
                    <td>1 Pack</td>
                    <td><input type="checkbox" name="acckabid" value="no4"></td>
                  </tr>   
                </tbody>
              </table>
            </div>
            <hr>
            <label for="keterangan">Keterangan</label>
            <div class="card">
              <div class="card-body">Implementasi Industri 4.0 pada Industri Komponen Otomotif di Indonesia</div>
            </div>
            <hr>
            <div class="card">
              <h5 class="card-header">Rekomendasi / Catatan Ka.Bag Tata Usaha</h5>
              <div class="card-body">
                <textarea class="form-control" rows="5" id="keterangan" required></textarea>
              </div>
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
      // modal
      $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').focus()
      })

      // Acc All
      function toggle(source) {
        checkboxes = document.getElementsByName('acckabid');
        for(var i=0, n=checkboxes.length;i<n;i++) {
          checkboxes[i].checked = source.checked;
        }
      }
    </script>

  </body>
</html>
