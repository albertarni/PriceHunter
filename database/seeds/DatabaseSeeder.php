<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::statement('SET FOREIGN_KEY_CHECKS = 0'); // disable foreign key constraints

        foreach (DB::connection()->getReadPdo()->query('SHOW TABLE STATUS')->fetchAll() as $table) {

            $table_name = $table[0];

            if (in_array($table_name, [
                'migrations'
            ])
            ) {
                // We don't want to truncate external
                continue;
            }
            echo 'truncating: ' . $table_name . PHP_EOL;
            DB::table($table_name)->truncate();
        }

        DB::statement('SET FOREIGN_KEY_CHECKS = 1'); // enable foreign key constraints

        $this->call(ProductsTableSeeder::class);


    }
}
