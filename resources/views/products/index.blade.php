<!-- Product List -->
@foreach ($products as $product)
    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">{{ $product->name }}</h5>
            <p class="card-text">{{ $product->description }}</p>
            <p class="card-text">Harga: Rp {{ number_format($product->price, 0, ',', '.') }}</p>
            <a href="{{ route('products.edit', $product) }}" class="btn btn-primary">Edit</a>
            <form action="{{ route('products.destroy', $product) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus produk ini?')">Hapus</button>
            </form>
        </div>
    </div>
@endforeach
<a href="{{ route('products.create') }}" class="btn btn-success">Tambah Produk Baru</a>
