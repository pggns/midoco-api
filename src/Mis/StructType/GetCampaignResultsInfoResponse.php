<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCampaignResultsInfoResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCampaignResultsInfoResponse extends AbstractStructBase
{
    /**
     * The CampaignResultsInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: CampaignResultsInfo
     * @var \Pggns\MidocoApi\Mis\StructType\CampaignResultsInfo[]
     */
    protected ?array $CampaignResultsInfo = null;
    /**
     * Constructor method for GetCampaignResultsInfoResponse
     * @uses GetCampaignResultsInfoResponse::setCampaignResultsInfo()
     * @param \Pggns\MidocoApi\Mis\StructType\CampaignResultsInfo[] $campaignResultsInfo
     */
    public function __construct(?array $campaignResultsInfo = null)
    {
        $this
            ->setCampaignResultsInfo($campaignResultsInfo);
    }
    /**
     * Get CampaignResultsInfo value
     * @return \Pggns\MidocoApi\Mis\StructType\CampaignResultsInfo[]
     */
    public function getCampaignResultsInfo(): ?array
    {
        return $this->CampaignResultsInfo;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCampaignResultsInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCampaignResultsInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCampaignResultsInfoForArrayConstraintFromSetCampaignResultsInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCampaignResultsInfoResponseCampaignResultsInfoItem) {
            // validation for constraint: itemType
            if (!$getCampaignResultsInfoResponseCampaignResultsInfoItem instanceof \Pggns\MidocoApi\Mis\StructType\CampaignResultsInfo) {
                $invalidValues[] = is_object($getCampaignResultsInfoResponseCampaignResultsInfoItem) ? get_class($getCampaignResultsInfoResponseCampaignResultsInfoItem) : sprintf('%s(%s)', gettype($getCampaignResultsInfoResponseCampaignResultsInfoItem), var_export($getCampaignResultsInfoResponseCampaignResultsInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CampaignResultsInfo property can only contain items of type \Pggns\MidocoApi\Mis\StructType\CampaignResultsInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CampaignResultsInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\CampaignResultsInfo[] $campaignResultsInfo
     * @return \Pggns\MidocoApi\Mis\StructType\GetCampaignResultsInfoResponse
     */
    public function setCampaignResultsInfo(?array $campaignResultsInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($campaignResultsInfoArrayErrorMessage = self::validateCampaignResultsInfoForArrayConstraintFromSetCampaignResultsInfo($campaignResultsInfo))) {
            throw new InvalidArgumentException($campaignResultsInfoArrayErrorMessage, __LINE__);
        }
        $this->CampaignResultsInfo = $campaignResultsInfo;
        
        return $this;
    }
    /**
     * Add item to CampaignResultsInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\CampaignResultsInfo $item
     * @return \Pggns\MidocoApi\Mis\StructType\GetCampaignResultsInfoResponse
     */
    public function addToCampaignResultsInfo(\Pggns\MidocoApi\Mis\StructType\CampaignResultsInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Mis\StructType\CampaignResultsInfo) {
            throw new InvalidArgumentException(sprintf('The CampaignResultsInfo property can only contain items of type \Pggns\MidocoApi\Mis\StructType\CampaignResultsInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->CampaignResultsInfo[] = $item;
        
        return $this;
    }
}
