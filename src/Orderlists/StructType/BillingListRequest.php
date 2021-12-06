<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BillingListRequest StructType
 * @subpackage Structs
 */
class BillingListRequest extends AbstractStructBase
{
    /**
     * The MidocoBillingListCriteria
     * Meta information extracted from the WSDL
     * - ref: MidocoBillingListCriteria
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingListCriteriaType|null
     */
    protected ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingListCriteriaType $MidocoBillingListCriteria = null;
    /**
     * Constructor method for BillingListRequest
     * @uses BillingListRequest::setMidocoBillingListCriteria()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingListCriteriaType $midocoBillingListCriteria
     */
    public function __construct(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingListCriteriaType $midocoBillingListCriteria = null)
    {
        $this
            ->setMidocoBillingListCriteria($midocoBillingListCriteria);
    }
    /**
     * Get MidocoBillingListCriteria value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingListCriteriaType|null
     */
    public function getMidocoBillingListCriteria(): ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingListCriteriaType
    {
        return $this->MidocoBillingListCriteria;
    }
    /**
     * Set MidocoBillingListCriteria value
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingListCriteriaType $midocoBillingListCriteria
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\BillingListRequest
     */
    public function setMidocoBillingListCriteria(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingListCriteriaType $midocoBillingListCriteria = null): self
    {
        $this->MidocoBillingListCriteria = $midocoBillingListCriteria;
        
        return $this;
    }
}
