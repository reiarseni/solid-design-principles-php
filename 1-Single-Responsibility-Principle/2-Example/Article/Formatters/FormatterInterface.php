<?php

namespace Article\Formatters;

use Article\Article;

interface FormatterInterface
{
    public function format(Article $article): string;
}
