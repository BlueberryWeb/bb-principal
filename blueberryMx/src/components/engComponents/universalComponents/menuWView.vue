<template>
    <nav class="navbar navbar-expand-lg change">
        <div class="container">

            <!-- Logo -->
            <a class="logo" @click="$router.push({ name: 'Index' })">
                <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1672696437/BlueberryMX/logo-light_mxvdxk.gif" alt="logo"/>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"><i class="fas fa-bars"></i></span>
            </button>

            <!-- navbar links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" @click="$router.push({ name: 'Index' })">Index</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" @click="$router.push({ name: 'AboutUs' })">About us</a>
                    </li>
                      <li class="nav-item">
                        <a class="nav-link" @click="$router.push({ name: 'WebDevelopment' })">Web Development</a>
                    </li>
                      <li class="nav-item">
                        <a class="nav-link" @click="$router.push({ name: 'E-commerce' })">E-commerce</a>
                    </li>
                      <li class="nav-item">
                        <a class="nav-link" @click="$router.push({ name: 'Portfolio' })">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" @click="$router.push({ name: 'Contact' })">Contact</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false">Language</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" @click="$router.push({ name: 'home' })">Spanish</a>
                            <a class="dropdown-item" @click="$router.push({ name: 'Index' })">English</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>