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
                                
                                    <!-- Basic Form Elements Content -->
                                    
                            </div>
                        </div>
                        <form action="">
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
                               
                                    
                                  
                                        
                                    <div class="form-group">
                                        <input type="text" name="title" id="" placeholder="Add Title" class=" form-control title input-lg"> 
                                    </div>
                                    <div class="form-group">
							                <textarea id="txtEditor"  value="description"></textarea>  
                                    </div>


                                    <div id="btnModal">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Select Media</button>
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
                                            <select name="" id="" class="form-control">
                                                <option value="">Categories 1</option>
                                            </select>
                                        </div><hr>
                                        <h3>Tags</h3>
                                        <div>
                                       <select name="" id="" class="form-control">
                                           <option value="">tag 1</option>
                                       </select>
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
                        </form>
                        </div>

                  <div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modall" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form>
                            <div class="form-group">
                              <input type="file" class="form-control" >
                            </div>
                          </form>
                          <div class="row">
                            <div class="col-md-12">
                                <!-- Lightbox Gallery Block -->
                                <div class="block">
                                   
                                  
                                    <div class="gallery " data-toggle="lightbox-gallery">
                                       
                                            <select multiple="multiple" class="image-picker imgp" >
                                                <option data-img-src="img/placeholders/photos/photo1.jpg" value="1" >Cute Kitten 1</option>
                                                <option data-img-src="img/placeholders/photos/photo2.jpg" value="2" >Cute Kitten 2</option>
                                                <option data-img-src="img/placeholders/photos/photo3.jpg" value="3" >Cute Kitten 3</option>
                                                <option data-img-src="img/placeholders/photos/photo4.jpg" value="4" >Cute Kitten 4</option>
                                              </select>
                                        
                                    </div>
                                    <!-- END Lightbox Gallery Content -->
                                </div>
                                <!-- END Lightbox Gallery Block -->
                            </div>
                            
                        </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Upload</button>
                        </div>
                      </div>
                    </div>
                  </div>  

                    <!-- Footer -->
                    <?php include ('includes/footer.php'); ?>

                    <script src="js/myjs.js" ></script>
        <!-- Load and execute javascript code used only in this page -->
        
 
    </body>
</html>