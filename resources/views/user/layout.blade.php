<!DOCTYPE html>
<html>
<head>
    <title>SpeedTest</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="{{asset('assets/bower_components/select2/dist/css/select2.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
    <link href="{{asset('assets/bower_components/dropzone/dist/dropzone.css')}}" rel="stylesheet">
    <link href="{{asset('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/bower_components/fullcalendar/dist/fullcalendar.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/bower_components/slick-carousel/slick/slick.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/main4a76.css?version=4.3.0')}}" rel="stylesheet">
    <link href="{{asset('icon_fonts_assets/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet">
</head>
<body class="menu-position-side menu-side-left full-screen">
<div class="all-wrapper solid-bg-all">
    <div class="layout-w">
        <!--------------------
        START - Mobile Menu
        -------------------->
        <div class="menu-mobile menu-activated-on-click color-scheme-dark">
            <div class="mm-logo-buttons-w"><a class="mm-logo" href="/">
                    <img src="/assets/img/logo.png"><span>SpeedTest</span></a>
                <div class="mm-buttons">
                    <div class="content-panel-open">
                        <div class="os-icon os-icon-grid-circles"></div>
                    </div>
                    <div class="mobile-menu-trigger">
                        <div class="os-icon os-icon-hamburger-menu-1"></div>
                    </div>
                </div>
            </div>
            <div class="menu-and-user">
                <div class="logged-user-w">
                    <div class="avatar-w"><img alt="" src="/assets/img/avatar1.jpg"></div>
                    <div class="logged-user-info-w">
                        <div class="logged-user-name"></div>
                        <div class="logged-user-role">Usuario</div>
                    </div>
                </div>
                <!--------------------
                START - Mobile Menu List
                -------------------->

            @include('admin.partials.menu-phone')
            <!--------------------
END - Mobile Menu List
-------------------->

            </div>
        </div>
        <!--------------------
        END - Mobile Menu
        -------------------->
        <!--------------------
        START - Main Menu
        -------------------->
        <div class="menu-w selected-menu-color-light menu-has-selected-link menu-activated-on-click color-scheme-light color-style-default sub-menu-color-light menu-position-side menu-side-left menu-layout-full sub-menu-style-inside">
            <div class="logo-w">
                <a class="logo" href="/admin">
                    <div class="logo-element"></div>
                    <div class="logo-label">SpeedTest</div>
                </a></div>
            <div class="logged-user-w avatar-inline">
                <div class="logged-user-i">
                    <div class="avatar-w"><img alt="" src="/assets/img/avatar1.jpg"></div>
                    <div class="logged-user-info-w">
                        <div class="logged-user-name"></div>
                        <div class="logged-user-role">Usuario</div>
                    </div>
                    <div class="logged-user-toggler-arrow">
                        <div class="os-icon os-icon-chevron-down"></div>
                    </div>
                    <div class="logged-user-menu color-style-bright">
                        <div class="logged-user-avatar-info">
                            <div class="avatar-w"><img alt="" src="/assets/img/avatar1.jpg"></div>
                            <div class="logged-user-info-w">
                                <div class="logged-user-name"></div>
                                <div class="logged-user-role">Usuario</div>
                            </div>
                        </div>
                        <div class="bg-icon"><i class="os-icon os-icon-wallet-loaded"></i></div>
                        <ul>
                            <li><a href="{{route('admin.perfil.index')}}"><i class="os-icon os-icon-user-male-circle2"></i><span>Perfil</span></a>
                            </li>
                            <li><a href="{{route('admin.notificaciones.buzon.index')}}"><i class="os-icon os-icon-others-43"></i><span>Buzon</span></a></li>
                            <li><a href="#"><i class="os-icon os-icon-signs-11"></i><span>Salir</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <h1 class="menu-page-header">Page Header</h1>
            @include('user.partials.menu')

        </div>
        <!--------------------
        END - Main Menu
        -------------------->
        <div class="content-w">
            <!--------------------
            START - Top Bar
            -------------------->
            <div class="top-bar color-scheme-light">

                <div class="top-menu-controls">
                    <div class="element-search autosuggest-search-activator"><input
                                placeholder="Start typing to search..." type="text"></div>
                    <!--------------------
                   START - Messages Link in secondary top menu
                   -------------------->
                    <div class="messages-notifications os-dropdown-trigger os-dropdown-position-left"><i
                                class="os-icon os-icon-mail-14"></i>
                        <div class="new-messages-count">12</div>
                        <div class="os-dropdown light message-list">
                            <ul>
                                <li><a href="#">
                                        <div class="user-avatar-w"><img alt="" src="img/avatar1.jpg"></div>
                                        <div class="message-content"><h6 class="message-from">John Mayers</h6><h6
                                                    class="message-title">Account Update</h6></div>
                                    </a></li>
                                <li><a href="#">
                                        <div class="user-avatar-w"><img alt="" src="img/avatar2.jpg"></div>
                                        <div class="message-content"><h6 class="message-from">Phil Jones</h6><h6
                                                    class="message-title">Secutiry Updates</h6></div>
                                    </a></li>
                                <li><a href="#">
                                        <div class="user-avatar-w"><img alt="" src="img/avatar3.jpg"></div>
                                        <div class="message-content"><h6 class="message-from">Bekky Simpson</h6><h6
                                                    class="message-title">Vacation Rentals</h6></div>
                                    </a></li>
                                <li><a href="#">
                                        <div class="user-avatar-w"><img alt="" src="img/avatar4.jpg"></div>
                                        <div class="message-content"><h6 class="message-from">Alice Priskon</h6><h6
                                                    class="message-title">Payment Confirmation</h6></div>
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                    <!--------------------
                    END - Messages Link in secondary top menu
                    --------------------><!--------------------
