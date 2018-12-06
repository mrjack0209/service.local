<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('adm/css/bootstrap.min.css') }}">
    </head>
    <body>
    <div class="container">
        <div class="alert alert-success" id="id_" style="display:none"></div>
        <div class="alert alert-success" id="name_" style="display:none"></div>
        <div class="alert alert-success" id="price_"  style="display:none"></div>


        <form id="myForm">
            @csrf

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
           {{-- <div class="form-group">
                <label for="type">Type:</label>
                <input type="text" class="form-control" id="type">
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="text" class="form-control" id="price">
            </div>--}}
            <button class="btn btn-primary" id="ajaxSubmit">Submit</button>
        </form>
    </div>

    <script src="{{ asset('adm/js/jquery-3.2.1.min.js') }}"></script>

    <script>
        $(document).ready(function(){
            $('#ajaxSubmit').click(function(e){
                e.preventDefault();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: 'get',
                    url: "/grocery/" + ($('#name').val()) + "/show",
                    dataType: 'json',
                    success: function(result){
                        $('.alert').show();
                        $('#id_').html(result.success.id);
                        $('#name_').html(result.success.name);
                        $('#price_').html(result.success.price);
                    }});
            });
        });
    </script>



    </body>
</html>
