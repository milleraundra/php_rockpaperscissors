<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RockPaperScissors.php";

    // session_start();
    // if (empty($_SESSION['list_of_places'])) {
    //     $_SESSION['list_of_places'] = array();
    // }

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

// End busy code -----------^

    // Render Home Page
    $app->get("/", function() use ($app) {
        return $app['twig']->render('rockpaperscissors.html.twig'); //
    });

    // User Input
    $app->get("/userInput", function() use ($app) {
        $newGame = new RockPaperScissors;
        $result = $newGame->playGame($_GET['player1'], $_GET['player2']);

        // $change = $_GET['number'];
        // $results = makeChange($change);
        return $app['twig']->render('rockpaperscissors.html.twig', array('result' => $result)); //
    });


    return $app;

?>
