<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data["title"] ?></title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/assets/style/style.css">
</head>

<body>
    <nav class="peer fixed right-0 top-0 left-0 z-10 flex min-h-[60px] justify-between border-b-[0.01px] border-b-black/10 px-10 dark:border-b-[0.05px] dark:border-b-white/10 dark:bg-white/5 dark:text-white dark:backdrop-blur-sm bg-white">
        <span class="flex items-center gap-2">
            <img src="<?= BASEURL; ?>/assets/img/php.png" alt="logo" width="35" />
            <p> | </p>
            <a href="<?= BASEURL; ?>">
                <p>MVC <span class="hidden md:inline-block text-xs">PHP APACHE2</span></p>
            </a>


        </span>
        <ul class="hidden sm:flex sm:items-center sm:space-x-4">
            <li><a href="<?= BASEURL; ?>">Home</a></li>
            <li><a href="<?= BASEURL; ?>/about">About</a></li>
            <li><a href="<?= BASEURL; ?>/mahasiswa">Mahasiswa</a></li>
        </ul>
    </nav>