START - Settings Link in secondary top menu
-------------------->
                    <div class="top-icon top-settings os-dropdown-trigger os-dropdown-position-left">
                        <i class="os-icon os-icon-ui-46"></i>
                        <div class="os-dropdown">
                            <div class="icon-w"><i class="os-icon os-icon-ui-46"></i></div>
                            <ul>
                                <li><a href="/"><i class="os-icon os-icon-ui-49"></i><span>Profile Settings</span></a>
                                </li>
                                <li><a href="/"><i class="os-icon os-icon-grid-10"></i><span>Billing Info</span></a>
                                </li>
                                <li><a href="/"><i class="os-icon os-icon-ui-44"></i><span>My Invoices</span></a>
                                </li>
                                <li><a href="/"><i class="os-icon os-icon-ui-15"></i><span>Cancel Account</span></a>
                                </li>
                            </ul>
                        </div>
                    </div><!--------------------
END - Settings Link in secondary top menu
-------------------->
                </div>
                <!--------------------
                END - Top Menu Controls
                -------------------->
            </div>
            <!--------------------
            END - Top Bar
            -------------------->
            <div class="content-i" style="margin-bottom:5%;">
                <div class="content-box"><!--START - Control panel above projects-->
                    <!--END - Control panel above projects-->
                    @yield('header')
                    <div class="row">
                        @yield('content')
                    </div>
                    <!--------------------
                   START - Color Scheme Toggler
                   -------------------->
                    <div class="floated-colors-btn second-floated-btn">
                        <div class="os-toggler-w">
                            <div class="os-toggler-i">
                                <div class="os-toggler-pill"></div>
                            </div>
                        </div>
                        <span>Dark </span><span>Colors</span>
                    </div>
                    <!--------------------
                    END - Color Scheme Toggler
                    -------------------->

                    <!--------------------
                   START - Demo Customizer
                   -------------------->
                    <div class="floated-customizer-btn third-floated-btn">
                        <div class="icon-w"><i class="os-icon os-icon-ui-46"></i></div>
                        <span>Customizer</span></div>
                    <div class="floated-customizer-panel">
                        <div class="fcp-content">
                            <div class="close-customizer-btn"><i class="os-icon os-icon-x"></i></div>
                            <div class="fcp-group">
                                <div class="fcp-group-header">Menu Settings</div>
                                <div class="fcp-group-contents">
                                    <div class="fcp-field"><label for="">Menu Position</label><select
                                                class="menu-position-selector">
                                            <option value="left">Left</option>
                                            <option value="right">Right</option>
                                            <option value="top">Top</option>
                                        </select></div>
                                    <div class="fcp-field"><label for="">Menu Style</label><select
                                                class="menu-layout-selector">
                                            <option value="compact">Compact</option>
                                            <option value="full">Full</option>
                                            <option value="mini">Mini</option>
                                        </select></div>
                                    <div class="fcp-field with-image-selector-w"><label for="">With Image</label><select
                                                class="with-image-selector">
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                        </select></div>
                                    <div class="fcp-field"><label for="">Menu Color</label>
                                        <div class="fcp-colors menu-color-selector">
                                            <div class="color-selector menu-color-selector color-bright selected"></div>
                                            <div class="color-selector menu-color-selector color-dark"></div>
                                            <div class="color-selector menu-color-selector color-light"></div>
                                            <div class="color-selector menu-color-selector color-transparent"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="fcp-group">
                                <div class="fcp-group-header">Sub Menu</div>
                                <div class="fcp-group-contents">
                                    <div class="fcp-field"><label for="">Sub Menu Style</label><select
                                                class="sub-menu-style-selector">
                                            <option value="flyout">Flyout</option>
                                            <option value="inside">Inside/Click</option>
                                            <option value="over">Over</option>
                                        </select></div>
                                    <div class="fcp-field"><label for="">Sub Menu Color</label>
                                        <div class="fcp-colors">
                                            <div class="color-selector sub-menu-color-selector color-bright selected"></div>
                                            <div class="color-selector sub-menu-color-selector color-dark"></div>
                                            <div class="color-selector sub-menu-color-selector color-light"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="fcp-group">
                                <div class="fcp-group-header">Other Settings</div>
                                <div class="fcp-group-contents">
                                    <div class="fcp-field"><label for="">Full Screen?</label><select
                                                class="full-screen-selector">
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                        </select></div>
                                    <div class="fcp-field"><label for="">Show Top Bar</label><select
                                                class="top-bar-visibility-selector">
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                        </select></div>
                                    <div class="fcp-field"><label for="">Above Menu?</label><select
                                                class="top-bar-above-menu-selector">
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                        </select></div>
                                    <div class="fcp-field"><label for="">Top Bar Color</label>
                                        <div class="fcp-colors">
                                            <div class="color-selector top-bar-color-selector color-bright selected"></div>
                                            <div class="color-selector top-bar-color-selector color-dark"></div>
                                            <div class="color-selector top-bar-color-selector color-light"></div>
                                            <div class="color-selector top-bar-color-selector color-transparent"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--------------------
                   END - Demo Customizer
                   -------------------->
                    <!--------------------
                    START - Chat Popup Box
                    -------------------->

                    <div class="floated-chat-btn"><i class="os-icon os-icon-mail-07"></i><span>Demo Chat</span></div>
                    <div class="floated-chat-w">
                        <div class="floated-chat-i">
                            <div class="chat-close"><i class="os-icon os-icon-close"></i></div>
                            <div class="chat-head">
                                <div class="user-w with-status status-green">
                                    <div class="user-avatar-w">
                                        <div class="user-avatar"><img alt="" src="/assets/img/avatar1.jpg"></div>
                                    </div>
                                    <div class="user-name"><h6 class="user-title">Administrador</h6>
                                        <div class="user-role">Account Manager</div>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-messages">
                                <div class="message">
                                    <div class="message-content">Hola necesitas ayuda..?</div>
                                </div>
                                <div class="date-break">Mon 10:20am</div>
                                <div class="message">
                                    <div class="message-content">Hi, my name is Mike, I will be happy to assist you
                                    </div>
                                </div>
                                <div class="message self">
                                    <div class="message-content">Hi, I tried ordering this product and it keeps showing
                                        me error code.
                                    </div>
                                </div>
                            </div>
                            <div class="chat-controls"><input class="message-input"
                                                              placeholder="Type your message here..." type="text">
                                <div class="chat-extra"><a href="#"><span class="extra-tooltip">Attach Document</span><i
                                                class="os-icon os-icon-documents-07"></i></a><a href="#"><span
                                                class="extra-tooltip">Insert Photo</span><i
                                                class="os-icon os-icon-others-29"></i></a><a href="#"><span
                                                class="extra-tooltip">Upload Video</span><i
                                                class="os-icon os-icon-ui-51"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <!--------------------
                    END - Chat Popup Box
                    --------------------> </div>
            </div>
        </div>
    </div>
    <div class="display-type"></div>
