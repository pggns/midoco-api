<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchBankByBankNoRequest StructType
 * @subpackage Structs
 */
class SearchBankByBankNoRequest extends AbstractStructBase
{
    /**
     * The MidocoBankInfo
     * Meta information extracted from the WSDL
     * - ref: MidocoBankInfo
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBankInfo|null
     */
    protected ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBankInfo $MidocoBankInfo = null;
    /**
     * Constructor method for SearchBankByBankNoRequest
     * @uses SearchBankByBankNoRequest::setMidocoBankInfo()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBankInfo $midocoBankInfo
     */
    public function __construct(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBankInfo $midocoBankInfo = null)
    {
        $this
            ->setMidocoBankInfo($midocoBankInfo);
    }
    /**
     * Get MidocoBankInfo value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBankInfo|null
     */
    public function getMidocoBankInfo(): ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBankInfo
    {
        return $this->MidocoBankInfo;
    }
    /**
     * Set MidocoBankInfo value
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBankInfo $midocoBankInfo
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\SearchBankByBankNoRequest
     */
    public function setMidocoBankInfo(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBankInfo $midocoBankInfo = null): self
    {
        $this->MidocoBankInfo = $midocoBankInfo;
        
        return $this;
    }
}
