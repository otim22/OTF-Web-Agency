<?php
// Functions to filter user inputs
function filterName($field){
    // Sanitize full names
    $field = filter_var(trim($field), FILTER_SANITIZE_STRING);
    
    // Validate full names
    if(filter_var($field, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+/")))){
        return $field;
    }else{
        return FALSE;
    }
}    

function filterEmail($field){
    // Sanitize e-mail address
    $field = filter_var(trim($field), FILTER_SANITIZE_EMAIL);
    
    // Validate e-mail address
    if(filter_var($field, FILTER_VALIDATE_EMAIL)){
        return $field;
    }else{
        return FALSE;
    }
}
    
function filterString($field){
    // Sanitize string
    $field = filter_var(trim($field), FILTER_SANITIZE_STRING);
    if(!empty($field)){
        return $field;
    }else{
        return FALSE;
    }
}
 
// Define variables and initialize with empty values
$fullnameErr = $emailErr = $phoneErr = $messageErr = "";
$fullname = $email = $organ = $phone = $url = $message = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate full name
    if(empty($_POST["name"])){
        $fullnameErr = 'Please enter your Full names.';
    }else{
        $fullname = filterName($_POST["name"]);
        if($fullname == FALSE){
            $fullnameErr = 'Please enter a valid Full names.';
        }
    }
    
    // Validate email address
    if(empty($_POST["email"])){
        $emailErr = 'Please enter your email address.';     
    }else{
        $email = filterEmail($_POST["email"]);
        if($email == FALSE){
            $emailErr = 'Please enter a valid email address.';
        }
    }
	
	// Validate organization
    if(empty($_POST["organization"])){
        $organ = "";
    }else{
        $organ = filterString($_POST["organization"]);
    }
	
	// Validate phone
    if(empty($_POST["phone"])){
        $phone = "";
    }else{
        $phone = filterString($_POST["phone"]);
    }
    
    // Validate url
    if(empty($_POST["url"])){
        $url = "";
    }else{
        $url = filterString($_POST["url"]);
    }
    
    // Validate Project-details
    if(empty($_POST["Project-details"])){
        $messageErr = 'Please enter your Details.';     
    }else{
        $message = filterString($_POST["Project-details"]);
        if($message == FALSE){
            $messageErr = 'Please enter a Detailed message.';
        }
    }
    
    // Check input errors before sending email
    if(empty($fullnameErr) && empty($emailErr) && empty($messageErr)){
        // Recipient email address
        $to = 'info@otfwebagency.com';
        
        // Create email headers
        $headers = 'From: '. $email . "\r\n" .
        'Reply-To: '. $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
        
        // Sending email
        if(mail($to, $fullname, $phone, $message, $headers)){
            // echo '<p class="success">Your message has been sent successfully!</p>';
        }else{
            echo '<p class="error">Unable to send email. Please try again!</p>';
        }
    }
}
?>

<?php include 'inc/head.php'; ?>

