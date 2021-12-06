<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteCommissionLevelRequest StructType
 * @subpackage Structs
 */
class DeleteCommissionLevelRequest extends AbstractStructBase
{
    /**
     * The MidocoCommissionLevel
     * Meta information extracted from the WSDL
     * - ref: MidocoCommissionLevel
     * @var \Pggns\MidocoApi\Api\Crm\StructType\CommissionLevelDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Crm\StructType\CommissionLevelDTO $MidocoCommissionLevel = null;
    /**
     * Constructor method for DeleteCommissionLevelRequest
     * @uses DeleteCommissionLevelRequest::setMidocoCommissionLevel()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\CommissionLevelDTO $midocoCommissionLevel
     */
    public function __construct(?\Pggns\MidocoApi\Api\Crm\StructType\CommissionLevelDTO $midocoCommissionLevel = null)
    {
        $this
            ->setMidocoCommissionLevel($midocoCommissionLevel);
    }
    /**
     * Get MidocoCommissionLevel value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\CommissionLevelDTO|null
     */
    public function getMidocoCommissionLevel(): ?\Pggns\MidocoApi\Api\Crm\StructType\CommissionLevelDTO
    {
        return $this->MidocoCommissionLevel;
    }
    /**
     * Set MidocoCommissionLevel value
     * @param \Pggns\MidocoApi\Api\Crm\StructType\CommissionLevelDTO $midocoCommissionLevel
     * @return \Pggns\MidocoApi\Api\Crm\StructType\DeleteCommissionLevelRequest
     */
    public function setMidocoCommissionLevel(?\Pggns\MidocoApi\Api\Crm\StructType\CommissionLevelDTO $midocoCommissionLevel = null): self
    {
        $this->MidocoCommissionLevel = $midocoCommissionLevel;
        
        return $this;
    }
}
