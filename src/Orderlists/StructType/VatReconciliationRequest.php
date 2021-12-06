<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

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
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoVatReconciliationCriteriaType|null
     */
    protected ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoVatReconciliationCriteriaType $MidocoVatReconciliationCriteria = null;
    /**
     * Constructor method for VatReconciliationRequest
     * @uses VatReconciliationRequest::setMidocoVatReconciliationCriteria()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoVatReconciliationCriteriaType $midocoVatReconciliationCriteria
     */
    public function __construct(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoVatReconciliationCriteriaType $midocoVatReconciliationCriteria = null)
    {
        $this
            ->setMidocoVatReconciliationCriteria($midocoVatReconciliationCriteria);
    }
    /**
     * Get MidocoVatReconciliationCriteria value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoVatReconciliationCriteriaType|null
     */
    public function getMidocoVatReconciliationCriteria(): ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoVatReconciliationCriteriaType
    {
        return $this->MidocoVatReconciliationCriteria;
    }
    /**
     * Set MidocoVatReconciliationCriteria value
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoVatReconciliationCriteriaType $midocoVatReconciliationCriteria
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\VatReconciliationRequest
     */
    public function setMidocoVatReconciliationCriteria(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoVatReconciliationCriteriaType $midocoVatReconciliationCriteria = null): self
    {
        $this->MidocoVatReconciliationCriteria = $midocoVatReconciliationCriteria;
        
        return $this;
    }
}
