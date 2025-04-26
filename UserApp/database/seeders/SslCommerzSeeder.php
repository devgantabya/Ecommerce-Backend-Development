<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\SSLCommerzCredential;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SslCommerzSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SSLCommerzCredential::updateOrCreate([
            'id' => 1
        ],
        [
            'store_id' => ' dfgjs67faae7710dac',
            'store_password' => 'dfgjs67faae7710dac@ssl',
            'currency' => 'BDT',
            'success_url' => 'http://127.0.0.1:8000/success',
            'fail_url' => 'http://127.0.0.1:8000/fail',
            'cancel_url' => 'http://127.0.0.1:8000/cancel',
            'ipn_url' => 'http://127.0.0.1:8000/ipn',
            'init_url' => 'https://sandbox.sslcommerz.com/validator/api/validationserverAPI.php'
        ]);
    }
}


