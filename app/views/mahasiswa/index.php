<main>
    <div class="container mx-auto mt-[94px] text-white px-5">
        <h1 class="text-2xl font-medium">Daftar Mahasiswa</h1>
        <section class="h-[300px] mt-4 border border-white/20 dark:bg-white dark:text-white dark:backdrop-blur-sm bg-white max-w-[25rem] px-4 py-4 flex flex-col gap-4 rounded-md">
            <!-- CRUD -->
            <div class="flex justify-between items-center">
                <button class="bg-green-500 px-2 py-1 rounded-md text-sm">+ Tambah</button>
                <form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
                    <label for=""></label>
                    <span class="flex">
                        <input type="text" class="outline-none border rounded-tl-[4px] rounded-bl-[4px] px-2 py-1 text-sm text-black max-w-[160px]" placeholder="cari mahasiswa..." name="keyword" id="keyword" autocomplete="off">
                        <button class="rounded-tr-md rounded-br-md px-3 py-1 text-sm bg-slate-400" type="submit" id="cari">cari</button>
                    </span>
                </form>
            </div>

            <ul class="rounded-md overflow-auto">
                <?php foreach ($data["mhs"] as $key => $value) : ?>
                    <li class="text-black px-6 py-2 bg-slate-200 border-b-[1px] border-slate-300 flex justify-between items-center">
                        <?= $value["nama"] ?>
                        <span>
                            <a href="" data-id="<?= $value["id"] ?>" class="text-xs bg-slate-500 text-white px-2 py-1 rounded-md" id="ubah">ubah</a>

                            <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $value["id"] ?>" class="text-xs bg-red-500  text-white px-2 py-1 rounded-md" onclick="return confirm('yakin?')">hapus</a>
                            <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $value["id"] ?>" class="text-xs bg-purple-500 text-white   px-2 py-1 rounded-md">detail</a>
                        </span>

                    </li>
                <?php endforeach; ?>
            </ul>
            <!-- Flasher -->
            <?php Flasher::flash() ?>
        </section>
    </div>
</main>

<!-- Modal Form -->
<div class="absolute top-0 left-0 right-0 bottom-0 bg-black/50 z-10 hidden justify-center items-center" id="modal">
    <div class="bg-white rounded-md min-w-[350px]">
        <span class="flex justify-between items-center px-4 py-2">
            <h3>Tambah Mahasiswa</h3>
            <img src="<?= BASEURL; ?>/assets/icons/close.png" alt="" class="w-5 h-5  cursor-pointer" id="close">
        </span>
        <hr class="mb-2">
        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post" class="px-4 py-2 flex flex-col gap-2">
            <input type="hidden" class="border rounded-[4px] px-2 py-0.5 outline-none text-xs" id="id" name="id">
            <label for="">nama</label>
            <input type="text" class="border rounded-[4px] px-2 py-0.5 outline-none" id="nama" name="nama">
            <label for="">nrp</label>
            <input type="number" class="border rounded-[4px] px-2 py-0.5 outline-none" id="nrp" name="nrp">
            <label for="">email</label>
            <input type="email" class="border rounded-[4px] px-2 py-0.5 outline-none" id="email" name="email">
            <label for="">jurusan</label>
            <select name="jurusan" id="jurusan" class="border rounded-[4px] px-2 py-0.5 outline-none">
                <option value="Multimedia">Multimedia</option>
                <option value="Mesin">Mesin</option>
                <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                <option value="Teknik Elektro">Teknik Elektro</option>
            </select>
            <button class="bg-green-500 px-2 py-1 rounded-md text-sm mt-4 text-white" type="submit">Tambah</button>
            <button class="bg-slate-500 px-2 py-1 rounded-md text-sm text-white" type="reset">Reset</button>
        </form>
    </div>
</div>