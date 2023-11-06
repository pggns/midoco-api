<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveOrdCriteriaTypeCategoryDescriptionRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveOrdCriteriaTypeCategoryDescriptionRequest extends AbstractStructBase
{
    /**
     * The MidocoOrdCriteriaTypeCategoryDescription
     * Meta information extracted from the WSDL
     * - ref: MidocoOrdCriteriaTypeCategoryDescription
     * @var \Pggns\MidocoApi\Orderlists\StructType\OrdCritTypeCatDescrDTO|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\OrdCritTypeCatDescrDTO $MidocoOrdCriteriaTypeCategoryDescription = null;
    /**
     * Constructor method for SaveOrdCriteriaTypeCategoryDescriptionRequest
     * @uses SaveOrdCriteriaTypeCategoryDescriptionRequest::setMidocoOrdCriteriaTypeCategoryDescription()
     * @param \Pggns\MidocoApi\Orderlists\StructType\OrdCritTypeCatDescrDTO $midocoOrdCriteriaTypeCategoryDescription
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\OrdCritTypeCatDescrDTO $midocoOrdCriteriaTypeCategoryDescription = null)
    {
        $this
            ->setMidocoOrdCriteriaTypeCategoryDescription($midocoOrdCriteriaTypeCategoryDescription);
    }
    /**
     * Get MidocoOrdCriteriaTypeCategoryDescription value
     * @return \Pggns\MidocoApi\Orderlists\StructType\OrdCritTypeCatDescrDTO|null
     */
    public function getMidocoOrdCriteriaTypeCategoryDescription(): ?\Pggns\MidocoApi\Orderlists\StructType\OrdCritTypeCatDescrDTO
    {
        return $this->MidocoOrdCriteriaTypeCategoryDescription;
    }
    /**
     * Set MidocoOrdCriteriaTypeCategoryDescription value
     * @param \Pggns\MidocoApi\Orderlists\StructType\OrdCritTypeCatDescrDTO $midocoOrdCriteriaTypeCategoryDescription
     * @return \Pggns\MidocoApi\Orderlists\StructType\SaveOrdCriteriaTypeCategoryDescriptionRequest
     */
    public function setMidocoOrdCriteriaTypeCategoryDescription(?\Pggns\MidocoApi\Orderlists\StructType\OrdCritTypeCatDescrDTO $midocoOrdCriteriaTypeCategoryDescription = null): self
    {
        $this->MidocoOrdCriteriaTypeCategoryDescription = $midocoOrdCriteriaTypeCategoryDescription;
        
        return $this;
    }
}
