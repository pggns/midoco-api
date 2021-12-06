<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetShortRemarkIdentifiersRequest StructType
 * @subpackage Structs
 */
class GetShortRemarkIdentifiersRequest extends AbstractStructBase
{
    /**
     * The RemarkIdentifiersSearchCriteria
     * Meta information extracted from the WSDL
     * - ref: RemarkIdentifiersSearchCriteria
     * @var \Pggns\MidocoApi\Documents\StructType\RemarkIdentifiersSearchCriteria|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\RemarkIdentifiersSearchCriteria $RemarkIdentifiersSearchCriteria = null;
    /**
     * Constructor method for GetShortRemarkIdentifiersRequest
     * @uses GetShortRemarkIdentifiersRequest::setRemarkIdentifiersSearchCriteria()
     * @param \Pggns\MidocoApi\Documents\StructType\RemarkIdentifiersSearchCriteria $remarkIdentifiersSearchCriteria
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\RemarkIdentifiersSearchCriteria $remarkIdentifiersSearchCriteria = null)
    {
        $this
            ->setRemarkIdentifiersSearchCriteria($remarkIdentifiersSearchCriteria);
    }
    /**
     * Get RemarkIdentifiersSearchCriteria value
     * @return \Pggns\MidocoApi\Documents\StructType\RemarkIdentifiersSearchCriteria|null
     */
    public function getRemarkIdentifiersSearchCriteria(): ?\Pggns\MidocoApi\Documents\StructType\RemarkIdentifiersSearchCriteria
    {
        return $this->RemarkIdentifiersSearchCriteria;
    }
    /**
     * Set RemarkIdentifiersSearchCriteria value
     * @param \Pggns\MidocoApi\Documents\StructType\RemarkIdentifiersSearchCriteria $remarkIdentifiersSearchCriteria
     * @return \Pggns\MidocoApi\Documents\StructType\GetShortRemarkIdentifiersRequest
     */
    public function setRemarkIdentifiersSearchCriteria(?\Pggns\MidocoApi\Documents\StructType\RemarkIdentifiersSearchCriteria $remarkIdentifiersSearchCriteria = null): self
    {
        $this->RemarkIdentifiersSearchCriteria = $remarkIdentifiersSearchCriteria;
        
        return $this;
    }
}
