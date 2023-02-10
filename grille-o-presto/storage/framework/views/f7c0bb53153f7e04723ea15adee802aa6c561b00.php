<html>
<?php echo $__env->make('layouts.admin.includes.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <div class="container-fluid headerFirts">
        <div class="row">
            <div class='col-lg-8 col-md-12'>
                <a href="">
                    <img src="<?php echo e(asset('image/logo.svg')); ?>" alt="Logo Grille O Presto" class="img-fluid classLogo">
                </a>
            </div>
            <div class='col-lg-4 col-md-12'>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                    <path fill-rule="evenodd"
                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                </svg>
                <span>Déconnexion</span>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid navBarAdmin">
        <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" id="menu1" type="button"
                data-toggle="dropdown">Gestion
                Admin
                <span class="caret"></span></button>
            <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo e(route('admin.users.create')); ?>">Add
                        Admin</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo e(route('admin.admin.index')); ?>">Liste
                        Admin</a></li>
            </ul>
        </div>
        <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" id="menu2" type="button"
                data-toggle="dropdown">Gestion
                Clients
                <span class="caret"></span></button>
            <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo e(route('admin.users.index')); ?>">Liste
                        des Clients</a></li>
            </ul>
        </div>
        <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" id="menu3" type="button"
                data-toggle="dropdown">Gestion
                Plats
                <span class="caret"></span></button>
            <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo e(route('admin.dishes.create')); ?>">Add
                        Plats</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo e(route('admin.dishes.index')); ?>">Liste
                        de Plats</a></li>
            </ul>
        </div>
        <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" id="menu5" type="button"
                data-toggle="dropdown">Gestion
                Menu
                <span class="caret"></span></button>
            <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo e(route('admin.menus.create')); ?>">Add
                        Menu</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo e(route('admin.menus.index')); ?>">Liste
                        de Menu</a></li>
            </ul>
        </div>
        <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" id="menu5" type="button"
                data-toggle="dropdown">Commandes
                <span class="caret"></span></button>
            <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo e(route('admin.orders.index')); ?>">Liste de commandes</a></li>
            </ul>
        </div>
        </div>
</nav>
        <div>
            <?php echo $__env->yieldContent('content'); ?>
        </div>


</html>
<?php /**PATH /Users/yarenisfuentes/Desktop/git/grille-o-presto/grille-o-presto/resources/views/layouts/admin/app.blade.php ENDPATH**/ ?>