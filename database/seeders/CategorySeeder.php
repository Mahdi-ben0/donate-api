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
                'icon' => 'bed',
            ],
            [
                'name' => 'Electronics & Tech',
                'name_ar' => 'إلكترونيات وتكنولوجيا',
                'name_fr' => 'Électronique et technologie',
                'icon' => 'computer',
            ],
            [
                'name' => 'Fashion & Clothing',
                'name_ar' => 'الموضة والملابس',
                'name_fr' => 'Mode et vêtements',
                'icon' => 'shopping_bag',
            ],
            [
                'name' => 'Books & Media',
                'name_ar' => 'كتب ووسائط',
                'name_fr' => 'Livres et médias',
                'icon' => 'book',
            ],
            [
                'name' => 'Home Appliances',
                'name_ar' => 'أدوات منزلية',
                'name_fr' => 'Appareils électroménagers',
                'icon' => 'kitchen',
            ],
            [
                'name' => 'Beauty & Personal Care',
                'name_ar' => 'الجمال والعناية الشخصية',
                'name_fr' => 'Beauté et soins personnels',
                'icon' => 'palette',
            ],
            [
                'name' => 'Childcare',
                'name_ar' => 'رعاية الأطفال',
                'name_fr' => 'Puériculture',
                'icon' => 'child_friendly',
            ],
            [
                'name' => 'Sports & Outdoors',
                'name_ar' => 'الرياضة والأنشطة الخارجية',
                'name_fr' => 'Sports et plein air',
                'icon' => 'directions_bike',
            ],
            [
                'name' => 'Kitchen & Dining',
                'name_ar' => 'مطبخ وطعام',
                'name_fr' => 'Cuisine et salle à manger',
                'icon' => 'local_dining',
            ],
            [
                'name' => 'Tools & DIY',
                'name_ar' => 'أدوات وأعمال يدوية',
                'name_fr' => 'Outils et bricolage',
                'icon' => 'construction',
            ],
        ];

        // Loop through the array and create each category in the database.
        foreach ($categories as $category) {
            Category::firstOrCreate($category);
        }
    }
}
