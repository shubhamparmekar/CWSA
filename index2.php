<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project SECURITY</title>
    <meta name="description" content="Project SECURTIY is a powerful website security app that will protect your website from hackers, attacks and other threats. It could protect your website from SQLi Attacks (SQL Injection), XSS Vulnerabilities, Proxy Visitors, Spammers and many other types of threats.">
    <meta name="author" content="Antonov_WEB">
	<meta content="Project SECURTIY – Website Security, Anti-Spam &amp; Firewall" property="og:title" />
    <meta content="website" property="og:type" />
    <meta content="https://s3.envato.com/files/248119319/Thumbnail.jpg" property="og:image" />
	<meta content="Project SECURTIY is a powerful website security app that will protect your website from hackers, attacks and other threats. It could protect your website from SQLi Attacks (SQL Injection), XSS..." property="og:description" />
    <meta content="Project SECURTIY" property="og:site_name" />
	
	<meta name="robots" content="index, follow">

	<meta name="theme-color" content="#000000">
    <link rel="shortcut icon" href="assets/img/favicon.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    
    <!--Font Awesome -->
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" />

    <!-- CSS -->

</head>

<body>

<?php
include "config.php";
include "project-security.php";
?>
    <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky">
        <div class="container">
            <a class="navbar-brand" href="#"><i class="fab fa-get-pocket"></i> Project SECURITY</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fas fa-bars"></span>
            </button>
        </div>
    </nav>

    <!-- START HOME -->
    <section class="bg-home bg-home-full" id="home">
        <!-- <div class="bg-overlay"></div> -->
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="text-center">
                                <h1 class="text-white home-title mb-0"><i class="fab fa-get-pocket"></i> Project <span class="highlight">SECURITY</span></h1>
                                <p class="text-muted  home-subtitle-center home-subtitle mt-4 mb-0 mx-auto">Security Application for Network Defense and Yield enhancement</p>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END HOME -->


	
    <!-- Start FEATURES -->

    <!-- End FEATURES -->

	<!-- Start Demo -->
   
    <!-- End Demo -->
	
    <!-- Start Faq -->
    
    <section class="section" id="demo">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-12">
                    <i class="ti-comments title-icon text-muted"></i>
                    <h3 class="title">Demonstration of the <span class="font-weight-bold">Protection</span></h3>
                    <p class="text-muted mt-3 title-subtitle mx-auto">Test the Protection Modules.</p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-12">
                    <ul class="nav nav-tabs nav-justified" id="DemoTabs">
                        <li class="active nav-item"><a class="nav-link active" href="#sqli-demo" data-toggle="tab"><i class="fas fa-code"></i> SQL Injection</a></li>
                        <li class="nav-item"><a class="nav-link" href="#xss-demo" data-toggle="tab"><i class="fas fa-bug"></i> XSS Attack</a></li>
						<li class="nav-item"><a class="nav-link" href="#badword-demo" data-toggle="tab"><i class="fas fa-filter"></i> Bad Word Filtering</a></li>
                    </ul>
                    <br />
                    <div class="tab-content">
                        <div class="tab-pane active show" id="sqli-demo">
                            <div class="row">
                            <div class="col-md-6"> 
                            If you want to try the protection from SQL Injections (Attacks aimed stealing information from MySQL Database or performing various commands to the Database) just click the button in right and automatically will be simulated an SQLi Attack.<br /><br />
                            </div>
                            <div class="col-md-6">
                                <a href="index2.php?id=1 or 1=1--" type="button" class="btn btn-primary btn-block" rel="nofollow"><i class="fa fa-arrow-circle-right"></i> Generate SQL Injection</a><br />
                                <div class="form-group">
                                    <input type="text" class="form-control" value="index2.php?id=1 or 1=1--" />
                                </div>
                           </div>
                           </div>
                        </div>
                        <div class="tab-pane" id="xss-demo">
                           <div class="row">
                            <div class="col-md-6">
                            If you want to try out the protection for XSS Attacks (Type of attacks, which are used to perform HTML and Javascript code into a web page) just enter code in the box in right or use the default code and will be simulated XSS Attack, which will automatically be displayed with sanitized result.
                            </div>
                            <div class="col-md-6">
                            <form class="form dark-text" method="post" action='index2.php#demo'>
                                <input class="btn btn-primary btn-block" type="submit" name="xss-demo" value="Generate XSS Attack"><br/>
                                <input type="text" name="xss-example" class="form-control" value="<script>alert('XSS Attack')</script> Text" required />
                            </form>
                            <br/>Displaying the result in sanitized type: <br /><div class="alert alert-success">&amp;#60;script&amp;#62;alert(&amp;#39;XSS Attack&amp;#39;)&amp;#60;/script&amp;#62; Text</div>   
                            </div>
                           </div>
                        </div>
						
						<div class="tab-pane" id="badword-demo">
                           <div class="row">
                            <div class="col-md-6">
                            Words that are added in the Bad Words table will be censored (replaced, hidden) by the Replacement Word. 
							To test its filtering method put a word that is added in the list of Bad Words and click the POST button.
                            </div>
                            <div class="col-md-6">
                            <form class="form dark-text" method="post" action='index2.php#demo'>
                                <input class="btn btn-primary btn-block" type="submit" name="badword-demo" value="Post Bad Word"><br/>
                                <input type="text" name="badword-example" class="form-control" placeholder="Enter bad word / string" required />
                            </form>
                            </div>
                           </div>
                        </div>
			     </div>
                </div>
            </div>            
        </div>
    </section>
    </section>
    <!-- End Faq -->

    <!-- Start Cta -->
    
    <!-- End Cta -->

    <!-- Start Pricing -->
    
    <!-- End Pricing -->

    <!-- Start Footer -->
    <section class="section footer">
        <!-- <div class="bg-overlay"></div> -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <p class="copy-rights text-muted mb-0">2024 © Project SECURITY</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Footer -->

    <!-- Back to top -->    
    <a href="#" class="back-to-top" id="back-to-top"> <i class="fas fa-arrow-up"> </i> </a>

    <!-- JAVASCRIPTS -->
    <script
    src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
	
</body>
</html>