<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoFeeTypeResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: contains the fee
 * @subpackage Structs
 */
class SaveMidocoFeeTypeResponse extends AbstractStructBase
{
    /**
     * The MidocoFeeType
     * Meta information extracted from the WSDL
     * - ref: MidocoFeeType
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoFeeType|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoFeeType $MidocoFeeType = null;
    /**
     * Constructor method for SaveMidocoFeeTypeResponse
     * @uses SaveMidocoFeeTypeResponse::setMidocoFeeType()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoFeeType $midocoFeeType
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoFeeType $midocoFeeType = null)
    {
        $this
            ->setMidocoFeeType($midocoFeeType);
    }
    /**
     * Get MidocoFeeType value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoFeeType|null
     */
    public function getMidocoFeeType(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoFeeType
    {
        return $this->MidocoFeeType;
    }
    /**
     * Set MidocoFeeType value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoFeeType $midocoFeeType
     * @return \Pggns\MidocoApi\Orderlists\StructType\SaveMidocoFeeTypeResponse
     */
    public function setMidocoFeeType(?\Pggns\MidocoApi\Orderlists\StructType\MidocoFeeType $midocoFeeType = null): self
    {
        $this->MidocoFeeType = $midocoFeeType;
        
        return $this;
    }
}
