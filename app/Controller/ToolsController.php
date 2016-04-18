<?php

namespace Controller;
use W\Controller\Controller;

class ToolsController extends Controller
{
    public static function dateHeureEnFr($date)
    {
        $formatage = new \DateTime($date);
        $formatage = $formatage->format('d/m/Y H:i');
        return $formatage;
    }

    public static function dateEnFr($date)
    {
        $formatage = new \DateTime($date);
        $formatage = $formatage->format('d/m/Y');
        return $formatage;
    }

}