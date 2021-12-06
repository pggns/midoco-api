<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoBonusAdditionRequest StructType
 * @subpackage Structs
 */
class SaveMidocoBonusAdditionRequest extends AbstractStructBase
{
    /**
     * The MidocoBonusAddition
     * Meta information extracted from the WSDL
     * - ref: MidocoBonusAddition
     * @var \Pggns\MidocoApi\Api\Order\StructType\BonusAdditionDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\BonusAdditionDTO $MidocoBonusAddition = null;
    /**
     * Constructor method for SaveMidocoBonusAdditionRequest
     * @uses SaveMidocoBonusAdditionRequest::setMidocoBonusAddition()
     * @param \Pggns\MidocoApi\Api\Order\StructType\BonusAdditionDTO $midocoBonusAddition
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\BonusAdditionDTO $midocoBonusAddition = null)
    {
        $this
            ->setMidocoBonusAddition($midocoBonusAddition);
    }
    /**
     * Get MidocoBonusAddition value
     * @return \Pggns\MidocoApi\Api\Order\StructType\BonusAdditionDTO|null
     */
    public function getMidocoBonusAddition(): ?\Pggns\MidocoApi\Api\Order\StructType\BonusAdditionDTO
    {
        return $this->MidocoBonusAddition;
    }
    /**
     * Set MidocoBonusAddition value
     * @param \Pggns\MidocoApi\Api\Order\StructType\BonusAdditionDTO $midocoBonusAddition
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveMidocoBonusAdditionRequest
     */
    public function setMidocoBonusAddition(?\Pggns\MidocoApi\Api\Order\StructType\BonusAdditionDTO $midocoBonusAddition = null): self
    {
        $this->MidocoBonusAddition = $midocoBonusAddition;
        
        return $this;
    }
}