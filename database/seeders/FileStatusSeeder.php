<?php

namespace Database\Seeders;

use App\Models\FileStatus;
use Illuminate\Database\Seeder;

class FileStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses = [];

        foreach ($statuses as $status) {
            if (!FileStatus::whereName($status)->exists()) {
                $model = new FileStatus();
                $model->fill(['name' => $status])->save();
            }
        }
    }
}
