<?php $__env->startSection("content"); ?>
    <?php
        $organizadora = [
            [
                "name" => "Luis Madeira",
                "country" => "PORTUGAL",
                "image" => "luismadeira.png",
                "url" => "luis-madeira"
            ],
            [
                "name" => "Maria João Heitor",
                "country" => "PORTUGAL",
                "image" => "mariajoaoheitor.png",
                "url" => "maria-joao-heitor"
            ],
            [
                "name" => "Maria Luísa Figueira",
                "country" => "PORTUGAL",
                "image" => "marialuisafigueira.png",
                "url" => "maria-luisa-figueira"
            ],
            [
                "name" => "Ricardo Coentre",
                "country" => "PORTUGAL",
                "image" => "ricardocoentre.png",
                "url" => "ricardo-coentre"
            ]
            ]
    ?>
    <section id="convidados">
        <img src="<?php echo e(asset("images/img-top-convidados.png")); ?>" class="img-top-convidados" alt="Sociedade Portuguesa de Psiquiatria"/>

        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-8 col-md-offset-1">
                    <h2 class="fh5co-section-convidados">Comissões</h2>
                    <hr class="underline-title" style="margin-left: 30px">
                </div>
                <div class="hidden-xs col-xs-12 col-md-2">
                    <img src="<?php echo e(asset("images/sppsm_logo.png")); ?>" style="width: 100px; float: right; margin: 120px -120px 0 0" alt="sppsm"/>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-8 col-md-offset-1">
                    <h2 class="fh5co-section-convidados" style="margin-top: 30px">Organizadora</h2>
                </div>
            </div>
            <div class="row">
                <div class="hidden-xs col-md-1">
                    <img src="<?php echo e(asset("images/side-banner.png")); ?>" class="side-banner-comissoes hidden-xs hidden-sm hidden-md" alt="Sociedade Portuguesa de Psiquiatria"/>
                </div>

                <div class="col-xs-12 col-md-11" style="margin-top: 25px">
                    <div class="row">

                        <?php $__currentLoopData = $organizadora; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $convidado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-xs-4 col-md-2">
                                <a href="<?php echo e(route("convidado", $convidado["url"])); ?>" class="convidado">
                                    <div class="col-xs-12 convidado text-center"><img alt="<?php echo e($convidado["name"]); ?>" src="<?php echo e(asset("images/comissoes/".$convidado["image"])); ?>"/></div>
                                    <div class="col-xs-12 convidado"><h5><?php echo e($convidado["name"]); ?></h5>
                                    </div>
                                    <div class="col-xs-12 convidado"><h6><?php echo e($convidado["country"]); ?></h6></div>
                                </a>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>




<?php $__env->stopSection(); ?>

<?php echo $__env->make("layout.index", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/comissoes.blade.php ENDPATH**/ ?>