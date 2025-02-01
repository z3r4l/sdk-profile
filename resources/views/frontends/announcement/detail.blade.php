@extends('frontends.layouts.index')
@section('content')
<main>

    <!-- breadcrumb start -->
    <section class="breadcrumb bg_img ul_li" data-background="{{ asset('frontends/front_school.jpg') }}">
        <div class="container">
            <div class="breadcrumb__content text-center">
                <h2 class="breadcrumb__title">Detail Pengumuman</h2>
                <p class="breadcrumb__desc">Detail Pengumuman SD Kartini II</p>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->

    <!-- event single start -->
    <section class="event-single pt-120 pb-120">
        <div class="container">
            <div class="row flex-row-reverse mt-none-30">
                <div class="col-lg-4 mt-30">
                    {{-- <div class="event-single__sidebar">
                        <div class="countdown ul_li_center" data-countdown="2026/10/28"></div>
                        <h3>Event Includes:</h3>
                        <ul class="course-sidebar__list list-unstyled">
                            <li>
                                <div><span><img src="{{ asset('frontends/assets/img/icon/ci_01.svg') }}"
                                            alt=""></span>Price:<span class="price">$120</span></div>
                            </li>
                            <li><span><img src="{{ asset('frontends/assets/img/icon/ci_05.svg') }}" alt="">Total
                                    Slot:</span><span>500</span></li>
                            <li><span><img src="{{ asset('frontends/assets/img/icon/ci_08.svg') }}" alt="">Booked
                                    Slot:</span><span>09</span></li>
                        </ul>
                        <div class="sidebar-btn mt-35">
                            <a class="thm-btn" href="#!">Buy ticket
                                <span><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M22 4.85005V16.7401C22 17.7101 21.21 18.6001 20.24 18.7201L19.93 18.7601C18.29 18.9801 15.98 19.6601 14.12 20.4401C13.47 20.7101 12.75 20.2201 12.75 19.5101V5.60005C12.75 5.23005 12.96 4.89005 13.29 4.71005C15.12 3.72005 17.89 2.84005 19.77 2.68005H19.83C21.03 2.68005 22 3.65005 22 4.85005Z"
                                            fill="#170006"></path>
                                        <path
                                            d="M10.7102 4.71005C8.88023 3.72005 6.11023 2.84005 4.23023 2.68005H4.16023C2.96023 2.68005 1.99023 3.65005 1.99023 4.85005V16.7401C1.99023 17.7101 2.78023 18.6001 3.75023 18.7201L4.06023 18.7601C5.70023 18.9801 8.01023 19.6601 9.87023 20.4401C10.5202 20.7101 11.2402 20.2201 11.2402 19.5101V5.60005C11.2402 5.22005 11.0402 4.89005 10.7102 4.71005ZM5.00023 7.74005H7.25023C7.66023 7.74005 8.00023 8.08005 8.00023 8.49005C8.00023 8.91005 7.66023 9.24005 7.25023 9.24005H5.00023C4.59023 9.24005 4.25023 8.91005 4.25023 8.49005C4.25023 8.08005 4.59023 7.74005 5.00023 7.74005ZM8.00023 12.2401H5.00023C4.59023 12.2401 4.25023 11.9101 4.25023 11.4901C4.25023 11.0801 4.59023 10.7401 5.00023 10.7401H8.00023C8.41023 10.7401 8.75023 11.0801 8.75023 11.4901C8.75023 11.9101 8.41023 12.2401 8.00023 12.2401Z"
                                            fill="#170006"></path>
                                    </svg></span>
                            </a>
                        </div>
                        <p class="event-single__cta">You must <a href="#">login</a> before register event.</p>
                    </div> --}}
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
                            <h3 class="sidebar_widget_title">Pengumuman Lainnya</h3>
                            <ul class="unordered_list_block">
                                @foreach ($allAnnouncement as $item)
                                <li>
                                    <div class="post_image">
                                        <a href="{{ url('pengumuman/'.$item->slug) }}"><img
                                                src="{{ url('storage/'. $item->image) }}" alt="{{ $item->image }}"></a>
                                    </div>
                                    <div class="post_holder">
                                        <h3 class="post_title border-effect-2">
                                            <a href="{{ url('pengumuman/'.$item->slug) }}">
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
                        <h3>{{ $announcement->title }}</h3>
                        <hr class="mt-2 mb-4">
                        {!! $announcement->content !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- event single end -->

</main>
@endsection