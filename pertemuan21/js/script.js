$(document).ready(function () {
  //hilangkan tombol cari
  $("#tombol-cari").hide();
  // ketika keyword di ketik
  $("#keyword").on("keyup", function () {
    // munculkan icon loading
    $(".loader").show();
    // ambil nilai keyword

    // ajax menggunakan load
    // menampilkan data pada ajax
    // var data = $(this).val();
    // $.get("ajax/karyawan.php?keyword=" + data, function (data) {
    //   $(".loader").hide();
    //   $("#container").html(data);
    // });

    // menggunakan $.ajax()
    // $.ajax({
    //   url: "ajax/karyawan.php",
    //   data: "keyword=" + $(this).val(),
    //   success: function (data) {
    //     $(".loader").hide();
    //     $("#container").html(data);
    //   },
    // });

    // menggunakan $.get()
    $.get("ajax/karyawan.php?keyword=" + $(this).val(), function (data) {
      $(".loader").hide();
      $("#container").html(data);
    });
  });
});
