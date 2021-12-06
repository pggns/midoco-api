<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetVatCodesRequest StructType
 * @subpackage Structs
 */
class GetVatCodesRequest extends AbstractStructBase
{
    /**
     * The MidocoVatCode
     * Meta information extracted from the WSDL
     * - ref: MidocoVatCode
     * @var \Pggns\MidocoApi\Api\Documents\StructType\MidocoVatCode|null
     */
    protected ?\Pggns\MidocoApi\Api\Documents\StructType\MidocoVatCode $MidocoVatCode = null;
    /**
     * Constructor method for GetVatCodesRequest
     * @uses GetVatCodesRequest::setMidocoVatCode()
     * @param \Pggns\MidocoApi\Api\Documents\StructType\MidocoVatCode $midocoVatCode
     */
    public function __construct(?\Pggns\MidocoApi\Api\Documents\StructType\MidocoVatCode $midocoVatCode = null)
    {
        $this
            ->setMidocoVatCode($midocoVatCode);
    }
    /**
     * Get MidocoVatCode value
     * @return \Pggns\MidocoApi\Api\Documents\StructType\MidocoVatCode|null
     */
    public function getMidocoVatCode(): ?\Pggns\MidocoApi\Api\Documents\StructType\MidocoVatCode
    {
        return $this->MidocoVatCode;
    }
    /**
     * Set MidocoVatCode value
     * @param \Pggns\MidocoApi\Api\Documents\StructType\MidocoVatCode $midocoVatCode
     * @return \Pggns\MidocoApi\Api\Documents\StructType\GetVatCodesRequest
     */
    public function setMidocoVatCode(?\Pggns\MidocoApi\Api\Documents\StructType\MidocoVatCode $midocoVatCode = null): self
    {
        $this->MidocoVatCode = $midocoVatCode;
        
        return $this;
    }
}
