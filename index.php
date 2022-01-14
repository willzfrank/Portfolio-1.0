<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- ----------        icons-link     ---------------- -->
        <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
        <link rel="manifest" href="favicon_io/site.webmanifest">
        <!-- HTML - LOGO -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        <!-- ---------------        font-link         -------------->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Playfair+Display:wght@500&family=Roboto+Slab:wght@400;600&display=swap" rel="stylesheet">
    <!-- ---------------         swiper-css    ---------------- -->
        <link
            rel="stylesheet"
            href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
        />

        <!-- scroll reveal -->
        <script src="https://unpkg.com/scrollreveal@3.3.2/dist/scrollreveal.min.js"></script>


    <!-- ---------------          CSS           ---------------- -->
        <link rel="stylesheet" href="css/style.css">


    <title>Willz Frank</title>
    </head>
        <body>

    <!-- =======================         HEADER     ===================== -->
            <header class="header" id="header">
                <nav class="nav container">
                    <a href="#home" class="nav__logo">Willz Frank</a> <!--------------------------------HOMEPAGE LINK -->

                    <div class="nav__menu" id="nav-menu">
                        <ul class="nav__list grid">
                            <li class="nav__item">
                                <a href="#home" class="nav__link ">
                             <i class="uil uil-estate nav__icon"></i>HOME
                         </a>
                         
                     </li>

                     <li class="nav__item">
                         <a href="#about" class="nav__link ">
                             <i class="uil uil-user nav__icon"></i>ABOUT
                            </a>

                     </li>

                     <li class="nav__item">
                         <a href="#skills" class="nav__link">
                             <i class="uil uil-file-alt nav__icon"></i>SKILLS
                         </a>
                     </li>

                     <li class="nav__item">
                         <a href="#services" class="nav__link">
                             <i class="uil uil-briefcase-alt nav__icon"></i>SERVICES
                         </a>
                     </li>

                     <li class="nav__item">
                         <a href="#portfolio" class="nav__link">
                             <i class="uil uil-scenery nav__icon"></i>PORTFOLIO
                         </a>
                     </li>

                     <li class="nav__item">
                         <a href="#contact" class="nav__link">
                             <i class="uil uil-envelope nav__icon"></i>CONTACT ME
                         </a>
                     </li>
                 </ul>

                 <i class="uil uil-times nav__close" id="nav-close"></i>
             </div>

             <div class="nav__btns">
                    <!-- Theme Change buttons -->
                    <i class="uil uil-moon change-theme" id="theme-button"></i>
                    
                     

                  <div class="nav__toggle" id="nav-toggle">
                    <i class="uil uil-apps"></i>
                  </div>
             </div>
        </nav>
    </header>

    <!-- ===============          main      ==========-->

    <main class="main">
        <!-- ======     home    ========= -->
        <section class="home section" id="home">
            <div class="home__container container grid">
                <div class="home__content grid">
                    <div class="home__social">
                        <a href="https://www.linkedin.com/in/godswill-udoh-653669b7/" target="_blank" class="home__social-icon"> <i class="uil uil-linkedin"></i></a>
                           
                        <a href="tel:+2347037527868" target="_blank" class="home__social-icon"><i class="uil uil-whatsapp"></i></a>
                            
                        <a href="https://github.com/willzfrank" target="_blank" class="home__social-icon"><i class="uil uil-github-alt"></i></a>
                        
                    </div>
                    
                    <div class="home__img">
                        <img src="images/large-image.jpg" alt="Willz frank Profile pics" class="home__blob-img">
                    </div>

                    <div class="home__data">
                        <h1 class="home__title">Hi, I`m Godswill Francis</h1>
                        <h3 class="home__subtitle">Frontend Developer</h3>
                        <p class="home__description">I have been working as a front-end developer since 2021. I’ve always been someone who has both a creative and a logical side. When I discovered web design in college, I realized it would be the perfect fit. I could use my creative side to design and my logical side to code. Being developer allows me to make sure no detail is lost in translation. </p>

                            <a href="#contact" class="button button--flex">
                               Contact Me <i class="uil uil-message button__icon"></i>
                            </a>
                    </div>
                </div>

                <div class="home__scroll">
                    <a href="#about" class="home__scroll-button button--flex">
                        <i class="uil uil-mouse-alt home__scroll-mouse"></i>
                        <span class="home__scroll-name">Scroll down</span>
                        <i class="uil uil-arrow-down home__scroll-arrow"></i>
                    </a>
                </div>
            </div>
        </section>

        <!-- ==============     ABOUT         ==============-->
        <section class="about section" id="about">
            <h2 class="section__title">About Me</h2>
            <span class="section__subtitle">My Introduction</span>

            <div class="about__container container grid">
                <img src="./images/portfolio__image.jpg" alt="Willz frank profile picture" class="about__img">

                <div class="about__data">
                    <p class="about__description">I am a professional Frontend Web Developer based in Lagos state, Nigeria. A graduate from the university of Lagos, Nigeria and currently undergoing Diploma in Software Engineering in National Institute of Information Technology. Am a problem solver, ever learning software developer with an eye for pixel perfect designs. Also ecstatic about start-ups and looking to make an impact in the tech industry. Tap in lets make beautiful works together.</p>

                    <div class="about__info">
                        <div>
                            <span class="about__info-title">1</span>
                            <span class="about__info-name">years <br>experience</span>
                        </div>

                        <div>
                            <span class="about__info-title">4</span>
                            <span class="about__info-name">Total <br>Project</span>
                        </div>

                        <div>
                            <span class="about__info-title">1</span>
                            <span class="about__info-name">Companies <br>Worked</span>
                        </div>
                    </div>  
                    
                    <div class="about__buttons">
                        <a  download=""href="asset/december cv.pdf" class="button button--flex">
                           Download CV <i class="uil uil-download-alt button__icon"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- ====================     SKILLS      =====================================-->

        <section data-sr class="skills section" id="skills">
            <h2 class="section__title">Skills</h2>
            <span class="section__subtitle">My technical level</span>

            <div class="skills__container container grid"> 
                <div>
                    <div class="skills__content skills__open">
                            <div class="skills__header">
                                <i class="uil uil-brackets-curly skills__icon"></i>

                                <div>
                                    <h1 class="skills__title">Frontend Developer</h1>
                                    <span class="skills__subtitle">a Year</span>
                                </div>
                                <i class="uil uil-angle-down skills__arrow"></i>
                            </div>

                            <!-- ============    FRONT-END SKILLS    ===============-->

                            <div class="skills__list grid">
                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">HTML</h3>
                                        <img src="./images/html-1.svg" alt="HTML5"
                                        class="skills__logo" >
                                    </div>
                                
                                    <!-- <div class="skills__bar">
                                        <span class="skills__percentage skills__html"></span>
                                    </div> -->
                                </div>
                            

                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">CSS</h3>
                                        <!-- <span class="skills__number">80%</span> -->
                                        <img src="./images/css3.png" alt="CSS 3"
                                        class="skills__logo" >
                                </div>
                        
                                <!-- <div class="skills__bar">
                                    <span class="skills__percentage skills__css"></span>
                                </div> -->
                            </div>       

                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">JavaScript</h3>
                                    <!-- <span class="skills__number">50%</span> -->
                                    <img src="./images/Javascript.png" alt="Javascript"
                                    class="skills__logo" >
                                </div>
                            
                                <!-- <div class="skills__bar">
                                    <span class="skills__percentage skills__js"></span>
                                </div> -->
                            </div>

                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">React</h3>
                                    <img src="./images/react.png" alt="React"
                                    class="skills__logo" >
                                </div>
                            
                                <!-- <div class="skills__bar">
                                    <span class="skills__percentage skills__react"></span>
                                </div> -->
                            </div>
                        </div>
                    </div>

                    <!-- ===============          BACKEND DEVELOPER     =================  -->
                    <div class="skills__content skills__close">
                            <div class="skills__header">
                                <i class="uil uil-server-connection skills__icon"></i>

                                <div>
                                    <h1 class="skills__title">Other Fundamental Skills</h1>
                                    <span class="skills__subtitle">a Year</span>
                                </div>
                                <i class="uil uil-angle-down skills__arrow"></i>
                            </div>

                            <!-- ============    BACK-END SKILLS    ===============-->

                            <div class="skills__list grid">
                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">PHP</h3>
                                        <!-- <span class="skills__number">20%</span> -->
                                        <img src="./images/php.png" alt="PHP"
                                        class="skills__logo" >
                                    </div>
                                
                                    <!-- <div class="skills__bar">
                                        <span class="skills__percentage skills__php"></span>
                                    </div> -->
                                </div>
                            

                             <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Github</h3>
                                        <!-- <span class="skills__number">20%</span> -->
                                        <img src="./images/github.png" alt="Github"
                                        class="skills__logo" >
                                </div>
                        
                                <!-- <div class="skills__bar">
                                    <span class="skills__percentage skills__node_js"></span>
                                </div> -->
                            </div>        

                             <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Bootstrap</h3>
                                    <!-- <span class="skills__number">20%</span> -->
                                    <img src="./images/bootstrap.png" alt="Bootstrap"
                                    class="skills__logo" >
                                </div>
                            
                                <!-- <div class="skills__bar">
                                    <span class="skills__percentage skills__phyton"></span>
                                </div> -->
                            </div> 

                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">MSSQL</h3>
                                    <!-- <span class="skills__number">60%</span> -->
                                    <img src="./images/logo-sql-server.png" alt="MSSQL"
                                    class="skills__logo" >
                                </div>
                            
                                <!-- <div class="skills__bar">
                                    <span class="skills__percentage skills__mssql"></span>
                                </div> -->
                            </div>

                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">WordPress</h3>
                                    <!-- <span class="skills__number">60%</span> -->
                                    <img src="./images/wordpress_tile_logo_icon_168757.png" alt="WordPress"
                                    class="skills__logo" >
                                </div>
                            
                                <!-- <div class="skills__bar">
                                    <span class="skills__percentage skills__mssql"></span>
                                </div> -->
                            </div>

                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Phyton</h3>
                                    <!-- <span class="skills__number">60%</span> -->
                                    <img src="./images/kisspng-python-programming-language-computer-programming-language-5acfdc365292a6.6915108915235717663382.png" alt="Phyton"
                                    class="skills__logo" >
                                </div>
                            
                                <!-- <div class="skills__bar">
                                    <span class="skills__percentage skills__mssql"></span>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>        
        </section>

        <!-- ===============     QUALIFICATION    =============== -->

        <section class="qualification section">
            <h2 class="section__title">Qualification</h2>
            <span class="section__subtitle">My Personal Journey</span>

            <div class="qualification__container container">
                <div class="qualification__tabs">
                    <div class="qualification__button button--flex qualification__active" data-target="#education">
                        <i class="uil uil-graduation-cap qualification__icon"></i>
                        Education
                    </div>

                    <div class="qualification__button button--flex" data-target="#work">
                        <i class="uil uil-bag qualification__icon"></i>
                        Work 
                    </div>
                </div>

                <div class="qualification__sections">
                    <!-- QUALIFICATIONS CONTENT 1 -->
                    <div class="qualification__content qualification__active" data-content id="education">
                        <!-- QUALIFICATION  1 -->
                          <!-- UNIVERSITY OF LAGOS -->
                        <div class="qualification__data">
                            <div>
                                <h3 class="qualification__title">Frontend Developer</h3>
                                <span class="qualification__subtitle">Vsonet Education, Nigeria</span>
                                <div class="qualification__calender">
                                    <i class="uil uil-schedule"></i>
                                    June 2021- August 2021
                                </div>
                            </div>

                            <div> 
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>
                            </div>
                        </div>
                        
                        <!-- SIDE HUSTLE -->
                        <div class="qualification__data">
                            <div></div> 

                            <div>
                                    <span class="qualification__rounder"></span>
                                    <!-- <span class="qualification__line"></span> -->
                                </div>
                          
                            <div>
                                <h3 class="qualification__title">Frontend Developer</h3>
                                <span class="qualification__subtitle">Side Hustle, Nigeria</span>
                                <div class="qualification__calender">
                                    <i class="uil uil-schedule"></i>
                                    March 2021- June 2021
                                </div>
                            </div>

                                
                        </div>

                        <!-- NIIT -->
                         <div class="qualification__data">
                            <div>
                                <h3 class="qualification__title">Software Engineer</h3>
                                <span class="qualification__subtitle">The National Institute Of Information Technology(NIIT), Nigeria</span>
                                <div class="qualification__calender">
                                    <i class="uil uil-schedule"></i>
                                    March 2021-Present
                                </div>
                            </div>

                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>
                            </div>
                        </div> 

                        <!-- <div class="qualification__data">
                                <div></div> 
                            <div>
                                    <span class="qualification__rounder"></span>
                                    
                                </div>
                            
                            <div>
                                <h3 class="qualification__title">Frontend Developer</h3>
                                <span class="qualification__subtitle">Vsonet Education, Nigeria</span>
                                <div class="qualification__calender">
                                    <i class="uil uil-schedule"></i>
                                    June 2021- August 2021
                                </div>
                            </div>
                                
                            </div>
                        </div> -->

                        <!-- <div class="qualification__data">




                            <div>
                                <div>
                                    <span class="qualification__rounder"></span>
                                    <span class="qualification__line"></span>
                                </div>
                            </div>
                            
                            <div>
                                <h3 class="qualification__title">Botany</h3>
                                <span class="qualification__subtitle">University Of Lagos, Nigeria</span>
                                <div class="qualification__calender">
                                   -- - calender-icon ---
                                    2015-2019
                                </div>
                            </div>
                        </div> -->
                    </div>

                    <div class="qualification__content" data-content id="work">
                        <!-- QUALIFICATION  1 -->
                        <!-- OUTCESS-GROUP -->
                        <div class="qualification__data">
                            <div></div>
    
                                <div>
                                    <span class="qualification__rounder"></span>
                                    <span class="qualification__line"></span>
                                </div>
                            <div>
                                <h3 class="qualification__title">Frontend Developer</h3>
                                <span class="qualification__subtitle">Vsonet Group, Nigeria</span>
                                <div class="qualification__calender">
                                    <i class="uil uil-schedule"></i> 
                                    June 2021- February 2022
                                </div>
                            </div>
                        </div>
                        <!-- VSONET-GROUP -->
                        <div class="qualification__data">
                            <!-- <div></div> -->
                            
                             <div>
                                <h3 class="qualification__title">Frontend Developer</h3>
                                <span class="qualification__subtitle">Freelancer</span>
                                <div class="qualification__calender">
                                     <i class="uil uil-schedule"></i> 
                                    February 2022- Present
                                </div>
                            </div>
                             
                             <div>
                                <span class="qualification__rounder"></span>
                                <!-- <span class="qualification__line"></span>  -->
                            </div> 
                        </div>

                        <!-- <div class="qualification__data">
                            <div>
                                <div>
                                    <span class="qualification__rounder"></span>
                                    <span class="qualification__line"></span>
                                </div>
                            </div>
                            
                            <div>
                                <h3 class="qualification__title">Botany</h3>
                                <span class="qualification__subtitle">University Of Lagos, Nigeria</span>
                                <div class="qualification__calender">
                                   -- - calender-icon ---
                                    2015-2019
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </section>

        <!-- ===================       SERVICES              =================-->
        <section class="services section" id="services">
            <h2 class="section__title">Services</h2>
            <span class="section__subtitle">What I Offer</span>

            <div class="services__container container grid">
                <!-- services 1 -->
                <!-- <div class="services__content ">
                    <div>
                        <i class="uil uil-arrow services__icon"></i>
                        <h3 class="services__title">FrontEnd <br> Developer </h3>
                    </div>

                    <span class="button button--flex button--small button--link services__button" id="open-modal">
                        View More
                        <i class="uil uil-arrow-right button__icon" id="open-modal"></i>
                    </span>

                    <div class="services__modal" id="myModal">
                        <div class="services__modal-content">
                            <h4 class="services__modal-title">Frontend <br>Developer</h4>
                            <i class="uil uil-times services__modal-close" id="close"></i>

                            <ul class="services__modal-services grid">
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p>Web page development</p>
                                </li>

                                 <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p>Web page development</p>
                                </li>

                                 <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p>Web page development</p>
                                </li>

                                 <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p>Web page development</p>
                                </li>
                            </ul>
                        </div>
                        
                    </div>
                </div> -->

                <div class="services__content">
                    <div>
                        <i class="uil uil-globe services__icon"></i>
                        <h3 class="services__title">Frontend  <br>Developer </h3>
                    </div>

                    <span class="button button--flex button--small button--link services__button" id="open-modal">
                        View More
                        <i class="uil uil-arrow-right button__icon" id="open-modal"></i>
                    </span>

                    <div class="services__modal" id="myModal">
                        <div class="services__modal-content">
                            <h4 class="services__modal-title">Frontend <br>Services Rendered</h4>
                            <i class="uil uil-times services__modal-close" id="close"></i>

                            <ul class="services__modal-services grid">
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p>Developing and maintaining the user interface.</p>
                                </li>

                                 <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p>Building reusable code for future use.</p>
                                </li>

                                 <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p>Ensuring websites are accessible across many platforms, including laptops and smartphones.</p>
                                </li>

                                 <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p>Translate UI/UX design wireframes to actual code.</p>
                                </li>
                            </ul>
                        </div>
                    </div>     
                </div>
            </div>
        </section>

        <!--            ============      PORTFOLIO      =============                 -->

        <section class="portfolio section" id="portfolio">
            <h2 class="section__title">Portfolio</h2>
            <span class="section__subtitle">Most Recent Work</span>

            <div class="portfolio__container container swiper mySwiper">
                <div class="swiper-wrapper">
                    <!-- PORTFOLIO 1 -->
                    <div class="portfolio__content grid swiper-slide">
                         <img src="asset/hero.jpg" alt="#" class="portfolio__img"> 

                        <div class="portfolio__data">
                            <h3 class="portfolio__title">Brand Design {OKteller}</h3>
                            <p class="portfolio__description">A responsive website with basic features that enables cutomers to purchase various utilities, telecomunications plans and many others.
                                <br>
                                <br>
                                <span class="wip""> !!  WORK IN PROGRESS  !! </span>
                            </p>

                              <a href="https://okteller-demo.netlify.app/"target="_blank" class="button button--flex button--small portfolio__button">
                                  Demo
                                  <i class="uil uil-arrow-right button__icon"></i>
                              </a> 
                               <a href="https://github.com/willzfrank/OKteller.git" target="_blank" class="button button--flex button--small portfolio__button"
                              style="margin-left: 10px;">
                                  Github
                                  <i class="uil uil-arrow-right button__icon"></i>
                              </a>     
                        </div>
                    </div>

                    <div class="portfolio__content grid swiper-slide">
                         <img src="asset/logo.png" alt="#" class="portfolio__img"> 

                        <div class="portfolio__data">
                            <h3 class="portfolio__title">Brand Design {Vsonet Group}</h3>
                            <p class="portfolio__description">Re-designed ICT Website with beautiful UI/UX to attract customers to its platform and also not failing to pass message intended for the customers.</p>

                              <a href="https://vsoneteducationdemo.netlify.app/" class="button button--flex button--small portfolio__button" target="_blank">
                                  Demo
                                 <i class="uil uil-arrow-right button__icon"></i>
                              </a> 
                              <a href="https://github.com/willzfrank/Vsonet_Education.git" target="_blank" class="button button--flex button--small portfolio__button"
                              style="margin-left: 10px;">
                                  Github
                                  <i class="uil uil-arrow-right button__icon"></i>
                              </a>     
                        </div>
                    </div>

                    <!-- <div class="portfolio__content grid swiper-slide">
                        <img src="#" alt="#" class="portfolio__img">

                        <div class="portfolio__data">
                            <h3 class="portfolio__title">Yetti</h3>
                            <p class="portfolio__description">A chatting app and a shopping app with main purpose to
                                connect the customers with his/her clients for easy transactions. </p>

                              <a href="#" class="button button--flex button--small portfolio__button">
                                  Demo
                                  <i class="uil uil-arrow-right button__icon"></i>
                              </a>    
                        </div>
                    </div> -->

                    <!-- <div class="portfolio__content grid swiper-slide">
                        <img src="#" alt="#" class="portfolio__img">

                        <div class="portfolio__data">
                            <h3 class="portfolio__title">Cart-away</h3>
                            <p class="portfolio__description">A simple e-commerce website
                                <br>
                                <br>
                                <span class="wip""> !!  WORK IN PROGRESS  !! </span>
                            </p>

                              <a href="#" class="button button--flex button--small portfolio__button">
                                  Demo
                                 <i class="uil uil-arrow-right button__icon"></i>
                              </a>    
                        </div>
                    </div>-->
                </div> 

                <div class="swiper-button-next">
                    <i class="uil uil-angle-right-b swiper-portfolio-icon"></i>
                </div>
                <div class="swiper-button-prev">
                    <i class="uil uil-angle-left-b swiper-portfolio-icon"></i>
                </div>
                  <!-- <div class="swiper-pagination"></div>  -->
            </div>
        </section>

        <!-- project in mind -->
        <!-- <section class="project section">
            <div class="project__bg">
                <div class="project__container container grid">
                    <div class="project__data">
                        <h2 class="project__title">You have a new project</h2>
                        <p class="project__description">Contact me, lets create beautiful work together!</p>
                            
                              
                        <a href="#contact" class="button button--flex button--white">
                            Contact Me
                            <i class="uil uil-message project__icon button__icon"></i>

                         <img src="./images/large-image.jpg" alt="" class="project__img">   
                        </a>
                    </div>
                </div>
            </div>
        </section> -->

        <!--==============         TESTIMONIAL      =============== -->

        <!-- <section class="testimonial section">
            <h2 class="section__title">testimonial</h2>
            <span class="section__subtitle">My client saying</span>

            <div class="testimonial__container container swiper mySwiper">
                <div class="swiper-wrapper">
                    
                    <div class="testimonial__content swiper-slide">
                        <div class="testimonial__data">
                            <div class="testimonial__header">
                                <img src="#" alt="" class="testimonial__img">

                                <div>
                                    <h3 class="testimonial__name">Mr Joe </h3>
                                    <p>CEO of Vsonet Groups</p>
                                    <span class="testimonial__client">Client</span>
                                </div>

                                <p class="testimonial__description">Lorem ipsum dolor sit
                                     amet consectetur adipisicing elit. Aliquid itaque 
                                     reiciendis vero cum alias. Modi corporis optio quasi 
                                     minima dignissimos cum mollitia commodi ratione, asperiores
                                      officia similique, quaerat, totam earum.</p>
                            </div>
                        </div>
                    </div>

                         
                     <div class="testimonial__content swiper-slide">
                        <div class="testimonial__data">
                            <div class="testimonial__header">
                                <img src="#" alt="" class="testimonial__img">

                                <div>
                                    <h3 class="testimonial__name">Mr Emmanuel</h3>
                                    <p>CEO of YETTI Technologies</p>
                                    <span class="testimonial__client">Client</span>
                                </div>

                                <p class="testimonial__description">Lorem ipsum dolor sit
                                     amet consectetur adipisicing elit. Aliquid itaque 
                                     reiciendis vero cum alias. Modi corporis optio quasi 
                                     minima dignissimos cum mollitia commodi ratione, asperiores
                                      officia similique, quaerat, totam earum.</p>
                            </div>
                        </div>
                    </div>

                        
                     <div class="testimonial__content swiper-slide">
                        <div class="testimonial__data">
                            <div class="testimonial__header">
                                <img src="#" alt="" class="testimonial__img">

                                <div>
                                    <h3 class="testimonial__name">Mr Francis</h3>
                                    <p>CEO of OKteller</p>
                                    <span class="testimonial__client">Client</span>
                                </div>

                                <p class="testimonial__description">Lorem ipsum dolor sit
                                     amet consectetur adipisicing elit. Aliquid itaque 
                                     reiciendis vero cum alias. Modi corporis optio quasi 
                                     minima dignissimos cum mollitia commodi ratione, asperiores
                                      officia similique, quaerat, totam earum.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <!-- =============      CONTACT ME           ==================-->

        <section class="contact section" id="contact">
            <h2 class="section__title">Contact Me</h2>
            <span class="section__subtitle">Get in Touch</span>

            <div class="contact__container container grid">
                <div>
                    <div class="contact__information">
                        <i class="uil uil-phone-alt contact__icon"></i>

                        <div>
                            <h3 class="contact__title">Call Me</h3>
                            <span class="contact__subtitle">+234-703-752-786-8</span>
                        </div>
                    </div>

                    <div class="contact__information">
                        <i class="uil uil-envelope contact__icon"></i>

                        <div>
                            <h3 class="contact__title">Email</h3>
                            <span class="contact__subtitle">willzudoh4@gmail.com</span>
                        </div>
                    </div>

                    <div class="contact__information">
                       <i class="uil uil-location-pin-alt contact__icon"></i>

                        <div>
                            <h3 class="contact__title">Location</h3>
                            <span class="contact__subtitle">Ipaja-Lagos, Nigeria</span>
                        </div>
                    </div>
                </div>

                <form action="" class="contact__form grid" id="contactMeForm" method="POST">
                    <div class="contact__inputs grid">
                        <div class="contact__content">
                            <label for="" class="contact__label">Name</label>
                            <input type="text" class="contact__input" name="name">
                        </div>  

                         <div class="contact__content">
                            <label for="" class="contact__label">Email</label>
                            <input type="email" class="contact__input" name="email">
                        </div> 
                        <div class="contact__content">
                            <label for="" class="contact__label">Subject</label>
                            <input type="text" class="contact__input" name="subject">
                        </div>
                    </div>
                    <div class="contact__content">
                            <label for="" class="contact__label">Message</label>
                            <textarea name="message" id="" cols="0" rows="7" class="contact__input"></textarea>
                    </div>

                    <div>
                        <button type="submit" class="button button--flex" id="sendMessageButton">
                            Send Message
                            <i class="uil uil-message button__icon"></i>
                        </button>
                    </div>
                </form>
            </div>
        </section>
    </main>

    <!-- ==============        FOOTER        ===================-->

    <footer class="footer">
        <div class="footer__bg">
            <div class="footer__container container grid">
                <div>
                    <h1 class="footer__title">Willz Frank</h1>
                    <span class="footer__subtitle">Frontend Developer</span>
                </div>

                <ul class="footer__links">
                    <li>
                        <a href="#services" class="footer__links">Services</a>
                    </li>
                    <li>
                        <a href="#portfolio" class="footer__links">Portfolio</a>
                    </li>
                    <li>
                        <a href="#contact" class="footer__links">Contact Me </a>
                    </li>
                </ul>

                <div class="footer__socials">
                    <a href="https://www.facebook.com/wills.udoh.5" target="_blank" class="footer__social">
                       <i class="uil uil-facebook"></i>
                    </a>

                     <a href="twitter.com/willsfranktweet?t=VRoN20Aw_YPb24BDxe89wQ&s=08" target="_blank" class="footer__social">
                        <i class="uil uil-twitter-alt"></i>
                    </a>

                     <a href="https://www.instagram.com/puresteelz/" target="_blank" class="footer__social">
                        <i class="uil uil-instagram"></i>
                    </a>
                </div>
            </div>
            
            <p class="footer__copy">&#169; WillzFrank 2021.|Designed by WillzFrank|</p>
        </div>
    </footer>
    <!-- ===========       SWIPER JS       =============== -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!--============     scroll to top      =============== -->

    <a href="#" class="scrollup" id="scroll-up">
        <i class="uil uil-arrow-up scrollup__icon"></i>

    </a>
    <!-- scroll reveal -->
    <script>
        ScrollReveal({
            reset: true,
            origin: 'top',
            distance: '60px',
            duration: 2000,
        });

        ScrollReveal().reveal('.about, .footer, .contact, .portfolio, .services, .skills, .qualification, .about, .home', { delay: 400, interval: 200 });

        
        
    </script>
    <!-- =================          main js      =============== -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="JS/main.js"></script>
</body>
</html>