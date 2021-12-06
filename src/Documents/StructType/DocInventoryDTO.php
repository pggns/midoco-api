<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DocInventoryDTO StructType
 * @subpackage Structs
 */
class DocInventoryDTO extends AbstractStructBase
{
    /**
     * The repoIdMax
     * @var int|null
     */
    protected ?int $repoIdMax = null;
    /**
     * The repoIdMin
     * @var int|null
     */
    protected ?int $repoIdMin = null;
    /**
     * The tablenameDoc
     * @var string|null
     */
    protected ?string $tablenameDoc = null;
    /**
     * The tablenameDocext
     * @var string|null
     */
    protected ?string $tablenameDocext = null;
    /**
     * Constructor method for DocInventoryDTO
     * @uses DocInventoryDTO::setRepoIdMax()
     * @uses DocInventoryDTO::setRepoIdMin()
     * @uses DocInventoryDTO::setTablenameDoc()
     * @uses DocInventoryDTO::setTablenameDocext()
     * @param int $repoIdMax
     * @param int $repoIdMin
     * @param string $tablenameDoc
     * @param string $tablenameDocext
     */
    public function __construct(?int $repoIdMax = null, ?int $repoIdMin = null, ?string $tablenameDoc = null, ?string $tablenameDocext = null)
    {
        $this
            ->setRepoIdMax($repoIdMax)
            ->setRepoIdMin($repoIdMin)
            ->setTablenameDoc($tablenameDoc)
            ->setTablenameDocext($tablenameDocext);
    }
    /**
     * Get repoIdMax value
     * @return int|null
     */
    public function getRepoIdMax(): ?int
    {
        return $this->repoIdMax;
    }
    /**
     * Set repoIdMax value
     * @param int $repoIdMax
     * @return \Pggns\MidocoApi\Documents\StructType\DocInventoryDTO
     */
    public function setRepoIdMax(?int $repoIdMax = null): self
    {
        // validation for constraint: int
        if (!is_null($repoIdMax) && !(is_int($repoIdMax) || ctype_digit($repoIdMax))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($repoIdMax, true), gettype($repoIdMax)), __LINE__);
        }
        $this->repoIdMax = $repoIdMax;
        
        return $this;
    }
    /**
     * Get repoIdMin value
     * @return int|null
     */
    public function getRepoIdMin(): ?int
    {
        return $this->repoIdMin;
    }
    /**
     * Set repoIdMin value
     * @param int $repoIdMin
     * @return \Pggns\MidocoApi\Documents\StructType\DocInventoryDTO
     */
    public function setRepoIdMin(?int $repoIdMin = null): self
    {
        // validation for constraint: int
        if (!is_null($repoIdMin) && !(is_int($repoIdMin) || ctype_digit($repoIdMin))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($repoIdMin, true), gettype($repoIdMin)), __LINE__);
        }
        $this->repoIdMin = $repoIdMin;
        
        return $this;
    }
    /**
     * Get tablenameDoc value
     * @return string|null
     */
    public function getTablenameDoc(): ?string
    {
        return $this->tablenameDoc;
    }
    /**
     * Set tablenameDoc value
     * @param string $tablenameDoc
     * @return \Pggns\MidocoApi\Documents\StructType\DocInventoryDTO
     */
    public function setTablenameDoc(?string $tablenameDoc = null): self
    {
        // validation for constraint: string
        if (!is_null($tablenameDoc) && !is_string($tablenameDoc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tablenameDoc, true), gettype($tablenameDoc)), __LINE__);
        }
        $this->tablenameDoc = $tablenameDoc;
        
        return $this;
    }
    /**
     * Get tablenameDocext value
     * @return string|null
     */
    public function getTablenameDocext(): ?string
    {
        return $this->tablenameDocext;
    }
    /**
     * Set tablenameDocext value
     * @param string $tablenameDocext
     * @return \Pggns\MidocoApi\Documents\StructType\DocInventoryDTO
     */
    public function setTablenameDocext(?string $tablenameDocext = null): self
    {
        // validation for constraint: string
        if (!is_null($tablenameDocext) && !is_string($tablenameDocext)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tablenameDocext, true), gettype($tablenameDocext)), __LINE__);
        }
        $this->tablenameDocext = $tablenameDocext;
        
        return $this;
    }
}
