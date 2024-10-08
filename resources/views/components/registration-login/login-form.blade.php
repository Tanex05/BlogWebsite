<form action="/login" method="POST">
    @csrf
    <div class="text-center">
        <span class="font-bold text-lg">Sign In</span>
        <p>We only allow fake issues to be posted. Spread the word!
        </p>
    </div>
    <div class="flex flex-col mb-2">
        <label class="label text-lg">
            <span class="label-text">Username</span>
        </label>
        <input class="input input-bordered" type="text" placeholder="Username">
    </div>
    <div class="flex flex-col mb-4">
        <label class="label">
            <span class="label-text">Password</span>
        </label>
        <input class="input input-bordered" type="text" placeholder="Password">
    </div>
    <button class="btn w-full bg-blue-500 hover:bg-blue-600 text-white">Login</button>
</form>
