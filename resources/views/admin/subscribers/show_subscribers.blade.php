@extends('admin.panel.admin_panel')
@section('admin')
<div class="col-lg-10">
<div class="card card-default">
    <div class="card-header card-header-border-bottom">
        <h2>Subscribers Section</h2>
    </div>

    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Subscribers</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                    @foreach($subscribers as $subscriber)
                        <tr>
                            <td>{{$subscriber->website_subscriber}}</td>
                            <td>
                                <a href="{{url('dashboard/showAllSubscribers/delete/'.$subscriber->id)}}" class="btn btn-danger" ><i class="fas fa-trash" style="color: white;"></i></a>
                            </td>
                        </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
@endsection