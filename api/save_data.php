<?php
// ============================================================
// save_data.php — Handler simpan data ke products.json
// ============================================================
header('Content-Type: application/json');

// Keamanan: hanya terima POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['status' => 'error', 'message' => 'Method tidak diizinkan.']);
    exit;
}

$DB_FILE = __DIR__ . '/products.json';

// Baca database
function readDB($file) {
    if (!file_exists($file)) {
        return ['products' => [], 'series' => [], 'lore' => []];
    }
    $content = file_get_contents($file);
    return json_decode($content, true);
}

// Tulis database
function writeDB($file, $data) {
    $json = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    return file_put_contents($file, $json) !== false;
}

// Ambil action dari request
$action = $_POST['action'] ?? '';
$db     = readDB($DB_FILE);

// ── TAMBAH PRODUK ────────────────────────────────────────────
if ($action === 'add_product') {
    $name     = trim($_POST['name']     ?? '');
    $price    = intval($_POST['price']  ?? 0);
    $category = strtolower(trim($_POST['category'] ?? ''));
    $img      = trim($_POST['img']      ?? '');
    $desc     = trim($_POST['desc']     ?? '');

    if (!$name || !$price || !$category) {
        echo json_encode(['status' => 'error', 'message' => 'Data tidak lengkap.']);
        exit;
    }

    // Buat ID unik (timestamp)
    $id = time();

    $db['products'][] = [
        'id'       => $id,
        'name'     => $name,
        'price'    => $price,
        'category' => $category,
        'img'      => $img,
        'desc'     => $desc
    ];

    // Jika series belum ada, tambahkan otomatis
    $seriesExists = false;
    foreach ($db['series'] as $s) {
        if ($s['id'] === $category) { $seriesExists = true; break; }
    }
    if (!$seriesExists) {
        $db['series'][] = [
            'id'          => $category,
            'name'        => strtoupper($category),
            'philosophy'  => 'Filosofi belum ditentukan.',
            'color'       => '#888888'
        ];
    }

    if (writeDB($DB_FILE, $db)) {
        echo json_encode(['status' => 'success', 'message' => 'Produk berhasil ditambahkan!', 'id' => $id]);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Gagal menyimpan ke database.']);
    }
    exit;
}

// ── HAPUS PRODUK ─────────────────────────────────────────────
if ($action === 'delete_product') {
    $id = intval($_POST['id'] ?? 0);
    if (!$id) {
        echo json_encode(['status' => 'error', 'message' => 'ID tidak valid.']);
        exit;
    }

    $db['products'] = array_values(array_filter($db['products'], fn($p) => $p['id'] !== $id));

    if (writeDB($DB_FILE, $db)) {
        echo json_encode(['status' => 'success', 'message' => 'Produk berhasil dihapus.']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Gagal menyimpan ke database.']);
    }
    exit;
}

// ── SIMPAN / UPDATE SERIES ───────────────────────────────────
if ($action === 'save_series') {
    $id          = trim($_POST['id']          ?? '');
    $name        = trim($_POST['name']        ?? '');
    $color       = trim($_POST['color']       ?? '#888888');
    $philosophy  = trim($_POST['philosophy']  ?? '');

    if (!$id || !$name) {
        echo json_encode(['status' => 'error', 'message' => 'ID dan Nama Seri harus diisi.']);
        exit;
    }

    $found = false;
    foreach ($db['series'] as &$s) {
        if ($s['id'] === $id) {
            $s['name']       = $name;
            $s['color']      = $color;
            $s['philosophy'] = $philosophy;
            $found = true;
            break;
        }
    }
    if (!$found) {
        $db['series'][] = ['id' => $id, 'name' => $name, 'color' => $color, 'philosophy' => $philosophy];
    }

    if (writeDB($DB_FILE, $db)) {
        echo json_encode(['status' => 'success', 'message' => 'Seri berhasil disimpan!']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Gagal menyimpan ke database.']);
    }
    exit;
}

// ── SIMPAN LORE KARAKTER ─────────────────────────────────────
if ($action === 'save_lore') {
    $charId   = intval($_POST['charId']   ?? 0);
    $story    = trim($_POST['story']      ?? '');
    $factsRaw = trim($_POST['facts']      ?? '');
    $facts    = array_values(array_filter(array_map('trim', explode(',', $factsRaw))));

    if (!$charId) {
        echo json_encode(['status' => 'error', 'message' => 'Karakter tidak valid.']);
        exit;
    }

    $found = false;
    foreach ($db['lore'] as &$l) {
        if ($l['charId'] === $charId) {
            $l['story'] = $story;
            $l['facts'] = $facts;
            $found = true;
            break;
        }
    }
    if (!$found) {
        $db['lore'][] = ['charId' => $charId, 'story' => $story, 'facts' => $facts];
    }

    if (writeDB($DB_FILE, $db)) {
        echo json_encode(['status' => 'success', 'message' => 'Cerita karakter berhasil disimpan!']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Gagal menyimpan ke database.']);
    }
    exit;
}

// Action tidak dikenal
echo json_encode(['status' => 'error', 'message' => 'Action tidak dikenal: ' . htmlspecialchars($action)]);
?>
