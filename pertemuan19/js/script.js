// ambil element yang di butuhkan
var keyword = document.getElementById("keyword");
var tombol = document.getElementById("tombol-cari");
var container = document.getElementById("container");

// tambahkan event ketika keyword di ketik
keyword.addEventListener("keyup", function () {
  // buat object ajax
  var xhr = new XMLHttpRequest();

  // cek kesiapan ajax
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      container.innerHTML = xhr.responseText;
    }
  };

  // eksekusi ajax
  xhr.open("GET", "ajax/karyawan.php?keyword=" + keyword.value, true);

  xhr.send();
});
