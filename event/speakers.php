<?php

    function in_array_r($needle, $haystack, $strict = false) {
        foreach ($haystack as $item) {
            if (($strict ? $item === $needle : $item == $needle) || (is_array($item) && in_array_r($needle, $item, $strict))) {
                return true;
            }
        }

        return false;
    }

    $speakers = array(
        "bram" => array(
            "q" => "bram",
            "name" => "Bram Vanderborght",
            "image" => "../img/hosts/Bram.png",
            "job" => "Professor robotics @ VUB",
            "linkedin" => "https://www.linkedin.com/in/bramvanderborght/",
            "description" => "<p>Bram Vanderborght is an absolute authority in the field of robotics. The top researcher has a master’s degree in mechanical engineering at the Vrije University of Brussels (VUB) with the highest distinction, and received his doctorate in applied sciences in 2007.</p><p>Vanderborght conducted research at the Italian Institute of Technology in Genova, the Babes-Bolyai University Cluj-Napoca (Romania), and Japanese / French robo- tics laboratory in Tsukuba (Japan)</p>.
            <p>Recently, his research on self-healing robots are still getting attention in the national media. His research interests include cognitive and physical human robot interaction, robot-assisted therapy, humanoids and rehabilitation robotics such as exoskeletons.</p>",
        ),
        "geert" => array(
            "q" => "geert",
            "name" => "Geert Vanwonterghem",
            "image" => "../img/hosts/Geert.png",
            "job" => "Founding partner @ MeetMatch",
            "linkedin" => "https://www.linkedin.com/in/geertvanwonterghem/",
            "description" => "<p>He has been many things in his life: a fanatic software develo- per, an innovation manager, a professor, ... But first & fore- most, he is and will always be an entrepreneur. He loves everything about innovation, has done a lot of innovating him- self and has spent a lot of time sparring with people on how to organize innovation within their company.</p>
            <p>He also loves change projects. To guide people in new directi- ons and see it happen.</p>",
        ),
        "lidewij" => array(
            "q" => "lidewij",
            "name" => "Lidewij Nuitten",
            "image" => "../img/hosts/Lidewij.png",
            "job" => "Televisiemaakster @ VRT",
            "linkedin" => "https://www.linkedin.com/in/lidewij-nuitten-0681a546/",
            "description" => "<p>Lidewij Nuitten is a television maker, who is the past couple of years made numerous amount of very intriguing series. Nuitten studied journalism at the Erasmushogeschool Brussel, and did an internship at Brussels Week. Then she went to work for the VRT, and she made the now famous reporter series ‘Iedereen Beroemd’. ‘Always straight’ - in which she walked in a straight line from Limburg until the coast - and ‘De Laatstejaars’.</p>
            <p>Her most recent work is ‘My Street’. Setup of this project was to interview as many of the people as possible in her very diverse street in Schaarbeek. Armed with 2 cameras she was able to capture the most fantastic stories.</p>",
        ),
        "nilesh" => array(
            "q" => "nilesh",
            "name" => "Nilesh Mahdu",
            "image" => "../img/hosts/Nilesh.png",
            "job" => "Professor @ University Ghent",
            /*"linkedin" => "http://www.linkedin/speaker",*/
            "description" => "<p>Nilesh Madhu is a researcher dedicated to speech technology and sound processing.</p>
            <p>He is an engineer from training and a professor at the University from Ghent.</p>",
        ),
        "rik" => array(
            "q" => "rik",
            "name" => "Rik Vera",
            "image" => "../img/hosts/Rik.png",
            "job" => "CEO @ Nexxworx",
            "linkedin" => "https://www.linkedin.com/in/rikvera/",
            "description" => "<p>Having gathered years of C-level experience in sales and marketing related functions, he now inspires companies to develop customer-centric strategies fit for a connected world. Rik has given more than 350 keynote sessions around the world, in more than 15 countries, divided over 3 continents, to international pioneers like Assa Abloy, Cisco, Volvo, Swedbank, Telia, Baloise, Mastercard, Mundiphar- ma, Sogeti and Microsoft.</p>
            <p>He is a renowned thought-leader, worldwide keynote spea- ker, acclaimed author and trusted advisor on the topics of extreme customer-centricity, disruption, business model change, sales, marketing and making companies ready for the Day After Tomorrow.</p>",
        ),
        "nico" => array(
            "q" => "nico",
            "name" => "Nico Huybrechts",
            "image" => "../img/hosts/Nico.png",
            "job" => "CEO @ dataSHIFT",
            "linkedin" => "https://www.linkedin.com/in/nicohuybrechts/",
            "description" => "<p>Entrepreneurial professional with a background in Data Management, Analytics and Business Intelligence. Co-founder of dataSHIFT. Convinced that everything can be measured. People, performance, success. Historically, currently, predictively.</p>
            <p>His personal ambition is to make measuring motivational in order to lead to better business decisions and outcomes.</p>",
        )
    );

    if( empty( $_GET['q'] ) ){
        $title_speaker = "Speakers";
    }
    elseif ( $_GET['q'] == "bram" || $_GET['q'] == "bramvanderborght" )
    {
        $information_speaker = $speakers["bram"];
        $title_speaker = $information_speaker["name"];
        $other_speakers = $speakers;
        unset($other_speakers["bram"]);
    }
    elseif ( $_GET['q'] == "geert" || $_GET['q'] == "geertvanwonterghem" )
    {
        $information_speaker = $speakers["geert"];
        $title_speaker = $information_speaker["name"];
        $other_speakers = $speakers;
        unset($other_speakers["geert"]);
    }
    elseif ( $_GET['q'] == "lidewij" || $_GET['q'] == "lidewijnuitten" )
    {
        $information_speaker = $speakers["lidewij"];
        $title_speaker = $information_speaker["name"];
        $other_speakers = $speakers;
        unset($other_speakers["lidewij"]);
    }
    elseif ( $_GET['q'] == "nilesh" || $_GET['q'] == "nileshmahdu" )
    {
        $information_speaker = $speakers["nilesh"];
        $title_speaker = $information_speaker["name"];
        $other_speakers = $speakers;
        unset($other_speakers["nilesh"]);
    }
    elseif ( $_GET['q'] == "rik" || $_GET['q'] == "rikvera" )
    {
        $information_speaker = $speakers["rik"];
        $title_speaker = $information_speaker["name"];
        $other_speakers = $speakers;
        unset($other_speakers["rik"]);
    }
    elseif ( $_GET['q'] == "nico" || $_GET['q'] == "nicohuybrechts" )
    {
        $information_speaker = $speakers["nico"];
        $title_speaker = $information_speaker["name"];
        $other_speakers = $speakers;
        unset($other_speakers["nico"]);
    }
    else
    {
        $title_speaker = "Unknown speaker";
    }