</div>
<script src="{{asset('assets/bower_components/jquery/dist/jquery.min.js')}}"></script>
@yield('script_top')
<script src="{{asset('assets/bower_components/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('assets/bower_components/moment/moment.js')}}"></script>
<script src="{{asset('assets/bower_components/chart.js/dist/Chart.min.js')}}"></script>
<script src="{{asset('assets/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
<script src="{{asset('assets/bower_components/jquery-bar-rating/dist/jquery.barrating.min.js')}}"></script>
<script src="{{asset('assets/bower_components/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('assets/bower_components/bootstrap-validator/dist/validator.min.js')}}"></script>
<script src="{{asset('assets/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<script src="{{asset('assets/bower_components/ion.rangeSlider/js/ion.rangeSlider.min.js')}}"></script>
<script src="{{asset('assets/bower_components/dropzone/dist/dropzone.js')}}"></script>
<script src="{{asset('assets/bower_components/editable-table/mindmup-editabletable.js')}}"></script>
<script src="{{asset('assets/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('assets/bower_components/fullcalendar/dist/fullcalendar.min.js')}}"></script>
<script src="{{asset('assets/bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js')}}"></script>
<script src="{{asset('assets/bower_components/tether/dist/js/tether.min.js')}}"></script>
<script src="{{asset('assets/bower_components/slick-carousel/slick/slick.min.js')}}"></script>
<script src="{{asset('assets/bower_components/bootstrap/js/dist/util.js')}}"></script>
<script src="{{asset('assets/bower_components/bootstrap/js/dist/alert.js')}}"></script>
<script src="{{asset('assets/bower_components/bootstrap/js/dist/button.js')}}"></script>
<script src="{{asset('assets/bower_components/bootstrap/js/dist/carousel.js')}}"></script>
<script src="{{asset('assets/bower_components/bootstrap/js/dist/collapse.js')}}"></script>
<script src="{{asset('assets/bower_components/bootstrap/js/dist/dropdown.js')}}"></script>
<script src="{{asset('assets/bower_components/bootstrap/js/dist/modal.js')}}"></script>
<script src="{{asset('assets/bower_components/bootstrap/js/dist/tab.js')}}"></script>
<script src="{{asset('assets/bower_components/bootstrap/js/dist/tooltip.js')}}"></script>
<script src="{{asset('assets/bower_components/bootstrap/js/dist/popover.js')}}"></script>
<script src="{{asset('assets/js/demo_customizer4a76.js?version=4.3.0')}}"></script>
<script src="{{asset('assets/js/main4a76.js?version=4.3.0')}}"></script>
@include('user.partials.message')
@yield('script_botton')
</body>