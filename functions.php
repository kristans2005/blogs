<?php

function EchoData($data){
    foreach($data as $post) {
        echo $post['title'] . "\n"; 
    }
}