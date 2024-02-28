<?php $__env->startSection('content'); ?>

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row" id="main">
                <!-- Page Heading -->
                <div class="go-title">
                    <div class="pull-right">
                        <a href="<?php echo url('admin/sliders/create'); ?>" class="btn btn-primary btn-add"><i class="fa fa-plus"></i> Add New Slider</a>
                    </div>
                    <h3>Sliders</h3>
                    <div class="go-line"></div>
                </div>
                <!-- Page Content -->
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div id="response">
                            <?php if(Session::has('message')): ?>
                                <div class="alert alert-success alert-dismissable">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <?php echo e(Session::get('message')); ?>

                                </div>
                            <?php endif; ?>
                        </div>
                        <table class="table table-striped table-bordered" cellspacing="0" id="example" width="100%">
                            <thead>
                            <tr>
                                <th>Slider Image</th>
                                <th>Slider Title</th>
                                <th width="15%">Slider Text</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><img style="width: 300px;" src="<?php echo e(url('/')); ?>/assets/images/sliders/<?php echo e($slider->image); ?>"></td>
                                        <td><?php echo e($slider->title); ?></td>
                                        <td><?php echo e($slider->text); ?></td>
                                        <td>
                                            <form method="POST" action="<?php echo action('SliderController@destroy',['id' => $slider->id]); ?>">
                                                <?php echo e(csrf_field()); ?>

                                                <input type="hidden" name="_method" value="DELETE">
                                                <a href="sliders/<?php echo e($slider->id); ?>/edit" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Edit </a>
                                                <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Remove </button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
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