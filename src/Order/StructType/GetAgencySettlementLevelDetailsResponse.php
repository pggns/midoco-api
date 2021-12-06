<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAgencySettlementLevelDetailsResponse StructType
 * @subpackage Structs
 */
class GetAgencySettlementLevelDetailsResponse extends AbstractStructBase
{
    /**
     * The MidocoAgencySettlementLevelDetail
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAgencySettlementLevelDetail
     * @var \Pggns\MidocoApi\Api\Order\StructType\AgencyStlmntLevelDetailDTO[]
     */
    protected ?array $MidocoAgencySettlementLevelDetail = null;
    /**
     * Constructor method for GetAgencySettlementLevelDetailsResponse
     * @uses GetAgencySettlementLevelDetailsResponse::setMidocoAgencySettlementLevelDetail()
     * @param \Pggns\MidocoApi\Api\Order\StructType\AgencyStlmntLevelDetailDTO[] $midocoAgencySettlementLevelDetail
     */
    public function __construct(?array $midocoAgencySettlementLevelDetail = null)
    {
        $this
            ->setMidocoAgencySettlementLevelDetail($midocoAgencySettlementLevelDetail);
    }
    /**
     * Get MidocoAgencySettlementLevelDetail value
     * @return \Pggns\MidocoApi\Api\Order\StructType\AgencyStlmntLevelDetailDTO[]
     */
    public function getMidocoAgencySettlementLevelDetail(): ?array
    {
        return $this->MidocoAgencySettlementLevelDetail;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoAgencySettlementLevelDetail method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAgencySettlementLevelDetail method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAgencySettlementLevelDetailForArrayConstraintsFromSetMidocoAgencySettlementLevelDetail(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAgencySettlementLevelDetailsResponseMidocoAgencySettlementLevelDetailItem) {
            // validation for constraint: itemType
            if (!$getAgencySettlementLevelDetailsResponseMidocoAgencySettlementLevelDetailItem instanceof \Pggns\MidocoApi\Api\Order\StructType\AgencyStlmntLevelDetailDTO) {
                $invalidValues[] = is_object($getAgencySettlementLevelDetailsResponseMidocoAgencySettlementLevelDetailItem) ? get_class($getAgencySettlementLevelDetailsResponseMidocoAgencySettlementLevelDetailItem) : sprintf('%s(%s)', gettype($getAgencySettlementLevelDetailsResponseMidocoAgencySettlementLevelDetailItem), var_export($getAgencySettlementLevelDetailsResponseMidocoAgencySettlementLevelDetailItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAgencySettlementLevelDetail property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\AgencyStlmntLevelDetailDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAgencySettlementLevelDetail value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\AgencyStlmntLevelDetailDTO[] $midocoAgencySettlementLevelDetail
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetAgencySettlementLevelDetailsResponse
     */
    public function setMidocoAgencySettlementLevelDetail(?array $midocoAgencySettlementLevelDetail = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAgencySettlementLevelDetailArrayErrorMessage = self::validateMidocoAgencySettlementLevelDetailForArrayConstraintsFromSetMidocoAgencySettlementLevelDetail($midocoAgencySettlementLevelDetail))) {
            throw new InvalidArgumentException($midocoAgencySettlementLevelDetailArrayErrorMessage, __LINE__);
        }
        $this->MidocoAgencySettlementLevelDetail = $midocoAgencySettlementLevelDetail;
        
        return $this;
    }
    /**
     * Add item to MidocoAgencySettlementLevelDetail value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\AgencyStlmntLevelDetailDTO $item
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetAgencySettlementLevelDetailsResponse
     */
    public function addToMidocoAgencySettlementLevelDetail(\Pggns\MidocoApi\Api\Order\StructType\AgencyStlmntLevelDetailDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Order\StructType\AgencyStlmntLevelDetailDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoAgencySettlementLevelDetail property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\AgencyStlmntLevelDetailDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAgencySettlementLevelDetail[] = $item;
        
        return $this;
    }
}
