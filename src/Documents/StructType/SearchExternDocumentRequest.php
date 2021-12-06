<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchExternDocumentRequest StructType
 * @subpackage Structs
 */
class SearchExternDocumentRequest extends AbstractStructBase
{
    /**
     * The id
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The debitorNo
     * @var string|null
     */
    protected ?string $debitorNo = null;
    /**
     * The creationDateFrom
     * @var string|null
     */
    protected ?string $creationDateFrom = null;
    /**
     * The creationDateTo
     * @var string|null
     */
    protected ?string $creationDateTo = null;
    /**
     * The preferredAdapter
     * @var string|null
     */
    protected ?string $preferredAdapter = null;
    /**
     * Constructor method for SearchExternDocumentRequest
     * @uses SearchExternDocumentRequest::setId()
     * @uses SearchExternDocumentRequest::setUnitName()
     * @uses SearchExternDocumentRequest::setDebitorNo()
     * @uses SearchExternDocumentRequest::setCreationDateFrom()
     * @uses SearchExternDocumentRequest::setCreationDateTo()
     * @uses SearchExternDocumentRequest::setPreferredAdapter()
     * @param int $id
     * @param string $unitName
     * @param string $debitorNo
     * @param string $creationDateFrom
     * @param string $creationDateTo
     * @param string $preferredAdapter
     */
    public function __construct(?int $id = null, ?string $unitName = null, ?string $debitorNo = null, ?string $creationDateFrom = null, ?string $creationDateTo = null, ?string $preferredAdapter = null)
    {
        $this
            ->setId($id)
            ->setUnitName($unitName)
            ->setDebitorNo($debitorNo)
            ->setCreationDateFrom($creationDateFrom)
            ->setCreationDateTo($creationDateTo)
            ->setPreferredAdapter($preferredAdapter);
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \Pggns\MidocoApi\Documents\StructType\SearchExternDocumentRequest
     */
    public function setId(?int $id = null): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Documents\StructType\SearchExternDocumentRequest
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
    /**
     * Get debitorNo value
     * @return string|null
     */
    public function getDebitorNo(): ?string
    {
        return $this->debitorNo;
    }
    /**
     * Set debitorNo value
     * @param string $debitorNo
     * @return \Pggns\MidocoApi\Documents\StructType\SearchExternDocumentRequest
     */
    public function setDebitorNo(?string $debitorNo = null): self
    {
        // validation for constraint: string
        if (!is_null($debitorNo) && !is_string($debitorNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($debitorNo, true), gettype($debitorNo)), __LINE__);
        }
        $this->debitorNo = $debitorNo;
        
        return $this;
    }
    /**
     * Get creationDateFrom value
     * @return string|null
     */
    public function getCreationDateFrom(): ?string
    {
        return $this->creationDateFrom;
    }
    /**
     * Set creationDateFrom value
     * @param string $creationDateFrom
     * @return \Pggns\MidocoApi\Documents\StructType\SearchExternDocumentRequest
     */
    public function setCreationDateFrom(?string $creationDateFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDateFrom) && !is_string($creationDateFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDateFrom, true), gettype($creationDateFrom)), __LINE__);
        }
        $this->creationDateFrom = $creationDateFrom;
        
        return $this;
    }
    /**
     * Get creationDateTo value
     * @return string|null
     */
    public function getCreationDateTo(): ?string
    {
        return $this->creationDateTo;
    }
    /**
     * Set creationDateTo value
     * @param string $creationDateTo
     * @return \Pggns\MidocoApi\Documents\StructType\SearchExternDocumentRequest
     */
    public function setCreationDateTo(?string $creationDateTo = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDateTo) && !is_string($creationDateTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDateTo, true), gettype($creationDateTo)), __LINE__);
        }
        $this->creationDateTo = $creationDateTo;
        
        return $this;
    }
    /**
     * Get preferredAdapter value
     * @return string|null
     */
    public function getPreferredAdapter(): ?string
    {
        return $this->preferredAdapter;
    }
    /**
     * Set preferredAdapter value
     * @param string $preferredAdapter
     * @return \Pggns\MidocoApi\Documents\StructType\SearchExternDocumentRequest
     */
    public function setPreferredAdapter(?string $preferredAdapter = null): self
    {
        // validation for constraint: string
        if (!is_null($preferredAdapter) && !is_string($preferredAdapter)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($preferredAdapter, true), gettype($preferredAdapter)), __LINE__);
        }
        $this->preferredAdapter = $preferredAdapter;
        
        return $this;
    }
}
