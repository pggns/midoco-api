<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCustomerIdType StructType
 * @subpackage Structs
 */
class MidocoCustomerIdType extends AbstractStructBase
{
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The customerOrgUnit
     * @var string|null
     */
    protected ?string $customerOrgUnit = null;
    /**
     * Constructor method for MidocoCustomerIdType
     * @uses MidocoCustomerIdType::setCustomerId()
     * @uses MidocoCustomerIdType::setCustomerOrgUnit()
     * @param int $customerId
     * @param string $customerOrgUnit
     */
    public function __construct(?int $customerId = null, ?string $customerOrgUnit = null)
    {
        $this
            ->setCustomerId($customerId)
            ->setCustomerOrgUnit($customerOrgUnit);
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
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoCustomerIdType
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
     * Get customerOrgUnit value
     * @return string|null
     */
    public function getCustomerOrgUnit(): ?string
    {
        return $this->customerOrgUnit;
    }
    /**
     * Set customerOrgUnit value
     * @param string $customerOrgUnit
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoCustomerIdType
     */
    public function setCustomerOrgUnit(?string $customerOrgUnit = null): self
    {
        // validation for constraint: string
        if (!is_null($customerOrgUnit) && !is_string($customerOrgUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerOrgUnit, true), gettype($customerOrgUnit)), __LINE__);
        }
        $this->customerOrgUnit = $customerOrgUnit;
        
        return $this;
    }
}
