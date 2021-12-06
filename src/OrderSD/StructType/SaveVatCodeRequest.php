<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveVatCodeRequest StructType
 * @subpackage Structs
 */
class SaveVatCodeRequest extends AbstractStructBase
{
    /**
     * The MidocoVatCode
     * Meta information extracted from the WSDL
     * - ref: MidocoVatCode
     * @var \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoVatCode|null
     */
    protected ?\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoVatCode $MidocoVatCode = null;
    /**
     * Constructor method for SaveVatCodeRequest
     * @uses SaveVatCodeRequest::setMidocoVatCode()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoVatCode $midocoVatCode
     */
    public function __construct(?\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoVatCode $midocoVatCode = null)
    {
        $this
            ->setMidocoVatCode($midocoVatCode);
    }
    /**
     * Get MidocoVatCode value
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoVatCode|null
     */
    public function getMidocoVatCode(): ?\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoVatCode
    {
        return $this->MidocoVatCode;
    }
    /**
     * Set MidocoVatCode value
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoVatCode $midocoVatCode
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\SaveVatCodeRequest
     */
    public function setMidocoVatCode(?\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoVatCode $midocoVatCode = null): self
    {
        $this->MidocoVatCode = $midocoVatCode;
        
        return $this;
    }
}