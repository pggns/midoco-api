<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveSupplierSettlementAccountRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveSupplierSettlementAccountRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierSettlementAccount
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierSettlementAccount
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoSupplierSettlementAccount|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoSupplierSettlementAccount $MidocoSupplierSettlementAccount = null;
    /**
     * Constructor method for SaveSupplierSettlementAccountRequest
     * @uses SaveSupplierSettlementAccountRequest::setMidocoSupplierSettlementAccount()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoSupplierSettlementAccount $midocoSupplierSettlementAccount
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\MidocoSupplierSettlementAccount $midocoSupplierSettlementAccount = null)
    {
        $this
            ->setMidocoSupplierSettlementAccount($midocoSupplierSettlementAccount);
    }
    /**
     * Get MidocoSupplierSettlementAccount value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoSupplierSettlementAccount|null
     */
    public function getMidocoSupplierSettlementAccount(): ?\Pggns\MidocoApi\Documents\StructType\MidocoSupplierSettlementAccount
    {
        return $this->MidocoSupplierSettlementAccount;
    }
    /**
     * Set MidocoSupplierSettlementAccount value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoSupplierSettlementAccount $midocoSupplierSettlementAccount
     * @return \Pggns\MidocoApi\Documents\StructType\SaveSupplierSettlementAccountRequest
     */
    public function setMidocoSupplierSettlementAccount(?\Pggns\MidocoApi\Documents\StructType\MidocoSupplierSettlementAccount $midocoSupplierSettlementAccount = null): self
    {
        $this->MidocoSupplierSettlementAccount = $midocoSupplierSettlementAccount;
        
        return $this;
    }
}
