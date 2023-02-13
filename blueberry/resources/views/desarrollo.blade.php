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

    <div class="main-content">

        
        <!-- ==================== Start app-services ==================== -->

        <section class="app-services section-padding bg-gray">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="s-head text-center mb-80">
                            <h2 class="color-font mb-10 semiBold fz-60 wow fadeInUp">Desarrollo Web</h2>
                            <p class="regular wow text fz-18" data-splitting>El desarrollo web es un componente esencial para cualquier empresa de este siglo. Para llegar
                                a un público más amplio, tener mayor prescencia y aumentar las ventas, hay que estar en línea.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="item tam-cards-ch-3 wow fadeIn" data-wow-delay=".3s">
                            <div class="item-tit mb-15">
                                <div class="icon">
                                    <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785608/desarrolloWeb/icono-diseno_hrawhx.png" alt=""/>
                                </div>
                                <div class="text-tit">
                                    <h5 class="semiBold">Diseño de sitios web</h5>
                                </div>
                            </div>
    
                            <p class="fz-16"> Diseñamos sitios web desde 0, teniendo en cuenta los requisitos de 
                                nuestros clientes y el estándar de calidad para su negocio.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="item tam-cards-ch-3 wow fadeIn" data-wow-delay=".6s">
                            <div class="item-tit mb-15">
                                <div class="icon">
                                    <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785607/desarrolloWeb/icono-centrada_k3d6ix.png" alt=""/>
                                </div>
                                <div class="text-tit">
                                    <h5 class="semiBold">Centrada en el usuario</h5>
                                </div>
                            </div>
    
                            <p class="fz-16"> Los desarrollos móviles y web no se diseñan basándose únicamente en las 
                                funciones. Ahora se presta atención a las carácteristicas y la interacción 
                                con la interfaz.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="item mb-30 wow fadeIn tam-cards-ch-3" data-wow-delay=".9s">
                            <div class="item-tit mb-15">
                                <div class="icon">
                                    <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785608/desarrolloWeb/icono-interfaz_i8thi7.png" alt=""/>
                                </div>
                                <div class="text-tit">
                                    <h5 class="semiBold">Interfaz de usuario</h5>
                                </div>
                            </div>
    
                            <p class="fz-16"> La interfaz se diseña para captar la atención de los usarios. 
                                Utilizando una interfaz gráfica con capacidad de respuesta, creamos la magia 
                                que su empresa necesita para crecer.
                                <br>
                                    
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="item sm-mb50 wow fadeIn tam-cards-ch-3" data-wow-delay=".3s">
                            <div class="item-tit mb-15">
                                <div class="icon">
                                    <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785608/desarrolloWeb/icono-experiencia_sdufiw.png" alt=""/>
                                </div>
                                <div class="text-tit">
                                    <h5 class="semiBold">Experiencia de usuario</h5>
                                </div>
                            </div>
                            <p class="fz-16">Tenemos en cuenta las necesidades del usuario, vemos lo que buscan en el diseño de 
                                sitios web y creamos soluciones que maximizan la utilidad y facilidad para sus usuarios.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="item sm-mb50 wow fadeIn tam-cards-ch-3" data-wow-delay=".6s">
                            <div class="item-tit mb-15">
                                <div class="icon">
                                    <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785607/desarrolloWeb/icono-pruebas_bk6qg5.png" alt=""/>
                                </div>
                                <div class="text-tit">
                                    <h5 class="semiBold">Pruebas</h5>
                                </div>
                            </div>
    
                            <p class="mb-25 fz-16"> Una vez finalizados nuestros proyectos, comprobamos las carácteristicas y funcionalidad, la facilidad de uso,
                                la uniformidad de experiencia en varios dispositivos, y mucho más.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="item wow fadeIn tam-cards-ch-3" data-wow-delay=".9s">
                            <div class="item-tit mb-15">
                                <div class="icon">
                                    <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785607/desarrolloWeb/icono-comprobacion_xl4lym.png" alt="" class="icono-compro"/>
                                </div>
                                <div class="text-tit">
                                    <h5 class="semiBold">Comprobaciones de rendimiento</h5>
                                </div>
                            </div>
                            <p class="fz-16 mb-25">Comprobamos la capacidad de respuesta, las pruebas de estrés, las pruebas de carga y 
                                mucho más en cada arquitectura y diseño en el que trabajamos.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End app-services ==================== -->

        


        <!-- ==================== Start app-testim ==================== -->

        <section class="app-testim section-padding bg-gray">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7 col-md-10">
                        <div class="s-head text-center mb-80">
                            <h2 class="color-font semiBold wow fadeInUp">Llevamos a tu negocio al siguiente nivel</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide ">
                                    <div class="item wow fadeIn tam-cards-gde" data-wow-delay=".3s">
                                        <div class="icon mb-50">
                                            <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785608/desarrolloWeb/desarrollo-web_azxgyo.png" alt="" class="mb-15 icon-comparacion-1 mb-20"/>
                                            <h6 class="semiBold">Desarrollo web</h6>
    
                                        </div>
                                        <div class="text mb-85">
                                            <p class="mb-10">
                                                1-7 seccciones
                                            </p>
                                            <p class="mb-10">
                                                <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785607/desarrolloWeb/icono-SEO_hlp8uf.png" alt="SEO" class="iconos-ch"/> <br/>
                                                SEO altamente efectivo
                                            </p>
                                            <p class="mb-10">
                                                <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785608/desarrolloWeb/icono-certificado_s7izyd.png" alt="SSL" class="iconos-ch-2"/> <br/>
                                                Certificado SSL
                                            </p>
                                            <p class="mb-10">
                                                <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785607/desarrolloWeb/icono-ciberseguridad_cyc6tl.png" alt="ciberseguridad" class="iconos-ch"/> <br/>
                                                Programación con ciberseguridad
                                            </p>
                                            <p class="mb-10">
                                                <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785608/desarrolloWeb/icono-codigo_uxf7pt.png" alt="Código" class="iconos-ch"/> <br/>
                                                Código basado en buenas prácticas
                                            </p>
                                            <p class="mb-10">
                                                <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785608/desarrolloWeb/icono-contenido_v7yr17.png" alt="Contenido audivisual" class="iconos-ch"/> <br/>
                                                Contenido audivisual
                                            </p>
                                            <p class="pb-10">
                                                <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785608/desarrolloWeb/icono-formulario_hkpjxb.png" alt="Formulario" class="iconos-ch"/> <br/>
                                                Formulario de contacto
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide mb-200">
                                    <div class="item wow fadeIn tam-cards-gde" data-wow-delay=".6s">
                                        <div class="icon mb-50">
                                            <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785607/desarrolloWeb/plataforma-web_nphlu6.png" alt="" class="mb-15 icon-comparacion-2 mb-20"/>
                                            <h6 class="semiBold">Plataforma web</h6>
    
                                        </div>
                                        <div class="text mb-30">
                                            <p class="mb-10">
                                                1-7 seccciones
                                            </p>
                                            <p class="mb-10">
                                                <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785607/desarrolloWeb/icono-SEO_hlp8uf.png" alt="SEO" class="iconos-ch"/> <br/>
                                                SEO altamente efectivo
                                            </p>
                                            <p class="mb-10">
                                                <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785608/desarrolloWeb/icono-certificado_s7izyd.png" alt="SSL" class="iconos-ch-2"/> <br/>
                                                Certificado SSL
                                            </p>
                                            <p class="mb-10">
                                                <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785607/desarrolloWeb/icono-ciberseguridad_cyc6tl.png" alt="ciberseguridad" class="iconos-ch"/> <br/>
                                                Programación con ciberseguridad
                                            </p>
                                            <p class="mb-10">
                                                <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785608/desarrolloWeb/icono-codigo_uxf7pt.png" alt="Código" class="iconos-ch"/> <br/>
                                                Código basado en buenas prácticas
                                            </p>
                                            <p class="mb-10">
                                                <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785608/desarrolloWeb/icono-contenido_v7yr17.png" alt="Contenido audivisual" class="iconos-ch"/> <br/>
                                                Contenido audivisual
                                            </p>
                                            <p class="mb-10">
                                                <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785608/desarrolloWeb/icono-formulario_hkpjxb.png" alt="Formulario" class="iconos-ch"/> <br/>
                                                Formulario de contacto
                                            </p>
                                            <p class="mb-10">
                                                <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785607/desarrolloWeb/icono-back-admin_oeru4w.png" alt="Back admin" class="iconos-ch"/> <br/>
                                                Back admin
                                            </p>
                                            <p class="mb-10">
                                                <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785607/desarrolloWeb/icono-autoadmin_ebny6p.png" alt="Contenido autoadministrable" class="iconos-ch"/> <br/>
                                                Contenido autoadministrable
                                            </p>
                                            <p class="mb-10">
                                                <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785609/desarrolloWeb/icono-gestion_nv5jhp.png" alt="Gestión" class="iconos-ch"/> <br/>
                                                Gestión y protección de información
                                            </p>
                                            <p class="mb-10">
                                                <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785607/desarrolloWeb/icono-diseno-black_b9ibhi.png" alt="Diseño" class="iconos-ch"/> <br/>
                                                Diseño escalable para el manejo de información
                                            </p>
                                            <p class="pb-75">
                                                <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785607/desarrolloWeb/icono-encriptacion_uznli1.png" alt="Encriptación" class="iconos-ch"/> <br/>
                                                Encriptación de información sensible
                                            </p>
                                                
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="item wow fadeIn tam-cards-gde" data-wow-delay=".9s">
                                        <div class="icon mb-50">
                                            <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785607/desarrolloWeb/e-commerce_l493ry.png" alt="" class="mb-15 icon-comparacion-3 mb-20"/>
                                            <h6 class="semiBold">E-commerce</h6>
    
                                        </div>
                                        <div class="text">
                                            <p class="mb-10">
                                                1-7 seccciones
                                            </p>
                                            <p class="mb-10">
                                                <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785607/desarrolloWeb/icono-SEO_hlp8uf.png" alt="SEO" class="iconos-ch"/> <br/>
                                                SEO altamente efectivo
                                            </p>
                                            <p class="mb-10">
                                                <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785608/desarrolloWeb/icono-certificado_s7izyd.png" alt="SSL" class="iconos-ch-2"/> <br/>
                                                Certificado SSL
                                            </p>
                                            <p class="mb-10">
                                                <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785607/desarrolloWeb/icono-ciberseguridad_cyc6tl.png" alt="ciberseguridad" class="iconos-ch"/> <br/>
                                                Programación con ciberseguridad
                                            </p>
                                            <p class="mb-10">
                                                <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785608/desarrolloWeb/icono-codigo_uxf7pt.png" alt="Código" class="iconos-ch"/> <br/>
                                                Código basado en buenas prácticas
                                            </p>
                                            <p class="mb-10">
                                                <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785608/desarrolloWeb/icono-contenido_v7yr17.png" alt="Contenido audivisual" class="iconos-ch"/> <br/>
                                                Contenido audivisual
                                            </p>
                                            <p class="mb-10">
                                                <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785608/desarrolloWeb/icono-formulario_hkpjxb.png" alt="Formulario" class="iconos-ch"/> <br/>
                                                Formulario de contacto
                                            </p>
                                            <p class="mb-10">
                                                <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785607/desarrolloWeb/icono-back-admin_oeru4w.png" alt="Back admin" class="iconos-ch"/> <br/>
                                                Back admin
                                            </p>
                                            <p class="mb-10">
                                                <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785607/desarrolloWeb/icono-autoadmin_ebny6p.png" alt="Contenido autoadministrable" class="iconos-ch"/> <br/>
                                                Contenido autoadministrable
                                            </p>
                                            <p class="mb-10">
                                                <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785609/desarrolloWeb/icono-gestion_nv5jhp.png" alt="Gestión" class="iconos-ch"/> <br/>
                                                Gestión y protección de información
                                            </p>
                                            <p class="mb-10">
                                                <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785607/desarrolloWeb/icono-diseno-black_b9ibhi.png" alt="Diseño" class="iconos-ch"/> <br/>
                                                Diseño escalable para el manejo de información
                                            </p>
                                            <p class="mb-10">
                                                <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785607/desarrolloWeb/icono-encriptacion_uznli1.png" alt="Encriptación" class="iconos-ch"/> <br/>
                                                Encriptación de información sensible
                                            </p>
                                            <p class="mb-10">
                                                <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785609/desarrolloWeb/icono-infraestructura_ykvcp3.png" alt="Infraestructura" class="iconos-ch"/> <br/>
                                                Infraestructura de pagos
                                            </p>
                                            <p>
                                                <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785607/desarrolloWeb/icono-pagos-en-linea_tjnb7g.png" alt="Pagos" class="iconos-ch"/> <br/>
                                                Manejo seguro de pagos en línea
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End app-testim ==================== -->

    
     <!-- ==================== Start call-to-action ==================== -->

     @include('components.callToAction')

     <!-- ==================== End call-to-action ==================== -->



     <!-- ==================== Start Footer ==================== -->

     @include('components.footer')

     <!-- ==================== End Footer ==================== -->


    </div>
    @include('components.scripts')

    
</body>
</html>