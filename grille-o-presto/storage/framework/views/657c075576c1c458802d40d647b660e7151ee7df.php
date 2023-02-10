<?php $__env->startSection('title', 'Menu Admin'); ?>

<?php $__env->startSection('content'); ?>

 
    <div class="container-fluid">
        <div class="row">

            <h1>Administrateur</h1>
            <?php if(session('succes')): ?>
                <?php echo e(session('succes')); ?>

            <?php endif; ?>
            <?php if($users->count() > 0): ?>
            <body>
                <div class="table-responsive">
                    <table class="table aling-middle">
                        <thead>
                            <th>Prenom</th>
                            <th>Nom</th>
                            <th>Adresse</th>
                            <th>Email</th>
                            <th>Telephone</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($user->user_firstname); ?></td>
                                    <td><?php echo e($user->user_lastname); ?></td>
                                    <td><?php echo e($user->user_adresse); ?></td>
                                    <td><?php echo e($user->email); ?></td>
                                    <td><?php echo e($user->user_phone); ?></td>


                                    <td><a href="<?php echo e(route('admin.users.edit', $user->id)); ?>">Modifier</a>

                                        <form method="POST" action="<?php echo e(route('admin.users.destroy', $user->id)); ?>"
                                            class="mb-3">
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
                </div>
            <?php else: ?>
                <p>Aucun Utilisateur à afficher pour le moment.</p>
            <?php endif; ?>
            <a href="<?php echo e(route('admin.users.create')); ?>">Ajouter un Utilisateur</a>
        </div>
    </div>
                                            </body>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/yarenisfuentes/Desktop/git/grille-o-presto/grille-o-presto/resources/views/layouts/admin/index.blade.php ENDPATH**/ ?>