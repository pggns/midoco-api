<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CdfTitle StructType
 * @subpackage Structs
 */
class CdfTitle extends AbstractStructBase
{
    /**
     * The fieldId
     * @var string|null
     */
    protected ?string $fieldId = null;
    /**
     * The fieldName
     * @var string|null
     */
    protected ?string $fieldName = null;
    /**
     * Constructor method for CdfTitle
     * @uses CdfTitle::setFieldId()
     * @uses CdfTitle::setFieldName()
     * @param string $fieldId
     * @param string $fieldName
     */
    public function __construct(?string $fieldId = null, ?string $fieldName = null)
    {
        $this
            ->setFieldId($fieldId)
            ->setFieldName($fieldName);
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
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\CdfTitle
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
     * Get fieldName value
     * @return string|null
     */
    public function getFieldName(): ?string
    {
        return $this->fieldName;
    }
    /**
     * Set fieldName value
     * @param string $fieldName
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\CdfTitle
     */
    public function setFieldName(?string $fieldName = null): self
    {
        // validation for constraint: string
        if (!is_null($fieldName) && !is_string($fieldName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fieldName, true), gettype($fieldName)), __LINE__);
        }
        $this->fieldName = $fieldName;
        
        return $this;
    }
}
