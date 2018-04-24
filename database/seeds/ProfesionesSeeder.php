<?php
use App\Models\Profesion as ProfesionModelo; 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfesionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     DB::statement('SET FOREIGN_KEY_CHECKS =0');
    // elimina todos los registros de la base de datos 
     DB::table('profesiones')->truncate();   
     DB::statement('SET FOREIGN_KEY_CHECKS =1');
  /*
     DB::insert('insert into profesiones (profesion)  values ("Matematico")');     
     DB::insert('insert into profesiones (profesion)  values (?)',['Quimico']);
     DB::insert('insert into profesiones (profesion)  values(:title)'
      ,['title'=>'Biologo']);
     DB::table('profesiones')->insert(['profesion'=>'Ingeniero Civil']);
     DB::table('profesiones')->insert(['profesion'=>'Ingeniero Sistemas']);
     DB::table('profesiones')->insert(['profesion'=>'Ingeniero Agronomo']);
     DB::table('profesiones')->insert(['profesion'=>'Ingeniero Construcciones']);
     DB::table('profesiones')->insert(['profesion'=>'Ingeniero Quimico']);
*/

     ProfesionModelo::create(['profesion'=>'Matematico']);  
     ProfesionModelo::create(['profesion'=>'Quimico']);
     ProfesionModelo::create(['profesion'=>'Ingeniero Civil']);
     ProfesionModelo::create(['profesion'=>'Ingeniero Sistemas']);
     ProfesionModelo::create(['profesion'=>'Ingeniero Agronomo']);       
     ProfesionModelo::create(['profesion'=>'Analista Sistemas']);
     ProfesionModelo::create(['profesion'=>'Periodista']);
     factory(ProfesionModelo::class,23)->create(); 
    }
}
