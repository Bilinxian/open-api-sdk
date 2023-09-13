<?php

/**
 * User: Kify
 * Time: 2023/9/13-18:54
 */

namespace Wsb\OpenApi\Lib;

class ShipWay
{
    private $way_code;

    private $fee_type;

    /**
     * @return mixed
     */
    public function getWayCode()
    {
        return $this->way_code;
    }

    /**
     * @param mixed $way_code
     */
    public function setWayCode($way_code)
    {
        $this->way_code = $way_code;
    }

    /**
     * @return mixed
     */
    public function getFeeType()
    {
        return $this->fee_type;
    }

    /**
     * @param mixed $fee_type
     */
    public function setFeeType($fee_type)
    {
        $this->fee_type = $fee_type;
    }


}
