<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoDbiDefs StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoDbiDefs extends DbiDefDTO
{
    /**
     * The creationUserName
     * @var string|null
     */
    protected ?string $creationUserName = null;
    /**
     * The modifyUserName
     * @var string|null
     */
    protected ?string $modifyUserName = null;
    /**
     * Constructor method for MidocoDbiDefs
     * @uses MidocoDbiDefs::setCreationUserName()
     * @uses MidocoDbiDefs::setModifyUserName()
     * @param string $creationUserName
     * @param string $modifyUserName
     */
    public function __construct(?string $creationUserName = null, ?string $modifyUserName = null)
    {
        $this
            ->setCreationUserName($creationUserName)
            ->setModifyUserName($modifyUserName);
    }
    /**
     * Get creationUserName value
     * @return string|null
     */
    public function getCreationUserName(): ?string
    {
        return $this->creationUserName;
    }
    /**
     * Set creationUserName value
     * @param string $creationUserName
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoDbiDefs
     */
    public function setCreationUserName(?string $creationUserName = null): self
    {
        // validation for constraint: string
        if (!is_null($creationUserName) && !is_string($creationUserName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationUserName, true), gettype($creationUserName)), __LINE__);
        }
        $this->creationUserName = $creationUserName;
        
        return $this;
    }
    /**
     * Get modifyUserName value
     * @return string|null
     */
    public function getModifyUserName(): ?string
    {
        return $this->modifyUserName;
    }
    /**
     * Set modifyUserName value
     * @param string $modifyUserName
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoDbiDefs
     */
    public function setModifyUserName(?string $modifyUserName = null): self
    {
        // validation for constraint: string
        if (!is_null($modifyUserName) && !is_string($modifyUserName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modifyUserName, true), gettype($modifyUserName)), __LINE__);
        }
        $this->modifyUserName = $modifyUserName;
        
        return $this;
    }
}
