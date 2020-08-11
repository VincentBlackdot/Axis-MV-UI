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
                  <a href="/addproduct" class="pull-left">+ ADD PRODUCT</a>
                  <a href="#" class="">+ ADD ADVERT</a>
                  <a href="sections" class=""> SECTIONS</a>
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

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Add Product - Dashboard HTML Template</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:400,700"
    />
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="css/fontawesome.min.css" />
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="jquery-ui-datepicker/jquery-ui.min.css" type="text/css" />
    <!-- http://api.jqueryui.com/datepicker/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/templatemo-style.css">
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
  </head>

  <body>
    <nav class="navbar navbar-expand-xl">
      <div class="container h-100">
        
        <button
          class="navbar-toggler ml-auto mr-0"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
     
     
    <div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12">
                <h2 class="tm-block-title d-inline-block">Add Product</h2>
              </div>
            </div>
            <div class="form-group mb-3">
              <label
                for="category"
                >Category</label
              
              >
       
              <select
                class="custom-select tm-select-accounts"
                id="category"
              >
                <option selected>Select category</option>
                <option value="1">New Arrival</option>
                <option value="2">Most Popular</option>
                <option value="3">Trending</option>
              </select>
            </div>
            <div class="row tm-edit-product-row">
              <div class="col-xl-6 col-lg-6 col-md-12">
                <form action="" class="tm-edit-product-form">
                  <div class="form-group mb-3">
                    <label
                      for="name"
                      >Product Name
                    </label>
                    <input
                      id="name"
                      name="name"
                      type="text"
                      class="form-control validate"
                      required
                    />
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="description"
                      >Description</label
                    >
                    <textarea
                      class="form-control validate"
                      rows="3"
                      required
                    ></textarea>
                  </div>
                  
                  
                  <div class="row">
                      <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="expire_date"
                            >Price K
                          </label>
                          <input
                            id="expire_date"
                            name="expire_date"
                            type="text"
                            class="form-control validate"
                            data-large-mode="true"
                          />
                        </div>
                        <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="stock"
                            >Units In Stock
                          </label>
                          <input
                            id="stock"
                            name="stock"
                            type="text"
                            class="form-control validate"
                            required
                          />
                        </div>
                  </div>
                  
              </div>
              <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                <div class="tm-product-img-dummy mx-auto">
                  <i
                    class="fas fa-cloud-upload-alt tm-upload-icon"
                    onclick="document.getElementById('fileInput').click();"
                  ></i>
                </div>
                
                <div class="custom-file mt-3 mb-3">
                  <input id="fileInput" type="file" style="display:none;" />
                  <input
                    type="button"
                    class="btn btn-primary btn- mx-auto"
                    value="UPLOAD PRODUCT IMAGE"
                    onclick="document.getElementById('fileInput').click();"
                   
                  />
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary btn- text-uppercase">Add Product Now</button>
                  </div>
                </div>
              </div>
             
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="jquery-ui-datepicker/jquery-ui.min.js"></script>
    <!-- https://jqueryui.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script>
      $(function() {
        $("#expire_date").datepicker();
      });
    </script>
  </body>
</html>
