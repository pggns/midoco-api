<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCampaignNextPageWSResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getCampaignNextPageWS --- gets the MisCustomerList corresponding to a crm campaign and to a given page number
 * @subpackage Structs
 */
class GetCampaignNextPageWSResponse extends AbstractStructBase
{
    /**
     * The MidocoMisCampaignResultWS
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMisCampaignResultWS
     * @var \Pggns\MidocoApi\Api\Mis\StructType\MisCampaignResultWSType[]
     */
    protected ?array $MidocoMisCampaignResultWS = null;
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
     * The MidocoMisCampaignWS
     * Meta information extracted from the WSDL
     * - ref: MidocoMisCampaignWS
     * @var \Pggns\MidocoApi\Api\Mis\StructType\MisCampaignWSType|null
     */
    protected ?\Pggns\MidocoApi\Api\Mis\StructType\MisCampaignWSType $MidocoMisCampaignWS = null;
    /**
     * Constructor method for GetCampaignNextPageWSResponse
     * @uses GetCampaignNextPageWSResponse::setMidocoMisCampaignResultWS()
     * @uses GetCampaignNextPageWSResponse::setMidocoMisCustomerResult()
     * @uses GetCampaignNextPageWSResponse::setMidocoMisCampaignWS()
     * @param \Pggns\MidocoApi\Api\Mis\StructType\MisCampaignResultWSType[] $midocoMisCampaignResultWS
     * @param \Pggns\MidocoApi\Api\Mis\StructType\MisCustomerResultDTO[] $midocoMisCustomerResult
     * @param \Pggns\MidocoApi\Api\Mis\StructType\MisCampaignWSType $midocoMisCampaignWS
     */
    public function __construct(?array $midocoMisCampaignResultWS = null, ?array $midocoMisCustomerResult = null, ?\Pggns\MidocoApi\Api\Mis\StructType\MisCampaignWSType $midocoMisCampaignWS = null)
    {
        $this
            ->setMidocoMisCampaignResultWS($midocoMisCampaignResultWS)
            ->setMidocoMisCustomerResult($midocoMisCustomerResult)
            ->setMidocoMisCampaignWS($midocoMisCampaignWS);
    }
    /**
     * Get MidocoMisCampaignResultWS value
     * @return \Pggns\MidocoApi\Api\Mis\StructType\MisCampaignResultWSType[]
     */
    public function getMidocoMisCampaignResultWS(): ?array
    {
        return $this->MidocoMisCampaignResultWS;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoMisCampaignResultWS method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMisCampaignResultWS method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMisCampaignResultWSForArrayConstraintsFromSetMidocoMisCampaignResultWS(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCampaignNextPageWSResponseMidocoMisCampaignResultWSItem) {
            // validation for constraint: itemType
            if (!$getCampaignNextPageWSResponseMidocoMisCampaignResultWSItem instanceof \Pggns\MidocoApi\Api\Mis\StructType\MisCampaignResultWSType) {
                $invalidValues[] = is_object($getCampaignNextPageWSResponseMidocoMisCampaignResultWSItem) ? get_class($getCampaignNextPageWSResponseMidocoMisCampaignResultWSItem) : sprintf('%s(%s)', gettype($getCampaignNextPageWSResponseMidocoMisCampaignResultWSItem), var_export($getCampaignNextPageWSResponseMidocoMisCampaignResultWSItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMisCampaignResultWS property can only contain items of type \Pggns\MidocoApi\Api\Mis\StructType\MisCampaignResultWSType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMisCampaignResultWS value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Mis\StructType\MisCampaignResultWSType[] $midocoMisCampaignResultWS
     * @return \Pggns\MidocoApi\Api\Mis\StructType\GetCampaignNextPageWSResponse
     */
    public function setMidocoMisCampaignResultWS(?array $midocoMisCampaignResultWS = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMisCampaignResultWSArrayErrorMessage = self::validateMidocoMisCampaignResultWSForArrayConstraintsFromSetMidocoMisCampaignResultWS($midocoMisCampaignResultWS))) {
            throw new InvalidArgumentException($midocoMisCampaignResultWSArrayErrorMessage, __LINE__);
        }
        $this->MidocoMisCampaignResultWS = $midocoMisCampaignResultWS;
        
        return $this;
    }
    /**
     * Add item to MidocoMisCampaignResultWS value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Mis\StructType\MisCampaignResultWSType $item
     * @return \Pggns\MidocoApi\Api\Mis\StructType\GetCampaignNextPageWSResponse
     */
    public function addToMidocoMisCampaignResultWS(\Pggns\MidocoApi\Api\Mis\StructType\MisCampaignResultWSType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Mis\StructType\MisCampaignResultWSType) {
            throw new InvalidArgumentException(sprintf('The MidocoMisCampaignResultWS property can only contain items of type \Pggns\MidocoApi\Api\Mis\StructType\MisCampaignResultWSType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMisCampaignResultWS[] = $item;
        
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
        foreach ($values as $getCampaignNextPageWSResponseMidocoMisCustomerResultItem) {
            // validation for constraint: itemType
            if (!$getCampaignNextPageWSResponseMidocoMisCustomerResultItem instanceof \Pggns\MidocoApi\Api\Mis\StructType\MisCustomerResultDTO) {
                $invalidValues[] = is_object($getCampaignNextPageWSResponseMidocoMisCustomerResultItem) ? get_class($getCampaignNextPageWSResponseMidocoMisCustomerResultItem) : sprintf('%s(%s)', gettype($getCampaignNextPageWSResponseMidocoMisCustomerResultItem), var_export($getCampaignNextPageWSResponseMidocoMisCustomerResultItem, true));
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
     * @return \Pggns\MidocoApi\Api\Mis\StructType\GetCampaignNextPageWSResponse
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
     * @return \Pggns\MidocoApi\Api\Mis\StructType\GetCampaignNextPageWSResponse
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
     * Get MidocoMisCampaignWS value
     * @return \Pggns\MidocoApi\Api\Mis\StructType\MisCampaignWSType|null
     */
    public function getMidocoMisCampaignWS(): ?\Pggns\MidocoApi\Api\Mis\StructType\MisCampaignWSType
    {
        return $this->MidocoMisCampaignWS;
    }
    /**
     * Set MidocoMisCampaignWS value
     * @param \Pggns\MidocoApi\Api\Mis\StructType\MisCampaignWSType $midocoMisCampaignWS
     * @return \Pggns\MidocoApi\Api\Mis\StructType\GetCampaignNextPageWSResponse
     */
    public function setMidocoMisCampaignWS(?\Pggns\MidocoApi\Api\Mis\StructType\MisCampaignWSType $midocoMisCampaignWS = null): self
    {
        $this->MidocoMisCampaignWS = $midocoMisCampaignWS;
        
        return $this;
    }
}
