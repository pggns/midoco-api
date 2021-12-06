<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteCateringCodeRequest StructType
 * @subpackage Structs
 */
class DeleteCateringCodeRequest extends AbstractStructBase
{
    /**
     * The MidocoCateringCode
     * Meta information extracted from the WSDL
     * - ref: MidocoCateringCode
     * @var \Pggns\MidocoApi\OrderSD\StructType\MidocoCateringCode|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\MidocoCateringCode $MidocoCateringCode = null;
    /**
     * Constructor method for DeleteCateringCodeRequest
     * @uses DeleteCateringCodeRequest::setMidocoCateringCode()
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoCateringCode $midocoCateringCode
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\MidocoCateringCode $midocoCateringCode = null)
    {
        $this
            ->setMidocoCateringCode($midocoCateringCode);
    }
    /**
     * Get MidocoCateringCode value
     * @return \Pggns\MidocoApi\OrderSD\StructType\MidocoCateringCode|null
     */
    public function getMidocoCateringCode(): ?\Pggns\MidocoApi\OrderSD\StructType\MidocoCateringCode
    {
        return $this->MidocoCateringCode;
    }
    /**
     * Set MidocoCateringCode value
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoCateringCode $midocoCateringCode
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteCateringCodeRequest
     */
    public function setMidocoCateringCode(?\Pggns\MidocoApi\OrderSD\StructType\MidocoCateringCode $midocoCateringCode = null): self
    {
        $this->MidocoCateringCode = $midocoCateringCode;
        
        return $this;
    }
}
