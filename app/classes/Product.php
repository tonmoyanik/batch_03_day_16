<?php
namespace App\classes;
class Product
{
    public $data = [

        0=> [
            'id'=>'1',
            'title' => 'Shirt',
            'price'  => 'Tk. 550',
            'brand' => 'Brand: easy',
            'category' => 'Category: denim',
            'description'=> 'Desc: Smart Shirt',
            'image' => 'ss3.jpg',
        ],
        1=> [
            'id'=>'2',
            'title' => 'T-Shirt',
            'price'  => 'Tk. 900',
            'brand' => 'Brand: TextPoint',
            'category' => 'Category: denim',
            'description'=> 'Desc: Smart T-Shirt',
            'image' => 'ss1.jpg',
        ],
        2=> [
            'id'=>'3',
            'title' => 'Zippo Lighter',
            'price'  => 'Tk. 2200',
            'brand' => 'Brand: B&H',
            'category' => 'Category: medium',
            'description'=> 'Desc: B&H Special Zippo Lighter',
            'image' => 'ss4.jpg',
        ],
        3=> [
            'id'=>'4',
            'title' => 'Key Ring',
            'price'  => 'Tk. 550',
            'brand' => 'Brand: Rick',
            'category' => 'Category: deny',
            'description'=> 'Desc: Smart Key ring',
            'image' => 'ss5.jpg',
        ],
        4=> [
            'id'=>'5',
            'title' => 'Perfume',
            'price'  => 'Tk. 550',
            'brand' => 'Brand: Rico',
            'category' => 'Category: denim',
            'description'=> 'Desc: Axe',
            'image' => 'ss6.jpg',
        ],
        5=> [
            'id'=>'6',
            'title' => 'Che Cap',
            'price'  => 'Tk. 1100',
            'brand' => 'Brand: Oi',
            'category' => 'Category: stylish cap',
            'description'=> 'Desc: Smart che guevara designed Cap',
            'image' => 'ss7.jpg',
        ],
        6=> [
            'id'=>'7',
            'title' => 'Shoe',
            'price'  => 'Tk. 2200',
            'brand' => 'Brand: Appex',
            'category' => 'Category: Dress Shoe',
            'description'=> 'Desc: Smart dress shoe',
            'image' => 'ss8.jpg',
        ],
        7=> [
            'id'=>'8',
            'title' => 'Hand Watch',
            'price'  => 'Tk. 550',
            'brand' => 'Brand: Titan',
            'category' => 'denim',
            'description'=> 'Smart Titan hand Watch',
            'image' => 'ss9.jpg',
        ],

        8=> [
            'id'=>'9',
            'title' => 'Face Mask',
            'price'  => 'Tk. 50',
            'brand' => 'Brand: BD Care',
            'category' => 'Category: Surgical Mask',
            'description'=> 'Desc: Well protected surgical face mask',
            'image' => 'ss10.jpg',
        ],
        9=> [
            'id'=>'10',
            'title' => 'Guitar',
            'price'  => 'Tk. 45000',
            'brand' => ' Martin',
            'category' => 'Category: Classic Martin Acoustic',
            'description'=> 'Desc: Martin makes some incredibly beautiful (and expensive) instruments like the D-28 and D-45',
            'image' => 'ss11.jpg',
        ],
    ];
    public function getAllProduct()
    {
        return $this->data;
    }

}