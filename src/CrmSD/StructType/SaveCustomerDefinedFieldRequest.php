<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCustomerDefinedFieldRequest StructType
 * @subpackage Structs
 */
class SaveCustomerDefinedFieldRequest extends AbstractStructBase
{
    /**
     * The MidocoCustomerDefinedField
     * Meta information extracted from the WSDL
     * - ref: MidocoCustomerDefinedField
     * @var \Pggns\MidocoApi\CrmSD\StructType\CustomerDefinedFieldDTO|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\CustomerDefinedFieldDTO $MidocoCustomerDefinedField = null;
    /**
     * Constructor method for SaveCustomerDefinedFieldRequest
     * @uses SaveCustomerDefinedFieldRequest::setMidocoCustomerDefinedField()
     * @param \Pggns\MidocoApi\CrmSD\StructType\CustomerDefinedFieldDTO $midocoCustomerDefinedField
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\CustomerDefinedFieldDTO $midocoCustomerDefinedField = null)
    {
        $this
            ->setMidocoCustomerDefinedField($midocoCustomerDefinedField);
    }
    /**
     * Get MidocoCustomerDefinedField value
     * @return \Pggns\MidocoApi\CrmSD\StructType\CustomerDefinedFieldDTO|null
     */
    public function getMidocoCustomerDefinedField(): ?\Pggns\MidocoApi\CrmSD\StructType\CustomerDefinedFieldDTO
    {
        return $this->MidocoCustomerDefinedField;
    }
    /**
     * Set MidocoCustomerDefinedField value
     * @param \Pggns\MidocoApi\CrmSD\StructType\CustomerDefinedFieldDTO $midocoCustomerDefinedField
     * @return \Pggns\MidocoApi\CrmSD\StructType\SaveCustomerDefinedFieldRequest
     */
    public function setMidocoCustomerDefinedField(?\Pggns\MidocoApi\CrmSD\StructType\CustomerDefinedFieldDTO $midocoCustomerDefinedField = null): self
    {
        $this->MidocoCustomerDefinedField = $midocoCustomerDefinedField;
        
        return $this;
    }
}
