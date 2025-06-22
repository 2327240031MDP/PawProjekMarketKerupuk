<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Produk Kerupuk - Toko 619</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-dBwEXRJBgrzWZ2vSP1XRVQu/jKkQfbtIsXf1T9pUjE3rVULK4e4I2V6KXfU7uzWq+6YBfZ6inB/b5y3lYzLL7A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body { font-family: 'Poppins', Arial, sans-serif; margin: 0; background-color: #f8f9fa; color: #343a40; }
        .container { max-width: 1200px; margin: auto; padding: 20px; }
        header { background-color: #b00000; padding: 15px 30px; color: #fff; display: flex; align-items: center; justify-content: space-between; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        .navbar-title { font-size: 24px; font-weight: 700; }
        .nav-links a { color: #fff; margin-left: 25px; text-decoration: none; font-weight: 600; position: relative; padding-bottom: 5px; }
        .nav-links a::after { content: ''; position: absolute; width: 0; height: 2px; bottom: 0; left: 50%; background-color: #ffd1d1; transition: all 0.3s ease-in-out; }
        .nav-links a:hover::after { width: 100%; left: 0; }
        h1, h3.welcome-text { text-align: center; color: #b00000; font-weight: 700; }
        h1 { margin-bottom: 30px; font-size: 2.5rem; }
        h3.welcome-text { font-weight: 400; color: #555; margin-bottom: 10px; }
        .search-container { text-align: center; margin: 40px 0; }
        .search-input { width: 100%; max-width: 600px; padding: 15px 25px; border-radius: 50px; border: 1px solid #dee2e6; font-size: 16px; transition: all 0.3s ease; box-shadow: 0 4px 15px rgba(0,0,0,0.05); }
        .search-input:focus { outline: none; border-color: #b00000; box-shadow: 0 4px 20px rgba(176, 0, 0, 0.2); }
        .product-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 25px; }
        .card { border-radius: 15px; overflow: hidden; background: #ffffff; box-shadow: 0 8px 24px rgba(0,0,0,0.08); transition: transform 0.3s ease, box-shadow 0.3s ease; position: relative; }
        .card:hover { transform: translateY(-8px); box-shadow: 0 12px 30px rgba(0,0,0,0.12); }
        .card-link { text-decoration: none; color: inherit; display: block; }
        .card img { width: 100%; height: 200px; object-fit: cover; display: block; }
        .card-content { padding: 20px; }
        .card-content h3 { margin: 0 0 10px 0; color: #b00000; font-size: 1.25rem; font-weight: 600; text-align: left; }
        .card-content p { margin: 0; color: #6c757d; font-size: 15px; line-height: 1.6; }
        .ad-container { margin: 40px 0; position: relative; overflow: hidden; border-radius: 15px; box-shadow: 0 8px 24px rgba(0,0,0,0.08); }
        .ad-slider { display: flex; transition: transform 0.5s ease-in-out; }
        .ad-slide { min-width: 100%; box-sizing: border-box; }
        .ad-slide img { width: 100%; display: block; }
        .slider-nav { position: absolute; top: 50%; left: 15px; right: 15px; display: flex; justify-content: space-between; transform: translateY(-50%); opacity: 0; transition: opacity 0.3s ease; }
        .ad-container:hover .slider-nav { opacity: 1; }
        .slider-btn { background: rgba(255, 255, 255, 0.9); color: #b00000; border: none; border-radius: 50%; width: 45px; height: 45px; cursor: pointer; font-size: 24px; font-weight: bold; box-shadow: 0 4px 12px rgba(0,0,0,0.15); transition: all 0.3s ease; }
        .slider-btn:hover { background: #b00000; color: white; transform: scale(1.1); }
        .slider-dots { position: absolute; bottom: 15px; left: 50%; transform: translateX(-50%); display: flex; gap: 10px; }
        .dot { width: 12px; height: 12px; border-radius: 50%; background: rgba(255, 255, 255, 0.7); cursor: pointer; transition: all 0.4s ease; }
        .dot.active { background: #b00000; transform: scale(1.2); }
        footer { background: #b00000; color: #fff; text-align: center; padding: 20px 0; margin-top: 50px; font-size: 14px; }
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

    <div class="container">
        <h3 class="welcome-text">Selamat datang di Toko Kerupuk 619!</h3>
        <h1>Produk Kerupuk Kami</h1>
        
        <div class="search-container">
            <input type="text" id="searchInput" class="search-input" placeholder="Cari kerupuk favoritmu..." />
        </div>

        
        <div class="product-grid" id="productGrid">
            </div>

            <div class="ad-container">
            <div class="ad-slider" id="adSlider">
                <div class="ad-slide"><img src="{{ asset('images/1.png') }}" alt="Iklan 1"></div>
                <div class="ad-slide"><img src="{{ asset('images/2.png') }}" alt="Iklan 2"></div>
                <div class="ad-slide"><img src="{{ asset('images/3.png') }}" alt="Iklan 3"></div>
                <div class="ad-slide"><img src="{{ asset('images/4.png') }}" alt="Iklan 4"></div>
                <div class="ad-slide"><img src="{{ asset('images/5.png') }}" alt="Iklan 5"></div>
            </div>
            <div class="slider-nav">
                <button class="slider-btn" onclick="prevSlide()">‹</button>
                <button class="slider-btn" onclick="nextSlide()">›</button>
            </div>
            <div class="slider-dots"></div>
        </div>
    </div>

    <footer>
        &copy; {{ date('Y') }} Toko Kerupuk 619 - Semua Hak Cipta Dilindungi
    </footer>

    <script>
    const products = @json($products);

    const adSlider = document.getElementById("adSlider");
    const slides = document.querySelectorAll(".ad-slide");
    const sliderDotsContainer = document.querySelector(".slider-dots");
    let dots = []; 
    let currentIndex = 0;

    function createDots() {
        if (!sliderDotsContainer || slides.length === 0) return;
        slides.forEach((_, i) => {
            const dot = document.createElement("span");
            dot.classList.add("dot");
            dot.addEventListener("click", () => currentSlide(i));
            sliderDotsContainer.appendChild(dot);
            dots.push(dot);
        });
    }

    function showSlide(index) {
        if (!adSlider || slides.length === 0 || dots.length === 0) return;
        const numSlides = slides.length;
        if (index >= numSlides) currentIndex = 0;
        else if (index < 0) currentIndex = numSlides - 1;
        else currentIndex = index;
        adSlider.style.transform = `translateX(-${currentIndex * 100}%)`;
        dots.forEach((dot, i) => dot.classList.toggle("active", i === currentIndex));
    }

    function prevSlide() { showSlide(currentIndex - 1); }
    function nextSlide() { showSlide(currentIndex + 1); }
    function currentSlide(index) { showSlide(index); }

    const $ = id => document.getElementById(id); 

    const renderProducts = (filter = '') => {
        const productGrid = $("productGrid");
        if (!productGrid) return;
        
        const imageBasePath = "{{ asset('images/') }}";
        const productBasePath = "{{ url('/produk') }}";

        const filteredProducts = products.filter(p => 
            p.name.toLowerCase().includes(filter.toLowerCase())
        );

        let listHtml;
        if (filteredProducts.length > 0) {
            listHtml = filteredProducts.map(p => `
            <div class="card">
                <a href="${productBasePath}/${p.id}" class="card-link">
                    <img src="${imageBasePath}/${p.image}" alt="${p.name}" />
                    <div class="card-content">
                        <h3>${p.name}</h3>
                        <p>${p.desc}</p>
                    </div>
                </a>
            </div>
            `).join('');
        } else {
            listHtml = `<p>Produk dengan kata kunci "${filter}" tidak ditemukan.</p>`;
        }
            
        productGrid.innerHTML = listHtml;
    };

    document.addEventListener("DOMContentLoaded", () => {
        if (slides.length > 0) {
            createDots(); 
            showSlide(currentIndex); 
            setInterval(nextSlide, 5000);
        }
        const searchInput = $("searchInput");
        if (searchInput) {
            searchInput.addEventListener('input', e => renderProducts(e.target.value));
        }
        renderProducts();
    });
    </script>
</body>
</html>