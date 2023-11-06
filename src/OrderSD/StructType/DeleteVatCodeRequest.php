<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteVatCodeRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteVatCodeRequest extends AbstractStructBase
{
    /**
     * The MidocoVatCode
     * Meta information extracted from the WSDL
     * - ref: MidocoVatCode
     * @var \Pggns\MidocoApi\OrderSD\StructType\MidocoVatCode|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\MidocoVatCode $MidocoVatCode = null;
    /**
     * Constructor method for DeleteVatCodeRequest
     * @uses DeleteVatCodeRequest::setMidocoVatCode()
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoVatCode $midocoVatCode
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\MidocoVatCode $midocoVatCode = null)
    {
        $this
            ->setMidocoVatCode($midocoVatCode);
    }
    /**
     * Get MidocoVatCode value
     * @return \Pggns\MidocoApi\OrderSD\StructType\MidocoVatCode|null
     */
    public function getMidocoVatCode(): ?\Pggns\MidocoApi\OrderSD\StructType\MidocoVatCode
    {
        return $this->MidocoVatCode;
    }
    /**
     * Set MidocoVatCode value
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoVatCode $midocoVatCode
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteVatCodeRequest
     */
    public function setMidocoVatCode(?\Pggns\MidocoApi\OrderSD\StructType\MidocoVatCode $midocoVatCode = null): self
    {
        $this->MidocoVatCode = $midocoVatCode;
        
        return $this;
    }
}
