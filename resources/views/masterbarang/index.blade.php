@extends('layouts.app')


@section('content')
<div class="container">
    <nav aria-label="breadcrumb ">
        <ol class="breadcrumb bg-transparent d-flex align-items-center">
            <li class="breadcrumb-item" aria-current="page">Master Barang</li>
            <li class="breadcrumb-item active" aria-current="page">Index</li>
        </ol>
    </nav>
    <div class="card border-0">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Brand</th>
                        <th>UOM</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>BRG/20220403/001</td>
                        <td>LCD 14 inch</td>
                        <td>Samsung</td>
                        <td>Unit</td>
                        <td>Rp. 1.500.000</td>
                        <td>80</td>
                        <td>
                            <form action="" method="post">
                                @csrf
                                @role('gudang|pimpinan|customer')
                                <a href="{{route('master-barang.show')}}" class="btn btn-outline-secondary btn-sm">
                                    Tampilkan Stock
                                </a>
                                @endrole
                                @role('gudang')
                                <a href="{{route('master-barang.edit')}}" class="btn btn-outline-warning btn-sm">
                                    Update Stock
                                </a>
                                <button type="submit" class="btn btn-outline-danger btn-sm">Hapus Stock</button>
                                @endrole
                                @role('customer')
                                <a href="{{route('master-barang.request')}}" class="btn btn-outline-warning btn-sm">
                                    Buat Permintaan
                                </a>
                                @endrole
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
