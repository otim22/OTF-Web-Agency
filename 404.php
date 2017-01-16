<?php include 'inc/head.php'; ?>

<body class="contact">
<div id="page" class="hfeed site">
    <header id="masthead" class="site-header" role="banner">
        <?php include 'inc/header.php'; ?>
        <div class="clear"></div>

        <?php include 'inc/menu.php'; ?>

        <div class="top-title-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="page-info">
                                    <h1 class="h1-page-title">Error 404</h1>

									<h2 class="h2-page-desc">
                                        Page Not Found
                                    </h2>

                                    <!-- BreadCrumb -->
                                    <div class="breadcrumb-container">
                                        <ol class="breadcrumb">
                                            <li>
                                                <a href="">Home</a>
                                            </li>
                                            <li class="active">404 </li>
                                        </ol>
                                    </div>
                                    <!-- BreadCrumb -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <div class="loading-container">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>


            <div class="content-wrapper hide-until-loading">
                <div class="body-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">

                                <div class="not-found-404">
                                    <h2>404<i class="iscon-remove-sign skin-text"></i></h2>
                                    <p>We're sorry, the page you were looking for is still under development.</p>

                                    <form action="#" id="search-form" class="form-wrapper">

                                        <div class="search-404">

                                            <input type="text" name="search" class="inputStyle search-text"/>
                                            <input type="submit" value="Search" class="search-submit"/>

                                        </div>
                                    </form>                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--.content-wrapper end -->
					
            <?php include 'inc/footer.php'; ?>