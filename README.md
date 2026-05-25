# Unit Testing WEBUMKM

Repository ini digunakan untuk pengerjaan tugas Design for Testability dan Unit Testing pada project Laravel WEBUMKM.

## Repository

Project menggunakan framework Laravel dan dilakukan pengujian unit test menggunakan PHPUnit.

Branch yang digunakan untuk tugas ini:


unit-testing
Unit Test

File unit test berada pada:

tests/Feature/ExampleTest.php

Isi unit test:

<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function test_true_is_true()
    {
        $this->assertTrue(true);
    }
}
Menjalankan Unit Test

Perintah yang digunakan:

php artisan test

Karena terdapat warning deprecated dari versi PHP, pengujian juga dapat dijalankan menggunakan:

php -d error_reporting="E_ALL & ~E_DEPRECATED" artisan test
Hasil Pengujian

Hasil pengujian menunjukkan bahwa unit test berhasil dijalankan.

PASS Tests\Unit\ExampleTest
Tests: 1 deprecated, 1 passed

Keterangan:
DEPR merupakan warning deprecated dari versi PHP/configuration dan bukan kegagalan test. Unit test tetap berhasil karena tidak terdapat status FAIL.

Bukti Hasil Unit Test

<img width="1437" height="1120" alt="Screenshot 2026-05-25 at 20 51 13" src="https://github.com/user-attachments/assets/5a941c27-d255-4efc-aeff-8ef4d01c1404" />
