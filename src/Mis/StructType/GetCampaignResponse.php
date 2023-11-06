<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCampaignResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getCampaign --- gets the MisCustomerList corresponding to a crm campaign
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCampaignResponse extends AbstractStructBase
{
    /**
     * The MidocoMisCampaignResult
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMisCampaignResult
     * @var \Pggns\MidocoApi\Mis\StructType\MisCampaignResultDTO[]
     */
    protected ?array $MidocoMisCampaignResult = null;
    /**
     * The MidocoMisCustomerResult
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMisCustomerResult
     * @var \Pggns\MidocoApi\Mis\StructType\MisCustomerResultDTO[]
     */
    protected ?array $MidocoMisCustomerResult = null;
    /**
     * Constructor method for GetCampaignResponse
     * @uses GetCampaignResponse::setMidocoMisCampaignResult()
     * @uses GetCampaignResponse::setMidocoMisCustomerResult()
     * @param \Pggns\MidocoApi\Mis\StructType\MisCampaignResultDTO[] $midocoMisCampaignResult
     * @param \Pggns\MidocoApi\Mis\StructType\MisCustomerResultDTO[] $midocoMisCustomerResult
     */
    public function __construct(?array $midocoMisCampaignResult = null, ?array $midocoMisCustomerResult = null)
    {
        $this
            ->setMidocoMisCampaignResult($midocoMisCampaignResult)
            ->setMidocoMisCustomerResult($midocoMisCustomerResult);
    }
    /**
     * Get MidocoMisCampaignResult value
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignResultDTO[]
     */
    public function getMidocoMisCampaignResult(): ?array
    {
        return $this->MidocoMisCampaignResult;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoMisCampaignResult method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMisCampaignResult method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMisCampaignResultForArrayConstraintFromSetMidocoMisCampaignResult(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCampaignResponseMidocoMisCampaignResultItem) {
            // validation for constraint: itemType
            if (!$getCampaignResponseMidocoMisCampaignResultItem instanceof \Pggns\MidocoApi\Mis\StructType\MisCampaignResultDTO) {
                $invalidValues[] = is_object($getCampaignResponseMidocoMisCampaignResultItem) ? get_class($getCampaignResponseMidocoMisCampaignResultItem) : sprintf('%s(%s)', gettype($getCampaignResponseMidocoMisCampaignResultItem), var_export($getCampaignResponseMidocoMisCampaignResultItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMisCampaignResult property can only contain items of type \Pggns\MidocoApi\Mis\StructType\MisCampaignResultDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMisCampaignResult value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\MisCampaignResultDTO[] $midocoMisCampaignResult
     * @return \Pggns\MidocoApi\Mis\StructType\GetCampaignResponse
     */
    public function setMidocoMisCampaignResult(?array $midocoMisCampaignResult = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMisCampaignResultArrayErrorMessage = self::validateMidocoMisCampaignResultForArrayConstraintFromSetMidocoMisCampaignResult($midocoMisCampaignResult))) {
            throw new InvalidArgumentException($midocoMisCampaignResultArrayErrorMessage, __LINE__);
        }
        $this->MidocoMisCampaignResult = $midocoMisCampaignResult;
        
        return $this;
    }
    /**
     * Add item to MidocoMisCampaignResult value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\MisCampaignResultDTO $item
     * @return \Pggns\MidocoApi\Mis\StructType\GetCampaignResponse
     */
    public function addToMidocoMisCampaignResult(\Pggns\MidocoApi\Mis\StructType\MisCampaignResultDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Mis\StructType\MisCampaignResultDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoMisCampaignResult property can only contain items of type \Pggns\MidocoApi\Mis\StructType\MisCampaignResultDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMisCampaignResult[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoMisCustomerResult value
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerResultDTO[]
     */
    public function getMidocoMisCustomerResult(): ?array
    {
        return $this->MidocoMisCustomerResult;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoMisCustomerResult method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMisCustomerResult method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMisCustomerResultForArrayConstraintFromSetMidocoMisCustomerResult(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCampaignResponseMidocoMisCustomerResultItem) {
            // validation for constraint: itemType
            if (!$getCampaignResponseMidocoMisCustomerResultItem instanceof \Pggns\MidocoApi\Mis\StructType\MisCustomerResultDTO) {
                $invalidValues[] = is_object($getCampaignResponseMidocoMisCustomerResultItem) ? get_class($getCampaignResponseMidocoMisCustomerResultItem) : sprintf('%s(%s)', gettype($getCampaignResponseMidocoMisCustomerResultItem), var_export($getCampaignResponseMidocoMisCustomerResultItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMisCustomerResult property can only contain items of type \Pggns\MidocoApi\Mis\StructType\MisCustomerResultDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMisCustomerResult value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\MisCustomerResultDTO[] $midocoMisCustomerResult
     * @return \Pggns\MidocoApi\Mis\StructType\GetCampaignResponse
     */
    public function setMidocoMisCustomerResult(?array $midocoMisCustomerResult = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMisCustomerResultArrayErrorMessage = self::validateMidocoMisCustomerResultForArrayConstraintFromSetMidocoMisCustomerResult($midocoMisCustomerResult))) {
            throw new InvalidArgumentException($midocoMisCustomerResultArrayErrorMessage, __LINE__);
        }
        $this->MidocoMisCustomerResult = $midocoMisCustomerResult;
        
        return $this;
    }
    /**
     * Add item to MidocoMisCustomerResult value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\MisCustomerResultDTO $item
     * @return \Pggns\MidocoApi\Mis\StructType\GetCampaignResponse
     */
    public function addToMidocoMisCustomerResult(\Pggns\MidocoApi\Mis\StructType\MisCustomerResultDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Mis\StructType\MisCustomerResultDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoMisCustomerResult property can only contain items of type \Pggns\MidocoApi\Mis\StructType\MisCustomerResultDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMisCustomerResult[] = $item;
        
        return $this;
    }
}
