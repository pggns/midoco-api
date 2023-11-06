<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetValidVatCodesRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetValidVatCodesRequest extends AbstractStructBase
{
    /**
     * The MidocoVatDefinition
     * Meta information extracted from the WSDL
     * - ref: MidocoVatDefinition
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoVatDefinition|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoVatDefinition $MidocoVatDefinition = null;
    /**
     * The isOutputVat
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    protected ?bool $isOutputVat = null;
    /**
     * Constructor method for GetValidVatCodesRequest
     * @uses GetValidVatCodesRequest::setMidocoVatDefinition()
     * @uses GetValidVatCodesRequest::setIsOutputVat()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoVatDefinition $midocoVatDefinition
     * @param bool $isOutputVat
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\MidocoVatDefinition $midocoVatDefinition = null, ?bool $isOutputVat = null)
    {
        $this
            ->setMidocoVatDefinition($midocoVatDefinition)
            ->setIsOutputVat($isOutputVat);
    }
    /**
     * Get MidocoVatDefinition value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoVatDefinition|null
     */
    public function getMidocoVatDefinition(): ?\Pggns\MidocoApi\Documents\StructType\MidocoVatDefinition
    {
        return $this->MidocoVatDefinition;
    }
    /**
     * Set MidocoVatDefinition value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoVatDefinition $midocoVatDefinition
     * @return \Pggns\MidocoApi\Documents\StructType\GetValidVatCodesRequest
     */
    public function setMidocoVatDefinition(?\Pggns\MidocoApi\Documents\StructType\MidocoVatDefinition $midocoVatDefinition = null): self
    {
        $this->MidocoVatDefinition = $midocoVatDefinition;
        
        return $this;
    }
    /**
     * Get isOutputVat value
     * @return bool|null
     */
    public function getIsOutputVat(): ?bool
    {
        return $this->isOutputVat;
    }
    /**
     * Set isOutputVat value
     * @param bool $isOutputVat
     * @return \Pggns\MidocoApi\Documents\StructType\GetValidVatCodesRequest
     */
    public function setIsOutputVat(?bool $isOutputVat = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isOutputVat) && !is_bool($isOutputVat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isOutputVat, true), gettype($isOutputVat)), __LINE__);
        }
        $this->isOutputVat = $isOutputVat;
        
        return $this;
    }
}
