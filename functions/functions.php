<?php
    function displayCookie(){
        $value = rand(0,2);
              if($value==0){
                  $key = "love";
              }
              elseif($value==1){
                  $key = "whatever";
              } elseif($value==2){
                  $key = "motivation";
              }
         printMessage($key);
         getEmoji(rand(0,4));
    }
    function image(){
        echo "<img id ='reel' src='img/cooki2.png' alt = '$symbol' title = '".ucfirst($symbol)."' width='550'/>";
    }
    function getEmoji($randomValue){
        switch ($randomValue) {
            case 0: $emoji = "confused";
                break;
            case 1: $emoji = "sad";
                break;
            case 2: $emoji = "excited";
                break;
            case 3: $emoji = "love";
                break;
            case 4: $emoji = "happy";
                break;
        }
         echo "<img id ='reel2' src='img/$emoji.png' alt = '$symbol' title = '".ucfirst($symbol)."' width='30' />";
    }
    function printMessage($key){
        
        $love = array( "Congratulations! You'll marry soon","The one you love is closer than you think", "Love yourself first.",
                       "You will find your love pretty soon!", "Love is like sweet nectarine, good to the last drop.");
        $whatever = array( "Bad, better pick another cookie", "Oops! You'll be hungry in one hour.", "Ignore the previous cookie.",
                           "meh.", "I cannot help, for I'm just a cookie");
        $motivation= array( "New day is a new chance", "Knowledge is power, but enthusiasm pulls the swicth",
                            "Smile, it'll make the world brighter", "Begin... the rest is easy.",
                            "Your hard work is about to pay off.");
        
         $randM= rand(0, count($love)-1);
         for($i=0; $i<9; $i++){
             echo "</br>";
         }
        if($key=="love"){
            print_r($love[$randM]);
        }
        elseif($key=="whatever"){
            print_r($whatever[$randM]);
        }
         elseif($key=="motivation"){
            print_r($motivation[$randM]);
        }
          image();
    }

?>
