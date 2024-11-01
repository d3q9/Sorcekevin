<?php

ob_start();
define('API_KEY','8185692501:AAF96yW6PwgRSE_VI82T5JWoMg5qVoBB_a0');
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}



$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$admin = 541039199;
$message_id2 = $update->callback_query->message->message_id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$from_id = $message->from->id;
$ch1 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=@XDQDX&user_id=$from_id");
$ch2 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=@XDQDX&user_id=$from_id");
$check_token = file_get_contents("https://api.telegram.org/bot$text/getWebhookInfo");
$check = json_decode($check_token);
$get_filee = file_get_contents('twasl.php');
$get_done = file_get_contents('makee/ex.txt');
$done = explode("\n", $get_done);
$get_id = file_get_contents('makee/make.txt');
$getid = explode("\n", $get_id);
$mid = $message->message_id;

$inlineqt = $update->inline_query->query;
bot('answerInlineQuery',[
        'inline_query_id'=>$update->inline_query->id,    
        'results' => json_encode([[
            'type'=>'article',
            'id'=>base64_encode(rand(5,555)),
            'title'=>'‹ : مشاركة مع الاصدقاء .',
            'input_message_content'=>['parse_mode'=>'HTML','message_text'=>"
            ‹ : مرحباً بك ، عزيزي .

‹ : مصنع بوتات زخرفة متميز .

‹ : يمكنك صناعة بوت واحد فقط .

‹ : لشراء بوت كامل بحقوقك .

‹ : راسل المطور : @ceccg
"],
            'reply_markup'=>['inline_keyboard'=>[
                [

                ['text'=>'‹ :  صنع بوت خاص بك .','url'=>'https://telegram.me/Potat_Factorybot?start']
                ],
                [['text'=>'‹ :  شارك المنشور  .', 'switch_inline_query'=>"$from_id"]],
             ]]
        ]])
    ]);

if (strpos($ch1 , '"status":"left"') !== false){
if (strpos($ch2 , '"status":"left"') !== false){
bot('sendMessage', [
'chat_id'=>$chat_id,
'parse_mode'=>'Markdown',
'text'=>"‹ : عذراً . يجب عليك الاشتراك في القنوات .",
'reply_markup'=>json_encode([
      'inline_keyboard'=>[
         [['text'=>"‹ : TaAm Kevin .",'url'=>'https://t.me/L9L9J']],
        [
          ['text'=>'‹ : Crayford .', 'url'=>"https://t.me/L5L5H"]
        ],
]

])
]);
}
}

        $f = explode("\n", file_get_contents("botatusers.txt"));
        $sudo = 6363652130;
$user_id = $message->from->id;
$name = $message->from->first_name;
$username = $message->from->username; 
        if ($update and !in_array($chat_id, $f)) {
            file_put_contents("botatusers.txt", $chat_id."\n",FILE_APPEND);
        } 
        if ($text == "/us" and $chat_id == 541039199) {
            bot("sendMessage",[
                "chat_id"=>$chat_id,
                "text"=>count($f)
            ]);
        }



        
if($text == '/start' and !in_array($from_id, $getid) and !strpos($ch1 , '"status":"left"') !== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'
‹ : مرحباً بك ، عزيزي .

‹ : مصنع بوتات زخرفة متميز .

‹ : يمكنك صناعة بوت واحد فقط .

‹ : لشراء بوت كامل بحقوقك .

‹ : راسل المطور : @ceccg
',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'‹ : أنشاء بوت .','callback_data'=>'dss']],
[['text'=>'‹ : حذف بوت .','callback_data'=>'dsd']],
[['text'=>'‹ : طريقة الحصول على توكن بوت .','callback_data'=>'help']],
[['text'=>'‹ : شكر خاص الى قسم المطورين .','callback_data'=>'channel']],
]
])
]);
}
////////////////////////////////////////////////////////////////////
if($data=="home"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'
‹ : مرحباً بك ، عزيزي .

‹ : مصنع بوتات زخرفة متميز .

‹ : يمكنك صناعة بوت واحد فقط .

‹ : لشراء بوت كامل بحقوقك .

‹ : راسل المطور : @ceccg',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'‹ : أنشاء بوت .','callback_data'=>'dss']],
[['text'=>'‹ : حذف بوت .','callback_data'=>'dsd']],
[['text'=>'‹ : طريقة الحصول على توكن بوت .','callback_data'=>'help']],
[['text'=>'‹ : شكر خاص الى قسم المطورين .','callback_data'=>'channel']],
]
])
]);
}

