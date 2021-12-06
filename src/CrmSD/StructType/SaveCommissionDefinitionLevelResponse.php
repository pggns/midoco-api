<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCommissionDefinitionLevelResponse StructType
 * @subpackage Structs
 */
class SaveCommissionDefinitionLevelResponse extends AbstractStructBase
{
    /**
     * The MidocoCommissionDefinitionLevel
     * Meta information extracted from the WSDL
     * - ref: MidocoCommissionDefinitionLevel
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\CommissionDefinitionLevelDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\CrmSD\StructType\CommissionDefinitionLevelDTO $MidocoCommissionDefinitionLevel = null;
    /**
     * Constructor method for SaveCommissionDefinitionLevelResponse
     * @uses SaveCommissionDefinitionLevelResponse::setMidocoCommissionDefinitionLevel()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\CommissionDefinitionLevelDTO $midocoCommissionDefinitionLevel
     */
    public function __construct(?\Pggns\MidocoApi\Api\CrmSD\StructType\CommissionDefinitionLevelDTO $midocoCommissionDefinitionLevel = null)
    {
        $this
            ->setMidocoCommissionDefinitionLevel($midocoCommissionDefinitionLevel);
    }
    /**
     * Get MidocoCommissionDefinitionLevel value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\CommissionDefinitionLevelDTO|null
     */
    public function getMidocoCommissionDefinitionLevel(): ?\Pggns\MidocoApi\Api\CrmSD\StructType\CommissionDefinitionLevelDTO
    {
        return $this->MidocoCommissionDefinitionLevel;
    }
    /**
     * Set MidocoCommissionDefinitionLevel value
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\CommissionDefinitionLevelDTO $midocoCommissionDefinitionLevel
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\SaveCommissionDefinitionLevelResponse
     */
    public function setMidocoCommissionDefinitionLevel(?\Pggns\MidocoApi\Api\CrmSD\StructType\CommissionDefinitionLevelDTO $midocoCommissionDefinitionLevel = null): self
    {
        $this->MidocoCommissionDefinitionLevel = $midocoCommissionDefinitionLevel;
        
        return $this;
    }
}
