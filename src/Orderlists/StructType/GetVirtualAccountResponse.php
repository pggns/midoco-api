<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetVirtualAccountResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetVirtualAccountResponse extends AbstractStructBase
{
    /**
     * The MidocoVirtualAccount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoVirtualAccount
     * @var \Pggns\MidocoApi\Orderlists\StructType\VirtualAccountDTO|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\VirtualAccountDTO $MidocoVirtualAccount = null;
    /**
     * Constructor method for GetVirtualAccountResponse
     * @uses GetVirtualAccountResponse::setMidocoVirtualAccount()
     * @param \Pggns\MidocoApi\Orderlists\StructType\VirtualAccountDTO $midocoVirtualAccount
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\VirtualAccountDTO $midocoVirtualAccount = null)
    {
        $this
            ->setMidocoVirtualAccount($midocoVirtualAccount);
    }
    /**
     * Get MidocoVirtualAccount value
     * @return \Pggns\MidocoApi\Orderlists\StructType\VirtualAccountDTO|null
     */
    public function getMidocoVirtualAccount(): ?\Pggns\MidocoApi\Orderlists\StructType\VirtualAccountDTO
    {
        return $this->MidocoVirtualAccount;
    }
    /**
     * Set MidocoVirtualAccount value
     * @param \Pggns\MidocoApi\Orderlists\StructType\VirtualAccountDTO $midocoVirtualAccount
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetVirtualAccountResponse
     */
    public function setMidocoVirtualAccount(?\Pggns\MidocoApi\Orderlists\StructType\VirtualAccountDTO $midocoVirtualAccount = null): self
    {
        $this->MidocoVirtualAccount = $midocoVirtualAccount;
        
        return $this;
    }
}
