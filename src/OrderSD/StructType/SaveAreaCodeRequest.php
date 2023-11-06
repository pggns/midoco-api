<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveAreaCodeRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveAreaCodeRequest extends AbstractStructBase
{
    /**
     * The MidocoAreaCode
     * Meta information extracted from the WSDL
     * - ref: MidocoAreaCode
     * @var \Pggns\MidocoApi\OrderSD\StructType\MidocoAreaCode|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\MidocoAreaCode $MidocoAreaCode = null;
    /**
     * Constructor method for SaveAreaCodeRequest
     * @uses SaveAreaCodeRequest::setMidocoAreaCode()
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoAreaCode $midocoAreaCode
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\MidocoAreaCode $midocoAreaCode = null)
    {
        $this
            ->setMidocoAreaCode($midocoAreaCode);
    }
    /**
     * Get MidocoAreaCode value
     * @return \Pggns\MidocoApi\OrderSD\StructType\MidocoAreaCode|null
     */
    public function getMidocoAreaCode(): ?\Pggns\MidocoApi\OrderSD\StructType\MidocoAreaCode
    {
        return $this->MidocoAreaCode;
    }
    /**
     * Set MidocoAreaCode value
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoAreaCode $midocoAreaCode
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveAreaCodeRequest
     */
    public function setMidocoAreaCode(?\Pggns\MidocoApi\OrderSD\StructType\MidocoAreaCode $midocoAreaCode = null): self
    {
        $this->MidocoAreaCode = $midocoAreaCode;
        
        return $this;
    }
}
