<div class="container pt-5">
    <div class="row">
        <div class="col-4">
            @component('components.card.card',
                [
                    'image' => 'https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg',
                    'title' => 'Title 1',
                    'description' => 'Desc 1',
                ]
            )
            @endcomponent
        </div>
        <div class="col-4">
            @component('components.card.card',
                [
                    'image' => 'https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg',
                    'title' => 'Title 2',
                    'description' => 'Desc 2',
                ]
            )
            @endcomponent
        </div>
        <div class="col-4">
            @component('components.card.card',
                [
                    'image' => 'https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg',
                    'title' => 'Title 3',
                    'description' => 'Desc 3',
                ]
            )
            @endcomponent
        </div>
    </div>
</div>
