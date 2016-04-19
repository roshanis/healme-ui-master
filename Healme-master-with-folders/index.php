<?php


if ( isset( $_POST['sendmail'] ) ) {
$email=$_POST['email'];
         $to = $email;
         $subject = "This is subject";
         
         $message = "<b>This is HTML message.</b>";
         $message .= "<h1>This is headline.</h1>";
         
         $header = "From:abc@somedomain.com \r\n";
         $header .= "Cc:afgh@somedomain.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
 }
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title> Healme :: Homepage</title>

<!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Animation CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet">    
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet" type="text/css">  
    <link rel="shortcut icon" href="images/favicon.ico"/>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400,600,700,800' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<script>
document.createElement("article");
document.createElement("aside");
document.createElement("audio");
document.createElement("canvas");
document.createElement("command");
document.createElement("datalist");
document.createElement("details");
document.createElement("embed");
document.createElement("figcaption");
document.createElement("figure");
document.createElement("footer");
document.createElement("header");
document.createElement("hgroup");
document.createElement("keygen");
document.createElement("mark");
document.createElement("meter");
document.createElement("nav");
document.createElement("output");
document.createElement("progress");
document.createElement("rp");
document.createElement("rt");
document.createElement("ruby");
document.createElement("section");
document.createElement("source");
document.createElement("summary");
document.createElement("time");
document.createElement("video");
</script>
</head>
<body id="page-top">
<!-- wrapper start -->
<div id="wrapper">
<!-- header start -->
<header>
<div class="navbar-wrapper">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
              <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt=""/><span> Healme</span> </a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="page-scroll" href="#page-top">Solutions</a></li>
                        <li><a class="page-scroll" href="#customers">Customers</a></li>
                        <li><a class="page-scroll" href="contact-us.html"> Contact</a></li>
                        <li><a class="page-scroll" href="account.html">Signup</a></li>
                        <li class="last"><a class="page-scroll" href="login.html">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
</div>

<div class="banner">
<div class="container">
<div class="row">
<h1> Healthcare <strong>Marketplace</strong> for <br> Elective <strong>Surgeries</strong></h1>
<p>to reduce healthcare costs and improve quality. Watch Overview Video </p>
<div class="col-md-6 col-sm-12 col-md-offset-3 subscribe">
					<form class="form-horizontal" action="index.php" id="subscribeForm" method="POST">
						<div class="form-group">
							<div class="col-md-7 col-sm-6 col-sm-offset-1 col-md-offset-0">
								<input class="form-control input-lg" name="email" type="email" id="address" placeholder="Work email" data-validate="validate(required, email)" required="required">
							</div>
							<div class="col-md-5 col-sm-4">
								<button type="submit" id="sendmail" name="sendmail" class="btn btn-success btn-lg">See  Healme <i class="fa fa-angle-double-right"></i></button>
							</div>
						</div>
                        <p>We guarantee 100% privacy. Your information will not be shared. </p>
					</form>
</div>
</div>

</div>
</div>
<div class="header-btm">
<div class="container">
<div class="row">
<ul>
<li><a class="page-scroll" href="#foremployees">For Employers</a></li>
<li><a class="page-scroll" href="#forhospital">For Hospitals</a></li>
</ul>
</div>
</div>
</div>
</header>
<!-- header start -->
<!-- mid-section start -->

