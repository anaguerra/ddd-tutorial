<?php

namespace InterfaceSegregation\correcto;


class BasketballPlayer implements Basketball, Offense
{
    /**
     * Block a shot by the offense
     *
     * @return bool
     */
    public function block()
    {
        return $this->randomBool();
    }

    /**
     * Try to score by shooting the ball while on offense
     *
     * @return bool
     */
    public function shoot()
    {
        return $this->randomBool();
    }

    protected function randomBool()
    {
        return (bool)rand(0, 1);
    }


}
