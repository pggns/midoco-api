<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MarginListRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MarginListRequest extends AbstractStructBase
{
    /**
     * The MidocoMarginListCriteria
     * Meta information extracted from the WSDL
     * - ref: MidocoMarginListCriteria
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoMarginListCriteriaType|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoMarginListCriteriaType $MidocoMarginListCriteria = null;
    /**
     * Constructor method for MarginListRequest
     * @uses MarginListRequest::setMidocoMarginListCriteria()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoMarginListCriteriaType $midocoMarginListCriteria
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoMarginListCriteriaType $midocoMarginListCriteria = null)
    {
        $this
            ->setMidocoMarginListCriteria($midocoMarginListCriteria);
    }
    /**
     * Get MidocoMarginListCriteria value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoMarginListCriteriaType|null
     */
    public function getMidocoMarginListCriteria(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoMarginListCriteriaType
    {
        return $this->MidocoMarginListCriteria;
    }
    /**
     * Set MidocoMarginListCriteria value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoMarginListCriteriaType $midocoMarginListCriteria
     * @return \Pggns\MidocoApi\Orderlists\StructType\MarginListRequest
     */
    public function setMidocoMarginListCriteria(?\Pggns\MidocoApi\Orderlists\StructType\MidocoMarginListCriteriaType $midocoMarginListCriteria = null): self
    {
        $this->MidocoMarginListCriteria = $midocoMarginListCriteria;
        
        return $this;
    }
}
