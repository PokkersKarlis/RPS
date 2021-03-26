<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rock, paper, scissors</title>
    <link rel="stylesheet" href="Public/Style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>
<body>
<main>

    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Rock, paper, scissors game</h1>
                <?php if ($player === $round->getSymbol()->getSymbol()): ?>
                <p class="alert alert-primary lead text-muted">It's a DRAW!</p>
                <?php elseif ($round->getSymbol()->isWinner($player) == true) : ?>
                <p class="alert alert-danger lead text-muted">Computer won!</p>
                <?php else : ?>
                <p class="alert alert-success lead text-muted">You won!</p>
                <?php endif ?>
                <form action="index.php">
                    <button type="submit" class="btn btn-sm btn-outline-primary">Play again</div>
                </form>
            </div>
        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-2">
                <dic class="col"></dic>
                <div class="col">
                    <div class="card shadow-sm">
                        <?php switch ($player) {
                        case 'R':
                        ?>
                        <img class="playerOptions" src="Public/Images/rock.jpg" alt="rock">
                        <?php
                        break;
                        case 'P':
                        ?>
                        <img class="playerOptions" src="Public/Images/paper.jpg" alt="rock">
                        <?php
                        break;
                        case 'S':
                        ?>
                        <img class="playerOptions" src="Public/Images/scissors.jpg" alt="rock">
                        <?php
                        break;
                        }
                        ?>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <p>Player choice</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <?php switch ($round->getSymbol()->getSymbol()) {
                            case 'R':
                                ?>
                                <img class="playerOptions" src="Public/Images/rock.jpg" alt="rock">
                                <?php
                                break;
                            case 'P':
                                ?>
                                <img class="playerOptions" src="Public/Images/paper.jpg" alt="rock">
                                <?php
                                break;
                            case 'S':
                                ?>
                                <img class="playerOptions" src="Public/Images/scissors.jpg" alt="rock">
                                <?php
                                break;
                        }
                        ?>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <p>Computer choice</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
        }
    </script>
</main>
</body>
</html>
