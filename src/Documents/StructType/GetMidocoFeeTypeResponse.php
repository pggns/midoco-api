<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoFeeTypeResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMidocoFeeTypeResponse extends AbstractStructBase
{
    /**
     * The MidocoFeeType
     * Meta information extracted from the WSDL
     * - ref: MidocoFeeType
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoFeeType|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoFeeType $MidocoFeeType = null;
    /**
     * Constructor method for GetMidocoFeeTypeResponse
     * @uses GetMidocoFeeTypeResponse::setMidocoFeeType()
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
     * @return \Pggns\MidocoApi\Documents\StructType\GetMidocoFeeTypeResponse
     */
    public function setMidocoFeeType(?\Pggns\MidocoApi\Documents\StructType\MidocoFeeType $midocoFeeType = null): self
    {
        $this->MidocoFeeType = $midocoFeeType;
        
        return $this;
    }
}
