<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBankAccountRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: get a bank account
 * @subpackage Structs
 */
class GetBankAccountRequest extends AbstractStructBase
{
    /**
     * The MidocoBankAccount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoBankAccount
     * @var \Pggns\MidocoApi\OrderSD\StructType\MidocoBankAccount|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\MidocoBankAccount $MidocoBankAccount = null;
    /**
     * Constructor method for GetBankAccountRequest
     * @uses GetBankAccountRequest::setMidocoBankAccount()
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoBankAccount $midocoBankAccount
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\MidocoBankAccount $midocoBankAccount = null)
    {
        $this
            ->setMidocoBankAccount($midocoBankAccount);
    }
    /**
     * Get MidocoBankAccount value
     * @return \Pggns\MidocoApi\OrderSD\StructType\MidocoBankAccount|null
     */
    public function getMidocoBankAccount(): ?\Pggns\MidocoApi\OrderSD\StructType\MidocoBankAccount
    {
        return $this->MidocoBankAccount;
    }
    /**
     * Set MidocoBankAccount value
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoBankAccount $midocoBankAccount
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetBankAccountRequest
     */
    public function setMidocoBankAccount(?\Pggns\MidocoApi\OrderSD\StructType\MidocoBankAccount $midocoBankAccount = null): self
    {
        $this->MidocoBankAccount = $midocoBankAccount;
        
        return $this;
    }
}
