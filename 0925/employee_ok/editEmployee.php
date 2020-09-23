<?php

require_once("dbConnect.php");
if (isset($_POST["cancelButton"])) {
   header("Location: index.php");
   exit();
}
if (isset($_POST["okButton"])) {
    $sql = <<<sqlCommand
      update employee set 
        firstName = '{$_POST["firstName"]}',
        lastName = '{$_POST["lastName"]}',
        eMail = '{$_POST["eMail"]}',
        cityId = '{$_POST["cityId"]}'
      where employeeId = {$_POST["employeeId"]}
   sqlCommand;
   // echo $sql;
   mysqli_query($link, $sql);
   header("Location: index.php");
   exit();
}

$id = $_GET["empid"];
$sql = "select * from employee where employeeId = $id";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result);

$sqlCity = "select * from city";
$resultCity = mysqli_query($link, $sqlCity);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>
<body>
    
    <div class="container">
        <form class="form-horizontal" method="post" action="">
            <fieldset>
            
            <!-- Form Name -->
            <legend>Employee Data</legend>

            <input type="hidden" name="employeeId" value="<?= $row["employeeId"] ?>">
            
            
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="firstName">First name:</label>  
              <div class="col-md-4">
              <input id="firstName" name="firstName" value="<?= $row["firstName"] ?>" type="text" placeholder="" class="form-control input-md">
                
              </div>
            </div>
            
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="lastName">Last name:</label>  
              <div class="col-md-4">
              <input id="lastName" name="lastName" value="<?= $row["lastName"] ?>" type="text" placeholder="" class="form-control input-md">
                
              </div>
            </div>
            
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="eMail">EMail:</label>  
              <div class="col-md-4">
              <input id="eMail" name="eMail" value="<?= $row["eMail"] ?>" type="text" placeholder="" class="form-control input-md">
                
              </div>
            </div>

            <!-- <div class="form-group">
              <label class="col-md-4 control-label" for="cityId">City:</label>
              <div class="col-md-4">
                <select id="cityId" name="cityId" class="form-control">
                  <option value="2" <?= ($row["cityId"] == 2) ? "selected" : "" ?> >TaiPei</option>
                  <option value="4" <?= ($row["cityId"] == 4) ? "selected" : "" ?> >TaiChung</option>
                  <option value="6" <?= ($row["cityId"] == 6) ? "selected" : "" ?> >TaiNan</option>
                </select>
              </div>
            </div> -->

          
            <div class="form-group">
              <label class="col-md-4 control-label" for="cityId">City:</label>
              <div class="col-md-4">
                <select id="cityId" name="cityId" class="form-control">
                  <?php while ($rowCity = mysqli_fetch_assoc($resultCity)) : ?>
                  <option value="<?= $rowCity["cityId"] ?>" <?= ($row["cityId"] == $rowCity["cityId"]) ? "selected" : "" ?> ><?= $rowCity["cityName"] ?></option>
                  <?php endwhile;?>
                </select>

              </div>
            </div>

            <!-- Button (Double) -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="okButton"></label>
              <div class="col-md-8">
                <button id="okButton" name="okButton" class="btn btn-success">OK</button>
                <button id="cancelButton" name="cancelButton" class="btn btn-danger">Cancel</button>
              </div>
            </div>
            
            </fieldset>
            </form>
    
    </div>



</body>
</html>