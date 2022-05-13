<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <title>Tambah data</title>
    <style>
        .container {
        max-width: 960px;
        }
    </style>
</head>
<body>
<form action="../proses/tambah.php" method="post" enctype="multipart/form-data">
<div class="container">
    <main>
      <div class="py-5">
        <h2>Tambah Data Bio</h2>
      </div>

      <div class="row g-5">
        <div class="col-md-7 col-lg-8">
          <h4 class="mb-3">Formulir Biodata</h4>
          <form class="needs-validation" novalidate>
            <div class="row g-3">
              <div class="col-sm-6">
                <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama_lengkap" placeholder="" name="nama_lengkap" required>
                <div class="invalid-feedback">
                  Nama lengkap harus diisi
                </div>
              </div>



            </div>
            <div class="col-sm-6">
                <label for="nama_lengkap" class="form-label">Tempat / Tanggal Lahir</label>
                <input type="text" class="form-control" name="tempat_lahir" required> / 
                <input type="date" class="form-control" name="tanggal_lahir" required>
            </div>

            <div class="my-3">
            <label for="country" class="form-label">Jenis Kelamin</label>
              <div class="form-check">
                <input id="jenis_kelaminl" value="L" name="jenis_kelamin" type="radio" class="form-check-input" checked required >
                <label class="form-check-label" for="jenis_kelaminl">Laki - Laki</label>
              </div>
              <div class="form-check">
                <input id="jenis_kelaminp" value="P" name="jenis_kelamin" type="radio" class="form-check-input" required>
                <label class="form-check-label" for="jenis_kelaminp">Perempuan</label>
              </div>
            </div>

            <div class="col-sm-6">
                <label for="asal_sekolah" class="form-label">Asal Sekolah</label>
                <input type="text" class="form-control" id="asal_sekolah" placeholder="" name="asal_sekolah" required>
                <div class="invalid-feedback">
                    Asal Sekolah harus diisi
                </div>
              </div>
              <div class="col-sm-6">
                <label for="gol_darah" class="form-label">Golongan Darah</label>
                <input type="text" class="form-control" id="gol_darah" placeholder="" name="gol_darah" required>
                <div class="invalid-feedback">
                    Golongan Darah harus diisi
                </div>
              </div>
              <div class="col-sm-6">
                <label for="daerah_asal" class="form-label">Daerah Asal</label>
                <input type="text" class="form-control" id="daerah_asal" placeholder="" name="daerah_asal" required>
                <div class="invalid-feedback">
                    Daerah Asal harus diisi
                </div>
              </div>
              <div class="col-sm-6">
                <label for="alamat_domisili" class="form-label">Alamat Domisili</label>
                <textarea name="alamat_domisili" class="form-control" cols="30" rows="10" id="alamat_domisili"></textarea>
                <div class="invalid-feedback">
                Alamat Domisili
                </div>
              </div>
              <div class="col-md-5">
                <label for="agama" class="form-label">Agama</label>
                <select class="form-select" id="agama" name="agama" required>
                  <option value="">Pilih...</option>
                  <option value="islam">Islam</option>
                <option value="kristen">Kristen</option>
                <option value="hindu">Hindu</option>
                <option value="buddha">Buddha</option>
                <option value="konghucu">Konghucu</option>
                </select>
              </div>
              <div class="col-sm-6">
                <label for="program_studi" class="form-label">Program Studi</label>
                <input type="text" class="form-control" id="program_studi" placeholder="" name="program_studi" required>
                <div class="invalid-feedback">
                    Asal Sekolah harus diisi
                </div>
              </div>
              <div class="col-sm-6">
                <label for="hobbi" class="form-label">Hobbi</label>
                <input type="text" class="form-control" id="hobbi" placeholder="" name="hobbi" required>
                <div class="invalid-feedback">
                    Asal Sekolah harus diisi
                </div>
              </div>
              <div class="col-sm-6">
                <label for="motto" class="form-label">Motto Hidup</label>
                <input type="text" class="form-control" id="motto" placeholder="" name="motto" required>
                <div class="invalid-feedback">
                Motto Hidup harus diisi
                </div>
              </div>
              <div class="col-sm-6">
                <label for="keahlian" class="form-label">Keahlian Khusus</label>
                <input type="text" class="form-control" id="keahlian" placeholder="" name="keahlian" required>
                <div class="invalid-feedback">
                    Keahlian Khusus harus diisi
                </div>
              </div>
              <div class="col-sm-6">
                <label for="no_handphone" class="form-label">no handphone</label>
                <input type="text" class="form-control" id="no_handphone" placeholder="" name="no_handphone" required>
                <div class="invalid-feedback">
                    no handphone harus diisi
                </div>
              </div>
              <div class="col-sm-6">
                <label for="pengalaman" class="form-label">Pengalaman</label>
                <input type="text" class="form-control" id="pengalaman" placeholder="" name="pengalaman" required>
                <div class="invalid-feedback">
                    Pengalaman harus diisi
                </div>
              </div>
              <div class="col-sm-6">
                <label for="pass_foto" class="form-label">Pass Foto</label>
                <input type="file" class="form-control" id="pass_foto" placeholder="" name="pass_foto" required>
                <div class="invalid-feedback">
                    Pass Foto harus diisi
                </div>
              </div>

            <button class="w-100 btn btn-primary btn-lg" type="submit">Submit</button>
          </form>
        </div>
      </div>
    </main>
  </div>
</form>
</body>
</html>