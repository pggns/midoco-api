<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveOrdCriteriaTypeCategoryDescriptionRequest StructType
 * @subpackage Structs
 */
class SaveOrdCriteriaTypeCategoryDescriptionRequest extends AbstractStructBase
{
    /**
     * The MidocoOrdCriteriaTypeCategoryDescription
     * Meta information extracted from the WSDL
     * - ref: MidocoOrdCriteriaTypeCategoryDescription
     * @var \Pggns\MidocoApi\Documents\StructType\OrdCritTypeCatDescrDTO|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\OrdCritTypeCatDescrDTO $MidocoOrdCriteriaTypeCategoryDescription = null;
    /**
     * Constructor method for SaveOrdCriteriaTypeCategoryDescriptionRequest
     * @uses SaveOrdCriteriaTypeCategoryDescriptionRequest::setMidocoOrdCriteriaTypeCategoryDescription()
     * @param \Pggns\MidocoApi\Documents\StructType\OrdCritTypeCatDescrDTO $midocoOrdCriteriaTypeCategoryDescription
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\OrdCritTypeCatDescrDTO $midocoOrdCriteriaTypeCategoryDescription = null)
    {
        $this
            ->setMidocoOrdCriteriaTypeCategoryDescription($midocoOrdCriteriaTypeCategoryDescription);
    }
    /**
     * Get MidocoOrdCriteriaTypeCategoryDescription value
     * @return \Pggns\MidocoApi\Documents\StructType\OrdCritTypeCatDescrDTO|null
     */
    public function getMidocoOrdCriteriaTypeCategoryDescription(): ?\Pggns\MidocoApi\Documents\StructType\OrdCritTypeCatDescrDTO
    {
        return $this->MidocoOrdCriteriaTypeCategoryDescription;
    }
    /**
     * Set MidocoOrdCriteriaTypeCategoryDescription value
     * @param \Pggns\MidocoApi\Documents\StructType\OrdCritTypeCatDescrDTO $midocoOrdCriteriaTypeCategoryDescription
     * @return \Pggns\MidocoApi\Documents\StructType\SaveOrdCriteriaTypeCategoryDescriptionRequest
     */
    public function setMidocoOrdCriteriaTypeCategoryDescription(?\Pggns\MidocoApi\Documents\StructType\OrdCritTypeCatDescrDTO $midocoOrdCriteriaTypeCategoryDescription = null): self
    {
        $this->MidocoOrdCriteriaTypeCategoryDescription = $midocoOrdCriteriaTypeCategoryDescription;
        
        return $this;
    }
}
