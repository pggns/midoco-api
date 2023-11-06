<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteMidocoFeeTypeRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: remove a fee type
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteMidocoFeeTypeRequest extends AbstractStructBase
{
    /**
     * The MidocoFeeType
     * Meta information extracted from the WSDL
     * - ref: MidocoFeeType
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoFeeType|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoFeeType $MidocoFeeType = null;
    /**
     * Constructor method for DeleteMidocoFeeTypeRequest
     * @uses DeleteMidocoFeeTypeRequest::setMidocoFeeType()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoFeeType $midocoFeeType
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\MidocoFeeType $midocoFeeType = null)
    {
        $this
            ->setMidocoFeeType($midocoFeeType);
    }
    /**
     * Get MidocoFeeType value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoFeeType|null
     */
    public function getMidocoFeeType(): ?\Pggns\MidocoApi\Documents\StructType\MidocoFeeType
    {
        return $this->MidocoFeeType;
    }
    /**
     * Set MidocoFeeType value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoFeeType $midocoFeeType
     * @return \Pggns\MidocoApi\Documents\StructType\DeleteMidocoFeeTypeRequest
     */
    public function setMidocoFeeType(?\Pggns\MidocoApi\Documents\StructType\MidocoFeeType $midocoFeeType = null): self
    {
        $this->MidocoFeeType = $midocoFeeType;
        
        return $this;
    }
}
