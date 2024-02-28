<?php $__env->startSection('content'); ?>
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row" id="main">

                <!-- Page Heading -->
                <div class="go-title">
                    <h3>Testimonial Section</h3>
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
                        <!-- /.start -->
                        <div class="col-md-12">
                            <ul class="nav nav-tabs tabs-left">
                                <li class="active"><a href="#sectioncontent" data-toggle="tab" aria-expanded="false"><strong>Testimonial Section Content</strong></a>
                                <li><a href="#sectiontitle" data-toggle="tab" aria-expanded="true"><strong>Testimonial Section Title</strong></a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-xs-12" style="padding: 0">
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane" id="sectiontitle">
                                    <div class="go-title">
                                        <h3>Testimonial Section Title Text</h3>
                                        <div class="go-line"></div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <form method="POST" action="testimonial/titles" class="form-horizontal form-label-left" id="website_form">
                                                <?php echo e(csrf_field()); ?>

                                                <div class="item form-group">
                                                    <label class="control-label col-md-4 col-sm-4 col-xs-12" for="title"> Testimonial Secttion Title <span class="required">*</span>
                                                    </label>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <input class="form-control col-md-7 col-xs-12" name="testimonial_title" placeholder="Service Title" required="required" type="text" value="<?php echo e($titles->testimonial_title); ?>">
                                                    </div>
                                                </div>
                                                <div class="item form-group">
                                                    <label class="control-label col-md-4 col-sm-4 col-xs-12" for="title"> Testimonial Secttion Text <span class="required">*</span>
                                                    </label>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <textarea rows="6" class="form-control" name="testimonial_text"><?php echo e($titles->testimonial_text); ?></textarea>
                                                    </div>
                                                </div>

                                                <div class="ln_solid"></div>
                                                <div class="form-group">
                                                    <div class="col-md-6 col-md-offset-4">
                                                        <button type="submit" class="btn btn-primary btn-add">Update Text</button>
                                                    </div>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane active" id="sectioncontent">
                                    <div class="go-title">
                                        <div class="pull-right">
                                            <a href="<?php echo url('admin/testimonial/create'); ?>" class="btn btn-primary btn-add"><i class="fa fa-plus"></i> Add Testimonial</a>
                                        </div>
                                        <h3>Testimonials</h3>
                                        <div class="go-line"></div>
                                    </div>
                                    <!-- Page Content -->
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <table class="table table-striped table-bordered" cellspacing="0" id="example" width="100%">
                                                <thead>
                                                <tr>
                                                    <th width="25%">Review Text</th>
                                                    <th>Client's Name</th>
                                                    <th>Designation</th>
                                                    <th>Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e($testimonial->review); ?></td>
                                                        <td><?php echo e($testimonial->client); ?></td>
                                                        <td><?php echo e($testimonial->designation); ?></td>
                                                        <td>
                                                            <form method="POST" action="<?php echo action('TestimonialController@destroy',['id' => $testimonial->id]); ?>">
                                                                <?php echo e(csrf_field()); ?>

                                                                <input type="hidden" name="_method" value="DELETE">
                                                                <a href="testimonial/<?php echo e($testimonial->id); ?>/edit" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Edit </a>
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
                            </div>
                        </div>
                    </div>
                    <!-- /.end -->
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