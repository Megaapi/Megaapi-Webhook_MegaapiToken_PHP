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

$fromMe  = $array["key"]["fromMe"];//Mensagem recebida ou enviada (true -> Enviada / false -> Recebida)
$type    = $array["messageType"];//Tipo de mensagem recebida


/**
 * Validação se é uma mensagem recebida ou enviada
 */
if( !$fromMe ){

    /**
     * Retornos mensagens recebidas
     */
    switch ($type) {
        case 'conversation'://Tipo chat
            /**Pego as informações do array - MSG Texto*/
            $instance       = $array["instance_key"];//Instancia
            $phoneConect    = $array["jid"];//Telefone conectado na api
            $chatid         = $array["key"]["remoteJid"];//Contato cliente
            $idMessage      = $array["key"]["id"];//ID da mensagem
            $participant    = $array["key"]["participant"] ?? "";//Participante que enviou a mensagem no grupo
            $time           = $array["messageTimestamp"];//Hora e data que foi enviada
            $name           = $array["pushName"];//Nome do contato
            $status          = $array["status"] ?? "";//Status da mensagem
            $message        = $array["message"]["conversation"];//Mensagem do chat


        break;

        case 'audioMessage'://Tipo chat
            /**Pego as informações do array - MSG Audio*/
            $instance       = $array["instance_key"];//Instancia
            $phoneConect    = $array["jid"];//Telefone conectado na api
            $chatid         = $array["key"]["remoteJid"];//Contato cliente ou id do grupo
            $idMessage      = $array["key"]["id"];//ID da mensagem
            $participant    = $array["key"]["participant"];//Participante que enviou a mensagem
            $time           = $array["messageTimestamp"];//Hora e data que foi enviada
            $name           = $array["pushName"];//Nome do contato
            $urlFile        = $array["message"]["audioMessage"]["url"];//URL do arquivo
            $mimetypeFile   = $array["message"]["audioMessage"]["mimetype"];//mimetype do arquivo
            $secondsFile    = $array["message"]["audioMessage"]["seconds"];//segundos do arquivo
            $pttFile        = $array["message"]["audioMessage"]["ptt"];//se o audio foi gravado
            $mediaKeyFile   = $array["message"]["audioMessage"]["mediaKey"];//key do arquivo
            $directPathFile = $array["message"]["audioMessage"]["directPath"];//path do arquivo

        break;

        case 'videoMessage'://Tipo chat
            /**Pego as informações do array - MSG Video*/
            $instance       = $array["instance_key"];//Instancia
            $phoneConect    = $array["jid"];//Telefone conectado na api
            $chatid         = $array["key"]["remoteJid"];//Contato cliente
            $idMessage      = $array["key"]["id"];//ID da mensagem
            $participant    = $array["key"]["participant"];//Participante que enviou a mensagem
            $time           = $array["messageTimestamp"];//Hora e data que foi enviada
            $name           = $array["pushName"];//Nome do contato
            $message        = $array["message"]["videoMessage"]["caption"];//Legenda do video
            $urlFile        = $array["message"]["videoMessage"]["url"];//URL do arquivo
            $mimetypeFile   = $array["message"]["videoMessage"]["mimetype"];//mimetype do arquivo
            $secondsFile    = $array["message"]["videoMessage"]["seconds"];//segundos do arquivo
            $mediaKeyFile   = $array["message"]["videoMessage"]["mediaKey"];//key do arquivo
            $directPathFile = $array["message"]["videoMessage"]["directPath"];//path do arquivo
            $thumbnailFile  = $array["message"]["videoMessage"]["jpegThumbnail"];//thumbnail do video

        break;

        case 'imageMessage'://Tipo chat
            /**Pego as informações do array - MSG Imagem*/
            $instance       = $array["instance_key"];//Instancia
            $phoneConect    = $array["jid"];//Telefone conectado na api
            $chatid         = $array["key"]["remoteJid"];//Contato cliente
            $idMessage      = $array["key"]["id"];//ID da mensagem
            $participant    = $array["key"]["participant"];//Participante que enviou a mensagem
            $time           = $array["messageTimestamp"];//Hora e data que foi enviada
            $name           = $array["pushName"];//Nome do contato
            $message        = $array["message"]["imageMessage"]["caption"];//Legenda da imagem
            $urlFile        = $array["message"]["imageMessage"]["url"];//URL do arquivo
            $mimetypeFile   = $array["message"]["imageMessage"]["mimetype"];//mimetype do arquivo
            $mediaKeyFile   = $array["message"]["imageMessage"]["mediaKey"];//key do arquivo
            $directPathFile = $array["message"]["imageMessage"]["directPath"];//path do arquivo
            $thumbnailFile  = $array["message"]["imageMessage"]["jpegThumbnail"];//thumbnail da imagem

        break;

        case 'stickerMessage'://Tipo chat
            /**Pego as informações do array - MSG sticker*/
            $instance       = $array["instance_key"];//Instancia
            $phoneConect    = $array["jid"];//Telefone conectado na api
            $chatid         = $array["key"]["remoteJid"];//Contato cliente
            $idMessage      = $array["key"]["id"];//ID da mensagem
            $time           = $array["messageTimestamp"];//Hora e data que foi enviada
            $name           = $array["pushName"];//Nome do contato
            $message        = $array["message"]["conversation"];//Legenda
            $urlFile        = $array["message"]["stickerMessage"]["url"];//URL do arquivo
            $mimetypeFile   = $array["message"]["stickerMessage"]["mimetype"];//mimetype do arquivo
            $mediaKeyFile   = $array["message"]["stickerMessage"]["mediaKey"];//key do arquivo
            $directPathFile = $array["message"]["stickerMessage"]["directPath"];//path do arquivo

        break;

        case 'documentMessage'://Tipo chat
            /**Pego as informações do array - MSG documento*/
            $instance       = $array["instance_key"];//Instancia
            $phoneConect    = $array["jid"];//Telefone conectado na api
            $chatid         = $array["key"]["remoteJid"];//Contato cliente
            $idMessage      = $array["key"]["id"];//ID da mensagem
            $time           = $array["messageTimestamp"];//Hora e data que foi enviada
            $name           = $array["pushName"];//Nome do contato
            $urlFile        = $array["message"]["documentMessage"]["url"];//URL do arquivo
            $mimetypeFile   = $array["message"]["documentMessage"]["mimetype"];//mimetype do arquivo
            $titleFile      = $array["message"]["documentMessage"]["title"];//tiutlo do documento
            $pageFile       = $array["message"]["documentMessage"]["pageCount"];//QTD de paginas
            $mediaKeyFile   = $array["message"]["documentMessage"]["mediaKey"];//key do arquivo
            $nameFile       = $array["message"]["documentMessage"]["fileName"];//nome do documento
            $directPathFile = $array["message"]["documentMessage"]["directPath"];//path do arquivo
            $thumbnailFile  = $array["message"]["documentMessage"]["jpegThumbnail"];//thumbnail do documento

        break;

        case 'extendedTextMessage'://Tipo chat
            /**Pego as informações do array - MSG catalogo de produtos*/
            $instance               = $array["instance_key"];//Instancia
            $phoneConect            = $array["jid"];//Telefone conectado na api
            $chatid                 = $array["key"]["remoteJid"];//Contato cliente
            $idMessage              = $array["key"]["id"];//ID da mensagem
            $time                   = $array["messageTimestamp"];//Hora e data que foi enviada
            $name                   = $array["pushName"];//Nome do contato
            $textCatalog            = $array["message"]["extendedTextMessage"]["text"];//texto do catalogo
            $matchedTextCatalog     = $array["message"]["extendedTextMessage"]["matchedText"];//link do catalogo
            $descriptionCatalog     = $array["message"]["extendedTextMessage"]["description"];//descrição
            $titleCatalog           = $array["message"]["extendedTextMessage"]["title"];//Titulo do catalogo
            $thumbnailCatalog       = $array["message"]["extendedTextMessage"]["jpegThumbnail"];//thumbnail do catalogo

        break;

        case 'locationMessage'://Tipo chat
            /**Pego as informações do array - MSG localização*/
            $instance               = $array["instance_key"];//Instancia
            $phoneConect            = $array["jid"];//Telefone conectado na api
            $chatid                 = $array["key"]["remoteJid"];//Contato cliente
            $idMessage              = $array["key"]["id"];//ID da mensagem
            $time                   = $array["messageTimestamp"];//Hora e data que foi enviada
            $name                   = $array["pushName"];//Nome do contato
            $latitude               = $array["message"]["locationMessage"]["degreesLatitude"];//latitude
            $longitude              = $array["message"]["locationMessage"]["degreesLongitude"];//longitude
            $thumbnail              = $array["message"]["locationMessage"]["jpegThumbnail"];//thumbnail da localização

        break;

        case 'contactMessage'://Tipo chat
            /**Pego as informações do array - MSG contato*/
            $instance       = $array["instance_key"];//Instancia
            $phoneConect    = $array["jid"];//Telefone conectado na api
            $chatid         = $array["key"]["remoteJid"];//Contato cliente
            $idMessage      = $array["key"]["id"];//ID da mensagem
            $time           = $array["messageTimestamp"];//Hora e data que foi enviada
            $name           = $array["pushName"];//Nome do contato
            $displayName    = $array["message"]["contactMessage"]["displayName"];//Mome do contato
            $vcard          = $array["message"]["contactMessage"]["vcard"];//crd do contato

        break;

        case 'messageContextInfo'://Tipo chat
            /**Pego as informações do array - MSG botoes*/
            $instance       = $array["instance_key"];//Instancia
            $phoneConect    = $array["jid"];//Telefone conectado na api
            $chatid         = $array["key"]["remoteJid"];//Contato cliente
            $idMessage      = $array["key"]["id"];//ID da mensagem
            $time           = $array["messageTimestamp"];//Hora e data que foi enviada
            $name           = $array["pushName"];//Nome do contato
            $idBtn          = $array["message"]["buttonsResponseMessage"]["selectedButtonId"];//ID dos botoes
            $textBtn        = $array["message"]["buttonsResponseMessage"]["selectedDisplayText"];//Texto dos Botoes
            $titleList      = $array["message"]["listResponseMessage"]["tile"];//Titulo da lista
            $idList         = $array["message"]["listResponseMessage"]["singleSelectReply"]["selectedRowId"];//Id da lista

        break;

        case 'connection_update'://Tipo chat
            /**Pego as informações do array - Sincronização do whatsapp*/
            $instance       = $array["instance_key"];//Instancia
            $state          = $array["connection_state"];//status da conexão
            $time           = $array["timestamp"];//Hora e data da sincronizacão
            $description    = $array["closeReason"];//descrição
        break;


    }

    exit;

}else{

    /**
     * Retornos dos status das mensagens enviadas
     */
    switch ($type) {

        case 'message.ack':
             /**Pego as informações do array - Status de vizualização da mensagem*/
             $instance      = $array["instance_key"];//Instancia
             $chatid        = $array["key"]["remoteJid"];//Contato cliente
             $idMessage     = $array["key"]["id"];//ID da mensagem
             $status        = replaceAck($array["update"]["status"]);
            break;
        
    }

}


/**
 * Função para debugar array com print_r;
 *
 * @param [array] $array
 */
function debugArray($array){

    echo "<pre>";
    print_r($array);
}

/**
 * Função responsavel por fazer o tratamento do status das mensagens 
 *
 * @param [string] $status
 * @return string $status
 */
function replaceAck($status){

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
