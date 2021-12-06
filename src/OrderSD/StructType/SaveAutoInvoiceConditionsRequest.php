<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveAutoInvoiceConditionsRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: Create or update auto invoice conditions.
 * @subpackage Structs
 */
class SaveAutoInvoiceConditionsRequest extends AbstractStructBase
{
    /**
     * The MidocoAutoInvoiceCondition
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * - ref: MidocoAutoInvoiceCondition
     * @var \Pggns\MidocoApi\Api\OrderSD\StructType\AutoInvoiceConditionDTO
     */
    protected \Pggns\MidocoApi\Api\OrderSD\StructType\AutoInvoiceConditionDTO $MidocoAutoInvoiceCondition;
    /**
     * Constructor method for SaveAutoInvoiceConditionsRequest
     * @uses SaveAutoInvoiceConditionsRequest::setMidocoAutoInvoiceCondition()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\AutoInvoiceConditionDTO $midocoAutoInvoiceCondition
     */
    public function __construct(\Pggns\MidocoApi\Api\OrderSD\StructType\AutoInvoiceConditionDTO $midocoAutoInvoiceCondition)
    {
        $this
            ->setMidocoAutoInvoiceCondition($midocoAutoInvoiceCondition);
    }
    /**
     * Get MidocoAutoInvoiceCondition value
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\AutoInvoiceConditionDTO
     */
    public function getMidocoAutoInvoiceCondition(): \Pggns\MidocoApi\Api\OrderSD\StructType\AutoInvoiceConditionDTO
    {
        return $this->MidocoAutoInvoiceCondition;
    }
    /**
     * Set MidocoAutoInvoiceCondition value
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\AutoInvoiceConditionDTO $midocoAutoInvoiceCondition
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\SaveAutoInvoiceConditionsRequest
     */
    public function setMidocoAutoInvoiceCondition(\Pggns\MidocoApi\Api\OrderSD\StructType\AutoInvoiceConditionDTO $midocoAutoInvoiceCondition): self
    {
        $this->MidocoAutoInvoiceCondition = $midocoAutoInvoiceCondition;
        
        return $this;
    }
}
