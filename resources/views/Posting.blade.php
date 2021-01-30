<Center>

<h3> Post Something</h3>
<form action="{{ route('post.update',$post->id) }}" method="POST">
    @csrf
    @method("PUT")
    <input type="text" name="slug"  value="{{$post->slug}}" > <br><br>
    <input type="text" name="post" value="{{$post->post}}"> <br><br>
    <button type="submit"> Submit</button>

</form>

</Center>
