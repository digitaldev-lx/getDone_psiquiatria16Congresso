<?php $__env->startSection("content"); ?>
    <div id="section-convidados">
        <img src="<?php echo e(asset("images/img-top-convidados.png")); ?>" class="img-top-convidados" alt="Sociedade Portuguesa de Psiquiatria"/>
        
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-2 col-md-offset-1">
                    <img alt="Amelia Fiske" class="doctor-img-individual" src="<?php echo e(asset("images/comissoes/ricardocoentre.png")); ?>"/>
                    <img src="<?php echo e(asset("images/sppsm_logo.png")); ?>" style="width: 150px; float: left; margin-top: 28vh" alt="sppsm"/>
                </div>
                <div class="col-xs-12 col-md-6">
                    <h2 class="fh5co-section-convidados">Maria Luísa Figueira</h2>
                    <h4>PORTUGAL</h4>
                    <p>EDUCATION<br>
                        Assistente Graduado Hospitalar de Psiquiatria no Hospital de Santa Maria, Centro Hospitalar Universitário Lisboa Norte EPE.<br>
                        Assistente Convidado na Faculdade de Medicina de Lisboa.<br>
                        Doutorando do Centro Académico de Medicina de Lisboa.<br>
                        Mestrado em Neurociências Afetivas, Universidade de Maastricht, Holanda. 
                    </p>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("layout.index", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/comissoes/ricardo-coentre.blade.php ENDPATH**/ ?>