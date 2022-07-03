<?php $__env->startSection("content"); ?>
    <div id="section-convidados">
        <img src="<?php echo e(asset("images/img-top-convidados.png")); ?>" class="img-top-convidados" alt="Sociedade Portuguesa de Psiquiatria"/>
        
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-2 col-md-offset-1">
                    <img alt="Amelia Fiske" class="doctor-img-individual" src="<?php echo e(asset("images/convidados/RAFFAELLA_POCOBELLO.jpg")); ?>"/>
                    <img src="<?php echo e(asset("images/sppsm_logo.png")); ?>" style="width: 150px; float: left; margin-top:35vh" alt="sppsm"/>
                </div>
                <div class="col-xs-12 col-md-6">
                    <h2 class="fh5co-section-convidados">Raffaella Pocobello</h2>
                    <h4>USA</h4>
                    <p>Raffaella Pocobello, PhD in Clinical Psychology, is a researcher at the National Research Council in Rome. <br>Her research focuses on evaluating human rights-aligned mental health approaches such as Open Dialogue, Recovery Houses, peer-supported and co-produced services. <br>
                        She is currently the chief investigator of the HOPEnDialogue project, which aims to investigate how Open Dialogue practice is implemented internationally and its impact in different contexts. She is an associate member of the International Institute for Psychiatric Drug Withdrawal. She is participating in the European Cost action FOSTREN (Fostering and Strengthening Approaches to Reducing Coercion in European Mental Health Services). </p>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("layout.index", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/convidados/raffaella-pocobello.blade.php ENDPATH**/ ?>