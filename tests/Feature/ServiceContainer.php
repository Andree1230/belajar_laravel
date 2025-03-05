<?php

namespace Tests\Feature;
use App\Data\Foo;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ServiceContainer extends TestCase
{
   public function testDependencyInjection() {
    $foo1 =  $this->app->make(Foo::class);
    $foo2 = $this->app->make(Foo::class);

    self::assertEquals('Foo', $foo1->foo());
    self::assertEquals('Foo', $foo2->foo());
    self::assertNotSame($foo1, $foo2);

   }
}
