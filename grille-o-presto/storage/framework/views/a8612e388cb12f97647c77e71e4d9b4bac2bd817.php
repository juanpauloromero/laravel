<?php $__env->startSection('title', 'MENU GRILL-O-PRESTO'); ?>

<?php $__env->startSection('content'); ?>

<h1>MENU GRILL-O-PRESTO</h1>
    <?php if(session('succes')): ?>
        <?php echo e(session('succes')); ?>

    <?php endif; ?>
      <div class = "container">
        <table class="table">
            <thead>
                <th>Nom</th>
                <th>Date</th>
                <th>Plats</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </thead>
            <tbody>
                <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($menu->menu_name); ?></td>
                        <td><?php echo e($menu->menu_week); ?></td>
                      <td> <?php echo e($menu->dish->dish_name); ?> </td>
                      <td>
                        
                          <a href="<?php echo e(route('admin.menus.edit', $menu->id)); ?>" role="button">
                          <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
  <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
</svg>      
                         </a>
                     </td>
                       <td> 
                       <form method="POST" action="<?php echo e(route('admin.menus.destroy', $menu->id)); ?>" class="mb-3">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" value="Supprimer" class="bi bi-trash3-fill" onclick="return myFunction();">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"  viewBox="0 0 16 16">
                              <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                              </svg>
                              </button>
                        </form>
                      </td>
                      </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        
        </div>
  
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/yarenisfuentes/Desktop/git/grille-o-presto/grille-o-presto/resources/views/admin/menus/index.blade.php ENDPATH**/ ?>