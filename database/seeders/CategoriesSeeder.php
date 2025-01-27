<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Örnek kategoriler
        $categories = [
            ['name' => 'AKSİYON FİLMLERİ'],
            ['name' => 'MACERA FİLMLERİ'],
            ['name' => 'KOMEDİ FİLMLERİ'],
            ['name' => 'DRAM FİLMLERİ'],
            ['name' => 'KORKU FİLMLERİ'],
            ['name' => 'FANTASTİK FİLMLERİ'],
            ['name' => 'GERİLİM FİLMLERİ'],
            ['name' => 'ROMANTİK FİLMLERİ'],
        ];

        // Kategorileri veritabanına ekle
        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
