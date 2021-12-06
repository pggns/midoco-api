<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateExternalCampaignResponseType StructType
 * @subpackage Structs
 */
class CreateExternalCampaignResponseType extends ExternalCampaignDTO
{
    /**
     * The CustomerIds
     * @var \Pggns\MidocoApi\CrmSD\StructType\CustomerIds|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\CustomerIds $CustomerIds = null;
    /**
     * Constructor method for CreateExternalCampaignResponseType
     * @uses CreateExternalCampaignResponseType::setCustomerIds()
     * @param \Pggns\MidocoApi\CrmSD\StructType\CustomerIds $customerIds
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\CustomerIds $customerIds = null)
    {
        $this
            ->setCustomerIds($customerIds);
    }
    /**
     * Get CustomerIds value
     * @return \Pggns\MidocoApi\CrmSD\StructType\CustomerIds|null
     */
    public function getCustomerIds(): ?\Pggns\MidocoApi\CrmSD\StructType\CustomerIds
    {
        return $this->CustomerIds;
    }
    /**
     * Set CustomerIds value
     * @param \Pggns\MidocoApi\CrmSD\StructType\CustomerIds $customerIds
     * @return \Pggns\MidocoApi\CrmSD\StructType\CreateExternalCampaignResponseType
     */
    public function setCustomerIds(?\Pggns\MidocoApi\CrmSD\StructType\CustomerIds $customerIds = null): self
    {
        $this->CustomerIds = $customerIds;
        
        return $this;
    }
}
