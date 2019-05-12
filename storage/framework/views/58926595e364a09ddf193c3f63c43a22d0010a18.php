<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dasbor</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    Selamat datang di halaman penyewaan.

                <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                        <a href="<?php echo e(route('penyewaan/{nomor}')); ?>" class="btn btn-default"> Sewa </a>
                        </div>
                </div>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\divinProject\multi-auth\resources\views/sewa/home.blade.php ENDPATH**/ ?>