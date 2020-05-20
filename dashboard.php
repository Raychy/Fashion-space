<!DOCTYPE html>
<!--[if IE 9]>         <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>Dashboard</title>
            <?php include 'includes/header.php'; ?>
    </head>
    <body>
  
        <div id="page-wrapper">
           
      
                <!-- Main Sidebar -->
                <?php include ('includes/sidebar.php'); ?>
                <!-- END Main Sidebar -->

                <!-- Main Container -->
                <div id="main-container">
                    <!-- Header -->
          
                    <?php include ('includes/main-header.php'); ?>
                    <!-- END Header -->

                    <!-- Page content -->
                    <div id="page-content">
                        <!-- Dashboard Header -->
                        <!-- For an image header add the class 'content-header-media' and an image as in the following example -->
                        <div class="content-header content-header-media">
                            <div class="header-section">
                                <div class="row">
                                    <!-- Main Title (hidden on small devices for the statistics to fit) -->
                                    <div class="col-md-4 col-lg-6 hidden-xs hidden-sm">
                                        <h1>Welcome <strong>Admin</strong><br><small>You Look Awesome!</small></h1>
                                    </div>
                                    <!-- END Main Title -->

                                    <!-- Top Stats -->
                                    <div class="col-md-8 col-lg-6">
                                        <div class="row text-center">
                                            <div class="col-xs-4 col-sm-3">
                                                <h2 class="animation-hatch">
                                                    <strong>93.7k</strong><br>
                                                    <small><i class="fa fa-thumbs-o-up"></i> Comments</small>
                                                </h2>
                                            </div>
                                            <div class="col-xs-4 col-sm-3">
                                                <h2 class="animation-hatch">
                                                    <strong>167k</strong><br>
                                                    <small><i class="fa fa-heart-o"></i> Likes</small>
                                                </h2>
                                            </div>
                                            <div class="col-xs-4 col-sm-3">
                                                <h2 class="animation-hatch">
                                                    <strong>101</strong><br>
                                                    <small><i class="fa fa-calendar-o"></i> Posts</small>
                                                </h2>
                                            </div>
                                            <!-- We hide the last stat to fit the other 3 on small devices -->
                                           
                                        </div>
                                    </div>
                                    <!-- END Top Stats -->
                                </div>
                            </div>
                            <!-- For best results use an image with a resolution of 2560x248 pixels (You can also use a blurred image with ratio 10:1 - eg: 1000x100 pixels - it will adjust and look great!) -->
                            <img src="img/placeholders/headers/dashboard_header.jpg" alt="header image" class="animation-pulseSlow">
                        </div>
                        <!-- END Dashboard Header -->

                        <!-- Mini Top Stats Row -->
                    
                        <!-- END Mini Top Stats Row -->

                        <!-- Widgets Row -->
                        <div class="row">
                            <div class="col-md-6">
                                <!-- Timeline Widget -->
                                <div class="widget">
                                    <div class="widget-extra themed-background-dark">
                                       
                                        <h3 class="widget-content-light">
                                            Latest <strong>Posts</strong>
                                            <small><a href="all-post.php"><strong>View all</strong></a></small>
                                        </h3>
                                    </div>
                                    <div class="widget-extra">
                                        <!-- Timeline Content -->
                                        <div class="timeline">
                                            <ul class="timeline-list">
                                               
                                                <li class="active">
                                                    <div class="timeline-icon themed-background-fire themed-border-fire"><i class="fa fa-file-text"></i></div>
                                                    <div class="timeline-time"><small>5 min ago</small></div>
                                                    <div class="timeline-content">
                                                        <p class="push-bit"><a href="page_ready_user_profile.html"><strong>Administrator</strong></a></p>
                                                        <strong>Free courses</strong> for all our customers at A1 Conference Room - 9:00 <strong>am</strong> tomorrow!
                                                    </div>
                                                </li>
                                               
                                                <li class="text-center">
                                                    <a href="all-post.php" class="btn btn-xs btn-default">View more..</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- END Timeline Content -->
                                    </div>
                                </div>
                                <!-- END Timeline Widget -->
                            </div>
                            <div class="col-md-6">
                                <!-- Your Plan Widget -->
                                <div class="widget">
                                    <div class="widget-extra themed-background-dark">
                                       
                                        <h3 class="widget-content-light">
                                             Latest <strong>Comments</strong>
                                            <small><a href="comment.php"><strong>view all</strong></a></small>
                                        </h3>
                                    </div>
                                    <div class="widget-extra-full">
                                        <ul class="timeline-list">
                                               
                                            <li class="active">
                                                <div class="timeline-icon themed-background-fire themed-border-fire"><i class="fa fa-file-text"></i></div>
                                                <div class="timeline-time"><small>5 min ago</small></div>
                                                <div class="timeline-content">
                                                    <p class="push-bit"><a href="page_ready_user_profile.html"><strong>Administrator</strong></a></p>
                                                    <strong>Free courses</strong> for all our customers at A1 Conference Room - 9:00 <strong>am</strong> tomorrow!
                                                </div>
                                            </li>
                                           
                                            <li class="text-center">
                                                <a href="all-post.php" class="btn btn-xs btn-default">View more..</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- END Your Plan Widget -->

                                <!-- Weather Widget -->
                            
                                <!-- END Weather Widget-->

                                <!-- Advanced Gallery Widget -->
                            
                                <!-- END Advanced Gallery Widget -->
                            </div>
                        </div>
                        <!-- END Widgets Row -->
                    </div>
                    <!-- END Page Content -->

                    <?php include ('includes/footer.php'); ?>
              
    </body>
</html>