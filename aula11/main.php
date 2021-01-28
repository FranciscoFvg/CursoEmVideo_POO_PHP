<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Herança (Parte 2)</title>
    </head>
    <body>
        <h1>Herança de implementão e diferença</h1>
        
        <pre>

            <?php
                require_once './Pessoa.php';
                require_once './Aluno.php';
                require_once './Professor.php';
                require_once './Visitante.php';
                require_once './Bolsista.php';
                require_once './Tecnico.php';

                $p[] = new Aluno('vitor', 17, 'M');
                $p[] = new Professor('vitor', 17, 'M');
                $p[] = new Visitante('vitor', 17, 'M');
                $p[] = new Bolsista('vitor', 17, 'M');
                $p[] = new Tecnico('vitor', 17, 'M');
                
                $p[3]->setMatr(31231);
                $p[0]->pagarMensalidade();
                $p[3]->pagarMensalidade();
                
                $p[2]->setNome('artur');
                $p[1]->setSalario(2500.5);
                $p[1]->setEspecialidade('Barman');

                var_dump($p);

            ?>

        </pre>
    </body>
</html>
