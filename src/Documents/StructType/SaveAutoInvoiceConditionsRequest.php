<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveAutoInvoiceConditionsRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: Create or update auto invoice conditions.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveAutoInvoiceConditionsRequest extends AbstractStructBase
{
    /**
     * The MidocoAutoInvoiceCondition
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * - ref: MidocoAutoInvoiceCondition
     * @var \Pggns\MidocoApi\Documents\StructType\AutoInvoiceConditionDTO
     */
    protected \Pggns\MidocoApi\Documents\StructType\AutoInvoiceConditionDTO $MidocoAutoInvoiceCondition;
    /**
     * Constructor method for SaveAutoInvoiceConditionsRequest
     * @uses SaveAutoInvoiceConditionsRequest::setMidocoAutoInvoiceCondition()
     * @param \Pggns\MidocoApi\Documents\StructType\AutoInvoiceConditionDTO $midocoAutoInvoiceCondition
     */
    public function __construct(\Pggns\MidocoApi\Documents\StructType\AutoInvoiceConditionDTO $midocoAutoInvoiceCondition)
    {
        $this
            ->setMidocoAutoInvoiceCondition($midocoAutoInvoiceCondition);
    }
    /**
     * Get MidocoAutoInvoiceCondition value
     * @return \Pggns\MidocoApi\Documents\StructType\AutoInvoiceConditionDTO
     */
    public function getMidocoAutoInvoiceCondition(): \Pggns\MidocoApi\Documents\StructType\AutoInvoiceConditionDTO
    {
        return $this->MidocoAutoInvoiceCondition;
    }
    /**
     * Set MidocoAutoInvoiceCondition value
     * @param \Pggns\MidocoApi\Documents\StructType\AutoInvoiceConditionDTO $midocoAutoInvoiceCondition
     * @return \Pggns\MidocoApi\Documents\StructType\SaveAutoInvoiceConditionsRequest
     */
    public function setMidocoAutoInvoiceCondition(\Pggns\MidocoApi\Documents\StructType\AutoInvoiceConditionDTO $midocoAutoInvoiceCondition): self
    {
        $this->MidocoAutoInvoiceCondition = $midocoAutoInvoiceCondition;
        
        return $this;
    }
}
