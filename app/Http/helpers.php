<?php

function sessoes($empresa)
{
    session(['habilitarVendas' => $empresa->habilitar_vendas]);
    session(['habilitarCadastrosClientes' => $empresa->habilitar_cadastros_clientes]);
    session(['numeroWhatsapp' => str_replace('+', '', $empresa->numero_whatsapp)]);
}

function mobileDesktop()
{
    $agent = new \Jenssegers\Agent\Agent;

    return $agent->isMobile();
}
