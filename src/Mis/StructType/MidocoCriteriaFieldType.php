<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCriteriaFieldType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoCriteriaFieldType extends AbstractStructBase
{
    /**
     * The keyField
     * @var string|null
     */
    protected ?string $keyField = null;
    /**
     * The database
     * @var string|null
     */
    protected ?string $database = null;
    /**
     * The tableFieldId
     * @var string|null
     */
    protected ?string $tableFieldId = null;
    /**
     * The fieldId
     * @var string|null
     */
    protected ?string $fieldId = null;
    /**
     * The fieldIdSqlTypeId
     * @var int|null
     */
    protected ?int $fieldIdSqlTypeId = null;
    /**
     * The tableFieldDisplay
     * @var string|null
     */
    protected ?string $tableFieldDisplay = null;
    /**
     * The fieldDisplay
     * @var string|null
     */
    protected ?string $fieldDisplay = null;
    /**
     * The fieldDisplaySqlTypeId
     * @var int|null
     */
    protected ?int $fieldDisplaySqlTypeId = null;
    /**
     * The tableFieldCultureId
     * @var string|null
     */
    protected ?string $tableFieldCultureId = null;
    /**
     * The fieldCultureId
     * @var string|null
     */
    protected ?string $fieldCultureId = null;
    /**
     * Constructor method for MidocoCriteriaFieldType
     * @uses MidocoCriteriaFieldType::setKeyField()
     * @uses MidocoCriteriaFieldType::setDatabase()
     * @uses MidocoCriteriaFieldType::setTableFieldId()
     * @uses MidocoCriteriaFieldType::setFieldId()
     * @uses MidocoCriteriaFieldType::setFieldIdSqlTypeId()
     * @uses MidocoCriteriaFieldType::setTableFieldDisplay()
     * @uses MidocoCriteriaFieldType::setFieldDisplay()
     * @uses MidocoCriteriaFieldType::setFieldDisplaySqlTypeId()
     * @uses MidocoCriteriaFieldType::setTableFieldCultureId()
     * @uses MidocoCriteriaFieldType::setFieldCultureId()
     * @param string $keyField
     * @param string $database
     * @param string $tableFieldId
     * @param string $fieldId
     * @param int $fieldIdSqlTypeId
     * @param string $tableFieldDisplay
     * @param string $fieldDisplay
     * @param int $fieldDisplaySqlTypeId
     * @param string $tableFieldCultureId
     * @param string $fieldCultureId
     */
    public function __construct(?string $keyField = null, ?string $database = null, ?string $tableFieldId = null, ?string $fieldId = null, ?int $fieldIdSqlTypeId = null, ?string $tableFieldDisplay = null, ?string $fieldDisplay = null, ?int $fieldDisplaySqlTypeId = null, ?string $tableFieldCultureId = null, ?string $fieldCultureId = null)
    {
        $this
            ->setKeyField($keyField)
            ->setDatabase($database)
            ->setTableFieldId($tableFieldId)
            ->setFieldId($fieldId)
            ->setFieldIdSqlTypeId($fieldIdSqlTypeId)
            ->setTableFieldDisplay($tableFieldDisplay)
            ->setFieldDisplay($fieldDisplay)
            ->setFieldDisplaySqlTypeId($fieldDisplaySqlTypeId)
            ->setTableFieldCultureId($tableFieldCultureId)
            ->setFieldCultureId($fieldCultureId);
    }
    /**
     * Get keyField value
     * @return string|null
     */
    public function getKeyField(): ?string
    {
        return $this->keyField;
    }
    /**
     * Set keyField value
     * @param string $keyField
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoCriteriaFieldType
     */
    public function setKeyField(?string $keyField = null): self
    {
        // validation for constraint: string
        if (!is_null($keyField) && !is_string($keyField)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($keyField, true), gettype($keyField)), __LINE__);
        }
        $this->keyField = $keyField;
        
        return $this;
    }
    /**
     * Get database value
     * @return string|null
     */
    public function getDatabase(): ?string
    {
        return $this->database;
    }
    /**
     * Set database value
     * @param string $database
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoCriteriaFieldType
     */
    public function setDatabase(?string $database = null): self
    {
        // validation for constraint: string
        if (!is_null($database) && !is_string($database)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($database, true), gettype($database)), __LINE__);
        }
        $this->database = $database;
        
        return $this;
    }
    /**
     * Get tableFieldId value
     * @return string|null
     */
    public function getTableFieldId(): ?string
    {
        return $this->tableFieldId;
    }
    /**
     * Set tableFieldId value
     * @param string $tableFieldId
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoCriteriaFieldType
     */
    public function setTableFieldId(?string $tableFieldId = null): self
    {
        // validation for constraint: string
        if (!is_null($tableFieldId) && !is_string($tableFieldId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tableFieldId, true), gettype($tableFieldId)), __LINE__);
        }
        $this->tableFieldId = $tableFieldId;
        
        return $this;
    }
    /**
     * Get fieldId value
     * @return string|null
     */
    public function getFieldId(): ?string
    {
        return $this->fieldId;
    }
    /**
     * Set fieldId value
     * @param string $fieldId
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoCriteriaFieldType
     */
    public function setFieldId(?string $fieldId = null): self
    {
        // validation for constraint: string
        if (!is_null($fieldId) && !is_string($fieldId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fieldId, true), gettype($fieldId)), __LINE__);
        }
        $this->fieldId = $fieldId;
        
        return $this;
    }
    /**
     * Get fieldIdSqlTypeId value
     * @return int|null
     */
    public function getFieldIdSqlTypeId(): ?int
    {
        return $this->fieldIdSqlTypeId;
    }
    /**
     * Set fieldIdSqlTypeId value
     * @param int $fieldIdSqlTypeId
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoCriteriaFieldType
     */
    public function setFieldIdSqlTypeId(?int $fieldIdSqlTypeId = null): self
    {
        // validation for constraint: int
        if (!is_null($fieldIdSqlTypeId) && !(is_int($fieldIdSqlTypeId) || ctype_digit($fieldIdSqlTypeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($fieldIdSqlTypeId, true), gettype($fieldIdSqlTypeId)), __LINE__);
        }
        $this->fieldIdSqlTypeId = $fieldIdSqlTypeId;
        
        return $this;
    }
    /**
     * Get tableFieldDisplay value
     * @return string|null
     */
    public function getTableFieldDisplay(): ?string
    {
        return $this->tableFieldDisplay;
    }
    /**
     * Set tableFieldDisplay value
     * @param string $tableFieldDisplay
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoCriteriaFieldType
     */
    public function setTableFieldDisplay(?string $tableFieldDisplay = null): self
    {
        // validation for constraint: string
        if (!is_null($tableFieldDisplay) && !is_string($tableFieldDisplay)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tableFieldDisplay, true), gettype($tableFieldDisplay)), __LINE__);
        }
        $this->tableFieldDisplay = $tableFieldDisplay;
        
        return $this;
    }
    /**
     * Get fieldDisplay value
     * @return string|null
     */
    public function getFieldDisplay(): ?string
    {
        return $this->fieldDisplay;
    }
    /**
     * Set fieldDisplay value
     * @param string $fieldDisplay
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoCriteriaFieldType
     */
    public function setFieldDisplay(?string $fieldDisplay = null): self
    {
        // validation for constraint: string
        if (!is_null($fieldDisplay) && !is_string($fieldDisplay)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fieldDisplay, true), gettype($fieldDisplay)), __LINE__);
        }
        $this->fieldDisplay = $fieldDisplay;
        
        return $this;
    }
    /**
     * Get fieldDisplaySqlTypeId value
     * @return int|null
     */
    public function getFieldDisplaySqlTypeId(): ?int
    {
        return $this->fieldDisplaySqlTypeId;
    }
    /**
     * Set fieldDisplaySqlTypeId value
     * @param int $fieldDisplaySqlTypeId
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoCriteriaFieldType
     */
    public function setFieldDisplaySqlTypeId(?int $fieldDisplaySqlTypeId = null): self
    {
        // validation for constraint: int
        if (!is_null($fieldDisplaySqlTypeId) && !(is_int($fieldDisplaySqlTypeId) || ctype_digit($fieldDisplaySqlTypeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($fieldDisplaySqlTypeId, true), gettype($fieldDisplaySqlTypeId)), __LINE__);
        }
        $this->fieldDisplaySqlTypeId = $fieldDisplaySqlTypeId;
        
        return $this;
    }
    /**
     * Get tableFieldCultureId value
     * @return string|null
     */
    public function getTableFieldCultureId(): ?string
    {
        return $this->tableFieldCultureId;
    }
    /**
     * Set tableFieldCultureId value
     * @param string $tableFieldCultureId
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoCriteriaFieldType
     */
    public function setTableFieldCultureId(?string $tableFieldCultureId = null): self
    {
        // validation for constraint: string
        if (!is_null($tableFieldCultureId) && !is_string($tableFieldCultureId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tableFieldCultureId, true), gettype($tableFieldCultureId)), __LINE__);
        }
        $this->tableFieldCultureId = $tableFieldCultureId;
        
        return $this;
    }
    /**
     * Get fieldCultureId value
     * @return string|null
     */
    public function getFieldCultureId(): ?string
    {
        return $this->fieldCultureId;
    }
    /**
     * Set fieldCultureId value
     * @param string $fieldCultureId
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoCriteriaFieldType
     */
    public function setFieldCultureId(?string $fieldCultureId = null): self
    {
        // validation for constraint: string
        if (!is_null($fieldCultureId) && !is_string($fieldCultureId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fieldCultureId, true), gettype($fieldCultureId)), __LINE__);
        }
        $this->fieldCultureId = $fieldCultureId;
        
        return $this;
    }
}
