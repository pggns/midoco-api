<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteArticleRequest StructType
 * @subpackage Structs
 */
class DeleteArticleRequest extends AbstractStructBase
{
    /**
     * The MidocoArticle
     * Meta information extracted from the WSDL
     * - ref: MidocoArticle
     * @var \Pggns\MidocoApi\Api\Order\StructType\ArticleDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\ArticleDTO $MidocoArticle = null;
    /**
     * Constructor method for DeleteArticleRequest
     * @uses DeleteArticleRequest::setMidocoArticle()
     * @param \Pggns\MidocoApi\Api\Order\StructType\ArticleDTO $midocoArticle
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\ArticleDTO $midocoArticle = null)
    {
        $this
            ->setMidocoArticle($midocoArticle);
    }
    /**
     * Get MidocoArticle value
     * @return \Pggns\MidocoApi\Api\Order\StructType\ArticleDTO|null
     */
    public function getMidocoArticle(): ?\Pggns\MidocoApi\Api\Order\StructType\ArticleDTO
    {
        return $this->MidocoArticle;
    }
    /**
     * Set MidocoArticle value
     * @param \Pggns\MidocoApi\Api\Order\StructType\ArticleDTO $midocoArticle
     * @return \Pggns\MidocoApi\Api\Order\StructType\DeleteArticleRequest
     */
    public function setMidocoArticle(?\Pggns\MidocoApi\Api\Order\StructType\ArticleDTO $midocoArticle = null): self
    {
        $this->MidocoArticle = $midocoArticle;
        
        return $this;
    }
}
