<?php

namespace Sport\Sports;

interface SportInterface
{
    public function name(): string;

    public function rules(): string;
}
