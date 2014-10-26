<?php

$client_id = isset($_GET['client_id']);
$client_name = isset($_GET['client_name']);
$client_pay = isset($_GET['client_pay']);
$screen_id = isset($_GET['screen_id']);
$screen_number = isset($_GET['screen_number']);
$screen_time = isset($_GET['screen_time']);
$movie_title = isset($_GET['movie_title']);
$seat = isset($_GET['seat']);

class buy_ticket
{
    public static function insert($client_id,$client_name,$screen_id,$screen_number,$screen_time,$movie_title,$seat){
        
        $php_cinema_db = new PDO('mysql:host=localhost;dbname=php_cinema;charset=utf8', 'root', '');
        
        try {
            
          $order_id = ""; 
            
          $sql = 'insert into ticket_order(order_id, ,client_id, client_name, client_pay, screen_id, screen_number, screen_time, movie_title, seat)'
          . ' values(:order_id, ,:client_id, :client_name, :client_pay, :screen_id, :screen_number, :screen_time, :movie_title, :seat)'
          . 'ON DUPLICATE KEY UPDATE order_id = LAST_INSERT_ID(order_id)'; 
            
            $new_ticket = $db->prepare($status);
            $new_ticket->bindParam(':order_id', $order_id);
            $new_ticket->bindParam(':client_id', $number);
            $new_ticket->bindParam(':client_name', $client_name);
            $new_ticket->bindParam(':client_pay', $client_pay);
            $new_ticket->bindParam(':screen_id', $screen_id);
            $new_ticket->bindParam(':screen_number', $screen_number);
            $new_ticket->bindParam(':screen_time', $screen_time);
            $new_ticket->bindParam(':movie_title', $movie_title);
            $new_ticket->bindParam(':seat', $seat);
            $new_ticket->execute();
            
            $ticket_newId = $db->lastInsertId(); 
          
            
            
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
            
        
    }
}

buy_ticket::insert($client_id,$client_name,$screen_id,$screen_number,$screen_time,$movie_title,$seat);

?>
   