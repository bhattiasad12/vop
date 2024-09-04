<!DOCTYPE html>
<html lang="ur" direction="rtl" dir="rtl" style="direction: rtl">
{{-- <html lang="{{ app()->getLocale() }}"> --}}
@include('layouts.app.head')

<body id="kt_app_body" data-kt-app-layout="light-header" data-kt-app-header-fixed="true" data-kt-app-toolbar-enabled="true"
    class="app-default" __processed_bee09e99-fdc0-405d-862b-77b3b002e48f__="true"
    bis_register="W3sibWFzdGVyIjp0cnVlLCJleHRlbnNpb25JZCI6ImVwcGlvY2VtaG1ubGJoanBsY2drb2ZjaWllZ29tY29uIiwiYWRibG9ja2VyU3RhdHVzIjp7IkRJU1BMQVkiOiJkaXNhYmxlZCIsIkZBQ0VCT09LIjoiZGlzYWJsZWQiLCJUV0lUVEVSIjoiZGlzYWJsZWQiLCJSRURESVQiOiJkaXNhYmxlZCIsIlBJTlRFUkVTVCI6ImRpc2FibGVkIiwiSU5TVEFHUkFNIjoiZGlzYWJsZWQiLCJMSU5LRURJTiI6ImRpc2FibGVkIiwiQ09ORklHIjoiZGlzYWJsZWQifSwidmVyc2lvbiI6IjIuMC4xNiIsInNjb3JlIjoyMDAxNn1d">
    <!--begin::Theme mode setup on page load-->
    <script>
        var defaultThemeMode = "light";
        var themeMode;

        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if (localStorage.getItem("data-bs-theme") !== null) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }

            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }

            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }
    </script>
    <!--end::Theme mode setup on page load-->
    <!--Begin::Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!--End::Google Tag Manager (noscript) -->


    <!--begin::App-->
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root" bis_skin_checked="1">
        <!--begin::Page-->
        <div class="app-page  flex-column flex-column-fluid " id="kt_app_page" bis_skin_checked="1">




            <!--begin::Header-->

            @include('layouts.app.topbar')
            <!--end::Header-->
            <!--begin::Wrapper-->
            <div class="app-wrapper  flex-column flex-row-fluid " id="kt_app_wrapper" bis_skin_checked="1">
                <div class="app-main flex-column flex-row-fluid " id="kt_app_main" bis_skin_checked="1">

                    @yield('content')


                    <!--begin::Footer-->
                    <div id="kt_app_footer" class="app-footer " bis_skin_checked="1">
                        <!--begin::Footer container-->
                        <div class="app-container  container-xxl d-flex flex-column flex-md-row flex-center flex-md-stack py-3 "
                            bis_skin_checked="1">
                            <!--begin::Copyright-->
                            <div class="text-gray-900 order-2 order-md-1" bis_skin_checked="1">
                                <span class="text-muted fw-semibold me-1">2024©</span>
                                <a href="https://keenthemes.com" target="_blank"
                                    class="text-gray-800 text-hover-primary">Keenthemes</a>
                            </div>
                            <!--end::Copyright-->

                            <!--begin::Menu-->
                            <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                                <li class="menu-item"><a href="https://keenthemes.com" target="_blank"
                                        class="menu-link px-2">About</a></li>

                                <li class="menu-item"><a href="https://devs.keenthemes.com" target="_blank"
                                        class="menu-link px-2">Support</a></li>

                                <li class="menu-item"><a href="https://1.envato.market/EA4JP" target="_blank"
                                        class="menu-link px-2">Purchase</a></li>
                            </ul>
                            <!--end::Menu-->
                        </div>
                        <!--end::Footer container-->
                    </div>
                    <!--end::Footer-->
                </div>
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::App-->

    <!--begin::Activities drawer-->
    <div id="kt_activities" class="bg-body drawer drawer-end" data-kt-drawer="true" data-kt-drawer-name="activities"
        data-kt-drawer-activate="true" data-kt-drawer-overlay="true"
        data-kt-drawer-width="{default:'300px', 'lg': '900px'}" data-kt-drawer-direction="end"
        data-kt-drawer-toggle="#kt_activities_toggle" data-kt-drawer-close="#kt_activities_close"
        style="width: 900px !important;" bis_skin_checked="1">

        <div class="card shadow-none border-0 rounded-0" bis_skin_checked="1">
            <!--begin::Header-->
            <div class="card-header" id="kt_activities_header" bis_skin_checked="1">
                <h3 class="card-title fw-bold text-gray-900">Activity Logs</h3>

                <div class="card-toolbar" bis_skin_checked="1">
                    <button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n5"
                        id="kt_activities_close">
                        <i class="ki-outline ki-cross fs-1"></i> </button>
                </div>
            </div>
            <!--end::Header-->

            <!--begin::Body-->
            <div class="card-body position-relative" id="kt_activities_body" bis_skin_checked="1">
                <!--begin::Content-->
                <div id="kt_activities_scroll" class="position-relative scroll-y me-n5 pe-5" data-kt-scroll="true"
                    data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_activities_body"
                    data-kt-scroll-dependencies="#kt_activities_header, #kt_activities_footer"
                    data-kt-scroll-offset="5px" style="height: 171px;" bis_skin_checked="1">

                    <!--begin::Timeline items-->
                    <div class="timeline timeline-border-dashed" bis_skin_checked="1">
                        <!--begin::Timeline item-->
                        <div class="timeline-item" bis_skin_checked="1">
                            <!--begin::Timeline line-->
                            <div class="timeline-line" bis_skin_checked="1"></div>
                            <!--end::Timeline line-->

                            <!--begin::Timeline icon-->
                            <div class="timeline-icon" bis_skin_checked="1">
                                <i class="ki-outline ki-message-text-2 fs-2 text-gray-500"></i>
                            </div>
                            <!--end::Timeline icon-->

                            <!--begin::Timeline content-->
                            <div class="timeline-content mb-10 mt-n1" bis_skin_checked="1">
                                <!--begin::Timeline heading-->
                                <div class="pe-3 mb-5" bis_skin_checked="1">
                                    <!--begin::Title-->
                                    <div class="fs-5 fw-semibold mb-2" bis_skin_checked="1">There are 2 new tasks
                                        for you in “AirPlus Mobile App” project:</div>
                                    <!--end::Title-->

                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center mt-1 fs-6" bis_skin_checked="1">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7" bis_skin_checked="1">Added at 4:23 PM by
                                        </div>
                                        <!--end::Info-->

                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                            data-bs-boundary="window" data-bs-placement="top"
                                            aria-label="Nina Nilson" data-bs-original-title="Nina Nilson"
                                            data-kt-initialized="1" bis_skin_checked="1">
                                            <img src="{{ asset('theme/assets/media/avatars/300-14.jpg') }}"
                                                alt="img">
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->

                                <!--begin::Timeline details-->
                                <div class="overflow-auto pb-5" bis_skin_checked="1">
                                    <!--begin::Record-->
                                    <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5"
                                        bis_skin_checked="1">
                                        <!--begin::Title-->
                                        <a href="/metronic8/demo1/apps/projects/project.html"
                                            class="fs-5 text-gray-900 text-hover-primary fw-semibold w-375px min-w-200px">Meeting
                                            with customer</a>
                                        <!--end::Title-->

                                        <!--begin::Label-->
                                        <div class="min-w-175px pe-2" bis_skin_checked="1">
                                            <span class="badge badge-light text-muted">Application Design</span>
                                        </div>
                                        <!--end::Label-->

                                        <!--begin::Users-->
                                        <div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px pe-2"
                                            bis_skin_checked="1">
                                            <!--begin::User-->
                                            <div class="symbol symbol-circle symbol-25px" bis_skin_checked="1">
                                                <img src="{{ asset('theme/assets/media/avatars/300-2.jpg') }}"
                                                    alt="img">
                                            </div>
                                            <!--end::User-->

                                            <!--begin::User-->
                                            <div class="symbol symbol-circle symbol-25px" bis_skin_checked="1">
                                                <img src="{{ asset('theme/assets/media/avatars/300-14.jpg') }}"
                                                    alt="img">
                                            </div>
                                            <!--end::User-->

                                            <!--begin::User-->
                                            <div class="symbol symbol-circle symbol-25px" bis_skin_checked="1">
                                                <div class="symbol-label fs-8 fw-semibold bg-primary text-inverse-primary"
                                                    bis_skin_checked="1">A</div>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Users-->

                                        <!--begin::Progress-->
                                        <div class="min-w-125px pe-2" bis_skin_checked="1">
                                            <span class="badge badge-light-primary">In Progress</span>
                                        </div>
                                        <!--end::Progress-->

                                        <!--begin::Action-->
                                        <a href="/metronic8/demo1/apps/projects/project.html"
                                            class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Record-->

                                    <!--begin::Record-->
                                    <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-0"
                                        bis_skin_checked="1">
                                        <!--begin::Title-->
                                        <a href="/metronic8/demo1/apps/projects/project.html"
                                            class="fs-5 text-gray-900 text-hover-primary fw-semibold w-375px min-w-200px">Project
                                            Delivery Preparation</a>
                                        <!--end::Title-->

                                        <!--begin::Label-->
                                        <div class="min-w-175px" bis_skin_checked="1">
                                            <span class="badge badge-light text-muted">CRM System Development</span>
                                        </div>
                                        <!--end::Label-->

                                        <!--begin::Users-->
                                        <div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px"
                                            bis_skin_checked="1">
                                            <!--begin::User-->
                                            <div class="symbol symbol-circle symbol-25px" bis_skin_checked="1">
                                                <img src="{{ asset('theme/assets/media/avatars/300-20.jpg') }}"
                                                    alt="img">
                                            </div>
                                            <!--end::User-->

                                            <!--begin::User-->
                                            <div class="symbol symbol-circle symbol-25px" bis_skin_checked="1">
                                                <div class="symbol-label fs-8 fw-semibold bg-success text-inverse-primary"
                                                    bis_skin_checked="1">B</div>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Users-->

                                        <!--begin::Progress-->
                                        <div class="min-w-125px" bis_skin_checked="1">
                                            <span class="badge badge-light-success">Completed</span>
                                        </div>
                                        <!--end::Progress-->

                                        <!--begin::Action-->
                                        <a href="/metronic8/demo1/apps/projects/project.html"
                                            class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Record-->
                                </div>
                                <!--end::Timeline details-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                        <!--begin::Timeline item-->
                        <div class="timeline-item" bis_skin_checked="1">
                            <!--begin::Timeline line-->
                            <div class="timeline-line" bis_skin_checked="1"></div>
                            <!--end::Timeline line-->

                            <!--begin::Timeline icon-->
                            <div class="timeline-icon me-4" bis_skin_checked="1">
                                <i class="ki-outline ki-flag fs-2 text-gray-500"></i>
                            </div>
                            <!--end::Timeline icon-->

                            <!--begin::Timeline content-->
                            <div class="timeline-content mb-10 mt-n2" bis_skin_checked="1">
                                <!--begin::Timeline heading-->
                                <div class="overflow-auto pe-3" bis_skin_checked="1">
                                    <!--begin::Title-->
                                    <div class="fs-5 fw-semibold mb-2" bis_skin_checked="1">Invitation for crafting
                                        engaging designs that speak human workshop</div>
                                    <!--end::Title-->

                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center mt-1 fs-6" bis_skin_checked="1">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7" bis_skin_checked="1">Sent at 4:23 PM by
                                        </div>
                                        <!--end::Info-->

                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                            data-bs-boundary="window" data-bs-placement="top"
                                            aria-label="Alan Nilson" data-bs-original-title="Alan Nilson"
                                            data-kt-initialized="1" bis_skin_checked="1">
                                            <img src="{{ asset('theme/assets/media/avatars/300-1.jpg') }}"
                                                alt="img">
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                        <!--begin::Timeline item-->
                        <div class="timeline-item" bis_skin_checked="1">
                            <!--begin::Timeline line-->
                            <div class="timeline-line" bis_skin_checked="1"></div>
                            <!--end::Timeline line-->

                            <!--begin::Timeline icon-->
                            <div class="timeline-icon" bis_skin_checked="1">
                                <i class="ki-outline ki-disconnect fs-2 text-gray-500"></i>
                            </div>
                            <!--end::Timeline icon-->

                            <!--begin::Timeline content-->
                            <div class="timeline-content mb-10 mt-n1" bis_skin_checked="1">
                                <!--begin::Timeline heading-->
                                <div class="mb-5 pe-3" bis_skin_checked="1">
                                    <!--begin::Title-->
                                    <a href="#" class="fs-5 fw-semibold text-gray-800 text-hover-primary mb-2">3
                                        New Incoming
                                        Project Files:</a>
                                    <!--end::Title-->

                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center mt-1 fs-6" bis_skin_checked="1">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7" bis_skin_checked="1">Sent at 10:30 PM by
                                        </div>
                                        <!--end::Info-->

                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                            data-bs-boundary="window" data-bs-placement="top" aria-label="Jan Hummer"
                                            data-bs-original-title="Jan Hummer" data-kt-initialized="1"
                                            bis_skin_checked="1">
                                            <img src="{{ asset('theme/assets/media/avatars/300-23.jpg') }}"
                                                alt="img">
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->

                                <!--begin::Timeline details-->
                                <div class="overflow-auto pb-5" bis_skin_checked="1">
                                    <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5"
                                        bis_skin_checked="1">
                                        <!--begin::Item-->
                                        <div class="d-flex flex-aligns-center pe-10 pe-lg-20" bis_skin_checked="1">
                                            <!--begin::Icon-->
                                            <img alt="" class="w-30px me-3"
                                                src="{{ asset('theme/assets/media/svg/files/pdf.svg') }}">
                                            <!--end::Icon-->

                                            <!--begin::Info-->
                                            <div class="ms-1 fw-semibold" bis_skin_checked="1">
                                                <!--begin::Desc-->
                                                <a href="/metronic8/demo1/apps/projects/project.html"
                                                    class="fs-6 text-hover-primary fw-bold">Finance KPI App
                                                    Guidelines</a>
                                                <!--end::Desc-->

                                                <!--begin::Number-->
                                                <div class="text-gray-500" bis_skin_checked="1">1.9mb</div>
                                                <!--end::Number-->
                                            </div>
                                            <!--begin::Info-->
                                        </div>
                                        <!--end::Item-->

                                        <!--begin::Item-->
                                        <div class="d-flex flex-aligns-center pe-10 pe-lg-20" bis_skin_checked="1">
                                            <!--begin::Icon-->
                                            <img alt="/metronic8/demo1/apps/projects/project.html" class="w-30px me-3"
                                                src="{{ asset('theme/assets/media/svg/files/doc.svg') }}">
                                            <!--end::Icon-->

                                            <!--begin::Info-->
                                            <div class="ms-1 fw-semibold" bis_skin_checked="1">
                                                <!--begin::Desc-->
                                                <a href="#" class="fs-6 text-hover-primary fw-bold">Client UAT
                                                    Testing Results</a>
                                                <!--end::Desc-->

                                                <!--begin::Number-->
                                                <div class="text-gray-500" bis_skin_checked="1">18kb</div>
                                                <!--end::Number-->
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Item-->

                                        <!--begin::Item-->
                                        <div class="d-flex flex-aligns-center" bis_skin_checked="1">
                                            <!--begin::Icon-->
                                            <img alt="/metronic8/demo1/apps/projects/project.html" class="w-30px me-3"
                                                src="{{ asset('theme/assets/media/svg/files/css.svg') }}">
                                            <!--end::Icon-->

                                            <!--begin::Info-->
                                            <div class="ms-1 fw-semibold" bis_skin_checked="1">
                                                <!--begin::Desc-->
                                                <a href="#" class="fs-6 text-hover-primary fw-bold">Finance
                                                    Reports</a>
                                                <!--end::Desc-->

                                                <!--begin::Number-->
                                                <div class="text-gray-500" bis_skin_checked="1">20mb</div>
                                                <!--end::Number-->
                                            </div>
                                            <!--end::Icon-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                </div>
                                <!--end::Timeline details-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                        <!--begin::Timeline item-->
                        <div class="timeline-item" bis_skin_checked="1">
                            <!--begin::Timeline line-->
                            <div class="timeline-line" bis_skin_checked="1"></div>
                            <!--end::Timeline line-->

                            <!--begin::Timeline icon-->
                            <div class="timeline-icon" bis_skin_checked="1">
                                <i class="ki-outline ki-abstract-26 fs-2 text-gray-500"></i>
                            </div>
                            <!--end::Timeline icon-->

                            <!--begin::Timeline content-->
                            <div class="timeline-content mb-10 mt-n1" bis_skin_checked="1">
                                <!--begin::Timeline heading-->
                                <div class="pe-3 mb-5" bis_skin_checked="1">
                                    <!--begin::Title-->
                                    <div class="fs-5 fw-semibold mb-2" bis_skin_checked="1">
                                        Task <a href="#" class="text-primary fw-bold me-1">#45890</a>
                                        merged with <a href="#" class="text-primary fw-bold me-1">#45890</a>
                                        in “Ads Pro Admin Dashboard project:
                                    </div>
                                    <!--end::Title-->

                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center mt-1 fs-6" bis_skin_checked="1">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7" bis_skin_checked="1">Initiated at 4:23 PM
                                            by</div>
                                        <!--end::Info-->

                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                            data-bs-boundary="window" data-bs-placement="top"
                                            aria-label="Nina Nilson" data-bs-original-title="Nina Nilson"
                                            data-kt-initialized="1" bis_skin_checked="1">
                                            <img src="{{ asset('theme/assets/media/avatars/300-14.jpg') }}"
                                                alt="img">
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                        <!--begin::Timeline item-->
                        <div class="timeline-item" bis_skin_checked="1">
                            <!--begin::Timeline line-->
                            <div class="timeline-line" bis_skin_checked="1"></div>
                            <!--end::Timeline line-->

                            <!--begin::Timeline icon-->
                            <div class="timeline-icon" bis_skin_checked="1">
                                <i class="ki-outline ki-pencil fs-2 text-gray-500"></i>
                            </div>
                            <!--end::Timeline icon-->

                            <!--begin::Timeline content-->
                            <div class="timeline-content mb-10 mt-n1" bis_skin_checked="1">
                                <!--begin::Timeline heading-->
                                <div class="pe-3 mb-5" bis_skin_checked="1">
                                    <!--begin::Title-->
                                    <div class="fs-5 fw-semibold mb-2" bis_skin_checked="1">3 new application design
                                        concepts added:</div>
                                    <!--end::Title-->

                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center mt-1 fs-6" bis_skin_checked="1">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7" bis_skin_checked="1">Created at 4:23 PM by
                                        </div>
                                        <!--end::Info-->

                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                            data-bs-boundary="window" data-bs-placement="top"
                                            aria-label="Marcus Dotson" data-bs-original-title="Marcus Dotson"
                                            data-kt-initialized="1" bis_skin_checked="1">
                                            <img src="{{ asset('theme/assets/media/avatars/300-2.jpg') }}"
                                                alt="img">
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->

                                <!--begin::Timeline details-->
                                <div class="overflow-auto pb-5" bis_skin_checked="1">
                                    <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7"
                                        bis_skin_checked="1">
                                        <!--begin::Item-->
                                        <div class="overlay me-10" bis_skin_checked="1">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper" bis_skin_checked="1">
                                                <img alt="img" class="rounded w-150px"
                                                    src="{{ asset('theme/assets/media/stock/600x400/img-29.jpg') }}">
                                            </div>
                                            <!--end::Image-->

                                            <!--begin::Link-->
                                            <div class="overlay-layer bg-dark bg-opacity-10 rounded"
                                                bis_skin_checked="1">
                                                <a href="#"
                                                    class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                            </div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Item-->

                                        <!--begin::Item-->
                                        <div class="overlay me-10" bis_skin_checked="1">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper" bis_skin_checked="1">
                                                <img alt="img" class="rounded w-150px"
                                                    src="{{ asset('theme/assets/media/stock/600x400/img-31.jpg') }}">
                                            </div>
                                            <!--end::Image-->

                                            <!--begin::Link-->
                                            <div class="overlay-layer bg-dark bg-opacity-10 rounded"
                                                bis_skin_checked="1">
                                                <a href="#"
                                                    class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                            </div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Item-->

                                        <!--begin::Item-->
                                        <div class="overlay" bis_skin_checked="1">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper" bis_skin_checked="1">
                                                <img alt="img" class="rounded w-150px"
                                                    src="{{ asset('theme/assets/media/stock/600x400/img-40.jpg') }}">
                                            </div>
                                            <!--end::Image-->

                                            <!--begin::Link-->
                                            <div class="overlay-layer bg-dark bg-opacity-10 rounded"
                                                bis_skin_checked="1">
                                                <a href="#"
                                                    class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                            </div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                </div>
                                <!--end::Timeline details-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                        <!--begin::Timeline item-->
                        <div class="timeline-item" bis_skin_checked="1">
                            <!--begin::Timeline line-->
                            <div class="timeline-line" bis_skin_checked="1"></div>
                            <!--end::Timeline line-->

                            <!--begin::Timeline icon-->
                            <div class="timeline-icon" bis_skin_checked="1">
                                <i class="ki-outline ki-sms fs-2 text-gray-500"></i>
                            </div>
                            <!--end::Timeline icon-->

                            <!--begin::Timeline content-->
                            <div class="timeline-content mb-10 mt-n1" bis_skin_checked="1">
                                <!--begin::Timeline heading-->
                                <div class="pe-3 mb-5" bis_skin_checked="1">
                                    <!--begin::Title-->
                                    <div class="fs-5 fw-semibold mb-2" bis_skin_checked="1">
                                        New case <a href="#" class="text-primary fw-bold me-1">#67890</a>
                                        is assigned to you in Multi-platform Database Design project
                                    </div>
                                    <!--end::Title-->

                                    <!--begin::Description-->
                                    <div class="overflow-auto pb-5" bis_skin_checked="1">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mt-1 fs-6" bis_skin_checked="1">
                                            <!--begin::Info-->
                                            <div class="text-muted me-2 fs-7" bis_skin_checked="1">Added at 4:23 PM
                                                by</div>
                                            <!--end::Info-->

                                            <!--begin::User-->
                                            <a href="#" class="text-primary fw-bold me-1">Alice Tan</a>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                        <!--begin::Timeline item-->
                        <div class="timeline-item" bis_skin_checked="1">
                            <!--begin::Timeline line-->
                            <div class="timeline-line" bis_skin_checked="1"></div>
                            <!--end::Timeline line-->

                            <!--begin::Timeline icon-->
                            <div class="timeline-icon" bis_skin_checked="1">
                                <i class="ki-outline ki-pencil fs-2 text-gray-500"></i>
                            </div>
                            <!--end::Timeline icon-->

                            <!--begin::Timeline content-->
                            <div class="timeline-content mb-10 mt-n1" bis_skin_checked="1">
                                <!--begin::Timeline heading-->
                                <div class="pe-3 mb-5" bis_skin_checked="1">
                                    <!--begin::Title-->
                                    <div class="fs-5 fw-semibold mb-2" bis_skin_checked="1">You have received a new
                                        order:</div>
                                    <!--end::Title-->

                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center mt-1 fs-6" bis_skin_checked="1">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7" bis_skin_checked="1">Placed at 5:05 AM by
                                        </div>
                                        <!--end::Info-->

                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                            data-bs-boundary="window" data-bs-placement="top"
                                            aria-label="Robert Rich" data-bs-original-title="Robert Rich"
                                            data-kt-initialized="1" bis_skin_checked="1">
                                            <img src="{{ asset('theme/assets/media/avatars/300-4.jpg') }}"
                                                alt="img">
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->

                                <!--begin::Timeline details-->
                                <div class="overflow-auto pb-5" bis_skin_checked="1">

                                    <!--begin::Notice-->
                                    <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed min-w-lg-600px flex-shrink-0 p-6"
                                        bis_skin_checked="1">
                                        <!--begin::Icon-->
                                        <i class="ki-outline ki-devices-2 fs-2tx text-primary me-4"></i>
                                        <!--end::Icon-->

                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap"
                                            bis_skin_checked="1">
                                            <!--begin::Content-->
                                            <div class="mb-3 mb-md-0 fw-semibold" bis_skin_checked="1">
                                                <h4 class="text-gray-900 fw-bold">Database Backup Process Completed!
                                                </h4>

                                                <div class="fs-6 text-gray-700 pe-7" bis_skin_checked="1">Login into
                                                    Admin Dashboard to make sure the data integrity is OK</div>
                                            </div>
                                            <!--end::Content-->

                                            <!--begin::Action-->
                                            <a href="#"
                                                class="btn btn-primary px-6 align-self-center text-nowrap">
                                                Proceed </a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Notice-->

                                </div>
                                <!--end::Timeline details-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                        <!--begin::Timeline item-->
                        <div class="timeline-item" bis_skin_checked="1">
                            <!--begin::Timeline line-->
                            <div class="timeline-line" bis_skin_checked="1"></div>
                            <!--end::Timeline line-->

                            <!--begin::Timeline icon-->
                            <div class="timeline-icon" bis_skin_checked="1">
                                <i class="ki-outline ki-basket fs-2 text-gray-500"></i>
                            </div>
                            <!--end::Timeline icon-->

                            <!--begin::Timeline content-->
                            <div class="timeline-content mt-n1" bis_skin_checked="1">
                                <!--begin::Timeline heading-->
                                <div class="pe-3 mb-5" bis_skin_checked="1">
                                    <!--begin::Title-->
                                    <div class="fs-5 fw-semibold mb-2" bis_skin_checked="1">
                                        New order <a href="#" class="text-primary fw-bold me-1">#67890</a>
                                        is placed for Workshow Planning &amp; Budget Estimation
                                    </div>
                                    <!--end::Title-->

                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center mt-1 fs-6" bis_skin_checked="1">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7" bis_skin_checked="1">Placed at 4:23 PM by
                                        </div>
                                        <!--end::Info-->

                                        <!--begin::User-->
                                        <a href="#" class="text-primary fw-bold me-1">Jimmy Bold</a>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                    </div>
                    <!--end::Timeline items-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Body-->

            <!--begin::Footer-->
            <div class="card-footer py-5 text-center" id="kt_activities_footer" bis_skin_checked="1">
                <a href="/metronic8/demo1/pages/user-profile/activity.html" class="btn btn-bg-body text-primary">
                    View All Activities <i class="ki-outline ki-arrow-right fs-3 text-primary"></i> </a>
            </div>
            <!--end::Footer-->
        </div>
    </div>
    <!--end::Activities drawer-->

    <!--end::Drawers-->
    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true" bis_skin_checked="1">
        <i class="ki-outline ki-arrow-up"></i>
    </div>
    <!--end::Scrolltop-->

    <!--begin::Modals-->

    <!--begin::Modal - Invite Friends-->
    <div class="modal fade" id="kt_modal_invite_friends" tabindex="-1" aria-hidden="true" bis_skin_checked="1">
        <!--begin::Modal dialog-->
        <div class="modal-dialog mw-650px" bis_skin_checked="1">
            <!--begin::Modal content-->
            <div class="modal-content" bis_skin_checked="1">
                <!--begin::Modal header-->
                <div class="modal-header pb-0 border-0 justify-content-end" bis_skin_checked="1">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal"
                        bis_skin_checked="1">
                        <i class="ki-outline ki-cross fs-1"></i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--begin::Modal header-->

                <!--begin::Modal body-->
                <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15" bis_skin_checked="1">
                    <!--begin::Heading-->
                    <div class="text-center mb-13" bis_skin_checked="1">
                        <!--begin::Title-->
                        <h1 class="mb-3">Invite a Friend</h1>
                        <!--end::Title-->

                        <!--begin::Description-->
                        <div class="text-muted fw-semibold fs-5" bis_skin_checked="1">
                            If you need more info, please check out
                            <a href="#" class="link-primary fw-bold">FAQ Page</a>.
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->

                    <!--begin::Google Contacts Invite-->
                    <div class="btn btn-light-primary fw-bold w-100 mb-8" bis_skin_checked="1">
                        <img alt="Logo" src="{{ asset('theme/assets/media/svg/brand-logos/google-icon.svg') }}"
                            class="h-20px me-3">
                        Invite Gmail Contacts
                    </div>
                    <!--end::Google Contacts Invite-->

                    <!--begin::Separator-->
                    <div class="separator d-flex flex-center mb-8" bis_skin_checked="1">
                        <span class="text-uppercase bg-body fs-7 fw-semibold text-muted px-3">or</span>
                    </div>
                    <!--end::Separator-->

                    <!--begin::Textarea-->
                    <textarea class="form-control form-control-solid mb-8" rows="3" placeholder="Type or paste emails here">                </textarea>
                    <!--end::Textarea-->

                    <!--begin::Users-->
                    <div class="mb-10" bis_skin_checked="1">
                        <!--begin::Heading-->
                        <div class="fs-6 fw-semibold mb-2" bis_skin_checked="1">Your Invitations</div>
                        <!--end::Heading-->

                        <!--begin::List-->
                        <div class="mh-300px scroll-y me-n7 pe-7" bis_skin_checked="1">
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed"
                                bis_skin_checked="1">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center" bis_skin_checked="1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle" bis_skin_checked="1">
                                        <img alt="Pic"
                                            src="{{ asset('theme/assets/media/avatars/300-6.jpg') }}">
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5" bis_skin_checked="1">
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>

                                        <div class="fw-semibold text-muted" bis_skin_checked="1">smith@kpmg.com
                                        </div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px" bis_skin_checked="1">
                                    <select
                                        class="form-select form-select-solid form-select-sm select2-hidden-accessible"
                                        data-control="select2" data-dropdown-parent="#kt_modal_invite_friends"
                                        data-hide-search="true" data-select2-id="select2-data-66-5ts5" tabindex="-1"
                                        aria-hidden="true" data-kt-initialized="1">
                                        <option value="1">Guest</option>
                                        <option value="2" selected="" data-select2-id="select2-data-68-k4s4">
                                            Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select><span class="select2 select2-container select2-container--bootstrap5"
                                        dir="ltr" data-select2-id="select2-data-67-41fz"
                                        style="width: 100%;"><span class="selection"><span
                                                class="select2-selection select2-selection--single form-select form-select-solid form-select-sm"
                                                role="combobox" aria-haspopup="true" aria-expanded="false"
                                                tabindex="0" aria-disabled="false"
                                                aria-labelledby="select2-cs3b-container"
                                                aria-controls="select2-cs3b-container"><span
                                                    class="select2-selection__rendered" id="select2-cs3b-container"
                                                    role="textbox" aria-readonly="true"
                                                    title="Owner">Owner</span><span class="select2-selection__arrow"
                                                    role="presentation"><b
                                                        role="presentation"></b></span></span></span><span
                                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed"
                                bis_skin_checked="1">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center" bis_skin_checked="1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle" bis_skin_checked="1">
                                        <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                            M </span>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5" bis_skin_checked="1">
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody
                                            Macy</a>

                                        <div class="fw-semibold text-muted" bis_skin_checked="1">melody@altbox.com
                                        </div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px" bis_skin_checked="1">
                                    <select
                                        class="form-select form-select-solid form-select-sm select2-hidden-accessible"
                                        data-control="select2" data-dropdown-parent="#kt_modal_invite_friends"
                                        data-hide-search="true" data-select2-id="select2-data-69-ncbf" tabindex="-1"
                                        aria-hidden="true" data-kt-initialized="1">
                                        <option value="1" selected="" data-select2-id="select2-data-71-448i">
                                            Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select><span class="select2 select2-container select2-container--bootstrap5"
                                        dir="ltr" data-select2-id="select2-data-70-joow"
                                        style="width: 100%;"><span class="selection"><span
                                                class="select2-selection select2-selection--single form-select form-select-solid form-select-sm"
                                                role="combobox" aria-haspopup="true" aria-expanded="false"
                                                tabindex="0" aria-disabled="false"
                                                aria-labelledby="select2-w47s-container"
                                                aria-controls="select2-w47s-container"><span
                                                    class="select2-selection__rendered" id="select2-w47s-container"
                                                    role="textbox" aria-readonly="true"
                                                    title="Guest">Guest</span><span class="select2-selection__arrow"
                                                    role="presentation"><b
                                                        role="presentation"></b></span></span></span><span
                                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed"
                                bis_skin_checked="1">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center" bis_skin_checked="1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle" bis_skin_checked="1">
                                        <img alt="Pic"
                                            src="{{ asset('theme/assets/media/avatars/300-1.jpg') }}">
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5" bis_skin_checked="1">
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>

                                        <div class="fw-semibold text-muted" bis_skin_checked="1">max@kt.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px" bis_skin_checked="1">
                                    <select
                                        class="form-select form-select-solid form-select-sm select2-hidden-accessible"
                                        data-control="select2" data-dropdown-parent="#kt_modal_invite_friends"
                                        data-hide-search="true" data-select2-id="select2-data-72-bfhn" tabindex="-1"
                                        aria-hidden="true" data-kt-initialized="1">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected="" data-select2-id="select2-data-74-e4y6">
                                            Can Edit</option>
                                    </select><span class="select2 select2-container select2-container--bootstrap5"
                                        dir="ltr" data-select2-id="select2-data-73-lc6u"
                                        style="width: 100%;"><span class="selection"><span
                                                class="select2-selection select2-selection--single form-select form-select-solid form-select-sm"
                                                role="combobox" aria-haspopup="true" aria-expanded="false"
                                                tabindex="0" aria-disabled="false"
                                                aria-labelledby="select2-0lea-container"
                                                aria-controls="select2-0lea-container"><span
                                                    class="select2-selection__rendered" id="select2-0lea-container"
                                                    role="textbox" aria-readonly="true" title="Can Edit">Can
                                                    Edit</span><span class="select2-selection__arrow"
                                                    role="presentation"><b
                                                        role="presentation"></b></span></span></span><span
                                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed"
                                bis_skin_checked="1">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center" bis_skin_checked="1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle" bis_skin_checked="1">
                                        <img alt="Pic"
                                            src="{{ asset('theme/assets/media/avatars/300-5.jpg') }}">
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5" bis_skin_checked="1">
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>

                                        <div class="fw-semibold text-muted" bis_skin_checked="1">sean@dellito.com
                                        </div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px" bis_skin_checked="1">
                                    <select
                                        class="form-select form-select-solid form-select-sm select2-hidden-accessible"
                                        data-control="select2" data-dropdown-parent="#kt_modal_invite_friends"
                                        data-hide-search="true" data-select2-id="select2-data-75-lfsm" tabindex="-1"
                                        aria-hidden="true" data-kt-initialized="1">
                                        <option value="1">Guest</option>
                                        <option value="2" selected="" data-select2-id="select2-data-77-7sp1">
                                            Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select><span class="select2 select2-container select2-container--bootstrap5"
                                        dir="ltr" data-select2-id="select2-data-76-kxh4"
                                        style="width: 100%;"><span class="selection"><span
                                                class="select2-selection select2-selection--single form-select form-select-solid form-select-sm"
                                                role="combobox" aria-haspopup="true" aria-expanded="false"
                                                tabindex="0" aria-disabled="false"
                                                aria-labelledby="select2-lc24-container"
                                                aria-controls="select2-lc24-container"><span
                                                    class="select2-selection__rendered" id="select2-lc24-container"
                                                    role="textbox" aria-readonly="true"
                                                    title="Owner">Owner</span><span class="select2-selection__arrow"
                                                    role="presentation"><b
                                                        role="presentation"></b></span></span></span><span
                                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed"
                                bis_skin_checked="1">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center" bis_skin_checked="1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle" bis_skin_checked="1">
                                        <img alt="Pic"
                                            src="{{ asset('theme/assets/media/avatars/300-25.jpg') }}">
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5" bis_skin_checked="1">
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian Cox</a>

                                        <div class="fw-semibold text-muted" bis_skin_checked="1">
                                            brian@exchange.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px" bis_skin_checked="1">
                                    <select
                                        class="form-select form-select-solid form-select-sm select2-hidden-accessible"
                                        data-control="select2" data-dropdown-parent="#kt_modal_invite_friends"
                                        data-hide-search="true" data-select2-id="select2-data-78-p0dk" tabindex="-1"
                                        aria-hidden="true" data-kt-initialized="1">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected="" data-select2-id="select2-data-80-7gzl">
                                            Can Edit</option>
                                    </select><span class="select2 select2-container select2-container--bootstrap5"
                                        dir="ltr" data-select2-id="select2-data-79-m9uv"
                                        style="width: 100%;"><span class="selection"><span
                                                class="select2-selection select2-selection--single form-select form-select-solid form-select-sm"
                                                role="combobox" aria-haspopup="true" aria-expanded="false"
                                                tabindex="0" aria-disabled="false"
                                                aria-labelledby="select2-joed-container"
                                                aria-controls="select2-joed-container"><span
                                                    class="select2-selection__rendered" id="select2-joed-container"
                                                    role="textbox" aria-readonly="true" title="Can Edit">Can
                                                    Edit</span><span class="select2-selection__arrow"
                                                    role="presentation"><b
                                                        role="presentation"></b></span></span></span><span
                                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed"
                                bis_skin_checked="1">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center" bis_skin_checked="1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle" bis_skin_checked="1">
                                        <span class="symbol-label bg-light-warning text-warning fw-semibold">
                                            C </span>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5" bis_skin_checked="1">
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela
                                            Collins</a>

                                        <div class="fw-semibold text-muted" bis_skin_checked="1">mik@pex.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px" bis_skin_checked="1">
                                    <select
                                        class="form-select form-select-solid form-select-sm select2-hidden-accessible"
                                        data-control="select2" data-dropdown-parent="#kt_modal_invite_friends"
                                        data-hide-search="true" data-select2-id="select2-data-81-ba0x" tabindex="-1"
                                        aria-hidden="true" data-kt-initialized="1">
                                        <option value="1">Guest</option>
                                        <option value="2" selected="" data-select2-id="select2-data-83-cd2s">
                                            Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select><span class="select2 select2-container select2-container--bootstrap5"
                                        dir="ltr" data-select2-id="select2-data-82-mthk"
                                        style="width: 100%;"><span class="selection"><span
                                                class="select2-selection select2-selection--single form-select form-select-solid form-select-sm"
                                                role="combobox" aria-haspopup="true" aria-expanded="false"
                                                tabindex="0" aria-disabled="false"
                                                aria-labelledby="select2-p4va-container"
                                                aria-controls="select2-p4va-container"><span
                                                    class="select2-selection__rendered" id="select2-p4va-container"
                                                    role="textbox" aria-readonly="true"
                                                    title="Owner">Owner</span><span class="select2-selection__arrow"
                                                    role="presentation"><b
                                                        role="presentation"></b></span></span></span><span
                                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed"
                                bis_skin_checked="1">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center" bis_skin_checked="1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle" bis_skin_checked="1">
                                        <img alt="Pic"
                                            src="{{ asset('theme/assets/media/avatars/300-9.jpg') }}">
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5" bis_skin_checked="1">
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis
                                            Mitcham</a>

                                        <div class="fw-semibold text-muted" bis_skin_checked="1">f.mit@kpmg.com
                                        </div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px" bis_skin_checked="1">
                                    <select
                                        class="form-select form-select-solid form-select-sm select2-hidden-accessible"
                                        data-control="select2" data-dropdown-parent="#kt_modal_invite_friends"
                                        data-hide-search="true" data-select2-id="select2-data-84-a90r" tabindex="-1"
                                        aria-hidden="true" data-kt-initialized="1">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected="" data-select2-id="select2-data-86-p44d">
                                            Can Edit</option>
                                    </select><span class="select2 select2-container select2-container--bootstrap5"
                                        dir="ltr" data-select2-id="select2-data-85-1jdr"
                                        style="width: 100%;"><span class="selection"><span
                                                class="select2-selection select2-selection--single form-select form-select-solid form-select-sm"
                                                role="combobox" aria-haspopup="true" aria-expanded="false"
                                                tabindex="0" aria-disabled="false"
                                                aria-labelledby="select2-azs4-container"
                                                aria-controls="select2-azs4-container"><span
                                                    class="select2-selection__rendered" id="select2-azs4-container"
                                                    role="textbox" aria-readonly="true" title="Can Edit">Can
                                                    Edit</span><span class="select2-selection__arrow"
                                                    role="presentation"><b
                                                        role="presentation"></b></span></span></span><span
                                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed"
                                bis_skin_checked="1">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center" bis_skin_checked="1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle" bis_skin_checked="1">
                                        <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                            O </span>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5" bis_skin_checked="1">
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia
                                            Wild</a>

                                        <div class="fw-semibold text-muted" bis_skin_checked="1">
                                            olivia@corpmail.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px" bis_skin_checked="1">
                                    <select
                                        class="form-select form-select-solid form-select-sm select2-hidden-accessible"
                                        data-control="select2" data-dropdown-parent="#kt_modal_invite_friends"
                                        data-hide-search="true" data-select2-id="select2-data-87-w13e" tabindex="-1"
                                        aria-hidden="true" data-kt-initialized="1">
                                        <option value="1">Guest</option>
                                        <option value="2" selected="" data-select2-id="select2-data-89-ovfo">
                                            Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select><span class="select2 select2-container select2-container--bootstrap5"
                                        dir="ltr" data-select2-id="select2-data-88-ajvx"
                                        style="width: 100%;"><span class="selection"><span
                                                class="select2-selection select2-selection--single form-select form-select-solid form-select-sm"
                                                role="combobox" aria-haspopup="true" aria-expanded="false"
                                                tabindex="0" aria-disabled="false"
                                                aria-labelledby="select2-5mt8-container"
                                                aria-controls="select2-5mt8-container"><span
                                                    class="select2-selection__rendered" id="select2-5mt8-container"
                                                    role="textbox" aria-readonly="true"
                                                    title="Owner">Owner</span><span class="select2-selection__arrow"
                                                    role="presentation"><b
                                                        role="presentation"></b></span></span></span><span
                                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed"
                                bis_skin_checked="1">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center" bis_skin_checked="1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle" bis_skin_checked="1">
                                        <span class="symbol-label bg-light-primary text-primary fw-semibold">
                                            N </span>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5" bis_skin_checked="1">
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil Owen</a>

                                        <div class="fw-semibold text-muted" bis_skin_checked="1">
                                            owen.neil@gmail.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px" bis_skin_checked="1">
                                    <select
                                        class="form-select form-select-solid form-select-sm select2-hidden-accessible"
                                        data-control="select2" data-dropdown-parent="#kt_modal_invite_friends"
                                        data-hide-search="true" data-select2-id="select2-data-90-w9j0" tabindex="-1"
                                        aria-hidden="true" data-kt-initialized="1">
                                        <option value="1" selected="" data-select2-id="select2-data-92-8eyr">
                                            Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select><span class="select2 select2-container select2-container--bootstrap5"
                                        dir="ltr" data-select2-id="select2-data-91-o5vz"
                                        style="width: 100%;"><span class="selection"><span
                                                class="select2-selection select2-selection--single form-select form-select-solid form-select-sm"
                                                role="combobox" aria-haspopup="true" aria-expanded="false"
                                                tabindex="0" aria-disabled="false"
                                                aria-labelledby="select2-th1s-container"
                                                aria-controls="select2-th1s-container"><span
                                                    class="select2-selection__rendered" id="select2-th1s-container"
                                                    role="textbox" aria-readonly="true"
                                                    title="Guest">Guest</span><span class="select2-selection__arrow"
                                                    role="presentation"><b
                                                        role="presentation"></b></span></span></span><span
                                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed"
                                bis_skin_checked="1">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center" bis_skin_checked="1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle" bis_skin_checked="1">
                                        <img alt="Pic"
                                            src="{{ asset('theme/assets/media/avatars/300-23.jpg') }}">
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5" bis_skin_checked="1">
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan Wilson</a>

                                        <div class="fw-semibold text-muted" bis_skin_checked="1">
                                            dam@consilting.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px" bis_skin_checked="1">
                                    <select
                                        class="form-select form-select-solid form-select-sm select2-hidden-accessible"
                                        data-control="select2" data-dropdown-parent="#kt_modal_invite_friends"
                                        data-hide-search="true" data-select2-id="select2-data-93-5ac5" tabindex="-1"
                                        aria-hidden="true" data-kt-initialized="1">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected="" data-select2-id="select2-data-95-7xx4">
                                            Can Edit</option>
                                    </select><span class="select2 select2-container select2-container--bootstrap5"
                                        dir="ltr" data-select2-id="select2-data-94-lv6d"
                                        style="width: 100%;"><span class="selection"><span
                                                class="select2-selection select2-selection--single form-select form-select-solid form-select-sm"
                                                role="combobox" aria-haspopup="true" aria-expanded="false"
                                                tabindex="0" aria-disabled="false"
                                                aria-labelledby="select2-exad-container"
                                                aria-controls="select2-exad-container"><span
                                                    class="select2-selection__rendered" id="select2-exad-container"
                                                    role="textbox" aria-readonly="true" title="Can Edit">Can
                                                    Edit</span><span class="select2-selection__arrow"
                                                    role="presentation"><b
                                                        role="presentation"></b></span></span></span><span
                                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed"
                                bis_skin_checked="1">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center" bis_skin_checked="1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle" bis_skin_checked="1">
                                        <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                            E </span>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5" bis_skin_checked="1">
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Bold</a>

                                        <div class="fw-semibold text-muted" bis_skin_checked="1">emma@intenso.com
                                        </div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px" bis_skin_checked="1">
                                    <select
                                        class="form-select form-select-solid form-select-sm select2-hidden-accessible"
                                        data-control="select2" data-dropdown-parent="#kt_modal_invite_friends"
                                        data-hide-search="true" data-select2-id="select2-data-96-z9ri"
                                        tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                                        <option value="1">Guest</option>
                                        <option value="2" selected=""
                                            data-select2-id="select2-data-98-426l">Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select><span class="select2 select2-container select2-container--bootstrap5"
                                        dir="ltr" data-select2-id="select2-data-97-08xm"
                                        style="width: 100%;"><span class="selection"><span
                                                class="select2-selection select2-selection--single form-select form-select-solid form-select-sm"
                                                role="combobox" aria-haspopup="true" aria-expanded="false"
                                                tabindex="0" aria-disabled="false"
                                                aria-labelledby="select2-4f6f-container"
                                                aria-controls="select2-4f6f-container"><span
                                                    class="select2-selection__rendered" id="select2-4f6f-container"
                                                    role="textbox" aria-readonly="true"
                                                    title="Owner">Owner</span><span
                                                    class="select2-selection__arrow" role="presentation"><b
                                                        role="presentation"></b></span></span></span><span
                                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed"
                                bis_skin_checked="1">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center" bis_skin_checked="1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle" bis_skin_checked="1">
                                        <img alt="Pic"
                                            src="{{ asset('theme/assets/media/avatars/300-12.jpg') }}">
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5" bis_skin_checked="1">
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana Crown</a>

                                        <div class="fw-semibold text-muted" bis_skin_checked="1">ana.cf@limtel.com
                                        </div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px" bis_skin_checked="1">
                                    <select
                                        class="form-select form-select-solid form-select-sm select2-hidden-accessible"
                                        data-control="select2" data-dropdown-parent="#kt_modal_invite_friends"
                                        data-hide-search="true" data-select2-id="select2-data-99-9e19"
                                        tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                                        <option value="1" selected=""
                                            data-select2-id="select2-data-101-96hk">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select><span class="select2 select2-container select2-container--bootstrap5"
                                        dir="ltr" data-select2-id="select2-data-100-es6x"
                                        style="width: 100%;"><span class="selection"><span
                                                class="select2-selection select2-selection--single form-select form-select-solid form-select-sm"
                                                role="combobox" aria-haspopup="true" aria-expanded="false"
                                                tabindex="0" aria-disabled="false"
                                                aria-labelledby="select2-pgmk-container"
                                                aria-controls="select2-pgmk-container"><span
                                                    class="select2-selection__rendered" id="select2-pgmk-container"
                                                    role="textbox" aria-readonly="true"
                                                    title="Guest">Guest</span><span
                                                    class="select2-selection__arrow" role="presentation"><b
                                                        role="presentation"></b></span></span></span><span
                                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed"
                                bis_skin_checked="1">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center" bis_skin_checked="1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle" bis_skin_checked="1">
                                        <span class="symbol-label bg-light-info text-info fw-semibold">
                                            A </span>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5" bis_skin_checked="1">
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert Doe</a>

                                        <div class="fw-semibold text-muted" bis_skin_checked="1">robert@benko.com
                                        </div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px" bis_skin_checked="1">
                                    <select
                                        class="form-select form-select-solid form-select-sm select2-hidden-accessible"
                                        data-control="select2" data-dropdown-parent="#kt_modal_invite_friends"
                                        data-hide-search="true" data-select2-id="select2-data-102-ku4w"
                                        tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected=""
                                            data-select2-id="select2-data-104-oe2q">Can Edit</option>
                                    </select><span class="select2 select2-container select2-container--bootstrap5"
                                        dir="ltr" data-select2-id="select2-data-103-sgvy"
                                        style="width: 100%;"><span class="selection"><span
                                                class="select2-selection select2-selection--single form-select form-select-solid form-select-sm"
                                                role="combobox" aria-haspopup="true" aria-expanded="false"
                                                tabindex="0" aria-disabled="false"
                                                aria-labelledby="select2-ber8-container"
                                                aria-controls="select2-ber8-container"><span
                                                    class="select2-selection__rendered" id="select2-ber8-container"
                                                    role="textbox" aria-readonly="true" title="Can Edit">Can
                                                    Edit</span><span class="select2-selection__arrow"
                                                    role="presentation"><b
                                                        role="presentation"></b></span></span></span><span
                                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed"
                                bis_skin_checked="1">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center" bis_skin_checked="1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle" bis_skin_checked="1">
                                        <img alt="Pic"
                                            src="{{ asset('theme/assets/media/avatars/300-13.jpg') }}">
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5" bis_skin_checked="1">
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John
                                            Miller</a>

                                        <div class="fw-semibold text-muted" bis_skin_checked="1">miller@mapple.com
                                        </div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px" bis_skin_checked="1">
                                    <select
                                        class="form-select form-select-solid form-select-sm select2-hidden-accessible"
                                        data-control="select2" data-dropdown-parent="#kt_modal_invite_friends"
                                        data-hide-search="true" data-select2-id="select2-data-105-gan0"
                                        tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected=""
                                            data-select2-id="select2-data-107-95bi">Can Edit</option>
                                    </select><span class="select2 select2-container select2-container--bootstrap5"
                                        dir="ltr" data-select2-id="select2-data-106-chc8"
                                        style="width: 100%;"><span class="selection"><span
                                                class="select2-selection select2-selection--single form-select form-select-solid form-select-sm"
                                                role="combobox" aria-haspopup="true" aria-expanded="false"
                                                tabindex="0" aria-disabled="false"
                                                aria-labelledby="select2-3vtj-container"
                                                aria-controls="select2-3vtj-container"><span
                                                    class="select2-selection__rendered" id="select2-3vtj-container"
                                                    role="textbox" aria-readonly="true" title="Can Edit">Can
                                                    Edit</span><span class="select2-selection__arrow"
                                                    role="presentation"><b
                                                        role="presentation"></b></span></span></span><span
                                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed"
                                bis_skin_checked="1">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center" bis_skin_checked="1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle" bis_skin_checked="1">
                                        <span class="symbol-label bg-light-success text-success fw-semibold">
                                            L </span>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5" bis_skin_checked="1">
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>

                                        <div class="fw-semibold text-muted" bis_skin_checked="1">
                                            lucy.m@fentech.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px" bis_skin_checked="1">
                                    <select
                                        class="form-select form-select-solid form-select-sm select2-hidden-accessible"
                                        data-control="select2" data-dropdown-parent="#kt_modal_invite_friends"
                                        data-hide-search="true" data-select2-id="select2-data-108-j67m"
                                        tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                                        <option value="1">Guest</option>
                                        <option value="2" selected=""
                                            data-select2-id="select2-data-110-bvzs">Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select><span class="select2 select2-container select2-container--bootstrap5"
                                        dir="ltr" data-select2-id="select2-data-109-b39h"
                                        style="width: 100%;"><span class="selection"><span
                                                class="select2-selection select2-selection--single form-select form-select-solid form-select-sm"
                                                role="combobox" aria-haspopup="true" aria-expanded="false"
                                                tabindex="0" aria-disabled="false"
                                                aria-labelledby="select2-l4q8-container"
                                                aria-controls="select2-l4q8-container"><span
                                                    class="select2-selection__rendered" id="select2-l4q8-container"
                                                    role="textbox" aria-readonly="true"
                                                    title="Owner">Owner</span><span
                                                    class="select2-selection__arrow" role="presentation"><b
                                                        role="presentation"></b></span></span></span><span
                                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed"
                                bis_skin_checked="1">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center" bis_skin_checked="1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle" bis_skin_checked="1">
                                        <img alt="Pic"
                                            src="{{ asset('theme/assets/media/avatars/300-21.jpg') }}">
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5" bis_skin_checked="1">
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan
                                            Wilder</a>

                                        <div class="fw-semibold text-muted" bis_skin_checked="1">ethan@loop.com.au
                                        </div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px" bis_skin_checked="1">
                                    <select
                                        class="form-select form-select-solid form-select-sm select2-hidden-accessible"
                                        data-control="select2" data-dropdown-parent="#kt_modal_invite_friends"
                                        data-hide-search="true" data-select2-id="select2-data-111-tqvr"
                                        tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                                        <option value="1" selected=""
                                            data-select2-id="select2-data-113-q5ea">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select><span class="select2 select2-container select2-container--bootstrap5"
                                        dir="ltr" data-select2-id="select2-data-112-sl8y"
                                        style="width: 100%;"><span class="selection"><span
                                                class="select2-selection select2-selection--single form-select form-select-solid form-select-sm"
                                                role="combobox" aria-haspopup="true" aria-expanded="false"
                                                tabindex="0" aria-disabled="false"
                                                aria-labelledby="select2-g2o3-container"
                                                aria-controls="select2-g2o3-container"><span
                                                    class="select2-selection__rendered" id="select2-g2o3-container"
                                                    role="textbox" aria-readonly="true"
                                                    title="Guest">Guest</span><span
                                                    class="select2-selection__arrow" role="presentation"><b
                                                        role="presentation"></b></span></span></span><span
                                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 " bis_skin_checked="1">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center" bis_skin_checked="1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle" bis_skin_checked="1">
                                        <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                            O </span>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5" bis_skin_checked="1">
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia
                                            Wild</a>

                                        <div class="fw-semibold text-muted" bis_skin_checked="1">
                                            olivia@corpmail.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px" bis_skin_checked="1">
                                    <select
                                        class="form-select form-select-solid form-select-sm select2-hidden-accessible"
                                        data-control="select2" data-dropdown-parent="#kt_modal_invite_friends"
                                        data-hide-search="true" data-select2-id="select2-data-114-yei2"
                                        tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected=""
                                            data-select2-id="select2-data-116-a7vt">Can Edit</option>
                                    </select><span class="select2 select2-container select2-container--bootstrap5"
                                        dir="ltr" data-select2-id="select2-data-115-cu2i"
                                        style="width: 100%;"><span class="selection"><span
                                                class="select2-selection select2-selection--single form-select form-select-solid form-select-sm"
                                                role="combobox" aria-haspopup="true" aria-expanded="false"
                                                tabindex="0" aria-disabled="false"
                                                aria-labelledby="select2-qw7j-container"
                                                aria-controls="select2-qw7j-container"><span
                                                    class="select2-selection__rendered" id="select2-qw7j-container"
                                                    role="textbox" aria-readonly="true" title="Can Edit">Can
                                                    Edit</span><span class="select2-selection__arrow"
                                                    role="presentation"><b
                                                        role="presentation"></b></span></span></span><span
                                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                        </div>
                        <!--end::List-->
                    </div>
                    <!--end::Users-->

                    <!--begin::Notice-->
                    <div class="d-flex flex-stack" bis_skin_checked="1">
                        <!--begin::Label-->
                        <div class="me-5 fw-semibold" bis_skin_checked="1">
                            <label class="fs-6">Adding Users by Team Members</label>
                            <div class="fs-7 text-muted" bis_skin_checked="1">If you need more info, please check
                                budget planning</div>
                        </div>
                        <!--end::Label-->

                        <!--begin::Switch-->
                        <label class="form-check form-switch form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" checked="checked">

                            <span class="form-check-label fw-semibold text-muted">
                                Allowed
                            </span>
                        </label>
                        <!--end::Switch-->
                    </div>
                    <!--end::Notice-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Invite Friend--> <!--end::Modals-->

    <!--begin::Javascript-->

    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="{{ asset('theme/assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('theme/assets/js/scripts.bundle.js') }}"></script>
    <!--end::Global Javascript Bundle-->

    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="{{ asset('theme/assets/plugins/custom/fslightbox/fslightbox.bundle.js') }}"></script>
    <script src="{{ asset('theme/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <!--end::Vendors Javascript-->

    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{ asset('theme/assets/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('theme/assets/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('theme/assets/js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ asset('theme/assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
    <script src="{{ asset('theme/assets/js/custom/utilities/modals/create-app.js') }}"></script>
    <script src="{{ asset('theme/assets/js/custom/utilities/modals/users-search.js') }}"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->


    <svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1"
        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
        style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
        <defs id="SvgjsDefs1002"></defs>
        <polyline id="SvgjsPolyline1003" points="0,0"></polyline>
        <path id="SvgjsPath1004" d="M0 0 "></path>
    </svg>

</body><!--end::Body-->

</html>
