<input type="checkbox" id="post-modal" class="modal-toggle" />
<div class="modal">
    <div class="modal-box">
        <div class="flex justify-between items-center">
            <!-- Modal Header -->
            <h2 class="font-bold text-lg flex-grow">Create a Post</h2>

            <!-- Close button (X icon) -->
            <label for="post-modal" class="btn btn-sm btn-circle">✕</label>
        </div>
        <!-- Modal Form -->
        <form>
            <div class="form-control mb-4">
                <label for="header" class="label">
                    <span class="label-text">Title</span>
                </label>
                <input type="text" id="title" placeholder="Enter the post title" class="input input-bordered w-full" required />
            </div>

            <div class="form-control mb-4">
                <label for="content" class="label">
                    <span class="label-text">Content</span>
                </label>
                <textarea id="content" placeholder="Enter the main content" class="textarea textarea-bordered w-full resize-none" rows="5" required></textarea>
            </div>

            <div class="form-control mb-4">
                <label for="image" class="label">
                    <span class="label-text bg">Upload Image</span>
                </label>
                <input type="file" id="image" class="file-input file-input-bordered w-full" accept="image/*" />
            </div>

            <!-- Submit Button -->
            <div class="modal-action">
                <button type="submit" class="btn bg-blue-500 hover:bg-blue-600 text-white mt-4">Submit</button>
            </div>
        </form>
    </div>
</div>
