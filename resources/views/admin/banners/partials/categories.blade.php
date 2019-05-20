@foreach ($categories as $category)

    <option value="{{$category->id ?? ""}}"

            @isset($inst->id)

                @foreach ($inst->categories as $category_banner)

                    @if ($category->id == $category_banner->id)
                        selected="selected"
                    @endif

                @endforeach

            @endisset

    >
        {!! $delimiter ?? "" !!}{{$category->title ?? ""}}
    </option>

    @if (count($category->children) > 0)

        @include('admin.banners.partials.categories', [
          'categories' => $category->children,
          'delimiter'  => ' - ' . $delimiter
        ])

    @endif
@endforeach
