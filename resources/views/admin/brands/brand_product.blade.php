<x-app-layout>
<body>
    <div class="py-12">
        <div class="row">
        <table class="table table-hover" style="margin-right: 10px; margin-left: 20px;">
            <colgroup>
            <col span="1" style="width: 10%;">
            <col span="1" style="width: 15%;">
            <col span="1" style="width: 15%;">
            <col span="1" style="width: 20%;">
            <col span="1" style="width: 20%;">
            <col span="1" style="width: 20%;">
            </colgroup>
            <thead>
                <tr">
                <th scope="col">ID</th>
                <th scope="col">Image</th>
                <th scope="col">Name</th>
                <th scope="col">Stock</th>
                <th scope="col">Price</th>
                <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
            @if(is_countable($brandProducts))
                @foreach($brandProducts as $product)
                    <tr>
                        <td><strong>{{$product->id}}</strong></td>
                        <td><img src="{{asset("$product->product_logo")}}" width="100px" height="100px" alt="No Image"></td>
                        <td>{{$product->product_name}}</td>
                        <td><b>{{$product->product_stock}}</b> <i> Pieces</i></td>
                        <td><b>${{$product->product_price}}</b> <i> Per / Piece</i></td>
                        <td>
                            <a href="{{url('dashboard/showAllProducts/edit/'.$product->id)}}" class="btn btn-info" ><i class="fas fa-edit" style="color: white;"></i></a>
                            <a href="{{url('dashboard/showAllProducts/delete/'.$product->id)}}" class="btn btn-danger"><i class="fas fa-trash-alt" style="color: white;"></i></a>
                        </td>
                    </tr>
                @endforeach
            @endif
            </tbody>
            </table>
            @if(is_countable($brandProducts))
                {{$brandProducts->links()}}
            @endif
        </div>
    </div>
    </div>
</body>
</x-app-layout>
