<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoSettlMDocLevelRequest StructType
 * @subpackage Structs
 */
class SaveMidocoSettlMDocLevelRequest extends AbstractStructBase
{
    /**
     * The MidocoCrmMidocoSettlMdocLevel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoCrmMidocoSettlMdocLevel
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\CrmMidocoSettlMdocLevelDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\CrmSD\StructType\CrmMidocoSettlMdocLevelDTO $MidocoCrmMidocoSettlMdocLevel = null;
    /**
     * Constructor method for SaveMidocoSettlMDocLevelRequest
     * @uses SaveMidocoSettlMDocLevelRequest::setMidocoCrmMidocoSettlMdocLevel()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\CrmMidocoSettlMdocLevelDTO $midocoCrmMidocoSettlMdocLevel
     */
    public function __construct(?\Pggns\MidocoApi\Api\CrmSD\StructType\CrmMidocoSettlMdocLevelDTO $midocoCrmMidocoSettlMdocLevel = null)
    {
        $this
            ->setMidocoCrmMidocoSettlMdocLevel($midocoCrmMidocoSettlMdocLevel);
    }
    /**
     * Get MidocoCrmMidocoSettlMdocLevel value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\CrmMidocoSettlMdocLevelDTO|null
     */
    public function getMidocoCrmMidocoSettlMdocLevel(): ?\Pggns\MidocoApi\Api\CrmSD\StructType\CrmMidocoSettlMdocLevelDTO
    {
        return $this->MidocoCrmMidocoSettlMdocLevel;
    }
    /**
     * Set MidocoCrmMidocoSettlMdocLevel value
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\CrmMidocoSettlMdocLevelDTO $midocoCrmMidocoSettlMdocLevel
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\SaveMidocoSettlMDocLevelRequest
     */
    public function setMidocoCrmMidocoSettlMdocLevel(?\Pggns\MidocoApi\Api\CrmSD\StructType\CrmMidocoSettlMdocLevelDTO $midocoCrmMidocoSettlMdocLevel = null): self
    {
        $this->MidocoCrmMidocoSettlMdocLevel = $midocoCrmMidocoSettlMdocLevel;
        
        return $this;
    }
}
