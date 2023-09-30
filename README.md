# Megaapi-Webhook_MegaapiToken_PHP
Webhook PHP para projetos com a api Megaapi Token Multi Device (Nova Versão)

Retornor Webhook

# Mensagens recebidas tipo texto (messageType: conversation - extendedTextMessage)
```JSON
{
  "instance_key": "megaapi-sdkfjsdijfhftrgsdfk",
  "jid": "556181278471@s.whatsapp.net",
  "messageType": "conversation",
  "key": {
    "remoteJid": "556195562618@s.whatsapp.net",
    "fromMe": false,
    "id": "23DECC1FEB57D4A269C9C24D8C69E744"
  },
  "messageTimestamp": 1688998491,
  "pushName": "Megaapi",
  "broadcast": false,
  "message": {
    "conversation": "Olá bom dia",
    "messageContextInfo": {
      "deviceListMetadata": {
        "senderKeyHash": "5NtBfGDpS10M5Q==",
        "senderTimestamp": "1688993376",
        "recipientKeyHash": "4vsArO2PIywtVA==",
        "recipientTimestamp": "1688995880"
      },
      "deviceListMetadataVersion": 2
    }
  },
  "verifiedBizName": "Megaapi"
}

{
  "instance_key": "megaapi-sdkfjsdijfhftrgsdfk",
  "jid": "556181278471@s.whatsapp.net",
  "messageType": "extendedTextMessage",
  "key": {
    "remoteJid": "556195562618@s.whatsapp.net",
    "fromMe": false,
    "id": "23DECC1FEB57D4A269C9C24D8C69E744"
  },
  "messageTimestamp": 1688998491,
  "pushName": "Megaapi",
  "broadcast": false,
  "message": {
    "conversation": "Olá bom dia",
    "messageContextInfo": {
      "deviceListMetadata": {
        "senderKeyHash": "5NtBfGDpS10M5Q==",
        "senderTimestamp": "1688993376",
        "recipientKeyHash": "4vsArO2PIywtVA==",
        "recipientTimestamp": "1688995880"
      },
      "deviceListMetadataVersion": 2
    }
  },
  "verifiedBizName": "Megaapi"
}
```

# 📄Mensagens recebidas tipo audio (messageType: audioMessage)
```JSON
{
  "instance_key": "megaapi-sdfdfhykilkjol",
  "jid": "556181278471@s.whatsapp.net",
  "messageType": "audioMessage",
  "key": {
    "remoteJid": "556195562618@s.whatsapp.net",
    "fromMe": false,
    "id": "5FD1F41408F697B674CA3ADD605687A1"
  },
  "messageTimestamp": 1688998845,
  "pushName": "Megaapi",
  "broadcast": false,
  "message": {
    "audioMessage": {
      "url": "https://mmg.whatsapp.net/v/t62.7117-24/26101326_1369464033967818_5474365542897363460_n.enc?ccb=11-4&oh=01_AdQjhLgwsDft2a7qV-McAsyclB-WoyHLITmpsL-XnI0GKA&oe=64D38814&mms3=true",
      "mimetype": "audio/ogg; codecs=opus",
      "fileSha256": "SwdQv1V6r5t6mipVz/Pahu20eqM+TgZ32eNc+6PMzs0=",
      "fileLength": "5999",
      "seconds": 4,
      "ptt": true,
      "mediaKey": "qz7L7KdrKq0iJdvI/YJe/ZjWg7hS5VoJ/FDrHDQ6o1k=",
      "fileEncSha256": "npQDLLWGHIXXsGPjyjWRUXMg1CVbf1DYJ5xjI2JY86Y=",
      "directPath": "/v/t62.7117-24/26101326_1369464033967818_5474365542897363460_n.enc?ccb=11-4&oh=01_AdQjhLgwsDft2a7qV-McAsyclB-WoyHLITmpsL-XnI0GKA&oe=64D38814",
      "mediaKeyTimestamp": "1688998842",
      "waveform": "AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA=="
    },
    "messageContextInfo": {
      "deviceListMetadata": {
        "senderKeyHash": "5NtBfGDpS10M5Q==",
        "senderTimestamp": "1688993376",
        "recipientKeyHash": "4vsArO2PIywtVA==",
        "recipientTimestamp": "1688995880"
      },
      "deviceListMetadataVersion": 2
    }
  },
  "verifiedBizName": "Megaapi"
}
```

