<template>
    <section class="contact section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form md-mb50">

                            <h4 class="fw-700 color-font mb-50 semiBold wow fadeInUp fz-35">Contáctanos</h4>

                            <form id="contact-form" method="post" action="" class="needs-validation" novalidate>
                                <div class="controls">
                                    <div class=" mb-40">
                                        <input type="text" class="form-control" placeholder="Nombre" required>
                                        <div class="invalid-feedback">
                                            Por favor ingresa un nombre
                                        </div>
                                    </div>

                                    <div class=" mb-40">
                                        <input  placeholder="Teléfono" disabled class="no-bordes"/>
                                        <input type="tel" name="phone" id="phone" data-error="Please enter a requested format - ex. 888 888-8888" value="" placeholder="">
                                    </div>

                                    <div class="form-group">
                                        <input class="form-control"  type="email" name="email" placeholder="Email" required>
                                        <div class="invalid-feedback">
                                            Por favor ingresa un email válido
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <textarea class="form-control" name="message" placeholder="Mensaje" rows="4" required></textarea>
                                        <div class="invalid-feedback">
                                            Por favor ingresa un mensaje
                                        </div>
                                    </div>

                                    <button type="submit" class="butn dark"><span>Enviar mensaje</span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <div class="cont-info">
                            <h4 class="fw-700 color-font mb-50 semiBold wow fadeInUp fz-35">Información de contacto</h4>
                            <h3 class="wow" data-splitting>Hablemos
                            </h3>
                            <div class="item mb-40">
                                <h5><a href="#0">hello@blueberry.mx</a></h5>
                                <h5>+52 (33) 1325 7256</h5>
                                <h5>+52 (33) 3109 3636</h5>

                            </div>
                            <h3 class="wow" data-splitting>Visítanos
                            </h3>
                            <div class="item">
                                <h6>Av. Rubén Darío #586,
                                    <br>Guadalajara, Jal.
                                </h6>
                            </div>
                            <div class="social mt-50">
                                <a href="https://www.facebook.com/profile.php?id=100089242747257" class="icon" target="_blank">
                                    <i class="fab fa-facebook-f fz-20"></i>
                                </a>
                                <a href="https://www.instagram.com/blueberrymx_/" class="icon" target="_blank">
                                    <i class="fab fa-instagram fz-20"></i>
                                </a>
                                <a href="https://www.linkedin.com/company/blueberrymx" class="icon" target="_blank">
                                    <i class="fab fa-linkedin-in fz-20"></i>
                                </a>
                                <a href="https://www.youtube.com/channel/UCCSwSHd-JKN08XtD0BQF1gQ" target="_blank">
                                    <i class="fab fa-youtube fz-20"></i>
                                </a>
                                <a href="https://vimeo.com/blueberrymx" target="_blank">
                                    <i class="fab fa-vimeo-v fz-20"></i>
                                </a>
                                <a href="https://www.tiktok.com/@blueberrymx1" target="_blank">
                                    <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1673041325/BlueberryMX/index/icono-tiktok-black_ms7ynb.png" alt="Tik Tok" class="icono-tiktok"/>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</template>