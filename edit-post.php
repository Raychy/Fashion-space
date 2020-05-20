<!DOCTYPE html>
<!--[if IE 9]>         <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>Addpost</title>
        <?php include ('includes/header.php'); ?>
        <link href="css/editor.css" type="text/css" rel="stylesheet"/>

    <style>
        .title:placeholder-shown{
           border-color:red;
         }
        .title{
           font-size:30px;
           padding:15px;
            font-weight:bold;
        }
    </style>
    </head>
    <body>

        <div id="page-wrapper">
           
         
                <!-- Alternative Sidebar -->
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
                                    <i class="gi gi-notes_2"></i>New post<br>
                                </h1>
                            </div>
                        </div>
                        <ul class="breadcrumb breadcrumb-top" style="padding: 15px;">
                        <li><a href="all-post.php">All Post</a></li>
                            <li>Add Post</li>
                            <li style="float: right !important;"><button class="btn btn-primary" >Publish</button></li>
                        </ul>
                        <!-- END Forms General Header -->

                        <div class="row">
                            <div class="col-md-9 left-scrolling">
                                <!-- Basic Form Elements Block -->
                                <div class="block">
                                    <!-- Basic Form Elements Title -->
                                    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" >
                                    <div class="block-title">
                                       
                                        <h2><strong>Post</strong> </h2>
                                    </div>
                               

                                    <!-- Basic Form Elements Content -->
                                   
                                        
                                    <div class="form-group">
                                        <input type="text" name="title" id="" placeholder="Add Title" class=" form-control title input-lg"> 
                                    </div>
                                    <div class="form-group">
							                <textarea id="txtEditor"  value="description"></textarea>  
                                    </div>

                                    <!-- optional textarea -->
                                    <div class="form-group">
                                        <input type="file" name="" id="">
                                        <input type="file" name="" id="">
                                       
                                    </div> 
                                    <div class="form-group">
                                            <textarea name="" id="" cols="30" rows="10" class=" form-control " placeholder="start writing"></textarea>
                                    </div>    
                                    <div class="form-group">
                                        <input type="file" name="" id="">
                                        <input type="file" name="" id="">
                                        
                                    </div>    
                                     <!--end optional textarea -->
                                    </form>
                                    
                                </div>
                                <!-- END Basic Form Elements Block -->
                            </div>
                            <div class="col-md-3 right-scrolling">
                                <!-- Horizontal Form Block -->
                                <div class="block">
                                    <!-- Horizontal Form Title -->
                                    <div class="block-title">
                                        
                                        <h2><strong>Document</strong> </h2>
                                    </div>
                                    


                                <div class="expand-collapse">
                                        <h3>Categories</h3>
                                        <div>
                                            <ul type="none">
                                                <li><input type="checkbox" name="" id="">sample</li>
                                            </ul> 
                                        </div><hr>
                                        <h3>Tags</h3>
                                        <div>
                                        <ul type="none">
                                                <li><input type="checkbox" name="" id="">Tags</li>
                                            </ul> 
                                        </div><hr>
                                        <h3>Featured Image</h3>
                                        <div>
                                            <div class="containerr"><br>
                                                <!-- <label class="label" for="input">Please upload a picture !</label> -->
                                            
                                                <div class="input">
                                                    <input name="input" id="file" type="file">
                                                </div>
                                            </div>
                                        </div><hr>

                                </div>

                                </div>
                                </div>
                              
                            </div>
                        </div>
                  

                     

                    <!-- Footer -->
                    <?php include ('includes/footer.php'); ?>
        <!-- Load and execute javascript code used only in this page -->
        
 
    </body>
</html>