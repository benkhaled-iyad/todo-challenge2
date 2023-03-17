<?php

switch($vars['action']){
    case "list":{
        $userID = $_COOKIE['username'];
        if (!$userID) {
            header("Location: index.php");
        }
        $items = $db->query("SELECT * FROM items where userID='$userID'")->fetchAll();
        
        include("view/header.php");
        include("view/list.php");
        include("view/footer.php");
        
        exit;
    }break;

    case "do_add":{
        $db->query("INSERT INTO items (title, userID) VALUES (?, ?)",$vars['title'], $_COOKIE['username']);
        header("location: action.php");
        exit;        
        
    }break;
    
    case "delete":{
        $db->query("DELETE FROM items WHERE item_id=(?)", $vars['item_id']);
        header("location: action.php");
        exit;        
    }break;
    
    case "do_edit":{
        $db->query("UPDATE items SET title=(?) WHERE item_id=(?)", $vars['item_title'], $vars['item_id']);
        header("location: action.php");
        exit;
    }break;
    
    case "help":{
        //some code here to show help 
        exit;
    }break;
    
    
}

?>