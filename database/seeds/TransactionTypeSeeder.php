<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert([
            'name' => 'Income',
            'description' => 'Incomes of the user',
        ]);

        DB::table('types')->insert([
            'name' => 'Expense',
            'description' => 'Expenses of the user',
        ]);

        DB::table('types')->insert([
            'name' => 'Transfer',
            'description' => 'Transfers of the user',
        ]);
    }
}
