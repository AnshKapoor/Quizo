<?php
class question{
    public $Question;
    public $options;
    public $answer;
    public function __construct($Question,$options,$answer){
        $this->Question = $Question;
        $this->options = $options;
        $this->answer = (int)$answer;
        echo "Successfully created";
}
}
?>
<?php
$Add_Ques = new question($_GET["question"],$_GET["options"],$_GET["correct"]);
$json_object = json_encode($Add_Ques);
echo $json_object;
?>