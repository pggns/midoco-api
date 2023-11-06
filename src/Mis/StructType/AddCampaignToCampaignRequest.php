<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddCampaignToCampaignRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AddCampaignToCampaignRequest extends AbstractStructBase
{
    /**
     * The sourceCampaignId
     * @var int|null
     */
    protected ?int $sourceCampaignId = null;
    /**
     * The sourceOrgUnit
     * @var string|null
     */
    protected ?string $sourceOrgUnit = null;
    /**
     * The destinationCampaignId
     * @var int|null
     */
    protected ?int $destinationCampaignId = null;
    /**
     * The destinationOrgUnit
     * @var string|null
     */
    protected ?string $destinationOrgUnit = null;
    /**
     * Constructor method for AddCampaignToCampaignRequest
     * @uses AddCampaignToCampaignRequest::setSourceCampaignId()
     * @uses AddCampaignToCampaignRequest::setSourceOrgUnit()
     * @uses AddCampaignToCampaignRequest::setDestinationCampaignId()
     * @uses AddCampaignToCampaignRequest::setDestinationOrgUnit()
     * @param int $sourceCampaignId
     * @param string $sourceOrgUnit
     * @param int $destinationCampaignId
     * @param string $destinationOrgUnit
     */
    public function __construct(?int $sourceCampaignId = null, ?string $sourceOrgUnit = null, ?int $destinationCampaignId = null, ?string $destinationOrgUnit = null)
    {
        $this
            ->setSourceCampaignId($sourceCampaignId)
            ->setSourceOrgUnit($sourceOrgUnit)
            ->setDestinationCampaignId($destinationCampaignId)
            ->setDestinationOrgUnit($destinationOrgUnit);
    }
    /**
     * Get sourceCampaignId value
     * @return int|null
     */
    public function getSourceCampaignId(): ?int
    {
        return $this->sourceCampaignId;
    }
    /**
     * Set sourceCampaignId value
     * @param int $sourceCampaignId
     * @return \Pggns\MidocoApi\Mis\StructType\AddCampaignToCampaignRequest
     */
    public function setSourceCampaignId(?int $sourceCampaignId = null): self
    {
        // validation for constraint: int
        if (!is_null($sourceCampaignId) && !(is_int($sourceCampaignId) || ctype_digit($sourceCampaignId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sourceCampaignId, true), gettype($sourceCampaignId)), __LINE__);
        }
        $this->sourceCampaignId = $sourceCampaignId;
        
        return $this;
    }
    /**
     * Get sourceOrgUnit value
     * @return string|null
     */
    public function getSourceOrgUnit(): ?string
    {
        return $this->sourceOrgUnit;
    }
    /**
     * Set sourceOrgUnit value
     * @param string $sourceOrgUnit
     * @return \Pggns\MidocoApi\Mis\StructType\AddCampaignToCampaignRequest
     */
    public function setSourceOrgUnit(?string $sourceOrgUnit = null): self
    {
        // validation for constraint: string
        if (!is_null($sourceOrgUnit) && !is_string($sourceOrgUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sourceOrgUnit, true), gettype($sourceOrgUnit)), __LINE__);
        }
        $this->sourceOrgUnit = $sourceOrgUnit;
        
        return $this;
    }
    /**
     * Get destinationCampaignId value
     * @return int|null
     */
    public function getDestinationCampaignId(): ?int
    {
        return $this->destinationCampaignId;
    }
    /**
     * Set destinationCampaignId value
     * @param int $destinationCampaignId
     * @return \Pggns\MidocoApi\Mis\StructType\AddCampaignToCampaignRequest
     */
    public function setDestinationCampaignId(?int $destinationCampaignId = null): self
    {
        // validation for constraint: int
        if (!is_null($destinationCampaignId) && !(is_int($destinationCampaignId) || ctype_digit($destinationCampaignId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($destinationCampaignId, true), gettype($destinationCampaignId)), __LINE__);
        }
        $this->destinationCampaignId = $destinationCampaignId;
        
        return $this;
    }
    /**
     * Get destinationOrgUnit value
     * @return string|null
     */
    public function getDestinationOrgUnit(): ?string
    {
        return $this->destinationOrgUnit;
    }
    /**
     * Set destinationOrgUnit value
     * @param string $destinationOrgUnit
     * @return \Pggns\MidocoApi\Mis\StructType\AddCampaignToCampaignRequest
     */
    public function setDestinationOrgUnit(?string $destinationOrgUnit = null): self
    {
        // validation for constraint: string
        if (!is_null($destinationOrgUnit) && !is_string($destinationOrgUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destinationOrgUnit, true), gettype($destinationOrgUnit)), __LINE__);
        }
        $this->destinationOrgUnit = $destinationOrgUnit;
        
        return $this;
    }
}
