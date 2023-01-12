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
    <link rel="shortcut icon" href="https://res.cloudinary.com/dra1bsh4u/image/upload/v1672696440/BlueberryMX/favicon_rvg88e.png" />

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
                                    <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1672696406/BlueberryMX/desarrolloWeb/icono-diseno_wucxxt.png" alt=""/>
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
                                    <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1672696406/BlueberryMX/desarrolloWeb/icono-centrada_ac4qng.png" alt=""/>
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
                                    <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1672696407/BlueberryMX/desarrolloWeb/icono-interfaz_grkfyi.png" alt=""/>
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
                                    <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1672696406/BlueberryMX/desarrolloWeb/icono-experiencia_tp4ebg.png" alt=""/>
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
                                    <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1672696407/BlueberryMX/desarrolloWeb/icono-pruebas_kt9u5k.png" alt=""/>
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
                                    <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1672696406/BlueberryMX/desarrolloWeb/icono-comprobacion_pns4jw.png" alt="" class="icono-compro"/>
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
                                            <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1672696406/BlueberryMX/desarrolloWeb/desarrollo-web_edzrp6.png" alt="" class="mb-15 icon-comparacion-1 mb-20"/>
                                            <h6 class="semiBold">Desarrollo web</h6>
    
                                        </div>
                                        <div class="text mb-85">
                                            <p class="mb-10">
                                                1-7 seccciones
                                            </p>
                                            <p class="mb-10">
                                                <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1673286553/BlueberryMX/desarrolloWeb/icono-SEO_srumns.png" alt="SEO" class="iconos-ch"/> <br/>
                                                SEO altamente efectivo
                                            </p>
                                            <p class="mb-10">
                                                <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1673286553/BlueberryMX/desarrolloWeb/icono-certificado_gipapq.png" alt="SSL" class="iconos-ch-2"/> <br/>
                                                Certificado SSL
                                            </p>
                                            <p class="mb-10">
                                                <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1673286553/BlueberryMX/desarrolloWeb/icono-ciberseguridad_l4lvb0.png" alt="ciberseguridad" class="iconos-ch"/> <br/>
                                                Programación con ciberseguridad
                                            </p>
                                            <p class="mb-10">
                                                <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1673286553/BlueberryMX/desarrolloWeb/icono-codigo_thmugm.png" alt="Código" class="iconos-ch"/> <br/>
                                                Código basado en buenas prácticas
                                            </p>
                                            <p class="mb-10">
                                                <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1673286553/BlueberryMX/desarrolloWeb/icono-contenido_wv9lqc.png" alt="Contenido audivisual" class="iconos-ch"/> <br/>
                                                Contenido audivisual
                                            </p>
                                            <p class="pb-10">
                                                <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1673286553/BlueberryMX/desarrolloWeb/icono-formulario_mp6ueu.png" alt="Formulario" class="iconos-ch"/> <br/>
                                                Formulario de contacto
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide mb-200">
                                    <div class="item wow fadeIn tam-cards-gde" data-wow-delay=".6s">
                                        <div class="icon mb-50">
                                            <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1672696407/BlueberryMX/desarrolloWeb/plataforma-web_rgn5g7.png" alt="" class="mb-15 icon-comparacion-2 mb-20"/>
                                            <h6 class="semiBold">Plataforma web</h6>
    
                                        </div>
                                        <div class="text mb-30">
                                            <p class="mb-10">
                                                1-7 seccciones
                                            </p>
                                            <p class="mb-10">
                                                <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1673286553/BlueberryMX/desarrolloWeb/icono-SEO_srumns.png" alt="SEO" class="iconos-ch"/> <br/>
                                                SEO altamente efectivo
                                            </p>
                                            <p class="mb-10">
                                                <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1673286553/BlueberryMX/desarrolloWeb/icono-certificado_gipapq.png" alt="SSL" class="iconos-ch-2"/> <br/>
                                                Certificado SSL
                                            </p>
                                            <p class="mb-10">
                                                <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1673286553/BlueberryMX/desarrolloWeb/icono-ciberseguridad_l4lvb0.png" alt="ciberseguridad" class="iconos-ch"/> <br/>
                                                Programación con ciberseguridad
                                            </p>
                                            <p class="mb-10">
                                                <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1673286553/BlueberryMX/desarrolloWeb/icono-codigo_thmugm.png" alt="Código" class="iconos-ch"/> <br/>
                                                Código basado en buenas prácticas
                                            </p>
                                            <p class="mb-10">
                                                <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1673286553/BlueberryMX/desarrolloWeb/icono-contenido_wv9lqc.png" alt="Contenido audivisual" class="iconos-ch"/> <br/>
                                                Contenido audivisual
                                            </p>
                                            <p class="mb-10">
                                                <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1673286553/BlueberryMX/desarrolloWeb/icono-formulario_mp6ueu.png" alt="Formulario" class="iconos-ch"/> <br/>
                                                Formulario de contacto
                                            </p>
                                            <p class="mb-10">
                                                <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1673286553/BlueberryMX/desarrolloWeb/icono-back-admin_jixenv.png" alt="Back admin" class="iconos-ch"/> <br/>
                                                Back admin
                                            </p>
                                            <p class="mb-10">
                                                <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1673286553/BlueberryMX/desarrolloWeb/icono-autoadmin_h5ctlz.png" alt="Contenido autoadministrable" class="iconos-ch"/> <br/>
                                                Contenido autoadministrable
                                            </p>
                                            <p class="mb-10">
                                                <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1673286553/BlueberryMX/desarrolloWeb/icono-gestion_yrlza7.png" alt="Gestión" class="iconos-ch"/> <br/>
                                                Gestión y protección de información
                                            </p>
                                            <p class="mb-10">
                                                <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1673286543/BlueberryMX/desarrolloWeb/icono-diseno-black_isqhhl.png" alt="Diseño" class="iconos-ch"/> <br/>
                                                Diseño escalable para el manejo de información
                                            </p>
                                            <p class="pb-75">
                                                <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1673286553/BlueberryMX/desarrolloWeb/icono-encriptacion_tvuwkg.png" alt="Encriptación" class="iconos-ch"/> <br/>
                                                Encriptación de información sensible
                                            </p>
                                                
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="item wow fadeIn tam-cards-gde" data-wow-delay=".9s">
                                        <div class="icon mb-50">
                                            <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1672696406/BlueberryMX/desarrolloWeb/e-commerce_ppjcpx.png" alt="" class="mb-15 icon-comparacion-3 mb-20"/>
                                            <h6 class="semiBold">E-commerce</h6>
    
                                        </div>
                                        <div class="text">
                                            <p class="mb-10">
                                                1-7 seccciones
                                            </p>
                                            <p class="mb-10">
                                                <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1673286553/BlueberryMX/desarrolloWeb/icono-SEO_srumns.png" alt="SEO" class="iconos-ch"/> <br/>
                                                SEO altamente efectivo
                                            </p>
                                            <p class="mb-10">
                                                <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1673286553/BlueberryMX/desarrolloWeb/icono-certificado_gipapq.png" alt="SSL" class="iconos-ch-2"/> <br/>
                                                Certificado SSL
                                            </p>
                                            <p class="mb-10">
                                                <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1673286553/BlueberryMX/desarrolloWeb/icono-ciberseguridad_l4lvb0.png" alt="ciberseguridad" class="iconos-ch"/> <br/>
                                                Programación con ciberseguridad
                                            </p>
                                            <p class="mb-10">
                                                <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1673286553/BlueberryMX/desarrolloWeb/icono-codigo_thmugm.png" alt="Código" class="iconos-ch"/> <br/>
                                                Código basado en buenas prácticas
                                            </p>
                                            <p class="mb-10">
                                                <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1673286553/BlueberryMX/desarrolloWeb/icono-contenido_wv9lqc.png" alt="Contenido audivisual" class="iconos-ch"/> <br/>
                                                Contenido audivisual
                                            </p>
                                            <p class="mb-10">
                                                <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1673286553/BlueberryMX/desarrolloWeb/icono-formulario_mp6ueu.png" alt="Formulario" class="iconos-ch"/> <br/>
                                                Formulario de contacto
                                            </p>
                                            <p class="mb-10">
                                                <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1673286553/BlueberryMX/desarrolloWeb/icono-back-admin_jixenv.png" alt="Back admin" class="iconos-ch"/> <br/>
                                                Back admin
                                            </p>
                                            <p class="mb-10">
                                                <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1673286553/BlueberryMX/desarrolloWeb/icono-autoadmin_h5ctlz.png" alt="Contenido autoadministrable" class="iconos-ch"/> <br/>
                                                Contenido autoadministrable
                                            </p>
                                            <p class="mb-10">
                                                <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1673286553/BlueberryMX/desarrolloWeb/icono-gestion_yrlza7.png" alt="Gestión" class="iconos-ch"/> <br/>
                                                Gestión y protección de información
                                            </p>
                                            <p class="mb-10">
                                                <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1673286543/BlueberryMX/desarrolloWeb/icono-diseno-black_isqhhl.png" alt="Diseño" class="iconos-ch"/> <br/>
                                                Diseño escalable para el manejo de información
                                            </p>
                                            <p class="mb-10">
                                                <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1673286553/BlueberryMX/desarrolloWeb/icono-encriptacion_tvuwkg.png" alt="Encriptación" class="iconos-ch"/> <br/>
                                                Encriptación de información sensible
                                            </p>
                                            <p class="mb-10">
                                                <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1673286553/BlueberryMX/desarrolloWeb/icono-infraestructura_qfhdgp.png" alt="Infraestructura" class="iconos-ch"/> <br/>
                                                Infraestructura de pagos
                                            </p>
                                            <p>
                                                <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1673286553/BlueberryMX/desarrolloWeb/icono-pagos-en-linea_uzh1c8.png" alt="Pagos" class="iconos-ch"/> <br/>
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