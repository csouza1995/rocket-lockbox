<div class="grid grid-cols-2 mx-auto">
    <div class="hero min-h-screen flex ml-40">
        <div class="hero-content -mt-20">
            <div>
                <p class="pt-2 pb-4 text-xl">Welcome to</p>
                <h1 class="text-5xl font-bold">
                    Lockbox
                </h1>
                <p class="pt-2 pb-4 text-xl">
                    Where you can store <span class="italic">all</span> with security.
                </p>
            </div>
        </div>
    </div>

    <div class="bg-white hero mr-40 min-h-screen text-black">
        <!-- messages -->
        <?php require ROOT . "/views/partials/_messages.php"; ?>

        <!-- content -->
        <?php require ROOT . "/views/{$view}.view.php"; ?>
    </div>
</div>