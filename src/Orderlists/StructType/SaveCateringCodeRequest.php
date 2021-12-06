<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCateringCodeRequest StructType
 * @subpackage Structs
 */
class SaveCateringCodeRequest extends AbstractStructBase
{
    /**
     * The MidocoCateringCode
     * Meta information extracted from the WSDL
     * - ref: MidocoCateringCode
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoCateringCode|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoCateringCode $MidocoCateringCode = null;
    /**
     * Constructor method for SaveCateringCodeRequest
     * @uses SaveCateringCodeRequest::setMidocoCateringCode()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoCateringCode $midocoCateringCode
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoCateringCode $midocoCateringCode = null)
    {
        $this
            ->setMidocoCateringCode($midocoCateringCode);
    }
    /**
     * Get MidocoCateringCode value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoCateringCode|null
     */
    public function getMidocoCateringCode(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoCateringCode
    {
        return $this->MidocoCateringCode;
    }
    /**
     * Set MidocoCateringCode value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoCateringCode $midocoCateringCode
     * @return \Pggns\MidocoApi\Orderlists\StructType\SaveCateringCodeRequest
     */
    public function setMidocoCateringCode(?\Pggns\MidocoApi\Orderlists\StructType\MidocoCateringCode $midocoCateringCode = null): self
    {
        $this->MidocoCateringCode = $midocoCateringCode;
        
        return $this;
    }
}
