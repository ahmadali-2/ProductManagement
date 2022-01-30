@extends('admin.panel.admin_panel')
@section('admin')

<div class="col-lg-10">
<div class="card card-default">
    <div class="card-header card-header-border-bottom">
        <h2>WhyShop Cards</h2>
    </div>

    <div class="card-header card-header-border-bottom">
        <a href="{{route('showWhyForm')}}" class="btn btn-info" style="align-content: center; color: white;">Create Why Shop Card</a>
    </div>

    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">WhyShop Heading</th>
                    <th scope="col">WhyShop Description</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($whies as $why)
                    <tr>
                        <td>{{$why->why_heading}}</td>
                        <td>{{$why->why_description}}</td>
                        <td>
                            <a href="{{url('dashboard/showAllWhies/edit/'.$why->id)}}" class="btn btn-info" ><i class="fas fa-edit" style="color: white;"></i></a>
                            <a href="{{url('dashboard/showAllWhies/delete/'.$why->id)}}" class="btn btn-danger"><i class="fas fa-trash-alt" style="color: white;"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{$whies->links('pagination::bootstrap-4')}}
    </div>
</div>
</div>
@endsection