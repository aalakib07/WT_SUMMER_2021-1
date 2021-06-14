<?php 
    // Opening and reading from file.
    // $myFile = fopen("myFile.txt","r") or die("Unable to open the file");
    // echo fread($myFile,filesize("myFile.txt"));
    // fclose($myFile)
    $simpleXml = new SimpleXMLElement('<?xml version="1.0"?><books/>');
    $book1 = $simpleXml->addChild('book');
    $book1->addChild("BookTitle","The wondering Oz");
    $book1->addChild("PublicationDate",2007);
    $myAuthor=$book1->addChild("author");
    $myAuthor->addChild("Name","Helen");
    file_put_contents('books.xml',$simpleXml->asXML());
?>
