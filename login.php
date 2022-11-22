<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <title>MSWDO LingkodRekord - Login</title>
    <style>
        *{
            padding:0;
            margin: 0;
            box-sizing: border-box;
        }
        body{
            background: #f3f0f0;
        }
        .row{
            background: white;
            border-radius: 30px;
            box-shadow: 12px 12px 22px grey;
        }
        .btn1{
            border: none;
            outline: none;
            height: 50px;
            width: 100%;
            background-color: black;
            color: white;
            border-radius: 4px;
            font-weight: bold;
        }
        .btn1:hover{
            background-color:white ;
            border: 1px solid;
            color: black;
        }
        #l-image{
            background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)) ,url("asset/mswdo-office.jpg");
            height: 90vh;
            background-position: center;
            background-size: cover;
            position: relative;
        }


    </style>
  </head>
  <body>
    <section class="Form my-5 mx-5">
        <div class="container">
             <!-- L - Image  -->
            <div class="row bg-light" id ="l-image">
                <div class="  col-md-5 col-sm-12 ms-auto my-auto">
                    <img src="asset/clg-seal.png"  class="ms-4 img-fluid " alt="seal">
                    
                </div>
                <!-- R - Form -->
                <div class=" col-md-7 col-lg-6 col-xxl-5 px-5 pt-4 bg-white ">
                    <h2 class="font-weight-bold pt-5">MSWDO - LingkodRekord</h2>
                    <h4>Sign into your account</h4>

                    <form action="login_function.php" method = "POST">
                        <?php
                            if(isset($_GET['error'])) {
                                ?>
                                <p class="error"> <?php echo $_GET['error'];?></p>
                                <?php
                            }
                        ?>

                        <div class="form-row">
                            <div class="col-lg-10 col-xxl-12 col-sm-11">
                                <input type="text" placeholder ="Username" name="Username" class="form-control my-3 p-3">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-10 col-xxl-12 col-sm-11">
                                <input type="password" placeholder ="Password" name="Password" class="form-control my-1 p-3">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-6 col-xxl-7 md-7 col-sm-7 ">
                                <button type="submit" class="btn1 mt-3 mb-3" name="login_button" id="login-btn">Login</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>


    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>