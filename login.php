<!DOCTYPE html>
<html lang="en">
  <head>
  <?php include "header_include.php";?>
</head>

  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <?php include "sidemenu.php";?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
             <div class="col-md-4"></div>
             <div class="col-md-4">
<table class="table" style="width:100%">
<tr><td>Username</td><td><input type="text" class="form-control" name="uid" id="uid"></td></tr>
<tr><td>Password</td><td><input type="password" class="form-control" name="pwd" id="pwd"></td></tr>
<tr><td colspan=2><center><button class="btn btn-success" id="login">Login</button></center></td></tr>


</table>

             </div>
             <div class="col-md-4"></div>
              </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
        <?php include "footer.php";?>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <?php include "footer_include.php";?>
     </body>
</html>