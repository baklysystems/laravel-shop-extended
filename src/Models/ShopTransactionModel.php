<?php

namespace BaklySystems\LaravelShop\Models;

/**
 * This file is part of LaravelShop,
 * A shop solution for Laravel.
 *
 * @author Alejandro Mostajo
 * @copyright BaklySystems, LLC
 * @license MIT
 * @package BaklySystems\LaravelShop
 */

use BaklySystems\LaravelShop\Contracts\ShopTransactionInterface;
use BaklySystems\LaravelShop\Traits\ShopTransactionTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;

class ShopTransactionModel extends Model implements ShopTransactionInterface
{
    use ShopTransactionTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table;

    /**
     * Fillable attributes for mass assignment.
     *
     * @var array
     */
    protected $fillable = ['order_id', 'gateway', 'transaction_id', 'detail', 'token'];

    /**
     * Creates a new instance of the model.
     *
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->table = Config::get('shop.transaction_table');
    }
}