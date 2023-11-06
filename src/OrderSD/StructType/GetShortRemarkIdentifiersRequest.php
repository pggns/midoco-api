<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetShortRemarkIdentifiersRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetShortRemarkIdentifiersRequest extends AbstractStructBase
{
    /**
     * The RemarkIdentifiersSearchCriteria
     * Meta information extracted from the WSDL
     * - ref: RemarkIdentifiersSearchCriteria
     * @var \Pggns\MidocoApi\OrderSD\StructType\RemarkIdentifiersSearchCriteria|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\RemarkIdentifiersSearchCriteria $RemarkIdentifiersSearchCriteria = null;
    /**
     * Constructor method for GetShortRemarkIdentifiersRequest
     * @uses GetShortRemarkIdentifiersRequest::setRemarkIdentifiersSearchCriteria()
     * @param \Pggns\MidocoApi\OrderSD\StructType\RemarkIdentifiersSearchCriteria $remarkIdentifiersSearchCriteria
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\RemarkIdentifiersSearchCriteria $remarkIdentifiersSearchCriteria = null)
    {
        $this
            ->setRemarkIdentifiersSearchCriteria($remarkIdentifiersSearchCriteria);
    }
    /**
     * Get RemarkIdentifiersSearchCriteria value
     * @return \Pggns\MidocoApi\OrderSD\StructType\RemarkIdentifiersSearchCriteria|null
     */
    public function getRemarkIdentifiersSearchCriteria(): ?\Pggns\MidocoApi\OrderSD\StructType\RemarkIdentifiersSearchCriteria
    {
        return $this->RemarkIdentifiersSearchCriteria;
    }
    /**
     * Set RemarkIdentifiersSearchCriteria value
     * @param \Pggns\MidocoApi\OrderSD\StructType\RemarkIdentifiersSearchCriteria $remarkIdentifiersSearchCriteria
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetShortRemarkIdentifiersRequest
     */
    public function setRemarkIdentifiersSearchCriteria(?\Pggns\MidocoApi\OrderSD\StructType\RemarkIdentifiersSearchCriteria $remarkIdentifiersSearchCriteria = null): self
    {
        $this->RemarkIdentifiersSearchCriteria = $remarkIdentifiersSearchCriteria;
        
        return $this;
    }
}
