<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use  App\Models\User;
use App\Models\Transaction;
use App\Models\TypePackage;
use App\Models\TravelPackage;
use Illuminate\Database\Seeder;
use App\Models\TransactionDetail;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        User::factory()->create([
            'name' => 'Muhammad Hafidz Febriansyah',
            'email' => 'hafidzfebrian21@gmail.com',
            'username' => 'hafidzencis',
            'password' => '$2a$04$UiJ2PIe.qUXseu9pnnkOd.X5NTZ1.aes7GePioBGBjgXSfu6ZIeC.',
            'roles' => 'ADMIN',
            'updated_at' => now(),
            'created_at' => now()
        ]);

        User::factory()->create([
            'name' => 'Test User 1',
            'email' => 'test1@example.com',
            'username' => 'testuser1',
            'password' => '$2a$04$UiJ2PIe.qUXseu9pnnkOd.X5NTZ1.aes7GePioBGBjgXSfu6ZIeC.',
            'updated_at' => now(),
            'created_at' => now()
        ]);


        User::factory()->create([
            'name' => 'Test User 2',
            'email' => 'test2@example.com',
            'username' => 'testuser2',
            'password' => '$2a$04$UiJ2PIe.qUXseu9pnnkOd.X5NTZ1.aes7GePioBGBjgXSfu6ZIeC.',
            'updated_at' => now(),
            'created_at' => now()
        ]);

        User::factory()->create([
            'name' => 'Test User 3',
            'email' => 'test3@example.com',
            'username' => 'testuser3',
            'password' => '$2a$04$UiJ2PIe.qUXseu9pnnkOd.X5NTZ1.aes7GePioBGBjgXSfu6ZIeC.',
            'updated_at' => now(),
            'created_at' => now()
        ]);


        TypePackage::factory()->create([
            'name' => 'Open Trip',
            'updated_at' => now(),
            'created_at' => now()
        ]);

        TypePackage::factory()->create([
            'name' => 'Private Trip',
            'updated_at' => now(),
            'created_at' => now()
        ]);


        TravelPackage::factory()->create([
            'type_package_id' => 1,
            'title' => 'Sangiran',
            'slug' => 'Sangiran',
            'location' => 'Sragen, Jawa Tengah, Indonesia',
            'about' => 'The best museum ancient human',
            'featured_event' => 'Tari Jaipong',
            'language' => 'Javanese',
            'foods' => 'Gethuk',
            'departure_date' => date('Y-m-d H:i:s'),
            'duration' => '2D',
            'price' => 1000000,
            'updated_at' => now(),
            'created_at' => now()
        ]);

        TravelPackage::factory()->create([
            'type_package_id' => 1,
            'title' => 'Pantai Dewata',
            'slug' => 'Pantai Dewata',
            'location' => 'Denpasar, Bali,  Indonesia',
            'about' => 'The best pantai in the bali',
            'featured_event' => 'Tari Kecak',
            'language' => 'Bahasa',
            'foods' => 'Ayam Betutu',
            'departure_date' => date('Y-m-d H:i:s'),
            'duration' => '3D',
            'price' => 5000000,
            'updated_at' => now(),
            'created_at' => now()
        ]);


        TravelPackage::factory()->create([
            'type_package_id' => 2,
            'title' => 'Pulau Komodo',
            'slug' => 'Pulau Komodo',
            'location' => 'Sumbawa, NTT,  Indonesia',
            'about' => 'Komodo (Indonesian: Pulau Komodo) is one of the 17,508 islands that comprise the Republic of Indonesia. The island is particularly notable as the habitat of the Komodo dragon, the largest lizard on Earth, which is named after the island. 
            Komodo Island has a surface area of 390 square kilometres and a human population of over two thousand. The people of the island are descendants of former convicts who were exiled to the island and who have mixed with Bugis from Sulawesi. The people are primarily adherents of Islam but there are also Christian and Hindu congregations.

            Komodo is part of the Lesser Sunda chain of islands and forms part of the Komodo National Park. In addition, the island is a popular destination for diving. Administratively, it is part of the East Nusa Tenggara province.',
            'featured_event' => 'Tarian Komodo',
            'language' => 'Bahasa',
            'foods' => 'Komodo',
            'departure_date' => date('Y-m-d H:i:s'),
            'duration' => '3D',
            'price' => 8000000,
            'updated_at' => now(),
            'created_at' => now()
        ]);
        

        Transaction::factory()->create([
            'travel_package_id' => 1,
            'user_id' => 2,
            'additional_visa' => 890088667,
            'transaction_total' => 1000000,
            'transaction_status' => 'PENDING',
            'updated_at' => now(),
            'created_at' => now()
        ]);

        TransactionDetail::factory()->create([
            'transaction_id' => 1,
            'username' => 'testuser1',
            'nationality' => 'Indonesia',
            'is_visa' => true,
            'doe_passport' => now(),
            'updated_at' => now(),
            'created_at' => now()
        ]);

        TransactionDetail::factory()->create([
            'transaction_id' => 1,
            'username' => 'testuser2',
            'nationality' => 'Indonesia',
            'is_visa' => true,
            'doe_passport' => now(),
            'updated_at' => now(),
            'created_at' => now()
        ]);
    }
}