<div id="foremployees" class="page-scroll">
<!-- whathelpme start -->
<section class="whathelpme">
<div class="container">
<div class="row">
<h2>What is Healme</h2>
<p>Healme is a marketplace to connect Facilities (Hospitals/Clinics) with Employers for fixed prices on elective surgeries. (bundled payments per episode of care).</p>
<p>What does this mean ? <br>
For e.g. Your facility can setup fixed bundled prices (for an episode of care) for elective surgeries at your facility. Employers will use the marketplace to setup exclusive arrangements with your facility for their employees to under go procedures at your facilities. Healme will take care of logistics and payment and we will pay you a single fixed price after the procedure.<br> 
Or <br>
You can also use the marketplace to spot open surgery slots at spot rates and Employers can pay ﬁxed upfront price for each slot with Healme arranging the logistics. </p>
</div>
</div>
</section>
<!-- whathelpme closed -->
<!-- helpus start -->
<section class="helpus">
<div class="container">
<div class="row">
<h2>How can Healme help us? </h2>
<p>We have perfected hassle-free experience for Domestic Medical travel. Our marketplace solution <br> is perfect for employers of all sizes.</p>
<ul>
<li>
<ul class="ratings">
<li><a href="#"><i class="fa fa-star"></i></a></li>
<li><a href="#"><i class="fa fa-star"></i></a></li>
<li><a href="#"><i class="fa fa-star"></i></a></li>
<li><a href="#"><i class="fa fa-star"></i></a></li>
<li><a href="#"><i class="fa fa-star"></i></a></li>
</ul>

<a href="#"><img src="images/employe-img1.png" alt=""/></a>
<p>Choose from among the highest quality clinics and hospitals</p>
</li>
<li>
<ul class="ratings"></ul>
<a href="#"><img src="images/employe-img2.png" alt=""/></a>
<p>Learn more about the hospitals, doctors and the treatment options</p>
</li>
<li>
<ul class="ratings"></ul>
<a href="#"><img src="images/employe-img3.png" alt=""/></a>
<p>Concierge services including Travel support, Procedure scheduling and checkup at hotel while traveling </p>
</li>
<li>
<ul class="ratings"></ul>
<a href="#"><img src="images/employe-img4.png" alt=""/></a>
<p>Upfront bundled pricing per procedure and warranty for each episode</p>
</li>
</ul>

</div>
</div>
</section>
<!-- helpus closed -->
<!-- videosection start -->
<div class="videosection">
<div class="container">
<div class="row">
<iframe src="https://www.youtube.com/embed/sPYWkUC3fZ4" frameborder="0" allowfullscreen></iframe>
</div>
</div>
</div>
<!-- videosection closed -->
<!-- whathelpme start -->
<section class="whyhealme">
<div class="container">
<div class="row">
<h2>Why Healme ?</h2>
<p>Our mission is to ensure your employees receive quality care so they can focus on getting well. We have experts in care administration, data analysis and hospital contract analysis to get you and your employees the best care at the reasonable cost</p>
<h4>Healme's promise to you</h4>
<ul>
<li>We will ensure you're in control.</li>
<li>We partner with top class hospitals and clinics having the best Medical professionals</li>
<li>Will partner with your benefits consultants to build the best strategy that works for you.</li>
<li>We will provide a comprehensive implementation process</li>
<li>We will provide quality customer service and nurse case management for your members.</li>
</ul>
</div>
</div>

<div class="interest">
<p class="page-scroll">Interested ? Click here to <a href="account.html">signup</a></p>
</div>
</section>
<!-- whathelpme closed -->

</div>

