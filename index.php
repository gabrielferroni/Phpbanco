<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Banco</title>
    </head>
    <body>
        <pre>
        <?php
       
       require_once 'ContaBanco.php';
      
       $p1 = new ContaBanco();  //Jubileu
       $p2 = new ContaBanco();  //Cleusa
       $p1->abrirConta("CC");  //50
       $p1->setDono("jubileu");
       $p2->abrirConta("CP");  //150
       $p2->setDono("Cleusa");
       $p2->setNumConta(222);
       $p1->setNumConta(111);
       $p1->depositar(300);
        $p2->depositar(300);
        
        $p1->sacar(100);
        $p2->sacar(100);
        
        $p1->pagarMensal();
        $p2->pagarMensal();
        
        $p1->sacar(238);
        $p2->sacar(330);
        
       
         $p2->fecharConta($p2);
        
        
        
      
       
       print_r($p1);
       print_r($p2);
       
        ?>
            </pre>
    </body>
</html>
