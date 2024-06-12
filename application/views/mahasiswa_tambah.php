<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa oleh Nama Dan NIM</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Form Tambah Mahasiswa</h1>
        <form action="<?= site_url('mahasiswa/simpan') ?>" method="post">
            <div class="form-group">
                <label for="nim">NIM</label>
                <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukkan NIM">
            </div>
            <div class="form-group">
                <label for="nama_mhs">Nama Mahasiswa</label>
                <input type="text" class="form-control" id="nama_mhs" name="nama_mhs" placeholder="Masukkan Nama Mahasiswa">
            </div>
            <div class="form-group">
                <label for="id_prodi">Program Studi</label>
                <select name="id_prodi" id="id_prodi" class="form-control" required>
                    <option value="">Pilih Program Studi</option>
                    <?php foreach ($prodi as $ps) : ?>
                        <option value="<?= $ps->id_prodi ?>">
                        <?= $ps->nama_prodi ?>
                    </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
    
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
