<?php
use App\Models\Profesion;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        //$profesiones= DB::Select('select id from profesiones  where profesion="Quimico"');

        //$profesiones= DB::Select('select id from profesiones  where profesion=?',['Quimico'] );
        //$profesiones = DB::table('profesiones')->select('id')->take(1)->get();

//        $profesion = DB::table('profesiones')->select('id')->first();
 
//        $profesion = DB::table('profesiones')->where(['profesion'=> 'Quimico'])->first();
/*
        $profesionId = DB::table('profesiones')
//        ->where(['profesion'=> 'Ingeniero Quimico'])
        ->where('profesion' ,  'Ingeniero Quimico')
        ->value('id');
*/
        //dd($profesionId);

        // dd($profesiones->first()->id);  // $profesiones[0] 
        //dd($profesionId);

        /*DB::table('users')->insert([
           'name' => 'David Arriola',
           'email' => 'darriolavilla@hotmail.com',
           'password' => bcrypt('laravel') , 
           //'profesion_id' => $profesiones[0]->id,
           //'profesion_id' => $profesionId   //$profesion->id
           'profesion_id' => DB::table('profesiones')->whereprofesion('Quimico')->value('id')
            ]);*/
            User::create([
                'name' => 'David Arriola',
                'email' => 'darriolavilla@hotmail.com',
                'password' => bcrypt('laravel') ,                 
                'profesion_id' => Profesion::where('profesion','Quimico')->value('id')
                ]);

            User::create([
                'name' => 'Ernesto Arriola',
                'email' => 'ernestovilla@hotmail.com',
                'password' => bcrypt('laravel') , 
                'profesion_id' => Profesion::where('profesion','Matematico')->value('id')
                ]);
            User::create([
                'name' => 'Victor Arriola',
                'email' => 'perioditsa@hotmail.com',
                'password' => bcrypt('laravel') , 
                'profesion_id' => Profesion::where('profesion','Periodista')->value('id')
                ]);

          
            // un usuario con profesion id igual al anterior 
            factory(User::class)->create([
                'name'=>'nombre','email'=>'email@email11-com',
                'password'=>bcrypt('34434') , 
                'profesion_id'=>Profesion::where('profesion','Periodista')->value('id')
                    ]);
            // 48 usuarios aleatorios 
            factory(User::class,4)->create();


    }
}
