<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCommissionDescriptionRequest StructType
 * @subpackage Structs
 */
class SaveCommissionDescriptionRequest extends AbstractStructBase
{
    /**
     * The MidocoCommissionDescription
     * Meta information extracted from the WSDL
     * - ref: MidocoCommissionDescription
     * @var \Pggns\MidocoApi\Api\Crm\StructType\CommissionDescriptionDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Crm\StructType\CommissionDescriptionDTO $MidocoCommissionDescription = null;
    /**
     * Constructor method for SaveCommissionDescriptionRequest
     * @uses SaveCommissionDescriptionRequest::setMidocoCommissionDescription()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\CommissionDescriptionDTO $midocoCommissionDescription
     */
    public function __construct(?\Pggns\MidocoApi\Api\Crm\StructType\CommissionDescriptionDTO $midocoCommissionDescription = null)
    {
        $this
            ->setMidocoCommissionDescription($midocoCommissionDescription);
    }
    /**
     * Get MidocoCommissionDescription value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\CommissionDescriptionDTO|null
     */
    public function getMidocoCommissionDescription(): ?\Pggns\MidocoApi\Api\Crm\StructType\CommissionDescriptionDTO
    {
        return $this->MidocoCommissionDescription;
    }
    /**
     * Set MidocoCommissionDescription value
     * @param \Pggns\MidocoApi\Api\Crm\StructType\CommissionDescriptionDTO $midocoCommissionDescription
     * @return \Pggns\MidocoApi\Api\Crm\StructType\SaveCommissionDescriptionRequest
     */
    public function setMidocoCommissionDescription(?\Pggns\MidocoApi\Api\Crm\StructType\CommissionDescriptionDTO $midocoCommissionDescription = null): self
    {
        $this->MidocoCommissionDescription = $midocoCommissionDescription;
        
        return $this;
    }
}
