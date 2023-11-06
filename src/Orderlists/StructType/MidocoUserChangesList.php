<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoUserChangesList StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoUserChangesList extends MidocoUserChangesListType
{
    /**
     * The adminName
     * @var string|null
     */
    protected ?string $adminName = null;
    /**
     * The userName
     * @var string|null
     */
    protected ?string $userName = null;
    /**
     * The event
     * @var string|null
     */
    protected ?string $event = null;
    /**
     * Constructor method for MidocoUserChangesList
     * @uses MidocoUserChangesList::setAdminName()
     * @uses MidocoUserChangesList::setUserName()
     * @uses MidocoUserChangesList::setEvent()
     * @param string $adminName
     * @param string $userName
     * @param string $event
     */
    public function __construct(?string $adminName = null, ?string $userName = null, ?string $event = null)
    {
        $this
            ->setAdminName($adminName)
            ->setUserName($userName)
            ->setEvent($event);
    }
    /**
     * Get adminName value
     * @return string|null
     */
    public function getAdminName(): ?string
    {
        return $this->adminName;
    }
    /**
     * Set adminName value
     * @param string $adminName
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoUserChangesList
     */
    public function setAdminName(?string $adminName = null): self
    {
        // validation for constraint: string
        if (!is_null($adminName) && !is_string($adminName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($adminName, true), gettype($adminName)), __LINE__);
        }
        $this->adminName = $adminName;
        
        return $this;
    }
    /**
     * Get userName value
     * @return string|null
     */
    public function getUserName(): ?string
    {
        return $this->userName;
    }
    /**
     * Set userName value
     * @param string $userName
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoUserChangesList
     */
    public function setUserName(?string $userName = null): self
    {
        // validation for constraint: string
        if (!is_null($userName) && !is_string($userName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userName, true), gettype($userName)), __LINE__);
        }
        $this->userName = $userName;
        
        return $this;
    }
    /**
     * Get event value
     * @return string|null
     */
    public function getEvent(): ?string
    {
        return $this->event;
    }
    /**
     * Set event value
     * @param string $event
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoUserChangesList
     */
    public function setEvent(?string $event = null): self
    {
        // validation for constraint: string
        if (!is_null($event) && !is_string($event)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($event, true), gettype($event)), __LINE__);
        }
        $this->event = $event;
        
        return $this;
    }
}
