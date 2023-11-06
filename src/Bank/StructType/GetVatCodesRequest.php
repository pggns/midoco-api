<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetVatCodesRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetVatCodesRequest extends AbstractStructBase
{
    /**
     * The MidocoVatCode
     * Meta information extracted from the WSDL
     * - ref: MidocoVatCode
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoVatCode|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\MidocoVatCode $MidocoVatCode = null;
    /**
     * Constructor method for GetVatCodesRequest
     * @uses GetVatCodesRequest::setMidocoVatCode()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoVatCode $midocoVatCode
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\MidocoVatCode $midocoVatCode = null)
    {
        $this
            ->setMidocoVatCode($midocoVatCode);
    }
    /**
     * Get MidocoVatCode value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoVatCode|null
     */
    public function getMidocoVatCode(): ?\Pggns\MidocoApi\Bank\StructType\MidocoVatCode
    {
        return $this->MidocoVatCode;
    }
    /**
     * Set MidocoVatCode value
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoVatCode $midocoVatCode
     * @return \Pggns\MidocoApi\Bank\StructType\GetVatCodesRequest
     */
    public function setMidocoVatCode(?\Pggns\MidocoApi\Bank\StructType\MidocoVatCode $midocoVatCode = null): self
    {
        $this->MidocoVatCode = $midocoVatCode;
        
        return $this;
    }
}
