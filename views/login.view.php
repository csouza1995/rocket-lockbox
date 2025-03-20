<div class="hero-content -mt-20 w-full">
    <form action="/login" method="post" class="w-1/2">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Sign in</h2>

                <?php if ($errorMessage = session()::get('message::error')) : ?>
                    <div role="alert" class="alert alert-error">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span><?= $errorMessage ?></span>
                    </div>
                <?php endif; ?>

                <label class="form-control">
                    <div class="label">
                        <span class="label-text text-black">
                            E-mail
                        </span>
                    </div>
                    <input
                        type="email"
                        name="email"
                        placeholder="your-email@email.com"
                        class="input input-bordered w-full max-w-lg bg-white border-gray-400 focus:border-fuchsia-400" />
                </label>

                <label class="form-control">
                    <div class="label">
                        <span class="label-text text-black">
                            Password
                        </span>
                    </div>
                    <input
                        type="password"
                        name="password"
                        placeholder="**************"
                        class="input input-bordered w-full max-w-lg bg-white border-gray-400 focus:border-fuchsia-400" />
                </label>

                <div class="card-actions mt-5">
                    <button class="btn btn-block btn-primary">Login</button>
                    <a href="/register" class="btn btn-link -ml-4">Don't have an account?</a>
                </div>
            </div>
        </div>
    </form>
</div>
</div>