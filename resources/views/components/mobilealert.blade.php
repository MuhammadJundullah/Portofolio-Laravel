   <script>
      // Fungsi untuk mendeteksi ukuran layar dan menampilkan alert jika di perangkat mobile
      function checkMobile() {
        if (window.innerWidth <= 767) {
          alert("Access this page on a laptop or PC for an enhanced experience.");
        }
      }

      // Jalankan fungsi saat halaman dimuat
      window.onload = checkMobile;
    </script>