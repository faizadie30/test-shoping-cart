@extends('template.app')

@push('title')
    List Produk
@endpush

@section('content')
    <a class="link-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
        href="{{ route('cart.index') }}">
        Lihat Keranjang
    </a>
    <div class="table-responsive">
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Produk</th>
                    <th>QTY</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $k => $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td class="d-flex flex-row gap-1">
                            <form method="post" action="{{ route('cart.store') }}">
                                @csrf
                                <input name="id_product" value="{{ $product->id }}" type="hidden" readonly />
                                <button type="submit" class="btn btn-primary btn-sm btn-icon" data-bs-toggle="tooltip"
                                    data-bs-placement="right" data-bs-title="Tambah Ke Keranjang"
                                    title="Tambah Ke Keranjang">
                                    <span>+</span>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
