@csrf
<label>
    Project Title<br>
    <input type="text" name="title" value="{{ old('title', $project->title) }}">
</label>
<br>
<label>
    Project Url<br>
    <input type="text" name="url" value="{{ old('url', $project->url) }}">
</label>
<br>
<label>
    Project Description<br>
    <textarea type="text" name="description">{{ old('description', $project->description) }}</textarea>
</label>
<br>
<button>{{ $btnText }}</button>
