<?php
session_start();
if (!isset($_SESSION['loggedin'])){
    header("location:index.php");
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <title>Musico</title>
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

</head>

<body style="width:90%;">


    <div id="main-wrapper">
        <div class="main-content">
            <section id="installation">
                <div class="content-header">
                    <h1> <i class="fa fa-upload "></i> Upload music</h1>
                </div>


                <?php
					if (isset($_POST['submit'])){

						$conDB = mysqli_connect('localhost', 'root', '', 'DataMusicDB');
						if(mysqli_connect_error()){
							die("Error connecting to database".mysqli_connect_error());
						}
						$album ='';
						$nameOfMusic = $_POST['name'];
						$music = $_FILES['music']['name'];
						$picture = $_FILES['pic']['name'];
						$musicType = $_FILES['music']['type'];
						$pictureType = $_FILES['pic']['type'];
						$destinationForMusic = '../music/'.$music;
                        $destinationForPic = '../picMusic/'.$picture;
                        
						
						if(strpos($musicType,'audio')!==0 && strpos($pictureType, 'image')!==0){
							echo '<h4 style="margin:20px 26%; background-color: #faccd5; border-left:5px solid #F91842; padding:1% 4%; width:35%; color:#000;">INVALIED IMAGE AND MUSIC FILE</h4>';
						}
						elseif(strpos($musicType,'audio')!==0){
							echo '<h4 style="margin:20px 26%; background-color: #faccd5; border-left:5px solid #F91842; padding:1% 4%; width:35%; color:#000;">Select a music file type</h4>';
						}
						elseif(strpos($pictureType, 'image')!==0){
							echo '<h4 style="margin:20px 26%; background-color: #faccd5; border-left:5px solid #F91842; padding:1% 4%; width:35%; color:#000;">Select a image file type</h4>';

						}
						else{
							$InsertingData = "INSERT INTO DataMusicTB(title, picture, music ) VALUES('$nameOfMusic', '$picture', '$music')";
								if (mysqli_query($conDB, $InsertingData)){
									
								move_uploaded_file($_FILES['music']['tmp_name'], $destinationForMusic);
								move_uploaded_file($_FILES['pic']['tmp_name'], $destinationForPic);
								echo"Done";
								}
								else{
								die("l".mysqli_connect_error());
								}
							}
                        }
                        
					?>
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    <div class="form-body" style="width: 80%;">



                        <!--BEGIN OF MUSIC UPLOAD SECTION-->
                        <h2 class="title">Music upload section</h2>
                        <div class="form-group">
                            <label>Title of music</label>
                            <input type="text" class="form-control" name="name" id="" placeholder="title" required>
                        </div>

                        <div class="form-group">
                            <label>Picture Designed for the Music</label>
                            <input type="file" class="form-control" name="pic" id="" required>
                        </div>
                        <div class="form-group">
                            <label>Music</label>
                            <input type="file" class="form-control" name="music" id="" required>
                        </div>
                        <div class="form-group">
                            <label>Time</label>
                            <input type="date" class="form-control" name="date" required>
                        </div>

                    </div>
                    <input type="submit" value="submit" name="submit">
                    <a href="view.php" target="_blank" rel="noopener noreferrer">view all uploaded music</a>
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