
         
       
       <?php      require_once('admin_header.php'); ?>
     
            <main id="main-container">
                 <div class="content">
                    <div class="row">
                       <div class="col-lg-12">
                           <?php if($this->session->flashdata('SUCCESSMSG')) { ?>
                                   <div role="alert" class="alert alert-success">
                                           <button data-dismiss="alert" class="close" type="button"><span aria-hidden="true">x</span><span class="sr-only">Close</span></button>
                                           <strong>Well done!</strong>
                                           <?=$this->session->flashdata('SUCCESSMSG')?>
                                   </div>
                           <?php } ?>
                       </div>
                    </div>
                 </div>
           
                <div class="content">
                    <div class="row">
                        <div class="col-lg-12">
                      
                            <div class="block">
                                <div class="block-header">
                                    <ul class="block-options">
                                        <li>
                                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                                        </li>
                                    </ul>
                                    <h3 class="block-title">New Color</h3>
                                </div>
                                <div class="block-content block-content-full bg-gray-lighter ">
                                      <form class="form-horizontal"  method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Color Name<span class="text-danger">*</span></label>
                                            <div class="col-md-7">
                                                <input class="form-control" type="text" id="product_name" value="<?php echo set_value('color_name'); ?>" name="color_name" placeholder="Category Name" >
                                                 <div style="margin-top: 0px; color: red;"><?= form_error('color_name'); ?></div>
                                            </div>
                                        </div>
                                          
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Color Code<span class="text-danger">*</span></label>
                                            <div class="col-md-7">
                                                <input class="form-control jscolor jscolor-active" onclick="$(this).addClass('jscolor');" type="text" autocomplete="off" id="colo_code" value="<?php echo set_value('color_code'); ?>" name="color_code" >
                                                 <div style="margin-top: 0px; color: red;"><?= form_error('color_code'); ?></div>
                                            </div>
                                        </div>
                                       
                                        
                                       <div class="form-group">
                                            <div class="col-md-8 col-md-offset-2">
                                                <button class="btn btn-sm btn-primary" name="submit" type="submit"><i class="fa fa-check"></i> Add Color</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                           
                        </div>
                     
                    </div>
                  
                </div>
               
            </main>
        <?php      require_once('admin_footer.php'); ?>
        </div>
    
        <script src="<?php echo base_url(); ?>assets/js/core/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/core/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/core/jquery.slimscroll.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/core/jquery.scrollLock.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/core/jquery.appear.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/core/jquery.countTo.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/core/jquery.placeholder.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/core/js.cookie.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/app.js"></script>
        <script src="<?php echo base_url(); ?>assets/jscolor.js"></script>
        
    </body>
</html>
