<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Web Site codeigniter</title>
    <?php
    $meta=array(
      array('name'=> 'robots','content'=> 'no-cache'), // funções do helper que ofereçe para auxiliar de ajuda
      array('name'=> 'description', 'content'=> 'Meu site'),
      array('name'=> 'keywords', 'content'=> 'Dados'),
      array('name'=> 'Content=type', 'content'=>'text/html; charset=utf=8', 'type'=> 'equiv')
      );
      echo meta($meta); // uma função própria do meta q faz aparecer  no header do html esses dados

      //echo link_tag('assets/imgs/fork.ico', 'shortcut icon', 'image/ico');
      //echo link_tag('css/layout.css');
      //echo link_tag('js/layout.js');
     ?>
     <style media="screen">
       a{
         text-decoration: none;
         color: green;
       }
       li{
         text-decoration: none;
         display: inline-block;
         padding-left: 5em;
         font-size: 3em;
       }

       h1{
         color: blue;
         font-size: 2em;
       }

       button{
         background-color: red;
         color: white;
         font-size: 2em;
       }
       label{
         color: black;
         font-size: 2em;
       }

       input{
         background-color: yellow;
         width: 15em;
         font-size: 1.5em;
         border: 3px solid red;
       }
       input[placeholder]{
         color: blue;
       }

       *{
         background-color: lightblue;
       }
     </style>
  </head>
  <body>
