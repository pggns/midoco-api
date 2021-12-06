<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoOrderLayout StructType
 * @subpackage Structs
 */
class MidocoOrderLayout extends OrderLayoutDTO
{
    /**
     * The MidocoOrder
     * Meta information extracted from the WSDL
     * - ref: MidocoOrder
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoOrderType|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoOrderType $MidocoOrder = null;
    /**
     * The typeDescription
     * @var string|null
     */
    protected ?string $typeDescription = null;
    /**
     * Constructor method for MidocoOrderLayout
     * @uses MidocoOrderLayout::setMidocoOrder()
     * @uses MidocoOrderLayout::setTypeDescription()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoOrderType $midocoOrder
     * @param string $typeDescription
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\MidocoOrderType $midocoOrder = null, ?string $typeDescription = null)
    {
        $this
            ->setMidocoOrder($midocoOrder)
            ->setTypeDescription($typeDescription);
    }
    /**
     * Get MidocoOrder value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoOrderType|null
     */
    public function getMidocoOrder(): ?\Pggns\MidocoApi\Documents\StructType\MidocoOrderType
    {
        return $this->MidocoOrder;
    }
    /**
     * Set MidocoOrder value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoOrderType $midocoOrder
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoOrderLayout
     */
    public function setMidocoOrder(?\Pggns\MidocoApi\Documents\StructType\MidocoOrderType $midocoOrder = null): self
    {
        $this->MidocoOrder = $midocoOrder;
        
        return $this;
    }
    /**
     * Get typeDescription value
     * @return string|null
     */
    public function getTypeDescription(): ?string
    {
        return $this->typeDescription;
    }
    /**
     * Set typeDescription value
     * @param string $typeDescription
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoOrderLayout
     */
    public function setTypeDescription(?string $typeDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($typeDescription) && !is_string($typeDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typeDescription, true), gettype($typeDescription)), __LINE__);
        }
        $this->typeDescription = $typeDescription;
        
        return $this;
    }
}
