<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveOrdCriteriaTypeCategoryResponse StructType
 * @subpackage Structs
 */
class SaveOrdCriteriaTypeCategoryResponse extends AbstractStructBase
{
    /**
     * The MidocoOrdCriteriaTypeCategory
     * Meta information extracted from the WSDL
     * - ref: MidocoOrdCriteriaTypeCategory
     * @var \Pggns\MidocoApi\Documents\StructType\OrdCritTypeCatDTO|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\OrdCritTypeCatDTO $MidocoOrdCriteriaTypeCategory = null;
    /**
     * Constructor method for SaveOrdCriteriaTypeCategoryResponse
     * @uses SaveOrdCriteriaTypeCategoryResponse::setMidocoOrdCriteriaTypeCategory()
     * @param \Pggns\MidocoApi\Documents\StructType\OrdCritTypeCatDTO $midocoOrdCriteriaTypeCategory
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\OrdCritTypeCatDTO $midocoOrdCriteriaTypeCategory = null)
    {
        $this
            ->setMidocoOrdCriteriaTypeCategory($midocoOrdCriteriaTypeCategory);
    }
    /**
     * Get MidocoOrdCriteriaTypeCategory value
     * @return \Pggns\MidocoApi\Documents\StructType\OrdCritTypeCatDTO|null
     */
    public function getMidocoOrdCriteriaTypeCategory(): ?\Pggns\MidocoApi\Documents\StructType\OrdCritTypeCatDTO
    {
        return $this->MidocoOrdCriteriaTypeCategory;
    }
    /**
     * Set MidocoOrdCriteriaTypeCategory value
     * @param \Pggns\MidocoApi\Documents\StructType\OrdCritTypeCatDTO $midocoOrdCriteriaTypeCategory
     * @return \Pggns\MidocoApi\Documents\StructType\SaveOrdCriteriaTypeCategoryResponse
     */
    public function setMidocoOrdCriteriaTypeCategory(?\Pggns\MidocoApi\Documents\StructType\OrdCritTypeCatDTO $midocoOrdCriteriaTypeCategory = null): self
    {
        $this->MidocoOrdCriteriaTypeCategory = $midocoOrdCriteriaTypeCategory;
        
        return $this;
    }
}
