<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Admin;
use App\Models\Record;
use App\Models\Schedule;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Admin();

        $admin->name = 'Administrador';
        $admin->email = 'admin@admin.com';
        $admin->password = bcrypt('12345678');

        $admin->save();

        $user = new User();
        
        $user->name = 'Usuario';
        $user->email = 'usuario@exemplo.com';
        $user->password = bcrypt('12345678');
        
        $user->save();

        $schedule = new Schedule();
        
        $schedule->title = 'Lista 1';
        $schedule->description = 'Listagem de contatos';
        $schedule->user_id = $user->id;

        $schedule->save();

        $record = new Record();

        $record->name = 'Vinicius';
        $record->email = 'viniciusdemourarosa@gmail.com';
        $record->phone = '+5541991538664';
        $record->github_url = 'vinicius0096';
        $record->schedule_id = $schedule->id;

        $record->save();
    }
}
