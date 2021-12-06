<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCampaignPrevPageResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getCampaignPrevPage --- gets the MisCustomerList corresponding to a crm campaign and to a given page number
 * @subpackage Structs
 */
class GetCampaignPrevPageResponse extends AbstractStructBase
{
    /**
     * The MidocoMisCampaignResult
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMisCampaignResult
     * @var \Pggns\MidocoApi\Api\Mis\StructType\MisCampaignResultDTO[]
     */
    protected ?array $MidocoMisCampaignResult = null;
    /**
     * The MidocoMisCustomerResult
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMisCustomerResult
     * @var \Pggns\MidocoApi\Api\Mis\StructType\MisCustomerResultDTO[]
     */
    protected ?array $MidocoMisCustomerResult = null;
    /**
     * The MidocoMisCampaign
     * Meta information extracted from the WSDL
     * - ref: MidocoMisCampaign
     * @var \Pggns\MidocoApi\Api\Mis\StructType\MidocoMisCampaign|null
     */
    protected ?\Pggns\MidocoApi\Api\Mis\StructType\MidocoMisCampaign $MidocoMisCampaign = null;
    /**
     * Constructor method for GetCampaignPrevPageResponse
     * @uses GetCampaignPrevPageResponse::setMidocoMisCampaignResult()
     * @uses GetCampaignPrevPageResponse::setMidocoMisCustomerResult()
     * @uses GetCampaignPrevPageResponse::setMidocoMisCampaign()
     * @param \Pggns\MidocoApi\Api\Mis\StructType\MisCampaignResultDTO[] $midocoMisCampaignResult
     * @param \Pggns\MidocoApi\Api\Mis\StructType\MisCustomerResultDTO[] $midocoMisCustomerResult
     * @param \Pggns\MidocoApi\Api\Mis\StructType\MidocoMisCampaign $midocoMisCampaign
     */
    public function __construct(?array $midocoMisCampaignResult = null, ?array $midocoMisCustomerResult = null, ?\Pggns\MidocoApi\Api\Mis\StructType\MidocoMisCampaign $midocoMisCampaign = null)
    {
        $this
            ->setMidocoMisCampaignResult($midocoMisCampaignResult)
            ->setMidocoMisCustomerResult($midocoMisCustomerResult)
            ->setMidocoMisCampaign($midocoMisCampaign);
    }
    /**
     * Get MidocoMisCampaignResult value
     * @return \Pggns\MidocoApi\Api\Mis\StructType\MisCampaignResultDTO[]
     */
    public function getMidocoMisCampaignResult(): ?array
    {
        return $this->MidocoMisCampaignResult;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoMisCampaignResult method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMisCampaignResult method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMisCampaignResultForArrayConstraintsFromSetMidocoMisCampaignResult(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCampaignPrevPageResponseMidocoMisCampaignResultItem) {
            // validation for constraint: itemType
            if (!$getCampaignPrevPageResponseMidocoMisCampaignResultItem instanceof \Pggns\MidocoApi\Api\Mis\StructType\MisCampaignResultDTO) {
                $invalidValues[] = is_object($getCampaignPrevPageResponseMidocoMisCampaignResultItem) ? get_class($getCampaignPrevPageResponseMidocoMisCampaignResultItem) : sprintf('%s(%s)', gettype($getCampaignPrevPageResponseMidocoMisCampaignResultItem), var_export($getCampaignPrevPageResponseMidocoMisCampaignResultItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMisCampaignResult property can only contain items of type \Pggns\MidocoApi\Api\Mis\StructType\MisCampaignResultDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMisCampaignResult value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Mis\StructType\MisCampaignResultDTO[] $midocoMisCampaignResult
     * @return \Pggns\MidocoApi\Api\Mis\StructType\GetCampaignPrevPageResponse
     */
    public function setMidocoMisCampaignResult(?array $midocoMisCampaignResult = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMisCampaignResultArrayErrorMessage = self::validateMidocoMisCampaignResultForArrayConstraintsFromSetMidocoMisCampaignResult($midocoMisCampaignResult))) {
            throw new InvalidArgumentException($midocoMisCampaignResultArrayErrorMessage, __LINE__);
        }
        $this->MidocoMisCampaignResult = $midocoMisCampaignResult;
        
        return $this;
    }
    /**
     * Add item to MidocoMisCampaignResult value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Mis\StructType\MisCampaignResultDTO $item
     * @return \Pggns\MidocoApi\Api\Mis\StructType\GetCampaignPrevPageResponse
     */
    public function addToMidocoMisCampaignResult(\Pggns\MidocoApi\Api\Mis\StructType\MisCampaignResultDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Mis\StructType\MisCampaignResultDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoMisCampaignResult property can only contain items of type \Pggns\MidocoApi\Api\Mis\StructType\MisCampaignResultDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMisCampaignResult[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoMisCustomerResult value
     * @return \Pggns\MidocoApi\Api\Mis\StructType\MisCustomerResultDTO[]
     */
    public function getMidocoMisCustomerResult(): ?array
    {
        return $this->MidocoMisCustomerResult;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoMisCustomerResult method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMisCustomerResult method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMisCustomerResultForArrayConstraintsFromSetMidocoMisCustomerResult(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCampaignPrevPageResponseMidocoMisCustomerResultItem) {
            // validation for constraint: itemType
            if (!$getCampaignPrevPageResponseMidocoMisCustomerResultItem instanceof \Pggns\MidocoApi\Api\Mis\StructType\MisCustomerResultDTO) {
                $invalidValues[] = is_object($getCampaignPrevPageResponseMidocoMisCustomerResultItem) ? get_class($getCampaignPrevPageResponseMidocoMisCustomerResultItem) : sprintf('%s(%s)', gettype($getCampaignPrevPageResponseMidocoMisCustomerResultItem), var_export($getCampaignPrevPageResponseMidocoMisCustomerResultItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMisCustomerResult property can only contain items of type \Pggns\MidocoApi\Api\Mis\StructType\MisCustomerResultDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMisCustomerResult value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Mis\StructType\MisCustomerResultDTO[] $midocoMisCustomerResult
     * @return \Pggns\MidocoApi\Api\Mis\StructType\GetCampaignPrevPageResponse
     */
    public function setMidocoMisCustomerResult(?array $midocoMisCustomerResult = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMisCustomerResultArrayErrorMessage = self::validateMidocoMisCustomerResultForArrayConstraintsFromSetMidocoMisCustomerResult($midocoMisCustomerResult))) {
            throw new InvalidArgumentException($midocoMisCustomerResultArrayErrorMessage, __LINE__);
        }
        $this->MidocoMisCustomerResult = $midocoMisCustomerResult;
        
        return $this;
    }
    /**
     * Add item to MidocoMisCustomerResult value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Mis\StructType\MisCustomerResultDTO $item
     * @return \Pggns\MidocoApi\Api\Mis\StructType\GetCampaignPrevPageResponse
     */
    public function addToMidocoMisCustomerResult(\Pggns\MidocoApi\Api\Mis\StructType\MisCustomerResultDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Mis\StructType\MisCustomerResultDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoMisCustomerResult property can only contain items of type \Pggns\MidocoApi\Api\Mis\StructType\MisCustomerResultDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMisCustomerResult[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoMisCampaign value
     * @return \Pggns\MidocoApi\Api\Mis\StructType\MidocoMisCampaign|null
     */
    public function getMidocoMisCampaign(): ?\Pggns\MidocoApi\Api\Mis\StructType\MidocoMisCampaign
    {
        return $this->MidocoMisCampaign;
    }
    /**
     * Set MidocoMisCampaign value
     * @param \Pggns\MidocoApi\Api\Mis\StructType\MidocoMisCampaign $midocoMisCampaign
     * @return \Pggns\MidocoApi\Api\Mis\StructType\GetCampaignPrevPageResponse
     */
    public function setMidocoMisCampaign(?\Pggns\MidocoApi\Api\Mis\StructType\MidocoMisCampaign $midocoMisCampaign = null): self
    {
        $this->MidocoMisCampaign = $midocoMisCampaign;
        
        return $this;
    }
}
