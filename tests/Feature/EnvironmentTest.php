<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Env;
use Tests\TestCase;

class EnvironmentTest extends TestCase
{
    public function testGetEnv() {
        $nickname = env('NICKNAME');

        self::assertEquals('Dhelanidela', $nickname);
    }
    public function testDefaultEnv() {
        $game = Env::get('GAME', 'Coc');
        
        self::assertEquals('Coc', $game);
    }
}
