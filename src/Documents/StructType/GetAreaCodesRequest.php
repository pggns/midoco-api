<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAreaCodesRequest StructType
 * @subpackage Structs
 */
class GetAreaCodesRequest extends AbstractStructBase
{
    /**
     * The MidocoAreaCode
     * Meta information extracted from the WSDL
     * - ref: MidocoAreaCode
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoAreaCode|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoAreaCode $MidocoAreaCode = null;
    /**
     * Constructor method for GetAreaCodesRequest
     * @uses GetAreaCodesRequest::setMidocoAreaCode()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoAreaCode $midocoAreaCode
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\MidocoAreaCode $midocoAreaCode = null)
    {
        $this
            ->setMidocoAreaCode($midocoAreaCode);
    }
    /**
     * Get MidocoAreaCode value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoAreaCode|null
     */
    public function getMidocoAreaCode(): ?\Pggns\MidocoApi\Documents\StructType\MidocoAreaCode
    {
        return $this->MidocoAreaCode;
    }
    /**
     * Set MidocoAreaCode value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoAreaCode $midocoAreaCode
     * @return \Pggns\MidocoApi\Documents\StructType\GetAreaCodesRequest
     */
    public function setMidocoAreaCode(?\Pggns\MidocoApi\Documents\StructType\MidocoAreaCode $midocoAreaCode = null): self
    {
        $this->MidocoAreaCode = $midocoAreaCode;
        
        return $this;
    }
}
