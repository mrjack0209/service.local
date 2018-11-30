@extends('admin.layouts.admin')

@section('content')
    {{$order->id}}
        <div class="content container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h4 class="page-title">Редактирование заказа</h4>
                </div>
            </div>
            {!! Form::open(['route' => ['orders.update', $order->id],'method'=>'put']) !!}

            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <form>
                        <div class="form-group">
                            <label>Наименование устройства</label>
                            <input class="form-control" type="text" value="{{$order->device_name}}">
                        </div>

                        <div class="form-group">
                            <label>ID устройства</label>
                            <input class="form-control" type="text" value="{{$order->device_id}}">
                        </div>

                        <div class="form-group">
                            <label>Фотографии устройства</label>
                            <div>
                                <input class="form-control" type="file">
                                <small class="form-text text-muted">Максимальный размер файла: 20 MB. Разрешенны форматы: jpg, gif, png.</small>
                            </div>
                            {{--<div class="row">
                                @if(!empty($order->foto_id))
                                    @foreach($order->foto_id as $foto)
                                        <div class="col-md-3 col-sm-3 col-4 col-lg-3 col-xl-2">
                                            <div class="product-thumbnail">
                                                <img src="{{$foto->$foto}}" class="img-thumbnail img-fluid" alt="">
                                                <span class="product-remove" title="remove"><i class="fa fa-close"></i></span>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="col-md-3 col-sm-3 col-4 col-lg-3 col-xl-2">
                                        <div class="product-thumbnail">
                                           <h3>Нет фотографий</h3>
                                        </div>
                                    </div>
                                @endif
                            </div>--}}
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Категории</label>
                                    <select class="select">
                                        @foreach($categories as $key => $category)
                                            <option value="{{$category->id}}" {{ ($key == $order->category_id) ? 'selected' : ''}}>{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Цена</label>
                                    <input class="form-control" type="text" value="{{$order->price}}">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Описание неисправности</label>
                            <textarea cols="30" rows="6" class="form-control">{{ $order->description }}</textarea>
                        </div>

                        <div class="form-group">
                            <label class="display-block">Статус ремонта</label>
                            @foreach($statuses as $status)
                                <div class="form-check form-check-inline">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" value="{{$status->id}}"
                                               id="status{{$status->id}}" {{($status->id == $order->status_id ? 'checked' : '')}}>
                                        <label class="custom-control-label" for="status{{$status->id}}">
                                            {{ $status->name }}
                                        </label>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="m-t-20 text-center">
                            <button class="btn btn-primary btn-lg">Обновить</button>
                        </div>
                    </form>
                </div>
            </div>
            {!! Form::close() !!}
        </div>

@endsection
