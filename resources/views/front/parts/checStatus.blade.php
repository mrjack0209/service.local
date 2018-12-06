<div class="singlepage-block collapse alt-bg" data-block="search" data-show-block-class="animation-scale-top-right" data-hide-block-class="animation-unscale-top-right"><a href="#" class="close-link" data-close-block><i class="fas fa-times" aria-hidden="true"></i></a>
    <div class="pos-v-center col-12">
        <div class="container">
            <div class="row ">
                <div class="lg-col-9 md-col-8 sm-col-12">
                    <div class="field-group">
                        <div class="field-wrap">
                            <input class="field-control" name="search" id="phone" placeholder="Укажите Ваш номер телефона" required="required"> <span class="field-back"></span>
                        </div>
                    </div>
                </div>
                <div class="lg-col-3 md-col-4 sm-col-6">
                    <button class="btn btns-white-bordered text-upper" id="Check" type="submit">Проверить</button>
                </div>
            </div>

            <div class="row">
                <div class="lg-col-9 md-col-8 sm-col-12" id="checkResult">
                    <table class="table">
                        <tr class="table-light">
                            <td>Наименование устройва</td>
                            <td id="device_name"></td>
                        </tr>
                        <tr class="table-light">
                            <td >ID устройства</td>
                            <td id="device_id"></td>
                        </tr>
                        <tr class="table-light">
                            <td>Дата принятия в ремонт</td>
                            <td id="date"></td>
                        </tr>

                        <tr class="table-light">
                            <td>Статус ремонта</td>
                            <td id="status"></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="container" id="checkResult">

        </div>
    </div>
</div>
