<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
         $this->call('FuncionarioTableSeeder');
        }
}

class FuncionarioTableSeeder extends Seeder{
        public function run() {
            DB::insert('insert into funcionarios(nome, email, id_secao, fone)
            values (?,?,?,?)', array('JOÃO DA SILVA', 'jsilva@email.com', '1', '980706050'));
            DB::insert('insert into funcionarios(nome, email, id_secao, fone)
            values (?,?,?,?)', array('JOSÉ MANOEL ', 'zemane@email.com', '3', '950607080'));
    
        }

    }
