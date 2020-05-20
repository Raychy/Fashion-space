<!DOCTYPE html>
<!--[if IE 9]>         <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>Posts</title>

        <?php include ('includes/header.php'); ?>
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
                        <!-- Datatables Header -->
                        <div class="content-header">
                            
                        </div>
                        <ul class="breadcrumb breadcrumb-top">
                            <li>Comments</li>
                           
                        </ul>
                        <!-- END Datatables Header -->

                        <!-- Datatables Content -->
                        <div class="block full">
                            <div class="block-title">
                                <h2><strong>Comments</strong> </h2>
                            </div>
                            

                            <div class="table-responsive">
                                <table id="example-datatable" class="table table-vcenter table-condensed table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center">S/N</th>
                                            <th class="text-center">Name</th>
                                            <th class="text-center">Comments</th>
                                            <th class="text-center">Title</th>
                                            <th class="text-center">Submission Date</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td class="text-center">research</td>
                                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam iste beatae cum ratione itaque minima 
                                                mollitia repudiandae,
                                                 possimus consectetur recusandae libero dolorum harum praesentium excepturi facilis porro, fugiat distinctio rem.
                                                    <br><a href="" class="btn btn-warning btn-sm ">Approve</a>
                                                </td>
                                            <td>Ankara</td>
                                            <td>22 march,2929</td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                       
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- END Datatables Content -->
                    </div>
                    <!-- END Page Content -->

                  <?php include ('includes/footer.php'); ?>
                  </body>
</html>