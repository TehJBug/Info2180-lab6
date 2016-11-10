<?php
// accept a term (keyword)
// respond with a value

$all = $_GET['all'];
$query = $_GET['q'];
$definition = [
    "definition" => "A statement of the exact meaning of a word, especially in a dictionary.",
    "bar" => "A place that sells alcholic beverages",
    "ajax" => "Technique which involves the use of javascript and xml (or JSON)",
    "html" => "The standard markup language for creating web pages and web applications.",
    "css" => "A style sheet language used for describing the presentation of a document written in a markup language.",
    "javascript" => "A lightweight, interpreted programming language with first-class functions that adds interactivity to your website.",
    "php" => "A server-side scripting language, and a powerful tool for making dynamic and interactive websites",
];

$xmlData = '<?xml version="1.0" encoding="UTF-8"?>
            <entries>
                <definition name="definition" author="John">
                    A statement of the exact meaning of a word, especially in a dictionary.
                </defintion>
                <definition name="bar" author="Jason">
                    A place that sells alcholic beverages.
                </defintion>
                <definition name="ajax" author="Jason">
                    Technique which involves the use of javascript and xml (or JSON)
                </defintion>
                <definition name="html" author="Jason">
                    The standard markup language for creating web pages and web applications.
                </definition>
                <definition name="css" author="Jason">
                    A style sheet language used for describing the presentation of a document written in a markup language.
                </definition>
                <definition name="javascript" author="Jason">
                    A lightweight, interpreted programming language with first-class functions that adds interactivity to your website.
                </definition>
                <definition name="php" author="Jason">
                    A server-side scripting language, and a powerful tool for making dynamic and interactive websites
                </definition>
            </entries>';
    
    

if($all == "false" )
{
    print "<h3>" . strtoupper($query) . "</h3>";
    print "<p>" . $definition[$query] . "</p>";
}
else {
    header('Content-Type: text/xml');
    $xmlOutput = new SimpleXMLElement($xmldata);    
    echo $xmlOutput->asXML();
}