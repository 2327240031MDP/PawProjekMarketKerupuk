<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $product->name }} - Detail Produk | Toko Kerupuk 619</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-dBwEXRJBgrzWZ2vSP1XRVQu/jKkQfbtIsXf1T9pUjE3rVULK4e4I2V6KXfU7uzWq+6YBfZ6inB/b5y3lYzLL7A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        :root { --primary-color: #b00000; --background-color: #f8f9fa; --text-color: #343a40; --secondary-text-color: #6c757d; --white-color: #fff; --border-color: #dee2e6; --success-color: #28a745; --warning-color: #ffc107; --danger-color: #dc3545; }
        body { font-family: 'Poppins', Arial, sans-serif; margin: 0; background-color: var(--background-color); color: var(--text-color); display: flex; flex-direction: column; min-height: 100vh; }
        header { background-color: var(--primary-color); padding: 15px 30px; color: var(--white-color); display: flex; align-items: center; justify-content: space-between; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        .navbar-title { font-size: 24px; font-weight: 700; }
        .nav-links a { color: var(--white-color); margin-left: 25px; text-decoration: none; font-weight: 600; position: relative; padding-bottom: 5px; }
        .nav-links a::after { content: ''; position: absolute; width: 0; height: 2px; bottom: 0; left: 50%; background-color: #ffd1d1; transition: all 0.3s ease-in-out; }
        .nav-links a:hover::after { width: 100%; left: 0; }
        footer { background: var(--primary-color); color: var(--white-color); text-align: center; padding: 20px 0; margin-top: auto; font-size: 14px; }
        .container { max-width: 1100px; margin: auto; padding: 40px 20px; flex-grow: 1; }
        .back-link { display: inline-flex; align-items: center; gap: 8px; margin-bottom: 25px; color: var(--secondary-text-color); text-decoration: none; font-weight: 500; transition: color 0.3s; }
        .back-link:hover { color: var(--primary-color); }
        .product-detail-layout { display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: center; }
        .product-image-container img { width: 100%; height: auto; aspect-ratio: 1/1; object-fit: cover; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); }
        .product-info-container h1 { font-size: 2.8rem; font-weight: 700; color: var(--text-color); margin: 0 0 15px 0; line-height: 1.2; }
        .product-price { font-size: 2.2rem; font-weight: 700; color: var(--primary-color); margin-bottom: 20px; }
        .product-description { font-size: 1rem; color: var(--secondary-text-color); line-height: 1.8; margin-bottom: 25px; }
        .stock-status { display: flex; align-items: center; gap: 10px; font-weight: 600; font-size: 1rem; padding: 10px 15px; border-radius: 8px; margin-bottom: 30px; }
        .stock-status.available { color: var(--success-color); background-color: #e9f7ef; }
        .stock-status.low { color: #856404; background-color: #fff3cd; }
        .stock-status.out-of-stock { color: var(--danger-color); background-color: #f8d7da; }
        .cta-button { display: inline-block; width: 100%; padding: 18px; font-size: 18px; font-weight: 700; text-align: center; text-decoration: none; border-radius: 10px; background: var(--primary-color); color: var(--white-color); border: none; cursor: pointer; transition: background-color 0.3s ease, transform 0.2s ease; }
        .cta-button:hover:not(:disabled) { background-color: #800000; transform: translateY(-3px); }
        .cta-button:disabled { background: #ccc; cursor: not-allowed; color: #888; }
        @media (max-width: 768px) {.product-detail-layout { grid-template-columns: 1fr; gap: 30px; }.product-info-container h1 { font-size: 2.2rem; }.product-price { font-size: 1.8rem; }.container { padding-top: 20px; }}
    </style>
</head>
<body>
    <header>
        <div class="navbar-title">Toko Kerupuk 619</div>
        <nav class="nav-links">
            <a href="{{ url('/produk') }}">Produk</a>
            <a href="{{ url('/pembelian') }}">Pembelian</a>
            <a href="{{ url('/histori') }}">Histori Pembelian</a>
        </nav>
    </header>

    <main class="container">
        <a href="{{ url('/produk') }}" class="back-link">
            <i class="fas fa-arrow-left"></i>
            <span>Kembali ke semua produk</span>
        </a>

        <div class="product-detail-layout">
            <div class="product-image-container">
                <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}" />
            </div>

            <div class="product-info-container">
                <h1>{{ $product->name }}</h1>
                
                <div class="product-price">
                    Rp {{ number_format($product->price, 0, ',', '.') }}
                </div>
                
                <p class="product-description">
                    {{ $product->desc_long ?: 'Deskripsi lengkap untuk produk ini belum tersedia.' }}
                </p>

                @php
                    $stock = $product->stock;
                    if ($stock > 10) {
                        $stockStatus = 'available';
                        $stockText = 'Stok Tersedia (' . $stock . ' tersisa)';
                    } elseif ($stock > 0) {
                        $stockStatus = 'low';
                        $stockText = 'Stok Terbatas (' . $stock . ' tersisa)';
                    } else {
                        $stockStatus = 'out-of-stock';
                        $stockText = 'Stok Habis';
                    }
                @endphp
                <div class="stock-status {{ $stockStatus }}">
                    <i class="fas fa-box-open"></i>
                    <span>{{ $stockText }}</span>
                </div>
                
                <a href="{{ url('/pembelian') }}" class="cta-button" {{ $stock <= 0 ? 'disabled' : '' }}>
                    {{ $stock > 0 ? 'Beli Sekarang' : 'Stok Habis' }}
                </a>
            </div>
        </div>
    </main>

    <footer>
        &copy; {{ date('Y') }} Toko Kerupuk 619 - Semua Hak Cipta Dilindungi
    </footer>
</body>
</html>