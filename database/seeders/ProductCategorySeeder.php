<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductCategorySeeder extends Seeder
{
    public function run()
    {
        $categoriesData = [];

        // Insert top-level categories
        $topLevelCategories = [
            'Apparel',
            'Footwear',
            'Accessories',
            'Beauty',
            'Brands',
            'Sale',
            'Trending',
            'Occasions',
            'Size',
            'Collections',
        ];

        foreach ($topLevelCategories as $categoryName) {
            $categoryId = DB::table('product_categories')->insertGetId(['categoryName' => $categoryName]);

            // Add top-level categories to the data array
            $categoriesData[] = ['categoryName' => $categoryName, 'parentCategoryID' => null];

            // Define subcategories for each top-level category
            $subcategories = [];

            switch ($categoryName) {
                case 'Apparel':
                    $subcategories = [
                        'Tops', 'T-Shirts', 'Shirts', 'Blouses',
                        'Bottoms', 'Jeans', 'Pants', 'Skirts', 'Dresses',
                        'Outerwear', 'Jackets', 'Coats', 'Sweaters',
                        'Activewear', 'Lingerie', 'Sleepwear',
                    ];
                    break;
                case 'Footwear':
                    $subcategories = [
                        "Men's Shoes", 'Sneakers', 'Dress Shoes', 'Boots',
                        "Women's Shoes", 'Flats', 'Heels', 'Sandals',
                        "Kids' Shoes", 'Athletic Shoes', 'Slippers',
                    ];
                    break;
                case 'Accessories':
                    $subcategories = [
                        'Handbags', 'Backpacks', 'Wallets',
                        'Jewelry', 'Necklaces', 'Earrings', 'Bracelets',
                        'Hats', 'Scarves', 'Sunglasses', 'Watches', 'Belts',
                    ];
                    break;
                case 'Beauty':
                    $subcategories = [
                        'Makeup', 'Face', 'Eyes', 'Lips',
                        'Skincare', 'Fragrances', 'Haircare', 'Nail Care', 'Beauty Tools',
                    ];
                    break;
                case 'Brands':
                    // You can add a list of popular fashion brands here
                    $brands = [
                        'Nike', 'Adidas', 'Gucci', 'Prada', 'Zara',
                        'H&M', 'Calvin Klein', 'Louis Vuitton', 'Versace', 'Chanel',
                    ];
                    foreach ($brands as $brandName) {
                        $categoriesData[] = ['categoryName' => $brandName, 'parentCategoryID' => $categoryId];
                    }
                    break;
                case 'Occasions':
                    $subcategories = [
                        'Casual', 'Formal', 'Party', 'Wedding', 'Athletic',
                    ];
                    break;
                case 'Size':
                    $subcategories = ['XS', 'S', 'M', 'L', 'XL', 'Plus Sizes'];
                    break;
                case 'Collections':
                    $subcategories = ['Sustainable', 'Vintage', 'Designer', 'Streetwear'];
                    break;
                default:
                    // Handle other top-level categories here if needed
                    break;
            }

            // Insert subcategories and add them to the data array
            foreach ($subcategories as $subcategoryName) {
                $categoriesData[] = ['categoryName' => $subcategoryName, 'parentCategoryID' => $categoryId];
            }
        }

        // Insert all categories and subcategories
        DB::table('product_categories')->insert($categoriesData);
    }
}
