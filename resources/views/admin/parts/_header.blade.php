<div class="header">
    <div class="header-left">
        <a href="index.html" class="logo">
            <img src="{{asset('adm/images/logo.png')}}" width="120" alt="">
        </a>
    </div>
    <a id="mobile_btn" class="mobile_btn pull-left" href="#sidebar"><i class="fa fa-bars" aria-hidden="true"></i></a>
    <ul class="nav user-menu pull-right">
        <li class="nav-item dropdown d-none d-sm-block">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"><i class="fa fa-bell-o"></i> <span class="badge badge-pill bg-primary pull-right">3</span></a>
            <div class="dropdown-menu notifications">
                <div class="topnav-dropdown-header">
                    <span>Оповещения</span>
                </div>
                <div class="drop-scroll">
                    <ul class="notification-list">
                        <li class="notification-message">
                            <a href="activities.html">
                                <div class="media">
                                            <span class="avatar">
                                                <img alt="John Doe" src="{{asset('adm/img/user.jpg')}}" class="img-fluid">
                                            </span>
                                    <div class="media-body">
                                        <p class="noti-details"><span class="noti-title">John Doe</span> added new task <span class="noti-title">Patient appointment booking</span></p>
                                        <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="topnav-dropdown-footer">
                    <a href="#">Показать все оповещения</a>
                </div>
            </div>
        </li>
        <li class="nav-item dropdown d-none d-sm-block">
            <a href="javascript:void(0);" id="open_msg_box" class="hasnotifications nav-link"><i class="fa fa-comment-o"></i> <span class="badge badge-pill bg-primary pull-right">8</span></a>
        </li>
        <li class="nav-item dropdown has-arrow">
            <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="user-img"><img class="rounded-circle" src="{{asset('adm/img/user.jpg')}}" width="40" alt="Admin">
                            <span class="status online"></span></span>
                <span>Admin</span>
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Мой профиль</a>
                <a class="dropdown-item" href="#">Редактировать профиль</a>
                <a class="dropdown-item" href="#">Выйти</a>
            </div>
        </li>
    </ul>
    <div class="dropdown mobile-user-menu pull-right">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
        <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="#">Мой профиль</a>
            <a class="dropdown-item" href="#">Редактировать профиль</a>
            <a class="dropdown-item" href="#">Выйти</a>
        </div>
    </div>
</div>
