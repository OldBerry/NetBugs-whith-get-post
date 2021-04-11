<?php
if (!empty($_GET["page"]))
{
    $page = $_GET["page"];
}
else {
    $page = "Lending";
}
include "pages/$page.php";