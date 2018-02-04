<?php

namespace InterfaceSegregation\correcto;


interface Offense
{
    /**
     * Try to score by shooting the ball while on offense
     *
     * @return bool
     */
    public function shoot();
}