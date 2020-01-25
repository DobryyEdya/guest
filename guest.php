<html>
    <head>
        <title>guest</title>
    </head>
    <body>


        <form method="post" action="">  
            Name: <input type="text" name="name" value="">
            <br><br>
            E-mail: <input type="text" name="email" value="">

            <?php 
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $name = $_POST['name'];
                $email = $_POST['email'];
                $comment = $_POST['comment'];
                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    echo 'OK';
                    $file = fopen("file.txt","at");
                    fwrite($file,"\n $name:$email:$comment \n");
                    fclose($file);
                } else {
                    echo 'NO';
                }
            }
            ?>

            <br><br>
            Comment: <textarea name="comment" rows="5" cols="40"></textarea>
            <br><br>
            <input type="submit" name="submit" value="Submit">  
        </form>



    </body>
</html>