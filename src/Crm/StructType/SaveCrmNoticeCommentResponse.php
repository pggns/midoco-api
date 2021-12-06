<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCrmNoticeCommentResponse StructType
 * @subpackage Structs
 */
class SaveCrmNoticeCommentResponse extends AbstractStructBase
{
    /**
     * The MidocoCrmNoticeComment
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: MidocoCrmNoticeComment
     * @var \Pggns\MidocoApi\Api\Crm\StructType\CrmNoticeCommentDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Crm\StructType\CrmNoticeCommentDTO $MidocoCrmNoticeComment = null;
    /**
     * Constructor method for SaveCrmNoticeCommentResponse
     * @uses SaveCrmNoticeCommentResponse::setMidocoCrmNoticeComment()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\CrmNoticeCommentDTO $midocoCrmNoticeComment
     */
    public function __construct(?\Pggns\MidocoApi\Api\Crm\StructType\CrmNoticeCommentDTO $midocoCrmNoticeComment = null)
    {
        $this
            ->setMidocoCrmNoticeComment($midocoCrmNoticeComment);
    }
    /**
     * Get MidocoCrmNoticeComment value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\CrmNoticeCommentDTO|null
     */
    public function getMidocoCrmNoticeComment(): ?\Pggns\MidocoApi\Api\Crm\StructType\CrmNoticeCommentDTO
    {
        return $this->MidocoCrmNoticeComment;
    }
    /**
     * Set MidocoCrmNoticeComment value
     * @param \Pggns\MidocoApi\Api\Crm\StructType\CrmNoticeCommentDTO $midocoCrmNoticeComment
     * @return \Pggns\MidocoApi\Api\Crm\StructType\SaveCrmNoticeCommentResponse
     */
    public function setMidocoCrmNoticeComment(?\Pggns\MidocoApi\Api\Crm\StructType\CrmNoticeCommentDTO $midocoCrmNoticeComment = null): self
    {
        $this->MidocoCrmNoticeComment = $midocoCrmNoticeComment;
        
        return $this;
    }
}
