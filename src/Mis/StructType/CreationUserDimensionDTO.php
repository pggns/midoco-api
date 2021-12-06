<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreationUserDimensionDTO StructType
 * @subpackage Structs
 */
class CreationUserDimensionDTO extends AbstractStructBase
{
    /**
     * The creationUserId
     * @var int|null
     */
    protected ?int $creationUserId = null;
    /**
     * The forename
     * @var string|null
     */
    protected ?string $forename = null;
    /**
     * The locked
     * @var bool|null
     */
    protected ?bool $locked = null;
    /**
     * The midocoCreationUserId
     * @var int|null
     */
    protected ?int $midocoCreationUserId = null;
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The userLogin
     * @var string|null
     */
    protected ?string $userLogin = null;
    /**
     * Constructor method for CreationUserDimensionDTO
     * @uses CreationUserDimensionDTO::setCreationUserId()
     * @uses CreationUserDimensionDTO::setForename()
     * @uses CreationUserDimensionDTO::setLocked()
     * @uses CreationUserDimensionDTO::setMidocoCreationUserId()
     * @uses CreationUserDimensionDTO::setName()
     * @uses CreationUserDimensionDTO::setUserLogin()
     * @param int $creationUserId
     * @param string $forename
     * @param bool $locked
     * @param int $midocoCreationUserId
     * @param string $name
     * @param string $userLogin
     */
    public function __construct(?int $creationUserId = null, ?string $forename = null, ?bool $locked = null, ?int $midocoCreationUserId = null, ?string $name = null, ?string $userLogin = null)
    {
        $this
            ->setCreationUserId($creationUserId)
            ->setForename($forename)
            ->setLocked($locked)
            ->setMidocoCreationUserId($midocoCreationUserId)
            ->setName($name)
            ->setUserLogin($userLogin);
    }
    /**
     * Get creationUserId value
     * @return int|null
     */
    public function getCreationUserId(): ?int
    {
        return $this->creationUserId;
    }
    /**
     * Set creationUserId value
     * @param int $creationUserId
     * @return \Pggns\MidocoApi\Mis\StructType\CreationUserDimensionDTO
     */
    public function setCreationUserId(?int $creationUserId = null): self
    {
        // validation for constraint: int
        if (!is_null($creationUserId) && !(is_int($creationUserId) || ctype_digit($creationUserId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($creationUserId, true), gettype($creationUserId)), __LINE__);
        }
        $this->creationUserId = $creationUserId;
        
        return $this;
    }
    /**
     * Get forename value
     * @return string|null
     */
    public function getForename(): ?string
    {
        return $this->forename;
    }
    /**
     * Set forename value
     * @param string $forename
     * @return \Pggns\MidocoApi\Mis\StructType\CreationUserDimensionDTO
     */
    public function setForename(?string $forename = null): self
    {
        // validation for constraint: string
        if (!is_null($forename) && !is_string($forename)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($forename, true), gettype($forename)), __LINE__);
        }
        $this->forename = $forename;
        
        return $this;
    }
    /**
     * Get locked value
     * @return bool|null
     */
    public function getLocked(): ?bool
    {
        return $this->locked;
    }
    /**
     * Set locked value
     * @param bool $locked
     * @return \Pggns\MidocoApi\Mis\StructType\CreationUserDimensionDTO
     */
    public function setLocked(?bool $locked = null): self
    {
        // validation for constraint: boolean
        if (!is_null($locked) && !is_bool($locked)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($locked, true), gettype($locked)), __LINE__);
        }
        $this->locked = $locked;
        
        return $this;
    }
    /**
     * Get midocoCreationUserId value
     * @return int|null
     */
    public function getMidocoCreationUserId(): ?int
    {
        return $this->midocoCreationUserId;
    }
    /**
     * Set midocoCreationUserId value
     * @param int $midocoCreationUserId
     * @return \Pggns\MidocoApi\Mis\StructType\CreationUserDimensionDTO
     */
    public function setMidocoCreationUserId(?int $midocoCreationUserId = null): self
    {
        // validation for constraint: int
        if (!is_null($midocoCreationUserId) && !(is_int($midocoCreationUserId) || ctype_digit($midocoCreationUserId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($midocoCreationUserId, true), gettype($midocoCreationUserId)), __LINE__);
        }
        $this->midocoCreationUserId = $midocoCreationUserId;
        
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Pggns\MidocoApi\Mis\StructType\CreationUserDimensionDTO
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        
        return $this;
    }
    /**
     * Get userLogin value
     * @return string|null
     */
    public function getUserLogin(): ?string
    {
        return $this->userLogin;
    }
    /**
     * Set userLogin value
     * @param string $userLogin
     * @return \Pggns\MidocoApi\Mis\StructType\CreationUserDimensionDTO
     */
    public function setUserLogin(?string $userLogin = null): self
    {
        // validation for constraint: string
        if (!is_null($userLogin) && !is_string($userLogin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userLogin, true), gettype($userLogin)), __LINE__);
        }
        $this->userLogin = $userLogin;
        
        return $this;
    }
}
