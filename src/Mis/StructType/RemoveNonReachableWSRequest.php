<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RemoveNonReachableWSRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RemoveNonReachableWSRequest extends AbstractStructBase
{
    /**
     * The MidocoMisCampaignWS
     * Meta information extracted from the WSDL
     * - ref: MidocoMisCampaignWS
     * @var \Pggns\MidocoApi\Mis\StructType\MisCampaignWSType|null
     */
    protected ?\Pggns\MidocoApi\Mis\StructType\MisCampaignWSType $MidocoMisCampaignWS = null;
    /**
     * The action
     * @var string|null
     */
    protected ?string $action = null;
    /**
     * Constructor method for RemoveNonReachableWSRequest
     * @uses RemoveNonReachableWSRequest::setMidocoMisCampaignWS()
     * @uses RemoveNonReachableWSRequest::setAction()
     * @param \Pggns\MidocoApi\Mis\StructType\MisCampaignWSType $midocoMisCampaignWS
     * @param string $action
     */
    public function __construct(?\Pggns\MidocoApi\Mis\StructType\MisCampaignWSType $midocoMisCampaignWS = null, ?string $action = null)
    {
        $this
            ->setMidocoMisCampaignWS($midocoMisCampaignWS)
            ->setAction($action);
    }
    /**
     * Get MidocoMisCampaignWS value
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignWSType|null
     */
    public function getMidocoMisCampaignWS(): ?\Pggns\MidocoApi\Mis\StructType\MisCampaignWSType
    {
        return $this->MidocoMisCampaignWS;
    }
    /**
     * Set MidocoMisCampaignWS value
     * @param \Pggns\MidocoApi\Mis\StructType\MisCampaignWSType $midocoMisCampaignWS
     * @return \Pggns\MidocoApi\Mis\StructType\RemoveNonReachableWSRequest
     */
    public function setMidocoMisCampaignWS(?\Pggns\MidocoApi\Mis\StructType\MisCampaignWSType $midocoMisCampaignWS = null): self
    {
        $this->MidocoMisCampaignWS = $midocoMisCampaignWS;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\RemoveNonReachableWSRequest
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
