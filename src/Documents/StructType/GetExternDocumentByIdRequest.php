<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetExternDocumentByIdRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetExternDocumentByIdRequest extends AbstractStructBase
{
    /**
     * The id
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * The preferredAdapter
     * @var string|null
     */
    protected ?string $preferredAdapter = null;
    /**
     * Constructor method for GetExternDocumentByIdRequest
     * @uses GetExternDocumentByIdRequest::setId()
     * @uses GetExternDocumentByIdRequest::setPreferredAdapter()
     * @param int $id
     * @param string $preferredAdapter
     */
    public function __construct(?int $id = null, ?string $preferredAdapter = null)
    {
        $this
            ->setId($id)
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
     * @return \Pggns\MidocoApi\Documents\StructType\GetExternDocumentByIdRequest
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
     * @return \Pggns\MidocoApi\Documents\StructType\GetExternDocumentByIdRequest
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
