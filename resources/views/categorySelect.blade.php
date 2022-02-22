{{-- @if (count($categories) >= 1)
@foreach($categories as $cat)
@foreach ($cat->Articles as $article)
{{$article->title}}
@endforeach
@endforeach
@else
{{"i have no records"}}
@endif --}}
{{-- @isset($categories)
{{"prob"}}
@endisset  --}}
{{-- @if (empty($categories))
    {{"prob"}}
    @else
    {{"noprob"}}
@endif --}}
{{-- @foreach($categories as $cat) --}}
       {{-- @foreach ($cat->Articles as $article)
            @isset ($article)
                {{"nobrop"}}
                @else
                {{"prob"}}
                @endisset
         @endforeach --}}
{{-- @endforeach  --}}