<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

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
     * @var \Pggns\MidocoApi\CrmSD\StructType\MidocoBankInfo|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\MidocoBankInfo $MidocoBankInfo = null;
    /**
     * Constructor method for SearchBankByBankNoRequest
     * @uses SearchBankByBankNoRequest::setMidocoBankInfo()
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoBankInfo $midocoBankInfo
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\MidocoBankInfo $midocoBankInfo = null)
    {
        $this
            ->setMidocoBankInfo($midocoBankInfo);
    }
    /**
     * Get MidocoBankInfo value
     * @return \Pggns\MidocoApi\CrmSD\StructType\MidocoBankInfo|null
     */
    public function getMidocoBankInfo(): ?\Pggns\MidocoApi\CrmSD\StructType\MidocoBankInfo
    {
        return $this->MidocoBankInfo;
    }
    /**
     * Set MidocoBankInfo value
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoBankInfo $midocoBankInfo
     * @return \Pggns\MidocoApi\CrmSD\StructType\SearchBankByBankNoRequest
     */
    public function setMidocoBankInfo(?\Pggns\MidocoApi\CrmSD\StructType\MidocoBankInfo $midocoBankInfo = null): self
    {
        $this->MidocoBankInfo = $midocoBankInfo;
        
        return $this;
    }
}
