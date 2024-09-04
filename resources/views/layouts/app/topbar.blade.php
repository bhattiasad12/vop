<div id="kt_app_header" class="app-header " data-kt-sticky="true" data-kt-sticky-activate="{default: true, lg: true}"
    data-kt-sticky-name="app-header-minimize" data-kt-sticky-offset="{default: '200px', lg: '0'}"
    data-kt-sticky-animation="false" bis_skin_checked="1" style="">

    <!--begin::Header container-->
    <div class="app-container  container-xxl d-flex align-items-stretch justify-content-between "
        id="kt_app_header_container" bis_skin_checked="1">



        <!--begin::Logo-->
        <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0 me-lg-15" bis_skin_checked="1">
            <a href="{{ route('welcome') }}">
                {{-- <img alt="Logo" src="{{ asset('theme/assets/media/logos/default.svg') }}"
                    class="h-20px h-lg-30px app-sidebar-logo-default theme-light-show">
                <img alt="Logo" src="{{ asset('theme/assets/media/logos/default-dark.svg') }}"
                    class="h-20px h-lg-30px app-sidebar-logo-default theme-dark-show"> --}}
                <div style="text-align: center;">
                    <h1 style="color:green; border-bottom: 3px green solid;">
                        {{ __('messages.vop', [], app()->getLocale()) }}</h1>
                    <h6 style="color:green;">{{ __('messages.voice_of_pakistan', [], app()->getLocale()) }}</h6>
                </div>
            </a>
        </div>
        <!--end::Logo-->

        <!--begin::Header wrapper-->
        <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper"
            bis_skin_checked="1">

            <!--begin::Menu wrapper-->
            <div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true"
                data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}"
                data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="end"
                data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true"
                data-kt-swapper-mode="{default: 'append', lg: 'prepend'}"
                data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}" bis_skin_checked="1">
                <!--begin::Menu-->
                <div class="
