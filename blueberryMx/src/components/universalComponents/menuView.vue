<template>
     <nav class="navbar navbar-expand-lg light">
        <div class="container">

            <!-- Logo -->
            <a class="logo" @click="$router.push({ name: 'home' })">
                <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1672696431/BlueberryMX/logo-dark_afakee.gif" alt="logo"/>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"><i class="fas fa-bars"></i></span>
            </button>

            <!-- navbar links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link " @click="$router.push({ name: 'home' })">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" @click="$router.push({ name: 'about' })">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" @click="$router.push({ name: 'DesarrolloWeb' })">Desarrollo Web</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" @click="$router.push({ name: 'Ecommerce' })">E-commerce</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" @click="$router.push({ name: 'Portafolio' })">Portafolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" @click="$router.push({ name: 'Contacto' })">Contacto</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false">Lenguaje</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" @click="$router.push({ name: 'home' })">Español</a>
                            <a class="dropdown-item" @click="$router.push({ name: 'Index' })">Inglés</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>