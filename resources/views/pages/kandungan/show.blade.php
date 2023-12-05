<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Data Kandungan Gizi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <img src="{{ asset('image/'.$kandungans->image) }}" class="w-100 rounded">
                        <hr>
                        <h4> Nama : {{ $kandungans->nama }}</h4>
                        <p class="tmt-3">
                            {!! $kandungans->gambar !!}
                            <p class="tmt-3" >
                                {!! $kandungans->kalori !!}
                                <p class="tmt-3">
                                    {!! $kandungans->protein !!}
                                    <p class="tmt-3">
                                        {!! $kandungans->karbohidrat !!}
                                        <p class="tmt-3">
                                            {!! $kandungans->lemak !!}
                                            <p class="tmt-3">
                                                {!! $kandungans->energi !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>