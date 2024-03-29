@include('Tamplet-Parts-AR.head-AR')

    <!-- icones.css -->
    <style>
        * {
            text-align: end !important;
        }
        .mlt{
            margin-top: 8px;
        }
    </style>



</head>

<body>
    @include('Tamplet-Parts-AR.header')
    <!-- Education Part Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp sector-card" data-wow-delay="0.1s">
                    <div class="position-relative h-100 mr-t-30">
                        <img class="img-fluid position-absolute w-100 sector-image2"
                            src="{{ asset('images/Main/Education.jpg') }}" alt="website template image"
                            style="object-fit:cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp sector-card2" data-wow-delay="0.3s">
                    <div class="flex-row flex-right">
                        <h6 class="section-title bg-white text-start text-primary pe-3">البيئة وتغير المناخ</h6>
                        <i class="fa-solid fa-cloud-sun-rain icone-right"></i>
                    </div>
                    <br><br>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6 p-5">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>تلتزم منظمة ريحان بحماية البيئة ومواجهة التحديات المتعلقة بتغير المناخ.</p>
                            <br>
                        </div>

                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>نرفع الوعي بالقضايا البيئية ونعزز الممارسات المستدامة في إدارة الموارد.</p>
                            <br>
                        </div>
                        <div class="col-sm-6 mt-5">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>تتضمن مبادراتنا مشاريع الطاقة المتجددة وإدارة المخلفات والمياه وفقًا للمعايير البيئية.</p>
                        </div>

                        <div class="col-sm-6 mar-top-52">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>نعمل على بناء قدرات المجتمعات لمواجهة تأثيرات تغير المناخ والحد من التدهور البيئي من خلال الممارسات التنموية المستدامة.</p>
                        </div>
                    </div>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </div>
    <!-- Education Part End -->
    @include('Tamplet-Parts-AR.footerAR')
