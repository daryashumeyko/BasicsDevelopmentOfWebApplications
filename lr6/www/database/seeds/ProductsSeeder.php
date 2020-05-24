<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     
* Run the database seeds.
     *
     * @return void
     */
    public function run()
{
DB::table('products')->insert([
'name' => 'LG',
'description' => 'Protection Corning Gorilla Glass 4. MISC Colors Space Black, Luxe White, Modern Beige, Ocean Blue, Opal Blue.', 
'photo' => 'https://i.ebayimg.com/00/s/NjQxWDQyNA==/z/VDoAAOSwgk1XF2oo/$_35.JPG?set_id=89040003C1',
'price' => '39999'
]); 

DB::table('products')->insert([
'name' => 'Honor',
'description' => 'Honor 20S 128GB Peacock Blue (MAR-LX1H)',
'photo' => 'https://i.ebayimg.com/images/g/MS8AAOSwcGhejujH/s-l1600.jpg',
'price' => '19990'
]); 
	
DB::table('products')->insert([
'name' => 'Samsung',
'description' => 'Samsung Galaxy S10 Оnix (SM-G973F/DS)',
'photo' => 'https://i.ebayimg.com/images/g/WqUAAOSwtVpeiZwN/s-l1600.jpg',
'price' => '59990'
]); 
	
DB::table('products')->insert([
'name' => 'Apple',	
'description' => 'Apple iPhone 11 128GB Black (MWM02RU/A)',	
'photo' => 'https://i.ebayimg.com/images/g/SXcAAOSwIOdekef4/s-l300.png',	
'price' => '64990'
]);
	
DB::table('products')->insert([
'name' => 'Huawei',	
'description' => 'Huawei P40 Lite E 4/64GB Midnight Black (ART-L29)',	
'photo' => 'https://i.ebayimg.com/images/g/T9sAAOSw-exekI1s/s-l300.jpg',	
'price' => '12990'
]); 
	
DB::table('products')->insert([
'name' => 'Xiaomi',
'description' => 'Xiaomi Redmi 7A 16GB Blue',
'photo' => 'https://i.ebayimg.com/images/g/eZgAAOSwnGld01VS/s-l300.jpg',
'price' => '6990'
]);	
}
}
