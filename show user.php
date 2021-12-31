<html lang="fa">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="table.css">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Lalezar&display=swap');
            .f1{
                font-family: 'Lalezar', cursive;
            }
        </style>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Family</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                        $xml2 = simplexml_load_file("file2.xml");
                        echo "<td>".$xml2->users->id."</td>";
                        echo "<td>".$xml2->users->name."</td>";
                        echo "<td>".$xml2->users->family."</td>";
                    ?>
                </tr>
            </tbody>
        </table>
        <p class="f1" dir="rtl">استاد دلیل اصلی که اومدم اینجا از php استفاده کردم به خاطر اینه که قبلی ها را به صورت xml نوشتم و زیاد xml و جاوا اسکریپت با هم همخونی ندارن.</p>
    </body>
</html>