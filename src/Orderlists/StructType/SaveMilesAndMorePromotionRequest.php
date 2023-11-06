<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMilesAndMorePromotionRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: Supply the promotion properties. To update a promotion, include the promotionId, otherwise a new promotion will be created.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveMilesAndMorePromotionRequest extends AbstractStructBase
{
    /**
     * The MidocoMilesAndMorePromotion
     * Meta information extracted from the WSDL
     * - ref: MidocoMilesAndMorePromotion
     * @var \Pggns\MidocoApi\Orderlists\StructType\MilesAndMorePromotionDTO|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MilesAndMorePromotionDTO $MidocoMilesAndMorePromotion = null;
    /**
     * Constructor method for SaveMilesAndMorePromotionRequest
     * @uses SaveMilesAndMorePromotionRequest::setMidocoMilesAndMorePromotion()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MilesAndMorePromotionDTO $midocoMilesAndMorePromotion
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MilesAndMorePromotionDTO $midocoMilesAndMorePromotion = null)
    {
        $this
            ->setMidocoMilesAndMorePromotion($midocoMilesAndMorePromotion);
    }
    /**
     * Get MidocoMilesAndMorePromotion value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MilesAndMorePromotionDTO|null
     */
    public function getMidocoMilesAndMorePromotion(): ?\Pggns\MidocoApi\Orderlists\StructType\MilesAndMorePromotionDTO
    {
        return $this->MidocoMilesAndMorePromotion;
    }
    /**
     * Set MidocoMilesAndMorePromotion value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MilesAndMorePromotionDTO $midocoMilesAndMorePromotion
     * @return \Pggns\MidocoApi\Orderlists\StructType\SaveMilesAndMorePromotionRequest
     */
    public function setMidocoMilesAndMorePromotion(?\Pggns\MidocoApi\Orderlists\StructType\MilesAndMorePromotionDTO $midocoMilesAndMorePromotion = null): self
    {
        $this->MidocoMilesAndMorePromotion = $midocoMilesAndMorePromotion;
        
        return $this;
    }
}
