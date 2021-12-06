<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoSettlMDocLevelResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: saveMidocoSettlMDocLevel --- saves a MidocoSettlMDocLevel
 * @subpackage Structs
 */
class SaveMidocoSettlMDocLevelResponse extends AbstractStructBase
{
    /**
     * The MidocoCrmMidocoSettlMdocLevel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoCrmMidocoSettlMdocLevel
     * @var \Pggns\MidocoApi\Api\Crm\StructType\CrmMidocoSettlMdocLevelDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Crm\StructType\CrmMidocoSettlMdocLevelDTO $MidocoCrmMidocoSettlMdocLevel = null;
    /**
     * Constructor method for SaveMidocoSettlMDocLevelResponse
     * @uses SaveMidocoSettlMDocLevelResponse::setMidocoCrmMidocoSettlMdocLevel()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\CrmMidocoSettlMdocLevelDTO $midocoCrmMidocoSettlMdocLevel
     */
    public function __construct(?\Pggns\MidocoApi\Api\Crm\StructType\CrmMidocoSettlMdocLevelDTO $midocoCrmMidocoSettlMdocLevel = null)
    {
        $this
            ->setMidocoCrmMidocoSettlMdocLevel($midocoCrmMidocoSettlMdocLevel);
    }
    /**
     * Get MidocoCrmMidocoSettlMdocLevel value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\CrmMidocoSettlMdocLevelDTO|null
     */
    public function getMidocoCrmMidocoSettlMdocLevel(): ?\Pggns\MidocoApi\Api\Crm\StructType\CrmMidocoSettlMdocLevelDTO
    {
        return $this->MidocoCrmMidocoSettlMdocLevel;
    }
    /**
     * Set MidocoCrmMidocoSettlMdocLevel value
     * @param \Pggns\MidocoApi\Api\Crm\StructType\CrmMidocoSettlMdocLevelDTO $midocoCrmMidocoSettlMdocLevel
     * @return \Pggns\MidocoApi\Api\Crm\StructType\SaveMidocoSettlMDocLevelResponse
     */
    public function setMidocoCrmMidocoSettlMdocLevel(?\Pggns\MidocoApi\Api\Crm\StructType\CrmMidocoSettlMdocLevelDTO $midocoCrmMidocoSettlMdocLevel = null): self
    {
        $this->MidocoCrmMidocoSettlMdocLevel = $midocoCrmMidocoSettlMdocLevel;
        
        return $this;
    }
}
