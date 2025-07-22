<ul>
    @foreach($categories as $category)
         <li>{{$category->name }}</li>
         <li>{{$category->slug }}</li>
    @endforeach
</ul>