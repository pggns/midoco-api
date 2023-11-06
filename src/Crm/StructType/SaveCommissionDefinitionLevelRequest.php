<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCommissionDefinitionLevelRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveCommissionDefinitionLevelRequest extends AbstractStructBase
{
    /**
     * The MidocoCommissionDefinitionLevel
     * Meta information extracted from the WSDL
     * - ref: MidocoCommissionDefinitionLevel
     * @var \Pggns\MidocoApi\Crm\StructType\CommissionDefinitionLevelDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\CommissionDefinitionLevelDTO $MidocoCommissionDefinitionLevel = null;
    /**
     * Constructor method for SaveCommissionDefinitionLevelRequest
     * @uses SaveCommissionDefinitionLevelRequest::setMidocoCommissionDefinitionLevel()
     * @param \Pggns\MidocoApi\Crm\StructType\CommissionDefinitionLevelDTO $midocoCommissionDefinitionLevel
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\CommissionDefinitionLevelDTO $midocoCommissionDefinitionLevel = null)
    {
        $this
            ->setMidocoCommissionDefinitionLevel($midocoCommissionDefinitionLevel);
    }
    /**
     * Get MidocoCommissionDefinitionLevel value
     * @return \Pggns\MidocoApi\Crm\StructType\CommissionDefinitionLevelDTO|null
     */
    public function getMidocoCommissionDefinitionLevel(): ?\Pggns\MidocoApi\Crm\StructType\CommissionDefinitionLevelDTO
    {
        return $this->MidocoCommissionDefinitionLevel;
    }
    /**
     * Set MidocoCommissionDefinitionLevel value
     * @param \Pggns\MidocoApi\Crm\StructType\CommissionDefinitionLevelDTO $midocoCommissionDefinitionLevel
     * @return \Pggns\MidocoApi\Crm\StructType\SaveCommissionDefinitionLevelRequest
     */
    public function setMidocoCommissionDefinitionLevel(?\Pggns\MidocoApi\Crm\StructType\CommissionDefinitionLevelDTO $midocoCommissionDefinitionLevel = null): self
    {
        $this->MidocoCommissionDefinitionLevel = $midocoCommissionDefinitionLevel;
        
        return $this;
    }
}
