<?php $__env->startSection('title', 'Liste de Commandes Grill-o-Presto'); ?>

<?php $__env->startSection('content'); ?>

<h1>Liste de Commandes Grill-o-Presto</h1>

<?php if(session('succes')): ?>
        <?php echo e(session('succes')); ?>

    <?php endif; ?>
      <div class = "container">
        <table class="table">
            <thead>
                <th>Nom Client</th>
                <th>Email Client</th>
                <th>Description</th>
                <th>Adresse Livraison</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   
                    <tr>
                        <td><?php echo e($order->order_firstname . $order->order_lastname); ?></td>
                        <td> <?php echo e($order->order_email); ?> </td>
                        <td> <?php echo e($order->order_adresse); ?> </td>
                        <?php $__currentLoopData = $order->dishes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dish): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <td> <?php echo e($dish->dish_name); ?> </td>
                        
                        <td>
                        <form method="POST" action="<?php echo e(route('admin.orders.destroy', $order->id)); ?>" class="mb-3">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <input type="submit" value="Supprimer" class="btn btn-link link-danger"
                                    onclick="return myFunction();" />
                      </form>
                      </td>
                      </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
   
        </div>
  
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/yarenisfuentes/Desktop/git/grille-o-presto/grille-o-presto/resources/views/admin/orders/index.blade.php ENDPATH**/ ?>