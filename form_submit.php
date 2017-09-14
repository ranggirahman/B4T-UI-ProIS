
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

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="container" style="padding-top: 70px">
        <div class="card">
          <h4 class="card-header">Form Daftar Pemesanan Barang / Jasa</h4>
          <div class="card-body">
            <form action='response.php' method='POST'>
              <table border=0>
                <tr height="50px">
                  <td width="40%">Kepada</td>
                  <td><input class="form-control" type="text" name="kepada" required></td>
                </tr>
                <tr height="50px">
                  <td width="25%">Dari</td>
                  <td><input class="form-control" type="text" name="dari" required></td>
                </tr>
                <tr height="50px">
                  <td width="25%">Agar</td>
                  <td><input class="form-control" type="text" name="agar" required></td>
                </tr>
                  
              </table>
            </form>          
          </div>
          <div class="card-footer">
            <table border=0>
              <tr>
                <td style="padding-right: 20px">
                  Masukan Kembali Password
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
      $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').focus()
      })
    </script>


  </body>
</html>