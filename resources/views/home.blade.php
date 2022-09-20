<!DOCTYPE html>
<html lang="zxx">
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
      <link rel="icon" href="{{ asset('assets/image/my-icon.png') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
      <link rel="stylesheet" href="{{ asset('assets/bootstarp/bootstrap.min.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/super-classes.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/style.css?v=1.0.2') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/mobile.css?v=1.0.2') }}">
      <title>Feri Anggriawan | Full Stack Developer</title>
      <!-- Primary Meta Tags -->
    <meta name="title" content="Feri Anggriawan">
    <meta name="description" content="Full Stack Developer">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://ferianggriawan.com/">
    <meta property="og:title" content="Feri Anggriawan">
    <meta property="og:description" content="Full Stack Developer">
    <meta property="og:image" content="{{ asset('assets/image/my-icon.png') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="http://ferianggriawan.com/">
    <meta property="twitter:title" content="Feri Anggriawan">
    <meta property="twitter:description" content="Full Stack Developer">
   </head>
   <body>
      <!---header-and-banner-section-->
      <div class="header-and-banner-con w-100 float-left position-relative">
         <div class="header-and-banner-inner-con">
            <header class="main-header">
               <!--navbar-start-->
               <div class="container pl-0 pr-0">
                  <div class="header-con">
                     <nav class="navbar navbar-expand-lg navbar-light p-0">
                        <a class="navbar-brand p-0" href="index.html">
                        <img src="{{ asset('assets/image/myavatar2.jpg') }}" alt="logo-img" class="logo-img">
                        </a>
                        <button class="navbar-toggler p-0 collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        <span class="navbar-toggler-icon"></span>
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                           <ul class="navbar-nav ml-auto">
                              <li class="nav-item active pl-0">
                                 <a class="nav-link p-0 is-active" href="#home">Home<span class="sr-only">(current)</span></a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link p-0" href="#experience">Experience</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link p-0" href="#skills">Skills</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link p-0" href="#portfolio">Portfolio</a>
                              </li>
                           </ul>
                           <div class="d-inline-block contact">
                              <a href="#Contact">Contact</a>
                           </div>
                        </div>
                     </nav>
                  </div>
               </div>
               <!--navbar-end-->
            </header>
            <section class="banner-main-con" id="home">
               <div class="container pl-0 pr-0">
                  <!--banner-start-->
                  <div class="footer-social-icon banner-social-icon mb-0">
                     <ul class="mb-0 list-unstyled">
                        <li class="">
                           <a href="https://github.com/omen65" target="_blank"><i class="fab fa-github d-flex align-items-center justify-content-center"></i></a>
                        </li>
                        <li class="mt-3 mb-3">
                             <a href="https://www.instagram.com/omen65/" target="_blank"><i class="fab fa-instagram d-flex align-items-center justify-content-center ml-0 mr-0 "></i></a>
                        </li>
                        <li class="">
                           <a href="https://www.linkedin.com/in/feri-anggriawan-0309a414a/" target="_blank"><i class="fab fa-linkedin-in d-flex align-items-center justify-content-center"></i></a>
                        </li>
                     </ul>
                  </div>
                  <div class="banner-con text-lg-left text-center">
                     <div class="row">
                        <div class="col-lg-7 col-sm-12 d-flex justify-content-center flex-column">
                           <div class="banner-left-con wow slideInLeft">
                              <div class="banner-heading">
                                 <h2>Hello, I Am</h2>                                 
                                 <div class="dynamic-txts">
                                  </div>
                                 <p>I have more then <b style="color:#fca61f;">4 Years</b> of experience in developing web-based application systems.<br> I am also a fast learner. I can learn anything except for something I don't want to learn. Give me space, time and internet access so I can be anything
                                 </p>
                              </div>
                              <div class="banner-btn generic-btn d-inline-block">
                                 <a href="https://wa.me/6282210182903" target="_blank">Contact Me</a>
                              </div>
                              <a href="#portfolio" class="See-btn">See My Work</a>
                           </div>
                        </div>
                        <div class="col-lg-5 col-sm-12">
                           <div class="banner-right-con position-relative wow slideInRight" id="banner-right-con">
                              <figure class="mb-0">
                                 <img src="{{ asset('assets/image/me-2.png') }}" alt="banner-right-img" id="banner-right-img">
                              </figure>
                              <div class="best-award-con d-inline-block happy-con wow bounceInUp " data-wow-duration="1s" data-wow-delay="1s">
                                 
                              </div>
                              <div class="cursor"></div>
                              <div class="cursor2"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!--banner-end-->
               </div>
            </section>
         </div>
      </div>
      <!---header-and-banner-section-->
      <!-- service section -->
      <section class="w-100 float-left service-con padding-top padding-bottom position-relative" id="experience" >
         <div class="container">
            <div class="service-inner-con position-relative">
               <div class="generic-title text-center">
                  <h6>Work</h6>
                  <h2 class="mb-0">Experience
                  </h2>
               </div>
               <div class="service-box wow fadeInUp">
                  <div class="row justify-content-center">
                     <div class="col-lg-8 col-md-8">
                        <div class="service-box-item">
                           <figure class="mb-0">
                              <img src="assets/image/service-icon3.png" alt="service-icon" class="img-fluid">
                           </figure>
                           <div class="service-box-item-content">
                              <h4>Full Stack Developer</h4>
                              <h5>PT. Van Aroma | <i>Mei 2018 - Present</i></h5>
                              <ul>
                                 <li>
                                    Develop and Maintenance Custom ERP Aplication
                                    <ul>
                                      <li> Make a system requirements analysis and implements to create a new module in the application</li>
                                      <li>Develop existing modules according to user needs</li>
                                      <li>Fixing bugs</li>
                                      <li>Support user in using application (training & fix issues)</li>
                                    </ul>
                                 </li>
                                 <li>
                                    Develop and Maintenance Company Website <br>
                                    (vanaroma.com,indopine.com)
                                 </li>
                                 <li>
                                    Develop and maintenance lot of Web Base Company System Infomation <br>
                                    (Customer Portal, Supplier Portal, Customer Registration Portal, Supplier Registration Portal, Visitor Management System etc)
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-8 col-md-8 mt-5">
                        <div class="service-box-item">
                           <figure class="mb-0">
                              <img src="assets/image/service-icon2.png" alt="service-icon" class="img-fluid">
                           </figure>
                           <div class="service-box-item-content">
                              <h4>Graphic Designer</h4>
                              <h5>Freelance | <i>2017 - Present</i></h5>
                              <ul>
                                 <li>
                                    Contributtor at many Microstock Website Agency such Freepik, Shutterstock, Adobe Stock etc<br>
                                    (vanaroma.com,indopine.com)
                                 </li>
                                 <li>
                                    Create a logo, packaging design, banner, brochure etc  base on client needs and request
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- service section -->
      <!-- skill section -->
      <section class="w-100 float-left skill-con padding-top padding-bottom position-relative" id="skills">
         <figure class="mb-0 myskils">
            <img src="./assets/image/myskills-left-img.png" alt="">
         </figure>
         <div class="container">
            <div class="skill-inner-con position-relative">
               <div class="row">
                  <div class="col-lg-6 text-center d-none d-lg-block pt-5">
                     <img src="{{ asset('assets/image/php.svg') }}" class="skill-icon">
                     <img src="{{ asset('assets/image/mysql.svg') }}" class="skill-icon">
                     <img src="{{ asset('assets/image/html.svg') }}" class="skill-icon">
                     <img src="{{ asset('assets/image/css3.svg') }}" class="skill-icon">
                     <img src="{{ asset('assets/image/jquery.svg') }}" class="skill-icon">
                     <img src="{{ asset('assets/image/javascript.svg') }}" class="skill-icon">
                     <img src="{{ asset('assets/image/codeigniter.svg') }}" class="skill-icon">
                     <img src="{{ asset('assets/image/bootstrap.svg') }}" class="skill-icon">
                     <img src="{{ asset('assets/image/laravel.svg') }}" class="skill-icon">
                     <img src="{{ asset('assets/image/vue.svg') }}" class="skill-icon">
                     <img src="{{ asset('assets/image/node-js.svg') }}" class="skill-icon">
                     <img src="{{ asset('assets/image/github.svg') }}" class="skill-icon">
                     <img src="{{ asset('assets/image/wordpress.svg') }}" class="skill-icon">
                     <img src="{{ asset('assets/image/adobe.svg') }}" class="skill-icon">
                     <img src="{{ asset('assets/image/adobe-illustrator.svg') }}" class="skill-icon">
                  </div>
                  <div class="col-lg-6 d-flex align-items-center">
                     <div class="skill-right-con wow slideInRight" >
                        <h6>My Professional</h6>
                        <h2>Skills</h2>
                        <p>
                           Experienced in developing web-based application systems, i proficient using various tools and programming languages.<br>
                           in my spare time, sometimes i also work on graphic design projects
                           <ul class="skills-list">
                              <li>Googling & Problem Solfing</li>
                              <li>PHP</li>
                              <li>Code Igniter (3 & 4)</li>
                              <li>Laravel</li>
                              <li>Mysql</li>
                              <li>Javascript</li>
                              <li>Jquery</li>
                              <li>Vue JS</li>
                              <li class="blur">NodeJS</li>
                              <li>CSS 3</li>
                              <li>Bootsrap</li>
                              <li>Git</li>
                              <li>Rest API</li>
                              <li>Wordpress</li>
                              <li>Adobe Photoshop</li>
                              <li>Adobe Illustrator</li>
                           </ul>
                        </p>
                        <div class="generic-btn download-bnt">
                           <a href="{{ asset('assets/image/cv-feri-anggriawan.pdf') }}" target="_blank">View CV</a>                  
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- skill section -->
      <!-- portfolio section -->
      <section class="w-100 float-left blog-con position-relative mb-5 py-5" id="portfolio">
          <div class="container mt-5">
            <div class="generic-title text-center">
               <h6>Recent Works</h6>
               <h2 class="mb-0 text-white">Check My Portfolio</h2>
            </div>
            <div id="myBtnContainer" class="text-center">
               <button class=" active active_button" onclick="filterSelection('programming')">Programming </button>
               <button class="" onclick="filterSelection('design')">Graphic Design</button>
            </div>
         </div>
         <div class="container mb-5">
            <div class="row justify-content-center">
               <div class="filter-portfolio col-md-4 programming mt-4">
                  <div class="portfolio-box">
                     <img src="{{ asset('assets/image/point.png') }}" class="img-fluid" alt="">
                     <div class="portfolio-box-caption">
                        <h4>Point APP</h4>
                        <label>Laravel, Tailwind, POS</label>
                        <a href="#modal-point" data-toggle="modal"><i class="fas fa-arrow-right"></i></a>
                     </div>
                  </div>
               </div>
               <div class="filter-portfolio col-md-4 programming mt-4">
                  <div class="portfolio-box">
                     <img src="{{ asset('assets/image/goestowedding.png') }}" class="img-fluid" alt="">
                     <div class="portfolio-box-caption">
                        <h4>Goestowedding</h4>
                        <label>Code Igniter</label>
                        <a href="#modal-goestowedding" data-toggle="modal"><i class="fas fa-arrow-right"></i></a>
                     </div>
                  </div>
               </div>
               <div class="filter-portfolio col-md-4 programming mt-4">
                  <div class="portfolio-box">
                     <img src="{{ asset('assets/image/verayonas.jpg') }}" class="img-fluid" alt="">
                     <div class="portfolio-box-caption">
                        <h4>Vera Yonas</h4>
                        <label>Code Igniter</label>
                        <a href="#modal-verayonas" data-toggle="modal"><i class="fas fa-arrow-right"></i></a>
                     </div>
                  </div>
               </div>
               <div class="filter-portfolio col-md-4 programming mt-4">
                  <div class="portfolio-box">
                     <img src="{{ asset('assets/image/radjadingin.png') }}" class="img-fluid" alt="">
                     <div class="portfolio-box-caption">
                        <h4>radjadingin.com</h4>
                        <label>Landing Page & Google Ads</label>
                        <a href="#modal-radjadingin" data-toggle="modal"><i class="fas fa-arrow-right"></i></a>
                     </div>
                  </div>
               </div>
               <div class="filter-portfolio col-md-4 programming mt-4">
                  <div class="portfolio-box">
                     <img src="{{ asset('assets/image/propertymarketing.jpg') }}" class="img-fluid" alt="">
                     <div class="portfolio-box-caption">
                        <h4>propertymarketing.id</h4>
                        <label>Landing Page</label>
                        <a href="#modal-property" data-toggle="modal"><i class="fas fa-arrow-right"></i></a>
                     </div>
                  </div>
               </div>
               <div class="filter-portfolio col-md-4 programming mt-4">
                  <div class="portfolio-box">
                     <img src="{{ asset('assets/image/vanaroma.jpg') }}" class="img-fluid" alt="">
                     <div class="portfolio-box-caption">
                        <h4>vanaroma.com</h4>
                        <label>PHP, JS, REST API, Code Igniter</label>
                        <a href="#modal-vanaroma" data-toggle="modal"><i class="fas fa-arrow-right"></i></a>
                     </div>
                  </div>
               </div>
               <div class="filter-portfolio col-md-4 programming mt-4">
                  <div class="portfolio-box">
                     <img src="{{ asset('assets/image/indopine.jpg') }}" class="img-fluid" alt="">
                     <div class="portfolio-box-caption">
                        <h4>indopine.com</h4>
                       <label>Landing Page, REST API, Code Igniter</label>
                        <a href="#modal-indopine" data-toggle="modal"><i class="fas fa-arrow-right"></i></a>
                     </div>
                  </div>
               </div>
               <div class="filter-portfolio col-md-4 programming mt-4">
                  <div class="portfolio-box">
                     <img src="{{ asset('assets/image/rapot.png') }}" class="img-fluid" alt="">
                     <div class="portfolio-box-caption">
                        <h4>Rapot Online</h4>
                        <label>PHP</label>
                        <a href="#modal-rapot" data-toggle="modal"><i class="fas fa-arrow-right"></i></a>
                     </div>
                  </div>
               </div>
               <div class="filter-portfolio col-md-4 programming mt-4">
                  <div class="portfolio-box">
                     <img src="{{ asset('assets/image/masterdingin.png') }}" class="img-fluid" alt="">
                     <div class="portfolio-box-caption">
                        <h4>masterdingin.com</h4>
                        <label>Landing Page</label>
                        <a href="#modal-masterdingin" data-toggle="modal"><i class="fas fa-arrow-right"></i></a>
                     </div>
                  </div>
               </div>
               <div class="filter-portfolio col-md-4 design mt-4" style="display: none">
                  <div class="portfolio-box">
                     <img src="{{ asset('assets/image/freepik-feri-anggriawan.png') }}" class="img-fluid" alt="">
                     <div class="portfolio-box-caption">
                        <h4>Freepik</h4>
                        <label>Microstock Contributor</label>
                        <a href="https://www.freepik.com/omen65" target="_blank"><i class="fas fa-arrow-right"></i></a>
                     </div>
                  </div>
               </div>
               <div class="filter-portfolio col-md-4 design mt-4" style="display: none">
                  <div class="portfolio-box">
                     <img src="{{ asset('assets/image/shutterstock-feri-anggriawan.jpg') }}" class="img-fluid" alt="">
                     <div class="portfolio-box-caption">
                        <h4>Shutterstock</h4>
                        <label>Microstock Contributor</label>
                        <a href="https://www.shutterstock.com/g/omen65" target="_blank"><i class="fas fa-arrow-right"></i></a>
                     </div>
                  </div>
               </div>
               <div class="filter-portfolio col-md-4 design mt-4" style="display: none">
                  <div class="portfolio-box">
                     <img src="{{ asset('assets/image/adobe-stock-feri-anggriawan.jpg') }}" class="img-fluid" alt="">
                     <div class="portfolio-box-caption">
                        <h4>Adobestock</h4>
                        <label>Microstock Contributor</label>
                        <a href="https://stock.adobe.com/contributor/208257873/Feri%20Anggriawan" target="_blank"><i class="fas fa-arrow-right"></i></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- portfolio section -->
      
      <!-- form section -->
      <section class="w-100 float-left form-main-con padding-top padding-bottom" id="Contact">
         <div class="container">
            <div class="form-main-inner-con position-relative">
               <div class="generic-title text-center">
                  <h6>Get in Touch</h6>
                  <h2 class="mb-0">Any Questions? Feel Free<br>
                     to Contact
                  </h2>
               </div>
               <div class="row justify-content-center">
                     <div class="contact-information position-relative wow slideInLeft" >
                        <ul class="list-unstyled">
                           <li class="mb-0">
                              <figure class="mb-0 d-flex align-items-center justify-content-center">
                                 <img src="assets/image/location-icon.png" alt="location-icon" class="img-fluid">
                              </figure>
                              <div class="contact-information-content">
                                 <h5>Address:</h5>
                                 <p class="mb-0">Bogor, Jawa Barat, Indonesia</p>
                                 </p>
                              </div>
                           </li>
                        </ul>
                     </div>
                     <div class="contact-information position-relative wow slideInLeft" >
                        <a href="mailto:ferianggriawan.official@gmail.com" target="_blank">
                            <ul class="list-unstyled">
                           <li class="mb-0">
                              <figure class="mb-0 d-flex align-items-center justify-content-center">
                                 <img src="assets/image/message-icon.png" alt="message-icon" class="img-fluid">
                              </figure>
                              <div class="contact-information-content">
                                 <h5>Email:</h5>
                                 <p class="mb-0">ferianggriawan.official@gmail.com</p>
                              </div>
                           </li>
                        </ul>
                        </a>
                     </div>
                     <div class="contact-information position-relative wow slideInLeft" >
                        <a href="tel:6282210182903" target="_blank">
                            <ul class="list-unstyled" style="cursor: pointer">
                            <li class="mb-0">
                                <figure class="mb-0 d-flex align-items-center justify-content-center">
                                    <img src="assets/image/phone-icon.png" alt="phone-icon" class="img-fluid">
                                </figure>
                                <div class="contact-information-content">
                                    <h5>Phone:</h5>
                                    <p class="mb-0">+62 822 1018 2903</p>
                                </div>
                            </li>
                            </ul>
                        </a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- form section -->
      <!-- weight footer section -->
      <div class="w-100 float-left weight-footer-con position-relative">
         <div class="container">
            <div class="weight-footer-content text-center wow fadeInUp" >
               <div class="footer-social-icon">
                  <ul class="mb-0">
                     <li class="d-inline-block">
                        <a href="https://github.com/omen65" target="_blank"><i class="fab fa-github d-flex align-items-center justify-content-center"></i></a>
                     </li>
                     <li class="d-inline-block">
                        <a href="https://www.instagram.com/omen65/" target="_blank"><i class="fab fa-instagram d-flex align-items-center justify-content-center"></i></a>
                     </li>
                     <li class="d-inline-block">
                        <a href="https://www.linkedin.com/in/feri-anggriawan-0309a414a/" target="_blank"><i class="fab fa-linkedin-in d-flex align-items-center justify-content-center"></i></a>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="copy-right-content text-center">
               <p class="mb-0">Copyright <?= date('Y');?> ferianggriawan.com | All Rights Reserved.</p>
            </div>
         </div>
      </div>

      <a id="button"></a> <!-- scroll to top -->
      <div id="modal-goestowedding" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" ><i class="far fa-times"></i></span></button>
               </div>
               <div class="modal-body service-model-content">
                  <figure class="mb-0">
                     <img src="{{ asset('assets/image/goestowedding.png') }}" alt="feri-anggriawan-portfolio" class="img-fluid">
                  </figure>
                  <h4>Goestowedding.com</h4>
                  <p class="mb-4">Goestowedding is a platform to easily create a wedding invitation website,
                  built with Code Igniter 3 framework, integrated with payment gateway and whatsapp API. develop by two person</p> 
                  <a href="https://goestowedding.com/" target="_blank" class="btn btn-visit-porfolio">Visit Website</a>
               </div>
            </div>
         </div>
      </div>
      <div id="modal-radjadingin" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" ><i class="far fa-times"></i></span></button>
               </div>
               <div class="modal-body service-model-content">
                  <figure class="mb-0">
                     <img src="{{ asset('assets/image/radjadingin.png') }}" alt="feri-anggriawan-portfolio" class="img-fluid">
                  </figure>
                  <h4>Radjadingin.com</h4>
                  <p class="mb-4">Radjangin.com is a landing page for a brand that provides air conditioning repair, installation and maintenance services. Built using the bootstrap framework and fully mobile responsive.<br>
                  For this project, I am also responsible for fully managing advertising on the Google Adds platform, starting from keyword research, target audience,determining location and bid strategy. </p> 
                  <a href="https://radjadingin.com/" target="_blank" class="btn btn-visit-porfolio">Visit Website</a>
               </div>
            </div>
         </div>
      </div>
      <div id="modal-verayonas" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" ><i class="far fa-times"></i></span></button>
               </div>
               <div class="modal-body service-model-content">
                  <div class="row">
                     <img src="{{ asset('assets/image/verayonas.png') }}" alt="feri-anggriawan-portfolio" class="img-fluid col-md-6 mt-3">
                     <img src="{{ asset('assets/image/verayonas1.png') }}" alt="feri-anggriawan-portfolio" class="img-fluid col-md-6 mt-3">
                     <img src="{{ asset('assets/image/verayonas2.png') }}" alt="feri-anggriawan-portfolio" class="img-fluid col-md-6 mt-3">
                     <img src="{{ asset('assets/image/verayonas3.png') }}" alt="feri-anggriawan-portfolio" class="img-fluid col-md-6 mt-3">
                  </div>
                  <h4>Vera Yonas</h4>
                  <p class="mb-4">Vera Yonas is a custom CMS company profile website for makeup artist agency, built with Code Igniter  3 Framework.</p>
                  <p>Features on the website:<br>
                   Website Admin can manage the content that will be displayed on the website, visitors can make online bookings that are integrated with whatsapp chat, then the booking schedule can be input into the website by admin.<br>
                   This simple feature is adjusted to the client's request</p>
               </div>
            </div>
         </div>
      </div>
      <div id="modal-property" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" ><i class="far fa-times"></i></span></button>
               </div>
               <div class="modal-body service-model-content">
                  <figure class="mb-0">
                     <img src="{{ asset('assets/image/propertymarketing.jpg') }}" alt="feri-anggriawan-portfolio" class="img-fluid">
                  </figure>
                  <h4>propertymarketing.id</h4>
                  <p class="mb-4">propertymarketing.id is a landing page for a Property Sales Agents located in Bogor. Built using the bootstrap framework and fully mobile responsive.</p> 
                  <a href="#" target="_blank" class="btn btn-visit-porfolio">Visit Website</a>
               </div>
            </div>
         </div>
      </div>
      <div id="modal-vanaroma" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" ><i class="far fa-times"></i></span></button>
               </div>
               <div class="modal-body service-model-content">
                  <figure class="mb-0">
                     <img src="{{ asset('assets/image/vanaroma.jpg') }}" alt="feri-anggriawan-portfolio" class="img-fluid">
                  </figure>
                  <h4>vanaroma.com</h4>
                  <p class="mb-4">vanaroma.com is a PT. Van Aroma official company website<br>
                    Built with native php, javascript,bootstrap framework and fully mobile responsive. integrated with internal ERP Apllication system and internal REST API which was built with Code Igniter Framework.</p>
                </p> 
                  <a href="vanaroma.com" target="_blank" class="btn btn-visit-porfolio">Visit Website</a>
               </div>
            </div>
         </div>
      </div>
      <div id="modal-indopine" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" ><i class="far fa-times"></i></span></button>
               </div>
               <div class="modal-body service-model-content">
                  <figure class="mb-0">
                     <img src="{{ asset('assets/image/indopine.png') }}" alt="feri-anggriawan-portfolio" class="img-fluid">
                  </figure>
                  <h4>indopine.com</h4>
                  <p class="mb-4">indopine.com is a Landing page of PT. nasco<br>
                     integrated internal REST API which was built with Code Igniter Framework.</p>
                </p> 
                  <a href="indopine.com" target="_blank" class="btn btn-visit-porfolio">Visit Website</a>
               </div>
            </div>
         </div>
      </div>

      <div id="modal-rapot" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" ><i class="far fa-times"></i></span></button>
               </div>
               <div class="modal-body service-model-content">
                  <div class="row">
                    <img src="{{ asset('assets/image/rapot.png') }}" alt="feri-anggriawan-portfolio" class="img-fluid col-md-6 mt-5">
                    <img src="{{ asset('assets/image/rapot2.png') }}" alt="feri-anggriawan-portfolio" class="img-fluid col-md-6 mt-5">
                    <img src="{{ asset('assets/image/rapot3.png') }}" alt="feri-anggriawan-portfolio" class="img-fluid col-md-6 mt-5">
                    <img src="{{ asset('assets/image/rapot4.png') }}" alt="feri-anggriawan-portfolio" class="img-fluid col-md-6 mt-5">
                    <img src="{{ asset('assets/image/rapot5.png') }}" alt="feri-anggriawan-portfolio" class="img-fluid col-md-6 mt-5">
                    <img src="{{ asset('assets/image/rapot6.png') }}" alt="feri-anggriawan-portfolio" class="img-fluid col-md-6 mt-5">
                  </div>
                  <h4>Sistem Informasi Laporan Hasil Belajar</h4>
                  <p class="mb-4">
                    This project was develop when I was doing an internship in college, at one of a high school in Bogor. built with native php.<br>
                    This is an application Student Grading Management System</p>
                  </p> 
                  <a href="#" target="_blank" class="btn btn-visit-porfolio">Visit Website</a>
               </div>
            </div>
         </div>
      </div>

      <div id="modal-masterdingin" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" ><i class="far fa-times"></i></span></button>
               </div>
               <div class="modal-body service-model-content">
                  <figure class="mb-0">
                     <img src="{{ asset('assets/image/masterdingin.png') }}" alt="feri-anggriawan-portfolio" class="img-fluid">
                  </figure>
                  <h4>masterdingin.com</h4>
                  <p class="mb-4">masterdingin.com is a landing page for a brand that provides air conditioning repair, installation and maintenance services. Built using the bootstrap framework and fully mobile responsive. <br>you could say this is another version of radjadingin.com</p>
                </p> 
                  <a href="indopine.com" target="_blank" class="btn btn-visit-porfolio">Visit Website</a>
               </div>
            </div>
         </div>
      </div>

      <div id="modal-point" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" ><i class="far fa-times"></i></span></button>
               </div>
               <div class="modal-body service-model-content">
                  <div class="row">
                    <img src="{{ asset('assets/image/point.png') }}" alt="feri-anggriawan-portfolio" class="img-fluid col-md-12">
                    <img src="{{ asset('assets/image/point2.png') }}" alt="feri-anggriawan-portfolio" class="img-fluid col-md-6 mt-3">
                    <img src="{{ asset('assets/image/point4.png') }}" alt="feri-anggriawan-portfolio" class="img-fluid col-md-6 mt-3">
                    <img src="{{ asset('assets/image/point3.png') }}" alt="feri-anggriawan-portfolio" class="img-fluid col-md-12 mt-3">
                  </div>
                  <h4>POINT - POS & Inventory APP</h4>
                  <p class="mb-4">
                    POINT is POS (Point of Sales) & Inventory application.
                    <br>
                    Based on a request from one of the owners of a business engaged in the F&B field, 
                    This application is Developed with Laravel framework and Tailwind CSS.
                  </p>
                  </p> 
                  <a href="https://pointapp.my.id/" target="_blank" class="btn btn-visit-porfolio">Visit Website</a>
               </div>
            </div>
         </div>
      </div>
      
      <!-- weight footer section -->
      <script src="{{ asset('assets/js/wow.js') }}"></script>
      <script>
         new WOW().init();
      </script>
      <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"> </script>
      <script src=" https://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.js"></script>
      <script src="{{ asset('assets/js/popper.min.js') }}"> </script>
      <script src="{{ asset('assets/js/bootstrap.min.js') }}"> </script>
      <script src="{{ asset('assets/js/custom-script.js') }}"> </script>
      <script src="{{ asset('assets/js/contact-form.js') }}"></script>
      <script src="https://unpkg.com/typeit@8.4.0/dist/index.umd.js"></script>
      <script>
         new TypeIt(".dynamic-txts", {
            speed: 100,
            loop: true,
         })
         .type("Feri Anggriawan", { delay: 3000 })
         .delete(15)
         .type("Full Stck", { delay: 300 })
         .move(-2)
         .type("a", { delay: 300 })
         .move(3)
         .type(" Developer", { delay: 3000 })
         .delete(21)
         .delete(21)
         .go();
         
         
         // Add active class to the current button (highlight it)
         var btnContainer = document.getElementById("myBtnContainer");
         var btns = btnContainer.getElementsByClassName("btn");
         for (var i = 0; i < btns.length; i++) {
         btns[i].addEventListener("click", function(){
         var current = document.getElementsByClassName("active");
         current[0].className = current[0].className.replace(" active", "");
         this.className += " active";
         });
         }
      </script>
      <script>
         var btn = $('#button');
         
         $(window).scroll(function() {
         if ($(window).scrollTop() > 300) {
         btn.addClass('show');
         } else {
         btn.removeClass('show');
         }
         });
         
         btn.on('click', function(e) {
         e.preventDefault();
         $('html, body').animate({scrollTop:0}, '300');
         });
         
      </script>
      <script>
         $(window).scroll(function(){
         
         if ($(window).scrollTop() >= 113) {
         
         $('header').addClass('fixed-header');
         $('.banner-main-con').addClass('banner-main-con2');
         
         }
         
         else {
         
         $('header').removeClass('fixed-header');
         $('.banner-main-con').removeClass('banner-main-con2');
         
         }
         
         });
         
      </script>
   <script>
        document.querySelectorAll('.nav-item a').forEach(function(link, index){

        link.addEventListener('click', function() {

        if(this.classList.contains('is-active')) {

            this.classList.remove('is-active');

        } else {

            const activeLink = document.querySelector('a.is-active'); // **

            if (activeLink) {                                         // **

                activeLink.classList.remove('is-active');             // **

            }                                                         // **

            this.classList.add('is-active');

        }

        });

        });

    document.querySelectorAll('#myBtnContainer button').forEach(function(link, index){

    link.addEventListener('click', function() {

    if(this.classList.contains('active_button')) {

        this.classList.remove('active_button');

    } else {

        const activeLink = document.querySelector('#myBtnContainer button.active_button'); // **

        if (activeLink) {                                         // **

            activeLink.classList.remove('active_button');             // **

        }                                                         // **

        this.classList.add('active_button');

    }

    });

    });

    function filterSelection(c){
        $(".filter-portfolio").hide();
        $('.'+c).show();
    }

    const sections = document.querySelectorAll("section");
    window.onscroll = () => {
        var current = "";
        sections.forEach((section) => {
            const sectionTop = section.offsetTop;
            if (pageYOffset >= sectionTop - 60) {
            current = section.getAttribute("id"); }
            
        });
        $('.nav-link').removeClass('is-active');
        $('.nav-link').each(function(){
            if($(this).attr('href') == '#'+current){
                $(this).addClass('is-active');
            }
        });
    };
   </script>
    
   </body>
</html>