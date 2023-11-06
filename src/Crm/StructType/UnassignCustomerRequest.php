<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnassignCustomerRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UnassignCustomerRequest extends AbstractStructBase
{
    /**
     * The MidocoAssignCustomer
     * Meta information extracted from the WSDL
     * - ref: MidocoAssignCustomer
     * @var \Pggns\MidocoApi\Crm\StructType\CustomerAssignDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\CustomerAssignDTO $MidocoAssignCustomer = null;
    /**
     * The internalVersion
     * @var int|null
     */
    protected ?int $internalVersion = null;
    /**
     * Constructor method for UnassignCustomerRequest
     * @uses UnassignCustomerRequest::setMidocoAssignCustomer()
     * @uses UnassignCustomerRequest::setInternalVersion()
     * @param \Pggns\MidocoApi\Crm\StructType\CustomerAssignDTO $midocoAssignCustomer
     * @param int $internalVersion
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\CustomerAssignDTO $midocoAssignCustomer = null, ?int $internalVersion = null)
    {
        $this
            ->setMidocoAssignCustomer($midocoAssignCustomer)
            ->setInternalVersion($internalVersion);
    }
    /**
     * Get MidocoAssignCustomer value
     * @return \Pggns\MidocoApi\Crm\StructType\CustomerAssignDTO|null
     */
    public function getMidocoAssignCustomer(): ?\Pggns\MidocoApi\Crm\StructType\CustomerAssignDTO
    {
        return $this->MidocoAssignCustomer;
    }
    /**
     * Set MidocoAssignCustomer value
     * @param \Pggns\MidocoApi\Crm\StructType\CustomerAssignDTO $midocoAssignCustomer
     * @return \Pggns\MidocoApi\Crm\StructType\UnassignCustomerRequest
     */
    public function setMidocoAssignCustomer(?\Pggns\MidocoApi\Crm\StructType\CustomerAssignDTO $midocoAssignCustomer = null): self
    {
        $this->MidocoAssignCustomer = $midocoAssignCustomer;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Crm\StructType\UnassignCustomerRequest
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
