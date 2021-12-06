<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeferralArErListRequest StructType
 * @subpackage Structs
 */
class DeferralArErListRequest extends AbstractStructBase
{
    /**
     * The MidocoDeferralArErListCriteria
     * Meta information extracted from the WSDL
     * - ref: MidocoDeferralArErListCriteria
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoDeferralArErListCriteriaType|null
     */
    protected ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoDeferralArErListCriteriaType $MidocoDeferralArErListCriteria = null;
    /**
     * Constructor method for DeferralArErListRequest
     * @uses DeferralArErListRequest::setMidocoDeferralArErListCriteria()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoDeferralArErListCriteriaType $midocoDeferralArErListCriteria
     */
    public function __construct(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoDeferralArErListCriteriaType $midocoDeferralArErListCriteria = null)
    {
        $this
            ->setMidocoDeferralArErListCriteria($midocoDeferralArErListCriteria);
    }
    /**
     * Get MidocoDeferralArErListCriteria value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoDeferralArErListCriteriaType|null
     */
    public function getMidocoDeferralArErListCriteria(): ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoDeferralArErListCriteriaType
    {
        return $this->MidocoDeferralArErListCriteria;
    }
    /**
     * Set MidocoDeferralArErListCriteria value
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoDeferralArErListCriteriaType $midocoDeferralArErListCriteria
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\DeferralArErListRequest
     */
    public function setMidocoDeferralArErListCriteria(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoDeferralArErListCriteriaType $midocoDeferralArErListCriteria = null): self
    {
        $this->MidocoDeferralArErListCriteria = $midocoDeferralArErListCriteria;
        
        return $this;
    }
}
