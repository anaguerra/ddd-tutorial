<?php

namespace SingleResponsability;


class Referee implements RefereeInterface
{
    public function leadTeam()
    {
        return 'Score or you will be running ladders';
    }

    public function leadPractice()
    {
        return 'Run ladders';
    }
}