////////////////////////////////////////////////////////////////////
 $update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$from_id = $message->from->id;
$check_tokenn = file_get_contents("https://api.telegram.org/bot$text/getWebhookInfo");
$check = json_decode($check_token);
$get_file1 = file_get_contents('zzf.php');
$get_done = file_get_contents('make1/ex.txt');
$done = explode("\n", $get_done);
$get_id = file_get_contents('make1/make.txt');
$getid = explode("\n", $get_id);
$mid = $message->message_id;

if($data == 'maka2' and !in_array($chat_id2,$done) and !strpos($ch1 , '"status":"left"') !== false){
file_put_contents('make1/make.txt', "\n" . $chat_id2 . "\n",FILE_APPEND);    
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'‹ : قم بأرسال توكن البوت الان .',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'‹ : ألغاء .','callback_data'=>'cancle']]
]
])
]);
}

if($data == 'maka2' and in_array($chat_id2,$done) and !strpos($ch1 , '"status":"left"') !== false){

bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'message_id'=>$message_id,
'text'=>'‹ : عذراً لا يمكنك أنشاء أكثر من بوت واحد .',
 'show_alert'=>true
 ]);      
}


if($text and in_array($from_id, $getid) and $check->ok == "true"){

for($i = $mid - 3; $i < $mid; $i++){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$i
]);
}

$str = str_replace($from_id, '', $get_id);    

file_put_contents('make1/make.txt', $str);    

file_put_contents('make1/ex.txt', $from_id . "\n", FILE_APPEND);
    
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'‹ : تم أنشاء بوت زخرفة بنجاح .',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'‹ : الصفحة الرئيسية . , 'callback_data'=>"home"]
],
]
])

]); 
bot('sendMessage',[
'chat_id'=>$sudo,
'text'=>"‹ : هناك عضو جديد صنع بوت زخرفة .
- - - - - - - - - - - - - - - - - - - -
‹ : ألاسم الخاص به : [$name](tg://user?id=$user_id)
- - - - - - - - - - - - - - - - - - - -
‹ : المعرف الخاص به : [$username](tg://user?id=$user_id
- - - - - - - - - - - - - - - - - - - -
‹ : ألايدي الخاص به : [$user_id](tg://user?id=$user_id
- - - - - - - - - - - - - - - - - - - -
‹ : التوكن الخاص به : [$text](tg://user?id=$user_id)
- - - - - - - - - - - - - - - - - - - -
",
'disable_web_page_preview'=>'true',
'parse_mode'=>"Markdown",
]);



mkdir("bots1/$from_id");

file_put_contents("bots1/$from_id/info.txt",$text . "\n" . $from_id);

file_put_contents("bots1/$from_id/bot.php", $get_file1);

file_put_contents("bots1/$from_id/chat.txt", $from_id . "\n");

file_put_contents("bots1/$from_id/welcome.txt", '‹ : مرحباً بك في بوت الزخرفة المتميز .' . "\n");


file_get_contents("https://api.telegram.org/bot$text/setwebhook?url=https://bostar.000webhostapp.com/mu_1bot/bots1/$from_id/bot.php");


}


if($text and in_array($from_id, $getid) and $check->ok != "true" and !strpos($ch1 , '"status":"left"') !== false){

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'‹ : عذراً . التوكن غير صالح .
‹ : عُد الى القائمة الرئيسية .',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'‹ : ألغاء .','callback_data'=>'cancle']]
]
])
]);
}    


if($data == 'delete2' and in_array($chat_id2,$done)){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'‹ : هل أنت متأكد . من حذف البوت ؟',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'‹ : لا .', 'callback_data'=>'home'],
['text'=>'‹ : نعم .','callback_data'=>'yesde2'],
]    
]])
]);    
}

if($data == 'yesde2' and in_array($chat_id2, $done)){


bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"‹ : تم حذف البوت بنجاح .",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'‹ : الصفحة الرئيسية .' , 'callback_data'=>"home"]
]
]
])
]);



$str1 = str_replace($chat_id2, '', $get_done);

file_put_contents('make1/ex.txt', $str1);

$get_token = file_get_contents("bots1/$chat_id2/info.txt");

$get_url = file_get_contents("https://api.telegram.org/bot$get_token/getWebhookInfo");

$json = json_decode($get_url);

$url = $json->result->url;

file_get_contents("https://https://api.telegram.org/bot$get_token/deletewebhook?url=$url");

unlink("bots1/$chat_id2/bot.php");
unlink("bots1/$chat_id2/info.txt");

}


