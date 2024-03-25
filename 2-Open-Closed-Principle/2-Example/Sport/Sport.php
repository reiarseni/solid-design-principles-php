<?php

namespace Sport;

use Sport\Sports\SportInterface;

class Sport
{
    public function rules(SportInterface $sport): string
    {
        return 'The '.$sport->name().' rule is: '.$sport->rules();
    }
}
