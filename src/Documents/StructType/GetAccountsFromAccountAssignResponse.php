<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAccountsFromAccountAssignResponse StructType
 * @subpackage Structs
 */
class GetAccountsFromAccountAssignResponse extends AbstractStructBase
{
    /**
     * The MidocoAccount
     * Meta information extracted from the WSDL
     * - ref: MidocoAccount
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoAccount|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoAccount $MidocoAccount = null;
    /**
     * Constructor method for GetAccountsFromAccountAssignResponse
     * @uses GetAccountsFromAccountAssignResponse::setMidocoAccount()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoAccount $midocoAccount
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\MidocoAccount $midocoAccount = null)
    {
        $this
            ->setMidocoAccount($midocoAccount);
    }
    /**
     * Get MidocoAccount value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoAccount|null
     */
    public function getMidocoAccount(): ?\Pggns\MidocoApi\Documents\StructType\MidocoAccount
    {
        return $this->MidocoAccount;
    }
    /**
     * Set MidocoAccount value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoAccount $midocoAccount
     * @return \Pggns\MidocoApi\Documents\StructType\GetAccountsFromAccountAssignResponse
     */
    public function setMidocoAccount(?\Pggns\MidocoApi\Documents\StructType\MidocoAccount $midocoAccount = null): self
    {
        $this->MidocoAccount = $midocoAccount;
        
        return $this;
    }
}
