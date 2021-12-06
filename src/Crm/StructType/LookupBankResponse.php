<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LookupBankResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: lookupBank --- looks up for a bank according to the BankLookup parameter. Returns a bank number
 * @subpackage Structs
 */
class LookupBankResponse extends AbstractStructBase
{
    /**
     * The MidocoBankNumber
     * Meta information extracted from the WSDL
     * - ref: MidocoBankNumber
     * @var \Pggns\MidocoApi\Crm\StructType\BankNumberDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\BankNumberDTO $MidocoBankNumber = null;
    /**
     * Constructor method for LookupBankResponse
     * @uses LookupBankResponse::setMidocoBankNumber()
     * @param \Pggns\MidocoApi\Crm\StructType\BankNumberDTO $midocoBankNumber
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\BankNumberDTO $midocoBankNumber = null)
    {
        $this
            ->setMidocoBankNumber($midocoBankNumber);
    }
    /**
     * Get MidocoBankNumber value
     * @return \Pggns\MidocoApi\Crm\StructType\BankNumberDTO|null
     */
    public function getMidocoBankNumber(): ?\Pggns\MidocoApi\Crm\StructType\BankNumberDTO
    {
        return $this->MidocoBankNumber;
    }
    /**
     * Set MidocoBankNumber value
     * @param \Pggns\MidocoApi\Crm\StructType\BankNumberDTO $midocoBankNumber
     * @return \Pggns\MidocoApi\Crm\StructType\LookupBankResponse
     */
    public function setMidocoBankNumber(?\Pggns\MidocoApi\Crm\StructType\BankNumberDTO $midocoBankNumber = null): self
    {
        $this->MidocoBankNumber = $midocoBankNumber;
        
        return $this;
    }
}
