<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAllJasperReportsResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getAllJasperReports --- return all the standard reports
 * @subpackage Structs
 */
class GetAllJasperReportsResponse extends AbstractStructBase
{
    /**
     * The MidocoJasperReportExt
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: system:MidocoJasperReportExt
     * @var \Pggns\MidocoApi\Api\Mis\StructType\MidocoJasperReportExt[]
     */
    protected ?array $MidocoJasperReportExt = null;
    /**
     * Constructor method for GetAllJasperReportsResponse
     * @uses GetAllJasperReportsResponse::setMidocoJasperReportExt()
     * @param \Pggns\MidocoApi\Api\Mis\StructType\MidocoJasperReportExt[] $midocoJasperReportExt
     */
    public function __construct(?array $midocoJasperReportExt = null)
    {
        $this
            ->setMidocoJasperReportExt($midocoJasperReportExt);
    }
    /**
     * Get MidocoJasperReportExt value
     * @return \Pggns\MidocoApi\Api\Mis\StructType\MidocoJasperReportExt[]
     */
    public function getMidocoJasperReportExt(): ?array
    {
        return $this->MidocoJasperReportExt;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoJasperReportExt method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoJasperReportExt method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoJasperReportExtForArrayConstraintsFromSetMidocoJasperReportExt(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAllJasperReportsResponseMidocoJasperReportExtItem) {
            // validation for constraint: itemType
            if (!$getAllJasperReportsResponseMidocoJasperReportExtItem instanceof \Pggns\MidocoApi\Api\Mis\StructType\MidocoJasperReportExt) {
                $invalidValues[] = is_object($getAllJasperReportsResponseMidocoJasperReportExtItem) ? get_class($getAllJasperReportsResponseMidocoJasperReportExtItem) : sprintf('%s(%s)', gettype($getAllJasperReportsResponseMidocoJasperReportExtItem), var_export($getAllJasperReportsResponseMidocoJasperReportExtItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoJasperReportExt property can only contain items of type \Pggns\MidocoApi\Api\Mis\StructType\MidocoJasperReportExt, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoJasperReportExt value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Mis\StructType\MidocoJasperReportExt[] $midocoJasperReportExt
     * @return \Pggns\MidocoApi\Api\Mis\StructType\GetAllJasperReportsResponse
     */
    public function setMidocoJasperReportExt(?array $midocoJasperReportExt = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoJasperReportExtArrayErrorMessage = self::validateMidocoJasperReportExtForArrayConstraintsFromSetMidocoJasperReportExt($midocoJasperReportExt))) {
            throw new InvalidArgumentException($midocoJasperReportExtArrayErrorMessage, __LINE__);
        }
        $this->MidocoJasperReportExt = $midocoJasperReportExt;
        
        return $this;
    }
    /**
     * Add item to MidocoJasperReportExt value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Mis\StructType\MidocoJasperReportExt $item
     * @return \Pggns\MidocoApi\Api\Mis\StructType\GetAllJasperReportsResponse
     */
    public function addToMidocoJasperReportExt(\Pggns\MidocoApi\Api\Mis\StructType\MidocoJasperReportExt $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Mis\StructType\MidocoJasperReportExt) {
            throw new InvalidArgumentException(sprintf('The MidocoJasperReportExt property can only contain items of type \Pggns\MidocoApi\Api\Mis\StructType\MidocoJasperReportExt, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoJasperReportExt[] = $item;
        
        return $this;
    }
}
