<!DOCTYPE html>
<html>
@include('layouts.header')

<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<div class="left-sidebar-pro">
    <nav id="sidebar" class="">
        <div class="sidebar-header">
            <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
            <strong><img src="img/logo/logosn.png" alt="" /></strong>
        </div>
        <div class="nalika-profile">
            <div class="profile-dtl">
                <a href="#"><img src="img/profile.jpg" alt="" /></a>
                <h2>{{ Auth::user()->name }} </span></h2>
            </div>
            <div class="profile-social-dtl">
                <ul class="dtl-social">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="left-custom-menu-adp-wrap comment-scrollbar">
            <nav class="sidebar-nav left-sidebar-menu-pro">
                <ul class="metismenu" id="menu1">
                    <a class=" "href="/vendors">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        <span class="mini-click-non">HOME</span>
                    </a>
                    <a href="sections" class=""> Sections</a>
                    <a href="#" class="pull-left">quotations</a>
                    <a href="#" class="">transactions</a>
                    


                        
                    <li>
                        <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="icon nalika-mail icon-wrap"></i> <span class="mini-click-non">Mailbox</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Inbox" href="mailbox.html"><span class="mini-sub-pro">Inbox</span></a></li>
                            <li><a title="View Mail" href="mailbox-view.html"><span class="mini-sub-pro">View Mail</span></a></li>
                            <li><a title="Compose Mail" href="mailbox-compose.html"><span class="mini-sub-pro">Compose Mail</span></a></li>
                        </ul>
                    </li>
                   
                    <li>
                        <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="icon nalika-table icon-wrap"></i> <span class="mini-click-non">Data Tables</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Peity Charts" href="static-table.html"><span class="mini-sub-pro">Static Table</span></a></li>
                            <li><a title="Data Table" href="data-table.html"><span class="mini-sub-pro">Data Table</span></a></li>
                        </ul>
                    </li>
                  
                    <li>
                        <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="icon nalika-smartphone-call icon-wrap"></i> <span class="mini-click-non">App views</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Notifications" href="notifications.html"><span class="mini-sub-pro">Notifications</span></a></li>
                            <li><a title="Alerts" href="alerts.html"><span class="mini-sub-pro">Alerts</span></a></li>
                            <li><a title="Modals" href="modals.html"><span class="mini-sub-pro">Modals</span></a></li>
                            <li><a title="Buttons" href="buttons.html"><span class="mini-sub-pro">Buttons</span></a></li>
                            <li><a title="Tabs" href="tabs.html"><span class="mini-sub-pro">Tabs</span></a></li>
                            <li><a title="Accordion" href="accordion.html"><span class="mini-sub-pro">Accordion</span></a></li>
                        </ul>
                    </li>
                    <li id="removable">
                        <a class="has-arrow" href="#" aria-expanded="false"><i class="icon nalika-new-file icon-wrap"></i> <span class="mini-click-non">Pages</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Login" href="login.html"><span class="mini-sub-pro">Login</span></a></li>
                            <li><a title="Register" href="register.html"><span class="mini-sub-pro">Register</span></a></li>
                            <li><a title="Lock" href="lock.html"><span class="mini-sub-pro">Lock</span></a></li>
                            <li><a title="Password Recovery" href="password-recovery.html"><span class="mini-sub-pro">Password Recovery</span></a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </nav>
