<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VatReconciliationRequest StructType
 * @subpackage Structs
 */
class VatReconciliationRequest extends AbstractStructBase
{
    /**
     * The MidocoVatReconciliationCriteria
     * Meta information extracted from the WSDL
     * - ref: MidocoVatReconciliationCriteria
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoVatReconciliationCriteriaType|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoVatReconciliationCriteriaType $MidocoVatReconciliationCriteria = null;
    /**
     * Constructor method for VatReconciliationRequest
     * @uses VatReconciliationRequest::setMidocoVatReconciliationCriteria()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoVatReconciliationCriteriaType $midocoVatReconciliationCriteria
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoVatReconciliationCriteriaType $midocoVatReconciliationCriteria = null)
    {
        $this
            ->setMidocoVatReconciliationCriteria($midocoVatReconciliationCriteria);
    }
    /**
     * Get MidocoVatReconciliationCriteria value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoVatReconciliationCriteriaType|null
     */
    public function getMidocoVatReconciliationCriteria(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoVatReconciliationCriteriaType
    {
        return $this->MidocoVatReconciliationCriteria;
    }
    /**
     * Set MidocoVatReconciliationCriteria value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoVatReconciliationCriteriaType $midocoVatReconciliationCriteria
     * @return \Pggns\MidocoApi\Orderlists\StructType\VatReconciliationRequest
     */
    public function setMidocoVatReconciliationCriteria(?\Pggns\MidocoApi\Orderlists\StructType\MidocoVatReconciliationCriteriaType $midocoVatReconciliationCriteria = null): self
    {
        $this->MidocoVatReconciliationCriteria = $midocoVatReconciliationCriteria;
        
        return $this;
    }
}
