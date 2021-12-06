<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveProductTypeRequest StructType
 * @subpackage Structs
 */
class SaveProductTypeRequest extends AbstractStructBase
{
    /**
     * The MidocoProductType
     * Meta information extracted from the WSDL
     * - ref: MidocoProductType
     * @var \Pggns\MidocoApi\OrderSD\StructType\MidocoProductTypeType|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\MidocoProductTypeType $MidocoProductType = null;
    /**
     * Constructor method for SaveProductTypeRequest
     * @uses SaveProductTypeRequest::setMidocoProductType()
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoProductTypeType $midocoProductType
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\MidocoProductTypeType $midocoProductType = null)
    {
        $this
            ->setMidocoProductType($midocoProductType);
    }
    /**
     * Get MidocoProductType value
     * @return \Pggns\MidocoApi\OrderSD\StructType\MidocoProductTypeType|null
     */
    public function getMidocoProductType(): ?\Pggns\MidocoApi\OrderSD\StructType\MidocoProductTypeType
    {
        return $this->MidocoProductType;
    }
    /**
     * Set MidocoProductType value
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoProductTypeType $midocoProductType
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveProductTypeRequest
     */
    public function setMidocoProductType(?\Pggns\MidocoApi\OrderSD\StructType\MidocoProductTypeType $midocoProductType = null): self
    {
        $this->MidocoProductType = $midocoProductType;
        
        return $this;
    }
}
