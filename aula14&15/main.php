<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercicio prático final</title>
    </head>
    <body>
        <h1>Projeto prático</h1>
        
        
        <pre>

            <?php
                require_once './Gafanhoto.php';
                require_once './Video.php';
                require_once './Visualizacao.php';

                $v[] = new Video('Girafa');
                $v[] = new Video('Elefante');
                $p[] = new Gafanhoto('Vitor',17,'Masculino','oi@gmail.com');     
                $p[] = new Gafanhoto('Kalamx',17,'Masculino','ka@gmail.com');    
                
                $v[0]->play();
                
                $p[0]->ganharExp(2352);
                
                $vis[] = new Visualizacao($p[0],$v[0]);
                $vis[] = new Visualizacao($p[0],$v[1]);
                $vis[] = new Visualizacao($p[1],$v[0]);
                
                $vis[0]->avaliar();
                $vis[1]->avaliarNota(6);
                $vis[0]->avaliarPorc(30);
                $vis[2]->avaliar();
                $vis[2]->avaliarPorc(40);

                var_dump($v);
                var_dump($p);
                var_dump($vis);

            ?>

        </pre>
    </body>
</html>
