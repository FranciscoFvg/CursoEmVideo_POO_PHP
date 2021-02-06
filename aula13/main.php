<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Polimorfismo (Parte 2)</title>
    </head>
    <body>
        <h1>Polimorfismo de sobrecarga</h1>
        <p>O PHP não possui nativamente suporte à sobrecarga de metédos, 
            isso leva os desenvolvedores a usar suas próprias estratégias para 
            "improvisar" uma sobrecarga.
        </p>
        <p> No caso a metodologia usada foi usar nomes semelhantes para as funções com o acréscimo
            de um complemento que especifique seu uso. Por exemplo:
        </p>
        <ul>
            <li>Função de reação a frase falada ao cão:</li>
            <p>reagirFrase ($frase)</p>
            <li>Função de reação baseada no horário em que se interage com o cão:</li>
            <p>reagirHora ($hora)</p>
        </ul>
        
        <pre>

            <?php
                require_once './Mamifero.php';
                require_once './Cachorro.php';
                require_once './Lobo.php';

                $p[] = new Lobo();
                $p[] = new Cachorro();
                
                $p[0]->setIdade(45);
                $p[0]->setPeso(45);
                $p[0]->setCorPelo('branco');
                $p[0]->setMembros(4);
                $p[0]->emitirSom();
                
                $p[1]->setIdade(10);
                $p[1]->setPeso(30);
                $p[1]->setCorPelo('marrom');
                $p[1]->setMembros(4);
                
                $p[1]->emitirSom();
                $p[1]->reagirDono(true);
                $p[1]->reagirFrase('toma comida');
                $p[1]->reagirHora(13,12);
                $p[1]->reagirIdadePeso(4,10);
                

                var_dump($p);

            ?>

        </pre>
    </body>
</html>
