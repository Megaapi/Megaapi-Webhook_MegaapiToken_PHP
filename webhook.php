<?php

/**
 * Recebo o json da api
 */
$data = file_get_contents('php://input');

/**
 * Transformo o json em array
 */
$array = json_decode($data, true);
//debugArray($array);

$fromMe  = $array["key"]["fromMe"]; //Mensagem recebida ou enviada (true -> Enviada / false -> Recebida)
$type    = $array["messageType"]; //Tipo de mensagem recebida


/**
 * Validação se é uma mensagem recebida ou enviada
 */
if (!$fromMe) {


    if ($type != "message.ack") {

        /**Pego as informações do array - MSG Texto*/
        $instance       = $array["instance_key"]; //Instancia
        $phoneConect    = $array["jid"]; //Telefone conectado na api
        $chatid         = $array["key"]["remoteJid"]; //Contato cliente
        $idMessage      = $array["key"]["id"]; //ID da mensagem
        $participant    = $array["key"]["participant"] ?? ""; //Participante que enviou a mensagem no grupo
        $time           = $array["messageTimestamp"]; //Hora e data que foi enviada
        $name           = $array["pushName"]; //Nome do contato
        $status          = $array["status"] ?? ""; //Status da mensagem
        $message        = $array["message"]["conversation"]; //Mensagem do chat

        /**Pego as informações do array - MSG Audio*/
        //  $message        = $array["message"]["conversation"];//Mensagem do chat
        //  $urlFile        = $array["message"]["audioMessage"]["url"];//URL do arquivo
        //  $mimetypeFile   = $array["message"]["audioMessage"]["mimetype"];//mimetype do arquivo
        //  $secondsFile    = $array["message"]["audioMessage"]["seconds"];//segundos do arquivo
        //  $pttFile        = $array["message"]["audioMessage"]["ptt"];//se o audio foi gravado
        //  $mediaKeyFile   = $array["message"]["audioMessage"]["mediaKey"];//key do arquivo
        //  $directPathFile = $array["message"]["audioMessage"]["directPath"];//path do arquivo


        /**Pego as informações do array - MSG video */
        // $message        = $array["message"]["videoMessage"]["caption"];//Legenda do video
        // $urlFile        = $array["message"]["videoMessage"]["url"];//URL do arquivo
        // $mimetypeFile   = $array["message"]["videoMessage"]["mimetype"];//mimetype do arquivo
        // $secondsFile    = $array["message"]["videoMessage"]["seconds"];//segundos do arquivo
        // $mediaKeyFile   = $array["message"]["videoMessage"]["mediaKey"];//key do arquivo
        // $directPathFile = $array["message"]["videoMessage"]["directPath"];//path do arquivo
        // $thumbnailFile  = $array["message"]["videoMessage"]["jpegThumbnail"];//thumbnail do video


        /**Pego as informações do array - MSG imagem */
        // $message        = $array["message"]["imageMessage"]["caption"];//Legenda da imagem
        // $urlFile        = $array["message"]["imageMessage"]["url"];//URL do arquivo
        // $mimetypeFile   = $array["message"]["imageMessage"]["mimetype"];//mimetype do arquivo
        // $mediaKeyFile   = $array["message"]["imageMessage"]["mediaKey"];//key do arquivo
        // $directPathFile = $array["message"]["imageMessage"]["directPath"];//path do arquivo
        // $thumbnailFile  = $array["message"]["imageMessage"]["jpegThumbnail"];//thumbnail da imagem


        /**Pego as informações do array - MSG sticker */
        // $urlFile        = $array["message"]["stickerMessage"]["url"]; //URL do arquivo
        // $mimetypeFile   = $array["message"]["stickerMessage"]["mimetype"]; //mimetype do arquivo
        // $mediaKeyFile   = $array["message"]["stickerMessage"]["mediaKey"]; //key do arquivo
        // $directPathFile = $array["message"]["stickerMessage"]["directPath"]; //path do arquivo


        /**Pego as informações do array - MSG documento */
        // $urlFile        = $array["message"]["documentMessage"]["url"]; //URL do arquivo
        // $mimetypeFile   = $array["message"]["documentMessage"]["mimetype"]; //mimetype do arquivo
        // $titleFile      = $array["message"]["documentMessage"]["title"]; //tiutlo do documento
        // $pageFile       = $array["message"]["documentMessage"]["pageCount"]; //QTD de paginas
        // $mediaKeyFile   = $array["message"]["documentMessage"]["mediaKey"]; //key do arquivo
        // $nameFile       = $array["message"]["documentMessage"]["fileName"]; //nome do documento
        // $directPathFile = $array["message"]["documentMessage"]["directPath"]; //path do arquivo
        // $thumbnailFile  = $array["message"]["documentMessage"]["jpegThumbnail"]; //thumbnail do documento


        /**Pego as informações do array - MSG catalogo de produtos */
        // $textCatalog            = $array["message"]["extendedTextMessage"]["text"]; //texto do catalogo
        // $matchedTextCatalog     = $array["message"]["extendedTextMessage"]["matchedText"]; //link do catalogo
        // $descriptionCatalog     = $array["message"]["extendedTextMessage"]["description"]; //descrição
        // $titleCatalog           = $array["message"]["extendedTextMessage"]["title"]; //Titulo do catalogo
        // $thumbnailCatalog       = $array["message"]["extendedTextMessage"]["jpegThumbnail"]; //thumbnail do catalogo


        /**Pego as informações do array - MSG localização */
        // $latitude               = $array["message"]["locationMessage"]["degreesLatitude"]; //latitude
        // $longitude              = $array["message"]["locationMessage"]["degreesLongitude"]; //longitude
        // $thumbnail              = $array["message"]["locationMessage"]["jpegThumbnail"]; //thumbnail da localização


        /**Pego as informações do array - MSG contato */
        // $displayName    = $array["message"]["contactMessage"]["displayName"]; //Mome do contato
        // $vcard          = $array["message"]["contactMessage"]["vcard"]; //crd do contato


        /**Verificamos se o cliente digitou oi, se caso tenha enviado oi, vamos enviar uma mensagem de saudação */
        if ($message == 'oi') {

            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://{HOST}/rest/sendMessage/{INSTANCE_KEY}/text',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => '{
                    "messageData": {
                        "to": "'.$chatid .'",
                        "text": "Mensagem de Texto"
                    }
                }',
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json',
                    'Authorization: Bearer {TOKEN}'
                ),
            ));

            $response = curl_exec($curl);

            curl_close($curl);
            echo $response;

        }else{

            //Executa outra ação
        }

    }
} else {

    /**
     * Retornos dos status das mensagens enviadas
     */
    if ($type == 'message.ack') {


        /**Pego as informações do array - Status de vizualização da mensagem*/
        $instance      = $array["instance_key"]; //Instancia
        $chatid        = $array["key"]["remoteJid"]; //Contato cliente
        $idMessage     = $array["key"]["id"]; //ID da mensagem
        $status        = replaceAck($array["update"]["status"]);
    }
}


/**
 * Função para debugar array com print_r;
 *
 * @param [array] $array
 */
function debugArray($array)
{

    echo "<pre>";
    print_r($array);
}

/**
 * Função responsavel por fazer o tratamento do status das mensagens 
 *
 * @param [string] $status
 * @return string $status
 */
function replaceAck($status)
{

    /**
     * Fazemos o tratamento do status
     */
    switch ($status) {
        case '2':
            $status = "Send";
            return $status;
            break;

        case '3':
            $status = "Delivered";
            return $status;
            break;

        case '4':
            $status = "Viewd";
            return $status;
            break;
    }
}
