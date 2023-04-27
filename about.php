<!-- home page with company info and highlighted reviews/jobs -->
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
        .auto-style1 {
			margin-bottom: 0px;
		}

        body {
                    background-color: #FAF9F6;
            }
        </style>
    </head>

    <body>

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

        $sql = "SELECT  * FROM review ORDER BY Rating DESC";


        $reviewresults = $conn->query($sql);

    ?>


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

            <nav class="py-2 border-bottom" style="background-color:rgb(252, 223, 185);">
                <div class = "container d-flex flex-wrap justify-content-center" style="font-family: Times New Roman; font-size: larger;">
                    <ul class="nav">
                        <li><a href="about.php"  class="nav-link px-2 link-dark">ABOUT</a></li>
                        <li><a href="account.php" class="nav-link px-2 link-dark">ACCOUNT</a></li>
                    </ul>
                </div>
            </nav>

             <!-- Header -->

             
             <title>About Page</title>
             <div class="et_pb_text_inner" id="container" ><h1 style="text-align: center; padding-top: 50px;">Calculator Plus</h1></div>
             <div class ="container-fluid" style="background-color:rgba(167, 167, 167, 0.8); border: 2px solid rgba(0, 0, 0, 0.8); font-family: Cambria;">
                <center style="padding-top: 20px;">
                Calculator.html is an authorized platform for those who need to make basic calculations online. 
                We provided you with a 100% free online calculator, besides creating an account. People across the globe can be able
                to access to do quick math calculations 
                with this calculator online.
                Our website's sole focus is to provide fast, comprehensive, convenient, free online calculators 
                in a plethora of areas. You should be able to get precise answers for your math problems.
                Currently, we have around 1 calculator to help you "do the math" quickly, as we are currently developing more
                Remember that your satisfaction is our first priority.
                Our goal is to become the one-stop, go-to site for people who need to make quick calculations. 
                Additionally, we believe the internet should be a source of free information. 
                Therefore, all of our tools and services are completely free, with a registration required.
                if you feel any inconvenience regarding these online calculators, feel free to Contact Us.
            
               

                    <style type="text/css">
        #btn_s{
            width: 200px;
        }
        #formbox {
            width:400px;
            margin:auto 0;
            text-align: center;
        }
    </style>
</head>
<body>
       
                
                <br>
                <br>
                <center style="padding-bottom: 5px;"><b>Contact Us</b></center>
                <center style = "font-size: 70%;"><b>Email :</b> 
                thisisascam@gmail.com &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>
                Phone Number:</b> 609-339-9909 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</center>
            </div>

            

<!-- custom js file link  -->
<script src="js.js"></script>

    </body>
  
</html>
