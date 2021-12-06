<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LookupBankRequest StructType
 * @subpackage Structs
 */
class LookupBankRequest extends AbstractStructBase
{
    /**
     * The MidocoBankLookup
     * Meta information extracted from the WSDL
     * - ref: MidocoBankLookup
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\BankLookupDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\CrmSD\StructType\BankLookupDTO $MidocoBankLookup = null;
    /**
     * Constructor method for LookupBankRequest
     * @uses LookupBankRequest::setMidocoBankLookup()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\BankLookupDTO $midocoBankLookup
     */
    public function __construct(?\Pggns\MidocoApi\Api\CrmSD\StructType\BankLookupDTO $midocoBankLookup = null)
    {
        $this
            ->setMidocoBankLookup($midocoBankLookup);
    }
    /**
     * Get MidocoBankLookup value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\BankLookupDTO|null
     */
    public function getMidocoBankLookup(): ?\Pggns\MidocoApi\Api\CrmSD\StructType\BankLookupDTO
    {
        return $this->MidocoBankLookup;
    }
    /**
     * Set MidocoBankLookup value
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\BankLookupDTO $midocoBankLookup
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\LookupBankRequest
     */
    public function setMidocoBankLookup(?\Pggns\MidocoApi\Api\CrmSD\StructType\BankLookupDTO $midocoBankLookup = null): self
    {
        $this->MidocoBankLookup = $midocoBankLookup;
        
        return $this;
    }
}
