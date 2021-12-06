<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCrmCustomerPaymentGroupFeeResponse StructType
 * @subpackage Structs
 */
class GetCrmCustomerPaymentGroupFeeResponse extends AbstractStructBase
{
    /**
     * The groupFee
     * @var string|null
     */
    protected ?string $groupFee = null;
    /**
     * Constructor method for GetCrmCustomerPaymentGroupFeeResponse
     * @uses GetCrmCustomerPaymentGroupFeeResponse::setGroupFee()
     * @param string $groupFee
     */
    public function __construct(?string $groupFee = null)
    {
        $this
            ->setGroupFee($groupFee);
    }
    /**
     * Get groupFee value
     * @return string|null
     */
    public function getGroupFee(): ?string
    {
        return $this->groupFee;
    }
    /**
     * Set groupFee value
     * @param string $groupFee
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetCrmCustomerPaymentGroupFeeResponse
     */
    public function setGroupFee(?string $groupFee = null): self
    {
        // validation for constraint: string
        if (!is_null($groupFee) && !is_string($groupFee)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($groupFee, true), gettype($groupFee)), __LINE__);
        }
        $this->groupFee = $groupFee;
        
        return $this;
    }
}
