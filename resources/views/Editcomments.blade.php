<Center>
    <h3> Edit comment </h3>
    <form action="{{ route('comments.update',$comment->id) }}" method="POST">
        @csrf
        @method("PUT")
        <input type="text" name="p_id"  value="{{$comment->p_id}}" > <br><br>
        <input type="text" name="comments" value="{{$comment->comments}}" > <br><br>
        <button type="submit"> Submit</button>
    
    </form>
    </Center>