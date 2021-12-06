<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveArticleRequest StructType
 * @subpackage Structs
 */
class SaveArticleRequest extends AbstractStructBase
{
    /**
     * The MidocoArticle
     * Meta information extracted from the WSDL
     * - ref: MidocoArticle
     * @var \Pggns\MidocoApi\OrderSD\StructType\ArticleDTO|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\ArticleDTO $MidocoArticle = null;
    /**
     * Constructor method for SaveArticleRequest
     * @uses SaveArticleRequest::setMidocoArticle()
     * @param \Pggns\MidocoApi\OrderSD\StructType\ArticleDTO $midocoArticle
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\ArticleDTO $midocoArticle = null)
    {
        $this
            ->setMidocoArticle($midocoArticle);
    }
    /**
     * Get MidocoArticle value
     * @return \Pggns\MidocoApi\OrderSD\StructType\ArticleDTO|null
     */
    public function getMidocoArticle(): ?\Pggns\MidocoApi\OrderSD\StructType\ArticleDTO
    {
        return $this->MidocoArticle;
    }
    /**
     * Set MidocoArticle value
     * @param \Pggns\MidocoApi\OrderSD\StructType\ArticleDTO $midocoArticle
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveArticleRequest
     */
    public function setMidocoArticle(?\Pggns\MidocoApi\OrderSD\StructType\ArticleDTO $midocoArticle = null): self
    {
        $this->MidocoArticle = $midocoArticle;
        
        return $this;
    }
}
