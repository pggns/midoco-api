<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveAccountResponse StructType
 * @subpackage Structs
 */
class SaveAccountResponse extends AbstractStructBase
{
    /**
     * The MidocoAccount
     * Meta information extracted from the WSDL
     * - ref: MidocoAccount
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoAccount|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoAccount $MidocoAccount = null;
    /**
     * Constructor method for SaveAccountResponse
     * @uses SaveAccountResponse::setMidocoAccount()
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
     * @return \Pggns\MidocoApi\Documents\StructType\SaveAccountResponse
     */
    public function setMidocoAccount(?\Pggns\MidocoApi\Documents\StructType\MidocoAccount $midocoAccount = null): self
    {
        $this->MidocoAccount = $midocoAccount;
        
        return $this;
    }
}
