<?php
class question{
    public $Question;
    public $options;
    public $answer;
    public function __construct($Question,$options,$answer){
        $this->Question = $Question;
        $this->options = $options;
        $this->answer = (int)$answer;
        
}
}
?>
<?php
$Add_Ques = new question($_GET["question"],$_GET["options"],$_GET["correct"]);
write_file($Add_Ques);
?>
<?php
function write_file($Add_Ques){
    $inp = file_get_contents('questions.json');
    $tempArray = json_decode($inp);
    array_push($tempArray, $Add_Ques);
    $jsonData = json_encode($tempArray);
    file_put_contents('questions.json', $jsonData);
}


?>