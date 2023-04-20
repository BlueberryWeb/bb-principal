<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Metas -->
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="blueberry.mx" />

    <!-- Title  -->
    <title>Agencia de publicidad | Blueberry </title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="https://res.cloudinary.com/dej55trpk/image/upload/v1675785564/favicon_h7ecbp.png" />

    <!-- Plugins -->
    <link rel="stylesheet" href="{{ asset('front/css/plugins.css') }}" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/15.0.1/css/intlTelInput.css'/>

    <!-- Core Style Css -->
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}" />
</head>
<body>
     <!-- ==================== Start Navbar ==================== -->

     @include('components.menuN')

     <!-- ==================== End Navbar ==================== -->
    
    <!-- ==================== Start header ==================== -->

    <header class="pages-header circle-bg valign position-re sub-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-md-11">
                    <div class="capt">
                        <div class="text-center">
                            <h1 class="color-font mb-10 fw-700 semiBold wow fadeInUp fz-60">Hablemos <br> sobre tú próximo proyecto.</h1>
                            <p class="regular wow text fz-18" data-splitting>Sientéte libre de hacer cualquier pregunta o hablemos sobre nuestra futura 
                                colaboración
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="circle-color">
            <div class="gradient-circle"></div>
            <div class="gradient-circle two"></div>
        </div>
    </header>

    <!-- ==================== End header ==================== -->


    <!-- ==================== Start main-content ==================== -->

    <div class="main-content">

        <!-- ==================== Start Contact ==================== -->

        <section class="contact section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form md-mb50">

                            <h4 class="fw-700 color-font mb-50 semiBold wow fadeInUp fz-35">Contáctanos</h4>

                            <form id="contact-form" method="POST" action="{{ route('mail') }} " class="needs-validation fz-16" novalidate>
                                @csrf
                                <div class="controls">
                                    <div class=" mb-40">
                                        <input type="text" class="form-control" placeholder="Nombre" name="name" required>
                                        <div class="invalid-feedback">
                                            Por favor ingresa un nombre
                                        </div>
                                    </div>

                                    <div class=" mb-40">
                                        <input  placeholder="Teléfono" disabled class="no-bordes"/>
                                        <input type="hidden" id="lada" name="lada"/>
                                        <input type="tel" name="phone" id="phone" class="form-control" data-error="Please enter a requested format - ex. 888 888-8888" value="" placeholder="" required onchange="value_input()">
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

                                    <button type="submit" class="butn dark fz-16"><span>Enviar mensaje</span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <div class="cont-info">
                            <h4 class="fw-700 color-font mb-50 semiBold wow fadeInUp fz-35">Información de contacto</h4>
                            <h3 class="wow fz-30" data-splitting>Hablemos
                            </h3>
                            <div class="item mb-40">
                                <h5><a href="mailto:hello@blueberry.mx?Subject=Solicitar%20Informes%20Blueberry" target="_blank">hello@blueberry.mx</a></h5>
                                <h5 class="fz-16"><a href="https://api.whatsapp.com/send?phone=523313257156" target="_blank">+52 (33) 1325 7256</a> </h5>
                                <h5 class="fz-16"><a href="tel:+523331093636" target="_blank">+52 (33) 3109 3636</a> </h5>

                            </div>
                            <h3 class="wow fz-30" data-splitting>Visítanos
                            </h3>
                            <div class="item">
                                <a href="https://goo.gl/maps/F2yNKD5J9vNuA3xr8" target="_blank">
                                    <h6 class="fz-16">Av. Rubén Darío #586,
                                        <br>Guadalajara, Jal. México
                                    </h6>
                                </a>
                                
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
                                    <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785594/index/icono-tiktok-black_bofuvc.png" alt="Tik Tok" class="icono-tiktok"/>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End Contact ==================== -->


    
     <!-- ==================== Start Footer ==================== -->

     @include('components.footer')

     <!-- ==================== End Footer ==================== -->


    <!-- ==================== End Footer ==================== -->

        

    </div>
<!-- =========== Start Button WhatsApp ================= -->
<div class=" cursor-pointer">
    <a href="https://api.whatsapp.com/send?phone=525540324042" class="btn-flotante-whats" target="_blank" rel="noopener noreferrer">
        <i class="fab fa-whatsapp"></i>
    </a>
</div>

<!-- =========== End Button WhatsApp =================== -->
    <!-- ==================== End main-content ==================== -->
    @include('components.scripts')

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/15.0.1/js/intlTelInput.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.js'></script>
    <script>
 /* INITIALIZE PHONE INPUTS WITH THE intlTelInput FEATURE*/
 var input = document.querySelector("#phone");
 window.intlTelInput(input, {
     initialCountry: "auto",
     separateDialCode: true,
     nationalMode: false,
     geoIpLookup: callback => {
         fetch("https://ipapi.co/json")
         .then(res => res.json())
         .then(data => {
             console.log(data.country_code)
             callback(data.country_code)
         })
         .catch(() => callback("mx"));
     },
     utilsScript: "/intl-tel-input/js/utils.js?1681516311936" // just for formatting/placeholders etc
  });
 
  const value_input = () => {
     
     let lada = document.querySelector(".selected-dial-code");
     document.getElementById('lada').value = lada.innerHTML
     console.log(lada.innerHTML)
  }
 
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function () {
      'use strict'
 
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.querySelectorAll('.needs-validation')
 
      // Loop over them and prevent submission
      Array.prototype.slice.call(forms)
          .forEach(function (form) {
          form.addEventListener('submit', function (event) {
              if (!form.checkValidity()) {
              event.preventDefault()
              event.stopPropagation()
              }
 
              form.classList.add('was-validated')
          }, false)
          })
      })()
      const expresiones ={
          nombre: /^[a-zA-ZÁ-ü\s]{1,49}$/,
          correo:/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-.]+$/,
          telefono: /^\d{7,14}$/
          }
      

    </script>
</body>
</html>