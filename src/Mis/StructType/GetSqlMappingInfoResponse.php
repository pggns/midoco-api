<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSqlMappingInfoResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getSqlMappingInfo --- returns the list of mappings between the sql type ids and sql type names
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetSqlMappingInfoResponse extends AbstractStructBase
{
    /**
     * The SqlMappingInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: SqlMappingInfo
     * @var \Pggns\MidocoApi\Mis\StructType\SqlMappingInfoType[]
     */
    protected ?array $SqlMappingInfo = null;
    /**
     * Constructor method for GetSqlMappingInfoResponse
     * @uses GetSqlMappingInfoResponse::setSqlMappingInfo()
     * @param \Pggns\MidocoApi\Mis\StructType\SqlMappingInfoType[] $sqlMappingInfo
     */
    public function __construct(?array $sqlMappingInfo = null)
    {
        $this
            ->setSqlMappingInfo($sqlMappingInfo);
    }
    /**
     * Get SqlMappingInfo value
     * @return \Pggns\MidocoApi\Mis\StructType\SqlMappingInfoType[]
     */
    public function getSqlMappingInfo(): ?array
    {
        return $this->SqlMappingInfo;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setSqlMappingInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSqlMappingInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSqlMappingInfoForArrayConstraintFromSetSqlMappingInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSqlMappingInfoResponseSqlMappingInfoItem) {
            // validation for constraint: itemType
            if (!$getSqlMappingInfoResponseSqlMappingInfoItem instanceof \Pggns\MidocoApi\Mis\StructType\SqlMappingInfoType) {
                $invalidValues[] = is_object($getSqlMappingInfoResponseSqlMappingInfoItem) ? get_class($getSqlMappingInfoResponseSqlMappingInfoItem) : sprintf('%s(%s)', gettype($getSqlMappingInfoResponseSqlMappingInfoItem), var_export($getSqlMappingInfoResponseSqlMappingInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SqlMappingInfo property can only contain items of type \Pggns\MidocoApi\Mis\StructType\SqlMappingInfoType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SqlMappingInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\SqlMappingInfoType[] $sqlMappingInfo
     * @return \Pggns\MidocoApi\Mis\StructType\GetSqlMappingInfoResponse
     */
    public function setSqlMappingInfo(?array $sqlMappingInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($sqlMappingInfoArrayErrorMessage = self::validateSqlMappingInfoForArrayConstraintFromSetSqlMappingInfo($sqlMappingInfo))) {
            throw new InvalidArgumentException($sqlMappingInfoArrayErrorMessage, __LINE__);
        }
        $this->SqlMappingInfo = $sqlMappingInfo;
        
        return $this;
    }
    /**
     * Add item to SqlMappingInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\SqlMappingInfoType $item
     * @return \Pggns\MidocoApi\Mis\StructType\GetSqlMappingInfoResponse
     */
    public function addToSqlMappingInfo(\Pggns\MidocoApi\Mis\StructType\SqlMappingInfoType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Mis\StructType\SqlMappingInfoType) {
            throw new InvalidArgumentException(sprintf('The SqlMappingInfo property can only contain items of type \Pggns\MidocoApi\Mis\StructType\SqlMappingInfoType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->SqlMappingInfo[] = $item;
        
        return $this;
    }
}
