@extends('layouts.main')

@section('container')

<head>
    <title>About Us</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h1>{{$name}}</h1>
                <p>{{ $email }}</p>
                <p>Terima kasih telah mengunjungi halaman ini.</p>
            </div>
            <div class="col-md-6">
                <!-- Add Image -->
                <img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnail">
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS (optional, for certain features) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
@endsection