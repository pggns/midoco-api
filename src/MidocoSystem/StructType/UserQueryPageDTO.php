<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserQueryPageDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UserQueryPageDTO extends AbstractStructBase
{
    /**
     * The pageContent
     * @var string|null
     */
    protected ?string $pageContent = null;
    /**
     * The pageNo
     * @var int|null
     */
    protected ?int $pageNo = null;
    /**
     * The queryId
     * @var int|null
     */
    protected ?int $queryId = null;
    /**
     * Constructor method for UserQueryPageDTO
     * @uses UserQueryPageDTO::setPageContent()
     * @uses UserQueryPageDTO::setPageNo()
     * @uses UserQueryPageDTO::setQueryId()
     * @param string $pageContent
     * @param int $pageNo
     * @param int $queryId
     */
    public function __construct(?string $pageContent = null, ?int $pageNo = null, ?int $queryId = null)
    {
        $this
            ->setPageContent($pageContent)
            ->setPageNo($pageNo)
            ->setQueryId($queryId);
    }
    /**
     * Get pageContent value
     * @return string|null
     */
    public function getPageContent(): ?string
    {
        return $this->pageContent;
    }
    /**
     * Set pageContent value
     * @param string $pageContent
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\UserQueryPageDTO
     */
    public function setPageContent(?string $pageContent = null): self
    {
        // validation for constraint: string
        if (!is_null($pageContent) && !is_string($pageContent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pageContent, true), gettype($pageContent)), __LINE__);
        }
        $this->pageContent = $pageContent;
        
        return $this;
    }
    /**
     * Get pageNo value
     * @return int|null
     */
    public function getPageNo(): ?int
    {
        return $this->pageNo;
    }
    /**
     * Set pageNo value
     * @param int $pageNo
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\UserQueryPageDTO
     */
    public function setPageNo(?int $pageNo = null): self
    {
        // validation for constraint: int
        if (!is_null($pageNo) && !(is_int($pageNo) || ctype_digit($pageNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pageNo, true), gettype($pageNo)), __LINE__);
        }
        $this->pageNo = $pageNo;
        
        return $this;
    }
    /**
     * Get queryId value
     * @return int|null
     */
    public function getQueryId(): ?int
    {
        return $this->queryId;
    }
    /**
     * Set queryId value
     * @param int $queryId
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\UserQueryPageDTO
     */
    public function setQueryId(?int $queryId = null): self
    {
        // validation for constraint: int
        if (!is_null($queryId) && !(is_int($queryId) || ctype_digit($queryId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($queryId, true), gettype($queryId)), __LINE__);
        }
        $this->queryId = $queryId;
        
        return $this;
    }
}
