<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteAreaCodeRequest StructType
 * @subpackage Structs
 */
class DeleteAreaCodeRequest extends AbstractStructBase
{
    /**
     * The MidocoAreaCode
     * Meta information extracted from the WSDL
     * - ref: MidocoAreaCode
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoAreaCode|null
     */
    protected ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoAreaCode $MidocoAreaCode = null;
    /**
     * Constructor method for DeleteAreaCodeRequest
     * @uses DeleteAreaCodeRequest::setMidocoAreaCode()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoAreaCode $midocoAreaCode
     */
    public function __construct(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoAreaCode $midocoAreaCode = null)
    {
        $this
            ->setMidocoAreaCode($midocoAreaCode);
    }
    /**
     * Get MidocoAreaCode value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoAreaCode|null
     */
    public function getMidocoAreaCode(): ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoAreaCode
    {
        return $this->MidocoAreaCode;
    }
    /**
     * Set MidocoAreaCode value
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoAreaCode $midocoAreaCode
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\DeleteAreaCodeRequest
     */
    public function setMidocoAreaCode(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoAreaCode $midocoAreaCode = null): self
    {
        $this->MidocoAreaCode = $midocoAreaCode;
        
        return $this;
    }
}
