<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>Admin Home</title>
        <link rel="stylesheet" href="style.css">
        <style>
            header{
                background: #f6f9f9;
                padding: 30px 0;
            }
            .logo{
                padding: 3px 20px;
                margin: 0 auto;
                font-family: 'Oswald', sans-serif;
                font-weight: 700;
                font-size: 40px;
                color: #330033;
                text-transform: capitalize;
                float: left;
            }

            .menu ul li a{
                padding: 6px 20px;
                display: block;
                font-family: 'Oswald', sans-serif;
                font-weight: 700;
                font-size: 23px;
                color: #454444;
                text-transform: capitalize;
            }
        </style>
    </head>
    <body>
        <header style="background: #f6f9f9; padding: 40px 0;">
            <a href="home.php" class="logo">DAS</a>
                <nav class="menu" style="padding: 6px 20px;
                display: block;
                font-family: 'Oswald', sans-serif; font-weight: 700; color: #454444; text-transform: capitalize">
                    <ul class="nav justify-content-end" >
                        <li><a href="viewdoctor.php">Doctor List</a></li>
                        <li><a href="home.php">Register Doctor</a></li>
                        <li><a href="signout.php">Sign Out</a></li>
                    </ul>
                </nav>
            </header>
            
    </body>
</html>