menu 
menu-rounded  
menu-column 
menu-lg-row 
my-5 
my-lg-0 
align-items-stretch 
fw-semibold
px-2 px-lg-0
"
                    id="kt_app_header_menu" data-kt-menu="true" bis_skin_checked="1">

                    <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"
                        class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2"
                        bis_skin_checked="1"><!--begin:Menu link--><span class="menu-link"><span
                                class="menu-title">Apps</span><span
                                class="menu-arrow d-lg-none"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                        <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-250px"
                            bis_skin_checked="1" style=""><!--begin:Menu item-->
                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion"
                                bis_skin_checked="1">
                                <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i
                                            class="ki-duotone ki-rocket fs-2"><span class="path1"></span><span
                                                class="path2"></span></i></span><span
                                        class="menu-title">Projects</span><span
                                        class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px"
                                    bis_skin_checked="1"><!--begin:Menu item-->
                                    <div class="menu-item" bis_skin_checked="1"><!--begin:Menu link--><a
                                            class="menu-link" href="/metronic8/demo1/apps/projects/list.html"><span
                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                                class="menu-title">My
                                                Projects</span></a><!--end:Menu link--></div>
                                    <!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item" bis_skin_checked="1"><!--begin:Menu link--><a
                                            class="menu-link" href="/metronic8/demo1/apps/projects/project.html"><span
                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                                class="menu-title">View
                                                Project</span></a><!--end:Menu link--></div>
                                    <!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item" bis_skin_checked="1"><!--begin:Menu link--><a
                                            class="menu-link" href="/metronic8/demo1/apps/projects/targets.html"><span
                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Targets</span></a><!--end:Menu link-->
                                    </div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item" bis_skin_checked="1"><!--begin:Menu link--><a
                                            class="menu-link" href="/metronic8/demo1/apps/projects/budget.html"><span
                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Budget</span></a><!--end:Menu link-->
                                    </div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item" bis_skin_checked="1"><!--begin:Menu link--><a
                                            class="menu-link" href="/metronic8/demo1/apps/projects/users.html"><span
                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Users</span></a><!--end:Menu link-->
                                    </div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item" bis_skin_checked="1"><!--begin:Menu link--><a
                                            class="menu-link" href="/metronic8/demo1/apps/projects/files.html"><span
                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Files</span></a><!--end:Menu link-->
                                    </div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item" bis_skin_checked="1"><!--begin:Menu link--><a
                                            class="menu-link"
                                            href="/metronic8/demo1/apps/projects/activity.html"><span
                                                class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Activity</span></a><!--end:Menu link-->
                                    </div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item" bis_skin_checked="1"><!--begin:Menu link--><a
                                            class="menu-link"
                                            href="/metronic8/demo1/apps/projects/settings.html"><span
                                                class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Settings</span></a><!--end:Menu link-->
                                    </div><!--end:Menu item-->
                                </div><!--end:Menu sub-->
                            </div><!--end:Menu item--><!--begin:Menu item-->
                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion"
                                bis_skin_checked="1">
                                <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i
                                            class="ki-duotone ki-handcart fs-2"></i></span><span
                                        class="menu-title">eCommerce</span><span
                                        class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px"
                                    bis_skin_checked="1"><!--begin:Menu item-->
                                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                        data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion"
                                        bis_skin_checked="1">
                                        <!--begin:Menu link--><span class="menu-link"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Catalog</span><span
                                                class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px"
                                            bis_skin_checked="1"><!--begin:Menu item-->
                                            <div class="menu-item" bis_skin_checked="1">
                                                <!--begin:Menu link--><a class="menu-link"
                                                    href="/metronic8/demo1/apps/ecommerce/catalog/products.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Products</span></a><!--end:Menu link-->
                                            </div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item" bis_skin_checked="1">
                                                <!--begin:Menu link--><a class="menu-link"
                                                    href="/metronic8/demo1/apps/ecommerce/catalog/categories.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Categories</span></a><!--end:Menu link-->
                                            </div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item" bis_skin_checked="1">
                                                <!--begin:Menu link--><a class="menu-link"
                                                    href="/metronic8/demo1/apps/ecommerce/catalog/add-product.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Add
                                                        Product</span></a><!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item" bis_skin_checked="1">
                                                <!--begin:Menu link--><a class="menu-link"
                                                    href="/metronic8/demo1/apps/ecommerce/catalog/edit-product.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Edit
                                                        Product</span></a><!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item" bis_skin_checked="1">
                                                <!--begin:Menu link--><a class="menu-link"
                                                    href="/metronic8/demo1/apps/ecommerce/catalog/add-category.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Add
                                                        Category</span></a><!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item" bis_skin_checked="1">
                                                <!--begin:Menu link--><a class="menu-link"
                                                    href="/metronic8/demo1/apps/ecommerce/catalog/edit-category.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Edit
                                                        Category</span></a><!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                        </div><!--end:Menu sub-->
                                    </div><!--end:Menu item--><!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click"
                                        class="menu-item menu-accordion menu-sub-indention" bis_skin_checked="1">
                                        <!--begin:Menu link--><span class="menu-link"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Sales</span><span
                                                class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion" bis_skin_checked="1">
                                            <!--begin:Menu item-->
                                            <div class="menu-item" bis_skin_checked="1">
                                                <!--begin:Menu link--><a class="menu-link"
                                                    href="/metronic8/demo1/apps/ecommerce/sales/listing.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Orders
                                                        Listing</span></a><!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item" bis_skin_checked="1">
                                                <!--begin:Menu link--><a class="menu-link"
                                                    href="/metronic8/demo1/apps/ecommerce/sales/details.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Order
                                                        Details</span></a><!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item" bis_skin_checked="1">
                                                <!--begin:Menu link--><a class="menu-link"
                                                    href="/metronic8/demo1/apps/ecommerce/sales/add-order.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Add
                                                        Order</span></a><!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item" bis_skin_checked="1">
                                                <!--begin:Menu link--><a class="menu-link"
                                                    href="/metronic8/demo1/apps/ecommerce/sales/edit-order.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Edit
                                                        Order</span></a><!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                        </div><!--end:Menu sub-->
                                    </div><!--end:Menu item--><!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click"
                                        class="menu-item menu-accordion menu-sub-indention" bis_skin_checked="1">
                                        <!--begin:Menu link--><span class="menu-link"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Customers</span><span
                                                class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion" bis_skin_checked="1">
                                            <!--begin:Menu item-->
                                            <div class="menu-item" bis_skin_checked="1">
                                                <!--begin:Menu link--><a class="menu-link"
                                                    href="/metronic8/demo1/apps/ecommerce/customers/listing.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Customers
                                                        Listing</span></a><!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item" bis_skin_checked="1">
                                                <!--begin:Menu link--><a class="menu-link"
                                                    href="/metronic8/demo1/apps/ecommerce/customers/details.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Customers
                                                        Details</span></a><!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                        </div><!--end:Menu sub-->
                                    </div><!--end:Menu item--><!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click"
                                        class="menu-item menu-accordion menu-sub-indention" bis_skin_checked="1">
                                        <!--begin:Menu link--><span class="menu-link"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Reports</span><span
                                                class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion" bis_skin_checked="1">
                                            <!--begin:Menu item-->
                                            <div class="menu-item" bis_skin_checked="1">
                                                <!--begin:Menu link--><a class="menu-link"
                                                    href="/metronic8/demo1/apps/ecommerce/reports/view.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Products
                                                        Viewed</span></a><!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item" bis_skin_checked="1">
                                                <!--begin:Menu link--><a class="menu-link"
                                                    href="/metronic8/demo1/apps/ecommerce/reports/sales.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Sales</span></a><!--end:Menu link-->
                                            </div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item" bis_skin_checked="1">
                                                <!--begin:Menu link--><a class="menu-link"
                                                    href="/metronic8/demo1/apps/ecommerce/reports/returns.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Returns</span></a><!--end:Menu link-->
                                            </div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item" bis_skin_checked="1">
                                                <!--begin:Menu link--><a class="menu-link"
                                                    href="/metronic8/demo1/apps/ecommerce/reports/customer-orders.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Customer
                                                        Orders</span></a><!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item" bis_skin_checked="1">
                                                <!--begin:Menu link--><a class="menu-link"
                                                    href="/metronic8/demo1/apps/ecommerce/reports/shipping.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Shipping</span></a><!--end:Menu link-->
                                            </div><!--end:Menu item-->
                                        </div><!--end:Menu sub-->
                                    </div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item" bis_skin_checked="1"><!--begin:Menu link--><a
                                            class="menu-link"
                                            href="/metronic8/demo1/apps/ecommerce/settings.html"><span
                                                class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Settings</span></a><!--end:Menu link-->
                                    </div><!--end:Menu item-->
                                </div><!--end:Menu sub-->
                            </div><!--end:Menu item--><!--begin:Menu item-->
                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion"
                                bis_skin_checked="1">
                                <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i
                                            class="ki-duotone ki-chart fs-2"><span class="path1"></span><span
                                                class="path2"></span></i></span><span class="menu-title">Support
                                        Center</span><span
                                        class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px"
                                    bis_skin_checked="1"><!--begin:Menu item-->
                                    <div class="menu-item" bis_skin_checked="1"><!--begin:Menu link--><a
                                            class="menu-link"
                                            href="/metronic8/demo1/apps/support-center/overview.html"><span
                                                class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Overview</span></a><!--end:Menu link-->
                                    </div><!--end:Menu item--><!--begin:Menu item-->
                                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                        data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion"
                                        bis_skin_checked="1">
                                        <!--begin:Menu link--><span class="menu-link"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Tickets</span><span
                                                class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px"
                                            bis_skin_checked="1"><!--begin:Menu item-->
                                            <div class="menu-item" bis_skin_checked="1">
                                                <!--begin:Menu link--><a class="menu-link"
                                                    href="/metronic8/demo1/apps/support-center/tickets/list.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Ticket
                                                        List</span></a><!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item" bis_skin_checked="1">
                                                <!--begin:Menu link--><a class="menu-link"
                                                    href="/metronic8/demo1/apps/support-center/tickets/view.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Ticket
                                                        View</span></a><!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                        </div><!--end:Menu sub-->
                                    </div><!--end:Menu item--><!--begin:Menu item-->
                                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                        data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion"
                                        bis_skin_checked="1">
                                        <!--begin:Menu link--><span class="menu-link"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Tutorials</span><span
                                                class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px"
                                            bis_skin_checked="1"><!--begin:Menu item-->
                                            <div class="menu-item" bis_skin_checked="1">
                                                <!--begin:Menu link--><a class="menu-link"
                                                    href="/metronic8/demo1/apps/support-center/tutorials/list.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Tutorials
                                                        List</span></a><!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item" bis_skin_checked="1">
                                                <!--begin:Menu link--><a class="menu-link"
                                                    href="/metronic8/demo1/apps/support-center/tutorials/post.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Tutorials
                                                        Post</span></a><!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                        </div><!--end:Menu sub-->
                                    </div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item" bis_skin_checked="1"><!--begin:Menu link--><a
                                            class="menu-link"
                                            href="/metronic8/demo1/apps/support-center/faq.html"><span
                                                class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">FAQ</span></a><!--end:Menu link-->
                                    </div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item" bis_skin_checked="1"><!--begin:Menu link--><a
                                            class="menu-link"
                                            href="/metronic8/demo1/apps/support-center/licenses.html"><span
                                                class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Licenses</span></a><!--end:Menu link-->
                                    </div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item" bis_skin_checked="1"><!--begin:Menu link--><a
                                            class="menu-link"
                                            href="/metronic8/demo1/apps/support-center/contact.html"><span
                                                class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Contact
                                                Us</span></a><!--end:Menu link--></div><!--end:Menu item-->
                                </div><!--end:Menu sub-->
                            </div><!--end:Menu item--><!--begin:Menu item-->
                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion"
                                bis_skin_checked="1">
                                <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i
                                            class="ki-duotone ki-shield-tick fs-2"><span class="path1"></span><span
                                                class="path2"></span></i></span><span class="menu-title">User
                                        Management</span><span
                                        class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px"
                                    bis_skin_checked="1" style=""><!--begin:Menu item-->
                                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                        data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion"
                                        bis_skin_checked="1">
                                        <!--begin:Menu link--><span class="menu-link"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Users</span><span
                                                class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px"
                                            bis_skin_checked="1"><!--begin:Menu item-->
                                            <div class="menu-item" bis_skin_checked="1">
                                                <!--begin:Menu link--><a class="menu-link"
                                                    href="/metronic8/demo1/apps/user-management/users/list.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Users
                                                        List</span></a><!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item" bis_skin_checked="1">
                                                <!--begin:Menu link--><a class="menu-link"
                                                    href="/metronic8/demo1/apps/user-management/users/view.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">View
                                                        User</span></a><!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                        </div><!--end:Menu sub-->
                                    </div><!--end:Menu item--><!--begin:Menu item-->
                                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                        data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion"
                                        bis_skin_checked="1">
                                        <!--begin:Menu link--><span class="menu-link"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Roles</span><span
                                                class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px"
                                            bis_skin_checked="1"><!--begin:Menu item-->
                                            <div class="menu-item" bis_skin_checked="1">
                                                <!--begin:Menu link--><a class="menu-link"
                                                    href="/metronic8/demo1/apps/user-management/roles/list.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Roles
                                                        List</span></a><!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item" bis_skin_checked="1">
                                                <!--begin:Menu link--><a class="menu-link"
                                                    href="/metronic8/demo1/apps/user-management/roles/view.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">View
                                                        Roles</span></a><!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                        </div><!--end:Menu sub-->
                                    </div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item" bis_skin_checked="1"><!--begin:Menu link--><a
                                            class="menu-link"
                                            href="/metronic8/demo1/apps/user-management/permissions.html"><span
                                                class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Permissions</span></a><!--end:Menu link-->
                                    </div><!--end:Menu item-->
                                </div><!--end:Menu sub-->
                            </div><!--end:Menu item--><!--begin:Menu item-->
                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion"
                                bis_skin_checked="1">
                                <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i
                                            class="ki-duotone ki-phone fs-2"><span class="path1"></span><span
                                                class="path2"></span></i></span><span
                                        class="menu-title">Contacts</span><span
                                        class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px"
                                    bis_skin_checked="1" style=""><!--begin:Menu item-->
                                    <div class="menu-item" bis_skin_checked="1"><!--begin:Menu link--><a
                                            class="menu-link"
                                            href="/metronic8/demo1/apps/contacts/getting-started.html"><span
                                                class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Getting
                                                Started</span></a><!--end:Menu link--></div>
                                    <!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item" bis_skin_checked="1"><!--begin:Menu link--><a
                                            class="menu-link"
                                            href="/metronic8/demo1/apps/contacts/add-contact.html"><span
                                                class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Add
                                                Contact</span></a><!--end:Menu link--></div>
                                    <!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item" bis_skin_checked="1"><!--begin:Menu link--><a
                                            class="menu-link"
                                            href="/metronic8/demo1/apps/contacts/edit-contact.html"><span
                                                class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Edit
                                                Contact</span></a><!--end:Menu link--></div>
                                    <!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item" bis_skin_checked="1"><!--begin:Menu link--><a
                                            class="menu-link"
                                            href="/metronic8/demo1/apps/contacts/view-contact.html"><span
                                                class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">View
                                                Contact</span></a><!--end:Menu link--></div>
                                    <!--end:Menu item-->
                                </div><!--end:Menu sub-->
                            </div><!--end:Menu item--><!--begin:Menu item-->
                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion"
                                bis_skin_checked="1">
                                <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i
                                            class="ki-duotone ki-basket fs-2"><span class="path1"></span><span
                                                class="path2"></span><span class="path3"></span><span
                                                class="path4"></span></i></span><span
                                        class="menu-title">Subscriptions</span><span
                                        class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px"
                                    bis_skin_checked="1" style=""><!--begin:Menu item-->
                                    <div class="menu-item" bis_skin_checked="1"><!--begin:Menu link--><a
                                            class="menu-link"
                                            href="/metronic8/demo1/apps/subscriptions/getting-started.html"><span
                                                class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Getting
                                                Started</span></a><!--end:Menu link--></div>
                                    <!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item" bis_skin_checked="1"><!--begin:Menu link--><a
                                            class="menu-link"
                                            href="/metronic8/demo1/apps/subscriptions/list.html"><span
                                                class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Subscription
                                                List</span></a><!--end:Menu link--></div>
                                    <!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item" bis_skin_checked="1"><!--begin:Menu link--><a
                                            class="menu-link"
                                            href="/metronic8/demo1/apps/subscriptions/add.html"><span
                                                class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Add
                                                Subscription</span></a><!--end:Menu link--></div>
                                    <!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item" bis_skin_checked="1"><!--begin:Menu link--><a
                                            class="menu-link"
                                            href="/metronic8/demo1/apps/subscriptions/view.html"><span
                                                class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">View
                                                Subscription</span></a><!--end:Menu link--></div>
                                    <!--end:Menu item-->
                                </div><!--end:Menu sub-->
                            </div><!--end:Menu item--><!--begin:Menu item-->
                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion"
                                bis_skin_checked="1">
                                <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i
                                            class="ki-duotone ki-briefcase fs-2"><span class="path1"></span><span
                                                class="path2"></span></i></span><span
                                        class="menu-title">Customers</span><span
                                        class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px"
                                    bis_skin_checked="1" style=""><!--begin:Menu item-->
                                    <div class="menu-item" bis_skin_checked="1"><!--begin:Menu link--><a
                                            class="menu-link"
                                            href="/metronic8/demo1/apps/customers/getting-started.html"><span
                                                class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Getting
                                                Started</span></a><!--end:Menu link--></div>
                                    <!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item" bis_skin_checked="1"><!--begin:Menu link--><a
                                            class="menu-link" href="/metronic8/demo1/apps/customers/list.html"><span
                                                class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Customer
                                                Listing</span></a><!--end:Menu link--></div>
                                    <!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item" bis_skin_checked="1"><!--begin:Menu link--><a
                                            class="menu-link" href="/metronic8/demo1/apps/customers/view.html"><span
                                                class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Customer
                                                Details</span></a><!--end:Menu link--></div>
                                    <!--end:Menu item-->
                                </div><!--end:Menu sub-->
                            </div><!--end:Menu item--><!--begin:Menu item-->
                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion"
                                bis_skin_checked="1">
                                <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i
                                            class="ki-duotone ki-credit-cart fs-2"><span class="path1"></span><span
                                                class="path2"></span></i></span><span class="menu-title">Invoice
                                        Management</span><span
                                        class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px"
                                    bis_skin_checked="1"><!--begin:Menu item-->
                                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                        data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion"
                                        bis_skin_checked="1">
                                        <!--begin:Menu link--><span class="menu-link"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Profile</span><span
                                                class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px"
                                            bis_skin_checked="1"><!--begin:Menu item-->
                                            <div class="menu-item" bis_skin_checked="1">
                                                <!--begin:Menu link--><a class="menu-link"
                                                    href="/metronic8/demo1/apps/invoices/view/invoice-1.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Invoice
                                                        1</span></a><!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item" bis_skin_checked="1">
                                                <!--begin:Menu link--><a class="menu-link"
                                                    href="/metronic8/demo1/apps/invoices/view/invoice-2.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Invoice
                                                        2</span></a><!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item" bis_skin_checked="1">
                                                <!--begin:Menu link--><a class="menu-link"
                                                    href="/metronic8/demo1/apps/invoices/view/invoice-3.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Invoice
                                                        3</span></a><!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                        </div><!--end:Menu sub-->
                                    </div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item" bis_skin_checked="1"><!--begin:Menu link--><a
                                            class="menu-link" href="/metronic8/demo1/apps/invoices/create.html"><span
                                                class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Create
                                                Invoice</span></a><!--end:Menu link--></div>
                                    <!--end:Menu item-->
                                </div><!--end:Menu sub-->
                            </div><!--end:Menu item--><!--begin:Menu item-->
                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion"
                                bis_skin_checked="1">
                                <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i
                                            class="ki-duotone ki-file-added fs-2"><span class="path1"></span><span
                                                class="path2"></span></i></span><span class="menu-title">File
                                        Manager</span><span
                                        class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px"
                                    bis_skin_checked="1"><!--begin:Menu item-->
                                    <div class="menu-item" bis_skin_checked="1"><!--begin:Menu link--><a
                                            class="menu-link"
                                            href="/metronic8/demo1/apps/file-manager/folders.html"><span
                                                class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Folders</span></a><!--end:Menu link-->
                                    </div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item" bis_skin_checked="1"><!--begin:Menu link--><a
                                            class="menu-link"
                                            href="/metronic8/demo1/apps/file-manager/files.html"><span
                                                class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Files</span></a><!--end:Menu link-->
                                    </div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item" bis_skin_checked="1"><!--begin:Menu link--><a
                                            class="menu-link"
                                            href="/metronic8/demo1/apps/file-manager/blank.html"><span
                                                class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Blank
                                                Directory</span></a><!--end:Menu link--></div>
                                    <!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item" bis_skin_checked="1"><!--begin:Menu link--><a
                                            class="menu-link"
                                            href="/metronic8/demo1/apps/file-manager/settings.html"><span
                                                class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Settings</span></a><!--end:Menu link-->
                                    </div><!--end:Menu item-->
                                </div><!--end:Menu sub-->
                            </div><!--end:Menu item--><!--begin:Menu item-->
                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion"
                                bis_skin_checked="1">
                                <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i
                                            class="ki-duotone ki-sms fs-2"><span class="path1"></span><span
                                                class="path2"></span></i></span><span
                                        class="menu-title">Inbox</span><span
                                        class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px"
                                    bis_skin_checked="1"><!--begin:Menu item-->
                                    <div class="menu-item" bis_skin_checked="1"><!--begin:Menu link--><a
                                            class="menu-link" href="/metronic8/demo1/apps/inbox/listing.html"><span
                                                class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Messages</span><span class="menu-badge"><span
                                                    class="badge badge-light-success">3</span></span></a><!--end:Menu link-->
                                    </div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item" bis_skin_checked="1"><!--begin:Menu link--><a
                                            class="menu-link" href="/metronic8/demo1/apps/inbox/compose.html"><span
                                                class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Compose</span></a><!--end:Menu link-->
                                    </div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item" bis_skin_checked="1"><!--begin:Menu link--><a
                                            class="menu-link" href="/metronic8/demo1/apps/inbox/reply.html"><span
                                                class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">View &amp;
                                                Reply</span></a><!--end:Menu link--></div>
                                    <!--end:Menu item-->
                                </div><!--end:Menu sub-->
                            </div><!--end:Menu item--><!--begin:Menu item-->
                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion"
                                bis_skin_checked="1">
                                <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i
                                            class="ki-duotone ki-message-text-2 fs-2"><span
                                                class="path1"></span><span class="path2"></span><span
                                                class="path3"></span></i></span><span
                                        class="menu-title">Chat</span><span
                                        class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px"
                                    bis_skin_checked="1"><!--begin:Menu item-->
                                    <div class="menu-item" bis_skin_checked="1"><!--begin:Menu link--><a
                                            class="menu-link" href="/metronic8/demo1/apps/chat/private.html"><span
                                                class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Private
                                                Chat</span></a><!--end:Menu link--></div>
                                    <!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item" bis_skin_checked="1"><!--begin:Menu link--><a
                                            class="menu-link" href="/metronic8/demo1/apps/chat/group.html"><span
                                                class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Group
                                                Chat</span></a><!--end:Menu link--></div>
                                    <!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item" bis_skin_checked="1"><!--begin:Menu link--><a
                                            class="menu-link" href="/metronic8/demo1/apps/chat/drawer.html"><span
                                                class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Drawer
                                                Chat</span></a><!--end:Menu link--></div>
                                    <!--end:Menu item-->
                                </div><!--end:Menu sub-->
                            </div><!--end:Menu item--><!--begin:Menu item-->
                            <div class="menu-item" bis_skin_checked="1"><!--begin:Menu link--><a class="menu-link"
                                    href="/metronic8/demo1/apps/calendar.html"><span class="menu-icon"><i
                                            class="ki-duotone ki-calendar-8 fs-2"><span class="path1"></span><span
                                                class="path2"></span><span class="path3"></span><span
                                                class="path4"></span><span class="path5"></span><span
                                                class="path6"></span></i></span><span
                                        class="menu-title">Calendar</span></a><!--end:Menu link--></div>
                            <!--end:Menu item-->
                        </div><!--end:Menu sub-->
                    </div><!--end:Menu item--><!--begin:Menu item-->
                    <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"
                        class="menu-item menu-lg-down-accordion me-0 me-lg-2" bis_skin_checked="1">
                        <!--begin:Menu link--><span class="menu-link"><span class="menu-title">Layouts</span><span
                                class="menu-arrow d-lg-none"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                        <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0 w-100 w-lg-900px w-xxl-950px"
                            bis_skin_checked="1"><!--begin:Dashboards menu-->
                            <div class="menu-active-bg pt-1 pb-3 px-3 py-lg-6 px-lg-6" data-kt-menu-dismiss="true"
                                bis_skin_checked="1">
                                <!--begin:Row-->
                                <div class="row" bis_skin_checked="1">
                                    <!--begin:Col-->
                                    <div class="col-lg-7" bis_skin_checked="1">
                                        <!--begin:Row-->
                                        <div class="row" bis_skin_checked="1">
                                            <!--begin:Col-->
                                            <div class="col-lg-4 mb-3" bis_skin_checked="1">
                                                <!--begin:Heading-->
                                                <h4 class="fs-6 fs-lg-4 text-gray-800 fw-bold mt-3 mb-3 ms-4">
                                                    Layouts</h4>
                                                <!--end:Heading-->

                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0" bis_skin_checked="1">
                                                    <!--begin:Menu link-->
                                                    <a href="/metronic8/demo1/layouts/light-sidebar.html"
                                                        class="menu-link ">
                                                        <span class="menu-bullet"><span
                                                                class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span></span>
                                                        <span class="menu-title">Light Sidebar</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0" bis_skin_checked="1">
                                                    <!--begin:Menu link-->
                                                    <a href="/metronic8/demo1/layouts/dark-sidebar.html"
                                                        class="menu-link ">
                                                        <span class="menu-bullet"><span
                                                                class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span></span>
                                                        <span class="menu-title">Dark Sidebar</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0" bis_skin_checked="1">
                                                    <!--begin:Menu link-->
                                                    <a href="/metronic8/demo1/layouts/light-header.html"
                                                        class="menu-link ">
                                                        <span class="menu-bullet"><span
                                                                class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span></span>
                                                        <span class="menu-title">Light Header</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0" bis_skin_checked="1">
                                                    <!--begin:Menu link-->
                                                    <a href="/metronic8/demo1/layouts/dark-header.html"
                                                        class="menu-link ">
                                                        <span class="menu-bullet"><span
                                                                class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span></span>
                                                        <span class="menu-title">Dark Header</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Col-->

                                            <!--begin:Col-->
                                            <div class="col-lg-4 mb-3" bis_skin_checked="1">
                                                <!--begin:Heading-->
                                                <h4 class="fs-6 fs-lg-4 text-gray-800 fw-bold mt-3 mb-3 ms-4">
                                                    Toolbars</h4>
                                                <!--end:Heading-->

                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0" bis_skin_checked="1">
                                                    <!--begin:Menu link-->
                                                    <a href="/metronic8/demo1/toolbars/classic.html"
                                                        class="menu-link ">
                                                        <span class="menu-bullet"><span
                                                                class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span></span>
                                                        <span class="menu-title">Classic</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0" bis_skin_checked="1">
                                                    <!--begin:Menu link-->
                                                    <a href="/metronic8/demo1/toolbars/saas.html" class="menu-link ">
                                                        <span class="menu-bullet"><span
                                                                class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span></span>
                                                        <span class="menu-title">SaaS</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0" bis_skin_checked="1">
                                                    <!--begin:Menu link-->
                                                    <a href="/metronic8/demo1/toolbars/accounting.html"
                                                        class="menu-link ">
                                                        <span class="menu-bullet"><span
                                                                class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span></span>
                                                        <span class="menu-title">Accounting</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0" bis_skin_checked="1">
                                                    <!--begin:Menu link-->
                                                    <a href="/metronic8/demo1/toolbars/extended.html"
                                                        class="menu-link ">
                                                        <span class="menu-bullet"><span
                                                                class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span></span>
                                                        <span class="menu-title">Extended</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0" bis_skin_checked="1">
                                                    <!--begin:Menu link-->
                                                    <a href="/metronic8/demo1/toolbars/reports.html"
                                                        class="menu-link ">
                                                        <span class="menu-bullet"><span
                                                                class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span></span>
                                                        <span class="menu-title">Reports</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Col-->

                                            <!--begin:Col-->
                                            <div class="col-lg-4 mb-3" bis_skin_checked="1">
                                                <!--begin:Heading-->
                                                <h4 class="fs-6 fs-lg-4 text-gray-800 fw-bold mt-3 mb-3 ms-4">
                                                    Asides</h4>
                                                <!--end:Heading-->

                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0" bis_skin_checked="1">
                                                    <!--begin:Menu link-->
                                                    <a href="/metronic8/demo1/asides/aside-1.html" class="menu-link ">
                                                        <span class="menu-bullet"><span
                                                                class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span></span>
                                                        <span class="menu-title">Filters</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0" bis_skin_checked="1">
                                                    <!--begin:Menu link-->
                                                    <a href="/metronic8/demo1/asides/aside-2.html" class="menu-link ">
                                                        <span class="menu-bullet"><span
                                                                class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span></span>
                                                        <span class="menu-title">Segments</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0" bis_skin_checked="1">
                                                    <!--begin:Menu link-->
                                                    <a href="/metronic8/demo1/asides/aside-3.html" class="menu-link ">
                                                        <span class="menu-bullet"><span
                                                                class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span></span>
                                                        <span class="menu-title">Shipment History</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0" bis_skin_checked="1">
                                                    <!--begin:Menu link-->
                                                    <a href="/metronic8/demo1/asides/aside-4.html" class="menu-link ">
                                                        <span class="menu-bullet"><span
                                                                class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span></span>
                                                        <span class="menu-title">Courier Activity</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>

                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0" bis_skin_checked="1">
                                                    <!--begin:Menu link-->
                                                    <a href="/metronic8/demo1/asides/aside-5.html" class="menu-link ">
                                                        <span class="menu-bullet"><span
                                                                class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span></span>
                                                        <span class="menu-title">Calendar</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Col-->
                                        </div>
                                        <!--end:Row-->

                                        <div class="separator separator-dashed mx-lg-5 mt-2 mb-6"
                                            bis_skin_checked="1"></div>

                                        <!--begin:Layout Builder-->
                                        <div class="d-flex flex-stack flex-wrap flex-lg-nowrap gap-2 mb-5 mb-lg-0 mx-lg-5"
                                            bis_skin_checked="1">
                                            <div class="d-flex flex-column me-5" bis_skin_checked="1">
                                                <div class="fs-6 fw-bold text-gray-800" bis_skin_checked="1">
                                                    Layout Builder
                                                </div>
                                                <div class="fs-7 fw-semibold text-muted" bis_skin_checked="1">
                                                    Customize, preview and export
                                                </div>
                                            </div>

                                            <a href="/metronic8/demo1/layout-builder.html"
                                                class="btn btn-sm btn-primary fw-bold">
                                                Try Builder
                                            </a>
                                        </div>
                                        <!--end:Layout Builder-->
                                    </div>
                                    <!--end:Col-->

                                    <!--begin:Col-->
                                    <div class="col-lg-5 mb-3 py-lg-3 pe-lg-8 d-flex align-items-center"
                                        bis_skin_checked="1">
                                        <img src="{{ asset('theme/assets/media/stock/900x600/45.jpg') }}"
                                            class="rounded mw-100" alt="">
                                    </div>
                                    <!--end:Col-->
                                </div>
                                <!--end:Row-->
                            </div>
                            <!--end:Dashboards menu-->
                        </div><!--end:Menu sub-->
                    </div><!--end:Menu item--><!--begin:Menu item-->
                    <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"
                        class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2"
                        bis_skin_checked="1"><!--begin:Menu link--><span class="menu-link"><span
                                class="menu-title">Help</span><span
                                class="menu-arrow d-lg-none"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                        <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px"
                            bis_skin_checked="1" style=""><!--begin:Menu item-->
                            <div class="menu-item" bis_skin_checked="1"><!--begin:Menu link--><a class="menu-link"
                                    href="https://preview.keenthemes.com/html/metronic/docs/base/utilities"
                                    target="_blank" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                    data-bs-dismiss="click" data-bs-placement="right"
                                    data-bs-original-title="Check out over 200 in-house components, plugins and ready for use solutions"
                                    data-kt-initialized="1"><span class="menu-icon"><i
                                            class="ki-duotone ki-rocket fs-2"><span class="path1"></span><span
                                                class="path2"></span></i></span><span
                                        class="menu-title">Components</span></a><!--end:Menu link--></div>
                            <!--end:Menu item--><!--begin:Menu item-->
                            <div class="menu-item" bis_skin_checked="1"><!--begin:Menu link--><a class="menu-link"
                                    href="https://preview.keenthemes.com/html/metronic/docs" target="_blank"
                                    data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click"
                                    data-bs-placement="right"
                                    data-bs-original-title="Check out the complete documentation"
                                    data-kt-initialized="1"><span class="menu-icon"><i
                                            class="ki-duotone ki-abstract-26 fs-2"><span class="path1"></span><span
                                                class="path2"></span></i></span><span
                                        class="menu-title">Documentation</span></a><!--end:Menu link-->
                            </div><!--end:Menu item--><!--begin:Menu item-->
                            <div class="menu-item" bis_skin_checked="1"><!--begin:Menu link--><a class="menu-link"
                                    href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog"
                                    target="_blank"><span class="menu-icon"><i class="ki-duotone ki-code fs-2"><span
                                                class="path1"></span><span class="path2"></span><span
                                                class="path3"></span><span class="path4"></span></i></span><span
                                        class="menu-title">Changelog
                                        v8.2.7</span></a><!--end:Menu link-->
                            </div><!--end:Menu item-->
                        </div><!--end:Menu sub-->
                    </div><!--end:Menu item-->
                </div>
                <!--end::Menu-->
            </div>
            <!--end::Menu wrapper-->


            <!--begin::Navbar-->
            <div class="app-navbar flex-shrink-0" bis_skin_checked="1">
                <h1>{{ app()->getLocale() }}</h1>
                <!--begin::My apps links-->
                <div class="app-navbar-item ms-1 ms-md-4" bis_skin_checked="1">
                    <form action="{{ route('change-language') }}" method="POST">
                        @csrf
                        <select class="form-select form-select-solid" aria-label="Select language"
                            onchange="this.form.submit()" name="lang">
                            <option value="ur" {{ app()->getLocale() == 'ur' ? 'selected' : '' }}>اردو
                            </option>
                            <option value="en" {{ app()->getLocale() == 'en' ? 'selected' : '' }}>English</option>
                        </select>
                    </form>
                </div>
                <!--end::My apps links-->

                <!--begin::Theme mode-->
                {{-- <div class="app-navbar-item ms-1 ms-md-4" bis_skin_checked="1">

                    <!--begin::Menu toggle-->
                    <a href="#"
                        class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px"
                        data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent"
                        data-kt-menu-placement="bottom-end">
                        <i class="ki-outline ki-night-day theme-light-show fs-1"></i> <i
                            class="ki-outline ki-moon theme-dark-show fs-1"></i></a>
                    <!--begin::Menu toggle-->

                    <!--begin::Menu-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px"
                        data-kt-menu="true" data-kt-element="theme-mode-menu" bis_skin_checked="1">
                        <!--begin::Menu item-->
                        <div class="menu-item px-3 my-0" bis_skin_checked="1">
                            <a href="#" class="menu-link px-3 py-2 active" data-kt-element="mode"
                                data-kt-value="light">
                                <span class="menu-icon" data-kt-element="icon">
                                    <i class="ki-outline ki-night-day fs-2"></i> </span>
                                <span class="menu-title">
                                    Light
                                </span>
                            </a>
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu item-->
                        <div class="menu-item px-3 my-0" bis_skin_checked="1">
                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                data-kt-value="dark">
                                <span class="menu-icon" data-kt-element="icon">
                                    <i class="ki-outline ki-moon fs-2"></i> </span>
                                <span class="menu-title">
                                    Dark
                                </span>
                            </a>
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu item-->
                        <div class="menu-item px-3 my-0" bis_skin_checked="1">
                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                data-kt-value="system">
                                <span class="menu-icon" data-kt-element="icon">
                                    <i class="ki-outline ki-screen fs-2"></i> </span>
                                <span class="menu-title">
                                    System
                                </span>
                            </a>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::Menu-->

                </div> --}}
                <!--end::Theme mode-->


                <!--begin::Header menu toggle-->
                <div class="app-navbar-item d-lg-none ms-2 me-n2" title="Show header menu" bis_skin_checked="1">
                    <div class="btn btn-flex btn-icon btn-active-color-primary w-30px h-30px"
                        id="kt_app_header_menu_toggle" bis_skin_checked="1">
                        <i class="ki-outline ki-element-4 fs-1"></i>
                    </div>
                </div>
                <!--end::Header menu toggle-->

                <!--begin::Aside toggle-->
                <!--end::Header menu toggle-->
            </div>
            <!--end::Navbar-->
        </div>
        <!--end::Header wrapper-->
    </div>
    <!--end::Header container-->
</div>
