<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Metas -->
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="author" content="blueberry.mx" />

    <!-- Title  -->
    <title>Blueberry | Software company in Mexico </title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="https://res.cloudinary.com/dej55trpk/image/upload/v1675785564/favicon_h7ecbp.png" />

    <!-- Plugins -->
    <link rel="stylesheet" href="{{ asset('front/css/plugins.css') }}" />

    <!-- Core Style Css -->
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}" />
</head>
<body>

    <!-- ==================== Start Navbar ==================== -->

     @include('components.menuB')

    <!-- ==================== End Navbar ==================== -->


    <div class="main-content">
        <!-- ==================== Start About ==================== -->

        <section class="feat sub-bg section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10">
                        <div class="sec-head">
                            <h3 class="wow color-font semiBold fadeInUp">E-commerce</h3>
                            <p class="regular wow text" data-splitting>Fast loading pages, easily navigable, 
                                simple to use, and highly secured websites. 
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 items md-mb30">
                        <div class="item wow fadeIn" data-wow-delay=".3s">
                            <span class="icon">
                                <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785626/ecommerce/icono-calidad_oqodx5.png" alt="" class="icono-calidad"/>
                            </span>
                            <h5>Quality and security</h5>
                            <p>We work in compliant with ISO 9001 quality management and information security management standards.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 items active md-mb30">
                        <div class="item wow fadeIn" data-wow-delay=".6s">
                            <span class="icon">
                                <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785626/ecommerce/icono-creatividad_saxwnb.png" alt="" class="icono-creatividad"/>
                            </span>
                            <h5>Web creativity</h5>
                            <p> We asses projects and decide the best ideas to bring your desired website to life.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 items sm-mb30">
                        <div class="item wow fadeIn" data-wow-delay=".8s">
                            <span class="icon">
                                <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785626/ecommerce/icono-desarrollo_rspk5s.png" alt="" class="icono-desarrollo-full"/>
                            </span>
                            <h5>Full-stack Development </h5>
                            <p>We develop your project from beginning to end, relying on highly safe technological resources.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 items">
                        <div class="item wow fadeIn" data-wow-delay="1s">
                            <span class="icon">
                                <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785626/ecommerce/icono-b2b_euklb9.png" alt="" class="icono-b2b"/>
                            </span>
                            <h5>B2b & B2c</h5>
                            <p>
                                We have an in-depth knowledge of business-to-businesses (B2B) 
                                and business-to-customer (B2C) designs.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- ==================== End About ==================== -->


        <!-- ==================== Start serv-block ==================== -->
        
        <section class="serv-block section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="serv-img md-mb50">
                            <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785626/ecommerce/icono-pilar_wdjgvz.png" alt="" class="img-pilar"/>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-1 valign">
                        <div class="content">
                            <h2 class="mb-30 color-font semiBold wow fadeInUp">The backbone for internet business</h2>
                            <div class="list-feat mt-40">
                                <ul>
                                    <li class="mb-20"><i class="icon"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path
                                            d="M438.6 105.4C451.1 117.9 451.1 138.1 438.6 150.6L182.6 406.6C170.1 419.1 149.9 419.1 137.4 406.6L9.372 278.6C-3.124 266.1-3.124 245.9 9.372 233.4C21.87 220.9 42.13 220.9 54.63 233.4L159.1 338.7L393.4 105.4C405.9 92.88 426.1 92.88 438.6 105.4H438.6z" />
                                        </svg></i> Mastercard</li>
                                    <li class="mb-20"><i class="icon"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path
                                            d="M438.6 105.4C451.1 117.9 451.1 138.1 438.6 150.6L182.6 406.6C170.1 419.1 149.9 419.1 137.4 406.6L9.372 278.6C-3.124 266.1-3.124 245.9 9.372 233.4C21.87 220.9 42.13 220.9 54.63 233.4L159.1 338.7L393.4 105.4C405.9 92.88 426.1 92.88 438.6 105.4H438.6z" />
                                        </svg></i> Maestro</li>
                                    <li class="mb-20"><i class="icon"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path
                                            d="M438.6 105.4C451.1 117.9 451.1 138.1 438.6 150.6L182.6 406.6C170.1 419.1 149.9 419.1 137.4 406.6L9.372 278.6C-3.124 266.1-3.124 245.9 9.372 233.4C21.87 220.9 42.13 220.9 54.63 233.4L159.1 338.7L393.4 105.4C405.9 92.88 426.1 92.88 438.6 105.4H438.6z" />
                                        </svg></i> Visa</li>
                                    <li class="mb-20"><i class="icon"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path
                                            d="M438.6 105.4C451.1 117.9 451.1 138.1 438.6 150.6L182.6 406.6C170.1 419.1 149.9 419.1 137.4 406.6L9.372 278.6C-3.124 266.1-3.124 245.9 9.372 233.4C21.87 220.9 42.13 220.9 54.63 233.4L159.1 338.7L393.4 105.4C405.9 92.88 426.1 92.88 438.6 105.4H438.6z" />
                                        </svg></i> American Express</li>
                                    <li class="mb-20"><i class="icon"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path
                                            d="M438.6 105.4C451.1 117.9 451.1 138.1 438.6 150.6L182.6 406.6C170.1 419.1 149.9 419.1 137.4 406.6L9.372 278.6C-3.124 266.1-3.124 245.9 9.372 233.4C21.87 220.9 42.13 220.9 54.63 233.4L159.1 338.7L393.4 105.4C405.9 92.88 426.1 92.88 438.6 105.4H438.6z" />
                                        </svg></i> Paypal</li>
                                    <li class="mb-20"><i class="icon"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path
                                            d="M438.6 105.4C451.1 117.9 451.1 138.1 438.6 150.6L182.6 406.6C170.1 419.1 149.9 419.1 137.4 406.6L9.372 278.6C-3.124 266.1-3.124 245.9 9.372 233.4C21.87 220.9 42.13 220.9 54.63 233.4L159.1 338.7L393.4 105.4C405.9 92.88 426.1 92.88 438.6 105.4H438.6z" />
                                        </svg></i> Apple pay</li>
                                    <li><i class="icon"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path
                                            d="M438.6 105.4C451.1 117.9 451.1 138.1 438.6 150.6L182.6 406.6C170.1 419.1 149.9 419.1 137.4 406.6L9.372 278.6C-3.124 266.1-3.124 245.9 9.372 233.4C21.87 220.9 42.13 220.9 54.63 233.4L159.1 338.7L393.4 105.4C405.9 92.88 426.1 92.88 438.6 105.4H438.6z" />
                                        </svg></i> Google pay</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="circle-blur"></div>
            <div class="circle-blur two"></div>
        </section>
    
        <!-- ==================== End serv-block ==================== -->
        
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