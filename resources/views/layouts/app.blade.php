<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
</head>

<body>
    <div id="app">


        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
                    <div class="logo_laravel">
                        <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg"
                            style="width: 150px">
                            <g clip-path="url(#clip0)" fill="#EF3B2D">
                                <path
                                    d="M248.032 44.676h-16.466v100.23h47.394v-14.748h-30.928V44.676zM337.091 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.431 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162-.001 2.863-.479 5.584-1.432 8.161zM463.954 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.432 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162 0 2.863-.479 5.584-1.432 8.161zM650.772 44.676h-15.606v100.23h15.606V44.676zM365.013 144.906h15.607V93.538h26.776V78.182h-42.383v66.724zM542.133 78.182l-19.616 51.096-19.616-51.096h-15.808l25.617 66.724h19.614l25.617-66.724h-15.808zM591.98 76.466c-19.112 0-34.239 15.706-34.239 35.079 0 21.416 14.641 35.079 36.239 35.079 12.088 0 19.806-4.622 29.234-14.688l-10.544-8.158c-.006.008-7.958 10.449-19.832 10.449-13.802 0-19.612-11.127-19.612-16.884h51.777c2.72-22.043-11.772-40.877-33.023-40.877zm-18.713 29.28c.12-1.284 1.917-16.884 18.589-16.884 16.671 0 18.697 15.598 18.813 16.884h-37.402zM184.068 43.892c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002-35.648-20.524a2.971 2.971 0 00-2.964 0l-35.647 20.522-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v38.979l-29.706 17.103V24.493a3 3 0 00-.103-.776c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002L40.098 1.396a2.971 2.971 0 00-2.964 0L1.487 21.919l-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v122.09c0 1.063.568 2.044 1.489 2.575l71.293 41.045c.156.089.324.143.49.202.078.028.15.074.23.095a2.98 2.98 0 001.524 0c.069-.018.132-.059.2-.083.176-.061.354-.119.519-.214l71.293-41.045a2.971 2.971 0 001.489-2.575v-38.979l34.158-19.666a2.971 2.971 0 001.489-2.575V44.666a3.075 3.075 0 00-.106-.774zM74.255 143.167l-29.648-16.779 31.136-17.926.001-.001 34.164-19.669 29.674 17.084-21.772 12.428-43.555 24.863zm68.329-76.259v33.841l-12.475-7.182-17.231-9.92V49.806l12.475 7.182 17.231 9.92zm2.97-39.335l29.693 17.095-29.693 17.095-29.693-17.095 29.693-17.095zM54.06 114.089l-12.475 7.182V46.733l17.231-9.92 12.475-7.182v74.537l-17.231 9.921zM38.614 7.398l29.693 17.095-29.693 17.095L8.921 24.493 38.614 7.398zM5.938 29.632l12.475 7.182 17.231 9.92v79.676l.001.005-.001.006c0 .114.032.221.045.333.017.146.021.294.059.434l.002.007c.032.117.094.222.14.334.051.124.088.255.156.371a.036.036 0 00.004.009c.061.105.149.191.222.288.081.105.149.22.244.314l.008.01c.084.083.19.142.284.215.106.083.202.178.32.247l.013.005.011.008 34.139 19.321v34.175L5.939 144.867V29.632h-.001zm136.646 115.235l-65.352 37.625V148.31l48.399-27.628 16.953-9.677v33.862zm35.646-61.22l-29.706 17.102V66.908l17.231-9.92 12.475-7.182v33.841z" />
                            </g>
                        </svg>
                    </div>
                    {{-- config('app.name', 'Laravel') --}}
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">{{ __('Home') }}</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ url('admin') }}">{{ __('Dashboard') }}</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        {{-- Aggiunto da Dashboard CSS-Bootstrap --}}

        <div class="my-wrapper-100vh">
            <!-- header -->
            {{-- <header class="border">
                <div class="container-fluid">
                    <div class="row align-content-center">
                        <!-- logo -->
                        <div class="col-auto d-flex align-content-center">
                            <div class="my-logo-container">
                                <img src="img/mobile-logo.png" alt="logo-mobile" class="d-lg-none" id="logo-mobile">
                                <img src="https://hiringplatform.boolean.careers/images/logo.png" alt="logo large"
                                    class="d-none d-lg-block">
                            </div>
                        </div>
                        <!-- search -->
                        <div class="col">
                            <div class="form-floating">
                                <input type="search" class="form-control" id="floatingInput"
                                    placeholder="name@example.com" disabled>
                                <label for="floatingInput"><i class="fa-solid fa-magnifying-glass"> </i> Cerca
                                    Qualcosa</label>
                            </div>
                        </div>
                        <!-- bell e co. -->
                        <div class="col-auto d-flex">
                            <div class="d-flex align-items-center">
                                <ul class="list-group list-group-horizontal border-0 ">
                                    <li class="list-group-item border-0 d-none d-lg-block text-secondary"><i
                                            class="fa-solid fa-list-ul"></i></li>
                                    <li class="list-group-item border-0 d-none d-lg-block text-secondary"><i
                                            class="fa-solid fa-circle-question"></i></li>
                                    <li class="list-group-item border-0 d-none d-lg-block text-secondary"><i
                                            class="fa-solid fa-ellipsis-vertical"></i></li>
                                    <li class="list-group-item border-0 btn">

                                        <div class="dropdown">
                                            <button class="text-warning border-0 bg-transparent" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-solid fa-bell"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Profilo</a></li>
                                                <li><a class="dropdown-item" href="#">Fatturazione</a></li>
                                                <li><a class="dropdown-item" href="#">Logout</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>


                        </div>
                    </div>
                </div>
            </header> --}}
            <main>
                <div class="d-flex">
                    <!-- sidebar -->
                    <div class="my-sidebar my-sidebar-lg bg-dark text-white" id="sidebar">
                        <div class=" h-100 container-fluid">
                            <div class=" h-100 row">
                                <div class="col-sm-12">
                                    <div class=" d-flex h-100 flex-column justify-content-between">
                                        <div class="sidebar-top">
                                            <!-- home -->
                                            <div class=" my-btn p-2">
                                                <a href="{{ route('admin.projects.index') }}">
                                                    <i class="fa-solid fa-house"></i> <span
                                                        class="px-1 d-none d-lg-inline">
                                                        Home</span></a>
                                            </div>
                                            <!-- stats -->
                                            <div class="my-btn p-2">
                                                <i class="fa-solid fa-chart-simple"></i> <span
                                                    class="px-1 d-none d-lg-inline"> Stats</span>
                                            </div>
                                            <!-- Signal -->
                                            <div class="my-btn p-2">
                                                <i class="fa-solid fa-signal"></i> <span
                                                    class="px-1 d-none d-lg-inline"> Signal</span>
                                            </div>
                                        </div>
                                        <div class="sidebar-bottom">
                                            <!-- admin -->
                                            <div class="my-btn p-2">
                                                <i class="fa-solid fa-gear"></i> <span class="px-1 d-none d-lg-inline">
                                                    Admin</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-content" id="main-content">

                        <div class="container-fluid">
                            <!-- top-main -->
                            <div class="row bg-primary text-white" id="top-main">
                                <div class="col-8 col-md-12">
                                    <div class="row py-2">
                                        <!-- nuovo studente -->
                                        <div class="col-12 col-md-4 col-lg order-md-last">
                                            <span class="">Nuovo Progetto</span>


                                            <button class="btn btn-outline-light ms-2" type="button"
                                                data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                                                aria-controls="offcanvasRight">+</button>
                                            <!-- offcanvas -->
                                            <div class=" offcanvas my-offcanvas offcanvas-end" tabindex="-1"
                                                id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                                                <div class="offcanvas-header">
                                                    <h5 class="offcanvas-title" id="offcanvasRightLabel">Inserisci un
                                                        nuovo studente</h5>
                                                    <button type="button" class="btn-close"
                                                        data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                                </div>

                                                <div class="offcanvas-body">
                                                    <form>
                                                        <div class="container-fluid">
                                                            <!-- nome e cognome -->
                                                            <div class="row">
                                                                <div class="col-12 col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="name"
                                                                            class="form-label">Nome</label>
                                                                        <input type="text" class="form-control"
                                                                            id="name" placeholder="">
                                                                    </div>

                                                                </div>
                                                                <div class="col-12 col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="lastname"
                                                                            class="form-label">Cognome</label>
                                                                        <input type="text" class="form-control"
                                                                            id="lastname" placeholder="">
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <!-- email e password -->
                                                            <div class="row">
                                                                <div class="col-12 col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="email"
                                                                            class="form-label">Email</label>
                                                                        <div class="input-group mb-3">
                                                                            <span class="input-group-text"
                                                                                id="basic-addon1">@</span>
                                                                            <input type="email" id="email"
                                                                                class="form-control" placeholder=""
                                                                                aria-label="Username"
                                                                                aria-describedby="basic-addon1">
                                                                        </div>
                                                                    </div>


                                                                </div>
                                                                <div class="col-12 col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="password"
                                                                            class="form-label">Password</label>
                                                                        <input type="password" class="form-control"
                                                                            id="password" placeholder="">
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <!-- email e password -->
                                                            <div class="row">
                                                                <div class="col-12 col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="email2"
                                                                            class="form-label">Email</label>
                                                                        <div class="input-group mb-3">
                                                                            <span class="input-group-text"
                                                                                id="basic-addon2">@</span>
                                                                            <input type="email" id="email2"
                                                                                class="form-control" placeholder=""
                                                                                aria-label="Username"
                                                                                aria-describedby="basic-addon1">
                                                                        </div>
                                                                    </div>


                                                                </div>
                                                                <div class="col-12 col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="password2"
                                                                            class="form-label">Password</label>
                                                                        <input type="password" class="form-control"
                                                                            id="password2" placeholder="">
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <!-- indirizzo -->
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="mb-3">
                                                                        <label for="adress"
                                                                            class="form-label">Indirizzo</label>
                                                                        <input type="text" class="form-control"
                                                                            id="adress" placeholder="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- citta, stato cap -->
                                                            <div class="row">
                                                                <div class="col-12 col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="city"
                                                                            class="form-label">CittÃ </label>
                                                                        <input type="text" class="form-control"
                                                                            id="city" placeholder="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-md-4">
                                                                    <div class="mb-3">
                                                                        <label for="state"
                                                                            class="form-label">Stato</label>
                                                                        <select class="form-select" id="state"
                                                                            aria-label="Default select example">
                                                                            <option selected>Scegli...</option>
                                                                            <option value="1">Italia</option>
                                                                            <option value="2">Svizzera</option>
                                                                            <option value="3">Montenegro</option>
                                                                        </select>
                                                                    </div>

                                                                </div>
                                                                <div class="col-12 col-md-2">
                                                                    <div class="mb-3">
                                                                        <label for="cap"
                                                                            class="form-label">CAP</label>
                                                                        <input type="text" class="form-control"
                                                                            id="cap" placeholder="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- foto -->
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="mb-3">
                                                                        <label for="formFile"
                                                                            class="form-label">Foto</label>
                                                                        <input class="form-control" type="file"
                                                                            id="formFile">
                                                                    </div>

                                                                </div>
                                                            </div>


                                                        </div>
                                                        <!-- checkbox -->
                                                        <div class="form-check mb-3">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="agree" id="flexCheckDefault">
                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                Seleziona per proseguire
                                                            </label>
                                                        </div>
                                                        <!-- submit and reset -->
                                                        <div class="col-12">
                                                            <button type="submit"
                                                                class="btn btn-primary">Salva</button>
                                                            <button type="reset"
                                                                class="btn btn-warning">Svuota</button>

                                                        </div>
                                                    </form>


                                                </div>
                                            </div>
                                        </div>
                                        <!-- left side -->
                                        <div class="col-12 col-md-4 col-lg-6">
                                            <div class="mb-1"><span class="fs-4 fw-bold">Boolean</span> <span
                                                    class="badge rounded-pill my-blue-badge">Piano Blaze</span></div>
                                            <nav class="text-white" style="--bs-breadcrumb-divider: '>>';"
                                                aria-label="breadcrumb">
                                                <ol class="breadcrumb">
                                                    <li class="breadcrumb-item">
                                                        <a href="#"><span
                                                                class="badge rounded-pill my-blue-badge">3
                                                                app</span></a>
                                                    </li>
                                                    <li class="breadcrumb-item active" aria-current="page">
                                                        <span
                                                            class="badge rounded-pill my-blue-badge me-1 d-lg-none">+</span>
                                                        <span
                                                            class="badge rounded-pill my-blue-badge me-1 d-none d-lg-inline">Boolean
                                                            mobile
                                                            app</span>
                                                        <span
                                                            class="badge rounded-pill my-blue-badge me-1 d-none d-lg-inline">Boolean
                                                            web
                                                            app</span>
                                                        <span
                                                            class="badge rounded-pill my-blue-badge me-1 d-none d-lg-inline">Boolean
                                                            blog
                                                            app</span>
                                                    </li>
                                                </ol>
                                            </nav>
                                        </div>
                                        <div class="col-12 col-md-4 col-lg-3">
                                            <span>Studenti online negli utlimi 30 minuti</span>
                                            <div class="fs-3 fw-bold">125</div>
                                        </div>

                                    </div>

                                </div>

                            </div>
                            <!-- center-main -->
                            <div id="center-main" class="row py-4">
                                <!-- left -->
                                <div class="col-12 col-lg-10">
                                    <div class="card my-4">
                                        <div class="card-header fs-5">
                                            Projects
                                        </div>
                                        <!-- tabella -->
                                        @yield('content')
                                    </div>

                                    <div class="card my-4">
                                        <div class="card-header fs-5">
                                            F.A.Q.
                                        </div>
                                        <!-- accordion -->
                                        <div class="accordion accordion-flush" id="accordionFlushExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                                        aria-expanded="false" aria-controls="flush-collapseOne">
                                                        Come aggiunere un nuovo studente?
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionFlushExample">
                                                    <div class="accordion-body">Clicca sul + in alto nella sezione blu
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                                        aria-expanded="false" aria-controls="flush-collapseTwo">
                                                        Come posso accedere alle informazioni del mio account?
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionFlushExample">
                                                    <div class="accordion-body">Clicca sull' icona della campanella
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#flush-collapseThree" aria-expanded="false"
                                                        aria-controls="flush-collapseThree">
                                                        Posso usare questa dashboard da mobile?
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseThree" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionFlushExample">
                                                    <div class="accordion-body">Vedi tu... stiamo lavorando sodo
                                                        proprio per questo</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- right -->
                                <div class="col-12 col-lg-2">
                                    <div class="card my-4">
                                        <div class="card-header fs-5"> Todo</div>
                                        <div class="card-body">
                                            <ul class="list-group">
                                                <li class="list-group-item">
                                                    <input class="form-check-input me-1" type="checkbox"
                                                        value="" id="firstCheckbox">
                                                    <label class="form-check-label" for="firstCheckbox">Kickoff nuove
                                                        classi</label>
                                                </li>
                                                <li class="list-group-item">
                                                    <input class="form-check-input me-1" type="checkbox"
                                                        value="" id="secondCheckbox">
                                                    <label class="form-check-label" for="secondCheckbox">Lezione su
                                                        Bootstrap 5 in classe
                                                        #107</label>
                                                </li>
                                                <li class="list-group-item">
                                                    <input class="form-check-input me-1" type="checkbox"
                                                        value="" id="thirdCheckbox">
                                                    <label class="form-check-label" for="thirdCheckbox">Controllare
                                                        username github studenti</label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card">
                                                <img src="https://cdn.statcdn.com/Statistic/1400000/1400547-blank-754.png"
                                                    class="card-img-top" alt="stats">
                                                <div class="card-body">
                                                    <h5 class="card-title">Utenti attivi</h5>
                                                    <p class="card-text">Lista degli utenti attivi in piattaforma
                                                        nell'ultimo mese</p>
                                                </div>
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item">Gennaio: 1200</li>
                                                    <li class="list-group-item">Febbraio: 800</li>
                                                    <li class="list-group-item">Marzo: 1500</li>
                                                </ul>
                                                <div class="card-body">
                                                    <a href="#" class="card-link">Visualizza report
                                                        approfondito</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </main>
        </div>
</body>

</html>
