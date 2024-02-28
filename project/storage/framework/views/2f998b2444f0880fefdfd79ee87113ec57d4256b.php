<?php $__env->startSection('content'); ?>

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row" id="main">

                <!-- Page Heading -->
                <div class="go-title">
                    <div class="pull-right">
                        <a href="<?php echo url('admin/sliders'); ?>" class="btn btn-default btn-back"><i class="fa fa-arrow-left"></i> Back</a>
                    </div>
                    <h3>Edit Slider</h3>
                    <div class="go-line"></div>
                </div>
                <!-- Page Content -->
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div id="response"></div>
                        <form method="POST" action="<?php echo action('SliderController@update',['id'=>$slider->id]); ?>" class="form-horizontal form-label-left" enctype="multipart/form-data">
                            <?php echo e(csrf_field()); ?>

                            <input type="hidden" name="_method" value="PATCH">
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number"> Current Slider Image <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <img src="<?php echo url('/'); ?>/assets/images/sliders/<?php echo e($slider->image); ?>" style="max-height: 300px;" alt="No Banner Photo">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Change Slider Image<span class="required">*</span>

                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                   <input type="file" accept="image/*" name="image">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Slider Title<span class="required">*</span>
                                    <p class="small-label">(In Any Language)</p>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="name" class="form-control col-md-7 col-xs-12" name="title" value="<?php echo e($slider->title); ?>" placeholder="e.g Sports" type="text">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="slug">Slider Text<span class="required">*</span>
                                    <p class="small-label">(In Any Language)</p>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="slug" class="form-control col-md-7 col-xs-12" name="text" value="<?php echo e($slider->text); ?>" placeholder="e.g sports" type="text">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="slug">Slider Text Position<span class="required">*</span>

                                </label>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <select name="text_position" class="form-control">
                                        <?php if($slider->text_position == "slide_style_left"): ?>
                                            <option value="slide_style_left" selected>Left</option>
                                        <?php else: ?>
                                            <option value="slide_style_left">Left</option>
                                        <?php endif; ?>
                                        <?php if($slider->text_position == "slide_style_center"): ?>
                                            <option value="slide_style_center" selected>Center</option>
                                        <?php else: ?>
                                            <option value="slide_style_center">Center</option>
                                        <?php endif; ?>
                                        <?php if($slider->text_position == "slide_style_right"): ?>
                                            <option value="slide_style_right" selected>Right</option>
                                        <?php else: ?>
                                            <option value="slide_style_right">Right</option>
                                        <?php endif; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <button type="submit" class="btn btn-success btn-block">Update Slider</button>
                                </div>
                            </div>
                        </form>
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