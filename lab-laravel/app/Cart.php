<?php

namespace App;

class Cart
{
    public $items;
    public $totalPrice=0;
    public $quantity=0;

    public function __construct($oldCart){
   	   	if ($oldCart){
   	   		$this->items = $oldCart->items;
   	   		$this->totalPrice = $oldCart->totalPrice;
            $this->quantity = $oldCart->quantity;
        }
    }

   	public function add($item){
        $i = ['quantity'=> 0, 'item'=>$item ];
        if ($this->items){
            if(array_key_exists($item->id, $this->items)){
            $i=$this->items[$item->id];
			}
		}
        $i['quantity']++;
        $this->items[$item->id] = $i;
        $this->totalPrice+=$item->price;
        $this->quantity++;
   	}
}
