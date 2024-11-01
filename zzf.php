<?php 

$get_toke = file_get_contents('info.txt');

$get_token = explode("\n", $get_toke);


$url_info = file_get_contents("https://api.telegram.org/bot$get_token[0]/getMe");

$json_info = json_decode($url_info);

$user = $json_info->result->username;

$bot_id = $json_info->result->id;

$admin = $get_token[1];

ob_start();

$API_KEY = $get_token[0];
define('API_KEY',$API_KEY);
echo "api.telegram.org/bot".API_KEY."/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME'];
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
$from_id = $update->message->from->id; 
$chat_id = $update->message->chat->id;
$text = $update->message->text;
$message = $update->message;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$admin = $get_token[1];
$rep = $message->reply_to_message;
$json = json_decode(file_get_contents('data.json'),true);
if ($text and !in_array($chat_id, explode("\n", file_get_contents('mem.txt')))) {
    file_put_contents('mem.txt', $chat_id."\n",FILE_APPEND);
}
$sudo = $get_token[1];
$name = $message->from->first_name;
$user_id = $message->from->id;
$username = $message->from->username;


  $ch = "@L9L9J";#معرف القناه

$text = $message->text;
$chat_id = $message->chat->id;
$from_id = $message->from->id;
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$ch&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$chat_id,
 'text'=>"‹ : عذراً عزيزي .
‹ : لأستخدام البوت أشترك في القناة . 
‹ : @L9L9J .",
]);return false;}

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

if ($text == '/start') {
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"‹ : مرحباً بك . $name في بوت الزخرفة .

‹ : ألبوت ألاول على التيليجرام .

‹ : يقوم البوت بزخرفة أسمك . عربي + أنكليزي

‹ : يزخرف البوت على { 10 } أشكال .",
 'parse_mode' => "MarkDown", 'disable_web_page_preview' => true, 'reply_markup' => json_encode(['inline_keyboard' => [
     [['text'=>"‹ : غير حقوقك من هنا .",'url'=>'https://t.me/ceccg']],
      [['text'=>"‹ : أصنع بوتك من هنا .",'url'=>'https://t.me/musiclmustafa?start']],
 ]]) ]);
  }
if($text !== "/start"){
$zh= json_decode(file_get_contents("https://api-victor.ml/zh.php?zh=".urlencode($text)));
$z1 = $zh->z1;
$z2 = $zh->z2;
$z3 = $zh->z3;
$z4 = $zh->z4;
$z5 = $zh->z5;
$z6 = $zh->z6;
$z7 = $zh->z7;
$z8 = $zh->z8;
$z9 = $zh->z9;
$z10 = $zh->z10;
$z11 = $zh->z11;
bot('sendmessage', ['chat_id' => $chat_id,'text' =>"$z1",
]);
bot('sendmessage', ['chat_id' => $chat_id,'text' =>"$z2",
]);
bot('sendmessage', ['chat_id' => $chat_id,'text' =>"$z3",
]);
bot('sendmessage', ['chat_id' => $chat_id,'text' =>"$z4",
]);
bot('sendmessage', ['chat_id' => $chat_id,'text' =>"$z5",
]);
bot('sendmessage', ['chat_id' => $chat_id,'text' =>"$z6",
]);
bot('sendmessage', ['chat_id' => $chat_id,'text' =>"$z7",
]);
bot('sendmessage', ['chat_id' => $chat_id,'text' =>"$z8",
]);
bot('sendmessage', ['chat_id' => $chat_id,'text' =>"$z9",
]);
bot('sendmessage', ['chat_id' => $chat_id,'text' =>"$z10",
]);
bot('sendmessage', ['chat_id' => $chat_id,'text' =>"$z11",
]);}
