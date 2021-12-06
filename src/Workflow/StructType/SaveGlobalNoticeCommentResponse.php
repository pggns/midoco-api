<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveGlobalNoticeCommentResponse StructType
 * @subpackage Structs
 */
class SaveGlobalNoticeCommentResponse extends AbstractStructBase
{
    /**
     * The MidocoGlobalNoticeComment
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: MidocoGlobalNoticeComment
     * @var \Pggns\MidocoApi\Api\Workflow\StructType\GlobalNoticeCommentDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Workflow\StructType\GlobalNoticeCommentDTO $MidocoGlobalNoticeComment = null;
    /**
     * Constructor method for SaveGlobalNoticeCommentResponse
     * @uses SaveGlobalNoticeCommentResponse::setMidocoGlobalNoticeComment()
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\GlobalNoticeCommentDTO $midocoGlobalNoticeComment
     */
    public function __construct(?\Pggns\MidocoApi\Api\Workflow\StructType\GlobalNoticeCommentDTO $midocoGlobalNoticeComment = null)
    {
        $this
            ->setMidocoGlobalNoticeComment($midocoGlobalNoticeComment);
    }
    /**
     * Get MidocoGlobalNoticeComment value
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\GlobalNoticeCommentDTO|null
     */
    public function getMidocoGlobalNoticeComment(): ?\Pggns\MidocoApi\Api\Workflow\StructType\GlobalNoticeCommentDTO
    {
        return $this->MidocoGlobalNoticeComment;
    }
    /**
     * Set MidocoGlobalNoticeComment value
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\GlobalNoticeCommentDTO $midocoGlobalNoticeComment
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\SaveGlobalNoticeCommentResponse
     */
    public function setMidocoGlobalNoticeComment(?\Pggns\MidocoApi\Api\Workflow\StructType\GlobalNoticeCommentDTO $midocoGlobalNoticeComment = null): self
    {
        $this->MidocoGlobalNoticeComment = $midocoGlobalNoticeComment;
        
        return $this;
    }
}
