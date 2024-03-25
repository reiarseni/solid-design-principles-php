<?php

namespace Sport\Sports;

final class Football implements SportInterface
{
    public function name(): string
    {
        return 'Football';
    }

    public function rules(): string
    {
        return 'The rules...';
    }
}