<body>

    <div id="wrapper"  >

            <?php include 'inc/header.php'; ?>
            <?php include 'inc/menu.php'; ?>
            
            
                <div class="top-title-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="page-info">
                                    <h1 class="h1-page-title">About Us</h1>

                                    <h2 class="h2-page-desc">
                                        Know The Reasons Behind Our Success
                                    </h2>

                                    <!-- BreadCrumb -->
                                    <div class="breadcrumb-container">
                                        <ol class="breadcrumb">
                                            <li>
                                                <a href="index.php">Home</a>
                                            </li>
                                            <li class="active">Contact Us</li>
                                        </ol>
                                    </div>
                                    <!-- BreadCrumb -->
                                </div>
                            </div>
                        </div>
                    </div>
            </div><!--.top wrapper end -->
            <div class="content-wrapper hide-until-loading">
                
                <!-- Contact Map -->
                <div class="body-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-sm-8">
                                <div class="contact-body">
                                    <h3 class="h3-body-title">
                                        Briefly tell us about your project.
                                    </h3>
                                    <p class="body_paragraph contact-paragraph">
                                        Projects are different and needs understanding before quoting price because of our varying needs.  
										In order to be more accurate briefly tell us what kind of project would you want us to develop for you.
										Knowing a little of your project specification, budget, and goals allows us to make recommendations to help you get the most 
										of your money. 
                                    </p>

                                    <form class="form-wrapper" id="contact-form" action="contact-quotation.php" method="post" role="form" novalidate>


                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-xs-7">
                                                    <label for="name">
                                                        Full Names *
                                                    </label>
                                                    <input type="text" id="name" name="name" class="form-control" data-errmsg="Name is required."
                                                           minlength="2" placeholder="Your Full Name" required value="<?php echo $fullname; ?>" />
													<span class="error"><?php echo $fullnameErr; ?></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-xs-7">
                                                    <label for="email">
                                                        Email *
                                                    </label>
                                                    <input type="text" id="email" name="email" class="form-control" data-errmsg="Email is required."
                                                           minlength="2" placeholder="name@example.com" required value="<?php echo $email; ?>" />
													<span class="error"><?php echo $emailErr; ?></span>
                                                </div>
                                            </div>
                                        </div>
										
										<div class="form-group">
                                            <div class="row">
                                                <div class="col-xs-7">
                                                    <label for="organization">
                                                        Organization
                                                    </label>
                                                    <input type="text" id="organization" name="organization" class="form-control" 
                                                           minlength="2" placeholder="Organisation Name" value="<?php echo $organ; ?>"/>
                                                </div>
                                            </div>
                                        </div>
										
										<div class="form-group">
                                            <div class="row">
                                                <div class="col-xs-7">
                                                    <label for="phone">
                                                        Phone Number *
                                                    </label>
                                                    <input type="text" id="phone" name="phone" class="form-control" data-errmsg="Name is required."
                                                           minlength="2" placeholder="Phone Number" required value="<?php echo $phone; ?>" />
                                                </div>
                                            </div>
                                        </div>
										
										<div class="form-group">
                                            <div class="row">
                                                <div class="col-xs-7">
                                                    <label for="url">
                                                        Website URL
                                                    </label>
                                                    <input type="text" id="url" name="url" class="form-control" 
                                                           minlength="2" placeholder="current website url" value="<?php echo $url; ?>" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-xs-7">
                                                    <label for="Project-details">
                                                        Project Details
                                                    </label>
                                                    <textarea id="Project-details" name="Project-details" class="form-control" data-errmsg="Message is required."
                                                              placeholder="Project Details" rows="3" required value="<?php echo $message; ?>"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-2 col-sm-2 offset2">
                                                <input type="submit" value="Submit" class="btn btn-lg" />
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-md-offset-1 col-sm-offset-1">
                                <div class="sidebar">


                                    <div class="sidebar-block">
                                        <h3 class="h3-sidebar-title">
                                            CONTACT US
                                        </h3>
                                        <div class="sidebar-icon-item">
                                            <i class="icon-phone"></i> <a href="tel: +256 706-248-225" target="_blank">(+256) 706-248-225</a>
                                        </div>
                                        <div class="sidebar-icon-item">
                                            <i class="icon-email"></i> <a href="mailto: info@otfwebagency.com" target="_blank">info@otfwebagency.com</a>
                                        </div>
                                        <div class="sidebar-icon-item">
                                            <i class="icon-home"></i> Plot 2, Colville Street Suite 70 <br />
											Shumuk House, Kampala.
                                        </div>
                                    </div>

                                    <div class="sidebar-block">
                                        <h3 class="h3-sidebar-title">
                                            OUR SERVICES
                                        </h3>
                                        <ul class="icons-list check-1 colored-list">
                                    <li><a href="services-web.php">Website development</a></li>
                                </ul><ul class="icons-list check-1 colored-list">
                                    <li><a href="services-app.php">Mobile application development</a></li>
                                </ul><ul class="icons-list check-1 colored-list">
                                    <li><a href="services-host.php">Website hosting</a></li>
                                </ul><ul class="icons-list check-1 colored-list">
                                    <li><a href="services-seo.php">Search Engine Optimization (S.E.O)</a></li>
                                </ul><ul class="icons-list check-1 colored-list">
                                    <li><a href="services-social.php">Social Media Marketing</a></li>
                                </ul><ul class="icons-list check-1 colored-list">
                                    <li><a href="services-consult.php">ICT Consulting</a></li>
                                </ul>
								
                                    </div>
                                    <div class="sidebar-block">
                                        <h3 class="h3-sidebar-title">
                                            Follow Us
                                        </h3>


                                        <div class="social-icons">
                                    <ul>
                                        <li>
                                            <a href="https://web.facebook.com/OTF-Web-Agency-379873045735696/?ref=aymt_homepage_panel" target="_blank" class="social-media-icon facebook-icon" data-original-title="facebook">facebook</a>
                                        </li>
                                        <li>
                                            <a href="https://twitter.com/otfwebagency" target="_blank" class="social-media-icon twitter-icon" data-original-title="twitter">twitter</a>
                                        </li>
                                        <li>
                                            <a href="https://plus.google.com/u/0/collection/o4CPME" target="_blank" class="social-media-icon googleplus-icon" data-original-title="googleplus">googleplus</a>
                                        </li>
                                    </ul>

                                </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="callout-box clearfix">
				<div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">

                                    <div>
                                        <h3>Have a new or need an upgrade of your project to be worked on? Contact us today on telephone as well...</h3>    
										<h1><span class="colored">Call us</span> (+256) 706-248-225</h1>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
            </div><!--.content-wrapper end -->

            <?php include 'inc/footer.php'; ?>