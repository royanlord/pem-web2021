// Maxlength
function MaxLengthCheck(object) {
    if (object.value.length > object.maxLength) {
        object.value = object.value.slice(0, object.maxLength)
    }
}

// Konfirmasi Form Pembelian
function konfirmasi() {
    // var tanya = confirm("Apakah Data Yang Anda Masukkan Telah Sesuai?");
    var nama_lengkap = document.getElementById("nama_lengkap").value;
    var nickname = document.getElementById("nickname").value;
    var user_id = document.getElementById("user_id").value;
    var server_id = document.getElementById("server_id").value;
    var email = document.getElementById("email").value;
    var nominal = document.getElementById("nominal").value;
    var payment = document.getElementById("payment").value;

    if (nama_lengkap != "" && nickname != "" && user_id != "" && server_id != "" && email  != "" && nominal != "" && payment != "") {
        confirm("Apakah Data Yang Anda Masukkan Telah Sesuai?");
    } else {
        alert("Lengkapi Data Terlebih Dahulu!");
    }
}

// Reset Form
function hapus() {
    var nama_lengkap = document.getElementById("nama_lengkap").value;
    var nickname = document.getElementById("nickname").value;
    var user_id = document.getElementById("user_id").value;
    var server_id = document.getElementById("server_id").value;
    var email = document.getElementById("email").value;
    var nominal = document.getElementById("nominal").value;
    var payment = document.getElementById("payment").value;

    if (nama_lengkap != "" && nickname != "" && user_id != "" && server_id != "" && email  != "" && nominal != "" && payment != "") {
        confirm("Apakah Anda Yakin Ingin Membatalkan Pembelian? Data Anda Akan Terhapus")
    } else {
        alert("Data Berhasil Terhapus!");
    }
        
}