<!DOCTYPE html>
<!--[if IE 9]>         <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>Category</title>
        <?php include ('includes/header.php'); ?>
        
       
    </head>
    <body>

        <div id="page-wrapper">
           
                <?php include ('includes/sidebar.php'); ?>
                <!-- END Main Sidebar -->

                <!-- Main Container -->
                <div id="main-container">
                    <!-- Header -->
                    <?php include ('includes/main-header.php'); ?>
                    <!-- END Header -->

                    <!-- Page content -->
                    <div id="page-content">
                        <!-- Forms General Header -->
                        <div class="content-header">
                            <div class="header-section">
                                <h1>
                                    <i class="gi gi-notes_2"></i>Categories<br>
                                </h1>
                            </div>
                        </div>
                        <ul class="breadcrumb breadcrumb-top" style="padding: 15px;">
                        <li><a href="">Category</a></li>
                            <!-- <li>Add Post</li> -->
                            
                        </ul>
                        <!-- END Forms General Header -->

                        <div class="row">
                            <div class="col-md-5 left-scrolling">
                                <!-- Basic Form Elements Block -->
                                <div class="block">
                                    <!-- Basic Form Elements Title -->
                                    <div class="block-title">
                                        <div class="block-options pull-right">
                                            <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default toggle-bordered enable-tooltip" data-toggle="button" title="Toggles .form-bordered class">No Borders</a>
                                        </div>
                                        <h2><strong>Add New Category</strong> </h2>
                                    </div>
                                    <!-- END Form Elements Title -->

                                    <!-- Basic Form Elements Content -->
                                    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" >
                                        
                                    <div class="form-group">
                                        <label for="">Name</label>
                                        <input type="text" name="title" id="" placeholder="name" class=" form-control  input-lg"> 
                                    </div>
                                    <div class="form-group">
                                        <label for="">Description</label>
                                        <textarea name="" id=""  rows="10" class="form-control"></textarea>
                                    </div>
                                    <button class="btn btn-primary" type="submit" >Add New Category</button>
                                   
                                    </form>
                                    <!-- END Basic category Content -->
                                   
                                </div>
                                <!-- END Basic Form Elements Block -->
                            </div>
                            <div class="col-md-7 ">
                                <!-- Horizontal Form Block -->
                                <div class="block right-scrolling">
                                    <!-- Horizontal Form Title -->
                                    <div class="block-title">
                                        <div class="block-options pull-right">
                                            <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default toggle-bordered enable-tooltip" data-toggle="button" title="Toggles .form-bordered class">No Borders</a>
                                        </div>
                                        <h2><strong>All Categories</strong> </h2>
                                    </div>
                                    

                                    <div class="table-responsive">
                                        <table id="example-datatable" class="table table-vcenter table-condensed table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">S/N</th>
                                                    <th class="text-center">Name</th>
                                                    <th>Description</th>
                                                   
                                                    <th class="text-center">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td class="text-center">research</td>
                                                    <td>tolu</td>
                                                    
                                                    <td class="text-center">
                                                        <div class="btn-group">
                                                        <button  title="Edit" id="mymodalbtn" class="btn btn-xs btn-default" data-toggle=" tooltip modal" data-target="#exampleModalLong"><i class="fa fa-pencil"></i></button>
                                                            <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                               
                                                
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th class="text-center">S/N</th>
                                                    <th class="text-center">Name</th>
                                                    <th>Description</th>
                                                   
                                                    <th class="text-center">Actions</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                   

                                    </div>
                                </div>
                              
                            </div>

                        </div>
                        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Update Tag</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" >
      <div class="modal-body">
     
                                        
               <div class="form-group">
           <label for="">Name</label>
                                            <input type="text" name="title" id="" placeholder="name" class=" form-control  input-lg"> 
                                        </div>
                                        <div class="form-group">
                                            <label for="">Description</label>
                                            <textarea name="" id=""  rows="10" class="form-control"></textarea>
                                        </div> &nbsp; &nbsp; &nbsp;
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save New Tags</button>
                                        
      </div>
     
    </form>
    </div>
  </div>
</div>
                     
                        <?php include ('includes/footer.php'); ?>
 
    </body>
</html>