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

use Log;
use BaklySystems\LaravelShop\Core\PaymentGateway;

class GatewayPass extends PaymentGateway
{
    /**
     * Called by shop to charge order's amount.
     *
     * @param Order $order Order.
     *
     * @return bool
     */
    public function onCharge($order)
    {
        $this->transactionId = uniqid();
    	return true;
    }
}