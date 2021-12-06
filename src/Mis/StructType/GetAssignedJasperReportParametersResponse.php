<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAssignedJasperReportParametersResponse StructType
 * @subpackage Structs
 */
class GetAssignedJasperReportParametersResponse extends AbstractStructBase
{
    /**
     * The MidocoJasperReportParameter
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoJasperReportParameter
     * @var \Pggns\MidocoApi\Api\Mis\StructType\MidocoJasperReportParameter[]
     */
    protected ?array $MidocoJasperReportParameter = null;
    /**
     * Constructor method for GetAssignedJasperReportParametersResponse
     * @uses GetAssignedJasperReportParametersResponse::setMidocoJasperReportParameter()
     * @param \Pggns\MidocoApi\Api\Mis\StructType\MidocoJasperReportParameter[] $midocoJasperReportParameter
     */
    public function __construct(?array $midocoJasperReportParameter = null)
    {
        $this
            ->setMidocoJasperReportParameter($midocoJasperReportParameter);
    }
    /**
     * Get MidocoJasperReportParameter value
     * @return \Pggns\MidocoApi\Api\Mis\StructType\MidocoJasperReportParameter[]
     */
    public function getMidocoJasperReportParameter(): ?array
    {
        return $this->MidocoJasperReportParameter;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoJasperReportParameter method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoJasperReportParameter method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoJasperReportParameterForArrayConstraintsFromSetMidocoJasperReportParameter(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAssignedJasperReportParametersResponseMidocoJasperReportParameterItem) {
            // validation for constraint: itemType
            if (!$getAssignedJasperReportParametersResponseMidocoJasperReportParameterItem instanceof \Pggns\MidocoApi\Api\Mis\StructType\MidocoJasperReportParameter) {
                $invalidValues[] = is_object($getAssignedJasperReportParametersResponseMidocoJasperReportParameterItem) ? get_class($getAssignedJasperReportParametersResponseMidocoJasperReportParameterItem) : sprintf('%s(%s)', gettype($getAssignedJasperReportParametersResponseMidocoJasperReportParameterItem), var_export($getAssignedJasperReportParametersResponseMidocoJasperReportParameterItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoJasperReportParameter property can only contain items of type \Pggns\MidocoApi\Api\Mis\StructType\MidocoJasperReportParameter, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoJasperReportParameter value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Mis\StructType\MidocoJasperReportParameter[] $midocoJasperReportParameter
     * @return \Pggns\MidocoApi\Api\Mis\StructType\GetAssignedJasperReportParametersResponse
     */
    public function setMidocoJasperReportParameter(?array $midocoJasperReportParameter = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoJasperReportParameterArrayErrorMessage = self::validateMidocoJasperReportParameterForArrayConstraintsFromSetMidocoJasperReportParameter($midocoJasperReportParameter))) {
            throw new InvalidArgumentException($midocoJasperReportParameterArrayErrorMessage, __LINE__);
        }
        $this->MidocoJasperReportParameter = $midocoJasperReportParameter;
        
        return $this;
    }
    /**
     * Add item to MidocoJasperReportParameter value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Mis\StructType\MidocoJasperReportParameter $item
     * @return \Pggns\MidocoApi\Api\Mis\StructType\GetAssignedJasperReportParametersResponse
     */
    public function addToMidocoJasperReportParameter(\Pggns\MidocoApi\Api\Mis\StructType\MidocoJasperReportParameter $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Mis\StructType\MidocoJasperReportParameter) {
            throw new InvalidArgumentException(sprintf('The MidocoJasperReportParameter property can only contain items of type \Pggns\MidocoApi\Api\Mis\StructType\MidocoJasperReportParameter, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoJasperReportParameter[] = $item;
        
        return $this;
    }
}