# 📄Mensagens recebidas tipo video (messageType: videoMessage)
```JSON
{
  "instance_key": "megaapi-fgfhuhkyjytodwairefjrdfg",
  "jid": "556181278471@s.whatsapp.net",
  "messageType": "videoMessage",
  "key": {
    "remoteJid": "556195562618@s.whatsapp.net",
    "fromMe": false,
    "id": "DB14180A5E463B5C8E07F1FEFA705EF9"
  },
  "messageTimestamp": 1688998950,
  "pushName": "Megaapi",
  "broadcast": false,
  "message": {
    "videoMessage": {
      "url": "https://mmg.whatsapp.net/v/t62.7161-24/32575829_762500995613895_3138389360331200724_n.enc?ccb=11-4&oh=01_AdSNhvooGVUqIzjMzTGb5V0nI4TopPZ_5309zmjycD7dsQ&oe=64D36D47&mms3=true",
      "mimetype": "video/mp4",
      "fileSha256": "b6z2N6v3uBPue2q29GTMk6TiBjUgHibivf07PsY6Cyg=",
      "fileLength": "487315",
      "seconds": 2,
      "mediaKey": "ssFWeyqJ/bkZS9rstMp2OBNIJnnZXuFlXXmOekQDU0w=",
      "height": 672,
      "width": 368,
      "fileEncSha256": "IZDtgaZX0Pes2JpHuDPn5ZqBwToDcEnxZzPPeu0+K30=",
      "directPath": "/v/t62.7161-24/32575829_762500995613895_3138389360331200724_n.enc?ccb=11-4&oh=01_AdSNhvooGVUqIzjMzTGb5V0nI4TopPZ_5309zmjycD7dsQ&oe=64D36D47",
      "mediaKeyTimestamp": "1688998949",
      "jpegThumbnail": "/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEABsbGxscGx4hIR4qLSgtKj04MzM4PV1CR0JHQl2NWGdYWGdYjX2Xe3N7l33gsJycsOD/2c7Z//////////////8BGxsbGxwbHiEhHiotKC0qPTgzMzg9XUJHQkdCXY1YZ1hYZ1iNfZd7c3uXfeCwnJyw4P/Zztn////////////////CABEIAEgAJwMBIgACEQEDEQH/xAAvAAACAwEBAAAAAAAAAAAAAAAABAEDBQIGAQEBAQEAAAAAAAAAAAAAAAAAAgED/9oADAMBAAIQAxAAAABm+y3CvDkCY4EdwAZsmkSEqNpNw4nuenoDorleizw3zjebqze4WFc8tUNYtwZWwBs//8QAJRAAAgICAQMDBQAAAAAAAAAAAQIAAwQRIRQxUwUSQRATIDNh/9oACAEBAAE/AOmo8awYmOF/Us6TH8SzpKfGs6bH8SwCN2A+uoNA7M2DyPwChlYHtAABMnPFNntA3KfU6bCAQQYOYOFmZYa6uO5hCNxBUvx3Ex299KH+QBtkHt8TOJCgRK2LFjKUZLeRMcD7Y0JvczRwsZiDwZjgs2yYi+1QBFYTIAepo7gtMAozCCdTj+VZd6jSAVRty01ltgiY+SlJ3KfVqDw5Kz//xAAYEQACAwAAAAAAAAAAAAAAAAAAAREgMP/aAAgBAgEBPwDFkV//xAAbEQABBAMAAAAAAAAAAAAAAAABABAgMREhQf/aAAgBAwEBPwCQ2VymFrMf/9k=",
      "streamingSidecar": "k+W/Hld8v15dSWBl+avkELz4oZs/ozeeUUDfMEsUuHrXZNkOdXMJKM7qCAATth03G+B5XMMFlVhfnImd5Oz4H77D5jVoGKBcHEg+RbLEE8M="
    },
    "messageContextInfo": {
      "deviceListMetadata": {
        "senderKeyHash": "5NtBfGDpS10M5Q==",
        "senderTimestamp": "1688993376",
        "recipientKeyHash": "4vsArO2PIywtVA==",
        "recipientTimestamp": "1688995880"
      },
      "deviceListMetadataVersion": 2
    }
  },
  "verifiedBizName": "Megaapi"
}
```

