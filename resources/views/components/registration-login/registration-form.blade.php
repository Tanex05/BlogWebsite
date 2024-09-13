<form action="/register" method="POST">
    <div class="form-control">
        <label class="label">
            <span class="label-text">Username</span>
        </label>
        <input type="email" name="username" placeholder="Username" class="input input-bordered" required />
    </div>
    <div class="form-control">
        <label class="label mt-2">
            <span class="label-text">Email</span>
        </label>
        <input type="email" name="email" placeholder="Email" class="input input-bordered" required />
    </div>
    <div class="form-control mt-2">
        <label class="label">
            <span class="label-text">Password</span>
        </label>
        <input type="password" name="password" placeholder="Password" class="input input-bordered" required />
    </div>
    <div class="form-control mt-2">
        <label class="label">
            <span class="label-text">Confirm Password</span>
        </label>
        <input type="password" name="confirm_password" placeholder="Confirm Password" class="input input-bordered" required />
    </div>

    <div class="modal-action ">
        <button type="submit" class="btn bg-blue-500 w-full mt-2 text-white">Register</button>
    </div>
</form>

