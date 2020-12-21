<?php
    session_start();
?>

<!DOCTYPE html>
<?php


					if (isset($_POST['submit'])){

						$conDB = mysqli_connect('localhost', 'root', '', 'DataMusicDB');
						if(mysqli_connect_error()){
							die("Error connecting to database".mysqli_connect_error());
						}
                        $email = $_POST['email'];
                        $pass = $_POST['password'];
                        
                        $emailArray = [];
                        $passArray = [];
						
						$dbquery = "SELECT * FROM admin WHERE email= '$email' and password ='$pass'";
                        $result = mysqli_query($conDB ,$dbquery);
                        while ($row = mysqli_fetch_array($result)){
                            $emailArray[] = $row['email'];
                            $passArray[]= $row['password']; 
                        }
							
                            if (empty($emailArray) || empty($passArray)){
                                echo '<h4 style="margin:40px 34%; background-color: #faccd5; border-left:5px solid #F91842; padding:1% 4%; width:30%; color:#000;">Wrong email or password</h4>';

                            }
                            elseif (empty($emailArray) && empty($passArray)){
                                echo '<h4 style="margin:40px 34%; background-color: #faccd5; border-left:5px solid #F91842; padding:1% 4%; width:30%; color:#000;">Wrong email or password</h4>';

                            }
                            elseif($emailArray[0] === $email && $passArray[0] === $pass) {
                                session_start();
                                $_SESSION['loggedin'] = True;
                                header('location:upload.php');
                                
                            }
                            
                        }
                        
					?>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <title>Admin</title>
    <meta name="description" content="">
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="shortcut icon" href="img/favicon.png"> -->

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet'>

    <!-- Syntax Highlighter -->
    <link rel="stylesheet" type="text/css" href="syntax-highlighter/styles/shCore.css" media="all">
    <link rel="stylesheet" type="text/css" href="syntax-highlighter/styles/shThemeDefault.css" media="all">

    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!--bootstrap css-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Normalize/Reset CSS-->
    <link rel="stylesheet" href="css/normalize.min.css">
    <!-- Main CSS-->
    <link rel="stylesheet" href="css/main.css">

    <style>
    .form-body {
        width: 40%;
        margin-left: 15%;

    }

    @media screen and (max-width: 1000px) {
        .form-body {
            width: 90%;
            margin-left: -5%;
            margin-bottom: 100px;
        }

        .title {
            font-size: 20px;
        }
    }
    </style>

</head>

<body style="width:80%; margin-left:8%">


    <div id="main-wrapper">
        <div class="main-content">
            <section id="installation">

                <form action="index.php" method="post" enctype="multipart/form-data">
                    <div class="form-body">
                        <!--BEGIN OF MUSIC UPLOAD SECTION-->
                        <h2 class=" title" style="margin-left: 25%;">Admin login</h2>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" id="" placeholder="example@mail.com"
                                required>
                        </div>


                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" placeholder="password" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control" style="background-color: #F91842; color:#ffffff" type="submit"
                                value="submit" name="submit">
                        </div>
                    </div>


                </form>


            </section>


            <!-- Essential JavaScript Libraries
			==============================================-->
            <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
            <script type="text/javascript" src="js/jquery.nav.js"></script>
            <script type="text/javascript" src="syntax-highlighter/scripts/shCore.js"></script>
            <script type="text/javascript" src="syntax-highlighter/scripts/shBrushXml.js"></script>
            <script type="text/javascript" src="syntax-highlighter/scripts/shBrushCss.js"></script>
            <script type="text/javascript" src="syntax-highlighter/scripts/shBrushJScript.js"></script>
            <script type="text/javascript" src="syntax-highlighter/scripts/shBrushPhp.js"></script>
            <script type="text/javascript">
            SyntaxHighlighter.all()
            </script>
            <script type="text/javascript" src="js/custom.js"></script>

</body>

</html>