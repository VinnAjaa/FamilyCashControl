<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>update expense</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/2style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body{
            background-color: black;
        }
    </style>
</head>
<body>
    @if ($errors->any())
       @foreach ($errors->all() as $pesan)
       <div class="alert alert-danger">{{ $pesan }}</div>
       @endforeach
    @endif
    <div class="container-expense">
        <div class="expense">
            <h1>Update Expense</h1>            
            <div class="expense_body">
                <form action="" method="post" class="expense-awal">
                    @csrf
                    <div class="mb-3 expense-awal">
                        <label for="">Update Jumlah Pengeluaran:</label>
                        <input type="number" name="update_pengeluaran" id="" value="{{ $data->jumlah_pengeluaran }}" >
                    </div>
                    <div class="mb-3 expense-awal">
                        <label for="">Update Tanggal:</label>
                        <input type="date" name="update_tanggal" id="" value="{{ $data->tanggal }}" >
                    </div>
                    <div class="mb-3 expense-awal">
                        <label for="">Update Keterangan:</label>
                        <input type="text" name="update_keterangan" id="" value="{{$data->keterangan}}"  >
                    </div>
                    <button style="border-radius: 25px" type="submit">Kirim</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</body>
</html>