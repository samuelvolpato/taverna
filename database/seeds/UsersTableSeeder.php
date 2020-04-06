<?php
use App\User;
use Illuminate\Database\Seeder;
Use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Criando Usuário Admin
        DB::table('users')->insert([
            'name' => 'Taverna',
            'email' => 'taverna@taverna.com',
            'password' => '12345678',
            'address' => 'Rua Taverna Dois',
            'telephone' => '(11) 99999-9999',
            'cpf' => '123.321.313-19',
            'birthday' => '21/11/1991',
            'gender' => 'gender_male',
            'cep' => '04921-000'
        ]);
    }
}
