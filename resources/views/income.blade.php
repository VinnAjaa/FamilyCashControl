<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>income</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css//2style.css">

</head>

<body>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">{{$error}}</div>
        @endforeach
    @endif

    <div class="container-income">
        <div class="income">
            <div class="income-title">
                <h1>Income</h1>
            </div>
            <div class="income-body">
                <form action="" method="POST" class="income-awal">
                    @csrf
                    <label for="jumlahpemasukan">Jumlah Pemasukan:</label>
                    <input type="number" id="jumlah_pemasukan" name="jumlah_pemasukan" >
                    <br>
                    <label for="date">Tanggal:</label>
                    <input type="date" id="tanggal" name="date" >
                    <br>
                    <label for="keterangan">Keterangan:</label>
                    <input type="text" id="keterangan" name="keterangan" >
                    <br>
                    <button type="submit">kirim</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
