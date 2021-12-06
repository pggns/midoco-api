<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderglobalSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDbiDefinitionRequest StructType
 * @subpackage Structs
 */
class GetDbiDefinitionRequest extends AbstractStructBase
{
    /**
     * The MidocoDbiCcInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: mail:MidocoDbiCcInfo
     * @var \Pggns\MidocoApi\OrderglobalSD\StructType\MidocoDbiCcInfo|null
     */
    protected ?\Pggns\MidocoApi\OrderglobalSD\StructType\MidocoDbiCcInfo $MidocoDbiCcInfo = null;
    /**
     * The emailIfNew
     * Meta information extracted from the WSDL
     * - default: true
     * @var bool|null
     */
    protected ?bool $emailIfNew = null;
    /**
     * The publisherId
     * @var string|null
     */
    protected ?string $publisherId = null;
    /**
     * The dbiItemType
     * @var string|null
     */
    protected ?string $dbiItemType = null;
    /**
     * Constructor method for GetDbiDefinitionRequest
     * @uses GetDbiDefinitionRequest::setMidocoDbiCcInfo()
     * @uses GetDbiDefinitionRequest::setEmailIfNew()
     * @uses GetDbiDefinitionRequest::setPublisherId()
     * @uses GetDbiDefinitionRequest::setDbiItemType()
     * @param \Pggns\MidocoApi\OrderglobalSD\StructType\MidocoDbiCcInfo $midocoDbiCcInfo
     * @param bool $emailIfNew
     * @param string $publisherId
     * @param string $dbiItemType
     */
    public function __construct(?\Pggns\MidocoApi\OrderglobalSD\StructType\MidocoDbiCcInfo $midocoDbiCcInfo = null, ?bool $emailIfNew = true, ?string $publisherId = null, ?string $dbiItemType = null)
    {
        $this
            ->setMidocoDbiCcInfo($midocoDbiCcInfo)
            ->setEmailIfNew($emailIfNew)
            ->setPublisherId($publisherId)
            ->setDbiItemType($dbiItemType);
    }
    /**
     * Get MidocoDbiCcInfo value
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\MidocoDbiCcInfo|null
     */
    public function getMidocoDbiCcInfo(): ?\Pggns\MidocoApi\OrderglobalSD\StructType\MidocoDbiCcInfo
    {
        return $this->MidocoDbiCcInfo;
    }
    /**
     * Set MidocoDbiCcInfo value
     * @param \Pggns\MidocoApi\OrderglobalSD\StructType\MidocoDbiCcInfo $midocoDbiCcInfo
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\GetDbiDefinitionRequest
     */
    public function setMidocoDbiCcInfo(?\Pggns\MidocoApi\OrderglobalSD\StructType\MidocoDbiCcInfo $midocoDbiCcInfo = null): self
    {
        $this->MidocoDbiCcInfo = $midocoDbiCcInfo;
        
        return $this;
    }
    /**
     * Get emailIfNew value
     * @return bool|null
     */
    public function getEmailIfNew(): ?bool
    {
        return $this->emailIfNew;
    }
    /**
     * Set emailIfNew value
     * @param bool $emailIfNew
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\GetDbiDefinitionRequest
     */
    public function setEmailIfNew(?bool $emailIfNew = true): self
    {
        // validation for constraint: boolean
        if (!is_null($emailIfNew) && !is_bool($emailIfNew)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($emailIfNew, true), gettype($emailIfNew)), __LINE__);
        }
        $this->emailIfNew = $emailIfNew;
        
        return $this;
    }
    /**
     * Get publisherId value
     * @return string|null
     */
    public function getPublisherId(): ?string
    {
        return $this->publisherId;
    }
    /**
     * Set publisherId value
     * @param string $publisherId
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\GetDbiDefinitionRequest
     */
    public function setPublisherId(?string $publisherId = null): self
    {
        // validation for constraint: string
        if (!is_null($publisherId) && !is_string($publisherId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($publisherId, true), gettype($publisherId)), __LINE__);
        }
        $this->publisherId = $publisherId;
        
        return $this;
    }
    /**
     * Get dbiItemType value
     * @return string|null
     */
    public function getDbiItemType(): ?string
    {
        return $this->dbiItemType;
    }
    /**
     * Set dbiItemType value
     * @param string $dbiItemType
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\GetDbiDefinitionRequest
     */
    public function setDbiItemType(?string $dbiItemType = null): self
    {
        // validation for constraint: string
        if (!is_null($dbiItemType) && !is_string($dbiItemType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dbiItemType, true), gettype($dbiItemType)), __LINE__);
        }
        $this->dbiItemType = $dbiItemType;
        
        return $this;
    }
}