<div id="forhospital" class="page-scroll">
<!-- whathelpme start -->
<section class="whathelpme">
<div class="container">
<div class="row">
<h2>What is Healme</h2>
<p>Healme is a marketplace to connect Facilities (Hospitals/Clinics) with Employers for fixed prices on elective surgeries. (bundled payments per episode of care).</p>
<p>What does this mean ? <br>
For e.g. Your facility can setup fixed bundled prices (for an episode of care) for elective surgeries at your facility. Employers will use the marketplace to setup exclusive arrangements with your facility for their employees to under go procedures at your facilities. Healme will take care of logistics and payment and we will pay you a single fixed price after the procedure.<br> </p>
<p> Or <br>
You can also use the marketplace to spot open surgery slots at spot rates and Employers can pay ﬁxed upfront price for each slot with Healme arranging the logistics. </p>
</div>
</div>
</section>
<!-- whathelpme closed -->
<!-- helpus start -->
<section class="helpus">
<div class="container">
<div class="row">
<h2>How can Healme help us? </h2>
<p>Our marketplace solution is perfect for Healthcare facilities.</p>
<ul>
<li>
<ul class="ratings"></ul>
<a href="#"><img src="images/employe-img3.png" alt=""/></a>
<p>Patient scoring based on medical history and co-morbidities, so that facilities can decline risky patients.</p>
</li>
<li>
<ul class="ratings"></ul>
<a href="#"><img src="images/employe-img2.png" alt=""/></a>
<p>Physicians can spend more time with patients and less time dealing with insurance related headaches.</p>
</li>
<li>
<ul class="ratings"></ul>
<a href="#"><img src="images/employe-img5.png" alt=""/></a>
<p>We manage the Travel logistics, so your patients can travel huge distances to be at your facility. </p>
</li>
<li>
<ul class="ratings"></ul>
<a href="#"><img src="images/employe-img4.png" alt=""/></a>
<p>Fixed pricing per procedure and timely payment will ensure your billing headaches are reduced.</p>
</li>
</ul>


</div>
</div>

</section>
<!-- helpus closed -->
<!-- videosection start -->
<div class="videosection">
<div class="container">
<div class="row">
<iframe src="https://www.youtube.com/embed/sPYWkUC3fZ4" frameborder="0" allowfullscreen></iframe>
</div>
</div>
</div>
<!-- videosection closed -->
<!-- whathelpme start -->
<section class="whyhealme">
<div class="container">
<div class="row">
<h2>Why Healme ?</h2>
<p>Our mission is to ensure our customers receive quality care so they can focus on getting well.</p>
<h4>Healme's promise to you</h4>
<ul>
<li>We also coordinate with the medical team by providing nurse case managers for better outcome after the procedure. </li>
<li>We take care of the logistics, payments and contracts so that your physicians and other partners can focus on delivering care. </li>
<li>We score patients based on medical history and co-morbidities to reduce risk for risk for patients and facilities. We will also provide your team ability to decline patients with high risk</li>

</ul>
</div>
</div>

<div class="interest">
<p class="page-scroll" >Interested ? Click here to <a href="account.html">signup</a></p>
</div>
</section>
<!-- whathelpme closed -->

</div>

<!-- mid-section start -->
<!-- footer start -->
<footer>
<div class="container">
<div class="row text-center">
<p>&copy; 2016 Healme. All Rights Reserved</p>

</div>
</div>
</footer>
<!-- footer start -->
</div>
<!-- wrapper closed -->
<script src="js/jquery-2.1.1.js"></script>
<script src="js/pace.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/classie.js"></script>
<script src="js/cbpAnimatedHeader.js"></script>
<script src="js/inspinia.js"></script>
<script>
$('#sendmail').click(function(){
debugger;
$.ajax({
  type: 'POST',
  url: 'https://mandrillapp.com/api/1.0/messages/send.json',
  data: {
    ‘key’: ‘9d663e814f4c07d5c43d729a1682d6a1-us13’,
    ‘message’: {
      ‘from_email’: ‘YOUR@EMAIL.HERE’,
      ‘to’: [
          {
            ‘email’: ‘preetinder.singh@csgroupchd.com’,
            ‘name’: ‘RECIPIENT NAME (OPTIONAL)’,
            ‘type’: ‘to’
          },
          {
            ‘email’: ‘raj@csgroupchd.com’,
            ‘name’: ‘ANOTHER RECIPIENT NAME (OPTIONAL)’,
            ‘type’: ‘to’
          }
        ],
      ‘autotext’: ‘true’,
      ‘subject’: ‘YOUR SUBJECT HERE!’,
      ‘html’: ‘YOUR EMAIL CONTENT HERE! YOU CAN USE HTML!’
    }
  }
 }).done(function(response) {
   console.log(response); // if you're into that sorta thing
 });
});
</script>
</body>
</html>
