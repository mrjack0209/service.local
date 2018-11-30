<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.png">
    <title>Admin</title>
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href={{asset('adm/css/admin.css')}}>
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.min.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<div class="main-wrapper">

    @include('admin.parts._header')

    @include('admin.parts._sidebar')

    <div class="page-wrapper">
        @yield('content')
        @include('admin.parts._notifications')
    </div>

</div>
<div class="sidebar-overlay" data-reff=""></div>

@include('admin.parts._scripts')
</body>

</html>
