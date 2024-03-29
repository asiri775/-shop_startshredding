<?php $__env->startSection('content'); ?>

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row" id="main">

                <!-- Page Heading -->
                <div class="go-title">

                    <h3>Social Links</h3>
                    <div class="go-line"></div>
                </div>
                <!-- Page Content -->
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div id="res">
                            <?php if(Session::has('message')): ?>
                                <div class="alert alert-success alert-dismissable">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <?php echo e(Session::get('message')); ?>

                                </div>
                            <?php endif; ?>
                        </div>
                        <form method="POST" action="<?php echo action('SocialLinkController@update',['id' => $social->id]); ?>" class="form-horizontal form-label-left">
                            <?php echo e(csrf_field()); ?>

                            <input type="hidden" name="_method" value="PATCH">
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="facebook"> Facebook <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="name" class="form-control col-md-7 col-xs-12" name="facebook" placeholder="Phone Number" required="required" type="text" value="<?php echo e($social->facebook); ?>">
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-6">
                                    <?php if($social->f_status == "enable"): ?>
                                        <input type="checkbox" data-toggle="toggle" data-on="Enabled" name="f_status" value="enable" data-off="Disabled" checked>
                                    <?php else: ?>
                                        <input type="checkbox" data-toggle="toggle" data-on="Enabled" name="f_status" value="enable" data-off="Disabled">
                                    <?php endif; ?>
                                    </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="g_plus">Google Plus <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input class="form-control col-md-7 col-xs-12" name="g_plus" placeholder="Phone Number" required="required" type="text" value="<?php echo e($social->g_plus); ?>">
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-6">
                                    <?php if($social->g_status == "enable"): ?>
                                        <input type="checkbox" data-toggle="toggle" data-on="Enabled" name="g_status" value="enable" data-off="Disabled" checked>
                                    <?php else: ?>
                                        <input type="checkbox" data-toggle="toggle" data-on="Enabled" name="g_status" value="enable" data-off="Disabled">
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="twiter"> Twiter <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input class="form-control col-md-7 col-xs-12" data-validate-length-range="6" name="twiter" placeholder="Twitter Link" required="required" type="text" value="<?php echo e($social->twiter); ?>">
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-6">
                                    <?php if($social->t_status == "enable"): ?>
                                        <input type="checkbox" data-toggle="toggle" data-on="Enabled" name="t_status" value="enable" data-off="Disabled" checked>
                                    <?php else: ?>
                                        <input type="checkbox" data-toggle="toggle" data-on="Enabled" name="t_status" value="enable" data-off="Disabled">
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="rss_feed"> Linkedin <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" name="linkedin" placeholder="Linkedin Link" required="required" type="text" value="<?php echo e($social->linkedin); ?>">
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-6">
                                    <?php if($social->link_status == "enable"): ?>
                                        <input type="checkbox" data-toggle="toggle" data-on="Enabled" name="link_status" value="enable" data-off="Disabled" checked>
                                    <?php else: ?>
                                        <input type="checkbox" data-toggle="toggle" data-on="Enabled" name="link_status" value="enable" data-off="Disabled">
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <!--  <button type="submit" class="btn btn-primary">Cancel</button> -->
                                    <button type="submit" class="btn btn-success btn-block">Update Social Settings</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.includes.master-admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>