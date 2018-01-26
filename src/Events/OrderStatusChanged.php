<?php

namespace BaklySystems\LaravelShop\Events;

use Illuminate\Queue\SerializesModels;

/**
 * Event fired when an order has changed status code.
 *
 * @author Alejandro Mostajo
 * @copyright BaklySystems, LLC
 * @license MIT
 * @package BaklySystems\LaravelShop
 */
class OrderStatusChanged
{
	use SerializesModels;

	/**
     * Order ID.
     * @var int
     */
	public $id;

     /**
     * Order status code.
     * @var string
     */
     public $statusCode;

     /**
     * Previous order status code.
     * @var string
     */
     public $previousStatusCode;

	/**
     * Create a new event instance.
     *
     * @param int    $id         Order ID.
     * @param string $statusCode Order status code.
     *
     * @return void
     */
	public function __construct($id, $statusCode, $previousStatusCode)
	{
		$this->id = $id;
          $this->statusCode = $statusCode;
          $this->previousStatusCode = $previousStatusCode;
	}
}