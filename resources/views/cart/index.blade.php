@extends('template.app')

@push('title')
    Keranjang
@endpush

@section('content')
    <a class="link-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
        href="{{ route('products.index') }}">
        kembali ke list product
    </a>

    <div class="d-flex justify-content-center my-3">
        <h3>
            Keranjang
        </h3>
    </div>

    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Nama Produk</th>
                    <th>Jumlah Yang Di inginkan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cartList as $k => $value)
                    <tr>
                        <td>{{ $value->product->name }}</td>
                        <td>{{ $value->quantity }}</td>
                        <td>
                            <button type="button" class="btn btn-danger btn-sm btn-icon" data-bs-toggle="tooltip"
                                data-bs-placement="right" data-bs-title="Kurangi/Hapus" title="Kurangi/Hapus">
                                <span>-</span>
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
