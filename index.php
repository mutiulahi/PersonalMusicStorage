<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Ajisebiyawo Islam Musician | Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/audioplayer.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <?php
        include'includes/menu.php' 
    ?>
    <!-- header-end -->

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider  d-flex align-items-center slider_bg_1 overlay2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="slider_text text-center ">
                            <h3>Ajisebiyawo </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- music_area  -->
    <div class="music_area">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-10">
                    <div class="row align-items-center">
                        <div class="col-xl-9 col-md-9">
                            <div class="music_field">
                                <div class="thumb">
                                    <img src="img/music_man/1.png" alt="">
                                </div>
                                <div class="audio_name">
                                    <div class="name">
                                        <h4>Frando Kally</h4>
                                        <p>10 November, 2019</p>
                                    </div>
                                    <audio preload="auto" controls>
                                        <source src="islam2.mp3">
                                    </audio>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-3">
                            <div class="music_btn">
                                <a href="islam2.mp3" class="genric-btn danger-border radius"><i
                                        class="fa fa-download"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- music_area end  -->

    <!-- about_area  -->
    <div class="about_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5 col-md-6">
                    <div class="about_thumb">
                        <img class="img-fluid" src="img/about/about_1.jpg" alt="">
                    </div>
                </div>
                <div class="col-xl-7 col-md-6">
                    <div class="about_info">
                        <h3>Adam Amobi</h3>
                        <p>Esteem spirit temper too say adieus who direct esteem. It esteems luckily or picture placing
                            drawing. Apartments frequently or motionless on reasonable projecting expression enim ad
                            minim veniam quis nostrud exercitation we have supported programmes to help alleviate human
                            suffering through animal welfare when people might depend.</p>
                        <div class="signature">
                            <img src="img/about/signature.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ about_area  -->


    <!-- music_area  -->
    <div class="music_area music_gallery">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-65">
                        <h3>Latest Tracks</h3>
                    </div>
                </div>
            </div>
            <?php
            $condb = mysqli_connect('localhost', 'root', '', 'datamusicDB');
            if(mysqli_connect_error()){
                die("Database failed".mysqli_connect_error());
            }
            $title = array();
            $pic = array();
            $music = array();
            $queryLastest = "SELECT * from datamusicTB";
            $result = mysqli_query($condb, $queryLastest);
            while($row = mysqli_fetch_array($result)){
                $title []= $row['title'];
                $music []= $row['music'];
                $pic []= $row['picture']; 
                $date [] = $row['date'];
            }
            ?>

            <div class="row align-items-center justify-content-center mb-20">
                <div class="col-xl-10">
                    <div class="row align-items-center">
                        <div class="col-xl-9 col-md-9">
                            <div class="music_field">
                                <div class="thumb">
                                    <?php
                                        $to = sizeof($title);
                                        $picture = 'picMusic/'.$pic[$to-1];
                                        echo '<img src="'.$picture.'" alt="" style="width=150px; height:150px; border-radius:100px">';
                                    ?>
                                </div>
                                <div class="audio_name">
                                    <div class="name">
                                        <h4><?php
                                            $to = sizeof($title);
                                            echo $title[$to-1];
                                            ?>
                                        </h4>
                                        <p>
                                            <?php
                                            $to = sizeof($title);
                                            $displayDate=  $date[$to-1];
                                            echo $displayDate;
                                            ?>
                                        </p>
                                    </div>
                                    <audio preload="auto" controls>
                                        <?php
                                        $music1 = 'music/'.$music[$to-1];
                                            echo '<source src="'.$music1.'">';
                                        ?>
                                    </audio>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-3">
                            <div class="music_btn">
                                <a href="#" class="genric-btn danger-border radius"><i class="fa fa-download"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row align-items-center justify-content-center mb-20">
                <div class="col-xl-10">
                    <div class="row align-items-center">
                        <div class="col-xl-9 col-md-9">
                            <div class="music_field">
                                <div class="thumb">
                                    <?php
                                        $to = sizeof($title);
                                        $picture2 = 'picMusic/'.$pic[$to-2];
                                        echo '<img src="'.$picture2.'" alt="" style="width=150px; height:150px; border-radius:100px">';
                                    ?>
                                </div>
                                <div class="audio_name">
                                    <div class="name">
                                        <h4>
                                            <?php
                                                $to1 = sizeof($title);
                                                echo $title[$to-2]; 
                                            ?>
                                        </h4>
                                        <p>
                                            <?php
                                                $to = sizeof($title);
                                                $displayDate=  $date[$to-2];
                                                echo $displayDate;
                                            ?>
                                        </p>
                                    </div>
                                    <audio preload="auto" controls>
                                        <?php
                                            $music2 = 'music/'.$music[$to1-2];
                                            echo '<source src="'.$music2.'">';
                                        ?>
                                    </audio>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-3">
                            <div class="music_btn">
                                <a href="#" class="genric-btn danger-border radius"><i class="fa fa-download"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- music_area end  -->

    <!-- footer start -->
    <?php
        include 'includes/footer.php';
    ?>
    <!--/ footer end  -->

    <!-- link that opens popup -->

    <!-- JS here -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/audioplayer.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>
    <script src="js/slick.min.js"></script>
    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>

    <script>
    $(function() {
        $('audio').audioPlayer({

        });
    });
    </script>
</body>

</html>