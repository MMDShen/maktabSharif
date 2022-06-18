<?php

    function seoScore(string $html)
    {
        // TODO: Implement
        $score=0;
        $title="<title>";
        $content="<meta name=\"description\">";
        $viewport="<meta name=\"viewport\">";
        $robot="<meta name=\"robots\">";
        $charset="<meta charset>";
        $h1="<h1>";
        $h2="<h2>";
        $h3="<h3>";
        $section="<section>";
        $header="<header>";
        $footer="<footer>";
        $sum=preg_match_all($h1,$html);

        if(preg_match($title,$html)==true){
            $score+=10;
            // echo "1"."<br>";
        }
        if(preg_match($content,$html)==true){
            $score+=10;
            // echo "2"."<br>";
        }
        if(preg_match($viewport,$html)==true){
            $score+=10;
            // echo "3"."<br>";
        }
        if(preg_match($robot,$html)==true){
            $score+=10;
            // echo "4"."<br>";
        }
        if(preg_match($charset,$html)==true){
            $score+=10;
            // echo "5"."<br>";
        }
        if($sum==2){
            $score+=10;
            // echo "6"."<br>";
        }
        else{
            $score+=7;
            // echo "999"."<br>";
        }
        if(preg_match($h2,$html)==true){
            $score+=5;
            // echo "7"."<br>";
        }
        if(preg_match($h3,$html)==true){
            $score+=5;
            // echo "8"."<br>";
        }
        if(preg_match($header,$html)==true){
            $score+=10;
            // echo "9"."<br>";
        }
        if(preg_match($footer,$html)==true){
            $score+=10;
            // echo "10"."<br>";
        }
        if(preg_match($section ,$html)==true){
            $score+=10;
            // echo "11"."<br>";
        }

        return $score;
    }
    $html =
    '<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Quera</title>
        <meta name="description" content="quera-codecup-college-magnet">
        <meta name="robots" content="index, follow">
    </head>
    <body>
    <header>
        <h1>Quera</h1>
    </header>
    <section>
        <h2>Quera</h2>
        <h3>Quera</h3>
        <h3>Quera</h3>
        <h3>Quera</h3>
    </section>
    <footer>
        <h2>Quera</h2>
    </footer>
    </body>
    </html>';
    echo seoScore($html);