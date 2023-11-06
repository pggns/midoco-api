<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

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
     * @var \Pggns\MidocoApi\OrderSD\StructType\AutoInvoiceConditionDTO
     */
    protected \Pggns\MidocoApi\OrderSD\StructType\AutoInvoiceConditionDTO $MidocoAutoInvoiceCondition;
    /**
     * Constructor method for SaveAutoInvoiceConditionsRequest
     * @uses SaveAutoInvoiceConditionsRequest::setMidocoAutoInvoiceCondition()
     * @param \Pggns\MidocoApi\OrderSD\StructType\AutoInvoiceConditionDTO $midocoAutoInvoiceCondition
     */
    public function __construct(\Pggns\MidocoApi\OrderSD\StructType\AutoInvoiceConditionDTO $midocoAutoInvoiceCondition)
    {
        $this
            ->setMidocoAutoInvoiceCondition($midocoAutoInvoiceCondition);
    }
    /**
     * Get MidocoAutoInvoiceCondition value
     * @return \Pggns\MidocoApi\OrderSD\StructType\AutoInvoiceConditionDTO
     */
    public function getMidocoAutoInvoiceCondition(): \Pggns\MidocoApi\OrderSD\StructType\AutoInvoiceConditionDTO
    {
        return $this->MidocoAutoInvoiceCondition;
    }
    /**
     * Set MidocoAutoInvoiceCondition value
     * @param \Pggns\MidocoApi\OrderSD\StructType\AutoInvoiceConditionDTO $midocoAutoInvoiceCondition
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveAutoInvoiceConditionsRequest
     */
    public function setMidocoAutoInvoiceCondition(\Pggns\MidocoApi\OrderSD\StructType\AutoInvoiceConditionDTO $midocoAutoInvoiceCondition): self
    {
        $this->MidocoAutoInvoiceCondition = $midocoAutoInvoiceCondition;
        
        return $this;
    }
}
