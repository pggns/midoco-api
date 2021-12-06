<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoFeeTypeRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: add/update a fee type
 * @subpackage Structs
 */
class SaveMidocoFeeTypeRequest extends AbstractStructBase
{
    /**
     * The MidocoFeeType
     * Meta information extracted from the WSDL
     * - ref: MidocoFeeType
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoFeeType|null
     */
    protected ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoFeeType $MidocoFeeType = null;
    /**
     * Constructor method for SaveMidocoFeeTypeRequest
     * @uses SaveMidocoFeeTypeRequest::setMidocoFeeType()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoFeeType $midocoFeeType
     */
    public function __construct(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoFeeType $midocoFeeType = null)
    {
        $this
            ->setMidocoFeeType($midocoFeeType);
    }
    /**
     * Get MidocoFeeType value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoFeeType|null
     */
    public function getMidocoFeeType(): ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoFeeType
    {
        return $this->MidocoFeeType;
    }
    /**
     * Set MidocoFeeType value
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoFeeType $midocoFeeType
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\SaveMidocoFeeTypeRequest
     */
    public function setMidocoFeeType(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoFeeType $midocoFeeType = null): self
    {
        $this->MidocoFeeType = $midocoFeeType;
        
        return $this;
    }
}
