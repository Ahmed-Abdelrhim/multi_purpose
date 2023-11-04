@extends('frontend.new_layouts.app')
@section('content')
    <!-- hamburger -->
    <div class="hamburger" id="hamburger" data-aos="fade">
        <div class="hamburgerbase">
            <button id="hamburger-button" onclick="hamburgerMenu()" tabindex="0" aria-label="Menu Button">
                <span class="burger-bar" id="burger-bar1"></span>
                <span class="burger-bar" id="burger-bar2"></span>
                <span class="burger-bar" id="burger-bar3"></span>
            </button>
        </div>
    </div>
    <!-- hamburger -->
    <div class="mobiletogglemenu" id="mobiletogglemenu">
        <div class="emptyarea" id="emptyarea"></div>
        <ul class="mobile-navbar-tabs-ul" id="mobile-ul">
            <a href="#home" tabindex="0" aria-label="Home menu button">
                <li id="home-mobile-tab" class="mobile-navbar-tabs-li home activeThismobiletab"
                    onclick="hidemenubyli()">
                    &#60;/Home&#62;
                </li>
            </a>
            <a href="#about" tabindex="0" aria-label="about menu button">
                <li id="aboutme-mobile-tab" class="mobile-navbar-tabs-li about" onclick="hidemenubyli()">
                    &#60;/AboutMe&#62;
                </li>
            </a>
            <a href="#services" tabindex="0" aria-label="services menu button">
                <li id="services-mobile-tab" class="mobile-navbar-tabs-li services" onclick="hidemenubyli()">
                    &#60;/Services&#62;
                </li>
            </a>
            <a href="#features" tabindex="0" aria-label="features menu button">
                <li id="features-mobile-tab" class="mobile-navbar-tabs-li features" onclick="hidemenubyli()">
                    &#60;/Features&#62;
                </li>
            </a>
            <a href="#projects" tabindex="0" aria-label="projects menu button">
                <li id="projects-mobile-tab" class="mobile-navbar-tabs-li projects" onclick="hidemenubyli()">
                    &#60;/Projects&#62;
                </li>
            </a>
            <a href="#blogs" tabindex="0" aria-label="projects menu button">
                <li id="projects-mobile-tab" class="mobile-navbar-tabs-li blogs" onclick="hidemenubyli()">
                    &#60;/Blogs&#62;
                </li>
            </a>
            <a href="#contactus" tabindex="0" aria-label="projects menu button">
                <li id="projects-mobile-tab" class="mobile-navbar-tabs-li contactus" onclick="hidemenubyli()">
                    &#60;/Contact Us&#62;
                </li>
            </a>
            <a href="form.html">
                <button class="letsTalkBtn" type="submit">
                    <p class="letsTalkBtn-text">Become A Partner</p>
                    <span class="letsTalkBtn-BG"></span>
                </button>
            </a>
        </ul>

    </div>
    <!-- mobile toggle menu ends -->
    <div class="fakenavbar"></div>
    <section class="landing-page-container" id="home">
        <div class="text-content">
            <article id="hello-friend" data-aos="fade-up" data-aos-delay="0">
                <p class="jello">N</p>
                <p class="jello">a</p>
                <p class="jello">m</p>
                <p class="jello">a</p>
                <p class="jello">s</p>
                <p class="jello">t</p>
                <p class="jello">e</p>
                <p class="jello">(</p>
                <p class="jello">)</p>
                <p class="jello">;</p>
                &nbsp;
                <p class="jello">E</p>
                <p class="jello">l</p>
                <p class="jello">i</p>
                <p class="jello">t</p>
                <p class="jello">e</p>
                <div id="cursor"></div>
            </article>
            <article id="name" data-aos="fade-up" data-aos-delay="200">
                <p class="jello">F</p>
                <p class="jello">o</p>
                <p class="jello">r</p>
                &nbsp;
                <p class="jello">T</p>
                <p class="jello">e</p>
                <p class="jello">c</p>
                <p class="jello">h</p>
                <p class="jello">n</p>
                <p class="jello">o</p>
                <p class="jello">l</p>
                <p class="jello">o</p>
                <p class="jello">g</p>
                <p class="jello">y</p>
                <p class="jello">.</p>
            </article>
            <article id="work" data-aos="fade-up" data-aos-delay="400">
                <div>
                    <p class="jello">The</p>
                </div>
                <div>
                    <p class="jello">Best</p>
                </div>
                <div>
                    <p class="jello">Choice</p>
                </div>
                <div>
                    <p class="jello">For</p>
                </div>
                <div>
                    <p class="jello">Your</p>
                </div>
                <div>
                    <p class="jello">Project</p>
                    <p class="jello">.</p>
                </div>
            </article>
            <p id="info-para" data-aos="fade-up" data-aos-delay="600">
                Sharp Focus On Service Quality & Client Satisfaction.
            </p>
            <div class="contact-btn-div" data-aos="fade-up" data-aos-delay="800">
                <a href="form.html" tabindex="-1">
                    <button class="letsTalkBtn">
                        <p class="letsTalkBtn-text">Become A Partner</p>
                        <span class="letsTalkBtn-BG"></span>
                    </button>
                </a>
                <div class="setting-container" id="setting-container">
                    <input type="checkbox" id="switchforsetting" onclick="settingtoggle()"/>
                    <label for="switchforsetting" id="labelforsetting" tabindex="0"
                           aria-label="settings for sound and appearance"></label>
                    <div class="visualmodetogglebuttoncontainer" id="visualmodetogglebuttoncontainer">
                        <input type="checkbox" id="switchforvisualmode" onclick="visualmode()"/>
                        <label for="switchforvisualmode" id="labelforvisualmode" tabindex="0"
                               aria-label="switch appearance"></label>
                    </div>
                    <div class="soundtogglebuttoncontainer" id="soundtogglebuttoncontainer">
                        <input type="checkbox" id="switchforsound" onclick="playpause()"/>
                        <label for="switchforsound" id="labelforsound" tabindex="0"
                               aria-label="switch sound"></label>
                    </div>
                </div>
                <!-- setting div ends -->
            </div>
            <!-- contact-btn-div -->
        </div>
        <!-- Resume button -->
        <button class="resume-btn" id="resume-btn">
            <div class="sign">
                <svg viewBox="0 0 640 512">
                    <path
                        d="M144 480C64.5 480 0 415.5 0 336c0-62.8 40.2-116.2 96.2-135.9c-.1-2.7-.2-5.4-.2-8.1c0-88.4 71.6-160 160-160c59.3 0 111 32.2 138.7 80.2C409.9 102 428.3 96 448 96c53 0 96 43 96 96c0 12.2-2.3 23.8-6.4 34.6C596 238.4 640 290.1 640 352c0 70.7-57.3 128-128 128H144zm79-167l80 80c9.4 9.4 24.6 9.4 33.9 0l80-80c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-39 39V184c0-13.3-10.7-24-24-24s-24 10.7-24 24V318.1l-39-39c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9z"/>
                </svg>
            </div>
            <div class="text">Company profile</div>
        </button>
    </section>
    <!-- landing page ends here -->
    <section class="about-section-container" id="about" data-aos="fade-up">
        <div class="about-section">
            <div class="about-heading">
                <article class="about-heading-article" tabindex="0" aria-label="About me heading">
                    &#60;/About Us&#62;
                </article>
                <p class="aboutHeadingP"></p>
            </div>
            <div class="info-dp-section">

                <div class="about-info">
                    <p tabindex="0">
                        Elite Technology is a software development company established in 2022 that strive to bring
                        you the best software solution to your problem. We listen to your needs and we turn your
                        ideas into software exactly
                        how you need it to be.
                    </p>

                    <br/>
                    <p tabindex="0">
                        We recruit and keep the best of talent in the industry and respond to your ideas with
                        enhancements, suggestions and even warning, wherever necessary.
                    </p>
                    <br/>
                    <p tabindex="0">
                        We take care of all your programming needs for you-from mobile apps to web solution and ERP
                        System, and you are then free to focus on your core business. We are here to help your
                        business do better in the
                        digital era. Begin your new future now with us.
                    </p>
                </div>
                <div class="dp" data-aos="fade-up">
                    <img src="{{asset('elite/src/svg/blog3.svg')}}" alt="" tabindex="0" aria-label="image of vinod"/>
                </div>
            </div>
        </div>
    </section>
    <!-- about section ends  -->
    <section class="services-section-container" id="services">
        <div class="services-section">
            <div class="services-heading" data-aos="fade-up">
                <article class="services-heading-article" tabindex="0" aria-label="services heading">
                    &#60;/Services&#62;
                </article>
                <p class="servicesHeadingP"></p>
            </div>
            <div class="dev-section">
                <div class="language-speak">
                    <article tabindex="0" aria-label="languages i speak below">
                        >_ Why Choose us ?
                    </article>
                </div>
                <div class="dev-heading" data-aos="fade-up" tabindex="0" aria-label="">
                    WE UNDERSTAND YOUR REQUIREMENT AND PROVIDE QUALITY WORKS.
                </div>
                <div class="languages-section">
                    <div class="language-name" data-aos="fade-up" id="">
                        <article tabindex="0" aria-label="">NFC Technology</article>
                        <p>
                            Near-field communication (NFC) is a short-range wireless connectivity technology that
                            uses magnetic field induction to enable communication between devices.
                        </p>
                    </div>
                    <div class="language-name" data-aos="fade-up" id="">
                        <article tabindex="0" aria-label="">Developing</article>
                        <p>
                            we have the best software engineers including all sections.
                        </p>
                    </div>
                    <div class="language-name" data-aos="fade-up" id="">
                        <article tabindex="0" aria-label="">Digital Marketing</article>
                        <p>
                            We have marketers at the highest level to reach your goals.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- services section ends -->
    <section class="services-section-container" id="features">
        <div class="services-section">
            <div class="services-heading" data-aos="fade-up">
                <article class="services-heading-article" tabindex="0" aria-label="services heading">
                    &#60;/FEATURES&#62;
                </article>
                <p class="servicesHeadingP"></p>
            </div>
            <div class="dev-section">
                <div class="language-speak">
                    <article tabindex="0" aria-label="languages i speak below">
                        >_ HIGHLIGHTED FEATURES!
                    </article>
                </div>
                <div class="dev-heading" data-aos="fade-up" tabindex="0" aria-label="">
                    make your work easier and faster!
                </div>
                <div class="languages-section">
                    <div class="language-name" data-aos="fade-up" id="">
                        <div class="div-img">
                            <img src="src/png/responsive.png" style="width: 100px;" alt=""/>
                        </div>
                        <article tabindex="0" aria-label="">IT Consultancy</article>
                        <p>
                            If you need help identifying the technology barriers that stand between you and a more
                            profitable business, our software consultants can help.
                        </p>
                    </div>
                    <div class="language-name" data-aos="fade-up" id="">
                        <div class="div-img">
                            <img src="src/png/graphic-design.png" style="width: 100px;" alt=""/>
                        </div>
                        <article tabindex="0" aria-label="">Front-end Development</article>
                        <p>
                            Beautiful graphic design. Stunning web pages. Because people ignore design that ignores
                            people.
                        </p>
                    </div>
                    <div class="language-name" data-aos="fade-up" id="">
                        <div class="div-img">
                            <img src="src/png/backend.png" style="width: 100px;" alt=""/>
                        </div>
                        <article tabindex="0" aria-label="">Backend Development</article>
                        <p>
                            A dedicated team of developers to thrive on complex, end‑to‑end backend challenges.
                        </p>
                    </div>
                    <div class="language-name" data-aos="fade-up" id="">
                        <div class="div-img">
                            <img src="src/png/ux.png" style="width: 100px;" alt=""/>
                        </div>
                        <article tabindex="0" aria-label="">UI/Ux Design</article>
                        <p>
                            An integrated service that begins with studying the activity of your company and then
                            setting the appropriate visual identity with the use of significant colors and in line
                            with your activity to produce
                            an integrated identity, on top of which is a distinct, special and unique logo that
                            expresses the company’s vision and philosophy.
                        </p>
                    </div>
                    <div class="language-name" data-aos="fade-up" id="">
                        <div class="div-img">
                            <img src="src/png/development.png" style="width: 100px;" alt=""/>
                        </div>
                        <article tabindex="0" aria-label="">Mobile App Development</article>
                        <p>
                            We develop mobile solutions that will meet your business needs and goals. Our experience
                            covers the development of native, cross-platform and hybrid mobile apps.
                        </p>
                    </div>
                    <div class="language-name" data-aos="fade-up" id="">
                        <div class="div-img">
                            <img src="src/png/qa.png" style="width: 100px;" alt=""/>
                        </div>
                        <article tabindex="0" aria-label="">QA and Testing</article>
                        <p>
                            Software quality assurance is paramount. It represents the key to unlocking a better
                            return on investment and to establishing a strong, positive relationship with your
                            customer base. We offer a wide range
                            of software testing services to help you achieve it.
                        </p>
                    </div>
                    <div class="language-name" data-aos="fade-up" id="">
                        <div class="div-img">
                            <img src="src/png/robot.png" style="width: 100px;" alt=""/>
                        </div>
                        <article tabindex="0" aria-label="">Steam Education System</article>
                        <p>
                            STEAM is an educational approach to learning that uses Science, Technology, Engineering,
                            the Arts and Mathematic.
                        </p>
                    </div>
                    <div class="language-name" data-aos="fade-up" id="">
                        <div class="div-img">
                            <img src="src/png/e-commerce.png" style="width: 100px;" alt=""/>
                        </div>
                        <article tabindex="0" aria-label="">E-Commerce Development</article>
                        <p>
                            We have a limited Offer on E-Commerce package Native ( website & Mobile application IOS
                            & Android ).
                        </p>
                    </div>
                    <div class="language-name" data-aos="fade-up" id="">
                        <div class="div-img">
                            <img src="src/png/erp.png" style="width: 100px;" alt=""/>
                        </div>
                        <article tabindex="0" aria-label="">ERP System</article>
                        <p>
                            ERP is a software system that helps you run your entire business, including processes in
                            finance, human resources, manufacturing, supply chain, services, ...
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FEATURES section ends -->
    <!--
        - testimonials
        -->
    <section class="testimonials services-section-container">
        <div class="services-section">
            <div class="services-heading" data-aos="fade-up">
                <article class="services-heading-article" tabindex="0" aria-label="services heading">
                    &#60;/Testimonials&#62;
                </article>
                <p class="servicesHeadingP"></p>
            </div>
            <div class="dev-section">
                <div class="language-speak">
                    <article tabindex="0" aria-label="languages i speak below">
                        >_ WHAT CLIENTS SAY
                    </article>
                </div>
            </div>

            <ul class="testimonials-list has-scrollbar">
                <li class="testimonials-item">
                    <div class="content-card" data-testimonials-item>
                        <figure class="testimonials-avatar-box">
                            <img src="{{asset('elite/src/png/avatar-1.png')}}" alt="Daniel lewis" width="60"
                                 data-testimonials-avatar/>
                        </figure>
                        <h4 class="h4 testimonials-item-title" data-testimonials-title>Daniel lewis</h4>
                        <div class="testimonials-text" data-testimonials-text>
                            <p>
                                Richard was hired to create a corporate identity. We were very pleased with the work
                                done. She has a lot of experience and is very concerned about the needs of client.
                                Lorem ipsum dolor sit amet,
                                ullamcous cididt consectetur adipiscing elit, seds do et eiusmod tempor incididunt
                                ut laborels dolore magnarels alia.
                            </p>
                        </div>
                    </div>
                </li>
                <li class="testimonials-item">
                    <div class="content-card" data-testimonials-item>
                        <figure class="testimonials-avatar-box">
                            <img src="{{asset('elite/src/png/avatar-2.png')}}" alt="Jessica miller" width="60"
                                 data-testimonials-avatar/>
                        </figure>
                        <h4 class="h4 testimonials-item-title" data-testimonials-title>Jessica miller</h4>
                        <div class="testimonials-text" data-testimonials-text>
                            <p>
                                Richard was hired to create a corporate identity. We were very pleased with the work
                                done. She has a lot of experience and is very concerned about the needs of client.
                                Lorem ipsum dolor sit amet,
                                ullamcous cididt consectetur adipiscing elit, seds do et eiusmod tempor incididunt
                                ut laborels dolore magnarels alia.
                            </p>
                        </div>
                    </div>
                </li>
                <li class="testimonials-item">
                    <div class="content-card" data-testimonials-item>
                        <figure class="testimonials-avatar-box">
                            <img src="{{asset('src/png/avatar-3.png')}}" alt="Emily evans" width="60" data-testimonials-avatar/>
                        </figure>
                        <h4 class="h4 testimonials-item-title" data-testimonials-title>Emily evans</h4>
                        <div class="testimonials-text" data-testimonials-text>
                            <p>
                                Richard was hired to create a corporate identity. We were very pleased with the work
                                done. She has a lot of experience and is very concerned about the needs of client.
                                Lorem ipsum dolor sit amet,
                                ullamcous cididt consectetur adipiscing elit, seds do et eiusmod tempor incididunt
                                ut laborels dolore magnarels alia.
                            </p>
                        </div>
                    </div>
                </li>
                <li class="testimonials-item">
                    <div class="content-card" data-testimonials-item>
                        <figure class="testimonials-avatar-box">
                            <img src="{{asset('src/png/avatar-4.png')}}" alt="Henry william" width="60"
                                 data-testimonials-avatar/>
                        </figure>
                        <h4 class="h4 testimonials-item-title" data-testimonials-title>Henry william</h4>
                        <div class="testimonials-text" data-testimonials-text>
                            <p>
                                Richard was hired to create a corporate identity. We were very pleased with the work
                                done. She has a lot of experience and is very concerned about the needs of client.
                                Lorem ipsum dolor sit amet,
                                ullamcous cididt consectetur adipiscing elit, seds do et eiusmod tempor incididunt
                                ut laborels dolore magnarels alia.
                            </p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!--
        - testimonials modal
        -->
    <div class="modal-container" data-modal-container>
        <div class="overlay" data-overlay></div>
        <section class="testimonials-modal">
            <button class="modal-close-btn" data-modal-close-btn>
                <ion-icon name="close-outline">x</ion-icon>
            </button>
            <div class="modal-img-wrapper">
                <figure class="modal-avatar-box">
                    <img src="src/png/avatar-1.png" alt="Daniel lewis" width="80" data-modal-img/>
                </figure>
                <img src="src/svg/icon-quote.svg" alt="quote icon"/>
            </div>
            <div class="modal-content">
                <h4 class="h3 modal-title" data-modal-title>Daniel lewis</h4>
                <time datetime="2021-06-14">14 June, 2021</time>
                <div data-modal-text>
                    <p>
                        Richard was hired to create a corporate identity. We were very pleased with the work done.
                        She has a lot of experience and is very concerned about the needs of client. Lorem ipsum
                        dolor sit amet, ullamcous
                        cididt consectetur adipiscing elit, seds do et eiusmod tempor incididunt ut laborels dolore
                        magnarels alia.
                    </p>
                </div>
            </div>
        </section>
    </div>

    <!--
    - #projects
    -->

    <section class="projects-section-container" id="projects">
        <div class="projects-section-div">
            <div class="projects-heading">
                <article class="projects-heading-article" tabindex="0" aria-label="My projects starts from here">
                    &#60;/Projects&#62;
                </article>
                <p class="projectsHeadingP"></p>
            </div>
            <div class="dev-section">
                <div class="language-speak">
                    <article tabindex="0" aria-label="languages i speak below">
                        >_ Our awesome Previous work
                    </article>
                </div>
                <div class="dev-heading" data-aos="fade-up" tabindex="0" aria-label="">
                    ONLY BEST STORIES. DIVE IN!
                </div>
            </div>
            <div class="project-boxes-div">
                <div class="project-box project-box1" id="project-box1">
                    <div class="info-div">
                        <img src="src/webp/axocean-favicon.webp" alt="" class="faviconforProject"/>
                        <article class="ProjectHeading">AXOCEAN</article>
                        <p class="ProjectDescription">
                            E-commerce website frontend work to choose people their favorite design of product and
                            redirect to flipkart shopping site.
                        </p>
                        <a href="">
                            <button class="cta">
                                <span>See the Project</span>
                                <svg viewBox="0 0 13 10" height="10px" width="15px">
                                    <path d="M1,5 L11,5"></path>
                                    <polyline points="8 1 12 5 8 9"></polyline>
                                </svg>
                            </button>
                        </a>
                        <a href="">
                            <button class="cta">
                                <span>See the Live Site</span>
                                <svg viewBox="0 0 13 10" height="10px" width="15px">
                                    <path d="M1,5 L11,5"></path>
                                    <polyline points="8 1 12 5 8 9"></polyline>
                                </svg>
                            </button>
                        </a>
                    </div>
                    <div class="image-div">
                        <img src="{{asset('elite/src/webp/AXOCEAN-project.webp')}}" alt=""/>
                    </div>
                </div>
                <!-- ---------------------- -->

                <div class="project-box project-box2" id="project-box2">
                    <div class="info-div">
                        <img src="src/svg/aquaregia-favicon.svg" alt="" class="faviconforProjectAquaregia"/>
                        <article class="ProjectHeading">Aquaregia</article>
                        <p class="ProjectDescription">
                            A website for University Maharaja College fest "Aquaregia" for event registerations.
                        </p>
                        <a href="">
                            <button class="cta">
                                <span>See the Project</span>
                                <svg viewBox="0 0 13 10" height="10px" width="15px">
                                    <path d="M1,5 L11,5"></path>
                                    <polyline points="8 1 12 5 8 9"></polyline>
                                </svg>
                            </button>
                        </a>
                        <a href="">
                            <button class="cta">
                                <span>See the Live Site</span>
                                <svg viewBox="0 0 13 10" height="10px" width="15px">
                                    <path d="M1,5 L11,5"></path>
                                    <polyline points="8 1 12 5 8 9"></polyline>
                                </svg>
                            </button>
                        </a>
                    </div>
                    <div class="image-div">
                        <img src="{{asset('elite/src/webp/Aquaregia-project.webp')}}" alt=""/>
                    </div>
                </div>
                <!-- ---------------------- -->

                <div class="project-box project-box3" id="project-box3">
                    <div class="info-div">
                        <img src="src/ico/netflixfavicon.ico" alt="" class="faviconforProject"/>
                        <article class="ProjectHeading">React Netflix Clone</article>
                        <p class="ProjectDescription">
                            A webpage to categorize the shows to redirect user to watch the show.
                        </p>
                        <a href="">
                            <button class="cta">
                                <span>See the Project</span>
                                <svg viewBox="0 0 13 10" height="10px" width="15px">
                                    <path d="M1,5 L11,5"></path>
                                    <polyline points="8 1 12 5 8 9"></polyline>
                                </svg>
                            </button>
                        </a>
                        <a href="">
                            <button class="cta">
                                <span>See the Live Site</span>
                                <svg viewBox="0 0 13 10" height="10px" width="15px">
                                    <path d="M1,5 L11,5"></path>
                                    <polyline points="8 1 12 5 8 9"></polyline>
                                </svg>
                            </button>
                        </a>
                    </div>
                    <div class="image-div">
                        <img src="{{asset('elite/src/webp/NetflixCloneProject.webp')}}" alt=""/>
                    </div>
                </div>
                <!-- ---------------------- -->

                <div class="project-box project-box4" id="project-box4">
                    <div class="info-div">
                        <img src="{{asset('elite/src/png/qrcodefavicon.png')}}" alt="" class="faviconforProjectAquaregia"/>
                        <article class="ProjectHeading">QR Generator</article>
                        <p class="ProjectDescription">
                            A webpage to make a QR Code from text using API.
                        </p>
                        <a href="">
                            <button class="cta">
                                <span>See the Project</span>
                                <svg viewBox="0 0 13 10" height="10px" width="15px">
                                    <path d="M1,5 L11,5"></path>
                                    <polyline points="8 1 12 5 8 9"></polyline>
                                </svg>
                            </button>
                        </a>
                        <a href="">
                            <button class="cta">
                                <span>See the Live Site</span>
                                <svg viewBox="0 0 13 10" height="10px" width="15px">
                                    <path d="M1,5 L11,5"></path>
                                    <polyline points="8 1 12 5 8 9"></polyline>
                                </svg>
                            </button>
                        </a>
                    </div>
                    <div class="image-div">
                        <img src="{{asset('elite/src/webp/QRgeneratorProject.webp')}}" alt=""/>
                    </div>
                </div>

                <!-- ---------------------- -->
                <div class="project-box project-box5" id="project-box5">
                    <div class="info-div">
                        <img src="{{asset('elite/src/ico/foodmenufavicon.ico')}}" alt="" class="faviconforProjectAquaregia"/>
                        <article class="ProjectHeading">
                            Bhukkad A Food Company
                        </article>
                        <p class="ProjectDescription">
                            React based UI of a fast food company webpage.
                        </p>
                        <a href="">
                            <button class="cta">
                                <span>See the Project</span>
                                <svg viewBox="0 0 13 10" height="10px" width="15px">
                                    <path d="M1,5 L11,5"></path>
                                    <polyline points="8 1 12 5 8 9"></polyline>
                                </svg>
                            </button>
                        </a>
                        <a href="">
                            <button class="cta">
                                <span>See the Live Site</span>
                                <svg viewBox="0 0 13 10" height="10px" width="15px">
                                    <path d="M1,5 L11,5"></path>
                                    <polyline points="8 1 12 5 8 9"></polyline>
                                </svg>
                            </button>
                        </a>
                    </div>
                    <div class="image-div">
                        <img src="{{asset('elite/src/webp/FoodMenuProject.webp')}}" alt=""/>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--
        - #BLOG
        -->
    <section class="blog-posts services-section-container">
        <div class="services-section">
            <div class="services-heading" data-aos="fade-up">
                <article class="services-heading-article" tabindex="0" aria-label="services heading">
                    &#60;/Blogs&#62;
                </article>
                <p class="servicesHeadingP"></p>
            </div>
            <div class="dev-section">
                <div class="language-speak">
                    <article tabindex="0" aria-label="languages i speak below">
                        >_ WELCOME IN OUR BLOGS
                    </article>
                </div>
            </div>
            <ul class="blog-posts-list">
                <li class="blog-post-item">
                    <a href="#">

                        <figure class="blog-banner-box">
                            <img src="{{asset('elite/src/png/blog-1.jpg')}}" alt="Design conferences in 2022" loading="lazy"/>
                        </figure>

                        <div class="blog-content">
                            <div class="blog-meta">
                                <p class="blog-category">Design</p>
                                <span class="dot"></span>
                                <time datetime="2022-02-23">Fab 23, 2022</time>
                            </div>
                            <h3 class="h3 blog-item-title">Design conferences in 2022</h3>
                            <p class="blog-text">
                                Veritatis et quasi architecto beatae vitae dicta sunt, explicabo.
                            </p>
                        </div>


                    </a>
                </li>

                <li class="blog-post-item">
                    <a href="#">
                        <figure class="blog-banner-box">
                            <img src="{{asset('elite/src/png/blog-2.jpg')}}" alt="Best fonts every designer" loading="lazy"/>
                        </figure>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <p class="blog-category">Design</p>
                                <span class="dot"></span>
                                <time datetime="2022-02-23">Fab 23, 2022</time>
                            </div>
                            <h3 class="h3 blog-item-title">Best fonts every designer</h3>
                            <p class="blog-text">
                                Sed ut perspiciatis, nam libero tempore, cum soluta nobis est eligendi.
                            </p>
                        </div>
                    </a>
                </li>


                <li class="blog-post-item">
                    <a href="#">
                        <figure class="blog-banner-box">
                            <img src="{{asset('elite/src/png/blog-3.jpg')}}" alt="Design digest #80" loading="lazy"/>
                        </figure>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <p class="blog-category">Design</p>
                                <span class="dot"></span>
                                <time datetime="2022-02-23">Fab 23, 2022</time>
                            </div>
                            <h3 class="h3 blog-item-title">Design digest #80</h3>
                            <p class="blog-text">
                                Excepteur sint occaecat cupidatat no proident, quis nostrum exercitationem ullam
                                corporis suscipit.
                            </p>
                        </div>
                    </a>
                </li>


                <li class="blog-post-item">
                    <a href="#">
                        <figure class="blog-banner-box">
                            <img src="{{asset('elite/src/png/blog-4.jpg')}}" alt="UI interactions of the week" loading="lazy"/>
                        </figure>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <p class="blog-category">Design</p>
                                <span class="dot"></span>
                                <time datetime="2022-02-23">Fab 23, 2022</time>
                            </div>
                            <h3 class="h3 blog-item-title">UI interactions of the week</h3>
                            <p class="blog-text">
                                Enim ad minim veniam, consectetur adipiscing elit, quis nostrud exercitation ullamco
                                laboris nisi.
                            </p>
                        </div>
                    </a>
                </li>


                <li class="blog-post-item">
                    <a href="#">
                        <figure class="blog-banner-box">
                            <img src="{{asset('elite/src/png/blog-5.jpg')}}" alt="The forgotten art of spacing" loading="lazy"/>
                        </figure>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <p class="blog-category">Design</p>
                                <span class="dot"></span>
                                <time datetime="2022-02-23">Fab 23, 2022</time>
                            </div>
                            <h3 class="h3 blog-item-title">The forgotten art of spacing</h3>
                            <p class="blog-text">
                                Maxime placeat, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                    </a>
                </li>



                <li class="blog-post-item">
                    <a href="#">
                        <figure class="blog-banner-box">
                            <img src="{{asset('elite/src/png/blog-6.jpg')}}" alt="Design digest #79" loading="lazy"/>
                        </figure>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <p class="blog-category">Design</p>
                                <span class="dot"></span>
                                <time datetime="2022-02-23">Fab 23, 2022</time>
                            </div>
                            <h3 class="h3 blog-item-title">Design digest #79</h3>
                            <p class="blog-text">
                                Optio cumque nihil impedit uo minus quod maxime placeat, velit esse cillum.
                            </p>
                        </div>
                    </a>
                </li>

            </ul>
        </div>
    </section>

    <!--
        - score
        -->
    <section class="score clients services-section-container">
        <div class="services-section">
            <div class="services-heading" data-aos="fade-up">
                <article class="services-heading-article" tabindex="0" aria-label="services heading">
                    &#60;/OUR PROJECTS SCORE&#62;
                </article>
                <p class="servicesHeadingP"></p>
            </div>

            <div class="counter-container">
                <div class="counters">
                    <img src="src/png/review.png" alt="">
                    <div class="per">
                        <h2 class="num" data-goal="97">0</h2>
                        <h2 class="sign">%</h2>
                    </div>
                    <p class="count-text">POSITIVE REVIEWS</p>
                </div>

                <div class="counters">
                    <img src="src/png/problem-solving.png" alt="">
                    <div class="per">
                        <h2 class="num" data-goal="36">0</h2>
                        <h2 class="sign">+</h2>
                    </div>
                    <p class="count-text">SUPPORT ISSUES SOLVED</p>
                </div>

                <div class="counters">
                    <img src="src/png/customer.png" alt="">
                    <div class="per">
                        <h2 class="num" data-goal="150">0</h2>
                        <h2 class="sign">+</h2>
                    </div>
                    <p class="count-text">HAPPY CLIENTS</p>
                </div>
            </div>

        </div>
    </section>

    <!--
        - clients
        -->
    <section class="clients services-section-container">
        <div class="services-section">
            <div class="services-heading" data-aos="fade-up">
                <article class="services-heading-article" tabindex="0" aria-label="services heading">
                    &#60;/Clients&#62;
                </article>
                <p class="servicesHeadingP"></p>
            </div>
            <div class="dev-section">
                <div class="language-speak">
                    <article tabindex="0" aria-label="languages i speak below">
                        >_ We Worked with
                    </article>
                </div>
            </div>
            <ul class="clients-list has-scrollbar">
                <li class="clients-item">
                    <a href="#">
                        <img src="{{asset('elite/src/png/logo-1-color.png')}}" alt="client logo"/>
                    </a>
                </li>
                <li class="clients-item">
                    <a href="#">
                        <img src="{{asset('elite/src/png/logo-2-color.png')}}" alt="client logo"/>
                    </a>
                </li>
                <li class="clients-item">
                    <a href="#">
                        <img src="{{asset('elite/src/png/logo-3-color.png')}}" alt="client logo"/>
                    </a>
                </li>
                <li class="clients-item">
                    <a href="#">
                        <img src="{{asset('elite/src/png/logo-4-color.png')}}" alt="client logo"/>
                    </a>
                </li>
                <li class="clients-item">
                    <a href="#">
                        <img src="{{asset('elite/src/png/logo-5-color.png')}}" alt="client logo"/>
                    </a>
                </li>
                <li class="clients-item">
                    <a href="#">
                        <img src="{{asset('elite/src/png/logo-6-color.png')}}" alt="client logo"/>
                    </a>
                </li>
            </ul>
        </div>
    </section>
    <!--
        - #CONTACT
        -->
    <section class="services-section-container" data-mapbox id="contactus">
        <div class="services-section">
            <div class="services-heading" data-aos="fade-up">
                <article class="services-heading-article" tabindex="0" aria-label="services heading">
                    &#60;/Contact US&#62;
                </article>
                <p class="servicesHeadingP"></p>
            </div>
            <div class="dev-section">
                <div class="language-speak">
                    <article tabindex="0" aria-label="languages i speak below">
                        >_ Get In Touch
                    </article>
                </div>
            </div>
            <section class="mapbox" data-mapbox>
                <figure>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d199666.5651251294!2d-121.58334177520186!3d38.56165006739519!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x809ac672b28397f9%3A0x921f6aaa74197fdb!2sSacramento%2C%20CA%2C%20USA!5e0!3m2!1sen!2sbd!4v1647608789441!5m2!1sen!2sbd"
                        width="400" height="300" loading="lazy"></iframe>
                </figure>
            </section>
            <section class="contact-form">
                <form action="#" class="form" data-form>
                    <div class="input-wrapper">
                        <input type="text" name="fullname" class="form-input" placeholder="Full name" required
                               data-form-input/>
                        <input type="email" name="email" class="form-input" placeholder="Email address" required
                               data-form-input/>
                        <input type="tel" name="fullname" class="form-input" placeholder="phone" required
                               data-form-input/>
                        <select class="select">
                            <option hidden>Message Type</option>
                            <option value="">free programming consultation</option>
                            <option value="">free marketing consultation</option>
                            <option value="">other request</option>
                        </select>
                    </div>
                    <textarea name="message" class="form-input" placeholder="Your Message" required
                              data-form-input></textarea>
                    <button class="letsTalkBtn form-btn" type="submit">
                        <p class="letsTalkBtn-text">Send Message</p>
                        <span class="letsTalkBtn-BG"></span>
                    </button>
                </form>
            </section>
        </div>
    </section>
@endsection

@push('script')
@endpush
