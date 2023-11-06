<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoMisReport StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoMisReport extends MisReportDTO
{
    /**
     * The MidocoMisReportParam
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMisReportParam
     * @var \Pggns\MidocoApi\Mis\StructType\MidocoMisReportParam[]
     */
    protected ?array $MidocoMisReportParam = null;
    /**
     * The MidocoMisCube
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoMisCube
     * @var \Pggns\MidocoApi\Mis\StructType\MidocoMisCube|null
     */
    protected ?\Pggns\MidocoApi\Mis\StructType\MidocoMisCube $MidocoMisCube = null;
    /**
     * The MidocoMisDimension
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMisDimension
     * @var \Pggns\MidocoApi\Mis\StructType\MisDimensionDTO[]
     */
    protected ?array $MidocoMisDimension = null;
    /**
     * Constructor method for MidocoMisReport
     * @uses MidocoMisReport::setMidocoMisReportParam()
     * @uses MidocoMisReport::setMidocoMisCube()
     * @uses MidocoMisReport::setMidocoMisDimension()
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoMisReportParam[] $midocoMisReportParam
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoMisCube $midocoMisCube
     * @param \Pggns\MidocoApi\Mis\StructType\MisDimensionDTO[] $midocoMisDimension
     */
    public function __construct(?array $midocoMisReportParam = null, ?\Pggns\MidocoApi\Mis\StructType\MidocoMisCube $midocoMisCube = null, ?array $midocoMisDimension = null)
    {
        $this
            ->setMidocoMisReportParam($midocoMisReportParam)
            ->setMidocoMisCube($midocoMisCube)
            ->setMidocoMisDimension($midocoMisDimension);
    }
    /**
     * Get MidocoMisReportParam value
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoMisReportParam[]
     */
    public function getMidocoMisReportParam(): ?array
    {
        return $this->MidocoMisReportParam;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoMisReportParam method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMisReportParam method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMisReportParamForArrayConstraintFromSetMidocoMisReportParam(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoMisReportMidocoMisReportParamItem) {
            // validation for constraint: itemType
            if (!$midocoMisReportMidocoMisReportParamItem instanceof \Pggns\MidocoApi\Mis\StructType\MidocoMisReportParam) {
                $invalidValues[] = is_object($midocoMisReportMidocoMisReportParamItem) ? get_class($midocoMisReportMidocoMisReportParamItem) : sprintf('%s(%s)', gettype($midocoMisReportMidocoMisReportParamItem), var_export($midocoMisReportMidocoMisReportParamItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMisReportParam property can only contain items of type \Pggns\MidocoApi\Mis\StructType\MidocoMisReportParam, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMisReportParam value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoMisReportParam[] $midocoMisReportParam
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoMisReport
     */
    public function setMidocoMisReportParam(?array $midocoMisReportParam = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMisReportParamArrayErrorMessage = self::validateMidocoMisReportParamForArrayConstraintFromSetMidocoMisReportParam($midocoMisReportParam))) {
            throw new InvalidArgumentException($midocoMisReportParamArrayErrorMessage, __LINE__);
        }
        $this->MidocoMisReportParam = $midocoMisReportParam;
        
        return $this;
    }
    /**
     * Add item to MidocoMisReportParam value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoMisReportParam $item
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoMisReport
     */
    public function addToMidocoMisReportParam(\Pggns\MidocoApi\Mis\StructType\MidocoMisReportParam $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Mis\StructType\MidocoMisReportParam) {
            throw new InvalidArgumentException(sprintf('The MidocoMisReportParam property can only contain items of type \Pggns\MidocoApi\Mis\StructType\MidocoMisReportParam, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMisReportParam[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoMisCube value
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoMisCube|null
     */
    public function getMidocoMisCube(): ?\Pggns\MidocoApi\Mis\StructType\MidocoMisCube
    {
        return $this->MidocoMisCube;
    }
    /**
     * Set MidocoMisCube value
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoMisCube $midocoMisCube
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoMisReport
     */
    public function setMidocoMisCube(?\Pggns\MidocoApi\Mis\StructType\MidocoMisCube $midocoMisCube = null): self
    {
        $this->MidocoMisCube = $midocoMisCube;
        
        return $this;
    }
    /**
     * Get MidocoMisDimension value
     * @return \Pggns\MidocoApi\Mis\StructType\MisDimensionDTO[]
     */
    public function getMidocoMisDimension(): ?array
    {
        return $this->MidocoMisDimension;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoMisDimension method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMisDimension method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMisDimensionForArrayConstraintFromSetMidocoMisDimension(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoMisReportMidocoMisDimensionItem) {
            // validation for constraint: itemType
            if (!$midocoMisReportMidocoMisDimensionItem instanceof \Pggns\MidocoApi\Mis\StructType\MisDimensionDTO) {
                $invalidValues[] = is_object($midocoMisReportMidocoMisDimensionItem) ? get_class($midocoMisReportMidocoMisDimensionItem) : sprintf('%s(%s)', gettype($midocoMisReportMidocoMisDimensionItem), var_export($midocoMisReportMidocoMisDimensionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMisDimension property can only contain items of type \Pggns\MidocoApi\Mis\StructType\MisDimensionDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMisDimension value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\MisDimensionDTO[] $midocoMisDimension
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoMisReport
     */
    public function setMidocoMisDimension(?array $midocoMisDimension = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMisDimensionArrayErrorMessage = self::validateMidocoMisDimensionForArrayConstraintFromSetMidocoMisDimension($midocoMisDimension))) {
            throw new InvalidArgumentException($midocoMisDimensionArrayErrorMessage, __LINE__);
        }
        $this->MidocoMisDimension = $midocoMisDimension;
        
        return $this;
    }
    /**
     * Add item to MidocoMisDimension value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\MisDimensionDTO $item
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoMisReport
     */
    public function addToMidocoMisDimension(\Pggns\MidocoApi\Mis\StructType\MisDimensionDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Mis\StructType\MisDimensionDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoMisDimension property can only contain items of type \Pggns\MidocoApi\Mis\StructType\MisDimensionDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMisDimension[] = $item;
        
        return $this;
    }
}
