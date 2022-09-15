<!DOCTYPE html>
<html lang="en">

<head>
  <?php include "header_include.php"; ?>
</head>

<body>
  <div class="container-scroller">
    <div class="main-panel">
      <div class="content-wrapper">
        <br>
        <center>
          <h2>Welcome, please login to continue!</h2>
        </center>
        <br><br>
        <div class="row">
          <div class="col-md-4">
          </div>
          <div class="col-md-4">
            <table class="table" style="width:100%">
              <tr>
                <td>Username</td>
                <td><input type="text" class="form-control" name="uid" id="uid"></td>
              </tr>
              <tr>
                <td>Password</td>
                <td><input type="password" class="form-control" name="pwd" id="pwd"></td>
              </tr>
              <tr>
                <td colspan=2>
                  <center><button class="btn btn-success" id="login">Login</button></center>
                </td>
              </tr>
            </table>
          </div>
          <div class="col-md-4"></div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
  </div>
  </div>
  <?php include "footer_include.php"; ?>
</body>

<script>
  $("#login").click(function () {
    // alert( "Handler for .click() called." );
    $.post("login_validate.php", { uid: $("#uid").val(), pwd: $("#pwd").val() })
      .done(function (data) {
        if ($.trim(data) == "1") {
          // alert("Successfully logged In");
          location.href = "dashboard.php";
        }
        else { alert("Login failed!"); }
      });
  });
</script>

</html>