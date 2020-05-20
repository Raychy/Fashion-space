<!DOCTYPE html>
<!--[if IE 9]>         <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>media</title>

        <?php include ('includes/header.php'); ?>
    </head>
    <body>
        <!-- Page Wrapper -->
        <!-- In the PHP version you can set the following options from inc/config file -->
        <!--
            Available classes:

            'page-loading'      enables page preloader
        -->
        <div id="page-wrapper">
            <!-- Preloader -->
            <?php include ('includes/sidebar.php'); ?>
                <!-- END Main Sidebar -->

                <!-- Main Container -->
                <div id="main-container">
                    <!-- Header -->
                    <?php include ('includes/main-header.php'); ?>
                    <!-- Page content -->
                    <div id="page-content">
                        <!-- Gallery Header -->
                        <div class="content-header">
                            <div class="header-section">
                                <h1>
                                    <i class="fa fa-picture-o"></i>Library<br>
                                </h1>
                            </div>
                        </div>
                        <ul class="breadcrumb breadcrumb-top">
                            <li>Library</li>
                            <!-- <li><a href="">Library</a></li> -->
                        </ul>
                        <!-- END Gallery Header -->

                        <!-- Lightbox functionality is based on Magnific Popup plugin (initialized in js/app.js -> uiInit()) -->

                        <!-- Single Image Block -->
                        
                        <!-- END Single Image Block -->
                        <div class="block full hidden-xs">
                            <!-- Upload Title -->
                            <div class="block-title">
                                <div class="block-options pull-right">
                                    <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></a>
                                </div>
                                <h2><i class="fa fa-cloud-upload"></i> Upload <strong>File</strong></h2>
                            </div>
                            <!-- END Upload Title -->

                            <!-- Upload Content -->
                            <form action="library.php" class="dropzone">
                                <div class="fallback">
                                    <input name="file" type="file" multiple />
                                  </div>
                                  <button class="btn btn-primary savefile" type="submit">Save</button>
                            </form>
                            <!-- END Upload Content -->
                        </div>
                        <!-- Galleries Row -->
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Lightbox Gallery Block -->
                                <div class="block">
                                    <!-- Lightbox Gallery Title -->
                                    <div class="block-title">
                                        <h2><strong>Library</strong></h2>
                                    </div>
                                    
                                    <div class="gallery" data-toggle="lightbox-gallery">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <a href="img/placeholders/photos/photo1.jpg" class="gallery-link" title="Image Info">
                                                    <img src="img/placeholders/photos/photo1.jpg" alt="image">
                                                </a>
                                            </div>
                                            <div class="col-sm-3">
                                                <a href="img/placeholders/photos/photo2.jpg" class="gallery-link" title="Image Info">
                                                    <img src="img/placeholders/photos/photo2.jpg" alt="image">
                                                </a>
                                            </div>
                                            <div class="col-sm-3">
                                                <a href="img/placeholders/photos/photo3.jpg" class="gallery-link" title="Image Info">
                                                    <img src="img/placeholders/photos/photo3.jpg" alt="image">
                                                </a>
                                            </div>
                                            <div class="col-sm-3">
                                                <a href="img/placeholders/photos/photo4.jpg" class="gallery-link" title="Image Info">
                                                    <img src="img/placeholders/photos/photo4.jpg" alt="image">
                                                </a>
                                            </div>
                                            <div class="col-sm-3">
                                                <a href="img/placeholders/photos/photo5.jpg" class="gallery-link" title="Image Info">
                                                    <img src="img/placeholders/photos/photo5.jpg" alt="image">
                                                </a>
                                            </div>
                                            <div class="col-sm-3">
                                                <a href="img/placeholders/photos/photo6.jpg" class="gallery-link" title="Image Info">
                                                    <img src="img/placeholders/photos/photo6.jpg" alt="image">
                                                </a>
                                            </div>
                                            <div class="col-sm-3">
                                                <a href="img/placeholders/photos/photo7.jpg" class="gallery-link" title="Image Info">
                                                    <img src="img/placeholders/photos/photo7.jpg" alt="image">
                                                </a>
                                            </div>
                                            <div class="col-sm-3">
                                                <a href="img/placeholders/photos/photo8.jpg" class="gallery-link" title="Image Info">
                                                    <img src="img/placeholders/photos/photo8.jpg" alt="image">
                                                </a>
                                            </div>
                                           
                                        </div>
                                    </div>
                                    <!-- END Lightbox Gallery Content -->
                                </div>
                                <!-- END Lightbox Gallery Block -->
                            </div>
                            
                        </div>
                        <!-- END Galleries Row -->

                        <!-- Grid Gallery Block -->
                        
                        <!-- END Grid Gallery Block -->
                    </div>
                    <!-- END Page Content -->

                    <?php include ('includes/footer.php'); ?>
    </body>
</html>