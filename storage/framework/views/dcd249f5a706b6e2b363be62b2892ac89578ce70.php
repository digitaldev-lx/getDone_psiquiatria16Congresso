
<header id="fh5co-header" role="banner">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="height: 99px;">
        <div class="container-fluid">
            <div class="navbar-header">
                <!-- Mobile Toggle Menu Button -->
                <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle hidden-md hidden-lg" data-toggle="collapse" data-target="#fh5co-navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
                <a class="navbar-brand" href="index.html">
                    <img class="logo" src="<?php echo e(asset("images/site_logo.png")); ?>" />
                </a>
            </div>
            <div id="fh5co-navbar" class="navbar-collapse collapse mobile-header">
                <ul class="nav navbar-nav navbar-right" style="margin-top: 20px;background: white;">
                    <li class="<?php echo e(Route::currentRouteName() == "home" ? "active": ""); ?>"><a href="<?php echo e(route("home")); ?>"><span>Boas-vindas <span class="border <?php echo e(Route::currentRouteName() == "home" ? "border-active": ""); ?>"></span></span></a></li>
                    <li class="<?php echo e(Route::currentRouteName() == "convidados" ? "active": ""); ?>"><a href="<?php echo e(route("convidados")); ?>"><span>Convidados <span class="border"></span></span></a></li>


                    <li><a class="btn btn-primary btn-sm btn-inscricoes" href="elements.html"><span class="glyphicon glyphicon-copy"></span> INSCRIÇÕES</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<?php /**PATH /var/www/html/resources/views/layout/partials/header.blade.php ENDPATH**/ ?>