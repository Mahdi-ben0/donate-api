<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ObjectItem;
use App\Models\Category;

class ObjectItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
     public function run()
    {
        // Get the categories created by the CategorySeeder.
        // We assume the CategorySeeder has already been run.
        $furnitureCategory = Category::where('name', 'Furniture')->first();
        $electronicsCategory = Category::where('name', 'Electronics & Tech')->first();
        $fashionCategory = Category::where('name', 'Fashion & Clothing')->first();
        $booksCategory = Category::where('name', 'Books & Media')->first();
        $appliancesCategory = Category::where('name', 'Home Appliances')->first();
        $beautyCategory = Category::where('name', 'Beauty & Personal Care')->first();
        $childcareCategory = Category::where('name', 'Childcare')->first();
        $sportsCategory = Category::where('name', 'Sports & Outdoors')->first();
        $kitchenCategory = Category::where('name', 'Kitchen & Dining')->first();
        $toolsCategory = Category::where('name', 'Tools & DIY')->first();

        // Check if categories exist before creating items to prevent errors.
        if ($furnitureCategory) {
            $this->seedItemsForCategory($furnitureCategory, [
                ['name' => 'Table', 'name_ar' => 'طاولة', 'name_fr' => 'Table', 'icon' => 'fa-solid fa-table'],
                ['name' => 'Chair', 'name_ar' => 'كرسي', 'name_fr' => 'Chaise', 'icon' => 'fa-solid fa-chair'],
                ['name' => 'Sofa', 'name_ar' => 'أريكة', 'name_fr' => 'Canapé', 'icon' => 'fa-solid fa-couch'],
                ['name' => 'Bed', 'name_ar' => 'سرير', 'name_fr' => 'Lit', 'icon' => 'fa-solid fa-bed'],
                ['name' => 'Desk', 'name_ar' => 'مكتب', 'name_fr' => 'Bureau', 'icon' => 'fa-solid fa-desk'],
                ['name' => 'Bookshelf', 'name_ar' => 'رف كتب', 'name_fr' => 'Étagère à livres', 'icon' => 'fa-solid fa-books'],
            ]);
        }

        if ($electronicsCategory) {
            $this->seedItemsForCategory($electronicsCategory, [
                ['name' => 'Laptop', 'name_ar' => 'حاسوب محمول', 'name_fr' => 'Ordinateur portable', 'icon' => 'fa-solid fa-laptop'],
                ['name' => 'Smartphone', 'name_ar' => 'هاتف ذكي', 'name_fr' => 'Téléphone intelligent', 'icon' => 'fa-solid fa-mobile-screen'],
                ['name' => 'Television', 'name_ar' => 'تلفاز', 'name_fr' => 'Télévision', 'icon' => 'fa-solid fa-tv'],
                ['name' => 'Monitor', 'name_ar' => 'شاشة', 'name_fr' => 'Écran', 'icon' => 'fa-solid fa-display'],
                ['name' => 'Tablet', 'name_ar' => 'جهاز لوحي', 'name_fr' => 'Tablette', 'icon' => 'fa-solid fa-tablet'],
                ['name' => 'Camera', 'name_ar' => 'كاميرا', 'name_fr' => 'Caméra', 'icon' => 'fa-solid fa-camera'],
            ]);
        }
        
        if ($fashionCategory) {
            $this->seedItemsForCategory($fashionCategory, [
                ['name' => 'Jacket', 'name_ar' => 'سترة', 'name_fr' => 'Veste', 'icon' => 'fa-solid fa-jacket'],
                ['name' => 'T-shirt', 'name_ar' => 'قميص', 'name_fr' => 'T-shirt', 'icon' => 'fa-solid fa-shirt'],
                ['name' => 'Pants', 'name_ar' => 'سروال', 'name_fr' => 'Pantalon', 'icon' => 'fa-solid fa-pants'],
                ['name' => 'Dress', 'name_ar' => 'فستان', 'name_fr' => 'Robe', 'icon' => 'fa-solid fa-vest'],
                ['name' => 'Shoes', 'name_ar' => 'حذاء', 'name_fr' => 'Chaussures', 'icon' => 'fa-solid fa-shoe-prints'],
                ['name' => 'Handbag', 'name_ar' => 'حقيبة يد', 'name_fr' => 'Sac à main', 'icon' => 'fa-solid fa-bag-shopping'],
            ]);
        }

        if ($booksCategory) {
            $this->seedItemsForCategory($booksCategory, [
                ['name' => 'Novel', 'name_ar' => 'رواية', 'name_fr' => 'Roman', 'icon' => 'fa-solid fa-book-open'],
                ['name' => 'Textbook', 'name_ar' => 'كتاب مدرسي', 'name_fr' => 'Manuel scolaire', 'icon' => 'fa-solid fa-book-atlas'],
                ['name' => 'Magazine', 'name_ar' => 'مجلة', 'name_fr' => 'Magazine', 'icon' => 'fa-solid fa-newspaper'],
                ['name' => 'DVD', 'name_ar' => 'قرص DVD', 'name_fr' => 'DVD', 'icon' => 'fa-solid fa-compact-disc'],
            ]);
        }

        if ($appliancesCategory) {
            $this->seedItemsForCategory($appliancesCategory, [
                ['name' => 'Blender', 'name_ar' => 'خلاط', 'name_fr' => 'Mélangeur', 'icon' => 'fa-solid fa-blender'],
                ['name' => 'Microwave', 'name_ar' => 'ميكروويف', 'name_fr' => 'Four à micro-ondes', 'icon' => 'fa-solid fa-microwave'],
                ['name' => 'Vacuum Cleaner', 'name_ar' => 'مكنسة كهربائية', 'name_fr' => 'Aspirateur', 'icon' => 'fa-solid fa-vacuum-cleaner'],
                ['name' => 'Refrigerator', 'name_ar' => 'ثلاجة', 'name_fr' => 'Réfrigérateur', 'icon' => 'fa-solid fa-box-tissue'],
                ['name' => 'Washing Machine', 'name_ar' => 'غسالة', 'name_fr' => 'Lave-linge', 'icon' => 'fa-solid fa-washer'],
            ]);
        }

        if ($beautyCategory) {
            $this->seedItemsForCategory($beautyCategory, [
                ['name' => 'Makeup', 'name_ar' => 'مكياج', 'name_fr' => 'Maquillage', 'icon' => 'fa-solid fa-hand-sparkles'],
                ['name' => 'Skincare', 'name_ar' => 'العناية بالبشرة', 'name_fr' => 'Soins de la peau', 'icon' => 'fa-solid fa-face-awesome'],
                ['name' => 'Hair Care', 'name_ar' => 'العناية بالشعر', 'name_fr' => 'Soins capillaires', 'icon' => 'fa-solid fa-cut'],
                ['name' => 'Perfume', 'name_ar' => 'عطر', 'name_fr' => 'Parfum', 'icon' => 'fa-solid fa-spray-can'],
            ]);
        }

        if ($childcareCategory) {
            $this->seedItemsForCategory($childcareCategory, [
                ['name' => 'Stroller', 'name_ar' => 'عربة أطفال', 'name_fr' => 'Poussette', 'icon' => 'fa-solid fa-stroller'],
                ['name' => 'Toys', 'name_ar' => 'ألعاب', 'name_fr' => 'Jouets', 'icon' => 'fa-solid fa-puzzle-piece'],
                ['name' => 'Diapers', 'name_ar' => 'حفاضات', 'name_fr' => 'Couches', 'icon' => 'fa-solid fa-baby-carriage'],
                ['name' => 'Baby Monitor', 'name_ar' => 'جهاز مراقبة الطفل', 'name_fr' => 'Babyphone', 'icon' => 'fa-solid fa-mobile'],
            ]);
        }

        if ($sportsCategory) {
            $this->seedItemsForCategory($sportsCategory, [
                ['name' => 'Ball', 'name_ar' => 'كرة', 'name_fr' => 'Ballon', 'icon' => 'fa-solid fa-football'],
                ['name' => 'Weights', 'name_ar' => 'أوزان', 'name_fr' => 'Poids', 'icon' => 'fa-solid fa-dumbbell'],
                ['name' => 'Bicycle', 'name_ar' => 'دراجة هوائية', 'name_fr' => 'Vélo', 'icon' => 'fa-solid fa-bicycle'],
                ['name' => 'Yoga Mat', 'name_ar' => 'سجادة يوغا', 'name_fr' => 'Tapis de yoga', 'icon' => 'fa-solid fa-mat'],
                ['name' => 'Camping Gear', 'name_ar' => 'معدات تخييم', 'name_fr' => 'Matériel de camping', 'icon' => 'fa-solid fa-campground'],
            ]);
        }

        if ($kitchenCategory) {
            $this->seedItemsForCategory($kitchenCategory, [
                ['name' => 'Pots and Pans', 'name_ar' => 'أواني وقدور', 'name_fr' => 'Casseroles et poêles', 'icon' => 'fa-solid fa-pot'],
                ['name' => 'Dishes', 'name_ar' => 'أطباق', 'name_fr' => 'Vaisselle', 'icon' => 'fa-solid fa-plate-wheat'],
                ['name' => 'Utensils', 'name_ar' => 'أدوات المطبخ', 'name_fr' => 'Ustensiles', 'icon' => 'fa-solid fa-utensils'],
                ['name' => 'Toaster', 'name_ar' => 'محمصة', 'name_fr' => 'Grille-pain', 'icon' => 'fa-solid fa-toaster'],
            ]);
        }

        if ($toolsCategory) {
            $this->seedItemsForCategory($toolsCategory, [
                ['name' => 'Screwdriver Set', 'name_ar' => 'مجموعة مفكات', 'name_fr' => 'Jeu de tournevis', 'icon' => 'fa-solid fa-screwdriver'],
                ['name' => 'Hammer', 'name_ar' => 'مطرقة', 'name_fr' => 'Marteau', 'icon' => 'fa-solid fa-hammer'],
                ['name' => 'Drill', 'name_ar' => 'مثقاب', 'name_fr' => 'Perceuse', 'icon' => 'fa-solid fa-drill'],
                ['name' => 'Wrench', 'name_ar' => 'مفتاح ربط', 'name_fr' => 'Clé à molette', 'icon' => 'fa-solid fa-wrench'],
            ]);
        }
    }

    /**
     * A helper function to create object items for a given category.
     *
     * @param \App\Models\Category $category
     * @param array $items
     * @return void
     */
    protected function seedItemsForCategory(Category $category, array $items)
    {
        foreach ($items as $item) {
            ObjectItem::firstOrCreate([
                'category_id' => $category->id,
                'name' => $item['name'],
                'name_ar' => $item['name_ar'],
                'name_fr' => $item['name_fr'],
                'icon' => $item['icon'],
            ]);
        }
    }
}
