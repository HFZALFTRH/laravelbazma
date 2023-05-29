<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class configurationTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
       $shortname = config("coba.biodata.shortname");
       $fullname = config("coba.biodata.fullname");

       self::assertEquals($shortname, "bayu");
       self::assertEquals($fullname, "bayu priambada");
    }
}
