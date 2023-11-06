<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCriteriaTypeCategoryDescriptionRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveCriteriaTypeCategoryDescriptionRequest extends AbstractStructBase
{
    /**
     * The MidocoCriteriaTypeCategoryDescription
     * Meta information extracted from the WSDL
     * - ref: MidocoCriteriaTypeCategoryDescription
     * @var \Pggns\MidocoApi\Crm\StructType\CritTypeCatDescrDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\CritTypeCatDescrDTO $MidocoCriteriaTypeCategoryDescription = null;
    /**
     * Constructor method for SaveCriteriaTypeCategoryDescriptionRequest
     * @uses SaveCriteriaTypeCategoryDescriptionRequest::setMidocoCriteriaTypeCategoryDescription()
     * @param \Pggns\MidocoApi\Crm\StructType\CritTypeCatDescrDTO $midocoCriteriaTypeCategoryDescription
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\CritTypeCatDescrDTO $midocoCriteriaTypeCategoryDescription = null)
    {
        $this
            ->setMidocoCriteriaTypeCategoryDescription($midocoCriteriaTypeCategoryDescription);
    }
    /**
     * Get MidocoCriteriaTypeCategoryDescription value
     * @return \Pggns\MidocoApi\Crm\StructType\CritTypeCatDescrDTO|null
     */
    public function getMidocoCriteriaTypeCategoryDescription(): ?\Pggns\MidocoApi\Crm\StructType\CritTypeCatDescrDTO
    {
        return $this->MidocoCriteriaTypeCategoryDescription;
    }
    /**
     * Set MidocoCriteriaTypeCategoryDescription value
     * @param \Pggns\MidocoApi\Crm\StructType\CritTypeCatDescrDTO $midocoCriteriaTypeCategoryDescription
     * @return \Pggns\MidocoApi\Crm\StructType\SaveCriteriaTypeCategoryDescriptionRequest
     */
    public function setMidocoCriteriaTypeCategoryDescription(?\Pggns\MidocoApi\Crm\StructType\CritTypeCatDescrDTO $midocoCriteriaTypeCategoryDescription = null): self
    {
        $this->MidocoCriteriaTypeCategoryDescription = $midocoCriteriaTypeCategoryDescription;
        
        return $this;
    }
}
