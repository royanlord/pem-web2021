// Sign In and Sign Up
const signUpButton = document.getElementById("signUp");
const signInButton = document.getElementById("signIn");
const container = document.getElementById("container");

signUpButton.addEventListener("click", () => {
  container.classList.add("right-panel-active");
});

signInButton.addEventListener("click", () => {
  container.classList.remove("right-panel-active");
});

// Validasi Daftar
function validasiDaftar() {
  var nama = document.getElementById("nama").value;
  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;

  if(nama != "" && email != "" && password != "") {
    alert("Pendaftaran Berhasil");
  } else {
    alert("Anda harus mengisi data dengan lengkap!");
  }
}

// Validasi Masuk
function validasiMasuk() {
  var email = document.getElementById("emailMasuk").value;
  var password = document.getElementById("passwordMasuk").value;

  if(email != "" && password != "") {
    alert("Anda Berhasil Masuk!");
  } else {
    alert("Data Tidak Boleh Kosong!");
  }
}