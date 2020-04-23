<?php

namespace Tests\Feature;

use App\Entities\Ingredient;
use App\Entities\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IngredientsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_new_ingredient_is_created()
    {
        $ing = make(Ingredient::class);

        $this->post(route('ingredients.store'), $ing->toArray());

        $this->assertDatabaseHas('ingredients', $ing->toArray());
    }


    /** @test */
    public function an_ingredient_can_be_updated()
    {
        $ing = create(Ingredient::class);
        $newName = 'Beurre';

        $this->put(route('ingredients.update', ['ingredient' => $ing->slug]), [
            'name' => $newName
        ]);

        $this->assertDatabaseHas('ingredients', [
            'id' => $ing->id,
            'name' => $newName
        ]);
    }


    public function setUp(): void
    {
        parent::setUp();

        $this->withoutExceptionHandling();

        $this->signIn(User::first());

        auth()->user()->grant('users');
    }
}
