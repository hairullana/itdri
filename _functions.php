<?php

// validasi nama
function validasiNama ($nama) {
    if (empty($nama)) {
        // jika nama kosong
        echo "
            <script>
                Swal.fire(
                    'GAGAL !',
                    'Form Nama Tidak Boleh Kosong !',
                    'error'
                );
            </script>
        ";
        return false;
    }else if (strlen($nama) < 3) {
        // jika nama pendek
        echo "
            <script>
                Swal.fire(
                    'GAGAL !',
                    'Nama Terlalu Pendek !',
                    'error'
                );
            </script>
        ";
        return false;
    }else {
        // jika berhasil melewati semua validasi
        return true;
    }
}

// validasi nomor telepon
function validasiTelp($telp) {
    if (empty($telp)) {
        // jika form kosong
        echo "
            <script>
                Swal.fire(
                    'GAGAL !',
                    'Form Nomor Telepon Tidak Boleh Kosong !',
                    'error'
                );
            </script>
        ";
        return false;
    }else if (!is_numeric($telp)) {
        // jika bukan angka
        echo "
            <script>
                Swal.fire(
                    'GAGAL !',
                    'Nomor Telepon Harus Angka !',
                    'error'
                );
            </script>
        ";
        return false;
    }else {
        // jika berhasil melewati validasi
        return true;
    }
}


// validasi password
function validasiPassword ($password) {
    if (empty($password)) {
        // jika password kosong
        echo "
            <script>
                Swal.fire(
                    'GAGAL !',
                    'Form Password Tidak Boleh Kosong !',
                    'error'
                );
            </script>
        ";
        return false;
    }else if (strlen($password) < 5) {
        // jika password pendek
        echo "
            <script>
                Swal.fire(
                    'GAGAL !',
                    'Password Terlalu Pendek !',
                    'error'
                );
            </script>
        ";
        return false;
    }else {
        // jika berhasil melewati semua validasi
        return true;
    }
}


?>