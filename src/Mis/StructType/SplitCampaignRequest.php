<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SplitCampaignRequest StructType
 * @subpackage Structs
 */
class SplitCampaignRequest extends AbstractStructBase
{
    /**
     * The MidocoCrmCampaign
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmCampaign
     * @var \Pggns\MidocoApi\Mis\StructType\CrmCampaignDTO|null
     */
    protected ?\Pggns\MidocoApi\Mis\StructType\CrmCampaignDTO $MidocoCrmCampaign = null;
    /**
     * The action
     * @var string|null
     */
    protected ?string $action = null;
    /**
     * Constructor method for SplitCampaignRequest
     * @uses SplitCampaignRequest::setMidocoCrmCampaign()
     * @uses SplitCampaignRequest::setAction()
     * @param \Pggns\MidocoApi\Mis\StructType\CrmCampaignDTO $midocoCrmCampaign
     * @param string $action
     */
    public function __construct(?\Pggns\MidocoApi\Mis\StructType\CrmCampaignDTO $midocoCrmCampaign = null, ?string $action = null)
    {
        $this
            ->setMidocoCrmCampaign($midocoCrmCampaign)
            ->setAction($action);
    }
    /**
     * Get MidocoCrmCampaign value
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCampaignDTO|null
     */
    public function getMidocoCrmCampaign(): ?\Pggns\MidocoApi\Mis\StructType\CrmCampaignDTO
    {
        return $this->MidocoCrmCampaign;
    }
    /**
     * Set MidocoCrmCampaign value
     * @param \Pggns\MidocoApi\Mis\StructType\CrmCampaignDTO $midocoCrmCampaign
     * @return \Pggns\MidocoApi\Mis\StructType\SplitCampaignRequest
     */
    public function setMidocoCrmCampaign(?\Pggns\MidocoApi\Mis\StructType\CrmCampaignDTO $midocoCrmCampaign = null): self
    {
        $this->MidocoCrmCampaign = $midocoCrmCampaign;
        
        return $this;
    }
    /**
     * Get action value
     * @return string|null
     */
    public function getAction(): ?string
    {
        return $this->action;
    }
    /**
     * Set action value
     * @param string $action
     * @return \Pggns\MidocoApi\Mis\StructType\SplitCampaignRequest
     */
    public function setAction(?string $action = null): self
    {
        // validation for constraint: string
        if (!is_null($action) && !is_string($action)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($action, true), gettype($action)), __LINE__);
        }
        $this->action = $action;
        
        return $this;
    }
}
