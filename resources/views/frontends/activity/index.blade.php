@extends('frontends.layouts.index')
@section('content')
<main>

    <!-- breadcrumb start -->
    <section class="breadcrumb bg_img ul_li" data-background="{{ asset('frontends/front_school.jpg') }}">
        <div class="container">
            <div class="breadcrumb__content text-center">
                <h2 class="breadcrumb__title">Berita Kegiatan</h2>
                <p class="breadcrumb__desc">Kegiatan SD Kartini II</p>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->

    <!-- blog start -->
    <section class="blog_section pt-120 pb-120" data-bg-color="#f1f1e9">
        <div class="container">
            <div class="blog_onecol_carousel overflow-hidden">
                <div class="swiper-wrapper">
                    @foreach ($activity_banner as $item)
                    <div class="swiper-slide">
                        <div class="blog_post_block content_over_layout">
                            <div class="blog_post_image">
                                <a class="image_wrap" href="{{ url('kegiatan'). '/' . $item->slug }}">
                                    <img src="{{ url('storage/' . $item->image) }}" alt="Blog Post Image 1">
                                </a>
                            </div>
                            <div class="blog_post_content">
                                <div class="post_meta_wrap">
                                    <a class="post_category" href="#!">#{{ $item->category->name }}</a>
                                    <ul class="post_meta unordered_list">
                                        <li>
                                            <a href="#!">
                                                <i class="far fa-clock"></i> {{
                                                \Carbon\Carbon::parse($item->created_at)->diffForHumans() }}
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <h3 class="blog_post_title border-effect">
                                    <a href="{{ url('kegiatan'). '/' . $item->slug }}">
                                        {{ Str::limit($item->title, 80, '...') }}
                                    </a>
                                </h3>
                                {{-- <p class="mb-0">
                                    This funding will be used to develop cutting-edge research facilities, expand course
                                    offerings.
                                </p> --}}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <button class="b1cc-swiper-button-prev" type="button"
                    style="background-image: url('{{ asset('frontends/assets/img/shape/shape_arrow_right.svg') }}');">
                    <i class="fas fa-angle-double-left"></i>
                </button>
                <button class="b1cc-swiper-button-next" type="button"
                    style="background-image: url('{{ asset('frontends/assets/img/shape/shape_arrow_left.svg') }}');">
                    <i class="fas fa-angle-double-right"></i>
                </button>
                <div class="b1cc-swiper-pagination p-0"></div>
            </div>
            <div class="section_space pb-0">
                <div class="row mt-none-30">
                    <div class="col-lg-8 mt-30">
                        @foreach ($posts as $item)
                        <div class="blog_post_block image_left_layout">
                            <div class="blog_post_image">
                                <a class="image_wrap" href="{{ url('kegiatan'). '/' . $item->slug }}">
                                    <img src="{{ url('storage'). '/'  . $item->image}}"
                                        alt="{{ $item->image }}">
                                </a>
                            </div>
                            <div class="blog_post_content">
                                <div class="post_meta_wrap">
                                    <ul class="category_btns_group unordered_list">
                                        <li><a href="#!">#{{ $item->category->name }}</a></li>
                                    </ul>
                                    <ul class="post_meta unordered_list">
                                        <li>
                                            <a href="#!">
                                                <i class="far fa-clock"></i> {{
                                                \Carbon\Carbon::parse($item->created_at)->diffForHumans() }}
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <h3 class="blog_post_title border-effect">
                                    <a href="{{ url('kegiatan').'/' . $item->slug }}">
                                        {{ Str::limit($item->title, 65, '...') }}
                                    </a>
                                </h3>
                                {{-- <p>
                                    Embark on a journey into the dynamic of IT solutions.
                                </p> --}}
                                <ul class="post_meta_bottom ul_li">
                                    <li><img src="{{ asset('frontends/assets/img/blog/avatar1.png') }}" alt="">{{ $item->user->name }}</li>
                                    <li><i class="far fa-comment"></i>{{ $item->comments->count() }} Komentar</li>
                                    {{-- <li><i class="far fa-eye"></i>1454 Views</li> --}}
                                </ul>
                            </div>
                        </div>
                        @endforeach
                        {{ $posts->links('vendor.pagination.custom') }}
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
                            {{-- <div class="post_list_block">
                                <h3 class="sidebar_widget_title">Kegiatan Lainnya</h3>
                                <ul class="unordered_list_block">
                                    <li>
                                        <div class="post_image">
                                            <a href="blog-single.html"><img
                                                    src="{{ asset('frontends/assets/img/blog/blog_09.jpg') }}"
                                                    alt=""></a>
                                        </div>
                                        <div class="post_holder">
                                            <h3 class="post_title border-effect-2">
                                                <a href="blog-single.html">
                                                    EduFord University Opens New High-Tech Library..
                                                </a>
                                            </h3>
                                            <a class="post_date" href="#!">
                                                <i class="far fa-clock"></i> 11/12/2024
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="post_image">
                                            <a href="blog-single.html"><img
                                                    src="{{ asset('frontends/assets/img/blog/blog_10.jpg') }}"
                                                    alt=""></a>
                                        </div>
                                        <div class="post_holder">
                                            <h3 class="post_title border-effect-2">
                                                <a href="blog-single.html">
                                                    University’s STEM Ranks Top 10 Nationwide..
                                                </a>
                                            </h3>
                                            <a class="post_date" href="#!">
                                                <i class="far fa-clock"></i> 11/12/2024
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="post_image">
                                            <a href="blog-single.html"><img
                                                    src="{{ asset('frontends/assets/img/blog/blog_11.jpgs') }}"
                                                    alt=""></a>
                                        </div>
                                        <div class="post_holder">
                                            <h3 class="post_title border-effect-2">
                                                <a href="blog-single.html">
                                                    EduFord University Host Global Sustainability..
                                                </a>
                                            </h3>
                                            <a class="post_date" href="#!">
                                                <i class="far fa-clock"></i> 11/12/2024
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div> --}}
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
    <!-- blog end -->

</main>
@endsection