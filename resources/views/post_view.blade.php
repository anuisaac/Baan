<x-layout>
    @php 

    $date = \Carbon\Carbon::parse($post->created_at )->format(' d M Y, l'); 
    @endphp

    <div class="container">

        <div class="bg-purple p-2" >

            <h2 class="heading-purple mt-3 text-center">{{ $post->title }}</h2>
            <p class="float-right px-2" style="color:#4c1d95;"><strong>{{ $date }}</strong></p><br>
            <p class="font-14 lheight-16 mt-3">{{ $post->content }}</p>

        </div>

    </div>
    
</x-layout>