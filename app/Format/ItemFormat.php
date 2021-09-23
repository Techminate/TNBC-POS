<?php

namespace App\Format;

class ItemFormat{
    public function formatItemList($item){
        return[
            'item_id' => $item->id,
            'category' => $item->category->name,
            'brand' => $item->brand->name,
            'unit' => $item->unit->name,
            'supplier' => $item->supplier->name,
            'name' => $item->name,
            'slug' => $item->slug,
            'sku' => $item->sku,
            'price' => $item->price,
            'discount' => $item->discount_price,
            'inventory' => $item->inventory,
            'expire_date' => $item->expire_date,
            'available' => $item->available,
            'image' => $item->image,
            'created_at'=>$item->created_at->diffForHumans(),
            'updated_at'=>$item->updated_at->diffForHumans()
        ];
    }
}