<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCustomerDefinedFieldRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveCustomerDefinedFieldRequest extends AbstractStructBase
{
    /**
     * The MidocoCustomerDefinedField
     * Meta information extracted from the WSDL
     * - ref: MidocoCustomerDefinedField
     * @var \Pggns\MidocoApi\Crm\StructType\CustomerDefinedFieldDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\CustomerDefinedFieldDTO $MidocoCustomerDefinedField = null;
    /**
     * Constructor method for SaveCustomerDefinedFieldRequest
     * @uses SaveCustomerDefinedFieldRequest::setMidocoCustomerDefinedField()
     * @param \Pggns\MidocoApi\Crm\StructType\CustomerDefinedFieldDTO $midocoCustomerDefinedField
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\CustomerDefinedFieldDTO $midocoCustomerDefinedField = null)
    {
        $this
            ->setMidocoCustomerDefinedField($midocoCustomerDefinedField);
    }
    /**
     * Get MidocoCustomerDefinedField value
     * @return \Pggns\MidocoApi\Crm\StructType\CustomerDefinedFieldDTO|null
     */
    public function getMidocoCustomerDefinedField(): ?\Pggns\MidocoApi\Crm\StructType\CustomerDefinedFieldDTO
    {
        return $this->MidocoCustomerDefinedField;
    }
    /**
     * Set MidocoCustomerDefinedField value
     * @param \Pggns\MidocoApi\Crm\StructType\CustomerDefinedFieldDTO $midocoCustomerDefinedField
     * @return \Pggns\MidocoApi\Crm\StructType\SaveCustomerDefinedFieldRequest
     */
    public function setMidocoCustomerDefinedField(?\Pggns\MidocoApi\Crm\StructType\CustomerDefinedFieldDTO $midocoCustomerDefinedField = null): self
    {
        $this->MidocoCustomerDefinedField = $midocoCustomerDefinedField;
        
        return $this;
    }
}
