<?php
if ($argc == 3) {
    $sha1file = hash_hmac('sha1', $argv[1], $argv[2]);
    echo $sha1file;
} else {
    echo "Nama File / Password Tidak Tersedia";
}
