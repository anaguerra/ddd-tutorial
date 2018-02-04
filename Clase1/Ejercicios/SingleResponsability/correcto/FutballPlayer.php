<?php

namespace SingleResponsability;


class FutballPlayer implements PlayerInterface
{
    public function play()
    {
        return 'I am going to score points';
    }

    public function practice()
    {
        return 'Running ladders';
    }
}