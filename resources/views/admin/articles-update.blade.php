@extends('layouts.admin-master')
@section('contents')
@include('layouts.messages')
<!-- Tab links -->
<div class="update-container">
    <div class="tab">
        <button class="tablinks" onclick="openTab(event, 'Desc')" id="defaultOpen">Description</button>
        <button class="tablinks" onclick="openTab(event, 'Slug&title&category')">Slug&Title&Category</button>
        <button class="tablinks" onclick="openTab(event, 'Body')">Body</button>
        <button class="tablinks" onclick="openTab(event, 'ImagesUpload')">ImagesUpload</button>
        <button class="tablinks" onclick="openTab(event, 'Images')">Images</button>

    </div>
    <form action="{{route('artupdate',$article->id)}}" method="POST">
      @csrf
      @method('put')
  <!-- Tab content -->
  <div id="Desc" class="tabcontent">
    
        <label for="body">Article Description:</label>
        <textarea style="resize:none;"name="description" id="1" cols="5" rows="5" class='form-control'>{{$article->description}}</textarea>
  </div>
  
  <div id="Slug&title&category" class="tabcontent">
            <label for="title">Title:</label>
            <input class="form-control" type='text' name='title' value="{{$article->title}}">
            <label for="slug">Slug:</label>
            <input class="form-control" type='text' name='slug' value="{{$article->slug}}">
            <div class="categor">
              <label for="categories">Select Category:</label>
              <select name="categories_id" id="categories">
                @foreach($categories as $cat)
                <option value={{$cat->id}}>{{$cat->name}}</option>
                @endforeach
              </select>
            </div>
  </div>
  
  <div id="Body" class="tabcontent">
        <label for="body">Article Body:</label>
        <textarea style="resize:none;"name="body" id="1" cols="30" rows="10" class='form-control'>{{$article->body}}</textarea>
  </div>
  <div class="my-button">
    <button class="btn btn-success" type="submit">Submit</button>
    </form>
  <div id="ImagesUpload" class="tabcontent">
    @include('layouts.upload')
  </div>
  <div id="Images" class="tabcontent">
      @foreach ($article->artimages()->get() as $image)
      <div class="thumb-container">
      <img class="thumbnail" src="/images/{{$image->name}}" width="136px" height="100px">
        <div class="thum-opt">
          <h6>Url: <b>/images/{{$image->name}}</b></h6>
          <form action="{{route('thumbnail',$image->articles_id)}}" method="POST">
            @csrf
            @method('put')
            <input type="hidden" value="{{$image->articles_id}}" name="articles_id">
            <input type="hidden" value="{{$image->name}}" name="thumbnail">
            <button class="btn btn-danger" type="submit" >Set Thumbnail</button>
          </form>
        @if ($image->flag==0)
        <img id="thumbnail" class="thumbnail-but" src="/images/Daco_4128718.png" width="15px">
        @else 
        <img id="thumbnail" class="thumbnail-but" src="/images/211716_circle_filled_icon.png" width="15px">
        @endif
        </div>
      </div>
    @endforeach
</div>
@endsection