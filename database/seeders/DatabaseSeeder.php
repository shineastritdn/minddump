<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Level;

class LevelSeeder extends Seeder
{
    public function run()
    {
        // Masukkan data ke dalam tabel levels
        Level::create([
            'name' => 'Admin',
            'description' => 'Level Administrator dengan akses penuh'
        ]);
        Level::create([
            'name' => 'User',
            'description' => 'Level User biasa dengan akses terbatas'
        ]);
        // Tambahkan level lain jika diperlukan
    }
}

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UserSeeder::class,
            LevelSeeder::class,
            LevelUserSeeder::class,
            // Panggil seeder lain jika diperlukan
        ]);
    }
}