<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Halaman Penyewaan</div>

                <div class="card-body">
                1. Pilih durasi peminjaman
                2. Pilih jenis sepeda
                    <form method="POST" action="<?php echo e(route('maunyewa')); ?>" aria-label="<?php echo e(__('Sewa')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="form-group row">
                            <label for="nomor" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Nomor')); ?></label>

                            <div class="col-md-6">
                                <input id="nomor" type="password" class="form-control" name="nomor" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Sewa')); ?>

                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\divinProject\multi-auth\resources\views/sewa/index.blade.php ENDPATH**/ ?>