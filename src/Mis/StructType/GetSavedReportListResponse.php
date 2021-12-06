<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSavedReportListResponse StructType
 * @subpackage Structs
 */
class GetSavedReportListResponse extends AbstractStructBase
{
    /**
     * The MidocoSavedReportSameParamList
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: system:MidocoSavedReportSameParamList
     * @var \Pggns\MidocoApi\Api\Mis\StructType\MidocoSavedReportSameParamList[]
     */
    protected ?array $MidocoSavedReportSameParamList = null;
    /**
     * Constructor method for GetSavedReportListResponse
     * @uses GetSavedReportListResponse::setMidocoSavedReportSameParamList()
     * @param \Pggns\MidocoApi\Api\Mis\StructType\MidocoSavedReportSameParamList[] $midocoSavedReportSameParamList
     */
    public function __construct(?array $midocoSavedReportSameParamList = null)
    {
        $this
            ->setMidocoSavedReportSameParamList($midocoSavedReportSameParamList);
    }
    /**
     * Get MidocoSavedReportSameParamList value
     * @return \Pggns\MidocoApi\Api\Mis\StructType\MidocoSavedReportSameParamList[]
     */
    public function getMidocoSavedReportSameParamList(): ?array
    {
        return $this->MidocoSavedReportSameParamList;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSavedReportSameParamList method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSavedReportSameParamList method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSavedReportSameParamListForArrayConstraintsFromSetMidocoSavedReportSameParamList(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSavedReportListResponseMidocoSavedReportSameParamListItem) {
            // validation for constraint: itemType
            if (!$getSavedReportListResponseMidocoSavedReportSameParamListItem instanceof \Pggns\MidocoApi\Api\Mis\StructType\MidocoSavedReportSameParamList) {
                $invalidValues[] = is_object($getSavedReportListResponseMidocoSavedReportSameParamListItem) ? get_class($getSavedReportListResponseMidocoSavedReportSameParamListItem) : sprintf('%s(%s)', gettype($getSavedReportListResponseMidocoSavedReportSameParamListItem), var_export($getSavedReportListResponseMidocoSavedReportSameParamListItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSavedReportSameParamList property can only contain items of type \Pggns\MidocoApi\Api\Mis\StructType\MidocoSavedReportSameParamList, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSavedReportSameParamList value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Mis\StructType\MidocoSavedReportSameParamList[] $midocoSavedReportSameParamList
     * @return \Pggns\MidocoApi\Api\Mis\StructType\GetSavedReportListResponse
     */
    public function setMidocoSavedReportSameParamList(?array $midocoSavedReportSameParamList = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSavedReportSameParamListArrayErrorMessage = self::validateMidocoSavedReportSameParamListForArrayConstraintsFromSetMidocoSavedReportSameParamList($midocoSavedReportSameParamList))) {
            throw new InvalidArgumentException($midocoSavedReportSameParamListArrayErrorMessage, __LINE__);
        }
        $this->MidocoSavedReportSameParamList = $midocoSavedReportSameParamList;
        
        return $this;
    }
    /**
     * Add item to MidocoSavedReportSameParamList value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Mis\StructType\MidocoSavedReportSameParamList $item
     * @return \Pggns\MidocoApi\Api\Mis\StructType\GetSavedReportListResponse
     */
    public function addToMidocoSavedReportSameParamList(\Pggns\MidocoApi\Api\Mis\StructType\MidocoSavedReportSameParamList $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Mis\StructType\MidocoSavedReportSameParamList) {
            throw new InvalidArgumentException(sprintf('The MidocoSavedReportSameParamList property can only contain items of type \Pggns\MidocoApi\Api\Mis\StructType\MidocoSavedReportSameParamList, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSavedReportSameParamList[] = $item;
        
        return $this;
    }
}
