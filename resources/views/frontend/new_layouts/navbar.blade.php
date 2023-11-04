<div class="navbar" id="navbar">
    <div class="hey">Elite</div>

    <div class="logo-top">
        <img src="{{asset('elite/src/png/elite-logo.png')}}" alt=""/>
    </div>

    <div class="navbar-tabs" id="navbar-tabs">
        <ul class="navbar-tabs-ul">
            <a href="#home" tabindex="0" aria-label="Home menu button">
                <li class="home activeThistab" class="navbar-tabs-li" data-aos="fade-down" data-aos-delay="100">
                    &#60;/Home&#62;
                </li>
            </a>
            <a href="#about" aria-label="about menu button">
                <li class="about" class="navbar-tabs-li" data-aos="fade-down" data-aos-delay="300">
                    &#60;/About&#62;
                </li>
            </a>
            <a href="#services" aria-label="services menu button">
                <li class="services" class="navbar-tabs-li" data-aos="fade-down" data-aos-delay="500">
                    &#60;/Services&#62;
                </li>
            </a>
            <a href="#features" aria-label="features menu button">
                <li class="features" class="navbar-tabs-li" data-aos="fade-down" data-aos-delay="500">
                    &#60;/Features&#62;
                </li>
            </a>
            <a href="#projects" aria-label="projects menu button">
                <li class="projects" class="navbar-tabs-li" data-aos="fade-down" data-aos-delay="700">
                    &#60;/Projects&#62;
                </li>
            </a>
            <a href="#blogs" aria-label="projects menu button">
                <li class="blogs" class="navbar-tabs-li" data-aos="fade-down" data-aos-delay="700">
                    &#60;/Blogs&#62;
                </li>
            </a>
            <a href="#contactus" aria-label="projects menu button">
                <li class="contactus" class="navbar-tabs-li" data-aos="fade-down" data-aos-delay="700">
                    &#60;/Contact Us&#62;
                </li>
            </a>
        </ul>
        {{--START::Become A Partner Is Here --}}
        <a href="@if(Route::currentRouteName() != 'become.partner') {{route('become.partner')}} @else {{route('homepage')}} @endif   " class="become">
            <button class="letsTalkBtn" type="submit">
                @if( Route::currentRouteName() != 'become.partner' )
                    <p class="letsTalkBtn-text">Become A Partner</p>
                @else
                    <p class="letsTalkBtn-text">Back Home</p>
                @endif

                <span class="letsTalkBtn-BG"></span>
            </button>
        </a>
        {{--END::Become A Partner Is Here --}}
    </div>
    <!-- navbar tabs ends -->
</div>

<!-- header ends here -->
