<?php

namespace Article;

class Article
{
    public function getTitle(): string
    {
        return 'Article Title';
    }

    public function getDescription(): string
    {
        return 'Article Description';
    }

    public function getContent(): string
    {
        return '<p>Article Content</p>';
    }

    public function getSlug(): string
    {
        return 'article-slug';
    }

    public function getAll(): array
    {
        return [
            'title' => $this->getTitle(),
            'description' => $this->getDescription(),
            'content' => $this->getContent(),
            'slug' => $this->getSlug(),
        ];
    }
}
