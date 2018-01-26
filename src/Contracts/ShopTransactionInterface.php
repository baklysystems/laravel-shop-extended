<?php

namespace BaklySystems\LaravelShop\Contracts;

/**
 * This file is part of LaravelShop,
 * A shop solution for Laravel.
 *
 * @author Alejandro Mostajo
 * @copyright BaklySystems, LLC
 * @license MIT
 * @package BaklySystems\LaravelShop
 */

interface ShopTransactionInterface
{
    /**
     * One-to-One relations with the order model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function order();

    /**
     * Scopes to get transactions from user.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeWhereUser($query, $userId);
}