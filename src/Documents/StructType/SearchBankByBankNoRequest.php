<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchBankByBankNoRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchBankByBankNoRequest extends AbstractStructBase
{
    /**
     * The MidocoBankInfo
     * Meta information extracted from the WSDL
     * - ref: MidocoBankInfo
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoBankInfo|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoBankInfo $MidocoBankInfo = null;
    /**
     * Constructor method for SearchBankByBankNoRequest
     * @uses SearchBankByBankNoRequest::setMidocoBankInfo()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoBankInfo $midocoBankInfo
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\MidocoBankInfo $midocoBankInfo = null)
    {
        $this
            ->setMidocoBankInfo($midocoBankInfo);
    }
    /**
     * Get MidocoBankInfo value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoBankInfo|null
     */
    public function getMidocoBankInfo(): ?\Pggns\MidocoApi\Documents\StructType\MidocoBankInfo
    {
        return $this->MidocoBankInfo;
    }
    /**
     * Set MidocoBankInfo value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoBankInfo $midocoBankInfo
     * @return \Pggns\MidocoApi\Documents\StructType\SearchBankByBankNoRequest
     */
    public function setMidocoBankInfo(?\Pggns\MidocoApi\Documents\StructType\MidocoBankInfo $midocoBankInfo = null): self
    {
        $this->MidocoBankInfo = $midocoBankInfo;
        
        return $this;
    }
}
