<!-- page to check account info and look at associated jobs -->

<!doctype html>
<html>
    
    <head>
        
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="headers.css">
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


        <style>
           table,
            th,
            td {
                padding: 15px;
                border: 2;
                border-color: rgba(212, 188, 155, 0.781);
                border-style: dashed;
                border-collapse: collapse;
                background-color: white;
                }
   
                body {
                    background-color: #FAF9F6;
            }

        </style>
    </head>

    <body>


            <!-- Header -->
            <header class=" border-bottom">
                <div class="container-fluid">
                  <a href="about.php">
                  <img src = "logo.png" class="auto-style1" style="height: 5%; width: 5%;" ></img>
                    </a>
                    <ul class="nav" style="float: right; padding-top: 85px;">
                        <li class="nav-item"><a href="login.html" class="nav-link link-dark px-2">Login</a></li>
                        <li class="nav-item"><a href="signup.html" class="nav-link link-dark px-2">Sign up</a></li>
                    </ul>
                </div>
            </header>

            <nav class="py-2 border-bottom" style="background-color:rgb(252, 223, 185) ;">
                <div class = "container d-flex flex-wrap justify-content-center" style="font-family: Cambria; font-size: larger;">
                    <ul class="nav">
                        <li><a href="about.php"  class="nav-link px-2 link-dark">ABOUT</a></li>
                        <li><a href="account.php" class="nav-link px-2 link-dark">ACCOUNT</a></li>
                    </ul>
                </div>
            </nav>

             <?php

            session_start();

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "calculator";
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 

            $ret = $_SESSION['row'];

            if(empty($ret['account_id'])) {
                header('Location: login.html');
            }

            $id = $ret['account_id'];

            ?>
       
        <div>
                <div align = "center" style = "margin: 0 auto; width: 50%;  font-size: 160%;"> 
                    <br><br>   
                    <h2 style = "padding-bottom: 10px" text-align: center;>ACCOUNT INFO</h2>
                    <table>
                        <tr>
                            <td><b>First Name :</b>
                            <?php echo $ret['first_name']; ?></td>
                        </tr>
                        <tr>
                            <td><b>Last Name :</b>
                            <?php echo $ret['last_name']; ?></td>
                        </tr>
                        <tr>
                            <td><b>Email :</b>
                            <?php echo $ret['email']; ?></td>
                        </tr>
                        <tr>
                            <td><b>Phone Number :</b>
                            <?php echo $ret['phone_number']; ?></td>
                        </tr>
                    </table> 

<br>

    <div> <a href="modifyAccount.php"> <button type = "button" name = "modifyAccount">Modify Account</button><a> 
        <a href = 'logout.php'><button type ="button" name = "Logout">Logout</button></a>
        <a href = 'calculatorV2.html'><button type ="button" name = "Calculator">Calculator</button></a>
    </div>
</div>

            
        
    </body>

</html>

