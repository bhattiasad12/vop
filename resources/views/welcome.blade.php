@extends('layouts.app.main')

@section('content')
    <div class="app-main flex-column flex-row-fluid " id="kt_app_main" bis_skin_checked="1">
        <!--begin::Content wrapper-->
        <div class="d-flex flex-column flex-column-fluid" bis_skin_checked="1">

            <!--begin::Toolbar-->
            <div id="kt_app_toolbar" class="app-toolbar  py-3 py-lg-6 " bis_skin_checked="1">

                <!--begin::Toolbar container-->
                {{-- <div id="kt_app_toolbar_container" class="app-container  container-xxl d-flex flex-stack "
                    bis_skin_checked="1">
                    <!--begin::Page title-->
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 " bis_skin_checked="1">
                        <!--begin::Title-->
                        <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">
                            Blog Home
                        </h1>
                        <!--end::Title-->


                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">
                                <a href="/metronic8/demo1/index.html" class="text-muted text-hover-primary">
                                    Home </a>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-500 w-5px h-2px"></span>
                            </li>
                            <!--end::Item-->

                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">
                                Blog </li>
                            <!--end::Item-->

                        </ul>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Page title-->
                    <!--begin::Actions-->
                    <div class="d-flex align-items-center gap-2 gap-lg-3" bis_skin_checked="1">

                    </div>
                    <!--end::Actions-->
                </div> --}}
                <!--end::Toolbar container-->
            </div>
            <!--end::Toolbar-->

            <!--begin::Content-->
            <div id="kt_app_content" class="app-content  flex-column-fluid " bis_skin_checked="1">
                <!--begin::Content container-->
                <div id="kt_app_content_container" class="app-container  container-xxl " bis_skin_checked="1">
                    <!--begin::Home card-->
                    <div class="card" bis_skin_checked="1">
                        <!--begin::Body-->
                        <div class="card-body p-lg-20" bis_skin_checked="1">
                            <!--begin::Section-->
                            <div class="mb-17" bis_skin_checked="1">
                                <!--begin::Title-->
                                <h3 class="text-gray-900 mb-7">
                                    {{ __('messages.welcome_heading_1', [], app()->getLocale()) }}
                                </h3>
                                <!--end::Title-->

                                <!--begin::Separator-->
                                <div class="separator separator-dashed mb-9" bis_skin_checked="1"></div>
                                <!--end::Separator-->

                                <!--begin::Row-->
                                <div class="row" bis_skin_checked="1">
                                    <!--begin::Col-->
                                    <div class="col-md-6" bis_skin_checked="1">
                                        <!--begin::Feature post-->
                                        <div class="h-100 d-flex flex-column justify-content-between pe-lg-6 mb-lg-0 mb-10"
                                            bis_skin_checked="1">
                                            <!--begin::Video-->
                                            <div class="mb-3" bis_skin_checked="1">
                                                <iframe class="embed-responsive-item card-rounded h-275px w-100"
                                                    src="https://www.youtube.com/embed/TWdDZYNqlg4"
                                                    allowfullscreen=""></iframe>
                                            </div>
                                            <!--end::Video-->

                                            <!--begin::Body-->
                                            <div class="mb-5" bis_skin_checked="1">
                                                <!--begin::Title-->
                                                <a href="/post"
                                                    class="fs-2 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base">
                                                    Admin Panel - How To Get Started Tutorial. <br>
                                                    Create easy customizable applications
                                                </a>
                                                <!--end::Title-->

                                                <!--begin::Text-->
                                                <div class="fw-semibold fs-5 text-gray-600 text-gray-900 mt-4"
                                                    bis_skin_checked="1">
                                                    We’ve been focused on making the from v4 to v5 but we
                                                    have
                                                    also not been afraid to step away been focused on from
                                                    v4 to
                                                    v5 speaker approachable making focused a but from a step
                                                    away afraid to step
                                                    away been focused
                                                    Writing a blog post is a little like driving; you can
                                                    study the
                                                    highway code (or read articles telling you how to write
                                                    a blog
                                                    post) for months, but nothing can prepare you for the
                                                    real
                                                    thing like getting behind the wheel
                                                </div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Body-->

                                            <!--begin::Footer-->
                                            <div class="d-flex flex-stack flex-wrap" bis_skin_checked="1">
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center pe-2" bis_skin_checked="1">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle me-3" bis_skin_checked="1">
                                                        <img alt=""
                                                            src="{{ asset('theme/assets/media/avatars/300-9.jpg') }}">
                                                    </div>
                                                    <!--end::Avatar-->

                                                    <!--begin::Text-->
                                                    <div class="fs-5 fw-bold" bis_skin_checked="1">
                                                        <a href="/metronic8/demo1/pages/user-profile/overview.html"
                                                            class="text-gray-700 text-hover-primary">David
                                                            Morgan</a>

                                                        <span class="text-muted">on Apr 27 2021</span>
                                                    </div>
                                                    <!--end::Text-->
                                                </div>
                                                <!--end::Item-->

                                                <!--begin::Label-->
                                                <span class="badge badge-light-primary fw-bold my-2">TUTORIALS</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Footer-->
                                        </div>
                                        <!--end::Feature post-->



                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-md-6 justify-content-between d-flex flex-column" bis_skin_checked="1">
                                        <!--begin::Post-->
                                        <div class="ps-lg-6 mb-16 mt-md-0 mt-17" bis_skin_checked="1">
                                            <!--begin::Body-->
                                            <div class="mb-6" bis_skin_checked="1">
                                                <!--begin::Title-->
                                                <a href="/post"
                                                    class="fw-bold text-gray-900 mb-4 fs-2 lh-base text-hover-primary">
                                                    Bootstrap Admin Theme - How To Get Started Tutorial.
                                                    Create customizable applications </a>
                                                <!--end::Title-->

                                                <!--begin::Text-->
                                                <div class="fw-semibold fs-5 mt-4 text-gray-600 text-gray-900"
                                                    bis_skin_checked="1">

                                                    We’ve been focused on making the from v4 to v5 a
                                                    but we’ve also not been afraid to step away been
                                                    focused on from v4 to v5 speaker approachable
                                                    making focused
                                                </div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Body-->

                                            <!--begin::Footer-->
                                            <div class="d-flex flex-stack flex-wrap" bis_skin_checked="1">
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center pe-2" bis_skin_checked="1">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle me-3" bis_skin_checked="1">
                                                        <img src="{{ asset('theme/assets/media/avatars/300-20.jpg') }}"
                                                            class="" alt="">
                                                    </div>
                                                    <!--end::Avatar-->

                                                    <!--begin::Text-->
                                                    <div class="fs-5 fw-bold" bis_skin_checked="1">
                                                        <a href="/metronic8/demo1/pages/user-profile/overview.html"
                                                            class="text-gray-700 text-hover-primary">Jane
                                                            Miller</a>

                                                        <span class="text-muted">on Apr 27 2021</span>
                                                    </div>
                                                    <!--end::Text-->
                                                </div>
                                                <!--end::Item-->

                                                <!--begin::Label-->
                                                <span class="badge badge-light-info fw-bold my-2">BLOG</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Footer-->
                                        </div>
                                        <!--end::Post-->


                                        <!--begin::Post-->
                                        <div class="ps-lg-6 mb-16" bis_skin_checked="1">
                                            <!--begin::Body-->
                                            <div class="mb-6" bis_skin_checked="1">
                                                <!--begin::Title-->
                                                <a href="/post"
                                                    class="fw-bold text-gray-900 mb-4 fs-2 lh-base text-hover-primary">
                                                    Angular Admin Theme - How To Get Started Tutorial. </a>
                                                <!--end::Title-->

                                                <!--begin::Text-->
                                                <div class="fw-semibold fs-5 mt-4 text-gray-600 text-gray-900"
                                                    bis_skin_checked="1">

                                                    We’ve been focused on making the from v4 to v5 a
                                                    but we’ve also not been afraid to step away
                                                </div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Body-->

                                            <!--begin::Footer-->
                                            <div class="d-flex flex-stack flex-wrap" bis_skin_checked="1">
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center pe-2" bis_skin_checked="1">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle me-3" bis_skin_checked="1">
                                                        <img src="{{ asset('theme/assets/media/avatars/300-9.jpg') }}"
                                                            class="" alt="">
                                                    </div>
                                                    <!--end::Avatar-->

                                                    <!--begin::Text-->
                                                    <div class="fs-5 fw-bold" bis_skin_checked="1">
                                                        <a href="/metronic8/demo1/pages/user-profile/overview.html"
                                                            class="text-gray-700 text-hover-primary">Cris
                                                            Morgan</a>

                                                        <span class="text-muted">on Mar 14 2021</span>
                                                    </div>
                                                    <!--end::Text-->
                                                </div>
                                                <!--end::Item-->

                                                <!--begin::Label-->
                                                <span class="badge badge-light-primary fw-bold my-2">TUTORIALS</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Footer-->
                                        </div>
                                        <!--end::Post-->


                                        <!--begin::Post-->
                                        <div class="ps-lg-6 " bis_skin_checked="1">
                                            <!--begin::Body-->
                                            <div class="mb-6" bis_skin_checked="1">
                                                <!--begin::Title-->
                                                <a href="/post"
                                                    class="fw-bold text-gray-900 mb-4 fs-2 lh-base text-hover-primary">
                                                    React Admin Theme - How To Get Started Tutorial. Create
                                                    best applications </a>
                                                <!--end::Title-->

                                                <!--begin::Text-->
                                                <div class="fw-semibold fs-5 mt-4 text-gray-600 text-gray-900"
                                                    bis_skin_checked="1">

                                                    We’ve been focused on making the from v4 to v5
                                                    but we’ve also not been afraid to step away been focused
                                                </div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Body-->

                                            <!--begin::Footer-->
                                            <div class="d-flex flex-stack flex-wrap" bis_skin_checked="1">
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center pe-2" bis_skin_checked="1">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle me-3"
                                                        bis_skin_checked="1">
                                                        <img src="{{ asset('theme/assets/media/avatars/300-19.jpg') }}"
                                                            class="" alt="">
                                                    </div>
                                                    <!--end::Avatar-->

                                                    <!--begin::Text-->
                                                    <div class="fs-5 fw-bold" bis_skin_checked="1">
                                                        <a href="/metronic8/demo1/pages/user-profile/overview.html"
                                                            class="text-gray-700 text-hover-primary">Cris
                                                            Morgan</a>

                                                        <span class="text-muted">on Mar 14 2021</span>
                                                    </div>
                                                    <!--end::Text-->
                                                </div>
                                                <!--end::Item-->

                                                <!--begin::Label-->
                                                <span class="badge badge-light-warning fw-bold my-2">NEWS</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Footer-->
                                        </div>
                                        <!--end::Post-->


                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--begin::Row-->
                            </div>
                            <!--end::Section-->







                            <!--begin::Section-->
                            <div class="mb-17" bis_skin_checked="1">
                                <!--begin::Content-->
                                <div class="d-flex flex-stack mb-5" bis_skin_checked="1">
                                    <!--begin::Title-->
                                    <h3 class="text-gray-900">Video Tutorials</h3>
                                    <!--end::Title-->

                                    <!--begin::Link-->
                                    <a href="/post" class="fs-6 fw-semibold link-primary">
                                        View All Videos
                                    </a>
                                    <!--end::Link-->
                                </div>
                                <!--end::Content-->

                                <!--begin::Separator-->
                                <div class="separator separator-dashed mb-9" bis_skin_checked="1"></div>
                                <!--end::Separator-->

                                <!--begin::Row-->
                                <div class="row g-10" bis_skin_checked="1">
                                    <!--begin::Col-->
                                    <div class="col-md-4" bis_skin_checked="1">
                                        <!--begin::Feature post-->
                                        <div class="card-xl-stretch me-md-6" bis_skin_checked="1">
                                            <!--begin::Image-->
                                            <a class="d-block bgi-no-repeat bgi-size-cover bgi-position-center card-rounded position-relative min-h-175px mb-5"
                                                style="background-image:url('{{ asset('theme/assets/media/stock/600x400/img-73.jpg') }}')"
                                                data-fslightbox="lightbox-video-tutorials"
                                                href="https://www.youtube.com/embed/btornGtLwIo"
                                                bis_size="{&quot;x&quot;:195,&quot;y&quot;:1034,&quot;w&quot;:334,&quot;h&quot;:175,&quot;abs_x&quot;:195,&quot;abs_y&quot;:1034}">

                                                <img src="{{ asset('theme/assets/media/svg/misc/video-play.svg') }}"
                                                    class="position-absolute top-50 start-50 translate-middle"
                                                    alt=""
                                                    bis_size="{&quot;x&quot;:318,&quot;y&quot;:1087,&quot;w&quot;:88,&quot;h&quot;:68,&quot;abs_x&quot;:318,&quot;abs_y&quot;:1087}"
                                                    bis_id="bn_rpkuxmv96drtmfdeianwvp">
                                            </a>
                                            <!--end::Image-->

                                            <!--begin::Body-->
                                            <div class="m-0" bis_skin_checked="1">
                                                <!--begin::Title-->
                                                <a href="/metronic8/demo1/pages/user-profile/overview.html"
                                                    class="fs-4 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base">
                                                    Admin Panel - How To Started the Dashboard Tutorial </a>
                                                <!--end::Title-->

                                                <!--begin::Text-->
                                                <div class="fw-semibold fs-5 text-gray-600 text-gray-900 my-4"
                                                    bis_skin_checked="1">

                                                    We’ve been focused on making a the from also not been
                                                    afraid to and step away been focused create eye
                                                </div>
                                                <!--end::Text-->

                                                <!--begin::Content-->
                                                <div class="fs-6 fw-bold" bis_skin_checked="1">
                                                    <!--begin::Author-->
                                                    <a href="/metronic8/demo1/pages/user-profile/overview.html"
                                                        class="text-gray-700 text-hover-primary">Jane
                                                        Miller</a>
                                                    <!--end::Author-->

                                                    <!--begin::Date-->
                                                    <span class="text-muted">on Mar 21 2021</span>
                                                    <!--end::Date-->
                                                </div>
                                                <!--end::Content-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Feature post-->



                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-md-4" bis_skin_checked="1">
                                        <!--begin::Feature post-->
                                        <div class="card-xl-stretch mx-md-3" bis_skin_checked="1">
                                            <!--begin::Image-->
                                            <a class="d-block bgi-no-repeat bgi-size-cover bgi-position-center card-rounded position-relative min-h-175px mb-5"
                                                style="background-image:url('{{ asset('theme/assets/media/stock/600x400/img-74.jpg') }}')"
                                                data-fslightbox="lightbox-video-tutorials"
                                                href="https://www.youtube.com/embed/btornGtLwIo"
                                                bis_size="{&quot;x&quot;:592,&quot;y&quot;:1034,&quot;w&quot;:334,&quot;h&quot;:175,&quot;abs_x&quot;:592,&quot;abs_y&quot;:1034}">

                                                <img src="{{ asset('theme/assets/media/svg/misc/video-play.svg') }}"
                                                    class="position-absolute top-50 start-50 translate-middle"
                                                    alt=""
                                                    bis_size="{&quot;x&quot;:715,&quot;y&quot;:1087,&quot;w&quot;:88,&quot;h&quot;:68,&quot;abs_x&quot;:715,&quot;abs_y&quot;:1087}"
                                                    bis_id="bn_h4e03exs9gikq864tt6kit">
                                            </a>
                                            <!--end::Image-->

                                            <!--begin::Body-->
                                            <div class="m-0" bis_skin_checked="1">
                                                <!--begin::Title-->
                                                <a href="/metronic8/demo1/pages/user-profile/overview.html"
                                                    class="fs-4 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base">
                                                    Admin Panel - How To Started the Dashboard Tutorial </a>
                                                <!--end::Title-->

                                                <!--begin::Text-->
                                                <div class="fw-semibold fs-5 text-gray-600 text-gray-900 my-4"
                                                    bis_skin_checked="1">

                                                    We’ve been focused on making the from v4 to v5 but we
                                                    have also not been afraid to step away been focused
                                                </div>
                                                <!--end::Text-->

                                                <!--begin::Content-->
                                                <div class="fs-6 fw-bold" bis_skin_checked="1">
                                                    <!--begin::Author-->
                                                    <a href="/metronic8/demo1/pages/user-profile/overview.html"
                                                        class="text-gray-700 text-hover-primary">Cris
                                                        Morgan</a>
                                                    <!--end::Author-->

                                                    <!--begin::Date-->
                                                    <span class="text-muted">on Apr 14 2021</span>
                                                    <!--end::Date-->
                                                </div>
                                                <!--end::Content-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Feature post-->



                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-md-4" bis_skin_checked="1">
                                        <!--begin::Feature post-->
                                        <div class="card-xl-stretch ms-md-6" bis_skin_checked="1">
                                            <!--begin::Image-->
                                            <a class="d-block bgi-no-repeat bgi-size-cover bgi-position-center card-rounded position-relative min-h-175px mb-5"
                                                style="background-image:url('{{ asset('theme/assets/media/stock/600x400/img-47.jpg') }}')"
                                                data-fslightbox="lightbox-video-tutorials"
                                                href="https://www.youtube.com/embed/TWdDZYNqlg4"
                                                bis_size="{&quot;x&quot;:988,&quot;y&quot;:1034,&quot;w&quot;:334,&quot;h&quot;:175,&quot;abs_x&quot;:988,&quot;abs_y&quot;:1034}">

                                                <img src="{{ asset('theme/assets/media/svg/misc/video-play.svg') }}"
                                                    class="position-absolute top-50 start-50 translate-middle"
                                                    alt=""
                                                    bis_size="{&quot;x&quot;:1112,&quot;y&quot;:1087,&quot;w&quot;:88,&quot;h&quot;:68,&quot;abs_x&quot;:1112,&quot;abs_y&quot;:1087}"
                                                    bis_id="bn_4knv1mdsdqaf1s0dmkvhjd">
                                            </a>
                                            <!--end::Image-->

                                            <!--begin::Body-->
                                            <div class="m-0" bis_skin_checked="1">
                                                <!--begin::Title-->
                                                <a href="/metronic8/demo1/pages/user-profile/overview.html"
                                                    class="fs-4 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base">
                                                    Admin Panel - How To Started the Dashboard Tutorial </a>
                                                <!--end::Title-->

                                                <!--begin::Text-->
                                                <div class="fw-semibold fs-5 text-gray-600 text-gray-900 my-4"
                                                    bis_skin_checked="1">

                                                    We’ve been focused on making the from v4 to v5
                                                    but we’ve also not been afraid to step away been focused
                                                </div>
                                                <!--end::Text-->

                                                <!--begin::Content-->
                                                <div class="fs-6 fw-bold" bis_skin_checked="1">
                                                    <!--begin::Author-->
                                                    <a href="/metronic8/demo1/pages/user-profile/overview.html"
                                                        class="text-gray-700 text-hover-primary">Carles
                                                        Nilson</a>
                                                    <!--end::Author-->

                                                    <!--begin::Date-->
                                                    <span class="text-muted">on May 14 2021</span>
                                                    <!--end::Date-->
                                                </div>
                                                <!--end::Content-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Feature post-->



                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Section-->

                            <!--begin::Section-->
                            <div class="mb-17" bis_skin_checked="1">
                                <!--begin::Content-->
                                <div class="d-flex flex-stack mb-5" bis_skin_checked="1">
                                    <!--begin::Title-->
                                    <h3 class="text-gray-900">Hottest Bundles</h3>
                                    <!--end::Title-->

                                    <!--begin::Link-->
                                    <a href="/post" class="fs-6 fw-semibold link-primary">
                                        View All Offers
                                    </a>
                                    <!--end::Link-->
                                </div>
                                <!--end::Content-->

                                <!--begin::Separator-->
                                <div class="separator separator-dashed mb-9" bis_skin_checked="1"></div>
                                <!--end::Separator-->

                                <!--begin::Row-->
                                <div class="row g-10" bis_skin_checked="1">
                                    <!--begin::Col-->
                                    <div class="col-md-4" bis_skin_checked="1">
                                        <!--begin::Hot sales post-->
                                        <div class="card-xl-stretch me-md-6" bis_skin_checked="1">
                                            <!--begin::Overlay-->
                                            <a class="d-block overlay" data-fslightbox="lightbox-hot-sales"
                                                href="{{ asset('theme/assets/media/stock/600x400/img-23.jpg') }}">
                                                <!--begin::Image-->
                                                <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px"
                                                    style="background-image:url('{{ asset('theme/assets/media/stock/600x400/img-23.jpg') }}')"
                                                    bis_skin_checked="1">
                                                </div>
                                                <!--end::Image-->

                                                <!--begin::Action-->
                                                <div class="overlay-layer card-rounded bg-dark bg-opacity-25"
                                                    bis_skin_checked="1">
                                                    <i class="ki-outline ki-eye fs-2x text-white"></i>
                                                </div>
                                                <!--end::Action-->
                                            </a>
                                            <!--end::Overlay-->

                                            <!--begin::Body-->
                                            <div class="mt-5" bis_skin_checked="1">
                                                <!--begin::Title-->
                                                <a href="/post"
                                                    class="fs-4 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base">
                                                    25 Products Mega Bundle with 50% off discount amazing
                                                </a>
                                                <!--end::Title-->

                                                <!--begin::Text-->
                                                <div class="fw-semibold fs-5 text-gray-600 text-gray-900 mt-3"
                                                    bis_skin_checked="1">
                                                    We’ve been focused on making a the from also not been
                                                    eye </div>
                                                <!--end::Text-->

                                                <!--begin::Text-->
                                                <div class="fs-6 fw-bold mt-5 d-flex flex-stack" bis_skin_checked="1">
                                                    <!--begin::Label-->
                                                    <span
                                                        class="badge border border-dashed fs-2 fw-bold text-gray-900 p-2">
                                                        <span class="fs-6 fw-semibold text-gray-500">$</span>

                                                        28 </span>
                                                    <!--end::Label-->

                                                    <!--begin::Action-->
                                                    <a href="/post" class="btn btn-sm btn-primary">Purchase</a>
                                                    <!--end::Action-->
                                                </div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Hot sales post-->



                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-md-4" bis_skin_checked="1">
                                        <!--begin::Hot sales post-->
                                        <div class="card-xl-stretch mx-md-3" bis_skin_checked="1">
                                            <!--begin::Overlay-->
                                            <a class="d-block overlay" data-fslightbox="lightbox-hot-sales"
                                                href="{{ asset('theme/assets/media/stock/600x600/img-14.jpg') }}">
                                                <!--begin::Image-->
                                                <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px"
                                                    style="background-image:url('{{ asset('theme/assets/media/stock/600x600/img-14.jpg') }}')"
                                                    bis_skin_checked="1">
                                                </div>
                                                <!--end::Image-->

                                                <!--begin::Action-->
                                                <div class="overlay-layer card-rounded bg-dark bg-opacity-25"
                                                    bis_skin_checked="1">
                                                    <i class="ki-outline ki-eye fs-2x text-white"></i>
                                                </div>
                                                <!--end::Action-->
                                            </a>
                                            <!--end::Overlay-->

                                            <!--begin::Body-->
                                            <div class="mt-5" bis_skin_checked="1">
                                                <!--begin::Title-->
                                                <a href="/post"
                                                    class="fs-4 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base">
                                                    25 Products Mega Bundle with 50% off discount amazing
                                                </a>
                                                <!--end::Title-->

                                                <!--begin::Text-->
                                                <div class="fw-semibold fs-5 text-gray-600 text-gray-900 mt-3"
                                                    bis_skin_checked="1">
                                                    We’ve been focused on making a the from also not been
                                                    eye </div>
                                                <!--end::Text-->

                                                <!--begin::Text-->
                                                <div class="fs-6 fw-bold mt-5 d-flex flex-stack" bis_skin_checked="1">
                                                    <!--begin::Label-->
                                                    <span
                                                        class="badge border border-dashed fs-2 fw-bold text-gray-900 p-2">
                                                        <span class="fs-6 fw-semibold text-gray-500">$</span>

                                                        27 </span>
                                                    <!--end::Label-->

                                                    <!--begin::Action-->
                                                    <a href="/post" class="btn btn-sm btn-primary">Purchase</a>
                                                    <!--end::Action-->
                                                </div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Hot sales post-->



                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-md-4" bis_skin_checked="1">
                                        <!--begin::Hot sales post-->
                                        <div class="card-xl-stretch ms-md-6" bis_skin_checked="1">
                                            <!--begin::Overlay-->
                                            <a class="d-block overlay" data-fslightbox="lightbox-hot-sales"
                                                href="{{ asset('theme/assets/media/stock/600x400/img-71.jpg') }}">
                                                <!--begin::Image-->
                                                <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px"
                                                    style="background-image:url('{{ asset('theme/assets/media/stock/600x400/img-71.jpg') }}')"
                                                    bis_skin_checked="1">
                                                </div>
                                                <!--end::Image-->

                                                <!--begin::Action-->
                                                <div class="overlay-layer card-rounded bg-dark bg-opacity-25"
                                                    bis_skin_checked="1">
                                                    <i class="ki-outline ki-eye fs-2x text-white"></i>
                                                </div>
                                                <!--end::Action-->
                                            </a>
                                            <!--end::Overlay-->

                                            <!--begin::Body-->
                                            <div class="mt-5" bis_skin_checked="1">
                                                <!--begin::Title-->
                                                <a href="/post"
                                                    class="fs-4 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base">
                                                    25 Products Mega Bundle with 50% off discount amazing
                                                </a>
                                                <!--end::Title-->

                                                <!--begin::Text-->
                                                <div class="fw-semibold fs-5 text-gray-600 text-gray-900 mt-3"
                                                    bis_skin_checked="1">
                                                    We’ve been focused on making a the from also not been
                                                    eye </div>
                                                <!--end::Text-->

                                                <!--begin::Text-->
                                                <div class="fs-6 fw-bold mt-5 d-flex flex-stack" bis_skin_checked="1">
                                                    <!--begin::Label-->
                                                    <span
                                                        class="badge border border-dashed fs-2 fw-bold text-gray-900 p-2">
                                                        <span class="fs-6 fw-semibold text-gray-500">$</span>

                                                        25 </span>
                                                    <!--end::Label-->

                                                    <!--begin::Action-->
                                                    <a href="/post" class="btn btn-sm btn-primary">Purchase</a>
                                                    <!--end::Action-->
                                                </div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Hot sales post-->



                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Section-->








                            <!--begin::latest instagram-->
                            <div class="" bis_skin_checked="1">
                                <!--begin::Section-->
                                <div class="m-0" bis_skin_checked="1">
                                    <!--begin::Content-->
                                    <div class="d-flex flex-stack" bis_skin_checked="1">
                                        <!--begin::Title-->
                                        <h3 class="text-gray-900">Latest Instagram Posts</h3>
                                        <!--end::Title-->

                                        <!--begin::Link-->
                                        <a href="/post" class="fs-6 fw-semibold link-primary">
                                            View Instagram
                                        </a>
                                        <!--end::Link-->
                                    </div>
                                    <!--end::Content-->

                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed border-gray-300 mb-9 mt-5"
                                        bis_skin_checked="1"></div>
                                    <!--end::Separator-->
                                </div>
                                <!--end::Section-->

                                <!--begin::Row-->
                                <div class="row g-10 row-cols-2 row-cols-lg-5" bis_skin_checked="1">
                                    <!--begin::Col-->
                                    <div class="col" bis_skin_checked="1">
                                        <!--begin::Overlay-->
                                        <a class="d-block overlay" data-fslightbox="lightbox-hot-sales"
                                            href="{{ asset('theme/assets/media/stock/900x600/16.jpg') }}">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px"
                                                style="background-image:url('{{ asset('theme/assets/media/stock/900x600/16.jpg') }}')"
                                                bis_skin_checked="1">
                                            </div>
                                            <!--end::Image-->

                                            <!--begin::Action-->
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25"
                                                bis_skin_checked="1">
                                                <i class="ki-outline ki-eye fs-3x text-white"></i>
                                            </div>
                                            <!--end::Action-->
                                        </a>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col" bis_skin_checked="1">
                                        <!--begin::Overlay-->
                                        <a class="d-block overlay" data-fslightbox="lightbox-hot-sales"
                                            href="{{ asset('theme/assets/media/stock/900x600/13.jpg') }}">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px"
                                                style="background-image:url('{{ asset('theme/assets/media/stock/900x600/13.jpg') }}')"
                                                bis_skin_checked="1">
                                            </div>
                                            <!--end::Image-->

                                            <!--begin::Action-->
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25"
                                                bis_skin_checked="1">
                                                <i class="ki-outline ki-eye fs-3x text-white"></i>
                                            </div>
                                            <!--end::Action-->
                                        </a>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col" bis_skin_checked="1">
                                        <!--begin::Overlay-->
                                        <a class="d-block overlay" data-fslightbox="lightbox-hot-sales"
                                            href="{{ asset('theme/assets/media/stock/900x600/19.jpg') }}">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px"
                                                style="background-image:url('{{ asset('theme/assets/media/stock/900x600/19.jpg') }}')"
                                                bis_skin_checked="1">
                                            </div>
                                            <!--end::Image-->

                                            <!--begin::Action-->
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25"
                                                bis_skin_checked="1">
                                                <i class="ki-outline ki-eye fs-3x text-white"></i>
                                            </div>
                                            <!--end::Action-->
                                        </a>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col" bis_skin_checked="1">
                                        <!--begin::Overlay-->
                                        <a class="d-block overlay" data-fslightbox="lightbox-hot-sales"
                                            href="{{ asset('theme/assets/media/stock/900x600/15.jpg') }}">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px"
                                                style="background-image:url('{{ asset('theme/assets/media/stock/900x600/15.jpg') }}')"
                                                bis_skin_checked="1">
                                            </div>
                                            <!--end::Image-->

                                            <!--begin::Action-->
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25"
                                                bis_skin_checked="1">
                                                <i class="ki-outline ki-eye fs-3x text-white"></i>
                                            </div>
                                            <!--end::Action-->
                                        </a>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col" bis_skin_checked="1">
                                        <!--begin::Overlay-->
                                        <a class="d-block overlay" data-fslightbox="lightbox-hot-sales"
                                            href="{{ asset('theme/assets/media/stock/900x600/12.jpg') }}">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px"
                                                style="background-image:url('{{ asset('theme/assets/media/stock/900x600/12.jpg') }}')"
                                                bis_skin_checked="1">
                                            </div>
                                            <!--end::Image-->

                                            <!--begin::Action-->
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25"
                                                bis_skin_checked="1">
                                                <i class="ki-outline ki-eye fs-3x text-white"></i>
                                            </div>
                                            <!--end::Action-->
                                        </a>
                                    </div>
                                    <!--end::Col-->

                                </div>
                                <!--begin::Row-->
                            </div>
                            <!--end::latest instagram-->



                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Home card-->

                </div>
                <!--end::Content container-->
            </div>
            <!--end::Content-->

        </div>
        <!--end::Content wrapper-->
    </div>
@endsection
