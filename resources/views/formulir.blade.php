<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Request dengan Input Laravel</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-center">Form Validasi Data</h1>
                <form action="/formulir/proses" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama" class="control-label">Nama Lengkap</label>
                        <input type="text" id="nama" name="nama" class="form-control
                        {{ $errors->has('nama') ? ' is-invalid' : '' }}"
                        placeholder="Nama Lengkap Anda" value="{{ old('nama')}}">
                        @if ($errors->has('nama'))
                            <span class="text-danger smaall">
                                <p>{{ $errors->first('nama') }}</p>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="alamat" class="control-label">Alamat</label>
                        <textarea name="alamat" id="alamat" rows="3" class="form-control
                        {{ $errors->has('alamat') ? ' is-invalid' : '' }}"
                        placeholder="Masukkan Alamat Anda" value="{{ old('alamat')}}"></textarea>
                        @if ($errors->has('alamat'))
                            <span class="text-danger small">
                                <p>{{ $errors->first('alamat') }}</p>
                            </span>
                        @endif
                    </div>
                    <input type="submit" value="Simpan" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</body>
</html>