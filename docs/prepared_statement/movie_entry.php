<?php
//$movie_id = isset($_GET['movie_id']);
$movie_title = isset($_GET['movie_title']);
$movie_descripion = isset($_GET['movie_descripion']);
$movie_pic = isset($_GET['movie_pic']);
$screen_number = isset($_GET['screen_number']);
$screen_time = isset($_GET['screen_time']);

class movie
{
    public static function insert($movie_title,$movie_descripion,$movie_pic,$screen_number,$screen_time){
        
        $php_cinema_db = new PDO('mysql:host=localhost;dbname=php_cinema;charset=utf8', 'root', '');
        
        try {
            
          $movie_id = ""; 
            
          $ticket_sql = 'insert into movie(movie_id, ,movie_title, movie_descripion, movie_pic)'
          . ' values(:movie_id, ,:movie_title, :movie_descripion, :movie_pic)'
          . 'ON DUPLICATE KEY UPDATE movie_id = LAST_INSERT_ID(movie_id)'; 
            
            $new_ticket = $php_cinema_db->prepare($ticket_sql);
            $new_ticket->bindParam(':movie_id', $movie_id);
            $new_ticket->bindParam(':movie_title', $movie_title);
            $new_ticket->bindParam(':movie_descripion', $movie_descripion);
            $new_ticket->bindParam(':movie_pic', $movie_pic);
            $new_ticket->execute();
            $ticket_newId = $db->lastInsertId();
            
          $screen_sql = 'insert into screens';  
            
            $screens->bindParam(':screen_id', $screen_time);
            $screens->bindParam(':screen_number', $screen_number);
            $screens->bindParam(':screen_time', $screen_time);
            $screens->execute();
            
            $ticket_newId = $db->lastInsertId(); 
          
            $results_sql = 'select * ROM ticket_order, screens ,clients WHERE ticket_order.order_id = screens.screen_id'
                    . 'ticket_order.order_id = clients.client_id order by client_id limit 1';
            
            $results = $php_cinema_db->prepare($results_sql);
            
            $row = $results->fetch();
            
            echo  json_encode($row);  
            
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
            
        
    }
}

movie::insert($movie_title,$movie_descripion,$movie_pic,$screen_number,$screen_time);

?>
   
