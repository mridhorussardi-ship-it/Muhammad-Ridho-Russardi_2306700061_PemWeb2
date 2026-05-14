<?= $this->include('layout/header') ?>

<?= $this->include('layout/navbar') ?>

<div class="container mt-5">

    <div class="card game-card p-5">

        <h1 class="mb-4 text-white">

            About LessGm

        </h1>

        <p class="game-info">

            LessGm adalah website
            katalog game modern menggunakan
            CodeIgniter 4 dan Public API.

        </p>

        <a href="<?= base_url('/') ?>"
           class="btn btn-library mt-4">

            Back to Home

        </a>

    </div>

</div>

<?= $this->include('layout/footer') ?>