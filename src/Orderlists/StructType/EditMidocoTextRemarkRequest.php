<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EditMidocoTextRemarkRequest StructType
 * @subpackage Structs
 */
class EditMidocoTextRemarkRequest extends AbstractStructBase
{
    /**
     * The MidocoTextRemark
     * Meta information extracted from the WSDL
     * - ref: MidocoTextRemark
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoTextRemark|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoTextRemark $MidocoTextRemark = null;
    /**
     * The cultureId
     * @var string|null
     */
    protected ?string $cultureId = null;
    /**
     * The shortId
     * @var string|null
     */
    protected ?string $shortId = null;
    /**
     * Constructor method for EditMidocoTextRemarkRequest
     * @uses EditMidocoTextRemarkRequest::setMidocoTextRemark()
     * @uses EditMidocoTextRemarkRequest::setCultureId()
     * @uses EditMidocoTextRemarkRequest::setShortId()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoTextRemark $midocoTextRemark
     * @param string $cultureId
     * @param string $shortId
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoTextRemark $midocoTextRemark = null, ?string $cultureId = null, ?string $shortId = null)
    {
        $this
            ->setMidocoTextRemark($midocoTextRemark)
            ->setCultureId($cultureId)
            ->setShortId($shortId);
    }
    /**
     * Get MidocoTextRemark value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoTextRemark|null
     */
    public function getMidocoTextRemark(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoTextRemark
    {
        return $this->MidocoTextRemark;
    }
    /**
     * Set MidocoTextRemark value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoTextRemark $midocoTextRemark
     * @return \Pggns\MidocoApi\Orderlists\StructType\EditMidocoTextRemarkRequest
     */
    public function setMidocoTextRemark(?\Pggns\MidocoApi\Orderlists\StructType\MidocoTextRemark $midocoTextRemark = null): self
    {
        $this->MidocoTextRemark = $midocoTextRemark;
        
        return $this;
    }
    /**
     * Get cultureId value
     * @return string|null
     */
    public function getCultureId(): ?string
    {
        return $this->cultureId;
    }
    /**
     * Set cultureId value
     * @param string $cultureId
     * @return \Pggns\MidocoApi\Orderlists\StructType\EditMidocoTextRemarkRequest
     */
    public function setCultureId(?string $cultureId = null): self
    {
        // validation for constraint: string
        if (!is_null($cultureId) && !is_string($cultureId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cultureId, true), gettype($cultureId)), __LINE__);
        }
        $this->cultureId = $cultureId;
        
        return $this;
    }
    /**
     * Get shortId value
     * @return string|null
     */
    public function getShortId(): ?string
    {
        return $this->shortId;
    }
    /**
     * Set shortId value
     * @param string $shortId
     * @return \Pggns\MidocoApi\Orderlists\StructType\EditMidocoTextRemarkRequest
     */
    public function setShortId(?string $shortId = null): self
    {
        // validation for constraint: string
        if (!is_null($shortId) && !is_string($shortId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shortId, true), gettype($shortId)), __LINE__);
        }
        $this->shortId = $shortId;
        
        return $this;
    }
}
