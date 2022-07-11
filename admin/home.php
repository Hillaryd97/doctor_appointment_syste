<?php
    session_start();
    $name= $_SESSION['adminName'];
    if($name=="admin"){
    }
    else{
      header('location:login.html');
    }
    include 'header.php';
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body {
            background: #f3f3f3;
        }

        .grid {
            display: grid;
            place-content: center;
            height: 600px;
            margin: 0 auto;
        }

        .login-box {
            width: 45vw;
            /* height: 20vw; */
            background: #3d3d3e;
            padding: 1vw 2vw;
            margin: 0 auto;
            margin-top: 2vw;
            text-align: left;
            color: rgb(255, 255, 255);
            border: grey 2px solid;
            border-top: #020863 4px solid;
            border-left: #020863 1px solid;
            border-right: #020863 1px solid;
            border-bottom: #020863 1px solid;
            border-radius: 5px;
            font-size: 20px;
        }

        .login-box input {
            height: 1vw;
            padding: 1vw;
            margin-bottom: 10px;
            margin-top: 10px;
        }
        
        .button-login {
            border: none;
            width: 15vw;
            height: 2vw;
            border-radius: 7px;
            background-color: #020863;
            color: white;
            cursor: pointer;
            margin-left: 6vw;
        }

        input[type=radio] {
            height: 25px;
            width: 25px;
            margin-right: 1.5vw;
        }
        option {
            font-size: 20px;
        }
    
        .button-login:hover {
            background-color: #020863e6;
        }
    </style>
</head>
<body>
    <div class="login-box">
        <form action="doctorReg.php" method="POST">
        <h1 style="margin-bottom: 20px; text-align: center;">Register a Doctor</h1>
        <label for="name">Doctor's Name</label>
        <input type="text" class="form-control" id="name" name="name">
        <label for="number">Doctor's Number</label>
        <input type="text" class="form-control" id="number" name="number">

        <label >Doctor's Gender</label> <br>
        <input type="radio"name="gender" value="Male"><label style="">Male</label><br>
        <input type="radio" name="gender"value="Female"><label>Female</label><br>

        <label for="speciality">Select Speciality</label>
        <select class="form-control" id="speciality" name="speciality">
        <option></option>
        <option>Headache</option>
        <option>Stomachache</option>
        <option>Physical Therapy</option>
        <option>Fracutred/Broken Bones</option>
        <option>Allergy</option>
        </select>

        <label for="Bio">Doctor's Bio</label>
        <textarea class="form-control" id="bio" rows="3" name="bio"></textarea><br>
        <button type="submit" class="btn btn-primary">Submit</button>
        <br><br>
        </form>
    </div><br><br>
    </div>
</body>
</html>
<?php include 'footer.php';?>