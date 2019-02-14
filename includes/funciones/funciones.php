<?php 

function productos_json(&$boletos, &$bonos = 0, &$stickers = 0){
    $tours = array(0 => 'tour_historica', 1 => 'tour_cultural', 2 => 'tour_montana');
    $total_boletos = array_combine($tours, $boletos);
    $json = array();

    foreach($total_boletos as $key =>$boletos):
        if((int) $boletos > 0):
            $json[$key] = (int) $boletos;
        endif;
    endforeach;

    $bonos = (int) $bonos ;
    if ($bonos > 0):
        $json['bonos'] = $bonos;
    endif;

    $stickers = (int) $stickers;
    if ($stickers > 0):
        $json['stickers'] = $stickers;
    endif;

    return json_encode($json);
}

function eventos_json(&$eventos){
    $eventos_json = array();
    foreach($eventos as $evento):
        $eventos_json['eventos'][] = $evento;
    endforeach;

    return json_encode($eventos_json);
}
