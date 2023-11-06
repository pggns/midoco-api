<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCrmMidocoSettlLevelResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: GetCrmMidocoSettlLevel --- returns the Midoco settlement levels defined for the given level id
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCrmMidocoSettlLevelResponse extends AbstractStructBase
{
    /**
     * The MidocoCrmMidocoSettlLevel
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmMidocoSettlLevel
     * @var \Pggns\MidocoApi\Crm\StructType\CrmMidocoSettlLevelDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\CrmMidocoSettlLevelDTO $MidocoCrmMidocoSettlLevel = null;
    /**
     * Constructor method for GetCrmMidocoSettlLevelResponse
     * @uses GetCrmMidocoSettlLevelResponse::setMidocoCrmMidocoSettlLevel()
     * @param \Pggns\MidocoApi\Crm\StructType\CrmMidocoSettlLevelDTO $midocoCrmMidocoSettlLevel
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\CrmMidocoSettlLevelDTO $midocoCrmMidocoSettlLevel = null)
    {
        $this
            ->setMidocoCrmMidocoSettlLevel($midocoCrmMidocoSettlLevel);
    }
    /**
     * Get MidocoCrmMidocoSettlLevel value
     * @return \Pggns\MidocoApi\Crm\StructType\CrmMidocoSettlLevelDTO|null
     */
    public function getMidocoCrmMidocoSettlLevel(): ?\Pggns\MidocoApi\Crm\StructType\CrmMidocoSettlLevelDTO
    {
        return $this->MidocoCrmMidocoSettlLevel;
    }
    /**
     * Set MidocoCrmMidocoSettlLevel value
     * @param \Pggns\MidocoApi\Crm\StructType\CrmMidocoSettlLevelDTO $midocoCrmMidocoSettlLevel
     * @return \Pggns\MidocoApi\Crm\StructType\GetCrmMidocoSettlLevelResponse
     */
    public function setMidocoCrmMidocoSettlLevel(?\Pggns\MidocoApi\Crm\StructType\CrmMidocoSettlLevelDTO $midocoCrmMidocoSettlLevel = null): self
    {
        $this->MidocoCrmMidocoSettlLevel = $midocoCrmMidocoSettlLevel;
        
        return $this;
    }
}
