<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeferralWriteOffListRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeferralWriteOffListRequest extends AbstractStructBase
{
    /**
     * The MidocoDeferralWriteOffListCriteria
     * Meta information extracted from the WSDL
     * - ref: MidocoDeferralWriteOffListCriteria
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralWriteOffListCriteriaType|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralWriteOffListCriteriaType $MidocoDeferralWriteOffListCriteria = null;
    /**
     * Constructor method for DeferralWriteOffListRequest
     * @uses DeferralWriteOffListRequest::setMidocoDeferralWriteOffListCriteria()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralWriteOffListCriteriaType $midocoDeferralWriteOffListCriteria
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralWriteOffListCriteriaType $midocoDeferralWriteOffListCriteria = null)
    {
        $this
            ->setMidocoDeferralWriteOffListCriteria($midocoDeferralWriteOffListCriteria);
    }
    /**
     * Get MidocoDeferralWriteOffListCriteria value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralWriteOffListCriteriaType|null
     */
    public function getMidocoDeferralWriteOffListCriteria(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralWriteOffListCriteriaType
    {
        return $this->MidocoDeferralWriteOffListCriteria;
    }
    /**
     * Set MidocoDeferralWriteOffListCriteria value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralWriteOffListCriteriaType $midocoDeferralWriteOffListCriteria
     * @return \Pggns\MidocoApi\Orderlists\StructType\DeferralWriteOffListRequest
     */
    public function setMidocoDeferralWriteOffListCriteria(?\Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralWriteOffListCriteriaType $midocoDeferralWriteOffListCriteria = null): self
    {
        $this->MidocoDeferralWriteOffListCriteria = $midocoDeferralWriteOffListCriteria;
        
        return $this;
    }
}
