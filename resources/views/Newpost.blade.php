<Center>
    <h3> ADD Post </h3>
    <form action="{{ route('post.store') }}" method="POST">
        @csrf
    
        <input type="text" name="slug"  placeholder="Add slug" > <br><br>
        <input type="text" name="post" placeholder="Add post"> <br><br>
        <button type="submit"> Submit</button>
    
    </form>
    </Center>