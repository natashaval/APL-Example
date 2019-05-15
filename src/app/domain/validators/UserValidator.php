<?php
interface UserValidator {

    // fungsi validator langsung dimasukkan ke entity saja (jika validasi murni)
    // fungsi validator jika menggunakan library lain baru pakai interface

    public function validator($user);
}
?>