<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveExternDocumentResponse StructType
 * @subpackage Structs
 */
class SaveExternDocumentResponse extends AbstractStructBase
{
    /**
     * The id
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * The dontMail
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $dontMail = null;
    /**
     * Constructor method for SaveExternDocumentResponse
     * @uses SaveExternDocumentResponse::setId()
     * @uses SaveExternDocumentResponse::setDontMail()
     * @param int $id
     * @param bool $dontMail
     */
    public function __construct(?int $id = null, ?bool $dontMail = false)
    {
        $this
            ->setId($id)
            ->setDontMail($dontMail);
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
     * @return \Pggns\MidocoApi\Documents\StructType\SaveExternDocumentResponse
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
     * Get dontMail value
     * @return bool|null
     */
    public function getDontMail(): ?bool
    {
        return $this->dontMail;
    }
    /**
     * Set dontMail value
     * @param bool $dontMail
     * @return \Pggns\MidocoApi\Documents\StructType\SaveExternDocumentResponse
     */
    public function setDontMail(?bool $dontMail = false): self
    {
        // validation for constraint: boolean
        if (!is_null($dontMail) && !is_bool($dontMail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($dontMail, true), gettype($dontMail)), __LINE__);
        }
        $this->dontMail = $dontMail;
        
        return $this;
    }
}
