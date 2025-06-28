<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Level;
class LevelUserSeeder extends Seeder
{
public function run()
{
// Ambil ID user dan level yang ingin dihubungkan
$admin = User::where('email', 'admin@example.com')->first();
$user = User::where('email', 'user@example.com')->first();
$adminLevel = Level::where('name', 'Admin')->first();
$userLevel = Level::where('name', 'User')->first();
// Hubungkan user dengan level menggunakan pivot table
$admin->levels()->attach($adminLevel);
$user->levels()->attach($userLevel);
}
}