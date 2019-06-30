<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    protected $table = 'shoppingcart';

    protected $primaryKey = 'identifier';

    public static function getOrdersCount()
    {
        $orders = ShoppingCart::all();
        return $orders->count();
    }

    public static function getOrdersTotal()
    {
        $orders = ShoppingCart::all();
        $total = 0;
        foreach ($orders as $order) {
            $total += ShoppingCart::getOrderItemTotal($order);
        }
        return $total;
    }

    public static function getOrderItemCount($item)
    {
        $content = unserialize(data_get(ShoppingCart::find($item->identifier), 'content'));
        return $content->count();
    }

    public static function getOrderItemTotal($item)
    {
        $content = unserialize(data_get(ShoppingCart::find($item->identifier), 'content'));
        $total = 0;
        foreach ($content as $pro) {
            $total += $pro->subtotal;
        }
        return $total;
    }
}
