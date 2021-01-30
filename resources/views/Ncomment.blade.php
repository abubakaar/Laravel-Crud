<Center>
    <h3> ADD Comment </h3>
    <form action="{{ route('comments.store') }}" method="POST">
        @csrf
        <input type="text" name="p_id" value="{{$p_id}}"><br>
        <input type="text" name="comments"  placeholder="Add Comments here " > <br><br>
        <button type="submit"> Submit</button>
    
    </form>
    </Center>