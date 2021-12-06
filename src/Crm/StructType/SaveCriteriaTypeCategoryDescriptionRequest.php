<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

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
     * @var \Pggns\MidocoApi\Api\Crm\StructType\CritTypeCatDescrDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Crm\StructType\CritTypeCatDescrDTO $MidocoCriteriaTypeCategoryDescription = null;
    /**
     * Constructor method for SaveCriteriaTypeCategoryDescriptionRequest
     * @uses SaveCriteriaTypeCategoryDescriptionRequest::setMidocoCriteriaTypeCategoryDescription()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\CritTypeCatDescrDTO $midocoCriteriaTypeCategoryDescription
     */
    public function __construct(?\Pggns\MidocoApi\Api\Crm\StructType\CritTypeCatDescrDTO $midocoCriteriaTypeCategoryDescription = null)
    {
        $this
            ->setMidocoCriteriaTypeCategoryDescription($midocoCriteriaTypeCategoryDescription);
    }
    /**
     * Get MidocoCriteriaTypeCategoryDescription value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\CritTypeCatDescrDTO|null
     */
    public function getMidocoCriteriaTypeCategoryDescription(): ?\Pggns\MidocoApi\Api\Crm\StructType\CritTypeCatDescrDTO
    {
        return $this->MidocoCriteriaTypeCategoryDescription;
    }
    /**
     * Set MidocoCriteriaTypeCategoryDescription value
     * @param \Pggns\MidocoApi\Api\Crm\StructType\CritTypeCatDescrDTO $midocoCriteriaTypeCategoryDescription
     * @return \Pggns\MidocoApi\Api\Crm\StructType\SaveCriteriaTypeCategoryDescriptionRequest
     */
    public function setMidocoCriteriaTypeCategoryDescription(?\Pggns\MidocoApi\Api\Crm\StructType\CritTypeCatDescrDTO $midocoCriteriaTypeCategoryDescription = null): self
    {
        $this->MidocoCriteriaTypeCategoryDescription = $midocoCriteriaTypeCategoryDescription;
        
        return $this;
    }
}
