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
