<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for JournalExportDTO StructType
 * @subpackage Structs
 */
class JournalExportDTO extends AbstractStructBase
{
    /**
     * The checksum
     * @var int|null
     */
    protected ?int $checksum = null;
    /**
     * The comments
     * @var string|null
     */
    protected ?string $comments = null;
    /**
     * The exportDate
     * @var string|null
     */
    protected ?string $exportDate = null;
    /**
     * The exportId
     * @var int|null
     */
    protected ?int $exportId = null;
    /**
     * The exportUser
     * @var int|null
     */
    protected ?int $exportUser = null;
    /**
     * The numberOfRows
     * @var int|null
     */
    protected ?int $numberOfRows = null;
    /**
     * The repositoryId
     * @var int|null
     */
    protected ?int $repositoryId = null;
    /**
     * Constructor method for JournalExportDTO
     * @uses JournalExportDTO::setChecksum()
     * @uses JournalExportDTO::setComments()
     * @uses JournalExportDTO::setExportDate()
     * @uses JournalExportDTO::setExportId()
     * @uses JournalExportDTO::setExportUser()
     * @uses JournalExportDTO::setNumberOfRows()
     * @uses JournalExportDTO::setRepositoryId()
     * @param int $checksum
     * @param string $comments
     * @param string $exportDate
     * @param int $exportId
     * @param int $exportUser
     * @param int $numberOfRows
     * @param int $repositoryId
     */
    public function __construct(?int $checksum = null, ?string $comments = null, ?string $exportDate = null, ?int $exportId = null, ?int $exportUser = null, ?int $numberOfRows = null, ?int $repositoryId = null)
    {
        $this
            ->setChecksum($checksum)
            ->setComments($comments)
            ->setExportDate($exportDate)
            ->setExportId($exportId)
            ->setExportUser($exportUser)
            ->setNumberOfRows($numberOfRows)
            ->setRepositoryId($repositoryId);
    }
    /**
     * Get checksum value
     * @return int|null
     */
    public function getChecksum(): ?int
    {
        return $this->checksum;
    }
    /**
     * Set checksum value
     * @param int $checksum
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\JournalExportDTO
     */
    public function setChecksum(?int $checksum = null): self
    {
        // validation for constraint: int
        if (!is_null($checksum) && !(is_int($checksum) || ctype_digit($checksum))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($checksum, true), gettype($checksum)), __LINE__);
        }
        $this->checksum = $checksum;
        
        return $this;
    }
    /**
     * Get comments value
     * @return string|null
     */
    public function getComments(): ?string
    {
        return $this->comments;
    }
    /**
     * Set comments value
     * @param string $comments
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\JournalExportDTO
     */
    public function setComments(?string $comments = null): self
    {
        // validation for constraint: string
        if (!is_null($comments) && !is_string($comments)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comments, true), gettype($comments)), __LINE__);
        }
        $this->comments = $comments;
        
        return $this;
    }
    /**
     * Get exportDate value
     * @return string|null
     */
    public function getExportDate(): ?string
    {
        return $this->exportDate;
    }
    /**
     * Set exportDate value
     * @param string $exportDate
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\JournalExportDTO
     */
    public function setExportDate(?string $exportDate = null): self
    {
        // validation for constraint: string
        if (!is_null($exportDate) && !is_string($exportDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exportDate, true), gettype($exportDate)), __LINE__);
        }
        $this->exportDate = $exportDate;
        
        return $this;
    }
    /**
     * Get exportId value
     * @return int|null
     */
    public function getExportId(): ?int
    {
        return $this->exportId;
    }
    /**
     * Set exportId value
     * @param int $exportId
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\JournalExportDTO
     */
    public function setExportId(?int $exportId = null): self
    {
        // validation for constraint: int
        if (!is_null($exportId) && !(is_int($exportId) || ctype_digit($exportId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($exportId, true), gettype($exportId)), __LINE__);
        }
        $this->exportId = $exportId;
        
        return $this;
    }
    /**
     * Get exportUser value
     * @return int|null
     */
    public function getExportUser(): ?int
    {
        return $this->exportUser;
    }
    /**
     * Set exportUser value
     * @param int $exportUser
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\JournalExportDTO
     */
    public function setExportUser(?int $exportUser = null): self
    {
        // validation for constraint: int
        if (!is_null($exportUser) && !(is_int($exportUser) || ctype_digit($exportUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($exportUser, true), gettype($exportUser)), __LINE__);
        }
        $this->exportUser = $exportUser;
        
        return $this;
    }
    /**
     * Get numberOfRows value
     * @return int|null
     */
    public function getNumberOfRows(): ?int
    {
        return $this->numberOfRows;
    }
    /**
     * Set numberOfRows value
     * @param int $numberOfRows
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\JournalExportDTO
     */
    public function setNumberOfRows(?int $numberOfRows = null): self
    {
        // validation for constraint: int
        if (!is_null($numberOfRows) && !(is_int($numberOfRows) || ctype_digit($numberOfRows))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfRows, true), gettype($numberOfRows)), __LINE__);
        }
        $this->numberOfRows = $numberOfRows;
        
        return $this;
    }
    /**
     * Get repositoryId value
     * @return int|null
     */
    public function getRepositoryId(): ?int
    {
        return $this->repositoryId;
    }
    /**
     * Set repositoryId value
     * @param int $repositoryId
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\JournalExportDTO
     */
    public function setRepositoryId(?int $repositoryId = null): self
    {
        // validation for constraint: int
        if (!is_null($repositoryId) && !(is_int($repositoryId) || ctype_digit($repositoryId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($repositoryId, true), gettype($repositoryId)), __LINE__);
        }
        $this->repositoryId = $repositoryId;
        
        return $this;
    }
}
