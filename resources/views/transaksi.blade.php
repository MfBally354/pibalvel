<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Transaksi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('dashboard') }}">
                <i class="bi bi-speedometer2"></i> Dashboard App
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}">
                            <i class="bi bi-house-door"></i> Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('barang') }}">
                            <i class="bi bi-box-seam"></i> Data Barang
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('transaksi') }}">
                            <i class="bi bi-receipt"></i> Data Transaksi
                        </a>
                    </li>
                </ul>
                <div class="d-flex align-items-center text-white">
                    <span class="me-3">
                        <i class="bi bi-person-circle"></i> {{ session('user', 'User') }}
                    </span>
                    <a href="{{ route('logout') }}" class="btn btn-outline-light btn-sm">
                        <i class="bi bi-box-arrow-right"></i> Logout
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="container mt-4">
        <div class="row mb-4">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <h2><i class="bi bi-receipt"></i> Data Transaksi</h2>
                    <button class="btn btn-primary">
                        <i class="bi bi-plus-circle"></i> Transaksi Baru
                    </button>
                </div>
            </div>
        </div>

        <!-- Search and Filter -->
        <div class="row mb-3">
            <div class="col-md-4">
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-search"></i></span>
                    <input type="text" class="form-control" placeholder="Cari transaksi...">
                </div>
            </div>
            <div class="col-md-3">
                <select class="form-select">
                    <option selected>Semua Status</option>
                    <option>Selesai</option>
                    <option>Proses</option>
                    <option>Pending</option>
                </select>
            </div>
            <div class="col-md-2">
                <input type="date" class="form-control" placeholder="Dari Tanggal">
            </div>
            <div class="col-md-2">
                <input type="date" class="form-control" placeholder="Sampai Tanggal">
            </div>
            <div class="col-md-1">
                <button class="btn btn-secondary w-100"><i class="bi bi-funnel"></i></button>
            </div>
        </div>

        <!-- Summary Cards -->
        <div class="row mb-4">
            <div class="col-md-3">
                <div class="card border-primary">
                    <div class="card-body text-center">
                        <h6 class="text-muted">Total Transaksi</h6>
                        <h3 class="text-primary fw-bold">{{ count($transaksis) }}</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-success">
                    <div class="card-body text-center">
                        <h6 class="text-muted">Selesai</h6>
                        <h3 class="text-success fw-bold">3</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-warning">
                    <div class="card-body text-center">
                        <h6 class="text-muted">Proses</h6>
                        <h3 class="text-warning fw-bold">1</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-danger">
                    <div class="card-body text-center">
                        <h6 class="text-muted">Pending</h6>
                        <h3 class="text-danger fw-bold">1</h3>
                    </div>
                </div>
            </div>
        </div>

        <!-- Table -->
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-striped align-middle">
                        <thead class="table-primary">
                            <tr>
                                <th width="5%">No</th>
                                <th width="12%">Kode Transaksi</th>
                                <th width="12%">Tanggal</th>
                                <th width="20%">Pelanggan</th>
                                <th width="18%">Total</th>
                                <th width="15%">Status</th>
                                <th width="18%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($transaksis as $index => $transaksi)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td><span class="badge bg-dark">{{ $transaksi['kode_transaksi'] }}</span></td>
                                <td>
                                    <i class="bi bi-calendar3"></i> 
                                    {{ date('d M Y', strtotime($transaksi['tanggal'])) }}
                                </td>
                                <td>
                                    <i class="bi bi-person"></i> 
                                    <strong>{{ $transaksi['pelanggan'] }}</strong>
                                </td>
                                <td>
                                    <span class="text-success fw-bold">
                                        Rp {{ number_format($transaksi['total'], 0, ',', '.') }}
                                    </span>
                                </td>
                                <td>
                                    @if($transaksi['status'] == 'Selesai')
                                        <span class="badge bg-success">
                                            <i class="bi bi-check-circle-fill"></i> Selesai
                                        </span>
                                    @elseif($transaksi['status'] == 'Proses')
                                        <span class="badge bg-warning text-dark">
                                            <i class="bi bi-hourglass-split"></i> Proses
                                        </span>
                                    @else
                                        <span class="badge bg-danger">
                                            <i class="bi bi-exclamation-circle"></i> Pending
                                        </span>
                                    @endif
                                </td>
                                <td>
                                    <div class="btn-group btn-group-sm">
                                        <button class="btn btn-outline-info" title="Detail">
                                            <i class="bi bi-eye"></i>
                                        </button>
                                        <button class="btn btn-outline-primary" title="Edit">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                        <button class="btn btn-outline-success" title="Print">
                                            <i class="bi bi-printer"></i>
                                        </button>
                                        <button class="btn btn-outline-danger" title="Hapus">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr class="table-light">
                                <td colspan="4" class="text-end"><strong>Total Pendapatan:</strong></td>
                                <td colspan="3">
                                    <strong class="text-success fs-5">
                                        Rp {{ number_format(array_sum(array_column($transaksis, 'total')), 0, ',', '.') }}
                                    </strong>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>

                <!-- Pagination -->
                <nav class="mt-3">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#">Previous</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
