<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSupplierCcCardRequest StructType
 * @subpackage Structs
 */
class GetSupplierCcCardRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplier
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplier
     * @var \Pggns\MidocoApi\Api\Documents\StructType\MidocoSupplierType|null
     */
    protected ?\Pggns\MidocoApi\Api\Documents\StructType\MidocoSupplierType $MidocoSupplier = null;
    /**
     * The orgunit
     * @var string|null
     */
    protected ?string $orgunit = null;
    /**
     * Constructor method for GetSupplierCcCardRequest
     * @uses GetSupplierCcCardRequest::setMidocoSupplier()
     * @uses GetSupplierCcCardRequest::setOrgunit()
     * @param \Pggns\MidocoApi\Api\Documents\StructType\MidocoSupplierType $midocoSupplier
     * @param string $orgunit
     */
    public function __construct(?\Pggns\MidocoApi\Api\Documents\StructType\MidocoSupplierType $midocoSupplier = null, ?string $orgunit = null)
    {
        $this
            ->setMidocoSupplier($midocoSupplier)
            ->setOrgunit($orgunit);
    }
    /**
     * Get MidocoSupplier value
     * @return \Pggns\MidocoApi\Api\Documents\StructType\MidocoSupplierType|null
     */
    public function getMidocoSupplier(): ?\Pggns\MidocoApi\Api\Documents\StructType\MidocoSupplierType
    {
        return $this->MidocoSupplier;
    }
    /**
     * Set MidocoSupplier value
     * @param \Pggns\MidocoApi\Api\Documents\StructType\MidocoSupplierType $midocoSupplier
     * @return \Pggns\MidocoApi\Api\Documents\StructType\GetSupplierCcCardRequest
     */
    public function setMidocoSupplier(?\Pggns\MidocoApi\Api\Documents\StructType\MidocoSupplierType $midocoSupplier = null): self
    {
        $this->MidocoSupplier = $midocoSupplier;
        
        return $this;
    }
    /**
     * Get orgunit value
     * @return string|null
     */
    public function getOrgunit(): ?string
    {
        return $this->orgunit;
    }
    /**
     * Set orgunit value
     * @param string $orgunit
     * @return \Pggns\MidocoApi\Api\Documents\StructType\GetSupplierCcCardRequest
     */
    public function setOrgunit(?string $orgunit = null): self
    {
        // validation for constraint: string
        if (!is_null($orgunit) && !is_string($orgunit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgunit, true), gettype($orgunit)), __LINE__);
        }
        $this->orgunit = $orgunit;
        
        return $this;
    }
}