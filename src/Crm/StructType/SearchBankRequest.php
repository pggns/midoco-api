<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

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
     * @var \Pggns\MidocoApi\Crm\StructType\BankSearchDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\BankSearchDTO $MidocoBankSearch = null;
    /**
     * Constructor method for SearchBankRequest
     * @uses SearchBankRequest::setMidocoBankSearch()
     * @param \Pggns\MidocoApi\Crm\StructType\BankSearchDTO $midocoBankSearch
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\BankSearchDTO $midocoBankSearch = null)
    {
        $this
            ->setMidocoBankSearch($midocoBankSearch);
    }
    /**
     * Get MidocoBankSearch value
     * @return \Pggns\MidocoApi\Crm\StructType\BankSearchDTO|null
     */
    public function getMidocoBankSearch(): ?\Pggns\MidocoApi\Crm\StructType\BankSearchDTO
    {
        return $this->MidocoBankSearch;
    }
    /**
     * Set MidocoBankSearch value
     * @param \Pggns\MidocoApi\Crm\StructType\BankSearchDTO $midocoBankSearch
     * @return \Pggns\MidocoApi\Crm\StructType\SearchBankRequest
     */
    public function setMidocoBankSearch(?\Pggns\MidocoApi\Crm\StructType\BankSearchDTO $midocoBankSearch = null): self
    {
        $this->MidocoBankSearch = $midocoBankSearch;
        
        return $this;
    }
}
