<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

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
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierSettlementAccount|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierSettlementAccount $MidocoSupplierSettlementAccount = null;
    /**
     * Constructor method for SaveSupplierSettlementAccountRequest
     * @uses SaveSupplierSettlementAccountRequest::setMidocoSupplierSettlementAccount()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierSettlementAccount $midocoSupplierSettlementAccount
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierSettlementAccount $midocoSupplierSettlementAccount = null)
    {
        $this
            ->setMidocoSupplierSettlementAccount($midocoSupplierSettlementAccount);
    }
    /**
     * Get MidocoSupplierSettlementAccount value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierSettlementAccount|null
     */
    public function getMidocoSupplierSettlementAccount(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierSettlementAccount
    {
        return $this->MidocoSupplierSettlementAccount;
    }
    /**
     * Set MidocoSupplierSettlementAccount value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierSettlementAccount $midocoSupplierSettlementAccount
     * @return \Pggns\MidocoApi\Orderlists\StructType\SaveSupplierSettlementAccountRequest
     */
    public function setMidocoSupplierSettlementAccount(?\Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierSettlementAccount $midocoSupplierSettlementAccount = null): self
    {
        $this->MidocoSupplierSettlementAccount = $midocoSupplierSettlementAccount;
        
        return $this;
    }
}
