<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for search-criteria StructType
 * Meta information extracted from the WSDL
 * - documentation: Her, all the search criteria which lead to the booking in a search engine, should be given.
 * @subpackage Structs
 */
class Search_criteria extends AbstractStructBase
{
    /**
     * The criteria
     * @var \Pggns\MidocoApi\Documents\StructType\Criteria|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\Criteria $criteria = null;
    /**
     * Constructor method for search-criteria
     * @uses Search_criteria::setCriteria()
     * @param \Pggns\MidocoApi\Documents\StructType\Criteria $criteria
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\Criteria $criteria = null)
    {
        $this
            ->setCriteria($criteria);
    }
    /**
     * Get criteria value
     * @return \Pggns\MidocoApi\Documents\StructType\Criteria|null
     */
    public function getCriteria(): ?\Pggns\MidocoApi\Documents\StructType\Criteria
    {
        return $this->criteria;
    }
    /**
     * Set criteria value
     * @param \Pggns\MidocoApi\Documents\StructType\Criteria $criteria
     * @return \Pggns\MidocoApi\Documents\StructType\Search_criteria
     */
    public function setCriteria(?\Pggns\MidocoApi\Documents\StructType\Criteria $criteria = null): self
    {
        $this->criteria = $criteria;
        
        return $this;
    }
}
