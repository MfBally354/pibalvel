@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <!-- Form Login -->
    <section id="login-form" class="mb-5">
        <h3>Form Login</h3>
        <div class="card">
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Masukkan username">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Masukkan password">
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Data Barang -->
    <section id="data-barang" class="mb-5">
        <h3>Data Barang</h3>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama Barang</th>
                                <th>Kategori</th>
                                <th>Harga</th>
                                <th>Stok</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>BRG001</td>
                                <td>Laptop ASUS</td>
                                <td>Elektronik</td>
                                <td>Rp 8.500.000</td>
                                <td>15</td>
                                <td>
                                    <button class="btn btn-sm btn-warning">Edit</button>
                                    <button class="btn btn-sm btn-danger">Hapus</button>
                                </td>
                            </tr>
                            <tr>
                                <td>BRG002</td>
                                <td>Mouse Wireless</td>
                                <td>Aksesoris</td>
                                <td>Rp 250.000</td>
                                <td>30</td>
                                <td>
                                    <button class="btn btn-sm btn-warning">Edit</button>
                                    <button class="btn btn-sm btn-danger">Hapus</button>
                                </td>
                            </tr>
                            <tr>
                                <td>BRG003</td>
                                <td>Keyboard Mechanical</td>
                                <td>Aksesoris</td>
                                <td>Rp 750.000</td>
                                <td>20</td>
                                <td>
                                    <button class="btn btn-sm btn-warning">Edit</button>
                                    <button class="btn btn-sm btn-danger">Hapus</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- Data Transaksi -->
    <section id="data-transaksi">
        <h3>Data Transaksi</h3>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID Transaksi</th>
                                <th>Tanggal</th>
                                <th>Nama Customer</th>
                                <th>Total Bayar</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>TRX001</td>
                                <td>2024-01-15</td>
                                <td>Budi Santoso</td>
                                <td>Rp 9.250.000</td>
                                <td><span class="badge bg-success">Selesai</span></td>
                                <td>
                                    <button class="btn btn-sm btn-info">Detail</button>
                                    <button class="btn btn-sm btn-warning">Edit</button>
                                </td>
                            </tr>
                            <tr>
                                <td>TRX002</td>
                                <td>2024-01-16</td>
                                <td>Siti Rahayu</td>
                                <td>Rp 1.000.000</td>
                                <td><span class="badge bg-warning">Pending</span></td>
                                <td>
                                    <button class="btn btn-sm btn-info">Detail</button>
                                    <button class="btn btn-sm btn-warning">Edit</button>
                                </td>
                            </tr>
                            <tr>
                                <td>TRX003</td>
                                <td>2024-01-17</td>
                                <td>Andi Wijaya</td>
                                <td>Rp 750.000</td>
                                <td><span class="badge bg-success">Selesai</span></td>
                                <td>
                                    <button class="btn btn-sm btn-info">Detail</button>
                                    <button class="btn btn-sm btn-warning">Edit</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
