<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Dashboard</title>
    <style>
        body {
            background-color: #F0F5F9
        }
    </style>
</head>

<body>

    {{-- -------- navbar ------- --}}
    <nav class="navbar navbar-expand-lg navbar-home">
        <div class="container-fluid">
            <a class="navbar-brand navbar-logo" href="#">Family CashFlow</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/income">Income</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/expense">Expense</a>
                    </li>
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li> --}}
                </ul>
                <a href="/logout" class="btn btn-danger d-flex">Logout</a>
                {{-- <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form> --}}

            </div>
        </div>
    </nav>
    {{-- ------ navbar end ----- --}}


    <div class="title px-5 ">
        <h1 class="title-dashboard">Dashboard</h1>
        <p class="subtitle-dashboard">Anda bisa melihat pemasukan dan pengeluaran di dashboard ini!</p>
    </div>
    {{-- --------- card ----------- --}}
    <div>

        @if (session()->has('success'))
            <div class="alert alert-success justify-content-center">{{ session('success') }}</div>
        @endif


        {{-- ------ card ------ --}}
            <div class="kartu px-5 row">
                <div class="col">
                    <div class="card bg-light text-dark mb-4">
                        <div class="card-body">Saldo</div>
                        <h4 class="text-dark px-3">IDR {{ $data['totalpemasukan'] - $data['totalpengeluaran'] }}</h4>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            {{-- <a class="small text-dark stretched-link" href="#">View Details</a> --}}
                            <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
    
                </div>
    
    
                <div class="col">
                    <div class="card bg-light text-dark mb-4">
                        <div class="card-body">Pemasukan</div>
                        <h4 class="text-dark px-3">IDR {{ $data['totalpemasukan'] }}</h4>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            {{-- <a class="small text-dark stretched-link" href="#">View Details</a> --}}
                            <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
    
                </div>
    
    
    
                <div class="col">
                    <div class="card bg-light text-dark mb-4">
                        <div class="card-body">Pengeluaran</div>
                        <h4 class="text-dark px-3">IDR {{ $data['totalpengeluaran'] }}</h4>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            {{-- <a class="small text-dark stretched-link" href="#">View Details</a> --}}
                            <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
    {{-- ------- end card ----------- --}}



    {{-- -------- tabel ------- --}}

    <div class=" px-5 row mx-4 gap-5">
        <div class="card col">
            <div class="card-header">
                Riwayat Transaksi Pemasukan
            </div>
            <div class="card-body table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nominal</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data['pemasukan'] as $item)
                            <tr>
                                <th>{{ $loop->iteration }}</th>
                                <td>{{ $item->jumlah_pemasukan }}</td>
                                <td>{{ $item->tanggal }}</td>
                                <td>{{ $item->keterangan }}</td>
                                <td><a href="/income/update/{{ $item->id }}"><button> Update</button></a></td>
                                <td>
                                    <form action="income/delete/{{ $item->id }}" method="post">@csrf <button
                                            type="submit">Delete</button></form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card col">
            <div class="card-header">
                Riwayat Transaksi Pengeluaran
            </div>
            <div class="card-body table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nominal</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Keterangan</th>
                        </tr>
                    </thead>
                    <tbody`>
                        @foreach ($data['pengeluaran'] as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</th>
                                <td>{{ $item->jumlah_pengeluaran }}</td>
                                <td>{{ $item->tanggal }}</td>
                                <td>{{ $item->keterangan }}</td>
                                <td><a href="expense/update/{{ $item->id }}"><button>Update</button></a></td>
                                <td>
                                    <form action="expense/delete/{{ $item->id }}" method="post">@csrf
                                        <button type="submit">delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{-- -------- end tabel ------- --}}



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
