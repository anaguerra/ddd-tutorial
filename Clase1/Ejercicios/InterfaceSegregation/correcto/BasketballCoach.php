<?php

namespace InterfaceSegregation\correcto;


class BasketballCoach implements Coach
{
    /**
     * Echos out some string of profanities
     *
     * @return string
     */
    public function yellAtPlayersLikeBobbyKnight()
    {
        return 'This has been censored because of inappropriate content';
    }
}
