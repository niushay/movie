<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ViewMoviesTest extends TestCase
{
    protected function the_mani_page_show_correct_info()
    {
        $response = $this->get(route('movie.index'));
        $response->assertSuccessful();
    }
}
