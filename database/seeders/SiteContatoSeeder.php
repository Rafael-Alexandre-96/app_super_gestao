<?php

namespace Database\Seeders;

use App\Models\SiteContato;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contato = new SiteContato();
        $contato->nome = 'Sistema SG';
        $contato->telefone = '(11) 3333-3333';
        $contato->email = 'contato@sg.com.br';
        $contato->motivo_contatos_id = '1';
        $contato->mensagem = 'Seja bem-vindo ao sistema Super Gestão';
        $contato->save();
    }
}
