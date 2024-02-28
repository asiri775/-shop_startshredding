<?php $__env->startSection('content'); ?>

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row" id="main">
                <!-- Page Heading -->
                <div class="go-title">
                    <div class="pull-right">
                        <a href="<?php echo url('admin/withdraws'); ?>" class="btn btn-default btn-add"><i class="fa fa-arrow-left"></i> Back</a>
                    </div>
                    <h3>Withdraw Details</h3>
                </div>
                <!-- Page Content -->
                <div class="panel panel-default">
                    <div class="panel-body">

                        <table class="table">
                            <tbody>
                            <tr>
                                <td width="30%" style="text-align: right;"><strong>Vendors ID#</strong></td>
                                <td><?php echo e($withdraw->id); ?></td>
                            </tr>
                            <tr>
                                <td width="30%" style="text-align: right;"><strong>Vendor Company</strong></td>
                                <td><a href="<?php echo e(url('admin/vendors')); ?>/<?php echo e($withdraw->vendorid->id); ?>" target="_blank"><?php echo e($withdraw->vendorid->shop_name); ?></a></td>
                            </tr>
                            <tr>
                                <td width="30%" style="text-align: right;"><strong>Withdraw Amount:</strong></td>
                                <td><strong style="color:green">$<?php echo e($withdraw->amount); ?></strong></td>
                            </tr>
                            <tr>
                                <td width="30%" style="text-align: right;"><strong>Withdraw Charge:</strong></td>
                                <td><strong style="color:green">$<?php echo e($withdraw->fee); ?></strong></td>
                            </tr>
                            <tr>
                                <td width="30%" style="text-align: right;"><strong>Withdraw Process Date:</strong></td>
                                <td><?php echo e($withdraw->created_at); ?></td>
                            </tr>
                            <tr>
                                <td width="30%" style="text-align: right;"><strong>Withdraw Status:</strong></td>
                                <td><strong><?php echo e(ucfirst($withdraw->status)); ?></strong></td>
                            </tr>
                            <tr>
                                <td width="30%" style="text-align: right;"><strong>Vendors Name:</strong></td>
                                <td><?php echo e($withdraw->vendorid->name); ?></td>
                            </tr>
                            <tr>
                                <td width="30%" style="text-align: right;"><strong>Vendors Email:</strong></td>
                                <td><?php echo e($withdraw->vendorid->email); ?></td>
                            </tr>
                            <tr>
                                <td width="30%" style="text-align: right;"><strong>Vendors Phone:</strong></td>
                                <td><?php echo e($withdraw->vendorid->phone); ?></td>
                            </tr>

                            <tr>
                                <td width="30%" style="text-align: right;"><strong>Withdraw Method:</strong></td>
                                <td><?php echo e($withdraw->method); ?></td>
                            </tr>
                            <?php if($withdraw->method != "Bank"): ?>
                            <tr>
                                <td width="30%" style="text-align: right;"><strong><?php echo e($withdraw->method); ?> Email:</strong></td>
                                <td><?php echo e($withdraw->acc_email); ?></td>
                            </tr>
                            <?php else: ?>
                                <tr>
                                    <td width="30%" style="text-align: right;"><strong><?php echo e($withdraw->method); ?> Account:</strong></td>
                                    <td><?php echo e($withdraw->iban); ?></td>
                                </tr>
                                <tr>
                                    <td width="30%" style="text-align: right;"><strong>Account Name:</strong></td>
                                    <td><?php echo e($withdraw->acc_name); ?></td>
                                </tr>
                                <tr>
                                    <td width="30%" style="text-align: right;"><strong>Country:</strong></td>
                                    <td><?php echo e(ucfirst(strtolower($withdraw->country))); ?></td>
                                </tr>
                                <tr>
                                    <td width="30%" style="text-align: right;"><strong>Address:</strong></td>
                                    <td><?php echo e($withdraw->address); ?></td>
                                </tr>
                                <tr>
                                    <td width="30%" style="text-align: right;"><strong><?php echo e($withdraw->method); ?> Swift Code:</strong></td>
                                    <td><?php echo e($withdraw->swift); ?></td>
                                </tr>
                            <?php endif; ?>
                            <tr>
                                <?php if($withdraw->status == "pending"): ?>
                                <td width="30%" style="text-align: right;"><a href="accept/<?php echo e($withdraw->id); ?>" class="btn btn-success btn-xs"><i class="fa fa-check-circle"></i> Accept</a></td>

                                <td><a href="reject/<?php echo e($withdraw->id); ?>" class="btn btn-danger btn-xs"><i class="fa fa-times-circle"></i> Reject</a></td>
                                <?php endif; ?>
                            </tr>
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