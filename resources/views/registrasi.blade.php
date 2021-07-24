@extends('template')
@section('title', 'Registrasi Vaksinasi Covid')
@section('content')
<div class="container">
    <h1>Registrasi Vaksinasi Covid</h1>
    <div class="registrasi">
        <div class="card border-secondary mb-3">
            <div class="card-header border-secondary"><i class="fa fa-exclamation-triangle"></i> Syarat Mengikuti Vaksinasi</div>
            <div class="card-body">
              <h5 class="card-title">Sebelum anda diberikan vaksin, anda harus memenuhi syarat - syarat berikut ini.</h5>
              <p class="card-text">
                &emsp;1. Untuk seluruh masyarakat dengan KTP Medan dan luar Medan tanpa syarat domisili
                <br>&emsp;2. Berusia 18 tahun keatas, harus membawa Kartu Tanda Penduduk (KTP)
                <br>&emsp;3. Peserta vaksin belum terdaftar di fasyankes lainnya
                <br>&emsp;5. Lolos pemeriksaan fisik di lokasi vaksinasi
                <br>&emsp;4. Mengisi Formulir Skrining di lokasi vaksinasi
            </p>
            </div>
         </div>
        <div class="card border-secondary mb-3">
            <div class="card-header border-secondary"><i class="fa fa-edit"></i> Form Registrasi Vaksinasi</div>
            <div class="card-body">
                <div class=" d-flex flex-column align-items-center mt-3 mb-5">
                    <form class="col-md-8" action="/registrasi-vaksinasi/post" method="POST">
                      @csrf
                        <div class="row align-items-start mb-3">
                            <div class="col-sm-4">
                              <label for="nik" class="col-form-label text-right">NIK :</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="nik" name="nik" aria-describedby="nikHelp" required>
                                <div id="nikHelp" class="form-text">Isi Sesuai KTP</div>
                            </div>
                        </div>
                        <div class="row align-items-start mb-3">
                            <div class="col-sm-4">
                              <label for="nama" class="col-form-label text-right">Nama Lengkap :</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="nama" name="nama" aria-describedby="namaHelp" required>
                                <div id="namaHelp" class="form-text">Isi Sesuai KTP</div>
                            </div>
                        </div>
                        <div class="row align-items-start mb-3">
                            <div class="col-sm-4">
                              <label for="laki" class="col-form-label text-right">Jenis Kelamin :</label>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="kelamin" value="laki" id="laki" required>
                                    <label class="form-check-label" for="laki">
                                      Laki-laki
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="kelamin" value="perempuan" id="perempuan" required>
                                    <label class="form-check-label" for="perempuan">
                                      Perempuan
                                    </label>
                                  </div>
                            </div>
                        </div>
                        <div class="row align-items-start mb-3">
                            <div class="col-sm-4">
                              <label for="lahir" class="col-form-label text-right">Tanggal Lahir :</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" id="lahir" name="lahir" aria-describedby="lahirHelp" required>
                            </div>
                        </div>
                        <div class="row align-items-start mb-3">
                            <div class="col-sm-4">
                              <label for="umum" class="col-form-label text-right">Kategori :</label>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="kategori" value="umum" required id="umum">
                                    <label class="form-check-label" for="umum">
                                      Umum dan Remaja (Usia 12 - 17 tahun)
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="kategori" value="pra-lansia" required id="pra-lansia">
                                    <label class="form-check-label" for="pra-lansia">
                                      Pra Lansia (Usia >=50 tahun)
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="kategori" value="lansia" required id="lansia">
                                    <label class="form-check-label" for="lansia">
                                      Lansia (Usia >= 60 tahun)
                                    </label>
                                  </div>
                            </div>
                        </div>
                        <div class="row align-items-start mb-3">
                            <div class="col-sm-4">
                              <label for="nohp" class="col-form-label text-right">No HP :</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="nohp" name="nohp" aria-describedby="nohpHelp" required>
                                <div id="nohpHelp" class="form-text">Isi nomor yang bisa dihubungi</div>
                            </div>
                        </div>
                        
                        <div class="row align-items-start mb-3">
                            <div class="col-sm-4">
                              <label for="alamat" class="col-form-label text-right">No HP :</label>
                            </div>
                            <div class="col-sm-8">
                                <textarea class="form-control" id="alamat" name="alamat" aria-describedby="alamatHelp" required></textarea>
                                <div id="alamatHelp" class="form-text">Isi sesuai KTP</div>
                            </div>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
         </div>
    </div>
</div>
@endsection