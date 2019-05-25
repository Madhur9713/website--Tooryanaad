<?php
        
        foreach($navItems as $item){
            echo "<li class='scroll'><a href=\"$item[slug]\">$item[title]</a></li>";
        }
?>