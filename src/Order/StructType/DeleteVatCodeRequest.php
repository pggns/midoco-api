<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteVatCodeRequest StructType
 * @subpackage Structs
 */
class DeleteVatCodeRequest extends AbstractStructBase
{
    /**
     * The MidocoVatCode
     * Meta information extracted from the WSDL
     * - ref: MidocoVatCode
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoVatCode|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoVatCode $MidocoVatCode = null;
    /**
     * Constructor method for DeleteVatCodeRequest
     * @uses DeleteVatCodeRequest::setMidocoVatCode()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoVatCode $midocoVatCode
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MidocoVatCode $midocoVatCode = null)
    {
        $this
            ->setMidocoVatCode($midocoVatCode);
    }
    /**
     * Get MidocoVatCode value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoVatCode|null
     */
    public function getMidocoVatCode(): ?\Pggns\MidocoApi\Api\Order\StructType\MidocoVatCode
    {
        return $this->MidocoVatCode;
    }
    /**
     * Set MidocoVatCode value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoVatCode $midocoVatCode
     * @return \Pggns\MidocoApi\Api\Order\StructType\DeleteVatCodeRequest
     */
    public function setMidocoVatCode(?\Pggns\MidocoApi\Api\Order\StructType\MidocoVatCode $midocoVatCode = null): self
    {
        $this->MidocoVatCode = $midocoVatCode;
        
        return $this;
    }
}