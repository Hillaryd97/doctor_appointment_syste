<?php 
    include 'head.php';
    include 'conn.php';
    session_start();
    $id = $_GET['up'];	
    $_SESSION['appId']= $id;
    $sql1 = " select * from appointment WHERE appointmentId = $id";
        $result1 = mysqli_query($conn,$sql1);
        $row=mysqli_fetch_assoc($result1);
        $DoctorName = $row['DoctorName'];
        $DoctorNumber = $row['DoctorNumber'];
        $DoctorGender = $row['DoctorGender'];
        $speciality = $row['DoctorSpeciality'];
        $DoctorBio = $row['DoctorBio'];
        $appointDate = $row['appointDate'];
        $appointTime = $row['appointTime'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>doctor appointment</title>
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

      .login-box {
        width: 32.3vw;
        height: 37.5vw;
        background: #f3f3f3;
        padding: 1vw 2vw;
        margin-top: 12vh;
        text-align: left;
        color: rgb(0, 0, 0); 
        border: grey 2px solid;
        border-top: #020863 4px solid;
        border-left: #020863 1px solid;
        border-right: #020863 1px solid;
        border-bottom: #020863 1px solid;
        border-radius: 5px;
        font-size: 20px;
    }
      .login-box li {
        list-style: none;
        margin: 0;
      }

    </style>
</head>
<body >
<div class="grid">
    <div class="login-box" >
        <form action="updateconfirm.php" method="POST">
        <h1 style="margin-bottom: 20px; font-size: 28px;text-align: center;">Update Appointment</h1>
            <div style="border: solid 0.5px black; padding-left:1vw; padding-top:0.5vw;padding-bottom:0.5vw; margin-bottom: 5px">
            <li>Doctor Name:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $DoctorName?></li><br>
            <li>Doctor Gender: &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $DoctorGender?></li><br>
            <li>Doctor Speciality:   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $speciality?></li><br>
            <li>Doctor Number:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $DoctorNumber?></li><br>
            <li>Doctor's Bio:<br> <?php echo $DoctorBio?></li>
            </div>
        <label for="date">Appointment Date</label>
        <input type="date" class="form-control"  name="date" id="date" value="<?php echo $appointDate?>">
        <label for="time">Appointment Time</label><br>
        <input type="text" <?php echo $appointTime?>> <br>
        <button type="submit" class="btn btn-primary">Update Appointment</button>
        </form>
    </div>
</div>
</body>
</html>
