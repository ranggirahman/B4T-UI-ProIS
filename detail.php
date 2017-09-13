
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
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container">
        <a class="navbar-brand" href="index.php"><img src="img/logo.png" class="img-fluid" style="max-width: 20%; and height: auto" alt="Responsive image"> Balai Besar Bahan dan Barang Teknik</a>
        <a>
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="material-icons" style="font-size: 13px">perm_identity</i> User</button>
        </a>       
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="container" style="padding-top: 50px">
      <div class="row">

        <main class="ml-sm-auto col-md-12" role="main">
          <section class="row text-center placeholders">
            <div class="col-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIABAAJ12AAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
              <h4>Total Pesanan</h4>
            </div>
            <div class="col-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIABAADcgwAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
              <h4>Menunggu Disetujui</h4>
            </div>
            <div class="col-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIABAAJ12AAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
              <h4>Proses Pengadaan</h4>
            </div>
            <div class="col-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIABAADcgwAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
              <h4>Tidak Disetujui</h4>
            </div>
          </section>

          <div class="table-responsive" style="padding-top: 20px">
            <table class="table">
              <thead>
                <tr>
                  <th>
                    <button class="btn btn-success" type="submit"><i class="material-icons" style="font-size: 15px">add</i> Buat Pesanan</button>
                  </th>                  
                  <form class="form-inline">
                    <th>
                      <input class="form-control" type="text" placeholder="Cari Berkas" size="100%" aria-label="Search">
                    </th>
                    <th>
                      <button class="btn btn-primary" type="submit"><i class="material-icons" style="font-size: 13px">search</i></button>
                    </th>
                  </form>
                </tr>              
              </thead>         
            </table> 
          </div>

          <div class="table-responsive">
            <table class="table table-striped">
              <thead class="thead-inverse">
                <tr>
                  <th>Pemesan</th>
                  <th>Deskripsi Pesanan</th>
                  <th>Tanggal</th>
                  <th>Monitor</th>
                </tr>
              </thead>
              <tbody>
                <tr style="font-weight:bold">
                  <td>Ranggi Rahman</td>
                  <td>Donec id elit non mi porta gravida at eget metus. Fusce dapibus</td>
                  <td>7 Sep 2017</td>
                  <td>Usulan Dalam Antrian</td>
                </tr>
                <tr style="font-weight:bold">
                  <td>Ahmad Zainal A</td>
                  <td>Donec id elit non mi porta gravida at eget metus. Fusce dapibus</td>
                  <td>5 Sep 2017</td>
                  <td>Usulan Dalam Antrian</td>
                </tr>     
                <tr style="">
                  <td>Wiwi Juwita</td>
                  <td>Donec id elit non mi porta gravida at eget metus. Fusce dapibus</td>
                  <td>3 Sep 2017</td>
                  <td>Usulan Diacc TU</td>
                </tr>  
                <tr style="">
                  <td>Sita Kartina</td>
                  <td>Donec id elit non mi porta gravida at eget metus. Fusce dapibus</td>
                  <td>2 Sep 2017</td>
                  <td>Usulan Diacc Kabid</td>
                </tr>  
                <tr style="">
                  <td>Risna</td>
                  <td>Donec id elit non mi porta gravida at eget metus. Fusce dapibus</td>
                  <td>1 Sep 2017</td>
                  <td>Usulan Diacc PPK</td>
                </tr>  
                <tr style="">
                  <td>Maerin Novita</td>
                  <td>Donec id elit non mi porta gravida at eget metus. Fusce dapibus</td>
                  <td>1 Sep 2017</td>
                  <td>Dalam Proses Pengadaan</td>
                </tr>  
              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.min.js"></script>
  </body>
</html>