?><!DOCTYPE html>
<html lang="en">
<head>

    <!-- GOOGLE ANALYTICS SCRIPT -->

    <!-- END GOOGLE ANALYTICS SCRIPT -->

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="TEDx Mechelen is an independently organized TED event about revolution. This event will be hosted at the Creativity Gym at Thomas More Mechelen on the 23th of March 2018.">
    <meta name="keywords" content="TEDx, TEDx Mechelen, Mechelen, revolution, Thomas More, Creativity Gym, Nico Huybrechts, Lidewij Nuitten, Geert Van Wonterghem, Nilesh Mahdu, Bram Vandenborght, Rik Vera">
    <meta name="author" content="Designosource">
    <meta name="subject" content="TEDx Mechelen">
    <meta name="copyright" content="Designosource">
    <meta name="revised" content="06/01/2018">
    <meta name="designer" content="Designosource">
    <meta name="reply-to" content="info@tedxmechelen.be">
    <meta name="owner" content="TEDx Mechelen">
    <meta name="url" content="http://www.tedxmechelen.be">
    <meta name="url" content="https://www.tedxmechelen.be">
    <meta name="identifier-URL" content="http://www.tedxmechelen.be">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta property="og:title" content="TEDx Mechelen">
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://www.tedxmechelen.be">
    <meta property="og:image" content="http://www.tedxmechelen.be/img/og-image.jpg">
    <meta property="og:image:secure_url" content="https://www.tedxmechelen.be/img/og-image.jpg">
    <meta property="og:image:alt" content="OG image TEDx Mechelen">
    <meta property="og:image:width" content="634">
    <meta property="og:image:height" content="427">
    <meta property="og:description" content="TEDx Mechelen is an independently organized TED event about revolution. This event will be hosted at the Creativity Gym at Thomas More Mechelen on the 23th of March 2018.">
    <meta property="og:locale" content="nl_BE">
    <meta property="og:site_name" content="TEDx Mechelen">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@TEDxMechelen">
    <meta name="twitter:creator" content="@designosource">
    <meta name="twitter:title" content="TEDx Mechelen">
    <meta name="twitter:description" content="TEDx Mechelen is an independently organized TED event about revolution. This event will be hosted at the Creativity Gym at Thomas More Mechelen on the 23th of March 2018.">
    <meta name="twitter:image" content="http://www.tedxmechelen.be/img/og-image.jpg">
    <link rel="icon" type="image/jpg" href="http://www.tedxmechelen.be/img/og-image.jpg">
    <!--<link rel="apple-touch-icon" href="Url link image 500x500 png">
    <link rel="apple-touch-icon" sizes="152x152" href="Url link image 152x152 png">
    <link rel="apple-touch-icon" sizes="180x180" href="Url link image 180x180 png">
    <link rel="apple-touch-icon" sizes="167x167" href="Url link image 167x167 png">
    <link rel="apple-touch-startup-image" href="Url Image">
    <meta name="apple-mobile-web-app-title" content="Titel">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default-translucent">
    <meta name="apple-touch-fullscreen" content="yes">-->

    <title><?php echo $title_speaker . " | " ?>TEDx Mechelen</title>

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">

    <!-- Reset css file -->
    <link href="css/reset.css" rel="stylesheet">

    <!-- Animate.css -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/speakers.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <script src="https://use.fontawesome.com/f2a9d011c6.js"></script>

