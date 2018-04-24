<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    protected function truncateTables ( array $tables)
    {
    
        DB::statement('SET FOREIGN_KEY_CHECKS =0');
       foreach ($tables as $table )  {
            DB::table($table)->truncate();   
        }
        DB::statement('SET FOREIGN_KEY_CHECKS =1');
    }

    public function run()
    {
       
        $this->truncateTables([
        'users',
        'profesiones'
        ]);
        $this->call(ProfesionesSeeder::class);
        $this->call(UserSeeder::class);
        
    }
}
