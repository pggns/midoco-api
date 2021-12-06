<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCriteriaTypeCategoryRequest StructType
 * @subpackage Structs
 */
class SaveCriteriaTypeCategoryRequest extends AbstractStructBase
{
    /**
     * The MidocoCriteriaTypeCategory
     * Meta information extracted from the WSDL
     * - ref: MidocoCriteriaTypeCategory
     * @var \Pggns\MidocoApi\Crm\StructType\CritTypeCatDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\CritTypeCatDTO $MidocoCriteriaTypeCategory = null;
    /**
     * Constructor method for SaveCriteriaTypeCategoryRequest
     * @uses SaveCriteriaTypeCategoryRequest::setMidocoCriteriaTypeCategory()
     * @param \Pggns\MidocoApi\Crm\StructType\CritTypeCatDTO $midocoCriteriaTypeCategory
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\CritTypeCatDTO $midocoCriteriaTypeCategory = null)
    {
        $this
            ->setMidocoCriteriaTypeCategory($midocoCriteriaTypeCategory);
    }
    /**
     * Get MidocoCriteriaTypeCategory value
     * @return \Pggns\MidocoApi\Crm\StructType\CritTypeCatDTO|null
     */
    public function getMidocoCriteriaTypeCategory(): ?\Pggns\MidocoApi\Crm\StructType\CritTypeCatDTO
    {
        return $this->MidocoCriteriaTypeCategory;
    }
    /**
     * Set MidocoCriteriaTypeCategory value
     * @param \Pggns\MidocoApi\Crm\StructType\CritTypeCatDTO $midocoCriteriaTypeCategory
     * @return \Pggns\MidocoApi\Crm\StructType\SaveCriteriaTypeCategoryRequest
     */
    public function setMidocoCriteriaTypeCategory(?\Pggns\MidocoApi\Crm\StructType\CritTypeCatDTO $midocoCriteriaTypeCategory = null): self
    {
        $this->MidocoCriteriaTypeCategory = $midocoCriteriaTypeCategory;
        
        return $this;
    }
}
