<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// Halaman Login
Route::get('/', function () {
    return view('login');
})->name('login');

// Proses Login
Route::post('/login', function (Request $request) {
    $request->validate([
        'email' => 'required|email',
        'password' => 'required|min:6'
    ]);
    
    session(['user' => $request->email]);
    return redirect()->route('dashboard');
})->name('login.post');

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Data Barang
Route::get('/barang', function () {
    $barangs = [
        ['id' => 1, 'kode' => 'BRG001', 'nama' => 'Laptop Asus', 'kategori' => 'Elektronik', 'harga' => 8500000, 'stok' => 15],
        ['id' => 2, 'kode' => 'BRG002', 'nama' => 'Mouse Logitech', 'kategori' => 'Aksesoris', 'harga' => 150000, 'stok' => 50],
        ['id' => 3, 'kode' => 'BRG003', 'nama' => 'Keyboard Mechanical', 'kategori' => 'Aksesoris', 'harga' => 750000, 'stok' => 30],
        ['id' => 4, 'kode' => 'BRG004', 'nama' => 'Monitor LG 24"', 'kategori' => 'Elektronik', 'harga' => 2500000, 'stok' => 20],
        ['id' => 5, 'kode' => 'BRG005', 'nama' => 'Printer Canon', 'kategori' => 'Elektronik', 'harga' => 1800000, 'stok' => 10],
    ];
    return view('barang', compact('barangs'));
})->name('barang');

// Data Transaksi
Route::get('/transaksi', function () {
    $transaksis = [
        ['id' => 1, 'kode_transaksi' => 'TRX001', 'tanggal' => '2024-10-15', 'pelanggan' => 'Ahmad Rizki', 'total' => 8650000, 'status' => 'Selesai'],
        ['id' => 2, 'kode_transaksi' => 'TRX002', 'tanggal' => '2024-10-16', 'pelanggan' => 'Siti Nurhaliza', 'total' => 900000, 'status' => 'Proses'],
        ['id' => 3, 'kode_transaksi' => 'TRX003', 'tanggal' => '2024-10-17', 'pelanggan' => 'Budi Santoso', 'total' => 2650000, 'status' => 'Selesai'],
        ['id' => 4, 'kode_transaksi' => 'TRX004', 'tanggal' => '2024-10-18', 'pelanggan' => 'Dewi Lestari', 'total' => 1950000, 'status' => 'Pending'],
        ['id' => 5, 'kode_transaksi' => 'TRX005', 'tanggal' => '2024-10-19', 'pelanggan' => 'Eko Prasetyo', 'total' => 450000, 'status' => 'Selesai'],
    ];
    return view('transaksi', compact('transaksis'));
})->name('transaksi');

// Logout
Route::get('/logout', function () {
    session()->forget('user');
    return redirect()->route('login');
})->name('logout');
