<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCateringCodesRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCateringCodesRequest extends AbstractStructBase
{
    /**
     * The MidocoCateringCode
     * Meta information extracted from the WSDL
     * - ref: MidocoCateringCode
     * @var \Pggns\MidocoApi\OrderSD\StructType\MidocoCateringCode|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\MidocoCateringCode $MidocoCateringCode = null;
    /**
     * The cultureId
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $cultureId = null;
    /**
     * Constructor method for GetCateringCodesRequest
     * @uses GetCateringCodesRequest::setMidocoCateringCode()
     * @uses GetCateringCodesRequest::setCultureId()
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoCateringCode $midocoCateringCode
     * @param string $cultureId
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\MidocoCateringCode $midocoCateringCode = null, ?string $cultureId = null)
    {
        $this
            ->setMidocoCateringCode($midocoCateringCode)
            ->setCultureId($cultureId);
    }
    /**
     * Get MidocoCateringCode value
     * @return \Pggns\MidocoApi\OrderSD\StructType\MidocoCateringCode|null
     */
    public function getMidocoCateringCode(): ?\Pggns\MidocoApi\OrderSD\StructType\MidocoCateringCode
    {
        return $this->MidocoCateringCode;
    }
    /**
     * Set MidocoCateringCode value
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoCateringCode $midocoCateringCode
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetCateringCodesRequest
     */
    public function setMidocoCateringCode(?\Pggns\MidocoApi\OrderSD\StructType\MidocoCateringCode $midocoCateringCode = null): self
    {
        $this->MidocoCateringCode = $midocoCateringCode;
        
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
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetCateringCodesRequest
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
}
