<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetExecutedCampaignsForTemplateRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetExecutedCampaignsForTemplateRequest extends AbstractStructBase
{
    /**
     * The orgUnits
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $orgUnits = null;
    /**
     * The campaignId
     * @var int|null
     */
    protected ?int $campaignId = null;
    /**
     * The campaignOrgUnit
     * @var string|null
     */
    protected ?string $campaignOrgUnit = null;
    /**
     * The participate
     * @var bool|null
     */
    protected ?bool $participate = null;
    /**
     * Constructor method for GetExecutedCampaignsForTemplateRequest
     * @uses GetExecutedCampaignsForTemplateRequest::setOrgUnits()
     * @uses GetExecutedCampaignsForTemplateRequest::setCampaignId()
     * @uses GetExecutedCampaignsForTemplateRequest::setCampaignOrgUnit()
     * @uses GetExecutedCampaignsForTemplateRequest::setParticipate()
     * @param string[] $orgUnits
     * @param int $campaignId
     * @param string $campaignOrgUnit
     * @param bool $participate
     */
    public function __construct(?array $orgUnits = null, ?int $campaignId = null, ?string $campaignOrgUnit = null, ?bool $participate = null)
    {
        $this
            ->setOrgUnits($orgUnits)
            ->setCampaignId($campaignId)
            ->setCampaignOrgUnit($campaignOrgUnit)
            ->setParticipate($participate);
    }
    /**
     * Get orgUnits value
     * @return string[]
     */
    public function getOrgUnits(): ?array
    {
        return $this->orgUnits;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setOrgUnits method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrgUnits method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOrgUnitsForArrayConstraintFromSetOrgUnits(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getExecutedCampaignsForTemplateRequestOrgUnitsItem) {
            // validation for constraint: itemType
            if (!is_string($getExecutedCampaignsForTemplateRequestOrgUnitsItem)) {
                $invalidValues[] = is_object($getExecutedCampaignsForTemplateRequestOrgUnitsItem) ? get_class($getExecutedCampaignsForTemplateRequestOrgUnitsItem) : sprintf('%s(%s)', gettype($getExecutedCampaignsForTemplateRequestOrgUnitsItem), var_export($getExecutedCampaignsForTemplateRequestOrgUnitsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The orgUnits property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set orgUnits value
     * @throws InvalidArgumentException
     * @param string[] $orgUnits
     * @return \Pggns\MidocoApi\Mis\StructType\GetExecutedCampaignsForTemplateRequest
     */
    public function setOrgUnits(?array $orgUnits = null): self
    {
        // validation for constraint: array
        if ('' !== ($orgUnitsArrayErrorMessage = self::validateOrgUnitsForArrayConstraintFromSetOrgUnits($orgUnits))) {
            throw new InvalidArgumentException($orgUnitsArrayErrorMessage, __LINE__);
        }
        $this->orgUnits = $orgUnits;
        
        return $this;
    }
    /**
     * Add item to orgUnits value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Mis\StructType\GetExecutedCampaignsForTemplateRequest
     */
    public function addToOrgUnits(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The orgUnits property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->orgUnits[] = $item;
        
        return $this;
    }
    /**
     * Get campaignId value
     * @return int|null
     */
    public function getCampaignId(): ?int
    {
        return $this->campaignId;
    }
    /**
     * Set campaignId value
     * @param int $campaignId
     * @return \Pggns\MidocoApi\Mis\StructType\GetExecutedCampaignsForTemplateRequest
     */
    public function setCampaignId(?int $campaignId = null): self
    {
        // validation for constraint: int
        if (!is_null($campaignId) && !(is_int($campaignId) || ctype_digit($campaignId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($campaignId, true), gettype($campaignId)), __LINE__);
        }
        $this->campaignId = $campaignId;
        
        return $this;
    }
    /**
     * Get campaignOrgUnit value
     * @return string|null
     */
    public function getCampaignOrgUnit(): ?string
    {
        return $this->campaignOrgUnit;
    }
    /**
     * Set campaignOrgUnit value
     * @param string $campaignOrgUnit
     * @return \Pggns\MidocoApi\Mis\StructType\GetExecutedCampaignsForTemplateRequest
     */
    public function setCampaignOrgUnit(?string $campaignOrgUnit = null): self
    {
        // validation for constraint: string
        if (!is_null($campaignOrgUnit) && !is_string($campaignOrgUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($campaignOrgUnit, true), gettype($campaignOrgUnit)), __LINE__);
        }
        $this->campaignOrgUnit = $campaignOrgUnit;
        
        return $this;
    }
    /**
     * Get participate value
     * @return bool|null
     */
    public function getParticipate(): ?bool
    {
        return $this->participate;
    }
    /**
     * Set participate value
     * @param bool $participate
     * @return \Pggns\MidocoApi\Mis\StructType\GetExecutedCampaignsForTemplateRequest
     */
    public function setParticipate(?bool $participate = null): self
    {
        // validation for constraint: boolean
        if (!is_null($participate) && !is_bool($participate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($participate, true), gettype($participate)), __LINE__);
        }
        $this->participate = $participate;
        
        return $this;
    }
}
