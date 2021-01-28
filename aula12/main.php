<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Polimorfismo</title>
    </head>
    <body>
        <h1>Polimorfismo de sobreposição</h1>
        
        <pre>

            <?php
                require_once './Ave.php';
                require_once './Mamifero.php';
                require_once './Peixe.php';
                require_once './Reptil.php';
                require_once './Arara.php';
                require_once './Cachorro.php';
                require_once './Canguru.php';
                require_once './Cobra.php';
                require_once './Tartaruga.php';
                require_once './Goldfish.php';

                $p[] = new Mamifero();
                $p[] = new Peixe();
                $p[] = new Cachorro();
                $p[] = new Tartaruga();
                
                $p[0]->setIdade(45);
                $p[0]->setPeso(45);
                $p[0]->setCorPelo('branco');
                $p[0]->setMembros(4);
                $p[0]->locomover();
                
                $p[1]->setIdade(20);
                $p[1]->setPeso(5);
                $p[1]->setCorEscama('verde');
                $p[1]->setMembros(0);
                $p[1]->locomover();
                
                $p[2]->setIdade(10);
                $p[2]->setPeso(30);
                $p[2]->setCorPelo('marrom');
                $p[2]->setMembros(4);
                $p[2]->enterrarOsso();
                
                $p[3]->setIdade(100);
                $p[3]->setPeso(40);
                $p[3]->setCorEscama('verde');
                $p[3]->setMembros(4);
                $p[3]->locomover();

                var_dump($p);

            ?>

        </pre>
    </body>
</html>
