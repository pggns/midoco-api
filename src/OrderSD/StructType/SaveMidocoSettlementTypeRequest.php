<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoSettlementTypeRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveMidocoSettlementTypeRequest extends AbstractStructBase
{
    /**
     * The MidocoSettlementType
     * Meta information extracted from the WSDL
     * - ref: MidocoSettlementType
     * @var \Pggns\MidocoApi\OrderSD\StructType\SettlementTypeDTO|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\SettlementTypeDTO $MidocoSettlementType = null;
    /**
     * Constructor method for SaveMidocoSettlementTypeRequest
     * @uses SaveMidocoSettlementTypeRequest::setMidocoSettlementType()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SettlementTypeDTO $midocoSettlementType
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\SettlementTypeDTO $midocoSettlementType = null)
    {
        $this
            ->setMidocoSettlementType($midocoSettlementType);
    }
    /**
     * Get MidocoSettlementType value
     * @return \Pggns\MidocoApi\OrderSD\StructType\SettlementTypeDTO|null
     */
    public function getMidocoSettlementType(): ?\Pggns\MidocoApi\OrderSD\StructType\SettlementTypeDTO
    {
        return $this->MidocoSettlementType;
    }
    /**
     * Set MidocoSettlementType value
     * @param \Pggns\MidocoApi\OrderSD\StructType\SettlementTypeDTO $midocoSettlementType
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveMidocoSettlementTypeRequest
     */
    public function setMidocoSettlementType(?\Pggns\MidocoApi\OrderSD\StructType\SettlementTypeDTO $midocoSettlementType = null): self
    {
        $this->MidocoSettlementType = $midocoSettlementType;
        
        return $this;
    }
}
