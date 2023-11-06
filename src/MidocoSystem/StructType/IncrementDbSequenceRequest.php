<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IncrementDbSequenceRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class IncrementDbSequenceRequest extends AbstractStructBase
{
    /**
     * The DBtype
     * @var string|null
     */
    protected ?string $DBtype = null;
    /**
     * The TableName
     * @var string|null
     */
    protected ?string $TableName = null;
    /**
     * The numIds
     * @var int|null
     */
    protected ?int $numIds = null;
    /**
     * Constructor method for IncrementDbSequenceRequest
     * @uses IncrementDbSequenceRequest::setDBtype()
     * @uses IncrementDbSequenceRequest::setTableName()
     * @uses IncrementDbSequenceRequest::setNumIds()
     * @param string $dBtype
     * @param string $tableName
     * @param int $numIds
     */
    public function __construct(?string $dBtype = null, ?string $tableName = null, ?int $numIds = null)
    {
        $this
            ->setDBtype($dBtype)
            ->setTableName($tableName)
            ->setNumIds($numIds);
    }
    /**
     * Get DBtype value
     * @return string|null
     */
    public function getDBtype(): ?string
    {
        return $this->DBtype;
    }
    /**
     * Set DBtype value
     * @param string $dBtype
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\IncrementDbSequenceRequest
     */
    public function setDBtype(?string $dBtype = null): self
    {
        // validation for constraint: string
        if (!is_null($dBtype) && !is_string($dBtype)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dBtype, true), gettype($dBtype)), __LINE__);
        }
        $this->DBtype = $dBtype;
        
        return $this;
    }
    /**
     * Get TableName value
     * @return string|null
     */
    public function getTableName(): ?string
    {
        return $this->TableName;
    }
    /**
     * Set TableName value
     * @param string $tableName
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\IncrementDbSequenceRequest
     */
    public function setTableName(?string $tableName = null): self
    {
        // validation for constraint: string
        if (!is_null($tableName) && !is_string($tableName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tableName, true), gettype($tableName)), __LINE__);
        }
        $this->TableName = $tableName;
        
        return $this;
    }
    /**
     * Get numIds value
     * @return int|null
     */
    public function getNumIds(): ?int
    {
        return $this->numIds;
    }
    /**
     * Set numIds value
     * @param int $numIds
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\IncrementDbSequenceRequest
     */
    public function setNumIds(?int $numIds = null): self
    {
        // validation for constraint: int
        if (!is_null($numIds) && !(is_int($numIds) || ctype_digit($numIds))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numIds, true), gettype($numIds)), __LINE__);
        }
        $this->numIds = $numIds;
        
        return $this;
    }
}
