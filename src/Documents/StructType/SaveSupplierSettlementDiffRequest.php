<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

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
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoSupplierSettlementDiff|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoSupplierSettlementDiff $MidocoSupplierSettlementDiff = null;
    /**
     * Constructor method for SaveSupplierSettlementDiffRequest
     * @uses SaveSupplierSettlementDiffRequest::setMidocoSupplierSettlementDiff()
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
     * @return \Pggns\MidocoApi\Documents\StructType\SaveSupplierSettlementDiffRequest
     */
    public function setMidocoSupplierSettlementDiff(?\Pggns\MidocoApi\Documents\StructType\MidocoSupplierSettlementDiff $midocoSupplierSettlementDiff = null): self
    {
        $this->MidocoSupplierSettlementDiff = $midocoSupplierSettlementDiff;
        
        return $this;
    }
}
