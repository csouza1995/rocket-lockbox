<div class="hero-content -mt-20 w-full">
    <form action="/login" method="post" class="w-1/2">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Account Login</h2>

                <label class="form-control">
                    <div class="label">
                        <span class="label-text text-black">E-mail</span>
                    </div>
                    <input type="email" name="email" placeholder="Enter your e-mail" class="input input-bordered w-full max-w-lg bg-white border-gray-400" />
                </label>

                <label class="form-control">
                    <div class="label">
                        <span class="label-text text-black">Password</span>
                    </div>
                    <input type="password" name="password" placeholder="Enter your password" class="input input-bordered w-full max-w-lg bg-white border-gray-400" />
                </label>

                <div class="card-actions mt-5">
                    <button class="btn btn-block btn-primary">Login</button>
                    <a href="/register" class="btn btn-link">Don't have an account?</a>
                </div>
            </div>
        </div>
    </form>
</div>
</div>