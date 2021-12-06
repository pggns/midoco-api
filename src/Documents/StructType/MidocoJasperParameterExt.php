<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoJasperParameterExt StructType
 * @subpackage Structs
 */
class MidocoJasperParameterExt extends JasperParameterDTO
{
    /**
     * The MidocoJasperReportParam
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoJasperReportParam
     * @var \Pggns\MidocoApi\Api\Documents\StructType\MidocoJasperReportParam[]
     */
    protected ?array $MidocoJasperReportParam = null;
    /**
     * Constructor method for MidocoJasperParameterExt
     * @uses MidocoJasperParameterExt::setMidocoJasperReportParam()
     * @param \Pggns\MidocoApi\Api\Documents\StructType\MidocoJasperReportParam[] $midocoJasperReportParam
     */
    public function __construct(?array $midocoJasperReportParam = null)
    {
        $this
            ->setMidocoJasperReportParam($midocoJasperReportParam);
    }
    /**
     * Get MidocoJasperReportParam value
     * @return \Pggns\MidocoApi\Api\Documents\StructType\MidocoJasperReportParam[]
     */
    public function getMidocoJasperReportParam(): ?array
    {
        return $this->MidocoJasperReportParam;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoJasperReportParam method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoJasperReportParam method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoJasperReportParamForArrayConstraintsFromSetMidocoJasperReportParam(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoJasperParameterExtMidocoJasperReportParamItem) {
            // validation for constraint: itemType
            if (!$midocoJasperParameterExtMidocoJasperReportParamItem instanceof \Pggns\MidocoApi\Api\Documents\StructType\MidocoJasperReportParam) {
                $invalidValues[] = is_object($midocoJasperParameterExtMidocoJasperReportParamItem) ? get_class($midocoJasperParameterExtMidocoJasperReportParamItem) : sprintf('%s(%s)', gettype($midocoJasperParameterExtMidocoJasperReportParamItem), var_export($midocoJasperParameterExtMidocoJasperReportParamItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoJasperReportParam property can only contain items of type \Pggns\MidocoApi\Api\Documents\StructType\MidocoJasperReportParam, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoJasperReportParam value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Documents\StructType\MidocoJasperReportParam[] $midocoJasperReportParam
     * @return \Pggns\MidocoApi\Api\Documents\StructType\MidocoJasperParameterExt
     */
    public function setMidocoJasperReportParam(?array $midocoJasperReportParam = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoJasperReportParamArrayErrorMessage = self::validateMidocoJasperReportParamForArrayConstraintsFromSetMidocoJasperReportParam($midocoJasperReportParam))) {
            throw new InvalidArgumentException($midocoJasperReportParamArrayErrorMessage, __LINE__);
        }
        $this->MidocoJasperReportParam = $midocoJasperReportParam;
        
        return $this;
    }
    /**
     * Add item to MidocoJasperReportParam value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Documents\StructType\MidocoJasperReportParam $item
     * @return \Pggns\MidocoApi\Api\Documents\StructType\MidocoJasperParameterExt
     */
    public function addToMidocoJasperReportParam(\Pggns\MidocoApi\Api\Documents\StructType\MidocoJasperReportParam $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Documents\StructType\MidocoJasperReportParam) {
            throw new InvalidArgumentException(sprintf('The MidocoJasperReportParam property can only contain items of type \Pggns\MidocoApi\Api\Documents\StructType\MidocoJasperReportParam, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoJasperReportParam[] = $item;
        
        return $this;
    }
}
