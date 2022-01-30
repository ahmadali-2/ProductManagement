@extends('admin.panel.admin_panel')
@section('admin')
<div class="col-lg-10">
<div class="card card-default">
    <div class="card-header card-header-border-bottom">
        <h2>Subscribe Section</h2>
    </div>

    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Heading</th>
                    <th scope="col">Description</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td>{{$subscribe->subs_heading}}</td>
                        <td>{{$subscribe->subs_description}}</td>
                        <td>
                            <a href="{{url('dashboard/showAllSubscribes/edit/'.$subscribe->id)}}" class="btn btn-info" ><i class="fas fa-edit" style="color: white;"></i></a>
                        </td>
                    </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
@endsection