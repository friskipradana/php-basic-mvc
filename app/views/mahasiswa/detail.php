<main>
    <div class="container mx-auto mt-[94px] text-white px-5">
        <h1 class="text-2xl font-medium">Detail Mahasiswa</h1>
        <section>
            <div class="mt-4 rounded-md overflow-hidden text-black max-w-[18rem] px-4 py-2 border bg-white ">
                <h1><?= $data["mhs"]["nama"] ?></h1>
                <h1><?= $data["mhs"]["nrp"] ?></h1>
                <h1><?= $data["mhs"]["email"] ?></h1>
                <h1><?= $data["mhs"]["jurusan"] ?></h1>
                <a href="<?= BASEURL; ?>/mahasiswa" class="text-sm mt-2 inline-block bg-purple-500  text-white px-2 py-1 rounded-md">back</a>

            </div>
        </section>
    </div>
</main>