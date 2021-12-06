<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveAccountPeriodRequest StructType
 * @subpackage Structs
 */
class SaveAccountPeriodRequest extends AbstractStructBase
{
    /**
     * The MidocoBookingPeriodAccount
     * Meta information extracted from the WSDL
     * - ref: MidocoBookingPeriodAccount
     * @var \Pggns\MidocoApi\Api\Order\StructType\BookingPeriodAccountDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\BookingPeriodAccountDTO $MidocoBookingPeriodAccount = null;
    /**
     * Constructor method for SaveAccountPeriodRequest
     * @uses SaveAccountPeriodRequest::setMidocoBookingPeriodAccount()
     * @param \Pggns\MidocoApi\Api\Order\StructType\BookingPeriodAccountDTO $midocoBookingPeriodAccount
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\BookingPeriodAccountDTO $midocoBookingPeriodAccount = null)
    {
        $this
            ->setMidocoBookingPeriodAccount($midocoBookingPeriodAccount);
    }
    /**
     * Get MidocoBookingPeriodAccount value
     * @return \Pggns\MidocoApi\Api\Order\StructType\BookingPeriodAccountDTO|null
     */
    public function getMidocoBookingPeriodAccount(): ?\Pggns\MidocoApi\Api\Order\StructType\BookingPeriodAccountDTO
    {
        return $this->MidocoBookingPeriodAccount;
    }
    /**
     * Set MidocoBookingPeriodAccount value
     * @param \Pggns\MidocoApi\Api\Order\StructType\BookingPeriodAccountDTO $midocoBookingPeriodAccount
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveAccountPeriodRequest
     */
    public function setMidocoBookingPeriodAccount(?\Pggns\MidocoApi\Api\Order\StructType\BookingPeriodAccountDTO $midocoBookingPeriodAccount = null): self
    {
        $this->MidocoBookingPeriodAccount = $midocoBookingPeriodAccount;
        
        return $this;
    }
}
