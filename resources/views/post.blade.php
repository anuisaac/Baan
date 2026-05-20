<x-layout>

    <div class="container">
        
        <div class="col-10 bg-green2 mx-auto py-2" > 

        <form action="/post" method="post" class="py-2 w-75 mx-auto">

            <h2 class="heading-green pb-2">Create a Post</h1>

            @csrf 

            <label name="title" class="flabel font-14" for="title">Title </label> 
            <input type="text" name="title" class="clr-grey finputs font-14 mb-2 p-1 w-75" />   <br>
            
            <label name="content" class="flabel font-14" for="content">Content </label>  
            <textarea name="content" class="clr-grey finputs font-14 p-1 w-75" 
                      style="height:150px;" ></textarea><br>
            
            <input type="submit" name="create" class="button-orange float-right p-2" value="Create Post"/>

        </form>      
        
        </div>

    </div>

</x-layout>