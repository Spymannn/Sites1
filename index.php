<html>
    <head>
        <meta charset="UTF-8" />
        <title> Site 1</title>
    </head>
    <body>
        
         <?php 
            $connexion = "host=lamp-edu.condorcet.be password=xml55 user=samir.hanini dbname=samir_hanini_xml port=5432";
            $cnx = pg_connect($connexion);
            if($cnx){
                print("ok");
            }
            else{
                print("Echec");
            }
        ?>
        
    </body>
    
    
</html>