<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artteology - Official Store & Codex</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .glass-ui {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.05);
        }

        body {
            background-color: #09090b;
            /* Zinc 950 */
            color: #ffffff;
        }

        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
</head>

<body class="font-sans antialiased min-h-screen flex flex-col selection:bg-blue-500/30">

    <!-- NAVBAR -->
    <nav class="glass-ui sticky top-0 z-50 px-4 md:px-8 py-4 flex justify-between items-center shadow-2xl">
        <div class="flex items-center gap-3 cursor-pointer" onclick="showPage('shop')">
            <div
                class="w-14 h-14 rounded-lg overflow-hidden flex items-center justify-center border border-white/10 bg-white/5">
                <img src="/mascot.png" alt="Logo" id="logo" class="w-full h-full object-cover">
            </div>
            <h1 class="text-2xl font-extrabold tracking-tight">ARTTEOLOGY</h1>
        </div>
        <div class="flex gap-4 items-center">
            <button onclick="showPage('shop')"
                class="text-[10px] font-black uppercase tracking-widest text-slate-400 hover:text-white transition">Shop</button>

        </div>
    </nav>
    <main class="flex-1 w-full">


        <section id="shop-page" class="max-w-7xl mx-auto px-4 md:px-8 py-10 block">

            <div class="grid lg:grid-cols-2 gap-12 items-center mb-24 pt-8">
                <div class="space-y-6">
                    <span
                        class="inline-block px-4 py-1.5 rounded-full bg-blue-900/30 text-blue-500 text-[10px] font-black tracking-widest uppercase border border-blue-500/20">
                        Ilustration Merch Official
                    </span>
                    <h1 class="text-5xl md:text-6xl font-extrabold tracking-tighter leading-[1.1]">
                        Temukan karya <br> seni <span class="text-blue-500">eksklusif</span> <br> untuk Anda.
                    </h1>
                    <p class="text-slate-400 text-lg leading-relaxed max-w-md">
                        Menghadirkan desain karakter menarik dan original dengan kualitas premium. Stok terbatas setiap
                        musimnya.
                    </p>
                    <button onclick="document.getElementById('category-tabs').scrollIntoView({behavior: 'smooth'})"
                        class="bg-blue-600 hover:bg-blue-500 text-white px-8 py-4 rounded-xl font-bold transition shadow-lg shadow-blue-500/20">
                        Lihat Semua Produk
                    </button>
                </div>
                <div class="relative">
                    <!-- Efek Glow di belakang gambar (Tetap konsisten) -->
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-blue-500 to-purple-600 blur-[60px] opacity-60 rounded-3xl">
                    </div>

                    <!-- Kontainer Banner -->
                    <div class="relative w-full rounded-3xl border border-white/10 shadow-2xl overflow-hidden">

                        <!-- Banner 1 (Mascot Utama - Menentukan Ukuran Kontainer) -->
                        <img id="banner-1" src="/mascot-banner.png" alt="Artteology Banner 1"
                            class="relative w-full transition-opacity duration-1000 opacity-100 object-cover">

                        <!-- Banner 2 (Menumpuk di Atas) -->
                        <img id="banner-2" src="/mascot-banner2.png" alt="Artteology Banner 2"
                            class="absolute inset-0 w-full h-full transition-opacity duration-1000 opacity-0 object-cover">

                    </div>
                </div>
            </div>
            <!-- AKHIR HERO SECTION -->

            <!-- BANNER LAYANAN DESAIN -->
            <div
                class="mb-10 relative overflow-hidden rounded-3xl border border-blue-500/20 bg-gradient-to-r from-blue-950/60 via-purple-950/40 to-blue-950/60 p-8 md:p-10">
                <div
                    class="absolute inset-0 bg-gradient-to-r from-blue-500 to-purple-600 blur-[80px] opacity-10 rounded-3xl pointer-events-none">
                </div>
                <div class="relative flex flex-col md:flex-row items-center justify-between gap-6">
                    <div class="flex-1 text-center md:text-left">
                        <span
                            class="inline-block px-3 py-1 rounded-full bg-blue-500/10 text-blue-400 text-[9px] font-black tracking-widest uppercase border border-blue-500/20 mb-3">
                            ✦ Jasa Desain Kreatif
                        </span>
                        <h3 class="text-xl md:text-2xl font-extrabold tracking-tight text-white mb-2">
                            Pelayanan lain <span class="text-blue-400">kami</span> yang <span
                                class="text-purple-400">tersedia</span>
                        </h3>
                        <p class="text-slate-400 text-sm leading-relaxed max-w-xl">
                            Kami juga melayani jasa desain <span class="text-white font-semibold">Website (company
                                profile, portofolio, galery, dan lain-lain)</span>, <span
                                class="text-white font-semibold">Logo & Brand Identity</span>, <span
                                class="text-white font-semibold">Ilustrasi Custom</span>, <span
                                class="text-white font-semibold">Poster & Banner</span>, dan masih banyak lagi. Wujudkan
                            ide kreatifmu bersama kami!
                        </p>
                    </div>
                    <div class="flex-shrink-0">
                        <a href="https://wa.me/6287754107704?text=Halo%20Artteology!%20Saya%20ingin%20konsultasi%20desain%20%F0%9F%8E%A8%0A%0ATolong%20(ceritakan%20kebutuhan%20desain%20Anda disini)"
                            target="_blank"
                            class="flex items-center gap-3 px-8 py-4 rounded-2xl bg-blue-600 hover:bg-blue-500 text-white font-black text-sm uppercase tracking-widest transition shadow-xl shadow-blue-500/25 whitespace-nowrap">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                fill="currentColor">
                                <path
                                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                            </svg>
                            Hubungi Kami
                        </a>
                    </div>
                </div>
            </div>
            <!-- AKHIR BANNER LAYANAN DESAIN -->

            <!-- Category Tabs -->
            <div id="category-tabs"
                class="flex gap-3 mb-10 overflow-x-auto pb-4 no-scrollbar items-center border-b border-white/10">
                <!-- Tabs akan di-render melalui JS -->
            </div>

            <!-- Product Grid -->
            <div id="product-container" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <!-- Produk akan di-render melalui JS -->
            </div>
        </section>

        <!-- ========================================== -->
        <!-- 2. HALAMAN CODEX (LORE & COLLECTION)       -->
        <!-- ========================================== -->
        <section id="codex-page" class="hidden max-w-7xl mx-auto px-4 md:px-8 py-10 pb-24">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-black italic tracking-tighter mb-4">THE CODEX</h2>
                <p class="text-slate-400 text-sm tracking-[0.3em] uppercase">Menelusuri asal usul setiap entitas di
                    semesta Artteology</p>
            </div>
            <div id="series-container" class="space-y-20">
                <!-- Series Codex akan di-render melalui JS -->
            </div>
        </section>

        <!-- ========================================== -->
        <!-- 3. HALAMAN LOGIN ADMIN (TERSEMBUNYI)       -->
        <!-- ========================================== -->
        <section id="login-page" class="hidden max-w-md mx-auto px-4 py-32">
            <div class="glass-ui p-8 rounded-3xl border border-blue-500/30 shadow-[0_0_50px_rgba(59,130,246,0.1)]">
                <div class="text-center mb-8">
                    <span class="text-blue-500 text-[10px] font-black uppercase tracking-[0.3em] mb-2 block">System
                        Override</span>
                    <h2 class="text-2xl font-black tracking-tight mb-2 uppercase">Akses Kreator</h2>
                    <p class="text-slate-400 text-sm">Silakan masuk untuk mengelola Artteology</p>
                </div>
                <input type="password" id="admin-pass" placeholder="Password (coba: admin123)"
                    class="w-full bg-white/5 border border-white/10 rounded-xl p-4 text-white outline-none focus:border-blue-500 transition mb-4">
                <button onclick="loginAdmin()"
                    class="w-full bg-blue-600 hover:bg-blue-500 text-white font-bold py-4 rounded-xl transition">Masuk
                    Panel</button>
            </div>
        </section>

        <!-- ========================================== -->
        <!-- 4. HALAMAN ADMIN PANEL                     -->
        <!-- ========================================== -->
        <section id="admin-page" class="hidden max-w-6xl mx-auto px-4 md:px-8 py-10 pb-24">
            <div class="flex justify-between items-center mb-12 border-b border-white/10 pb-6">
                <div>
                    <h2 class="text-3xl font-black tracking-tight uppercase">Admin Control Panel</h2>
                    <p class="text-slate-400 text-sm mt-1">Manajemen Produk dan Lore Arsip</p>
                </div>
                <button onclick="logoutAdmin()"
                    class="text-[10px] font-black uppercase tracking-widest px-6 py-3 bg-red-500/10 text-red-500 rounded-xl hover:bg-red-500 hover:text-white transition">Keluar</button>
            </div>

            <!-- Bagian 1: Manajemen Produk -->
            <!-- Bagian 1: Manajemen Produk -->
            <div class="glass-ui p-8 rounded-3xl mb-12 border border-white/5">
                <h3 class="text-xl font-black mb-6 uppercase text-blue-500">Tambah Produk Baru</h3>
                <div class="grid md:grid-cols-2 gap-6">
                    <input type="text" id="prod-name" placeholder="Nama Karakter/Produk"
                        class="bg-white/5 border border-white/10 rounded-xl p-4 text-sm outline-none">
                    <input type="number" id="prod-price" placeholder="Harga (Misal: 15000)"
                        class="bg-white/5 border border-white/10 rounded-xl p-4 text-sm outline-none">
                    <input type="text" id="prod-cat" placeholder="ID Series (Misal: little-pop)"
                        class="bg-white/5 border border-white/10 rounded-xl p-4 text-sm outline-none">
                    <input type="text" id="prod-img" placeholder="URL Gambar"
                        class="bg-white/5 border border-white/10 rounded-xl p-4 text-sm outline-none">
                    <textarea id="prod-desc" placeholder="Deskripsi Singkat Produk untuk Toko"
                        class="md:col-span-2 bg-white/5 border border-white/10 rounded-xl p-4 text-sm h-24 outline-none"></textarea>
                </div>
                <button onclick="addProduct()"
                    class="mt-6 bg-blue-600 hover:bg-blue-500 text-white font-bold py-4 px-8 rounded-xl transition text-sm uppercase tracking-widest">Simpan
                    Produk</button>

                <!-- TAMBAHKAN INI: Daftar Produk Untuk Dihapus -->
                <div class="mt-12 border-t border-white/10 pt-8">
                    <h4 class="text-xs font-black mb-6 uppercase text-slate-500 tracking-widest">Daftar Produk Saat Ini
                    </h4>
                    <div id="admin-product-list" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                        <!-- Item produk akan muncul di sini via JS -->
                    </div>
                </div>
            </div>

            <!-- Bagian 2: Manajemen Lore & Series -->
            <div class="pt-12 border-t border-white/5">
                <h3 class="text-xl font-black mb-8 tracking-tighter uppercase">Manajemen Narasi (Series & Lore)</h3>
                <div class="grid md:grid-cols-2 gap-8">
                    <!-- Form Kelola Series -->
                    <div class="glass-ui p-6 rounded-3xl border border-white/5">
                        <h4 class="text-xs font-black mb-4 uppercase text-blue-500 tracking-widest">Update Filosofi Seri
                        </h4>
                        <div class="space-y-4">
                            <input type="text" id="admin-series-id" placeholder="ID Seri (misal: little-pop)"
                                class="w-full bg-white/5 p-4 rounded-xl text-xs outline-none border border-white/10">
                            <input type="text" id="admin-series-name" placeholder="Nama Seri (misal: Little Pop)"
                                class="w-full bg-white/5 p-4 rounded-xl text-xs outline-none border border-white/10">
                            <input type="text" id="admin-series-color" placeholder="Kode Warna (misal: #ff4d6d)"
                                class="w-full bg-white/5 p-4 rounded-xl text-xs outline-none border border-white/10">
                            <textarea id="admin-series-phil" placeholder="Tulis filosofi seri di sini..."
                                class="w-full bg-white/5 p-4 rounded-xl text-xs h-32 outline-none border border-white/10"></textarea>
                            <button onclick="saveSeriesAdmin()"
                                class="w-full py-4 bg-white/10 hover:bg-white/20 rounded-xl text-[10px] font-black uppercase tracking-widest transition">Simpan/Update
                                Seri</button>
                        </div>
                    </div>

                    <!-- Form Kelola Lore Karakter -->
                    <div class="glass-ui p-6 rounded-3xl border border-white/5">
                        <h4 class="text-xs font-black mb-4 uppercase text-purple-500 tracking-widest">Update Cerita
                            Karakter</h4>
                        <div class="space-y-4">
                            <select id="admin-char-select"
                                class="w-full bg-zinc-900 p-4 rounded-xl text-xs outline-none border border-white/10 text-white">
                            </select>
                            <textarea id="admin-char-lore" placeholder="Tulis latar belakang karakter secara puitis..."
                                class="w-full bg-white/5 p-4 rounded-xl text-xs h-32 outline-none border border-white/10"></textarea>
                            <input type="text" id="admin-char-facts" placeholder="Fakta (pisahkan dengan koma)"
                                class="w-full bg-white/5 p-4 rounded-xl text-xs outline-none border border-white/10">
                            <button onclick="saveLoreAdmin()"
                                class="w-full py-4 bg-purple-600/30 hover:bg-purple-600/50 rounded-xl text-[10px] font-black uppercase tracking-widest transition">Simpan
                                Narasi Karakter</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- MODALS -->
    <div id="product-modal"
        class="fixed inset-0 z-[99] hidden items-center justify-center p-4 bg-black/90 backdrop-blur-sm">
        <div class="glass-ui max-w-2xl w-full rounded-3xl overflow-hidden relative border border-white/10 shadow-2xl">
            <button onclick="closeDetail()"
                class="absolute top-4 right-4 text-white/50 hover:text-white z-10 bg-black/50 p-2 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </button>
            <div class="grid md:grid-cols-2 h-full">
                <div class="h-64 md:h-full bg-zinc-900">
                    <img id="modal-img" src="" class="w-full h-full object-cover">
                </div>
                <div class="p-8 flex flex-col justify-center">
                    <span id="modal-cat"
                        class="text-[10px] font-bold uppercase tracking-[0.2em] text-blue-500 mb-2"></span>
                    <h2 id="modal-name" class="text-3xl font-black text-white mb-2 uppercase"></h2>
                    <p id="modal-price" class="text-2xl font-bold text-white/90 mb-4"></p>
                    <div class="border-t border-white/10 pt-4 mb-6">
                        <p id="modal-desc" class="text-slate-400 text-sm leading-relaxed"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="lore-modal"
        class="fixed inset-0 z-[100] hidden items-center justify-center p-4 bg-black/95 backdrop-blur-md">
        <div class="max-w-4xl w-full grid md:grid-cols-2 gap-8 md:gap-12 relative">
            <div class="relative aspect-square rounded-3xl overflow-hidden border border-white/10 shadow-2xl">
                <img id="lore-img" src="" class="w-full h-full object-cover">
                <div id="lore-color-glow" class="absolute inset-0 opacity-20 mix-blend-overlay"></div>
            </div>
            <div class="flex flex-col justify-center">
                <span id="lore-series-name"
                    class="text-blue-500 text-[10px] font-black tracking-[0.4em] uppercase mb-4"></span>
                <h2 id="lore-char-name" class="text-5xl font-black italic mb-6 tracking-tighter uppercase"></h2>
                <div class="bg-white/5 p-6 rounded-2xl border-l-4 border-blue-500 mb-8" id="lore-border-glow">
                    <p id="lore-story-text" class="text-slate-300 italic leading-relaxed text-lg font-serif"></p>
                </div>
                <div class="space-y-3">
                    <h4 class="text-[10px] font-black uppercase text-slate-500 tracking-widest">Fakta Tersembunyi</h4>
                    <ul id="lore-facts-list" class="text-sm text-slate-400 space-y-2"></ul>
                </div>
                <button onclick="closeLore()"
                    class="mt-12 w-max text-xs font-black uppercase tracking-widest text-white/40 hover:text-white transition flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2">
                        <line x1="19" y1="12" x2="5" y2="12"></line>
                        <polyline points="12 19 5 12 12 5"></polyline>
                    </svg>
                    Tutup Arsip
                </button>
            </div>
        </div>
    </div>

    <!-- LOGIKA JAVASCRIPT -->
    <script>
        let products = JSON.parse(localStorage.getItem('arteology_products')) || [
            { id: 1, name: 'Melody', price: 15000, category: 'little-pop', img: 'https://via.placeholder.com/400x400/111/fff?text=Melody', desc: 'Gantungan kunci akrilik karakter Melody. Cocok untuk tas dan kunci.' },
            { id: 2, name: 'Piyo', price: 15000, category: 'little-pop', img: 'https://via.placeholder.com/400x400/222/fff?text=Piyo', desc: 'Gantungan kunci Piyo si buah manis.' },
            { id: 3, name: 'Emora', price: 15000, category: 'elements', img: 'https://via.placeholder.com/400x400/333/fff?text=Emora', desc: 'Karakter elemen bunga yang elegan.' }
        ];

        let seriesData = JSON.parse(localStorage.getItem('arteology_series')) || [
            { id: 'little-pop', name: 'Little Pop', philosophy: 'Manifestasi dari keceriaan yang hilang di dunia orang dewasa. Setiap karakter mewakili satu emosi positif yang tulus.', color: '#ff4d6d' },
            { id: 'elements', name: 'The Elements', philosophy: 'Kekuatan purba yang menyeimbangkan alam semesta Artteology. Tanpa mereka, warna akan pudar dari dunia.', color: '#4cc9f0' }
        ];

        let loreData = JSON.parse(localStorage.getItem('arteology_lore')) || [
            { charId: 1, story: 'Dilahirkan dari pecahan kepingan lagu yang tak pernah selesai. Melody berkelana untuk mengumpulkan nada-nada yang hilang di semesta.', facts: ['Takut akan kesunyian', 'Bisa mengubah awan menjadi permen kapas'] },
            { charId: 3, story: 'Roh pelindung taman abadi. Kelopaknya dipercaya mampu menyembuhkan memori buruk yang merusak jiwa manusia.', facts: ['Aromanya berubah sesuai emosi penatapnya'] }
        ];

        // --- CEK AKSES RAHASIA ADMIN ---
        window.addEventListener('load', checkSecretAccess);
        window.addEventListener('hashchange', checkSecretAccess);

        function checkSecretAccess() {
            // Jika URL berakhir dengan /#access=admin012e1e1weqdasdadada
            if (window.location.hash === '#access=admin012e1e1weqdasdadada') {
                showPage('login');
            }
        }

        function showPage(pageId) {
            // Cegah akses manual ke login/admin jika tidak ada hash rahasia
            if ((pageId === 'login' || pageId === 'admin') && window.location.hash !== '#access=admin012e1e1weqdasdadada') {
                return;
            }

            ['shop-page', 'codex-page', 'login-page', 'admin-page'].forEach(id => {
                document.getElementById(id).classList.add('hidden');
            });
            document.getElementById(pageId + '-page').classList.remove('hidden');

            if (pageId === 'shop') initShop();
            if (pageId === 'codex') renderCodex();
            if (pageId === 'admin') updateAdminSelects();
        }

        function initShop() {
            updateCategoryUI('all');
            renderShop(products);
        }

        function updateCategoryUI(activeCat) {
            const tabsContainer = document.getElementById('category-tabs');
            let categories = ['all'];
            seriesData.forEach(s => categories.push(s.id));

            let html = categories.map(cat => {
                const isActive = cat === activeCat;
                const label = cat === 'all' ? 'Semua Produk' : seriesData.find(s => s.id === cat).name;
                return `
                    <button onclick="filterCategory('${cat}')" 
                        class="px-5 py-2 rounded-full text-xs font-black uppercase tracking-widest whitespace-nowrap transition border ${isActive ? 'bg-blue-600 text-white border-blue-600' : 'bg-transparent text-slate-400 border-white/10 hover:border-white/30 hover:text-white'}">
                        ${label}
                    </button>
                `;
            }).join('');

            html += `
                <div class="flex-1 min-w-[20px]"></div>
                <button onclick="showPage('codex')" class="text-xs font-black uppercase tracking-widest px-6 py-2 bg-white/5 rounded-full hover:bg-white/10 transition border border-white/10 whitespace-nowrap text-blue-400 hover:text-blue-300">
                    Lore
                </button>
            `;
            tabsContainer.innerHTML = html;
        }

        function filterCategory(cat) {
            updateCategoryUI(cat);
            if (cat === 'all') {
                renderShop(products);
            } else {
                renderShop(products.filter(p => p.category === cat));
            }
        }

        function renderShop(data) {
            const container = document.getElementById('product-container');
            const waNumber = "6287754107704";

            container.innerHTML = data.map(p => {
                const waMessage = encodeURIComponent(`Halo Artteology, saya tertarik untuk memesan produk: ${p.name}\nHarga: Rp ${p.price.toLocaleString('id-ID')}`);
                const seriesName = seriesData.find(s => s.id === p.category)?.name || p.category;

                return `
                    <div class="glass-ui rounded-3xl overflow-hidden group flex flex-col border border-white/5">
                        <div class="h-64 relative overflow-hidden bg-zinc-900 p-4">
                            <img src="${p.img}" class="w-full h-full object-contain group-hover:scale-110 transition duration-700">
                        </div>
                        <div class="p-6 flex flex-col flex-1 bg-black/40">
                            <div class="mb-5">
                                <span class="text-[10px] font-black uppercase tracking-[0.2em] text-blue-500 mb-1 block">${seriesName}</span>
                                <h3 class="text-xl font-black text-white mb-1 uppercase truncate">${p.name}</h3>
                                <p class="text-white/80 font-bold text-sm">Rp ${parseInt(p.price).toLocaleString('id-ID')}</p>
                            </div>
                            <div class="grid grid-cols-2 gap-3 mt-auto">
                                <button onclick="showDetail('${p.name}', '${p.img}', '${seriesName}', '${p.price}', '${encodeURIComponent(p.desc)}')" 
                                        class="py-3 rounded-xl border border-white/10 text-white text-[10px] font-black uppercase tracking-widest hover:bg-white/10 transition text-center">
                                    Detail
                                </button>
                                <a href="https://wa.me/${waNumber}?text=${waMessage}" target="_blank"
                                   class="py-3 rounded-xl bg-blue-600 hover:bg-blue-500 text-white text-[10px] font-black uppercase tracking-widest transition text-center flex items-center justify-center">
                                    Pesan
                                </a>
                            </div>
                        </div>
                    </div>`;
            }).join('');
        }

        function renderCodex() {
            const container = document.getElementById('series-container');

            container.innerHTML = seriesData.map(series => {
                const seriesChars = products.filter(p => p.category === series.id);

                return `
                    <div class="relative p-8 md:p-12 rounded-[3rem] overflow-hidden border border-white/5 group">
                        <div class="absolute inset-0 bg-gradient-to-br from-zinc-900 to-black -z-10"></div>
                        <div class="absolute top-0 right-0 w-96 h-96 blur-[100px] rounded-full opacity-20" style="background-color: ${series.color}"></div>
                        
                        <div class="grid lg:grid-cols-3 gap-12 items-center">
                            <div class="lg:col-span-1">
                                <span class="text-[10px] font-black tracking-[0.4em] uppercase mb-2 block text-slate-500">Koleksi</span>
                                <h3 class="text-5xl font-black italic mb-6 uppercase tracking-tighter" style="color: ${series.color}">${series.name}</h3>
                                <p class="text-slate-400 leading-relaxed text-sm mb-6 font-serif italic border-l-2 pl-4" style="border-color: ${series.color}">${series.philosophy}</p>
                                <div class="text-[10px] font-black text-slate-500 uppercase tracking-widest bg-white/5 inline-block px-4 py-2 rounded-full border border-white/5">Manifestasi: ${seriesChars.length} Karakter</div>
                            </div>
                            
                            <div class="lg:col-span-2 grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4">
                                ${seriesChars.map(c => `
                                    <div onclick="openLore(${c.id})" class="cursor-pointer group/item flex flex-col items-center">
                                        <div class="w-full aspect-square rounded-2xl overflow-hidden mb-3 border border-white/10 group-hover/item:border-white/50 transition bg-zinc-900 p-2 relative">
                                            <img src="${c.img}" class="w-full h-full object-contain grayscale group-hover/item:grayscale-0 transition duration-500">
                                            <div class="absolute inset-0 bg-black/50 group-hover/item:bg-transparent transition"></div>
                                        </div>
                                        <span class="text-[10px] font-black uppercase tracking-widest block text-center opacity-50 group-hover/item:opacity-100 transition">${c.name}</span>
                                    </div>
                                `).join('')}
                            </div>
                        </div>
                    </div>
                `;
            }).join('');
        }

        function showDetail(name, img, cat, price, desc) {
            const modal = document.getElementById('product-modal');
            document.getElementById('modal-img').src = img;
            document.getElementById('modal-name').innerText = name;
            document.getElementById('modal-cat').innerText = cat;
            document.getElementById('modal-price').innerText = "Rp " + parseInt(price).toLocaleString('id-ID');
            document.getElementById('modal-desc').innerText = decodeURIComponent(desc);

            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }

        function closeDetail() {
            const modal = document.getElementById('product-modal');
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }

        function openLore(prodId) {
            const prod = products.find(p => p.id === prodId);
            const lore = loreData.find(l => l.charId === prodId) || { story: "Cerita karakter ini sedang dalam penulisan oleh para dewa Artteology.", facts: ["Masih menjadi misteri"] };
            const series = seriesData.find(s => s.id === prod.category) || { name: 'Unknown Series', color: '#fff' };

            document.getElementById('lore-img').src = prod.img;
            document.getElementById('lore-char-name').innerText = prod.name;
            document.getElementById('lore-series-name').innerText = `Origin: ${series.name}`;
            document.getElementById('lore-story-text').innerText = lore.story;
            document.getElementById('lore-facts-list').innerHTML = lore.facts.map(f => `<li>• ${f}</li>`).join('');

            document.getElementById('lore-color-glow').style.backgroundColor = series.color;
            document.getElementById('lore-border-glow').style.borderColor = series.color;
            document.getElementById('lore-series-name').style.color = series.color;

            const modal = document.getElementById('lore-modal');
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }

        function closeLore() {
            const modal = document.getElementById('lore-modal');
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }

        function loginAdmin() {
            if (document.getElementById('admin-pass').value === 'Tempepenyet1@') {
                showPage('admin');
                document.getElementById('admin-pass').value = '';
            } else {
                alert('Password Salah!');
            }
        }

        function logoutAdmin() {
            window.location.hash = ''; // Hapus kunci rahasia dari URL saat keluar
            showPage('shop');
        }

        function addProduct() {
            const id = Date.now();
            const name = document.getElementById('prod-name').value;
            const price = document.getElementById('prod-price').value;
            const category = document.getElementById('prod-cat').value.toLowerCase();
            const img = document.getElementById('prod-img').value;
            const desc = document.getElementById('prod-desc').value;

            if (!name || !price || !category) return alert("Lengkapi data penting!");

            products.push({ id, name, price: parseInt(price), category, img, desc });
            localStorage.setItem('arteology_products', JSON.stringify(products));

            if (!seriesData.find(s => s.id === category)) {
                seriesData.push({ id: category, name: category.toUpperCase(), philosophy: 'Filosofi belum ditentukan.', color: '#444' });
                localStorage.setItem('arteology_series', JSON.stringify(seriesData));
            }

            alert('Produk Berhasil Ditambahkan!');
            document.getElementById('prod-name').value = '';
            document.getElementById('prod-price').value = '';
            document.getElementById('prod-img').value = '';
            document.getElementById('prod-desc').value = '';

            updateAdminSelects();
        }

        // Tambahkan fungsi ini di dalam script Anda
        function renderAdminProducts() {
            const container = document.getElementById('admin-product-list');
            if (!container) return;

            container.innerHTML = products.map(p => `
                <div class="flex items-center justify-between p-4 bg-white/5 rounded-2xl border border-white/10">
                    <div class="flex items-center gap-3">
                        <img src="${p.img}" class="w-10 h-10 rounded-lg object-cover bg-zinc-800">
                        <div>
                            <p class="text-xs font-bold text-white uppercase">${p.name}</p>
                            <p class="text-[10px] text-slate-500 uppercase">${p.category}</p>
                        </div>
                    </div>
                    <button onclick="deleteProduct(${p.id})" class="p-2 hover:bg-red-500/20 text-red-500 rounded-lg transition">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                    </button>
                </div>
            `).join('');
        }

        function deleteProduct(id) {
            if (confirm("Hapus produk ini secara permanen dari database?")) {
                products = products.filter(p => p.id !== id);
                localStorage.setItem('arteology_products', JSON.stringify(products));

                // Refresh tampilan
                renderAdminProducts();
                updateAdminSelects();
                initShop();
                alert("Produk berhasil dihapus.");
            }
        }

        // Cari fungsi updateAdminSelects() lama Anda dan tambahkan pemanggilan renderAdminProducts()
        function updateAdminSelects() {
            const charSelect = document.getElementById('admin-char-select');
            charSelect.innerHTML = products.map(p => `<option value="${p.id}">${p.name} (${p.category})</option>`).join('');
            renderAdminProducts(); // Tambahkan baris ini
        }


        function saveSeriesAdmin() {
            const id = document.getElementById('admin-series-id').value;
            const name = document.getElementById('admin-series-name').value;
            const color = document.getElementById('admin-series-color').value;
            const philosophy = document.getElementById('admin-series-phil').value;

            if (!id || !name) return alert("ID dan Nama Seri harus diisi!");

            const existingIndex = seriesData.findIndex(s => s.id === id);
            if (existingIndex >= 0) {
                seriesData[existingIndex] = { id, name, color, philosophy };
            } else {
                seriesData.push({ id, name, color, philosophy });
            }

            localStorage.setItem('arteology_series', JSON.stringify(seriesData));
            alert("Seri berhasil disimpan!");
        }

        function saveLoreAdmin() {
            const charId = parseInt(document.getElementById('admin-char-select').value);
            const story = document.getElementById('admin-char-lore').value;
            const factsStr = document.getElementById('admin-char-facts').value;
            const facts = factsStr.split(',').map(f => f.trim()).filter(f => f);

            const existingIndex = loreData.findIndex(l => l.charId === charId);
            if (existingIndex >= 0) {
                loreData[existingIndex] = { charId, story, facts };
            } else {
                loreData.push({ charId, story, facts });
            }

            localStorage.setItem('arteology_lore', JSON.stringify(loreData));
            alert("Cerita karakter berhasil disimpan!");
        }

        document.addEventListener('DOMContentLoaded', function () {
            const b1 = document.getElementById('banner-1');
            const b2 = document.getElementById('banner-2');
            let isFirstVisible = true;

            function swap() {
                if (isFirstVisible) {
                    b1.classList.replace('opacity-100', 'opacity-0');
                    b2.classList.replace('opacity-0', 'opacity-100');
                } else {
                    b2.classList.replace('opacity-100', 'opacity-0');
                    b1.classList.replace('opacity-0', 'opacity-100');
                }
                isFirstVisible = !isFirstVisible;
            }

            setInterval(swap, 5000);
        });

        // Inisialisasi
        initShop();
        checkSecretAccess(); // Cek URL saat pertama kali dimuat
    </script>
</body>

</html>