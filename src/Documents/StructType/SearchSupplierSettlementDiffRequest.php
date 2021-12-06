<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchSupplierSettlementDiffRequest StructType
 * @subpackage Structs
 */
class SearchSupplierSettlementDiffRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierSettlementDiff
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierSettlementDiff
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoSupplierSettlementDiff|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoSupplierSettlementDiff $MidocoSupplierSettlementDiff = null;
    /**
     * Constructor method for SearchSupplierSettlementDiffRequest
     * @uses SearchSupplierSettlementDiffRequest::setMidocoSupplierSettlementDiff()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoSupplierSettlementDiff $midocoSupplierSettlementDiff
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\MidocoSupplierSettlementDiff $midocoSupplierSettlementDiff = null)
    {
        $this
            ->setMidocoSupplierSettlementDiff($midocoSupplierSettlementDiff);
    }
    /**
     * Get MidocoSupplierSettlementDiff value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoSupplierSettlementDiff|null
     */
    public function getMidocoSupplierSettlementDiff(): ?\Pggns\MidocoApi\Documents\StructType\MidocoSupplierSettlementDiff
    {
        return $this->MidocoSupplierSettlementDiff;
    }
    /**
     * Set MidocoSupplierSettlementDiff value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoSupplierSettlementDiff $midocoSupplierSettlementDiff
     * @return \Pggns\MidocoApi\Documents\StructType\SearchSupplierSettlementDiffRequest
     */
    public function setMidocoSupplierSettlementDiff(?\Pggns\MidocoApi\Documents\StructType\MidocoSupplierSettlementDiff $midocoSupplierSettlementDiff = null): self
    {
        $this->MidocoSupplierSettlementDiff = $midocoSupplierSettlementDiff;
        
        return $this;
    }
}
