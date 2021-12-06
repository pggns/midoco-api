<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteCustomerCategoryRequest StructType
 * @subpackage Structs
 */
class DeleteCustomerCategoryRequest extends AbstractStructBase
{
    /**
     * The MidocoCustomerCategory
     * Meta information extracted from the WSDL
     * - ref: MidocoCustomerCategory
     * @var \Pggns\MidocoApi\CrmSD\StructType\MidocoCustomerCategory|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\MidocoCustomerCategory $MidocoCustomerCategory = null;
    /**
     * Constructor method for DeleteCustomerCategoryRequest
     * @uses DeleteCustomerCategoryRequest::setMidocoCustomerCategory()
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoCustomerCategory $midocoCustomerCategory
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\MidocoCustomerCategory $midocoCustomerCategory = null)
    {
        $this
            ->setMidocoCustomerCategory($midocoCustomerCategory);
    }
    /**
     * Get MidocoCustomerCategory value
     * @return \Pggns\MidocoApi\CrmSD\StructType\MidocoCustomerCategory|null
     */
    public function getMidocoCustomerCategory(): ?\Pggns\MidocoApi\CrmSD\StructType\MidocoCustomerCategory
    {
        return $this->MidocoCustomerCategory;
    }
    /**
     * Set MidocoCustomerCategory value
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoCustomerCategory $midocoCustomerCategory
     * @return \Pggns\MidocoApi\CrmSD\StructType\DeleteCustomerCategoryRequest
     */
    public function setMidocoCustomerCategory(?\Pggns\MidocoApi\CrmSD\StructType\MidocoCustomerCategory $midocoCustomerCategory = null): self
    {
        $this->MidocoCustomerCategory = $midocoCustomerCategory;
        
        return $this;
    }
}
