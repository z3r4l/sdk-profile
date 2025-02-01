@extends('frontends.layouts.index')
@section('content')
<main>

    <!-- breadcrumb start -->
    <section class="breadcrumb bg_img ul_li" data-background="{{ asset('frontends/front_school.jpg') }}">
        <div class="container">
            <div class="breadcrumb__content text-center">
                <h2 class="breadcrumb__title">Prestasi Siswa-Siswi</h2>
                <p class="breadcrumb__desc">Prestasi Siswa-Siswi SD Kartini II</p>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->

    <!-- event single start -->
    <section class="event-single pt-120 pb-120">
        <div class="container">
            <div class="row flex-row-reverse mt-none-30">
                <div class="col-lg-4 mt-30">
                    <aside class="sidebar ps-xl-5">
                        <div class="post_list_block">
                            <h3 class="sidebar_widget_title">Prestasi Siswa-Siswi Lainnya</h3>
                            <ul class="unordered_list_block">
                                @foreach ($allAchievement as $item)
                                <li>
                                    <div class="post_image">
                                        <a href="{{ url('prestasi'. '/'. $item->slug) }}"><img
                                                src="{{ url('storage/'. $item->image) }}" alt="{{ $item->image }}"></a>
                                    </div>
                                    <div class="post_holder">
                                        <h3 class="post_title border-effect-2">
                                            <a href="{{ url('prestasi'. '/'. $item->slug) }}">
                                                {{ Str::limit($item->title, 60, '...') }}
                                            </a>
                                        </h3>
                                        <a class="post_date" href="#!">
                                            <i class="far fa-clock"></i> {{ \Carbon\Carbon::parse($item->published_at)->diffForHumans() }}
                                        </a>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </aside>
                </div>
                <div class="col-lg-8 mt-30">
                    <div class="event-single__content">
                        <h3>{{ $achievement->title }}</h3>
                        <hr class="mt-2 mb-4">
                        {!! $achievement->content !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- event single end -->

</main>
@endsection