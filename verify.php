<?php
if ($argc == 4) {
    $sha1file = hash_hmac('sha1', $argv[1], $argv[2]);
    if ($sha1file == $argv[3]) {
        echo "File Terotentifikasi";
    } else {
        echo "File Tidak Terotentifikasi";
    }
} else {
    echo "inputan file, password, atau MAC tidak lengkap";
}
