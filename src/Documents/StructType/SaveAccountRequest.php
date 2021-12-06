<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveAccountRequest StructType
 * @subpackage Structs
 */
class SaveAccountRequest extends AbstractStructBase
{
    /**
     * The MidocoAccount
     * Meta information extracted from the WSDL
     * - ref: MidocoAccount
     * @var \Pggns\MidocoApi\Api\Documents\StructType\MidocoAccount|null
     */
    protected ?\Pggns\MidocoApi\Api\Documents\StructType\MidocoAccount $MidocoAccount = null;
    /**
     * Constructor method for SaveAccountRequest
     * @uses SaveAccountRequest::setMidocoAccount()
     * @param \Pggns\MidocoApi\Api\Documents\StructType\MidocoAccount $midocoAccount
     */
    public function __construct(?\Pggns\MidocoApi\Api\Documents\StructType\MidocoAccount $midocoAccount = null)
    {
        $this
            ->setMidocoAccount($midocoAccount);
    }
    /**
     * Get MidocoAccount value
     * @return \Pggns\MidocoApi\Api\Documents\StructType\MidocoAccount|null
     */
    public function getMidocoAccount(): ?\Pggns\MidocoApi\Api\Documents\StructType\MidocoAccount
    {
        return $this->MidocoAccount;
    }
    /**
     * Set MidocoAccount value
     * @param \Pggns\MidocoApi\Api\Documents\StructType\MidocoAccount $midocoAccount
     * @return \Pggns\MidocoApi\Api\Documents\StructType\SaveAccountRequest
     */
    public function setMidocoAccount(?\Pggns\MidocoApi\Api\Documents\StructType\MidocoAccount $midocoAccount = null): self
    {
        $this->MidocoAccount = $midocoAccount;
        
        return $this;
    }
}
