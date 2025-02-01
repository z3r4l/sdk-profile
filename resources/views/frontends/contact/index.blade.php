@extends('frontends.layouts.index')
@section('content')
<main>

    <!-- breadcrumb start -->
    <section class="breadcrumb bg_img ul_li" data-background="{{ asset('frontends/front_school.jpg') }}">
        <div class="container">
            <div class="breadcrumb__content text-center">
                <h2 class="breadcrumb__title">Kontak Kami</h2>
                <p class="breadcrumb__desc">Hubungi Sekolah kami</p>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->

    <!-- contact start -->
    <section class="contact_section section_space" data-bg-color="#F1F1E9">
        <div class="container">
            <div class="row justify-content-lg-between mt-none-30">
                <div class="col-lg-7 mt-30">
                    <form action="{{ route('kontak.send') }}" method="post">
                        @csrf
                        <div class="contact_form mb-0">
                            <h3 class="title">Kirimkan pesan kepada kami 👍🏻</h3>
                            <p class="content">Beri kami kesempatan untuk melayani.</p>
                            <div class="row">
                                @if(session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                    
                                <!-- Input Nama Lengkap -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="input_title" for="input_name">Nama Lengkap <span class="text-danger">*</span></label>
                                        <input id="input_name" class="form-control @error('name') is-invalid @enderror" 
                                               type="text" name="name" value="{{ old('name') }}" 
                                               placeholder="Goladra Gomaz" required>
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                    
                                <!-- Input Email -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="input_title" for="input_email">Email <span class="text-danger">*</span></label>
                                        <input id="input_email" class="form-control @error('email') is-invalid @enderror" 
                                               type="email" name="email" value="{{ old('email') }}" 
                                               placeholder="edubost@example.com" required>
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                    
                                <!-- Input No Handphone -->
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="input_title" for="input_phone">No Handphone <span class="text-danger">*</span></label>
                                        <input id="input_phone" class="form-control @error('phone') is-invalid @enderror" 
                                               type="tel" name="phone" value="{{ old('phone') }}" 
                                               placeholder="+8250-3560 6565">
                                        @error('phone')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                    
                                <!-- Input Pesan -->
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="input_title" for="input_textarea">Pesan <span class="text-danger">*</span></label>
                                        <textarea id="input_textarea" class="form-control @error('message') is-invalid @enderror" 
                                                  name="message" placeholder="How can we help you?" required>{{ old('message') }}</textarea>
                                        @error('message')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <button type="submit" class="thm-btn">Kirim Pesan <i class="fa fa-paper-plane ms-2" aria-hidden="true"></i>
                                        {{-- <span>
                                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13.0364 2.63798..." fill="#170006"></path>
                                            </svg>
                                        </span> --}}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>                    
                </div>
                <div class="col-lg-5 mt-30">
                    <div class="gmap_canvas ps-lg-5">
                        {{-- <iframe
                            src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
                        --}}
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.009067136755!2d104.00529217578651!3d1.1540127988349493!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d9898a730e57cf%3A0xaf6a969e0ec5fa2e!2sSekolah%20Dasar%20Kartini%20II!5e0!3m2!1sid!2sid!4v1736612123656!5m2!1sid!2sid"
                            style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <div class="contact_info_box_inner pt-110">
                <h2 class="text-center">Beri tahu kami bagaimana kami dapat membantu</h2>
            </div>
            <div class="contact_info_box row mt-none-30" style="justify-content: center;">
                <div class="col-lg-3 col-md-6 col-sm-6 mt-30">
                    <div class="contact_iconbox">
                        <div class="iconbox_icon">
                            <img src="{{ asset('frontends/assets/img/icon/call-calling.svg') }}" alt="Calling SVG Icon">
                        </div>
                        <div class="iconbox_content">
                            <h2 class="iconbox_title">Telepon Kami</h2>
                            <p>
                                Sen-Jum Dari 08:00 - 17:00 WIB
                            </p>
                            <h3>(0778) 458432</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mt-30">
                    <div class="contact_iconbox">
                        <div class="iconbox_icon">
                            <img src="{{ asset('frontends/assets/img/icon/sms-edit.svg') }}" alt="SMS SVG Icon">
                        </div>
                        <div class="iconbox_content">
                            <h2 class="iconbox_title">Email Us</h2>
                            <p>
                                Hubungilah dengan tim kami yang ramah.
                            </p>
                            <h3>sdkartini@gmail.com</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mt-30">
                    <div class="contact_iconbox">
                        <div class="iconbox_icon">
                            <img src="{{ asset('frontends/assets/img/icon/location-add.svg') }}"
                                alt="Location SVG Icon">
                        </div>
                        <div class="iconbox_content">
                            <h2 class="iconbox_title">Lokasi Kami</h2>
                            <p>
                                Kunjungi Sekolah Kami
                            </p>
                            <h3>Jalan Raja Ali Haji, Komplek Sumber Agung, Sei Jodoh</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact end -->

</main>
@endsection