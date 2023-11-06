<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteMidocoFeeTypeResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteMidocoFeeTypeResponse extends AbstractStructBase
{
    /**
     * The MidocoFeeType
     * Meta information extracted from the WSDL
     * - ref: MidocoFeeType
     * @var \Pggns\MidocoApi\OrderSD\StructType\MidocoFeeType|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\MidocoFeeType $MidocoFeeType = null;
    /**
     * Constructor method for DeleteMidocoFeeTypeResponse
     * @uses DeleteMidocoFeeTypeResponse::setMidocoFeeType()
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoFeeType $midocoFeeType
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\MidocoFeeType $midocoFeeType = null)
    {
        $this
            ->setMidocoFeeType($midocoFeeType);
    }
    /**
     * Get MidocoFeeType value
     * @return \Pggns\MidocoApi\OrderSD\StructType\MidocoFeeType|null
     */
    public function getMidocoFeeType(): ?\Pggns\MidocoApi\OrderSD\StructType\MidocoFeeType
    {
        return $this->MidocoFeeType;
    }
    /**
     * Set MidocoFeeType value
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoFeeType $midocoFeeType
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteMidocoFeeTypeResponse
     */
    public function setMidocoFeeType(?\Pggns\MidocoApi\OrderSD\StructType\MidocoFeeType $midocoFeeType = null): self
    {
        $this->MidocoFeeType = $midocoFeeType;
        
        return $this;
    }
}
