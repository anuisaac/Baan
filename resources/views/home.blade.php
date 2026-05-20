<x-layout>

    <h1 class="heading-green mb-1 mt-5 pb-1 text-center">Welcome to Baan</h1>

    <p class="mb-4 text-center" 
       style="color: #e65f00; font:25px bold; font-family: 'Pacifico', cursive;">
    A Collection of Posts .....</p>

    @if( session('success') )
    
            <div class="alert alert-success alert-dismissable text-center w-25" role="alert">
                {{ session('success') }}
                <button class="close" onclick="this.parentElement.style.display='none'">&times;</button>
                
            </div>
    @endif
    <div class="container">

    <div class="row">
        
        @foreach( $posts as $post )
       
        <div class="col-4 bg-green2 border-green mb-3 mr-3 px-0">
            
            <a href="{{ route( 'view.post', $post->id ) }}" style="text-decoration:none;">

                <h2 class="heading1 p-2"> {{ $post->title }} </h2> </a>
                @if( $post->created_at->gt(now()->subHours(24)) )
                    <span class="badge new-sticker" >New</span>

                @endif

                <div class="tHeading float-right mb-2 w-100">
                <a href="{{ route('edit.post', $post->id  ) }}"
                   class="btn-update float-right ml-1 mr-1 px-1 py-1" style="text-decoration:none;">
                   Update
                </a>
                <form action="{{ route('delete.post', $post->id  ) }}" method="POST">
                        <!--// { //-->
                        
                        @csrf 
                    @method('DELETE')
                    
                    <button type="submit" class="delete float-right px-1 pb-1" 
                            onclick="confirm('Are you sure you want to delete this post?')">
                        Delete</a>
                    </button>
                
                </form>  
            </div> 
            
           
            <p class="px-2 py-2 text-justify" >
                 @php
                 $content=$post->content;
                      if(strlen($post->content) > 190)   {
                      $content = substr( $post->content, 0, 190 );
                      echo $content." ..... 
                      <a href='/posts/view/$post->id' style='color:#e65f00;'>read more</a>";   }
                        
                                       
                 else echo $content;
                  @endphp  
                </p>

          
        </div>

        @endforeach   
        <br>
        
        
        
    </div> <!-- end of row -->
    {{ $posts->links() }}

    </div> <!-- end of container -->
    
</x-layout>    
<script>
    function confirmDelete($id){

        document.getElementById('confirm-delete').style.display = "block";
       
    }
    function handleConfirm(answer) {
  document.getElementById('customConfirm').style.display = 'none';
  if (answer) {
    alert("You clicked OK!");
  } else {
    alert("You clicked Cancel!");
  }
}
</script>