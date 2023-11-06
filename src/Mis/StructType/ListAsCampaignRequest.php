<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListAsCampaignRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ListAsCampaignRequest extends AbstractStructBase
{
    /**
     * The queryType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $queryType = null;
    /**
     * The campaignData
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $campaignData = null;
    /**
     * The campaignDescription
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $campaignDescription = null;
    /**
     * Constructor method for ListAsCampaignRequest
     * @uses ListAsCampaignRequest::setQueryType()
     * @uses ListAsCampaignRequest::setCampaignData()
     * @uses ListAsCampaignRequest::setCampaignDescription()
     * @param string $queryType
     * @param int[] $campaignData
     * @param string $campaignDescription
     */
    public function __construct(?string $queryType = null, ?array $campaignData = null, ?string $campaignDescription = null)
    {
        $this
            ->setQueryType($queryType)
            ->setCampaignData($campaignData)
            ->setCampaignDescription($campaignDescription);
    }
    /**
     * Get queryType value
     * @return string|null
     */
    public function getQueryType(): ?string
    {
        return $this->queryType;
    }
    /**
     * Set queryType value
     * @param string $queryType
     * @return \Pggns\MidocoApi\Mis\StructType\ListAsCampaignRequest
     */
    public function setQueryType(?string $queryType = null): self
    {
        // validation for constraint: string
        if (!is_null($queryType) && !is_string($queryType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($queryType, true), gettype($queryType)), __LINE__);
        }
        $this->queryType = $queryType;
        
        return $this;
    }
    /**
     * Get campaignData value
     * @return int[]
     */
    public function getCampaignData(): ?array
    {
        return $this->campaignData;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCampaignData method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCampaignData method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCampaignDataForArrayConstraintFromSetCampaignData(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $listAsCampaignRequestCampaignDataItem) {
            // validation for constraint: itemType
            if (!(is_int($listAsCampaignRequestCampaignDataItem) || ctype_digit($listAsCampaignRequestCampaignDataItem))) {
                $invalidValues[] = is_object($listAsCampaignRequestCampaignDataItem) ? get_class($listAsCampaignRequestCampaignDataItem) : sprintf('%s(%s)', gettype($listAsCampaignRequestCampaignDataItem), var_export($listAsCampaignRequestCampaignDataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The campaignData property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set campaignData value
     * @throws InvalidArgumentException
     * @param int[] $campaignData
     * @return \Pggns\MidocoApi\Mis\StructType\ListAsCampaignRequest
     */
    public function setCampaignData(?array $campaignData = null): self
    {
        // validation for constraint: array
        if ('' !== ($campaignDataArrayErrorMessage = self::validateCampaignDataForArrayConstraintFromSetCampaignData($campaignData))) {
            throw new InvalidArgumentException($campaignDataArrayErrorMessage, __LINE__);
        }
        $this->campaignData = $campaignData;
        
        return $this;
    }
    /**
     * Add item to campaignData value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Mis\StructType\ListAsCampaignRequest
     */
    public function addToCampaignData(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The campaignData property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->campaignData[] = $item;
        
        return $this;
    }
    /**
     * Get campaignDescription value
     * @return string|null
     */
    public function getCampaignDescription(): ?string
    {
        return $this->campaignDescription;
    }
    /**
     * Set campaignDescription value
     * @param string $campaignDescription
     * @return \Pggns\MidocoApi\Mis\StructType\ListAsCampaignRequest
     */
    public function setCampaignDescription(?string $campaignDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($campaignDescription) && !is_string($campaignDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($campaignDescription, true), gettype($campaignDescription)), __LINE__);
        }
        $this->campaignDescription = $campaignDescription;
        
        return $this;
    }
}
