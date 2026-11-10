<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Создаем категории
        $airfryers = Category::create(['name' => 'Аэрогрили', 'slug' => 'airfryers']);
        $headphones = Category::create(['name' => 'Наушники', 'slug' => 'headphones']);
        $laptops = Category::create(['name' => 'Ноутбуки', 'slug' => 'laptops']);
        $pc = Category::create(['name' => 'Компьютеры', 'slug' => 'pc']);
        $phones = Category::create(['name' => 'Смартфоны', 'slug' => 'phones']);
        $tablets = Category::create(['name' => 'Планшеты', 'slug' => 'tablets']);
        $tvs = Category::create(['name' => 'Телевизоры', 'slug' => 'tvs']);
        $watches = Category::create(['name' => 'Умные часы', 'slug' => 'watches']);

        // 2. Создаем товары
        // --- Аэрогрили ---
        Product::create(['category_id' => $airfryers->id, 'name' => 'Xiaomi Air Fryer Pro', 'specs' => '6.5 л, 1800 Вт, 100 рецептов', 'price' => '399 BYN', 'stock' => 15, 'sold' => 10, 'image' => '/airfr/xiaomi.jpg']);
        Product::create(['category_id' => $airfryers->id, 'name' => 'Philips Air Fryer', 'specs' => '7.3 л, Rapid Air, сенсорный экран', 'price' => '749 BYN', 'stock' => 8, 'sold' => 5, 'image' => '/airfr/philips.jpg']);
        Product::create(['category_id' => $airfryers->id, 'name' => 'Tefal Easy Fry', 'specs' => '4.2 л, 8 программ, 1400 Вт', 'price' => '329 BYN', 'stock' => 12, 'sold' => 7, 'image' => '/airfr/tefal.jpeg']);
        Product::create(['category_id' => $airfryers->id, 'name' => 'Cosori Premium', 'specs' => '5.5 л, 11 программ, сенсор', 'price' => '449 BYN', 'stock' => 10, 'sold' => 10, 'image' => '/airfr/airfrmain.jpg']);
        Product::create(['category_id' => $airfryers->id, 'name' => 'Kitfort KT-1635', 'specs' => '5.5 л, 1800 Вт, 8 программ', 'price' => '279 BYN', 'stock' => 6, 'sold' => 3, 'image' => '/airfr/kitfort.jpg']);
        Product::create(['category_id' => $airfryers->id, 'name' => 'GFGRIL GFA-3500', 'specs' => '3.5 л, LED-дисплей, 8 программ', 'price' => '249 BYN', 'stock' => 9, 'sold' => 2, 'image' => '/airfr/gf.jpg']);
        Product::create(['category_id' => $airfryers->id, 'name' => 'Polaris PAF 0604', 'specs' => '6 л, 1800 Вт, 10 программ', 'price' => '359 BYN', 'stock' => 7, 'sold' => 4, 'image' => '/airfr/polaris.jpg']);
        Product::create(['category_id' => $airfryers->id, 'name' => 'Redmond SkyFryer', 'specs' => '5 л, 1500 Вт, 8 авто-программ', 'price' => '299 BYN', 'stock' => 11, 'sold' => 6, 'image' => '/airfr/redmond.png']);

        // --- Наушники ---
        Product::create(['category_id' => $headphones->id, 'name' => 'Sony WH-1000XM5', 'specs' => 'Беспроводные, шумоподавление, 30 ч', 'price' => '1 299 BYN', 'stock' => 8, 'sold' => 12, 'image' => '/headphones/sony.jpg']);
        Product::create(['category_id' => $headphones->id, 'name' => 'AirPods 4', 'specs' => 'Адаптивный шумодав, MagSafe, USB-C', 'price' => '999 BYN', 'stock' => 20, 'sold' => 15, 'image' => '/headphones/airpods4.jpg']);
        Product::create(['category_id' => $headphones->id, 'name' => 'JBL Tour One M2', 'specs' => 'Шумоподавление, 50 ч, адаптивный звук', 'price' => '899 BYN', 'stock' => 12, 'sold' => 5, 'image' => '/headphones/jbl.jpg']);
        Product::create(['category_id' => $headphones->id, 'name' => 'Nothing Ear (2)', 'specs' => 'Прозрачный дизайн, Hi-Res Audio, ANC', 'price' => '599 BYN', 'stock' => 15, 'sold' => 8, 'image' => '/headphones/nothing2.jpg']);
        Product::create(['category_id' => $headphones->id, 'name' => 'Bose QuietComfort Ultra', 'specs' => 'Пространственный звук, ANC, 24 ч', 'price' => '1 499 BYN', 'stock' => 6, 'sold' => 3, 'image' => '/headphones/bose.jpg']);
        Product::create(['category_id' => $headphones->id, 'name' => 'Sennheiser Momentum 4', 'specs' => '60 ч работы, aptX Adaptive, ANC', 'price' => '1 199 BYN', 'stock' => 9, 'sold' => 4, 'image' => '/headphones/senn.jpg']);
        Product::create(['category_id' => $headphones->id, 'name' => 'Beats Studio Pro', 'specs' => 'Персонализированный звук, USB-C', 'price' => '1 099 BYN', 'stock' => 7, 'sold' => 6, 'image' => '/headphones/beats.jpg']);
        Product::create(['category_id' => $headphones->id, 'name' => 'Huawei FreeBuds Pro 3', 'specs' => 'ANC 3.0, двойной драйвер, 31 ч', 'price' => '699 BYN', 'stock' => 14, 'sold' => 9, 'image' => '/headphones/huawei.jpg']);

        // --- Ноутбуки ---
        Product::create(['category_id' => $laptops->id, 'name' => 'MacBook Air M5', 'specs' => '13.6\", M5, 8 ГБ, 1 ТБ, Sky blue', 'price' => '6 100 BYN', 'stock' => 5, 'sold' => 3, 'image' => '/laptops/skyblue.jpg']);
        Product::create(['category_id' => $laptops->id, 'name' => 'Gigabyte G6X 9KG', 'specs' => '16\", OLED, Intel Core i7-13650HX, 16 ГБ, 1 ТБ', 'price' => '3 799 BYN', 'stock' => 4, 'sold' => 2, 'image' => '/laptops/g6x.jpg']);
        Product::create(['category_id' => $laptops->id, 'name' => 'ASUS VivoBook S16', 'specs' => '16\", Intel Core 5 210H, 16 ГБ, 512 ГБ', 'price' => '2 499 BYN', 'stock' => 7, 'sold' => 5, 'image' => '/laptops/asus.jpg']);
        Product::create(['category_id' => $laptops->id, 'name' => 'Apple MacBook Neo 13', 'specs' => '13\", OLED, A18 Pro, 16 ГБ, 512 ГБ', 'price' => '2 668 BYN', 'stock' => 6, 'sold' => 4, 'image' => '/laptops/neo.jpg']);
        Product::create(['category_id' => $laptops->id, 'name' => 'ASUS TUF Gaming A16', 'specs' => '15.6\", Intel Core i9, 16 ГБ, 512 ГБ', 'price' => '4 500 BYN', 'stock' => 3, 'sold' => 1, 'image' => '/laptops/asustuf16.jpg']);
        Product::create(['category_id' => $laptops->id, 'name' => 'HP Victus 15', 'specs' => '16\", OLED, Intel i5-10400f, 16 ГБ, 512 ГБ', 'price' => '2 300 BYN', 'stock' => 8, 'sold' => 6, 'image' => '/laptops/hp15.jpg']);
        Product::create(['category_id' => $laptops->id, 'name' => 'HONOR MagicBook X16', 'specs' => '16\", AMD Ryzen 7 260, 32 ГБ, 1 ТБ', 'price' => '3 950 BYN', 'stock' => 5, 'sold' => 2, 'image' => '/laptops/magicx16.jpg']);
        Product::create(['category_id' => $laptops->id, 'name' => 'Huawei MateBook 14', 'specs' => '14\", Intel Core i5-12400f, 16 ГБ, 512 ГБ', 'price' => '3 299 BYN', 'stock' => 6, 'sold' => 3, 'image' => '/laptops/mate14.jpg']);

        // --- Компьютеры ---
        Product::create(['category_id' => $pc->id, 'name' => 'Apple iMac M5', 'specs' => '24\", M5, 8 ГБ, 256 ГБ', 'price' => '6 499 BYN', 'stock' => 4, 'sold' => 2, 'image' => '/pc/imac.jpeg']);
        Product::create(['category_id' => $pc->id, 'name' => 'Mac mini M5', 'specs' => 'M5, 8 ГБ, 256 ГБ', 'price' => '2 799 BYN', 'stock' => 6, 'sold' => 3, 'image' => '/pc/macmini.jpg']);
        Product::create(['category_id' => $pc->id, 'name' => 'HP EliteDesk', 'specs' => 'Intel i5, 16 ГБ, 512 ГБ', 'price' => '2 199 BYN', 'stock' => 8, 'sold' => 5, 'image' => '/pc/hp.jpg']);
        Product::create(['category_id' => $pc->id, 'name' => 'Dell Inspiron', 'specs' => 'Intel i7, 32 ГБ, 1 ТБ', 'price' => '3 499 BYN', 'stock' => 5, 'sold' => 2, 'image' => '/pc/dell.jpg']);
        Product::create(['category_id' => $pc->id, 'name' => 'Lenovo IdeaCentre', 'specs' => 'Ryzen 7, 16 ГБ, 512 ГБ', 'price' => '2 499 BYN', 'stock' => 7, 'sold' => 4, 'image' => '/pc/lenovo.jpg']);
        Product::create(['category_id' => $pc->id, 'name' => 'ASUS ExpertCenter', 'specs' => 'Intel i5, 8 ГБ, 256 ГБ', 'price' => '1 899 BYN', 'stock' => 9, 'sold' => 6, 'image' => '/pc/asus.jpg']);
        Product::create(['category_id' => $pc->id, 'name' => 'Mac Studio M2', 'specs' => 'M2 Max, 32 ГБ, 512 ГБ', 'price' => '9 999 BYN', 'stock' => 3, 'sold' => 1, 'image' => '/pc/m2.jfif']);
        Product::create(['category_id' => $pc->id, 'name' => 'Acer Aspire', 'specs' => 'Intel i3, 8 ГБ, 256 ГБ', 'price' => '1 499 BYN', 'stock' => 10, 'sold' => 7, 'image' => '/pc/acer.jpg']);

        // --- Смартфоны ---
        Product::create(['category_id' => $phones->id, 'name' => 'iPhone 17 Pro', 'specs' => 'Apple A19 Pro, 12 ГБ, 512 ГБ, Silver', 'price' => '3 599 BYN', 'stock' => 12, 'sold' => 15, 'image' => '/phones/ip17pro.png']);
        Product::create(['category_id' => $phones->id, 'name' => 'Samsung S25 Ultra', 'specs' => 'Snapdragon 8 Elite, 12 ГБ, 1 ТБ, Black', 'price' => '5 499 BYN', 'stock' => 8, 'sold' => 6, 'image' => '/phones/samsung25.jpg']);
        Product::create(['category_id' => $phones->id, 'name' => 'Xiaomi 14 Pro', 'specs' => 'Snapdragon 8 ELite, 12 ГБ, 256 ГБ, Leica', 'price' => '3 499 BYN', 'stock' => 10, 'sold' => 8, 'image' => '/phones/xiaomi14.jpg']);
        Product::create(['category_id' => $phones->id, 'name' => 'iPhone 15 Pro', 'specs' => 'Apple A17 Pro, 8 ГБ, 256 ГБ, Natural Titanium', 'price' => '3 200 BYN', 'stock' => 6, 'sold' => 10, 'image' => '/phones/IP15100.png']);
        Product::create(['category_id' => $phones->id, 'name' => 'Google Pixel 10', 'specs' => 'Snapdragon 8+ Gen 1, 12 ГБ, 256 ГБ, Black', 'price' => '2 499 BYN', 'stock' => 7, 'sold' => 4, 'image' => '/phones/google10.jpg']);
        Product::create(['category_id' => $phones->id, 'name' => 'OnePlus 12', 'specs' => 'Snapdragon 8 Gen 3, 16 ГБ, 512 ГБ, White', 'price' => '4 299 BYN', 'stock' => 5, 'sold' => 3, 'image' => '/phones/oneplus12.jpg']);
        Product::create(['category_id' => $phones->id, 'name' => 'Honor Magic 6 Pro', 'specs' => 'Snapdragon 8 Gen 3, 12 ГБ, 512 ГБ, Green', 'price' => '3 799 BYN', 'stock' => 9, 'sold' => 5, 'image' => '/phones/honor6.jpg']);
        Product::create(['category_id' => $phones->id, 'name' => 'ASUS ROG Phone 8', 'specs' => 'Snapdragon 8 Gen 3, 16 ГБ, 512 ГБ, Grey', 'price' => '5 299 BYN', 'stock' => 4, 'sold' => 2, 'image' => '/phones/asus.jpg']);

        // --- Планшеты ---
        Product::create(['category_id' => $tablets->id, 'name' => 'iPad Pro', 'specs' => '11\", M4, 8 ГБ, 256 ГБ', 'price' => '4 299 BYN', 'stock' => 6, 'sold' => 4, 'image' => '/tablets/ipadpro.jpg']);
        Product::create(['category_id' => $tablets->id, 'name' => 'iPad Air', 'specs' => '11\", M2, 8 ГБ, 128 ГБ', 'price' => '2 799 BYN', 'stock' => 8, 'sold' => 6, 'image' => '/tablets/ipadiar.jpg']);
        Product::create(['category_id' => $tablets->id, 'name' => 'Samsung Tab S9 Ultra', 'specs' => '14.6\", Snapdragon 8 Gen 2, 12 ГБ', 'price' => '4 999 BYN', 'stock' => 5, 'sold' => 2, 'image' => '/tablets/samsung.jpg']);
        Product::create(['category_id' => $tablets->id, 'name' => 'Xiaomi Pad 6 Pro', 'specs' => '11\", Snapdragon 8+ Gen 1, 8 ГБ', 'price' => '1 899 BYN', 'stock' => 10, 'sold' => 7, 'image' => '/tablets/xiaomi.jpg']);
        Product::create(['category_id' => $tablets->id, 'name' => 'Huawei MatePad Pro', 'specs' => '13.2\", Kirin 9000S, 12 ГБ', 'price' => '3 299 BYN', 'stock' => 7, 'sold' => 3, 'image' => '/tablets/huawei.jpg']);
        Product::create(['category_id' => $tablets->id, 'name' => 'Lenovo Tab P12', 'specs' => '12.7\", Dimensity 7050, 8 ГБ', 'price' => '1 599 BYN', 'stock' => 9, 'sold' => 5, 'image' => '/tablets/lenovo.jpg']);
        Product::create(['category_id' => $tablets->id, 'name' => 'OnePlus Pad', 'specs' => '11.61\", Dimensity 9000, 8 ГБ', 'price' => '1 799 BYN', 'stock' => 6, 'sold' => 2, 'image' => '/tablets/oneplus.jfif']);
        Product::create(['category_id' => $tablets->id, 'name' => 'iPad mini', 'specs' => '8.3\", A15 Bionic, 4 ГБ', 'price' => '2 199 BYN', 'stock' => 11, 'sold' => 8, 'image' => '/tablets/mini.jpeg']);

        // --- Телевизоры ---
        Product::create(['category_id' => $tvs->id, 'name' => 'Samsung QLED 4K', 'specs' => '55\", QLED, 4K, Tizen', 'price' => '2 999 BYN', 'stock' => 5, 'sold' => 3, 'image' => '/tv/samsung.jpg']);
        Product::create(['category_id' => $tvs->id, 'name' => 'LG OLED C3', 'specs' => '55\", OLED, 4K, webOS', 'price' => '4 499 BYN', 'stock' => 4, 'sold' => 2, 'image' => '/tv/lg.jpg']);
        Product::create(['category_id' => $tvs->id, 'name' => 'Sony Bravia XR', 'specs' => '65\", Mini-LED, 4K, Google TV', 'price' => '5 999 BYN', 'stock' => 3, 'sold' => 1, 'image' => '/tv/sony.jpg']);
        Product::create(['category_id' => $tvs->id, 'name' => 'Xiaomi TV A Pro', 'specs' => '55\", 4K, Android TV, HDR', 'price' => '1 899 BYN', 'stock' => 8, 'sold' => 5, 'image' => '/tv/xiaomi.jpg']);
        Product::create(['category_id' => $tvs->id, 'name' => 'TCL C745', 'specs' => '65\", QLED, 4K, Google TV, 144 Гц', 'price' => '2 799 BYN', 'stock' => 6, 'sold' => 2, 'image' => '/tv/tcl.jpg']);
        Product::create(['category_id' => $tvs->id, 'name' => 'Hisense U7K', 'specs' => '55\", Mini-LED, 4K, VIDAA', 'price' => '2 199 BYN', 'stock' => 7, 'sold' => 4, 'image' => '/tv/hise.jpg']);
        Product::create(['category_id' => $tvs->id, 'name' => 'Philips Ambilight', 'specs' => '55\", 4K, Ambilight, Android TV', 'price' => '2 499 BYN', 'stock' => 5, 'sold' => 3, 'image' => '/tv/philips.jpg']);
        Product::create(['category_id' => $tvs->id, 'name' => 'Haier Smart TV', 'specs' => '50\", 4K, Android TV, HDR10', 'price' => '1 499 BYN', 'stock' => 9, 'sold' => 6, 'image' => '/tv/haier.jpg']);

        // --- Умные часы ---
        Product::create(['category_id' => $watches->id, 'name' => 'Apple Watch Series 9', 'specs' => '45 мм, GPS, Always-On, S9', 'price' => '1 799 BYN', 'stock' => 10, 'sold' => 8, 'image' => '/watches/apple.jpg']);
        Product::create(['category_id' => $watches->id, 'name' => 'Samsung Galaxy Watch 6', 'specs' => '44 мм, Wear OS, ECG, 40 ч', 'price' => '1 299 BYN', 'stock' => 8, 'sold' => 5, 'image' => '/watches/samsung.jpg']);
        Product::create(['category_id' => $watches->id, 'name' => 'Garmin Venu 3', 'specs' => '45 мм, AMOLED, GPS, 14 дней', 'price' => '1 899 BYN', 'stock' => 6, 'sold' => 3, 'image' => '/watches/garmin.jpg']);
        Product::create(['category_id' => $watches->id, 'name' => 'Huawei Watch GT 4', 'specs' => '46 мм, AMOLED, GPS, 14 дней', 'price' => '999 BYN', 'stock' => 12, 'sold' => 7, 'image' => '/watches/huawei.jpg']);
        Product::create(['category_id' => $watches->id, 'name' => 'Xiaomi Watch 2 Pro', 'specs' => '47 мм, Wear OS, GPS, 65 ч', 'price' => '1 099 BYN', 'stock' => 9, 'sold' => 4, 'image' => '/watches/xiaomi.jpg']);
        Product::create(['category_id' => $watches->id, 'name' => 'Amazfit Balance', 'specs' => '46 мм, AMOLED, GPS, 14 дней', 'price' => '799 BYN', 'stock' => 11, 'sold' => 6, 'image' => '/watches/amaz.jpg']);
        Product::create(['category_id' => $watches->id, 'name' => 'Google Pixel Watch 2', 'specs' => '41 мм, Wear OS, Fitbit, 24 ч', 'price' => '1 599 BYN', 'stock' => 7, 'sold' => 3, 'image' => '/watches/google.jpg']);
        Product::create(['category_id' => $watches->id, 'name' => 'OnePlus Watch 2', 'specs' => '47 мм, Wear OS, 100 ч, GPS', 'price' => '1 399 BYN', 'stock' => 8, 'sold' => 2, 'image' => '/watches/oneplus.jpg']);
    }
}