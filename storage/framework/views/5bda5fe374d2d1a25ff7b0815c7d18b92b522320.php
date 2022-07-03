<?php $__env->startSection("content"); ?>
    <div id="section-convidados">
        <img src="<?php echo e(asset("images/img-top-convidados.png")); ?>" class="img-top-convidados" alt="Sociedade Portuguesa de Psiquiatria"/>
        
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-2 col-md-offset-1 cvs-sm">
                    <img alt="Amelia Fiske" class="doctor-img-individual" src="<?php echo e(asset("images/convidados/DANIEL_FREEMAN.jpg")); ?>"/>
                    <img src="<?php echo e(asset("images/sppsm_logo.png")); ?>" style="width: 150px; float: left; margin-top: 40vh" alt="sppsm"/>
                </div>
                <div class="col-xs-12 col-md-6">
                    <h2 class="fh5co-section-convidados">Daniel Freeman</h2>
                    <h4>GERMANY</h4>
                    <p>EDUCATION<br>
                        Daniel Freeman is a Professor of Clinical Psychology and NIHR Senior Investigator at the University of Oxford and a consultant clinical psychologist in Oxford Health NHS Foundation Trust. <br>
                        Professor Freeman’s research has focussed on using psychological theory to develop more powerful psychological treatments. He has also been pioneering the development of automated virtual reality treatments for mental health conditions. <br>
                        He founded Oxford VR, a University of Oxford spin-out company. He has published over 300 papers and 10 books. He is the recipient of the 2020 British Psychological Society Presidents' Award for Distinguished Contributions to Psychological Knowledge, and presented the BBC Radio 4 series ‘A History of Delusions’.</p>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("layout.index", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/convidados/daniel-freeman.blade.php ENDPATH**/ ?>