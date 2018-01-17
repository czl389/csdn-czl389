<?php
//determine which page to show
if (isset($_GET['page']))
    $page = $_GET['page'];
else
    $page = 'home';

// show page
switch ($page)
{
    case 'home':
		include(V."home.php");
        break;

    case 'student':
		include(V."student.php");
        break;

    case 'tutor':
		include(V."tutor.php");
        break;

    case 'contact':
		include(V."contact.php");
        break;

    case 'about':
		include(V."about.php");
        break;

    case 'login':
		include(V."login.php");
        break;

    case 'logout':
		include(V."logout.php");
        break;

    case 'register':
		include(V."register.php");
        break;

    case 'registered':
		include(V."registered.php");
        break;

    case 'myinfo':
		include(V."myinfo.php");
        break;
		
    case 'modify':
		include(V."modify.php");
        break;

    case 'update':
		include(M."update.php");
        break;

    case 'appoint':
		include(V."appoint.php");
        break;		

    case 'appointed':
		include(V."appointed.php");
        break;
		
    case 'connect':
		include(M."connect.php");
        break;

	case 'more':
		include(V."more.php");
        break;

}


?>