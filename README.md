# Unit Testing WEBUMKM

Repository ini digunakan untuk pengerjaan tugas **Design for Testability** dan **Unit Testing** pada project Laravel WEBUMKM.

## Repository

Project menggunakan framework Laravel dan pengujian unit test dilakukan menggunakan PHPUnit.

## Branch

Branch yang digunakan untuk tugas ini:

```text
unit-testing
```

## File Unit Test

File unit test berada pada:

```text
tests/Feature/ExampleTest.php
```

## Source Code Unit Test

```php
<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function test_hasil_penjumlahan()
    {
        $hasil = 2 + 2;

        $this->assertEquals(4, $hasil);
    }
}
```

## Menjalankan Unit Test

Perintah yang digunakan:

```bash
php artisan test
```

Karena terdapat warning deprecated dari versi PHP, pengujian juga dapat dijalankan menggunakan:

```bash
php -d error_reporting="E_ALL & ~E_DEPRECATED" artisan test
```

## Hasil Pengujian

Hasil pengujian menunjukkan bahwa unit test berhasil dijalankan.

```text
PASS Tests\Unit\ExampleTest
Tests: 1 deprecated, 1 passed
```

## Keterangan

`DEPR` merupakan warning deprecated dari versi PHP/configuration dan bukan kegagalan test. Unit test tetap berhasil karena tidak terdapat status `FAIL`.

## Jenis Unit Testing

Unit testing menggunakan PHPUnit Laravel dengan teknik assertion testing menggunakan `assertEquals()`.

## Bukti Hasil Unit Test

<img width="1437" height="1120" alt="unit testing" src="https://github.com/user-attachments/assets/39bd1762-a2c1-4af1-b6f1-757ff1493c97" />