</head>

<body>

<section id="information">

    <div class="maxwidth flex">

        <p class="animated fadeInLeft">23 maart 2018 - Thomas More: Creativity Gym</p>

        <div class="information--socials animated fadeInRight">
            <a target="_blank" href="https://www.facebook.com/TEDxMechelen/">
                <i class="fa fa-facebook fa-lg" aria-hidden="true"></i>
            </a>
            <a target="_blank" href="https://twitter.com/TEDxMechelen?lang=nl">
                <i class="fa fa-twitter fa-lg" aria-hidden="true"></i>
            </a>
        </div>

    </div><!-- end maxwidth -->

</section>

<nav>
    <div class="maxwidth flex">
        <a href="../index.html"><img id="logo" class="animated fadeInLeft" src="img/logo.png" alt="Logo TEDx Mechelen"/></a>

        <div class="hamburger-menu-container">
            <div class="hamburger-menu animated fadeInRight">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <ul class="navigation flex">
            <li><a href="../index.html">Home</a></li>
            <li>
                <a href="#" class="dropdown">About</a>
                <ul class="drop">
                    <li><a href="../about/tedxandted.html">TEDx &amp; TED</a></li>
                    <li><a href="../about/team.html">Team</a></li>
                </ul>
            </li>
            <li>
                <a href="#" class="dropdown">Event</a>
                <ul class="drop">
                    <li><a href="../event/schedule.html">Schedule</a></li>
                    <li><a href="../event/speakers.php">Speakers</a></li>
                    <li><a href="../event/revolution.html">Revolution</a></li>
                </ul>
            </li>
            <li><a href="../partners.html">Partners</a></li>
            <li><a href="../contact.html">Contact</a></li>
        </ul>
    </div>
</nav>

