<?php

namespace App;

class StartOrderProcess
{

    /**
     * Zeg tegen de observer dat hij mag gaan starten. De observer voert uit:
     * - Bevestiging email naar de klant sturen (5)
     * - Factuur in PDF maken (6)
     * - Creditnota voor de ontwerper genereren en in account plaatsen (7)
     * - Transport bestellen
     *
     * @param $order_id
     */
    public static function startWorkflow($order_id)
    {

    }

    /**
     * Voer magazijn controle uit. Vermoedelijk wil ik een strategy pattern hiervoor gebruiken.
     *
     * @param $order_id
     */
    public static function inventory($order_id)
    {

    }
}