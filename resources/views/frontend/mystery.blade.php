@include('frontend.include.header')
@include('frontend.include.nav')

  <div class="container">
   <div >
     <h4 class="m_4 mt-5">Mystery Box</h4>
     @foreach($products as $product)
     <div class="row">
       <div class="col-md-8">
         <div class="view view-ninth"><a href="single.html">
                   <img  src="{{ asset('storage/images/'.$product->image)}}" class="img-responsive" style="height:600px;width:800px" alt="Image"/>
                   <div class="mask mask-1"> </div>
                   <div class="mask mask-2"> </div>
                     <div class="content">
                       <h2>{{$product->name}}</h2>
                       <p>Shop a mystery box and experience the surprises in online shopping.</p>
                     </div>
                  </a> </div>
       </div>
       <div class="col-md-4" style="">

                <h4 class="m_4"><a href="#">Name: {{$product->name}}</a></h4>
                <p>Description: {{$product->description}}</p>
                <p class="m_5">Price:GH {{$product->price}}</p>
                <a href="{{ route('cart.add',$product->id) }}" class="card-link m_5">Add to Cart</a>

       </div>
     </div>
     @endforeach
   </div>


  </div>

@include('frontend.include.footer')
