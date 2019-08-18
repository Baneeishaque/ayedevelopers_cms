<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require('config_2.php');
if ($_GET['text']) :

    $type = $_GET['type'];
    $text = $_GET['text'];
    if ($type == 'title') {
        mysql_query("UPDATE `header` SET `title`='$text'");
    } else if ($type == 'nav1') {
        mysql_query("UPDATE `header` SET `nav1`='$text'");
    } else if ($type == 'nav2') {
        mysql_query("UPDATE `header` SET `nav2`='$text'");
    } else if ($type == 'nav3') {
        mysql_query("UPDATE `header` SET `nav3`='$text'");
    } else if ($type == 'nav4') {
        mysql_query("UPDATE `header` SET `nav4`='$text'");
    } else if ($type == 'name1') {
        mysql_query("UPDATE `midle` SET `name1`='$text'");
    } else if ($type == 'name2') {
        mysql_query("UPDATE `midle` SET `name2`='$text'");
    } else if ($type == 'name3') {
        mysql_query("UPDATE `midle` SET `name3`='$text'");
    } else if ($type == 'name4') {
        mysql_query("UPDATE `midle` SET `name4`='$text'");
    } else if ($type == 'namede1') {
        mysql_query("UPDATE `midle` SET `namede1`='$text'");
    } else if ($type == 'namede2') {
        mysql_query("UPDATE `midle` SET `namede2`='$text'");
    } else if ($type == 'namede3') {
        mysql_query("UPDATE `midle` SET `namede3`='$text'");
    } else if ($type == 'namede4') {
        mysql_query("UPDATE `midle` SET `namede4`='$text'");
    } else if ($type == 'serv1t') {
        mysql_query("UPDATE `midle` SET `serv1t`='$text'");
    } else if ($type == 'serv2t') {
        mysql_query("UPDATE `midle` SET `serv2t`='$text'");
    } else if ($type == 'serv3t') {
        mysql_query("UPDATE `midle` SET `serv3t`='$text'");
    } else if ($type == 'serv4t') {
        mysql_query("UPDATE `midle` SET `serv4t`='$text'");
    } else if ($type == 'serv1d') {
        mysql_query("UPDATE `midle` SET `serv1d`='$text'");
    } else if ($type == 'serv2d') {
        mysql_query("UPDATE `midle` SET `serv2d`='$text'");
    } else if ($type == 'serv3d') {
        mysql_query("UPDATE `midle` SET `serv3d`='$text'");
    } else if ($type == 'serv4d') {
        mysql_query("UPDATE `midle` SET `serv4d`='$text'");
    } else if ($type == 'address1') {
        mysql_query("UPDATE `contact` SET `address1`='$text'");
    } else if ($type == 'address2') {
        mysql_query("UPDATE `contact` SET `address2`='$text'");
    } else if ($type == 'address2') {
        mysql_query("UPDATE `contact` SET `address2`='$text'");
    } else if ($type == 'address4') {
        mysql_query("UPDATE `contact` SET `address4`='$text'");
    } else if ($type == 'address5') {
        mysql_query("UPDATE `contact` SET `address5`='$text'");
    } else if ($type == 'address6') {
        mysql_query("UPDATE `contact` SET `address6`='$text'");
    } else if ($type == 'phone') {
        mysql_query("UPDATE `contact` SET `phone`='$text'");
    } else if ($type == 'email') {
        mysql_query("UPDATE `contact` SET `email`='$text'");
    } else if ($type == 'copyright') {
        mysql_query("UPDATE `footer` SET `copyright`='$text'");
    } else if ($type == 'facebook') {
        mysql_query("UPDATE `contact` SET `facebook`='$text'");
    } else if ($type == 'twitter') {
        mysql_query("UPDATE `contact` SET `twitter`='$text'");
    } else if ($type == 'dribble') {
        mysql_query("UPDATE `contact` SET `dribble`='$text'");
    } else if ($type == 'google') {
        mysql_query("UPDATE `contact` SET `google+`='$text'");
    }
    endif;
