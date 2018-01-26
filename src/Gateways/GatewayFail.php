<?php

namespace BaklySystems\LaravelShop\Gateways;

/**
 * This file is part of LaravelShop,
 * A shop solution for Laravel.
 *
 * @author Alejandro Mostajo
 * @copyright BaklySystems, LLC
 * @license MIT
 * @package BaklySystems\LaravelShop
 */

use BaklySystems\LaravelShop\Exceptions\CheckoutException;
use BaklySystems\LaravelShop\Exceptions\GatewayException;
use BaklySystems\LaravelShop\Exceptions\ShopException;
use BaklySystems\LaravelShop\Core\PaymentGateway;

class GatewayFail extends PaymentGateway
{
    /**
     * Called on cart checkout.
     *
     * @param Order $order Order.
     */
    public function onCheckout($cart)
    {
        throw new CheckoutException('Checkout failed.');
    }

    /**
     * Called by shop to charge order's amount.
     *
     * @param Order $order Order.
     *
     * @return bool
     */
    public function onCharge($order)
    {
        throw new GatewayException('Payment failed.');
    	return false;
    }
}