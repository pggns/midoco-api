<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SourceSystemDescriptionDTO StructType
 * @subpackage Structs
 */
class SourceSystemDescriptionDTO extends AbstractStructBase
{
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
     * The extSystem
     * @var string|null
     */
    protected ?string $extSystem = null;
    /**
     * The sourceSystemId
     * @var string|null
     */
    protected ?string $sourceSystemId = null;
    /**
     * Constructor method for SourceSystemDescriptionDTO
     * @uses SourceSystemDescriptionDTO::setCultureId()
     * @uses SourceSystemDescriptionDTO::setDescription()
     * @uses SourceSystemDescriptionDTO::setExtSystem()
     * @uses SourceSystemDescriptionDTO::setSourceSystemId()
     * @param string $cultureId
     * @param string $description
     * @param string $extSystem
     * @param string $sourceSystemId
     */
    public function __construct(?string $cultureId = null, ?string $description = null, ?string $extSystem = null, ?string $sourceSystemId = null)
    {
        $this
            ->setCultureId($cultureId)
            ->setDescription($description)
            ->setExtSystem($extSystem)
            ->setSourceSystemId($sourceSystemId);
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
     * @return \Pggns\MidocoApi\Documents\StructType\SourceSystemDescriptionDTO
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
     * @return \Pggns\MidocoApi\Documents\StructType\SourceSystemDescriptionDTO
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
    /**
     * Get extSystem value
     * @return string|null
     */
    public function getExtSystem(): ?string
    {
        return $this->extSystem;
    }
    /**
     * Set extSystem value
     * @param string $extSystem
     * @return \Pggns\MidocoApi\Documents\StructType\SourceSystemDescriptionDTO
     */
    public function setExtSystem(?string $extSystem = null): self
    {
        // validation for constraint: string
        if (!is_null($extSystem) && !is_string($extSystem)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($extSystem, true), gettype($extSystem)), __LINE__);
        }
        $this->extSystem = $extSystem;
        
        return $this;
    }
    /**
     * Get sourceSystemId value
     * @return string|null
     */
    public function getSourceSystemId(): ?string
    {
        return $this->sourceSystemId;
    }
    /**
     * Set sourceSystemId value
     * @param string $sourceSystemId
     * @return \Pggns\MidocoApi\Documents\StructType\SourceSystemDescriptionDTO
     */
    public function setSourceSystemId(?string $sourceSystemId = null): self
    {
        // validation for constraint: string
        if (!is_null($sourceSystemId) && !is_string($sourceSystemId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sourceSystemId, true), gettype($sourceSystemId)), __LINE__);
        }
        $this->sourceSystemId = $sourceSystemId;
        
        return $this;
    }
}
