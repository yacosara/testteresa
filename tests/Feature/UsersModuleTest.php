<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class UsersModuleTest extends TestCase
{

   use RefreshDatabase;
    
     function testprueba_usuarios()
    {

       // crea carmen  para que cumpla el test unitario en la base de prueba  
            factory(User::class)->create([
                'name'=>'Carmen',]);

          $response = $this->get('/usuarios');
          $response->assertStatus(200);
          $response->assertSee('Usuarios');
          $response->assertSee('Carmen');

    }


function it_update_user_page()
{
   
   $user = factory(User::class)->create();

   $this->withoutExceptionHandling();

   $this->put("usuarios/{$user->id}/update",[
                'name'=>'Kaidddme',
                'email'=>'Torres@torddde.com',
                'password'=>'chadddndru'
             ])->assertRedirect('usuariosdddd');

    $this.assertCredentials(['name' =>'Kaime', 
                              'email'=>'Torres@tore.com',
                              'password'=>'Torres@tore.com' ] );           

}


 function testprueba_sin_usuarios()
    {
          $this->withoutExceptionHandling();
          DB::table('users')->truncate();
          User::truncate();          
          $response = $this->get('/usuarios');
          $response->assertStatus(200);          
          //$response->assertSee('No hay usuarios Registrados');
    }

function it_test_create_new_user(){
             $response = $this->post('/usuarios/save/', [
                'name'=>'David' ,
                'emai'=>'david@david.com',
                'password'=>bcrypt(123)
             ]);        // graba datos usuario 
             $response->assertSee('grabando nuevo usuario'); // check msg
    }

    function it_error_404__user_not_found(){
            $response = $this->get('/usuarios/454545');        // id user no existente
            $response->assertStatus(404);  
            $response->assertSee('Usuario No Encontrado.');  
    }
     
/**  @test    **/

/*function the_name_is_required() {
            //$this->withoutExceptionHandling();
           $this->from('usuarios/create')->post('/usuarios/save/', [
                'name'=>'' ,
                'email'=>'david@david.com',
                'password'=>'123'
             ])->assertSessionHasErrors(['name']);

             //$response->assertSee('El campo es Obligatorio'); // check msg
} 
  
 
/*
  $this->withoutExceptionHandling();
  $response =$this->post('/usuarios/create/' , [
        'name' =>'' , 
        'email' => 'david@djdjh.com',
        'password' => '12345'
    ]); // ->assertRedirect('usuarios/create');

  $response->assertDatabaseMissing('users', [
         'email' => 'djhdghd@dhd-com' , ]); 


function the_email_is_required(){
                $this->from('usuarios/create')->post('/usuarios/save/', [
                'name'=>'David' ,
                'email'=>'',
                'password'=>'123'
             ])->assertRedirect('usuarios/save')
                ->assertSessionHasErrors(['email']);  
           $this.assertEquals(0,User::count());

}

 function the_password_is_required() 
 { 

  $this->withoutExceptionHandling();
          $this->from('usuarios/create')
                ->post('/usuarios/save/', [
                'name'=>'David' ,
                'email'=>'dede@dede.com',
                'password'=>''
             ])
              ->assertRedirect('usuarios/create')
              ->assertSessionHasErrors(['password']);  

           $this.assertEquals(0,User::count());

 }   

*/  



/* function the_email_is_required() 
 { 
          $this->from('usuarios/create')
                ->post('/usuarios/save/', [
                'name'=>'David' ,
                'email'=>'',
                'password'=>'34443'
             ])
              ->assertRedirect('usuarios/create')
              ->assertSessionHasErrors(['email']);  

           $this.assertEquals(0,User::count());

 }   
*/



function it_loads_the_edit_user_page()
{

  $this->withoutExceptionHandling();

     $user = factory(User::class)->create();
     $this->get("/usuarios/{$user->id}/edit")
     ->assertStatus(200)
     ->assertViewis('usuarios.edita')
     ->assertSee('Editar Usuario')
     ->assertViewHas('user');
     
}
 

}
