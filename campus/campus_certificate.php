<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="keywords" content="codemistic,code,c++,java,python,tutorials,lessons,learn c++,learn java,learn python,free tutorials,python tutorials,python lessons, python free course" />
    <meta name="description" content="Download Campus Leaders Certificates. Enter your email and get your certificate." />
    <title>Download Certificate</title>

    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-MCNC43J');
    </script>
    <!-- End Google Tag Manager -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-YPTQSLH0XW"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-YPTQSLH0XW');
    </script>
    <script data-ad-client="ca-pub-5352867889640158" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- Favicon -->

    <link rel="icon" type="img/png" href="../favicon.png" />
    <!-- FONT AWESOME -->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css" integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" crossorigin="anonymous" />

    <!-- FONTS -->

    <link href="https://fonts.googleapis.com/css2?family=Kalam:wght@700&family=Ubuntu&family=Varela+Round&display=swap" rel="stylesheet" />

    <!-- Animate on scroll -->

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />

    <title>Verify</title>
    <link rel="stylesheet" href="../lang_styles.css">

</head>

<body>
    <nav class="navbar fixed-top navbar-expand-xl navbar-dark">
        <a class="navbar-brand" href="https://codemistic.in/index.html">CODEMISTIC</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="https://codemistic.in/index.html">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Tutorials
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                        <a class="dropdown-item" href="https://codemistic.in/cpp.html">C++</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="https://codemistic.in/python.html">Python</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="https://codemistic.in/java.html">Java</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="https://codemistic.in/dsa.html">Data Structure and Algorithms</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="https://codemistic.in/tutorials.html">All Tutorials</a>

                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://codemistic.in/events.html">Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://codemistic.in/teen-code.html">Teen-Code</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://codemistic.in/campus.html">Campus Programme</a>
                </li>
                <!-- <li class="nav-item">
                        <a class="nav-link" href="https://docs.google.com/forms/d/e/1FAIpQLSc2O28YJpxQc6kh2tKpI_Lf5MwfwGXVnhMs0g5EEXobJ4Beeg/viewform?usp=sf_link" target="_blank">Contribute</a>
                    </li> -->

                <li class="nav-item">
                    <a class="nav-link" href="https://codemistic.in/register.html">Join Our Community</a>
                </li>
            </ul>
        </div>
    </nav>
    <br/>
    <h2 style="text-align: center;">Download Your Certificate</h2><br/>
    <div class="container my-4">
        <form action="campus_certificate.php" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1" style="font-weight:bolder;font-size:larger">Enter Your Email</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="idno">
            </div>
            <button type="submit" class="btn btn-primary" style="font-weight: bolder;">Submit</button>
        </form>
    </div>
    <?php

    $servername = "localhost";
    $username = "z05cnh72slgo"; // Enter username of phpmyadmin/Webhosting
    $password = "22March@1234"; // Enter password of database
    $database = "certificates"; // Enter database in which you have to store data

       $conn = mysqli_connect($servername, $username, $password, $database);
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (!empty($_POST['idno'])) {
            $userid = $_POST['idno'];
            $sql = "SELECT * FROM `campus` WHERE email='$userid'";//Replace codebattle with your table name in which all csv have been stored and also u_id with that column name in which all id's have been stored
            $result = mysqli_query($conn,$sql);
            $num = mysqli_num_rows($result);
            if($num == 1){
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="container"><div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Thank You '.$row['name'].'!</strong> for your contribution as <strong>' . $row['event'] . '</strong> <br />Certificate issued on <strong>' . $row['date'] . '</strong><br /> Your Certificate ID is  <strong>' . $row['id'] . '</strong><br /><br /> <a href="https://codemistic.in/certificates/' .$row['card_id'] . '.pdf"><button class="btn btn-success" style="font-weight: bolder;">Download Your Certificate</button></a>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div></div>';
                }
                
            }else{
                echo '<div class="container"><div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error! No certificate found. Enter correct email.</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div></div>';
            }
        }else{
            echo '<div class="container"><div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error! Please enter email.</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div></div>';
        }
    }
    ?>
    <footer>
        <div class="row footer">
            <div class="logo">
                <img src="https://codemistic.in/image.png" alt="" class="f-img">
                <h5>LEARN CODE DISCUSS</h5>
            </div>

            <div class="footer-column ">

                <ul class="footer-ul">
                    <li class="foot-header"><strong>CodeMistic</strong></li>

                    <li class="f-li"><a href="https://codemistic.in/index.html" class="f-links">Home</a></li>


                    <li class="f-li"><a href="https://codemistic.in/team.html" class="f-links">Our Team</a></li>


                    <li class="f-li"><a href="https://codemistic.in/terms-and-conditions.html" class="f-links">Terms of Service</a></li>


                    <li class="f-li"><a href="https://codemistic.in/privacy-policy.html" class="f-links">Privacy Policy</a></li>

                </ul>
            </div>
            <div class="footer-column ">

                <ul class="footer-ul ">
                    <li class="foot-header"><strong>LEARN</strong></li>

                    <li class="f-li"><a href="https://codemistic.in/cpp.html" class="f-links">C++</a></li>


                    <li class="f-li"><a href="https://codemistic.in/java.html" class="f-links">Java</a></li>


                    <li class="f-li"><a href="https://codemistic.in/python.html" class="f-links">Python</a></li>


                    <li class="f-li"><a href="https://codemistic.in/dsa.html" class="f-links">DSA</a></li>

                </ul>
            </div>
            <div class="footer-column ">

                <ul class="footer-ul ">
                    <li class="foot-header"><strong>CONTRIBUTE</strong></li>

                    <li class="f-li"><a href="https://docs.google.com/forms/d/e/1FAIpQLSduxk_aP9M1lqUAebQJwRXiVm2ukmdgv3T7gjBpOsr_gdeOcQ/viewform?usp=sf_link" class="f-links" target="_blank">Write an Article/Blog</a></li>


                    <li class="f-li"><a href="https://docs.google.com/forms/d/e/1FAIpQLSc2O28YJpxQc6kh2tKpI_Lf5MwfwGXVnhMs0g5EEXobJ4Beeg/viewform?usp=sf_link" class="f-links" target="_blank">Internships</a></li>


                    <li class="f-li"><a href="https://docs.google.com/forms/d/e/1FAIpQLSe9nr_Aw0fGIqm3_xWhqEzTr3UWdOFz-pvKpQvkAsosORYq9w/viewform?usp=sf_link" class="f-links" target="_blank">Videos</a></li>

                    <li class="f-li"><a href="https://docs.google.com/forms/d/e/1FAIpQLScOW3hJjxxwzPYL4u51oboc4T1aDtIUEIRa20hKPKu4UlcZAA/viewform?usp=sf_link" class="f-links" target="_blank">Donations/Funds</a></li>

                </ul>
            </div>

        </div>
        <div class="footer-links" style="text-align: center;">
            <!-- <h7>Connect With Us</h7><br><br> -->
            <a href="https://www.facebook.com/codemistic " target="_blank "><i class="icons fa-2x fab fa-facebook " style="color:#3b5998; "></i></a>
            <a href="https://www.instagram.com/codemistic.in " target="_blank "><i class="icons fa-2x fab fa-instagram " style="color:#e95950; "></i></a>
            <a href="https://www.twitter.com/codemistic " target="_blank "><i class="icons fa-2x fab fa-twitter " style="color:#8accf5; "></i></a>
            <a href="https://www.linkedin.com/company/codemistic " target="_blank "><i class="icons fa-2x fab fa-linkedin " style="color:#88b3ee; "></i></a>
            <a href="https://t.me/codemistic " target="_blank "><i class="icons fa-2x fab fa-telegram " style="color:#65adda; "></i></a>

            <a href="https://www.youtube.com/channel/UCS1Iv_kkgQGDwoXtvrlwlag " target="_blank "><i class="icons fa-2x fab fa-youtube " style="color:red; "></i></a>
            <p class="foot mt-3">&#169; Copyright : <strong>CodeMistic</strong> All Rights Reserved.</p>
        </div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>