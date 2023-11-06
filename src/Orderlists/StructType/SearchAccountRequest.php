<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchAccountRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchAccountRequest extends AbstractStructBase
{
    /**
     * The MidocoAccount
     * Meta information extracted from the WSDL
     * - ref: MidocoAccount
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoAccount|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoAccount $MidocoAccount = null;
    /**
     * Constructor method for SearchAccountRequest
     * @uses SearchAccountRequest::setMidocoAccount()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoAccount $midocoAccount
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoAccount $midocoAccount = null)
    {
        $this
            ->setMidocoAccount($midocoAccount);
    }
    /**
     * Get MidocoAccount value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoAccount|null
     */
    public function getMidocoAccount(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoAccount
    {
        return $this->MidocoAccount;
    }
    /**
     * Set MidocoAccount value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoAccount $midocoAccount
     * @return \Pggns\MidocoApi\Orderlists\StructType\SearchAccountRequest
     */
    public function setMidocoAccount(?\Pggns\MidocoApi\Orderlists\StructType\MidocoAccount $midocoAccount = null): self
    {
        $this->MidocoAccount = $midocoAccount;
        
        return $this;
    }
}
