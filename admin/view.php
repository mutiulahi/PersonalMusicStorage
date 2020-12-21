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
                    <h1> <i class="fa fa-data "></i> Uploaded music</h1>
                </div>

                <table>
                    <tr class="header">
                        <td>S/N</td>
                        <td>Music name</td>
                        <td>Date</td>
                    </tr>
                    <?php
					
						$conDB = mysqli_connect('localhost', 'root', '', 'DataMusicDB');
						if(mysqli_connect_error()){
							die("Error connecting to database".mysqli_connect_error());
						}
						
							$InsertingData = "SELECT * FROM DataMusicTB";
                            $result = mysqli_query($conDB, $InsertingData);
                            while($row = mysqli_fetch_array($result)){
                                $id = $row["id"];
                                $title = $row["title"];
                                $date = $row["date"];
                                echo'h';
                                echo'<tr>';
                                   echo'<td>'.$id.'</td>';
                                    echo'<td>'.$title.'</td>';
                                    echo'<td>'.$date.'</td>';
                                echo'</tr>';   
                            }
								
					
					
					?>
                </table>




                <!-- Essential JavaScript Libraries
			==============================================-->
                <script type=" text/javascript" src="js/jquery-1.11.0.min.js">
                </script>
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