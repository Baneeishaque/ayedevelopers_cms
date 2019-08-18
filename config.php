<?php

mysql_connect("localhost", "root", "");
mysql_select_db("desaign");
$result = mysql_query("select `title`,`nav1`,`nav2`,`nav3`,`nav4`,`name1`, `name2`, `name3`, `name4`, `namede1`, `namede2`, `namede3`, `namede4`, `nameimg1`, `nameimg2`, `nameimg3`, `nameimg4`, `serv1t`, `serv2t`, `serv3t`, `serv4t`, `serv1d`, `serv2d`, `serv3d`, `serv4d`, `namede1`, `namede2`, `namede3`, `namede4`,`address1`, `address2`, `address3`, `address4`, `address5`, `address6`, `phone`, `email`, `facebook`, `twitter`, `dribble`, `google+`,`copyright`,`top-nav-collapse-background` from `header`,`midle`,`contact`,`footer`,`style`");
$row = mysql_fetch_array($result);
?>