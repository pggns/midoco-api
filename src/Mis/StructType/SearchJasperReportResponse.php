<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchJasperReportResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: searchJasperReport --- search jasper reports according to the criteria
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchJasperReportResponse extends AbstractStructBase
{
    /**
     * The MidocoJasperReportExt
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: system:MidocoJasperReportExt
     * @var \Pggns\MidocoApi\Mis\StructType\MidocoJasperReportExt[]
     */
    protected ?array $MidocoJasperReportExt = null;
    /**
     * Constructor method for SearchJasperReportResponse
     * @uses SearchJasperReportResponse::setMidocoJasperReportExt()
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoJasperReportExt[] $midocoJasperReportExt
     */
    public function __construct(?array $midocoJasperReportExt = null)
    {
        $this
            ->setMidocoJasperReportExt($midocoJasperReportExt);
    }
    /**
     * Get MidocoJasperReportExt value
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoJasperReportExt[]
     */
    public function getMidocoJasperReportExt(): ?array
    {
        return $this->MidocoJasperReportExt;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoJasperReportExt method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoJasperReportExt method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoJasperReportExtForArrayConstraintFromSetMidocoJasperReportExt(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchJasperReportResponseMidocoJasperReportExtItem) {
            // validation for constraint: itemType
            if (!$searchJasperReportResponseMidocoJasperReportExtItem instanceof \Pggns\MidocoApi\Mis\StructType\MidocoJasperReportExt) {
                $invalidValues[] = is_object($searchJasperReportResponseMidocoJasperReportExtItem) ? get_class($searchJasperReportResponseMidocoJasperReportExtItem) : sprintf('%s(%s)', gettype($searchJasperReportResponseMidocoJasperReportExtItem), var_export($searchJasperReportResponseMidocoJasperReportExtItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoJasperReportExt property can only contain items of type \Pggns\MidocoApi\Mis\StructType\MidocoJasperReportExt, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoJasperReportExt value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoJasperReportExt[] $midocoJasperReportExt
     * @return \Pggns\MidocoApi\Mis\StructType\SearchJasperReportResponse
     */
    public function setMidocoJasperReportExt(?array $midocoJasperReportExt = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoJasperReportExtArrayErrorMessage = self::validateMidocoJasperReportExtForArrayConstraintFromSetMidocoJasperReportExt($midocoJasperReportExt))) {
            throw new InvalidArgumentException($midocoJasperReportExtArrayErrorMessage, __LINE__);
        }
        $this->MidocoJasperReportExt = $midocoJasperReportExt;
        
        return $this;
    }
    /**
     * Add item to MidocoJasperReportExt value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoJasperReportExt $item
     * @return \Pggns\MidocoApi\Mis\StructType\SearchJasperReportResponse
     */
    public function addToMidocoJasperReportExt(\Pggns\MidocoApi\Mis\StructType\MidocoJasperReportExt $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Mis\StructType\MidocoJasperReportExt) {
            throw new InvalidArgumentException(sprintf('The MidocoJasperReportExt property can only contain items of type \Pggns\MidocoApi\Mis\StructType\MidocoJasperReportExt, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoJasperReportExt[] = $item;
        
        return $this;
    }
}
