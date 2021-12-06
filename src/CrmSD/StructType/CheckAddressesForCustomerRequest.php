<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckAddressesForCustomerRequest StructType
 * @subpackage Structs
 */
class CheckAddressesForCustomerRequest extends AbstractStructBase
{
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The MidocoCrmAddress
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmAddress
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmAddress|null
     */
    protected ?\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmAddress $MidocoCrmAddress = null;
    /**
     * Constructor method for CheckAddressesForCustomerRequest
     * @uses CheckAddressesForCustomerRequest::setCustomerId()
     * @uses CheckAddressesForCustomerRequest::setMidocoCrmAddress()
     * @param int $customerId
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmAddress $midocoCrmAddress
     */
    public function __construct(?int $customerId = null, ?\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmAddress $midocoCrmAddress = null)
    {
        $this
            ->setCustomerId($customerId)
            ->setMidocoCrmAddress($midocoCrmAddress);
    }
    /**
     * Get customerId value
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\CheckAddressesForCustomerRequest
     */
    public function setCustomerId(?int $customerId = null): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
    /**
     * Get MidocoCrmAddress value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmAddress|null
     */
    public function getMidocoCrmAddress(): ?\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmAddress
    {
        return $this->MidocoCrmAddress;
    }
    /**
     * Set MidocoCrmAddress value
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmAddress $midocoCrmAddress
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\CheckAddressesForCustomerRequest
     */
    public function setMidocoCrmAddress(?\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmAddress $midocoCrmAddress = null): self
    {
        $this->MidocoCrmAddress = $midocoCrmAddress;
        
        return $this;
    }
}
