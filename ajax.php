<?php 
    $answer = 'Halo. Ada yang bisa saya bantu?';

    if(isset($_GET['say']))
    {
        $say = rawurlencode($_GET['say']);
        $json = file_get_contents("https://natalia.siega20.com/Program-O-master/chatbot/conversation_start.php?bot_id=1&convo_id=&say=".$say."");
        $json_data = json_decode($json); 
        $answer = $json_data->botsay; 
    }
	echo $answer;
?>