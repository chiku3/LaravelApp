<div class="table-responsive">
    <table class="table" id="posts-table">
        <thead>
        <tr>
            <th>User Name</th>
            <th>Title</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <td>{{ $post->user->name }}</td>
                <td>
                <a href="{{ route('posts.show', [$post->id]) }}">
                    {{ $post->title }}
                </td>
                <td width="120">
                    {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'delete']) !!}
                    <div>
                        <a href="{{ route('posts.edit', [$post->id]) }}"
                        class='btn btn-default btn-xs mr-2'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
