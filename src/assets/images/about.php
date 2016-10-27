<!DOCTYPE html>
<html lang="en" class=" ">
<head>
	<meta charset="utf-8" />
	<title>Free Accounting Software for sole trader, small business | Accounting software, bookkeeping software, Self assessment, Tax Return, HMRC, online bookkeeping, accounting software</title>
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
	<meta name="description" content="Bookkeeping and tax software for sole trader, small business and freelancer"/>
    <meta name="keywords" content="HMRC, VAT, Self assessment, Basetax,tax return,Accountant,Payroll,Track Income,Expenses,Insurance,Mortgages, sole trader, self employed"/>
    <meta name="author" content="Basetax - easy tax return, online accountant" />

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="js/plugin/boostrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="js/plugin/boostrap/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="js/plugin/owl-carousel/owl.carousel.css">
	<link rel="stylesheet" href="js/plugin/input/themes/default/css/uniform.default.css">
	<link rel="stylesheet" href="css/reset_set_me.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">
</head>
<body>

<nav id="nav-top">
    <div class="container-h nav-top-content cleared">
        <div class="nav-mb cleared">
            <div class="rmm-button"><span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span></div>
        </div>
        <div class="main-header-nav cleared">
            <ul class="nb-ab cleared">
                <?php
                    if ($_SERVER['SERVER_NAME'] == 'localhost') {
                        $base_url="http://".$_SERVER['SERVER_NAME'].'/taxmapp/trunk';
                    } else {
                        $base_url="http://".$_SERVER['SERVER_NAME'].'/';
                    }
                ?>
                 <li><a href="<?php echo $base_url ?>/index.php">Home</a></li>
				<li><a href="about.php">About</a></li>
                <li><a href="pricing.php">Pricing</a></li>
                <?PHP  if (isset($_COOKIE['TOKEN'])) {
                ?>
                <!--                <li><a href="javascript:void(0)" onclick="switchDashboard()"-->
                <!--				   class="menu-item-object-page fixpadding">Dashboard</a></li>-->
                <li>
                    <a href="<?php echo $base_url ?>/taxmapp/#/dashboard"
                       class="menu-item-object-page fixpadding">Dashboard</a>
                </li>
                <li>
                    <a href="javascript:void(0)" onclick="logout()"
                       class="menu-item-object-page fixpadding">Logout</a>
                </li>
            </ul>
            <?php
            } else {
                ?>
                <div class="form-sg-top cleared">
                    <div class="form-nav">
                        <input name="email" id="inputEmail" placeholder="Email" />
                    </div>
                    <div class="form-nav">
                        <input type="password" name="password" id="inputPassword" placeholder="Password" />
                    </div>
                    <button type="submit" onclick="loginApp()" class="btn-login">Login</button>
                </div>
            <?Php } ?>
            <?php
            if (!isset($_COOKIE['TOKEN'])) {
                ?>
                <ul class="nb-ab m-r-0 cleared">
                    <li>
                        <a href="register.php">Register</a>
                    </li>
                    <li><a class="forgot-pass" href="#">Forgotten your password?</a></li>
                </ul>
            <?php
            }
            ?>
        </div>
    </div>
</nav>

<br>
<div class="jumbotron">
    <div class="container">
        <h1>About Us</h1>
		<br>
        <p>Basetax is a leading UK tax service provider for individuals, expatriates, partnerships and small businesses. It delivers the tax solution to our customers through a combination of our bespoke tax software and personalised tax advice service. Basetax is also a registered tax agent with Her Majesty's Revenue and Customs (HMRC) in the UK.</p>
    </div>
