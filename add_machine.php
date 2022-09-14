<!DOCTYPE html>
<html lang="en">
  <head>
  <?php include "header_include.php";?>
</head>
  <body onload="getLocation()">
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
             <div class="col-md-4"></div>
             <div class="col-md-4">

<div class="row">
<script>
var x = document.getElementById("demo");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
   document.getElementById("latitude").value=position.coords.latitude;
  document.getElementById("longitude").value=position.coords.longitude;
}
</script>
<table>
  <tr>
    <th>Machines</th><br>
    <th>UniqueID</th><br>
    <th>Latitute</th><br>
    <th>Longitute</th><br>
  </tr>
  <tr>
    <td>Machine no.1</td>
    <td>00000000</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  
</table>

<div class="container">
  <div class="row">
    <div class="col-md-12">
       <input  type="hidden" name="latitude" id="latitude">
       <input  type="hidden" name="longitude" id="longitude">
    Description <textarea>button then put that button some query then collect latitude and longitude with some machine description and after that save that in the php database table</textarea>
  </div>
  
</div>
             </div>
             <div class="col-md-4"></div>
              </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
        
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