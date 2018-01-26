<?php

namespace BaklySystems\LaravelShop\Traits;

/**
 * This file is part of LaravelShop,
 * A shop solution for Laravel.
 *
 * @author Alejandro Mostajo
 * @copyright BaklySystems, LLC
 * @license MIT
 * @package BaklySystems\LaravelShop
 */

use Illuminate\Support\Facades\Config;
use InvalidArgumentException;

trait ShopTransactionTrait
{
    /**
     * One-to-One relations with the order model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function order()
    {
        return $this->belongsTo(Config::get('shop.order_table'), 'order_id');
    }

    /**
     * Scopes to get transactions from user.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeWhereUser($query, $userId)
    {
        return $query->join(
                Config::get('shop.order_table'),
                Config::get('shop.order_table') . '.id',
                '=',
                Config::get('shop.transaction_table') . '.order_id'
            )
            ->where(Config::get('shop.order_table') . '.user_id', $userId);
    }
}
