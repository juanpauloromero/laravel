<link rel="stylesheet" href="<?php echo asset('header.css'); ?>" type="text/css">
<script type="text/javascript" src="<?php echo e(URL::asset('index.js')); ?>"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
</script>

<head>
    <img class="Logo" src="square.png" alt="Logo Grill-O-Presto">
    <h1 class="texte-logo">Grill-O-Presto</h1>
    <div><a href="<?php echo e(route('home.fidelities.create')); ?>" class="inscrire">S'inscrire</a></div>
    <div><a href="<?php echo e(route('home.fidelities.index')); ?>">Profile Client</a></div>
    <div><a href="<?php echo e(route('logout')); ?>">Déconnexion</a></div>
    <a href="<?php echo e(route('login')); ?>" class="connexion"><svg xmlns="http://www.w3.org/2000/svg"
            width="34" height="34" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
            <path
                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
        </svg></a></button>
    <button class="panier"> <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
            class="bi bi-cart" viewBox="0 0 16 16">
            <path
                d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
        </svg></button>
</head>


<div class="livraison">

    <p class="texte-livraison">Livraison gratuite à domicile </p>

    <button type="delete" class="delete-livraison"><svg xmlns="http://www.w3.org/2000/svg" width="26"
            height="26" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">

            <path
                d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
        </svg></button>
</div>
<img class="banniere" src="banniere.png" alt="Banniere">


<div class="all-buttons">
    <button class="card-button">
        <div class="row">
            <?php $__currentLoopData = $dishes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dish): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 col-xl-3 col-md-4 col-6 mb-4">
                    <div class="card" style="height: 100%;">
                        <img src="https://via.placeholder.com/400x300" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo e($dish->dish_name); ?></h5>
                        </div>

                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </button>
</div>
<!--Liste de prix-->


<!--<ul>
    <div class="d-flex flex-column">
        <li>1 personne 14$</li>
        <li>2 personnes 24$</li>
        <li>3 personnes 30$</li>
    </div>
    <div class="d-flex flex-row-reverse">
        <li>4 personnes 32$</li>
        <li>5 personnes 37$</li>
        <li>6 personnes 42$</li>
    </div>
</ul>
-->
<fieldset>
    <table class="price">
        <legend>Prix</legend>
        <tr>
            <td>
                <li>1 personne 14$</li>
            </td>
            <td>
                <li>4 personnes 32$</li>
            </td>
        </tr>
        <tr>
            <td>
                <li>2 personnes 24$</li>
            </td>
            <td>
                <li>5 personnes 37$</li>
            </td>

        </tr>
        <tr>

            <td>
                <li>3 personnes 30$</li>
            </td>
            <td>
                <li>6 personnes 42$</li>
            </td>
        </tr>
    </table>
</fieldset>

<br>
<div class="plat">

    <li>Votre commande doit contenir un minimum de 3 plats</li>
    <li>Maximum 2 plats par portion</li>

</div>


<footer>
    <div class="footer"><a href="">Nous joindre</a>
        <a href="">Terme et condition</a>
        <a href="">Politique du restaurant</a>
        <a href=""></a><br>
        grill-o-presto@bidon.ca<br>
        1-819-111-1111<br>
        1325 12e Avenue Nord<br>
        Sherbrooke , Québec , J1E 3P6 Canada<br>
        <i>© 2022 Grill-O-Presto. All rights reserved.</i>
    </div>
</footer>
<?php /**PATH /Users/yarenisfuentes/Desktop/git/grille-o-presto/grille-o-presto/resources/views/home/index.blade.php ENDPATH**/ ?>