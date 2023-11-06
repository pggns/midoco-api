<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCustomerCategoryRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveCustomerCategoryRequest extends AbstractStructBase
{
    /**
     * The MidocoCustomerCategory
     * Meta information extracted from the WSDL
     * - ref: MidocoCustomerCategory
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoCustomerCategory|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoCustomerCategory $MidocoCustomerCategory = null;
    /**
     * Constructor method for SaveCustomerCategoryRequest
     * @uses SaveCustomerCategoryRequest::setMidocoCustomerCategory()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCustomerCategory $midocoCustomerCategory
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\MidocoCustomerCategory $midocoCustomerCategory = null)
    {
        $this
            ->setMidocoCustomerCategory($midocoCustomerCategory);
    }
    /**
     * Get MidocoCustomerCategory value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCustomerCategory|null
     */
    public function getMidocoCustomerCategory(): ?\Pggns\MidocoApi\Crm\StructType\MidocoCustomerCategory
    {
        return $this->MidocoCustomerCategory;
    }
    /**
     * Set MidocoCustomerCategory value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCustomerCategory $midocoCustomerCategory
     * @return \Pggns\MidocoApi\Crm\StructType\SaveCustomerCategoryRequest
     */
    public function setMidocoCustomerCategory(?\Pggns\MidocoApi\Crm\StructType\MidocoCustomerCategory $midocoCustomerCategory = null): self
    {
        $this->MidocoCustomerCategory = $midocoCustomerCategory;
        
        return $this;
    }
}
