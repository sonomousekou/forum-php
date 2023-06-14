<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <title>Metronic </title>
    <?php require_once('./views/includes/head.inc.php') ?>

</head>
<!--end::Head-->

<!--begin::Body-->

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed aside-enabled sidebar-enabled">
    <!--begin::Theme mode setup on page load-->

    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-column flex-column-fluid">

            <!--begin::Header-->
            <div id="kt_header" class="header  align-items-stretch">
                <!--begin::Container-->
                <div class=" container-xxl  d-flex align-items-stretch justify-content-between">
                    <!--begin::Brand-->
                    <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0 w-lg-225px me-5">
                        <!--begin::Aside mobile toggle-->
                        <div class="btn btn-icon btn-active-icon-primary ms-n2 me-2 d-flex d-lg-none"
                            id="kt_aside_toggle">
                            <i class="ki-duotone ki-abstract-14 fs-1"><span class="path1"></span><span
                                    class="path2"></span></i>
                        </div>
                        <!--end::Aside mobile toggle-->

                        <!--begin::Logo-->
                        <a href="index.html">
                            <img alt="Logo" src="./public/assets/media/logos/demo5.svg"
                                class="d-none d-lg-inline h-30px theme-light-show" />
                            <img alt="Logo" src="./public/assets/media/logos/demo5-dark.svg"
                                class="d-none d-lg-inline h-30px theme-dark-show" />
                            <img alt="Logo" src="./public/assets/media/logos/demo5-mobile.svg"
                                class="d-lg-none h-25px" />
                        </a>
                        <!--end::Logo-->
                    </div>
                    <!--end::Brand-->

                    <!--begin::Wrapper-->
                    <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
                        <!--begin::Navbar-->
                        <div class="d-flex align-items-stretch" id="kt_header_nav">
                            <!--begin::Menu wrapper-->
                            <div class="header-menu align-items-stretch" data-kt-drawer="true"
                                data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}"
                                data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}"
                                data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_header_menu_mobile_toggle"
                                data-kt-swapper="true" data-kt-swapper-mode="prepend"
                                data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
                                <!--begin::Menu-->
                                <div class="menu menu-rounded menu-column menu-lg-row menu-root-here-bg-desktop menu-active-bg menu-state-primary menu-title-gray-800 menu-arrow-gray-400 align-items-stretch my-5 my-lg-0 px-2 px-lg-0 fw-semibold fs-6"
                                    id="#kt_header_menu" data-kt-menu="true">
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                        data-kt-menu-placement="bottom-start"
                                        class="menu-item here show menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
                                        <!--begin:Menu link--><span class="menu-link py-3"><span
                                                class="menu-title">Dashboards</span><span
                                                class="menu-arrow d-lg-none"></span></span>
                                        <!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div
                                            class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0 w-100 w-lg-850px">
                                            <!--begin:Dashboards menu-->
                                            <div class="menu-state-bg menu-extended overflow-hidden overflow-lg-visible"
                                                data-kt-menu-dismiss="true">
                                            </div>
                                            <!--end:Dashboards menu-->
                                        </div>
                                        <!--end:Menu sub-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                        data-kt-menu-placement="bottom-start"
                                        class="menu-item menu-lg-down-accordion me-0 me-lg-2">
                                        <!--begin:Menu link--><span class="menu-link py-3"><span
                                                class="menu-title">Pages</span><span
                                                class="menu-arrow d-lg-none"></span></span>
                                        <!--end:Menu link-->

                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                        data-kt-menu-placement="bottom-start"
                                        class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                                        <!--begin:Menu link--><span class="menu-link py-3"><span
                                                class="menu-title">Apps</span><span
                                                class="menu-arrow d-lg-none"></span></span>
                                        <!--end:Menu link-->

                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                        data-kt-menu-placement="bottom-start"
                                        class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                                        <!--begin:Menu link--><span class="menu-link py-3"><span
                                                class="menu-title">Help</span><span
                                                class="menu-arrow d-lg-none"></span></span>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end::Menu-->
                            </div>
                            <!--end::Menu wrapper-->
                        </div>
                        <!--end::Navbar-->

                        <!--begin::Toolbar wrapper-->
                        <div class="d-flex align-items-stretch flex-shrink-0">
                            <!--begin::User-->
                            <div class="d-flex align-items-center ms-lg-5" id="kt_header_user_menu_toggle">
                                <!--begin::User info-->
                                <div class="btn btn-active-light d-flex align-items-center bg-hover-light py-2 px-2 px-md-3"
                                    data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
                                    data-kt-menu-placement="bottom-end">

                                    <!--begin::Name-->
                                    <div
                                        class="d-none d-md-flex flex-column align-items-end justify-content-center me-2">
                                        <span class="text-muted fs-7 fw-semibold lh-1 mb-2">Hello</span>
                                        <span class="text-dark fs-base fw-bold lh-1">Richard</span>
                                    </div>
                                    <!--end::Name-->

                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-30px symbol-md-40px">
                                        <img src="./public/assets/media/avatars/300-1.jpg" alt="image" />
                                    </div>
                                    <!--end::Symbol-->
                                </div>
                                <!--end::User info-->


                                <!--begin::User account menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                                    data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content d-flex align-items-center px-3">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-50px me-5">
                                                <img alt="Logo" src="./public/assets/media/avatars/300-1.jpg" />
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Username-->
                                            <div class="d-flex flex-column">
                                                <div class="fw-bold d-flex align-items-center fs-5">
                                                    Max Smith <span
                                                        class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span>
                                                </div>

                                                <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">
                                                    max@kt.com </a>
                                            </div>
                                            <!--end::Username-->
                                        </div>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu separator-->
                                    <div class="separator my-2"></div>
                                    <!--end::Menu separator-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                        <a href="account/overview.html" class="menu-link px-5">
                                            My Profile
                                        </a>
                                    </div>
                                    <!--end::Menu item-->


                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                        <a href="account/statements.html" class="menu-link px-5">
                                            My Statements
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu separator-->
                                    <div class="separator my-2"></div>
                                    <!--end::Menu separator-->


                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                        data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                                        <a href="#" class="menu-link px-5">
                                            <span class="menu-title position-relative">
                                                Language

                                                <span
                                                    class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">
                                                    English <img class="w-15px h-15px rounded-1 ms-2"
                                                        src="./public/assets/media/flags/united-states.svg" alt="" />
                                                </span>
                                            </span>
                                        </a>

                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="account/settings.html" class="menu-link d-flex px-5 active">
                                                    <span class="symbol symbol-20px me-4">
                                                        <img class="rounded-1"
                                                            src="./public/assets/media/flags/united-states.svg"
                                                            alt="" />
                                                    </span>
                                                    English
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="account/settings.html" class="menu-link d-flex px-5">
                                                    <span class="symbol symbol-20px me-4">
                                                        <img class="rounded-1"
                                                            src="./public/assets/media/flags/spain.svg" alt="" />
                                                    </span>
                                                    Spanish
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="account/settings.html" class="menu-link d-flex px-5">
                                                    <span class="symbol symbol-20px me-4">
                                                        <img class="rounded-1"
                                                            src="./public/assets/media/flags/germany.svg" alt="" />
                                                    </span>
                                                    German
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="account/settings.html" class="menu-link d-flex px-5">
                                                    <span class="symbol symbol-20px me-4">
                                                        <img class="rounded-1"
                                                            src="./public/assets/media/flags/japan.svg" alt="" />
                                                    </span>
                                                    Japanese
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="account/settings.html" class="menu-link d-flex px-5">
                                                    <span class="symbol symbol-20px me-4">
                                                        <img class="rounded-1"
                                                            src="./public/assets/media/flags/france.svg" alt="" />
                                                    </span>
                                                    French
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5 my-1">
                                        <a href="account/settings.html" class="menu-link px-5">
                                            Account Settings
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                        <a href="authentication/layouts/corporate/sign-in.html" class="menu-link px-5">
                                            Sign Out
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::User account menu-->
                            </div>
                            <!--end::User -->

                            <!--begin::Header menu toggle-->
                            <div class="d-flex d-lg-none align-items-center" title="Show header menu">
                                <button class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px"
                                    id="kt_header_menu_mobile_toggle">
                                    <i class="ki-duotone ki-text-align-left fs-1 fw-bold"><span
                                            class="path1"></span><span class="path2"></span><span
                                            class="path3"></span><span class="path4"></span></i> </button>
                            </div>
                            <!--end::Header menu toggle-->
                        </div>
                        <!--end::Toolbar wrapper-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Header-->

            <!--begin::Container-->
            <div id="kt_content_container" class="d-flex flex-column-fluid align-items-stretch  container-xxl ">
                <!--begin::Aside-->
                <div id="kt_aside" class="aside" data-kt-drawer="true" data-kt-drawer-name="aside"
                    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                    data-kt-drawer-width="{default:'200px', '300px': '225px'}" data-kt-drawer-direction="start"
                    data-kt-drawer-toggle="#kt_aside_toggle" data-kt-sticky="true" data-kt-sticky-name="aside-sticky"
                    data-kt-sticky-offset="{default: false, lg: '1px'}" data-kt-sticky-width="{lg: '225px'}"
                    data-kt-sticky-left="auto" data-kt-sticky-top="94px" data-kt-sticky-animation="false"
                    data-kt-sticky-zindex="95">

                    <!--begin::Aside nav-->
                    <div class="hover-scroll-overlay-y my-5 my-lg-5 w-100 ps-4 ps-lg-0 pe-4 me-1"
                        id="kt_aside_menu_wrapper" data-kt-scroll="true"
                        data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto"
                        data-kt-scroll-dependencies="#kt_header" data-kt-scroll-wrappers="#kt_aside"
                        data-kt-scroll-offset="5px">
                        <!--begin::Menu-->
                        <div class="menu menu-column menu-active-bg menu-hover-bg menu-title-gray-700 fs-6 menu-rounded w-100"
                            id="#kt_aside_menu" data-kt-menu="true">
                            <!--begin::Heading-->
                            <div class="menu-item">
                                <div class="menu-content pb-2">
                                    <span class="menu-section text-muted text-uppercase fs-7 fw-bold">Public</span>
                                </div>
                            </div>
                            <!--end::Heading-->

                            <!--begin::Menu item-->
                            <div class="menu-item">
                                <a href="index.html" class="menu-link active">
                                    <span class="menu-title">All Questions</span>
                                    <span class="menu-badge">6,234</span>
                                </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item">
                                <a href="apps/devs/search.html" class="menu-link ">
                                    <span class="menu-title">Search</span>
                                </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item">
                                <a href="apps/devs/tag.html" class="menu-link ">
                                    <span class="menu-title">Tags</span>
                                </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item">
                                <a href="apps/devs/ask.html" class="menu-link ">
                                    <span class="menu-title">Ask Question</span>
                                </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Heading-->
                            <div class="menu-item pt-5">
                                <div class="menu-content pb-2">
                                    <span class="menu-section text-muted text-uppercase fs-7 fw-bold">My Activity</span>
                                </div>
                            </div>
                            <!--end::Heading-->

                            <!--begin::Menu item-->
                            <div class="menu-item">
                                <a href="apps/devs/question.html" class="menu-link ">
                                    <span class="menu-title">My Questions</span>
                                    <span class="menu-badge">24</span>
                                </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item">
                                <a href="index.html" class="menu-link">
                                    <span class="menu-title">Resolved</span>
                                    <span class="menu-badge">120</span>
                                </a>
                            </div>
                            <!--end::Menu item-->


                            <!--begin::Menu item-->
                            <div class="menu-item">
                                <a href="index.html" class="menu-link">
                                    <span class="menu-title">Enrolled</span>
                                    <span class="menu-badge">10</span>
                                </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item">
                                <a href="index.html" class="menu-link">
                                    <span class="menu-title">Saved</span>
                                    <span class="menu-badge">6</span>
                                </a>
                            </div>
                            <!--end::Menu item-->


                            <!--begin::Heading-->
                            <div class="menu-item pt-5">
                                <div class="menu-content pb-2">
                                    <span class="menu-section text-muted text-uppercase fs-7 fw-bold">Categories</span>
                                </div>
                            </div>
                            <!--end::Heading-->


                            <!--begin::Menu item-->
                            <div class="menu-item">
                                <a href="index.html" class="menu-link">
                                    <span class="menu-title">Metronic Admin</span>
                                    <span class="menu-badge">1,400</span>
                                </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item">
                                <a href="index.html" class="menu-link">
                                    <span class="menu-title">Backend Integration</span>
                                    <span class="menu-badge">235</span>
                                </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item">
                                <a href="index.html" class="menu-link">
                                    <span class="menu-title">Suggestions</span>
                                    <span class="menu-badge">25</span>
                                </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item">
                                <a href="index.html" class="menu-link">
                                    <span class="menu-title">Pre-sale Questions</span>
                                    <span class="menu-badge">145</span>
                                </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item">
                                <a href="index.html" class="menu-link">
                                    <span class="menu-title">Laravel Starter Kit</span>
                                    <span class="menu-badge">750</span>
                                </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Collapse-->
                            <div class="collapse" id="kt_aside_categories_more">
                                <!--begin::Menu item-->
                                <div class="menu-item">
                                    <a href="index.html" class="menu-link">
                                        <span class="menu-title">Blazor Integration</span>
                                        <span class="menu-badge">100</span>
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item">
                                    <a href="index.html" class="menu-link">
                                        <span class="menu-title">Django Dashboard</span>
                                        <span class="menu-badge">90</span>
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item">
                                    <a href="index.html" class="menu-link">
                                        <span class="menu-title">Rails CRUD</span>
                                        <span class="menu-badge">14</span>
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item">
                                    <a href="index.html" class="menu-link">
                                        <span class="menu-title">.NET Starter Kit</span>
                                        <span class="menu-badge">30</span>
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Collapse-->

                            <!--begin::Heading-->
                            <div class="menu-item">
                                <div class="menu-link">
                                    <a hred="#" class="menu-title text-muted fs-7" id="kt_aside_categories_toggle"
                                        data-bs-toggle="collapse" data-bs-target="#kt_aside_categories_more">
                                        More Categories
                                    </a>
                                </div>
                            </div>
                            <!--end::Heading-->
                        </div>
                        <!--end::Menu-->
                    </div>
                    <!--end::Aside nav-->
                </div>
                <!--end::Aside-->
                <!--begin::Wrapper-->
                <div class="wrapper d-flex flex-column flex-row-fluid mt-5 mt-lg-10" id="kt_wrapper">
                    <!--begin::Content-->
                    <div class="content flex-column-fluid" id="kt_content">

                        <!--begin::Toolbar-->
                        <div class="toolbar d-flex flex-stack flex-wrap mb-5 mb-lg-7" id="kt_toolbar">


                            <!--begin::Page title-->
                            <div class="page-title d-flex flex-column py-1">
                                <!--begin::Title-->
                                <h1 class="d-flex align-items-center my-1">
                                    <span class="text-dark fw-bold fs-1">
                                        All Questions </span>

                                    <!--begin::Description-->
                                    <small class="text-muted fs-6 fw-semibold ms-1">
                                        (6,299) </small>
                                    <!--end::Description-->
                                </h1>
                                <!--end::Title-->

                            </div>
                            <!--end::Page title-->
                            <!--begin::Actions-->
                            <div class="d-flex align-items-center py-1">
                                <!--begin::Button-->
                                <a href="apps/devs/ask.html"
                                    class="btn btn-flex btn-sm btn-primary fw-bold border-0 fs-6 h-40px"
                                    id="kt_toolbar_primary_button">
                                    Ask Question </a>
                                <!--end::Button-->
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Toolbar-->

                        <!--begin::Post-->
                        <div class="post" id="kt_post">

                            <!--begin::Questions-->
                            <div class="mb-10">
                                <!--begin::Question-->
                                <div class="mb-0">
                                    <!--begin::Head-->
                                    <div class="d-flex align-items-center mb-4">
                                        <!--begin::Title-->
                                        <a href="apps/devs/question.html"
                                            class="fs-2 fw-bold text-gray-900 text-hover-primary me-1">
                                            How to use Metronic with Django Framework ? </a>
                                        <!--end::Title-->

                                        <!--begin::Icons-->
                                        <div class="d-flex align-items-center">
                                            <span class="ms-1" data-bs-toggle="tooltip" title="New question">
                                                <i class="ki-duotone ki-information-5 text-primary fs-1"><span
                                                        class="path1"></span><span class="path2"></span><span
                                                        class="path3"></span></i> </span>
                                            <span class="ms-1" data-bs-toggle="tooltip" title="User replied">
                                                <i class="ki-duotone ki-sms text-danger fs-1"><span
                                                        class="path1"></span><span class="path2"></span></i> </span>
                                        </div>
                                        <!--end::Icons-->
                                    </div>
                                    <!--end::Head-->

                                    <!--begin::Summary-->
                                    <div class="fs-base fw-normal text-gray-700 mb-4">
                                        I’ve been doing some ajax request, to populate a inside drawer, the content of
                                        that drawer has a sub menu, that you are using in list and all card toolbar.
                                    </div>
                                    <!--end::Summary-->

                                    <!--begin::Foot-->
                                    <div class="d-flex flex-stack flex-wrap">
                                        <!--begin::Author-->
                                        <div class="d-flex align-items-center py-1">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-35px me-2">
                                                <div
                                                    class="symbol-label bg-light-success fs-3 fw-semibold text-success text-uppercase">
                                                    J </div>
                                            </div>
                                            <!--end::Symbol-->

                                            <!--begin::Name-->
                                            <div class="d-flex flex-column align-items-start justify-content-center">
                                                <span class="text-gray-900 fs-7 fw-semibold lh-1 mb-2">James Hunt</span>
                                                <span class="text-muted fs-8 fw-semibold lh-1">24 minutes ago</span>
                                            </div>
                                            <!--end::Name-->
                                        </div>
                                        <!--end::Author-->

                                        <!--begin::Info-->
                                        <div class="d-flex align-items-center py-1">
                                            <!--begin::Answers-->
                                            <a href="apps/devs/question.html#answers"
                                                class="btn btn-sm btn-outline btn-outline-dashed btn-outline-default px-4 me-2">
                                                16 Answers
                                            </a>
                                            <!--end::Answers-->

                                            <!--begin::Tags-->
                                            <a href="apps/devs/tag.html" class="btn btn-sm btn-light px-4 me-2">
                                                Metronic </a>
                                            <!--end::Tags-->

                                            <!--begin::Upvote-->
                                            <a href="#" class="btn btn-sm btn-flex btn-light px-3"
                                                data-bs-toggle="tooltip" title="Upvote this question"
                                                data-bs-dismiss="click">
                                                23 <i class="ki-duotone ki-black-right fs-3ms-2 me-0 fs-3"></i> </a>
                                            <!--end::Upvote-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Foot-->
                                </div>
                                <!--end::Question-->

                                <!--begin::Separator-->
                                <div class="separator separator-dashed border-gray-300 my-8"></div>
                                <!--end::Separator-->
                                <!--begin::Question-->
                                <div class="mb-0">
                                    <!--begin::Head-->
                                    <div class="d-flex align-items-center mb-4">
                                        <!--begin::Title-->
                                        <a href="apps/devs/question.html"
                                            class="fs-2 fw-bold text-gray-900 text-hover-primary me-1">
                                            When to expect new version of Laravel ? </a>
                                        <!--end::Title-->

                                        <!--begin::Icons-->
                                        <div class="d-flex align-items-center">
                                            <span class="ms-1" data-bs-toggle="tooltip" title="In-process">
                                                <i class="ki-duotone ki-information-5 text-warning fs-1"><span
                                                        class="path1"></span><span class="path2"></span><span
                                                        class="path3"></span></i> </span>
                                        </div>
                                        <!--end::Icons-->
                                    </div>
                                    <!--end::Head-->

                                    <!--begin::Summary-->
                                    <div class="fs-base fw-normal text-gray-700 mb-4">
                                        When approx. is the next update for the Laravel version planned? Waiting for the
                                        CRUD, 2nd factor etc. features before starting my project. Also can we expect
                                        the Laravel + Vue version in the next update ? </div>
                                    <!--end::Summary-->

                                    <!--begin::Foot-->
                                    <div class="d-flex flex-stack flex-wrap">
                                        <!--begin::Author-->
                                        <div class="d-flex align-items-center py-1">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-35px me-2">
                                                <img src="./public/assets/media/avatars/300-2.jpg" alt="user" />
                                            </div>
                                            <!--end::Symbol-->

                                            <!--begin::Name-->
                                            <div class="d-flex flex-column align-items-start justify-content-center">
                                                <span class="text-gray-900 fs-7 fw-semibold lh-1 mb-2">Sandra
                                                    Piquet</span>
                                                <span class="text-muted fs-8 fw-semibold lh-1">1 day ago</span>
                                            </div>
                                            <!--end::Name-->
                                        </div>
                                        <!--end::Author-->

                                        <!--begin::Info-->
                                        <div class="d-flex align-items-center py-1">
                                            <!--begin::Answers-->
                                            <a href="apps/devs/question.html#answers"
                                                class="btn btn-sm btn-outline btn-outline-dashed btn-outline-default px-4 me-2">
                                                2 Answers
                                            </a>
                                            <!--end::Answers-->

                                            <!--begin::Tags-->
                                            <a href="apps/devs/tag.html" class="btn btn-sm btn-light px-4 me-2">
                                                Pre-sale </a>
                                            <!--end::Tags-->

                                            <!--begin::Upvote-->
                                            <a href="#" class="btn btn-sm btn-flex btn-light px-3"
                                                data-bs-toggle="tooltip" title="Upvote this question"
                                                data-bs-dismiss="click">
                                                4 <i class="ki-duotone ki-black-right fs-3ms-2 me-0 fs-3"></i> </a>
                                            <!--end::Upvote-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Foot-->
                                </div>
                                <!--end::Question-->

                                <!--begin::Separator-->
                                <div class="separator separator-dashed border-gray-300 my-8"></div>
                                <!--end::Separator-->
                                <!--begin::Question-->
                                <div class="mb-0">
                                    <!--begin::Head-->
                                    <div class="d-flex align-items-center mb-4">
                                        <!--begin::Title-->
                                        <a href="apps/devs/question.html"
                                            class="fs-2 fw-bold text-gray-900 text-hover-primary me-1">
                                            Could not get Demo 7 working </a>
                                        <!--end::Title-->

                                        <!--begin::Icons-->
                                        <div class="d-flex align-items-center">
                                            <span class="ms-1" data-bs-toggle="tooltip" title="In-process">
                                                <i class="ki-duotone ki-information-5 text-warning fs-1"><span
                                                        class="path1"></span><span class="path2"></span><span
                                                        class="path3"></span></i> </span>
                                        </div>
                                        <!--end::Icons-->
                                    </div>
                                    <!--end::Head-->

                                    <!--begin::Summary-->
                                    <div class="fs-base fw-normal text-gray-700 mb-4">
                                        could not get demo7 working from latest metronic version. Had a lot of issues
                                        installing, I had to downgrade my npm to 6.14.4 as someone else recommended here
                                        in the comments, this goot it to compile but when I ran it, the browser showed
                                        errors TypeErr.. </div>
                                    <!--end::Summary-->

                                    <!--begin::Foot-->
                                    <div class="d-flex flex-stack flex-wrap">
                                        <!--begin::Author-->
                                        <div class="d-flex align-items-center py-1">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-35px me-2">
                                                <div
                                                    class="symbol-label bg-light-success fs-3 fw-semibold text-success text-uppercase">
                                                    N </div>
                                            </div>
                                            <!--end::Symbol-->

                                            <!--begin::Name-->
                                            <div class="d-flex flex-column align-items-start justify-content-center">
                                                <span class="text-gray-900 fs-7 fw-semibold lh-1 mb-2">Niko
                                                    Roseberg</span>
                                                <span class="text-muted fs-8 fw-semibold lh-1">2 days ago</span>
                                            </div>
                                            <!--end::Name-->
                                        </div>
                                        <!--end::Author-->

                                        <!--begin::Info-->
                                        <div class="d-flex align-items-center py-1">
                                            <!--begin::Answers-->
                                            <a href="apps/devs/question.html#answers"
                                                class="btn btn-sm btn-outline btn-outline-dashed btn-outline-default px-4 me-2">
                                                4 Answers
                                            </a>
                                            <!--end::Answers-->

                                            <!--begin::Tags-->
                                            <a href="apps/devs/tag.html" class="btn btn-sm btn-light px-4 me-2">
                                                Angular </a>
                                            <!--end::Tags-->

                                            <!--begin::Upvote-->
                                            <a href="#" class="btn btn-sm btn-flex btn-light btn-icon"
                                                data-bs-toggle="tooltip" title="Upvote this question"
                                                data-bs-dismiss="click">
                                                <i class="ki-duotone ki-black-right fs-3"></i> </a>
                                            <!--end::Upvote-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Foot-->
                                </div>
                                <!--end::Question-->

                                <!--begin::Separator-->
                                <div class="separator separator-dashed border-gray-300 my-8"></div>
                                <!--end::Separator-->
                                <!--begin::Question-->
                                <div class="mb-0">
                                    <!--begin::Head-->
                                    <div class="d-flex align-items-center mb-4">
                                        <!--begin::Title-->
                                        <a href="apps/devs/question.html"
                                            class="fs-2 fw-bold text-gray-900 text-hover-primary me-1">
                                            I want to get refund </a>
                                        <!--end::Title-->

                                        <!--begin::Icons-->
                                        <div class="d-flex align-items-center">
                                            <span class="ms-1" data-bs-toggle="tooltip" title="Resolved">
                                                <i class="ki-duotone ki-check-circle text-success fs-1"><span
                                                        class="path1"></span><span class="path2"></span></i> </span>
                                        </div>
                                        <!--end::Icons-->
                                    </div>
                                    <!--end::Head-->

                                    <!--begin::Summary-->
                                    <div class="fs-base fw-normal text-gray-700 mb-4">
                                        Your Metronic theme is so good but the reactjs version is typescript only. The
                                        description did not write any warn about it. Since I only know javascript, I can
                                        not do anything with your theme. I want to refund. </div>
                                    <!--end::Summary-->

                                    <!--begin::Foot-->
                                    <div class="d-flex flex-stack flex-wrap">
                                        <!--begin::Author-->
                                        <div class="d-flex align-items-center py-1">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-35px me-2">
                                                <img src="./public/assets/media/avatars/300-23.jpg" alt="user" />
                                            </div>
                                            <!--end::Symbol-->

                                            <!--begin::Name-->
                                            <div class="d-flex flex-column align-items-start justify-content-center">
                                                <span class="text-gray-900 fs-7 fw-semibold lh-1 mb-2">Alex Bold</span>
                                                <span class="text-muted fs-8 fw-semibold lh-1">1 day ago</span>
                                            </div>
                                            <!--end::Name-->
                                        </div>
                                        <!--end::Author-->

                                        <!--begin::Info-->
                                        <div class="d-flex align-items-center py-1">
                                            <!--begin::Answers-->
                                            <a href="apps/devs/question.html#answers"
                                                class="btn btn-sm btn-outline btn-outline-dashed btn-outline-default px-4 me-2">
                                                22 Answers
                                            </a>
                                            <!--end::Answers-->

                                            <!--begin::Tags-->
                                            <a href="apps/devs/tag.html" class="btn btn-sm btn-light px-4 me-2">
                                                React </a>
                                            <a href="apps/devs/tag.html" class="btn btn-sm btn-light px-4 me-2">
                                                Demo 1 </a>
                                            <!--end::Tags-->

                                            <!--begin::Upvote-->
                                            <a href="#" class="btn btn-sm btn-flex btn-light px-3"
                                                data-bs-toggle="tooltip" title="Upvote this question"
                                                data-bs-dismiss="click">
                                                11 <i class="ki-duotone ki-black-right fs-3ms-2 me-0 fs-3"></i> </a>
                                            <!--end::Upvote-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Foot-->
                                </div>
                                <!--end::Question-->

                                <!--begin::Separator-->
                                <div class="separator separator-dashed border-gray-300 my-8"></div>
                                <!--end::Separator-->
                                <!--begin::Question-->
                                <div class="mb-0">
                                    <!--begin::Head-->
                                    <div class="d-flex align-items-center mb-4">
                                        <!--begin::Title-->
                                        <a href="apps/devs/question.html"
                                            class="fs-2 fw-bold text-gray-900 text-hover-primary me-1">
                                            How to integrate Metronic with Blazor Server Side ? </a>
                                        <!--end::Title-->

                                        <!--begin::Icons-->
                                        <div class="d-flex align-items-center">
                                            <span class="ms-1" data-bs-toggle="tooltip" title="In-process">
                                                <i class="ki-duotone ki-check-circle text-success fs-1"><span
                                                        class="path1"></span><span class="path2"></span></i> </span>
                                        </div>
                                        <!--end::Icons-->
                                    </div>
                                    <!--end::Head-->

                                    <!--begin::Summary-->
                                    <div class="fs-base fw-normal text-gray-700 mb-4">
                                        could not get demo7 working from latest metronic version. Had a lot of issues
                                        installing, I had to downgrade my npm to 6.14.4 as someone else recommended here
                                        in the comments, this goot it to compile but when I ran it, the browser showed
                                        errors TypeErr.. </div>
                                    <!--end::Summary-->

                                    <!--begin::Foot-->
                                    <div class="d-flex flex-stack flex-wrap">
                                        <!--begin::Author-->
                                        <div class="d-flex align-items-center py-1">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-35px me-2">
                                                <div
                                                    class="symbol-label bg-light-success fs-3 fw-semibold text-success text-uppercase">
                                                    T </div>
                                            </div>
                                            <!--end::Symbol-->

                                            <!--begin::Name-->
                                            <div class="d-flex flex-column align-items-start justify-content-center">
                                                <span class="text-gray-900 fs-7 fw-semibold lh-1 mb-2">Tim Nilson</span>
                                                <span class="text-muted fs-8 fw-semibold lh-1">3 days ago</span>
                                            </div>
                                            <!--end::Name-->
                                        </div>
                                        <!--end::Author-->

                                        <!--begin::Info-->
                                        <div class="d-flex align-items-center py-1">
                                            <!--begin::Answers-->
                                            <a href="apps/devs/question.html#answers"
                                                class="btn btn-sm btn-outline btn-outline-dashed btn-outline-default px-4 me-2">
                                                44 Answers
                                            </a>
                                            <!--end::Answers-->

                                            <!--begin::Tags-->
                                            <a href="apps/devs/tag.html" class="btn btn-sm btn-light px-4 me-2">
                                                Blazor </a>
                                            <!--end::Tags-->

                                            <!--begin::Upvote-->
                                            <a href="#" class="btn btn-sm btn-flex btn-light px-3"
                                                data-bs-toggle="tooltip" title="Upvote this question"
                                                data-bs-dismiss="click">
                                                3 <i class="ki-duotone ki-black-right fs-3ms-2 me-0 fs-3"></i> </a>
                                            <!--end::Upvote-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Foot-->
                                </div>
                                <!--end::Question-->

                                <!--begin::Separator-->
                                <div class="separator separator-dashed border-gray-300 my-8"></div>
                                <!--end::Separator-->
                                <!--begin::Question-->
                                <div class="mb-0">
                                    <!--begin::Head-->
                                    <div class="d-flex align-items-center mb-4">
                                        <!--begin::Title-->
                                        <a href="apps/devs/question.html"
                                            class="fs-2 fw-bold text-gray-900 text-hover-primary me-1">
                                            Using Metronic with .NET multi tenant application </a>
                                        <!--end::Title-->

                                        <!--begin::Icons-->
                                        <div class="d-flex align-items-center">
                                            <span class="ms-1" data-bs-toggle="tooltip" title="Resolved">
                                                <i class="ki-duotone ki-check-circle text-success fs-1"><span
                                                        class="path1"></span><span class="path2"></span></i> </span>
                                        </div>
                                        <!--end::Icons-->
                                    </div>
                                    <!--end::Head-->

                                    <!--begin::Summary-->
                                    <div class="fs-base fw-normal text-gray-700 mb-4">
                                        When approx. is the next update for the Laravel version planned? Waiting for the
                                        CRUD, 2nd factor etc. features before starting my project. Also can we expect
                                        the Laravel + Vue version in the next update ? </div>
                                    <!--end::Summary-->

                                    <!--begin::Foot-->
                                    <div class="d-flex flex-stack flex-wrap">
                                        <!--begin::Author-->
                                        <div class="d-flex align-items-center py-1">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-35px me-2">
                                                <img src="./public/assets/media/avatars/300-10.jpg" alt="user" />
                                            </div>
                                            <!--end::Symbol-->

                                            <!--begin::Name-->
                                            <div class="d-flex flex-column align-items-start justify-content-center">
                                                <span class="text-gray-900 fs-7 fw-semibold lh-1 mb-2">Ana Quil</span>
                                                <span class="text-muted fs-8 fw-semibold lh-1">5 days ago</span>
                                            </div>
                                            <!--end::Name-->
                                        </div>
                                        <!--end::Author-->

                                        <!--begin::Info-->
                                        <div class="d-flex align-items-center py-1">
                                            <!--begin::Answers-->
                                            <a href="apps/devs/question.html#answers"
                                                class="btn btn-sm btn-outline btn-outline-dashed btn-outline-default px-4 me-2">
                                                2 Answers
                                            </a>
                                            <!--end::Answers-->

                                            <!--begin::Tags-->
                                            <a href="apps/devs/tag.html" class="btn btn-sm btn-light px-4 me-2">
                                                Aspdotnet </a>
                                            <!--end::Tags-->

                                            <!--begin::Upvote-->
                                            <a href="#" class="btn btn-sm btn-flex btn-light px-3"
                                                data-bs-toggle="tooltip" title="Upvote this question"
                                                data-bs-dismiss="click">
                                                4 <i class="ki-duotone ki-black-right fs-3ms-2 me-0 fs-3"></i> </a>
                                            <!--end::Upvote-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Foot-->
                                </div>
                                <!--end::Question-->

                                <!--begin::Separator-->
                                <div class="separator separator-dashed border-gray-300 my-8"></div>
                                <!--end::Separator-->
                            </div>
                            <!--end::Questions-->

                            <!--begin::Pagination-->
                            <div class="d-flex flex-center mb-0">
                                <a href="#"
                                    class="btn btn-icon btn-light btn-active-light-primary h-30px w-30px fw-semibold fs-6 mx-2 ">1</a>
                                <a href="#"
                                    class="btn btn-icon btn-light btn-active-light-primary h-30px w-30px fw-semibold fs-6 mx-2 active">2</a>
                                <a href="#"
                                    class="btn btn-icon btn-light btn-active-light-primary h-30px w-30px fw-semibold fs-6 mx-2 ">3</a>
                                <a href="#"
                                    class="btn btn-icon btn-light btn-active-light-primary h-30px w-30px fw-semibold fs-6 mx-2 ">4</a>
                                <a href="#"
                                    class="btn btn-icon btn-light btn-active-light-primary h-30px w-30px fw-semibold fs-6 mx-2 ">5</a>
                                <span class="text-muted fw-semibold fs-6 mx-2">..</span>
                                <a href="#"
                                    class="btn btn-icon btn-light btn-active-light-primary h-30px w-30px fw-semibold fs-6 mx-2 ">19</a>
                            </div>
                            <!--end::Questions-->
                        </div>
                        <!--end::Post-->
                    </div>
                    <!--end::Content-->

                    <!--begin::Footer-->
                    <div class="footer pt-10 pb-5 d-flex flex-column flex-md-row flex-stack" id="kt_footer">
                        <!--begin::Copyright-->
                        <div class="text-dark order-2 order-md-1">
                            <span class="text-muted fw-semibold me-1">2023&copy;</span>
                            <a href="https://keenthemes.com/" target="_blank"
                                class="text-gray-800 text-hover-primary">Keenthemes</a>
                        </div>
                        <!--end::Copyright-->

                        <!--begin::Menu-->
                        <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                            <li class="menu-item"><a href="https://keenthemes.com/" target="_blank"
                                    class="menu-link px-2">About</a></li>

                            <li class="menu-item"><a href="https://devs.keenthemes.com/" target="_blank"
                                    class="menu-link px-2">Support</a></li>

                            <li class="menu-item"><a href="https://1.envato.market/EA4JP" target="_blank"
                                    class="menu-link ps-2 pe-0">Purchase</a></li>
                        </ul>
                        <!--end::Menu-->
                    </div>
                    <!--end::Footer-->
                </div>
                <!--end::Wrapper-->

                <!--begin::Sidebar-->
                <div class="sidebar p-5 px-lg-0 py-lg-11" data-kt-drawer="true" data-kt-drawer-name="sidebar"
                    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                    data-kt-drawer-width="275px" data-kt-drawer-direction="end"
                    data-kt-drawer-toggle="#kt_sidebar_toggle">
                    <!--begin::Quick Search-->
                    <form id="kt_sidebar_search_form"
                        action="https://preview.keenthemes.com/metronic8/demo5/apps/devs/search.html"
                        class="w-100 position-relative mb-5 mb-lg-10" autocomplete="off">
                        <!--begin::Hidden input(Added to disable form autocomplete)-->
                        <input type="hidden" />
                        <!--end::Hidden input-->

                        <!--begin::Icon-->
                        <i
                            class="ki-duotone ki-magnifier fs-2 text-gray-700 position-absolute top-50 translate-middle-y ms-4"><span
                                class="path1"></span><span class="path2"></span></i>
                        <!--end::Icon-->

                        <!--begin::Input-->
                        <input type="text" class="form-control bg-transparent ps-13 fs-7 h-40px" name="search" value=""
                            placeholder="Search" />
                        <!--end::Input-->
                    </form>
                    <!--end::Quick Search-->
                    <!--begin::Popular Questions-->
                    <div class="card bg-light mb-5 mb-lg-10 shadow-none border-0">
                        <!--begin::Header-->
                        <div class="card-header align-items-center border-0">
                            <!--begin::Title-->
                            <h3 class="card-title fw-bold text-gray-900 fs-3">Popular Questions</h3>
                            <!--end::Title-->
                        </div>
                        <!--end::Header-->

                        <!--begin::Body-->
                        <div class="card-body pt-0">
                            <!--begin::Item-->
                            <div class="d-flex mb-5">
                                <!--begin::Arrow-->
                                <i class="ki-duotone ki-right-square fs-2 mt-0 me-2"><span class="path1"></span><span
                                        class="path2"></span></i>
                                <!--end::Arrow-->

                                <!--begin::Title-->
                                <a href="apps/devs/question.html" class="text-gray-700 text-hover-primary fs-6 fw-bold">
                                    How to use Metrponic with Django Framework ? </a>
                                <!--end::Title-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex mb-5">
                                <!--begin::Arrow-->
                                <i class="ki-duotone ki-right-square fs-2 mt-0 me-2"><span class="path1"></span><span
                                        class="path2"></span></i>
                                <!--end::Arrow-->

                                <!--begin::Title-->
                                <a href="apps/devs/question.html" class="text-gray-700 text-hover-primary fs-6 fw-bold">
                                    When to expect new version of Metronic Laravel ? </a>
                                <!--end::Title-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex mb-5">
                                <!--begin::Arrow-->
                                <i class="ki-duotone ki-right-square fs-2 mt-0 me-2"><span class="path1"></span><span
                                        class="path2"></span></i>
                                <!--end::Arrow-->

                                <!--begin::Title-->
                                <a href="apps/devs/question.html" class="text-gray-700 text-hover-primary fs-6 fw-bold">
                                    Could not get Metronic Demo 7 working </a>
                                <!--end::Title-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex mb-5">
                                <!--begin::Arrow-->
                                <i class="ki-duotone ki-right-square fs-2 mt-0 me-2"><span class="path1"></span><span
                                        class="path2"></span></i>
                                <!--end::Arrow-->

                                <!--begin::Title-->
                                <a href="apps/devs/question.html" class="text-gray-700 text-hover-primary fs-6 fw-bold">
                                    I want to get a refund </a>
                                <!--end::Title-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex ">
                                <!--begin::Arrow-->
                                <i class="ki-duotone ki-right-square fs-2 mt-0 me-2"><span class="path1"></span><span
                                        class="path2"></span></i>
                                <!--end::Arrow-->

                                <!--begin::Title-->
                                <a href="apps/devs/question.html" class="text-gray-700 text-hover-primary fs-6 fw-bold">
                                    How to use Metrponic with Rails Framework ? </a>
                                <!--end::Title-->
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end: Card Body-->
                    </div>
                    <!--end::Popular Questions-->
                    <!--begin::Popular Questions-->
                    <div class="card bg-light mb-5 mb-lg-10 shadow-none border-0">
                        <!--begin::Header-->
                        <div class="card-header align-items-center border-0">
                            <!--begin::Title-->
                            <h3 class="card-title fw-bold text-gray-900 fs-3">Latest Tutorials</h3>
                            <!--end::Title-->
                        </div>
                        <!--end::Header-->

                        <!--begin::Body-->
                        <div class="card-body pt-0">
                            <!--begin::Item-->
                            <div class="d-flex mb-5">
                                <!--begin::Arrow-->
                                <i class="ki-duotone ki-right-square fs-2 mt-0 me-2"><span class="path1"></span><span
                                        class="path2"></span></i>
                                <!--end::Arrow-->

                                <!--begin::Title-->
                                <a href="apps/devs/question.html" class="text-gray-700 text-hover-primary fs-6 fw-bold">
                                    How to use customize Metronoc's SASS </a>
                                <!--end::Title-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex mb-5">
                                <!--begin::Arrow-->
                                <i class="ki-duotone ki-right-square fs-2 mt-0 me-2"><span class="path1"></span><span
                                        class="path2"></span></i>
                                <!--end::Arrow-->

                                <!--begin::Title-->
                                <a href="apps/devs/question.html" class="text-gray-700 text-hover-primary fs-6 fw-bold">
                                    How to change web font globally </a>
                                <!--end::Title-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex mb-5">
                                <!--begin::Arrow-->
                                <i class="ki-duotone ki-right-square fs-2 mt-0 me-2"><span class="path1"></span><span
                                        class="path2"></span></i>
                                <!--end::Arrow-->

                                <!--begin::Title-->
                                <a href="apps/devs/question.html" class="text-gray-700 text-hover-primary fs-6 fw-bold">
                                    How to setup dark mode </a>
                                <!--end::Title-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex mb-5">
                                <!--begin::Arrow-->
                                <i class="ki-duotone ki-right-square fs-2 mt-0 me-2"><span class="path1"></span><span
                                        class="path2"></span></i>
                                <!--end::Arrow-->

                                <!--begin::Title-->
                                <a href="apps/devs/question.html" class="text-gray-700 text-hover-primary fs-6 fw-bold">
                                    Metronic file structure and build tools </a>
                                <!--end::Title-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex ">
                                <!--begin::Arrow-->
                                <i class="ki-duotone ki-right-square fs-2 mt-0 me-2"><span class="path1"></span><span
                                        class="path2"></span></i>
                                <!--end::Arrow-->

                                <!--begin::Title-->
                                <a href="apps/devs/question.html" class="text-gray-700 text-hover-primary fs-6 fw-bold">
                                    Metronic integration with Blazor server side </a>
                                <!--end::Title-->
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end: Card Body-->
                    </div>
                    <!--end::Popular Questions-->
                </div>
                <!--end::Sidebar-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Root-->

    <!--begin::Engage modals-->
    <!--begin::Modal - Sitemap-->
    <div class="modal fade bg-dark bg-opacity-75" id="kt_app_engage_prebuilts_modal" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-fullscreen p-5 p-lg-10" id="kt_engage_prebuilts_modal_dialog">
            <!--begin::Modal content-->
            <div class="modal-content rounded-4">
                <!--begin::Modal header-->
                <div class="modal-header flex-stack border-0 px-10 pt-5 pb-0" id="kt_engage_prebuilts_header">
                    <!--begin::View menu-->
                    <div id="kt_app_engage_prebuilts_view_menu" class="position-relative z-index-1">
                        <!--begin::Toggle-->
                        <button type="button" data-kt-element="selected" class="btn btn-flex px-0 rotate-"
                            data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"
                            data-kt-menu-offset="0px, -1px">
                            <!--begin::Title-->
                            <span class="fs-6 fw-bold text-gray-600 me-2" data-kt-element="title">
                                Image View
                            </span>
                            <!--end::Title-->

                            <!--begin::Arrow-->
                            <i class="ki-duotone ki-down fs-4 text-gray-600 rotate-180-"></i>
                            <!--end::Arrow-->
                        </button>
                        <!--end::Toggle-->

                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-active-bg menu-state-primary menu-gray-600 menu-rounded w-150px py-3 px-3"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item">
                                <!--begin::Menu link-->
                                <a href="#" class="menu-link px-4 py-2 active" data-kt-mode="image">
                                    Image View
                                </a>
                                <!--end::Menu link-->
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item">
                                <!--begin::Menu link-->
                                <a href="#" class="menu-link px-4 py-2" data-kt-mode="text">
                                    Text View
                                </a>
                                <!--end::Menu link-->
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </div>
                    <!--end::View menu-->
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary me-n2 position-relative z-index-1"
                        data-bs-dismiss="modal">
                        <i class="ki-duotone ki-cross-square fs-1"><span class="path1"></span><span
                                class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->

                <!--begin::Modal body-->
                <div class="modal-body pt-0 pb-5 px-15 mt-n5" id="kt_app_engage_prebuilts_body">
                    <div class="container-fluid">

                        <style>
                        .app-prebuilts-thumbnail {
                            border: 1px solid var(--kt-body-bg);
                            filter: drop-shadow(0px 0px 50px rgba(49, 52, 122, 0.12));
                        }
                        </style>

                        <!--begin::Image view-->
                        <div class="d-block" id="kt_app_engage_prebuilts_view_image">
                            <!--begin::Tabs wrapper-->
                            <div class="d-flex flex-center" id="kt_app_engage_prebuilts_view_image_tabs">
                                <!--begin::Tabs-->
                                <ul class="nav nav-tabs border-0 mb-5">
                                    <!--begin::Tab item-->
                                    <li class="nav-item px-2">
                                        <!--begin::Tab link-->
                                        <a class="nav-link btn btn-active-light btn-color-gray-600 btn-active-color-gray-800 fs-5 fw-bold 
						" data-bs-toggle="tab" href="#kt_app_engage_prebuilts_tab_demos">

                                            Layouts </a>
                                        <!--end::Tab link-->
                                    </li>
                                    <!--end::Tab item-->
                                    <!--begin::Tab item-->
                                    <li class="nav-item px-2">
                                        <!--begin::Tab link-->
                                        <a class="nav-link btn btn-active-light btn-color-gray-600 btn-active-color-gray-800 fs-5 fw-bold 
						active" data-bs-toggle="tab" href="#kt_app_engage_prebuilts_tab_dashboards">

                                            Dashboards </a>
                                        <!--end::Tab link-->
                                    </li>
                                    <!--end::Tab item-->
                                    <!--begin::Tab item-->
                                    <li class="nav-item px-2">
                                        <!--begin::Tab link-->
                                        <a class="nav-link btn btn-active-light btn-color-gray-600 btn-active-color-gray-800 fs-5 fw-bold 
						" data-bs-toggle="tab" href="#kt_app_engage_prebuilts_tab_pages">

                                            Pages </a>
                                        <!--end::Tab link-->
                                    </li>
                                    <!--end::Tab item-->
                                    <!--begin::Tab item-->
                                    <li class="nav-item px-2">
                                        <!--begin::Tab link-->
                                        <a class="nav-link btn btn-active-light btn-color-gray-600 btn-active-color-gray-800 fs-5 fw-bold 
						" data-bs-toggle="tab" href="#kt_app_engage_prebuilts_tab_apps">

                                            Apps </a>
                                        <!--end::Tab link-->
                                    </li>
                                    <!--end::Tab item-->
                                </ul>
                                <!--end::Tabs-->
                            </div>
                            <!--end::Tabs wrapper-->

                            <!--begin::Tab content-->
                            <div class="tab-content">
                                <div class="pt-5 tab-pane fade " id="kt_app_engage_prebuilts_tab_demos" role="tabpanel">
                                    <!--begin::Scroll wrapper-->
                                    <div class="hover-scroll-y pe-12 me-n12" data-kt-scroll="true"
                                        data-kt-scroll-height="auto"
                                        data-kt-scroll-wrappers="#kt_app_engage_prebuilts_modal, #kt_app_engage_prebuilts_modal_dialog, #kt_app_engage_prebuilts_body"
                                        data-kt-scroll-dependencies="#kt_app_engage_prebuilts_header, #kt_app_engage_prebuilts_view_image_tabs"
                                        data-kt-scroll-offset="215px">

                                        <!--begin::Row-->
                                        <div class="row gy-10">


                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo1/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Metronic Original </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/demos/demo1.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo2/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        SaaS App </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/demos/demo2.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo30/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Sales Tracking App </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/demos/demo30.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo39/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Billing SaaS </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/demos/demo39.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo31/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Marketing Automation </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/demos/demo31.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo27/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Databox Dashboard </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/demos/demo27.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo6/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Time Reporting </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/demos/demo6.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo3/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        New Trend </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/demos/demo3.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo23/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Member Dashboard </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/demos/demo23.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo38/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Email Marketing </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/demos/demo38.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo36/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Digital Marketing </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/demos/demo36.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo10/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Project Grid </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/demos/demo10.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo35/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Traffic Analytics </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/demos/demo35.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo8/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Analytics App </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/demos/demo8.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo25/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        User Guiding App </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/demos/demo25.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo20/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        CRM Software </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/demos/demo20.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo7/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        CRM Dashboard </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/demos/demo7.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo50/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Micro-SaaS App </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/demos/demo50.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo32/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Delivery Management </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/demos/demo32.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo42/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Calendar Workspace </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/demos/demo42.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo44/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Recruit Automation </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/demos/demo44.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo33/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Social Campaings </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/demos/demo33.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo37/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Cloud Suite </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/demos/demo37.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo11/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Finance Planner </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/demos/demo11.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo16/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Podcast App </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/demos/demo16.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo26/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Planable App </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/demos/demo26.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo22/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Media Publisher </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/demos/demo22.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo19/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Reports Panel </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/demos/demo19.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo40/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        HR App </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/demos/demo40.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo29/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Project Workspace </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/demos/demo29.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo24/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Helpdesk App </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/demos/demo24.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo4/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Jobs Site </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/demos/demo4.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo41/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Business Intelligence </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/demos/demo41.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo18/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Goal Tracking </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/demos/demo18.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo21/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Monochrome App </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/demos/demo21.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo34/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Finance Analytics </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/demos/demo34.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo15/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Crypto Planner </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/demos/demo15.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo14/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Project Workplace </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/demos/demo14.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo9/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Sales Manager </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/demos/demo9.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="index.html" data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Support Forum </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/demos/demo5.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo13/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Classic Dashboard </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/demos/demo13.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo12/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Data Analyzer </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/demos/demo12.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo48/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Cloud ERP </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/demos/demo48.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo28/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        eCommerce App </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/demos/demo28.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo17/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Events Scheduler </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/demos/demo17.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo49/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        KPI Tracking </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/demos/demo49.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo43/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Healthcare Dashboard </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/demos/demo43.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo45/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        OKR Tracking </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/demos/demo45.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo47/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Campaign Automation </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/demos/demo47.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo46/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Audit Board App </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/demos/demo46.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->


                                        </div>
                                        <!--end::Row-->
                                    </div>
                                    <!--end::Scroll wrapper-->
                                </div>
                                <div class="pt-5 tab-pane fade show active" id="kt_app_engage_prebuilts_tab_dashboards"
                                    role="tabpanel">
                                    <!--begin::Scroll wrapper-->
                                    <div class="hover-scroll-y pe-12 me-n12" data-kt-scroll="true"
                                        data-kt-scroll-height="auto"
                                        data-kt-scroll-wrappers="#kt_app_engage_prebuilts_modal, #kt_app_engage_prebuilts_modal_dialog, #kt_app_engage_prebuilts_body"
                                        data-kt-scroll-dependencies="#kt_app_engage_prebuilts_header, #kt_app_engage_prebuilts_view_image_tabs"
                                        data-kt-scroll-offset="215px">

                                        <!--begin::Row-->
                                        <div class="row gy-10">



                                            <!--begin::Col-->
                                            <div class="col-md-4">

                                                <!--begin::Preview-->
                                                <a href="index.html" data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Multipurpose </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/dashboards/multipurpose-demo5.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-md-4">

                                                <!--begin::Preview-->
                                                <a href="dashboards/marketing.html" data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Marketing </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/dashboards/marketing.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-md-4">

                                                <!--begin::Preview-->
                                                <a href="dashboards/social.html" data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Social </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/dashboards/social.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-md-4">

                                                <!--begin::Preview-->
                                                <a href="dashboards/ecommerce.html" data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Ecommerce </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/dashboards/ecommerce.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-md-4">

                                                <!--begin::Preview-->
                                                <a href="dashboards/store-analytics.html" data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Store-analytics </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/dashboards/store-analytics.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-md-4">

                                                <!--begin::Preview-->
                                                <a href="dashboards/logistics.html" data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Logistics </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/dashboards/logistics.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-md-4">

                                                <!--begin::Preview-->
                                                <a href="dashboards/delivery.html" data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Delivery </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/dashboards/delivery.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-md-4">

                                                <!--begin::Preview-->
                                                <a href="dashboards/online-courses.html" data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Online-courses </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/dashboards/online-courses.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-md-4">

                                                <!--begin::Preview-->
                                                <a href="dashboards/school.html" data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        School </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/dashboards/school.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-md-4">

                                                <!--begin::Preview-->
                                                <a href="dashboards/crypto.html" data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Crypto </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/dashboards/crypto.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-md-4">

                                                <!--begin::Preview-->
                                                <a href="dashboards/finance-performance.html" data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Finance-performance </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/dashboards/finance-performance.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-md-4">

                                                <!--begin::Preview-->
                                                <a href="dashboards/website-analytics.html" data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Website-analytics </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/dashboards/website-analytics.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-md-4">

                                                <!--begin::Preview-->
                                                <a href="dashboards/bidding.html" data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Bidding </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/dashboards/bidding.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-md-4">

                                                <!--begin::Preview-->
                                                <a href="dashboards/podcast.html" data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Podcast </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/dashboards/podcast.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-md-4">

                                                <!--begin::Preview-->
                                                <a href="dashboards/projects.html" data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Projects </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/dashboards/projects.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-md-4">

                                                <!--begin::Preview-->
                                                <a href="dashboards/call-center.html" data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Call-center </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/dashboards/call-center.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-md-4">

                                                <!--begin::Preview-->
                                                <a href="dashboards/pos.html" data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        POS </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/dashboards/pos.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                        </div>
                                        <!--end::Row-->
                                    </div>
                                    <!--end::Scroll wrapper-->
                                </div>
                                <div class="pt-5 tab-pane fade " id="kt_app_engage_prebuilts_tab_apps" role="tabpanel">
                                    <!--begin::Scroll wrapper-->
                                    <div class="hover-scroll-y pe-12 me-n12" data-kt-scroll="true"
                                        data-kt-scroll-height="auto"
                                        data-kt-scroll-wrappers="#kt_app_engage_prebuilts_modal, #kt_app_engage_prebuilts_modal_dialog, #kt_app_engage_prebuilts_body"
                                        data-kt-scroll-dependencies="#kt_app_engage_prebuilts_header, #kt_app_engage_prebuilts_view_image_tabs"
                                        data-kt-scroll-offset="215px">

                                        <!--begin::Row-->
                                        <div class="row gy-10">


                                            <!--begin::Col-->
                                            <div class="col-lg-4">

                                                <!--begin::Preview-->
                                                <a href="apps/projects/list/list.html" data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Projects </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/apps/projects.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">

                                                <!--begin::Preview-->
                                                <a href="apps/ecommerce/catalog/products/products.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Ecommerce </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/apps/ecommerce.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">

                                                <!--begin::Preview-->
                                                <a href="apps/customers/list/list.html" data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Customers </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/apps/customers.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">

                                                <!--begin::Preview-->
                                                <a href="apps/subscriptions/list/list.html" data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Subscriptions </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/apps/subscriptions.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">

                                                <!--begin::Preview-->
                                                <a href="apps/user-management/users/list/list.html" data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        User Management </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/apps/user-management.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">

                                                <!--begin::Preview-->
                                                <a href="apps/invoices/create/main.html" data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Invoices </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/apps/invoices.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">

                                                <!--begin::Preview-->
                                                <a href="apps/support-center/overview/main.html" data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Support Center </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/apps/support-center.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">

                                                <!--begin::Preview-->
                                                <a href="apps/chat/private.html" data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Chat </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/apps/chat.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">

                                                <!--begin::Preview-->
                                                <a href="apps/calendar/calendar.html" data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Calendar </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/apps/calendar.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">

                                                <!--begin::Preview-->
                                                <a href="apps/file-manager/list/folders.html" data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        File Manager </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/apps/file-manager.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">

                                                <!--begin::Preview-->
                                                <a href="apps/inbox/listing/listing.html" data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Inbox </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/apps/inbox.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">

                                                <!--begin::Preview-->
                                                <a href="apps/contacts/getting-started.html" data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Contacts </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/apps/contacts.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->
                                            <br />
                                            <b>Warning</b>: Undefined array key "_view" in
                                            <b>/var/www/preview.keenthemes.com/kt-products/metronic/releases/2023-03-24-032718/core/html/dist/view/partials/engage-new/prebuilts/content/image/__apps.php</b>
                                            on line <b>5</b><br />

                                            <!--begin::Col-->
                                            <div class="col-lg-4">

                                                <!--begin::Preview-->
                                                <a href=".html" data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Devs </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span
                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/apps/devs.png"
                                                            class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                        </div>
                                        <!--end::Row-->
                                    </div>
                                    <!--end::Scroll wrapper-->
                                </div>

                                <div class="tab-pane fade" id="kt_app_engage_prebuilts_tab_pages">

                                    <!--begin::Tabs wrapper-->
                                    <div class="d-flex flex-center mb-5">
                                        <div class="border-bottom">
                                            <!--begin::Tabs-->
                                            <ul
                                                class="nav nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-6 fw-bold m-0 p-0 gap-4">
                                                <!--begin::Tab item-->
                                                <li class="nav-item p-0 m-0">
                                                    <!--begin::Tab link-->
                                                    <a class="nav-link text-muted text-active-primary pt-0 pb-4 
						active" data-bs-toggle="tab" href="#kt_app_engage_prebuilts_tab_pages_authentication">

                                                        Authentication </a>
                                                    <!--end::Tab link-->
                                                </li>
                                                <!--end::Tab item-->
                                                <!--begin::Tab item-->
                                                <li class="nav-item p-0 m-0">
                                                    <!--begin::Tab link-->
                                                    <a class="nav-link text-muted text-active-primary pt-0 pb-4 
						" data-bs-toggle="tab" href="#kt_app_engage_prebuilts_tab_pages_general">

                                                        General </a>
                                                    <!--end::Tab link-->
                                                </li>
                                                <!--end::Tab item-->
                                                <!--begin::Tab item-->
                                                <li class="nav-item p-0 m-0">
                                                    <!--begin::Tab link-->
                                                    <a class="nav-link text-muted text-active-primary pt-0 pb-4 
						" data-bs-toggle="tab" href="#kt_app_engage_prebuilts_tab_pages_account">

                                                        Account </a>
                                                    <!--end::Tab link-->
                                                </li>
                                                <!--end::Tab item-->
                                                <!--begin::Tab item-->
                                                <li class="nav-item p-0 m-0">
                                                    <!--begin::Tab link-->
                                                    <a class="nav-link text-muted text-active-primary pt-0 pb-4 
						" data-bs-toggle="tab" href="#kt_app_engage_prebuilts_tab_pages_modals">

                                                        Modals </a>
                                                    <!--end::Tab link-->
                                                </li>
                                                <!--end::Tab item-->
                                                <!--begin::Tab item-->
                                                <li class="nav-item p-0 m-0">
                                                    <!--begin::Tab link-->
                                                    <a class="nav-link text-muted text-active-primary pt-0 pb-4 
						" data-bs-toggle="tab" href="#kt_app_engage_prebuilts_tab_pages_wizards">

                                                        Wizards </a>
                                                    <!--end::Tab link-->
                                                </li>
                                                <!--end::Tab item-->
                                                <!--begin::Tab item-->
                                                <li class="nav-item p-0 m-0">
                                                    <!--begin::Tab link-->
                                                    <a class="nav-link text-muted text-active-primary pt-0 pb-4 
						" data-bs-toggle="tab" href="#kt_app_engage_prebuilts_tab_pages_search">

                                                        Search </a>
                                                    <!--end::Tab link-->
                                                </li>
                                                <!--end::Tab item-->
                                                <!--begin::Tab item-->
                                                <li class="nav-item p-0 m-0">
                                                    <!--begin::Tab link-->
                                                    <a class="nav-link text-muted text-active-primary pt-0 pb-4 
						" data-bs-toggle="tab" href="#kt_app_engage_prebuilts_tab_pages_widgets">

                                                        Widgets </a>
                                                    <!--end::Tab link-->
                                                </li>
                                                <!--end::Tab item-->
                                                <!--begin::Tab item-->
                                                <li class="nav-item p-0 m-0">
                                                    <!--begin::Tab link-->
                                                    <a class="nav-link text-muted text-active-primary pt-0 pb-4 
						" data-bs-toggle="tab" href="#kt_app_engage_prebuilts_tab_pages_email-templates">

                                                        Email Templates </a>
                                                    <!--end::Tab link-->
                                                </li>
                                                <!--end::Tab item-->
                                            </ul>
                                            <!--end::Tabs-->
                                        </div>
                                    </div>
                                    <!--end::Tabs wrapper-->

                                    <!--begin::Scroll wrapper-->
                                    <div class="hover-scroll-y pe-12 me-n12" data-kt-scroll="true"
                                        data-kt-scroll-height="auto"
                                        data-kt-scroll-wrappers="#kt_app_engage_prebuilts_modal, #kt_app_engage_prebuilts_modal_dialog, #kt_app_engage_prebuilts_body, #kt_app_engage_prebuilts_view_image"
                                        data-kt-scroll-dependencies="#kt_app_engage_prebuilts_header, #kt_app_engage_prebuilts_view_text_heading"
                                        data-kt-scroll-offset="250px">

                                        <!--begin::Tab content-->
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active"
                                                id="kt_app_engage_prebuilts_tab_pages_authentication" role="tabpanel">


                                                <!--begin::Row-->
                                                <div class="row g-10">

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="authentication/layouts/corporate/sign-in.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3
                                                                class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Corporate </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span
                                                                class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                    data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/auth-corporate.png"
                                                                    class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="authentication/layouts/creative/sign-in.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3
                                                                class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Creative </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span
                                                                class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                    data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/auth-creative.png"
                                                                    class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="authentication/layouts/fancy/sign-in.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3
                                                                class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Fancy </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span
                                                                class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                    data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/auth-fancy.png"
                                                                    class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="authentication/layouts/overlay/sign-in.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3
                                                                class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Overlay </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span
                                                                class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                    data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/auth-overlay.png"
                                                                    class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="authentication/extended/multi-steps-sign-up.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3
                                                                class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Multi-Step </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span
                                                                class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                    data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/auth-multistep.png"
                                                                    class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="authentication/layouts/corporate/two-factor.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3
                                                                class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Two-Factor </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span
                                                                class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                    data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/auth-2factor.png"
                                                                    class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="authentication/general/password-confirmation.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3
                                                                class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Password Changed </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span
                                                                class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                    data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/auth-passwordchanged.png"
                                                                    class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="authentication/general/verify-email.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3
                                                                class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Verify Email </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span
                                                                class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                    data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/auth-verifyemail.png"
                                                                    class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="authentication/general/welcome.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3
                                                                class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Welcome </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span
                                                                class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                    data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/auth-welcome.png"
                                                                    class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="authentication/general/coming-soon.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3
                                                                class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Coming Soon </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span
                                                                class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                    data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/auth-comingsoon.png"
                                                                    class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="authentication/general/account-deactivated.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3
                                                                class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Account Deactivated </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span
                                                                class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                    data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/auth-accountdeactivated.png"
                                                                    class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="authentication/general/error-404.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3
                                                                class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                404 Page </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span
                                                                class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                    data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/auth-404.png"
                                                                    class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="authentication/general/error-500.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3
                                                                class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                505 Page </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span
                                                                class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                    data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/auth-500.png"
                                                                    class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Row-->

                                            </div>
                                            <div class="tab-pane fade " id="kt_app_engage_prebuilts_tab_pages_general"
                                                role="tabpanel">


                                                <div class="mb-5">
                                                    <!--begin::Collapse toggle-->
                                                    <a class="btn btn-flex btn-color-dark flex-stack p-0 mb-5 toggle collapsible active"
                                                        data-bs-toggle="collapse"
                                                        href="#kt_app_engage_prebuilts_tab_pages_general_user-profile">

                                                        <span class="fw-bolder fs-2">
                                                            User Profile </span>

                                                        <i
                                                            class="ki-duotone ki-plus-square toggle-off text-primary fs-2 ms-4"><span
                                                                class="path1"></span><span class="path2"></span><span
                                                                class="path3"></span></i>
                                                        <i
                                                            class="ki-duotone ki-minus-square toggle-on text-primary fs-2 ms-4"><span
                                                                class="path1"></span><span class="path2"></span></i>
                                                    </a>
                                                    <!--end::Collapse toggle-->

                                                    <!--begin::Collapse content-->
                                                    <div class="show"
                                                        id="kt_app_engage_prebuilts_tab_pages_general_user-profile">
                                                        <!--begin::Row-->
                                                        <div class="row g-10 pt-2 pb-5">

                                                            <!--begin::Col-->
                                                            <div class="col-lg-4">

                                                                <!--begin::Preview-->
                                                                <a href="pages/user-profile/overview.html"
                                                                    data-kt-href="true"
                                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                                    <!--begin::Title-->
                                                                    <h3
                                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                        Profile Overview </h3>
                                                                    <!--end::Title-->

                                                                    <!--begin::Thumbnail-->
                                                                    <span
                                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/profile-overview.png"
                                                                            class="lozad w-100 rounded" />
                                                                    </span>
                                                                    <!--end::Thumbnail-->
                                                                </a>
                                                                <!--end::Preview-->
                                                            </div>
                                                            <!--end::Col-->

                                                            <!--begin::Col-->
                                                            <div class="col-lg-4">

                                                                <!--begin::Preview-->
                                                                <a href="pages/user-profile/projects.html"
                                                                    data-kt-href="true"
                                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                                    <!--begin::Title-->
                                                                    <h3
                                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                        User Projects </h3>
                                                                    <!--end::Title-->

                                                                    <!--begin::Thumbnail-->
                                                                    <span
                                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/profile-overview.png"
                                                                            class="lozad w-100 rounded" />
                                                                    </span>
                                                                    <!--end::Thumbnail-->
                                                                </a>
                                                                <!--end::Preview-->
                                                            </div>
                                                            <!--end::Col-->

                                                            <!--begin::Col-->
                                                            <div class="col-lg-4">

                                                                <!--begin::Preview-->
                                                                <a href="pages/user-profile/campaigns.html"
                                                                    data-kt-href="true"
                                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                                    <!--begin::Title-->
                                                                    <h3
                                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                        User Campaigns </h3>
                                                                    <!--end::Title-->

                                                                    <!--begin::Thumbnail-->
                                                                    <span
                                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/profile-campaigns.png"
                                                                            class="lozad w-100 rounded" />
                                                                    </span>
                                                                    <!--end::Thumbnail-->
                                                                </a>
                                                                <!--end::Preview-->
                                                            </div>
                                                            <!--end::Col-->

                                                            <!--begin::Col-->
                                                            <div class="col-lg-4">

                                                                <!--begin::Preview-->
                                                                <a href="pages/user-profile/documents.html"
                                                                    data-kt-href="true"
                                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                                    <!--begin::Title-->
                                                                    <h3
                                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                        User Documents </h3>
                                                                    <!--end::Title-->

                                                                    <!--begin::Thumbnail-->
                                                                    <span
                                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/profile-documents.png"
                                                                            class="lozad w-100 rounded" />
                                                                    </span>
                                                                    <!--end::Thumbnail-->
                                                                </a>
                                                                <!--end::Preview-->
                                                            </div>
                                                            <!--end::Col-->

                                                            <!--begin::Col-->
                                                            <div class="col-lg-4">

                                                                <!--begin::Preview-->
                                                                <a href="pages/user-profile/followers.html"
                                                                    data-kt-href="true"
                                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                                    <!--begin::Title-->
                                                                    <h3
                                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                        User Followers </h3>
                                                                    <!--end::Title-->

                                                                    <!--begin::Thumbnail-->
                                                                    <span
                                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/profile-followers.png"
                                                                            class="lozad w-100 rounded" />
                                                                    </span>
                                                                    <!--end::Thumbnail-->
                                                                </a>
                                                                <!--end::Preview-->
                                                            </div>
                                                            <!--end::Col-->

                                                            <!--begin::Col-->
                                                            <div class="col-lg-4">

                                                                <!--begin::Preview-->
                                                                <a href="pages/user-profile/activity.html"
                                                                    data-kt-href="true"
                                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                                    <!--begin::Title-->
                                                                    <h3
                                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                        User Activity </h3>
                                                                    <!--end::Title-->

                                                                    <!--begin::Thumbnail-->
                                                                    <span
                                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/profile-activity.png"
                                                                            class="lozad w-100 rounded" />
                                                                    </span>
                                                                    <!--end::Thumbnail-->
                                                                </a>
                                                                <!--end::Preview-->
                                                            </div>
                                                            <!--end::Col-->
                                                        </div>
                                                        <!--end::Row-->
                                                    </div>
                                                    <!--end::Collapse content-->
                                                </div>
                                                <div class="mb-5">
                                                    <!--begin::Collapse toggle-->
                                                    <a class="btn btn-flex btn-color-dark flex-stack p-0 mb-5 toggle collapsible collapsed"
                                                        data-bs-toggle="collapse"
                                                        href="#kt_app_engage_prebuilts_tab_pages_general_corporate">

                                                        <span class="fw-bolder fs-2">
                                                            Corporate </span>

                                                        <i
                                                            class="ki-duotone ki-plus-square toggle-off text-primary fs-2 ms-4"><span
                                                                class="path1"></span><span class="path2"></span><span
                                                                class="path3"></span></i>
                                                        <i
                                                            class="ki-duotone ki-minus-square toggle-on text-primary fs-2 ms-4"><span
                                                                class="path1"></span><span class="path2"></span></i>
                                                    </a>
                                                    <!--end::Collapse toggle-->

                                                    <!--begin::Collapse content-->
                                                    <div class="collapse"
                                                        id="kt_app_engage_prebuilts_tab_pages_general_corporate">
                                                        <!--begin::Row-->
                                                        <div class="row g-10 pt-2 pb-5">

                                                            <!--begin::Col-->
                                                            <div class="col-lg-4">

                                                                <!--begin::Preview-->
                                                                <a href="pages/about.html" data-kt-href="true"
                                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                                    <!--begin::Title-->
                                                                    <h3
                                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                        About Us </h3>
                                                                    <!--end::Title-->

                                                                    <!--begin::Thumbnail-->
                                                                    <span
                                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/corporate-aboutus.png"
                                                                            class="lozad w-100 rounded" />
                                                                    </span>
                                                                    <!--end::Thumbnail-->
                                                                </a>
                                                                <!--end::Preview-->
                                                            </div>
                                                            <!--end::Col-->

                                                            <!--begin::Col-->
                                                            <div class="col-lg-4">

                                                                <!--begin::Preview-->
                                                                <a href="pages/contact.html" data-kt-href="true"
                                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                                    <!--begin::Title-->
                                                                    <h3
                                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                        Contact Us </h3>
                                                                    <!--end::Title-->

                                                                    <!--begin::Thumbnail-->
                                                                    <span
                                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/corporate-contactus.png"
                                                                            class="lozad w-100 rounded" />
                                                                    </span>
                                                                    <!--end::Thumbnail-->
                                                                </a>
                                                                <!--end::Preview-->
                                                            </div>
                                                            <!--end::Col-->

                                                            <!--begin::Col-->
                                                            <div class="col-lg-4">

                                                                <!--begin::Preview-->
                                                                <a href="pages/licenses.html" data-kt-href="true"
                                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                                    <!--begin::Title-->
                                                                    <h3
                                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                        License </h3>
                                                                    <!--end::Title-->

                                                                    <!--begin::Thumbnail-->
                                                                    <span
                                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/corporate-license.png"
                                                                            class="lozad w-100 rounded" />
                                                                    </span>
                                                                    <!--end::Thumbnail-->
                                                                </a>
                                                                <!--end::Preview-->
                                                            </div>
                                                            <!--end::Col-->

                                                            <!--begin::Col-->
                                                            <div class="col-lg-4">

                                                                <!--begin::Preview-->
                                                                <a href="pages/team.html" data-kt-href="true"
                                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                                    <!--begin::Title-->
                                                                    <h3
                                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                        Our Team </h3>
                                                                    <!--end::Title-->

                                                                    <!--begin::Thumbnail-->
                                                                    <span
                                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/corporate-ourteam.png"
                                                                            class="lozad w-100 rounded" />
                                                                    </span>
                                                                    <!--end::Thumbnail-->
                                                                </a>
                                                                <!--end::Preview-->
                                                            </div>
                                                            <!--end::Col-->

                                                            <!--begin::Col-->
                                                            <div class="col-lg-4">

                                                                <!--begin::Preview-->
                                                                <a href="pages/sitemap.html" data-kt-href="true"
                                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                                    <!--begin::Title-->
                                                                    <h3
                                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                        Sitemap </h3>
                                                                    <!--end::Title-->

                                                                    <!--begin::Thumbnail-->
                                                                    <span
                                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/corporate-sitemap.png"
                                                                            class="lozad w-100 rounded" />
                                                                    </span>
                                                                    <!--end::Thumbnail-->
                                                                </a>
                                                                <!--end::Preview-->
                                                            </div>
                                                            <!--end::Col-->
                                                        </div>
                                                        <!--end::Row-->
                                                    </div>
                                                    <!--end::Collapse content-->
                                                </div>
                                                <div class="mb-5">
                                                    <!--begin::Collapse toggle-->
                                                    <a class="btn btn-flex btn-color-dark flex-stack p-0 mb-5 toggle collapsible collapsed"
                                                        data-bs-toggle="collapse"
                                                        href="#kt_app_engage_prebuilts_tab_pages_general_social">

                                                        <span class="fw-bolder fs-2">
                                                            Social </span>

                                                        <i
                                                            class="ki-duotone ki-plus-square toggle-off text-primary fs-2 ms-4"><span
                                                                class="path1"></span><span class="path2"></span><span
                                                                class="path3"></span></i>
                                                        <i
                                                            class="ki-duotone ki-minus-square toggle-on text-primary fs-2 ms-4"><span
                                                                class="path1"></span><span class="path2"></span></i>
                                                    </a>
                                                    <!--end::Collapse toggle-->

                                                    <!--begin::Collapse content-->
                                                    <div class="collapse"
                                                        id="kt_app_engage_prebuilts_tab_pages_general_social">
                                                        <!--begin::Row-->
                                                        <div class="row g-10 pt-2 pb-5">

                                                            <!--begin::Col-->
                                                            <div class="col-lg-4">

                                                                <!--begin::Preview-->
                                                                <a href="pages/social/feeds.html" data-kt-href="true"
                                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                                    <!--begin::Title-->
                                                                    <h3
                                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                        Activity </h3>
                                                                    <!--end::Title-->

                                                                    <!--begin::Thumbnail-->
                                                                    <span
                                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/social-activity.png"
                                                                            class="lozad w-100 rounded" />
                                                                    </span>
                                                                    <!--end::Thumbnail-->
                                                                </a>
                                                                <!--end::Preview-->
                                                            </div>
                                                            <!--end::Col-->

                                                            <!--begin::Col-->
                                                            <div class="col-lg-4">

                                                                <!--begin::Preview-->
                                                                <a href="pages/social/activity.html" data-kt-href="true"
                                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                                    <!--begin::Title-->
                                                                    <h3
                                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                        Feeds </h3>
                                                                    <!--end::Title-->

                                                                    <!--begin::Thumbnail-->
                                                                    <span
                                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/social-feeds.png"
                                                                            class="lozad w-100 rounded" />
                                                                    </span>
                                                                    <!--end::Thumbnail-->
                                                                </a>
                                                                <!--end::Preview-->
                                                            </div>
                                                            <!--end::Col-->

                                                            <!--begin::Col-->
                                                            <div class="col-lg-4">

                                                                <!--begin::Preview-->
                                                                <a href="pages/social/followers.html"
                                                                    data-kt-href="true"
                                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                                    <!--begin::Title-->
                                                                    <h3
                                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                        Followers </h3>
                                                                    <!--end::Title-->

                                                                    <!--begin::Thumbnail-->
                                                                    <span
                                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/social-followers.png"
                                                                            class="lozad w-100 rounded" />
                                                                    </span>
                                                                    <!--end::Thumbnail-->
                                                                </a>
                                                                <!--end::Preview-->
                                                            </div>
                                                            <!--end::Col-->

                                                            <!--begin::Col-->
                                                            <div class="col-lg-4">

                                                                <!--begin::Preview-->
                                                                <a href="pages/social/settings.html" data-kt-href="true"
                                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                                    <!--begin::Title-->
                                                                    <h3
                                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                        Settings </h3>
                                                                    <!--end::Title-->

                                                                    <!--begin::Thumbnail-->
                                                                    <span
                                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/social-settings.png"
                                                                            class="lozad w-100 rounded" />
                                                                    </span>
                                                                    <!--end::Thumbnail-->
                                                                </a>
                                                                <!--end::Preview-->
                                                            </div>
                                                            <!--end::Col-->
                                                        </div>
                                                        <!--end::Row-->
                                                    </div>
                                                    <!--end::Collapse content-->
                                                </div>
                                                <div class="mb-5">
                                                    <!--begin::Collapse toggle-->
                                                    <a class="btn btn-flex btn-color-dark flex-stack p-0 mb-5 toggle collapsible collapsed"
                                                        data-bs-toggle="collapse"
                                                        href="#kt_app_engage_prebuilts_tab_pages_general_others">

                                                        <span class="fw-bolder fs-2">
                                                            Others </span>

                                                        <i
                                                            class="ki-duotone ki-plus-square toggle-off text-primary fs-2 ms-4"><span
                                                                class="path1"></span><span class="path2"></span><span
                                                                class="path3"></span></i>
                                                        <i
                                                            class="ki-duotone ki-minus-square toggle-on text-primary fs-2 ms-4"><span
                                                                class="path1"></span><span class="path2"></span></i>
                                                    </a>
                                                    <!--end::Collapse toggle-->

                                                    <!--begin::Collapse content-->
                                                    <div class="collapse"
                                                        id="kt_app_engage_prebuilts_tab_pages_general_others">
                                                        <!--begin::Row-->
                                                        <div class="row g-10 pt-2 pb-5">

                                                            <!--begin::Col-->
                                                            <div class="col-lg-4">

                                                                <!--begin::Preview-->
                                                                <a href="pages/faq/classic.html" data-kt-href="true"
                                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                                    <!--begin::Title-->
                                                                    <h3
                                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                        FAQ Classic </h3>
                                                                    <!--end::Title-->

                                                                    <!--begin::Thumbnail-->
                                                                    <span
                                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/faq-classic.png"
                                                                            class="lozad w-100 rounded" />
                                                                    </span>
                                                                    <!--end::Thumbnail-->
                                                                </a>
                                                                <!--end::Preview-->
                                                            </div>
                                                            <!--end::Col-->

                                                            <!--begin::Col-->
                                                            <div class="col-lg-4">

                                                                <!--begin::Preview-->
                                                                <a href="pages/faq/extended.html" data-kt-href="true"
                                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                                    <!--begin::Title-->
                                                                    <h3
                                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                        FAQ Extended </h3>
                                                                    <!--end::Title-->

                                                                    <!--begin::Thumbnail-->
                                                                    <span
                                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/faq-extended.png"
                                                                            class="lozad w-100 rounded" />
                                                                    </span>
                                                                    <!--end::Thumbnail-->
                                                                </a>
                                                                <!--end::Preview-->
                                                            </div>
                                                            <!--end::Col-->

                                                            <!--begin::Col-->
                                                            <div class="col-lg-4">

                                                                <!--begin::Preview-->
                                                                <a href="pages/blog/home.html" data-kt-href="true"
                                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                                    <!--begin::Title-->
                                                                    <h3
                                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                        Blog Home </h3>
                                                                    <!--end::Title-->

                                                                    <!--begin::Thumbnail-->
                                                                    <span
                                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/blog-home.png"
                                                                            class="lozad w-100 rounded" />
                                                                    </span>
                                                                    <!--end::Thumbnail-->
                                                                </a>
                                                                <!--end::Preview-->
                                                            </div>
                                                            <!--end::Col-->

                                                            <!--begin::Col-->
                                                            <div class="col-lg-4">

                                                                <!--begin::Preview-->
                                                                <a href="pages/blog/post.html" data-kt-href="true"
                                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                                    <!--begin::Title-->
                                                                    <h3
                                                                        class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                        Blog Post </h3>
                                                                    <!--end::Title-->

                                                                    <!--begin::Thumbnail-->
                                                                    <span
                                                                        class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                        <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                            data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/blog-post.png"
                                                                            class="lozad w-100 rounded" />
                                                                    </span>
                                                                    <!--end::Thumbnail-->
                                                                </a>
                                                                <!--end::Preview-->
                                                            </div>
                                                            <!--end::Col-->
                                                        </div>
                                                        <!--end::Row-->
                                                    </div>
                                                    <!--end::Collapse content-->
                                                </div>


                                            </div>
                                            <div class="tab-pane fade " id="kt_app_engage_prebuilts_tab_pages_account"
                                                role="tabpanel">


                                                <!--begin::Row-->
                                                <div class="row g-10">

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="account/overview.html" data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3
                                                                class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Overview </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span
                                                                class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                    data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/account-overview.png"
                                                                    class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="account/settings.html" data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3
                                                                class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Settings </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span
                                                                class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                    data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/account-settings.png"
                                                                    class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="account/billing.html" data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3
                                                                class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Billing </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span
                                                                class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                    data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/account-billing.png"
                                                                    class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="account/security.html" data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3
                                                                class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Security </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span
                                                                class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                    data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/account-security.png"
                                                                    class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="account/referrals.html" data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3
                                                                class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Referrals </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span
                                                                class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                    data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/account-referrals.png"
                                                                    class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="account/logs.html" data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3
                                                                class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Logs </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span
                                                                class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                    data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/account-logs.png"
                                                                    class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="account/api-keys.html" data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3
                                                                class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                API Keys </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span
                                                                class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                    data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/account-apikeys.png"
                                                                    class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="account/statements.html" data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3
                                                                class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Statements </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span
                                                                class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                    data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/account-statements.png"
                                                                    class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="account/billing.html" data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3
                                                                class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Billing </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span
                                                                class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                    data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/account-billing.png"
                                                                    class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Row-->

                                            </div>
                                            <div class="tab-pane fade " id="kt_app_engage_prebuilts_tab_pages_modals"
                                                role="tabpanel">


                                                <!--begin::Row-->
                                                <div class="row g-10">

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="utilities/modals/general/view-users.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3
                                                                class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                View Friends </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span
                                                                class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                    data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/modal-viewfriends.png"
                                                                    class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="utilities/modals/general/upgrade-plan.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3
                                                                class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Upgrade Plan </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span
                                                                class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                    data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/modal-upgradeplan.png"
                                                                    class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="utilities/modals/wizards/top-up-wallet.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3
                                                                class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Topup Wallet </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span
                                                                class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                    data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/modal-topupwallet.png"
                                                                    class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="utilities/modals/general/share-earn.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3
                                                                class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Share & Earn </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span
                                                                class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                    data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/modal-shareandearn.png"
                                                                    class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="utilities/modals/general/select-users.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3
                                                                class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Select User </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span
                                                                class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                    data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/modal-selectuser.png"
                                                                    class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="utilities/modals/forms/bidding.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3
                                                                class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Place Bid </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span
                                                                class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                    data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/modal-placeyourbid.png"
                                                                    class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="utilities/modals/wizards/offer-a-deal.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3
                                                                class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Offer Deal </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span
                                                                class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                    data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/modal-offeradeal.png"
                                                                    class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="utilities/modals/forms/new-target.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3
                                                                class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                New Target </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span
                                                                class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                    data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/modal-newtarget.png"
                                                                    class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="utilities/modals/forms/new-card.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3
                                                                class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                New Card </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span
                                                                class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                    data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/modal-newcard.png"
                                                                    class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="utilities/modals/forms/new-address.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3
                                                                class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                New Address </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span
                                                                class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                    data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/modal-newaddress.png"
                                                                    class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="utilities/modals/general/invite-friends.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3
                                                                class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Invite Friend </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span
                                                                class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                    data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/modal-invitefriend.png"
                                                                    class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="utilities/modals/wizards/create-project.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3
                                                                class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Create Project </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span
                                                                class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                    data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/modal-createproject.png"
                                                                    class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="utilities/modals/wizards/create-campaign.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3
                                                                class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Create Campaign </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span
                                                                class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                    data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/modal-createcampaign.png"
                                                                    class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="utilities/modals/wizards/create-account.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3
                                                                class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Create Business Account </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span
                                                                class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                    data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/modal-createbusinessacc.png"
                                                                    class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="utilities/modals/wizards/create-app.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3
                                                                class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Create App </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span
                                                                class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                    data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/modal-createapp.png"
                                                                    class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="utilities/modals/forms/create-api-key.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3
                                                                class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Create Api Key </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span
                                                                class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                    data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/modal-createapikey.png"
                                                                    class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="utilities/modals/wizards/two-factor-authentication.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3
                                                                class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                2 Factor Auth </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span
                                                                class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                    data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/modal-2factorauth.png"
                                                                    class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Row-->

                                            </div>
                                            <div class="tab-pane fade " id="kt_app_engage_prebuilts_tab_pages_wizards"
                                                role="tabpanel">


                                                <!--begin::Row-->
                                                <div class="row g-10">

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="utilities/wizards/horizontal.html" data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3
                                                                class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                2 Factor Auth </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span
                                                                class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                    data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/wizard-2factorauth.png"
                                                                    class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="utilities/wizards/horizontal.html" data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3
                                                                class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Horizontal </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span
                                                                class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                    data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/wizard-horizontal.png"
                                                                    class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="utilities/wizards/vertical.html" data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3
                                                                class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Vertical </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span
                                                                class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                    data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/wizard-vertical.png"
                                                                    class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Row-->

                                            </div>
                                            <div class="tab-pane fade " id="kt_app_engage_prebuilts_tab_pages_search"
                                                role="tabpanel">


                                                <!--begin::Row-->
                                                <div class="row g-10">

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="utilities/search/users.html" data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3
                                                                class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Search Users </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span
                                                                class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                    data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/search-users.png"
                                                                    class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="utilities/search/horizontal.html" data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3
                                                                class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Search Horizontal </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span
                                                                class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                    data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/search-horizontal.png"
                                                                    class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="utilities/search/vertical.html" data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3
                                                                class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Search Vertical </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span
                                                                class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                    data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/search-vertical.png"
                                                                    class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="utilities/search/select-location.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3
                                                                class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Search Location </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span
                                                                class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                    data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/search-location.png"
                                                                    class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Row-->

                                            </div>
                                            <div class="tab-pane fade " id="kt_app_engage_prebuilts_tab_pages_widgets"
                                                role="tabpanel">


                                                <!--begin::Row-->
                                                <div class="row g-10">

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="widgets/charts.html" data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3
                                                                class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Charts </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span
                                                                class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                    data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/widgets-charts.png"
                                                                    class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="widgets/feeds.html" data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3
                                                                class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Feeds </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span
                                                                class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                    data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/widgets-feeds.png"
                                                                    class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="widgets/lists.html" data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3
                                                                class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Lists </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span
                                                                class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                    data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/widgets-lists.png"
                                                                    class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="widgets/mixed.html" data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3
                                                                class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Mixed </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span
                                                                class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                    data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/widgets-mixed.png"
                                                                    class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="widgets/statistics.html" data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3
                                                                class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Statistics </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span
                                                                class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                    data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/widgets-stats.png"
                                                                    class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="widgets/tables.html" data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3
                                                                class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Tables </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span
                                                                class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                    data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/widgets-tables.png"
                                                                    class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Row-->

                                            </div>
                                            <div class="tab-pane fade "
                                                id="kt_app_engage_prebuilts_tab_pages_email-templates" role="tabpanel">


                                                <!--begin::Row-->
                                                <div class="row g-10">

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="authentication/email/welcome-message.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3
                                                                class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Welcome </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span
                                                                class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                    data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/email-welcome.png"
                                                                    class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="authentication/email/subscription-confirmed.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3
                                                                class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Subscription Confirmed </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span
                                                                class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                    data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/email-subscriptionconfirmed.png"
                                                                    class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="authentication/email/reset-password.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3
                                                                class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Reset Password </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span
                                                                class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                    data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/email-resetpassword.png"
                                                                    class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="authentication/email/card-declined.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3
                                                                class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Card Declined </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span
                                                                class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                    data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/email-creditcarddeclined.png"
                                                                    class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="authentication/email/promo-1.html" data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3
                                                                class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Promotion 1 </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span
                                                                class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                    data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/email-promo1.png"
                                                                    class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="authentication/email/promo-2.html" data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3
                                                                class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Promotion 2 </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span
                                                                class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                    data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/email-promo2.png"
                                                                    class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="authentication/email/promo-3.html" data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3
                                                                class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Promotion 3 </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span
                                                                class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./public/assets/media/preview/demos/placeholder.jpg"
                                                                    data-src="/metronic8/demo5/assets/media/preview/prebuilts/pages/email-promo3.png"
                                                                    class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Row-->

                                            </div>
                                        </div>
                                        <!--end::Tab content-->
                                    </div>
                                    <!--end::Scroll wrapper-->
                                </div>
                            </div>
                            <!--end::Tab content-->
                        </div>
                        <!--end::Image view-->
                        <!--begin::Text view-->
                        <div class="pt-2 d-none" id="kt_app_engage_prebuilts_view_text">
                            <!--begin::Heading-->
                            <h1 class="fs-2x text-dark fw-bolder text-center mb-4"
                                id="kt_app_engage_prebuilts_view_text_heading">
                                Sitemap
                            </h1>
                            <!--end::Heading-->

                            <!--begin::Wrapper-->
                            <div id="kt_app_engage_prebuilts_view_text_heading" class="hover-scroll-y pe-12 me-n12"
                                data-kt-scroll="true" data-kt-scroll-height="auto"
                                data-kt-scroll-wrappers="#kt_app_engage_prebuilts_modal, #kt_app_engage_prebuilts_modal_dialog, #kt_app_engage_prebuilts_body, #kt_app_engage_prebuilts_view_text"
                                data-kt-scroll-dependencies="#kt_app_engage_prebuilts_header, #kt_app_engage_prebuilts_view_text_heading"
                                data-kt-scroll-offset="190px">
                                <!--begin::Section-->
                                <div class="mb-10 mb-lg-17">

                                    <!--begin::Title-->
                                    <h3 class="text-dark fw-bolder mb-7">
                                        Layouts
                                    </h3>
                                    <!--end::Title-->

                                    <!--begin::Row-->
                                    <div class="row">

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">


                                                <a class="fw-6 fw-semibold"
                                                    href="https://preview.keenthemes.com/metronic8/demo1/index.html">
                                                    Metronic Original </a>




                                                <a class="fw-6 fw-semibold"
                                                    href="https://preview.keenthemes.com/metronic8/demo2/index.html">
                                                    SaaS App </a>




                                                <a class="fw-6 fw-semibold"
                                                    href="https://preview.keenthemes.com/metronic8/demo30/index.html">
                                                    Sales Tracking App </a>




                                                <a class="fw-6 fw-semibold"
                                                    href="https://preview.keenthemes.com/metronic8/demo39/index.html">
                                                    Billing SaaS </a>




                                                <a class="fw-6 fw-semibold"
                                                    href="https://preview.keenthemes.com/metronic8/demo31/index.html">
                                                    Marketing Automation </a>




                                                <a class="fw-6 fw-semibold"
                                                    href="https://preview.keenthemes.com/metronic8/demo27/index.html">
                                                    Databox Dashboard </a>




                                                <a class="fw-6 fw-semibold"
                                                    href="https://preview.keenthemes.com/metronic8/demo6/index.html">
                                                    Time Reporting </a>




                                                <a class="fw-6 fw-semibold"
                                                    href="https://preview.keenthemes.com/metronic8/demo3/index.html">
                                                    New Trend </a>




                                                <a class="fw-6 fw-semibold"
                                                    href="https://preview.keenthemes.com/metronic8/demo23/index.html">
                                                    Member Dashboard </a>




                                                <a class="fw-6 fw-semibold"
                                                    href="https://preview.keenthemes.com/metronic8/demo38/index.html">
                                                    Email Marketing </a>




                                                <a class="fw-6 fw-semibold"
                                                    href="https://preview.keenthemes.com/metronic8/demo36/index.html">
                                                    Digital Marketing </a>




                                                <a class="fw-6 fw-semibold"
                                                    href="https://preview.keenthemes.com/metronic8/demo10/index.html">
                                                    Project Grid </a>




                                                <a class="fw-6 fw-semibold"
                                                    href="https://preview.keenthemes.com/metronic8/demo35/index.html">
                                                    Traffic Analytics </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">


                                                <a class="fw-6 fw-semibold"
                                                    href="https://preview.keenthemes.com/metronic8/demo8/index.html">
                                                    Analytics App </a>




                                                <a class="fw-6 fw-semibold"
                                                    href="https://preview.keenthemes.com/metronic8/demo25/index.html">
                                                    User Guiding App </a>




                                                <a class="fw-6 fw-semibold"
                                                    href="https://preview.keenthemes.com/metronic8/demo20/index.html">
                                                    CRM Software </a>




                                                <a class="fw-6 fw-semibold"
                                                    href="https://preview.keenthemes.com/metronic8/demo7/index.html">
                                                    CRM Dashboard </a>




                                                <a class="fw-6 fw-semibold"
                                                    href="https://preview.keenthemes.com/metronic8/demo50/index.html">
                                                    Micro-SaaS App </a>




                                                <a class="fw-6 fw-semibold"
                                                    href="https://preview.keenthemes.com/metronic8/demo32/index.html">
                                                    Delivery Management </a>




                                                <a class="fw-6 fw-semibold"
                                                    href="https://preview.keenthemes.com/metronic8/demo42/index.html">
                                                    Calendar Workspace </a>




                                                <a class="fw-6 fw-semibold"
                                                    href="https://preview.keenthemes.com/metronic8/demo44/index.html">
                                                    Recruit Automation </a>




                                                <a class="fw-6 fw-semibold"
                                                    href="https://preview.keenthemes.com/metronic8/demo33/index.html">
                                                    Social Campaings </a>




                                                <a class="fw-6 fw-semibold"
                                                    href="https://preview.keenthemes.com/metronic8/demo37/index.html">
                                                    Cloud Suite </a>




                                                <a class="fw-6 fw-semibold"
                                                    href="https://preview.keenthemes.com/metronic8/demo11/index.html">
                                                    Finance Planner </a>




                                                <a class="fw-6 fw-semibold"
                                                    href="https://preview.keenthemes.com/metronic8/demo16/index.html">
                                                    Podcast App </a>




                                                <a class="fw-6 fw-semibold"
                                                    href="https://preview.keenthemes.com/metronic8/demo26/index.html">
                                                    Planable App </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">


                                                <a class="fw-6 fw-semibold"
                                                    href="https://preview.keenthemes.com/metronic8/demo22/index.html">
                                                    Media Publisher </a>




                                                <a class="fw-6 fw-semibold"
                                                    href="https://preview.keenthemes.com/metronic8/demo19/index.html">
                                                    Reports Panel </a>




                                                <a class="fw-6 fw-semibold"
                                                    href="https://preview.keenthemes.com/metronic8/demo40/index.html">
                                                    HR App </a>




                                                <a class="fw-6 fw-semibold"
                                                    href="https://preview.keenthemes.com/metronic8/demo29/index.html">
                                                    Project Workspace </a>




                                                <a class="fw-6 fw-semibold"
                                                    href="https://preview.keenthemes.com/metronic8/demo24/index.html">
                                                    Helpdesk App </a>




                                                <a class="fw-6 fw-semibold"
                                                    href="https://preview.keenthemes.com/metronic8/demo4/index.html">
                                                    Jobs Site </a>




                                                <a class="fw-6 fw-semibold"
                                                    href="https://preview.keenthemes.com/metronic8/demo41/index.html">
                                                    Business Intelligence </a>




                                                <a class="fw-6 fw-semibold"
                                                    href="https://preview.keenthemes.com/metronic8/demo18/index.html">
                                                    Goal Tracking </a>




                                                <a class="fw-6 fw-semibold"
                                                    href="https://preview.keenthemes.com/metronic8/demo21/index.html">
                                                    Monochrome App </a>




                                                <a class="fw-6 fw-semibold"
                                                    href="https://preview.keenthemes.com/metronic8/demo34/index.html">
                                                    Finance Analytics </a>




                                                <a class="fw-6 fw-semibold"
                                                    href="https://preview.keenthemes.com/metronic8/demo15/index.html">
                                                    Crypto Planner </a>




                                                <a class="fw-6 fw-semibold"
                                                    href="https://preview.keenthemes.com/metronic8/demo14/index.html">
                                                    Project Workplace </a>




                                                <a class="fw-6 fw-semibold"
                                                    href="https://preview.keenthemes.com/metronic8/demo9/index.html">
                                                    Sales Manager </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">


                                                <a class="fw-6 fw-semibold" href="index.html">
                                                    Support Forum </a>




                                                <a class="fw-6 fw-semibold"
                                                    href="https://preview.keenthemes.com/metronic8/demo13/index.html">
                                                    Classic Dashboard </a>




                                                <a class="fw-6 fw-semibold"
                                                    href="https://preview.keenthemes.com/metronic8/demo12/index.html">
                                                    Data Analyzer </a>




                                                <a class="fw-6 fw-semibold"
                                                    href="https://preview.keenthemes.com/metronic8/demo48/index.html">
                                                    Cloud ERP </a>




                                                <a class="fw-6 fw-semibold"
                                                    href="https://preview.keenthemes.com/metronic8/demo28/index.html">
                                                    eCommerce App </a>




                                                <a class="fw-6 fw-semibold"
                                                    href="https://preview.keenthemes.com/metronic8/demo17/index.html">
                                                    Events Scheduler </a>




                                                <a class="fw-6 fw-semibold"
                                                    href="https://preview.keenthemes.com/metronic8/demo49/index.html">
                                                    KPI Tracking </a>




                                                <a class="fw-6 fw-semibold"
                                                    href="https://preview.keenthemes.com/metronic8/demo43/index.html">
                                                    Healthcare Dashboard </a>




                                                <a class="fw-6 fw-semibold"
                                                    href="https://preview.keenthemes.com/metronic8/demo45/index.html">
                                                    OKR Tracking </a>




                                                <a class="fw-6 fw-semibold"
                                                    href="https://preview.keenthemes.com/metronic8/demo47/index.html">
                                                    Campaign Automation </a>




                                                <a class="fw-6 fw-semibold"
                                                    href="https://preview.keenthemes.com/metronic8/demo46/index.html">
                                                    Audit Board App </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->

                                </div>
                                <!--end::Section-->



                                <!--begin::Section-->
                                <div class="mb-10 mb-lg-17">

                                    <!--begin::Title-->
                                    <h3 class="text-dark fw-bolder mb-7">
                                        Dashboards
                                    </h3>
                                    <!--end::Title-->

                                    <!--begin::Row-->
                                    <div class="row">

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="index.html">
                                                    All Questions </a>




                                                <a class="fw-6 fw-semibold" href="dashboards/marketing.html">
                                                    Marketing Dashboard </a>




                                                <a class="fw-6 fw-semibold" href="dashboards/social.html">
                                                    Social Dashboard </a>




                                                <a class="fw-6 fw-semibold" href="dashboards/ecommerce.html">
                                                    eCommerce Dashboard </a>




                                                <a class="fw-6 fw-semibold" href="dashboards/store-analytics.html">
                                                    Store Analytics </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->


                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="dashboards/logistics.html">
                                                    Logistics </a>




                                                <a class="fw-6 fw-semibold" href="dashboards/delivery.html">
                                                    Delivery </a>




                                                <a class="fw-6 fw-semibold" href="dashboards/online-courses.html">
                                                    Online Courses </a>




                                                <a class="fw-6 fw-semibold" href="dashboards/school.html">
                                                    Hello Tyler </a>




                                                <a class="fw-6 fw-semibold" href="dashboards/crypto.html">
                                                    My Balance: 37,045$ </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->


                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="dashboards/finance-performance.html">
                                                    Finance Performance </a>




                                                <a class="fw-6 fw-semibold" href="dashboards/website-analytics.html">
                                                    Website Analytics </a>




                                                <a class="fw-6 fw-semibold" href="dashboards/bidding.html">
                                                    Bidding Dashboard </a>




                                                <a class="fw-6 fw-semibold" href="dashboards/podcast.html">
                                                    Podcast Dashboard </a>




                                                <a class="fw-6 fw-semibold" href="dashboards/projects.html">
                                                    Projects Dashboard </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->


                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="dashboards/call-center.html">
                                                    Call Center </a>




                                                <a class="fw-6 fw-semibold" href="dashboards/pos.html">
                                                    POS System </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                    </div>
                                    <!--end::Row-->

                                </div>
                                <!--end::Section-->



                                <!--begin::Section-->
                                <div class="mb-10 mb-lg-17">

                                </div>
                                <!--end::Section-->


                                <!--begin::Section-->
                                <div class="mb-10 mb-lg-17">
                                    <!--begin::Title-->
                                    <h3 class="text-dark fw-bolder mb-7">
                                        Pages - Authentication </h3>
                                    <!--end::Title-->

                                    <!--begin::Row-->
                                    <div class="row">

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold"
                                                    href="authentication/layouts/corporate/sign-in.html">
                                                    Corporate </a>



                                                <a class="fw-6 fw-semibold"
                                                    href="authentication/layouts/creative/sign-in.html">
                                                    Creative </a>



                                                <a class="fw-6 fw-semibold"
                                                    href="authentication/layouts/fancy/sign-in.html">
                                                    Fancy </a>



                                                <a class="fw-6 fw-semibold"
                                                    href="authentication/layouts/overlay/sign-in.html">
                                                    Overlay </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold"
                                                    href="authentication/extended/multi-steps-sign-up.html">
                                                    Multi-Step </a>



                                                <a class="fw-6 fw-semibold"
                                                    href="authentication/layouts/corporate/two-factor.html">
                                                    Two-Factor </a>



                                                <a class="fw-6 fw-semibold"
                                                    href="authentication/general/password-confirmation.html">
                                                    Password Changed </a>



                                                <a class="fw-6 fw-semibold"
                                                    href="authentication/general/verify-email.html">
                                                    Verify Email </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="authentication/general/welcome.html">
                                                    Welcome </a>



                                                <a class="fw-6 fw-semibold"
                                                    href="authentication/general/coming-soon.html">
                                                    Coming Soon </a>



                                                <a class="fw-6 fw-semibold"
                                                    href="authentication/general/account-deactivated.html">
                                                    Account Deactivated </a>



                                                <a class="fw-6 fw-semibold"
                                                    href="authentication/general/error-404.html">
                                                    404 Page </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold"
                                                    href="authentication/general/error-500.html">
                                                    505 Page </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Section-->
                                <div class="mb-10 mb-lg-17">
                                    <!--begin::Title-->
                                    <h3 class="text-dark fw-bolder mb-7">
                                        Pages - Account </h3>
                                    <!--end::Title-->

                                    <!--begin::Row-->
                                    <div class="row">

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="account/overview.html">
                                                    Overview </a>



                                                <a class="fw-6 fw-semibold" href="account/settings.html">
                                                    Settings </a>



                                                <a class="fw-6 fw-semibold" href="account/billing.html">
                                                    Billing </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="account/security.html">
                                                    Security </a>



                                                <a class="fw-6 fw-semibold" href="account/referrals.html">
                                                    Referrals </a>



                                                <a class="fw-6 fw-semibold" href="account/logs.html">
                                                    Logs </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="account/api-keys.html">
                                                    API Keys </a>



                                                <a class="fw-6 fw-semibold" href="account/statements.html">
                                                    Statements </a>



                                                <a class="fw-6 fw-semibold" href="account/billing.html">
                                                    Billing </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Section-->
                                <div class="mb-10 mb-lg-17">
                                    <!--begin::Title-->
                                    <h3 class="text-dark fw-bolder mb-7">
                                        Pages - Modals </h3>
                                    <!--end::Title-->

                                    <!--begin::Row-->
                                    <div class="row">

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold"
                                                    href="utilities/modals/general/view-users.html">
                                                    View Friends </a>



                                                <a class="fw-6 fw-semibold"
                                                    href="utilities/modals/general/upgrade-plan.html">
                                                    Upgrade Plan </a>



                                                <a class="fw-6 fw-semibold"
                                                    href="utilities/modals/wizards/top-up-wallet.html">
                                                    Topup Wallet </a>



                                                <a class="fw-6 fw-semibold"
                                                    href="utilities/modals/general/share-earn.html">
                                                    Share & Earn </a>



                                                <a class="fw-6 fw-semibold"
                                                    href="utilities/modals/general/select-users.html">
                                                    Select User </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="utilities/modals/forms/bidding.html">
                                                    Place Bid </a>



                                                <a class="fw-6 fw-semibold"
                                                    href="utilities/modals/wizards/offer-a-deal.html">
                                                    Offer Deal </a>



                                                <a class="fw-6 fw-semibold"
                                                    href="utilities/modals/forms/new-target.html">
                                                    New Target </a>



                                                <a class="fw-6 fw-semibold" href="utilities/modals/forms/new-card.html">
                                                    New Card </a>



                                                <a class="fw-6 fw-semibold"
                                                    href="utilities/modals/forms/new-address.html">
                                                    New Address </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold"
                                                    href="utilities/modals/general/invite-friends.html">
                                                    Invite Friend </a>



                                                <a class="fw-6 fw-semibold"
                                                    href="utilities/modals/wizards/create-project.html">
                                                    Create Project </a>



                                                <a class="fw-6 fw-semibold"
                                                    href="utilities/modals/wizards/create-campaign.html">
                                                    Create Campaign </a>



                                                <a class="fw-6 fw-semibold"
                                                    href="utilities/modals/wizards/create-account.html">
                                                    Create Business Account </a>



                                                <a class="fw-6 fw-semibold"
                                                    href="utilities/modals/wizards/create-app.html">
                                                    Create App </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold"
                                                    href="utilities/modals/forms/create-api-key.html">
                                                    Create Api Key </a>



                                                <a class="fw-6 fw-semibold"
                                                    href="utilities/modals/wizards/two-factor-authentication.html">
                                                    2 Factor Auth </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Section-->
                                <div class="mb-10 mb-lg-17">
                                    <!--begin::Title-->
                                    <h3 class="text-dark fw-bolder mb-7">
                                        Pages - Wizards </h3>
                                    <!--end::Title-->

                                    <!--begin::Row-->
                                    <div class="row">

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="utilities/wizards/horizontal.html">
                                                    2 Factor Auth </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="utilities/wizards/horizontal.html">
                                                    Horizontal </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="utilities/wizards/vertical.html">
                                                    Vertical </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Section-->
                                <div class="mb-10 mb-lg-17">
                                    <!--begin::Title-->
                                    <h3 class="text-dark fw-bolder mb-7">
                                        Pages - Search </h3>
                                    <!--end::Title-->

                                    <!--begin::Row-->
                                    <div class="row">

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="utilities/search/users.html">
                                                    Search Users </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="utilities/search/horizontal.html">
                                                    Search Horizontal </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="utilities/search/vertical.html">
                                                    Search Vertical </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold"
                                                    href="utilities/search/select-location.html">
                                                    Search Location </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Section-->
                                <div class="mb-10 mb-lg-17">
                                    <!--begin::Title-->
                                    <h3 class="text-dark fw-bolder mb-7">
                                        Pages - Widgets </h3>
                                    <!--end::Title-->

                                    <!--begin::Row-->
                                    <div class="row">

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="widgets/charts.html">
                                                    Charts </a>



                                                <a class="fw-6 fw-semibold" href="widgets/feeds.html">
                                                    Feeds </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="widgets/lists.html">
                                                    Lists </a>



                                                <a class="fw-6 fw-semibold" href="widgets/mixed.html">
                                                    Mixed </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="widgets/statistics.html">
                                                    Statistics </a>



                                                <a class="fw-6 fw-semibold" href="widgets/tables.html">
                                                    Tables </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Section-->
                                <div class="mb-10 mb-lg-17">
                                    <!--begin::Title-->
                                    <h3 class="text-dark fw-bolder mb-7">
                                        Pages - Email Templates </h3>
                                    <!--end::Title-->

                                    <!--begin::Row-->
                                    <div class="row">

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold"
                                                    href="authentication/email/welcome-message.html">
                                                    Welcome </a>



                                                <a class="fw-6 fw-semibold"
                                                    href="authentication/email/subscription-confirmed.html">
                                                    Subscription Confirmed </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold"
                                                    href="authentication/email/reset-password.html">
                                                    Reset Password </a>



                                                <a class="fw-6 fw-semibold"
                                                    href="authentication/email/card-declined.html">
                                                    Card Declined </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="authentication/email/promo-1.html">
                                                    Promotion 1 </a>



                                                <a class="fw-6 fw-semibold" href="authentication/email/promo-2.html">
                                                    Promotion 2 </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="authentication/email/promo-3.html">
                                                    Promotion 3 </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Section-->
                                <div class="mb-10 mb-lg-17">
                                    <!--begin::Title-->
                                    <h3 class="text-dark fw-bolder mb-7">
                                        Pages - General - User Profile </h3>
                                    <!--end::Title-->

                                    <!--begin::Row-->
                                    <div class="row">

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="pages/user-profile/overview.html">
                                                    Profile Overview </a>



                                                <a class="fw-6 fw-semibold" href="pages/user-profile/projects.html">
                                                    User Projects </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="pages/user-profile/campaigns.html">
                                                    User Campaigns </a>



                                                <a class="fw-6 fw-semibold" href="pages/user-profile/documents.html">
                                                    User Documents </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="pages/user-profile/followers.html">
                                                    User Followers </a>



                                                <a class="fw-6 fw-semibold" href="pages/user-profile/activity.html">
                                                    User Activity </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Section-->
                                <div class="mb-10 mb-lg-17">
                                    <!--begin::Title-->
                                    <h3 class="text-dark fw-bolder mb-7">
                                        Pages - General - Corporate </h3>
                                    <!--end::Title-->

                                    <!--begin::Row-->
                                    <div class="row">

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="pages/about.html">
                                                    About Us </a>



                                                <a class="fw-6 fw-semibold" href="pages/contact.html">
                                                    Contact Us </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="pages/licenses.html">
                                                    License </a>



                                                <a class="fw-6 fw-semibold" href="pages/team.html">
                                                    Our Team </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="pages/sitemap.html">
                                                    Sitemap </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Section-->
                                <div class="mb-10 mb-lg-17">
                                    <!--begin::Title-->
                                    <h3 class="text-dark fw-bolder mb-7">
                                        Pages - General - Social </h3>
                                    <!--end::Title-->

                                    <!--begin::Row-->
                                    <div class="row">

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="pages/social/feeds.html">
                                                    Activity </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="pages/social/activity.html">
                                                    Feeds </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="pages/social/followers.html">
                                                    Followers </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="pages/social/settings.html">
                                                    Settings </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Section-->
                                <div class="mb-10 mb-lg-17">
                                    <!--begin::Title-->
                                    <h3 class="text-dark fw-bolder mb-7">
                                        Pages - General - Others </h3>
                                    <!--end::Title-->

                                    <!--begin::Row-->
                                    <div class="row">

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="pages/faq/classic.html">
                                                    FAQ Classic </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="pages/faq/extended.html">
                                                    FAQ Extended </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="pages/blog/home.html">
                                                    Blog Home </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="pages/blog/post.html">
                                                    Blog Post </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Section-->



                                <!--begin::Section-->
                                <div class="">

                                    <!--begin::Title-->
                                    <h3 class="text-dark fw-bolder mb-7">
                                        Apps
                                    </h3>
                                    <!--end::Title-->

                                    <!--begin::Row-->
                                    <div class="row">

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="apps/projects/list/list.html">
                                                    Projects </a>



                                                <a class="fw-6 fw-semibold"
                                                    href="apps/ecommerce/catalog/products/products.html">
                                                    Ecommerce </a>



                                                <a class="fw-6 fw-semibold" href="apps/customers/list/list.html">
                                                    Customers </a>



                                                <a class="fw-6 fw-semibold" href="apps/subscriptions/list/list.html">
                                                    Subscriptions </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold"
                                                    href="apps/user-management/users/list/list.html">
                                                    User Management </a>



                                                <a class="fw-6 fw-semibold" href="apps/invoices/create/main.html">
                                                    Invoices </a>



                                                <a class="fw-6 fw-semibold"
                                                    href="apps/support-center/overview/main.html">
                                                    Support Center </a>



                                                <a class="fw-6 fw-semibold" href="apps/chat/private.html">
                                                    Chat </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="apps/calendar/calendar.html">
                                                    Calendar </a>



                                                <a class="fw-6 fw-semibold" href="apps/file-manager/list/folders.html">
                                                    File Manager </a>



                                                <a class="fw-6 fw-semibold" href="apps/inbox/listing/listing.html">
                                                    Inbox </a>



                                                <a class="fw-6 fw-semibold" href="apps/contacts/getting-started.html">
                                                    Contacts </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->
                                        <br />
                                        <b>Warning</b>: Undefined array key "_view" in
                                        <b>/var/www/preview.keenthemes.com/kt-products/metronic/releases/2023-03-24-032718/core/html/dist/view/partials/engage-new/prebuilts/content/text/__apps.php</b>
                                        on line <b>23</b><br />

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href=".html">
                                                    Devs </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->

                                </div>
                                <!--end::Section-->



                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Text view--->
                    </div>
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Sitemap-->
    <!--end::Engage modals-->
    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <i class="ki-duotone ki-arrow-up"><span class="path1"></span><span class="path2"></span></i>
    </div>
    <!--end::Scrolltop-->

    <!--begin::Modals-->

    <!--begin::Modal - Upgrade plan-->
    <div class="modal fade" id="kt_modal_upgrade_plan" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-xl">
            <!--begin::Modal content-->
            <div class="modal-content rounded">
                <!--begin::Modal header-->
                <div class="modal-header justify-content-end border-0 pb-0">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->

                <!--begin::Modal body-->
                <div class="modal-body pt-0 pb-15 px-5 px-xl-20">
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <h1 class="mb-3">Upgrade a Plan</h1>

                        <div class="text-muted fw-semibold fs-5">
                            If you need more info, please check <a href="#" class="link-primary fw-bold">Pricing
                                Guidelines</a>.
                        </div>
                    </div>
                    <!--end::Heading-->

                    <!--begin::Plans-->
                    <div class="d-flex flex-column">
                        <!--begin::Nav group-->
                        <div class="nav-group nav-group-outline mx-auto" data-kt-buttons="true">
                            <button class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3 me-2 active"
                                data-kt-plan="month">
                                Monthly
                            </button>
                            <button class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3"
                                data-kt-plan="annual">
                                Annual
                            </button>
                        </div>
                        <!--end::Nav group-->

                        <!--begin::Row-->
                        <div class="row mt-10">
                            <!--begin::Col-->
                            <div class="col-lg-6 mb-10 mb-lg-0">
                                <!--begin::Tabs-->
                                <div class="nav flex-column">
                                    <!--begin::Tab link-->
                                    <label
                                        class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 active mb-6"
                                        data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_startup">

                                        <!--end::Description-->
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Radio-->
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                                <input class="form-check-input" type="radio" name="plan"
                                                    checked="checked" value="startup" />
                                            </div>
                                            <!--end::Radio-->

                                            <!--begin::Info-->
                                            <div class="flex-grow-1">
                                                <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">
                                                    Startup
                                                </div>
                                                <div class="fw-semibold opacity-75">
                                                    Best for startups </div>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Description-->

                                        <!--begin::Price-->
                                        <div class="ms-5">
                                            <span class="mb-2">$</span>

                                            <span class="fs-3x fw-bold" data-kt-plan-price-month="39"
                                                data-kt-plan-price-annual="399">
                                                39 </span>

                                            <span class="fs-7 opacity-50">/
                                                <span data-kt-element="period">Mon</span>
                                            </span>
                                        </div>
                                        <!--end::Price-->
                                    </label>
                                    <!--end::Tab link-->
                                    <!--begin::Tab link-->
                                    <label
                                        class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6  mb-6"
                                        data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_advanced">

                                        <!--end::Description-->
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Radio-->
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                                <input class="form-check-input" type="radio" name="plan"
                                                    value="advanced" />
                                            </div>
                                            <!--end::Radio-->

                                            <!--begin::Info-->
                                            <div class="flex-grow-1">
                                                <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">
                                                    Advanced
                                                </div>
                                                <div class="fw-semibold opacity-75">
                                                    Best for 100+ team size </div>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Description-->

                                        <!--begin::Price-->
                                        <div class="ms-5">
                                            <span class="mb-2">$</span>

                                            <span class="fs-3x fw-bold" data-kt-plan-price-month="339"
                                                data-kt-plan-price-annual="3399">
                                                339 </span>

                                            <span class="fs-7 opacity-50">/
                                                <span data-kt-element="period">Mon</span>
                                            </span>
                                        </div>
                                        <!--end::Price-->
                                    </label>
                                    <!--end::Tab link-->
                                    <!--begin::Tab link-->
                                    <label
                                        class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6  mb-6"
                                        data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_enterprise">

                                        <!--end::Description-->
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Radio-->
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                                <input class="form-check-input" type="radio" name="plan"
                                                    value="enterprise" />
                                            </div>
                                            <!--end::Radio-->

                                            <!--begin::Info-->
                                            <div class="flex-grow-1">
                                                <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">
                                                    Enterprise
                                                    <span
                                                        class="badge badge-light-success ms-2 py-2 px-3 fs-7">Popular</span>
                                                </div>
                                                <div class="fw-semibold opacity-75">
                                                    Best value for 1000+ team </div>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Description-->

                                        <!--begin::Price-->
                                        <div class="ms-5">
                                            <span class="mb-2">$</span>

                                            <span class="fs-3x fw-bold" data-kt-plan-price-month="999"
                                                data-kt-plan-price-annual="9999">
                                                999 </span>

                                            <span class="fs-7 opacity-50">/
                                                <span data-kt-element="period">Mon</span>
                                            </span>
                                        </div>
                                        <!--end::Price-->
                                    </label>
                                    <!--end::Tab link-->
                                    <!--begin::Tab link-->
                                    <label
                                        class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6"
                                        data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_custom">

                                        <!--end::Description-->
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Radio-->
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                                <input class="form-check-input" type="radio" name="plan"
                                                    value="custom" />
                                            </div>
                                            <!--end::Radio-->

                                            <!--begin::Info-->
                                            <div class="flex-grow-1">
                                                <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">
                                                    Custom
                                                </div>
                                                <div class="fw-semibold opacity-75">
                                                    Requet a custom license </div>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Description-->

                                        <!--begin::Price-->
                                        <div class="ms-5">
                                            <a href="#" class="btn btn-sm btn-success">Contact Us</a>
                                        </div>
                                        <!--end::Price-->
                                    </label>
                                    <!--end::Tab link-->
                                </div>
                                <!--end::Tabs-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-lg-6">
                                <!--begin::Tab content-->
                                <div class="tab-content rounded h-100 bg-light p-10">
                                    <!--begin::Tab Pane-->
                                    <div class="tab-pane fade show active" id="kt_upgrade_plan_startup">
                                        <!--begin::Heading-->
                                        <div class="pb-5">
                                            <h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>

                                            <div class="text-muted fw-semibold">
                                                Optimal for 10+ team size and new startup
                                            </div>
                                        </div>
                                        <!--end::Heading-->

                                        <!--begin::Body-->
                                        <div class="pt-1">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Up to 10 Active Users </span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Up to 30 Project Integrations </span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Analytics Module </span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-muted flex-grow-1">
                                                    Finance Module </span>
                                                <i class="ki-duotone ki-cross-circle fs-1"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-muted flex-grow-1">
                                                    Accounting Module </span>
                                                <i class="ki-duotone ki-cross-circle fs-1"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-muted flex-grow-1">
                                                    Network Platform </span>
                                                <i class="ki-duotone ki-cross-circle fs-1"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ">
                                                <span class="fw-semibold fs-5 text-muted flex-grow-1">
                                                    Unlimited Cloud Space </span>
                                                <i class="ki-duotone ki-cross-circle fs-1"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Tab Pane-->
                                    <!--begin::Tab Pane-->
                                    <div class="tab-pane fade " id="kt_upgrade_plan_advanced">
                                        <!--begin::Heading-->
                                        <div class="pb-5">
                                            <h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>

                                            <div class="text-muted fw-semibold">
                                                Optimal for 100+ team size and grown company
                                            </div>
                                        </div>
                                        <!--end::Heading-->

                                        <!--begin::Body-->
                                        <div class="pt-1">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Up to 10 Active Users </span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Up to 30 Project Integrations </span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Analytics Module </span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Finance Module </span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Accounting Module </span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-muted flex-grow-1">
                                                    Network Platform </span>
                                                <i class="ki-duotone ki-cross-circle fs-1"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ">
                                                <span class="fw-semibold fs-5 text-muted flex-grow-1">
                                                    Unlimited Cloud Space </span>
                                                <i class="ki-duotone ki-cross-circle fs-1"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Tab Pane-->
                                    <!--begin::Tab Pane-->
                                    <div class="tab-pane fade " id="kt_upgrade_plan_enterprise">
                                        <!--begin::Heading-->
                                        <div class="pb-5">
                                            <h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>

                                            <div class="text-muted fw-semibold">
                                                Optimal for 1000+ team and enterpise
                                            </div>
                                        </div>
                                        <!--end::Heading-->

                                        <!--begin::Body-->
                                        <div class="pt-1">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Up to 10 Active Users </span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Up to 30 Project Integrations </span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Analytics Module </span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Finance Module </span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Accounting Module </span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Network Platform </span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Unlimited Cloud Space </span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Tab Pane-->
                                    <!--begin::Tab Pane-->
                                    <div class="tab-pane fade " id="kt_upgrade_plan_custom">
                                        <!--begin::Heading-->
                                        <div class="pb-5">
                                            <h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>

                                            <div class="text-muted fw-semibold">
                                                Optimal for corporations
                                            </div>
                                        </div>
                                        <!--end::Heading-->

                                        <!--begin::Body-->
                                        <div class="pt-1">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Unlimited Users </span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Unlimited Project Integrations </span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Analytics Module </span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Finance Module </span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Accounting Module </span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Network Platform </span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Unlimited Cloud Space </span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Tab Pane-->
                                </div>
                                <!--end::Tab content-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Plans-->

                    <!--begin::Actions-->
                    <div class="d-flex flex-center flex-row-fluid pt-12">
                        <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">
                            Cancel
                        </button>

                        <button type="submit" class="btn btn-primary" id="kt_modal_upgrade_plan_btn">

                            <!--begin::Indicator label-->
                            <span class="indicator-label">
                                Upgrade Plan</span>
                            <!--end::Indicator label-->

                            <!--begin::Indicator progress-->
                            <span class="indicator-progress">
                                Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </span>
                            <!--end::Indicator progress-->
                        </button>
                    </div>
                    <!--end::Actions-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Upgrade plan-->
    <!--begin::Modal - Users Search-->
    <div class="modal fade" id="kt_modal_users_search" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header pb-0 border-0 justify-content-end">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--begin::Modal header-->

                <!--begin::Modal body-->
                <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                    <!--begin::Content-->
                    <div class="text-center mb-13">
                        <h1 class="mb-3">Search Users</h1>

                        <div class="text-muted fw-semibold fs-5">
                            Invite Collaborators To Your Project
                        </div>
                    </div>
                    <!--end::Content-->

                    <!--begin::Search-->
                    <div id="kt_modal_users_search_handler" data-kt-search-keypress="true" data-kt-search-min-length="2"
                        data-kt-search-enter="enter" data-kt-search-layout="inline">

                        <!--begin::Form-->
                        <form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">
                            <!--begin::Hidden input(Added to disable form autocomplete)-->
                            <input type="hidden" />
                            <!--end::Hidden input-->

                            <!--begin::Icon-->
                            <i
                                class="ki-duotone ki-magnifier fs-2 fs-lg-1 text-gray-500 position-absolute top-50 ms-5 translate-middle-y"><span
                                    class="path1"></span><span class="path2"></span></i>
                            <!--end::Icon-->

                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-lg form-control-solid px-15"
                                name="search" value="" placeholder="Search by username, full name or email..."
                                data-kt-search-element="input" />
                            <!--end::Input-->

                            <!--begin::Spinner-->
                            <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5"
                                data-kt-search-element="spinner">
                                <span class="spinner-border h-15px w-15px align-middle text-muted"></span>
                            </span>
                            <!--end::Spinner-->

                            <!--begin::Reset-->
                            <span
                                class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none"
                                data-kt-search-element="clear">
                                <i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0"><span class="path1"></span><span
                                        class="path2"></span></i> </span>
                            <!--end::Reset-->
                        </form>
                        <!--end::Form-->

                        <!--begin::Wrapper-->
                        <div class="py-5">
                            <!--begin::Suggestions-->
                            <div data-kt-search-element="suggestions">
                                <!--begin::Heading-->
                                <h3 class="fw-semibold mb-5">Recently searched:</h3>
                                <!--end::Heading-->

                                <!--begin::Users-->
                                <div class="mh-375px scroll-y me-n7 pe-7">
                                    <!--begin::User-->
                                    <a href="#"
                                        class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle me-5">
                                            <img alt="Pic" src="./public/assets/media/avatars/300-6.jpg" />
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Info-->
                                        <div class="fw-semibold">
                                            <span class="fs-6 text-gray-800 me-2">Emma Smith</span>
                                            <span class="badge badge-light">Art Director</span>
                                        </div>
                                        <!--end::Info-->
                                    </a>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <a href="#"
                                        class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle me-5">
                                            <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                                M </span>
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Info-->
                                        <div class="fw-semibold">
                                            <span class="fs-6 text-gray-800 me-2">Melody Macy</span>
                                            <span class="badge badge-light">Marketing Analytic</span>
                                        </div>
                                        <!--end::Info-->
                                    </a>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <a href="#"
                                        class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle me-5">
                                            <img alt="Pic" src="./public/assets/media/avatars/300-1.jpg" />
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Info-->
                                        <div class="fw-semibold">
                                            <span class="fs-6 text-gray-800 me-2">Max Smith</span>
                                            <span class="badge badge-light">Software Enginer</span>
                                        </div>
                                        <!--end::Info-->
                                    </a>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <a href="#"
                                        class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle me-5">
                                            <img alt="Pic" src="./public/assets/media/avatars/300-5.jpg" />
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Info-->
                                        <div class="fw-semibold">
                                            <span class="fs-6 text-gray-800 me-2">Sean Bean</span>
                                            <span class="badge badge-light">Web Developer</span>
                                        </div>
                                        <!--end::Info-->
                                    </a>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <a href="#"
                                        class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle me-5">
                                            <img alt="Pic" src="./public/assets/media/avatars/300-25.jpg" />
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Info-->
                                        <div class="fw-semibold">
                                            <span class="fs-6 text-gray-800 me-2">Brian Cox</span>
                                            <span class="badge badge-light">UI/UX Designer</span>
                                        </div>
                                        <!--end::Info-->
                                    </a>
                                    <!--end::User-->
                                </div>
                                <!--end::Users-->
                            </div>
                            <!--end::Suggestions-->

                            <!--begin::Results(add d-none to below element to hide the users list by default)-->
                            <div data-kt-search-element="results" class="d-none">
                                <!--begin::Users-->
                                <div class="mh-375px scroll-y me-n7 pe-7">
                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="0">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='0']"
                                                    value="0" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="./public/assets/media/avatars/300-6.jpg" />
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma
                                                    Smith</a>

                                                <div class="fw-semibold text-muted">smith@kpmg.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2" selected>Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="1">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='1']"
                                                    value="1" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                                    M </span>
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody
                                                    Macy</a>

                                                <div class="fw-semibold text-muted">melody@altbox.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1" selected>Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="2">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='2']"
                                                    value="2" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="./public/assets/media/avatars/300-1.jpg" />
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max
                                                    Smith</a>

                                                <div class="fw-semibold text-muted">max@kt.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected>Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="3">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='3']"
                                                    value="3" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="./public/assets/media/avatars/300-5.jpg" />
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean
                                                    Bean</a>

                                                <div class="fw-semibold text-muted">sean@dellito.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2" selected>Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="4">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='4']"
                                                    value="4" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="./public/assets/media/avatars/300-25.jpg" />
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian
                                                    Cox</a>

                                                <div class="fw-semibold text-muted">brian@exchange.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected>Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="5">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='5']"
                                                    value="5" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-warning text-warning fw-semibold">
                                                    C </span>
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela
                                                    Collins</a>

                                                <div class="fw-semibold text-muted">mik@pex.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2" selected>Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="6">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='6']"
                                                    value="6" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="./public/assets/media/avatars/300-9.jpg" />
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis
                                                    Mitcham</a>

                                                <div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected>Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="7">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='7']"
                                                    value="7" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                                    O </span>
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia
                                                    Wild</a>

                                                <div class="fw-semibold text-muted">olivia@corpmail.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2" selected>Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="8">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='8']"
                                                    value="8" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-primary text-primary fw-semibold">
                                                    N </span>
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil
                                                    Owen</a>

                                                <div class="fw-semibold text-muted">owen.neil@gmail.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1" selected>Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="9">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='9']"
                                                    value="9" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="./public/assets/media/avatars/300-23.jpg" />
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan
                                                    Wilson</a>

                                                <div class="fw-semibold text-muted">dam@consilting.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected>Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="10">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='10']"
                                                    value="10" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                                    E </span>
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma
                                                    Bold</a>

                                                <div class="fw-semibold text-muted">emma@intenso.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2" selected>Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="11">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='11']"
                                                    value="11" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="./public/assets/media/avatars/300-12.jpg" />
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana
                                                    Crown</a>

                                                <div class="fw-semibold text-muted">ana.cf@limtel.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1" selected>Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="12">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='12']"
                                                    value="12" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-info text-info fw-semibold">
                                                    A </span>
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert
                                                    Doe</a>

                                                <div class="fw-semibold text-muted">robert@benko.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected>Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="13">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='13']"
                                                    value="13" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="./public/assets/media/avatars/300-13.jpg" />
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John
                                                    Miller</a>

                                                <div class="fw-semibold text-muted">miller@mapple.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected>Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="14">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='14']"
                                                    value="14" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-success text-success fw-semibold">
                                                    L </span>
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy
                                                    Kunic</a>

                                                <div class="fw-semibold text-muted">lucy.m@fentech.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2" selected>Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="15">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='15']"
                                                    value="15" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="./public/assets/media/avatars/300-21.jpg" />
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan
                                                    Wilder</a>

                                                <div class="fw-semibold text-muted">ethan@loop.com.au</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1" selected>Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="16">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='16']"
                                                    value="16" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="./public/assets/media/avatars/300-1.jpg" />
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max
                                                    Smith</a>

                                                <div class="fw-semibold text-muted">max@kt.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected>Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->


                                </div>
                                <!--end::Users-->

                                <!--begin::Actions-->
                                <div class="d-flex flex-center mt-15">
                                    <button type="reset" id="kt_modal_users_search_reset" data-bs-dismiss="modal"
                                        class="btn btn-active-light me-3">
                                        Cancel
                                    </button>

                                    <button type="submit" id="kt_modal_users_search_submit" class="btn btn-primary">
                                        Add Selected Users
                                    </button>
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Results-->
                            <!--begin::Empty-->
                            <div data-kt-search-element="empty" class="text-center d-none">
                                <!--begin::Message-->
                                <div class="fw-semibold py-10">
                                    <div class="text-gray-600 fs-3 mb-2">No users found</div>

                                    <div class="text-muted fs-6">Try to search by username, full name or email...</div>
                                </div>
                                <!--end::Message-->

                                <!--begin::Illustration-->
                                <div class="text-center px-5">
                                    <img src="./public/assets/media/illustrations/sketchy-1/1.png" alt=""
                                        class="w-100 h-200px h-sm-325px" />
                                </div>
                                <!--end::Illustration-->
                            </div>
                            <!--end::Empty-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Search-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Users Search-->
    <!--begin::Modal - Invite Friends-->
    <div class="modal fade" id="kt_modal_invite_friends" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header pb-0 border-0 justify-content-end">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--begin::Modal header-->

                <!--begin::Modal body-->
                <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                    <!--begin::Heading-->
                    <div class="text-center mb-13">
                        <!--begin::Title-->
                        <h1 class="mb-3">Invite a Friend</h1>
                        <!--end::Title-->

                        <!--begin::Description-->
                        <div class="text-muted fw-semibold fs-5">
                            If you need more info, please check out
                            <a href="#" class="link-primary fw-bold">FAQ Page</a>.
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->

                    <!--begin::Google Contacts Invite-->
                    <div class="btn btn-light-primary fw-bold w-100 mb-8">
                        <img alt="Logo" src="./public/assets/media/svg/brand-logos/google-icon.svg"
                            class="h-20px me-3" />
                        Invite Gmail Contacts
                    </div>
                    <!--end::Google Contacts Invite-->

                    <!--begin::Separator-->
                    <div class="separator d-flex flex-center mb-8">
                        <span class="text-uppercase bg-body fs-7 fw-semibold text-muted px-3">or</span>
                    </div>
                    <!--end::Separator-->

                    <!--begin::Textarea-->
                    <textarea class="form-control form-control-solid mb-8" rows="3"
                        placeholder="Type or paste emails here">
                </textarea>
                    <!--end::Textarea-->

                    <!--begin::Users-->
                    <div class="mb-10">
                        <!--begin::Heading-->
                        <div class="fs-6 fw-semibold mb-2">Your Invitations</div>
                        <!--end::Heading-->

                        <!--begin::List-->
                        <div class="mh-300px scroll-y me-n7 pe-7">
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="./public/assets/media/avatars/300-6.jpg" />
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma
                                            Smith</a>

                                        <div class="fw-semibold text-muted">smith@kpmg.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2" selected>Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                            M </span>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody
                                            Macy</a>

                                        <div class="fw-semibold text-muted">melody@altbox.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" selected>Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="./public/assets/media/avatars/300-1.jpg" />
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max
                                            Smith</a>

                                        <div class="fw-semibold text-muted">max@kt.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected>Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="./public/assets/media/avatars/300-5.jpg" />
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean
                                            Bean</a>

                                        <div class="fw-semibold text-muted">sean@dellito.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2" selected>Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="./public/assets/media/avatars/300-25.jpg" />
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian
                                            Cox</a>

                                        <div class="fw-semibold text-muted">brian@exchange.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected>Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-warning text-warning fw-semibold">
                                            C </span>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela
                                            Collins</a>

                                        <div class="fw-semibold text-muted">mik@pex.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2" selected>Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="./public/assets/media/avatars/300-9.jpg" />
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis
                                            Mitcham</a>

                                        <div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected>Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                            O </span>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia
                                            Wild</a>

                                        <div class="fw-semibold text-muted">olivia@corpmail.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2" selected>Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-primary text-primary fw-semibold">
                                            N </span>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil
                                            Owen</a>

                                        <div class="fw-semibold text-muted">owen.neil@gmail.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" selected>Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="./public/assets/media/avatars/300-23.jpg" />
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan
                                            Wilson</a>

                                        <div class="fw-semibold text-muted">dam@consilting.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected>Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                            E </span>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma
                                            Bold</a>

                                        <div class="fw-semibold text-muted">emma@intenso.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2" selected>Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="./public/assets/media/avatars/300-12.jpg" />
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana
                                            Crown</a>

                                        <div class="fw-semibold text-muted">ana.cf@limtel.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" selected>Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-info text-info fw-semibold">
                                            A </span>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert
                                            Doe</a>

                                        <div class="fw-semibold text-muted">robert@benko.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected>Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="./public/assets/media/avatars/300-13.jpg" />
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John
                                            Miller</a>

                                        <div class="fw-semibold text-muted">miller@mapple.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected>Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-success text-success fw-semibold">
                                            L </span>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy
                                            Kunic</a>

                                        <div class="fw-semibold text-muted">lucy.m@fentech.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2" selected>Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="./public/assets/media/avatars/300-21.jpg" />
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan
                                            Wilder</a>

                                        <div class="fw-semibold text-muted">ethan@loop.com.au</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" selected>Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 ">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                            M </span>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody
                                            Macy</a>

                                        <div class="fw-semibold text-muted">melody@altbox.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected>Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                        </div>
                        <!--end::List-->
                    </div>
                    <!--end::Users-->

                    <!--begin::Notice-->
                    <div class="d-flex flex-stack">
                        <!--begin::Label-->
                        <div class="me-5 fw-semibold">
                            <label class="fs-6">Adding Users by Team Members</label>
                            <div class="fs-7 text-muted">If you need more info, please check budget planning</div>
                        </div>
                        <!--end::Label-->

                        <!--begin::Switch-->
                        <label class="form-check form-switch form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" checked="checked" />

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
    <!--end::Modal - Invite Friend-->
    <!--end::Modals-->

    <?php require_once('./views/includes/script.inc.php') ?>


</body>
<!--end::Body-->

</html>