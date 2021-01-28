<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Herança</title>
    </head>
    <body>
        <h1>Escola</h1>
        
        <pre>

            <?php
                require_once './Pessoa.php';
                require_once './Aluno.php';
                require_once './Professor.php';
                require_once './Funcionario.php';

                $p[] = new Pessoa('vitor', 17, 'M');
                $p[] = new Aluno('vitor', 17, 'M');
                $p[] = new Professor('vitor', 17, 'M');
                $p[] = new Funcionario('vitor', 17, 'M');
                
                $p[3]->setNome('artur');
                $p[2]->setSalario(2500.5);
                $p[2]->setEspecialidade('Barman');

                var_dump($p);

            ?>

        </pre>
    </body>
</html>
