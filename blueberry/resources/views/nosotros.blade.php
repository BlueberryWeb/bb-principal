<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Metas -->
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="author" content="blueberry.mx" />
    
    <!-- Title  -->
    <title>Blueberry | Agencia de publicidad </title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="https://res.cloudinary.com/dej55trpk/image/upload/v1675785564/favicon_h7ecbp.png" />
    
    <!-- Plugins -->
    <link rel="stylesheet" href="{{ asset('front/css/plugins.css') }}" />
    
    <!-- Core Style Css -->
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}" />
</head>
<body>
    <!-- ==================== Start Navbar ==================== -->

     @include('components.menuN')

    <!-- ==================== End Navbar ==================== -->


    <!-- ==================== Start Slider ==================== -->

    <header class="pages-header circle-bg valign">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="cont mt-100 mb-50 text-center">
                        <h1 class="color-font fw-700 fz-40 wow fadeInUp">Somos una agencia creativa especializada en el desarrollo web,
                            nuestra pasión por la tecnología, nos permite crear proyectos y soluciones exitosos para nuestros
                            clientes.
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="half sub-bg">
            <div class="circle-color">
                <div class="gradient-circle"></div>
                <div class="gradient-circle two"></div>
            </div>
        </div>
    </header>

    <!-- ==================== End Slider ==================== -->


    <!-- ==================== Start Minimal-Area ==================== -->

    <section class="min-area sub-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="img wow fadeInUp">
                        <img class="thumparallax-down" src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785614/nosotros/contact-03_ux9kzp.jpg" alt=""/>
                    </div>
                </div>
                <div class="col-lg-6 valign">
                    <div class="content pt-0">
                        <h4 class="wow color-font fadeInUp fz-50">¿Por qué nosotros?</h4>
                        <p class="wow txt fz-18" data-splitting>Un pensamiento audaz, una creatividad atrevida y la 
                            tecnología adecuada desbloquearán un nuevo crecimiento para su empresa. Como líder
                            progresista, está buscando un socio que le ayude a alcanzar todo su potencial. 
                        </p>
                        <ul class="feat">
                            <li class="wow fadeInUp" data-wow-delay=".2s">
                                <h6 class="semiBold fz-20"><span>1</span> Materializando ideas</h6>
                                <p class="fz-16">Nuestra innovación, creatividad y experiencia, nos dan una perspectiva
                                    integral de todas tus necesidades, dejándonos tomar las mejores decisiones para
                                    materializar tus ideas.
                                </p>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay=".4s">
                                <h6 class="semiBold fz-20"><span>2</span> Alcanzando las metas</h6>
                                <p class="fz-16">Desarrollando la visión del cliente a tráves de la tecnología,
                                    en Blueberry cubrimos todas tus necesidades, garántizandole los 
                                    estándares de seguridad y calidad.
                                </p>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay=".6s">
                                <h6 class="bold fz-20">15 + años de experiencia </h6>
                                <h6 class="bold fz-20"> 100 + clientes felices</h6>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== End Minimal-Area ==================== -->


    <!-- ==================== Start clients Brands ==================== -->

    <section class="clients section-padding">
        <div class="container">
            <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785611/nosotros/marcas-que-ayudamos_ej6r4j.png" alt="Marcas que ayudamos a crecer"/>
        </div>
    </section>

    <!-- ==================== End clients Brands ==================== -->


    <!-- ==================== Start Team ==================== -->

    <div class="team-crv section-padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="content wow fadeInUp md-mb30" data-wow-delay=".5s">
                        <div class="skills-box mt-40">
                            <div class="skill-item">
                                <h6 class="custom-font fz-70 semiBold">Metodología basada en resultados</h6>
                                <div class="skill-progress">
                                    <div class="progres" data-value="100%"></div>
                                </div>
                            </div>
                            <div class="skill-item">
                                <h6 class="custom-font fz-70 semiBold"> Alto nivel tecnológico</h6>
                                <div class="skill-progress">
                                    <div class="progres" data-value="100%"></div>
                                </div>
                            </div>
                            <div class="skill-item">
                                <h6 class="custom-font fz-70 semiBold">Diseño dinámico</h6>
                                <div class="skill-progress">
                                    <div class="progres" data-value="100%"></div>
                                </div>
                            </div>
                            <div class="skill-item">
                                <h6 class="custom-font fz-70 semiBold">Materializamos tu idea de negocio</h6>
                                <div class="skill-progress">
                                    <div class="progres" data-value="100%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ==================== End Team ==================== -->



    <!-- ==================== Start Services ==================== -->

    <section class="serv-arch" data-scroll-index="1">
        <div class="container-fluid">
            <div class="row justify-content-center">

                <div class="col-lg col-md-6 item bg-img wow fadeInUp" data-background="https://res.cloudinary.com/dej55trpk/image/upload/v1675785610/nosotros/bb_01_yqqnng.jpg" data-wow-delay=".2s">
                    <h6 class="numb">01</h6>
                    <h5>Propiedad del código</h5>
                    <p>
                        Nosotros lo creamos, tú eres el propietario. Así de sencillo. Una vez que terminamos el desarrollo, 
                        te pasamos el código completo para que el proyecto sea tuyo.
                    </p>
                </div>

                <div class="col-lg col-md-6 item bg-img wow fadeInUp" data-background="https://res.cloudinary.com/dej55trpk/image/upload/v1675785610/nosotros/bb_02_phbut9.jpg" data-wow-delay=".4s">
                    <h6 class="numb">02</h6>
                    <h5>Sin terceros</h5>
                    <p>Mantenemos todo dentro de la empresa. Esto nos permite garantizar proyectos de alta 
                        calidad a tiempo.
                    </p>
                </div>

                <div class="col-lg col-md-6 item bg-img wow fadeInUp" data-background="https://res.cloudinary.com/dej55trpk/image/upload/v1675785610/nosotros/bb_03_d1gs9p.jpg" data-wow-delay=".6s">
                    <h6 class="numb">03</h6>
                    <h5>Transparencia</h5>
                    <p>Nuestra empresa se basa en colaboraciones a largo plazo. Para ello nos comprometemos
                        a ser absolutamente transparente en todo.
                    </p>
                </div>

                <div class="col-lg col-md-6 item bg-img wow fadeInUp" data-background="https://res.cloudinary.com/dej55trpk/image/upload/v1675785612/nosotros/bb_04_sscaj3.jpg" data-wow-delay=".8s">
                    <h6 class="numb">04</h6>
                    <h5>El diseño está en nuestro ADN</h5>
                    <p>Nuestra gran pasión por el diseño, continúa tocando el corazón de todo lo que hacemos.</p>
                </div>

                <div class="col-lg col-md-6 item bg-img wow fadeInUp" data-background="https://res.cloudinary.com/dej55trpk/image/upload/v1675785611/nosotros/bb_05_gfqwce.jpg" data-wow-delay="1s">
                    <h6 class="numb">05</h6>
                    <h5>Alta seguridad</h5>
                    <p>Utilizamos la tecnología para mantener segura una conexión, como para proteger toda la información 
                        confidencial.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- ==================== End Services ==================== -->


     <!-- ==================== Start call-to-action ==================== -->

     @include('components.callToAction')

     <!-- ==================== End call-to-action ==================== -->



     <!-- ==================== Start Footer ==================== -->

     @include('components.footer')

     <!-- ==================== End Footer ==================== -->

     @include('components.scripts')
 

</body>
</html>