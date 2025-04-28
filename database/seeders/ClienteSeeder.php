<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clientes')->insert([
            [
                'nome' => 'João Silva',
                'cpf' => '111.222.333-44',
                'idade' => '30',
                'endereco' => 'Rua das Flores, 123',
                'telefone' => '(11) 91234-5678',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Maria Souza',
                'cpf' => '555.666.777-88',
                'idade' => '25',
                'endereco' => 'Avenida Brasil, 456',
                'telefone' => '(11) 92345-6789',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Pedro Santos',
                'cpf' => '999.888.777-66',
                'idade' => '40',
                'endereco' => 'Rua Oliveira, 789',
                'telefone' => '(11) 93456-7890',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Ana Costa',
                'cpf' => '222.333.444-55',
                'idade' => '35',
                'endereco' => 'Praça Central, 101',
                'telefone' => '(11) 94567-8901',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
