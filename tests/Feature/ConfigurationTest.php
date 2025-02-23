<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ConfigurationTest extends TestCase
{
    public function testConfig() {
        $firstname = config('contoh.Nama.First');
        $lastname = config('contoh.Nama.Last');
        $email = config('contoh.Email');
        $alamat = config('contoh.Alamat');

        self::assertEquals('Nauval', $firstname);
        self::assertEquals('Andrian', $lastname);
        self::assertEquals('n.andrian90@gmail.com', $email);
        self::assertEquals('Jakarta', $alamat);
        
    }
}
