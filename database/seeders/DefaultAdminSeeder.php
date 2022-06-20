<?php

namespace Database\Seeders;

use App\Library\Token;
use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DefaultAdminSeeder extends Seeder{
    public $admin;

    public function __construct(){
        $this->admin = $this->run();
    }

    public function run() {
        return $this->createDefaultAdmin();
    }

    private function createDefaultAdmin(){
        $unique_id = Token::unique('admins');
        $password = "admin@1234";
        $email = 'admin@sydmond.com';
        $name = 'Sydmong Foundation';

        if(!$admin = Admin::where('email', $email)->first()){
            $admin = Admin::create([
                'unique_id' => $unique_id,
                'name' => $name,
                'email' => $email,
                'role' => 'superadmin',
                'password' => Hash::make($password),
            ]);
        }

        $admin->plain_password = $password;
        return $admin;
    }
}
