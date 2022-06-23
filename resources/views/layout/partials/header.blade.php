
<header id="fh5co-header" role="banner">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="height: 99px;">
        <div class="container-fluid">
            <div class="navbar-header">
                <!-- Mobile Toggle Menu Button -->
                <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#fh5co-navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
                <a class="navbar-brand" href="index.html">
                    <img class="logo" src="{{asset("images/logo.jpg")}}" />
                </a>
            </div>
            <div id="fh5co-navbar" class="navbar-collapse collapse mobile-header">
                <ul class="nav navbar-nav navbar-right" style="margin-top: 20px;background: white;">
                    <li class="{{Route::currentRouteName() == "home" ? "active": ""}}"><a href="{{route("home")}}"><span>Boas-vindas <span class="border {{Route::currentRouteName() == "home" ? "border-active": ""}}"></span></span></a></li>
                    <li><a href="right-sidebar.html"><span>Comissões <span class="border"></span></span></a></li>

                    <li class="dropdown {{Route::currentRouteName() == "congresso" || Route::currentRouteName() == "cursos" ? "active": ""}}">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span>Programa <span class="caret"></span><span class="border {{Route::currentRouteName() == "congresso" || Route::currentRouteName() == "cursos" ? "border-active": ""}}"></span></span></a>
                        <ul class="dropdown-menu">
                            <li class="{{Route::currentRouteName() == "congresso" ? "active": ""}}"><a href="{{route("congresso")}}"><span>Congresso <span class="border {{Route::currentRouteName() == "congresso" ? "border-active": ""}}"></span></span></a></li>
                            <li class="{{Route::currentRouteName() == "cursos" ? "active": ""}}"><a href="{{route("cursos")}}"><span>Cursos <span class="border {{Route::currentRouteName() == "cursos" ? "border-active": ""}}"></span></span></a></li>
                        </ul>
                    </li>

                    <li class="dropdown {{Route::currentRouteName() == "secretariado" || Route::currentRouteName() == "local" ? "active": ""}}">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span>Informações <span class="caret"></span><span class="border {{Route::currentRouteName() == "local" || Route::currentRouteName() == "gallery" ? "border-active": ""}}"></span></span></a>
                        <ul class="dropdown-menu">
                            <li class="{{Route::currentRouteName() == "local" ? "active": ""}}"><a href="{{route("local")}}"><span>Local <span class="border {{Route::currentRouteName() == "local" ? "border-active": ""}}"></span></span></a></li>
                            <li class="{{Route::currentRouteName() == "gallery" ? "active": ""}}"><a href="{{route("gallery")}}"><span>Secretariado <span class="border {{Route::currentRouteName() == "gallery" ? "border-active": ""}}"></span></span></a></li>
                        </ul>
                    </li>

                    <li class="{{Route::currentRouteName() == "questionarios" ? "active": ""}}"><a href="{{route("questionarios")}}"><span>Questionários <span class="border {{Route::currentRouteName() == "questionarios" ? "border-active": ""}}"></span></span></a></li>
                    <li><a href="elements.html"><span>Sponsors <span class="border"></span></span></a></li>
                    <li class="dropdown {{Route::currentRouteName() == "downloads" || Route::currentRouteName() == "gallery" ? "active": ""}}">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span>Galeria <span class="caret"></span><span class="border {{Route::currentRouteName() == "downloads" || Route::currentRouteName() == "gallery" ? "border-active": ""}}"></span></span></a>
                        <ul class="dropdown-menu">
                            <li class="{{Route::currentRouteName() == "downloads" ? "active": ""}}"><a href="{{route("downloads")}}"><span>Materiais <span class="border {{Route::currentRouteName() == "downloads" ? "border-active": ""}}"></span></span></a></li>
                            <li class="{{Route::currentRouteName() == "gallery" ? "active": ""}}"><a href="{{route("gallery")}}"><span>Galeria <span class="border {{Route::currentRouteName() == "gallery" ? "border-active": ""}}"></span></span></a></li>
                        </ul>
                    </li>

                    <li><a class="btn btn-primary btn-sm btn-inscricoes" href="elements.html"><span class="glyphicon glyphicon-copy"></span> INSCRIÇÕES</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
