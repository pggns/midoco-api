<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSavedReportResponse StructType
 * @subpackage Structs
 */
class GetSavedReportResponse extends AbstractStructBase
{
    /**
     * The MidocoJasperReportExt
     * Meta information extracted from the WSDL
     * - ref: system:MidocoJasperReportExt
     * @var \Pggns\MidocoApi\Api\Mis\StructType\MidocoJasperReportExt|null
     */
    protected ?\Pggns\MidocoApi\Api\Mis\StructType\MidocoJasperReportExt $MidocoJasperReportExt = null;
    /**
     * The MidocoJasperReportParamValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: system:MidocoJasperReportParamValue
     * @var \Pggns\MidocoApi\Api\Mis\StructType\JasperReportParamValueDTO[]
     */
    protected ?array $MidocoJasperReportParamValue = null;
    /**
     * Constructor method for GetSavedReportResponse
     * @uses GetSavedReportResponse::setMidocoJasperReportExt()
     * @uses GetSavedReportResponse::setMidocoJasperReportParamValue()
     * @param \Pggns\MidocoApi\Api\Mis\StructType\MidocoJasperReportExt $midocoJasperReportExt
     * @param \Pggns\MidocoApi\Api\Mis\StructType\JasperReportParamValueDTO[] $midocoJasperReportParamValue
     */
    public function __construct(?\Pggns\MidocoApi\Api\Mis\StructType\MidocoJasperReportExt $midocoJasperReportExt = null, ?array $midocoJasperReportParamValue = null)
    {
        $this
            ->setMidocoJasperReportExt($midocoJasperReportExt)
            ->setMidocoJasperReportParamValue($midocoJasperReportParamValue);
    }
    /**
     * Get MidocoJasperReportExt value
     * @return \Pggns\MidocoApi\Api\Mis\StructType\MidocoJasperReportExt|null
     */
    public function getMidocoJasperReportExt(): ?\Pggns\MidocoApi\Api\Mis\StructType\MidocoJasperReportExt
    {
        return $this->MidocoJasperReportExt;
    }
    /**
     * Set MidocoJasperReportExt value
     * @param \Pggns\MidocoApi\Api\Mis\StructType\MidocoJasperReportExt $midocoJasperReportExt
     * @return \Pggns\MidocoApi\Api\Mis\StructType\GetSavedReportResponse
     */
    public function setMidocoJasperReportExt(?\Pggns\MidocoApi\Api\Mis\StructType\MidocoJasperReportExt $midocoJasperReportExt = null): self
    {
        $this->MidocoJasperReportExt = $midocoJasperReportExt;
        
        return $this;
    }
    /**
     * Get MidocoJasperReportParamValue value
     * @return \Pggns\MidocoApi\Api\Mis\StructType\JasperReportParamValueDTO[]
     */
    public function getMidocoJasperReportParamValue(): ?array
    {
        return $this->MidocoJasperReportParamValue;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoJasperReportParamValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoJasperReportParamValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoJasperReportParamValueForArrayConstraintsFromSetMidocoJasperReportParamValue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSavedReportResponseMidocoJasperReportParamValueItem) {
            // validation for constraint: itemType
            if (!$getSavedReportResponseMidocoJasperReportParamValueItem instanceof \Pggns\MidocoApi\Api\Mis\StructType\JasperReportParamValueDTO) {
                $invalidValues[] = is_object($getSavedReportResponseMidocoJasperReportParamValueItem) ? get_class($getSavedReportResponseMidocoJasperReportParamValueItem) : sprintf('%s(%s)', gettype($getSavedReportResponseMidocoJasperReportParamValueItem), var_export($getSavedReportResponseMidocoJasperReportParamValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoJasperReportParamValue property can only contain items of type \Pggns\MidocoApi\Api\Mis\StructType\JasperReportParamValueDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoJasperReportParamValue value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Mis\StructType\JasperReportParamValueDTO[] $midocoJasperReportParamValue
     * @return \Pggns\MidocoApi\Api\Mis\StructType\GetSavedReportResponse
     */
    public function setMidocoJasperReportParamValue(?array $midocoJasperReportParamValue = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoJasperReportParamValueArrayErrorMessage = self::validateMidocoJasperReportParamValueForArrayConstraintsFromSetMidocoJasperReportParamValue($midocoJasperReportParamValue))) {
            throw new InvalidArgumentException($midocoJasperReportParamValueArrayErrorMessage, __LINE__);
        }
        $this->MidocoJasperReportParamValue = $midocoJasperReportParamValue;
        
        return $this;
    }
    /**
     * Add item to MidocoJasperReportParamValue value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Mis\StructType\JasperReportParamValueDTO $item
     * @return \Pggns\MidocoApi\Api\Mis\StructType\GetSavedReportResponse
     */
    public function addToMidocoJasperReportParamValue(\Pggns\MidocoApi\Api\Mis\StructType\JasperReportParamValueDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Mis\StructType\JasperReportParamValueDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoJasperReportParamValue property can only contain items of type \Pggns\MidocoApi\Api\Mis\StructType\JasperReportParamValueDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoJasperReportParamValue[] = $item;
        
        return $this;
    }
}
