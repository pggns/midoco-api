<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserChangesListRequest StructType
 * @subpackage Structs
 */
class UserChangesListRequest extends AbstractStructBase
{
    /**
     * The MidocoUserChangesListCriteria
     * Meta information extracted from the WSDL
     * - ref: MidocoUserChangesListCriteria
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoUserChangesListCriteriaType|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoUserChangesListCriteriaType $MidocoUserChangesListCriteria = null;
    /**
     * The maxReturned
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $maxReturned = null;
    /**
     * Constructor method for UserChangesListRequest
     * @uses UserChangesListRequest::setMidocoUserChangesListCriteria()
     * @uses UserChangesListRequest::setMaxReturned()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoUserChangesListCriteriaType $midocoUserChangesListCriteria
     * @param int $maxReturned
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoUserChangesListCriteriaType $midocoUserChangesListCriteria = null, ?int $maxReturned = null)
    {
        $this
            ->setMidocoUserChangesListCriteria($midocoUserChangesListCriteria)
            ->setMaxReturned($maxReturned);
    }
    /**
     * Get MidocoUserChangesListCriteria value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoUserChangesListCriteriaType|null
     */
    public function getMidocoUserChangesListCriteria(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoUserChangesListCriteriaType
    {
        return $this->MidocoUserChangesListCriteria;
    }
    /**
     * Set MidocoUserChangesListCriteria value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoUserChangesListCriteriaType $midocoUserChangesListCriteria
     * @return \Pggns\MidocoApi\Orderlists\StructType\UserChangesListRequest
     */
    public function setMidocoUserChangesListCriteria(?\Pggns\MidocoApi\Orderlists\StructType\MidocoUserChangesListCriteriaType $midocoUserChangesListCriteria = null): self
    {
        $this->MidocoUserChangesListCriteria = $midocoUserChangesListCriteria;
        
        return $this;
    }
    /**
     * Get maxReturned value
     * @return int|null
     */
    public function getMaxReturned(): ?int
    {
        return $this->maxReturned;
    }
    /**
     * Set maxReturned value
     * @param int $maxReturned
     * @return \Pggns\MidocoApi\Orderlists\StructType\UserChangesListRequest
     */
    public function setMaxReturned(?int $maxReturned = null): self
    {
        // validation for constraint: int
        if (!is_null($maxReturned) && !(is_int($maxReturned) || ctype_digit($maxReturned))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxReturned, true), gettype($maxReturned)), __LINE__);
        }
        $this->maxReturned = $maxReturned;
        
        return $this;
    }
}
