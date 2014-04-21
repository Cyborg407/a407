<?

 /*
  
  +------------------------------- a407™ Beta -----------------------------------+
  +--                         Developed By BamBam0077                          --+
  +--                      Based on Open Source Projects                       --+
  +--                   Free Support: https://forum.a407.eu                    --+
  +------------------------------------------------------------------------------+
                                                                                  
  +------------------------------------------------------------------------------+  
                       GNU GENERAL PUBLIC LICENSE AGREEMENT                       
  +------------------------------------------------------------------------------+
  
  +------------------------------------------------------------------------------+
  +--   This program is free software; you can redistribute it and/or modify   --+
  +--   it under the terms of the GNU General Public License as published by   --+
  +--   the Free Software Foundation; either version 2 of the License, or      --+
  +--   (at your option) any later version.                                    --+
  +--                                                                          --+
  +--   This program is distributed in the hope that it will be useful,        --+
  +--   but WITHOUT ANY WARRANTY; without even the implied warranty of         --+
  +--   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the          --+
  +--   GNU General Public License for more details.                           --+
  +--                                                                          --+
  +--   You should have received a copy of the GNU General Public License      --+
  +--   along with this program; if not, write to the Free Software            --+
  +-- Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA --+
  +--                                                                          --+
  +------------------------------------------------------------------------------+
  +--                                           (c)2014 a407 Development Team  --+
  +------------------------------------------------------------------------------+

*/

 require_once (dirname(__FILE__).DIRECTORY_SEPARATOR.'settings'.DIRECTORY_SEPARATOR.'407.php');
 require_once (dirname(__FILE__).DIRECTORY_SEPARATOR.'settings'.DIRECTORY_SEPARATOR.'varconfig.php');
 require_once (dirname(__FILE__).DIRECTORY_SEPARATOR.'settings'.DIRECTORY_SEPARATOR.'member_functions.php');
 require_once (dirname(__FILE__).DIRECTORY_SEPARATOR.'settings'.DIRECTORY_SEPARATOR.'verify.php');
 dbconn(true);
 
 ini_set('session.use_trans_sid', '0');
 $language = array_merge(load_language('login-account'));
 $freshpage = new verify();
 $freshpage -> create(take-account);
 
 $HTML .= "<!doctype html>"
          . $rightclickban;

 $HTML .= "<head>
<link rel=\"shortcut icon\" href='./images/a407.png' />
<title> {$a407['title']} :: {$a407['login']} </title>
<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
<meta name=\"author\" content=\"Cyborg407, BamBam0077, ZajferX\" />
<meta name=\"generator\" content=\"description\" content=\"a407 Beta\" />
<meta name=\"description\" content=\"Community Support\" />
<meta name=\"keywords\" contetn=\"https://forum.a407.eu\" />
<link rel=\"stylesheet\" href=\"./templates/407/styles.css\" />
<script type=\"text/javascript\" src=\"./jquery/jquery-1.3.2.js\" ></script>
<script type=\"text/javascript\" src=\"./jquery/interface.js\" ></script>
</head>
<body>
</body>
</html>";
           
 echo $footer() . $HTML;

?>
