<?php

use EmejiasInventory\Entities\OrderType;
use Illuminate\Database\Seeder;

class OrderTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OrderType::create([
            'id' => 1,
            'name' => 'Pedidos'
        ]);
        OrderType::create([
            'id' => 2,
            'name' => 'Facturas'
        ]);
        OrderType::create([
            'id' => 3,
            'name' => 'Movimientos'
        ]);
    }
}
