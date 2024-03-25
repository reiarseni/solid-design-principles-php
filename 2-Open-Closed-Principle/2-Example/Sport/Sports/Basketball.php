<?php

namespace Sport\Sports;

final class Basketball implements SportInterface
{
    public function name(): string
    {
        return 'Basketball';
    }

    public function rules(): string
    {
        return 'The rules...';
    }
}
