<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateExternDocumentDescRequest StructType
 * @subpackage Structs
 */
class UpdateExternDocumentDescRequest extends AbstractStructBase
{
    /**
     * The id
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * The MidocoMailMessage
     * Meta information extracted from the WSDL
     * - ref: mail:MidocoMailMessage
     * @var \Pggns\MidocoApi\Api\Documents\StructType\MidocoMailMessageType|null
     */
    protected ?\Pggns\MidocoApi\Api\Documents\StructType\MidocoMailMessageType $MidocoMailMessage = null;
    /**
     * The MidocoExtDocumentDesc
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoExtDocumentDesc
     * @var \Pggns\MidocoApi\Api\Documents\StructType\MidocoExtDocumentDesc|null
     */
    protected ?\Pggns\MidocoApi\Api\Documents\StructType\MidocoExtDocumentDesc $MidocoExtDocumentDesc = null;
    /**
     * The preferredAdapter
     * @var string|null
     */
    protected ?string $preferredAdapter = null;
    /**
     * Constructor method for UpdateExternDocumentDescRequest
     * @uses UpdateExternDocumentDescRequest::setId()
     * @uses UpdateExternDocumentDescRequest::setMidocoMailMessage()
     * @uses UpdateExternDocumentDescRequest::setMidocoExtDocumentDesc()
     * @uses UpdateExternDocumentDescRequest::setPreferredAdapter()
     * @param int $id
     * @param \Pggns\MidocoApi\Api\Documents\StructType\MidocoMailMessageType $midocoMailMessage
     * @param \Pggns\MidocoApi\Api\Documents\StructType\MidocoExtDocumentDesc $midocoExtDocumentDesc
     * @param string $preferredAdapter
     */
    public function __construct(?int $id = null, ?\Pggns\MidocoApi\Api\Documents\StructType\MidocoMailMessageType $midocoMailMessage = null, ?\Pggns\MidocoApi\Api\Documents\StructType\MidocoExtDocumentDesc $midocoExtDocumentDesc = null, ?string $preferredAdapter = null)
    {
        $this
            ->setId($id)
            ->setMidocoMailMessage($midocoMailMessage)
            ->setMidocoExtDocumentDesc($midocoExtDocumentDesc)
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
     * @return \Pggns\MidocoApi\Api\Documents\StructType\UpdateExternDocumentDescRequest
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
     * Get MidocoMailMessage value
     * @return \Pggns\MidocoApi\Api\Documents\StructType\MidocoMailMessageType|null
     */
    public function getMidocoMailMessage(): ?\Pggns\MidocoApi\Api\Documents\StructType\MidocoMailMessageType
    {
        return $this->MidocoMailMessage;
    }
    /**
     * Set MidocoMailMessage value
     * @param \Pggns\MidocoApi\Api\Documents\StructType\MidocoMailMessageType $midocoMailMessage
     * @return \Pggns\MidocoApi\Api\Documents\StructType\UpdateExternDocumentDescRequest
     */
    public function setMidocoMailMessage(?\Pggns\MidocoApi\Api\Documents\StructType\MidocoMailMessageType $midocoMailMessage = null): self
    {
        $this->MidocoMailMessage = $midocoMailMessage;
        
        return $this;
    }
    /**
     * Get MidocoExtDocumentDesc value
     * @return \Pggns\MidocoApi\Api\Documents\StructType\MidocoExtDocumentDesc|null
     */
    public function getMidocoExtDocumentDesc(): ?\Pggns\MidocoApi\Api\Documents\StructType\MidocoExtDocumentDesc
    {
        return $this->MidocoExtDocumentDesc;
    }
    /**
     * Set MidocoExtDocumentDesc value
     * @param \Pggns\MidocoApi\Api\Documents\StructType\MidocoExtDocumentDesc $midocoExtDocumentDesc
     * @return \Pggns\MidocoApi\Api\Documents\StructType\UpdateExternDocumentDescRequest
     */
    public function setMidocoExtDocumentDesc(?\Pggns\MidocoApi\Api\Documents\StructType\MidocoExtDocumentDesc $midocoExtDocumentDesc = null): self
    {
        $this->MidocoExtDocumentDesc = $midocoExtDocumentDesc;
        
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
     * @return \Pggns\MidocoApi\Api\Documents\StructType\UpdateExternDocumentDescRequest
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
