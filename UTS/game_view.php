<?= $this->include('layout/header') ?>

<?= $this->include('layout/navbar') ?>

<?= $this->include('sections/hero') ?>

<div class="container mt-5"
     id="library">

    <div class="row"
         id="gameContainer">

        <?php foreach($games as $game) : ?>

            <div class="col-lg-4 col-md-6 mb-4 game-item"
                 data-title="<?= strtolower($game->title) ?>"
                 data-genre="<?= $game->genre ?>">

                <div class="card game-card h-100">

                    <img src="<?= $game->thumbnail ?>"
                         class="card-img-top">

                    <div class="card-body d-flex flex-column">

                        <div class="game-title">

                            <?= $game->title ?>

                        </div>

                        <div class="game-info">
                            🎮 <?= $game->genre ?>
                        </div>

                        <div class="game-info">
                            💻 <?= $game->platform ?>
                        </div>

                        <div class="game-info">
                            🏢 <?= $game->developer ?>
                        </div>

                        <div class="mt-auto pt-3">

                            <a href="<?= $game->game_url ?>"
                               target="_blank"
                               class="btn btn-library">

                                View Library

                            </a>

                        </div>

                    </div>

                </div>

            </div>

        <?php endforeach; ?>

    </div>

</div>

<?= $this->include('layout/footer') ?>

