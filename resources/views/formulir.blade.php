<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Request dengan Input Laravel</title>
</head>
<body>
    <form action="/formulir/proses" method="POST">
        @csrf
        @method('GET')

        Nama   : <input type="text" name="nama"><br><br>
        Alamat : <input type="text" name="alamat"><br><br>
        <input type="submit" value="Simpan" id="">
    </form>
</body>
</html>