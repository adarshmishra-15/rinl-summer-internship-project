<!DOCTYPE html>
<html>

<head>
    <?php include "header_include.php"; ?>
    <?php session_start();
if (isset($_SESSION["uid"]) == '')
    print('<script>location.href="login.php"</script>');
?>
</head>

<body>
    <?php
$conn = mysqli_connect('localhost', 'root', '', 'db_admin');

// Check connection
if ($conn === false) {
    die('ERROR: Could not connect. ' . mysqli_connect_error());
}

$target_dir = "assets/images/";
$target_dir = $target_dir . basename($_FILES["uploadfile"]["name"]);

if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], $target_dir)) {
// echo "File uploaded successfully!";
}
else {
    echo "Sorry, file not uploaded, please try again!";
}

// Taking all 6 values from the form data(input)    
$m_name = $_REQUEST['m_name'];
$m_uid = $_REQUEST['m_uid'];
$m_long = $_REQUEST['m_long'];
$m_lat = $_REQUEST['m_lat'];
$m_desc = $_REQUEST['m_desc'];
$m_image = $_FILES["uploadfile"]["name"];
// Performing insert query execution


// here our table name is add_machine
$sql = "INSERT INTO add_machine VALUES ('$m_name', '$m_uid',
    '$m_long','$m_lat','$m_desc', '$m_image')";
?>
    <div class="container-scroller">
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <br><br><br>
                    <div class="col-md-4"></div>
                    <div class="col-md-4"">
          <?php if (mysqli_query($conn, $sql)): ?>
            <center>
              <h2>Machine Registered Successfully!</h2>
              <br><br>
            </center>
            <p>
            <label for=" m_name">Machine Name:</label>
                        <input class="form-control" type="text" maxlength="25" name="m_name" id="m_name" readonly
                            placeholder="<?php echo " $m_name"; ?>">
                        </p>
                        <p>
                            <label for="m_uid">Machine Unique ID:</label>
                            <input class="form-control" type="number" maxlength="5" name="m_uid" id="m_uid" readonly
                                placeholder="<?php echo " $m_uid"; ?>">
                        </p>
                        <p>
                            <label for="m_long">Longitude:</label>
                            <input class="form-control" type="number" maxlength="15" step="any" name="m_long"
                                id="m_long" readonly placeholder="<?php echo " $m_long"; ?>">
                        </p>
                        <p>
                            <label for="m_lat">Latitude:</label>
                            <input class="form-control" type="number" maxlength="15" step="any" name="m_lat" id="m_lat"
                                readonly placeholder="<?php echo " $m_lat"; ?>">
                        </p>
                        <p>
                            <label for="m_desc">Machine Description:</label>
                            <textarea class="form-control" type="text" maxlength="100" name="m_desc" id="m_desc"
                                rows="2" readonly placeholder="<?php echo " $m_desc"; ?>"></textarea>
                        </p>
                        <p>
                            <label for="m_image">Machine Image:</label>
                            <img src="<?php echo " $target_dir"; ?>" alt="Machine Image" width="100%" height="100%">
                        </p>
                        <?php
endif; ?>
                        <br>
                        <center>
                            <button class="btn btn-primary" onclick="goBack()" name="upload">Back</button>
                            <button style="background-color: transparent; border: none;">
                                <a class="btn btn-primary" href="add_machine.php" readonly>Add Another Machine</a>
                            </button>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script>
    function goBack() {
        location.href = "dashboard.php";
    }
</script>

</html>