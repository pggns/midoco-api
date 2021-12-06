<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MarginListRequest StructType
 * @subpackage Structs
 */
class MarginListRequest extends AbstractStructBase
{
    /**
     * The MidocoMarginListCriteria
     * Meta information extracted from the WSDL
     * - ref: MidocoMarginListCriteria
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoMarginListCriteriaType|null
     */
    protected ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoMarginListCriteriaType $MidocoMarginListCriteria = null;
    /**
     * Constructor method for MarginListRequest
     * @uses MarginListRequest::setMidocoMarginListCriteria()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoMarginListCriteriaType $midocoMarginListCriteria
     */
    public function __construct(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoMarginListCriteriaType $midocoMarginListCriteria = null)
    {
        $this
            ->setMidocoMarginListCriteria($midocoMarginListCriteria);
    }
    /**
     * Get MidocoMarginListCriteria value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoMarginListCriteriaType|null
     */
    public function getMidocoMarginListCriteria(): ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoMarginListCriteriaType
    {
        return $this->MidocoMarginListCriteria;
    }
    /**
     * Set MidocoMarginListCriteria value
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoMarginListCriteriaType $midocoMarginListCriteria
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MarginListRequest
     */
    public function setMidocoMarginListCriteria(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoMarginListCriteriaType $midocoMarginListCriteria = null): self
    {
        $this->MidocoMarginListCriteria = $midocoMarginListCriteria;
        
        return $this;
    }
}
