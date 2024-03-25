<?php

namespace Article\Formatters;

use Article\Article;

class JsonFormatter implements FormatterInterface
{
    public function format(Article $article): string
    {
        return json_encode($article->getAll());
    }
}
