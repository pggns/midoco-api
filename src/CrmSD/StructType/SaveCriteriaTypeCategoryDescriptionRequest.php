<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCriteriaTypeCategoryDescriptionRequest StructType
 * @subpackage Structs
 */
class SaveCriteriaTypeCategoryDescriptionRequest extends AbstractStructBase
{
    /**
     * The MidocoCriteriaTypeCategoryDescription
     * Meta information extracted from the WSDL
     * - ref: MidocoCriteriaTypeCategoryDescription
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\CritTypeCatDescrDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\CrmSD\StructType\CritTypeCatDescrDTO $MidocoCriteriaTypeCategoryDescription = null;
    /**
     * Constructor method for SaveCriteriaTypeCategoryDescriptionRequest
     * @uses SaveCriteriaTypeCategoryDescriptionRequest::setMidocoCriteriaTypeCategoryDescription()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\CritTypeCatDescrDTO $midocoCriteriaTypeCategoryDescription
     */
    public function __construct(?\Pggns\MidocoApi\Api\CrmSD\StructType\CritTypeCatDescrDTO $midocoCriteriaTypeCategoryDescription = null)
    {
        $this
            ->setMidocoCriteriaTypeCategoryDescription($midocoCriteriaTypeCategoryDescription);
    }
    /**
     * Get MidocoCriteriaTypeCategoryDescription value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\CritTypeCatDescrDTO|null
     */
    public function getMidocoCriteriaTypeCategoryDescription(): ?\Pggns\MidocoApi\Api\CrmSD\StructType\CritTypeCatDescrDTO
    {
        return $this->MidocoCriteriaTypeCategoryDescription;
    }
    /**
     * Set MidocoCriteriaTypeCategoryDescription value
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\CritTypeCatDescrDTO $midocoCriteriaTypeCategoryDescription
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\SaveCriteriaTypeCategoryDescriptionRequest
     */
    public function setMidocoCriteriaTypeCategoryDescription(?\Pggns\MidocoApi\Api\CrmSD\StructType\CritTypeCatDescrDTO $midocoCriteriaTypeCategoryDescription = null): self
    {
        $this->MidocoCriteriaTypeCategoryDescription = $midocoCriteriaTypeCategoryDescription;
        
        return $this;
    }
}
