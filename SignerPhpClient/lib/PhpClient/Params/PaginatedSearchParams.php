<?php


namespace Lacuna\Signer\PhpClient\Params;

use Lacuna\Signer\Model\PaginationOrders;


/**
 * Class PaginatedSearchParams
 * @package Lacuna\Signer\PhpClient\Params
 */
class PaginatedSearchParams
{

    public $q;
    public $limit = 10;
    public $offset;
    public $order;

    public function __construct()
    {
    }

    /**
     * @return string
     */
    function getQ()
    {
        return $this->q;
    }

    /**
     * @param string $q
     */
    function setQ($q)
    {
        $this->q = $q;
    }

    /**
     * @return int
     */
    function getLimit()
    {
        return $this->limit;
    }

    /**
     * @param int $limit
     */
    function setLimit($limit)
    {
        $this->limit = $limit;
    }

    /**
     * @return int
     */
    function getOffset()
    {
        return $this->offset;
    }

    /**
     * @param int $offset
     */
    function setOffset($offset)
    {
        $this->offset = $offset;

    }

    /**
     * @return PaginationOrders
     */
    function getOrder()
    {
        return $this->order;
    }

    /**
     * @param PaginationOrders | string $order
     */
    function setOrder($order)
    {
        $this->order = $order;

    }
}