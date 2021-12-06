<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AssignCustomerResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: assignCustomer --- assignment can be in both directions, delete records in both ways (origin_customer = p_origin_customer and assigned_customer = p_assigned_customer) or (origin_customer = p_assigned_customer and assigned_customer =
 * p_origin_customer
 * @subpackage Structs
 */
class AssignCustomerResponse extends AbstractStructBase
{
    /**
     * The internalVersion
     * @var int|null
     */
    protected ?int $internalVersion = null;
    /**
     * Constructor method for AssignCustomerResponse
     * @uses AssignCustomerResponse::setInternalVersion()
     * @param int $internalVersion
     */
    public function __construct(?int $internalVersion = null)
    {
        $this
            ->setInternalVersion($internalVersion);
    }
    /**
     * Get internalVersion value
     * @return int|null
     */
    public function getInternalVersion(): ?int
    {
        return $this->internalVersion;
    }
    /**
     * Set internalVersion value
     * @param int $internalVersion
     * @return \Pggns\MidocoApi\Crm\StructType\AssignCustomerResponse
     */
    public function setInternalVersion(?int $internalVersion = null): self
    {
        // validation for constraint: int
        if (!is_null($internalVersion) && !(is_int($internalVersion) || ctype_digit($internalVersion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($internalVersion, true), gettype($internalVersion)), __LINE__);
        }
        $this->internalVersion = $internalVersion;
        
        return $this;
    }
}
