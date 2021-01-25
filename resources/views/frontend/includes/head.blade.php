@php
$site = App\Models\Site::first();
@endphp

<head>
    <meta charset="utf-8" />
    <title>{{ $site->nama_situs }} - {{ $site->tagline }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="{{ $site->about_us }}" name="description" />
    <meta content="Abd. Asis" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ url('/') }}/frontend/assets/images/favicon.ico">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ url('/') }}/frontend/assets/css/bootstrap.min.css" type="text/css">

    <!--Material Icon -->
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/frontend/assets/css/materialdesignicons.min.css" />

    <!-- Custom  sCss -->
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/frontend/assets/css/style.css" />

</head>
