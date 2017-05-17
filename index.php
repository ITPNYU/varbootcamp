<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>VR/AR Bootcamp</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/grayscale.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
    <link rel="stylesheet" href="css/style.css"> <!-- Resource style -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                  <span class="light">VR/AR Bootcamp</span>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#payment">Join now</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#schedule">Schedule</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#teachers">Teachers</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <span style="background-color:#7f8c8d">
                        <h1 class="brand-heading">VR/AR Bootcamp</h1>
                        <p class="intro-text">The experiential one week workshop in<br> Virtual Reality and Augmented Reality<br>July 17th-21st<br>Located at the Interactive Telecommunications Program at NYU</p>
                    </span>
                        <a href="#payment" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="payment" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Creative, Iterative, and Collaborative</h2>
                <p>Join NYU’s ITP for a week long intensive workshop series that introduces the innovative world of Virtual Reality and Augmented Reality while showcasing the cutting edge trends developing in these fields. You will gain a high level understanding of topics such as 360 Audio, Motion Capture, 3D Scanning, and learn how these tools can be applied to VR and AR. We will take field trips to various labs and departments at NYU to demonstrate how this research can be applied to VR and AR and you’ll get hands on interaction with various projects utilizing this research. By the end of this workshop you’ll have the necessary knowledge to explore integrating these technologies into your company’s creative toolkit.
                <br><i>Please note:</i> This is <b>not</b> an academic activity and you will not receive any credits for attending this workshop.
    <p>We look forward to seeing you!<br></p>
    <h2>Early Bird Special Price: <strong>$2000</strong> until May 23rd. </h2>
    <br><br>*** <u>Cancellation Policy</u> ***<br>
Please email us at <a href="mailto:vrarbootcamp@itp.nyu.edu ">vrarbootcamp@itp.nyu.edu</a> if you can no longer attend the conference. Full refunds will be issued for cancellations made before June 1st, we will issue 50% refunds for cancellations made before June 15th. Unfortunately, we cannot offer refunds for any cancellations made after June 15th, however you can transfer your registration to another person.</p>
    <h2>Contact/Billing Information</h2>
    <p><em>(all fields are required)</em></p>
                <?php include 'payment.php'; ?>
            </div>
        </div>
    </section>

    <!-- Schedule Section -->
    <section id="schedule" class="container content-section text-center">
        <div class="row">
            <?php //include 'calendar.php'; ?>
            <div class="">
                <h2>Schedule</h2>
                <h4>More classes will be announced as we get closer to the conference!</h4>

                <?php include 'calendar.php'; ?>
                <!-- <p>Monday, July 17th 4:30-6:30 Overview of VR with Sarah Rothberg<br>
    Monday, July 17th 7-9 Overview of AR with Ziv Schneider<br>
Tuesday, July 18th 4:30-6:30 Overview of Game Engines with Todd Bryant<br>
Wednesday, July 19th 4:30-6:30 Overview of 3D Scanning and Photogrammetry with Gabe Barcia-Colombo<br>
Wednesday, July 19th 7-9 360 Audio in VR with TK Broderick<br>
Thursday, July 20 5-9 Off site visit to the motion capture studio at Jay Street/Metro Tech NYU campus. Taught by Todd Bryant, Matt Romein, and Kat Sullivan<br>
Friday, July 21st 5-9 Demos of VR, AR, and Motion Capture projects</p> -->

                
            </div>
        </div>
    </section>

    <!-- Teachers Section -->
    <section id="teachers" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Teachers</h2>
                    <a href="varbootcamp.pdf" class="btn btn-default btn-lg"><i class="fa fa-user-circle-o" aria-hidden="true"></i> <span class="network-name">Download Teachers' Info</span></a>
                    
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Contact</h2>
                <p>Feel free to reach out to us <a href="mailto:vrarbootcamp@itp.nyu.edu ">here</a> </p>
                
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="mailto:vrarbootcamp@itp.nyu.edu " class="btn btn-default btn-lg"><i class="fa fa-envelope-o fa-fw"></i> <span class="network-name">Kat Sullivan</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- ITP Section -->
    <!-- <div id="itp" align="center">
        <br>
        <a href="https://tisch.nyu.edu/itp">
            <img src="img/itp.png" alt="NYU | TISCH | ITP" height="80" width="80" >
        </a>
    </div> -->

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>VR/AR Bootcamp</p>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>

    <!-- calendar JavaScript -->
    <script src="js/modernizr.js"></script>
    <script>
    if( !window.jQuery ) document.write('<script src="js/jquery-3.0.0.min.js"><\/script>');
    </script>
    <script src="js/main.js"></script>

</body>

</html>
