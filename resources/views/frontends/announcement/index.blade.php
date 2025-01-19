@extends('frontends.layouts.index')
@section('content')
<main>

    <!-- breadcrumb start -->
    <section class="breadcrumb bg_img ul_li" data-background="{{ asset('frontends/blog_banner.jpg') }}">
        <div class="container">
            <div class="breadcrumb__content text-center">
                <h2 class="breadcrumb__title">Pengumuman</h2>
                <p class="breadcrumb__desc">Pengumuman SD Kartini II</p>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->

    <!-- event start -->
    <section class="event pt-120 pb-120" data-bg-color="#f1f1e9">
        <div class="container">
            <div class="row mt-none-30">
                @foreach ($allAnnouncement as $item)
                <div class="col-lg-6 mt-30">
                    <div class="xb-event-item">
                        <div class="xb-item--img">
                            <a href="{{ url('pengumuman'. '/'. $item->slug) }}"><img src="{{ url('storage/'. $item->image) }}"
                                    alt="{{ $item->image }}"></a>
                        </div>
                        <div class="ul_li xb-item--wrap">
                            <div class="xb-item--content">
                                <h2 class="xb-item--title border-effect"><a
                                        href="{{ url('pengumuman/'.$item->slug) }}">{{ Str::limit($item->title, 53, '...') }}</a></h2>
                                <div class="xb-event-btn pt-15">
                                    <a class="thm-btn" href="{{ url('pengumuman/'.$item->slug) }}">Selengkapnya
                                        <span class="icon"><svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10.4795 21C9.10959 21 7.81507 20.7539 6.59589 20.2617C5.37671 19.7695 4.30137 19.0962 3.36986 18.2417C2.43836 17.3872 1.67808 16.3857 1.08904 15.2373C0.486301 14.0752 0.123288 12.8311 0 11.5049V11.4639H8.56849V14.3145C8.56849 14.5742 8.66096 14.7998 8.84589 14.9912C9.03082 15.1826 9.25342 15.2783 9.5137 15.2783C9.65068 15.2783 9.7774 15.251 9.89384 15.1963C10.0103 15.1416 10.1096 15.0732 10.1918 14.9912L14.0137 11.1768C14.0959 11.0947 14.1644 10.9956 14.2192 10.8794C14.274 10.7632 14.3014 10.6367 14.3014 10.5C14.3014 10.3633 14.274 10.2368 14.2192 10.1206C14.1644 10.0044 14.0959 9.90527 14.0137 9.82324L10.1918 6.00879C10.1096 5.92676 10.0103 5.8584 9.89384 5.80371C9.7774 5.74902 9.65068 5.72168 9.5137 5.72168C9.25342 5.72168 9.0274 5.81738 8.83562 6.00879C8.64384 6.2002 8.54794 6.42578 8.54794 6.68555V9.53613H0C0.123288 8.19629 0.486301 6.94531 1.08904 5.7832C1.67808 4.62109 2.44178 3.61279 3.38014 2.7583C4.31849 1.90381 5.39041 1.23047 6.59589 0.738281C7.81507 0.246094 9.10959 0 10.4795 0C11.9315 0 13.2945 0.273439 14.5685 0.820312C15.8425 1.38086 16.9555 2.13623 17.9075 3.08643C18.8596 4.03662 19.6096 5.14746 20.1575 6.41895C20.7192 7.69043 21 9.05078 21 10.5C21 11.9492 20.7192 13.3096 20.1575 14.5811C19.6096 15.8662 18.8596 16.9839 17.9075 17.9341C16.9555 18.8843 15.8425 19.6328 14.5685 20.1797C13.2945 20.7266 11.9315 21 10.4795 21Z"
                                                    fill="#170006"></path>
                                            </svg></span>
                                    </a>
                                </div>
                            </div>
                            <div class="xb-item--date-inner text-center">
                                <div class="xb-item--icon">
                                    <img src="{{ asset('frontends/assets/img/icon/note-book.svg') }}" alt="">
                                </div>
                                <span class="xb-item--date">
                                    {{ \Carbon\Carbon::parse($item->published_at)->format('d, M') }} <br>
                                    {{ \Carbon\Carbon::parse($item->published_at)->format('Y') }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        {{ $allAnnouncement->links('vendor.pagination.custom') }}
    </section>
    <!-- event end -->

</main>
@endsection