<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artteology - Katalog Merch Karakter Eksklusif</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;800&display=swap');

        :root {
            --bg-dark: #0a0a0a;
            --accent-blue: #3b82f6;
        }

        body {
            background-color: var(--bg-dark);
            color: #ffffff;
            font-family: 'Plus Jakarta Sans', sans-serif;
            scroll-behavior: smooth;
        }

        .hero-title {
            line-height: 1.1;
            letter-spacing: -0.05em;
        }

        .glass-ui {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.08);
        }

        .btn-primary {
            background: var(--accent-blue);
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            box-shadow: 0 0 20px rgba(59, 130, 246, 0.5);
            transform: translateY(-2px);
        }

        .magic-shadow {
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .magic-shadow:active {
            box-shadow:
                -15px -15px 30px rgba(59, 130, 246, 0.6),
                15px -15px 30px rgba(239, 68, 68, 0.6),
                0px 15px 30px rgba(16, 185, 129, 0.6);
            transform: scale(0.98);
        }

        #prod-category option {
            background-color: #1a1a1a;
            color: white;
        }

        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #111;
        }

        ::-webkit-scrollbar-thumb {
            background: #333;
            border-radius: 10px;
        }
    </style>
</head>

<body class="antialiased">

    <!-- Greeting Overlay -->
    <div id="greeting-overlay"
        class="fixed inset-0 z-[100] flex items-center justify-center bg-black transition-opacity duration-1000">
        <div class="text-center">
            <h1 class="text-4xl md:text-6xl font-black italic tracking-tighter mb-4 animate-pulse">ARTTEOLOGY</h1>
            <p class="text-slate-400 text-sm tracking-[0.5em] uppercase">Selamat Datang di Semesta Kreatif</p>
        </div>
    </div>

    <!-- Navbar -->
    <nav class="fixed w-full top-0 z-50 glass-ui border-b border-white/5">
        <div class="max-w-7xl mx-auto px-4 md:px-8 py-4 flex justify-between items-center">
            <div class="flex items-center gap-3 cursor-pointer" onclick="showPage('shop')">
                <!-- Penggantian Logo Teks ke Image -->
                <div
                    class="w-10 h-10 rounded-lg overflow-hidden flex items-center justify-center border border-white/10">
                    <img src="mascot.png" alt="Artteology Logo" class="w-full h-full object-cover">
                </div>
                <h1 class="text-lg font-extrabold tracking-tight">ARTTEOLOGY</h1>
            </div>
            <div class="flex gap-4 md:gap-8 items-center">
                <button onclick="showPage('shop')"
                    class="text-xs font-bold hover:text-blue-500 transition uppercase tracking-widest">Koleksi</button>
                <button id="navLogoutBtn" onclick="logout()"
                    class="hidden text-red-500 text-[10px] font-black uppercase tracking-widest border border-red-500/30 px-3 py-1 rounded">Keluar
                    Sistem</button>
            </div>
        </div>
    </nav>
    Penjelasan Perubaha

    <main class="pt-20">
        <!-- SHOP PAGE -->
        <section id="shop-page">
            <div
                class="max-w-7xl mx-auto px-4 md:px-8 py-16 md:py-24 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <span
                        class="inline-block px-3 py-1 bg-blue-600/10 text-blue-500 text-[10px] font-black tracking-widest uppercase rounded-full mb-6">Studio
                        Merch Orisinal</span>
                    <h2 class="hero-title text-5xl md:text-7xl font-black mb-6">Temukan karya seni <span
                            class="text-blue-600">eksklusif</span> untuk koleksi Anda.</h2>
                    <p class="text-slate-400 text-lg md:text-xl max-w-md mb-8">Menghadirkan desain karakter original
                        dengan kualitas premium. Stok terbatas setiap musimnya.</p>
                    <div class="flex gap-4">
                        <a href="#collections" class="btn-primary px-8 py-4 rounded-full font-bold text-sm">Lihat Semua
                            Produk</a>
                    </div>
                </div>
                <div class="relative group cursor-pointer">
                    <div
                        class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-purple-600 rounded-2xl blur opacity-25 group-hover:opacity-50 transition">
                    </div>
                    <div class="relative glass-ui rounded-2xl overflow-hidden aspect-video magic-shadow">
                        <img src="https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?q=80&w=1964"
                            class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition duration-700"
                            alt="Hero Image">
                    </div>
                </div>
            </div>

            <div id="collections" class="max-w-7xl mx-auto px-4 md:px-8 mb-12">
                <div id="category-tabs" class="flex flex-wrap gap-2 md:gap-4 border-b border-white/5 pb-6">
                    <!-- Tabs diisi otomatis oleh JS -->
                </div>
            </div>

            <div class="max-w-7xl mx-auto px-4 md:px-8 pb-24">
                <div id="product-container" class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-6"></div>
            </div>
        </section>

        <!-- LOGIN PAGE -->
        <section id="login-page" class="hidden max-w-md mx-auto mt-24 px-6 pb-24">
            <div class="glass-ui p-10 rounded-3xl border border-white/10 shadow-2xl">
                <h2 class="text-2xl font-black italic mb-8 tracking-tighter uppercase">Autentikasi Admin</h2>
                <div class="space-y-4">
                    <input type="text" id="username" placeholder="ID AKSES"
                        class="w-full bg-white/5 border border-white/10 rounded-xl p-4 outline-none focus:border-blue-500 text-sm font-mono transition">
                    <input type="password" id="password" placeholder="KATA SANDI"
                        class="w-full bg-white/5 border border-white/10 rounded-xl p-4 outline-none focus:border-blue-500 text-sm font-mono transition">
                    <button onclick="login()"
                        class="btn-primary w-full py-4 rounded-xl font-black text-xs uppercase tracking-[0.2em]">Masuk
                        ke Panel</button>
                </div>
            </div>
        </section>

        <!-- ADMIN PANEL -->
        <section id="admin-page" class="hidden max-w-7xl mx-auto px-4 md:px-8 py-10 pb-24">
            <div class="flex justify-between items-center mb-12">
                <h2 class="text-4xl font-black tracking-tighter">PUSAT DATA</h2>
                <button onclick="openForm()"
                    class="btn-primary px-6 py-2 rounded-full text-[10px] font-black uppercase tracking-widest"> +
                    Tambah Produk </button>
            </div>

            <div id="product-form" class="hidden glass-ui p-8 rounded-3xl mb-12 border-blue-500/20">
                <form id="upload-form" enctype="multipart/form-data">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <input type="text" name="prod-name" id="prod-name" placeholder="Nama Produk"
                            class="bg-white/5 p-4 rounded-xl outline-none border border-white/5 text-sm">
                        <input type="number" name="prod-price" id="prod-price" placeholder="Harga (IDR)"
                            class="bg-white/5 p-4 rounded-xl outline-none border border-white/5 text-sm">

                        <div class="flex gap-2">
                            <select name="prod-category" id="prod-category"
                                class="flex-1 bg-white/10 p-4 rounded-xl outline-none border border-white/10 text-sm">
                                <!-- Kategori dari JS -->
                            </select>
                        </div>

                        <div class="flex gap-2">
                            <input type="text" id="new-cat-input" placeholder="Nama Kategori Baru..."
                                class="flex-1 bg-white/5 p-4 rounded-xl outline-none border border-white/5 text-sm">
                            <button type="button" onclick="addNewCategory()"
                                class="bg-white/10 hover:bg-white/20 px-4 rounded-xl text-[10px] font-bold">TAMBAH</button>
                        </div>

                        <input type="file" name="prod-img-file" id="prod-img-file" accept="image/*"
                            class="bg-white/5 p-3 rounded-xl outline-none text-xs border border-white/5 cursor-pointer">
                        <textarea name="prod-desc" id="prod-desc" placeholder="Deskripsi Singkat Produk"
                            class="md:col-span-2 bg-white/5 p-4 rounded-xl outline-none border border-white/5 text-sm h-32"></textarea>
                    </div>
                    <div class="flex justify-end gap-4 mt-6">
                        <button type="button" onclick="closeForm()"
                            class="text-xs font-bold opacity-50 uppercase">Batalkan</button>
                        <button type="button" onclick="handleFileUpload()"
                            class="btn-primary px-10 py-3 rounded-full font-black text-xs uppercase">Simpan
                            Perubahan</button>
                    </div>
                </form>
            </div>

            <div class="glass-ui rounded-2xl overflow-hidden border border-white/5 shadow-2xl">
                <table class="w-full text-left">
                    <thead class="bg-white/5">
                        <tr>
                            <th class="p-6 text-[10px] font-black uppercase text-slate-500 tracking-[0.2em]">Nama Aset
                            </th>
                            <th class="p-6 text-[10px] font-black uppercase text-slate-500 tracking-[0.2em]">Kategori
                            </th>
                            <th class="p-6 text-[10px] font-black uppercase text-slate-500 tracking-[0.2em]">Harga Pasar
                            </th>
                            <th class="p-6 text-right text-[10px] font-black uppercase text-slate-500 tracking-[0.2em]">
                                Aksi Sistem</th>
                        </tr>
                    </thead>
                    <tbody id="admin-table-body" class="divide-y divide-white/5"></tbody>
                </table>
            </div>
        </section>
    </main>

    <script>
        const HIDDEN_TOKEN = "admin09uoihubjno0huigbhjiopi-19uhgib";

        let products = JSON.parse(localStorage.getItem('arteology_v3')) || [
            { id: 1, name: "Neon Valkyrie", category: "karakter", price: 125000, desc: "Seri karakter original dengan estetika cyberpunk.", img: "https://images.unsplash.com/photo-1578632738980-420af542dd3e" }
        ];

        let categories = JSON.parse(localStorage.getItem('arteology_cats')) || ['karakter', 'terbaru', 'bundel'];

        window.onload = () => {
            updateCategoryUI();
            setTimeout(() => {
                const overlay = document.getElementById('greeting-overlay');
                overlay.style.opacity = '0';
                setTimeout(() => overlay.classList.add('hidden'), 1000);
            }, 1500);

            const urlParams = new URLSearchParams(window.location.search);
            if (urlParams.get('access') === HIDDEN_TOKEN) {
                showPage('login');
                window.history.replaceState({}, document.title, window.location.pathname);
            } else {
                filterByCategory('all');
            }
        };

        function addNewCategory() {
            const val = document.getElementById('new-cat-input').value.trim().toLowerCase();
            if (val && !categories.includes(val)) {
                categories.push(val);
                localStorage.setItem('arteology_cats', JSON.stringify(categories));
                updateCategoryUI();
                document.getElementById('new-cat-input').value = '';
            }
        }

        function updateCategoryUI() {
            const select = document.getElementById('prod-category');
            const tabs = document.getElementById('category-tabs');
            select.innerHTML = categories.map(c => `<option value="${c}">${c.toUpperCase()}</option>`).join('');
            tabs.innerHTML = `<button onclick="filterByCategory('all')" class="text-xs font-black uppercase tracking-widest px-4 py-2 transition text-blue-500">Semua Karya</button>` +
                categories.map(c => `<button onclick="filterByCategory('${c}')" class="text-slate-500 text-xs font-black uppercase tracking-widest px-4 py-2 transition hover:text-white">${c}</button>`).join('');
        }

        function handleFileUpload() {
            const form = document.getElementById('upload-form');
            const formData = new FormData(form);
            const fileInput = document.getElementById('prod-img-file');

            if (!fileInput.files[0]) return alert('GAMBAR_WAJIB_ADA');

            fetch('upload_handler.php', { method: 'POST', body: formData })
                .then(res => res.json())
                .then(data => {
                    if (data.status === 'success') {
                        products.push({
                            id: Date.now(),
                            name: document.getElementById('prod-name').value,
                            price: parseInt(document.getElementById('prod-price').value),
                            category: document.getElementById('prod-category').value,
                            desc: document.getElementById('prod-desc').value,
                            img: data.file_path
                        });
                        localStorage.setItem('arteology_v3', JSON.stringify(products));
                        closeForm();
                        renderAdminTable();
                        renderShop(products);
                    } else { alert('Gagal: ' + data.message); }
                });
        }

        function showPage(pageId) {
            ['shop-page', 'login-page', 'admin-page'].forEach(p => document.getElementById(p).classList.add('hidden'));
            document.getElementById(pageId + '-page').classList.remove('hidden');
            if (pageId === 'admin') renderAdminTable();
        }

        function filterByCategory(cat) {
            const filtered = cat === 'all' ? products : products.filter(p => p.category === cat);
            renderShop(filtered);
        }

        function renderShop(data) {
            const container = document.getElementById('product-container');
            container.innerHTML = data.map(p => `
                <div class="glass-ui rounded-2xl overflow-hidden group">
                    <div class="h-80 relative overflow-hidden bg-zinc-900">
                        <img src="${p.img}" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="font-extrabold text-lg tracking-tight truncate mr-2 uppercase">${p.name}</h3>
                            <span class="text-blue-500 font-black text-xs">Rp ${p.price.toLocaleString('id-ID')}</span>
                        </div>
                        <p class="text-slate-500 text-xs line-clamp-1">${p.desc}</p>
                    </div>
                </div>`).join('');
        }

        function login() {
            const user = document.getElementById('username').value;
            const pass = document.getElementById('password').value;
            if (user === 'artteology_master' && pass === 'creativestudio2026') {
                document.getElementById('navLogoutBtn').classList.remove('hidden');
                showPage('admin');
            } else { alert('AKSES_DITOLAK'); }
        }

        function logout() { window.location.href = window.location.pathname; }

        function renderAdminTable() {
            const tbody = document.getElementById('admin-table-body');
            tbody.innerHTML = products.map(p => `
                <tr class="hover:bg-white/5 transition">
                    <td class="p-6 font-bold text-sm italic">${p.name}</td>
                    <td class="p-6 text-[10px] uppercase text-blue-500 font-black">${p.category}</td>
                    <td class="p-6 text-sm font-mono">${p.price.toLocaleString('id-ID')}</td>
                    <td class="p-6 text-right">
                        <button onclick="deleteProd(${p.id})" class="text-red-500 opacity-50 hover:opacity-100 text-[10px] font-black uppercase tracking-widest">Hapus</button>
                    </td>
                </tr>`).join('');
        }

        function deleteProd(id) {
            if (confirm('HAPUS_DATA_INI?')) {
                products = products.filter(p => p.id !== id);
                localStorage.setItem('arteology_v3', JSON.stringify(products));
                renderAdminTable();
            }
        }

        function openForm() { document.getElementById('product-form').classList.remove('hidden'); }
        function closeForm() { document.getElementById('product-form').classList.add('hidden'); }
    </script>
</body>

</html>