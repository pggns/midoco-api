<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchMisReportResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: searchMisReport --- returns the list of mis reports that correspond to the given template (a MidocoMisReport)
 * @subpackage Structs
 */
class SearchMisReportResponse extends AbstractStructBase
{
    /**
     * The MidocoMisReportInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMisReportInfo
     * @var \Pggns\MidocoApi\Api\Mis\StructType\MidocoMisReportInfo[]
     */
    protected ?array $MidocoMisReportInfo = null;
    /**
     * Constructor method for SearchMisReportResponse
     * @uses SearchMisReportResponse::setMidocoMisReportInfo()
     * @param \Pggns\MidocoApi\Api\Mis\StructType\MidocoMisReportInfo[] $midocoMisReportInfo
     */
    public function __construct(?array $midocoMisReportInfo = null)
    {
        $this
            ->setMidocoMisReportInfo($midocoMisReportInfo);
    }
    /**
     * Get MidocoMisReportInfo value
     * @return \Pggns\MidocoApi\Api\Mis\StructType\MidocoMisReportInfo[]
     */
    public function getMidocoMisReportInfo(): ?array
    {
        return $this->MidocoMisReportInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoMisReportInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMisReportInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMisReportInfoForArrayConstraintsFromSetMidocoMisReportInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchMisReportResponseMidocoMisReportInfoItem) {
            // validation for constraint: itemType
            if (!$searchMisReportResponseMidocoMisReportInfoItem instanceof \Pggns\MidocoApi\Api\Mis\StructType\MidocoMisReportInfo) {
                $invalidValues[] = is_object($searchMisReportResponseMidocoMisReportInfoItem) ? get_class($searchMisReportResponseMidocoMisReportInfoItem) : sprintf('%s(%s)', gettype($searchMisReportResponseMidocoMisReportInfoItem), var_export($searchMisReportResponseMidocoMisReportInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMisReportInfo property can only contain items of type \Pggns\MidocoApi\Api\Mis\StructType\MidocoMisReportInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMisReportInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Mis\StructType\MidocoMisReportInfo[] $midocoMisReportInfo
     * @return \Pggns\MidocoApi\Api\Mis\StructType\SearchMisReportResponse
     */
    public function setMidocoMisReportInfo(?array $midocoMisReportInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMisReportInfoArrayErrorMessage = self::validateMidocoMisReportInfoForArrayConstraintsFromSetMidocoMisReportInfo($midocoMisReportInfo))) {
            throw new InvalidArgumentException($midocoMisReportInfoArrayErrorMessage, __LINE__);
        }
        $this->MidocoMisReportInfo = $midocoMisReportInfo;
        
        return $this;
    }
    /**
     * Add item to MidocoMisReportInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Mis\StructType\MidocoMisReportInfo $item
     * @return \Pggns\MidocoApi\Api\Mis\StructType\SearchMisReportResponse
     */
    public function addToMidocoMisReportInfo(\Pggns\MidocoApi\Api\Mis\StructType\MidocoMisReportInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Mis\StructType\MidocoMisReportInfo) {
            throw new InvalidArgumentException(sprintf('The MidocoMisReportInfo property can only contain items of type \Pggns\MidocoApi\Api\Mis\StructType\MidocoMisReportInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMisReportInfo[] = $item;
        
        return $this;
    }
}
