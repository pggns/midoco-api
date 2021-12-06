<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoSettlementTypeRequest StructType
 * @subpackage Structs
 */
class SaveMidocoSettlementTypeRequest extends AbstractStructBase
{
    /**
     * The MidocoSettlementType
     * Meta information extracted from the WSDL
     * - ref: MidocoSettlementType
     * @var \Pggns\MidocoApi\Documents\StructType\SettlementTypeDTO|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\SettlementTypeDTO $MidocoSettlementType = null;
    /**
     * Constructor method for SaveMidocoSettlementTypeRequest
     * @uses SaveMidocoSettlementTypeRequest::setMidocoSettlementType()
     * @param \Pggns\MidocoApi\Documents\StructType\SettlementTypeDTO $midocoSettlementType
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\SettlementTypeDTO $midocoSettlementType = null)
    {
        $this
            ->setMidocoSettlementType($midocoSettlementType);
    }
    /**
     * Get MidocoSettlementType value
     * @return \Pggns\MidocoApi\Documents\StructType\SettlementTypeDTO|null
     */
    public function getMidocoSettlementType(): ?\Pggns\MidocoApi\Documents\StructType\SettlementTypeDTO
    {
        return $this->MidocoSettlementType;
    }
    /**
     * Set MidocoSettlementType value
     * @param \Pggns\MidocoApi\Documents\StructType\SettlementTypeDTO $midocoSettlementType
     * @return \Pggns\MidocoApi\Documents\StructType\SaveMidocoSettlementTypeRequest
     */
    public function setMidocoSettlementType(?\Pggns\MidocoApi\Documents\StructType\SettlementTypeDTO $midocoSettlementType = null): self
    {
        $this->MidocoSettlementType = $midocoSettlementType;
        
        return $this;
    }
}
