@extends('layout')

@section('title', 'แก้ไขบทความ')

@section('content')

<h1 class="text-center py-3">แก้ไขบทความ</h1>
<form method="post" action="{{ route('update', $blog->id) }}">
    @csrf
    <div class="form-group">
        <label for="title" class="form-label">ชื่อบทความ</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ $blog->title }}">
    </div>
    @error('title')
        <p class="text-danger">{{ $message }}</p>
    @enderror

    <div class="form-group">
        <label for="content" class="form-label">เนื้อหา</label>
        <textarea name="content" class="form-control" cols="30" rows="5">{{ $blog->content }}</textarea>
    </div>
    @error('content')
        <p class="text-danger">{{ $message }}</p>
    @enderror

    <input type="submit" value="อัปเดต" class="btn btn-primary">
    <a href="/blogs" class="btn btn-secondary">บทความทั้งหมด</a>
</form>
@endsection
