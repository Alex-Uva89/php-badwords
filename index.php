<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Bad-words</title>
</head>
<body>
    <div class="container">
        <h1>
        &#x1f493;  Il censuratore &#x1f493;
        </h1>
        <div class="container_paragrafo">
            <h2>
                Il paragrafo originale è
            </h2>
            <p>
                <?php
                    $paragrafo = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem corporis totam ullam eum, voluptatem a deserunt omnis. Amet repellat assumenda maiores fugit eveniet dolore? Dolorem ex atque dolores ipsum vitae?';
                
                    echo $paragrafo;
                ?>
            </p>
            <h3>
                ed è lungo:
                <?php
                echo strlen($paragrafo);
                ?>
                caratteri e sono presenti:
                <?php
                echo (strlen($paragrafo)-29);
                ?>
                parole
            </h3>
        </div>

        <div class="container_form">
            <form action="index.php" method='post'>
                Inserisci la parola da bandire: <input type="text" name='accipigna'>
            </form>
        </div>
        
        <div class="container_paragrafo">
            <h2>
                Dopo la Vostra censura della parola
                <span class="red">
                    <?php
                        $bad_word = $_REQUEST['accipigna']; //questa formula serve per recepire il valore dall'input
                        echo $bad_word;
                        ?>
                </span>
                il paragrafo sarà così distribuito:
            </h2>
            <p>
                <?php
                //creo nuova variabile per inserire il nuovo paragrafo corretto
                $paragrafo_censurato = str_ireplace($bad_word/*argomento da sostituire*/, '***'/* cosa viene sostituito al posto del primo argomento */, $paragrafo /*dove avviene il cambiamento*/);
                echo $paragrafo_censurato;
                ?>
                <h3 class="center">
                    mentre ora è lungo:
                    <?php 
                    echo (strlen($paragrafo_censurato) );
                    ?>
                    caratteri e sono stati sostituiti:
                    <?php 
                    $leng_par = (strlen($paragrafo)-29);
                    $leng_par_cens = (strlen($paragrafo_censurato)-29);
                    $differenza = ($leng_par_cens - $leng_par);
                    echo $differenza;
                    ?>
                    caratteri.
                </h3>
            </p>
        </div>
    </div>
    
    
</body>

<style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
    }

    .container{
        width: 70%;
        height: 100vh;
        margin: 0 auto;
    }
    .container_paragrafo{
        border: 3px solid red;
        margin: 4rem 0;
        padding: 1.5rem;
    }
    .container_form{
        text-transform: uppercase;
        text-align:center;
        margin: 1rem 0;
    }
    h1{
        text-transform: uppercase;
        text-align: center;
        color: rgba(250, 125, 150, 1);
    }
    h2,
    h3,
    .center{
        text-align:center;
    }

    .red{
        color:red;
        text-transform: uppercase;
    }
</style>
</html>