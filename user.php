<?php
    $id = $_GET['id'];
    //var_dump($id);
    $xml1 = simplexml_load_file("file.xml");
    $xml2 = simplexml_load_file("file2.xml");
    $i = -1;
    foreach ($xml1->children() as $user){
        ++$i;
        $id1 = $user->id;
        $name1 = $user->name;
        $family1 = $user->family;
        if ($id1==$id) {
            $xml2->users->id = $id1;
            $xml2->users->name = $name1;
            $xml2->users->family = $family1;
            /*var_dump($id1);
            var_dump($name1);
            var_dump($family1);*/
            break;
        }
    }
    file_put_contents('file2.xml',$xml2->saveXML());
    header("Location: file2.xml");
?>