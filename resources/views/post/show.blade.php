@extends('main.headerFooter')
@section('content')



    <section class="w3l-services2">
        <div class="feature-16-main py-5">
            <div class="container py-lg-3">
                <div class="mb-3">
                    <table>
                    <tr>
                        <td style="vertical-align: top">

                            @foreach($photos as $photo)
                                @foreach($photo as $phot)
                                    <img style="width: 300px; height: 300px;"
                                         src="data:image/jpeg;base64, {{base64_encode($phot->url)}}"/>
                               @endforeach
                            @endforeach

                        </td>
                        <td style="vertical-align: top;">
                            <p > {{ $post->text }} </p>
                        </td>
                    </tr>
                    </table>
                </div>

                <div>
                    <form action="{{ route('post.delete', $post->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" class="btn btn-danger" value="Delete">
                    </form>
                </div>
                <div><a href="{{ route('post.edit', $post->id) }}" class="btn btn-warning">Изменить(администратор)</a></div>
                <div><a href="{{ route('post.index') }}" class="btn btn-secondary">Back</a></div>
            </div>
        </div>
    </section>


@endsection
