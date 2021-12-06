<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrepareGroupAdvisorCommissionRequest StructType
 * @subpackage Structs
 */
class PrepareGroupAdvisorCommissionRequest extends AbstractStructBase
{
    /**
     * The GroupAdvisorSearchCriteria
     * Meta information extracted from the WSDL
     * - ref: GroupAdvisorSearchCriteria
     * @var \Pggns\MidocoApi\Api\Order\StructType\GroupAdvisorSearchCriteria|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\GroupAdvisorSearchCriteria $GroupAdvisorSearchCriteria = null;
    /**
     * Constructor method for PrepareGroupAdvisorCommissionRequest
     * @uses PrepareGroupAdvisorCommissionRequest::setGroupAdvisorSearchCriteria()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GroupAdvisorSearchCriteria $groupAdvisorSearchCriteria
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\GroupAdvisorSearchCriteria $groupAdvisorSearchCriteria = null)
    {
        $this
            ->setGroupAdvisorSearchCriteria($groupAdvisorSearchCriteria);
    }
    /**
     * Get GroupAdvisorSearchCriteria value
     * @return \Pggns\MidocoApi\Api\Order\StructType\GroupAdvisorSearchCriteria|null
     */
    public function getGroupAdvisorSearchCriteria(): ?\Pggns\MidocoApi\Api\Order\StructType\GroupAdvisorSearchCriteria
    {
        return $this->GroupAdvisorSearchCriteria;
    }
    /**
     * Set GroupAdvisorSearchCriteria value
     * @param \Pggns\MidocoApi\Api\Order\StructType\GroupAdvisorSearchCriteria $groupAdvisorSearchCriteria
     * @return \Pggns\MidocoApi\Api\Order\StructType\PrepareGroupAdvisorCommissionRequest
     */
    public function setGroupAdvisorSearchCriteria(?\Pggns\MidocoApi\Api\Order\StructType\GroupAdvisorSearchCriteria $groupAdvisorSearchCriteria = null): self
    {
        $this->GroupAdvisorSearchCriteria = $groupAdvisorSearchCriteria;
        
        return $this;
    }
}
