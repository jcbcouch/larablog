<x-layout>       
<div class="content-section">
    <form method="POST" action="/blogs">
        @csrf
        <fieldset class="form-group">
            <legend class="border-bottom mb-4">New Post</legend>
            <div class="form-group">
                <label class="form-control-label" for="title">Title</label>
                
                    <input class="form-control form-control-lg" id="title" name="title" required type="text" value="">
                
            </div>
            <div class="form-group">
                <label class="form-control-label" for="content">Content</label>
                
                    <textarea class="form-control form-control-lg" id="body" name="body" required>
</textarea>
                
            </div>
        </fieldset>
        <div class="form-group">
            <input class="btn btn-outline-info" id="submit" name="submit" type="submit" value="Post">
        </div>
    </form>
</div>

        </div>
    </x-layout>
        