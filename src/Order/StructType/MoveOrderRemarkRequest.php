<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MoveOrderRemarkRequest StructType
 * @subpackage Structs
 */
class MoveOrderRemarkRequest extends AbstractStructBase
{
    /**
     * The MidocoOrderRemark
     * Meta information extracted from the WSDL
     * - ref: MidocoOrderRemark
     * @var \Pggns\MidocoApi\Api\Order\StructType\OrderRemarkDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\OrderRemarkDTO $MidocoOrderRemark = null;
    /**
     * The direction
     * @var string|null
     */
    protected ?string $direction = null;
    /**
     * Constructor method for MoveOrderRemarkRequest
     * @uses MoveOrderRemarkRequest::setMidocoOrderRemark()
     * @uses MoveOrderRemarkRequest::setDirection()
     * @param \Pggns\MidocoApi\Api\Order\StructType\OrderRemarkDTO $midocoOrderRemark
     * @param string $direction
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\OrderRemarkDTO $midocoOrderRemark = null, ?string $direction = null)
    {
        $this
            ->setMidocoOrderRemark($midocoOrderRemark)
            ->setDirection($direction);
    }
    /**
     * Get MidocoOrderRemark value
     * @return \Pggns\MidocoApi\Api\Order\StructType\OrderRemarkDTO|null
     */
    public function getMidocoOrderRemark(): ?\Pggns\MidocoApi\Api\Order\StructType\OrderRemarkDTO
    {
        return $this->MidocoOrderRemark;
    }
    /**
     * Set MidocoOrderRemark value
     * @param \Pggns\MidocoApi\Api\Order\StructType\OrderRemarkDTO $midocoOrderRemark
     * @return \Pggns\MidocoApi\Api\Order\StructType\MoveOrderRemarkRequest
     */
    public function setMidocoOrderRemark(?\Pggns\MidocoApi\Api\Order\StructType\OrderRemarkDTO $midocoOrderRemark = null): self
    {
        $this->MidocoOrderRemark = $midocoOrderRemark;
        
        return $this;
    }
    /**
     * Get direction value
     * @return string|null
     */
    public function getDirection(): ?string
    {
        return $this->direction;
    }
    /**
     * Set direction value
     * @param string $direction
     * @return \Pggns\MidocoApi\Api\Order\StructType\MoveOrderRemarkRequest
     */
    public function setDirection(?string $direction = null): self
    {
        // validation for constraint: string
        if (!is_null($direction) && !is_string($direction)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($direction, true), gettype($direction)), __LINE__);
        }
        $this->direction = $direction;
        
        return $this;
    }
}
