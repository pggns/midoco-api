<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveSupplierSettlementDiffRequest StructType
 * @subpackage Structs
 */
class SaveSupplierSettlementDiffRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierSettlementDiff
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierSettlementDiff
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierSettlementDiff|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierSettlementDiff $MidocoSupplierSettlementDiff = null;
    /**
     * Constructor method for SaveSupplierSettlementDiffRequest
     * @uses SaveSupplierSettlementDiffRequest::setMidocoSupplierSettlementDiff()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierSettlementDiff $midocoSupplierSettlementDiff
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierSettlementDiff $midocoSupplierSettlementDiff = null)
    {
        $this
            ->setMidocoSupplierSettlementDiff($midocoSupplierSettlementDiff);
    }
    /**
     * Get MidocoSupplierSettlementDiff value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierSettlementDiff|null
     */
    public function getMidocoSupplierSettlementDiff(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierSettlementDiff
    {
        return $this->MidocoSupplierSettlementDiff;
    }
    /**
     * Set MidocoSupplierSettlementDiff value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierSettlementDiff $midocoSupplierSettlementDiff
     * @return \Pggns\MidocoApi\Orderlists\StructType\SaveSupplierSettlementDiffRequest
     */
    public function setMidocoSupplierSettlementDiff(?\Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierSettlementDiff $midocoSupplierSettlementDiff = null): self
    {
        $this->MidocoSupplierSettlementDiff = $midocoSupplierSettlementDiff;
        
        return $this;
    }
}
