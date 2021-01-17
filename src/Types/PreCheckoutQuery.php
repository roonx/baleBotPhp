<?php


namespace balePhp\Types;

/**
 * Class PreCheckoutQuery
 * @package balePhp\Types
 * @method string getId()
 * @method User getFrom()
 * @method string getCurrency()
 * @method string getShippingOptionId()
 * @method int getTotalAmount()
 * @method string getInvoicePayload()
 * @method OrderInfo getOrderInfo()
 * @method bool issetId()
 * @method User issetFrom()
 * @method bool issetCurrency()
 * @method bool issetShippingOptionId()
 * @method bool issetTotalAmount()
 * @method bool issetInvoicePayload()
 * @method bool issetOrderInfo()
 */
class PreCheckoutQuery extends base
{
    static protected $map = [
        'id' => true,
        'from' => User::class,
        'currency' => true,
        'total_amount' => true,
        'invoice_payload' => true,
        'shipping_option_id' => true,
        'order_info' => OrderInfo::class
    ];

    protected $Id;
    protected $From;
    protected $Currency;
    protected $ShippingOptionId;
    protected $TotalAmount;
    protected $InvoicePayload;
    protected $OrderInfo;

    protected function init($key, $value)
    {
        $this->$key = $value;
    }
}