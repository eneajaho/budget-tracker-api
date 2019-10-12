<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//      Expenses

        DB::table('categories')->insert([
            'name' => 'Food',
            'description' => 'Food',
            'icon' => 'fas fa-utensils',
            'type_id' => 2
        ]);
        DB::table('categories')->insert([
            'name' => 'Bills',
            'description' => 'Bills',
            'icon' => 'fas fa-file-invoice',
            'type_id' => 2
        ]);
        DB::table('categories')->insert([
            'name' => 'Transportation',
            'description' => 'Transportation',
            'icon' => 'fas fa-bus',
            'type_id' => 2
        ]);
        DB::table('categories')->insert([
            'name' => 'Entertainment',
            'description' => 'Entertainment',
            'icon' => 'fas fa-gamepad',
            'type_id' => 2
        ]);
        DB::table('categories')->insert([
            'name' => 'Shopping',
            'description' => 'Shopping',
            'icon' => 'fas fa-shopping-cart',
            'type_id' => 2
        ]);
        DB::table('categories')->insert([
            'name' => 'Clothing',
            'description' => 'Clothing',
            'icon' => 'fas fa-tshirt',
            'type_id' => 2
        ]);
        DB::table('categories')->insert([
            'name' => 'Insurance',
            'description' => 'Insurance',
            'icon' => 'fas fa-user-shield',
            'type_id' => 2
        ]);
        DB::table('categories')->insert([
            'name' => 'Telephone',
            'description' => 'Telephone',
            'icon' => 'fas fa-mobile-alt',
            'type_id' => 2
        ]);
        DB::table('categories')->insert([
            'name' => 'Health',
            'description' => 'Health',
            'icon' => 'fas fa-briefcase-medical',
            'type_id' => 2
        ]);
        DB::table('categories')->insert([
            'name' => 'Sport',
            'description' => 'Sport',
            'icon' => 'fas fa-running',
            'type_id' => 2
        ]);
        DB::table('categories')->insert([
            'name' => 'Electronics',
            'description' => 'Electronics',
            'icon' => 'fas fa-plug',
            'type_id' => 2
        ]);
        DB::table('categories')->insert([
            'name' => 'Gift',
            'description' => 'Gift',
            'icon' => 'fas fa-gift',
            'type_id' => 2
        ]);
        DB::table('categories')->insert([
            'name' => 'Education',
            'description' => 'Education',
            'icon' => 'fas fa-graduation-cap',
            'type_id' => 2
        ]);
        DB::table('categories')->insert([
            'name' => 'Books',
            'description' => 'Books',
            'icon' => 'fas fa-book',
            'type_id' => 2
        ]);
        DB::table('categories')->insert([
            'name' => 'Others',
            'description' => 'Others',
            'icon' => 'fas fa-atom',
            'type_id' => 2
        ]);

//       Incomes
        DB::table('categories')->insert([
            'name' => 'Salary',
            'description' => 'Salary',
            'icon' => 'fas fa-wallet',
            'type_id' => 1
        ]);

        DB::table('categories')->insert([
            'name' => 'Awards',
            'description' => 'Awards',
            'icon' => 'fas fa-award',
            'type_id' => 1
        ]);

        DB::table('categories')->insert([
            'name' => 'Refunds',
            'description' => 'Refunds',
            'icon' => 'fas fa-undo-alt',
            'type_id' => 1
        ]);

        DB::table('categories')->insert([
            'name' => 'Investments',
            'description' => 'Investments',
            'icon' => 'fas fa-piggy-bank',
            'type_id' => 1
        ]);

        DB::table('categories')->insert([
            'name' => 'Grants',
            'description' => 'Grants',
            'icon' => 'fas fa-gift',
            'type_id' => 1
        ]);

        DB::table('categories')->insert([
            'name' => 'Rental',
            'description' => 'Rental',
            'icon' => 'fas fa-home',
            'type_id' => 1
        ]);

        DB::table('categories')->insert([
            'name' => 'Lottery',
            'description' => 'Lottery',
            'icon' => 'fas fa-trophy',
            'type_id' => 1
        ]);

        DB::table('categories')->insert([
            'name' => 'Dividends',
            'description' => 'Dividends',
            'icon' => 'fas fa-chart-line',
            'type_id' => 1
        ]);

        DB::table('categories')->insert([
            'name' => 'Others',
            'description' => 'Others',
            'icon' => 'fas fa-atom',
            'type_id' => 1
        ]);

    }
}




