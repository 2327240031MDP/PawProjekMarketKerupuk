<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pembelian Kerupuk - Toko Kerupuk 619</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-dBwEXRJBgrzWZ2vSP1XRVQu/jKkQfbtIsXf1T9pUjE3rVULK4e4I2V6KXfU7uzWq+6YBfZ6inB/b5y3lYzLL7A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        :root { --primary-color: #b00000; --background-color: #f8f9fa; --text-color: #343a40; --secondary-text-color: #6c757d; --white-color: #fff; --border-color: #dee2e6; }
        body { font-family: 'Poppins', Arial, sans-serif; margin: 0; background-color: var(--background-color); color: var(--text-color); }
        header { background-color: var(--primary-color); padding: 15px 30px; color: var(--white-color); display: flex; align-items: center; justify-content: space-between; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        .navbar-title { font-size: 24px; font-weight: 700; }
        .nav-links a { color: var(--white-color); margin-left: 25px; text-decoration: none; font-weight: 600; position: relative; padding-bottom: 5px; }
        .nav-links a::after { content: ''; position: absolute; width: 0; height: 2px; bottom: 0; left: 50%; background-color: #ffd1d1; transition: all 0.3s ease-in-out; }
        .nav-links a:hover::after { width: 100%; left: 0; }
        footer { background: var(--primary-color); color: var(--white-color); text-align: center; padding: 20px 0; margin-top: 50px; font-size: 14px; }
        .container { max-width: 1400px; margin: auto; padding: 30px 20px; }
        h1, h2, h3 { color: var(--primary-color); font-weight: 700; }
        h1 { font-size: 2.5rem; text-align: center; margin-bottom: 30px; }
        .purchase-layout { display: grid; grid-template-columns: 2fr 1fr; gap: 30px; align-items: flex-start; }
        .product-selection h2 { margin-top: 0; }
        .product-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(260px, 1fr)); gap: 25px; }
        .card { border-radius: 15px; overflow: hidden; background: var(--white-color); box-shadow: 0 8px 24px rgba(0,0,0,0.08); transition: transform 0.3s ease, box-shadow 0.3s ease; display: flex; flex-direction: column; }
        .card:hover { transform: translateY(-5px); box-shadow: 0 12px 30px rgba(0,0,0,0.12); }
        .card img { width: 100%; height: 180px; object-fit: cover; }
        .card-content { padding: 20px; flex-grow: 1; display: flex; flex-direction: column; }
        .card-content h3 { margin: 0 0 5px 0; font-size: 1.2rem; font-weight: 600; }
        .card-content p { margin: 0 0 15px 0; color: var(--secondary-text-color); font-size: 1rem; font-weight: 500; }
        .card .btn { margin-top: auto; width: 100%; background-color: var(--primary-color); color: var(--white-color); padding: 12px 20px; border: none; border-radius: 8px; font-size: 16px; font-weight: 600; cursor: pointer; transition: background-color 0.3s ease; }
        .card .btn:hover { background-color: #800000; }
        .checkout-area { background-color: var(--white-color); border-radius: 15px; padding: 25px; box-shadow: 0 8px 30px rgba(0,0,0,0.1); position: sticky; top: 20px; }
        .checkout-area h2 { margin-top: 0; text-align: center; font-size: 1.8rem; }
        .cart-item { display: flex; justify-content: space-between; align-items: center; padding: 12px 0; border-bottom: 1px solid var(--border-color); gap: 10px; }
        .cart-item:last-child { border-bottom: none; }
        .cart-item-details { flex-grow: 1; }
        .cart-item-details span { display: block; }
        .cart-item-details .item-name { font-weight: 600; }
        .cart-item-details .item-price { font-size: 0.9em; color: var(--secondary-text-color); }
        .cart-controls { display: flex; align-items: center; gap: 5px; }
        .cart-controls button { background: none; border: 1px solid var(--border-color); color: var(--primary-color); cursor: pointer; font-weight: bold; width: 28px; height: 28px; border-radius: 50%; transition: background-color 0.2s, color 0.2s; }
        .cart-controls button:hover { background-color: #ffeaea; }
        .cart-controls .remove-btn { color: #dc3545; border-color: #dc3545; }
        .cart-controls .remove-btn:hover { background-color: #dc3545; color: var(--white-color); }
        .total { font-weight: 700; text-align: right; margin: 20px 0; font-size: 1.5rem; color: var(--primary-color); }
        .form-group { margin-bottom: 15px; }
        .form-group label { display: block; font-weight: 600; margin-bottom: 5px; font-size: 0.95rem; }
        .form-group input, .form-group textarea { width: 100%; padding: 12px; border-radius: 8px; font-family: 'Poppins', sans-serif; border: 1px solid var(--border-color); font-size: 1rem; box-sizing: border-box; transition: border-color 0.3s, box-shadow 0.3s; }
        .form-group input:focus, .form-group textarea:focus { outline: none; border-color: var(--primary-color); box-shadow: 0 0 0 3px rgba(176, 0, 0, 0.1); }
        #submitOrderBtn { width: 100%; padding: 15px; font-size: 18px; font-weight: 700; border-radius: 8px; background: var(--primary-color); color: var(--white-color); border: none; cursor: pointer; transition: background-color 0.3s ease, transform 0.2s ease; }
        #submitOrderBtn:hover:not(:disabled) { background-color: #800000; transform: translateY(-2px); }
        #submitOrderBtn:disabled { background: #ccc; cursor: not-allowed; transform: none; }
        .modal { display: none; position: fixed; z-index: 1000; left: 0; top: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.5); justify-content: center; align-items: center; }
        .modal-content { background-color: var(--white-color); padding: 40px; border-radius: 15px; width: 90%; max-width: 450px; text-align: center; box-shadow: 0 10px 30px rgba(0,0,0,0.2); animation: fadeIn 0.4s; }
        @keyframes fadeIn { from { opacity: 0; transform: scale(0.9); } to { opacity: 1; transform: scale(1); } }
        .modal-content .icon { font-size: 50px; color: #28a745; margin-bottom: 20px; }
        .modal-content h2 { margin-bottom: 15px; font-size: 1.8rem; }
        .modal-content p { font-size: 1rem; line-height: 1.6; color: var(--secondary-text-color); margin-bottom: 25px; }
        .close-btn { width: 100%; padding: 12px; font-size: 16px; font-weight: 600; border-radius: 8px; background: var(--primary-color); color: var(--white-color); border: none; cursor: pointer; }
        @media (max-width: 992px) { .purchase-layout { grid-template-columns: 1fr; } .checkout-area { position: static; margin-top: 30px; } }
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
        <h1>Pesan Kerupuk Favorit Anda</h1>

        <div class="purchase-layout">
            <div class="product-selection">
                <div class="product-grid" id="productGrid">
                    </div>
            </div>

            <div class="checkout-area">
                <h2>Keranjang Anda</h2>
                <div id="cartItems">
                    </div>
                <div class="total" id="totalPrice">Total: Rp0</div>
                
                <form id="pembelianForm" method="POST" action="{{ route('pembeli.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" id="nama" name="nama" required />
                    </div>

                    <div class="form-group">
                        <label for="telepon">Nomor Telepon (Kontak)</label>
                        <input type="text" id="telepon" name="notelp" required inputmode="numeric" />
                        <small id="teleponError" style="color: red; display: none; font-size: 0.8em;">Nomor telepon harus valid (hanya angka).</small>
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat Pengiriman</label>
                        <textarea id="alamat" name="alamat" rows="4" required></textarea>
                    </div>

                    <input type="hidden" name="dari_web" value="1">
                    <button type="submit" id="submitOrderBtn" disabled>Pesan Sekarang</button>
                </form>
            </div>
        </div>
    </div>

    <footer>
        &copy; {{ date('Y') }} Toko Kerupuk 619 - Semua Hak Cipta Dilindungi
    </footer>

    <div id="orderSuccessModal" class="modal">
        <div class="modal-content">
            <div class="icon"><i class="fas fa-check-circle"></i></div>
            <h2>Pemesanan Berhasil!</h2>
            <p>Terima kasih telah berbelanja. Pesanan Anda akan segera kami proses.</p>
            <button class="close-btn" onclick="closeModal()">OK</button>
        </div>
    </div>

    <script>
    const products = @json($products);

    const cart = [];
    const $ = (id) => document.getElementById(id);
    const productGrid = $("productGrid");
    const cartItemsEl = $("cartItems");
    const totalPriceEl = $("totalPrice");
    const pembelianForm = $("pembelianForm");
    const namaInput = $("nama");
    const teleponInput = $("telepon");
    const alamatInput = $("alamat");
    const submitOrderBtn = $("submitOrderBtn");
    const orderSuccessModal = $("orderSuccessModal");

    const renderProducts = () => {
        const imageBasePath = "{{ asset('images/') }}";
        productGrid.innerHTML = products.map(p => `
            <div class="card">
                <img src="${imageBasePath}/${p.image}" alt="${p.name}" />
                <div class="card-content">
                    <h3>${p.name}</h3>
                    <p>Rp${p.price.toLocaleString("id-ID")}</p>
                    <button class="btn" onclick='addToCart(${p.id})'>Tambah</button>
                </div>
            </div>
        `).join("");
    };

    const renderCart = () => {
        if (cart.length === 0) {
            cartItemsEl.innerHTML = '<p style="text-align: center; color: var(--secondary-text-color);">Keranjang Anda kosong.</p>';
        } else {
            cartItemsEl.innerHTML = cart.map(item => `
                <div class="cart-item">
                    <div class="cart-item-details">
                        <span class="item-name">${item.name}</span>
                        <span class="item-price">Rp${item.price.toLocaleString("id-ID")} x ${item.qty}</span>
                    </div>
                    <div class="cart-controls">
                        <button onclick="changeQty(${item.id}, -1)">-</button>
                        <span>${item.qty}</span>
                        <button onclick="changeQty(${item.id}, 1)">+</button>
                        <button class="remove-btn" onclick="changeQty(${item.id}, -${item.qty})"><i class="fas fa-trash-alt"></i></button>
                    </div>
                </div>
            `).join("");
        }

        const total = cart.reduce((sum, i) => sum + i.price * i.qty, 0);
        totalPriceEl.textContent = `Total: Rp${total.toLocaleString("id-ID")}`;
        updateSubmitButton();
    };

    const addToCart = (id) => {
        const p = products.find((x) => x.id === id);
        const item = cart.find((i) => i.id === id);

        if (item) {
            if (item.qty + 1 > p.stock) {
                alert(`Maaf, stok ${p.name} tidak cukup. Sisa stok: ${p.stock}`);
                return;
            }
            item.qty++;
        } else {
            if (p.stock < 1) {
                alert(`Maaf, stok ${p.name} habis.`);
                return;
            }
            cart.push({ ...p, qty: 1 });
        }
        renderCart();
    };

    const changeQty = (id, delta) => {
        const item = cart.find((i) => i.id === id);
        if (!item) return;

        const p = products.find((x) => x.id === id);
        if (delta > 0 && item.qty + delta > p.stock) {
            alert(`Maaf, stok ${p.name} tidak cukup. Sisa stok: ${p.stock}`);
            return;
        }

        item.qty += delta;
        if (item.qty <= 0) {
            cart.splice(cart.indexOf(item), 1);
        }
        renderCart();
    };

    const updateSubmitButton = () => {
        const isFormValid = namaInput.value.trim() && teleponInput.value.trim() && alamatInput.value.trim();
        submitOrderBtn.disabled = !(cart.length > 0 && isFormValid);
    };

    pembelianForm.addEventListener("submit", function (e) {
        e.preventDefault();
        
        this.querySelectorAll('input[name="produk_id[]"], input[name="qty[]"]').forEach(el => el.remove());
        cart.forEach(item => {
            const inputId = document.createElement("input");
            inputId.type = "hidden"; inputId.name = "produk_id[]"; inputId.value = item.id;
            
            const inputQty = document.createElement("input");
            inputQty.type = "hidden"; inputQty.name = "qty[]"; inputQty.value = item.qty;
            
            this.appendChild(inputId); this.appendChild(inputQty);
        });

        const formData = new FormData(this);
        fetch(this.action, {
            method: "POST",
            headers: { 'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value },
            body: formData
        })
        .then(res => {
            if (!res.ok) throw new Error("Gagal menyimpan data.");
            return res.json();
        })
        .then(data => {
            showModal();
            cart.length = 0;
            renderCart();
            pembelianForm.reset();
            updateSubmitButton();
        })
        .catch(err => alert("Terjadi kesalahan saat memesan. Silakan coba lagi."));
    });

    function showModal() { orderSuccessModal.style.display = "flex"; }
    function closeModal() { orderSuccessModal.style.display = "none"; }
    window.onclick = function(event) { if (event.target == orderSuccessModal) closeModal(); }

    document.addEventListener("DOMContentLoaded", () => {
        renderProducts();
        renderCart();
        [namaInput, teleponInput, alamatInput].forEach(input => input.addEventListener("input", updateSubmitButton));
        
        teleponInput.addEventListener("input", function () {
            const error = $("teleponError");
            const numericValue = this.value.replace(/[^\d]/g, "");
            if (this.value !== numericValue) {
                this.value = numericValue;
                error.style.display = "block";
            } else {
                error.style.display = "none";
            }
        });
    });
    </script>
</body>
</html>