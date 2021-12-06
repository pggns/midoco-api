<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveSupplierSettlementAccountRequest StructType
 * @subpackage Structs
 */
class SaveSupplierSettlementAccountRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierSettlementAccount
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierSettlementAccount
     * @var \Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierSettlementAccount|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierSettlementAccount $MidocoSupplierSettlementAccount = null;
    /**
     * Constructor method for SaveSupplierSettlementAccountRequest
     * @uses SaveSupplierSettlementAccountRequest::setMidocoSupplierSettlementAccount()
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierSettlementAccount $midocoSupplierSettlementAccount
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierSettlementAccount $midocoSupplierSettlementAccount = null)
    {
        $this
            ->setMidocoSupplierSettlementAccount($midocoSupplierSettlementAccount);
    }
    /**
     * Get MidocoSupplierSettlementAccount value
     * @return \Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierSettlementAccount|null
     */
    public function getMidocoSupplierSettlementAccount(): ?\Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierSettlementAccount
    {
        return $this->MidocoSupplierSettlementAccount;
    }
    /**
     * Set MidocoSupplierSettlementAccount value
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierSettlementAccount $midocoSupplierSettlementAccount
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveSupplierSettlementAccountRequest
     */
    public function setMidocoSupplierSettlementAccount(?\Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierSettlementAccount $midocoSupplierSettlementAccount = null): self
    {
        $this->MidocoSupplierSettlementAccount = $midocoSupplierSettlementAccount;
        
        return $this;
    }
}
