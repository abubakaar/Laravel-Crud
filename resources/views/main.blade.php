<center>

<h3> Main Page </h3>
<table border="3" >
 <tr>
    <td> <center> ID </center></td>
    <td> <center> Slug </center></td>
    <td> <center> Post </center></td>
    <td> <center> Actions </center></td>
</tr>   
 
@foreach ($posts as $post)
    <tr>
        <td><center>  {{$post->id}} </center></td>
        <td><center>  {{$post->slug}} </center></td>
        <td><center>  {{$post->post}} </center></td>
        <td>
              <center>  
                <a href="{{route('comments.show',$post->id)}}"> View </a>
                <br>
                <a href="{{route('post.edit',$post->id)}}"> Edit </a>
                <br>
              </center>
             <form action="{{ route('post.destroy',$post->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" > Delete post </button>
            </form>

       </td>
    </tr>
 @endforeach

 <a href="{{route('post.create')}}"> Add New Post </a>
                
</table>



</center>