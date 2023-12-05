@extends('layouts.app')

@section('content')

<div class="container">
    <form class="row justify-content-center" method="GET" action="{{ route('search') }}">

        <div class="col-md-6 col-12 mb-3">
     
            <input type="search" class="form-control" id="inputNama" name='search' placeholder="Masukkan Makanan Anda">
        </div>
        <div class="col-auto mb-3">
            <button type="submit" class="btn btn-primary">Search</button>
        </div>
    </form>
</div>

@endsection
