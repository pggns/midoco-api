<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetVirtualAccountRequest StructType
 * @subpackage Structs
 */
class GetVirtualAccountRequest extends AbstractStructBase
{
    /**
     * The MidocoVirtualAccount
     * Meta information extracted from the WSDL
     * - ref: MidocoVirtualAccount
     * @var \Pggns\MidocoApi\OrderSD\StructType\VirtualAccountDTO|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\VirtualAccountDTO $MidocoVirtualAccount = null;
    /**
     * Constructor method for GetVirtualAccountRequest
     * @uses GetVirtualAccountRequest::setMidocoVirtualAccount()
     * @param \Pggns\MidocoApi\OrderSD\StructType\VirtualAccountDTO $midocoVirtualAccount
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\VirtualAccountDTO $midocoVirtualAccount = null)
    {
        $this
            ->setMidocoVirtualAccount($midocoVirtualAccount);
    }
    /**
     * Get MidocoVirtualAccount value
     * @return \Pggns\MidocoApi\OrderSD\StructType\VirtualAccountDTO|null
     */
    public function getMidocoVirtualAccount(): ?\Pggns\MidocoApi\OrderSD\StructType\VirtualAccountDTO
    {
        return $this->MidocoVirtualAccount;
    }
    /**
     * Set MidocoVirtualAccount value
     * @param \Pggns\MidocoApi\OrderSD\StructType\VirtualAccountDTO $midocoVirtualAccount
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetVirtualAccountRequest
     */
    public function setMidocoVirtualAccount(?\Pggns\MidocoApi\OrderSD\StructType\VirtualAccountDTO $midocoVirtualAccount = null): self
    {
        $this->MidocoVirtualAccount = $midocoVirtualAccount;
        
        return $this;
    }
}
