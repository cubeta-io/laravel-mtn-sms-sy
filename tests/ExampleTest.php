<?php

namespace Cubeta\MtnSmsSy\Tests;

use Orchestra\Testbench\TestCase;
use Cubeta\MtnSmsSy\MtnSmsSyServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [MtnSmsSyServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
