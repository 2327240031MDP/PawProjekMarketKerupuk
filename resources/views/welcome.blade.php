<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Selamat Datang - Toko Kerupuk 619</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-dBwEXRJBgrzWZ2vSP1XRVQu/jKkQfbtIsXf1T9pUjE3rVULK4e4I2V6KXfU7uzWq+6YBfZ6inB/b5y3lYzLL7A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body { font-family: 'Poppins', Arial, sans-serif; margin: 0; padding: 0; background-color: #f8f9fa; color: #343a40; display: flex; flex-direction: column; min-height: 100vh; }
        header { background-color: #b00000; padding: 15px 30px; color: #fff; display: flex; align-items: center; justify-content: space-between; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        .navbar-title { font-size: 24px; font-weight: 700; }
        .container { flex: 1; display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center; padding: 40px 20px; max-width: 800px; margin: auto; }
        h1 { font-size: 3rem; font-weight: 700; color: #b00000; margin-bottom: 15px; }
        p { font-size: 1.1rem; color: #6c757d; margin-bottom: 40px; max-width: 600px; }
        .button-group { display: flex; gap: 20px; flex-wrap: wrap; justify-content: center; }
        .welcome-button { background-color: #b00000; color: #fff; padding: 15px 35px; border: none; border-radius: 50px; font-size: 18px; font-weight: 600; text-decoration: none; transition: all 0.3s ease; box-shadow: 0 8px 15px rgba(176, 0, 0, 0.2); display: inline-flex; align-items: center; gap: 10px; }
        .welcome-button:hover { background-color: #900000; transform: translateY(-3px); box-shadow: 0 12px 25px rgba(176, 0, 0, 0.3); }
        footer { background: #b00000; color: #fff; text-align: center; padding: 20px 0; margin-top: auto; font-size: 14px; }
    </style>
</head>
<body>
    <header>
        <div class="navbar-title">Toko Kerupuk 619</div>
        </header>

    <div class="container">
        <h1>Selamat Datang!</h1>
        <p>Temukan berbagai kerupuk pilihan terbaik, renyah, dan gurih hanya di Toko Kerupuk 619.</p>
        <div class="button-group">
            <a href="/produk" class="welcome-button">
                <i class="fas fa-store"></i>
                <span>Lihat Produk</span>
            </a>
            <a href="/pembelian" class="welcome-button">
                <i class="fas fa-shopping-cart"></i>
                <span>Pembelian</span>
            </a>
        </div>
    </div>

    <footer>
        &copy; {{ date('Y') }} Toko Kerupuk 619 - Semua Hak Cipta Dilindungi
    </footer>
</body>
</html>