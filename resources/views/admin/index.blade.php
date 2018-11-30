@extends('admin.layouts.admin')

@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                    <div class="dash-widget dash-widget5">
                        <span class="dash-widget-icon bg-info"><i class="fa fa-user-o" aria-hidden="true"></i></span>
                        <div class="dash-widget-info">
                            <h3>{{$customers}}</h3>
                            <span>Клиентов</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                    <div class="dash-widget dash-widget5">
                        <span class="dash-widget-icon bg-success"><i class="fa fa-money" aria-hidden="true"></i></span>
                        <div class="dash-widget-info">
                            <h3>{{$orders}}</h3>
                            <span>Заказов</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                    <div class="dash-widget dash-widget5">
                        <span class="dash-widget-icon bg-warning"><i class="fa fa-files-o"></i></span>
                        <div class="dash-widget-info">
                            <h3>72</h3>
                            <span>Выполнено</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                    <div class="dash-widget dash-widget5">
                        <span class="dash-widget-icon bg-danger"><i class="fa fa-tasks" aria-hidden="true"></i></span>
                        <div class="dash-widget-info">
                            <h3>618</h3>
                            <span>В работе</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="page-title">Заказы</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="table-responsive">
                        <table class="table table-border custom-table m-b-0">
                            <thead>
                            <tr>
                                <th>Устройство</th>
                                <th>Номер заказа</th>
                                <th>Дата заказа</th>
                                <th>Клиент</th>
                                <th>Стоимость</th>
                                <th>Статус</th>
                                <th class="text-right">Действия</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <div class="product-det">
                                        <img src="{{asset('adm/img/product/product-thumb-02.jpg')}}" alt="">
                                        <div class="product-desc">
                                            <h2><a href="profile.html">Apple Macbook Air MQD42HN/A 13-inch Laptop</a> <span>Lorem ipsum dolor sit</span></h2>
                                        </div>
                                    </div>
                                </td>
                                <td><a href="#">#ORD-0001</a></td>
                                <td>1 Sep 2017</td>
                                <td>Иванов Иван</td>

                                <td>
                                    <p class="price-sup"><sup>$</sup>1918</p>
                                </td>
                                <td><span class="badge badge-success-border">Выполнен</span></td>
                                <td class="text-right">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="edit-product.html"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                            <a class="dropdown-item" href="#"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="product-det">
                                        <img src="{{asset('adm/img/product/product-thumb-02.jpg')}}" alt="">
                                        <div class="product-desc">
                                            <h2><a href="profile.html">Apple Macbook Air MQD42HN/A 13-inch Laptop</a> <span>Lorem ipsum dolor sit</span></h2>
                                        </div>
                                    </div>
                                </td>
                                <td><a href="#">#ORD-0002</a></td>
                                <td>1 Sep 2017</td>
                                <td>Иванов Иван</td>

                                <td>
                                    <p class="price-sup"><sup>$</sup>1918</p>
                                </td>
                                <td><span class="badge badge-danger-border">Клиент отказался</span></td>
                                <td class="text-right">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                            <a class="dropdown-item" href="#"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="product-det">
                                        <img src="{{asset('adm/img/product/product-thumb-01.jpg')}}" alt="">
                                        <div class="product-desc">
                                            <h2><a href="profile.html">Apple Macbook Air MQD42HN/A 13-inch Laptop</a> <span>Lorem ipsum dolor sit</span></h2>
                                        </div>
                                    </div>
                                </td>
                                <td><a href="#">#ORD-0003</a></td>
                                <td>1 Sep 2017</td>
                                <td>Иванов Иван</td>

                                <td>
                                    <p class="price-sup"><sup>$</sup>1918</p>
                                </td>
                                <td><span class="badge badge-info-border">Ожидает запчасть</span></td>
                                <td class="text-right">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                            <a class="dropdown-item" href="#"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="product-det">
                                        <img src="{{asset('adm/img/product/product-thumb-02.jpg')}}" alt="">
                                        <div class="product-desc">
                                            <h2><a href="profile.html">Apple Macbook Air MQD42HN/A 13-inch Laptop</a> <span>Lorem ipsum dolor sit</span></h2>
                                        </div>
                                    </div>
                                </td>
                                <td><a href="#">#ORD-0004</a></td>
                                <td>1 Sep 2017</td>
                                <td>Иванов Иван</td>

                                <td>
                                    <p class="price-sup"><sup>$</sup>1918</p>
                                </td>
                                <td><span class="badge badge-warning-border">Передан в другой СЦ</span></td>
                                <td class="text-right">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                            <a class="dropdown-item" href="#"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="notification-box">
            <div class="msg-sidebar notifications msg-noti">
                <div class="topnav-dropdown-header">
                    <span>Оповещения</span>
                </div>
                <div class="drop-scroll msg-list-scroll">
                    <ul class="list-box">
                        <li>
                            <a href="chat.html">
                                <div class="list-item">
                                    <div class="list-left">
                                        <span class="avatar">R</span>
                                    </div>
                                    <div class="list-body">
                                        <span class="message-author">Иванов Иван</span>
                                        <span class="message-time">12:28 AM</span>
                                        <div class="clearfix"></div>
                                        <span class="message-content">Проверил статус ремонта</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="topnav-dropdown-footer">
                    <a href="chat.html">See all messages</a>
                </div>
            </div>
        </div>
    </div>
@endsection