</div>
<div class="faq-pricing">
	<div class="container">
	    
		<br>
		<br>
	    <div class="col-md-10">
		<div class="col-md-2 text-center">
	        <img src="images/somersethouse.jpg" alt="">
	    </div>
		
	        <ul class="list-FAQ">
			<p> </p>
	            <li>
	                <h3>Our History</h3>
					 <p>Basetax was founded in 2012 by a chartered accountant who has worked in both private practice and large corporation in London.</p>
            <p>In 2013 Basetax became one of the selective record keeping apps that appear on HMRC's list of software suppliers that have produced simple record keeping applications.</p>
            <p>In 2014 Basetax tax filing software was accepted to be recognised supplier that provides software for tax returns and supplementary pages by HMRC. </p>
          
			   </li>
				<br>
				<br>
				<li>
	                <h3>Our Team</h3>
					
	                <p>The Basetax team is highly experienced and have spent their careers helping countless individuals and businesses with their tax affairs using combination of leading edge tax software and update to date knowledge in local tax legislations. Most of the team members are qualified accountants or tax specialists. </p>
	            </li>
				<br>
				<br>
				 <li>
	                <h3>Am I locked into a contract?</h3>
					
	                <p>No, you can easily cancel your account from within Basetax and you can download your data at any time.</p>
	            </li>
				<br>
				<br>
				 <li>
	                <h3>Are there any set-up fees?</h3>
					
	                <p>No, there are no set-up fees of any kind.</p>
	            </li>
				<br>
	        </ul>
	    </div>
	</div>
</div>

<div class="main-limitcompany">
	<div class="container-h">
		<div class="br-limit-company">
			<h1>Our History</h1>
			 <p>Basetax was founded in 2012 by a chartered accountant who has worked in both private practice and large corporation in London.</p>
            <p>In 2013 Basetax became one of the selective record keeping apps that appear on HMRC's list of software suppliers that have produced simple record keeping applications.</p>
            <p>In 2014 Basetax tax filing software was accepted to be recognised supplier that provides software for tax returns and supplementary pages by HMRC. </p>
	<br>
	<br>
            <h2>Our Team</h2>
            <p>The Basetax team is highly experienced and have spent their careers helping countless individuals and businesses with their tax affairs using combination of leading edge tax software and update to date knowledge in local tax legislations. Most of the team members are qualified accountants or tax specialists. </p>
       <br>
	    <br>
		<br>
		<br>
</div>
</div>
<div id="footer-page-pay" class="block-ft-pay">
	<div class="container">
        <div class="col-md-3">
            <h4>Connect</h4>
            <ul>
                <li><a href="https://www.facebook.com/basetaxuk" target="_blank">Facebook</a></li>
                <li><a href="https://plus.google.com/118351154355754232374/posts" target="_blank">Google+</a></li>
                <li><a href="https://twitter.com/basetax" target="_blank">Twitter</a></li>
            </ul>
        </div>
        <div class="col-md-4">
            <h4>Information</h4>
            <ul>
                <li><a href="#">Basetax Limited</a></li>
                <li><a href="#">Exchange at Somerset House</a></li>
                <li><a href="#">South Wing, Strand</a></li>
                <li><a href="#">London</a></li>
                <li><a href="#">WC2R 1LA</a></li>
            </ul>
        </div>
        <div class="col-md-5">
            <h4>Newsletter</h4>
            <p class="m-b-10">New features &amp; important announcements</p>
            <form id="signup-form" method="post" action="#" class="form-inline input-signup" role="form">
                <div class="input-group">
                    <input type="email" class="form-control" name="email-signup" id="email-signup" style="color: #fff" placeholder="EMAIL ADDRESS">
                    <span class="input-group-btn">
                        <button class="btn btn-get-star" type="submit">SIGN UP</button>
                    </span>
                </div>
            </form>
            <p class="text-center text-small-end">WE PROMISE TO NEVER SHARE YOUR INFORMATION!</p>
        </div>
    </div>
</div>
<footer>
    <div class="container">
	    <div class="row">
		    <div class="col-md-12">
			    <div id="colophon" class="site-footer" role="contentinfo">
				    <div class="site-info text-center">
                        &copy; Copyright 2014-2015 <span class="color-green">BaseTax</span> - All Rights Reserved
				    </div>
			    </div>
		    </div>
	    </div>
    </div>
</footer>

	<script src="js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/plugin/boostrap/bootstrap.min.js"></script>
	<script type="text/javascript">
      $(document).ready(function() {
      });
    </script>
</body>
</html>