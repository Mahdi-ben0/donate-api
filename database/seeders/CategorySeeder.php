<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Define a list of categories with names in three languages and a placeholder icon.
        $categories = [
            [
                'name' => 'Furniture',
                'name_ar' => 'أثاث',
                'name_fr' => 'Meubles',
                'icon' => 'fa-solid fa-couch',
            ],
            [
                'name' => 'Electronics & Tech',
                'name_ar' => 'إلكترونيات وتكنولوجيا',
                'name_fr' => 'Électronique et technologie',
                'icon' => 'fa-solid fa-laptop',
            ],
            [
                'name' => 'Fashion & Clothing',
                'name_ar' => 'الموضة والملابس',
                'name_fr' => 'Mode et vêtements',
                'icon' => 'fa-solid fa-shirt',
            ],
            [
                'name' => 'Books & Media',
                'name_ar' => 'كتب ووسائط',
                'name_fr' => 'Livres et médias',
                'icon' => 'fa-solid fa-book',
            ],
            [
                'name' => 'Home Appliances',
                'name_ar' => 'أدوات منزلية',
                'name_fr' => 'Appareils électroménagers',
                'icon' => 'fa-solid fa-blender',
            ],
            [
                'name' => 'Beauty & Personal Care',
                'name_ar' => 'الجمال والعناية الشخصية',
                'name_fr' => 'Beauté et soins personnels',
                'icon' => 'fa-solid fa-spa',
            ],
            [
                'name' => 'Childcare',
                'name_ar' => 'رعاية الأطفال',
                'name_fr' => 'Puériculture',
                'icon' => 'fa-solid fa-baby',
            ],
            [
                'name' => 'Sports & Outdoors',
                'name_ar' => 'الرياضة والأنشطة الخارجية',
                'name_fr' => 'Sports et plein air',
                'icon' => 'fa-solid fa-bicycle',
            ],
            [
                'name' => 'Kitchen & Dining',
                'name_ar' => 'مطبخ وطعام',
                'name_fr' => 'Cuisine et salle à manger',
                'icon' => 'fa-solid fa-kitchen-set',
            ],
            [
                'name' => 'Tools & DIY',
                'name_ar' => 'أدوات وأعمال يدوية',
                'name_fr' => 'Outils et bricolage',
                'icon' => 'fa-solid fa-screwdriver-wrench',
            ],
        ];

        // Loop through the array and create each category in the database.
        foreach ($categories as $category) {
            Category::firstOrCreate($category);
        }
    }
}
