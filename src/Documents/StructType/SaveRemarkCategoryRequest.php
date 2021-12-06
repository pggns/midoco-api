<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveRemarkCategoryRequest StructType
 * @subpackage Structs
 */
class SaveRemarkCategoryRequest extends AbstractStructBase
{
    /**
     * The MidocoRemarkCategory
     * Meta information extracted from the WSDL
     * - ref: MidocoRemarkCategory
     * @var \Pggns\MidocoApi\Api\Documents\StructType\MidocoRemarkCategory|null
     */
    protected ?\Pggns\MidocoApi\Api\Documents\StructType\MidocoRemarkCategory $MidocoRemarkCategory = null;
    /**
     * Constructor method for SaveRemarkCategoryRequest
     * @uses SaveRemarkCategoryRequest::setMidocoRemarkCategory()
     * @param \Pggns\MidocoApi\Api\Documents\StructType\MidocoRemarkCategory $midocoRemarkCategory
     */
    public function __construct(?\Pggns\MidocoApi\Api\Documents\StructType\MidocoRemarkCategory $midocoRemarkCategory = null)
    {
        $this
            ->setMidocoRemarkCategory($midocoRemarkCategory);
    }
    /**
     * Get MidocoRemarkCategory value
     * @return \Pggns\MidocoApi\Api\Documents\StructType\MidocoRemarkCategory|null
     */
    public function getMidocoRemarkCategory(): ?\Pggns\MidocoApi\Api\Documents\StructType\MidocoRemarkCategory
    {
        return $this->MidocoRemarkCategory;
    }
    /**
     * Set MidocoRemarkCategory value
     * @param \Pggns\MidocoApi\Api\Documents\StructType\MidocoRemarkCategory $midocoRemarkCategory
     * @return \Pggns\MidocoApi\Api\Documents\StructType\SaveRemarkCategoryRequest
     */
    public function setMidocoRemarkCategory(?\Pggns\MidocoApi\Api\Documents\StructType\MidocoRemarkCategory $midocoRemarkCategory = null): self
    {
        $this->MidocoRemarkCategory = $midocoRemarkCategory;
        
        return $this;
    }
}