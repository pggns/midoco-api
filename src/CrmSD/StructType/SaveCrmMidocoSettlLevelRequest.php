<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCrmMidocoSettlLevelRequest StructType
 * @subpackage Structs
 */
class SaveCrmMidocoSettlLevelRequest extends AbstractStructBase
{
    /**
     * The MidocoCrmMidocoSettlLevel
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmMidocoSettlLevel
     * @var \Pggns\MidocoApi\CrmSD\StructType\CrmMidocoSettlLevelDTO|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\CrmMidocoSettlLevelDTO $MidocoCrmMidocoSettlLevel = null;
    /**
     * Constructor method for SaveCrmMidocoSettlLevelRequest
     * @uses SaveCrmMidocoSettlLevelRequest::setMidocoCrmMidocoSettlLevel()
     * @param \Pggns\MidocoApi\CrmSD\StructType\CrmMidocoSettlLevelDTO $midocoCrmMidocoSettlLevel
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\CrmMidocoSettlLevelDTO $midocoCrmMidocoSettlLevel = null)
    {
        $this
            ->setMidocoCrmMidocoSettlLevel($midocoCrmMidocoSettlLevel);
    }
    /**
     * Get MidocoCrmMidocoSettlLevel value
     * @return \Pggns\MidocoApi\CrmSD\StructType\CrmMidocoSettlLevelDTO|null
     */
    public function getMidocoCrmMidocoSettlLevel(): ?\Pggns\MidocoApi\CrmSD\StructType\CrmMidocoSettlLevelDTO
    {
        return $this->MidocoCrmMidocoSettlLevel;
    }
    /**
     * Set MidocoCrmMidocoSettlLevel value
     * @param \Pggns\MidocoApi\CrmSD\StructType\CrmMidocoSettlLevelDTO $midocoCrmMidocoSettlLevel
     * @return \Pggns\MidocoApi\CrmSD\StructType\SaveCrmMidocoSettlLevelRequest
     */
    public function setMidocoCrmMidocoSettlLevel(?\Pggns\MidocoApi\CrmSD\StructType\CrmMidocoSettlLevelDTO $midocoCrmMidocoSettlLevel = null): self
    {
        $this->MidocoCrmMidocoSettlLevel = $midocoCrmMidocoSettlLevel;
        
        return $this;
    }
}
