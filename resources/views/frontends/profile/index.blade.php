@extends('frontends.layouts.index')
@section('content')
<main>

    <!-- breadcrumb start -->
    <section class="breadcrumb bg_img ul_li" data-background="{{ asset('frontends/front_school.jpg') }}">
        <div class="container">
            <div class="breadcrumb__content text-center">
                <h2 class="breadcrumb__title">Profil Sekolah</h2>
                <p class="breadcrumb__desc">SD Kartini II Jalan Menuju Sukses</p>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->

    <!-- about start -->
    <section class="about pt-80 pb-120">
        <div class="container">
            <div class="about-info-inner ul_li_between mt-none-30">
                <div class="about-info mt-30">
                    <h3>LOKASI</h3>
                    <p>Jalan Raja Ali Haji, Komplek Sumber Agung, Sei Jodoh</p>
                </div>
                <div class="about-info mt-30">
                    <h3>Berdiri Sejak</h3>
                    <p>SD KARTIINI II <br> Berdiri Tahun 1979</p>
                </div>
                <div class="about-info mt-30">
                    <h3>Sekolah</h3>
                    <p>
                        SD KARTINI II BATAM BATU AMPAR- KOTA BATAM,
                        <br> YANG SUDAH TERAKREDITASI A
                    </p>
                </div>
            </div>
            <div class="about-content mt-60" style="text-align: justify;">
                Untuk mempersiapkan Generasi EMAS 2045 yang memiliki skill abad 21, SD Kartini II Batam memastikan diri
                menyelenggarakan pendidikan dengan berpijak kepada branding “Sekolah Kaya Literasi, Berkarakter,
                Spiritual, Sadar Gizi, dan Berwawasan Lingkungan”
                <br><br>
                SD Kartini II Batam menjadikan semua sarana dan prasarananya menjadi sumber belajar melalui literasi
                yang mampu menambah informasi, pengetahuan, dan wawasan bagi warga sekolah. Sehingga diharapkan warga
                sekolah menjadi literat sepanjang hayat.
                <br><br>
                Melalui keteladanan yang dapat dilihat langsung dan ditiru dari para pendidiknya, SD Kartini II Batam
                berupaya menghasilkan siswa yang berkarakter yang memiliki watak, tabiat, akhlak, dan kepribadian yang
                mencerminkan sikap religius, nasionalis, mandiri, gotong royong, dan integritas yang tinggi.

            </div>
            <div class="xb-video pos-rel mt-115">
                <img src="{{ asset('frontends/assets/img/bg/video_bg.png') }}" alt="">
                <a class="btn-video btn-video-center popup-video" href="https://www.youtube.com/watch?v=9B5pX_OpsEs"><i class="fas fa-play"></i></a>
                {{-- <a class="btn-video btn-video-center popup-video" href="https://www.youtube.com/embed/9B5pX_OpsEs?autoplay=1"><i class="fas fa-play"></i></a> --}}
            </div>
        </div>
    </section>
    <!-- about end -->

    <!-- mission vision start -->
    <section class="mission-vission z-1 pos-rel pt-110">
        <div class="mission-vission-bg" data-background="{{ asset('frontends/assets/img/bg/vm_bg.jpg') }}"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center mb-65">
                        <h2 class="title mb-15">VISI DAN MISI KAMI</h2>
                        <p>Memasuki lorong depan SD Kartini II Batam, tepat di sisi kanan dinding sekolah terpampang
                            jelas visi, misi, dan tujuan sekolah. Visi, misi, dan tujuan sekolah tersebut menjadi dasar
                            dan pijakan sekolah untuk menjalankan seluruh program pendidikan sekolah. Ada pun visi SD
                            Kartini II Batam adalah “Terwujudnya Sekolah Kartini sebagai sekolah unggul yang modern,
                            dengan lulusan yang berkualitas, berwawasan internasional, literat, berkarakter, dan
                            berbudaya lingkungan”.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-none-30">
                <div class="col-lg-6 mt-30">
                    <div class="mission-vission-item">
                        <h3 class="xb-item--title">Misi Kami</h3>
                        <p class="xb-item--content">Misi SD Kartini II Batam untuk mewujudkan visi sekolah tersebut
                            adalah sebagai berikut:</p>
                        <h4 class="xb-item--subtitle"></h4>
                        <ul class="xb-item--list list-unstyled">
                            <li><span style="color:#fdb714;">*</span>Menciptakan pola pembelajaran terpadu dan
                                berkualitas.</li>
                            <li><span style="color:#fdb714;">*</span>Memberikan layanan prima dan ramah anak kepada
                                peserta didik.</li>
                            <li><span style="color:#fdb714;">*</span>Mengiintegrasikan Penguatan Pendidikan Karakter
                                (PPK) ke dalam kurikulum, manajemen kelas, metode pembelajaran, dan budaya sekolah.</li>
                            <li><span style="color:#fdb714;">*</span>Menyusun dan melaksanakan Program Sekolah akademik
                                dan nonakademik untuk menghasilkan peserta didik yang unggul.</li>
                            <li><span style="color:#fdb714;">*</span>Mengusahakan sarana dan prasarana belajar yang
                                kondusif dan modern.</li>
                            <li><span style="color:#fdb714;">*</span>Melaksanakan dan mengikutsertakan guru dalam
                                pelatihan dan seminar untuk meningkatkan profesionalisme guru.</li>
                            <li><span style="color:#fdb714;">*</span>Mengintegrasikan kegiatan literasi ke dalam
                                kurikulum, pembiasaan, dan budaya sekolah.</li>
                            <li><span style="color:#fdb714;">*</span>Menciptakan lingkungan sekolah yang bersih, sehat,
                                asri, aman, dan nyaman sebagai pendukung kegiatan pendidikan melalui Program Adiwiyata.
                            </li>
                            <li><span style="color:#fdb714;">*</span>Mengoptimalkan pemanfaatan lingkungan serta
                                pemelihara sarana dan prasarana sekolah.</li>
                            <li><span style="color:#fdb714;">*</span>Melaksanakan pembelajaran Bahasa Inggris dan Bahasa
                                Mandarin yang interaktif.</li>

                        </ul>
                        <div class="xb-item--shape">
                            <div class="shape shape--1">
                                <img src="{{ asset('frontends/assets/img/shape/vm_shape1.png') }}" alt="">
                            </div>
                            <div class="shape shape--2">
                                <img src="{{ asset('frontends/assets/img/shape/vm_shape2.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-30">
                    <div class="mission-vission-item">
                        <h3 class="xb-item--title">VISI KAMI</h3>
                        <p class="xb-item--content">Searah dengan visi dan misi lembaga sekolah dasar, maka visi Sekolah
                            Dasar Kartini II Batu Ampar – Kota Batam adalah sebagai berikut :</p>
                        {{-- <h4 class="xb-item--subtitle">With edubost, you can:</h4> --}}
                        <ul class="xb-item--list list-unstyled">
                            <li><span style="color:#fdb714;">*</span>Meningkatkan SKL USBN dari rata-rata mata
                                pelajaran.</li>
                            <li><span style="color:#fdb714;">*</span>Mencapai nilai rata-rata keseluruhan pelajaran USBN
                                55,00.</li>
                            <li><span style="color:#fdb714;">*</span>Dalam jangka waktu menengah (4 tahun) diupayakan
                                peringkat sekolah akan terus meningkat.</li>
                            <li><span style="color:#fdb714;">*</span>Mencapai nilai rata-rata keseluruhan mata pelajaran
                                minimal 75,0 dalam rapor.</li>
                            <li><span style="color:#fdb714;">*</span>Menghasilkan minimal 75% lulusan yang melanjutkan
                                ke sekolah unggul.</li>
                            <li><span style="color:#fdb714;">*</span>Meraih juara 1 dalam Lomba Mata Pelajaran tingkat
                                Kota Batam.</li>
                            <li><span style="color:#fdb714;">*</span>Terlaksananya Penelitian Tindakan Kelas oleh setiap
                                guru.</li>
                            <li><span style="color:#fdb714;">*</span>Terlaksananya tugas secara profesional oleh guru
                                dan karyawan.</li>
                            <li><span style="color:#fdb714;">*</span>Meraih juara umum dalam event OSN, O2SN & FLS2N
                                Tingkat Kecamatan Batu Ampar.</li>
                            <li><span style="color:#fdb714;">*</span>Memiliki Tim Yasinan, Tim Sains Centre, Tim
                                Pramuka, Tim Seni dan Tim Dokter Kecil yang unggul.</li>
                            <li><span style="color:#fdb714;">*</span>Memiliki sarana dan prasarana lengkap dan modern.
                            </li>
                            <li><span style="color:#fdb714;">*</span>Terbentuknya siswa literat yang mampu mengakses,
                                memahami, dan menggunakan informasi secara cerdas.</li>
                            <li><span style="color:#fdb714;">*</span>Terbentuknya siswa yang berkarakter religius,
                                nasionalis, mandiri, gotong royong, dan integritas.</li>
                            <li><span style="color:#fdb714;">*</span>Terwujudnya lingkungan sekolah yang bersih,
                                tertata, sehat, asri, aman, dan nyaman.</li>
                            <li><span style="color:#fdb714;">*</span>Terwujudnya sekolah yang peduli dan berbudaya
                                lingkungan.</li>

                        </ul>
                        <div class="xb-item--shape">
                            <div class="shape shape--1">
                                <img src="{{ asset('frontends/assets/img/shape/vm_shape1.png') }}" alt="">
                            </div>
                            <div class="shape shape--2">
                                <img src="{{ asset('frontends/assets/img/shape/vm_shape2.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- mission vision end -->

    <!-- about start -->
    <section class="about pt-120 pb-120">
        <div class="container">
            <div class="row align-items-center mt-none-30">
                <div class="col-xl-6 col-lg-5 mt-30">
                    <div class="about-image">
                        <img src="{{ asset('frontends/cover.png') }}" alt="{{ asset('frontends/cover.png') }}"
                            style="width:825px; height:749px;">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7 mt-30">
                    <div class="about-content">
                        <div class="section-title mb-60">
                            <span class="sub-title">Mengapa Kami Lebih Baik</span>
                            <h2 class="title">Mengapa Sekolah Kami <br> Lebih Baik Dari Yang lain? </h2>
                        </div>
                        <div class="about-iconbox">
                            <div class="row mt-none-30">
                                <div class="col-lg-6 col-md-6 mt-30">
                                    <div class="about-iconbox-item ul_li">
                                        <div class="xb-item--icon">
                                            <img src="{{ asset('frontends/assets/img/icon/ab_01.svg') }}" alt="">
                                        </div>
                                        <h3 class="xb-item--title">Akreditas A</h3>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 mt-30">
                                    <div class="about-iconbox-item ul_li">
                                        <div class="xb-item--icon">
                                            <img src="{{ asset('frontends/assets/img/icon/ab_02.svg') }}" alt="">
                                        </div>
                                        <h3 class="xb-item--title">Kurikulum Berbasis Inovasi</h3>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 mt-30">
                                    <div class="about-iconbox-item ul_li">
                                        <div class="xb-item--icon">
                                            <img src="{{ asset('frontends/assets/img/icon/ab_03.svg') }}" alt="">
                                        </div>
                                        <h3 class="xb-item--title">Tenaga Pendidik Profesional</h3>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 mt-30">
                                    <div class="about-iconbox-item ul_li">
                                        <div class="xb-item--icon">
                                            <img src="{{ asset('frontends/assets/img/icon/ab_04.svg') }}" alt="">
                                        </div>
                                        <h5 class="xb-item--title"> Biaya yang Terjangkau</h5>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 mt-30">
                                    <div class="about-iconbox-item ul_li">
                                        <div class="xb-item--icon">
                                            <img src="{{ asset('frontends/assets/img/icon/ab_05.svg') }}" alt="">
                                        </div>
                                        <h3 class="xb-item--title">Belajar Nyaman dan Aman</h3>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 mt-30">
                                    <div class="about-iconbox-item ul_li">
                                        <div class="xb-item--icon">
                                            <img src="{{ asset('frontends/assets/img/icon/ab_06.svg') }}" alt="">
                                        </div>
                                        <h3 class="xb-item--title">dukungan siswa</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about end -->

    <!-- team start -->

    
    {{-- <section class="team pt-120 pb-120" data-bg-color="#F1F1E9">
        <div class="container">
            <div class="program-top pos-rel">
                <div class="section-title mb-60">
                    <span class="sub-title">guru kami</span>
                    <h2 class="title">guru kami</h2>
                </div>
                <div class="clg-testimonial-carousel">
                    <div class="xb-arrow xb-program-prev"><img
                            src="{{ asset('frontends/assets/img/icon/left-arrrow.png') }}" alt="">
                    </div>
                    <div class="xb-arrow xb-program-next"><img
                            src="{{ asset('frontends/assets/img/icon/right-arrow01.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="team-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="team-item">
                        <div class="xb-item--img pos-rel">
                            <img src="{{ asset('frontends/assets/img/team/team_01.jpg') }}" alt="">
                        </div>
                        <div class="xb-item--info pt-25">
                            <h3 class="xb-item--name"><a href="team-single.html">James Michael</a></h3>
                            <span class="xb-item--desig">Mathematics Instructor</span>
                        </div>
                        <ul class="xb-item--meta ul_li">
                            <li><span><svg width="23" height="23" viewBox="0 0 23 23" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M4.87029 3.99439C6.76907 3.07568 8.77017 2.20568 10.8732 1.38439C11.2821 1.22467 11.7163 1.22467 12.1252 1.38439C15.4174 2.67013 18.4596 4.07539 21.251 5.59959C22.03 6.02496 22.03 7.5265 21.251 7.95244C18.4596 9.47664 15.4174 10.8813 12.1252 12.1671C11.7163 12.3268 11.2821 12.3268 10.8732 12.1671C7.58099 10.8813 4.53878 9.47664 1.74738 7.95244C0.96832 7.5265 0.96832 6.02496 1.74738 5.59959C2.38419 5.25182 3.03431 4.91027 3.69732 4.57496"
                                            stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M17.5884 14.175V14.8479C17.5884 15.1871 17.4395 15.4936 17.2098 15.6255C15.5581 16.5777 13.7251 17.4431 11.7103 18.2219C11.6549 18.2429 11.5975 18.2537 11.5406 18.2537C11.4835 18.2537 11.4262 18.2429 11.3709 18.2219C9.35603 17.4431 7.52297 16.5777 5.87126 15.6255C5.64207 15.4936 5.49316 15.1871 5.49316 14.8479V9.85612"
                                            stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M17.5898 12.4751V9.81525" stroke="#170006" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M13.3574 7L9.85071 10.0233V18.3406" stroke="#170006"
                                            stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M9.85121 18.3406C10.3212 18.3406 10.7021 18.8594 10.7021 19.4994V21.7361H9.00027V19.4994C9.00027 18.8594 9.38124 18.3406 9.85121 18.3406Z"
                                            stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg></span>1 Courses</li>
                            <li><span><svg width="19" height="21" viewBox="0 0 19 21" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.9863 4.10156C12.9863 6.027 11.4254 7.58789 9.5 7.58789C7.57456 7.58789 6.01367 6.027 6.01367 4.10156C6.01367 2.17612 7.57456 0.615232 9.5 0.615232C11.4254 0.615232 12.9863 2.17612 12.9863 4.10156Z"
                                            stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M16.2676 14.9707H15.6523C15.4259 14.9707 15.2422 14.787 15.2422 14.5605V12.5098C15.2422 12.2833 15.4259 12.0996 15.6523 12.0996H16.2676C17.0604 12.0996 17.7031 12.7423 17.7031 13.5352C17.7031 14.328 17.0604 14.9707 16.2676 14.9707Z"
                                            stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M2.73242 14.9707H3.34766C3.57415 14.9707 3.75781 14.787 3.75781 14.5605V12.5098C3.75781 12.2833 3.57415 12.0996 3.34766 12.0996H2.73242C1.93959 12.0996 1.29688 12.7423 1.29688 13.5352C1.29688 14.328 1.93959 14.9707 2.73242 14.9707Z"
                                            stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M14.4969 9.89722C13.2932 8.48419 11.5011 7.58767 9.49942 7.58767C7.49774 7.58767 5.70564 8.48419 4.50195 9.89722"
                                            stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M16.0625 12.0996V9.31054L9.5 11.7715V20.3848L16.0625 17.9238V14.9707"
                                            stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M2.9375 14.9707V17.9238L9.5 20.3848V11.7715L2.9375 9.31054V12.0996"
                                            stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg></span>Students 60+</li>
                        </ul>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="team-item">
                        <div class="xb-item--img pos-rel">
                            <img src="{{ asset('frontends/assets/img/team/team_02.jpg') }}" alt="">

                        </div>
                        <div class="xb-item--info pt-25">
                            <h3 class="xb-item--name"><a href="team-single.html">Amanda Nicole</a></h3>
                            <span class="xb-item--desig">English Literature</span>
                        </div>
                        <ul class="xb-item--meta ul_li">
                            <li><span><svg width="23" height="23" viewBox="0 0 23 23" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M4.87029 3.99439C6.76907 3.07568 8.77017 2.20568 10.8732 1.38439C11.2821 1.22467 11.7163 1.22467 12.1252 1.38439C15.4174 2.67013 18.4596 4.07539 21.251 5.59959C22.03 6.02496 22.03 7.5265 21.251 7.95244C18.4596 9.47664 15.4174 10.8813 12.1252 12.1671C11.7163 12.3268 11.2821 12.3268 10.8732 12.1671C7.58099 10.8813 4.53878 9.47664 1.74738 7.95244C0.96832 7.5265 0.96832 6.02496 1.74738 5.59959C2.38419 5.25182 3.03431 4.91027 3.69732 4.57496"
                                            stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M17.5884 14.175V14.8479C17.5884 15.1871 17.4395 15.4936 17.2098 15.6255C15.5581 16.5777 13.7251 17.4431 11.7103 18.2219C11.6549 18.2429 11.5975 18.2537 11.5406 18.2537C11.4835 18.2537 11.4262 18.2429 11.3709 18.2219C9.35603 17.4431 7.52297 16.5777 5.87126 15.6255C5.64207 15.4936 5.49316 15.1871 5.49316 14.8479V9.85612"
                                            stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M17.5898 12.4751V9.81525" stroke="#170006" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M13.3574 7L9.85071 10.0233V18.3406" stroke="#170006"
                                            stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M9.85121 18.3406C10.3212 18.3406 10.7021 18.8594 10.7021 19.4994V21.7361H9.00027V19.4994C9.00027 18.8594 9.38124 18.3406 9.85121 18.3406Z"
                                            stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg></span>1 Courses</li>
                            <li><span><svg width="19" height="21" viewBox="0 0 19 21" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.9863 4.10156C12.9863 6.027 11.4254 7.58789 9.5 7.58789C7.57456 7.58789 6.01367 6.027 6.01367 4.10156C6.01367 2.17612 7.57456 0.615232 9.5 0.615232C11.4254 0.615232 12.9863 2.17612 12.9863 4.10156Z"
                                            stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M16.2676 14.9707H15.6523C15.4259 14.9707 15.2422 14.787 15.2422 14.5605V12.5098C15.2422 12.2833 15.4259 12.0996 15.6523 12.0996H16.2676C17.0604 12.0996 17.7031 12.7423 17.7031 13.5352C17.7031 14.328 17.0604 14.9707 16.2676 14.9707Z"
                                            stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M2.73242 14.9707H3.34766C3.57415 14.9707 3.75781 14.787 3.75781 14.5605V12.5098C3.75781 12.2833 3.57415 12.0996 3.34766 12.0996H2.73242C1.93959 12.0996 1.29688 12.7423 1.29688 13.5352C1.29688 14.328 1.93959 14.9707 2.73242 14.9707Z"
                                            stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M14.4969 9.89722C13.2932 8.48419 11.5011 7.58767 9.49942 7.58767C7.49774 7.58767 5.70564 8.48419 4.50195 9.89722"
                                            stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M16.0625 12.0996V9.31054L9.5 11.7715V20.3848L16.0625 17.9238V14.9707"
                                            stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M2.9375 14.9707V17.9238L9.5 20.3848V11.7715L2.9375 9.31054V12.0996"
                                            stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg></span>Students 60+</li>
                        </ul>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="team-item">
                        <div class="xb-item--img pos-rel">
                            <img src="{{ asset('frontends/assets/img/team/team_03.jpg') }}" alt="">

                        </div>
                        <div class="xb-item--info pt-25">
                            <h3 class="xb-item--name"><a href="team-single.html">David Martinez</a></h3>
                            <span class="xb-item--desig">Biology Professor</span>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="team-item">
                        <div class="xb-item--img pos-rel">
                            <img src="{{ asset('frontends/assets/img/team/team_04.jpg') }}" alt="">
                            <div class="team-social">
                                <ul class="xb-item--social list-unstyled">
                                    <li><a href="#!"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#!"><svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.4893 6.77491L15.3176 0H13.9365L8.87577 5.88256L4.8338 0H0.171875L6.28412 8.89547L0.171875 16H1.55307L6.8973 9.78782L11.1659 16H15.8278L9.48896 6.77491H9.4893ZM7.59756 8.97384L6.97826 8.08805L2.05073 1.03974H4.17217L8.14874 6.72795L8.76804 7.61374L13.9371 15.0075H11.8157L7.59756 8.97418V8.97384Z"
                                                    fill="#170006" />
                                            </svg></a></li>
                                    <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                </ul>
                                <span class="plus"><i class="far fa-plus"></i></span>
                            </div>
                        </div>
                        <div class="xb-item--info pt-25">
                            <h3 class="xb-item--name"><a href="team-single.html">Amanda Nicole</a></h3>
                            <span class="xb-item--desig">English Literature</span>
                        </div>
                        <ul class="xb-item--meta ul_li">
                            <li><span><svg width="23" height="23" viewBox="0 0 23 23" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M4.87029 3.99439C6.76907 3.07568 8.77017 2.20568 10.8732 1.38439C11.2821 1.22467 11.7163 1.22467 12.1252 1.38439C15.4174 2.67013 18.4596 4.07539 21.251 5.59959C22.03 6.02496 22.03 7.5265 21.251 7.95244C18.4596 9.47664 15.4174 10.8813 12.1252 12.1671C11.7163 12.3268 11.2821 12.3268 10.8732 12.1671C7.58099 10.8813 4.53878 9.47664 1.74738 7.95244C0.96832 7.5265 0.96832 6.02496 1.74738 5.59959C2.38419 5.25182 3.03431 4.91027 3.69732 4.57496"
                                            stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M17.5884 14.175V14.8479C17.5884 15.1871 17.4395 15.4936 17.2098 15.6255C15.5581 16.5777 13.7251 17.4431 11.7103 18.2219C11.6549 18.2429 11.5975 18.2537 11.5406 18.2537C11.4835 18.2537 11.4262 18.2429 11.3709 18.2219C9.35603 17.4431 7.52297 16.5777 5.87126 15.6255C5.64207 15.4936 5.49316 15.1871 5.49316 14.8479V9.85612"
                                            stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M17.5898 12.4751V9.81525" stroke="#170006" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M13.3574 7L9.85071 10.0233V18.3406" stroke="#170006"
                                            stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M9.85121 18.3406C10.3212 18.3406 10.7021 18.8594 10.7021 19.4994V21.7361H9.00027V19.4994C9.00027 18.8594 9.38124 18.3406 9.85121 18.3406Z"
                                            stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg></span>1 Courses</li>
                            <li><span><svg width="19" height="21" viewBox="0 0 19 21" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.9863 4.10156C12.9863 6.027 11.4254 7.58789 9.5 7.58789C7.57456 7.58789 6.01367 6.027 6.01367 4.10156C6.01367 2.17612 7.57456 0.615232 9.5 0.615232C11.4254 0.615232 12.9863 2.17612 12.9863 4.10156Z"
                                            stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M16.2676 14.9707H15.6523C15.4259 14.9707 15.2422 14.787 15.2422 14.5605V12.5098C15.2422 12.2833 15.4259 12.0996 15.6523 12.0996H16.2676C17.0604 12.0996 17.7031 12.7423 17.7031 13.5352C17.7031 14.328 17.0604 14.9707 16.2676 14.9707Z"
                                            stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M2.73242 14.9707H3.34766C3.57415 14.9707 3.75781 14.787 3.75781 14.5605V12.5098C3.75781 12.2833 3.57415 12.0996 3.34766 12.0996H2.73242C1.93959 12.0996 1.29688 12.7423 1.29688 13.5352C1.29688 14.328 1.93959 14.9707 2.73242 14.9707Z"
                                            stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M14.4969 9.89722C13.2932 8.48419 11.5011 7.58767 9.49942 7.58767C7.49774 7.58767 5.70564 8.48419 4.50195 9.89722"
                                            stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M16.0625 12.0996V9.31054L9.5 11.7715V20.3848L16.0625 17.9238V14.9707"
                                            stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M2.9375 14.9707V17.9238L9.5 20.3848V11.7715L2.9375 9.31054V12.0996"
                                            stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg></span>Students 60+</li>
                        </ul>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="team-item">
                        <div class="xb-item--img pos-rel">
                            <img src="{{ asset('frontends/assets/img/team/team_05.jpg') }}" alt="">
                            <div class="team-social">
                                <ul class="xb-item--social list-unstyled">
                                    <li><a href="#!"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#!"><svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.4893 6.77491L15.3176 0H13.9365L8.87577 5.88256L4.8338 0H0.171875L6.28412 8.89547L0.171875 16H1.55307L6.8973 9.78782L11.1659 16H15.8278L9.48896 6.77491H9.4893ZM7.59756 8.97384L6.97826 8.08805L2.05073 1.03974H4.17217L8.14874 6.72795L8.76804 7.61374L13.9371 15.0075H11.8157L7.59756 8.97418V8.97384Z"
                                                    fill="#170006" />
                                            </svg></a></li>
                                    <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                </ul>
                                <span class="plus"><i class="far fa-plus"></i></span>
                            </div>
                        </div>
                        <div class="xb-item--info pt-25">
                            <h3 class="xb-item--name"><a href="team-single.html">Amanda Nicole</a></h3>
                            <span class="xb-item--desig">English Literature</span>
                        </div>
                        <ul class="xb-item--meta ul_li">
                            <li><span><svg width="23" height="23" viewBox="0 0 23 23" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M4.87029 3.99439C6.76907 3.07568 8.77017 2.20568 10.8732 1.38439C11.2821 1.22467 11.7163 1.22467 12.1252 1.38439C15.4174 2.67013 18.4596 4.07539 21.251 5.59959C22.03 6.02496 22.03 7.5265 21.251 7.95244C18.4596 9.47664 15.4174 10.8813 12.1252 12.1671C11.7163 12.3268 11.2821 12.3268 10.8732 12.1671C7.58099 10.8813 4.53878 9.47664 1.74738 7.95244C0.96832 7.5265 0.96832 6.02496 1.74738 5.59959C2.38419 5.25182 3.03431 4.91027 3.69732 4.57496"
                                            stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M17.5884 14.175V14.8479C17.5884 15.1871 17.4395 15.4936 17.2098 15.6255C15.5581 16.5777 13.7251 17.4431 11.7103 18.2219C11.6549 18.2429 11.5975 18.2537 11.5406 18.2537C11.4835 18.2537 11.4262 18.2429 11.3709 18.2219C9.35603 17.4431 7.52297 16.5777 5.87126 15.6255C5.64207 15.4936 5.49316 15.1871 5.49316 14.8479V9.85612"
                                            stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M17.5898 12.4751V9.81525" stroke="#170006" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M13.3574 7L9.85071 10.0233V18.3406" stroke="#170006"
                                            stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M9.85121 18.3406C10.3212 18.3406 10.7021 18.8594 10.7021 19.4994V21.7361H9.00027V19.4994C9.00027 18.8594 9.38124 18.3406 9.85121 18.3406Z"
                                            stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg></span>1 Courses</li>
                            <li><span><svg width="19" height="21" viewBox="0 0 19 21" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.9863 4.10156C12.9863 6.027 11.4254 7.58789 9.5 7.58789C7.57456 7.58789 6.01367 6.027 6.01367 4.10156C6.01367 2.17612 7.57456 0.615232 9.5 0.615232C11.4254 0.615232 12.9863 2.17612 12.9863 4.10156Z"
                                            stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M16.2676 14.9707H15.6523C15.4259 14.9707 15.2422 14.787 15.2422 14.5605V12.5098C15.2422 12.2833 15.4259 12.0996 15.6523 12.0996H16.2676C17.0604 12.0996 17.7031 12.7423 17.7031 13.5352C17.7031 14.328 17.0604 14.9707 16.2676 14.9707Z"
                                            stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M2.73242 14.9707H3.34766C3.57415 14.9707 3.75781 14.787 3.75781 14.5605V12.5098C3.75781 12.2833 3.57415 12.0996 3.34766 12.0996H2.73242C1.93959 12.0996 1.29688 12.7423 1.29688 13.5352C1.29688 14.328 1.93959 14.9707 2.73242 14.9707Z"
                                            stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M14.4969 9.89722C13.2932 8.48419 11.5011 7.58767 9.49942 7.58767C7.49774 7.58767 5.70564 8.48419 4.50195 9.89722"
                                            stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M16.0625 12.0996V9.31054L9.5 11.7715V20.3848L16.0625 17.9238V14.9707"
                                            stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M2.9375 14.9707V17.9238L9.5 20.3848V11.7715L2.9375 9.31054V12.0996"
                                            stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg></span>Students 60+</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    
    <!-- team end -->


    <!-- fanfact section start  -->
    {{-- <section class="fanfact pt-120 pb-120">
        <div class="container">
            <div class="section-title text-center mb-60">
                <span class="sub-title">Jelajahi Kami</span>
                <h2 class="title">SD Kartini II Dalam Angka</h2>
            </div>
            <div class="row mt-none-30">
                <div class="col-lg-4 mt-30">
                    <div class="clg-fanfact">
                        <div class="xb-fanfact_item clr-gray">
                            <span class="xb-item--number">15+</span>
                            <span class="xb-item--contant">Understanding the <br> average class size</span>
                        </div>
                        <div class="xb-fanfact_wrap mt-30">
                            <div class="fanfact-img">
                                <img src="{{ asset('frontends/assets/img/fanfact/fanfact-img01.png') }}" alt="">
                            </div>
                            <div class="xb-fanfact_item">
                                <span class="xb-item--number">91%</span>
                                <span class="xb-item--contant">Of first-year students they are receiving some
                                    financial aid</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-30">
                    <div class="clg-fanfact">
                        <div class="xb-fanfact_wrap clr-primary mb-30">
                            <div class="fanfact-img">
                                <img src="{{ asset('frontends/assets/img/fanfact/fanfact-img02.png') }}" alt="">
                            </div>
                            <div class="xb-fanfact_item">
                                <span class="xb-item--number">91%</span>
                                <span class="xb-item--contant">Of first-year students return for their second
                                    year</span>
                            </div>
                        </div>
                        <div class="xb-fanfact_item clr-heading">
                            <span class="xb-item--number">18,000+</span>
                            <span class="xb-item--contant">Internship opportunities available to students</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-30">
                    <div class="clg-fanfact">
                        <div class="xb-fanfact_item clr-violate">
                            <span class="xb-item--number">$18k - $35k</span>
                            <span class="xb-item--contant">Exploring the range of merit scholarships</span>
                        </div>
                        <div class="xb-fanfact_wrap clr-gray mt-30">
                            <div class="fanfact-img">
                                <img src="{{ asset('frontends/assets/img/fanfact/fanfact-img03.png') }}" alt="">
                            </div>
                            <div class="xb-fanfact_item">
                                <span class="xb-item--number">60%</span>
                                <span class="xb-item--contant">Exploring opportunities for students to study
                                    abroad</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- fanfact section end  -->
</main>
@endsection