</div>
<!-- Start Welcome area -->
<div class="all-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="logo-pro">
                    <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                </div>
            </div>
        </div>
    </div>
    <div class="header-advance-area">
        <div class="header-top-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="header-top-wraper">
                            <div class="row">
                                <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                    <div class="menu-switcher-pro">
                                        <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                            <i class="icon nalika-menu-task"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                    <div class="header-top-menu tabl-d-n hd-search-rp">
                                        <div class="breadcome-heading">
                                            <form role="search" class="">
                                                <input type="text" placeholder="Search..." class="form-control">
                                                <a href=""><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                    <div class="header-right-info">
                                        <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                            <li class="nav-item dropdown">
                                                <a href="#" data-toggle="dropdown" role="button"
                                                   aria-expanded="false"
                                                   class="nav-link dropdown-toggle">
                                                    <i class="glyphicon glyphicon-envelope" aria-hidden="true">
                                                    </i><span class="indicator-ms"></span></a>
                                                <div role="menu" class="author-message-top dropdown-menu animated zoomIn">
                                                    <div class="message-single-top">
                                                        <h1>Message</h1>
                                                    </div>
                                                    <ul class="message-menu">
                                                        <li>
                                                            <a href="#">
                                                                <div class="message-img">
                                                                    <img src="img/contact/1.jpg" alt="Messages">
                                                                </div>
                                                                <div class="message-content">
                                                                    <span class="message-date">16 Sept</span>
                                                                    <h2>{{ Auth::user()->name }}</h2>
                                                                    <p>Please done this project as soon possible.</p>
                                                                </div>
                                                            </a>
                                                        </li>
{{--                                                        <li>--}}
{{--                                                            <a href="#">--}}
{{--                                                                <div class="message-img">--}}
{{--                                                                    <img src="img/contact/4.jpg" alt="">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="message-content">--}}
{{--                                                                    <span class="message-date">16 Sept</span>--}}
{{--                                                                    <h2>Sulaiman din</h2>--}}
{{--                                                                    <p>Please done this project as soon possible.</p>--}}
{{--                                                                </div>--}}
{{--                                                            </a>--}}
{{--                                                        </li>--}}
                                                        <li>
                                                            <a href="#">
                                                                <div class="message-img">
                                                                    <img src="img/contact/3.jpg" alt="">
                                                                </div>
                                                                <div class="message-content">
                                                                    <span class="message-date">16 Sept</span>
                                                                    <h2>Victor Jara</h2>
                                                                    <p>Please done this project as soon possible.</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <div class="message-img">
                                                                    <img src="img/contact/2.jpg" alt="">
                                                                </div>
                                                                <div class="message-content">
                                                                    <span class="message-date">16 Sept</span>
                                                                    <h2>Victor Jara</h2>
                                                                    <p>Please done this project as soon possible.</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class="message-view">
                                                        <a href="#">View All Messages</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nav-item"><a href="#" data-toggle="dropdown" role="button"
                                                                    aria-expanded="false" class="nav-link dropdown-toggle">
                                                    <i class="glyphicon glyphicon-bell" aria-hidden="true"></i><span class="indicator-nt"></span></a>
                                                <div role="menu" class="notification-author dropdown-menu animated zoomIn">
                                                    <div class="notification-single-top">
                                                        <h1>Notifications</h1>
                                                    </div>
                                                    <ul class="notification-menu">
                                                        <li>
                                                            <a href="#">
                                                                <div class="notification-icon">
                                                                    <i class="icon nalika-tick" aria-hidden="true"></i>
                                                                </div>
                                                                <div class="notification-content">
                                                                    <span class="notification-date">16 Sept</span>
                                                                    <h2>{{ Auth::user()->name }}</h2>
                                                                    <p>Please done this project as soon possible.</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <div class="notification-icon">
                                                                    <i class="icon nalika-cloud" aria-hidden="true"></i>
                                                                </div>
                                                                <div class="notification-content">
                                                                    <span class="notification-date">16 Sept</span>
                                                                    <h2>Sulaiman din</h2>
                                                                    <p>Please done this project as soon possible.</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <div class="notification-icon">
                                                                    <i class="icon nalika-folder" aria-hidden="true"></i>
                                                                </div>
                                                                <div class="notification-content">
                                                                    <span class="notification-date">16 Sept</span>
                                                                    <h2>Victor Jara</h2>
                                                                    <p>Please done this project as soon possible.</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <div class="notification-icon">
                                                                    <i class="icon nalika-bar-chart" aria-hidden="true"></i>
                                                                </div>
                                                                <div class="notification-content">
                                                                    <span class="notification-date">16 Sept</span>
                                                                    <h2>Victor Jara</h2>
                                                                    <p>Please done this project as soon possible.</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class="notification-view">
                                                        <a href="#">View All Notification</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false"
                                                   class="nav-link dropdown-toggle">
                                                    <i class="glyphicon glyphicon-user"></i>
                                                    <span class="admin-name">{{ Auth::user()->name }}</span>
                                                    <i class="glyphicon glyphicon-chevron-down"></i>
                                                </a>
                                                <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                    <li><a href="register.html"><span class="icon nalika-home author-log-ic"></span> Register</a>
                                                    </li>
                                                    <li><a href="#"><span class="icon nalika-user author-log-ic"></span> My Profile</a>
                                                    </li>
                                                    <li><a href="lock.html"><span class="icon nalika-diamond author-log-ic"></span> Lock</a>
                                                    </li>
                                                    <li><a href="#"><span class="icon nalika-settings author-log-ic"></span> Settings</a>
                                                    </li>
                                                    <li><a href="login.html"><span class="icon nalika-unlocked author-log-ic"></span> Log Out</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="nav-item nav-setting-open">
                                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false"
                                                   class="nav-link dropdown-toggle">
                                                    <i class="glyphicon glyphicon-cog"></i></a>

                                                <div role="menu" class="admintab-wrap menu-setting-wrap menu-setting-wrap-bg dropdown-menu animated zoomIn">
                                                    <ul class="nav nav-tabs custon-set-tab">
                                                        <li class="active"><a data-toggle="tab" href="#Notes">News</a>
                                                        </li>
                                                        <li><a data-toggle="tab" href="#Projects">Activity</a>
                                                        </li>
                                                        <li><a data-toggle="tab" href="#Settings">Settings</a>
                                                        </li>
                                                    </ul>

                                                    <div class="tab-content custom-bdr-nt">
                                                        <div id="Notes" class="tab-pane fade in active">
                                                            <div class="notes-area-wrap">
                                                                <div class="note-heading-indicate">
                                                                    <h2><i class="icon nalika-chat"></i> Latest News</h2>
                                                                    <p>You have 10 New News.</p>
                                                                </div>
                                                                <div class="notes-list-area notes-menu-scrollbar">
                                                                    <ul class="notes-menu-list">
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="notes-list-flow">
                                                                                    <div class="notes-img">
                                                                                        <img src="img/contact/4.jpg" alt="" />
                                                                                    </div>
                                                                                    <div class="notes-content">
                                                                                        <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45 pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="notes-list-flow">
                                                                                    <div class="notes-img">
                                                                                        <img src="img/contact/1.jpg" alt="" />
                                                                                    </div>
                                                                                    <div class="notes-content">
                                                                                        <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45 pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="notes-list-flow">
                                                                                    <div class="notes-img">
                                                                                        <img src="img/contact/2.jpg" alt="" />
                                                                                    </div>
                                                                                    <div class="notes-content">
                                                                                        <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45 pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="notes-list-flow">
                                                                                    <div class="notes-img">
                                                                                        <img src="img/contact/3.jpg" alt="" />
                                                                                    </div>
                                                                                    <div class="notes-content">
                                                                                        <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45 pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="notes-list-flow">
                                                                                    <div class="notes-img">
                                                                                        <img src="img/contact/4.jpg" alt="" />
                                                                                    </div>
                                                                                    <div class="notes-content">
                                                                                        <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45 pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="notes-list-flow">
                                                                                    <div class="notes-img">
                                                                                        <img src="img/contact/1.jpg" alt="" />
                                                                                    </div>
                                                                                    <div class="notes-content">
                                                                                        <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45 pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="notes-list-flow">
                                                                                    <div class="notes-img">
                                                                                        <img src="img/contact/2.jpg" alt="" />
                                                                                    </div>
                                                                                    <div class="notes-content">
                                                                                        <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45 pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="notes-list-flow">
                                                                                    <div class="notes-img">
                                                                                        <img src="img/contact/1.jpg" alt="" />
                                                                                    </div>
                                                                                    <div class="notes-content">
                                                                                        <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45 pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="notes-list-flow">
                                                                                    <div class="notes-img">
                                                                                        <img src="img/contact/2.jpg" alt="" />
                                                                                    </div>
                                                                                    <div class="notes-content">
                                                                                        <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45 pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="notes-list-flow">
                                                                                    <div class="notes-img">
                                                                                        <img src="img/contact/3.jpg" alt="" />
                                                                                    </div>
                                                                                    <div class="notes-content">
                                                                                        <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45 pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="Projects" class="tab-pane fade">
                                                            <div class="projects-settings-wrap">
                                                                <div class="note-heading-indicate">
                                                                    <h2><i class="icon nalika-happiness"></i> Recent Activity</h2>
                                                                    <p> You have 20 Recent Activity.</p>
                                                                </div>
                                                                <div class="project-st-list-area project-st-menu-scrollbar">
                                                                    <ul class="projects-st-menu-list">
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="project-list-flow">
                                                                                    <div class="projects-st-heading">
                                                                                        <h2>New User Registered</h2>
                                                                                        <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                        <span class="project-st-time">1 hours ago</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="project-list-flow">
                                                                                    <div class="projects-st-heading">
                                                                                        <h2>New Order Received</h2>
                                                                                        <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                        <span class="project-st-time">2 hours ago</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="project-list-flow">
                                                                                    <div class="projects-st-heading">
                                                                                        <h2>New Order Received</h2>
                                                                                        <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                        <span class="project-st-time">3 hours ago</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="project-list-flow">
                                                                                    <div class="projects-st-heading">
                                                                                        <h2>New Order Received</h2>
                                                                                        <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                        <span class="project-st-time">4 hours ago</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="project-list-flow">
                                                                                    <div class="projects-st-heading">
                                                                                        <h2>New User Registered</h2>
                                                                                        <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                        <span class="project-st-time">5 hours ago</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="project-list-flow">
                                                                                    <div class="projects-st-heading">
                                                                                        <h2>New Order</h2>
                                                                                        <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                        <span class="project-st-time">6 hours ago</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="project-list-flow">
                                                                                    <div class="projects-st-heading">
                                                                                        <h2>New User</h2>
                                                                                        <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                        <span class="project-st-time">7 hours ago</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="project-list-flow">
                                                                                    <div class="projects-st-heading">
                                                                                        <h2>New Order</h2>
                                                                                        <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                        <span class="project-st-time">9 hours ago</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="Settings" class="tab-pane fade">
                                                            <div class="setting-panel-area">
                                                                <div class="note-heading-indicate">
                                                                    <h2><i class="icon nalika-gear"></i> Settings Panel</h2>
                                                                    <p> You have 20 Settings. 5 not completed.</p>
                                                                </div>
                                                                <ul class="setting-panel-list">
                                                                    <li>
                                                                        <div class="checkbox-setting-pro">
                                                                            <div class="checkbox-title-pro">
                                                                                <h2>Show notifications</h2>
                                                                                <div class="ts-custom-check">
                                                                                    <div class="onoffswitch">
                                                                                        <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example">
                                                                                        <label class="onoffswitch-label" for="example">
                                                                                            <span class="onoffswitch-inner"></span>
                                                                                            <span class="onoffswitch-switch"></span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="checkbox-setting-pro">
                                                                            <div class="checkbox-title-pro">
                                                                                <h2>Disable Chat</h2>
                                                                                <div class="ts-custom-check">
                                                                                    <div class="onoffswitch">
                                                                                        <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example3">
                                                                                        <label class="onoffswitch-label" for="example3">
                                                                                            <span class="onoffswitch-inner"></span>
                                                                                            <span class="onoffswitch-switch"></span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="checkbox-setting-pro">
                                                                            <div class="checkbox-title-pro">
                                                                                <h2>Enable history</h2>
                                                                                <div class="ts-custom-check">
                                                                                    <div class="onoffswitch">
                                                                                        <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example4">
                                                                                        <label class="onoffswitch-label" for="example4">
                                                                                            <span class="onoffswitch-inner"></span>
                                                                                            <span class="onoffswitch-switch"></span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="checkbox-setting-pro">
                                                                            <div class="checkbox-title-pro">
                                                                                <h2>Show charts</h2>
                                                                                <div class="ts-custom-check">
                                                                                    <div class="onoffswitch">
                                                                                        <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example7">
                                                                                        <label class="onoffswitch-label" for="example7">
                                                                                            <span class="onoffswitch-inner"></span>
                                                                                            <span class="onoffswitch-switch"></span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="checkbox-setting-pro">
                                                                            <div class="checkbox-title-pro">
                                                                                <h2>Update everyday</h2>
                                                                                <div class="ts-custom-check">
                                                                                    <div class="onoffswitch">
                                                                                        <input type="checkbox" name="collapsemenu" checked="" class="onoffswitch-checkbox" id="example2">
                                                                                        <label class="onoffswitch-label" for="example2">
                                                                                            <span class="onoffswitch-inner"></span>
                                                                                            <span class="onoffswitch-switch"></span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="checkbox-setting-pro">
                                                                            <div class="checkbox-title-pro">
                                                                                <h2>Global search</h2>
                                                                                <div class="ts-custom-check">
                                                                                    <div class="onoffswitch">
                                                                                        <input type="checkbox" name="collapsemenu" checked="" class="onoffswitch-checkbox" id="example6">
                                                                                        <label class="onoffswitch-label" for="example6">
                                                                                            <span class="onoffswitch-inner"></span>
                                                                                            <span class="onoffswitch-switch"></span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="checkbox-setting-pro">
                                                                            <div class="checkbox-title-pro">
                                                                                <h2>Offline users</h2>
                                                                                <div class="ts-custom-check">
                                                                                    <div class="onoffswitch">
                                                                                        <input type="checkbox" name="collapsemenu" checked="" class="onoffswitch-checkbox" id="example5">
                                                                                        <label class="onoffswitch-label" for="example5">
                                                                                            <span class="onoffswitch-inner"></span>
                                                                                            <span class="onoffswitch-switch"></span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu start -->
        <div class="mobile-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul class="mobile-menu-nav">
                                    
                                    <li><a data-toggle="collapse" data-target="#demo" href="#">Mailbox <span class=""></span></a>
                                        <ul id="demo" class="collapse dropdown-header-top">
                                            <li><a href="mailbox.html">Inbox</a>
                                            </li>
                                            <li><a href="mailbox-view.html">View Mail</a>
                                            </li>
                                            <li><a href="mailbox-compose.html">Compose Mail</a>
                                            </li>
                                        </ul>
                                    </li>
                                    
                                   
                                  
                                 
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu end -->
            
        <div class="breadcome-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcome-list">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="breadcomb-wp">
                                        <div class="breadcomb-icon">
                                            <i class="fa fa-home" aria-hidden="true"></i>
                                        </div>

      
                                        <div class="breadcomb-ctn">
                                            <h2>HOME</h2>            
                                            <p>Welcome to Axis-Tech-Zambia <span class="bread-ntd"></span></p>             
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="breadcomb-report">
                                        <button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="icon nalika-download"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<body>


