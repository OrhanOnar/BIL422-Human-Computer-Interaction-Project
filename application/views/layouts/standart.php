<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7 "> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]><html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>

<?php $this->load->view("containers/head"); ?>

</head>

<body class="home-page home template-slider style-simple layout-full-width mobile-tb-left mobile-wide header-classic header-fw minimalist-header sticky-header sticky-white ab-hide subheader-title-left menuo-right menuo-no-borders footer-copy-center no-js">

    <?php $this->load->view("containers/header"); ?>
    <!-- Main Theme Wrapper -->
    <div id="Wrapper">
        <!-- Header Wrapper -->
        <div id="Header_wrapper">
            <!-- Header -->
            <header id="Header">

                <!-- Header -  Logo and Menu area -->
                
                <!-- Revolution slider area-->
                
            </header>
        </div>
        <!-- Main Content -->
        <div id="Content">
            <?php $this->load->view("subviews/".$subview); ?>
        </div>
        <!-- Footer-->
        <footer id="Footer" class="clearfix">
            <?php $this->load->view("containers/footer"); ?>
            <!-- Footer copyright-->
            
        </footer>
    </div>
    
    <?php $this->load->view("containers/foot"); ?>

</body>

</html>