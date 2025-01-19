@extends('frontends.layouts.index')
@section('content')
<main>

    <!-- breadcrumb start -->
    <section class="breadcrumb bg_img ul_li" data-background="{{ asset('frontends/blog_banner.jpg') }}">
        <div class="container">
            <div class="breadcrumb__content text-center">
                <h2 class="breadcrumb__title">Detail Kegiatan</h2>
                <p class="breadcrumb__desc">Detail Kegiatan SD Kartini II</p>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->

    <!-- blog single start -->
    <section class="blog_details_section section_space" data-bg-color="#f1f1e9">
        <div class="container">
            <div class="">
                <div class="row mt-none-30">
                    <div class="col-lg-8 mt-30">
                        {{-- <div class="blog_details_audio">
                            <button class="audio_play_btn" type="button">
                                <i class="fas fa-play"></i>
                                <span>6:24</span>
                                <span>Listen to this article!</span>
                            </button>
                        </div> --}}
                        <h3 class="details_item_info_title mb-5">
                            {{ $post->title }}
                        </h3>
                        <div class="row mt-none-30 mb-4">
                            <div class="details_item_image-blog m-0">
                                <img src="{{ url('storage') . '/' . $post->image }}" alt="">
                            </div>
                        </div>
                        {!! $post->content !!}
                        <hr class="mt-0 mb-0">

                        <hr class="m-0">

                        <div class="comment_area">
                            <h3 class="details_item_info_title mb-5">Komentar({{ $post->comments->count() }})</h3>
                            <ul class="comments_list unordered_list_block">
                                @foreach ($post->comments as $item)
                                <li>
                                    <div class="comment_item">
                                        <div class="comment_author_thumbnail">
                                            <img src="{{ asset('frontends/default.png') }}" alt="">
                                        </div>
                                        <div class="comment_author_content">
                                            <h4 class="comment_author_name">John Smith</h4>
                                            <div class="comment_time">{{
                                                \Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</div>
                                            <p class="mb-0">
                                                {{ $item->message }}
                                            </p>
                                            {{-- <a class="comment_reply_btn" href="#!">Reply</a> --}}
                                        </div>
                                    </div>
                                    <hr class="mt-0 mb-0">
                                </li>
                                @endforeach

                            </ul>
                        </div>

                        <div class="comment_area comment_form mb-0">
                            <h3 class="details_item_info_title mb-1">Tinggalkan Komentar</h3>
                            <p class="mb-5">
                                Alamat email Anda tidak akan dipublikasikan. Kolom yang harus diisi ditandai <sup
                                    class="text-primary">*</sup>
                            </p>
                            <form action="{{ route('comment.send', $post->slug) }}" method="POST">
                                <div class="row">
                                    @csrf
                                    {{-- Pesan sukses jika berhasil mengirim komentar --}}
                                    @if(session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                    @endif

                                    {{-- Input Nama Lengkap --}}
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="input_title" for="input_name">Nama Lengkap <sup
                                                    class="text-primary">*</sup></label>
                                            <input id="input_name"
                                                class="form-control @error('nama') is-invalid @enderror" type="text"
                                                name="nama" placeholder="Goladra Gomaz" value="{{ old('nama') }}"
                                                required>
                                            @error('nama')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Input Email --}}
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="input_title" for="input_email">Email <sup
                                                    class="text-primary">*</sup></label>
                                            <input id="input_email"
                                                class="form-control @error('email') is-invalid @enderror" type="email"
                                                name="email" placeholder="edubost@example.com"
                                                value="{{ old('email') }}" required>
                                            @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Input No HP/WA --}}
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="input_title" for="input_hp">No HP/WA <sup
                                                    class="text-primary">*</sup></label>
                                            <input id="input_hp"
                                                class="form-control @error('no_hp') is-invalid @enderror" type="text"
                                                name="no_hp" placeholder="+628123456789" value="{{ old('no_hp') }}"
                                                required>
                                            @error('no_hp')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Input Pesan --}}
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="input_title" for="input_message">Komen / Pertanyaan <sup
                                                    class="text-primary">*</sup></label>
                                            <textarea id="input_message"
                                                class="form-control @error('message') is-invalid @enderror"
                                                name="message" placeholder="Bagaimana kami dapat membantu Anda?"
                                                required>{{ old('message') }}</textarea>
                                            @error('message')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        {{-- Tombol Submit --}}
                                        <button type="submit" class="thm-btn">
                                            Kirim Komentar
                                            <span>
                                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M13.0364 2.63798C11.6702 1.79536 10.0512 1.33203 8.37891 1.33203C3.82654 1.33203 0 4.72368 0 9.06641C0 10.589 0.473 12.0486 1.37148 13.3092L0.116359 17.2497C-0.0162422 17.6659 0.295539 18.0898 0.730598 18.0898C0.83007 18.0898 0.930188 18.0669 1.02257 18.0198L4.83957 16.0791C4.99413 16.1456 5.15062 16.2076 5.3087 16.265C4.42496 14.8857 3.95312 13.3023 3.95312 11.6445C3.95312 6.70755 8.10726 2.91208 13.0364 2.63798Z"
                                                        fill="#170006" />
                                                    <path
                                                        d="M20.6285 15.8873C21.527 14.6267 22 13.1671 22 11.6445C22 7.30022 18.1718 3.91016 13.6211 3.91016C9.06873 3.91016 5.24219 7.30181 5.24219 11.6445C5.24219 15.9888 9.07036 19.3789 13.6211 19.3789C14.8421 19.3789 16.0588 19.1301 17.1602 18.6571L20.9774 20.598C21.2091 20.7157 21.4889 20.6829 21.6869 20.5146C21.885 20.3463 21.9626 20.0755 21.8837 19.8278L20.6285 15.8873ZM11 12.2891C10.644 12.2891 10.3555 12.0005 10.3555 11.6445C10.3555 11.2886 10.644 11 11 11C11.356 11 11.6445 11.2886 11.6445 11.6445C11.6445 12.0005 11.356 12.2891 11 12.2891ZM13.5781 12.2891C13.2222 12.2891 12.9336 12.0005 12.9336 11.6445C12.9336 11.2886 13.2222 11 13.5781 11C13.9341 11 14.2227 11.2886 14.2227 11.6445C14.2227 12.0005 13.9341 12.2891 13.5781 12.2891ZM16.1562 12.2891C15.8003 12.2891 15.5117 12.0005 15.5117 11.6445C15.5117 11.2886 15.8003 11 16.1562 11C16.5122 11 16.8008 11.2886 16.8008 11.6445C16.8008 12.0005 16.5122 12.2891 16.1562 12.2891Z"
                                                        fill="#170006" />
                                                </svg>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-30">
                        <aside class="sidebar ps-xl-5">
                            {{-- <div class="search_form">
                                <h3 class="sidebar_widget_title">Search</h3>
                                <div class="form-group">
                                    <input class="form-control" type="search" name="search"
                                        placeholder="Search your keyword">
                                    <button type="submit">
                                        <img src="{{ asset('frontends/assets/img/icon/icon_search.svg') }}"
                                            alt="Search Icon">
                                    </button>
                                </div>
                            </div> --}}
                            <div class="post_list_block">
                                <h3 class="sidebar_widget_title">Kegiatan Lainnya</h3>
                                <ul class="unordered_list_block">
                                    @foreach ($allPost as $item)
                                    <li>
                                        <div class="post_image">
                                            <a href="{{ url('kegiatan'). '/' . $item->slug }}"><img
                                                    src="{{ url('storage/'). '/' . $item->image }}" alt=""></a>
                                        </div>
                                        <div class="post_holder">
                                            <h3 class="post_title border-effect-2">
                                                <a href="{{ url('kegiatan'). '/' . $item->slug }}">
                                                    {{ Str::limit($item->title, 50, '...') }}
                                                </a>
                                            </h3>
                                            <a class="post_date" href="#!">
                                                <i class="far fa-clock"></i> {{
                                                \Carbon\Carbon::parse($item->created_at)->diffForHumans() }}
                                            </a>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="post_category_wrap">
                                <h3 class="sidebar_widget_title">Kategori</h3>
                                <ul class="post_category_list unordered_list_block">
                                    @foreach ($category as $item)
                                    <li>
                                        <a href="#!">
                                            <i class="far fa-arrow-right"></i>
                                            <span>{{ $item->name }}</span>
                                            <span>({{ $item->posts_count }})</span>
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            {{-- <div class="popular_tags">
                                <h3 class="sidebar_widget_title">Popular Tags</h3>
                                <ul class="tags_list unordered_list">
                                    <li><a href="#!">School</a></li>
                                    <li><a href="#!">College</a></li>
                                    <li><a href="#!">university</a></li>
                                    <li><a href="#!">Scholarships</a></li>
                                    <li><a href="#!">GlobalEducation</a></li>
                                    <li><a href="#!">HigherEducation</a></li>
                                    <li><a href="#!">OnlineLearning</a></li>
                                    <li><a href="#!">Learning</a></li>
                                    <li><a href="#!">Faculty</a></li>
                                    <li><a href="#!">Global</a></li>
                                </ul>
                            </div> --}}
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog single end -->

</main>
@endsection