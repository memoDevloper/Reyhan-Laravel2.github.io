@include('Tamplet-Parts-EN.head-EN')
<link rel="stylesheet" href="{{ asset('css/our_prjects_EN.css') }}">

</head>

<body>
    @include('Tamplet-Parts-EN.header')


    {{-- Our Projects EN Start --}}

    {{-- Top Part Start --}}
    <div>
        <div>
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center hero_image">
                        <img src="{{ asset('images/Main/projes-hero.png') }}" alt="projects page hero image">
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="our-project-top-part">
        <div class="project-hero-text">Our Projects</div>
        <div class="sector-sub-w">Sektores</div>
        <section id="list-topics" class="list-topics">
            <div class="container">
                <div class="list-topics-content">
                    <div class="card-slider-container" id="sliderContainer">
                        <div class="card-slider" id="cardSlider">
                            <div class="card">
                                <a href="/Education-sector" class="Icones-style">
                                    <div class="single-list-topics-content">
                                        <div class="single-list-topics-icon">
                                            <i class="flaticon-restaurant bb"></i>
                                        </div>
                                        <h2 class="Icones-style">Education</h2>
                                        <!--1--->
                                    </div>
                                </a>
                            </div>
                            <div class="card">
                                <a href="/Protection-sector" class="Icones-style">
                                    <div class="single-list-topics-content">
                                        <div class="single-list-topics-icon">
                                            <i class="flaticon-pills1 bb"></i>
                                        </div>
                                        <h2 class="Icones-style">Protection</h2>
                                        <!--2--->
                                    </div>
                                </a>
                            </div>
                            <div class="card">
                                <a href="/Health-sector" class="Icones-style" style="padding-top: 3px;">
                                    <div class="single-list-topics-content">
                                        <div class="single-list-topics-icon">
                                            <i style="margin-top: 10px;" class="fa-solid fa-briefcase-medical bb"></i>
                                        </div>
                                        <h2 class="Icones-style">Health</h2>
                                        <!--3--->
                                    </div>
                                </a>
                            </div>
                            <div class="card">
                                <a href="/Peacebuilding-sector" style="font-size: 17px !important;"
                                    class="Icones-style">
                                    <div class="single-list-topics-content">
                                        <div class="single-list-topics-icon">
                                            <i class="flaticon-transport bb"></i>
                                        </div>
                                        <h2 class="Icones-style">Advocacy, social
                                            cohesion, and peacebuilding</h2>
                                        <!--4--->
                                    </div>
                                </a>
                            </div>
                            <div class="card">
                                <a href="/Securing-food-sector" class="Icones-style">
                                    <div class="single-list-topics-content">
                                        <div class="single-list-topics-icon">
                                            <i class="flaticon-travel bb"></i>
                                        </div>
                                        <h2 class="Icones-style">Securing
                                            food and livelihoods</h2>
                                        <!--5--->
                                    </div>
                                </a>
                            </div>
                            <div class="card"><a href="/Human-rights-sector" class="Icones-style down-medL">
                                    <div class="single-list-topics-content">
                                        <div class="single-list-topics-icon">
                                            <i class="fa-solid fa-scale-balanced down-lettel bb"></i>
                                        </div>
                                        <h2 class="Icones-style">Human rights and democracy</h2>
                                        <!--6--->
                                    </div>
                                </a>
                            </div>
                            <div class="card"><a href="/Non-food-products-sector" style="font-size: 19px !important;"
                                    class="Icones-style">
                                    <div class="single-list-topics-content">
                                        <div class="single-list-topics-icon">
                                            <i class="flaticon-building bb"></i>
                                        </div>
                                        <h2 class="Icones-style">Accommodation and
                                            non-food products</h2>
                                        <!--7--->
                                    </div>
                                </a>
                            </div>
                            <div class="card"><a href="/Early-recovery-sector" class="Icones-style">
                                    <div class="single-list-topics-content">
                                        <div class="single-list-topics-icon">
                                            <i class="fa-solid fa-bed-pulse bb"></i>
                                        </div>
                                        <h2 class="Icones-style">Early recovery</h2>
                                        <!--8--->
                                    </div>
                                </a>
                            </div>
                            <div class="card"><a href="/Environment-sector" class="Icones-style">
                                    <div class="single-list-topics-content">
                                        <div class="single-list-topics-icon">
                                            <i class="fa-solid fa-cloud-sun-rain"></i>
                                        </div>
                                        <h2 class="Icones-style">Environment
                                            and climate change</h2>
                                        <!--9--->
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.container-->
        </section>
    </div>
    {{-- Top Part End --}}


    {{-- Projects Part Start --}}
    <div class="AllProjects">
        {{-- Education Compain Start --}}
        <div class="container">
            <div class="educationPart">
                <div class="leftPart_project">
                    <div class="icone_2">
                        <i class="fa-solid fa-book-open fa-2xl" style="color: #ffffff;"></i>
                    </div>
                    <div class="text_2">
                        <h2>Education</h2>
                    </div>
                </div>
                <div class="openIcone">
                    <button class="btn" id="angle-down" type="button" onclick="EducationCombainPart()">
                        <i class="fa-solid fa-angle-down" style="color: #ffffff;"></i>
                    </button>
                </div>
            </div>
        </div>
        <div id="EducationProjects">
            <section class="frame3 list-topics" id="list-topics">
                <div class="container">
                    <div>
                        <div class="div-2 div-233">
                            <ul class="Postlar">
                                <li>
                                    <div class="div-3 ">
                                        <img class="image images-of-Recently-Added-Projects1"
                                            src="{{ asset('images/Main/Food-Help.JPG') }}" />
                                        <div class="div-4">
                                            <div class="div-5">
                                                <div class="text-wrapper-2">Food aid</div>
                                                <p class="p">A leading humanitarian organization dedicated to providing
                                                    food
                                                    assistance, it strives to alleviate hunger and improve living
                                                    conditions
                                                    for those in need by providing high-quality food resources and
                                                    effective
                                                    programs to improve nutrition and enhance food security.
                                                </p>
                                            </div>
                                            <div class="frame-wrapper">
                                                <div class="div-6 div-6-1">
                                                    <div class="text-wrapper-3">Give support</div>
                                                    <img class="vector" src="{{ asset('images/Main/hand2.svg') }}" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="div-8">
                                        <img class="image-2 images-of-Recently-Added-Projects"
                                            src="{{ asset('images/Main/Yatim.JPG') }}" />
                                        <div class="div-4">
                                            <div class="div-5">
                                                <div class="text-wrapper-2">Orphan Sponsor</div>
                                                <p class="p">The Orphan Shepherd is a symbol of humanitarian care, as he
                                                    seeks with dedication and compassion to provide comprehensive
                                                    support,
                                                    health care and education to orphans, achieving a positive impact on
                                                    their lives and future, and contributing to building a more caring
                                                    and
                                                    solidary society.
                                                </p>
                                            </div>
                                            <div class="frame-wrapper">
                                                <div class="div-6 div-6-2">
                                                    <div class="text-wrapper-3 ">Give support</div>
                                                    <img class="vector" src="{{ asset('images/Main/hand2.svg') }}" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="div-8 div-8-2">
                                        <img class="image-3 images-of-Recently-Added-Projects"
                                            src="{{ asset('images/Main/HumenRights.jpg') }}" />
                                        <div class="div-4">
                                            <div class="div-5">
                                                <div class="text-wrapper-2">Training Workers</div>
                                                <p class="p">Worker training plays a vital role in enhancing skills and
                                                    raising work efficiency, as it seeks to improve the individual’s
                                                    performance and enable him to adapt to modern practical challenges.
                                                    Worker training includes transfer of knowledge and development of
                                                    technical and soft skills, which enhances productivity and builds a
                                                    strong and qualified work team.
                                                </p>
                                            </div>
                                            <div class="frame-wrapper">
                                                <div class="div-6 div-6-3">
                                                    <div class="text-wrapper-3">Give support</div>
                                                    <img class="vector" src="{{ asset('images/Main/hand2.svg') }}" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        {{-- Education Compain End --}}



        {{-- Food Compain Start --}}

        <div class="container">
            <div class="FoodPart">
                <div class="leftPart_project">
                    <div class="icone_2">
                        <svg width="45" height="46" viewBox="0 0 45 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M26.2153 17.585C26.3024 17.5258 26.3895 17.4647 26.4747 17.3999C26.6451 17.2722 26.8081 17.1389 26.9638 16.9963C27.2768 16.7112 27.5621 16.3984 27.8159 16.0596C28.0067 15.806 28.179 15.5375 28.3309 15.2561C28.5847 14.7878 28.7848 14.2861 28.92 13.7585C28.9738 13.5474 29.0182 13.3327 29.0516 13.1142C29.1016 12.7866 29.1275 12.4496 29.1275 12.1071C29.1294 8.45831 26.169 5.5 22.5177 5.5C18.8664 5.5 15.906 8.45831 15.906 12.1071C15.906 15.756 18.8664 18.7143 22.5177 18.7143C23.6589 18.7143 24.7315 18.4255 25.6688 17.9164C25.856 17.8146 26.0375 17.7035 26.2135 17.585H26.2153Z"
                                fill="white" />
                            <path
                                d="M20.1557 27.8262C19.9242 27.0857 19.5314 26.4359 18.9738 25.8768C17.0379 23.9311 15.1687 22.0336 13.3681 20.1842C12.1398 18.9216 10.0817 20.3064 10.7449 21.8392C10.8746 22.1373 11.1691 22.5131 11.6267 22.9648C12.4363 23.759 13.2162 24.5476 13.9683 25.3307C14.8093 26.2045 13.7015 27.3671 12.9179 26.584C11.8712 25.5399 10.8246 24.4162 9.78158 23.211C9.59077 22.9907 9.49444 22.7334 9.49444 22.439C9.5 18.9198 9.5 15.3987 9.49259 11.8794C9.49259 11.35 9.44257 10.9353 9.34809 10.6354C8.89793 9.20622 7.01761 8.64529 5.87831 9.64497C5.28365 10.1652 4.99095 10.7983 5.00021 11.5444C5.05023 15.6301 5.05208 19.6473 5.00392 23.5924C4.9928 24.4791 5.19288 25.1437 5.80421 25.7583C7.97352 27.9373 10.065 30.0588 12.0824 32.1211C12.5567 32.6061 13.0476 33.0097 13.5904 33.4059C13.6663 33.4614 13.7126 33.541 13.7275 33.6428C13.7404 33.7335 13.7478 33.828 13.7497 33.9224C13.7553 35.9477 13.746 38.0192 13.7219 40.137C13.7201 40.2703 13.8034 40.3907 13.9294 40.4351C14.0498 40.4795 14.2221 40.5017 14.4462 40.4999C16.3303 40.4925 18.2254 40.4851 20.1279 40.4758C20.265 40.4758 20.3762 40.3629 20.378 40.2259C20.3836 36.8474 20.3836 33.4503 20.3762 30.0347C20.3743 29.0239 20.3002 28.2871 20.1557 27.8262Z"
                                fill="white" />
                            <path
                                d="M39.9926 11.4092C39.9963 9.65422 38.216 8.57494 36.6821 9.43392C35.7355 9.96524 35.565 10.7298 35.565 11.8276C35.565 15.419 35.565 18.9827 35.565 22.5168C35.565 22.8019 35.452 23.0759 35.2501 23.2776C34.1997 24.3347 33.1179 25.4251 32.0082 26.5525C31.2135 27.3578 30.3168 26.1563 31.0171 25.4047C31.734 24.6328 32.5547 23.7978 33.4791 22.8981C33.8811 22.5075 34.1497 22.1595 34.2831 21.8559C34.6536 21.0135 34.1664 20.0824 33.3235 19.7751C32.4936 19.4733 31.9415 19.9102 31.3061 20.5526C29.6907 22.1835 28.0586 23.8423 26.408 25.5288C25.7967 26.1545 25.391 26.6525 25.1927 27.0246C24.8259 27.7133 24.6425 28.3445 24.6407 28.9184C24.6333 32.6672 24.6314 36.4086 24.637 40.1408C24.637 40.3685 24.7518 40.4832 24.9797 40.4832L31.0338 40.4795C31.1857 40.4795 31.3098 40.3555 31.3098 40.2037V33.7317C31.3098 33.5725 31.3895 33.4244 31.5228 33.3374C31.9248 33.0801 32.3435 32.7302 32.777 32.2877C35.2297 29.7959 37.4194 27.5726 39.3479 25.6158C39.7851 25.1733 40.0018 24.6383 40 24.0126C39.9889 19.8806 39.987 15.6801 39.9926 11.4092Z"
                                fill="white" />
                        </svg>

                    </div>
                    <div class="text_2">
                        <h2>Securing food and livelihoods</h2>
                    </div>
                </div>
                <div class="openIcone">
                    <button class="btn" id="angle-down2" type="button" onclick="FoodCombainPart()">
                        <i class="fa-solid fa-angle-down" style="color: #ffffff;"></i>
                    </button>
                </div>
            </div>
        </div>
        <div id="FoodProjects">
            <section class="frame3 list-topics" id="list-topics">
                <div class="container">
                    <div>
                        <div class="div-2 div-233">
                            <ul class="Postlar">
                                <li>
                                    <div class="div-3 ">
                                        <img class="image images-of-Recently-Added-Projects1"
                                            src="{{ asset('images/Main/Food-Help.JPG') }}" />
                                        <div class="div-4">
                                            <div class="div-5">
                                                <div class="text-wrapper-2">Food aid</div>
                                                <p class="p">A leading humanitarian organization dedicated to providing
                                                    food
                                                    assistance, it strives to alleviate hunger and improve living
                                                    conditions
                                                    for those in need by providing high-quality food resources and
                                                    effective
                                                    programs to improve nutrition and enhance food security.
                                                </p>
                                            </div>
                                            <div class="frame-wrapper">
                                                <div class="div-6 div-6-1">
                                                    <div class="text-wrapper-3">Give support</div>
                                                    <img class="vector" src="{{ asset('images/Main/hand2.svg') }}" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="div-8">
                                        <img class="image-2 images-of-Recently-Added-Projects"
                                            src="{{ asset('images/Main/Yatim.JPG') }}" />
                                        <div class="div-4">
                                            <div class="div-5">
                                                <div class="text-wrapper-2">Orphan Sponsor</div>
                                                <p class="p">The Orphan Shepherd is a symbol of humanitarian care, as he
                                                    seeks with dedication and compassion to provide comprehensive
                                                    support,
                                                    health care and education to orphans, achieving a positive impact on
                                                    their lives and future, and contributing to building a more caring
                                                    and
                                                    solidary society.
                                                </p>
                                            </div>
                                            <div class="frame-wrapper">
                                                <div class="div-6 div-6-2">
                                                    <div class="text-wrapper-3 ">Give support</div>
                                                    <img class="vector" src="{{ asset('images/Main/hand2.svg') }}" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="div-8 div-8-2">
                                        <img class="image-3 images-of-Recently-Added-Projects"
                                            src="{{ asset('images/Main/HumenRights.jpg') }}" />
                                        <div class="div-4">
                                            <div class="div-5">
                                                <div class="text-wrapper-2">Training Workers</div>
                                                <p class="p">Worker training plays a vital role in enhancing skills and
                                                    raising work efficiency, as it seeks to improve the individual’s
                                                    performance and enable him to adapt to modern practical challenges.
                                                    Worker training includes transfer of knowledge and development of
                                                    technical and soft skills, which enhances productivity and builds a
                                                    strong and qualified work team.
                                                </p>
                                            </div>
                                            <div class="frame-wrapper">
                                                <div class="div-6 div-6-3">
                                                    <div class="text-wrapper-3">Give support</div>
                                                    <img class="vector" src="{{ asset('images/Main/hand2.svg') }}" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        {{-- Accommodation and non-food Compain Start --}}

        <div class="container">
            <div class="Non_FoodPart">
                <div class="leftPart_project">
                    <div class="icone_2">
                        <svg width="45" height="30" viewBox="0 0 45 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M22.5173 13.2614C26.1597 13.2614 29.1142 10.3398 29.1142 6.73785C29.1142 3.13589 26.1597 0.214294 22.5173 0.214294C18.8748 0.214294 15.9203 3.13589 15.9203 6.73785C15.9203 10.3398 18.8748 13.2614 22.5173 13.2614Z"
                                fill="white" />
                            <path
                                d="M9.43532 12.3503C12.0541 12.3503 14.1753 10.2527 14.1753 7.66306C14.1753 5.07342 12.0541 2.9758 9.43532 2.9758C6.81656 2.9758 4.69535 5.07342 4.69535 7.66306C4.69535 10.2527 6.81656 12.3503 9.43532 12.3503Z"
                                fill="white" />
                            <path
                                d="M35.6016 12.3503C38.218 12.3503 40.3392 10.2527 40.3392 7.66542C40.3392 5.07812 38.218 2.98051 35.6016 2.98051C32.9852 2.98051 30.864 5.07812 30.864 7.66542C30.864 10.2527 32.9852 12.3503 35.6016 12.3503Z"
                                fill="white" />
                            <path
                                d="M13.7182 14.9635C10.509 17.4425 8.6735 20.9291 8.59018 24.9172C8.5878 25.089 8.49733 25.1761 8.32354 25.1761H0.222017C0.13155 25.1761 0.0577484 25.1032 0.0553677 25.0137C0.0410835 24.3734 0.0244186 23.7401 0.00537302 23.1138C-0.168418 17.6332 3.89305 13.7417 9.38533 14.0148C11.0375 14.0972 12.3422 14.1607 13.6825 14.6998C13.7611 14.7304 13.7991 14.8199 13.7682 14.9C13.7587 14.9258 13.7396 14.947 13.7182 14.9635Z"
                                fill="white" />
                            <path
                                d="M36.4467 24.9548C36.3706 20.915 34.485 17.3837 31.2878 14.9329C31.2354 14.8929 31.2259 14.8199 31.2663 14.7681C31.2782 14.7516 31.2973 14.7375 31.3163 14.7304C32.3424 14.3208 33.3352 14.083 34.2946 14.0195C35.8992 13.9135 38.1323 14.0454 39.6012 14.6057C42.8008 15.8228 44.7935 18.5914 44.9554 21.9932C45.003 22.9655 45.0125 23.9684 44.9839 25.0019C44.9815 25.0961 44.9054 25.1691 44.8101 25.1691H36.6681C36.5467 25.1691 36.4491 25.0749 36.4467 24.9548Z"
                                fill="white" />
                            <path
                                d="M11.4899 29.7857C11.3399 29.7857 11.2185 29.6657 11.2185 29.5173V25.2209C11.2185 19.5354 15.8775 14.9259 21.6245 14.9259H23.3767C29.1237 14.9259 33.7827 19.5354 33.7827 25.2209V29.5173C33.7827 29.6657 33.6613 29.7857 33.5113 29.7857H11.4899Z"
                                fill="white" />
                        </svg>
                    </div>
                    <div class="text_2">
                        <h2>Accommodation and non-food products</h2>
                    </div>
                </div>
                <div class="openIcone">
                    <button class="btn" id="angle-down3" type="button" onclick="Non_FoodCombainPart()">
                        <i class="fa-solid fa-angle-down" style="color: #ffffff;"></i>
                    </button>
                </div>
            </div>
        </div>
        <div id="Non_FoodProjects">
            <section class="frame3 list-topics" id="list-topics">
                <div class="container">
                    <div>
                        <div class="div-2 div-233">
                            <ul class="Postlar">
                                <li>
                                    <div class="div-3 ">
                                        <img class="image images-of-Recently-Added-Projects1"
                                            src="{{ asset('images/Main/Food-Help.JPG') }}" />
                                        <div class="div-4">
                                            <div class="div-5">
                                                <div class="text-wrapper-2">Food aid</div>
                                                <p class="p">A leading humanitarian organization dedicated to providing
                                                    food
                                                    assistance, it strives to alleviate hunger and improve living
                                                    conditions
                                                    for those in need by providing high-quality food resources and
                                                    effective
                                                    programs to improve nutrition and enhance food security.
                                                </p>
                                            </div>
                                            <div class="frame-wrapper">
                                                <div class="div-6 div-6-1">
                                                    <div class="text-wrapper-3">Give support</div>
                                                    <img class="vector" src="{{ asset('images/Main/hand2.svg') }}" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="div-8">
                                        <img class="image-2 images-of-Recently-Added-Projects"
                                            src="{{ asset('images/Main/Yatim.JPG') }}" />
                                        <div class="div-4">
                                            <div class="div-5">
                                                <div class="text-wrapper-2">Orphan Sponsor</div>
                                                <p class="p">The Orphan Shepherd is a symbol of humanitarian care, as he
                                                    seeks with dedication and compassion to provide comprehensive
                                                    support,
                                                    health care and education to orphans, achieving a positive impact on
                                                    their lives and future, and contributing to building a more caring
                                                    and
                                                    solidary society.
                                                </p>
                                            </div>
                                            <div class="frame-wrapper">
                                                <div class="div-6 div-6-2">
                                                    <div class="text-wrapper-3 ">Give support</div>
                                                    <img class="vector" src="{{ asset('images/Main/hand2.svg') }}" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="div-8 div-8-2">
                                        <img class="image-3 images-of-Recently-Added-Projects"
                                            src="{{ asset('images/Main/HumenRights.jpg') }}" />
                                        <div class="div-4">
                                            <div class="div-5">
                                                <div class="text-wrapper-2">Training Workers</div>
                                                <p class="p">Worker training plays a vital role in enhancing skills and
                                                    raising work efficiency, as it seeks to improve the individual’s
                                                    performance and enable him to adapt to modern practical challenges.
                                                    Worker training includes transfer of knowledge and development of
                                                    technical and soft skills, which enhances productivity and builds a
                                                    strong and qualified work team.
                                                </p>
                                            </div>
                                            <div class="frame-wrapper">
                                                <div class="div-6 div-6-3">
                                                    <div class="text-wrapper-3">Give support</div>
                                                    <img class="vector" src="{{ asset('images/Main/hand2.svg') }}" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    {{-- Accommodation and non-food Compain End --}}


    {{-- Food Compain Start --}}

    {{-- Projects Part End --}}


    {{-- Our Projects EN End --}}


    @include('Tamplet-Parts-EN.footerEN')