<section id="speaker" class="animated fadeInUp">
    <div class="maxwidth">

        <?php if( empty($_GET['q']) ): ?>

            <h3 class="title--line animated fadeInLeft">Speakers</h3>

            <div class="speakers">

                <?php foreach ( $speakers as $speaker ): ?>

                    <div class="carousel-item">
                        <div class="bg-img bg-img-x flex">
                            <img src="<?php echo $speaker["image"]; ?>" alt="Photo of <?php echo $speaker["name"]; ?>">
                        </div>
                        <a href="speakers.php?q=<?php echo $speaker["q"]; ?>" class="btn btn-regular all-caps"><?php echo $speaker["name"]; ?></a>
                        <div class="carousel-item-speaker">
                            <p class="quote"></p>
                            <p class="role"><?php echo $speaker["job"]; ?></p>
                        </div>
                        <a class="link--red" href="speakers.php?q=<?php echo $speaker["q"]; ?>">More about <?php echo $speaker["name"]; ?><br><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>

                <?php endforeach; ?>

            </div>

            <!-- einde van alle sprekers -->

        <?php elseif( empty($information_speaker) ): ?>

            <h3 class="title--line animated fadeInLeft">Unknown speaker "<?php echo $_GET['q']; ?>"</h3>

            <p>The speaker you are refering to does not exist or is nog coming to TEDx Mechelen.</p>

            <p>Learn more about these speakers:</p>

            <div class="speakers">

                <?php foreach ( $speakers as $speaker ): ?>

                    <div class="carousel-item">
                        <div class="bg-img bg-img-x flex">
                            <img src="<?php echo $speaker["image"]; ?>" alt="Photo of <?php echo $speaker["name"]; ?>">
                        </div>
                        <a href="speakers.php?q=<?php echo $speaker["q"]; ?>" class="btn btn-regular all-caps"><?php echo $speaker["name"]; ?></a>
                        <div class="carousel-item-speaker">
                            <p class="quote"></p>
                            <p class="role"><?php echo $speaker["job"]; ?></p>
                        </div>
                        <a class="link--red" href="speakers.php?q=<?php echo $speaker["q"]; ?>">More about <?php echo $speaker["name"]; ?><br><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>

                <?php endforeach; ?>

            </div>

        <?php else: ?>

            <h3 class="title--line animated fadeInLeft"><?php echo $information_speaker['name']; ?></h3>

            <div class="single-speaker speakers">

                <div class="carousel-item">
                    <div class="bg-img bg-img-x flex">
                        <img src="<?php echo $information_speaker["image"]; ?>" alt="Photo of <?php echo $information_speaker["name"]; ?>">
                    </div>
                </div>

                <div class="speaker-information">

                    <div class="small-information">

                        <?php if( isset($information_speaker['linkedin']) ): ?>
                        <div class="linkedin">

                                <a target="_blank" href="<?php echo $information_speaker["linkedin"] ?>">
                                    <i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i>
                                </a>


                        </div>
                        <?php endif; ?>

                        <div>
                            <p class="small-information-title btn "><?php echo $information_speaker["job"]; ?></p>
                        </div>

                    </div>

                    <div class="large-information">
                        <?php echo $information_speaker["description"]; ?>
                    </div>

                </div>



            </div>

            <div class="more-speakers"> <!-- only visible when picture and description are next to each other -->

                <h4>More speakers</h4>

                <div class="speakers">

                    <?php foreach ( $other_speakers as $speaker ): ?>

                        <div class="carousel-item">
                            <a href="speakers.php?q=<?php echo $speaker["q"]; ?>">
                                <div class="bg-img bg-img-x flex">
                                    <img src="<?php echo $speaker["image"]; ?>" alt="Photo of <?php echo $speaker["name"]; ?>">
                                </div>
                            </a>
                        </div>

                    <?php endforeach; ?>

                </div>

            </div>

        <?php endif; ?>


    </div>
</section>

<footer>
    <div class="maxwidth">
        <div class="splitline flex">
            <div>
                <a href="comingSoon.html"><img id="footerlogo" src="img/logo_w.png" alt="Logo TEDx Mechelen"></a>
            </div>

            <div>
                <ul class="flex">
                    <li><a href="../index.html">Home</a></li>
                    <li><a href="../about/tedxandted.html">About</a></li>
                    <li><a href="schedule.html">Event</a></li>
                    <li><a href="../partners.html">Partners</a></li>
                    <li><a href="../joinus.html">Join us</a></li>
                    <li><a href="../contact.html">Contact</a></li>
                </ul>
            </div>

            <div class="address">
                <h4>Address</h4>
                <a href="https://www.google.be/maps/place/Thomas+More+Mechelen+-+Campus+Kruidtuin/@51.0248055,4.4845831,18.85z/data=!4m15!1m9!4m8!1m0!1m6!1m2!1s0x47c3e5cc91b66e43:0x61b5c485972acffc!2sThomas+More+Mechelen+-+Campus+Kruidtuin,+Lange+Ridderstraat+44,+2800+Mechelen!2m2!1d4.4847822!2d51.0247793!3m4!1s0x47c3e5cc91b66e43:0x61b5c485972acffc!8m2!3d51.0247793!4d4.4847822?hl=nl" target="_blank">
                    <p>Thomas More: Creativity Gym</p>
                    <p>Lange Ridderstraat 44</p>
                    <p>2800 Mechelen</p>
                </a>
                <div class="socials flex">

                    <a target="_blank" href="https://www.facebook.com/TEDxMechelen/" aria-label="facebook"> <i class="fa fa-facebook fa-lg" aria-hidden="true"></i></a>
                    <a target="_blank" href="https://twitter.com/TEDxMechelen?lang=nl" aria-label="twitter"> <i class="fa fa-twitter fa-lg" aria-hidden="true"></i></a>
                    <a href="mailto:info@tedxmechelen.be" aria-label="email"> <i class="fa fa-envelope-o fa-lg" aria-hidden="true"></i></a>

                </div>
            </div>
        </div> <!-- end flex container-->

        <div class="copyright flex">

            <p>This independant TEDx event is operated under license from TED</p>
            <p>Powered by <a href="www.designosource.be">Designosource</a></p>

        </div>

    </div> <!-- end maxwidth -->
</footer>

<!-- SCRIPTS -->
<!-- Implement jQuery-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/jquery.viewportchecker.js"></script>
<script type="text/javascript" src="js/slick.js"></script>
<script type="text/javascript" src="js/index.js"></script>
<!-- END SCRIPTS -->

</body>
</html>