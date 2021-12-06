<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCriteriaTypeCategoryResponse StructType
 * @subpackage Structs
 */
class SaveCriteriaTypeCategoryResponse extends AbstractStructBase
{
    /**
     * The MidocoCriteriaTypeCategory
     * Meta information extracted from the WSDL
     * - ref: MidocoCriteriaTypeCategory
     * @var \Pggns\MidocoApi\CrmSD\StructType\CritTypeCatDTO|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\CritTypeCatDTO $MidocoCriteriaTypeCategory = null;
    /**
     * Constructor method for SaveCriteriaTypeCategoryResponse
     * @uses SaveCriteriaTypeCategoryResponse::setMidocoCriteriaTypeCategory()
     * @param \Pggns\MidocoApi\CrmSD\StructType\CritTypeCatDTO $midocoCriteriaTypeCategory
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\CritTypeCatDTO $midocoCriteriaTypeCategory = null)
    {
        $this
            ->setMidocoCriteriaTypeCategory($midocoCriteriaTypeCategory);
    }
    /**
     * Get MidocoCriteriaTypeCategory value
     * @return \Pggns\MidocoApi\CrmSD\StructType\CritTypeCatDTO|null
     */
    public function getMidocoCriteriaTypeCategory(): ?\Pggns\MidocoApi\CrmSD\StructType\CritTypeCatDTO
    {
        return $this->MidocoCriteriaTypeCategory;
    }
    /**
     * Set MidocoCriteriaTypeCategory value
     * @param \Pggns\MidocoApi\CrmSD\StructType\CritTypeCatDTO $midocoCriteriaTypeCategory
     * @return \Pggns\MidocoApi\CrmSD\StructType\SaveCriteriaTypeCategoryResponse
     */
    public function setMidocoCriteriaTypeCategory(?\Pggns\MidocoApi\CrmSD\StructType\CritTypeCatDTO $midocoCriteriaTypeCategory = null): self
    {
        $this->MidocoCriteriaTypeCategory = $midocoCriteriaTypeCategory;
        
        return $this;
    }
}
