<?php

use App\Models\ProjectCategory;
use Illuminate\Database\Seeder;

class CategoryProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = [
            [
                'id'    => 1,
                'name' => 'Đất Nền',
            ],
            [
                'id'    => 2,
                'name' => 'Nhà Đất',
            ],
        ];

        ProjectCategory::insert($category);
    }
}
