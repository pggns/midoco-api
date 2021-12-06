<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCateringCodesRequest StructType
 * @subpackage Structs
 */
class GetCateringCodesRequest extends AbstractStructBase
{
    /**
     * The MidocoCateringCode
     * Meta information extracted from the WSDL
     * - ref: MidocoCateringCode
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoCateringCode|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoCateringCode $MidocoCateringCode = null;
    /**
     * Constructor method for GetCateringCodesRequest
     * @uses GetCateringCodesRequest::setMidocoCateringCode()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoCateringCode $midocoCateringCode
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MidocoCateringCode $midocoCateringCode = null)
    {
        $this
            ->setMidocoCateringCode($midocoCateringCode);
    }
    /**
     * Get MidocoCateringCode value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoCateringCode|null
     */
    public function getMidocoCateringCode(): ?\Pggns\MidocoApi\Api\Order\StructType\MidocoCateringCode
    {
        return $this->MidocoCateringCode;
    }
    /**
     * Set MidocoCateringCode value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoCateringCode $midocoCateringCode
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetCateringCodesRequest
     */
    public function setMidocoCateringCode(?\Pggns\MidocoApi\Api\Order\StructType\MidocoCateringCode $midocoCateringCode = null): self
    {
        $this->MidocoCateringCode = $midocoCateringCode;
        
        return $this;
    }
}
