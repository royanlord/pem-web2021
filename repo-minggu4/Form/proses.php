<?php
    if(isset($_POST['fnisn'])){
        $fnisn = $_POST["fnisn"];
        $fasalSekolah = $_POST["fasalSekolah"];
        $ftahunLulus = $_POST["ftahunLulus"];
        $fijazah = $_POST["fijazah"];
        $fnamaLengkap = $_POST["fnamaLengkap"];
        $fnik = $_POST["fnik"];
        $ftempatLahir = $_POST["ftempatLahir"];
        $ftanggalLahir = $_POST["ftanggalLahir"];
        $fakta = $_POST["fakta"];
        $fgender = $_POST["fgender"];
        $fagama = $_POST["fagama"];
        $falamat = $_POST["falamat"];
        $fdesa = $_POST["fdesa"];
        $fkecamatan = $_POST["fkecamatan"];
        $fkabupaten = $_POST["fkabupaten"];
        $fprovinsi = $_POST["fprovinsi"];
        $femail = $_POST["femail"];
        $fnomorKK = $_POST["fnomorKK"];
        $fkartuKeluarga = $_POST["fkartuKeluarga"];
        $fnamaAyah = $_POST["fnamaAyah"];
        $fagamaAyah = $_POST["fagamaAyah"];
        $fpekerjaanAyah = $_POST["fpekerjaanAyah"];
        $fnamaIbu = $_POST["fnamaIbu"];
        $fagamaIbu = $_POST["fagamaIbu"];
        $fpekerjaanIbu = $_POST["fpekerjaanIbu"];
        $falamatOrtu = $_POST["falamatOrtu"];
        $fdesaOrtu = $_POST["fdesaOrtu"];
        $fkecamatanOrtu = $_POST["fkecamatanOrtu"];
        $fkabupatenOrtu = $_POST["fkabupatenOrtu"];
        $fprovinsiOrtu = $_POST["fprovinsiOrtu"];
        echo "<b>INFO PENDAFTARAN</b>";
        echo "<br>NISN: $fnisn";
        echo "<br>Asal Sekolah: $fasalSekolah";
        echo "<br>Tahun Lulus: $ftahunLulus";
        echo "<br>Fotocopy Ijazah: $fijazah";
        echo "<br>";
        echo "<br><b>DATA DIRI PESERTA</b>";
        echo "<br>Nama Lengkap: $fnamaLengkap";
        echo "<br>NIK: $fnik";
        echo "<br>Tempat, Tanggal Lahir: $ftempatLahir, $ftanggalLahir";
        echo "<br>Legalisir fc Akta Kelahiran: $fakta";
        echo "<br>Jenis Kelamin: $fgender";
        echo "<br>Agama: $fagama";
        echo "<br>Alamat: $falamat";
        echo "<br>Desa/Kel: $fdesa";
        echo "<br>Kecamatan: $fkecamatan";
        echo "<br>Kabupaten: $fkabupaten";
        echo "<br>Provinsi: $fprovinsi";
        echo "<br>Email Aktif: $femail";
        echo "<br>";
        echo "<br><b>DATA ORANG TUA</b>";
        echo "<br>Nomor KK: $fnomorKK";
        echo "<br>Lampiran file KK: $fkartuKeluarga";
        echo "<br>Nama Ayah Kandung: $fnamaAyah";
        echo "<br>Agama: $fagamaAyah";
        echo "<br>Pekerjaan: $fpekerjaanAyah";
        echo "<br>Nama Ibu Kandung: $fnamaIbu";
        echo "<br>Agama: $fagamaIbu";
        echo "<br>Pekerjaan: $fpekerjaanIbu";
        echo "<br>Alamat Orang Tua: $falamatOrtu";
        echo "<br>Desa/Kel: $fdesaOrtu";
        echo "<br>Kecamatan: $fkecamatanOrtu";
        echo "<br>Kabupaten: $fkabupatenOrtu";
        echo "<br>Provinsi: $fprovinsiOrtu";
    }
?>