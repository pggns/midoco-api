<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTypeValuesAndDescriptionsResponse StructType
 * @subpackage Structs
 */
class GetTypeValuesAndDescriptionsResponse extends AbstractStructBase
{
    /**
     * The MidocoCriteriaType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCriteriaType
     * @var \Pggns\MidocoApi\Api\Crm\StructType\MidocoCriteriaType[]
     */
    protected ?array $MidocoCriteriaType = null;
    /**
     * The MidocoCriteriaDescriptionCategory
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCriteriaDescriptionCategory
     * @var \Pggns\MidocoApi\Api\Crm\StructType\MidocoCriteriaDescriptionCategory[]
     */
    protected ?array $MidocoCriteriaDescriptionCategory = null;
    /**
     * The GetTypeValuesAndDescriptionsDTO
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: GetTypeValuesAndDescriptionsDTO
     * @var \Pggns\MidocoApi\Api\Crm\StructType\GetTypeValuesAndDescriptionsDTO[]
     */
    protected ?array $GetTypeValuesAndDescriptionsDTO = null;
    /**
     * Constructor method for GetTypeValuesAndDescriptionsResponse
     * @uses GetTypeValuesAndDescriptionsResponse::setMidocoCriteriaType()
     * @uses GetTypeValuesAndDescriptionsResponse::setMidocoCriteriaDescriptionCategory()
     * @uses GetTypeValuesAndDescriptionsResponse::setGetTypeValuesAndDescriptionsDTO()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoCriteriaType[] $midocoCriteriaType
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoCriteriaDescriptionCategory[] $midocoCriteriaDescriptionCategory
     * @param \Pggns\MidocoApi\Api\Crm\StructType\GetTypeValuesAndDescriptionsDTO[] $getTypeValuesAndDescriptionsDTO
     */
    public function __construct(?array $midocoCriteriaType = null, ?array $midocoCriteriaDescriptionCategory = null, ?array $getTypeValuesAndDescriptionsDTO = null)
    {
        $this
            ->setMidocoCriteriaType($midocoCriteriaType)
            ->setMidocoCriteriaDescriptionCategory($midocoCriteriaDescriptionCategory)
            ->setGetTypeValuesAndDescriptionsDTO($getTypeValuesAndDescriptionsDTO);
    }
    /**
     * Get MidocoCriteriaType value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\MidocoCriteriaType[]
     */
    public function getMidocoCriteriaType(): ?array
    {
        return $this->MidocoCriteriaType;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCriteriaType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCriteriaType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCriteriaTypeForArrayConstraintsFromSetMidocoCriteriaType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getTypeValuesAndDescriptionsResponseMidocoCriteriaTypeItem) {
            // validation for constraint: itemType
            if (!$getTypeValuesAndDescriptionsResponseMidocoCriteriaTypeItem instanceof \Pggns\MidocoApi\Api\Crm\StructType\MidocoCriteriaType) {
                $invalidValues[] = is_object($getTypeValuesAndDescriptionsResponseMidocoCriteriaTypeItem) ? get_class($getTypeValuesAndDescriptionsResponseMidocoCriteriaTypeItem) : sprintf('%s(%s)', gettype($getTypeValuesAndDescriptionsResponseMidocoCriteriaTypeItem), var_export($getTypeValuesAndDescriptionsResponseMidocoCriteriaTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCriteriaType property can only contain items of type \Pggns\MidocoApi\Api\Crm\StructType\MidocoCriteriaType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCriteriaType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoCriteriaType[] $midocoCriteriaType
     * @return \Pggns\MidocoApi\Api\Crm\StructType\GetTypeValuesAndDescriptionsResponse
     */
    public function setMidocoCriteriaType(?array $midocoCriteriaType = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCriteriaTypeArrayErrorMessage = self::validateMidocoCriteriaTypeForArrayConstraintsFromSetMidocoCriteriaType($midocoCriteriaType))) {
            throw new InvalidArgumentException($midocoCriteriaTypeArrayErrorMessage, __LINE__);
        }
        $this->MidocoCriteriaType = $midocoCriteriaType;
        
        return $this;
    }
    /**
     * Add item to MidocoCriteriaType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoCriteriaType $item
     * @return \Pggns\MidocoApi\Api\Crm\StructType\GetTypeValuesAndDescriptionsResponse
     */
    public function addToMidocoCriteriaType(\Pggns\MidocoApi\Api\Crm\StructType\MidocoCriteriaType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Crm\StructType\MidocoCriteriaType) {
            throw new InvalidArgumentException(sprintf('The MidocoCriteriaType property can only contain items of type \Pggns\MidocoApi\Api\Crm\StructType\MidocoCriteriaType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCriteriaType[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoCriteriaDescriptionCategory value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\MidocoCriteriaDescriptionCategory[]
     */
    public function getMidocoCriteriaDescriptionCategory(): ?array
    {
        return $this->MidocoCriteriaDescriptionCategory;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCriteriaDescriptionCategory method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCriteriaDescriptionCategory method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCriteriaDescriptionCategoryForArrayConstraintsFromSetMidocoCriteriaDescriptionCategory(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getTypeValuesAndDescriptionsResponseMidocoCriteriaDescriptionCategoryItem) {
            // validation for constraint: itemType
            if (!$getTypeValuesAndDescriptionsResponseMidocoCriteriaDescriptionCategoryItem instanceof \Pggns\MidocoApi\Api\Crm\StructType\MidocoCriteriaDescriptionCategory) {
                $invalidValues[] = is_object($getTypeValuesAndDescriptionsResponseMidocoCriteriaDescriptionCategoryItem) ? get_class($getTypeValuesAndDescriptionsResponseMidocoCriteriaDescriptionCategoryItem) : sprintf('%s(%s)', gettype($getTypeValuesAndDescriptionsResponseMidocoCriteriaDescriptionCategoryItem), var_export($getTypeValuesAndDescriptionsResponseMidocoCriteriaDescriptionCategoryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCriteriaDescriptionCategory property can only contain items of type \Pggns\MidocoApi\Api\Crm\StructType\MidocoCriteriaDescriptionCategory, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCriteriaDescriptionCategory value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoCriteriaDescriptionCategory[] $midocoCriteriaDescriptionCategory
     * @return \Pggns\MidocoApi\Api\Crm\StructType\GetTypeValuesAndDescriptionsResponse
     */
    public function setMidocoCriteriaDescriptionCategory(?array $midocoCriteriaDescriptionCategory = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCriteriaDescriptionCategoryArrayErrorMessage = self::validateMidocoCriteriaDescriptionCategoryForArrayConstraintsFromSetMidocoCriteriaDescriptionCategory($midocoCriteriaDescriptionCategory))) {
            throw new InvalidArgumentException($midocoCriteriaDescriptionCategoryArrayErrorMessage, __LINE__);
        }
        $this->MidocoCriteriaDescriptionCategory = $midocoCriteriaDescriptionCategory;
        
        return $this;
    }
    /**
     * Add item to MidocoCriteriaDescriptionCategory value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoCriteriaDescriptionCategory $item
     * @return \Pggns\MidocoApi\Api\Crm\StructType\GetTypeValuesAndDescriptionsResponse
     */
    public function addToMidocoCriteriaDescriptionCategory(\Pggns\MidocoApi\Api\Crm\StructType\MidocoCriteriaDescriptionCategory $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Crm\StructType\MidocoCriteriaDescriptionCategory) {
            throw new InvalidArgumentException(sprintf('The MidocoCriteriaDescriptionCategory property can only contain items of type \Pggns\MidocoApi\Api\Crm\StructType\MidocoCriteriaDescriptionCategory, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCriteriaDescriptionCategory[] = $item;
        
        return $this;
    }
    /**
     * Get GetTypeValuesAndDescriptionsDTO value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\GetTypeValuesAndDescriptionsDTO[]
     */
    public function getGetTypeValuesAndDescriptionsDTO(): ?array
    {
        return $this->GetTypeValuesAndDescriptionsDTO;
    }
    /**
     * This method is responsible for validating the values passed to the setGetTypeValuesAndDescriptionsDTO method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetTypeValuesAndDescriptionsDTO method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetTypeValuesAndDescriptionsDTOForArrayConstraintsFromSetGetTypeValuesAndDescriptionsDTO(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getTypeValuesAndDescriptionsResponseGetTypeValuesAndDescriptionsDTOItem) {
            // validation for constraint: itemType
            if (!$getTypeValuesAndDescriptionsResponseGetTypeValuesAndDescriptionsDTOItem instanceof \Pggns\MidocoApi\Api\Crm\StructType\GetTypeValuesAndDescriptionsDTO) {
                $invalidValues[] = is_object($getTypeValuesAndDescriptionsResponseGetTypeValuesAndDescriptionsDTOItem) ? get_class($getTypeValuesAndDescriptionsResponseGetTypeValuesAndDescriptionsDTOItem) : sprintf('%s(%s)', gettype($getTypeValuesAndDescriptionsResponseGetTypeValuesAndDescriptionsDTOItem), var_export($getTypeValuesAndDescriptionsResponseGetTypeValuesAndDescriptionsDTOItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The GetTypeValuesAndDescriptionsDTO property can only contain items of type \Pggns\MidocoApi\Api\Crm\StructType\GetTypeValuesAndDescriptionsDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set GetTypeValuesAndDescriptionsDTO value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Crm\StructType\GetTypeValuesAndDescriptionsDTO[] $getTypeValuesAndDescriptionsDTO
     * @return \Pggns\MidocoApi\Api\Crm\StructType\GetTypeValuesAndDescriptionsResponse
     */
    public function setGetTypeValuesAndDescriptionsDTO(?array $getTypeValuesAndDescriptionsDTO = null): self
    {
        // validation for constraint: array
        if ('' !== ($getTypeValuesAndDescriptionsDTOArrayErrorMessage = self::validateGetTypeValuesAndDescriptionsDTOForArrayConstraintsFromSetGetTypeValuesAndDescriptionsDTO($getTypeValuesAndDescriptionsDTO))) {
            throw new InvalidArgumentException($getTypeValuesAndDescriptionsDTOArrayErrorMessage, __LINE__);
        }
        $this->GetTypeValuesAndDescriptionsDTO = $getTypeValuesAndDescriptionsDTO;
        
        return $this;
    }
    /**
     * Add item to GetTypeValuesAndDescriptionsDTO value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Crm\StructType\GetTypeValuesAndDescriptionsDTO $item
     * @return \Pggns\MidocoApi\Api\Crm\StructType\GetTypeValuesAndDescriptionsResponse
     */
    public function addToGetTypeValuesAndDescriptionsDTO(\Pggns\MidocoApi\Api\Crm\StructType\GetTypeValuesAndDescriptionsDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Crm\StructType\GetTypeValuesAndDescriptionsDTO) {
            throw new InvalidArgumentException(sprintf('The GetTypeValuesAndDescriptionsDTO property can only contain items of type \Pggns\MidocoApi\Api\Crm\StructType\GetTypeValuesAndDescriptionsDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->GetTypeValuesAndDescriptionsDTO[] = $item;
        
        return $this;
    }
}
