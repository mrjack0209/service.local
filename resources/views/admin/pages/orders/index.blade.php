@extends('admin.layouts.admin')

@section('content')
        <div class="content container-fluid">
            <div class="row">
                <div class="col-sm-4 col-3">
                    <h4 class="page-title">Заказы</h4>
                </div>
                <div class="col-sm-8 col-9 text-right m-b-20">
                    <a href="#" class="btn btn-primary pull-right btn-rounded" data-toggle="modal"
                       data-target="#add_employee"><i class="fa fa-plus"></i> Добавить заказ</a>
                </div>
            </div>
            <div class="row filter-row">
                <div class="col-sm-6 col-md-5">
                    <div class="form-group form-focus">
                        <label class="focus-label">Номер телефона</label>
                        <input type="text" class="form-control floating">
                    </div>
                </div>
                <div class="col-sm-6 col-md-5">
                    <div class="form-group form-focus">
                        <label class="focus-label">ФИО Клиента</label>
                        <input type="text" class="form-control floating">
                    </div>
                </div>
                <div class="col-sm-12 col-md-2">
                    <a href="#" class="btn btn-success btn-block"> Найти </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table datatable">
                            <thead>
                            <tr>
                                <th style="width:30%;">Устройство</th>
                                <th>ID устройства</th>
                                <th>Номер заказа</th>
                                <th>Клиент</th>
                                <th>Телефон</th>
                                <th>Дата принятия</th>
                                <th>Статус</th>
                                <th class="text-right">Действия</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                                <tr>
                                    <td>
                                        <h2>{{$order->device_name}}</h2>
                                    </td>
                                    <td>{{$order->device_id}}</td>
                                    <td>{{$order->order_id}}</td>
                                    <td>{{$order->GetCustomerName($order->user_id)}}</td>
                                    <td>{{$order->GetCustomerPhone($order->user_id)}}</td>
                                    <td>{{$order->created_at}}</td>
                                    <td>
                                        @switch($order->status_id)
                                            @case(1)
                                            <span class="badge badge-danger-border">В работе</span>
                                            @break

                                            @case(2)
                                            <span class="badge badge-success-border">Готов</span>
                                            @break

                                            @case(3)
                                            <span class="badge badge-success-border">Ожидает деталь</span>
                                            @break

                                            @case(4)
                                            <span class="badge badge-success-border">Передан в другой СЦ</span>
                                            @break

                                            @case(5)
                                            <span class="badge badge-success-border">Ремонтопригоден</span>
                                            @break
                                        @endswitch
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown"
                                               aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>

                                            <div class="dropdown-menu dropdown-menu-right">

                                                {!! Form::open(['url' => route('orders.edit', ['id' => $order->id]), 'method' => 'GET']) !!}
                                                <button class="dropdown-item">
                                                    <i class="fa fa-pencil m-r-5"></i>
                                                    Изменить
                                                </button>
                                                {!! Form::close() !!}


                                                {!! Form::open(['url' => route('orders.destroy', ['id' => $order->id]), 'method' => 'delete']) !!}
                                                    <button class="dropdown-item">
                                                        <i class="fa fa-trash-o m-r-5"></i>
                                                        Удалить
                                                    </button>
                                                {!! Form::close() !!}


                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    <div id="add_employee" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    {!! Form::open(['url' => route('orders.store')]) !!}
                    @csrf
                    <div class="form-group">
                        <label>Номер заказа</label>
                        <input class="form-control" type="text" value="#ORD-{{--{{$order->get_order_id()}}--}}"
                               readonly="" name="order_id">
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>ФИО клиента</label>
                                <input class="form-control" type="text" name="name">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Телефон клиента (без "+7" и "8" например: "9611234567")</label>
                                <input class="form-control" type="text" name="phone" id="phone">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Наименование устройства</label>
                                <input class="form-control" type="text" placeholder="Iphone X" name="device_name">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Категория устройства</label>
                                <select class="select" name="category_id">
                                    <option>Выберите категорию</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="form-group">
                        <label>Индентификатор устройства</label>
                        <input class="form-control" type="text" placeholder="imei, s/n или др." name="device_id">
                    </div>
                    <div class="form-group">
                        <label>Фото устройства(необязательно)</label>
                        <div>
                            <input class="form-control" type="file" name="photo">
                            <small class="form-text text-muted">Максимальный размер: 50 MB. Разрешенные форматы:
                                jpg, gif, png.
                            </small>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Описание неисправности</label>
                        <textarea cols="30" rows="6" class="form-control" name="description"></textarea>
                    </div>

                    <div class="form-group">
                        <label>Цена</label>
                        <input class="form-control" type="text" value="0.00" name="price">
                    </div>

                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary btn-lg" type="submit">Добавить заказ</button>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
