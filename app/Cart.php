<?php

namespace App;

class Cart
{
	public $items = null;
	public $totalQty = 0;
	public $totalPrice = 0;

	public function __construct($oldCart){
		if($oldCart){
			$this->items = $oldCart->items;
			$this->totalQty = $oldCart->totalQty;
			$this->totalPrice = $oldCart->totalPrice;
		}
	}

	public function add($item, $id,$sl){
		$giohang=[];
		if($item->giakm >0){
			$giohang = ['qty'=>0, 'price' => $item->giakm, 'item' => $item];
		}else{
			$giohang = ['qty'=>0, 'price' => $item->giasp, 'item' => $item];
		}

		
		if($this->items){
			if(array_key_exists($id, $this->items)){
				$giohang = $this->items[$id];
			}
		}
		$giohang['qty']+=$sl;
		if($item->giakm >0){
			$giohang['price'] = $item->giakm * $giohang['qty'];
		}else{
			$giohang['price'] = $item->giasp * $giohang['qty'];
		}
		
		$this->items[$id] = $giohang;
		$this->totalQty+=$sl;
		if($item->giakm >0){
			$this->totalPrice += $sl*$item->giakm;
		}else{
			$this->totalPrice += $sl*$item->giasp;
		}
		
	}
	//xóa 1
	public function removeOne($id){
		$this->items[$id]['qty']--;
		$this->items[$id]['price'] -= $this->items[$id]['item']['price'];
		$this->totalQty--;
		$this->totalPrice -= $this->items[$id]['item']['price'];
		if($this->items[$id]['qty']<=0){
			unset($this->items[$id]);
		}
	}
	//xóa nhiều
	public function removeAll($id){
		$this->totalQty -= $this->items[$id]['qty'];
		$this->totalPrice -= $this->items[$id]['price'];
		unset($this->items[$id]);
	}
}
