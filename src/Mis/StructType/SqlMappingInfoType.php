<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SqlMappingInfoType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SqlMappingInfoType extends AbstractStructBase
{
    /**
     * The sqlTypeId
     * @var int|null
     */
    protected ?int $sqlTypeId = null;
    /**
     * The sqlTypeName
     * @var string|null
     */
    protected ?string $sqlTypeName = null;
    /**
     * Constructor method for SqlMappingInfoType
     * @uses SqlMappingInfoType::setSqlTypeId()
     * @uses SqlMappingInfoType::setSqlTypeName()
     * @param int $sqlTypeId
     * @param string $sqlTypeName
     */
    public function __construct(?int $sqlTypeId = null, ?string $sqlTypeName = null)
    {
        $this
            ->setSqlTypeId($sqlTypeId)
            ->setSqlTypeName($sqlTypeName);
    }
    /**
     * Get sqlTypeId value
     * @return int|null
     */
    public function getSqlTypeId(): ?int
    {
        return $this->sqlTypeId;
    }
    /**
     * Set sqlTypeId value
     * @param int $sqlTypeId
     * @return \Pggns\MidocoApi\Mis\StructType\SqlMappingInfoType
     */
    public function setSqlTypeId(?int $sqlTypeId = null): self
    {
        // validation for constraint: int
        if (!is_null($sqlTypeId) && !(is_int($sqlTypeId) || ctype_digit($sqlTypeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sqlTypeId, true), gettype($sqlTypeId)), __LINE__);
        }
        $this->sqlTypeId = $sqlTypeId;
        
        return $this;
    }
    /**
     * Get sqlTypeName value
     * @return string|null
     */
    public function getSqlTypeName(): ?string
    {
        return $this->sqlTypeName;
    }
    /**
     * Set sqlTypeName value
     * @param string $sqlTypeName
     * @return \Pggns\MidocoApi\Mis\StructType\SqlMappingInfoType
     */
    public function setSqlTypeName(?string $sqlTypeName = null): self
    {
        // validation for constraint: string
        if (!is_null($sqlTypeName) && !is_string($sqlTypeName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sqlTypeName, true), gettype($sqlTypeName)), __LINE__);
        }
        $this->sqlTypeName = $sqlTypeName;
        
        return $this;
    }
}
