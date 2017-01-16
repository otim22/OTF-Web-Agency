<?php include 'inc/head.php'; ?>

<body>

    <div id="wrapper"  >

            <?php include 'inc/header.php'; ?>
            <?php include 'inc/menu.php'; ?>
            

<div class="top-title-wrapper">
            
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
                                        Partner with Us
                                    </h3>
                                    <p class="body_paragraph contact-paragraph">
                                        We appreciate your interest in dricks and are looking forward to hearing from 
										you. As a leading full-service website development and web design agency, dricks 
										has the experience and the expertise necessary to achieve your business, brand 
										and customer goals. Our services include web design, web development, company 
										identity, web hosting, search engine marketing, and website maintenance. 
                                    </p>

                                    <form class="form-wrapper" id="contact-form" method="post" role="form" novalidate>


                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-xs-7">
                                                    <label for="name">
                                                        Name *
                                                    </label>
                                                    <input type="text" id="name" name="name" class="form-control" data-errmsg="Name is required."
                                                           minlength="2" placeholder="Your Name" required/>
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
                                                           minlength="2" placeholder="Your Email" required/>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-xs-7">
                                                    <label for="message">
                                                        Subject
                                                    </label>
                                                    <input type="text" id="subject" name="subject" class="form-control"
                                                           placeholder="Your Subject"/>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-xs-8">
                                                    <label for="message">
                                                        Message *
                                                    </label>
                                                    <textarea id="message" name="message" class="form-control" data-errmsg="Message is required."
                                                              placeholder="Your Message" rows="3" required></textarea>
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
                                            Contact Us
                                        </h3>
                                        <div class="sidebar-icon-item">
                                            <i class="icon-phone"></i> (+256) 706-248-225
                                        </div>
                                        <div class="sidebar-icon-item">
                                            <i class="icon-email"></i> info@dricks.com
                                        </div>
                                        <div class="sidebar-icon-item">
                                            <i class="icon-home"></i> Shumuk House, Kampala.
                                        </div>
                                    </div>

                                    <div class="sidebar-block">
                                        <h3 class="h3-sidebar-title">
                                            MARKETING DEPARTMENT
                                        </h3>
                                        <p>
                                            <strong>Address: </strong>Shumuk House, Kampala
                                            <br />
                                            <strong>Phone:</strong> (+256) 782-063-176
                                            <br />
                                            <strong>Email: </strong>sales@dricks.com
                                        </p>
                                    </div>
                                    <div class="sidebar-block">
                                        <h3 class="h3-sidebar-title">
                                            Socials
                                        </h3>


                                        <div class="social-icons">
                                    <ul>
                                        <li>
                                            <a href="#" target="_blank" class="social-media-icon facebook-icon" data-original-title="facebook">facebook</a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" class="social-media-icon twitter-icon" data-original-title="twitter">twitter</a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" class="social-media-icon googleplus-icon" data-original-title="googleplus">googleplus</a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" class="social-media-icon pininterest-icon" data-original-title="pininterest">pininterest</a>
                                        </li>
                                    </ul>

                                </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--.content-wrapper end -->

            <?php include 'inc/footer.php'; ?>