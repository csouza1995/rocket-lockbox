<div class="hero-content -mt-20 w-full">
    <form action="/login" method="post" class="w-1/2">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Create an account</h2>

                <div class="grid grid-cols-2 gap-4">
                    <label class="form-control">
                        <div class="label">
                            <span class="label-text text-black">Name</span>
                        </div>
                        <input type="text" name="name" placeholder="Enter your name" class="input input-bordered w-full max-w-lg bg-white border-gray-400" />
                    </label>

                    <label class="form-control">
                        <div class="label">
                            <span class="label-text text-black">Surname</span>
                        </div>
                        <input type="text" name="surname" placeholder="Enter your surname" class="input input-bordered w-full max-w-lg bg-white border-gray-400" />
                    </label>
                </div>

                <label class="form-control">
                    <div class="label">
                        <span class="label-text text-black">E-mail</span>
                    </div>
                    <input type="email" name="email" placeholder="Enter your e-mail" class="input input-bordered w-full max-w-lg bg-white border-gray-400" />
                </label>

                <label class="form-control">
                    <div class="label">
                        <span class="label-text text-black">Confirm E-mail</span>
                    </div>
                    <input type="email" name="email_confirm" placeholder="Confirm your e-mail" class="input input-bordered w-full max-w-lg bg-white border-gray-400" />
                </label>

                <label class="form-control">
                    <div class="label">
                        <span class="label-text text-black">Password</span>
                    </div>
                    <input type="password" name="password" placeholder="Enter your password" class="input input-bordered w-full max-w-lg bg-white border-gray-400" />
                </label>

                <div class="card-actions mt-5">
                    <button class="btn btn-block btn-primary">Register</button>
                    <a href="/login" class="btn btn-link">Already have an account?</a>
                </div>
            </div>
        </div>
    </form>
</div>
</div>