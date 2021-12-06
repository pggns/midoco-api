<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoExportListRequest StructType
 * @subpackage Structs
 */
class GetMidocoExportListRequest extends AbstractStructBase
{
    /**
     * The dtos
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $dtos = null;
    /**
     * The KeyValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: KeyValue
     * @var \Pggns\MidocoApi\Mis\StructType\KeyValue[]
     */
    protected ?array $KeyValue = null;
    /**
     * The dtoClassName
     * @var string|null
     */
    protected ?string $dtoClassName = null;
    /**
     * The reportName
     * @var string|null
     */
    protected ?string $reportName = null;
    /**
     * The format
     * @var string|null
     */
    protected ?string $format = null;
    /**
     * Constructor method for GetMidocoExportListRequest
     * @uses GetMidocoExportListRequest::setDtos()
     * @uses GetMidocoExportListRequest::setKeyValue()
     * @uses GetMidocoExportListRequest::setDtoClassName()
     * @uses GetMidocoExportListRequest::setReportName()
     * @uses GetMidocoExportListRequest::setFormat()
     * @param string[] $dtos
     * @param \Pggns\MidocoApi\Mis\StructType\KeyValue[] $keyValue
     * @param string $dtoClassName
     * @param string $reportName
     * @param string $format
     */
    public function __construct(?array $dtos = null, ?array $keyValue = null, ?string $dtoClassName = null, ?string $reportName = null, ?string $format = null)
    {
        $this
            ->setDtos($dtos)
            ->setKeyValue($keyValue)
            ->setDtoClassName($dtoClassName)
            ->setReportName($reportName)
            ->setFormat($format);
    }
    /**
     * Get dtos value
     * @return string[]
     */
    public function getDtos(): ?array
    {
        return $this->dtos;
    }
    /**
     * This method is responsible for validating the values passed to the setDtos method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDtos method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDtosForArrayConstraintsFromSetDtos(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMidocoExportListRequestDtosItem) {
            // validation for constraint: itemType
            if (!is_string($getMidocoExportListRequestDtosItem)) {
                $invalidValues[] = is_object($getMidocoExportListRequestDtosItem) ? get_class($getMidocoExportListRequestDtosItem) : sprintf('%s(%s)', gettype($getMidocoExportListRequestDtosItem), var_export($getMidocoExportListRequestDtosItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The dtos property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set dtos value
     * @throws InvalidArgumentException
     * @param string[] $dtos
     * @return \Pggns\MidocoApi\Mis\StructType\GetMidocoExportListRequest
     */
    public function setDtos(?array $dtos = null): self
    {
        // validation for constraint: array
        if ('' !== ($dtosArrayErrorMessage = self::validateDtosForArrayConstraintsFromSetDtos($dtos))) {
            throw new InvalidArgumentException($dtosArrayErrorMessage, __LINE__);
        }
        $this->dtos = $dtos;
        
        return $this;
    }
    /**
     * Add item to dtos value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Mis\StructType\GetMidocoExportListRequest
     */
    public function addToDtos(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The dtos property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->dtos[] = $item;
        
        return $this;
    }
    /**
     * Get KeyValue value
     * @return \Pggns\MidocoApi\Mis\StructType\KeyValue[]
     */
    public function getKeyValue(): ?array
    {
        return $this->KeyValue;
    }
    /**
     * This method is responsible for validating the values passed to the setKeyValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setKeyValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateKeyValueForArrayConstraintsFromSetKeyValue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMidocoExportListRequestKeyValueItem) {
            // validation for constraint: itemType
            if (!$getMidocoExportListRequestKeyValueItem instanceof \Pggns\MidocoApi\Mis\StructType\KeyValue) {
                $invalidValues[] = is_object($getMidocoExportListRequestKeyValueItem) ? get_class($getMidocoExportListRequestKeyValueItem) : sprintf('%s(%s)', gettype($getMidocoExportListRequestKeyValueItem), var_export($getMidocoExportListRequestKeyValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The KeyValue property can only contain items of type \Pggns\MidocoApi\Mis\StructType\KeyValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set KeyValue value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\KeyValue[] $keyValue
     * @return \Pggns\MidocoApi\Mis\StructType\GetMidocoExportListRequest
     */
    public function setKeyValue(?array $keyValue = null): self
    {
        // validation for constraint: array
        if ('' !== ($keyValueArrayErrorMessage = self::validateKeyValueForArrayConstraintsFromSetKeyValue($keyValue))) {
            throw new InvalidArgumentException($keyValueArrayErrorMessage, __LINE__);
        }
        $this->KeyValue = $keyValue;
        
        return $this;
    }
    /**
     * Add item to KeyValue value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\KeyValue $item
     * @return \Pggns\MidocoApi\Mis\StructType\GetMidocoExportListRequest
     */
    public function addToKeyValue(\Pggns\MidocoApi\Mis\StructType\KeyValue $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Mis\StructType\KeyValue) {
            throw new InvalidArgumentException(sprintf('The KeyValue property can only contain items of type \Pggns\MidocoApi\Mis\StructType\KeyValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->KeyValue[] = $item;
        
        return $this;
    }
    /**
     * Get dtoClassName value
     * @return string|null
     */
    public function getDtoClassName(): ?string
    {
        return $this->dtoClassName;
    }
    /**
     * Set dtoClassName value
     * @param string $dtoClassName
     * @return \Pggns\MidocoApi\Mis\StructType\GetMidocoExportListRequest
     */
    public function setDtoClassName(?string $dtoClassName = null): self
    {
        // validation for constraint: string
        if (!is_null($dtoClassName) && !is_string($dtoClassName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dtoClassName, true), gettype($dtoClassName)), __LINE__);
        }
        $this->dtoClassName = $dtoClassName;
        
        return $this;
    }
    /**
     * Get reportName value
     * @return string|null
     */
    public function getReportName(): ?string
    {
        return $this->reportName;
    }
    /**
     * Set reportName value
     * @param string $reportName
     * @return \Pggns\MidocoApi\Mis\StructType\GetMidocoExportListRequest
     */
    public function setReportName(?string $reportName = null): self
    {
        // validation for constraint: string
        if (!is_null($reportName) && !is_string($reportName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reportName, true), gettype($reportName)), __LINE__);
        }
        $this->reportName = $reportName;
        
        return $this;
    }
    /**
     * Get format value
     * @return string|null
     */
    public function getFormat(): ?string
    {
        return $this->format;
    }
    /**
     * Set format value
     * @param string $format
     * @return \Pggns\MidocoApi\Mis\StructType\GetMidocoExportListRequest
     */
    public function setFormat(?string $format = null): self
    {
        // validation for constraint: string
        if (!is_null($format) && !is_string($format)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($format, true), gettype($format)), __LINE__);
        }
        $this->format = $format;
        
        return $this;
    }
}
