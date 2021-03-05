<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class StoreTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
//        $response = $this->get('/');
//        $response->assertStatus(200);
        
        $user = factory(User::class)->create([
         'name' => 'StoreTeste','city'=>'CityTest','price'=>'1' ]);

         $this->browse(function ($browser) use ($user){
           $browser->visit('/index')
                   ->type('name', $user->name)
                   ->type('city',$user->city)
                   ->type('price',$user->price)
                   ->press('editid') ->assertPathIs('/index');
      });
    }
}
