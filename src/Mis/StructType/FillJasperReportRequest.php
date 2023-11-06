<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FillJasperReportRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class FillJasperReportRequest extends AbstractStructBase
{
    /**
     * The MidocoJasperParameterValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoJasperParameterValue
     * @var \Pggns\MidocoApi\Mis\StructType\MidocoJasperParameterValue[]
     */
    protected ?array $MidocoJasperParameterValue = null;
    /**
     * The reportId
     * @var int|null
     */
    protected ?int $reportId = null;
    /**
     * The outputType
     * @var string|null
     */
    protected ?string $outputType = null;
    /**
     * Constructor method for FillJasperReportRequest
     * @uses FillJasperReportRequest::setMidocoJasperParameterValue()
     * @uses FillJasperReportRequest::setReportId()
     * @uses FillJasperReportRequest::setOutputType()
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoJasperParameterValue[] $midocoJasperParameterValue
     * @param int $reportId
     * @param string $outputType
     */
    public function __construct(?array $midocoJasperParameterValue = null, ?int $reportId = null, ?string $outputType = null)
    {
        $this
            ->setMidocoJasperParameterValue($midocoJasperParameterValue)
            ->setReportId($reportId)
            ->setOutputType($outputType);
    }
    /**
     * Get MidocoJasperParameterValue value
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoJasperParameterValue[]
     */
    public function getMidocoJasperParameterValue(): ?array
    {
        return $this->MidocoJasperParameterValue;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoJasperParameterValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoJasperParameterValue method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoJasperParameterValueForArrayConstraintFromSetMidocoJasperParameterValue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $fillJasperReportRequestMidocoJasperParameterValueItem) {
            // validation for constraint: itemType
            if (!$fillJasperReportRequestMidocoJasperParameterValueItem instanceof \Pggns\MidocoApi\Mis\StructType\MidocoJasperParameterValue) {
                $invalidValues[] = is_object($fillJasperReportRequestMidocoJasperParameterValueItem) ? get_class($fillJasperReportRequestMidocoJasperParameterValueItem) : sprintf('%s(%s)', gettype($fillJasperReportRequestMidocoJasperParameterValueItem), var_export($fillJasperReportRequestMidocoJasperParameterValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoJasperParameterValue property can only contain items of type \Pggns\MidocoApi\Mis\StructType\MidocoJasperParameterValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoJasperParameterValue value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoJasperParameterValue[] $midocoJasperParameterValue
     * @return \Pggns\MidocoApi\Mis\StructType\FillJasperReportRequest
     */
    public function setMidocoJasperParameterValue(?array $midocoJasperParameterValue = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoJasperParameterValueArrayErrorMessage = self::validateMidocoJasperParameterValueForArrayConstraintFromSetMidocoJasperParameterValue($midocoJasperParameterValue))) {
            throw new InvalidArgumentException($midocoJasperParameterValueArrayErrorMessage, __LINE__);
        }
        $this->MidocoJasperParameterValue = $midocoJasperParameterValue;
        
        return $this;
    }
    /**
     * Add item to MidocoJasperParameterValue value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoJasperParameterValue $item
     * @return \Pggns\MidocoApi\Mis\StructType\FillJasperReportRequest
     */
    public function addToMidocoJasperParameterValue(\Pggns\MidocoApi\Mis\StructType\MidocoJasperParameterValue $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Mis\StructType\MidocoJasperParameterValue) {
            throw new InvalidArgumentException(sprintf('The MidocoJasperParameterValue property can only contain items of type \Pggns\MidocoApi\Mis\StructType\MidocoJasperParameterValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoJasperParameterValue[] = $item;
        
        return $this;
    }
    /**
     * Get reportId value
     * @return int|null
     */
    public function getReportId(): ?int
    {
        return $this->reportId;
    }
    /**
     * Set reportId value
     * @param int $reportId
     * @return \Pggns\MidocoApi\Mis\StructType\FillJasperReportRequest
     */
    public function setReportId(?int $reportId = null): self
    {
        // validation for constraint: int
        if (!is_null($reportId) && !(is_int($reportId) || ctype_digit($reportId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($reportId, true), gettype($reportId)), __LINE__);
        }
        $this->reportId = $reportId;
        
        return $this;
    }
    /**
     * Get outputType value
     * @return string|null
     */
    public function getOutputType(): ?string
    {
        return $this->outputType;
    }
    /**
     * Set outputType value
     * @param string $outputType
     * @return \Pggns\MidocoApi\Mis\StructType\FillJasperReportRequest
     */
    public function setOutputType(?string $outputType = null): self
    {
        // validation for constraint: string
        if (!is_null($outputType) && !is_string($outputType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($outputType, true), gettype($outputType)), __LINE__);
        }
        $this->outputType = $outputType;
        
        return $this;
    }
}
