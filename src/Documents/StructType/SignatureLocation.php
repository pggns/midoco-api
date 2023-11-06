<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SignatureLocation StructType
 * Meta information extracted from the WSDL
 * - documentation: Location of signature box page location (upper left) size of rect (width, height) values in cm and alternatively in coordinates cm offsets are calculated from 0,0 which is upper left corner coordinate offsets are calculated from 0,0
 * in points (1/72inch) which is lower left corner
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SignatureLocation extends AbstractStructBase
{
    /**
     * The page
     * @var int|null
     */
    protected ?int $page = null;
    /**
     * The locationX
     * @var float|null
     */
    protected ?float $locationX = null;
    /**
     * The locationY
     * @var float|null
     */
    protected ?float $locationY = null;
    /**
     * The locationXcm
     * @var float|null
     */
    protected ?float $locationXcm = null;
    /**
     * The locationYcm
     * @var float|null
     */
    protected ?float $locationYcm = null;
    /**
     * The width
     * @var float|null
     */
    protected ?float $width = null;
    /**
     * The height
     * @var float|null
     */
    protected ?float $height = null;
    /**
     * The widthcm
     * @var float|null
     */
    protected ?float $widthcm = null;
    /**
     * The heightcm
     * @var float|null
     */
    protected ?float $heightcm = null;
    /**
     * The phrase
     * @var string|null
     */
    protected ?string $phrase = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The optional
     * @var bool|null
     */
    protected ?bool $optional = null;
    /**
     * The signatureData
     * @var string|null
     */
    protected ?string $signatureData = null;
    /**
     * Constructor method for SignatureLocation
     * @uses SignatureLocation::setPage()
     * @uses SignatureLocation::setLocationX()
     * @uses SignatureLocation::setLocationY()
     * @uses SignatureLocation::setLocationXcm()
     * @uses SignatureLocation::setLocationYcm()
     * @uses SignatureLocation::setWidth()
     * @uses SignatureLocation::setHeight()
     * @uses SignatureLocation::setWidthcm()
     * @uses SignatureLocation::setHeightcm()
     * @uses SignatureLocation::setPhrase()
     * @uses SignatureLocation::setDescription()
     * @uses SignatureLocation::setOptional()
     * @uses SignatureLocation::setSignatureData()
     * @param int $page
     * @param float $locationX
     * @param float $locationY
     * @param float $locationXcm
     * @param float $locationYcm
     * @param float $width
     * @param float $height
     * @param float $widthcm
     * @param float $heightcm
     * @param string $phrase
     * @param string $description
     * @param bool $optional
     * @param string $signatureData
     */
    public function __construct(?int $page = null, ?float $locationX = null, ?float $locationY = null, ?float $locationXcm = null, ?float $locationYcm = null, ?float $width = null, ?float $height = null, ?float $widthcm = null, ?float $heightcm = null, ?string $phrase = null, ?string $description = null, ?bool $optional = null, ?string $signatureData = null)
    {
        $this
            ->setPage($page)
            ->setLocationX($locationX)
            ->setLocationY($locationY)
            ->setLocationXcm($locationXcm)
            ->setLocationYcm($locationYcm)
            ->setWidth($width)
            ->setHeight($height)
            ->setWidthcm($widthcm)
            ->setHeightcm($heightcm)
            ->setPhrase($phrase)
            ->setDescription($description)
            ->setOptional($optional)
            ->setSignatureData($signatureData);
    }
    /**
     * Get page value
     * @return int|null
     */
    public function getPage(): ?int
    {
        return $this->page;
    }
    /**
     * Set page value
     * @param int $page
     * @return \Pggns\MidocoApi\Documents\StructType\SignatureLocation
     */
    public function setPage(?int $page = null): self
    {
        // validation for constraint: int
        if (!is_null($page) && !(is_int($page) || ctype_digit($page))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($page, true), gettype($page)), __LINE__);
        }
        $this->page = $page;
        
        return $this;
    }
    /**
     * Get locationX value
     * @return float|null
     */
    public function getLocationX(): ?float
    {
        return $this->locationX;
    }
    /**
     * Set locationX value
     * @param float $locationX
     * @return \Pggns\MidocoApi\Documents\StructType\SignatureLocation
     */
    public function setLocationX(?float $locationX = null): self
    {
        // validation for constraint: float
        if (!is_null($locationX) && !(is_float($locationX) || is_numeric($locationX))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($locationX, true), gettype($locationX)), __LINE__);
        }
        $this->locationX = $locationX;
        
        return $this;
    }
    /**
     * Get locationY value
     * @return float|null
     */
    public function getLocationY(): ?float
    {
        return $this->locationY;
    }
    /**
     * Set locationY value
     * @param float $locationY
     * @return \Pggns\MidocoApi\Documents\StructType\SignatureLocation
     */
    public function setLocationY(?float $locationY = null): self
    {
        // validation for constraint: float
        if (!is_null($locationY) && !(is_float($locationY) || is_numeric($locationY))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($locationY, true), gettype($locationY)), __LINE__);
        }
        $this->locationY = $locationY;
        
        return $this;
    }
    /**
     * Get locationXcm value
     * @return float|null
     */
    public function getLocationXcm(): ?float
    {
        return $this->locationXcm;
    }
    /**
     * Set locationXcm value
     * @param float $locationXcm
     * @return \Pggns\MidocoApi\Documents\StructType\SignatureLocation
     */
    public function setLocationXcm(?float $locationXcm = null): self
    {
        // validation for constraint: float
        if (!is_null($locationXcm) && !(is_float($locationXcm) || is_numeric($locationXcm))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($locationXcm, true), gettype($locationXcm)), __LINE__);
        }
        $this->locationXcm = $locationXcm;
        
        return $this;
    }
    /**
     * Get locationYcm value
     * @return float|null
     */
    public function getLocationYcm(): ?float
    {
        return $this->locationYcm;
    }
    /**
     * Set locationYcm value
     * @param float $locationYcm
     * @return \Pggns\MidocoApi\Documents\StructType\SignatureLocation
     */
    public function setLocationYcm(?float $locationYcm = null): self
    {
        // validation for constraint: float
        if (!is_null($locationYcm) && !(is_float($locationYcm) || is_numeric($locationYcm))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($locationYcm, true), gettype($locationYcm)), __LINE__);
        }
        $this->locationYcm = $locationYcm;
        
        return $this;
    }
    /**
     * Get width value
     * @return float|null
     */
    public function getWidth(): ?float
    {
        return $this->width;
    }
    /**
     * Set width value
     * @param float $width
     * @return \Pggns\MidocoApi\Documents\StructType\SignatureLocation
     */
    public function setWidth(?float $width = null): self
    {
        // validation for constraint: float
        if (!is_null($width) && !(is_float($width) || is_numeric($width))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($width, true), gettype($width)), __LINE__);
        }
        $this->width = $width;
        
        return $this;
    }
    /**
     * Get height value
     * @return float|null
     */
    public function getHeight(): ?float
    {
        return $this->height;
    }
    /**
     * Set height value
     * @param float $height
     * @return \Pggns\MidocoApi\Documents\StructType\SignatureLocation
     */
    public function setHeight(?float $height = null): self
    {
        // validation for constraint: float
        if (!is_null($height) && !(is_float($height) || is_numeric($height))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($height, true), gettype($height)), __LINE__);
        }
        $this->height = $height;
        
        return $this;
    }
    /**
     * Get widthcm value
     * @return float|null
     */
    public function getWidthcm(): ?float
    {
        return $this->widthcm;
    }
    /**
     * Set widthcm value
     * @param float $widthcm
     * @return \Pggns\MidocoApi\Documents\StructType\SignatureLocation
     */
    public function setWidthcm(?float $widthcm = null): self
    {
        // validation for constraint: float
        if (!is_null($widthcm) && !(is_float($widthcm) || is_numeric($widthcm))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($widthcm, true), gettype($widthcm)), __LINE__);
        }
        $this->widthcm = $widthcm;
        
        return $this;
    }
    /**
     * Get heightcm value
     * @return float|null
     */
    public function getHeightcm(): ?float
    {
        return $this->heightcm;
    }
    /**
     * Set heightcm value
     * @param float $heightcm
     * @return \Pggns\MidocoApi\Documents\StructType\SignatureLocation
     */
    public function setHeightcm(?float $heightcm = null): self
    {
        // validation for constraint: float
        if (!is_null($heightcm) && !(is_float($heightcm) || is_numeric($heightcm))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($heightcm, true), gettype($heightcm)), __LINE__);
        }
        $this->heightcm = $heightcm;
        
        return $this;
    }
    /**
     * Get phrase value
     * @return string|null
     */
    public function getPhrase(): ?string
    {
        return $this->phrase;
    }
    /**
     * Set phrase value
     * @param string $phrase
     * @return \Pggns\MidocoApi\Documents\StructType\SignatureLocation
     */
    public function setPhrase(?string $phrase = null): self
    {
        // validation for constraint: string
        if (!is_null($phrase) && !is_string($phrase)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phrase, true), gettype($phrase)), __LINE__);
        }
        $this->phrase = $phrase;
        
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Pggns\MidocoApi\Documents\StructType\SignatureLocation
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
    /**
     * Get optional value
     * @return bool|null
     */
    public function getOptional(): ?bool
    {
        return $this->optional;
    }
    /**
     * Set optional value
     * @param bool $optional
     * @return \Pggns\MidocoApi\Documents\StructType\SignatureLocation
     */
    public function setOptional(?bool $optional = null): self
    {
        // validation for constraint: boolean
        if (!is_null($optional) && !is_bool($optional)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($optional, true), gettype($optional)), __LINE__);
        }
        $this->optional = $optional;
        
        return $this;
    }
    /**
     * Get signatureData value
     * @return string|null
     */
    public function getSignatureData(): ?string
    {
        return $this->signatureData;
    }
    /**
     * Set signatureData value
     * @param string $signatureData
     * @return \Pggns\MidocoApi\Documents\StructType\SignatureLocation
     */
    public function setSignatureData(?string $signatureData = null): self
    {
        // validation for constraint: string
        if (!is_null($signatureData) && !is_string($signatureData)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($signatureData, true), gettype($signatureData)), __LINE__);
        }
        $this->signatureData = $signatureData;
        
        return $this;
    }
}
