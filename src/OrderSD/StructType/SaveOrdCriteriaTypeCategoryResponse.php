<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

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
     * @var \Pggns\MidocoApi\OrderSD\StructType\OrdCritTypeCatDTO|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\OrdCritTypeCatDTO $MidocoOrdCriteriaTypeCategory = null;
    /**
     * Constructor method for SaveOrdCriteriaTypeCategoryResponse
     * @uses SaveOrdCriteriaTypeCategoryResponse::setMidocoOrdCriteriaTypeCategory()
     * @param \Pggns\MidocoApi\OrderSD\StructType\OrdCritTypeCatDTO $midocoOrdCriteriaTypeCategory
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\OrdCritTypeCatDTO $midocoOrdCriteriaTypeCategory = null)
    {
        $this
            ->setMidocoOrdCriteriaTypeCategory($midocoOrdCriteriaTypeCategory);
    }
    /**
     * Get MidocoOrdCriteriaTypeCategory value
     * @return \Pggns\MidocoApi\OrderSD\StructType\OrdCritTypeCatDTO|null
     */
    public function getMidocoOrdCriteriaTypeCategory(): ?\Pggns\MidocoApi\OrderSD\StructType\OrdCritTypeCatDTO
    {
        return $this->MidocoOrdCriteriaTypeCategory;
    }
    /**
     * Set MidocoOrdCriteriaTypeCategory value
     * @param \Pggns\MidocoApi\OrderSD\StructType\OrdCritTypeCatDTO $midocoOrdCriteriaTypeCategory
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveOrdCriteriaTypeCategoryResponse
     */
    public function setMidocoOrdCriteriaTypeCategory(?\Pggns\MidocoApi\OrderSD\StructType\OrdCritTypeCatDTO $midocoOrdCriteriaTypeCategory = null): self
    {
        $this->MidocoOrdCriteriaTypeCategory = $midocoOrdCriteriaTypeCategory;
        
        return $this;
    }
}
