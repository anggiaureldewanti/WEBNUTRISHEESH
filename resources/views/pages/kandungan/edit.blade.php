<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Post - SantriKoding.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('kandungan.update', $kandungans->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')


                            <div class="form-group">
                                <label class="font-weight-bold">GAMBAR</label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                            
                                <!-- error message untuk title -->
                                @error('image')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Nama</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" name="nama" value="{{ old('nama') }}" placeholder="Masukkan Judul kandungan">
                            
                                <!-- error message untuk title -->
                                @error('title')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Kalori</label>
                                <input type="text" class="form-control @error('kalori') is-invalid @enderror" name="kalori" value="{{ old('kalori') }}" placeholder="Masukkan Jumlah Kalori">
                            
                                <!-- error message untuk title -->
                                @error('protein')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Protein</label>
                                <input type="text" class="form-control @error('protein') is-invalid @enderror" name="protein" value="{{ old('protein') }}" placeholder="Masukkan Jumlah Protein">
                            
                                <!-- error message untuk title -->
                                @error('protein')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>


                      <div class="form-group">
                          <label class="font-weight-bold">Karbohidrat</label>
                          <input type="text" class="form-control @error('karbohidrat') is-invalid @enderror" name="karbohidrat" value="{{ old('karbohidrat') }}" placeholder="Masukkan Jumlah karbohidrat">
                      
                          <!-- error message untuk title -->
                          @error('karbohidrat')
                              <div class="alert alert-danger mt-2">
                                  {{ $message }}
                              </div>
                          @enderror
                      </div>

                      <div class="form-group">
                        <label class="font-weight-bold">Lemak</label>
                        <input type="text" class="form-control @error('lemak') is-invalid @enderror" name="lemak" value="{{ old('lemak') }}" placeholder="Masukkan Jumlah lemak">
                    
                        <!-- error message untuk title -->
                        @error('lemak')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold">Energi</label>
                        <input type="text" class="form-control @error('energi') is-invalid @enderror" name="energi" value="{{ old('energi') }}" placeholder="Masukkan Jumlah energi">
                    
                        <!-- error message untuk title -->
                        @error('energi')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                            <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content' );
</script>
</body>
</html>

