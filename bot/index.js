const bodyParser = require('body-parser')
const request = require('request')
const http = require('http')
var express = require ('express');
const TeleBot = require('telebot');
const async = require('async')
const bot = new TeleBot('496182095:AAHminACg2Xb85KSij8x1ayIJCvZKOO43hU');
const querystring = require('querystring');

bot.on('/pantau', function(msg){
    request({
        uri: 'http://202.46.2.21/index.php/Restapi/suhuRoom',
        json: true
    }, function(error, response, body){
        if(!error && response.statusCode == 200){
            
            let message = "📢 Kondisi ruang server saat ini \n";
            var result = "";

            for(i = 0; i < 5; i++){
                
                let kd_room = "\n\n🏢 Kode Ruang : " + body[i].kd_room;
                let suhu = "\n☀️ Suhu : " + body[i].suhu + " °C"; 
                let kelembapan = "\n💧 Kelembapan : " + body[i].kelembapan + " %";
                let waktu = "\n🕐 Waktu : " + body[i].time;

                result += kd_room + suhu + kelembapan + waktu;
                
            }

            message += result;
            return bot.sendMessage(msg.chat.id, message);          
        }
    })
});

// On commands
bot.on(['/start'], msg => {

    var post_data = querystring.stringify({
        'chat_id' : msg.from.id
    });

    var postOptions = {
        host: '202.46.2.21',
        port: '80',
        path: '/index.php/Restapi/addChatID',
        method: 'POST',
        headers: {
            'Content-Type' : 'application/x-www-form-urlencoded',
            'Content-Length' : Buffer.byteLength(post_data)
        }
    };

    var post_req = http.request(postOptions, function(res){
        res.setEncoding('utf-8');
        res.on('data', function(chunk){
            console.log('Response: ' + chunk);
        });
    });

    post_req.write(post_data);
    post_req.end();

    
    let replyMarkup = bot.keyboard([
        ['/pantau']
    ], {resize: true});

    return bot.sendMessage(msg.chat.id, "Selamat datang "+msg.from.first_name+", di sistem monitoring ruang server", 
            {replyMarkup});

});

bot.on('*', (msg, self) => {
    let id = msg.from.id;
    let replyToMessage = msg.message_id;
    let type = self.type;
    let parseMode = 'html';

    if(type == 'text'){
        return bot.sendMessage(
            id, `Saya tidak mengerti maksud anda.. 🙏🏻`, {replyToMessage, parseMode}
        );
    }else if(type == 'command'){
        if(msg.text != "/pantau" || msg.text != "/start"){
            return bot.sendMessage(id, 'saya tidak mengerti maksud anda.. 🙏🏻', {replyToMessage});
        }
    }
});

bot.start();