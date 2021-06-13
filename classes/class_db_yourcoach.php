<?php

/*

 _____      __   _      ___      _      _   _             
| _ \ \    / /__| |__  / __| ___| |_  _| |_(_)___ _ _  ___
|  _/\ \/\/ / -_) '_ \_\__ \/ _ \ | || |  _| / _ \ ' \(_-<
|_|   \_/\_/\___|_.__(_)___/\___/_|\_,_|\__|_\___/_||_/__/
                                                          

                   Patrick Pulfer <patrick@pweb.solutions>

==========================================================

YourCoach Database Class

==========================================================

*/

class YourCoach_DB {

    protected $pdo;

    public $db_strings = array();


    public function __construct($_yourcoach_host, $_yourcoach_database, $_yourcoach_user, $_yourcoach_pass){

        $dsn = "mysql:host=$_yourcoach_host:3307;dbname=$_yourcoach_database;charset=utf8";
        $opt = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        $pdo = new PDO($dsn, $_yourcoach_user, $_yourcoach_pass, $opt);

        $this->pdo = $pdo;

    }

    
    public function get_Text($page, $field){
        $sql_query = $this->pdo->prepare("SELECT `Value` FROM `Strings` WHERE `Page` = :page AND `Field` = :field ");
        $sql_query->execute(['page' => $page, 'field' => $field]);
        $data = $sql_query->fetch();

        return $data['Value'];
    }


    public function form_message($form_name, $form_email, $form_message, $form_source){
        // Add to SQL
            $add = $this->pdo->prepare("INSERT INTO `Customers` (Name, Email, Contact_Form, Source, Date_Created) VALUES (?,?,?,?,?)");
            $add->execute([$form_name, $form_email, $form_message, $form_source, date("Y-m-d")]);
            if ($add->rowCount() == 1){
                echo "<head>";
                echo "<meta http-equiv=\"refresh\" content=\"0; URL='https://www.yourcoach.ie/?p=thankm' \" />";
                echo "</head><body>Processing...</body>";
            } else{return '2';}
    }

    public function form_subscribe($form_name, $form_email, $form_source, $form_token){
        // Add to SQL
            $add = $this->pdo->prepare("INSERT INTO `Customers` (Name, Email, Subscribed, Source, Date_Created) VALUES (?,?,?,?,?)");
            $add->execute([$form_name, $form_email, '1', $form_source, date("Y-m-d")]);
            if ($add->rowCount() == 1){
                echo "<head>";
                echo "<meta http-equiv=\"refresh\" content=\"0; URL='https://www.yourcoach.ie/?p=thanks' \" />";
                echo "</head><body>Processing...</body>";
            } else{return '2';}
    }

    
    public function get_Testimonials(){
        $sql_query = $this->pdo->query("SELECT `Testimonial_Message`, `Name`, `Title` FROM `Customers` WHERE `Testimonial_Message` <> '' AND `Testimonial_Visible` = 1 ORDER BY `Modified` DESC");
        $data = $sql_query->fetchAll();

        return $data;
        ;
    }

    public function get_TestimonialsShowcase(){
        $sql_query = $this->pdo->query("SELECT `Testimonial_Message`, `Name`, `Title` FROM `Customers` WHERE `Testimonial_Message` <> '' AND `Testimonial_Visible` = 1 ORDER BY `Modified` DESC LIMIT 2");
        $data = $sql_query->fetchAll();

        return $data;
        ;
    }


// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX    

    public function get_Events(){
        $data = $this->pdo->query("SELECT * FROM `Events` ORDER BY `Date_Updated` DESC")->fetchAll();
        return $data;
    }

}