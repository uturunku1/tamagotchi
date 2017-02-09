<?php
    date_default_timezone_set("America/Los_Angeles");
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Tamagotchi.php";

    $app = new Silex\Application();
    $app['debug']= true;
    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__."/../views"));

    session_start();
    if (empty($_SESSION['player'])) {
      $_SESSION['player']= array();
    }

    $app->get('/', function() use ($app){
        return $app['twig']->render('index.html.twig');
    });

    $app->post('/game', function() use ($app) {
        $my_tamagotchi = new Tamagotchi($_POST['name'], 5, 5, 5);
        return $app['twig']->render('game.html.twig', array('player' => $my_tamagotchi));
    });

    $app->post('/feed', function() use ($app) {
        $my_tamagotchi = new Tamagotchi($_POST['name'], 5, 5, 5);
        //
        // Tamagotchi::eatTimer();
        return $app['twig']->render('feed.html.twig', array('player'=>$my_tamagotchi));
    });

    return $app;
?>
