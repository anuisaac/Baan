<x-layout>

    <div class="container">

        <div  class="col-10 bg-purple mx-auto py-2" >  

        <form action="{{ route( 'update.post', $post->id ) }}" method="post" class="w-75 mx-auto">

            <h2 class="heading-purple mt-2 pb-2">Edit your Post</h2>

            @csrf 
            @method('PUT')

            <label name="title" class="flabel font-14" for="title">Title </label> 
            <input type="text" name="title" class="clr-grey finputs font-14 mb-1 p-1 w-75" 
                   value="{{ $post->title }}" />   <br>
            
            <label name="content" class="flabel font-14" for="content">Content </label>  
            <textarea name="content" class="clr-grey finputs font-14 p-1 w-75" style="height:150px;">{{ $post->content }}</textarea><br>
            
            <input type="submit" name="updte" class="button-orange float-right p-2" value="Update Post"/>
            <br>
            <span style="color:#4c1d95;">{{ session('success')}}</span>
            @if(session('success'))
                <a href="{{ route('view.post', $post->id) }}">View Post</a>
            @endif
        </form>

        </div>

    </div>

</x-layout>