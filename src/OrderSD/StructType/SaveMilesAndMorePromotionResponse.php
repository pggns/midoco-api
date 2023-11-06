<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMilesAndMorePromotionResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: The promotion as it was saved
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveMilesAndMorePromotionResponse extends AbstractStructBase
{
    /**
     * The MidocoMilesAndMorePromotion
     * Meta information extracted from the WSDL
     * - ref: MidocoMilesAndMorePromotion
     * @var \Pggns\MidocoApi\OrderSD\StructType\MilesAndMorePromotionDTO|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\MilesAndMorePromotionDTO $MidocoMilesAndMorePromotion = null;
    /**
     * Constructor method for SaveMilesAndMorePromotionResponse
     * @uses SaveMilesAndMorePromotionResponse::setMidocoMilesAndMorePromotion()
     * @param \Pggns\MidocoApi\OrderSD\StructType\MilesAndMorePromotionDTO $midocoMilesAndMorePromotion
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\MilesAndMorePromotionDTO $midocoMilesAndMorePromotion = null)
    {
        $this
            ->setMidocoMilesAndMorePromotion($midocoMilesAndMorePromotion);
    }
    /**
     * Get MidocoMilesAndMorePromotion value
     * @return \Pggns\MidocoApi\OrderSD\StructType\MilesAndMorePromotionDTO|null
     */
    public function getMidocoMilesAndMorePromotion(): ?\Pggns\MidocoApi\OrderSD\StructType\MilesAndMorePromotionDTO
    {
        return $this->MidocoMilesAndMorePromotion;
    }
    /**
     * Set MidocoMilesAndMorePromotion value
     * @param \Pggns\MidocoApi\OrderSD\StructType\MilesAndMorePromotionDTO $midocoMilesAndMorePromotion
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveMilesAndMorePromotionResponse
     */
    public function setMidocoMilesAndMorePromotion(?\Pggns\MidocoApi\OrderSD\StructType\MilesAndMorePromotionDTO $midocoMilesAndMorePromotion = null): self
    {
        $this->MidocoMilesAndMorePromotion = $midocoMilesAndMorePromotion;
        
        return $this;
    }
}
