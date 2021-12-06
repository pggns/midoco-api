<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBankAccountResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: get a bank account
 * @subpackage Structs
 */
class GetBankAccountResponse extends AbstractStructBase
{
    /**
     * The MidocoBankAccount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoBankAccount
     * @var \Pggns\MidocoApi\Api\Documents\StructType\MidocoBankAccount|null
     */
    protected ?\Pggns\MidocoApi\Api\Documents\StructType\MidocoBankAccount $MidocoBankAccount = null;
    /**
     * Constructor method for GetBankAccountResponse
     * @uses GetBankAccountResponse::setMidocoBankAccount()
     * @param \Pggns\MidocoApi\Api\Documents\StructType\MidocoBankAccount $midocoBankAccount
     */
    public function __construct(?\Pggns\MidocoApi\Api\Documents\StructType\MidocoBankAccount $midocoBankAccount = null)
    {
        $this
            ->setMidocoBankAccount($midocoBankAccount);
    }
    /**
     * Get MidocoBankAccount value
     * @return \Pggns\MidocoApi\Api\Documents\StructType\MidocoBankAccount|null
     */
    public function getMidocoBankAccount(): ?\Pggns\MidocoApi\Api\Documents\StructType\MidocoBankAccount
    {
        return $this->MidocoBankAccount;
    }
    /**
     * Set MidocoBankAccount value
     * @param \Pggns\MidocoApi\Api\Documents\StructType\MidocoBankAccount $midocoBankAccount
     * @return \Pggns\MidocoApi\Api\Documents\StructType\GetBankAccountResponse
     */
    public function setMidocoBankAccount(?\Pggns\MidocoApi\Api\Documents\StructType\MidocoBankAccount $midocoBankAccount = null): self
    {
        $this->MidocoBankAccount = $midocoBankAccount;
        
        return $this;
    }
}
