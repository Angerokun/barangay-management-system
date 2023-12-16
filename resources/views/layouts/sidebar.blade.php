<!-- Side Overlay-->
<aside id="side-overlay">
    <!-- Side Header -->
    <div class="bg-image" style="background-image: url('assets/media/various/bg_side_overlay_header.jpg');">
        <div class="bg-primary-op">
        <div class="content-header">
            <!-- User Avatar -->
            <a class="img-link me-1" href="be_pages_generic_profile.html">
            <img class="img-avatar img-avatar48" src="{{ asset('media/avatars/avatar10.jpg') }}" alt="">
            </a>
            <!-- END User Avatar -->

            <!-- User Info -->
            <div class="ms-2">
            <a class="text-white fw-semibold" href="be_pages_generic_profile.html">{{ Auth::user()->name }}</a>
            <div class="text-white-75 fs-sm">Admin</div>
            </div>
            <!-- END User Info -->

            <!-- Close Side Overlay -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <a class="ms-auto text-white" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_close">
            <i class="fa fa-times-circle"></i>
            </a>
            <!-- END Close Side Overlay -->
        </div>
        </div>
    </div>
    <!-- END Side Header -->

    <!-- Side Content -->
    <div class="content-side">
        <!-- Side Overlay Tabs -->
        <div class="block block-transparent pull-x pull-t mb-0">
        <ul class="nav nav-tabs nav-tabs-block nav-justified" role="tablist">
            <li class="nav-item" role="presentation">
            <button class="nav-link active" id="so-settings-tab" data-bs-toggle="tab" data-bs-target="#so-settings" role="tab" aria-controls="so-settings" aria-selected="true">
                <i class="fa fa-fw fa-cog"></i>
            </button>
            </li>
            <li class="nav-item" role="presentation">
            <button class="nav-link" id="so-people-tab" data-bs-toggle="tab" data-bs-target="#so-people" role="tab" aria-controls="so-people" aria-selected="false">
                <i class="far fa-fw fa-user-circle"></i>
            </button>
            </li>
            <li class="nav-item" role="presentation">
            <button class="nav-link" id="so-profile-tab" data-bs-toggle="tab" data-bs-target="#so-profile" role="tab" aria-controls="so-profile" aria-selected="false">
                <i class="far fa-fw fa-edit"></i>
            </button>
            </li>
        </ul>
        <div class="block-content tab-content overflow-hidden">
            <!-- Settings Tab -->
            <div class="tab-pane pull-x fade fade-up show active" id="so-settings" role="tabpanel" aria-labelledby="so-settings-tab">
            <div class="block mb-0">
                <!-- Color Themes -->
                <!-- Toggle Themes functionality initialized in Template._uiHandleTheme() -->
                <div class="block-content block-content-sm block-content-full bg-body">
                <span class="text-uppercase fs-sm fw-bold">Color Themes</span>
                </div>
                <div class="block-content block-content-full">
                <div class="row g-sm text-center">
                    <div class="col-4 mb-1">
                    <a class="d-block py-3 text-white fs-sm fw-semibold bg-default" data-toggle="theme" data-theme="default" href="#">
                        Default
                    </a>
                    </div>
                    <div class="col-4 mb-1">
                    <a class="d-block py-3 text-white fs-sm fw-semibold bg-xwork" data-toggle="theme" data-theme="assets/css/themes/xwork.min.css" href="#">
                        xWork
                    </a>
                    </div>
                    <div class="col-4 mb-1">
                    <a class="d-block py-3 text-white fs-sm fw-semibold bg-xmodern" data-toggle="theme" data-theme="assets/css/themes/xmodern.min.css" href="#">
                        xModern
                    </a>
                    </div>
                    <div class="col-4 mb-1">
                    <a class="d-block py-3 text-white fs-sm fw-semibold bg-xeco" data-toggle="theme" data-theme="assets/css/themes/xeco.min.css" href="#">
                        xEco
                    </a>
                    </div>
                    <div class="col-4 mb-1">
                    <a class="d-block py-3 text-white fs-sm fw-semibold bg-xsmooth" data-toggle="theme" data-theme="assets/css/themes/xsmooth.min.css" href="#">
                        xSmooth
                    </a>
                    </div>
                    <div class="col-4 mb-1">
                    <a class="d-block py-3 text-white fs-sm fw-semibold bg-xinspire" data-toggle="theme" data-theme="assets/css/themes/xinspire.min.css" href="#">
                        xInspire
                    </a>
                    </div>
                    <div class="col-4 mb-1">
                    <a class="d-block py-3 text-white fs-sm fw-semibold bg-xdream" data-toggle="theme" data-theme="assets/css/themes/xdream.min.css" href="#">
                        xDream
                    </a>
                    </div>
                    <div class="col-4 mb-1">
                    <a class="d-block py-3 text-white fs-sm fw-semibold bg-xpro" data-toggle="theme" data-theme="assets/css/themes/xpro.min.css" href="#">
                        xPro
                    </a>
                    </div>
                    <div class="col-4 mb-1">
                    <a class="d-block py-3 text-white fs-sm fw-semibold bg-xplay" data-toggle="theme" data-theme="assets/css/themes/xplay.min.css" href="#">
                        xPlay
                    </a>
                    </div>
                    <div class="col-12">
                    <a class="d-block py-3 bg-body-dark fw-semibold text-dark" href="be_ui_color_themes.html">All Color Themes</a>
                    </div>
                </div>
                </div>
                <!-- END Color Themes -->

                <!-- Sidebar -->
                <div class="block-content block-content-sm block-content-full bg-body">
                <span class="text-uppercase fs-sm fw-bold">Sidebar</span>
                </div>
                <div class="block-content block-content-full">
                <div class="row g-sm text-center">
                    <div class="col-6 mb-1">
                    <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="sidebar_style_dark" href="javascript:void(0)">Dark</a>
                    </div>
                    <div class="col-6 mb-1">
                    <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="sidebar_style_light" href="javascript:void(0)">Light</a>
                    </div>
                </div>
                </div>
                <!-- END Sidebar -->

                <!-- Header -->
                <div class="block-content block-content-sm block-content-full bg-body">
                <span class="text-uppercase fs-sm fw-bold">Header</span>
                </div>
                <div class="block-content block-content-full">
                <div class="row g-sm text-center mb-2">
                    <div class="col-6 mb-1">
                    <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="header_style_dark" href="javascript:void(0)">Dark</a>
                    </div>
                    <div class="col-6 mb-1">
                    <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="header_style_light" href="javascript:void(0)">Light</a>
                    </div>
                    <div class="col-6 mb-1">
                    <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="header_mode_fixed" href="javascript:void(0)">Fixed</a>
                    </div>
                    <div class="col-6 mb-1">
                    <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="header_mode_static" href="javascript:void(0)">Static</a>
                    </div>
                </div>
                </div>
                <!-- END Header -->

                <!-- Content -->
                <div class="block-content block-content-sm block-content-full bg-body">
                <span class="text-uppercase fs-sm fw-bold">Content</span>
                </div>
                <div class="block-content block-content-full">
                <div class="row g-sm text-center">
                    <div class="col-6 mb-1">
                    <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="content_layout_boxed" href="javascript:void(0)">Boxed</a>
                    </div>
                    <div class="col-6 mb-1">
                    <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="content_layout_narrow" href="javascript:void(0)">Narrow</a>
                    </div>
                    <div class="col-12 mb-1">
                    <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="content_layout_full_width" href="javascript:void(0)">Full Width</a>
                    </div>
                </div>
                </div>
                <!-- END Content -->

                <!-- Layout API -->
                <div class="block-content block-content-full border-top">
                <a class="btn w-100 btn-alt-primary" href="be_layout_api.html">
                    <i class="fa fa-fw fa-flask me-1"></i> Layout API
                </a>
                </div>
                <!-- END Layout API -->
            </div>
            </div>
            <!-- END Settings Tab -->

            <!-- People -->
            <div class="tab-pane pull-x fade fade-up" id="so-people" role="tabpanel" aria-labelledby="so-people-tab">
            <div class="block mb-0">
                <!-- Online -->
                <div class="block-content block-content-sm block-content-full bg-body">
                <span class="text-uppercase fs-sm fw-bold">Online</span>
                </div>
                <div class="block-content">
                <ul class="nav-items">
                    <li>
                    <a class="d-flex py-2" href="be_pages_generic_profile.html">
                        <div class="flex-shrink-0 mx-3 overlay-container">
                        <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar3.jpg" alt="">
                        <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-success"></span>
                        </div>
                        <div class="flex-grow-1">
                        <div class="fw-semibold">Susan Day</div>
                        <div class="fs-sm text-muted">Photographer</div>
                        </div>
                    </a>
                    </li>
                    <li>
                    <a class="d-flex py-2" href="be_pages_generic_profile.html">
                        <div class="flex-shrink-0 mx-3 overlay-container">
                        <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar9.jpg" alt="">
                        <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-success"></span>
                        </div>
                        <div class="flex-grow-1">
                        <div class="fw-semibold">Adam McCoy</div>
                        <div class="fw-normal fs-sm text-muted">Web Designer</div>
                        </div>
                    </a>
                    </li>
                    <li>
                    <a class="d-flex py-2" href="be_pages_generic_profile.html">
                        <div class="flex-shrink-0 mx-3 overlay-container">
                        <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar7.jpg" alt="">
                        <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-success"></span>
                        </div>
                        <div class="flex-grow-1">
                        <div class="fw-semibold">Danielle Jones</div>
                        <div class="fw-normal fs-sm text-muted">Web Developer</div>
                        </div>
                    </a>
                    </li>
                </ul>
                </div>
                <!-- Online -->

                <!-- Busy -->
                <div class="block-content block-content-sm block-content-full bg-body">
                <span class="text-uppercase fs-sm fw-bold">Busy</span>
                </div>
                <div class="block-content">
                <ul class="nav-items">
                    <li>
                    <a class="d-flex py-2" href="be_pages_generic_profile.html">
                        <div class="flex-shrink-0 mx-3 overlay-container">
                        <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar5.jpg" alt="">
                        <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-danger"></span>
                        </div>
                        <div class="flex-grow-1">
                        <div class="fw-semibold">Carol White</div>
                        <div class="fw-normal fs-sm text-muted">UI Designer</div>
                        </div>
                    </a>
                    </li>
                </ul>
                </div>
                <!-- END Busy -->

                <!-- Away -->
                <div class="block-content block-content-sm block-content-full bg-body">
                <span class="text-uppercase fs-sm fw-bold">Away</span>
                </div>
                <div class="block-content">
                <ul class="nav-items">
                    <li>
                    <a class="d-flex py-2" href="be_pages_generic_profile.html">
                        <div class="flex-shrink-0 mx-3 overlay-container">
                        <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar13.jpg" alt="">
                        <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-warning"></span>
                        </div>
                        <div class="flex-grow-1">
                        <div class="fw-semibold">Albert Ray</div>
                        <div class="fw-normal fs-sm text-muted">Copywriter</div>
                        </div>
                    </a>
                    </li>
                    <li>
                    <a class="d-flex py-2" href="be_pages_generic_profile.html">
                        <div class="flex-shrink-0 mx-3 overlay-container">
                        <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar7.jpg" alt="">
                        <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-warning"></span>
                        </div>
                        <div class="flex-grow-1">
                        <div class="fw-semibold">Carol Ray</div>
                        <div class="fw-normal fs-sm text-muted">Writer</div>
                        </div>
                    </a>
                    </li>
                </ul>
                </div>
                <!-- END Away -->

                <!-- Offline -->
                <div class="block-content block-content-sm block-content-full bg-body">
                <span class="text-uppercase fs-sm fw-bold">Offline</span>
                </div>
                <div class="block-content">
                <ul class="nav-items">
                    <li>
                    <a class="d-flex py-2" href="be_pages_generic_profile.html">
                        <div class="flex-shrink-0 mx-3 overlay-container">
                        <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar11.jpg" alt="">
                        <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-muted"></span>
                        </div>
                        <div class="flex-grow-1">
                        <div class="fw-semibold">Ryan Flores</div>
                        <div class="fw-normal fs-sm text-muted">Teacher</div>
                        </div>
                    </a>
                    </li>
                    <li>
                    <a class="d-flex py-2" href="be_pages_generic_profile.html">
                        <div class="flex-shrink-0 mx-3 overlay-container">
                        <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar7.jpg" alt="">
                        <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-muted"></span>
                        </div>
                        <div class="flex-grow-1">
                        <div class="fw-semibold">Helen Jacobs</div>
                        <div class="fw-normal fs-sm text-muted">Photographer</div>
                        </div>
                    </a>
                    </li>
                    <li>
                    <a class="d-flex py-2" href="be_pages_generic_profile.html">
                        <div class="flex-shrink-0 mx-3 overlay-container">
                        <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar7.jpg" alt="">
                        <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-muted"></span>
                        </div>
                        <div class="flex-grow-1">
                        <div class="fw-semibold">Amanda Powell</div>
                        <div class="fw-normal fs-sm text-muted">Front-end Developer</div>
                        </div>
                    </a>
                    </li>
                    <li>
                    <a class="d-flex py-2" href="be_pages_generic_profile.html">
                        <div class="flex-shrink-0 mx-3 overlay-container">
                        <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar12.jpg" alt="">
                        <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-muted"></span>
                        </div>
                        <div class="flex-grow-1">
                        <div class="fw-semibold">David Fuller</div>
                        <div class="fw-normal fs-sm text-muted">UX Specialist</div>
                        </div>
                    </a>
                    </li>
                </ul>
                </div>
                <!-- END Offline -->

                <!-- Add People -->
                <div class="block-content block-content-full border-top">
                <a class="btn w-100 btn-alt-primary" href="javascript:void(0)">
                    <i class="fa fa-fw fa-plus me-1 opacity-50"></i> Add People
                </a>
                </div>
                <!-- END Add People -->
            </div>
            </div>
            <!-- END People -->

            <!-- Profile -->
            <div class="tab-pane pull-x fade fade-up" id="so-profile" role="tabpanel" aria-labelledby="so-profile-tab">
            <form action="be_pages_dashboard.html" method="POST" onsubmit="return false;">
                <div class="block mb-0">
                <!-- Personal -->
                <div class="block-content block-content-sm block-content-full bg-body">
                    <span class="text-uppercase fs-sm fw-bold">Personal</span>
                </div>
                <div class="block-content block-content-full">
                    <div class="mb-4">
                    <label class="form-label">Username</label>
                    <input type="text" readonly class="form-control" id="so-profile-username-static" value="Admin">
                    </div>
                    <div class="mb-4">
                    <label class="form-label" for="so-profile-name">Name</label>
                    <input type="text" class="form-control" id="so-profile-name" name="so-profile-name" value="George Taylor">
                    </div>
                    <div class="mb-4">
                    <label class="form-label" for="so-profile-email">Email</label>
                    <input type="email" class="form-control" id="so-profile-email" name="so-profile-email" value="g.taylor@example.com">
                    </div>
                </div>
                <!-- END Personal -->

                <!-- Password Update -->
                <div class="block-content block-content-sm block-content-full bg-body">
                    <span class="text-uppercase fs-sm fw-bold">Password Update</span>
                </div>
                <div class="block-content block-content-full">
                    <div class="mb-4">
                    <label class="form-label" for="so-profile-password">Current Password</label>
                    <input type="password" class="form-control" id="so-profile-password" name="so-profile-password">
                    </div>
                    <div class="mb-4">
                    <label class="form-label" for="so-profile-new-password">New Password</label>
                    <input type="password" class="form-control" id="so-profile-new-password" name="so-profile-new-password">
                    </div>
                    <div class="mb-4">
                    <label class="form-label" for="so-profile-new-password-confirm">Confirm New Password</label>
                    <input type="password" class="form-control" id="so-profile-new-password-confirm" name="so-profile-new-password-confirm">
                    </div>
                </div>
                <!-- END Password Update -->

                <!-- Options -->
                <div class="block-content block-content-sm block-content-full bg-body">
                    <span class="text-uppercase fs-sm fw-bold">Options</span>
                </div>
                <div class="block-content">
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="so-settings-status" name="so-settings-status">
                    <label class="form-check-label fw-semibold" for="so-settings-status">Online Status</label>
                    </div>
                    <p class="text-muted fs-sm">
                    Make your online status visible to other users of your app
                    </p>
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="so-settings-notifications" name="so-settings-notifications">
                    <label class="form-check-label fw-semibold" for="so-settings-notifications">Notifications</label>
                    </div>
                    <p class="text-muted fs-sm">
                    Receive desktop notifications regarding your projects and sales
                    </p>
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="so-settings-updates" name="so-settings-updates">
                    <label class="form-check-label fw-semibold" for="so-settings-updates">Auto Updates</label>
                    </div>
                    <p class="text-muted fs-sm">
                    If enabled, we will keep all your applications and servers up to date with the most recent features automatically
                    </p>
                </div>
                <!-- END Options -->

                <!-- Submit -->
                <div class="block-content block-content-full border-top">
                    <button type="submit" class="btn w-100 btn-alt-primary">
                    <i class="fa fa-fw fa-save me-1 opacity-50"></i> Save
                    </button>
                </div>
                <!-- END Submit -->
                </div>
            </form>
            </div>
            <!-- END Profile -->
        </div>
        </div>
        <!-- END Side Overlay Tabs -->
    </div>
    <!-- END Side Content -->
 </aside>
