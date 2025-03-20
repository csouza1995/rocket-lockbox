<div class="hero-content -mt-20 w-full">
    <form action="/register" method="post" class="w-1/2">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Create an account</h2>

                <div class="grid grid-cols-2 gap-4">
                    <label class="form-control">
                        <div class="label">
                            <span class="label-text text-black">Name</span>
                        </div>
                        <input
                            type="text"
                            name="name"
                            placeholder="Enter your name"
                            class="input input-bordered w-full max-w-lg bg-white focus:border-fuchsia-400 <?= error('name') ? 'border-red-400' : 'border-gray-400' ?>"
                            value="<?= old('name') ?>" />

                        <?php if ($error = error('name')) : ?>
                            <div class="text-red-500 text-xs"><?= $error ?></div>
                        <?php endif; ?>
                    </label>

                    <label class="form-control">
                        <div class="label">
                            <span class="label-text text-black">Surname</span>
                        </div>
                        <input
                            type="text"
                            name="surname"
                            placeholder="Enter your surname"
                            class="input input-bordered w-full max-w-lg bg-white focus:border-fuchsia-400 <?= error('surname') ? 'border-red-400' : 'border-gray-400' ?>"
                            value="<?= old('surname') ?>" />

                        <?php if ($error = error('surname')) : ?>
                            <div class="text-red-500 text-xs"><?= $error ?></div>
                        <?php endif; ?>
                    </label>
                </div>

                <label class="form-control">
                    <div class="label">
                        <span class="label-text text-black">E-mail</span>
                    </div>
                    <input
                        type="email"
                        name="email"
                        placeholder="your-email@email.com"
                        class="input input-bordered w-full max-w-lg bg-white focus:border-fuchsia-400 <?= error('email') ? 'border-red-400' : 'border-gray-400' ?>"
                        value="<?= old('email') ?>" />

                    <?php if ($error = error('email')) : ?>
                        <div class="text-red-500 text-xs"><?= $error ?></div>
                    <?php endif; ?>
                </label>

                <label class="form-control">
                    <div class="label">
                        <span class="label-text text-black">Confirm E-mail</span>
                    </div>
                    <input
                        type="email"
                        name="email_confirm"
                        placeholder="your-email@email.com"
                        class="input input-bordered w-full max-w-lg bg-white focus:border-fuchsia-400 <?= error('email_confirm') ? 'border-red-400' : 'border-gray-400' ?>"
                        value="<?= old('email_confirm') ?>" />

                    <?php if ($error = error('email_confirm')) : ?>
                        <div class="text-red-500 text-xs"><?= $error ?></div>
                    <?php endif; ?>
                </label>

                <label class="form-control">
                    <div class="label">
                        <span class="label-text text-black">Password</span>
                    </div>
                    <input
                        type="password"
                        name="password"
                        placeholder="**************"
                        class=" input input-bordered w-full max-w-lg bg-white focus:border-fuchsia-400 <?= error('password') ? 'border-red-400' : 'border-gray-400' ?>"
                        value="<?= old('password') ?>" />

                    <?php if ($error = error('password')) : ?>
                        <div class="text-red-500 text-xs"><?= $error ?></div>
                    <?php endif; ?>
                </label>

                <div class="card-actions mt-5">
                    <button class="btn btn-block btn-primary">Register</button>
                    <a href="/login" class="btn btn-link -ml-4">Already have an account?</a>
                </div>
            </div>
        </div>
    </form>
</div>
</div>