<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MarginExtListRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MarginExtListRequest extends AbstractStructBase
{
    /**
     * The MidocoMarginExtListCriteria
     * Meta information extracted from the WSDL
     * - ref: MidocoMarginExtListCriteria
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoMarginExtListCriteriaType|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoMarginExtListCriteriaType $MidocoMarginExtListCriteria = null;
    /**
     * Constructor method for MarginExtListRequest
     * @uses MarginExtListRequest::setMidocoMarginExtListCriteria()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoMarginExtListCriteriaType $midocoMarginExtListCriteria
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoMarginExtListCriteriaType $midocoMarginExtListCriteria = null)
    {
        $this
            ->setMidocoMarginExtListCriteria($midocoMarginExtListCriteria);
    }
    /**
     * Get MidocoMarginExtListCriteria value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoMarginExtListCriteriaType|null
     */
    public function getMidocoMarginExtListCriteria(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoMarginExtListCriteriaType
    {
        return $this->MidocoMarginExtListCriteria;
    }
    /**
     * Set MidocoMarginExtListCriteria value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoMarginExtListCriteriaType $midocoMarginExtListCriteria
     * @return \Pggns\MidocoApi\Orderlists\StructType\MarginExtListRequest
     */
    public function setMidocoMarginExtListCriteria(?\Pggns\MidocoApi\Orderlists\StructType\MidocoMarginExtListCriteriaType $midocoMarginExtListCriteria = null): self
    {
        $this->MidocoMarginExtListCriteria = $midocoMarginExtListCriteria;
        
        return $this;
    }
}
