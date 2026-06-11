<x-layout>

    <section class="welcome">

        <h1>Welcome to Baan</h1>  

        <p>
        A Collection of Posts .....
        </p>
        
    </section>
   
    <div class="container">

    <div class="row mt-2">
        
        @foreach( $posts as $post )
       
        <div class="col-4 post-card mb-3 mr-3 px-0">
            <div class="post-header float-right mb-2 w-100">

                    <a href="{{ route( 'view.post', $post->id ) }}" 
                    style="color:white;text-decoration:none;">
                        <h2 class="post-heading p-2"> {{ $post->title }} </a>
                        @if($post->created_at->gt(now()->subDays(3)))
                            <span class="new-badge">NEW</span>
                        @endif
                        </h2> 
                    
                    
                        <div class="card-actions">
                        <a href="{{ route('edit.post', $post->id  ) }}">
                            <button class="btn-update">Update</button>
                        </a>
                        <form action="{{ route('delete.post', $post->id  ) }}" method="POST">
                            @csrf 
                            @method('DELETE')
                            <button type="submit" class="btn-delete"  
                                onclick="confirm('Are you sure you want to delete this post?')">
                                Delete
                            </button>
                        </form>  
                        </div><!--end of card actions-->
                
                    
                    
                    
                
                </div><!--end of post-header--> 
            
           
            <div class="post-content text-justify" >
                 @php
                 $content=$post->content;
                      if(strlen($post->content) > 190)   {
                      $content = substr( $post->content, 0, 140 );
                      echo $content." ..... 
                      <a href='/posts/view/$post->id' style='color: #d97706;'>read more</a>";   }
                        
                                       
                 else echo $content;
                  @endphp  
                      </div><!--end of post-content-->

          
        </div><!--end of post-card-->

        @endforeach   
        <br>
        
        
        
    </div> <!-- end of row -->
    {{ $posts->links() }}

    </div> <!-- end of container -->
    
</x-layout>    
