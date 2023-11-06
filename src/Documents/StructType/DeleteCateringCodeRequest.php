<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteCateringCodeRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteCateringCodeRequest extends AbstractStructBase
{
    /**
     * The MidocoCateringCode
     * Meta information extracted from the WSDL
     * - ref: MidocoCateringCode
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoCateringCode|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoCateringCode $MidocoCateringCode = null;
    /**
     * Constructor method for DeleteCateringCodeRequest
     * @uses DeleteCateringCodeRequest::setMidocoCateringCode()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoCateringCode $midocoCateringCode
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\MidocoCateringCode $midocoCateringCode = null)
    {
        $this
            ->setMidocoCateringCode($midocoCateringCode);
    }
    /**
     * Get MidocoCateringCode value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoCateringCode|null
     */
    public function getMidocoCateringCode(): ?\Pggns\MidocoApi\Documents\StructType\MidocoCateringCode
    {
        return $this->MidocoCateringCode;
    }
    /**
     * Set MidocoCateringCode value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoCateringCode $midocoCateringCode
     * @return \Pggns\MidocoApi\Documents\StructType\DeleteCateringCodeRequest
     */
    public function setMidocoCateringCode(?\Pggns\MidocoApi\Documents\StructType\MidocoCateringCode $midocoCateringCode = null): self
    {
        $this->MidocoCateringCode = $midocoCateringCode;
        
        return $this;
    }
}
