<center>
    <h3> {{$post->post}} </h3>
    <br> <h3> Comments </h3>
    <br>
    <table border="3" >   
     
    @foreach ($comments as $comment)
        <tr>
            <td> {{$comment->comments}} </td>
            <td>
                    <a href="{{route('comments.edit',$comment->id)}}"> Edit </a>
                    <br>
                   
                <form action="{{ route('comments.destroy',$comment->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" > Delete post </button>
                </form>
           </td>
        </tr>
     @endforeach
    </table>

    <br><br>
    <a href="{{route('comments.ANC',$post->id)}}"> Add New Comment </a>
    
    
    
    </center>