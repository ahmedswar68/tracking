<?php

namespace Tests\Feature;

use App\Models\Conversion;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class TrackingTest extends TestCase
{
  use DatabaseMigrations;

  /** @test */
  public function most_attracted_platform()
  {
    $conversion = create(Conversion::class, ['platform' => 'trivago']);
    $this->json('GET', '/api/most-attracted-platform')
      ->assertJsonFragment(['platform' => $conversion->platform]);
  }
}
