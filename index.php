    <?php 
    
    require_once("./Classes/Pet.php");
    require_once("./Classes/Owner.php");
    
    
    $owner1     = new Owner("peter", "Montréal", "7000", "438-438-1111", "a@a.com");
    $owner2     = new Owner("jackson", "Toronto", "7050", "514-514-1111", "b@b.com");
    
    $animal1    = new Pet;
    $animal2    = new Pet;
    
    $animal1->setProp("boubi", "2020-06-08", "Dog");
    $animal2->setProp("souzi", "2021-06-08" );
    
    ?>
    
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Exercice 1 WA</title>
            <link rel="stylesheet" href="./assets/style/style.css">
        </head>
        <body>
            <main>
                <section class="parent-wrap">
                    <div class="wrap">
                        <h1>Owner</h1>
                        <?= $owner1->getProp();?>
                        <h1>Pet</h1>
                        <?= $animal1->getProp();?>
                        
                    </div>
                    <div class="wrap">
                        <h1>Owner</h1>
                        <?= $owner2->getProp();?>
                        <h1>Pet</h1>
                        <?= $animal2->getProp();?>
                    </div>
                </section>
        </main>
    </body>
    </html>