<?php

use Illuminate\Database\Seeder;


class insertData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $roles = ['IT','Comercial', 'Operaciones'];
        foreach ($roles as $name) {
            DB::table('teams')->insert([
                'name' => $name,
            ]);
        }

        $users = ['Luis'=>1,'Ana'=>1,'Manuel'=>2,'Sergio'=>2,'Marta'=>3];
        foreach ($users as $user=>$value) {
            DB::table('users')->insert([
                'name' => $user,
                'team_id' => $value,
            ]);
        }
    }
}
