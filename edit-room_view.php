<?php 
session_start();
require_once('header-admin.php'); 
require_once('edit-room_controlleur.php');?>
<div class="container-fluid body-section container">
            <div class="row">
                <div class="col-md-12">
                    <h2><i class="fa fa-plus-square"></i> Edit Room <small> Don't Forget To Insert Images Again</small></h2>
                    
                   
                    <div class="row">
                        <div class="col-xs-12">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="title">Room Name:*</label>
                                    
                                    <input type="text" name="title" placeholder="Type de chambre !" value="<?php if(isset($title)){echo $title;}?>" class="form-control">
                                </div>
                                
                                <div class="form-group">
                                    <label for="title">Room Description:*</label>
                                    <textarea name="post-data" id="textarea" rows="10" class="form-control"><?php if(isset($post_data)){echo $post_data;}?></textarea>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="size">Size:*</label>
                                            <input type="text" name="size" placeholder="Type Size Here " value="<?php if(isset($title)){echo $size;}?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="title">Price:*</label>
                                            <input type="text" name="price" placeholder="Type Price Here " value="<?php if(isset($title)){echo $price;}?>" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="file">Image 1:*</label>
                                            <input type="file" name="image1">
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="file">Image 2:*</label>
                                            <input type="file" name="image2">
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="file">Image 3:*</label>
                                            <input type="file" name="image3">
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="file">Image 4:*</label>
                                            <input type="file" name="image4">
                                        </div>
                                    </div>
                                </div>
                                
                                <input type="submit" class="btn btn-primary" value="Edit Room" name="submit">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php require_once('footer-admin.php'); ?>
