<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>expense</title>
    <style>
        body{
            background-color: #C9D6DF
        }
    </style>
</head>
<body>
    <div class="position-fixed">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
            @endforeach
        @endif
    </div>

    <div class="container-expense">
        <div class="expense">
            <div class="expense-title">
                <h1>expense</h1>
            </div>
            <div class="expense-body">
                <form method="POST" class="expense-awal">
                    @csrf
                    <label for="jumlahpengeluaran">Jumlah Pengeluaran:</label>
                    <input type="number" id="jumlah_pengeluaran" name="jumlah_pengeluaran">
                    <br>
                    <label for="date">Tanggal:</label>
                    <input type="date" id="tanggal" name="date" >
                    <br>
                    <label for="keterangan">Keterangan:</label>
                    <input type="text" id="keterangan" name="keterangan" >
                    <br>
                    <button class="submit-expense"  type="submit">kirim</button>
                </form>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
</body>
</html>