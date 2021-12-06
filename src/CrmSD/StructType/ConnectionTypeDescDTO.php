<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConnectionTypeDescDTO StructType
 * @subpackage Structs
 */
class ConnectionTypeDescDTO extends AbstractStructBase
{
    /**
     * The connectionTypeId
     * @var int|null
     */
    protected ?int $connectionTypeId = null;
    /**
     * The cultureId
     * @var string|null
     */
    protected ?string $cultureId = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * Constructor method for ConnectionTypeDescDTO
     * @uses ConnectionTypeDescDTO::setConnectionTypeId()
     * @uses ConnectionTypeDescDTO::setCultureId()
     * @uses ConnectionTypeDescDTO::setDescription()
     * @param int $connectionTypeId
     * @param string $cultureId
     * @param string $description
     */
    public function __construct(?int $connectionTypeId = null, ?string $cultureId = null, ?string $description = null)
    {
        $this
            ->setConnectionTypeId($connectionTypeId)
            ->setCultureId($cultureId)
            ->setDescription($description);
    }
    /**
     * Get connectionTypeId value
     * @return int|null
     */
    public function getConnectionTypeId(): ?int
    {
        return $this->connectionTypeId;
    }
    /**
     * Set connectionTypeId value
     * @param int $connectionTypeId
     * @return \Pggns\MidocoApi\CrmSD\StructType\ConnectionTypeDescDTO
     */
    public function setConnectionTypeId(?int $connectionTypeId = null): self
    {
        // validation for constraint: int
        if (!is_null($connectionTypeId) && !(is_int($connectionTypeId) || ctype_digit($connectionTypeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($connectionTypeId, true), gettype($connectionTypeId)), __LINE__);
        }
        $this->connectionTypeId = $connectionTypeId;
        
        return $this;
    }
    /**
     * Get cultureId value
     * @return string|null
     */
    public function getCultureId(): ?string
    {
        return $this->cultureId;
    }
    /**
     * Set cultureId value
     * @param string $cultureId
     * @return \Pggns\MidocoApi\CrmSD\StructType\ConnectionTypeDescDTO
     */
    public function setCultureId(?string $cultureId = null): self
    {
        // validation for constraint: string
        if (!is_null($cultureId) && !is_string($cultureId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cultureId, true), gettype($cultureId)), __LINE__);
        }
        $this->cultureId = $cultureId;
        
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Pggns\MidocoApi\CrmSD\StructType\ConnectionTypeDescDTO
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
}