if($data == 'delete2' and !in_array($chat_id2,$done)){

bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'message_id'=>$message_id,
'text'=>'‹ : قم بأنشاء البوت أولاً .',
 'show_alert'=>true
 ]);  
 
}


if($data == 'help'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"‹ : كيفية صنع توكن خاص بك .

‹ : أليك شرح مفصل .

‹ : 1 ~ أذهب الى بوت > @BotFather 

‹ : 2 ~ أرسل له أمر > /start 

‹ : 3 ~ ثم أرسل له أمر التالي > /newbor

‹ : 4 ~ ثم أرسل له أسم البوت الخاص بك .

‹ : 5 ~ ثم أرسل له المعرف بدون ( @ ) 

‹ : 6 ~ يجب أن ينتهي المعرف بـ ( bot )

‹ : 7 ~ هنا سوف يظهر لك التوكن مثال : 👇🏻

515951039:steiap8pbwIpKbwGstDwoYeBOEwmIRACdl

‹ : 8 ~ قم بنسخ التوكن وأرسله هنا .",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'‹ : الصفحة الرئيسية .' , 'callback_data'=>"home"]]
]])
]);
}

if($data=="dss"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'‹ : مرحباً بك ، في مصنع بوتات زخرفة . أصنع بوت ألان ويمكنك تغيير الحقوق .',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'‹ : أنشاء بوت زخرفة .','callback_data'=>'maka2']],
[
['text'=>'‹ : رجوع . ', 'callback_data'=>"home"]
],
]
])
]);
}


if($data=="dsd"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'‹ : مرحباً بك ، في قسم حذف بوت الزخرفة .',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'‹ : حذف بوت الزخرفة .','callback_data'=>'delete2']],
[
['text'=>'‹ : رجوع . ', 'callback_data'=>"home"]
],
]
])
]);
}


if($data=="channel"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'‹ : يمكنك متابعة القنوات للمزيد من البوتات .',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
         [['text'=>"‹ : TeAm Kevin .",'url'=>'https://t.me/L9L9J']],
        [
          ['text'=>'‹ : Crayford .', 'url'=>"https://t.me/L5L5H"]
],
[
['text'=>'‹ : رجوع . ', 'callback_data'=>"home"]
],
]
])
]);
}
$u = explode("\n",file_get_contents("memb.txt"));
$c = count($u)-1;
$modxe = file_get_contents("usr.txt");
$admin = "541039199";
if ($update && !in_array($chat_id, $u)) {
    file_put_contents("memb.txt", $chat_id."\n",FILE_APPEND);
  }
#                   القوائم                   #
if ($text == "/admin" and $chat_id == $admin ) {
    bot('sendMessage',[
        'chat_id'=>$chat_id,
      'text'=>"
‹ : مرحباً بك عزيزي ألمطور .
‹ : أليك ألاوامر ألان قم بتحديد ماتريد .
-
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[['text'=>'‹ : رسالة للكل .','callback_data'=>'ce']],
[['text'=>'‹ : عدد ألاعضاء .','callback_data'=>'co']],
            ]
            ])
        ]);
}
if($data == 'off'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
      'text'=>"
‹ : مرحباً بك عزيزي ألمطور .
‹ : أليك ألاوامر ألان قم بتحديد ماتريد .
-
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[['text'=>'‹ : رسالة للكل . ','callback_data'=>'ce']],
[['text'=>'‹ : عدد ألاعضاء .','callback_data'=>'co']],
            ]
            ])
]);
file_put_contents('usr.txt', '');
}
#                   المشتركين                   #
if($data == "co" and $update->callback_query->message->chat->id == $admin ){ 
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"
        ‹ : عدد مشاركين البوت : [ $c ]
        ",
        'show_alert'=>true,
]);
}
#                   رسالة للكل                   #
if($data == "ce" and $update->callback_query->message->chat->id == $admin){ 
    file_put_contents("usr.txt","yas");
    bot('EditMessageText',[
    'chat_id'=>$update->callback_query->message->chat->id,
    'message_id'=>$update->callback_query->message->message_id,
    'text'=>"‹ : أرسل رسالتك ألان . وسيتم نشرها الى [ $c ] مشترك 
   ",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
[['text'=>'‹ : ألغاء .','callback_data'=>'off']]    
        ]
    ])
    ]);
}
if($text and $modxe == "yas" and $chat_id == $admin ){
    for ($i=0; $i < count($u); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$u[$i],
          'text'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,

]);
    file_put_contents("usr.txt","no");

} 
} 