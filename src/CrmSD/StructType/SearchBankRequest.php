<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchBankRequest StructType
 * @subpackage Structs
 */
class SearchBankRequest extends AbstractStructBase
{
    /**
     * The MidocoBankSearch
     * Meta information extracted from the WSDL
     * - ref: MidocoBankSearch
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\BankSearchDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\CrmSD\StructType\BankSearchDTO $MidocoBankSearch = null;
    /**
     * Constructor method for SearchBankRequest
     * @uses SearchBankRequest::setMidocoBankSearch()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\BankSearchDTO $midocoBankSearch
     */
    public function __construct(?\Pggns\MidocoApi\Api\CrmSD\StructType\BankSearchDTO $midocoBankSearch = null)
    {
        $this
            ->setMidocoBankSearch($midocoBankSearch);
    }
    /**
     * Get MidocoBankSearch value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\BankSearchDTO|null
     */
    public function getMidocoBankSearch(): ?\Pggns\MidocoApi\Api\CrmSD\StructType\BankSearchDTO
    {
        return $this->MidocoBankSearch;
    }
    /**
     * Set MidocoBankSearch value
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\BankSearchDTO $midocoBankSearch
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\SearchBankRequest
     */
    public function setMidocoBankSearch(?\Pggns\MidocoApi\Api\CrmSD\StructType\BankSearchDTO $midocoBankSearch = null): self
    {
        $this->MidocoBankSearch = $midocoBankSearch;
        
        return $this;
    }
}
