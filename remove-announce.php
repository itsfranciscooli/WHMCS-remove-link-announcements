<?php

use WHMCS\View\Menu\Item as MenuItem;

add_hook('ClientAreaPrimaryNavbar', 1, function (MenuItem $primaryNavbar)
{

   if (!is_null($primaryNavbar->getChild('Announcements'))) {
       $primaryNavbar->removeChild('Announcements');
   }
}); 