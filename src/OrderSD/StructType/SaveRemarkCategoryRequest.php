<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

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
     * @var \Pggns\MidocoApi\OrderSD\StructType\MidocoRemarkCategory|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\MidocoRemarkCategory $MidocoRemarkCategory = null;
    /**
     * Constructor method for SaveRemarkCategoryRequest
     * @uses SaveRemarkCategoryRequest::setMidocoRemarkCategory()
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoRemarkCategory $midocoRemarkCategory
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\MidocoRemarkCategory $midocoRemarkCategory = null)
    {
        $this
            ->setMidocoRemarkCategory($midocoRemarkCategory);
    }
    /**
     * Get MidocoRemarkCategory value
     * @return \Pggns\MidocoApi\OrderSD\StructType\MidocoRemarkCategory|null
     */
    public function getMidocoRemarkCategory(): ?\Pggns\MidocoApi\OrderSD\StructType\MidocoRemarkCategory
    {
        return $this->MidocoRemarkCategory;
    }
    /**
     * Set MidocoRemarkCategory value
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoRemarkCategory $midocoRemarkCategory
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveRemarkCategoryRequest
     */
    public function setMidocoRemarkCategory(?\Pggns\MidocoApi\OrderSD\StructType\MidocoRemarkCategory $midocoRemarkCategory = null): self
    {
        $this->MidocoRemarkCategory = $midocoRemarkCategory;
        
        return $this;
    }
}
