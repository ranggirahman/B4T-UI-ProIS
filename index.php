
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
    <link href="css/jumbotron.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <style type="text/css">
      .fixed-bg {
          background-image: url("img/homebg.jpg");
          min-height: 500px;
          background-attachment: fixed;
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
      }
    </style>

  </head>
  <body>    
    
    <div class="fixed-bg"></div>  
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container">
        <a class="navbar-brand" href="index.php"><img src="img/logo.png" class="img-fluid" style="max-width: 20%; and height: auto" alt="Responsive image"> Balai Besar Bahan dan Barang Teknik</a>        
      </div>
    </nav>

    <!-- Main -->
    <div class="jumbotron">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h1 class="display-3">Sistem Informasi Pengadaan Barang dan Jasa</h1>
          </div>
          <div class="col-md-1">        
          </div>
          <div class="col-md-3" style="padding-top: 20px">            
            <form action="" method="POST">
              <table border=0>
                <th><h3>Login</h3></th>
                <tr height="50px">
                    <td><input class="form-control" type="user" name="user" placeholder="Username" maxlength="40" size="40" required></td>
                </tr>
                <tr height="50px">
                    <td><input class="form-control" type="password" name="password" placeholder="Password" maxlength="40" size="40" required></td>
                </tr>
              </table>
              <hr>
              <table border=0>
                <tr>
                  <td><input class="btn btn-success" type="submit" name="submit" data-toggle="modal" data-target="#exampleModal" value="Login"></td>
                  <td width="3%"></td>
                  <td><input class="btn btn-warning" type="button" name="submit" value="Lupa Password"></td>
                </tr>                            
              </table>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-12">
          <h5>Ini Adalah Website Sistem Informasi Untuk Memudahkan Tracking Berkas Pengadaan Barang dan Jasa Pada Balai Besar Bahan dan Barang Teknik (B4T).</h5>
        </div>
      </div>

      <hr>

      <footer>
        <p>&copy; 2017 Balai Besar Bahan dan Barang Teknik. All Rights Reserved</p>
      </footer>
    </div> <!-- /container -->

    <!-- Modal -->
    <div class="modal fade" style="padding-top: 200px" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Username atau Password Salah</h5>
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
      $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').focus()
      })

    </script>
  </body>
</html>
