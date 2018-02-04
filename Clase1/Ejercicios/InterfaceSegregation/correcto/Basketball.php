<?php

namespace InterfaceSegregation\correcto;


interface Basketball
{
    /**
     * Try to score by shooting the ball while on offense
     *
     * @return void
     */
    public function shoot();

    /**
     * Block a shot by the offense
     *
     * @return void
     */
    public function block();

}