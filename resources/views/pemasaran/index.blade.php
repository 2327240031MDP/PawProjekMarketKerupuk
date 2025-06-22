<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Histori Pembelian - Toko Kerupuk 619</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-dBwEXRJBgrzWZ2vSP1XRVQu/jKkQfbtIsXf1T9pUjE3rVULK4e4I2V6KXfU7uzWq+6YBfZ6inB/b5y3lYzLL7A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        :root {--primary-color: #b00000;--background-color: #f8f9fa;--text-color: #343a40;--secondary-text-color: #6c757d;--white-color: #fff;--border-color: #dee2e6;}
        body { font-family: 'Poppins', Arial, sans-serif; margin: 0; background-color: var(--background-color); color: var(--text-color); display: flex; flex-direction: column; min-height: 100vh; }
        header { background-color: var(--primary-color); padding: 15px 30px; color: var(--white-color); display: flex; align-items: center; justify-content: space-between; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        .navbar-title { font-size: 24px; font-weight: 700; }
        .nav-links a { color: var(--white-color); margin-left: 25px; text-decoration: none; font-weight: 600; position: relative; padding-bottom: 5px; }
        .nav-links a::after { content: ''; position: absolute; width: 0; height: 2px; bottom: 0; left: 50%; background-color: #ffd1d1; transition: all 0.3s ease-in-out; }
        .nav-links a:hover::after { width: 100%; left: 0; }
        footer { background: var(--primary-color); color: var(--white-color); text-align: center; padding: 20px 0; margin-top: auto; font-size: 14px; }
        .container { max-width: 1200px; margin: auto; padding: 40px 20px; flex-grow: 1; }
        .content-card { background: var(--white-color); border-radius: 15px; padding: 30px; box-shadow: 0 8px 30px rgba(0,0,0,0.08); }
        h1 { color: var(--primary-color); text-align: center; font-size: 2.5rem; margin-top: 0; margin-bottom: 10px; }
        .subtitle { text-align: center; color: var(--secondary-text-color); margin-bottom: 30px; }
        .table-container { overflow-x: auto; }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 16px 12px; text-align: left; vertical-align: middle; }
        thead th { font-weight: 600; font-size: 0.85rem; color: var(--secondary-text-color); text-transform: uppercase; letter-spacing: 0.05em; border-bottom: 2px solid var(--border-color); }
        tbody tr { border-bottom: 1px solid var(--border-color); transition: background-color 0.2s ease; }
        tbody tr:last-child { border-bottom: none; }
        tbody tr:hover { background-color: #f8f9fa; }
        .empty-state td { text-align: center; padding: 40px; color: var(--secondary-text-color); }
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
    <div class="content-card">
        <h1>Histori Pembelian Pengguna</h1>
        <p class="subtitle">Daftar semua pesanan data pengguna yang telah kami terima.</p>

        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pembeli</th>
                        <th>No. Telepon</th>
                        <th>Alamat</th>
                        <th>Waktu Pesanan</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($pembelian as $pembeli)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $pembeli->nama }}</td>
                            <td>{{ $pembeli->notelp }}</td>
                            <td>{{ $pembeli->alamat }}</td>
                            <td>{{ $pembeli->created_at->timezone('Asia/Jakarta')->format('d M Y, H:i') }}</td>
                        </tr>
                    @empty
                        <tr class="empty-state">
                            <td colspan="5">Belum ada data pembelian yang tercatat.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</main>

<footer >
    &copy; {{ date('Y') }} Toko Kerupuk 619 - Semua Hak Cipta Dilindungi
</footer>
</body>
</html>