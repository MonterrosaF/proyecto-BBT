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

    return json_encode($json);
}

