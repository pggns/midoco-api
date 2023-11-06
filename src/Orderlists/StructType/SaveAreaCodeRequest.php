<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

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
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoAreaCode|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoAreaCode $MidocoAreaCode = null;
    /**
     * Constructor method for SaveAreaCodeRequest
     * @uses SaveAreaCodeRequest::setMidocoAreaCode()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoAreaCode $midocoAreaCode
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoAreaCode $midocoAreaCode = null)
    {
        $this
            ->setMidocoAreaCode($midocoAreaCode);
    }
    /**
     * Get MidocoAreaCode value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoAreaCode|null
     */
    public function getMidocoAreaCode(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoAreaCode
    {
        return $this->MidocoAreaCode;
    }
    /**
     * Set MidocoAreaCode value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoAreaCode $midocoAreaCode
     * @return \Pggns\MidocoApi\Orderlists\StructType\SaveAreaCodeRequest
     */
    public function setMidocoAreaCode(?\Pggns\MidocoApi\Orderlists\StructType\MidocoAreaCode $midocoAreaCode = null): self
    {
        $this->MidocoAreaCode = $midocoAreaCode;
        
        return $this;
    }
}
