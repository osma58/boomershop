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
        DB::table('products')->insert([
            $table->bigIncrements('id'),
            $table->timestamps(),
            $table->string('titel'),
            $table->string('photo'),
            $table->float('prijs'),
            $table->interger('korting')->nullable()
        ]);
    }
}
