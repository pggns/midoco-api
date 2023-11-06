<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCampaignRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveCampaignRequest extends AbstractStructBase
{
    /**
     * The MidocoMisCampaign
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoMisCampaign
     * @var \Pggns\MidocoApi\Mis\StructType\MidocoMisCampaign|null
     */
    protected ?\Pggns\MidocoApi\Mis\StructType\MidocoMisCampaign $MidocoMisCampaign = null;
    /**
     * The orgUnit
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $orgUnit = null;
    /**
     * The estimatedNoOfResults
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $estimatedNoOfResults = null;
    /**
     * The estimatedOrgUnit
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $estimatedOrgUnit = null;
    /**
     * The CustomerReference
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: CustomerReference
     * @var \Pggns\MidocoApi\Mis\StructType\CustomerReference[]
     */
    protected ?array $CustomerReference = null;
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * Constructor method for SaveCampaignRequest
     * @uses SaveCampaignRequest::setMidocoMisCampaign()
     * @uses SaveCampaignRequest::setOrgUnit()
     * @uses SaveCampaignRequest::setEstimatedNoOfResults()
     * @uses SaveCampaignRequest::setEstimatedOrgUnit()
     * @uses SaveCampaignRequest::setCustomerReference()
     * @uses SaveCampaignRequest::setType()
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoMisCampaign $midocoMisCampaign
     * @param string[] $orgUnit
     * @param int[] $estimatedNoOfResults
     * @param string[] $estimatedOrgUnit
     * @param \Pggns\MidocoApi\Mis\StructType\CustomerReference[] $customerReference
     * @param string $type
     */
    public function __construct(?\Pggns\MidocoApi\Mis\StructType\MidocoMisCampaign $midocoMisCampaign = null, ?array $orgUnit = null, ?array $estimatedNoOfResults = null, ?array $estimatedOrgUnit = null, ?array $customerReference = null, ?string $type = null)
    {
        $this
            ->setMidocoMisCampaign($midocoMisCampaign)
            ->setOrgUnit($orgUnit)
            ->setEstimatedNoOfResults($estimatedNoOfResults)
            ->setEstimatedOrgUnit($estimatedOrgUnit)
            ->setCustomerReference($customerReference)
            ->setType($type);
    }
    /**
     * Get MidocoMisCampaign value
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoMisCampaign|null
     */
    public function getMidocoMisCampaign(): ?\Pggns\MidocoApi\Mis\StructType\MidocoMisCampaign
    {
        return $this->MidocoMisCampaign;
    }
    /**
     * Set MidocoMisCampaign value
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoMisCampaign $midocoMisCampaign
     * @return \Pggns\MidocoApi\Mis\StructType\SaveCampaignRequest
     */
    public function setMidocoMisCampaign(?\Pggns\MidocoApi\Mis\StructType\MidocoMisCampaign $midocoMisCampaign = null): self
    {
        $this->MidocoMisCampaign = $midocoMisCampaign;
        
        return $this;
    }
    /**
     * Get orgUnit value
     * @return string[]
     */
    public function getOrgUnit(): ?array
    {
        return $this->orgUnit;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setOrgUnit method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrgUnit method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOrgUnitForArrayConstraintFromSetOrgUnit(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $saveCampaignRequestOrgUnitItem) {
            // validation for constraint: itemType
            if (!is_string($saveCampaignRequestOrgUnitItem)) {
                $invalidValues[] = is_object($saveCampaignRequestOrgUnitItem) ? get_class($saveCampaignRequestOrgUnitItem) : sprintf('%s(%s)', gettype($saveCampaignRequestOrgUnitItem), var_export($saveCampaignRequestOrgUnitItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The orgUnit property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set orgUnit value
     * @throws InvalidArgumentException
     * @param string[] $orgUnit
     * @return \Pggns\MidocoApi\Mis\StructType\SaveCampaignRequest
     */
    public function setOrgUnit(?array $orgUnit = null): self
    {
        // validation for constraint: array
        if ('' !== ($orgUnitArrayErrorMessage = self::validateOrgUnitForArrayConstraintFromSetOrgUnit($orgUnit))) {
            throw new InvalidArgumentException($orgUnitArrayErrorMessage, __LINE__);
        }
        $this->orgUnit = $orgUnit;
        
        return $this;
    }
    /**
     * Add item to orgUnit value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Mis\StructType\SaveCampaignRequest
     */
    public function addToOrgUnit(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The orgUnit property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->orgUnit[] = $item;
        
        return $this;
    }
    /**
     * Get estimatedNoOfResults value
     * @return int[]
     */
    public function getEstimatedNoOfResults(): ?array
    {
        return $this->estimatedNoOfResults;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setEstimatedNoOfResults method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEstimatedNoOfResults method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEstimatedNoOfResultsForArrayConstraintFromSetEstimatedNoOfResults(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $saveCampaignRequestEstimatedNoOfResultsItem) {
            // validation for constraint: itemType
            if (!(is_int($saveCampaignRequestEstimatedNoOfResultsItem) || ctype_digit($saveCampaignRequestEstimatedNoOfResultsItem))) {
                $invalidValues[] = is_object($saveCampaignRequestEstimatedNoOfResultsItem) ? get_class($saveCampaignRequestEstimatedNoOfResultsItem) : sprintf('%s(%s)', gettype($saveCampaignRequestEstimatedNoOfResultsItem), var_export($saveCampaignRequestEstimatedNoOfResultsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The estimatedNoOfResults property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set estimatedNoOfResults value
     * @throws InvalidArgumentException
     * @param int[] $estimatedNoOfResults
     * @return \Pggns\MidocoApi\Mis\StructType\SaveCampaignRequest
     */
    public function setEstimatedNoOfResults(?array $estimatedNoOfResults = null): self
    {
        // validation for constraint: array
        if ('' !== ($estimatedNoOfResultsArrayErrorMessage = self::validateEstimatedNoOfResultsForArrayConstraintFromSetEstimatedNoOfResults($estimatedNoOfResults))) {
            throw new InvalidArgumentException($estimatedNoOfResultsArrayErrorMessage, __LINE__);
        }
        $this->estimatedNoOfResults = $estimatedNoOfResults;
        
        return $this;
    }
    /**
     * Add item to estimatedNoOfResults value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Mis\StructType\SaveCampaignRequest
     */
    public function addToEstimatedNoOfResults(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The estimatedNoOfResults property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->estimatedNoOfResults[] = $item;
        
        return $this;
    }
    /**
     * Get estimatedOrgUnit value
     * @return string[]
     */
    public function getEstimatedOrgUnit(): ?array
    {
        return $this->estimatedOrgUnit;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setEstimatedOrgUnit method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEstimatedOrgUnit method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEstimatedOrgUnitForArrayConstraintFromSetEstimatedOrgUnit(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $saveCampaignRequestEstimatedOrgUnitItem) {
            // validation for constraint: itemType
            if (!is_string($saveCampaignRequestEstimatedOrgUnitItem)) {
                $invalidValues[] = is_object($saveCampaignRequestEstimatedOrgUnitItem) ? get_class($saveCampaignRequestEstimatedOrgUnitItem) : sprintf('%s(%s)', gettype($saveCampaignRequestEstimatedOrgUnitItem), var_export($saveCampaignRequestEstimatedOrgUnitItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The estimatedOrgUnit property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set estimatedOrgUnit value
     * @throws InvalidArgumentException
     * @param string[] $estimatedOrgUnit
     * @return \Pggns\MidocoApi\Mis\StructType\SaveCampaignRequest
     */
    public function setEstimatedOrgUnit(?array $estimatedOrgUnit = null): self
    {
        // validation for constraint: array
        if ('' !== ($estimatedOrgUnitArrayErrorMessage = self::validateEstimatedOrgUnitForArrayConstraintFromSetEstimatedOrgUnit($estimatedOrgUnit))) {
            throw new InvalidArgumentException($estimatedOrgUnitArrayErrorMessage, __LINE__);
        }
        $this->estimatedOrgUnit = $estimatedOrgUnit;
        
        return $this;
    }
    /**
     * Add item to estimatedOrgUnit value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Mis\StructType\SaveCampaignRequest
     */
    public function addToEstimatedOrgUnit(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The estimatedOrgUnit property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->estimatedOrgUnit[] = $item;
        
        return $this;
    }
    /**
     * Get CustomerReference value
     * @return \Pggns\MidocoApi\Mis\StructType\CustomerReference[]
     */
    public function getCustomerReference(): ?array
    {
        return $this->CustomerReference;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCustomerReference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustomerReference method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCustomerReferenceForArrayConstraintFromSetCustomerReference(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $saveCampaignRequestCustomerReferenceItem) {
            // validation for constraint: itemType
            if (!$saveCampaignRequestCustomerReferenceItem instanceof \Pggns\MidocoApi\Mis\StructType\CustomerReference) {
                $invalidValues[] = is_object($saveCampaignRequestCustomerReferenceItem) ? get_class($saveCampaignRequestCustomerReferenceItem) : sprintf('%s(%s)', gettype($saveCampaignRequestCustomerReferenceItem), var_export($saveCampaignRequestCustomerReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CustomerReference property can only contain items of type \Pggns\MidocoApi\Mis\StructType\CustomerReference, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CustomerReference value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\CustomerReference[] $customerReference
     * @return \Pggns\MidocoApi\Mis\StructType\SaveCampaignRequest
     */
    public function setCustomerReference(?array $customerReference = null): self
    {
        // validation for constraint: array
        if ('' !== ($customerReferenceArrayErrorMessage = self::validateCustomerReferenceForArrayConstraintFromSetCustomerReference($customerReference))) {
            throw new InvalidArgumentException($customerReferenceArrayErrorMessage, __LINE__);
        }
        $this->CustomerReference = $customerReference;
        
        return $this;
    }
    /**
     * Add item to CustomerReference value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\CustomerReference $item
     * @return \Pggns\MidocoApi\Mis\StructType\SaveCampaignRequest
     */
    public function addToCustomerReference(\Pggns\MidocoApi\Mis\StructType\CustomerReference $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Mis\StructType\CustomerReference) {
            throw new InvalidArgumentException(sprintf('The CustomerReference property can only contain items of type \Pggns\MidocoApi\Mis\StructType\CustomerReference, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->CustomerReference[] = $item;
        
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Pggns\MidocoApi\Mis\StructType\SaveCampaignRequest
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
}
