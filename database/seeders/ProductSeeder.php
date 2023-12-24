<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\product;
use GuzzleHttp\Promise\Create;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=[
            [
                'name'=>'QuantumMax Plus Tablet-Phone Hybrid',
                'detail'=>'The QuantumMax Plus is a versatile device',
                'description'=>'The QuantumMax Plus is a versatile device that combines the functionality of a tablet and a smartphone. With a large 8-inch display, 5G connectivity, and a detachable keyboard, its perfect for productivity on the go. The dual-camera system ensures high-quality photos and video calls.',
                'brand'=>'FutureTech Innovations',
                'price'=>549.99,
                'shipping_cost'=>12.99,
                'image_path'=>'myImage',
            ],
            [
                'name'=>'StellarX Pro Smartphone',
                'detail'=>'The StellarX Pro is a flagship smartphone',
                'description'=>'The StellarX Pro is a flagship smartphone that boasts a stunning 6.5-inch AMOLED display, a powerful octa-core processor, and a triple-camera system for professional-quality photography. With 128GB of storage and a sleek metal and glass design, the StellarX Pro offers a premium mobile experience.',
                'brand'=>'TechSavvy',
                'price'=>699.99,
                'shipping_cost'=>9.99,
                'image_path'=>'myImage',
            ]
            ];
            foreach($data as $values){
                product::create($values);
            }
    }
}
