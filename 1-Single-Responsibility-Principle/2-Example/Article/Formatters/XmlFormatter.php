<?php

namespace Article\Formatters;

use Article\Article;

class XmlFormatter implements FormatterInterface
{
    public function format(Article $article): string
    {
        return xmlrpc_encode($article->getAll());
    }
}
