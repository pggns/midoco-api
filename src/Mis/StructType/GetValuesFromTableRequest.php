<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetValuesFromTableRequest StructType
 * @subpackage Structs
 */
class GetValuesFromTableRequest extends AbstractStructBase
{
    /**
     * The tableName
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $tableName;
    /**
     * The fieldName
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $fieldName;
    /**
     * The datastoreType
     * Meta information extracted from the WSDL
     * - default: MIS
     * @var string|null
     */
    protected ?string $datastoreType = null;
    /**
     * Constructor method for GetValuesFromTableRequest
     * @uses GetValuesFromTableRequest::setTableName()
     * @uses GetValuesFromTableRequest::setFieldName()
     * @uses GetValuesFromTableRequest::setDatastoreType()
     * @param string $tableName
     * @param string $fieldName
     * @param string $datastoreType
     */
    public function __construct(string $tableName, string $fieldName, ?string $datastoreType = 'MIS')
    {
        $this
            ->setTableName($tableName)
            ->setFieldName($fieldName)
            ->setDatastoreType($datastoreType);
    }
    /**
     * Get tableName value
     * @return string
     */
    public function getTableName(): string
    {
        return $this->tableName;
    }
    /**
     * Set tableName value
     * @param string $tableName
     * @return \Pggns\MidocoApi\Mis\StructType\GetValuesFromTableRequest
     */
    public function setTableName(string $tableName): self
    {
        // validation for constraint: string
        if (!is_null($tableName) && !is_string($tableName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tableName, true), gettype($tableName)), __LINE__);
        }
        $this->tableName = $tableName;
        
        return $this;
    }
    /**
     * Get fieldName value
     * @return string
     */
    public function getFieldName(): string
    {
        return $this->fieldName;
    }
    /**
     * Set fieldName value
     * @param string $fieldName
     * @return \Pggns\MidocoApi\Mis\StructType\GetValuesFromTableRequest
     */
    public function setFieldName(string $fieldName): self
    {
        // validation for constraint: string
        if (!is_null($fieldName) && !is_string($fieldName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fieldName, true), gettype($fieldName)), __LINE__);
        }
        $this->fieldName = $fieldName;
        
        return $this;
    }
    /**
     * Get datastoreType value
     * @return string|null
     */
    public function getDatastoreType(): ?string
    {
        return $this->datastoreType;
    }
    /**
     * Set datastoreType value
     * @param string $datastoreType
     * @return \Pggns\MidocoApi\Mis\StructType\GetValuesFromTableRequest
     */
    public function setDatastoreType(?string $datastoreType = 'MIS'): self
    {
        // validation for constraint: string
        if (!is_null($datastoreType) && !is_string($datastoreType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($datastoreType, true), gettype($datastoreType)), __LINE__);
        }
        $this->datastoreType = $datastoreType;
        
        return $this;
    }
}
