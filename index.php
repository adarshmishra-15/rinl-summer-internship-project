<!DOCTYPE html>
<html lang="en">

<head>
  <?php include "header_include.php"; ?>
  <?php session_start();
if (isset($_SESSION["uid"]) == '')
  print('<script>location.href="login.php"</script>');
?>
</head>

<body>
  <div class="container-scroller">
    <?php?>
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <!-- <h4 class="card-title">Inventory</h4> -->
                    <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                      <div class="text-md-center text-xl-left">
                        <h3 class="mb-1">Add Machine</h3>
                        <p class="text-muted mb-1">Add a new machine to the database</p>
                      </div>
                      <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                        <a href="add_machine.php" style="text-decoration: none;"><h6 class="font-weight-bold mb-0" style="font-size: 50px;">+</h6></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex flex-row justify-content-between">
                      <h4 class="card-title mb-1">Machines</h4>
                      <p class="text-muted mb-1">Details</p>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <div class="preview-list">
                          <div class="preview-item">
                            <!-- <div class="preview-thumbnail">
                              <div class="preview-icon bg-warning">
                                <i class="mdi mdi-chart-pie"></i>
                              </div>
                            </div> -->
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                                <h6 class="preview-subject">UI Design</h6>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                <p class="text-muted">50 minutes ago</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
  </div>
  </div>
  </div>
  <?php include "footer_include.php"; ?>
</body>

</html>