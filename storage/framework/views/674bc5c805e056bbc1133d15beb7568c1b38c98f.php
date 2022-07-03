<?php $__env->startSection("content"); ?>
    <?php
        $convidados = [
            [
                "name" => "Alfredo B. Cuéllar Barboza",
                "country" => "GERMANY",
                "image" => "AMELIA_FISKE.jpg",
                "url" => "alfredo-cuellar-barboza"
            ],
            [
                "name" => "Amelia Fiske",
                "country" => "GERMANY",
                "image" => "AMELIA_FISKE.jpg",
                "url" => "amelia-fiske"
            ],
            [
                "name" => "Ana Ciaunica",
                "country" => "GERMANY",
                "image" => "AMELIA_FISKE.jpg",
                "url" => "ana-ciaunica"
            ],
            [
                "name" => "Axel Seemann",
                "country" => "UK",
                "image" => "Axel_Seemann.jpg",
                "url" => "axel-seemann"
            ],
            [
                "name" => "Brendan Kelly",
                "country" => "IRELAND",
                "image" => "Brendan_Kelly.jpg",
                "url" => "brendan-kelly"
            ],
            [
                "name" => "Christoph U. Correll",
                "country" => "USA",
                "image" => "CHRISTOPH_CORRELL.JPG",
                "url" => "christoph-correll"
            ],
            [
                "name" => "Daniel Freeman",
                "country" => "UK",
                "image" => "DANIEL_FREEMAN.jpg",
                "url" => "daniel-freeman"
            ],
            [
                "name" => "Gerhard Gründer",
                "country" => "GERMANY",
                "image" => "GERHARD_GRUNDER.jpg",
                "url" => "gerhard-grunder"
            ],
            [
                "name" => "Irmgard Emmelhainz",
                "country" => "MEXICO",
                "image" => "IRMGARD_EMMELHAINZ.jpg",
                "url" => "irmgard-emmelhainz"
            ],
            [
                "name" => "Joel Krueger",
                "country" => "MEXICO",
                "image" => "IRMGARD_EMMELHAINZ.jpg",
                "url" => "joel-krueger"
            ],
            [
                "name" => "Laurel Riek",
                "country" => "USA",
                "image" => "LAUREL_RIEK.jpg",
                "url" => "laurel-riek"
            ],
            [
                "name" => "Mads Henriksen",
                "country" => "DENMARK",
                "image" => "MADS_HENRIKSEN.jpg",
                "url" => "mads-henriksen"
            ],
            [
                "name" => "Norma Verdolini",
                "country" => "ITALY",
                "image" => "NORMA_VERDOLINI.png",
                "url" => "norma-verdolini"
            ],
            [
                "name" => "Ole Andreassen",
                "country" => "NORWAY",
                "image" => "OLE_ANDREASSEN.jpg",
                "url" => "ole-andreassen"
            ],
            [
                "name" => "Raffaella Pocobello",
                "country" => "ITALY",
                "image" => "RAFFAELLA_POCOBELLO.jpg",
                "url" => "raffaella-pocobello"
            ],
            [
                "name" => "Richard Gipps ",
                "country" => "UK",
                "image" => "RICHARD_GIPPS.jpeg",
                "url" => "richard-gipps"
            ],
            [
                "name" => "Swapnil Gupta",
                "country" => "UK",
                "image" => "RICHARD_GIPPS.jpeg",
                "url" => "swapnil-gupta"
            ],
            [
                "name" => "Tom K J Craig",
                "country" => "UK",
                "image" => "TOM_CRAIG.jpg",
                "url" => "tom-craig"
            ],

        ]
    ?>
    <section id="convidados">
        <img src="<?php echo e(asset("images/img-top-convidados.png")); ?>" class="img-top-convidados" alt="Sociedade Portuguesa de Psiquiatria"/>

        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-8 col-md-offset-1">
                    <h2 class="fh5co-section-convidados">Convidados Nacionais e Estrangeiros</h2>
                    <hr class="underline-title">
                </div>
                <div class="hidden-xs col-xs-12 col-md-2">
                    <img src="<?php echo e(asset("images/sppsm_logo.png")); ?>" style="width: 100px; float: right; margin: 120px -120px 0 0" alt="sppsm"/>
                </div>
            </div>
            <div class="row">
                <div class="hidden-xs col-md-1">
                    <img src="<?php echo e(asset("images/side-banner.png")); ?>" class="side-banner-convidados hidden-xs hidden-sm hidden-md" alt="Sociedade Portuguesa de Psiquiatria"/>
                </div>
                <div class="col-xs-12 col-md-11" style="margin-top: 25px">
                    <div class="row">
                        <?php $__currentLoopData = $convidados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $convidado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-xs-4 col-md-2">
                                <a href="<?php echo e(route("convidado", $convidado["url"])); ?>" class="convidado">
                                    <div class="col-xs-12 convidado text-center"><img alt="<?php echo e($convidado["name"]); ?>" src="<?php echo e(asset("images/convidados/".$convidado["image"])); ?>"/></div>
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

<?php echo $__env->make("layout.index", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/convidados.blade.php ENDPATH**/ ?>