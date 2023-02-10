<?php $__env->startSection('title', 'Repas'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Repas</h1>
    <?php if(session('succes')): ?>
        <?php echo e(session('succes')); ?>

    <?php endif; ?>
    <?php if($dishes->count() > 0): ?>
        <table class="table">
            <thead>
                <th>Nom</th>
                <th>Description</th>
                <th>Disponibilité</th>
                <th>Options</th>
            </thead>
            <tbody>
                <?php $__currentLoopData = $dishes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dish): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($dish->dish_name); ?></td>
                        <td><?php echo e($dish->dish_description); ?></td>
                        <td><img src="<?php echo e(asset($dish->dish_image)); ?>" alt=""></td>

                        <td>
                            <?php if($dish->is_active): ?>
                                Disponible
                            <?php else: ?>
                                Non-Disponible
                            <?php endif; ?>
                        </td>
                        <td><a href="<?php echo e(route('admin.dishes.edit', $dish->id)); ?>">Modifier</a>

                            <form method="POST" action="<?php echo e(route('admin.dishes.destroy', $dish->id)); ?>" class="mb-3">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <input type="submit" value="Supprimer" class="btn btn-link link-danger"
                                    onclick="return myFunction();" />
                            </form>
                        </td>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>Aucune repas à afficher pour le moment.</p>
    <?php endif; ?>
    <a href="<?php echo e(route('admin.dishes.create')); ?>">Ajouter un repas</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/yarenisfuentes/Desktop/git/grille-o-presto/grille-o-presto/resources/views/admin/dishes/index.blade.php ENDPATH**/ ?>