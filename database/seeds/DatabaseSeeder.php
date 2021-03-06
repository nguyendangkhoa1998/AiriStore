<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(CategoriesChildTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(ProductGaleryTableSeeder::class);
        $this->call(BannersTableSeeder::class);
        $this->call(OrderStatusSeeder::class);
    }
}