# 📄Mensagens recebidas tipo imagem (messageType: imageMessage)
```JSON
{
  "instance_key": "megaapi-dfgdfgfddflkyoreif4",
  "jid": "556181278471@s.whatsapp.net",
  "messageType": "imageMessage",
  "key": {
    "remoteJid": "556195562618@s.whatsapp.net",
    "fromMe": false,
    "id": "5496701AC02ECA38DF6D086E3C4EEF00"
  },
  "messageTimestamp": 1688999019,
  "pushName": "Megaapi",
  "broadcast": false,
  "message": {
    "imageMessage": {
      "url": "https://mmg.whatsapp.net/v/t62.7118-24/56249636_3101883020117577_8268908827765176859_n.enc?ccb=11-4&oh=01_AdR_GrfvFRBUF01YUeeuNzgUQsl8DJIYk2bhIpniP3fb0g&oe=64D37060&mms3=true",
      "mimetype": "image/jpeg",
      "fileSha256": "CrHzEMZm+d6kfqmivqcKYmdcpoQcIgk6BpaYKPsR7Xw=",
      "fileLength": "68223",
      "height": 1599,
      "width": 899,
      "mediaKey": "hYhJzBNqomEcqJChup1tThacMeAZGnC1mrES+7hgnMg=",
      "fileEncSha256": "tuT5APp667FAD0EnwziX0ysNZCTmv2CnkSvOZfx1yXQ=",
      "directPath": "/v/t62.7118-24/56249636_3101883020117577_8268908827765176859_n.enc?ccb=11-4&oh=01_AdR_GrfvFRBUF01YUeeuNzgUQsl8DJIYk2bhIpniP3fb0g&oe=64D37060",
      "mediaKeyTimestamp": "1688999013",
      "jpegThumbnail": "/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEABsbGxscGx4hIR4qLSgtKj04MzM4PV1CR0JHQl2NWGdYWGdYjX2Xe3N7l33gsJycsOD/2c7Z//////////////8BGxsbGxwbHiEhHiotKC0qPTgzMzg9XUJHQkdCXY1YZ1hYZ1iNfZd7c3uXfeCwnJyw4P/Zztn////////////////CABEIADwAIQMBIgACEQEDEQH/xAAuAAACAwEBAAAAAAAAAAAAAAAABQEDBgIEAQEBAQAAAAAAAAAAAAAAAAAAAQL/2gAMAwEAAhADEAAAAG0WRFJbBWdhZHCBdF0taEAHhTvEmdsXHhY3MHRZ4My5Ry6v34dhrOoEpZ//xAAjEAABBAEEAgMBAAAAAAAAAAABAAIDEQQQEiExBVEVIjJB/9oACAEBAAE/AGjaxFgVEdqlSd3rt9Kj60se9aU8oiYXKYzveX71gTSuJZIVS59LO6ATWybXFePHNm7QCpZ1UEHkO74WEzi9cvmByD3CTkLCcDEhplSuBDP4VK8tcoppbH3Ki8lkxn9L5XIX/8QAGBEAAwEBAAAAAAAAAAAAAAAAAAERECD/2gAIAQIBAT8A6YthD//EABoRAAIDAQEAAAAAAAAAAAAAAAABAhARMUH/2gAIAQMBAT8AvG7jwl2vBs0//9k=",
      "scansSidecar": "Zl9yVcohaUMRC7KxeoaF1ZVdko+93MWto4mWiSyO/cXO3U3aj0Ea2A==",
      "scanLengths": [
        9880,
        20519,
        11264,
        26560
      ],
      "midQualityFileSha256": "nw+qKVvr6rr8qFSOhF+MzXriEVUE+mi+1vUXlTjxYT8="
    },
    "messageContextInfo": {
      "deviceListMetadata": {
        "senderKeyHash": "5NtBfGDpS10M5Q==",
        "senderTimestamp": "1688993376",
        "recipientKeyHash": "4vsArO2PIywtVA==",
        "recipientTimestamp": "1688995880"
      },
      "deviceListMetadataVersion": 2
    }
  },
  "verifiedBizName": "Megaapi"
}
````

# 📄Mensagens recebidas tipo documento (messageType: documentMessage)
{
  "instance_key": "megaapi-sdfjrkerurgtrtgrtfg",
  "jid": "556181278471@s.whatsapp.net",
  "messageType": "documentMessage",
  "key": {
    "remoteJid": "556195562618@s.whatsapp.net",
    "fromMe": false,
    "id": "8C214F71959E3EA008D129EE1B743334"
  },
  "messageTimestamp": 1688999107,
  "pushName": "Megaapi",
  "broadcast": false,
  "message": {
    "documentMessage": {
      "url": "https://mmg.whatsapp.net/v/t62.7119-24/21583374_1294410024800880_1234675654224783648_n.enc?ccb=11-4&oh=01_AdQK_wZZVPotOJzA424DSRToRyBhVxp2gckG6nYJX69BrA&oe=64D37300&mms3=true",
      "mimetype": "application/pdf",
      "fileSha256": "NOw6/zCb33IZFUusxXGnejT2iNscny06BgMuirkSHNY=",
      "fileLength": "1985112",
      "pageCount": 9,
      "mediaKey": "ikja1LLePWQzb+hMjP9Zk4Bmf9wWceeImWZ1i8YpC30=",
      "fileName": "[ REAL ] WHATSAPP INBANÍVEL EM 3 HORAS.pdf",
      "fileEncSha256": "054tpGzSpTb8Sfz3WbkbtJEd8WpggEN5P5GRiWCNJww=",
      "directPath": "/v/t62.7119-24/21583374_1294410024800880_1234675654224783648_n.enc?ccb=11-4&oh=01_AdQK_wZZVPotOJzA424DSRToRyBhVxp2gckG6nYJX69BrA&oe=64D37300",
      "mediaKeyTimestamp": "1688999106",
      "thumbnailDirectPath": "/v/t62.36145-24/24267706_1315162849404562_9002310990058726372_n.enc?ccb=11-4&oh=01_AdQrhxNeSvh0CfHJygTsCuzHr1AzCab10Lc9nJ9XwPMEaw&oe=64D38FAE",
      "thumbnailSha256": "4rwcgRe+kzY4kqEZN8jS5hbZJ2gIwz1Oiq6GnUOljoc=",
      "thumbnailEncSha256": "Vkz+fW71U0S1/yNSvpAFJ10ulmo02fw8Sui2GYVz+WY=",
      "jpegThumbnail": "/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEABERERESERMVFRMaHBkcGiYjICAjJjoqLSotKjpYN0A3N0A3WE5fTUhNX06MbmJiboyiiIGIosWwsMX46/j///8BERERERIRExUVExocGRwaJiMgICMmOiotKi0qOlg3QDc3QDdYTl9NSE1fToxuYmJujKKIgYiixbCwxfjr+P/////CABEIAGAARAMBIgACEQEDEQH/xAAxAAADAAMBAQAAAAAAAAAAAAAABAYBAwcCBQEBAQEBAQAAAAAAAAAAAAAAAAECAwT/2gAMAwEAAhADEAAAAPuILzBR6J/TZTEyFNukw7OZJYiPrZSzya/dZGgVG0TtQGbBzlVN7ytocxa0K+OZj5zOK7CZJY34H35HPB8QGH8Ig95TF7ABr0xEzSytm1hLyP6FwY1eA7IBLDyfQvhpM5pcE1mjEnCjDoBga//EADcQAAEDAgIGCQMCBwEAAAAAAAEAAgMEEQUSBlFSkZKyExUWITE0QVNzNWJ0IoEQICMyRGFxof/aAAgBAQABPwDGMSqqLEKalhyWljBu5P0hxSnmnhbFA/oz3uyPT9IsWH+Ozhcu1WIbES7VYhsRLtViGxEu1WIe3EodKsSzm0UCp5DLBDIQAXxtcf3C0u+qUvwDmKklljkeWTvOY3LgSLo1FQQQZpLHx/Uf5qLyVL8LOVaXHLilP+MrFWKsf4WOpWKsVReSpfhZyrTEkYnTAC5NOphNA9zJYntcBcjUumJF8rrKN75iQxpJAuUaKuuQad1wNYQpK1zsogcT/wBCNDXi16Z+8J7zG8se1zXA2IKovJUvws5Vpk15xSkLPEQBSzYg6pfOD0b3geC6bEg4/wBV1yFDHV07i6M2JFlFX1kbA0xAkG5KdXVTvGEeKkrK91hGAyxN/VSsqZZOklN3Ki8lS/CzlWlpIxSn/GHMUXTHvc29tZKzu2V0h1LOVmdrKzHWUSSO8qi8lS/CzlWlNM+oxOEMI8qOYrq2p2411bU7ca6rqduNHCqnbiXVlTtxrqyp240/DahrHOLo7AEqi8lS/CzlWlbCcRiIeW2pRzFZ5PcfxFZ5PcfxFZ5PcfxFZ5PcfxFZ5PcfxFZ5PcfxFF77G8j95VF5Kl+FnKtL/qcH4w5iunf9vCF0z+/+3v8AtC6eI+IdwtQmiHiHcLU6Z3eBbL/toRmeT4M4QnuLu828PQWVF5Kl+FnKtL/qUH4wQsfVu8IWNu9u8IuA9RvCzja/9Wdusb1nbrG9ZgVReSpfhZyrTD6jB+MrAat6/SB6ItB1b0ANY3qzfDu3hZRrbvCIFvRUXkqX4Wcqx/Cayvro5YLANhDF2cxbbHEV2bxXbHEUdGsUcLF44iuy+Ja27yuzGJfauzGJfYuy+Ja2KmYY6eBjvFsbWn9gv//EACARAAEDBAIDAAAAAAAAAAAAAAEAAhEDMFKREFEhQZL/2gAIAQIBAT8AtANjyTKhnZRp0+3fRQDQIE8EO9OCh+Q0ofkNKH5DVz//xAAkEQABAwEIAwEAAAAAAAAAAAABAAIREgMEECJRU2GSIDBBYv/aAAgBAwEBPwCDEyImPUQ6oQAsw+Kp3Ck4Pbbl2S0aBpCovW83qqLzut6qi87revhIUjCBooGij8hRwMP/2Q==",
      "thumbnailHeight": 480,
      "thumbnailWidth": 339
    },
    "messageContextInfo": {
      "deviceListMetadata": {
        "senderKeyHash": "5NtBfGDpS10M5Q==",
        "senderTimestamp": "1688993376",
        "recipientKeyHash": "4vsArO2PIywtVA==",
        "recipientTimestamp": "1688995880"
      },
      "deviceListMetadataVersion": 2
    }
  },
  "verifiedBizName": "Megaapi"
}

# 📄Mensagens recebidas tipo localização (messageType: locationMessage)
{
  "instance_key": "megaapi-rdtdgffbcmbfjgnbjfkbgfg",
  "jid": "556181278471@s.whatsapp.net",
  "messageType": "locationMessage",
  "key": {
    "remoteJid": "556195562618@s.whatsapp.net",
    "fromMe": false,
    "id": "F898EA4B2090B20B31A7355A57FA252A"
  },
  "messageTimestamp": 1688999857,
  "pushName": "Megaapi",
  "broadcast": false,
  "message": {
    "locationMessage": {
      "degreesLatitude": -15.7666614,
      "degreesLongitude": -48.2620458
    },
    "messageContextInfo": {
      "deviceListMetadata": {
        "senderKeyHash": "5NtBfGDpS10M5Q==",
        "senderTimestamp": "1688993376",
        "recipientKeyHash": "4vsArO2PIywtVA==",
        "recipientTimestamp": "1688995880"
      },
      "deviceListMetadataVersion": 2
    }
  },
  "verifiedBizName": "Megaapi"
}

# 📄Mensagens recebidas tipo contato (messageType: contactMessage)

{
  "instance_key": "megaapi-dgfyjuikhujsdrgfthjvum",
  "jid": "556181278471@s.whatsapp.net",
  "messageType": "contactMessage",
  "key": {
    "remoteJid": "556195562618@s.whatsapp.net",
    "fromMe": false,
    "id": "65DC5A8B44D117A791EF84855ED866B8"
  },
  "messageTimestamp": 1688999946,
  "pushName": "Megaapi",
  "broadcast": false,
  "message": {
    "contactMessage": {
      "displayName": "Mega Api - api integração com wpp",
      "vcard": "BEGIN:VCARD\nVERSION:3.0\nN:wpp;Mega Api - api integração;com;;\nFN:Mega Api - api integração com wpp\nORG:Mega Api - api integração com wpp\nTITLE:\nitem1.TEL;waid=556181926137:+55 61 8192-6137\nitem1.X-ABLabel:Celular\nX-WA-BIZ-DESCRIPTION:A melhor api whatsapp do Brasil\nX-WA-BIZ-NAME:Mega Api - api integração com wpp\nEND:VCARD"
    },
    "messageContextInfo": {
      "deviceListMetadata": {
        "senderKeyHash": "5NtBfGDpS10M5Q==",
        "senderTimestamp": "1688993376",
        "recipientKeyHash": "4vsArO2PIywtVA==",
        "recipientTimestamp": "1688995880"
      },
      "deviceListMetadataVersion": 2
    }
  },
  "verifiedBizName": "Megaapi"
}

# 📄Mensagens recebidas tipo sticker (messageType: stickerMessage)
{
  "instance_key": "megaapi-sdfsjkrtgopsdjfkjhdfdfg",
  "jid": "556181278471@s.whatsapp.net",
  "messageType": "stickerMessage",
  "key": {
    "remoteJid": "556195562618@s.whatsapp.net",
    "fromMe": false,
    "id": "53A80274EFAEA9AA2DB3C0B127004574"
  },
  "messageTimestamp": 1689000108,
  "pushName": "Megaapi",
  "broadcast": false,
  "message": {
    "stickerMessage": {
      "url": "https://mmg.whatsapp.net/v/t62.15575-24/26455351_283992877528341_4267243168817038757_n.enc?ccb=11-4&oh=01_AdTIo26ZG06u-m7gOvYgZ2rzQTOzwGT7ofsKSGdiqZ2OaA&oe=64D39541&mms3=true",
      "fileSha256": "nkX+umCp5W00cOg2j9B0pUcSZEKPQmvhraKSX0pE72k=",
      "fileEncSha256": "Up8Z0NoHud0IDZH76UTlf50WsLpmc97DGvl92GDWIhU=",
      "mediaKey": "8uesIQkZYGLqSJxS+HUP7EpySM93Ghmk9yjOpUhAmrA=",
      "mimetype": "image/webp",
      "directPath": "/v/t62.15575-24/26455351_283992877528341_4267243168817038757_n.enc?ccb=11-4&oh=01_AdTIo26ZG06u-m7gOvYgZ2rzQTOzwGT7ofsKSGdiqZ2OaA&oe=64D39541",
      "fileLength": "493618",
      "mediaKeyTimestamp": "1657737199485",
      "firstFrameLength": 6114,
      "firstFrameSidecar": "hihAfjPuyHtzYw==",
      "isAnimated": true,
      "stickerSentTs": "1689000107648",
      "isAvatar": false
    },
    "messageContextInfo": {
      "deviceListMetadata": {
        "senderKeyHash": "5NtBfGDpS10M5Q==",
        "senderTimestamp": "1688993376",
        "recipientKeyHash": "4vsArO2PIywtVA==",
        "recipientTimestamp": "1688995880"
      },
      "deviceListMetadataVersion": 2
    }
  },
  "verifiedBizName": "Megaapi"
}

# 📄Mensagens recebidas enquete, pedidos, catalogos ...(messageType: messageContextInfo)

Esses outros tipos adicionados recentes no whatsapp, recomendamos testar utilizando o site

https://webhook.site/

para que você possa detalhar melhor os retornos do whatsapp.

{
  "instance_key": "megaapi-ksdhfjsdfsdfsdf",
  "jid": "556181278471@s.whatsapp.net",
  "messageType": "messageContextInfo",
  "key": {
    "remoteJid": "556195562618@s.whatsapp.net",
    "fromMe": false,
    "id": "93B9DA99E50EE89C9CC2E8FAB30551AD"
  },
  "messageTimestamp": 1689000322,
  "pushName": "Megaapi",
  "broadcast": false,
  "message": {
    "messageContextInfo": {
      "deviceListMetadata": {
        "senderKeyHash": "5NtBfGDpS10M5Q==",
        "senderTimestamp": "1688993376",
        "recipientKeyHash": "4vsArO2PIywtVA==",
        "recipientTimestamp": "1688995880"
      },
      "deviceListMetadataVersion": 2
    },
    "interactiveMessage": {
      "nativeFlowMessage": {
        "buttons": [
          {
            "name": "review_order",
            "buttonParamsJson": "{\"reference_id\":\"4MB04BD81Q0\",\"order\":{\"status\":\"canceled\"}}"
          }
        ],
        "messageParamsJson": "{}"
      },
      "contextInfo": {
        "stanzaId": "0B90675CF538A5889039E8EAAF04C9E2",
        "participant": "556195562618@s.whatsapp.net",
        "quotedMessage": {
          "interactiveMessage": {
            "header": {
              "title": "Tedte",
              "subtitle": "Quantidade: 2"
            },
            "nativeFlowMessage": {
              "buttons": [
                {
                  "name": "review_and_pay",
                  "buttonParamsJson": "{\"currency\":\"BRL\",\"total_amount\":{\"value\":20000,\"offset\":100},\"reference_id\":\"4MB04BD81Q0\",\"type\":\"physical-goods\",\"order\":{\"status\":\"canceled\",\"subtotal\":{\"value\":20000,\"offset\":100},\"items\":[{\"retailer_id\":\"custom-item-4150ba95-1834-43cc-876b-be71cd4c1070\",\"name\":\"Tedte\",\"amount\":{\"value\":10000,\"offset\":100},\"quantity\":2}]}}"
                }
              ]
            }
          }
        }
      }
    }
  },
  "verifiedBizName": "Megaapi"
}


