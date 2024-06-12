<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa Oleh Radina 2110020049</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Include Font Awesome CSS (for icons) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1 class="mt-4">Form Edit Mahasiswa</h1>
        <form action="<?php echo site_url('mahasiswa/perbaharui/'.$mahasiswa->id_mahasiswa) ?>" method="post">
            <div class="form-group">
                <label for="nim">NIM</label>
                <input type="text" class="form-control" name="nim" value="<?php echo $mahasiswa->nim ?>">
            </div>
            <div class="form-group">
                <label for="nama_mhs">Nama Mahasiswa</label>
                <input type="text" class="form-control" name="nama_mhs" value="<?php echo $mahasiswa->nama_mhs ?>">
            </div>
            <div class="form-group">
                <label for="id_prodi">Program Studi</label>
                <select class="form-control" name="id_prodi" id="id_prodi" required>
                    <option value="">Pilih Program Studi</option>
                    <?php foreach ($prodi as $ps) : ?>
                        <option value="<?= $ps->id_prodi ?>" <?= $mahasiswa->id_prodi == $ps->id_prodi ? 'selected' : '' ?>>
                            <?= $ps->nama_prodi ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary mr-2">
                <i class="fas fa-save"></i> Perbaharui
            </button>
        </form>
    </div>

    <!-- Include Bootstrap JS (Optional) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>