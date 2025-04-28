<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FuncionarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('funcionarios')->insert([
            [
                'nome' => 'Ana Paula',
                'cpf' => '123.456.789-00',
                'funcao' => 'Veterinária',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Carlos Henrique',
                'cpf' => '987.654.321-00',
                'funcao' => 'Atendente',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Fernanda Souza',
                'cpf' => '456.123.789-00',
                'funcao' => 'Groomer (Tosador)',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Marcos Lima',
                'cpf' => '321.654.987-00',
                'funcao' => 'Administrador',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