<!-- END Side Overlay -->

<!-- Sidebar -->
<!--
Sidebar Mini Mode - Display Helper classes

Adding 'smini-hide' class to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
Adding 'smini-show' class to an element will make it visible (opacity: 1) when the sidebar is in mini mode
    If you would like to disable the transition animation, make sure to also add the 'no-transition' class to your element

Adding 'smini-hidden' to an element will hide it when the sidebar is in mini mode
Adding 'smini-visible' to an element will show it (display: inline-block) only when the sidebar is in mini mode
Adding 'smini-visible-block' to an element will show it (display: block) only when the sidebar is in mini mode
-->
<nav id="sidebar" aria-label="Main Navigation">
    <!-- Side Header -->
    <div class="bg-header-dark">
        <div class="content-header bg-white-5">
        <!-- Logo -->
        <a class="fw-semibold text-white tracking-wide" href="index.html">
            <span class="smini-visible">
            e<span class="opacity-75">-BMS</span>
            </span>
            <span class="smini-hidden">
            e<span class="opacity-75">-Barangay</span>
            </span>
        </a>
        <!-- END Logo -->

        <!-- Options -->
        <div>
            <!-- Toggle Sidebar Style -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <!-- Class Toggle, functionality initialized in Helpers.dmToggleClass() -->
            <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle" data-target="#sidebar-style-toggler" data-class="fa-toggle-off fa-toggle-on" onclick="Dashmix.layout('sidebar_style_toggle');Dashmix.layout('header_style_toggle');">
            <i class="fa fa-toggle-off" id="sidebar-style-toggler"></i>
            </button>
            <!-- END Toggle Sidebar Style -->

            <!-- Dark Mode -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle" data-target="#dark-mode-toggler" data-class="far fa" onclick="Dashmix.layout('dark_mode_toggle');">
            <i class="far fa-moon" id="dark-mode-toggler"></i>
            </button>
            <!-- END Dark Mode -->

            <!-- Close Sidebar, Visible only on mobile screens -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn-sm btn-alt-secondary d-lg-none" data-toggle="layout" data-action="sidebar_close">
            <i class="fa fa-times-circle"></i>
            </button>
            <!-- END Close Sidebar -->
        </div>
        <!-- END Options -->
        </div>
    </div>
    <!-- END Side Header -->

    <!-- Sidebar Scrolling -->
    <div class="js-sidebar-scroll">
        <!-- Side Navigation -->
        <div class="content-side">
        <ul class="nav-main">
            <li class="nav-main-item">
            <a class="nav-main-link active" href="be_pages_dashboard.html">
                <i class="nav-main-link-icon fa fa-location-arrow"></i>
                <span class="nav-main-link-name">Dashboard</span>
                <span class="nav-main-link-badge badge rounded-pill bg-primary">8</span>
            </a>
            </li>
            <li class="nav-main-heading">Profiling</li>
            <li class="nav-main-item">
            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                <i class="nav-main-link-icon fa fa-user-friends"></i>
                <span class="nav-main-link-name">Residents</span>
            </a>
            <ul class="nav-main-submenu">
                <li class="nav-main-item">
                <a class="nav-main-link" href="{{ route('residents.index') }}">
                    <span class="nav-main-link-name">MasterList</span>
                </a>
                </li>
                <li class="nav-main-item">
                <a class="nav-main-link" href="be_blocks_options.html">
                    <span class="nav-main-link-name">List of Voters</span>
                </a>
            </ul>
            </li>
            <li class="nav-main-item">
            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                <i class="nav-main-link-icon fa fa-boxes"></i>
                <span class="nav-main-link-name">Children/Teenagers</span>
            </a>
            <ul class="nav-main-submenu">
                <li class="nav-main-item">
                <a class="nav-main-link" href="be_widgets_tiles.html">
                    <span class="nav-main-link-name">Masterlist</span>
                </a>
                </li>
                <li class="nav-main-item">
                <a class="nav-main-link" href="be_widgets_stats.html">
                    <span class="nav-main-link-name">Infants</span>
                </a>
                </li>
                <li class="nav-main-item">
                <a class="nav-main-link" href="be_widgets_media.html">
                    <span class="nav-main-link-name">Pre-schoolers</span>
                </a>
                </li>
                <li class="nav-main-item">
                <a class="nav-main-link" href="be_widgets_users.html">
                    <span class="nav-main-link-name">Grade schooler</span>
                </a>
                </li>
                <li class="nav-main-item">
                <a class="nav-main-link" href="be_widgets_blog.html">
                    <span class="nav-main-link-name">Teenagers</span>
                </a>
                </li>
            </ul>
            </li>
            <li class="nav-main-item">
            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                <i class="nav-main-link-icon fa fa-boxes"></i>
                <span class="nav-main-link-name">PWDs</span>
            </a>
            <ul class="nav-main-submenu">
                <li class="nav-main-item">
                <a class="nav-main-link" href="be_widgets_tiles.html">
                    <span class="nav-main-link-name">Masterlist</span>
                </a>
                </li>
                <li class="nav-main-item">
                <a class="nav-main-link" href="be_widgets_stats.html">
                    <span class="nav-main-link-name">Mental Illness</span>
                </a>
                </li>
                <li class="nav-main-item">
                <a class="nav-main-link" href="be_widgets_media.html">
                    <span class="nav-main-link-name">Disabilities</span>
                </a>
                </li>
                <li class="nav-main-item">
                <a class="nav-main-link" href="be_widgets_users.html">
                    <span class="nav-main-link-name">Autism</span>
                </a>
                </li>
                <li class="nav-main-item">
                <a class="nav-main-link" href="be_widgets_blog.html">
                    <span class="nav-main-link-name">Mental Disability</span>
                </a>
                </li>
            </ul>
            </li>
            <li class="nav-main-item">
            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                <i class="nav-main-link-icon fa fa-boxes"></i>
                <span class="nav-main-link-name">Senior Citizens</span>
            </a>
            <ul class="nav-main-submenu">
                <li class="nav-main-item">
                <a class="nav-main-link" href="be_widgets_tiles.html">
                    <span class="nav-main-link-name">Masterlist</span>
                </a>
                </li>
                <li class="nav-main-item">
                <a class="nav-main-link" href="be_widgets_stats.html">
                    <span class="nav-main-link-name">Senior Citizen ID</span>
                </a>
                </li>
                <li class="nav-main-item">
                <a class="nav-main-link" href="be_widgets_media.html">
                    <span class="nav-main-link-name">Birthday Cash Gift</span>
                </a>
                </li>
            </ul>
            </li>
            <li class="nav-main-heading">Certificates and Clearances</li>
            <li class="nav-main-item">
            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                <i class="nav-main-link-icon fa fa-flask"></i>
                <span class="nav-main-link-name">Business Permits</span>
            </a>
            <ul class="nav-main-submenu">
                <li class="nav-main-item">
                <a class="nav-main-link" href="be_ui_icons.html">
                    <span class="nav-main-link-name">Masterlist</span>
                </a>
                </li>
                <li class="nav-main-item">
                <a class="nav-main-link" href="be_ui_grid.html">
                    <span class="nav-main-link-name">Businesses</span>
                </a>
            </ul>
            </li>
            <li class="nav-main-item">
            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                <i class="nav-main-link-icon fa fa-grip-horizontal"></i>
                <span class="nav-main-link-name">Community Tax Certificates/Cedula</span>
            </a>
            <ul class="nav-main-submenu">
                <li class="nav-main-item">
                <a class="nav-main-link" href="be_tables_styles.html">
                    <span class="nav-main-link-name">MasterList</span>
                </a>
                </li>
            </ul>
            </li>
            <li class="nav-main-item">
            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                <i class="nav-main-link-icon fa fa-sticky-note"></i>
                <span class="nav-main-link-name">Other Certification</span>
            </a>
            <ul class="nav-main-submenu">
                <li class="nav-main-item">
                <a class="nav-main-link" href="be_forms_elements.html">
                    <span class="nav-main-link-name">Certification - Good Moral</span>
                </a>
                </li>
                <li class="nav-main-item">
                <a class="nav-main-link" href="be_forms_layouts.html">
                    <span class="nav-main-link-name">Certification - Residency</span>
                </a>
                </li>
                <li class="nav-main-item">
                <a class="nav-main-link" href="be_forms_input_groups.html">
                    <span class="nav-main-link-name">Certification - Loan</span>
                </a>
                </li>
                <li class="nav-main-item">
                <a class="nav-main-link" href="be_forms_plugins.html">
                    <span class="nav-main-link-name">Certification - Indigency</span>
                </a>
                </li>
                <li class="nav-main-item">
                <a class="nav-main-link" href="be_forms_editors.html">
                    <span class="nav-main-link-name">Certification - Indigency (Other Person)</span>
                </a>
                </li>
                <li class="nav-main-item">
                <a class="nav-main-link" href="be_forms_validation.html">
                    <span class="nav-main-link-name">Certification - Indigency/Scholarship</span>
                </a>
                </li>
                <li class="nav-main-item">
                <a class="nav-main-link" href="be_forms_validation.html">
                    <span class="nav-main-link-name">Certification - Solo Parent</span>
                </a>
                </li>
                <li class="nav-main-item">
                <a class="nav-main-link" href="be_forms_validation.html">
                    <span class="nav-main-link-name">Certification - Death Occurence</span>
                </a>
                </li>
                <li class="nav-main-item">
                <a class="nav-main-link" href="be_forms_validation.html">
                    <span class="nav-main-link-name">Certification - Tax Exception</span>
                </a>
                </li>
            </ul>
            </li>
        </ul>
        </div>
        <!-- END Side Navigation -->
    </div>
    <!-- END Sidebar Scrolling -->
</nav>
<!-- END Sidebar -->