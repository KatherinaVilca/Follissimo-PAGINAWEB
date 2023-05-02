@section('content') 
<div class="container">
    <h1> Producto seleccionado </h1>
    
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="..." class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                         <h5 class="card-title"> {{&product->nombre}}</h5>
                         <p class="card-text"> {{ $product->tipo_categoria }} </p>
                         <p class="card-text"> {{ $product->precio }} </p>
                         <p class="card-text"> {{ $product->tipo_tamaño }} </p>
                         <p class="card-text"> {{ $product->color}} </p>
                         <p class="card-text"> {{ $product->descripcion }} </p>
                        
                    </div>
                 </div>
             </div>
         </div>

        </div>
</div>