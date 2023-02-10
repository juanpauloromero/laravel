<?php $__env->startSection('title', 'Ajouter un Repas'); ?>
<?php $__env->startSection('content'); ?>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <body style="background-color:WhiteSmoke">
        <div style="background-color: antiquewhite">
            <h1 style="text-align: center">Ajouter un Repas</h1>
            <div class="row">
                <br>
            </div>

            <div class="container text-center">
                <div class="row">
                    <div class="col-md-4">
                        <h2>Bonjour</h2>
                        <div class="card">
                            <div class="card-body">
                                <div class="col-md-12 mb-2">
                                    <img id="preview-image-before-upload" alt="preview image" style="max-height: 250px;">
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-8">
                        <h2 style="text-align:left;">Nouveau Plats Information</h2>
                        <hr>

                        <div class="row">
                            <form action="<?php echo e(route('admin.dishes.store', 'upload-image')); ?>" method="post"
                                enctype="multipart/form-data" id="upload-image">
                                <?php echo csrf_field(); ?>

                                <div class="col-md-6">
                                    <label for="name" class="form-label"> Nom du plats</label>
                                    <input id="name" name="dish_name" type="text"
                                        class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">

                                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <div class="col-md-12">
                                    <label for="description" class="form-label"> Description du Plats</label>
                                    <textarea id="description" name="dish_description" class="form-control <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"></textarea>
                                    <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <div class="col-md-6">
                                    <label>Select Image File:</label>
                                    <input type="file" name="image" id="image"
                                        class="form-control
                        <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>>
                    <?php $__errorArgs = ['Image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
<span class="invalid-feedback
                                        role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="col-md-6">
                                <label for="is_active" class="form-label">Disponibilté du produit</label>
                                <select id="is_active" name="is_active" type="text" class="form-select">
                                    <option value="1" selected>Disponible</option>
                                    <option value="0" selected>Non-disponible</option>
                            </div>
                            <br>

                            <div><input type="submit" value="sauvegarder" class="btn btn-primary">
                                <a href="<?php echo e(route('admin.dishes.index')); ?>" class="btn btn-secondary">Retour</a>
                            </div>
                    </div>

                    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

                    <script type="text/javascript">
                        $(document).ready(function(e) {


                            $('#image').change(function() {

                                let reader = new FileReader();

                                reader.onload = (e) => {

                                    $('#preview-image-before-upload').attr('src', e.target.result);
                                }

                                reader.readAsDataURL(this.files[0]);

                            });

                        });
                    </script>
                </div>
</body>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/yarenisfuentes/Desktop/git/grille-o-presto/grille-o-presto/resources/views/admin/dishes/create.blade.php ENDPATH**/ ?>