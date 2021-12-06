<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

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
     * @var \Pggns\MidocoApi\CrmSD\StructType\BankSearchDTO|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\BankSearchDTO $MidocoBankSearch = null;
    /**
     * Constructor method for SearchBankRequest
     * @uses SearchBankRequest::setMidocoBankSearch()
     * @param \Pggns\MidocoApi\CrmSD\StructType\BankSearchDTO $midocoBankSearch
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\BankSearchDTO $midocoBankSearch = null)
    {
        $this
            ->setMidocoBankSearch($midocoBankSearch);
    }
    /**
     * Get MidocoBankSearch value
     * @return \Pggns\MidocoApi\CrmSD\StructType\BankSearchDTO|null
     */
    public function getMidocoBankSearch(): ?\Pggns\MidocoApi\CrmSD\StructType\BankSearchDTO
    {
        return $this->MidocoBankSearch;
    }
    /**
     * Set MidocoBankSearch value
     * @param \Pggns\MidocoApi\CrmSD\StructType\BankSearchDTO $midocoBankSearch
     * @return \Pggns\MidocoApi\CrmSD\StructType\SearchBankRequest
     */
    public function setMidocoBankSearch(?\Pggns\MidocoApi\CrmSD\StructType\BankSearchDTO $midocoBankSearch = null): self
    {
        $this->MidocoBankSearch = $midocoBankSearch;
        
        return $this;
    }
}