<div class="section-admin container-fluid">
    <div class="row admin text-center">
        <div class="col-md-12">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="admin-content analysis-progrebar-ctn res-mg-t-15">
                        <h4 class="text-left text-uppercase"><b>Orders</b></h4>
                        <div class="row vertical-center-box vertical-center-box-tablet">
                            <div class="col-xs-3 mar-bot-15 text-left">
                                <label class="label bg-green">30% <i class="fa fa-level-up" aria-hidden="true"></i></label>
                            </div>
                            <div class="col-xs-9 cus-gh-hd-pro">
                                <h2 class="text-right no-margin">10,000</h2>
                            </div>
                        </div>
                        <div class="progress progress-mini">
                            <div style="width: 78%;" class="progress-bar bg-green"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="margin-bottom:1px;">
                    <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                        <h4 class="text-left text-uppercase"><b>Tax Deduction</b></h4>
                        <div class="row vertical-center-box vertical-center-box-tablet">
                            <div class="text-left col-xs-3 mar-bot-15">
                                <label class="label bg-red">15% <i class="fa fa-level-down" aria-hidden="true"></i></label>
                            </div>
                            <div class="col-xs-9 cus-gh-hd-pro">
                                <h2 class="text-right no-margin">5,000</h2>
                            </div>
                        </div>
                        <div class="progress progress-mini">
                            <div style="width: 38%;" class="progress-bar progress-bar-danger bg-red"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                        <h4 class="text-left text-uppercase"><b>Revenue</b></h4>
                        <div class="row vertical-center-box vertical-center-box-tablet">
                            <div class="text-left col-xs-3 mar-bot-15">
                                <label class="label bg-blue">50% <i class="fa fa-level-up" aria-hidden="true"></i></label>
                            </div>
                            <div class="col-xs-9 cus-gh-hd-pro">
                                <h2 class="text-right no-margin">$70,000</h2>
                            </div>
                        </div>
                        <div class="progress progress-mini">
                            <div style="width: 60%;" class="progress-bar bg-blue"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                        <h4 class="text-left text-uppercase"><b>Yearly Sales</b></h4>
                        <div class="row vertical-center-box vertical-center-box-tablet">
                            <div class="text-left col-xs-3 mar-bot-15">
                                <label class="label bg-purple">80% <i class="fa fa-level-up" aria-hidden="true"></i></label>
                            </div>
                            <div class="col-xs-9 cus-gh-hd-pro">
                                <h2 class="text-right no-margin">$100,000</h2>
                            </div>
                        </div>
                        <div class="progress progress-mini">
                            <div style="width: 60%;" class="progress-bar bg-purple"></div>
                        </div>
                    


                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>



<div class="product-status mg-b-30">
    <div class="container-fluid">
        <div class="row">

            <div class="add-product">
                <a href="addproducts">Add</a>
            </div>
            
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>Sections</h4>
                   
                    <div class="add-product">
                        <a href="addproducts">Add</a>
                    </div>
                    
                     
                    <table>
                        <tr>
                            <th>ID_N0</th>
                            <br>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr> 
                        @foreach($sections as $section)
                        <tr>
                            <td>{{ $section->id }}</td>
                            <td>{{ $section->name }}</td>
                            <td>
                                @if($section->status==1)
                                    <a class:"updateSectionStatus" id="section-{{ $section->id }}" sections_id="{{ $section->id }}" href="javascript:void(0)">Active</a>
                                @else
                                <a class:"updateSectionStatus" id="section-{{ $section->id }}" sections_id="{{ $section->id }}" href="javascript:void(0)">Inactive</a>
                                @endif
                            </td>
                            <td>
                                <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                        </tr>
                    </table>
                    <div class="custom-pagination">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
            
              <!--custom chart end-->
              
             
      <!--main content end-->
@section('content')

    
    </section>


@endsection