<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>aula exemplo</title>
    </head>
    <body>
        <h1>Exemplo pessoas livros</h1>
        
        <pre>

            <?php
                require_once './Pessoa.php';
                require_once './Livro.php';

                $p[0] = new Pessoa('vitor', 17, 'M');
                $p[1] = new Pessoa('maria', 16, 'F');

                $l[] = new Livro('enigmas', 'maria de alencar', 300, $p[0]);
                $l[] = new Livro('a rainha', 'josé de alencar', 250, $p[1]);
                $l[] = new Livro('o rei', 'mario de alencar', 200, $p[1]);

                $l[0]->detalhes();

                var_dump($p);
                var_dump($l);

            ?>

        </pre>
    </body>
</html>
