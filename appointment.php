<?php
  include 'conn.php';
    session_start();
    $name = $_SESSION['userName'];
    $id = $_GET['appointId'];
    $_SESSION['docid'] = $id;
    include 'head.php';
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
      .form-group {
        /* margin: 0 auto; */
      }
      .form-group input {
        height: 2.5vw;
        width: 25vw;
        padding: 1vw;
        margin-bottom: 10px;
        /* margin-top: 10px; */
        border: 1px black solid
      }
      .container {
        /* margin-left: 300px; */
        /* margin-right: 200px */
      }
    </style>
</head>
<body>
    <div class="container">
    <div class="row pt-5">
    <?php
      $sql = "SELECT * FROM doctorrecords WHERE DoctorID= $id";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
          $id= $row['DoctorID'];
          ?>
        <div class="form-group">
          <form action="appointmentvalidation.php" method="POST">
            <div style="float: left;">
              <h1 style="margin-bottom: 20px; text-align: center;">Doctor Information</h1>
              <label for="docname">Name </label>
              <input type="text" class="form-control" id="docname" name="docname" value="<?php echo $row['DoctorName']?>" readonly>
              <label for="docnumber">Phone Number</label>
              <input type="text" class="form-control" id="docnumber" name="docnumber" value="<?php echo $row['DoctorNumber']?>" readonly>
              <label for="docgender">Gender</label>
              <input type="text" class="form-control" id="docgender" name="docgender" value="<?php echo $row['DoctorGender']?>" readonly>
              <label for="docspeciality">Speciality</label>
              <input type="text" class="form-control" id="docspeciality" name="docspeciality" value="<?php echo $row['DoctorSpeciality']?>" readonly>
              <label for="DoctorBio">Doctor Information</label>
              <input type="text" class="form-control" id="DoctorBio" name="DoctorBio" value="<?php echo $row['DoctorBio']?>" readonly>
            </div>
            <div style="float: right; margin-left: 100px">
              <h1 style="margin-bottom: 20px; text-align: center;">Patient Details</h1>
              <label for="docname">Email address</label>
              <input type="text" class="form-control" id="docname" name="email" placeholder="Enter your email address">
              <label for="date">Appointment Date</label>
              <input type="date" class="form-control"  name="date" id="date">
              <label for="time">Appointment Time</label><br>
              <!-- <p style="color: grey;">Please input only hour.</p> -->
              <input type="text" placeholder="Enter Appointment Time"> <br>
              <button type="submit" class="btn btn-primary">Book Appointment</button>
            </div>
          </form>
    </div>
    <?php
        }
      }
    ?>
    </div>
    </div>
</body>
</html>
<?php include 'footer.php';?>