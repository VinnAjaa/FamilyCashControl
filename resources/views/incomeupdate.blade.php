<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Income Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/2style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    @if (session()->has('fails'))
    <div class="d-flex flex-column position-fixed">
        @foreach (session('fails') as $pesans)
            @foreach ($pesans as $pesan)
                 <div class="alert alert-danger">{{ $pesan }}</div>
            @endforeach
        @endforeach
    </div>
    @endif

    
    <div class="container-income">
        <div class="income">
            <div class="income-title">
                <h1>IncomeUpdate</h1>
            </div>
            <div class="income-body">
                <form action="" method="POST" class="income-awal">
                    @csrf
                    <label for="">Update Jumlah Pemasukan:</label>
                    {{-- Attribut value itu buat ngisi awalan dari input --}}
                    <input type="number" id="" name="update_pemasukan" value="{{ $data->jumlah_pemasukan }}">
                    <br>
                    <label for="">Update Tanggal:</label>
                    <input type="date" id="" name="update_tanggal" value="{{ $data->tanggal }}">
                    <br>
                    <label for="">Update Keterangan:</label>
                    <input type="text" id="" name="update_keterangan" value="{{ $data->keterangan }}">
                    <br>
                    <button type="submit" name="submit">kirim</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
</body>
</html>