<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MarginExtListRequest StructType
 * @subpackage Structs
 */
class MarginExtListRequest extends AbstractStructBase
{
    /**
     * The MidocoMarginExtListCriteria
     * Meta information extracted from the WSDL
     * - ref: MidocoMarginExtListCriteria
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoMarginExtListCriteriaType|null
     */
    protected ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoMarginExtListCriteriaType $MidocoMarginExtListCriteria = null;
    /**
     * Constructor method for MarginExtListRequest
     * @uses MarginExtListRequest::setMidocoMarginExtListCriteria()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoMarginExtListCriteriaType $midocoMarginExtListCriteria
     */
    public function __construct(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoMarginExtListCriteriaType $midocoMarginExtListCriteria = null)
    {
        $this
            ->setMidocoMarginExtListCriteria($midocoMarginExtListCriteria);
    }
    /**
     * Get MidocoMarginExtListCriteria value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoMarginExtListCriteriaType|null
     */
    public function getMidocoMarginExtListCriteria(): ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoMarginExtListCriteriaType
    {
        return $this->MidocoMarginExtListCriteria;
    }
    /**
     * Set MidocoMarginExtListCriteria value
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoMarginExtListCriteriaType $midocoMarginExtListCriteria
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MarginExtListRequest
     */
    public function setMidocoMarginExtListCriteria(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoMarginExtListCriteriaType $midocoMarginExtListCriteria = null): self
    {
        $this->MidocoMarginExtListCriteria = $midocoMarginExtListCriteria;
        
        return $this;
    }
}
