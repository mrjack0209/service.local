<div id="add_order" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <form method="POST" action="{{route('orders.store')}}">
                    @csrf
                    <div class="form-group">
                        <label>Номер заказа</label>
                        <input class="form-control" type="text" value="#ORD-{{$order->get_order_id()}}" readonly="" name="order_id">
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>ФИО клиента</label>
                                <input class="form-control" type="text"  name="name">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Телефон клиента (без "+7" и "8" например: "9611234567")</label>
                                <input class="form-control" type="text"  name="phone">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Наименование устройства</label>
                                <input class="form-control" type="text" placeholder="Iphone X" name="product_name">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Категория устройства</label>
                                <select class="select" name="category">
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
                            <small class="form-text text-muted">Максимальный размер: 50 MB. Разрешенные форматы: jpg, gif, png.</small>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Описание неисправности</label>
                        <textarea cols="30" rows="6" class="form-control" name="description_defect"></textarea>
                    </div>

                    <div class="form-group">
                        <label>Цена</label>
                        <input class="form-control" type="text" value="0.00" name="price">
                    </div>

                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary btn-lg">Добавить заказ</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>