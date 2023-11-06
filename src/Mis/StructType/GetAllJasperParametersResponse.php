<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAllJasperParametersResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getAllJasperParameters --- return all the parameters (standard, not standard, or all)
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAllJasperParametersResponse extends AbstractStructBase
{
    /**
     * The MidocoJasperParameterForDisplay
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: system:MidocoJasperParameterForDisplay
     * @var \Pggns\MidocoApi\Mis\StructType\MidocoJasperParameterForDisplay[]
     */
    protected ?array $MidocoJasperParameterForDisplay = null;
    /**
     * Constructor method for GetAllJasperParametersResponse
     * @uses GetAllJasperParametersResponse::setMidocoJasperParameterForDisplay()
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoJasperParameterForDisplay[] $midocoJasperParameterForDisplay
     */
    public function __construct(?array $midocoJasperParameterForDisplay = null)
    {
        $this
            ->setMidocoJasperParameterForDisplay($midocoJasperParameterForDisplay);
    }
    /**
     * Get MidocoJasperParameterForDisplay value
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoJasperParameterForDisplay[]
     */
    public function getMidocoJasperParameterForDisplay(): ?array
    {
        return $this->MidocoJasperParameterForDisplay;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoJasperParameterForDisplay method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoJasperParameterForDisplay method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoJasperParameterForDisplayForArrayConstraintFromSetMidocoJasperParameterForDisplay(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAllJasperParametersResponseMidocoJasperParameterForDisplayItem) {
            // validation for constraint: itemType
            if (!$getAllJasperParametersResponseMidocoJasperParameterForDisplayItem instanceof \Pggns\MidocoApi\Mis\StructType\MidocoJasperParameterForDisplay) {
                $invalidValues[] = is_object($getAllJasperParametersResponseMidocoJasperParameterForDisplayItem) ? get_class($getAllJasperParametersResponseMidocoJasperParameterForDisplayItem) : sprintf('%s(%s)', gettype($getAllJasperParametersResponseMidocoJasperParameterForDisplayItem), var_export($getAllJasperParametersResponseMidocoJasperParameterForDisplayItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoJasperParameterForDisplay property can only contain items of type \Pggns\MidocoApi\Mis\StructType\MidocoJasperParameterForDisplay, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoJasperParameterForDisplay value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoJasperParameterForDisplay[] $midocoJasperParameterForDisplay
     * @return \Pggns\MidocoApi\Mis\StructType\GetAllJasperParametersResponse
     */
    public function setMidocoJasperParameterForDisplay(?array $midocoJasperParameterForDisplay = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoJasperParameterForDisplayArrayErrorMessage = self::validateMidocoJasperParameterForDisplayForArrayConstraintFromSetMidocoJasperParameterForDisplay($midocoJasperParameterForDisplay))) {
            throw new InvalidArgumentException($midocoJasperParameterForDisplayArrayErrorMessage, __LINE__);
        }
        $this->MidocoJasperParameterForDisplay = $midocoJasperParameterForDisplay;
        
        return $this;
    }
    /**
     * Add item to MidocoJasperParameterForDisplay value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoJasperParameterForDisplay $item
     * @return \Pggns\MidocoApi\Mis\StructType\GetAllJasperParametersResponse
     */
    public function addToMidocoJasperParameterForDisplay(\Pggns\MidocoApi\Mis\StructType\MidocoJasperParameterForDisplay $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Mis\StructType\MidocoJasperParameterForDisplay) {
            throw new InvalidArgumentException(sprintf('The MidocoJasperParameterForDisplay property can only contain items of type \Pggns\MidocoApi\Mis\StructType\MidocoJasperParameterForDisplay, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoJasperParameterForDisplay[] = $item;
        
        return $this;
    }
}
