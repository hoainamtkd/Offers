  <header class="topbar clearfix">
        <!--Topbar Left Branding With Logo Start-->
        <div class="topbar-left pull-left">
            <div class="clearfix">
                <ul class="left-branding pull-left">
                    <li><span class="left-toggle-switch"><i class="zmdi zmdi-menu"></i></span></li>
                    <li>
                        <div class="logo">
                            <a href="{{url('admin/dashboard')}}" title="Admin Template"><img src="{{asset('public/admin/images/logo.png')}}" alt="logo"></a>
                        </div>
                    </li>
                </ul>
                <!--Mobile Search and Rightbar Toggle-->
                <ul class="branding-right pull-right">
                    <li><a href="#" class="btn-mobile-search btn-top-search"><i class="zmdi zmdi-search"></i></a></li>
                    <li><a href="#" class="btn-mobile-bar"><i class="zmdi zmdi-menu"></i></a></li>
                </ul>
            </div>
        </div>
        <!--Topbar Left Branding With Logo End-->
        <!--Topbar Right Start-->
        <div class="topbar-right pull-right">
            <div class="clearfix">
                <!--Mobile View Leftbar Toggle-->
                <ul class="left-bar-switch pull-left">
                    <li><span class="left-toggle-switch"><i class="zmdi zmdi-menu"></i></span></li>
                </ul>
                <ul class="pull-right top-right-icons">
                    <li class="dropdown notifications-dropdown">
                        <a href="#" class="btn-notification dropdown-toggle" data-toggle="dropdown"><span class="noty-bubble">10</span><i class="zmdi zmdi-globe"></i></a>
                        <div class="dropdown-menu notifications-tabs">
                            <div>
                                <ul class="nav material-tabs nav-tabs" role="tablist">
                                    <li class="active"><a href="#message" aria-controls="message" role="tab" data-toggle="tab">Message</a></li>
                                    <li><a href="#notifications" aria-controls="notifications" role="tab" data-toggle="tab">Notifications</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="message">
                                        <div class="message-list-container">
                                            <h4>You have 15 new messages</h4>
                                            <ul class="clearfix">
                                                <li class="clearfix">
                                                    <a href="#" class="message-thumb"><img src="{{asset('public/admin/images/avatar/robertoortiz.jpg')}}" alt="image">
                                                    </a><a href="#" class="message-intro"><span class="message-meta">Robertoortiz </span>Nunc aliquam dolor... <span class="message-time">today at 10:20 pm</span></a>
                                                </li>
                                                <li class="clearfix">
                                                    <a href="#" class="message-thumb"><span class="message-letter w_bg_purple">A</span>
                                                    </a><a href="#" class="message-intro"><span class="message-meta">Allisongrayce </span>In hac habitasse ... <span class="message-time">today at 8:29 pm</span></a>
                                                </li>
                                                <li class="clearfix">
                                                    <a href="#" class="message-thumb"><img src="{{asset('public/admin/images/avatar/michael-owens.jpg')}}" alt="image">
                                                    </a><a href="#" class="message-intro"><span class="message-meta">Michael </span>Suspendisse ac mauris ... <span class="message-time">yesterday at 12:29 pm</span></a>
                                                </li>
                                                <li class="clearfix">
                                                    <a href="#" class="message-thumb"><span class="message-letter w_bg_blue">B</span>
                                                    </a><a href="#" class="message-intro"><span class="message-meta">Bobbyjkane </span>Vivamus lacinia facilisis... <span class="message-time">yesterday at 11:48 pm</span></a>
                                                </li>
                                                <li class="clearfix">
                                                    <a href="#" class="message-thumb"><img src="{{asset('public/admin/images/avatar/bobbyjkane.jpg')}}" alt="image">
                                                    </a><a href="#" class="message-intro"><span class="message-meta">Bobbyjkane </span>Donec vel iaculis ... <span class="message-time">1 month ago</span></a>
                                                </li>
                                                <li class="clearfix">
                                                    <a href="#" class="message-thumb"><span class="message-letter w_bg_teal">C</span>
                                                    </a><a href="#" class="message-intro"><span class="message-meta">Chexee </span> Curabitur eget blandit...<span class="message-time">3 months ago</span></a>
                                                </li>
                                                <li class="clearfix">
                                                    <a href="#" class="message-thumb"><img src="{{asset('public/admin/images/avatar/coreyweb.jpg')}}" alt="image">
                                                    </a><a href="#" class="message-intro"><span class="message-meta">Coreyweb </span>Etiam molestie nulla... <span class="message-time">1 year ago</span></a>
                                                </li>
                                            </ul>
                                            <a class="btn btn-link btn-block btn-view-all" href="#"><span>View All</span></a>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="notifications">
                                        <div class="notification-wrap">
                                            <h4>You have 10 new notifications</h4>
                                            <ul>
                                                <li><a href="#" class="clearfix"><span class="ni w_bg_purple"><i class="fa fa-bullhorn"></i></span><span class="notification-message">Pellentesque semper posuere. <span class="notification-time clearfix">3 Min Ago</span></span></a>
                                                </li>
                                                <li><a href="#" class="clearfix"><span class="ni w_bg_orange"><i class="fa fa-life-ring"></i></span><span class="notification-message">Nulla commodo sem at purus. <span class="notification-time clearfix">1 Hours Ago</span></span></a>
                                                </li>
                                                <li><a href="#" class="clearfix"><span class="ni w_bg_red"><i class="fa fa-star-o"></i></span><span class="notification-message">Fusce condimentum turpis. <span class="notification-time clearfix">3 Hours Ago</span></span></a>
                                                </li>
                                                <li><a href="#" class="clearfix"><span class="ni w_bg_light_blue"><i class="fa fa-trophy"></i></span><span class="notification-message">Pellentesque habitant morbi. <span class="notification-time clearfix">Yesterday</span></span></a>
                                                </li>
                                                <li><a href="#" class="clearfix"><span class="ni w_bg_cyan"><i class="fa fa-bolt"></i></span><span class="notification-message">Fusce bibendum lacus mauris.<span class="notification-time clearfix">1 Month Ago</span></span></a>
                                                </li>
                                                <li><a href="#" class="clearfix"><span class="ni w_bg_yellow"><i class="fa fa-bookmark-o"></i></span><span class="notification-message">Donec id mi placerat, scelerisque.<span class="notification-time clearfix">3 Months Ago</span></span></a>
                                                </li>
                                            </ul>
                                            <a class="btn btn-link btn-block btn-view-all clearfix" href="#"><span>View All</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown more-dropdown topbar-logged-user"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{{asset('public/admin/images/avatar/robertoortiz.jpg')}}" alt="admin"></a>
                        <div class="dropdown-menu more-apps">
                            <div class="user-profile-container">
                                <div class="user-profile clearfix">
                                    <div class="admin-user-thumb">
                                        <img src="{{asset('public/admin/images/avatar/robertoortiz.jpg')}}" alt="admin">
                                    </div>
                                    <div class="admin-user-info">
                                        <ul>
                                            <li><a href="#">Kamrujaman Shohel</a></li>
                                            <li><a href="#">Info@jaman.me</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="admin-bar">
                                    <ul>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Logout"><i class="zmdi zmdi-power"></i>
                                        </a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="My Account"><i class="zmdi zmdi-account"></i>
                                        </a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Lock"><i class="zmdi zmdi-key"></i>
                                        </a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="left" title="Settings"><i class="zmdi zmdi-settings"></i>
                                        </a></li>
                                    </ul>
                                </div>
                            </div>
                            <ul class="more-apps">
                                <li><a href="#">Message <span class="apps-noty">10</span></a></li>
                                <li><a href="#">Profile</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!--Topbar Right End-->
    </header>