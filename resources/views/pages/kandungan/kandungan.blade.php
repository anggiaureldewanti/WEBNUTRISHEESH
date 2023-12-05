
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data kandungan Gizi - SantriKoding.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Nilai Kandungan Gizi</h3>       
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        
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

                        <a href="{{ url('/kandungan/create')}}" class="btn btn-md btn-success mb-3">Tambah Nilai Kandungan Gizi</a>
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">GAMBAR</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Kalori</th>
                                <th scope="col">Protein</th>
                                <th scope="col">Karbohidrat</th>
                                <th scope="col">Lemak</th>
                                <th scope="col">Energi</th>
                                <th scope="col">AKSI</th>

                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($kandungans as $kandungan)
                                <tr>
                                    <td class="text-center">
                                        <img src="{{ asset('image/'.$kandungan->image) }}" class="rounded" style="width: 150px">
                                    </td>
                                    <td>{{ $kandungan->nama }}</td>
                                    <td>{!! $kandungan->kalori !!}</td>
                                    <td>{!! $kandungan->protein !!}</td>
                                    <td>{!! $kandungan->karbohidrat !!}</td>
                                    <td>{!! $kandungan->lemak !!}</td>
                                    <td>{!! $kandungan->energi !!}</td>
                                    <td class="text-center">
                                       <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('kandungan.destroy', $kandungan->id) }}" method="POST">
                                            <a href="{{ route('kandungan.show', $kandungan->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                                            <a href="{{ route('kandungan.edit', $kandungan->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                    </td> 
                                </tr>
                              @empty
                                  <div class="alert alert-danger">
                                      Data Post belum Tersedia.
                                  </div>
                              @endforelse
                            </tbody>
                          </table>  
                          {{-- {{ $posts->links() }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        //message with toastr
        @if(session()->has('success'))
        
            toastr.success('{{ session('success') }}', 'BERHASIL!'); 

        @elseif(session()->has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!'); 
            
        @endif
    </script>

</body>
</html>
