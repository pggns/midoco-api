<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

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
     * @var \Pggns\MidocoApi\Orderlists\StructType\ArticleDTO|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\ArticleDTO $MidocoArticle = null;
    /**
     * Constructor method for SaveArticleRequest
     * @uses SaveArticleRequest::setMidocoArticle()
     * @param \Pggns\MidocoApi\Orderlists\StructType\ArticleDTO $midocoArticle
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\ArticleDTO $midocoArticle = null)
    {
        $this
            ->setMidocoArticle($midocoArticle);
    }
    /**
     * Get MidocoArticle value
     * @return \Pggns\MidocoApi\Orderlists\StructType\ArticleDTO|null
     */
    public function getMidocoArticle(): ?\Pggns\MidocoApi\Orderlists\StructType\ArticleDTO
    {
        return $this->MidocoArticle;
    }
    /**
     * Set MidocoArticle value
     * @param \Pggns\MidocoApi\Orderlists\StructType\ArticleDTO $midocoArticle
     * @return \Pggns\MidocoApi\Orderlists\StructType\SaveArticleRequest
     */
    public function setMidocoArticle(?\Pggns\MidocoApi\Orderlists\StructType\ArticleDTO $midocoArticle = null): self
    {
        $this->MidocoArticle = $midocoArticle;
        
        return $this;
    }
}
