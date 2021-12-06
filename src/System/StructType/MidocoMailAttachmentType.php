<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\System\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoMailAttachmentType StructType
 * @subpackage Structs
 */
class MidocoMailAttachmentType extends AbstractStructBase
{
    /**
     * The Data
     * @var string|null
     */
    protected ?string $Data = null;
    /**
     * The Encoding
     * Meta information extracted from the WSDL
     * - default: UTF-8
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Encoding = null;
    /**
     * The FileName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FileName = null;
    /**
     * The AutoGenerated
     * Meta information extracted from the WSDL
     * - default: false
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $AutoGenerated = null;
    /**
     * The contentType
     * @var string|null
     */
    protected ?string $contentType = null;
    /**
     * Constructor method for MidocoMailAttachmentType
     * @uses MidocoMailAttachmentType::setData()
     * @uses MidocoMailAttachmentType::setEncoding()
     * @uses MidocoMailAttachmentType::setFileName()
     * @uses MidocoMailAttachmentType::setAutoGenerated()
     * @uses MidocoMailAttachmentType::setContentType()
     * @param string $data
     * @param string $encoding
     * @param string $fileName
     * @param bool $autoGenerated
     * @param string $contentType
     */
    public function __construct(?string $data = null, ?string $encoding = 'UTF-8', ?string $fileName = null, ?bool $autoGenerated = false, ?string $contentType = null)
    {
        $this
            ->setData($data)
            ->setEncoding($encoding)
            ->setFileName($fileName)
            ->setAutoGenerated($autoGenerated)
            ->setContentType($contentType);
    }
    /**
     * Get Data value
     * @return string|null
     */
    public function getData(): ?string
    {
        return $this->Data;
    }
    /**
     * Set Data value
     * @param string $data
     * @return \Pggns\MidocoApi\System\StructType\MidocoMailAttachmentType
     */
    public function setData(?string $data = null): self
    {
        // validation for constraint: string
        if (!is_null($data) && !is_string($data)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($data, true), gettype($data)), __LINE__);
        }
        $this->Data = $data;
        
        return $this;
    }
    /**
     * Get Encoding value
     * @return string|null
     */
    public function getEncoding(): ?string
    {
        return $this->Encoding;
    }
    /**
     * Set Encoding value
     * @param string $encoding
     * @return \Pggns\MidocoApi\System\StructType\MidocoMailAttachmentType
     */
    public function setEncoding(?string $encoding = 'UTF-8'): self
    {
        // validation for constraint: string
        if (!is_null($encoding) && !is_string($encoding)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($encoding, true), gettype($encoding)), __LINE__);
        }
        $this->Encoding = $encoding;
        
        return $this;
    }
    /**
     * Get FileName value
     * @return string|null
     */
    public function getFileName(): ?string
    {
        return $this->FileName;
    }
    /**
     * Set FileName value
     * @param string $fileName
     * @return \Pggns\MidocoApi\System\StructType\MidocoMailAttachmentType
     */
    public function setFileName(?string $fileName = null): self
    {
        // validation for constraint: string
        if (!is_null($fileName) && !is_string($fileName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fileName, true), gettype($fileName)), __LINE__);
        }
        $this->FileName = $fileName;
        
        return $this;
    }
    /**
     * Get AutoGenerated value
     * @return bool|null
     */
    public function getAutoGenerated(): ?bool
    {
        return $this->AutoGenerated;
    }
    /**
     * Set AutoGenerated value
     * @param bool $autoGenerated
     * @return \Pggns\MidocoApi\System\StructType\MidocoMailAttachmentType
     */
    public function setAutoGenerated(?bool $autoGenerated = false): self
    {
        // validation for constraint: boolean
        if (!is_null($autoGenerated) && !is_bool($autoGenerated)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($autoGenerated, true), gettype($autoGenerated)), __LINE__);
        }
        $this->AutoGenerated = $autoGenerated;
        
        return $this;
    }
    /**
     * Get contentType value
     * @return string|null
     */
    public function getContentType(): ?string
    {
        return $this->contentType;
    }
    /**
     * Set contentType value
     * @param string $contentType
     * @return \Pggns\MidocoApi\System\StructType\MidocoMailAttachmentType
     */
    public function setContentType(?string $contentType = null): self
    {
        // validation for constraint: string
        if (!is_null($contentType) && !is_string($contentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contentType, true), gettype($contentType)), __LINE__);
        }
        $this->contentType = $contentType;
        
        return $this;
    }
}
