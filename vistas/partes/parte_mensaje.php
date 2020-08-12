<?php

if(isset($error)){
    echo "<div class=\"alert alert-danger alert-dismissible fade show mt-3\" role=\"alert\">
            {$error}
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
        </div>";
}

if(isset($mensaje) && !empty($mensaje)){
    echo "<div class=\"alert alert-success alert-dismissible fade show mt-3\" role=\"alert\">
            {$mensaje}
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>           
          </div>";
}

