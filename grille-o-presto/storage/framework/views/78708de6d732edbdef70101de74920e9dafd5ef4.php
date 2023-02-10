<?php $__env->startSection('title', 'Liste des Clients'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Liste des Clients</h1>
    <?php if(session('succes')): ?>
        <?php echo e(session('succes')); ?>

    <?php endif; ?>
    <?php if($users->count() > 0): ?>
        <table class="table">
            <thead>
                <th>Prenom</th>
                <th>Nom</th>
                <th>Adresse</th>
                <th>Email</th>
                <th>Telephone</th>
                <th class="text-center">Delete</th>

            </thead>
            <tbody>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($user->user_firstname); ?></td>
                        <td><?php echo e($user->user_lastname); ?></td>
                        <td><?php echo e($user->user_adresse); ?></td>
                        <td><?php echo e($user->email); ?></td>
                        <td><?php echo e($user->user_phone); ?></td>
                        <td>
                            <form method="POST" action="<?php echo e(route('admin.users.destroy', $user->id)); ?>" class="mb-3">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <input type="submit" value="Supprimer" class="btn btn-link link-danger"
                                    onclick="return myFunction();" />
                                <script>
                                    function myFunction() {
                                        if (!confirm("Voulez-vous supprimer l'administrateur"))
                                            event.preventDefault();
                                    }
                                </script>
                            </form>
                        </td>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>Aucun Utilisateur à afficher pour le moment.</p>
    <?php endif; ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/yarenisfuentes/Desktop/git/grille-o-presto/grille-o-presto/resources/views/admin/users/index.blade.php ENDPATH**/ ?>