   <script>
      // Fungsi untuk mendeteksi ukuran layar dan menampilkan alert jika di perangkat mobile
      function checkMobile() {
        if (window.innerWidth <= 767) {
          alert("Akses Website di Desktop/ PC untuk tampilan Dashboard yang lebih baik.");
        }
      }

      // Jalankan fungsi saat halaman dimuat
      window.onload = checkMobile;
    </script>