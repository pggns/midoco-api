<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveBankAccountRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: save a bank account
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveBankAccountRequest extends AbstractStructBase
{
    /**
     * The MidocoBankAccount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoBankAccount
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoBankAccount|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoBankAccount $MidocoBankAccount = null;
    /**
     * Constructor method for SaveBankAccountRequest
     * @uses SaveBankAccountRequest::setMidocoBankAccount()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoBankAccount $midocoBankAccount
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\MidocoBankAccount $midocoBankAccount = null)
    {
        $this
            ->setMidocoBankAccount($midocoBankAccount);
    }
    /**
     * Get MidocoBankAccount value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoBankAccount|null
     */
    public function getMidocoBankAccount(): ?\Pggns\MidocoApi\Documents\StructType\MidocoBankAccount
    {
        return $this->MidocoBankAccount;
    }
    /**
     * Set MidocoBankAccount value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoBankAccount $midocoBankAccount
     * @return \Pggns\MidocoApi\Documents\StructType\SaveBankAccountRequest
     */
    public function setMidocoBankAccount(?\Pggns\MidocoApi\Documents\StructType\MidocoBankAccount $midocoBankAccount = null): self
    {
        $this->MidocoBankAccount = $midocoBankAccount;
        
        return $this;
    }
}
