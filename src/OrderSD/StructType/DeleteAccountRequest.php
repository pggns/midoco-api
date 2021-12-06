<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteAccountRequest StructType
 * @subpackage Structs
 */
class DeleteAccountRequest extends AbstractStructBase
{
    /**
     * The MidocoAccount
     * Meta information extracted from the WSDL
     * - ref: MidocoAccount
     * @var \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoAccount|null
     */
    protected ?\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoAccount $MidocoAccount = null;
    /**
     * Constructor method for DeleteAccountRequest
     * @uses DeleteAccountRequest::setMidocoAccount()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoAccount $midocoAccount
     */
    public function __construct(?\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoAccount $midocoAccount = null)
    {
        $this
            ->setMidocoAccount($midocoAccount);
    }
    /**
     * Get MidocoAccount value
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoAccount|null
     */
    public function getMidocoAccount(): ?\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoAccount
    {
        return $this->MidocoAccount;
    }
    /**
     * Set MidocoAccount value
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoAccount $midocoAccount
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteAccountRequest
     */
    public function setMidocoAccount(?\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoAccount $midocoAccount = null): self
    {
        $this->MidocoAccount = $midocoAccount;
        
        return $this;
    }
}
