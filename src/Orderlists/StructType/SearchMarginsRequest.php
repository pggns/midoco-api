<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchMarginsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchMarginsRequest extends AbstractStructBase
{
    /**
     * The MarginsSearchCriteria
     * Meta information extracted from the WSDL
     * - ref: order:MarginsSearchCriteria
     * @var \Pggns\MidocoApi\Orderlists\StructType\MarginsSearchCriteriaType|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MarginsSearchCriteriaType $MarginsSearchCriteria = null;
    /**
     * Constructor method for SearchMarginsRequest
     * @uses SearchMarginsRequest::setMarginsSearchCriteria()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MarginsSearchCriteriaType $marginsSearchCriteria
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MarginsSearchCriteriaType $marginsSearchCriteria = null)
    {
        $this
            ->setMarginsSearchCriteria($marginsSearchCriteria);
    }
    /**
     * Get MarginsSearchCriteria value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MarginsSearchCriteriaType|null
     */
    public function getMarginsSearchCriteria(): ?\Pggns\MidocoApi\Orderlists\StructType\MarginsSearchCriteriaType
    {
        return $this->MarginsSearchCriteria;
    }
    /**
     * Set MarginsSearchCriteria value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MarginsSearchCriteriaType $marginsSearchCriteria
     * @return \Pggns\MidocoApi\Orderlists\StructType\SearchMarginsRequest
     */
    public function setMarginsSearchCriteria(?\Pggns\MidocoApi\Orderlists\StructType\MarginsSearchCriteriaType $marginsSearchCriteria = null): self
    {
        $this->MarginsSearchCriteria = $marginsSearchCriteria;
        
        return $this;
    }
}
