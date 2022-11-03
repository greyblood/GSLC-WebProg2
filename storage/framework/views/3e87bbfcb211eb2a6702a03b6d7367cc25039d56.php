

<?php $__env->startSection('title','Home'); ?>

<?php $__env->startSection('content'); ?>

<h3 class="text-center">List Mahasiswa</h3> 
<h6 class="text-center">Kelas E</h6>

<!-- <div >


</div> -->

<div class="row"  >
    <?php $__currentLoopData = $mahasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="col-sm-3 md-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><?php echo e($m['nama']); ?></h5>
        <p class="card-text"><?php echo e($m['nim']); ?></p>
        <p class="card-text"><?php echo e($m['major']); ?></p>
        <p class="card-text"><?php echo e($m['gender']); ?></p>
        <?php if($m['portofolio']): ?>
        
        <a href="<?php echo e($m['portofolio']); ?>" class="btn btn-primary">View Portofolio</a>
        <?php else: ?>
        <p class="card-text">No Portofolio</p>
        <?php endif; ?>
      </div>   
    </div>
  </div>
    <div></div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\E_Sem_5\WebProg\GSLC1\resources\views/home.blade.php ENDPATH**/ ?>